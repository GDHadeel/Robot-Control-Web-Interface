# Robot-Control-Web-Interface

# Description
This project focuses on creating a web-based control interface for a robot's movement and integrating it with a database to track commands. The system consists of two main tasks:

## Task 1: Control Page Implementation
* Control Page ([index.html](https://www.digitalocean.com/community/tutorial_series/an-introduction-to-open-source)):
  * Provides a user-friendly interface with directional buttons (forward, backward, left, right, stop).
  * Sends commands to the server using fetch() in JavaScript.

* Server-side Handling ([move.php](https://www.digitalocean.com/community/tutorial_series/an-introduction-to-open-source)):
  * Receives commands via POST requests.
  * Stores commands in a MySQL database (robot_controller).

![Picture1](https://github.com/GDHadeel/Robot-Control-Web-Interface/assets/126657301/9f822cfb-50fa-4695-8dee-07b229d71316)


## Task 2: Data Display Page
* Latest Command Display ([list_commands.php](https://www.digitalocean.com/community/tutorial_series/an-introduction-to-open-source)): 
 * Retrieves the latest command from the database.
 * Displays the command on a dedicated webpage.

![Picture2](https://github.com/GDHadeel/Robot-Control-Web-Interface/assets/126657301/8df1d978-8f50-4ef2-aeec-acd2c1434596)




# Acknowledgments
https://www.youtube.com/watch?v=tIXLJM-McRA&list=LL&index=6&t=19s
