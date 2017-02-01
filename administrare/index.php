<?php 
require_once('./config.php');

if(!isset($_SESSION['DumasKennel']['id'])) {
	$error_login = "";
	if(isset($_POST['login_submit'])) {
		if(check_login_data($_POST['user_name'], $_POST['user_pass'])) {
			$_SESSION['DumasKennel']['id'] = 1;
			$_SESSION['DumasKennel']['user'] = $_POST['user_name'];
		} else {
			$error_login = "The username or password is not correct. Please Try Again!";
		}
	}
}

include("./php/header.php");

if(!isset($_SESSION['DumasKennel']['id'])) { 
?>
	<form action="" name="logform" method="post">

		<div align="center" id="div_login">

			<br><br><br>
			<h1 class="login-title">Duma's Kennel Administration</h1>
			<br>
			<table cellpadding="2" cellspacing="2">
				<tr>
					<td align="left" class="login-label">USERNAME</td>
					<td align="left"><input id="user_name" type="text" size="27" name="user_name" tabindex="1"></td>
				</tr>
				<tr>
					<td align="left" class="login-label">PASSWORD</td>
					<td align="left"><input type="password" size="27" name="user_pass" tabindex="2"></td>
				</tr>
				<tr>
					<td></td>
					<td align="right"><input type="submit" value="LOGIN" name="login_submit" tabindex="3"></td>
				</tr>
			</table>
			
			<?php if ($error_login != "") {
				echo '<span class="error-login">'.$error_login.'</span>';
			} ?>
			
		</div>
		
	</form>
<?php } else {

	include(dirname(__FILE__).'/php/menu.php');

	if (isset($_GET['pui'])) {
		include(dirname(__FILE__).'/php/pui.php');  
	} else if (isset($_GET['monta'])) {
		include(dirname(__FILE__).'/php/monta.php');  
	} else {
		include(dirname(__FILE__).'/php/mops.php');  
	}

} ?>
</body>
</html>