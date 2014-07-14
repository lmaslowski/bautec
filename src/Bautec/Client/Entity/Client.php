<?php
namespace Bautec\Client\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @Table(name="client")
 */
class Client{
    
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
    */
    private $id;
    
    /**
     * @Column(type="string")
     */
    private $name;
}