<?php

$list = array('luna','llaves','limonada');

//Normal alphabetical sort, lla before lu
sort($list);
print_r($list);

//Collated sort, lla after lu
locale_set_default('es_VE@collation=traditional');
sort($list, SORT_LOCALE_STRING);
print_r($list);