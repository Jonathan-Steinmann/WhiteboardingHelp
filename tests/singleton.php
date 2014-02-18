<?php 

class DatabaseConnection
{

    private static $_singleton;

	private function __construct() {
        //db connection code
    }

	public static function Connection() {
        if(!self::$_singleton) {
            self::$_singleton = new DatabaseConnection();
        }
        return self::$_singleton;
    }

}

$connection = DatabaseConnection::Connection();
