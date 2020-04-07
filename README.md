<p align="center"><h1>Steve Nyanumba<small> (111812)</small></h1></p>
<p align="center">
<a href="https://api-cat-ii.herokuapp.com"><img src="https://res.cloudinary.com/indysigner/image/fetch/f_auto,q_auto/w_400/https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/c28d1061-95a7-44bf-b469-f6172ac28dfe/svg-arduino-pushbutton-image3.svg" alt="Click to my App" width="80"></a>
click the button to go to the app
</p>

## About My App

As a class we were required to make a simple application using Laravel for a student's fee payment manager.
Think of the relationships between a ‘student’ and ‘fees payment’ in a school environment.  There is a form used to register a student (with details, student number, full name, date of birth and address) and another form used to record a fee payment (with details student that is paying fees, date of payment and amount) instance. Because it is not possible for all the students to pay their fees once, they are allowed to pay in ‘bits’. This means one student pays fees once or many times. 

### Requirements
1.	Set your database variables in your .env file
2.	In your Laravel folder structure, create a folder (the name of this folder should be your student name) in views folder. This folder will hold all your views in this work. 
3.	Create 2 views to hold forms for registering a new student and for paying fees. Name the views as student.blade.php and fees.blade.php respectively. 
4.	Create a home view (give name of your choice) such that when one visits 127.0.0.1:8000, they see a view with 2 links as follows:
-	Student – When clicked, shows a form used to register a new student
-	Fees – when clicked, shows a form used to record new fees payment by a student. 
5.	Create two models (from Laravel command line) Student and Fees together with their migration files. Complete the migration files to show the all the data they will store. Use appropriate data types. 
-	Record the Laravel commands you used to create your models
-	Show how the migration files looks like after you update
-	Which commands do you use to finally create your table? 
6.	Write two methods, one in each model to bring out this relationship, ‘Student owns many fees payments and that fees payments belongs to Students’. Show the methods. 
7.	Create a controller for each model. Which command did you use? 
8.	When data in the form are submitted, it is saved as follows 
-	Students form saves data into a table called ‘students’
-	Fees payment forms saves data into fees table. 
-	All form data must be validated in Laravel 

## Credits
<p>
<h3>University:</h3><h5> Strathmore university</h5>
</p>
<p>
<h3>Course:</h3><h5> BBIT</h5>
</p>
<p>
<h3>Unit:</h3><h5> Application Programing for the internet (Lec. D. Mosoti)</h5>
</p>
