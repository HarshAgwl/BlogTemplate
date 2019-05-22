<?php include 'base.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog | Harsh Agrawal</title>
	<link rel="stylesheet" type="text/css" href="/css/blog.css" >
    <style>
    .searchBox{
        padding:1%;
    }
    .searchBox form{
        display:inline;
    }
    .searchBox img{
        width:3.25%;
    }
    .searchBox form{
        margin: 0 2%;
    }
    .searchBox form input[type=text]{
        font-family: 'Barlow Semi Condensed', sans-serif;
        font-size:20px;
        width:92.75%;
        background:black;
        border: 0px;
        color:white;
        border-bottom: 1px solid white;
    }
    input:focus{
        outline:none;
    }
    a{
        color:white;
        text-decoration:none;
    }
    </style>
</head>
<body>
<?php echo $header; ?>
<div class="blogPost searchBox">
    <div>
        <img src="/images/searchIcon.png"><form action="searchBlogPost.php"><input type="text" name="searchInput" placeholder="Search..."></form>
    </div>
</div>
<?php 
    $sql = "SELECT * FROM blogPosts ORDER BY Serial_No DESC LIMIT 10";
    $result = $conn->query($sql);
    while($row = $result->fetch())
    {
        echo '<div class="blogPost">';
        echo '<h1><a href="/blogArticle.php?serialNo='.$row['Serial_No'].'">'.$row['Heading'].'</a></h1>';
        echo '<hr>';
        echo htmlspecialchars_decode($row['ArticleBody'],ENT_QUOTES);
        echo '</div>';
    }
?>
</body>
</html>