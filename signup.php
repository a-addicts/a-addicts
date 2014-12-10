<?php
  session_start();
  $_SESSION['error']['0'] = 'Incorrect e-mail';
  //$_SESSION['error']['0'];
  if (!isset($_SESSION['username'])) {
      $_SESSION['username'] = "guest";
  }
  include_once 'includes/header.php';
  include_once 'includes/navigation.php';
?>
  <div id = "container">
    <form id = "signUp" name = "signup" method = "post" action = "#">
      <fieldset>
        <legend>Signup Form</legend>
        <input type = "text" name = "username" placeholder = "Enter a username...">
        <input type = "email" name = "email" placeholder = "Email...">
        <input type = "password" name = "password" placeholder = "Enter a password...">
        <input type = "password" name = "confirmPass" placeholder = "Re-enter password">
        <input type = "submit" name = "submit" value = "Sign Up" id = "submitSignUp">
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
<?php
  include_once 'includes/footer.php';
?>
