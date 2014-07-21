<?php
session_start();
header("Content-type:text/html;charset=utf-8");

include_once('config.php');
include_once('saetv2.ex.class.php');
include_once('funs.php');


if(!isset($_SESSION['token']['access_token'])) {
    header("location: index.php");
}

$c = new SaeTClientV2(WB_AKEY, WB_SKEY, $_SESSION['token']['access_token']);
$uid = $c->get_uid();
var_dump($uid);
$uid = $uid['uid'];
$info =  $c->show_user_by_id($uid);
$id = $info['id'];
$name = $info['name'];
$location = $info['location'];
$profile_image_url = $info['profile_image_url'];


$logotype = is_login();

?>

<!Doctype html>
<html>
    <head>
        <style>
            
            #logotype { position: fixed; right: 0; top: 0; width: 200px; height: 100px;}
        </style>
    </head>
    <body>  
        <table>
            <tr>    
                <td>name</td>
                <td><?php echo $name  ; ?></td>
            </tr>
            <tr>    
                <td>pic</td>
                <td><img src='<?php echo $profile_image_url ; ?>' /></td>
            </tr>
        </table>

        <div id='logotype'>
<?php
if(is_login()) {
    echo "<div style='color: green'>";
    echo "已经登陆成功";
    echo "<div>";
} else {
    echo "<div style='color: red'>";
    echo "没有登陆";
    echo "</div>";
};

?>
        </div>
    </body>
</html>







