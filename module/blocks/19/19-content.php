<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<div class="container style-19">
    <h2 class="top_legue">Top legue</h2>

    <div class="list-group" style="width: 250px;">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Button</button>
            </div>
        </div>
        <a href="#" class="list-group-item list-group-item-action active">
            UEFA Champions Legues
        </a>
        <a href="#" class="list-group-item list-group-item-action">Vrazill</a>
        <a href="#" class="list-group-item list-group-item-action">Vrazill</a>
        <a href="#" class="list-group-item list-group-item-action">Vrazill</a>
        <a href="#" class="list-group-item list-group-item-action disabled">Vrazill</a>
    </div>
</div>