<?php
class Admin{
  private $conn;

  public function __construct(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "fulo_oop";

    $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass, $dbname);
    if(!$this->conn){
      echo "Error connecting to database";
      die();
    }
  }

  function adminLogin($data) {
    $admin_email = $data['admin_email'];
    $admin_password = md5($data['admin_password']);

    $query = "SELECT * FROM `admin_panel` WHERE `admin_email`= '$admin_email' AND `admin_password`= '$admin_password'";

    if(mysqli_query($this->conn, $query)){
      $result = mysqli_query($this->conn, $query);
      $admin_details = mysqli_fetch_assoc($result);
      if($admin_details){
        header("location: dashboard.php");
        session_start();
        $_SESSION['admin_id'] = $admin_details['id'];
        $_SESSION['admin_email'] = $admin_details['admin_email'];
      }else{
        echo "wrong email or password";
      }
    }
  }

  function admin_Logout() {
    session_destroy();
    header("location: index.php");
  }

  
}


// function adminLogout(){
//   session_destroy();
//   header("location: index.php");
// }