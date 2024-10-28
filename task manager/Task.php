<?php
// This line starts the PHP code for this file

class Task {
    public $id;             // Property for the unique ID of the task
    public $description;    // Property for the task's description
    public $isComplete;     // Property for whether the task is completed or not

    // Constructor to initialize the task with an ID, description, and completion status
    public function __construct($id, $description, $isComplete = false) {
        $this->id = $id;                    // Assigns the provided ID to the task's ID property
        $this->description = $description;  // Assigns the provided description to the task's description property
        $this->isComplete = $isComplete;    // Sets completion status; defaults to false if not provided
    }

    // Method to mark the task as complete
    public function markComplete() {
        $this->isComplete = true;           // Changes the task's isComplete property to true
    }
}
?>