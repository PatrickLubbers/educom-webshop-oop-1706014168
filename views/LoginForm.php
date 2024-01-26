<?php

	require_once "./views/FormsDoc.php";

class LoginForm extends FormsDoc {
	
	protected function showPageHeader() {
		echo 'Welcome to login';
	}
	
	protected function showContent() {
		echo '<br><form method="post">
		<label for="user">Enter username:</label>
		<input type="text" id="user" name="user"> <!--ID is used for javascript and css styling. name is used for form submission -->
		<label for="password">Enter password:</label>
		<input type="password" id="password" name="password">
		<button type="submit" name="login_submit">Submit login</button>
	</form><br>';
	}
}

?>