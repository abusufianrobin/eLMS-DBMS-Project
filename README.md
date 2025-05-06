Admin Features

User Management: Admin can add, update, or delete user accounts for teachers and students.
Class Management: Admin can create, modify, or delete classes and assign teachers to specific classes and arms.
Announcement Management: Admin can post school-wide announcements or assign announcements to specific classes or class arms.
Reports & Analytics: Admin can generate reports on student performance, attendance, and overall class activities.
Permissions & Roles: Admin can assign different levels of access to teachers and students, controlling what they can view and modify.

Teacher Features

Class Management: Teachers can manage the classes assigned to them, including adding or removing students from their class list.
Announcement Posting: Teachers can create announcements specific to their classes or class arms, visible to students under their supervision.
Attendance Tracking: Teachers can take attendance for their classes and track students' attendance records over time.
Resource Sharing: Teachers can upload and share study materials, assignments, and other educational resources with students in their classes.
Counseling Hour Management: Teachers can receive and manage requests from students for counseling hours, and schedule sessions accordingly.

Student Features 

Announcement Viewing: Students can view announcements posted by their teachers or the admin, specific to their class or class arm.
Class Schedule: Students can view their class schedule and any changes made by teachers or the admin.
Attendance Records: Students can view their own attendance records and check for any discrepancies.
Resource Access: Students can download and access study materials, assignments, and other resources uploaded by their teachers.
Counseling Hour Requests: Students can request counseling hours with their class teacher, facilitating one-on-one support or guidance sessions.

This database project aims to streamline the management of classes, announcements, and user roles within an educational institution, providing tailored functionalities for administrators, teachers, and students.

Follow these steps to set up and run the project on your local machine.

1. Install Required Software
✅ Install XAMPP

2. Set Up the Database
✅ Import the SQL database:
  Open your web browser and go to:
        http://localhost/phpmyadmin

Create a new database:

Click New on the left panel.

Enter a database name (e.g., elms_db) and click Create.

Import the provided SQL file:

Select your database (elms_db).

Go to the Import tab.

Choose the .sql file from the project folder (e.g., database.sql).

Click Go to import all tables and data.

3. Set Up the Project Files
✅ Place your project in the htdocs folder:

Go to your XAMPP installation folder, usually:
  Copy your entire project folder (with all PHP, JS, HTML, CSS files) into htdocs. 

4. Configure Database Connection (Optional)
✅ If your project has a database connection file (usually named config.php, database.php, or similar), make sure:

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "elms_db"; // your database name
  $port = ''; // for my project 3306 

  5. Run the Project
✅ Open your browser and visit:
  http://localhost/elms/




📄 License
MIT License

Copyright (c) 2025 [Your Name]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

👤 Author
Name: Abu Sufian Robin

GitHub: @abusufianrobin

Email: abusufian02robin@gmail.com 

