<?php
namespace core;

use \core\Database;
use \ClanCats\Hydrahon\Builder;
use \ClanCats\Hydrahon\Query\Sql\FetchableInterface;

class Model {

    protected static $_h;

    public function __construct() {
        self::initializeHydrahon();
    }

    protected static function initializeHydrahon() {
        if (self::$_h === null) {
            $connection = Database::getInstance();
            self::$_h = new Builder('mysql', function($query, $queryString, $queryParameters) use ($connection) {
                $statement = $connection->prepare($queryString);
                $statement->execute($queryParameters);

                if ($query instanceof FetchableInterface) {
                    return $statement->fetchAll(\PDO::FETCH_ASSOC);
                }
            });
        }

        self::$_h = self::$_h->table(self::getTableName());
    }

    public static function getTableName() {
        $className = explode('\\', get_called_class());
        $className = end($className);
        return strtolower($className) . 's';
    }

    public static function select($fields = []) {
        self::initializeHydrahon();
        return self::$_h->select($fields);
    }

    public static function insert($fields = []) {
        self::initializeHydrahon();
        return self::$_h->insert($fields);
    }

    public static function update($fields = []) {
        self::initializeHydrahon();
        return self::$_h->update($fields);
    }

    public static function delete() {
        self::initializeHydrahon();
        return self::$_h->delete();
    }
}
