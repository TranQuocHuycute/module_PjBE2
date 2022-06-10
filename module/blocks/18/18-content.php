<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
  <div class="container">
        <div class="row">
          <div class="col">
            <h2 class="top_legue">Ranking</h2>
            <div class="list-group" style="width: 250px;">
                <a href="#" class="list-group-item list-group-item-action active">
                    UEFA Champions Legues
                </a>
                <a href="#" class="list-group-item list-group-item-action">UEFA Champions Legues</a>
                <a href="#" class="list-group-item list-group-item-action">UEFA Champions Legues</a>
                <a href="#" class="list-group-item list-group-item-action">UEFA Champions Legues</a>
                <a href="#" class="list-group-item list-group-item-action disabled">UEFA Champions Legues</a>
            </div>
          </div>
          <div class="col-5">
            <h1>FIFA Rankings</h1>
            <div class="row">
              <div class="col">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Button</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <p>Last updated: 31/03/22, 16:00</p>
              </div>
            </div>
            <p class="point">Points</p>
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td class="name_country">Brazil</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td class="name_country">Brazil</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td class="name_country">Brazil</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col">
            <h2 class="top_legue">Ranking</h2>
            <div class="list-group" style="width: 250px;">
                <a href="#" class="list-group-item list-group-item-action active">
                    UEFA Champions Legues
                </a>
                <a href="#" class="list-group-item list-group-item-action">UEFA Champions Legues</a>
                <a href="#" class="list-group-item list-group-item-action">UEFA Champions Legues</a>
                <a href="#" class="list-group-item list-group-item-action">UEFA Champions Legues</a>
                <a href="#" class="list-group-item list-group-item-action disabled">UEFA Champions Legues</a>
            </div>
          </div>
        </div>
      </div>