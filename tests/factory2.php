<?php

interface IUser
{
    function getId();
}

class User implements IUser
{
    private $_id;

    public function __construct($id) 
    { 
        $this->_id = $id;
    }
}

class UserFactory
{
    public static function Create($id)
    {
        return new User($id);
    }
}

$uo = UserFactory::Create(1);
echo ($uo->getName() . "\n");
