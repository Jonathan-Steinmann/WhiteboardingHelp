<?php

interface LoginInterface
{
	public function getUsername();
	public function getPassword();
}

class MyLogin implements LoginInterface
{
	private $_username;
	private $_password;

	public function __construct($username, $password)
	{
		$this->_username = $username;
		$this->_password = $password;
	}

	protected function _getUsername()
	{
		return $this->_username;
	}

	protected function _getPassword()
	{
		return $this->_password;
	}
}

class MyFactory
{
	public static function Create($username, $password)
	{
		return new MyLogin($username, $password);
	}

}

class MyClass
{
	private $_username;
	private $_password;

	protected function _createLogin()
	{
		$username = $this->getUsername();
		$password = $this->getPassword();
		$login = MyFactory::Create($username, $password);
	}

	public function setUsername($username)
	{
		$this->_username = $username;
	}

	public function getUsername()
	{
		if (empty($this->_username)) {
			$this->_username = 'username';
		}
	}

	public function setPassword($password)
	{
		$this->_password = $password;
	}

	public function getPassword()
	{
		if (empty($this->_password)) {
			$this->_username = 'password';
		}
	}

}

?>