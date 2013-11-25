<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xiqohao
 * Date: 13-11-24
 * Time: 下午5:39
 * To change this template use File | Settings | File Templates.
 */
class AdminUserDao extends MyDB
{
    public function loginUser($userName,$userPwd){
        $query="select * from adminUser where userName=? and userPassWord=?";
        $stmt =$this->mysqli->prepare($query);
        $stmt->bind_param('ss',$userName,$userPwd);
        $stmt->execute();
    }
}
