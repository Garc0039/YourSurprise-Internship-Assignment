#YourSurprise Assignment
## Steps to Run
1. Clone the repo to your PC
2. Connect the Laravel Project to your Server provider of choice (example of XAMPP: open the host file under C:\Windows\System32\drivers\etc and add a 127.0.0.0 IP with a name which are both not used such as: 127.0.0.8 yourSurprise, then enter XAMPP under C:\xampp\apache\conf\extra or wherever it might be on your PC and add a virtualhost tag to it with the same IP as before and the path to the folder where the code is, ensure to replace the / with \ else it will not work)
3. Create a database in your DB Environment of choice (such as PHPMYADMIN)
4. Change the variables in the ENV file to connect the github folder to your DB Provider
5. Open the terminal within the github folder and run 'php artisan migrate --seed'

## Assignment 1
Access /public/posts for this assignment, you can alter the user number the scirpt witin /resources/views/posts/index.blade.php

## Assignment 2
Access /public/likes to get the posts liked by the user, you can alter the user number in LikesController

## Assignment 3
Access /public/registers/create to create a new user
Access /public/register to see what users are registered for this

