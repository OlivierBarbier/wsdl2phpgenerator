<?php
require 'vendor/autoload.php';

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(new \Wsdl2PhpGenerator\Config(array(
	'inputFile' => 'zuora.a.71.0.wsdl', 
	'outputDir' => '/tmp/output'))
);
