<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<div class="container style-16">
    <h2 class="top_legue">Top legue</h2>
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