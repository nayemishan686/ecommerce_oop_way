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

  function add_category($data){
    $ctgName = $data['ctgName'];
    $ctgDescription = $data['ctgDescription'];
    $ctgStatus = $data['ctgStatus'];

    $query = "INSERT INTO `product_category`(`ctg_name`, `ctg_descrip`, `ctg_status`) VALUES ('$ctgName','$ctgDescription','$ctgStatus')";

    if(mysqli_query($this->conn, $query)){
      $msg =  "Product Category Added Successfully";
      return $msg;
    }else{
      $msg =  "Product Category can't added";
      return $msg;
    }
  }


  function displayCategory(){
    $query = "SELECT * FROM product_category";
    if(mysqli_query($this->conn, $query)){
      $displayCategoryMsg = mysqli_query($this->conn, $query);
      return $displayCategoryMsg;
    }
  }


  function add_admin($datam){
    $adminName = $datam['adminName'];
    $adminEmail = $datam['adminEmail'];
    $adminPassword = md5($datam['adminPass']);

    $query = "INSERT INTO `admin_panel`(`admin_username`, `admin_email`, `admin_password`) VALUES ('$adminName','$adminEmail','$adminPassword')";

    if(mysqli_query($this->conn, $query)){
      $admin_msg = "User added successfully";
      return $admin_msg;
    }else{
      $admin_msg = "user can not be added";
      return $admin_msg;
    }
  }




  
}
