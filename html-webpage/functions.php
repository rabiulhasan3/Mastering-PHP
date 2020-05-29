<?php
    function isGroupChecked($inputName,$value){
        
        if(isset($_GET[$inputName]) && is_array($_GET[$inputName]) && !empty($_GET[$inputName])){
            if(in_array($value,$_GET[$inputName])){
                echo " checked ";
            }
        }
    }


    function displayOptions($options,$selectedRelations){       
        foreach($options as $option){
            $selected = '';
            if(in_array(strtolower($option),$selectedRelations)){
                $selected = " selected ";
            }
            
            printf("<option value='%s' %s>%s</option>",strtolower($option),$selected,ucfirst($option));
        }
    }
