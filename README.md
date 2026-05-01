# Team-Task-Manager
🔗 Link to Project

[Team Task Manager](http://team-task-manager.gt.tc/index.php)
------


User for testing:
-----
Email id: Task123@gmail.com

Password: TASK123

----
Description:
----
This Team Task Manager is a comprehensive web-based application designed to help teams organize, track, and manage their daily operations through a centralized platform. Built using PHP and a MySQL database backend, the system provides a secure and intuitive interface for project collaboration and individual task management.

----
 Features
-----
* **User Authentication**
  * Registration & Login:
 Secure signup and login functionality using PHP sessions to manage user access. 
  * Role-Based Access:
 Built-in logic to distinguish between 'admin' and 'member' roles, ensuring only authorized users can perform certain actions like creating projects.  
  * Password Management: 
Includes a full workflow for password recovery and resetting.

* **Project Management**
  * **Project Creation:** Admins can create and name new projects to categorize tasks effectively.
  * **Project Tracking:** Tracks which user created each project for organizational accountability.

* **Task Management**[cite: 3, 10]
  * **Task Creation:** Detailed task entry including title, description, and specific deadlines.
  * **Assignment System:** Tasks are assigned to specific users and linked to existing projects.
  * **Status Updates:** Users can update task statuses between "Pending," "In Progress," and "Completed".
  * **Visual Badges:** Dynamic status badges (Warning for Pending, Primary for In Progress, Success for Completed).

* **Dashboard & Analytics**
  * **Overview Stats:** A visual summary showing Total Tasks, Completed Tasks, Pending Tasks, and Overdue Tasks.
  * **Quick Actions:** Direct shortcuts for creating projects or tasks and viewing the full list.

--------
Technology Stack
----

* **Backend:** PHP 8.x
* **Database:** MySQL (hosted via InfinityFree)
* **Frontend:**
  * **HTML5 & CSS3:** For structural and custom layout design.
  * **Bootstrap 5:** For responsive mobile-first components and grid systems.
* **Libraries & Tools:**
  * **MySQLi:** For secure database interactions and queries.
  * **Bootstrap Icons:** For visual task status indicators and dashboard markers.
  * **PHP Sessions:** To handle user authentication, roles, and secure access control.

------
Project Structure
------
Team-Task-Manager/
├── config.php            # Database connection & session start
├── index.php             # Login page (Entry point)
├── signup.php            # User registration
├── dashboard.php         # Main overview and stats
├── tasks.php             # Task listing and status updates
├── create_project.php    # Admin project creation
├── create_task.php       # Task assignment form
├── forgot_password.php   # Password recovery[cite: 5]
├── reset_password.php    # Password reset form[cite: 8]
├── logout.php            # Session destruction
└── team_task_manager.sql # Database schema export

-------
 Installation & Setup
 ------
### ⚙️ Installation & Setup
---

* **1. Clone the repository**
  * Use the following command to download the project:
  * `git clone https://github.com/Shivavaraprasad6/Team-Task-Manager.git`

* **2. Database Configuration**
  * Create a MySQL database named `if0_41795929_taskm` in your hosting panel or local server.
  * Import the `team_task_manager.sql` file via phpMyAdmin to automatically generate the `users`, `projects`, and `tasks` tables.

* **3. Update Connection**
  * Open `config.php` in a text editor.
  * Update the `$servername`, `$username`, `$password`, and `$dbname` variables with your specific database credentials.

* **4. Run the App**
  * **Local:** Place the project folder inside your local server directory (e.g., `htdocs` for XAMPP or `www` for WAMP).
  * **Remote:** Upload all files to the `htdocs` folder of your InfinityFree account via FTP or File Manager.
  * **Launch:** Open your web browser and navigate to `index.php` (e.g., `http://localhost/Team-Task-Manager/index.php`).
 
 ------ 
  URL Structure
---

* **Authentication Pages**
  * `/index.php` - User login page
  * `/signup.php` - User registration
  * `/logout.php` - Ends session and redirects to login
* **Management & Tracking**
  * `/dashboard.php` - Overview of total, completed, and overdue tasks
  * `/create_project.php` - Admin tool to create new projects
  * `/create_task.php` - Form to assign tasks to members
  * `/tasks.php` - View all tasks and update their status
------







