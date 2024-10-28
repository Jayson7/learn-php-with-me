<?php
// This line starts the PHP code for this file

require_once 'Task.php'; // Imports the Task class so we can create and manipulate Task objects

class TaskManager {
    private $tasksFile = 'tasks.json'; // Defines the filename for storing tasks
    private $tasks = [];               // Array to hold task objects

    // Constructor: loads tasks from file upon initialization
    public function __construct() {
        $this->loadTasks();             // Calls the loadTasks method to populate the $tasks array from tasks.json
    }

    // Method to load tasks from the JSON file
    private function loadTasks() {
        if (file_exists($this->tasksFile)) {   // Checks if tasks.json exists
            $data = file_get_contents($this->tasksFile);   // Reads file content
            $tasksArray = json_decode($data, true) ?? [];  // Decodes JSON into an array; defaults to an empty array if null
            foreach ($tasksArray as $taskData) {
                $this->tasks[] = new Task($taskData['id'], $taskData['description'], $taskData['isComplete']); 
                // Creates Task objects and adds them to the $tasks array
            }
        }
    }

    // Method to save tasks to the JSON file
    private function saveTasks() {
        $data = array_map(fn($task) => [
            'id' => $task->id,
            'description' => $task->description,
            'isComplete' => $task->isComplete,
        ], $this->tasks);  // Maps each task to an associative array format

        file_put_contents($this->tasksFile, json_encode($data, JSON_PRETTY_PRINT)); // Saves as JSON
    }

    // Method to add a new task
    public function addTask($description) {
        $id = count($this->tasks) + 1;      // Calculates a new ID based on current task count
        $task = new Task($id, $description); // Creates a new Task object
        $this->tasks[] = $task;             // Adds the new task to the tasks array
        $this->saveTasks();                 // Saves the updated tasks array
        echo "Task added successfully!\n";  // Confirms task addition
    }

    // Method to view all tasks
    public function viewTasks() {
        foreach ($this->tasks as $task) {           // Iterates through each task in the array
            $status = $task->isComplete ? 'Complete' : 'Incomplete'; // Sets task status as Complete or Incomplete
            echo "[$task->id] $task->description - $status\n";       // Displays task ID, description, and status
        }
    }

    // Method to mark a task as complete
    public function completeTask($id) {
        foreach ($this->tasks as $task) {         // Iterates through tasks
            if ($task->id == $id) {               // Finds the task with the matching ID
                $task->markComplete();            // Calls the task's markComplete method
                $this->saveTasks();               // Saves the updated tasks array
                echo "Task #$id marked as complete.\n"; // Confirms completion update
                return;
            }
        }
        echo "Task not found.\n"; // Message if no matching task is found
    }

    // Method to delete a task by ID
    public function deleteTask($id) {
        $this->tasks = array_filter($this->tasks, fn($task) => $task->id != $id); // Removes tasks with the given ID
        $this->saveTasks();                         // Saves the updated tasks array
        echo "Task #$id deleted.\n";                // Confirms deletion
    }
}
?>