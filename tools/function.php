<?php

function validate_field($field){
    $field = htmlentities($field);
    if (strlen(trim($field)) < 1) {
        return false;
    } else {
        return true;
    }
}

function validate_number($field){
    $field = htmlentities($field);
    if ($field < 1) {
        return false;
    } else {
        return true;
    }
}

function validate_username($student_id){
    // Check if the 'email' key exists in the $_POST array
    if (isset($student_id)) {
        $student_id = trim($student_id); // Trim whitespace
        // Check if the student_id is not empty
        if (empty($student_id)) {
            return 'Email is required';
        } elseif (!filter_var($student_id, FILTER_VALIDATE_EMAIL)) {
            // Check if the email has a valid format
            return 'User is in an invalid format';
        } else {
            return 'success';
        }
    } else {
        return 'Username is required'; // 'email' key doesn't exist in $_POST
    }
}

function validate_password($password) {
    $password = htmlentities($password);
    
    if (strlen(trim($password)) < 1) {
        return "Password cannot be empty";
    } elseif (strlen($password) < 8) {
        return "Password must be at least 8 characters long";
    } else {
        return "success"; // Indicates successful validation
    }
}

?>
