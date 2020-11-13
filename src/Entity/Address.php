<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\AddressRepository;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Embeddable */
class Address
{
    /** @ORM\Column(type="string", length=255) * */
    private $street;

    /** @ORM\Column(type="integer") * */
    private $streetNumber;

    /** @ORM\Column(type="string", length=255) * */
    private $city;

    /** @ORM\Column(type="integer") * */
    private $zipcode;

/*    public function __construct(string $street, int $streetNumber, string $city, int $zipcode)
    {
        $this->street = $street;
        $this->streetNumber = $streetNumber;
        $this->city = $city;
        $this->zipcode = $zipcode;
    }*/

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet(string $street)
    {
        $this->street = $street;
    }

    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    public function setStreetNumber(int $streetNumber)
    {
        $this->streetNumber = $streetNumber;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity(string $city)
    {
        $this->city = $city;
    }

    public function getZipcode()
    {
        return $this->zipcode;
    }

    public function setZipcode(int $zipcode)
    {
        $this->zipcode = $zipcode;
    }
}