
	<head>
		<title><?php echo $title ?></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
	</head>
	<body style="margin:0;background-color:<?php echo $background?>;background-image: url('<?php echo $bgImage; ?>');">
	<script src="sweetalert.min.js"></script>
		<?php
		if(isset($_SESSION['status']) && $_SESSION['status'] != '')
		{
		  ?>
		  	<script>
			  	swal({
					  title: "<?php echo $_SESSION['status']; ?>",
					  icon: "<?php echo $_SESSION['status_code']; ?>",
					  button: "OK, Done!",
				  });
			</script>
			<?php
			unset($_SESSION['status']);
		}
		?>

		<header>
			<div class="header">
				<a href="main.php" class="title">DREAM4US</a>
				<div class="header-right"><br>
					<a href="main.php">Home</a>
					<a href="package.php">Package</a>
					<a href="contactus.php">Contact</a>
					<a href="about.php">About</a>
					<?php
						if(isset($_SESSION["useruid"])){
							echo "<a href='profile.php'>Profile</a>";
							echo "<a href='/php/includes/logout.inc.php'>Logout</a>";
						}
						else{
							echo "<a href='signup.php'>Sign Up</a>";
							echo "<a href='login.php'>Login</a>";
						}
					?>

				</div>
            </div>
		</header>
