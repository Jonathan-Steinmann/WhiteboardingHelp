<?php 

interface MyInterface
{
	public function getGame();
}

class MyClass implements MyInterface
{
	private $_game;

	public function __construct($game)
	{
		$this->_game = $game;
	}

	public function getGame()
	{
		return $this->_game;
	}
}

class MyGameFactory
{
	public static function Create($game)
	{
		return new MyClass($game);
	}
}

class SomeClass
{
	protected function _getGame()
	{
		$game = new stdClass;
		$game->title = 'title';
		$game->rank = '10';
		return $game;
	}

	public function makeGame()
	{
		$game = $this->_getGame();
		$factory = MyGameFactory::Create($game);
	}

}