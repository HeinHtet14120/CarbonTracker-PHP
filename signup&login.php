<!DOCTYPE html>
<html>

<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<style>
		body {
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			font-family: 'Jost', sans-serif;
			background: url(https://www.mapfre.com.mt/media/still-life-sustainable-lifestyle-elements-composition-scaled.jpg);
			background-size: cover;
			background-position: top;
		}

		.main {
			width: 350px;
			height: 500px;
			background: red;
			overflow: hidden;
			background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
			border-radius: 10px;
			box-shadow: 5px 20px 50px #000;
		}

		#chk {
			display: none;
		}

		.signup {
			position: relative;
			width: 100%;
			height: 100%;
		}

		label {
			color: black;
			font-size: 2em;
			justify-content: center;
			display: flex;
			margin: 50px;
			font-weight: bold;
			cursor: pointer;
			transition: .5s ease-in-out;
		}

		input {
			width: 60%;
			height: 18px;
			background: #e0dede;
			justify-content: center;
			display: flex;
			margin: 17px auto;
			padding: 10px;
			border: none;
			outline: none;
			border-radius: 5px;
		}

		button {
			width: 60%;
			height: 40px;
			margin: 10px auto;
			justify-content: center;
			display: block;
			color: #fff;
			background: #3dc2b9;
			font-size: 1em;
			font-weight: bold;
			margin-top: 20px;
			outline: none;
			border: none;
			border-radius: 5px;
			transition: .2s ease-in;
			cursor: pointer;
		}

		button:hover {
			background: #43d5cb;
		}

		.login {
			height: 460px;
			background: #eee;
			border-radius: 60% / 10%;
			transform: translateY(-180px);
			transition: .8s ease-in-out;
		}

		.login label {
			color: black;
			transform: scale(.6);
		}

		#chk:checked~.login {
			transform: translateY(-500px);
		}

		#chk:checked~.login label {
			transform: scale(1);
		}

		#chk:checked~.signup label {
			transform: scale(.6);
		}
	</style>
</head>

<body>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">

		<div class="signup">
			<form action="signup-process.php" method="POST" id="signup" novalidate>
				<label for="chk" aria-hidden="true">Sign up</label>
				<input type="text" id="name" name="name" required placeholder="Name">
				<input type="email" id="email" name="email" required placeholder="Email">
				<input type="password" id="password" name="password" required placeholder="Password">
				<input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Repeat Password">
				<button>Sign up</button>
			</form>
		</div>

		<div class="login">
			<form method="POST" action="checklogin.php">
				<label for="chk" aria-hidden="true">Login</label>
				<input type="email" name="email" required="" placeholder="Email">
				<input type="password" name="password" required placeholder="Password">
				<button>Login</button>
			</form>
		</div>
	</div>
</body>

</html>