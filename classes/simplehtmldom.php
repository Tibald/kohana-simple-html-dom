<?php defined('SYSPATH') or die('No direct script access.');

class Simplehtmldom{
    
    public static function init(){ 
        
        require Kohana::find_file('vendor', 'simplehtmldom/simple_html_dom');  
        
    }
    
}