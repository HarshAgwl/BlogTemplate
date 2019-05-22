<?php include 'base.php'; ?>
<?php 
    $sql = "SELECT * FROM blogPosts WHERE Serial_No=".$_GET['serialNo'];
    $result = $conn->query($sql);
    $row = $result->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $row['Heading']; ?></title>
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
        a{
            color:white;
            text-decoration:none;
        }
    </style>
</head>
<body>
<?php echo $header; ?>
<?php 
    echo '<div class="blogPost">';
    echo '<h1>'.$row['Heading'].'</h1>';
    echo '<hr>';
    echo htmlspecialchars_decode($row['ArticleBody'],ENT_QUOTES);
    echo '</div>';
?>
<div class="blogPost">
<h1>COMMENTS</h1>
<hr>
<form name="add" method="post">
        <input type="text" name="articleHeading" placeholder="Enter your name">
        <br>
        <textarea name="articleBody" placeholder="Enter comment"></textarea>
        <br>
        <input value="Add comment" type="submit">
</form>
</div>
</body>
</html>