<?php
class Database {
    private $con;// variables for connect
    public function connect()
    {
        $this->con = new Mysqli("localhost", "root","","website");
        return $this->con;
    }
}
?>