<?php 

interface MyInterface
{
	public function getGame();
}

class MyGame implements MyInterface
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
	public static function GameFactory($game)
	{
		return new MyGame($game);
	}
}

class MyClass 
{
	private $_game;

	protected function _gameFactory($game)
	{
		$factory = MyGameFactory::GameFactory($game);
		return $factory->getGame();
	}

	public function setGame($game)
	{
		$this->_game = $game;
	} 

	public function getGame()
	{
		if(empty($this->_game)) {
			$game = new stdClass;
			$game->title = 'title';
			$game->barcode = 123;
			$this->_game = $this->_gameFatory($game);
		}
		return $this->_game;
	}

}

