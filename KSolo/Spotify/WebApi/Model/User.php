<?php

namespace KSolo\Spotify\WebApi\Model;

/**
 * @see https://developer.spotify.com/web-api/object-model/#user-object-private
 */
class User extends UserPublic
{
    /**
     * @var string
     */
    private $birthdate;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $product;

    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function getBirthdate()
    {
        return $this->birthdate;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    public function getProduct()
    {
        return $this->product;
    }
}
