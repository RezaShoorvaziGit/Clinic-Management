<?php

namespace App\Core\Database\MySql;

use App\Core\Database\DatabaseInterface;
use App\Core\Database\DatabaseConnectionInterface;

class Database implements DatabaseInterface
{

    private DatabaseConnectionInterface $connection;
    private string $table;

    public function __construct()
    {
        $this->connection = DatabaseConnection::getInstance();
    }

    public function setTable(string $table)
    {
        $this->table = $table;
    }

    public static function onTable(string $table)
    {
        $db = new self();
        $db->setTable($table);
        return $db;
    }

    public function insert(array $data)
    {  // data -> ['firstname' => 'foo', 'lastname' => 'bar']
        array_walk($data, function (&$value) {
            $value = "'" . $value . "'";
        });

        $query = sprintf(
            "INSERT INTO %s(%s) VALUES (%s)",
            $this->table,
            implode(',', array_keys($data)),
            implode(',', $data)
        );

        return $this->exec($query);
    }

    public function update(array $data, array $where = []) ///$data = ["name" => reza ]
    {
        foreach ($data as $k => $v) {
            $args[] = "$k = '$v'";
        };


        array_walk($where, function (&$value, $key) {

            $value = $key . "='" . $value . "'";
        });

        $hasCondition = $where != [] ? 'WHERE' : '';

        $query = sprintf("UPDATE %s SET %s $hasCondition %s ", $this->table, implode(",", $args), implode(" AND ", $where));

        return $this->exec($query);
    }

    public function remove(array $where = [])
    {
        array_walk($where, function (&$value, $key) {
            $value = $key . "='" . $value . "'";
        });

        $query = sprintf("DELETE FROM %s WHERE %s ", $this->table, implode("AND", $where));
        return $this->exec($query);
    }

    public function read(array $where = [], $connection = 'AND')
    { // where -> ['firstname' => 'foo', 'lastname' => 'bar']

        array_walk($where, function (&$value, $key) {
            $value = $key . "='" . $value . "'";
        });

        $hasCondition = $where != [] ? 'WHERE' : '';

        $query = sprintf(
            "SELECT * FROM %s $hasCondition %s",
            $this->table,
            implode(' ' . $connection . ' ', $where)
        );

        // echo $query;
        return $this->exec($query)->fetchAll(\PDO::FETCH_OBJ);
    }


    public function readIn(string $column, array $values)
    {

        $query = sprintf(
            "SELECT * FROM %s WHERE %s IN(%s)",
            $this->table,
            $column,
            implode(',', $values),
        );
        return $this->exec($query)->fetchAll(\PDO::FETCH_OBJ);
    }


    public function lastId(){
        return $this->connection->connection()->lastInsertId() ;
    }

    private function exec(string $query)
    {
        return $this->connection->connection()->query($query);
    }
}
