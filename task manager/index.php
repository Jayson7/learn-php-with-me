<?php
// This line starts the PHP code for this file

require_once 'TaskManager.php'; // Imports the TaskManager class to manage tasks

$taskManager = new TaskManager(); // Creates an instance of TaskManager

// Display the menu options to the user
echo "PHP Task Manager\n";
echo "Commands:\n";
echo "1. Add Task\n";
echo "2. View Tasks\n";
echo "3. Complete Task\n";
echo "4. Delete Task\n";
echo "5. Exit\n";

while (true) {                        // Infinite loop to keep the program running until exit
    echo "\nEnter command number: ";   // Prompt for the user to enter a command
    $command = trim(fgets(STDIN));     // Reads user input, trims whitespace

    // Executes the selected command
    switch ($command) {
        case '1':
            echo "Enter task description: ";
            $description = trim(fgets(STDIN));  // Gets task description from the user
            $taskManager->addTask($description); // Calls addTask method
            break;

        case '2':
            echo "Task List:\n";
            $taskManager->viewTasks();           // Calls viewTasks method
            break;

        case '3':
            echo "Enter task ID to mark complete: ";
            $id = trim(fgets(STDIN));            // Gets task ID from the user
            $taskManager->completeTask($id);      // Calls completeTask method
            break;

        case '4':
            echo "Enter task ID to delete: ";
            $id = trim(fgets(STDIN));            // Gets task ID from the user
            $taskManager->deleteTask($id);        // Calls deleteTask method
            break;

        case '5':
            echo "Exiting...\n";                 // Exit message
            exit();                              // Terminates the program

        default:
            echo "Invalid command. Please try again.\n"; // Handles invalid input
            break;
    }
}
?>