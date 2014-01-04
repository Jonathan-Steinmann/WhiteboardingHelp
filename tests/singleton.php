<?php 

class DatabaseConnection
{
	private __construct() {
	}

	public static function Connection()
	{
		return new __CLASS__;
	}

}

$connection = DatabaseConnection::Connection();
