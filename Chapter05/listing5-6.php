<?php
$unicode = "�t�";
echo $unicode;

$binary = (binary)$unicode;
echo $binary;

$unicode2 = (unicode)$binary;
echo $unicode2;
