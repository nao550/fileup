<?php

include_once('config.php');

class FileUP 
{
    private $name; // File name.
    private $path; // File path.
   
    public function ReceiveFile( $ftmp, $fname ){
        if (move_uploaded_file($ftmp, UPDIR . $fname )){
            chmod(UPDIR . $fname , 0644);
            return 0;
        } else {
            return 1;
        }
    }


                        
}
