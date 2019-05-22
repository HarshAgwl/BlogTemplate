<?php

date_default_timezone_set('Asia/Kolkata');
$servername = "sql210.epizy.com";
$username = "epiz_22901556";
$databasename = "epiz_22901556_myBlog_HarshAgrawal";
$password = "Xi2ag7cnboHy";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

session_start();

$header = '<header><h1>HARSH AGRAWAL</h1><br><h4>GAME DEV | WEB DEV | OTAKU</h4></header>
<nav>
	<div><a href="index.html">HOME</a>
	</div>
	<div><a href="blog.php">BLOG</a>
	</div>
	<div><a href="creations.html">CREATIONS</a>
	</div>
</nav>';
$footer = "";
//echo "Everything is fine uptil now";

?>