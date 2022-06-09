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
    $less->compileFile('less/style-6.less', 'css/style-6.css');
    ?>
    <link href="css/style-6.css" rel="stylesheet" type="text/css" />
</head>
<div class="style-6">
    <!-- module 6 -->
    <div class="football">
        <!-- List football -->
        <ul class="list-group list_football">
            <li class="list-group-item">
                <div class="foot">
                    <!-- foot header -->
                    <div class="row foot_header">
                        <div class="col-md-2 img_flag">
                            <img src="images/avata.jpg" alt="" class="img-fluid img_football">
                        </div>
                        <div class="col-md-6 name_football">
                            <div><b><a href="#" class="country_name">England</a></b></div>
                            <div><b><a href="#" class="team_name">Premier League</a></b></div>
                        </div>
                        <div class="col-md-4 sofaScore_ratings"><b>SofaScore ratings</b></div>
                    </div>

                    <!-- list date foot -->
                    <a href="#" class="link_foot">
                        <div class="row list_date_foot">
                            <div class="col-md-2 match_time">
                                <div>00:00</div>
                                <div>FT</div>
                            </div>
                            <div class="col-md-6 name_football border-left">
                                <div>Burnlay</div>
                                <div>Southampton</div>
                            </div>
                            <div class="col-md-4 row">
                                <div class="col-md-4">
                                    <i class="fal fa-thin fa-play"></i>
                                </div>
                                <div class="col-md-4">
                                    <div>0</div>
                                    <div>1</div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <button class="notifi"><i class="fal fa-thin fa-bell"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- list date foot -->
                    <a href="#" class="link_foot">
                        <div class="row list_date_foot">
                            <div class="col-md-2 match_time">
                                <div>00:00</div>
                                <div>FT</div>
                            </div>
                            <div class="col-md-6 name_football border-left">
                                <div>Burnlay</div>
                                <div>Southampton</div>
                            </div>
                            <div class="col-md-4 row">
                                <div class="col-md-4">
                                    <i class="fal fa-thin fa-play"></i>
                                </div>
                                <div class="col-md-4">
                                    <div>0</div>
                                    <div>1</div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <button class="notifi"><i class="fal fa-thin fa-bell"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- list date foot -->
                    <a href="#" class="link_foot">
                        <div class="row list_date_foot">
                            <div class="col-md-2 match_time">
                                <div>00:00</div>
                                <div>FT</div>
                            </div>
                            <div class="col-md-6 name_football border-left">
                                <div>Burnlay</div>
                                <div>Southampton</div>
                            </div>
                            <div class="col-md-4 row">
                                <div class="col-md-4">
                                    <i class="fal fa-thin fa-play"></i>
                                </div>
                                <div class="col-md-4">
                                    <div>0</div>
                                    <div>1</div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <button class="notifi"><i class="fal fa-thin fa-bell"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- list date foot -->
                    <a href="#" class="link_foot">
                        <div class="row list_date_foot">
                            <div class="col-md-2 match_time">
                                <div>00:00</div>
                                <div>FT</div>
                            </div>
                            <div class="col-md-6 name_football border-left">
                                <div>Burnlay</div>
                                <div>Southampton</div>
                            </div>
                            <div class="col-md-4 row">
                                <div class="col-md-4">
                                    <i class="fal fa-thin fa-play"></i>
                                </div>
                                <div class="col-md-4">
                                    <div>0</div>
                                    <div>1</div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <button class="notifi"><i class="fal fa-thin fa-bell"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </li>
            <li class="list-group-item">
                <div class="foot">
                    <!-- foot header -->
                    <div class="row foot_header">
                        <div class="col-md-2 img_flag">
                            <img src="images/avata.jpg" alt="" class="img-fluid img_football">
                        </div>
                        <div class="col-md-6 name_football">
                            <div><b><a href="#" class="country_name">England</a></b></div>
                            <div><b><a href="#" class="team_name">Premier League</a></b></div>
                        </div>
                        <div class="col-md-4 sofaScore_ratings"><b>SofaScore ratings</b></div>
                    </div>
                    <!-- end foot header -->

                    <!-- list date foot -->
                    <a href="#" class="link_foot">
                        <div class="row list_date_foot">
                            <div class="col-md-2 match_time">
                                <div>00:00</div>
                                <div>FT</div>
                            </div>
                            <div class="col-md-6 name_football border-left">
                                <div>Burnlay</div>
                                <div>Southampton</div>
                            </div>
                            <div class="col-md-4 row">
                                <div class="col-md-4">
                                    <i class="fal fa-thin fa-play"></i>
                                </div>
                                <div class="col-md-4">
                                    <div>0</div>
                                    <div>1</div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <button class="notifi"><i class="fal fa-thin fa-bell"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- end list date foot -->
                    <!-- list date foot -->
                    <a href="#" class="link_foot">
                        <div class="row list_date_foot">
                            <div class="col-md-2 match_time">
                                <div>00:00</div>
                                <div>FT</div>
                            </div>
                            <div class="col-md-6 name_football border-left">
                                <div>Burnlay</div>
                                <div>Southampton</div>
                            </div>
                            <div class="col-md-4 row">
                                <div class="col-md-4">
                                    <i class="fal fa-thin fa-play"></i>
                                </div>
                                <div class="col-md-4">
                                    <div>0</div>
                                    <div>1</div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <button class="notifi"><i class="fal fa-thin fa-bell"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- end list date foot -->
                </div>
            </li>
            <li class="list-group-item">
                <div class="foot">
                    <!-- foot header -->
                    <div class="row foot_header">
                        <div class="col-md-2 img_flag">
                            <img src="images/avata.jpg" alt="" class="img-fluid img_football">
                        </div>
                        <div class="col-md-6 name_football">
                            <div><b><a href="#" class="country_name">England</a></b></div>
                            <div><b><a href="#" class="team_name">Premier League</a></b></div>
                        </div>
                        <div class="col-md-4 sofaScore_ratings"><b>SofaScore ratings</b></div>
                    </div>
                    <!-- end foot header -->

                    <!-- list date foot -->
                    <a href="#" class="link_foot">
                        <div class="row list_date_foot">
                            <div class="col-md-2 match_time">
                                <div>00:00</div>
                                <div>FT</div>
                            </div>
                            <div class="col-md-6 name_football border-left">
                                <div>Burnlay</div>
                                <div>Southampton</div>
                            </div>
                            <div class="col-md-4 row">
                                <div class="col-md-4">
                                    <i class="fal fa-thin fa-play"></i>
                                </div>
                                <div class="col-md-4">
                                    <div>0</div>
                                    <div>1</div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <button class="notifi"><i class="fal fa-thin fa-bell"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- end list date foot -->
                </div>
            </li>
        </ul>
    </div>
    <!-- module 6 -->
</div>

<!-- js -->
<script src="./js/bootstrap.bundle.min.js"></script>

</html>