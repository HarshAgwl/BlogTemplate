<?php include 'base.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/blog.css" >
    <style>
        input{
            font-size:16px;
            font-family: 'Barlow Semi Condensed', sans-serif;
        }
        input[type=text], input[type=password]{
            padding:1%;
            margin-bottom:1%;
        }
        input[type=submit]{
            padding:0.5%;
            font-family: 'Barlow Semi Condensed', sans-serif;
        }
    </style>
</head>
<body>
<?php echo $header; ?>
<div class="blogPost">
    <?php 
    
    if (isset($_POST["username"]) && isset($_POST['password']) && $_POST["username"]="harsh" && $_POST["password"]="HaRsH123")
    {
        $_SESSION['adminLoggedIn'] = 1;
        header("Location: adminPortal.php");
    }
    ?>
	<h1>ADMIN LOGIN</h1>
	<hr>
	<form method="post">
        <input type="text" name="username" placeholder="Enter username">
        <br>
        <input type="password" name="password" placeholder="Enter password">
        <br>
        <input type="submit">
    </form>
</div>
</body>
</html>