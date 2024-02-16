<?php

require_once 'database.php';

Class Voter{
    //attributes

    public $student_id ;
    public $first_name;
    public $last_name;
    public $course;
    public $department;
    public $password;
    public $status;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods


    // Update show method to include new columns
function show(){
    $sql = "SELECT * FROM voters ORDER BY last_name ASC, first_name ASC;";
    $query = $this->db->connect()->prepare($sql);
    $data = null;
    if($query->execute()){
        $data = $query->fetchAll();
    }
    return $data;
}

// New method to update online status
function updateOnlineStatus($voterId, $status){
    $sql = "UPDATE voters SET online_status = ? WHERE id = ?";
    $query = $this->db->connect()->prepare($sql);
    return $query->execute([$status, $voterId]);
}

// New method to update vote status
function updateVoteStatus($voterId, $status){
    $sql = "UPDATE voters SET vote_status = ? WHERE id = ?";
    $query = $this->db->connect()->prepare($sql);
    return $query->execute([$status, $voterId]);
}

    function is_username_exist(){
        $sql = "SELECT * FROM voter WHERE username = :student_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':username', $this->student_id);
        if($query->execute()){
            if($query->rowCount()>0){
                return true;
            }
        }
        return false;
    }
}

?>