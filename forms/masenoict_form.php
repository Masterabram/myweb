

<!-- AUTHOR : Abraham Mcogol -->

<?php
require '../config/config.php';

if (isset($_POST['submit']))
{

  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  $student = trim($_POST['student']);
  $sex = trim($_POST['sex']);
  $course = trim($_POST['course']);
  $error = FALSE;


  if (!$error) {
    $sql = "INSERT INTO `tbl_masenoict` (`name`, `email`, `phone`, `student`, `sex`, `course`) VALUES "
            . "( :name, :email, :phone, :student, :sex, :course)";

    try {
      $stmt = $DB->prepare($sql);

      // bind the values
      $stmt->bindValue(":name", $name);
      $stmt->bindValue(":email", $email);
      $stmt->bindValue(":phone", $phone);
      $stmt->bindValue(":student", $student);
	    $stmt->bindValue(":sex", $sex);
      $stmt->bindValue(":course", $course);

      // execute Query
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $_SESSION["errorType"] = "success";
        $_SESSION["errorMsg"] = "Hello, Thanks for signing up. I will get in touch.";
      } else {
        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = "Failed";
      }
    } catch (Exception $ex) {

      $_SESSION["errorType"] = "danger";
      $_SESSION["errorMsg"] = $ex->getMessage();
    }
  } else {
    $_SESSION["errorType"] = "danger";
    $_SESSION["errorMsg"] = "some problem Encoubtered.";
  }
  header("location:../index.php");

}

?>