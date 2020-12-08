<?php
namespace Libs;

class Model {
    protected $table;
    private $db;
    public function __construct()
    {
        $dbConfig = @require './Configs/database.php';
        $dsn = 'mysql:host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['dbname'] . ';charset=' . $dbConfig['charset'];
        try{
            $this->db = new \PDO($dsn, $dbConfig['user'], $dbConfig['password']);
            $this->db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }

    public function first($where = '', $fields = [])
    {
        if (empty($fields)) {
            $fields = '*';
        } else {
            $fields = implode(',', $fields);
        }

        $sql = 'select ' . $fields . ' from ' . $this->table;

        if (!empty($where)) {
            $sql .= ' where ' . $where;
        }
        $result = $this->db->query($sql);
        return $result->fetch();
    }

    public function get($where = '', $order = '', $limit = '', $fields = [])
    {
        if (empty($fields)) {
            $fields = '*';
        } else {
            $fields = implode(',', $fields);
        }
        $sql = 'select ' . $fields . ' from ' . $this->table;


        if (!empty($where)) {
            $sql .= ' where ' . $where;
        }
        if (!empty($order)) {
            $sql .= ' order by ' . $order;
        }
        if (!empty($limit)) {
            $sql .= ' limit ' . $limit;
        }
        $result = $this->db->query($sql);
        return $result->fetchAll();
    }

    public function update($data, $where = '') {
        if (!is_array($data) || empty($data)) return false;
        $sql = 'update ' . $this->table . ' set ';
        $setData = '';
        foreach ($data as $key => $val) {
            if (is_string($val)) {
                $setData .= $key . '="' . $val . '",';
            } else {
                $setData .= $key . '=' . $val . ',';
            }

        }
        $sql .= rtrim($setData, ',');
        if (!empty($where)) {
            $sql .= ' where ' . $where;
        }
        $result = $this->db->exec($sql);
        return $result;
    }

    public function create($data) {
        if (!is_array($data) || empty($data)) return false;
        $fields = '(' . implode(',', array_keys($data)) . ')';
        foreach($data as $key => $val) {
            $data[$key] = '"' . $val . '"';
        }
        $values = '(' . implode(',', array_values($data)) . ')';
        $sql = 'insert ' . $this->table . ' ' . $fields . ' values ' . $values;
        $result = $this->db->exec($sql);
        return $result;
    }

    public function beginTransaction() {
        $this->db->beginTransaction();
    }

    public function commit() {
        $this->db->commit();
    }

    public function rollback() {
        $this->db->rollBack();
    }
}