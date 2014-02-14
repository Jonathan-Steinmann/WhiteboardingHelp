<?php 

class DatabaseConnection
{

    private static $_singleton;
    private $dbHandle;

	private function __construct() {}

	public static function Connection() {
        if(!self::$_singleton) {
            self::$_singleton = new DatabaseConnection();
        }
        return self::$_singleton;
    }

}

$connection = DatabaseConnection::Connection();
