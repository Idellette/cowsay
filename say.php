<?php

namespace CowSay;
class say
{
    public string $message;
    
    public function say(string $lang = 'fr'): string
    {
       
            $message = 'Hello, Farm!';
        
        
        return $message;
    }

}