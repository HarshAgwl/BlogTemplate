<?php header("X-XSS-Protection: 0"); ?>
<?php include 'base.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Portal</title>
	<link rel="stylesheet" type="text/css" href="/css/blog.css" >
    <style>
        input{
            font-size:16px;
        }
        input[type=text], input[type=password], input[type=date]{
            min-width:40%;
            padding:1%;
            margin-bottom:1%;
        }
        input[type=submit]{
            padding:0.5%;
            font-family: 'Barlow Semi Condensed', sans-serif;
        }
        textarea{
            padding:1%;
            margin-bottom:1%;
            font-family: 'Barlow Semi Condensed', sans-serif;
            min-width:40%;
            max-width:90%;
            min-height:10vh;
        }
        h4{
            
            display:inline;
            margin:0px 1.25%;
            color:rgba(176,203,210,1);
        }
        .listing{
            margin:1.75% 0px;
        }
    </style>
</head>
<body>
<?php echo $header; ?>
<?php if (isset($_SESSION['adminLoggedIn']) && $_SESSION['adminLoggedIn'] == 1): ?>
<div class="blogPost">
	<h1>ADMIN PORTAL</h1>
</div>
<div class="blogPost">
	<h1>ADD BLOG POST</h1>
	<hr>
	<form name="add" method="post">
        <input type="text" name="articleHeading" placeholder="Enter Heading">
        <br>
        <input type="date" name="date">
        <br>
        <textarea name="articleBody" placeholder="Enter Content"></textarea>
        <br>
        <input type="submit" value="Preview" formtarget="_blank" formaction="preview.php">
        <input type="submit">
    <?php if(isset($_POST['articleBody']) && isset($_POST['articleHeading']) )
    {
        //if(isset($_POST['date']) && strlen($_POST['date'])>0){
        //    echo "something";
        //}
        //else{
        //    echo "not";
        //}

        //echo $_POST['articleBody'];
        
        $sqlQuery = "INSERT INTO blogPosts (Heading,Date,ArticleBody) VALUES ('".$_POST['articleHeading']."','".$_POST['date']."','".htmlspecialchars($_POST['articleBody'],ENT_QUOTES)."')";
        echo htmlspecialchars($sqlQuery);
        $_POST = array();
        $conn->exec($sqlQuery);
    } 
    ?>
    </form>
</div>
<div class="blogPost">
	<h1>ADMIN PORTAL</h1>
</div>
<div class="blogPost">
	<h1>MANAGE BLOG POSTS</h1>
	<hr>
    <?php
    $sql = "SELECT * FROM blogPosts ORDER BY Serial_No DESC LIMIT 10";
    $result = $conn->query($sql);
    while($row = $result->fetch())
    {
        echo '<div class="listing">';
        echo '<h2>• '.$row['Heading'].'</h2>';
        echo '<h4>EDIT</h4><h4>DELETE</h4>';
        //echo '<h4>MOVE UP</h4><h4>MOVE DOWN</h4>';
        echo '</div>';
    }
    ?>
</div>
<?php endif; ?>
<?php if (!isset($_SESSION['adminLoggedIn']) || $_SESSION['adminLoggedIn'] != 1){header("Location: adminLogin.php");} ?>
</body>
</html>