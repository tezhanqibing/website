<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xiqohao
 * Date: 13-11-23
 * Time: 下午8:17
 * To change this template use File | Settings | File Templates.
 */
require("./config.php");
$link = new mysqli($host,$dbUser,$dbPassWord,$dbName);
if(mysqli_connect_errno()){
    printf("连接失败",mysqli_connect_errno());
    exit();
}
echo $link->character_set_name();
?>