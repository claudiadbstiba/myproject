Requirements:
Registartion form ->
1. if the form data is not valid, show the form with the user inputs and error messages.
2. if the form is valid, insert the new user into the users database table, set a flash message, redirect the user to login.php page and display the flash message.


Login form:
1. to login, users need to enter their username and password and click the login button;
2. if the username and password match, i redirect them to a password-protected page. Otherwise they will be redirected back to login page with an error message.


Folders and usage:
config: store the configuration file such as database configuration

public: store the public files accesed directly by the users

src: store the source files that should not be exposed to public

src/inc: store the commonly includes files such as the header and footer of a page

src/libs: store the library files such as validation, sanitization.

I have created a .htacces file to remove "public" from the URL. to do so i used URL Rewrite module of the Apache Web Server

to do:
create and implement log out function
create database fo auth, newsletter
when i click on search icon i want to search through the content of my site?
i need to reareange the login button 

contact form:
should have a honeybot to avoid bots messaging.