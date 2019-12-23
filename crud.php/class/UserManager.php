<?php


class UserManager
{
    protected $userDB;
public function __construct()
{
    $db = new DBconnect("mysql:host=localhost;dbname=product_manager",'root','@Tuan27102001');
    $this->userDB = new UserDB($db->connect());
}
    public function getList()
    {
        return $this->userDB->getList();
    }
    public function add($user)
    {
        $this->userDB->create($user);
    }
    public function delete($id)
    {
        $this->userDB->delete($id);
    }
    public function edit($id)
    {
        $this->userDB->edit($id);
    }
    public function getUserID($id)
    {
        return $this->userDB->getValueID($id);
    }
}
