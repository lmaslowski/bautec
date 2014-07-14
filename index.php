<?php
use Bautec\Client\Service\ClientServiceImpl;
use Tests\Bautec\Client\Service\ClientServiceImplTest;
use Bautec\Client\Entity\Client;


require 'vendor/autoload.php';

$client = new ClientServiceImpl();
$clienttest = new ClientServiceImplTest();
$clientEntity = new Client();


echo get_class($client);
echo get_class($clienttest);
echo get_class($clientEntity);