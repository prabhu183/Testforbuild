<?php 

/* 
 * A coomon class file which handle all the MySQL related statements.
 */

// TELL MYSQLI TO THROW EXCEPTIONS INSTEAD OF REPORTING ERRORS

$Resellres = array_filter($rsel, function($value,$key)
        {
            return ($key == 'contact_telephone') ? true : (empty(trim($value)) ? false  : true);
        },ARRAY_FILTER_USE_BOTH);

print_r($Resellres);      

echo count($rsel).'---'.count($Resellres);