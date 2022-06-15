<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>13</title>


    <link rel="stylesheet" href="./13/css/reset.css" type="text/css">

</head>

<body>
    <div class="col-lg-4">
        <div class="top-player">
            <h2>TOP PLAYERS</h2>

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#rating" role="tab"
                        aria-controls="home" aria-selected="true">Rating</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#goals" role="tab"
                        aria-controls="profile" aria-selected="false">Goals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#assists" role="tab"
                        aria-controls="contact" aria-selected="false">Assists</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active table-responsive" id="rating" role="tabpanel"
                    aria-labelledby="home-tab">
                    <table class="table">
                        <tr>
                            <td class="text-center">#</td>
                            <td></td>
                            <td></td>
                            <td class="text-center">Rating</td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">1</td>
                            <td><img src="./13/images/5.jfif" class="img-player" width="42" height="42" alt=""
                                    width="21" height="21"></td>
                            <td class="align-middle">
                                <h4 class="title-player">Karim Benzema</h4>
                                <p class="d-flex"><img src="./13/images/1.png" alt="" width="18" height="18"> <span
                                        class="pt-1 pl-1">Forward</span></p>
                            </td>
                            <td class="text-center align-middle"><span class="rating">7.7</span></td>
                        </tr>
                
                    </table>

                    <button class="show-more" type="button">Show more</button>

                </div>
                <!-- GOALS -->
                <div class="tab-pane fade table-responsive" id="goals" role="tabpanel" aria-labelledby="profile-tab">
                    <table class="table">
                        <tr>
                            <td class="text-center">#</td>
                            <td></td>
                            <td></td>
                            <td class="text-center">Goals</td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">1</td>
                            <td><img src="./13/images/5.jfif" class="img-player" width="42" height="42" alt=""
                                    width="21" height="21"></td>
                            <td class="align-middle">
                                <h4 class="title-player">Karim Benzema</h4>
                                <p class="d-flex"><img src="./13/images/1.png" alt="" width="18" height="18"> <span
                                        class="pt-1 pl-1">Forward</span></p>
                            </td>
                            <td class="text-center align-middle"><span class="rating">7.7</span></td>
                        </tr>
                       
                     
                    </table>

                    <button class="show-more" type="button">Show more</button>
                </div>
                <div class="tab-pane fade table-responsive" id="assists" role="tabpanel" aria-labelledby="contact-tab">
                    <table class="table">
                        <tr>
                            <td class="text-center">#</td>
                            <td></td>
                            <td></td>
                            <td class="text-center">Assists</td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">1</td>
                            <td><img src="./13/images/5.jfif" class="img-player" width="42" height="42" alt=""
                                    width="21" height="21"></td>
                            <td class="align-middle">
                                <h4 class="title-player">Karim Benzema</h4>
                                <p class="d-flex"><img src="./13/images/1.png" alt="" width="18" height="18"> <span
                                        class="pt-1 pl-1">Forward</span></p>
                            </td>
                            <td class="text-center align-middle"><span class="rating">7.7</span></td>
                        </tr>
            
                    </table>

                    <button class="show-more" type="button">Show more</button>
                </div>
            </div>
        </div>
    </div>
</body>