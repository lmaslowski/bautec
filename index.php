<?php
use Bautec\Client\Service\ClientServiceImpl;
use Tests\Bautec\Client\Service\ClientServiceImplTest;


require 'vendor/autoload.php';

$client = new ClientServiceImpl();
$clienttest = new ClientServiceImplTest();

echo get_class($client);
echo get_class($clienttest);