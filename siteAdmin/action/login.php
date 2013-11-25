<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xiqohao
 * Date: 13-11-24
 * Time: 下午5:30
 * To change this template use File | Settings | File Templates.
 */
    $userName =$_POST["userName"];
    $userPwd = $_POST["userPassWord"];
    $myDb = new MyDB();
    if($myDb->getMysqli()){
       $dbUtil =$myDb->getMysqli();
    }
?>