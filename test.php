<?php 
$rsel = array('first_name'=>'prabu','last_name'=>'ks','email_address'=>'prabhudil@gmail.com','contact_type'=>'RESELLER','contact_telephone'=>'',
    "phone"=>'33123');


if(($r == $e) && (array_key_exists('first_name', $rsel)))
{
    $result = 'Ok';
}
else
{
    $result = 'Not Ok';
}
echo $result;

echo "test1213";
