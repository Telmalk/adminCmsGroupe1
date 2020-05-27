<?php


namespace Helper;


class PDOConnext
{
    private static $pdo;

    public static function getPdo() {
        if (is_null(self::$pdo)) {
            try {
                self::$pdo = new \PDO("mysql:host=localhost;dbname=cmsg2a", "root", "");
            } catch (\PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$pdo;
    }
}