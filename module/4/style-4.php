<html style="background-color: #f3f3f4;">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/all.css">

    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/style-4.less', 'css/style-4.css');
    ?>
    <link href="css/style-4.css" rel="stylesheet" type="text/css" />
</head>
<div class="style-4">
    <!-- module 4 -->
    <div class="top_leagues">
        <!-- logo -->
        <div class="btn_top_leagues"><b>TOP LEAGUES</b></div>
        <!-- list -->
        <div class="list_leagues">
            <a href="#">
                <div class="logo_leagues">
                    <img src="images/avata.jpg" alt="" class="img_logo img-fluid">
                </div>
                <div class="name_leagues">
                    <b>
                        UEFA Champions League
                    </b>
                </div>
            </a>
        </div>
        <!-- list -->
        <div class="list_leagues">
            <a href="#">
                <div class="logo_leagues">
                    <img src="images/avata.jpg" alt="" class="img_logo img-fluid">
                </div>
                <div class="name_leagues">
                    <b>
                        UEFA Champions League
                    </b>
                </div>
            </a>
        </div>
        <!-- list -->
        <div class="list_leagues">
            <a href="#">
                <div class="logo_leagues">
                    <img src="images/avata.jpg" alt="" class="img_logo img-fluid">
                </div>
                <div class="name_leagues">
                    <b>
                        UEFA Champions League
                    </b>
                </div>
            </a>
        </div>
    </div>
    <!-- module 4 -->
</div>

<!-- js -->
<script src="./js/bootstrap.bundle.min.js"></script>

</html>