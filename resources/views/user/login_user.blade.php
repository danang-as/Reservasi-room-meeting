<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi POSiND</title>
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../img/logo_pos.png"
    />
    @vite('resources/css/app.css')
</head>
<body>

<div class="w-[412px] h-[915px] relative bg-blue-950">

    <img class="w-[140px] h-[122px] left-[145px] top-[132px] absolute" src="../img/logo_pos.png" />
    <img class="w-[412px] h-[250px] left-0 top-[656px] absolute" src="../img/background1.png" />
    <form action="{{url('login_user')}}" method="POST">
    @csrf
    <input type="text" name="email" class="w-[300px] h-[50px] left-[65px] top-[359px] text-gray-900 p-2.5 absolute bg-zinc-300 rounded-bl-[30px]" placeholder="Email" required>
    <input type="password" name="password" class="w-[300px] h-[50px] left-[65px] top-[441px] text-gray-900 p-2.5 absolute bg-zinc-300 rounded-bl-[30px]" placeholder="Password" required>
    <button type="submit" value="user" class="w-[130px] h-[50px] left-[150px] top-[549px] text-white bg-orange-950 dark:bg-orange-700 absolute  rounded-lg">Login</button>
    
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if($messages = Session::get('failed'))
<script>
    Swal.fire({
    icon: "error",
    title: "Waduh bro",
    text: "Email atau Password anda salah"
    });
</script>
@endif
</body>
</html>
{{-- <!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<style>
	body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: #1f1fc5;
}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background: #060470;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #f3f5f5;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #eb391a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 40px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #eb391a;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}

</style>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="{{url('login_user')}}" method="POST">
                    @csrf
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required>
					<input type="password" name="password" placeholder="Password" required>
					<button type="submit" value="user">Login</button>
				</form>
			</div>
	</div>
</body>
</html> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form </title>
    <link rel="stylesheet" href="{{ assets('css/style.css') }}">
    
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form>
            <div class="user-box">
                <input type="text" name="" required="">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="" required="">
                <label>Password</label>
            </div>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </a>
        </form>
    </div>
</body>
</html> --}}