<?php session_start(); ?>
<?php include('db_conn.php') ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Form</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h1>Wellcome Login</h1>
            <form action="phplogin.php" method="post">

        <h2>LOGIN</h2>

      

        <label>User Name</label>

        <input type="text" name="username" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>

     </form>
    </div>
</body>
</html>