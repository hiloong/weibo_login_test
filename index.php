<?php
session_start();
include_once("config.php");
include_once("saetv2.ex.class.php");

$o = new SaeTOAuthV2( WB_AKEY, WB_SKEY);
$code_url = $o->getAuthorizeURL( WB_CALLBACK_URL);
?>

<!Doctype html>
<html>
    <head>
        <meta charset='utf-8' />
        <title>itest</title>
    </head>
    <body>
        <a href="<?php echo $code_url; ?>">点击认证</a>
    </body>

</html>











