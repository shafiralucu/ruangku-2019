<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script
        src="https://code.jquery.com/jquery-3.3.1.js">
    </script>
    <link rel="stylesheet" href="style/style-login.css">
</head>
<body>
<div class="login-reg-panel">
		<div class="login-info-box">
            <h1>Ruangku</h1>
			<h2>Have an account?</h2>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
            <h1>Ruangku</h1>
			<h3>YOU'LL KNOW AT FIRST</h3>
            <h1>THE RIGHT PLACE TO BE</h1>
			<label id="label-login" for="log-login-show">Check our details</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			<div class="login-show">
                <form action="../Model/confirmLogin.php" method="POST">
				<h2>LOGIN</h2>
				<input type="text" name="nama" placeholder="Username / ID Karyawan">
				<input type="password" name="pass" placeholder="Password">
				<input type="submit" value="Login" name="btnLogin">
                <br><br>
                <a href="">Forgot password?</a>
                </form>
			</div>
			<div class="register-show">
				<h5>More than just the best place to work, though, this is collaborative movement. We believe that entrepreneur can help each other and offices can use the comforts of home.</h5>
                <img src="images/01.png" style="float: left; width: 50%;">
                <img src="images/02.png" style="width: 50%; float: left;">
                <img src="images/03.png" style="width: 50%; float: left;">
                <button onclick="location.href = 'CONTACT.php'" class="button" style="color:white; margin-right: 6%;">Contact us</button>
                </form>
			</div>
		</div>
	</div>

    <script>
        $(document).ready(function(){
            $('.login-info-box').fadeOut();
            $('.login-show').addClass('show-log-panel');
        });


        $('.login-reg-panel input[type="radio"]').on('change', function() {
            if($('#log-login-show').is(':checked')) {
            $('.register-info-box').fadeOut(); 
            $('.login-info-box').fadeIn();
        
            $('.white-panel').addClass('right-log');
            $('.register-show').addClass('show-log-panel');
            $('.login-show').removeClass('show-log-panel');
        }
            else if($('#log-reg-show').is(':checked')) {
            $('.register-info-box').fadeIn();
            $('.login-info-box').fadeOut();
        
            $('.white-panel').removeClass('right-log');
        
            $('.login-show').addClass('show-log-panel');
            $('.register-show').removeClass('show-log-panel');
        }
    }); 
        </script>
    </body>
</html>