# prerequisites  
i) XAMPP installed.  
ii) composer installed.  
iii) Node.js installed.

**Open the XAMPP Apache Server**

# Steps to run the project

**Step 1:** Go to the **'c:/xampp/htdocs'** directory i.e. where your xampp server for apache is running.  

**Step 2:** clone the project using the below command in terminal.  
        <pre>`git clone https://github.com/Abqari63/notes-management-app-laravel`</pre>  
            
**Step 3:** Now navigate to the cloned project directory using the below command.  
        <pre>`cd notes-management-app-laravel`</pre>  

**Step 4:** Now rename the file `.env.example` to back to `.env`.
            
**Step 5:** After cloning and navigating to project directory, run the below commands in terminal step by step on the same directory  
        <pre>`npm install`</pre>  
        <pre>`composer install`</pre>  
        <pre>`php artisan key:generate`</pre>  
        
**Step 6:** Open MySQL from XAMPP and go the phpMyAdmin page make a database with name '***laravel***'.  

**Step 7:** Now again run the below command in terminal  
        <pre>`php artisan migrate`</pre>  
        
**Step 8:** Now final step, open two terminals side by side, on one terminal run below command,  
        <pre>`npm run dev`</pre>  
        on other terminal run below command,  
        <pre> `cd notes-management-app-laravel`</pre> 
        <pre>`php artisan serve`</pre>  
        
        
**Notes management app** is up and running on **`localhost:8000`**.
        
