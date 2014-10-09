<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css"> <!-- Generic style (Boilerplate) -->
	<link rel="stylesheet" href="css/960.fluid.css"> <!-- 960.gs Grid System -->
	<link rel="stylesheet" href="css/main.css"> <!-- Complete Layout and main styles -->
	<link rel="stylesheet" href="css/buttons.css"> <!-- Buttons, optional -->
	<link rel="stylesheet" href="css/lists.css"> <!-- Lists, optional -->
	<link rel="stylesheet" href="css/icons.css"> <!-- Icons, optional -->
	<link rel="stylesheet" href="css/notifications.css"> <!-- Notifications, optional -->
	<link rel="stylesheet" href="css/typography.css"> <!-- Typography -->
	<link rel="stylesheet" href="css/forms.css"> <!-- Forms, optional -->
	<link rel="stylesheet" href="css/tables.css"> <!-- Tables, optional -->
	<link rel="stylesheet" href="css/charts.css"> <!-- Charts, optional -->
	<link rel="stylesheet" href="css/jquery-ui-1.8.15.custom.css"> <!-- jQuery UI, optional -->
</head>

<body class="special-page">
	<!-- Begin of #container -->
	<div id="container">

	<!-- Begin of LoginBox-section -->
	<section id="login-box">
		<div class="block-border">
			{if $error eq 'error'}
				<font color="#fff">Username/Password Anda salah, silahkan coba lagi.</font>
			{elseif $error eq 'logout'}
				<font color="#fff">{$message}</font>
			{/if}
			
			<div class="block-header">	
				<h1>Login</h1>
			</div>
			<form id="login-form" class="block-content form" action="login.php?module=logged_in" method="post">
			<p class="inline-small-label">
				<label for="username">Username</label>
				<input type="text" name="username" class="required">
			</p>
			<p class="inline-small-label">
				<label for="password">Password</label>
				<input type="password" name="pass" class="required">
			</p>
			<p>
				<label> Copyright &copy; 2012 ASFA Solution<br>Best solution for your business <br>
					Point of Sales Application Ver 1.0.
				</label>
			</p>

			<div class="clear"></div>

			<!-- Begin of #block-actions -->
			<div class="block-actions">
				<ul class="actions-right">
					<li><input type="submit" class="button" value="Login"></li>
				</ul>
			</div> <!--! end of #block-actions -->
			</form>
		</div>
	</section> <!--! end of #login-box -->
</div> <!--! end of #container -->

</body>
</html>