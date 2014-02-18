<?php

interface Login
{
    public function getUsername(){}

    public function getPassword(){}
}

class MyLogin implements Login
{
    private $_username;
    private $_password;

    public function __construct($username, $password)
    {
        $this->_username = $username;
        $this->_password = $password;
    }

    public function getUsername()
    {
        return $this->_username;
    }

    public function getPassword()
    {
        return $this->_password;
    }
}

class MyFactory
{
    public function static Create($username, $password)
    {
        return new MyLogin($username, $password);
    }
}

class MyClass
{
    private $_username;
    private $_password;

    public function createLogin($username, $password)
    {
        $login = MyFactory::Create($username, $password);
    }

    public function loginAction()
    {
        $login = array();

        if($this->getRequest()->isPost()) {
            $form = new Zend_Form;
            if($form->isValid($this->getRequest()->getPost())) {
                $this->_username = $form->getValue('username');
                $this->_password = $form->getValue('password');       
            } 
        }

        return login($this->_username, $this->_password);
    }
}

