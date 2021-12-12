## Sending Email with html template from your custom domain using PHPMAiler library : https://github.com/PHPMailer/PHPMailer

### You would need:
* PHP Installed
* PHPMailer Library in the folder of the sending script

### configure config.php files:
* Add Host: the Host should be your domain name
* Add user: Every shared hosting has a mail section where you can setup email account
for your domain. Set one there and grab the username.
* Add password: the email account was surely created with a password, kindly add that
* Add sender's email address
* Add more config params as you wish ...

## Add a template
* You can grad an email template here  https://unlayer.com/templates
* The one in this sample project was downloaded from https://unlayer.com/templates
* For any given template modify the body and ensure to put as function parameters any dynamic value 
that will figure in your template 
* Every image in your template must have a valid public url. Meaning one should be able to grab 
the link and view it in the browser

You are all set 

## Run script:
* Host files on the server and run the index.php
* If you have any challenge, you can raise an issue.
* Feel free to make any correction raise a pull request  

* Enjoy!!!

### Important:
* This project does not make use of composer 
* The file in the PHPMailer directory so i can not guarantee its safety. 
You can grab a copy here: https://github.com/PHPMailer/PHPMailer to be sure.

