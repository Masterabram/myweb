

<!-- AUTHOR : Abraham Mcogol -->

<?php
require '../config/config.php';

if (isset($_POST['submit']))
{

  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  $subject = trim($_POST['subject']);
  $msg = trim($_POST['msg']);
  $error = FALSE;


  if (!$error) {
    $sql = "INSERT INTO `tbl_contact` (`name`, `email`, `phone`, `subject`, `msg`) VALUES "
            . "( :name, :email, :phone, :subject, :msg)";

    try {
      $stmt = $DB->prepare($sql);

      // bind the values
      $stmt->bindValue(":name", $name);
      $stmt->bindValue(":email", $email);
      $stmt->bindValue(":phone", $phone);
      $stmt->bindValue(":subject", $subject);
	  $stmt->bindValue(":msg", $msg);

      // execute Query
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $_SESSION["errorType"] = "success";
        $_SESSION["errorMsg"] = "Thank you I will get in touch.";
      } else {
        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = "Failed to add contact.";
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