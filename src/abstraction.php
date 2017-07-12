<?php

include "db.php";

/**
 *
 */
class DbAbstract
{
    public $table;
    public $fields;
    private $db;

    function __construct() {
        $this->db = new Db();
    }

    function getAll() {
        $result = $this->db->select($this->table);
        return $result;
    }

    function getById($id) {
        $result = $this->db->select($this->table, ['id' => $id]);
        return $result;
    }

    public function getBy(array $params) {
        $result = $this->db->select($this->table, $params);
        return $result;
    }

    public function updateById($id, array $params) {
        $result = $this->db->update($this->table, $id, $params);
        return $result;
    }

    public function create(array $params) {
        $result = $this->db->insert($this->table, $params);
        return $result;
    }

    function removeById($id) {
        $result = $this->db->delete($this->table, $id);
        return $result;
    }
}
