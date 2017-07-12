<?php

// Report all PHP errors (see changelog)
error_reporting(E_ALL);

class Db{

    private $pdo;
    private $host;
    private $dbname;
    private $dbuser;
    private $dbpass;

    public function __construct(){

        $this->dbHost = "localhost";
        $this->dbName = "tallertest";
        $this->dbUser = "root";
        $this->dbPass = "root";

        $this->dbConnect();
    }

    private function dbConnect(){

        try {
            $this->pdo = new PDO('mysql:host='.$this->dbHost.';dbname='.$this->dbName.';charset=utf8mb4', $this->dbUser, $this->dbPass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function select($table, array $params = []) {

        $sql = "SELECT * FROM " . $table . " WHERE 1=1 ";

        if(!empty($params)) {

            $i = 1;
            foreach($params as $key => $value) {
                $sql .= " AND " . $key . " = :" . $i ." ";
                $i++;
            }
        }

        $stmt = $this->pdo->prepare($sql);

        if(!empty($params)) {
            $i = 1;
            foreach ($params as $key => $value) {
                $stmt->bindValue(':'.$i, $value);
                $i++;
            }
        }

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            return $e->getMessage();
        }

        return $stmt->fetchAll();
    }

    public function update($table, $id, $params) {

        $sql = "UPDATE " . $table . " SET ";

        $i = 1;
        foreach ($params as $key => $value) {

            if($i > 1) {
                $sql .= ", ";
            }

            $sql .= " " . $key . " = :" . $i . " ";
            $i++;
        }

        $sql .= " WHERE id = :id ";

        $stmt = $this->pdo->prepare($sql);

        $i = 1;
        foreach ($params as $key => $value) {
            $stmt->bindValue(':'.$i, addslashes($value));
            $i++;
        }
        
        $stmt->bindValue(':id', $id);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            return $e->getMessage();
        }

        return true;
    }

    public function insert($table, $params) {

        //$sql = "INSERT INTO TABLE (CAMPOS) VALUES (VALORES)";
        $sql = "INSERT INTO " . $table . " ( ";

        $i = 0;
        foreach ($params as $key => $value) {

            if($i > 0){
                $sql .= ", ";
            }

            $sql .= " " . $key . " ";
            $i++;
        }

        $sql .= " ) VALUES ( ";

        $i = 0;
        foreach ($params as $key => $value) {

            if($i > 0){
                $sql .= ", ";
            }

            $sql .= " :" . $key . " ";
            $i++;
        }

        $sql .= " ) ";

        $stmt = $this->pdo->prepare($sql);

        $i = 0;
        foreach ($params as $key => $value) {
            $stmt->bindValue(':'. $key, addslashes($value));
        }

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            return $e->getMessage();
        }

        return $this->pdo->lastInsertId();
    }

    public function delete($table, $id) {

        $sql = "DELETE FROM " . $table . " WHERE id = :id ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            return $e->getMessage();
        }

        return true;
    }
}
