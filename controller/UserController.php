<?php

namespace Controller;

use Model\UserDB\UserDB;

class UserController
{
    protected $userDB;

    public function __construct()
    {
        $this->userDB = new UserDB();
    }

    public function index()
    {
        $users = $this->userDB->getAll();
        include "view/user/list.php";
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->userDB->destroy($id);
        header('location: index.php');
    }

    public function add($user)
    {
        $this->userDB = create($user);
    }

}