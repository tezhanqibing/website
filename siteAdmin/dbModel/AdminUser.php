<?php
/**
 *管理员class
 * User: xiqohao
 * Date: 13-11-23
 * Time: 下午8:43
 */
class AdminUser
{
    private $id;
    private $loginName;
    private $realName;
    private $password;

    function __construct($id, $loginName, $password, $realName)
    {
        $this->id = $id;
        $this->loginName = $loginName;
        $this->password = $password;
        $this->realName = $realName;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLoginName($loginName)
    {
        $this->loginName = $loginName;
    }

    public function getLoginName()
    {
        return $this->loginName;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setRealName($realName)
    {
        $this->realName = $realName;
    }

    public function getRealName()
    {
        return $this->realName;
    }

}
