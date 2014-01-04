<?php 

class FooController
{

	public $hello;

	public function __construct()
	{
		$this->hello = 'hello';
	}

	public function init()
	{
	}

	public function barAction()
	{
		echo $this->hello;
	}

}
