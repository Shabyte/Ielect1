<?php

require_once 'database.php';

class UserAccount {
    protected $db;

    function __construct() {
        $this->db = new Database();
    }

    function ifUsernameExists($username) {
        // Check if the username exists in the adminusers table
        $sql = "SELECT * FROM adminusers WHERE username = :username;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->execute();
        
        if ($query->rowCount() > 0) {
            return true;
        }
        
        // Check if the username exists in the voters table
        $sql = "SELECT * FROM voters WHERE student_id = :student_id;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':student_id', $student_id, PDO::PARAM_STR);
        $query->execute();
        
        return $query->rowCount() > 0;
    }

    function verifyPassword($username, $password) {
        // Verify the password for the given username in the adminusers table
        $sql = "SELECT * FROM adminusers WHERE username = :username;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->execute();
        
        if ($query->rowCount() > 0) {
            $user = $query->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $user['password'])) {
                // Check user's role and redirect accordingly
                switch ($user['role']) {
                    case 'moderator':
                        header("Location: ../moderator/mod.php");
                        exit();
                        break;
                    case 'superadmin':
                        header("Location: dashboard.php");
                        exit();
                        break;
                    case 'subadmin':
                        header("Location: ../sub-admin/sub-admin.php");
                        exit();
                        break;
                    default:
                        // Display an error message
                        echo "Error: Role Not Recognized";
                        exit();
                }
            }
        }
        
        // Verify the password for the given username in the voters table
        $sql = "SELECT * FROM voters WHERE student_id = :student_id;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':student_id', $student_id, PDO::PARAM_STR);
        $query->execute();
        
        if ($query->rowCount() > 0) {
            $user = $query->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $user['password'])) {
                // Handle successful login for voters
                // Redirect or perform any necessary actions
                header("Location: ../voting-system/landingpage.php");
                exit();
            }
        }
        
        // Redirect to login page if authentication fails
        header("Location: index.php");
        exit();
    }
}

?>
