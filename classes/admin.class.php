<?php
require_once("database.php");

class AdminAccount {
    protected $db;

    function __construct() {
        $this->db = new Database();
    }

    function insertAdmin($admin_id, $userName, $password, $department, $course, $role) {
        try {
            $connection = $this->db->connect();
            $sql = "INSERT INTO adminusers (admin_id, userName, password, department, course, role) 
                    VALUES (:admin_id, :userName, :password, :department, :course, :role)";
            $query = $connection->prepare($sql);
            $query->bindParam(':admin_id', $admin_id);
            $query->bindParam(':userName', $userName);
            $query->bindParam(':password', $password);
            $query->bindParam(':department', $department);
            $query->bindParam(':course', $course);
            $query->bindParam(':role', $role);
            return $query->execute();
        } catch(PDOException $e) {
            // Handle database error
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function getAdminById($adminId) {
        try {
            $connection = $this->db->connect();
            $sql = "SELECT * FROM adminusers WHERE id = :id";
            $query = $connection->prepare($sql);
            $query->bindParam(':id', $adminId);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            // Handle database error
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function updateAdmin($adminId, $userName, $department, $course, $role, $status) {
        try {
            $connection = $this->db->connect();
            $sql = "UPDATE adminusers 
                    SET userName = :userName, department = :department, course = :course, role = :role, status = :status 
                    WHERE id = :id";
            $query = $connection->prepare($sql);
            $query->bindParam(':id', $adminId);
            $query->bindParam(':userName', $userName);
            $query->bindParam(':department', $department);
            $query->bindParam(':course', $course);
            $query->bindParam(':role', $role);
            $query->bindParam(':status', $status);
            return $query->execute();
        } catch(PDOException $e) {
            // Handle database error
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function getAllAdmins() {
        try {
            $connection = $this->db->connect();
            $sql = "SELECT * FROM adminusers";
            $query = $connection->prepare($sql);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            // Handle database error
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    function countAllAdmins() {
        try {
            $connection = $this->db->connect();
            $sql = "SELECT COUNT(*) AS total FROM adminusers";
            $query = $connection->prepare($sql);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result['total'];
        } catch(PDOException $e) {
            // Handle database error
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    
}
?>
