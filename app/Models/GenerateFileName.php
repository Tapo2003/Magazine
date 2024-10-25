<?php
    namespace App\Models;
    
    class GenerateFileName{
        public function generateRandomFileName($length){
            $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g',
            'h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
           
            $text = '';

            for($x = 0; $x < $length; $x++){
                $random = rand(0,30);
                $text .= $array[$random];
                
               
            }
            return $text;
        }

        
    }

?>