<?php
echo "about page";
    $data = array( 
           'roll_no' => "1", 
           'name' => "clince" 
                ); 

$this->db->insert("stud", $data);