<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login SiTobat</title>

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <!-- Custom style -->
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<style>
body{
    font-family: sans-serif;
    background: #ffc107;
}
</style>

    <br> <br>
	<h1> Selamat datang di  SiTobat </h1>
	<div class="kotak_login">
		<p class="tulisan_login"> Login dulu kuy </p>
        <form action="../login/aksi_login.php" method="POST">
            <label>Username</label>
            <input type="text" name="username" autocomplete="off" class="form-control" id="inlineFormInputGroup" placeholder="Username">

            <label>Password</label>
            <input type="password" name="password" autocomplete="off" class="form-control" id="inlineFormInputGroup" placeholder="Password">
<br>
            <!-- <button type="submit" name="marilogin" class="btn tombol_login"> Login </button> -->
            <center>
            <input type="submit" name="marilogin" value="Masokk">
            </center>
			<!-- <input type="submit" name="marilogin" class="tombol_login" value="LOGIN"> -->
        </form>
        <br>
        <center>
        <label  for="ckb1">
			<centre>Belum Punya Akun? Klik <b><a href="../register/register.php" > Di sini </a></b></centre>
        </label>
        </center>
		
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>