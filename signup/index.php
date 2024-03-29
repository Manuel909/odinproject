<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-up Form</title>
  <link rel="stylesheet" href="./signup.css">
  <link rel="icon" href="./pflanze.jpg">
  <script src="./Button.js" defer></script>
</head>
<body>
  <div class="container">
    <div class="visuals">
      <div class="logo">
        <img class="icon" src="./pflanze.jpg" alt="Icon" height="900" width="700">
        <div class="logo-text">Odin</div>
      </div>
    </div>
    <div class="content">
      <div class="header">
        <p>This is not a real online service!  Do you ever find yourself wondering 
          what life would have been like if you had chased your childhood dreams? 
          Now is the time to make those dreams a reality.</p>
        <p><em>Sign up now</em> to get started!</p>
        <p id="isolated-text">Your journey begins below.</p>
      </div>
      <div class="sign-up">
        <p>Let's do this!</p>
        <form action="" method="post" class="forms" autocomplete="off">
          <div class="input">
            <label for="first_name">FIRST NAME <span class="red">*</span></label>
            <input type="text" id="first_name" name="firstName" required>
          </div>
          <div class="input">
            <label for="last_name">LAST NAME <span class="red">*</span></label>
            <input type="text" id="last_name" name="lastName" required>
          </div>
          <div class="input">
            <label for="user_email">EMAIL <span class="red">*</span></label>
            <input type="email" id="user_email" name="email" required 
                oninvalid="this.setCustomValidity('Please enter a valid email address')"
                oninput="this.setCustomValidity('')">
          </div>
          <div class="input">
            <label for="user_phone">PHONE NUMBER</label>
            <input type="tel" id="user_phone" name="phone" 
                pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" 
                oninvalid="this.setCustomValidity('Please enter a valid phone number')"
                oninput="this.setCustomValidity('')">
          </div>
          <div class="input">
            <label for="user_password">PASSWORD <span id="pword" class="red">*</span></label>
            <input type="password" id="user_password" name="password" required    
                minlength="8">
            <p id="passwordReq" class="hidden">*Minimum 8 characters</p>
          </div>
          <div class="input">
            <label for="confirm_password">CONFIRM PASSWORD <span class="red">*</span></label>
            <input type="password" id="confirm_password" name="confirmPassword" required>
            <p id="confirmPass" class="hidden">*Passwords must match</p>
          </div>
          <button type="submit" class="hidden" id="hiddenBtn"></button>
        </form>
      </div>
      <div class="bottom">
        <button type="button" class="submitButton">Create Account</button>
        <p>Already have an account? <span class="orange">Log In</span></p>
      </div>
    </div>
  </div>
</body>
</html>
