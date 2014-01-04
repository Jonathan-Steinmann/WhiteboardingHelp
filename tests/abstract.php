<?php

abstract class MyAbstract
{

	private $_name; 

	public abstract function getAccount();

	protected function _getName()
	{
		$this->_name = 'something';
		return $this->_name;
	}

}

class MyClass extends MyAbstract
{
	
	public function getAccount()
	{
		return 'account';
	}

	public function nameBuilder()
	{
		$name = $this->_getName;
	}

}


