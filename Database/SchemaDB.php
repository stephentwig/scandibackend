<?php

class SchemaDB
{
    const  SERVER_NAME = "https://ipublishinghouse.com";
    const  USERNAME = "ipublis3_scandiwebapp_root";
    const  PASSWORD = "k4obnSWWd@wu";
    const  DB_NAME = "ipublis3_scandiwebapp";
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