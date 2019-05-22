<?php header("X-XSS-Protection: 0"); ?>
<?php include 'base.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/blog.css" >
</head>
<body>
<?php echo $header; ?>
<div class="blogPost">
	<h1><?php if(isset($_POST['articleHeading'])){echo $_POST['articleHeading'];} ?></h1>
    <?php if(isset($_POST['date']) && strlen($_POST['date'])>0 ): ?>
	<h3 style="font-weight: lighter;color: rgba(255,255,255,0.85)"> <?php echo date('F d Y', strtotime($_POST['date'])); ?> </h3>
    <?php endif; ?>
	<hr>
	<?php if(isset($_POST['articleBody'])){echo $_POST['articleBody'];} ?>
</div>
</body>
</html>