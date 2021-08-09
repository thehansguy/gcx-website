// Session 
if (!isset($_SESSION)) {
    session_start();
    }
date_default_timezone_set('Africa/Accra');  
session_save_path('sessions/');