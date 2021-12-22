<?php

namespace App\Core;

use App\Core\Database\MySql\Database;

abstract class Model
{
    protected $db;
    protected $table;

    public function __construct()
    {
        $this->db = new Database;
        $this->db->setTable($this->table);
    }

    public function create($data)
    {
        $this->db->insert($data);
        return $this->db->lastId() ;
    }

    public function update(array $data, array $where = [])
    {
        $this->db->update($data, $where);
    }

    public function delete(array $where)
    {
        $this->db->remove($where);
    }



    public function all($where = [])
    {
        return $this->db->read($where);
    }



    public function find(string $value, string $column = 'id')
    {
        $result =  $this->db->read([
            $column => $value
        ]);

        if (count($result) === 0)
            return null;

        return $result[0];
    }

    public function readIn($column, $values)
    {
        return $this->db->readIn($column, $values);
    }
    public function getManytoManyIds($id, $pivot_table, $foreign_key, $related_foreing_key){
        $pivot = Database::onTable($pivot_table)->read([$foreign_key => $id]);

        $ids = [];
        foreach ($pivot as $record) {
            array_push($ids, $record->$related_foreing_key);
        }
        return $ids ;
        
    }


    public function getManytoManyRelation($id, $pivot_table, $related_table, $foreign_key, $related_foreing_key)
    {
       
        return Database::onTable($related_table)->readIn(
            'id',$this->getManytoManyIds($id, $pivot_table, $foreign_key, $related_foreing_key),
        );
    }

    public function setManyToManyrelation($clinic_id,$section_id,$pivot_table){
        $pivot = Database::onTable($pivot_table)->insert(compact('clinic_id','section_id')) ;
    }



    public static function do()
    {
        return new static;
    }
}
