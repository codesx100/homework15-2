<?php
class Database {
    private static $dsn = 'mysql:sql1.njit.edu;dbname=oah5';
    private static $username = 'oah5';
    private static $password = '8ch7Js22';
    private static $db;

    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>