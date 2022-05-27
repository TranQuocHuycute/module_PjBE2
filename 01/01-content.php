
<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
  <nav class="navbar navbar-expand-lg navbar-light" style="background: rgb(0 87 163)">
    <div class="container-fluid mgheader header">
      <a class="navbar-brand"> <img class="u-hidden-mobile" style="vertical-align:top" width="170" height="36" alt="SofaScore" src="<?php echo $url_path ?>/images/logo.png"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"> </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">

          <li class="nav-item">
            <form class="d-flex ">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
            </form>
          </li>

          <li class="nav-item">
            <a class="nav-link active txtheader" aria-current="page" href="#"><i class="bi bi-bell-fill txtheader"></i>Favorites</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#"><img class=" profile-image  " src="https://cdn-icons-png.flaticon.com/512/219/219986.png" alt=""></a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <div class="main">
    <div class="football-team">

      <div class="row  md">
        <div class="col-8">

          <div class="row">
            <div class="col-2">
              <img src="images/mu.png" alt="rạp xiếc" style="width: 72px ; height: 72px;">
            </div>
            <div class="col-3">
              <h3>MC</h3>
              <img src="images/mu.png" style="height: 15px; width: 15px" alt="">
              <span>dsadasaaaaaaaaaaaaaad</span>
            </div>
            <div class="col-7 follow-frame">

              <div class="a">
                <div>Receive notifications for all games of this team</div>
                <button>mancity <i class="bi bi-bell-fill txtheader"></i></button>
              </div>

            </div>
          </div>
          <div class="matches">
            <h3 class="v">
              matches
            </h3>

            <div class="match-list">
              <div class="league-name">
                Premier League
              </div>
              <div class="row">
                <div class="col-3 ">17/02/2022</div>
                <div class="col-6 vertical">
                  <div class="d">
                    <div class="" style="float: left;">đâsđ</div>
                    <div class="" style="float: right">1</div>
                  </div>
                  <div class="x">
                    <div class="" style="float: left">đâsđ</div>
                    <div class="" style="float: right">1</div>
                  </div>
                </div>
                <div class="col-3"><svg viewBox="0 0 24 24" width="20" height="20" fill="#52b030" class="sc-abe75a67-4 eXPDKY">
                    <path d="M24,12c0,6.6-5.4,12-12,12C5.4,24,0,18.6,0,12S5.4,0,12,0C18.6,0,24,5.4,24,12z M15.7,16.9l2.1-9.8h-2.3 l-1.1,6.1L13,7.1h-2l-1.3,6.1L8.5,7.1H6.2l2.1,9.8h2.4l1.3-5.6l1.3,5.6H15.7L15.7,16.9z"></path>
                  </svg></div>
              </div>
              <br>
              <div class="row">
                <div class="col-3 ">17/02/2022</div>
                <div class="col-6 vertical">đasdsaddsds</div>
                <div class="col-3"><svg viewBox="0 0 24 24" width="20" height="20" fill="#c1272d" class="sc-abe75a67-4 eXPDKY">
                    <path d="M24,12c0,6.6-5.4,12-12,12C5.4,24,0,18.6,0,12S5.4,0,12,0C18.6,0,24,5.4,24,12z M15.9,17.5v-2.1h-4.7v-9H8.5v11.1L15.9,17.5 L15.9,17.5z"></path>
                  </svg></div>
              </div>
              <br>
              <div class="row">
                <div class="col-3 ">17/02/2022</div>
                <div class="col-6 vertical">đasdsaddsds</div>
                <div class="col-3"><svg viewBox="0 0 24 24" width="20" height="20" fill="#c1272d" class="sc-abe75a67-4 eXPDKY">
                    <path d="M24,12c0,6.6-5.4,12-12,12C5.4,24,0,18.6,0,12S5.4,0,12,0C18.6,0,24,5.4,24,12z M15.9,17.5v-2.1h-4.7v-9H8.5v11.1L15.9,17.5 L15.9,17.5z"></path>
                  </svg></div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-4">

        </div>
      </div>


    </div>
  </div>

