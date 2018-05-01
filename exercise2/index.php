<?php 

class Data
{

	public $_data;

	public function __construct($json) 
	{
		$this->_data = file_get_contents($json);
	}

	public function getData()
	{
		return json_decode($this->_data);
	}

	public function setData($json, $data)
	{
		file_put_contents($json, json_encode($data));
	}

}

class DataFactory
{

	public static function Build($json)
	{
		return new Data($json);
	}

}

class ExerciseTwo
{

	const ID = 'id';
	const FIRST = 'first';
	const LAST = 'last';

	public function createData(array $data)
	{
		
		$json = 'data.json';
		$class = DataFactory::Build($json);
		$class->getData();
		$class->setData($json, $data);

	}

	public function fetchDataById($id)
	{
		
		$json = 'data.json';
		$class = DataFactory::Build($json);
		$data = $class->getData();

		$results = array();

		foreach ($data->data as $objects) {
			if ($objects->id == $id) {
				$results[$id] = $objects;
			}
		}
		
		return $results;

	}

	public function searchData($search, $criteria)
	{
		
		$json = 'data.json';
		$class = DataFactory::Build($json);
		$data = $class->getData();

		$results = array();

		foreach ($data->data as $objects) {
			if ($objects->$search == $criteria) {
				$results[$objects->id] = $objects;
			}
		}
		
		return $results;

	}

}


$newData['data'] = array(
	array('id' => 123, 'first' => 'first1', 'last' => 'last1'),
	array('id' => 456, 'first' => 'first2', 'last' => 'last2'),
	array('id' => 789, 'first' => 'first1', 'last' => 'last2'),
);

$exercise = new ExerciseTwo();

$createData = $exercise->createData($newData);

$searchId = $exercise->fetchDataById(123);

$searchAll = $exercise->searchData($exercise::FIRST, 'first1');

var_dump($searchAll);