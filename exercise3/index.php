<?php 

interface RandomNumberGenerator
{
	public function getNumbers();
}

class NumberClass implements RandomNumberGenerator
{
	private $_min;
	private $_max;
	private $_count;

	public function __construct($min, $max, $count)
	{
		$this->_min = $min;
		$this->_max = $max;
		$this->_count = $count;
	}

	public function getNumbers()
	{
		$numbers = new SplFixedArray($this->_count);

		for ($i = 0; $i < $this->_count; $i++) {
			$randomI = mt_rand($this->_min, $this->_max);
			$numbers[$i] = $randomI;
		}

		return (array)$numbers;
	}

}

class NumberFactory
{
	public static function Create($min, $max, $count)
	{
		return new NumberClass($min, $max, $count);
	}
}

class ExerciseThree
{
	public function arrayDiffer(array $array1, array $array2) 
	{
		return array_intersect_assoc($array1, $array2);
	}
}


$numbers = NumberFactory::Create(1, 10000, 10000);

$numbers1 = $numbers->getNumbers();
$numbers2 = $numbers->getNumbers();

$exercise = new ExerciseThree();
$array = $exercise->arrayDiffer($numbers1, $numbers2);

array_multisort($array);

