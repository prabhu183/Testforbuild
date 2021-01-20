<?php
$r = 0;
$e = 0;

$rsel = array('first_name'=>'prabu','last_name'=>'ks','email_address'=>'prabhudil@gmail.com','contact_type'=>'RESELLER','contact_telephone'=>'');


if(($r == $e) && (array_key_exists('first_name', $rsel)))
{
    $result = 'Ok';
}
else
{
    $result = 'Not Ok';
}
echo $result;