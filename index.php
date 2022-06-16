<!DOCTYPE html>
<<<<<<< HEAD

<?php


if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>01</title>
    <link href="./blocks/01/css/01.css" rel="stylesheet" type="text/css" />
    <link href="./blocks/14/css/14.css" rel="stylesheet" type="text/css" />
    <link href="./blocks/15/css/15.css" rel="stylesheet" type="text/css" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
=======
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>LaLiga live score, fixtures and results - SofaScore</title>
	<!-- boostrap	 -->
	<link rel="stylesheet" href="./public/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="./public/css/index.css">
	<link rel="stylesheet" href="./public/css/style.css" type="text/css">
	<link rel="stylesheet" href="./public/css/style_title.css" type="text/css">



>>>>>>> _1-TRAN_NHAT_THANH_20211TT1281/1-model_10

</head>

<body>
<<<<<<< HEAD
    <header>
        <?php include $dir_block . '/blocks/01/01-content.php'; ?>
    </header>
    <main>
        <div class="container">
            <div class="matches row">

                <div class="col-7">
                    <?php include $dir_block . '/blocks/14/14-content.php'; ?>
                    <?php include $dir_block . '/blocks/15/15-content.php'; ?>
                </div>

                <div class="col-4">

                </div>
            </div>

       
        </div>

    </main>
=======
	<ul class="sc-4461e154-0 address" style="margin-left: 185px;">
		<li><a href="/">Football</a></li>
		<li><a href="/football/spain">Spain</a></li>
		<li>
			<h1 class="sc-1b1c645e-0 gjYKiO">LaLiga live score</h1>
		</li>
	</ul>
	<div class="container">
		<div class="sc-fa55005a-0 jbMuLJ">

		</div>
		<div class="sc-e1b60555-0 hBrWcV">
			<div class="row">
				<div class="col-lg-8">
					<div class="sc-e1b60555-0 hBrWcV">

						<!-- phần Standings and title -->
						<?php include "./10/10.php" ?>
						<?php include "./11/11.php" ?>
						<!--end Standing  -->
					</div>

					<!-- Player Statistics -->
					<?php include "./12/12.php" ?>
					<!--end Player Statistics -->
				</div>

				<!-- Top Player -->
				<?php include "./13/13.php" ?>
				<!-- end Top Player -->
			</div>
		</div>
	</div>
	<script src="js/jquery-2.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
>>>>>>> _1-TRAN_NHAT_THANH_20211TT1281/1-model_10
</body>

</html>