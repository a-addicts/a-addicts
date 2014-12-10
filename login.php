<?php
session_start();

include_once('includes/header.php');
include_once 'includes/navigation.php';
?>
<div id = "container">
  <div id ="logIn">
    <form id = "logInForm" name = "logInForm" method = "post" action = "#">
      <fieldset>
        <legend>Log In Form</legend>
        <input type = "text" name = "username" placeholder = "Enter your username or email">
        <input type = "password" name = "password" placeholder = "Enter your password...">
        <input type = "submit" name = "submit" value = "Log In" id = "submitLogIn">
        <p>Not yet signed up? Then sign up for FREE <a href = "signup.php">here</a>!</p>
      <?php
      if (isset($_SESSION['error']['0']))
      {
        echo "<ul class = 'error'>
        <li>" . $_SESSION['error']['0'] . "</li>
        <li>The validation is not yet ready!</li>
        </ul>";
      }
      ?>
      </fieldset>
    </form>
  </div>
</div>
<?php
include_once('includes/footer.php');
?>
