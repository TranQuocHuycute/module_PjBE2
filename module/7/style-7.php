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
    $less->compileFile('less/style-7.less', 'css/style-7.css');
    ?>
    <link href="css/style-7.css" rel="stylesheet" type="text/css" />
</head>
<div class="style-7">
    <!-- module 7 -->
    <div class="top_player">
        <div class="herder_player">
            <b>TOP PLAYER</b> <small>Best rated players from recent matches</small>
        </div>
        <!-- list player -->
        <div class="player">
            <!-- player -->
            <div class="list_player">
                <a href="#" class="row">
                    <div class="col-md-1">
                        <div class="stt"><b>1</b></div>
                    </div>
                    <div class="col-md-3">
                        <img src="images/avata.jpg" alt="" class="img-fluid img-player">
                    </div>
                    <div class="col-md-6">
                        <div><b class="name">Bao Cun's</b></div>
                        <div class="description">TDC Thu Duc</div>
                    </div>
                    <div class="col-md-2">
                        <button class="rank_player">10</button>
                    </div>
                </a>
            </div>

            <!-- img team -->
            <div class="team_player">
                <img src="images/avata.jpg" alt="" class="img_team">
            </div>

            <!-- player -->
            <div class="list_player">
                <a href="#" class="row">
                    <div class="col-md-1">
                        <div class="stt"><b>2</b></div>
                    </div>
                    <div class="col-md-3">
                        <img src="images/avata.jpg" alt="" class="img-fluid img-player">
                    </div>
                    <div class="col-md-6">
                        <div><b class="name">Bao Cun's</b></div>
                        <div class="description">TDC Thu Duc</div>
                    </div>
                    <div class="col-md-2">
                        <button class="rank_player">9.5</button>
                    </div>
                </a>
            </div>
            <!-- player -->
            <div class="list_player">
                <a href="#" class="row">
                    <div class="col-md-1">
                        <div class="stt"><b>3</b></div>
                    </div>
                    <div class="col-md-3">
                        <img src="images/avata.jpg" alt="" class="img-fluid img-player">
                    </div>
                    <div class="col-md-6">
                        <div><b class="name">Bao Cun's</b></div>
                        <div class="description">TDC Thu Duc</div>
                    </div>
                    <div class="col-md-2">
                        <button class="rank_player">9.2</button>
                    </div>
                </a>
            </div>
            <!-- player -->
            <div class="list_player">
                <a href="#" class="row">
                    <div class="col-md-1">
                        <div class="stt"><b>4</b></div>
                    </div>
                    <div class="col-md-3">
                        <img src="images/avata.jpg" alt="" class="img-fluid img-player">
                    </div>
                    <div class="col-md-6">
                        <div><b class="name">Bao Cun's</b></div>
                        <div class="description">TDC Thu Duc</div>
                    </div>
                    <div class="col-md-2">
                        <button class="rank_player">8.5</button>
                    </div>
                </a>
            </div>
            <!-- player -->
            <div class="list_player">
                <a href="#" class="row">
                    <div class="col-md-1">
                        <div class="stt"><b>5</b></div>
                    </div>
                    <div class="col-md-3">
                        <img src="images/avata.jpg" alt="" class="img-fluid img-player">
                    </div>
                    <div class="col-md-6">
                        <div><b class="name">Bao Cun's</b></div>
                        <div class="description">TDC Thu Duc</div>
                    </div>
                    <div class="col-md-2">
                        <button class="rank_player">8.1</button>
                    </div>
                </a>
            </div>
            <!-- player -->
            <div class="list_player">
                <a href="#" class="row">
                    <div class="col-md-1">
                        <div class="stt"><b>6</b></div>
                    </div>
                    <div class="col-md-3">
                        <img src="images/avata.jpg" alt="" class="img-fluid img-player">
                    </div>
                    <div class="col-md-6">
                        <div><b class="name">Bao Cun's</b></div>
                        <div class="description">TDC Thu Duc</div>
                    </div>
                    <div class="col-md-2">
                        <button class="rank_player">7.5</button>
                    </div>
                </a>
            </div>

            <!-- show more -->
            <div class="show-more">
                <a href="#">
                    <b>Show more</b>
                </a>
            </div>
        </div>
    </div>
    <!-- module 7 -->
</div>

<!-- js -->
<script src="./js/bootstrap.bundle.min.js"></script>

</html>