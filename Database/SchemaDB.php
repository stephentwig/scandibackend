<?php

class SchemaDB
{
    const  SERVER_NAME = "";
    const  USERNAME = "";
    const  PASSWORD = "";
    const  DB_NAME = "";
    protected $conn;

    public function databaseConnection()
    {
        $this->conn = new \mysqli(self::SERVER_NAME, self::USERNAME, self::PASSWORD, self::DB_NAME);

        if ($this->conn->connect_error) {
            return (['error_message' => 'Connection failed: ' . $this->conn->connect_error]);
        }
        return $this->conn;
    }


}
