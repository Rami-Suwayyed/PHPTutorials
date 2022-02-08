# PHPTutorials
PHP Tutorials Testing


How to run project:
1) Create a database called PHPTutorials
2) create a table users with the following fields:
	- id - int(11)
	-username - varchar(100)
	-email - varchar(100)
	-user_type - varchar(20)
	-password - varchar(100)

How to run tow  project loginform and Admin-and-user-login:
3) Create a database called multi_login
4) create a table users  with the following fields:
	- id - int(11)
	-username - varchar(100)
	-email - varchar(100)
	-user_type - varchar(20)
	-password - varchar(100)
5) create a table users2  with the following fields:
	- id - int(11)
	-username - varchar(100)
	-email - varchar(100)
	-password - varchar(100)
6) create a table client with the following fields:
	- id - int(11)
	-role - enum('admin', 'user')
	-username - varchar(100)
	-email - varchar(100)
	-user_type - varchar(20)
	-password - varchar(100)

7) Start apache and mysql and launch site on browser
8) In order to create an admin, use a client like phpmyadmin and manually create a user with user_type admin. Use this user to login and be able to create other users.





Thanks
