<div class="overlay-page">
	<div class="overlay-background"></div>
	<form id="sign-in-form">
		<a href="/"><div class="logo-copy"></div></a>
		<p>Sign in</p>
		<input placeholder="Email Address" type="email" name="sign-in-email" id="sign-in-email" autocomplete="off" required />
		<input placeholder="Password" type="password" name="sign-in-password" id="sign-in-password" autocomplete="off" required />
		<input type="submit" name="sign-in-submit" id="sign-in-submit" value="Login">
		<p>Don't have an account yet?</p>
		<a class="sign-up-btn" href="javascript:void(0)">Sign up</a>
	</form>

<!-- show registration form, but only if we didn't submit already -->
<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>	
	<form id="sign-up-form">
		<div class="logo-copy"></div>
		<div class="error-message" id="error-message"></div>
		<p>Get started.</p>
		<input placeholder="Name" type="text" name="sign-up-name" id="sign-up-name" 
		       oninvalid="this.setCustomValidity('Username cannot be empty, only letters and space allowed.')" 
           onchange="this.setCustomValidity('')" pattern="[a-zA-Z\s]{6,64}" required />
		<input placeholder="Phone" type="text" name="sign-up-phone" id="sign-up-phone" pattern="[0-9]{6,20}" required />
		<input placeholder="Email Address" type="email" name="sign-up-email" id="sign-up-email" autocomplete="off" required />
		<input placeholder="Password" type="password" name="sign-up-password" id="sign-up-password" autocomplete="off" required />
		<input placeholder="Password Confirmation" type="password" name="sign-up-password-confirmation" id="sign-up-password-confirmation" autocomplete="off" required />
    <input type="submit" name="sign-up-submit" id="sign-up-submit" value="Signup">
	</form>
<?php } ?>
</div>