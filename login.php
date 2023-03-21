
<!DOCTYPE html>
<html>
<?php
include('adminconnect.php');

// If user already logged in, send them to index
if ( ! empty( $_SESSION['adminid'] ) ) {
    header('Location:adminlist.php');
    exit;
}
?>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
    body {
		color: white
    background-color: black; /* fallback for old browsers */
    background: -webkit-linear-gradient(right, #white, white);
    background: -moz-linear-gradient(right, #white, #white);
    background: -o-linear-gradient(right, #white, #white);
    background: linear-gradient(to left, #white, #white);
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
    .login-page {
    width: 100%;
    padding: 10% 0 0;
    margin: auto;
    }
    .form {
    position: relative;
    z-index: 1;
    background: lightblue;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: white;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
    }
    .form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #4CAF50;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
    }
    .form button:hover,.form button:active,.form button:focus {
    background: #43A047;
    }
    .container {
    position: relative;
    z-index: 1;
    max-width: 500px;
    margin: 0 auto;
    background: blue;
    }
    .container:before, .container:after {
    content: "";
    display: block;
    clear: both;
    }
    .container .info {
    margin: 50px auto;
    text-align: center;
    }
    .container .info h1 {
    margin: 0 0 15px;
    padding: 0;
    font-size: 36px;
    font-weight: 300;
    color: white;
    }
    .container .info span {
    color: #4d4d4d;
    font-size: 12px;
    }
    .container .info span a {
    color: #000000;
    text-decoration: none;
    }
    .container .info span .fa {
    color: #EF3B3A;
    }
</style>
<body>

<div class="login-page">
    <center><h1>Admin Login</h1></center>
  <div class="form">
		<!-- <form action="loginPrepStmt.inc.php" method="post"> -->
		<!-- <form action="loginhash.php" method="post"> -->
		 <form action="loginweak.php" method="get"> 
			Username:
			<input type="text" name="uname" autocomplete="off" autofocus><br><br>
			Password:
			<input type="text" name="pass"><br>
			<button type="submit" name="submit">Login</button>
		</form>
  </div>
</div>
</body>
</html>
