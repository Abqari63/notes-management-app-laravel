# prerequisites  
i) XAMPP installed.  
ii) composer installed.  
iii) Node.js installed.

# Steps to run the project

Step 1: Go to the 'xampp/htdocs' directory i.e. where your xampp server for apache is running.  

Step 2: clone the project using the below command in terminal.  
        `git clone https://github.com/Abqari63/notes-management-app-laravel`  
            
Step 3: Now navigate to the cloned project directory using the below command.  
        `cd notes-management-app-laravel`  
            
Step 4: After cloning and navigating to project directory, run the below commands in terminal step by step on the same directory  
        `npm install`  
        `composer install`  
        `php artisan key:generate`  
        
Step 5: Open MySQL from XAMPP and go the phpMyAdmin page make a database with name '***laravel***'.  

Step 6: Now again run the below command in terminal  
        `php artisan migrate`  
        
Step 7: Now final step, open two terminals side by side on one terminal run below command,  
        `npm run dev`  
        on other terminal run below command,  
        `php artisan serve`  
        
        
**Notes management app** is up and running on **localhost:8000**.
        
