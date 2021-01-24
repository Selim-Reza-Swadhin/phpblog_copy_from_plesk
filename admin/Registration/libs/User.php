<?php
include_once 'Registration/libs/Session.php';
include 'Registration/libs/Database.php';
/**
 * 
 */

class User{
    private $db;
   public function __construct(){
        $this->db = new Database();
    }
    

//Register Page Validation
 public function userRegistration($data){
    $name = $data['name'];
    $username = $data['username'];
    $email = $data['email'];
    $password = sha1(md5($data['password']));
    $details = $data['details'];
    $role = $data['role'];

    $chk_email = $this->emailCheck($email);


    if ($username == "" ||  $email == "" || $password == "") {
        $msg = "<div style='color: red''><strong>Error:</strong>Field must not be empty</div>";
        return $msg;
    }

    if (strlen($username) < 3) {
        $msg = "<div style='color: red'><strong>Error:</strong>User name is too short</div>";
        return $msg;

     }elseif (preg_match("/[^a-zA-Z0-9_-]+/i", $username)) {
        $msg = "<div style='color: red'><strong>Error:</strong>Username must be only alphanumerical, dashes and underscore</div>";

     }
    // else if (!preg_match("/[a-z]/", $username) || !preg_match("/[A-Z]/", $username) || !preg_match("/[0-9]/", $username)){
    // return "Username require 1 each of a-z, A-Z and 0-9<br>";
    // return "";
    // }

    // Email
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $msg = "<div style='color: red'><strong>Error:</strong>Email address is not valid</div>";
        return $msg;
    }

    if($chk_email == true){
        $msg = "<div style='color: red'><strong>Error:</strong>Email address already Exist</div>";
        return $msg;
    }

    // Password
    // if (filter_var($password, FILTER_VALIDATE_PASSWORD) === false) {
    //     $msg = "<div class='alert alert-danger'><strong>Error:</strong>Password is not valid</div>";
    //     return $msg;
    // }  

    // Insert Data
    $sql = "INSERT INTO tbl_user(name, username, email, password, details, role, status) VALUES(:name, :username, :email, :password, :details, :role, 'inactive')";

    $query = $this->db->pdo->prepare($sql);
    $query->bindValue(':name', $name);
    $query->bindValue(':username', $username);
    $query->bindValue(':email', $email);
    $query->bindValue(':password', $password);
    $query->bindValue(':details', $details);
    $query->bindValue(':role', $role);
    $result = $query->execute();

    if($result){
        $msg = "<div style='color: #000'><strong>Success:</strong>Thank you, You have been registered.<h4>Go Back And Login Please</h4></div>";
        // echo "<script>window.location='index.php';</script>";
        return $msg;
    }else{
        $msg = "<div style='color: red'><strong>Error:</strong>Sorry, there has been problem inserting your details.</div>";
        return $msg;
    }


}

// Email Check Validation
    public function emailCheck($email) {
        $sql = "SELECT email FROM tbl_user WHERE email = :email";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':email', $email);
        $query->execute();

        if($query->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    // getLoginUser
    public function getLoginUser($email, $password) {
        $sql = "SELECT * FROM tbl_user WHERE email = :email AND password = :password LIMIT 1";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':email', $email);
        $query->bindValue(':password', $password);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    // Login Validation
    public function userLogin($data) {
        $email = $data['email'];
        $password = md5($data['password']);
    
        $chk_email = $this->emailCheck($email);
    
    
        if ($email == "" || $password == "") {
            $msg = "<div style='color: red'><strong>Error:</strong>Failed must be not empty</div>";
            return $msg;
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $msg = "<div style='color: red'><strong>Error:</strong>Email address is not valid</div>";
            return $msg;
        }
    
        // if($chk_email == true){
        //     $msg = "<div class='alert alert-danger'><strong>Error:</strong>Email address already Exist</div>";
        //     return $msg;
        // }
        
        //made after
        if($chk_email == false){
            $msg = "<div style='color: red'><strong>Error:</strong>The Email address not Exist</div>";
            return $msg;
        }

        $result = $this->getLoginUser($email, $password);
        if ($result) {
            Session::init(); //class Session
            Session::set("login", true);
            Session::set("id", $result->id);
            Session::set("name", $result->name);
            Session::set("username", $result->username);
            Session::set("loginmsg", "<div class='alert alert-success'><strong>Success!</strong>You are LoggedIn</div>");
            header("Location: index.php");
        }else{
            $msg = "<div style='color: red'><strong>Error:</strong>Data not found</div>";
            return $msg;
        }
    
    }

    public function getUserData() {
        $sql = "SELECT * FROM tbl_user ORDER BY id DESC";
        $query = $this->db->pdo->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM tbl_user WHERE id = :id LIMIT 1";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':id', $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    //update User Data
    public function updateUserData($id, $data) {
        $name = $data['name'];
        $username = $data['username'];
        $email = $data['email'];
    
        if ($name == "" || $username == "" ||  $email == "") {
            $msg = "<div style='color: red'><strong>Error:</strong>Failed must be not empty</div>";
            return $msg;
        }
 
        // Insert Data
        $sql = "UPDATE tbl_user
                SET name = :name,
                    username = :username,
                    email = :email
                WHERE id = :id";
        $query = $this->db->pdo->prepare($sql);
        $query->bindValue(':name', $name);
        $query->bindValue(':username', $username);
        $query->bindValue(':email', $email);
        $query->bindValue(':id', $id);
        $result = $query->execute();
    
        if($result){
            $msg = "<div style='color: greenyellow'><strong>Success:</strong>User Data Update Successfully.</div>";
            return $msg;
        }else{
            $msg = "<div style='color: red'><strong>Error:</strong>Sorry, User Data Not Update Successfully.</div>";
            return $msg;
        }
    }



}
?>