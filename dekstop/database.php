<?php
class Database {
    private static $connection;

    public static function getConnection() {
        if (self::$connection === null) {
            self::$connection = new PDO(
                'mysql:host=localhost;dbname=better_schedule;charset=utf8mb4',
                'root', // Twój użytkownik MySQL
                ''      // Hasło MySQL
            );
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$connection;
    }
}
?>
