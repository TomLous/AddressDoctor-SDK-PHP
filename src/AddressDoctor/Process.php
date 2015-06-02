<?php

namespace AddressDoctor;

class Process
{

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var Parameters $parameters
     */
    protected $parameters = null;

    /**
     * @var ArrayOfAddress $addresses
     */
    protected $addresses = null;

    /**
     * @var ArrayOfEnrichment $enrichments
     */
    protected $enrichments = null;

    /**
     * @param string $login
     * @param string $password
     * @param Parameters $parameters
     * @param ArrayOfAddress $addresses
     * @param ArrayOfEnrichment $enrichments
     */
    public function __construct($login, $password, $parameters, $addresses, $enrichments)
    {
      $this->login = $login;
      $this->password = $password;
      $this->parameters = $parameters;
      $this->addresses = $addresses;
      $this->enrichments = $enrichments;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->login;
    }

    /**
     * @param string $login
     * @return \AddressDoctor\Process
     */
    public function setLogin($login)
    {
      $this->login = $login;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \AddressDoctor\Process
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return Parameters
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param Parameters $parameters
     * @return \AddressDoctor\Process
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

    /**
     * @return ArrayOfAddress
     */
    public function getAddresses()
    {
      return $this->addresses;
    }

    /**
     * @param ArrayOfAddress $addresses
     * @return \AddressDoctor\Process
     */
    public function setAddresses($addresses)
    {
      $this->addresses = $addresses;
      return $this;
    }

    /**
     * @return ArrayOfEnrichment
     */
    public function getEnrichments()
    {
      return $this->enrichments;
    }

    /**
     * @param ArrayOfEnrichment $enrichments
     * @return \AddressDoctor\Process
     */
    public function setEnrichments($enrichments)
    {
      $this->enrichments = $enrichments;
      return $this;
    }

}
