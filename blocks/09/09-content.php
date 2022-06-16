<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

?>
<body>
    <div class="container">
        <div class="login">
            <img src="./images/login.svg" alt="login" class="login.svg">
        </div>
        <h2 class="text">Sign In</h2>
        <div class="text1">create new account or log in</div>
        <div class="btn-group">
            <ul class="btn-facbook">
                <button class ="dsViFc facebook">
                <div class="iWbuuZ">
                    <img width="32" height="32" src="./images/fblogo.jpeg" alt="facebook-logo">
                </div>
                <div class="ertcLt">Continue with Facebook</div>
                </button>
            </ul>
            <br/>
            <ul class="btn-huawei">
                <button class ="login huawei">
                <div class="iWbuuZ">
                    <img width="32" height="32" src="./images/fblogo.jpeg" alt="huawei-logo">
                </div>
                <div class="ertcLt">Sign in with HUAWEI ID</div>
                </button>
            </ul>

            <div class="btn-google">
                <button class ="login google">
                <div class="iWbuuZ">
                    <img width="32" height="32" src="./images/fblogo.jpeg" alt="google-logo">
                </div>
                <div class="ertcLt">Sign in with Google</div>
                </button>
            </div>

            <div class="btn-apple">
                <button class ="login apple">
                <div class="iWbuuZ">
                    <img width="32" height="32" src="./images/fblogo.jpeg" alt="apple-logo">
                </div>
                <div class="ertcLt">Sign in with Apple</div>
                </button>
            </div>
        </div>
        <div style="margin-top: 60px;">
            <h2 class="text">Welcome back</h2>
            <div class="text1">only for existing accounts</div>
        </div>

        <div class="btn-email">
                <button class ="login email">
                <div class="iWbuuZ">
                    <img width="32" height="32" src="./images/fblogo.jpeg" alt="huawei-logo">
                </div>
                <div class="ertcLt">Log in with e-mail</div>
                </button>
            </div>

    </div>
</body>
</html>