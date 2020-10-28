<?php 

    include_once 'account.php';

    class User implements Account{
        private $fullname;
        private $email;
        private $city;
        private $password;
        private $newpassword;
        private $confirmPass;

        public function __construct(){
            $this->fullname = "";
            $this->email = "";
            $this->city = "";
            $this->password = "";
            $this->newpassword = "";
            $this->confirmPass = "";
        }
        public function setFullName($userName){
            return $this->fullname = $userName;
        }
        public function getFullName(){
            return $this->fullname;
        }
        public function setCity($userCity){
            return $this->city = $userCity;
        }
        public function getCity(){
            return $this->city;
        }
        public function setNewPassword($userPassword){
            return $this->newpassword = $userPassword;
        }
        public function getNewPassword(){
            return $this->newpassword;
        }
        public function setUserPass($userPass){
            return $this->password = $userPass;
        }
        public function getUserPass(){
            return $this->password;
        }
        public function getConfPass(){
            return $this->confirmPass;
        }
        public function setConfPass($userConfPass){
            return $this->confirmPass = $userConfPass;
        }
        public function setUserEmail($userEmail){
            return $this->email = $userEmail;
        }   
        public function getUserEmail(){
            return $this->email;
        }      
        public function register($pdo){
            $passwordHash = password_hash($this->password,PASSWORD_DEFAULT);
            try {
                $stmt = $pdo->prepare ('INSERT INTO users (fullname,email,city,password) VALUES(?,?,?,?)');
                $stmt->execute([$this->getFullName(),$this->getUserEmail(),$this->getCity(),$passwordHash]);
                return header('Location: /IAP Lab Assignment 1/loginsignup.php ');
            } catch (PDOException $e) {
            	return $e->getMessage();
            }     
        }
        public function changePassword($pdo){
            try
            {
                $stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");
                $stmt->execute([$this->email]);
                $row = $stmt->fetch();
                if (password_verify($this->password,$row['password']))
                    {
                        $hashedPassword = password_hash($this->getnewpassword(), PASSWORD_DEFAULT);
                        $stm = $pdo->prepare("UPDATE users SET password =  ? ");
                        $stm->execute([$hashedPassword]);
                        $stm = null;
                        return header('Location: /IAP Lab Assignment 1/profile.php ');
                    }
                    else
                    {
                        return header('Location: /IAP Lab Assignment 1/passwordchange.php ');
                    }
            }catch(PDOException $e)
            {
                return $ex->getMessage();
            }     
        }
        public function login($pdo){
            try{
                $stmt = $pdo->prepare("SELECT password FROM users WHERE email=?");
                $stmt->execute([$this->email]);
                $row = $stmt->fetch();
                if($row == null){
                    header('Location: /IAP Lab Assignment 1/loginsignup.php ');
                }
                if(password_verify($this->password, $row['password'])){
                    return header('Location: /IAP Lab Assignment 1/profile.php ');
                }
                else{
                    header('Location: /IAP Lab Assignment 1/loginsignup.php ');
                }

            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        public function logout($pdo){
            session_destroy();
        }
    }