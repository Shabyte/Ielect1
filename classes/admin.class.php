<?php
require_once("database.php");

class AdminAccount {
    protected $db;

    function __construct() {
        $this->db = new Database();
    }

    function getAllAdmins() {
        $connection = $this->db->connect();
        $sql = "SELECT * FROM adminusers";
        $query = $connection->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
