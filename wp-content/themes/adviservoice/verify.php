<?php
  require_once('captcha/recaptchalib.php');
  $privatekey = "6LdsN78SAAAAAHyk7fuuy7dHp3PAOgcDYiK2uAKg";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
	?> <p>well done!</p> <?php
  }
  ?>