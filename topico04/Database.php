<?php

class Database {

    private static $db = null;

    public function __construct(mysqli $db) {
        self::$db = $db;
    }

    public static function connect($host, $username, $password, $database) {
        if (self::$db === null) {
            self::$db = new mysqli($host, $username, $password, $database);

            if (self::$db->connect_errno > 0) {
                throw new Exception("Failed to connect to database: " . self::$db->connect_error);
            }
        }
    }

    public static function getConnection() {
        if (self::$db === null) {
            throw new Exception("Database connection has not been established.");
        }
        return self::$db;
    }

    public static function closeConnection() {
        if (self::$db !== null) {
            self::$db->close();
        }
    }
}
