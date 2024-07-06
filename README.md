# Robot-Control-Web-Interface

# Description
This project focuses on creating a web-based control interface for a robot's movement and integrating it with a database to track commands. The system consists of two main tasks:

https://github.com/GDHadeel/Robot-Control-Web-Interface/assets/126657301/3ec38166-3d0c-41a1-a984-958d2b7331f6

---

## Task 1: Control Page Implementation
* Control Page ([index.html](https://github.com/GDHadeel/Robot-Control-Web-Interface/blob/main/index.html)):
  * Provides a user-friendly interface with directional buttons (forward, backward, left, right, stop).
  * Sends commands to the server using fetch() in JavaScript.

* Server-side Handling ([move.php](https://github.com/GDHadeel/Robot-Control-Web-Interface/blob/main/move.php)):
  * Receives commands via POST requests.
  * Stores commands in a MySQL database (robot_controller).

![Picture1](https://github.com/GDHadeel/Robot-Control-Web-Interface/assets/126657301/9f822cfb-50fa-4695-8dee-07b229d71316)

---

## Task 2: Data Display Page
* Latest Command Display ([list_commands.php](https://github.com/GDHadeel/Robot-Control-Web-Interface/blob/main/list_commands.php)): 
 * Retrieves the latest command from the database.
 * Displays the command on a dedicated webpage.

![Picture2](https://github.com/GDHadeel/Robot-Control-Web-Interface/assets/126657301/8df1d978-8f50-4ef2-aeec-acd2c1434596)


### Built With:
 * Frontend: HTML, CSS (styled for responsiveness and usability).
 * Backend: PHP for server-side processing and MySQL for database management.

### Setup Instructions:
1. Database Configuration:
 * Create a MySQL database named robot_controller.
 * Use provided SQL queries to set up the commands table.
   
2. Deployment:
 * Host the files (index.html, move.php, list_commands.php) on a PHP-supported web server.
 * Ensure proper configuration of server environment variables (e.g., localhost, database credentials).
   
3. Usage:
 * Access index.html to control the robot's movement.
 * Visit list_commands.php to view the latest command recorded.

---

# Acknowledgments
https://www.javatpoint.com/sql-select-last#:~:text=The%20LAST()%20function%20in,specified%20column%20of%20the%20table.

https://freefrontend.com/css-buttons/#google_vignette
