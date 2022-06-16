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
    $less->compileFile('less/style-5.less', 'css/style-5.css');
    ?>
    <link href="css/style-5.css" rel="stylesheet" type="text/css" />
</head>
<div class="style-5">
    <!-- module 5 -->
    <div class="all_leagues">
        <!-- logo -->
        <div class="btn_all_leagues"><b>ALL LEAGUES</b></div>
        <!-- list -->
        <div class="leagues">
            <input type="checkbox" class="cb-leagues" id="1" />
            <label class="lb-leagues" for="1">
                <div class="parent-leagues">
                    <a href="#">
                        <label class="lb-leagues" for="1">
                            <div class="logo_leagues">
                                <img src="images/avata.jpg" alt="" class="img_logo img-fluid">
                            </div>
                            <div class="name_leagues">
                                <b>
                                    UEFA Champions League
                                </b>
                            </div>
                        </label>
                    </a>
                </div>
            </label>
            <div class="list-leagues">
                <div class="leagues">
                    <a href="#">
                        <div class="name_leagues">
                            <b>
                                UEFA Champions League
                            </b>
                        </div>
                    </a>
                </div>
                <div class="leagues">
                    <a href="#">
                        <div class="name_leagues">
                            <b>
                                UEFA Champions League
                            </b>
                        </div>
                    </a>
                </div>
                <div class="leagues">
                    <a href="#">
                        <div class="name_leagues">
                            <b>
                                UEFA Champions League
                            </b>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- list -->
        <div class="leagues">
            <input type="checkbox" class="cb-leagues" id="2" />
            <label class="lb-leagues" for="2">
                <div class="parent-leagues">
                    <a href="#">
                        <label class="lb-leagues" for="2">
                            <div class="logo_leagues">
                                <img src="images/avata.jpg" alt="" class="img_logo img-fluid">
                            </div>
                            <div class="name_leagues">
                                <b>
                                    UEFA Champions League
                                </b>
                            </div>
                        </label>
                    </a>
                </div>
            </label>
            <div class="list-leagues">
                <div class="leagues">
                    <a href="#">
                        <div class="name_leagues">
                            <b>
                                UEFA Champions League
                            </b>
                        </div>
                    </a>
                </div>
                <div class="leagues">
                    <a href="#">
                        <div class="name_leagues">
                            <b>
                                UEFA Champions League
                            </b>
                        </div>
                    </a>
                </div>
                <div class="leagues">
                    <a href="#">
                        <div class="name_leagues">
                            <b>
                                UEFA Champions League
                            </b>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- list -->
        <div class="leagues">
            <input type="checkbox" class="cb-leagues" id="3" />
            <label class="lb-leagues" for="3">
                <div class="parent-leagues">
                    <a href="#">
                        <label class="lb-leagues" for="3">
                            <div class="logo_leagues">
                                <img src="images/avata.jpg" alt="" class="img_logo img-fluid">
                            </div>
                            <div class="name_leagues">
                                <b>
                                    UEFA Champions League
                                </b>
                            </div>
                        </label>
                    </a>
                </div>
            </label>
            <div class="list-leagues">
                <div class="leagues">
                    <a href="#">
                        <div class="name_leagues">
                            <b>
                                UEFA Champions League
                            </b>
                        </div>
                    </a>
                </div>
                <div class="leagues">
                    <a href="#">
                        <div class="name_leagues">
                            <b>
                                UEFA Champions League
                            </b>
                        </div>
                    </a>
                </div>
                <div class="leagues">
                    <a href="#">
                        <div class="name_leagues">
                            <b>
                                UEFA Champions League
                            </b>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- module 5 -->
</div>

<!-- js -->
<script src="./js/bootstrap.bundle.min.js"></script>

</html>