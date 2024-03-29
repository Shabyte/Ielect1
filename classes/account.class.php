<?php

require_once 'database.php';

class UserAccount {
    protected $db;

    function __construct() {
        $this->db = new Database();
    }

    function ifUsernameExists($username) {
        $sql = "SELECT * FROM adminusers WHERE username = :username;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->execute();
        
        return $query->rowCount() > 0;
    }

    function verifyPassword($username, $password) {
        $sql = "SELECT * FROM adminusers WHERE username = :username;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->execute();
        
        // Check if username exists
        if($query->rowCount() > 0) {
            // Fetch user data
            $user = $query->fetch(PDO::FETCH_ASSOC);
            // Verify password
            if(password_verify($password, $user['password'])) {
                return true; // Username and password match
            }
        }
        return false;
    }
}

?>
