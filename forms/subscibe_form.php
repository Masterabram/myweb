

<!-- AUTHOR : Abraham Mcogol -->

<?php
require '../config/config.php';

if (isset($_POST['submit']))
{
  $email = trim($_POST['email']);
  $error = FALSE;

  $sql = "SELECT * FROM tbl_subscribe WHERE email = :email ";
  $stmt = $DB->prepare($sql);
  $stmt->bindValue(":email", $email);
  $stmt->execute();
  $result = $stmt->rowCount();


  if (!$result) {
    $sql = "INSERT INTO `tbl_subscribe` (`email`) VALUES "
            . "(:email)";

    try {
      $stmt = $DB->prepare($sql);

      // bind the value
      $stmt->bindValue(":email", $email);

      // execute Query
      $stmt->execute();
      $result = $stmt->rowCount();
      if ($result > 0) {
        $_SESSION["errorType"] = "primary";
        $_SESSION["errorMsg"] = "You have subscribed successfully.";
      } else {
        $_SESSION["errorType"] = "danger";
        $_SESSION["errorMsg"] = "Failed to subcribe";
      }
    } catch (Exception $ex) {

      $_SESSION["errorType"] = "danger";
      $_SESSION["errorMsg"] = $ex->getMessage();
    }
  } else {
    $_SESSION["errorType"] = "warning";
    $_SESSION["errorMsg"] = "You have already subscribed.";
  }

  header("location:../index.php");
}

?>