<div class="overlay-page">
  <div class="overlay-background"></div>
  <form id="sign-in-form">
    <a href="/"><div class="logo-copy"></div></a>
    <br>
    <div class="login-error-message" id="login-error-message"></div>
    <input placeholder="Email Address" type="email" name="sign-in-email" id="sign-in-email" autocomplete="off" required />
    <input placeholder="Password" type="password" name="sign-in-password" id="sign-in-password" autocomplete="off" required />
    <input type="submit" name="sign-in-submit" id="sign-in-submit" value="LOGIN">
    <p>Dont have an account yet?</p>
    <a class="sign-up-btn" href="javascript:void(0)">SIGN UP</a>
  </form>

  <form id="sign-up-form">
    <div class="logo-copy"></div>
    <br>
    <div class="register-error-message" id="register-error-message"></div>
    <p>Get started.</p>
    <input placeholder="Name" type="text" name="sign-up-name" id="sign-up-name" 
           oninvalid="this.setCustomValidity('Username cannot be empty, only letters and space allowed.')" 
           onchange="this.setCustomValidity('')" pattern="[a-zA-Z\s]{6,64}" required />
    <input placeholder="Phone" type="text" name="sign-up-phone" id="sign-up-phone" pattern="[0-9\+]{6,20}" required />
    <input placeholder="Email Address" type="email" name="sign-up-email" id="sign-up-email" autocomplete="off" required />
    <input placeholder="Password" type="password" name="sign-up-password" id="sign-up-password" 
           onchange="form.sing-up-password-confirmation.pattern = this.value;"
           pattern="[\w+\d\s]{6,20}" autocomplete="off" required />
    <input placeholder="Password Confirmation" type="password" name="sign-up-password-confirmation" id="sign-up-password-confirmation" pattern="[\w+\d\s]{6,20}" autocomplete="off" required />
    <input type="submit" name="sign-up-submit" id="sign-up-submit" value="SIGN UP">
  </form>

  <form id="edit-form">
    <div class="edit-error-message" id="edit-error-message"></div>
    <br>
    <input placeholder="Name" type="text" name="edit-name" id="edit-name" 
           oninvalid="this.setCustomValidity('Username cannot be empty, only letters and space allowed.')" 
           onchange="this.setCustomValidity('')" pattern="[a-zA-Z\s]{6,64}" value="<?php echo $_SESSION['user_name'] ;?>" required />
    <input placeholder="Phone" type="text" name="edit-phone" id="edit-phone" pattern="[0-9\+]{6,20}" value="<?php echo $_SESSION['user_phone'] ;?>" required />
    <input placeholder="Email Address" type="email" name="edit-email" id="edit-email" autocomplete="off" value="<?php echo $_SESSION['user_email'] ;?>" required />
    <input type="submit" name="edit-submit" id="edit-submit" value="UPDATE">
  </form>

  <form id="edit-password-form">
    <div class="edit-password-error-message" id="edit-password-error-message"></div>
    <br>
    <input placeholder="Old Password" type="password" name="edit-old-password" id="edit-old-password" 
           onchange="form.sing-up-password-confirmation.pattern = this.value;"
           pattern="[\w+\d\s]{6,20}" autocomplete="off" required />
    <input placeholder="New Password" type="password" name="edit-new-password" id="edit-new-password" 
           onchange="form.edit-confirmation-password.pattern = this.value;"
           pattern="[\w+\d\s]{6,20}" autocomplete="off" required />
    <input placeholder="Password Confirmation" type="password" name="edit-confirmation-password" id="edit-confirmation-password" 
           pattern="[\w+\d\s]{6,20}" autocomplete="off" required />
   <input type="submit" name="edit-password-submit" id="edit-password-submit" value="UPDATE">
  </form>

<iframe id="the-map" src="../system/layout/map.html" frameborder="0"></iframe>

</div>