<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

    <div class="type-08">
        <div class="content">
            <div class="avatar">
                <img width="120" height="120" alt="Phạm Quỳnh Nga" src="./images/avatar.jpeg" class="sc-a7ad0435-0 gluUez">
            </div>
            <div class="full-name">
                <b class="full-name">Họ Và Tên</b>
            </div>
            <div class="infomation">
                <p>Signed In With Facebook: </p>
                <p>abc@gmail.com</p>
                <div class ="sig-out">
                    <a href="/user/logout">Sign out</a> | <a href="/user/account/delete">Delete my account</a>
                </div>
                <div class="remove">
                    <a href="/user/unsubscribe">Remove me from e-mail list</a>
                </div>
            </div>
        </div>
    </div>

</html>