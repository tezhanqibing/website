<?php
/**
 * Created by JetBrains PhpStorm.
 * User: xiqohao
 * Date: 13-11-23
 * Time: 下午8:32
 * To change this template use File | Settings | File Templates.
 */
class MyDB
{
    protected $mysqli;
    protected $showError;

    public function _construct($configFile="config.php",$showError=TRUE){
        require_once($configFile);
        $this->mysqli=new mysqli($host,$dbUser,$dbPassWord,$dbName);
        if(mysqli_connect_errno()){
            printf("连接失败",mysqli_connect_errno());
            $this->mysqli=FALSE;
            exit();
        }
    }

    public function close(){
        if($this->mysqli){
            $this->mysqli->close();
            $this->mysqli=false;
        }
    }

    public function _destruct(){
        $this->close();
    }
}
?>
