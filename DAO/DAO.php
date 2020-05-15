<?php

class DAO {
    const DB_HOST = 'mysql:host=localhost;dbname=book;port=3308';
    const DB_USER = 'root';
    const DB_PASS = '';
    private $connection; //store the connection to database if there is one, if not, return null
    
    /**
     * checkConnection
     * check if there is a connection to database, if not, create one
     * return the connection
     * @return mixed
     */
    protected function checkConnection() {
        if ($this->connection===null) {
            return $this->dbConnection();
        }
        return $this->connection;
    }
    
    /**
     * dbConnection
     * try a connection to database and return it if it's successful
     * return an error message if the connection is impossible
     * @return mixed
     */
    private function dbConnection() {
        try {
            $this->connection = new PDO(self::DB_HOST, self::DB_USER, self::DB_PASS); // self:: fait référence à la class, et $this à l'objet
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connection;
        }
        catch (Exception $errConnection) {
            die('Erreur de connection à la base de données :'.$errConnection->getMessage());
        }
    }
    
    /**
     * createQuery
     * create the structure for SQL querys by checking connection and fetch the result
     * @param string $sql
     * @param mixed $parameters
     * @return mixed
     */
    protected function createQuery($sql, $parameters=null) {
        if ($parameters) {
            $result = $this->checkConnection()->prepare($sql);
            $result->setFetchMode(PDO::FETCH_CLASS, static::class);
            $result->execute($parameters);
            return $result;
        }
        $result = $this->checkConnection()->query($sql);
        $result->setFetchMode(PDO::FETCH_CLASS, static::class);
        return $result;
    }
}