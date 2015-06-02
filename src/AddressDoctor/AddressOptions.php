<?php

namespace AddressDoctor;

class AddressOptions
{

    /**
     * @var string $RecordId
     */
    protected $RecordId = null;

    /**
     * @var string $Organization
     */
    protected $Organization = null;

    /**
     * @var string $Department
     */
    protected $Department = null;

    /**
     * @var string $Contact
     */
    protected $Contact = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $Building
     */
    protected $Building = null;

    /**
     * @var string $SubBuilding
     */
    protected $SubBuilding = null;

    /**
     * @var string $Street
     */
    protected $Street = null;

    /**
     * @var string $HouseNumber
     */
    protected $HouseNumber = null;

    /**
     * @var string $DeliveryService
     */
    protected $DeliveryService = null;

    /**
     * @var string $Locality
     */
    protected $Locality = null;

    /**
     * @var string $PreferredLocality
     */
    protected $PreferredLocality = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $Province
     */
    protected $Province = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $Residue
     */
    protected $Residue = null;

    /**
     * @var string $RecipientLines
     */
    protected $RecipientLines = null;

    /**
     * @var string $DeliveryAddressLines
     */
    protected $DeliveryAddressLines = null;

    /**
     * @var string $CountrySpecificLocalityLine
     */
    protected $CountrySpecificLocalityLine = null;

    /**
     * @var string $FormattedAddress
     */
    protected $FormattedAddress = null;

    /**
     * @var string $AddressComplete
     */
    protected $AddressComplete = null;

    /**
     * @var string $AddressDetailed
     */
    protected $AddressDetailed = null;

    /**
     * @param string $RecordId
     * @param string $Organization
     * @param string $Department
     * @param string $Contact
     * @param string $Email
     * @param string $Building
     * @param string $SubBuilding
     * @param string $Street
     * @param string $HouseNumber
     * @param string $DeliveryService
     * @param string $Locality
     * @param string $PreferredLocality
     * @param string $PostalCode
     * @param string $Province
     * @param string $Country
     * @param string $Residue
     * @param string $RecipientLines
     * @param string $DeliveryAddressLines
     * @param string $CountrySpecificLocalityLine
     * @param string $FormattedAddress
     * @param string $AddressComplete
     * @param string $AddressDetailed
     */
    public function __construct($RecordId, $Organization, $Department, $Contact, $Email, $Building, $SubBuilding, $Street, $HouseNumber, $DeliveryService, $Locality, $PreferredLocality, $PostalCode, $Province, $Country, $Residue, $RecipientLines, $DeliveryAddressLines, $CountrySpecificLocalityLine, $FormattedAddress, $AddressComplete, $AddressDetailed)
    {
      $this->RecordId = $RecordId;
      $this->Organization = $Organization;
      $this->Department = $Department;
      $this->Contact = $Contact;
      $this->Email = $Email;
      $this->Building = $Building;
      $this->SubBuilding = $SubBuilding;
      $this->Street = $Street;
      $this->HouseNumber = $HouseNumber;
      $this->DeliveryService = $DeliveryService;
      $this->Locality = $Locality;
      $this->PreferredLocality = $PreferredLocality;
      $this->PostalCode = $PostalCode;
      $this->Province = $Province;
      $this->Country = $Country;
      $this->Residue = $Residue;
      $this->RecipientLines = $RecipientLines;
      $this->DeliveryAddressLines = $DeliveryAddressLines;
      $this->CountrySpecificLocalityLine = $CountrySpecificLocalityLine;
      $this->FormattedAddress = $FormattedAddress;
      $this->AddressComplete = $AddressComplete;
      $this->AddressDetailed = $AddressDetailed;
    }

    /**
     * @return string
     */
    public function getRecordId()
    {
      return $this->RecordId;
    }

    /**
     * @param string $RecordId
     * @return \AddressDoctor\AddressOptions
     */
    public function setRecordId($RecordId)
    {
      $this->RecordId = $RecordId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrganization()
    {
      return $this->Organization;
    }

    /**
     * @param string $Organization
     * @return \AddressDoctor\AddressOptions
     */
    public function setOrganization($Organization)
    {
      $this->Organization = $Organization;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
      return $this->Department;
    }

    /**
     * @param string $Department
     * @return \AddressDoctor\AddressOptions
     */
    public function setDepartment($Department)
    {
      $this->Department = $Department;
      return $this;
    }

    /**
     * @return string
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param string $Contact
     * @return \AddressDoctor\AddressOptions
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \AddressDoctor\AddressOptions
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuilding()
    {
      return $this->Building;
    }

    /**
     * @param string $Building
     * @return \AddressDoctor\AddressOptions
     */
    public function setBuilding($Building)
    {
      $this->Building = $Building;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubBuilding()
    {
      return $this->SubBuilding;
    }

    /**
     * @param string $SubBuilding
     * @return \AddressDoctor\AddressOptions
     */
    public function setSubBuilding($SubBuilding)
    {
      $this->SubBuilding = $SubBuilding;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->Street;
    }

    /**
     * @param string $Street
     * @return \AddressDoctor\AddressOptions
     */
    public function setStreet($Street)
    {
      $this->Street = $Street;
      return $this;
    }

    /**
     * @return string
     */
    public function getHouseNumber()
    {
      return $this->HouseNumber;
    }

    /**
     * @param string $HouseNumber
     * @return \AddressDoctor\AddressOptions
     */
    public function setHouseNumber($HouseNumber)
    {
      $this->HouseNumber = $HouseNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryService()
    {
      return $this->DeliveryService;
    }

    /**
     * @param string $DeliveryService
     * @return \AddressDoctor\AddressOptions
     */
    public function setDeliveryService($DeliveryService)
    {
      $this->DeliveryService = $DeliveryService;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocality()
    {
      return $this->Locality;
    }

    /**
     * @param string $Locality
     * @return \AddressDoctor\AddressOptions
     */
    public function setLocality($Locality)
    {
      $this->Locality = $Locality;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredLocality()
    {
      return $this->PreferredLocality;
    }

    /**
     * @param string $PreferredLocality
     * @return \AddressDoctor\AddressOptions
     */
    public function setPreferredLocality($PreferredLocality)
    {
      $this->PreferredLocality = $PreferredLocality;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \AddressDoctor\AddressOptions
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProvince()
    {
      return $this->Province;
    }

    /**
     * @param string $Province
     * @return \AddressDoctor\AddressOptions
     */
    public function setProvince($Province)
    {
      $this->Province = $Province;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \AddressDoctor\AddressOptions
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getResidue()
    {
      return $this->Residue;
    }

    /**
     * @param string $Residue
     * @return \AddressDoctor\AddressOptions
     */
    public function setResidue($Residue)
    {
      $this->Residue = $Residue;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientLines()
    {
      return $this->RecipientLines;
    }

    /**
     * @param string $RecipientLines
     * @return \AddressDoctor\AddressOptions
     */
    public function setRecipientLines($RecipientLines)
    {
      $this->RecipientLines = $RecipientLines;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddressLines()
    {
      return $this->DeliveryAddressLines;
    }

    /**
     * @param string $DeliveryAddressLines
     * @return \AddressDoctor\AddressOptions
     */
    public function setDeliveryAddressLines($DeliveryAddressLines)
    {
      $this->DeliveryAddressLines = $DeliveryAddressLines;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountrySpecificLocalityLine()
    {
      return $this->CountrySpecificLocalityLine;
    }

    /**
     * @param string $CountrySpecificLocalityLine
     * @return \AddressDoctor\AddressOptions
     */
    public function setCountrySpecificLocalityLine($CountrySpecificLocalityLine)
    {
      $this->CountrySpecificLocalityLine = $CountrySpecificLocalityLine;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormattedAddress()
    {
      return $this->FormattedAddress;
    }

    /**
     * @param string $FormattedAddress
     * @return \AddressDoctor\AddressOptions
     */
    public function setFormattedAddress($FormattedAddress)
    {
      $this->FormattedAddress = $FormattedAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressComplete()
    {
      return $this->AddressComplete;
    }

    /**
     * @param string $AddressComplete
     * @return \AddressDoctor\AddressOptions
     */
    public function setAddressComplete($AddressComplete)
    {
      $this->AddressComplete = $AddressComplete;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddressDetailed()
    {
      return $this->AddressDetailed;
    }

    /**
     * @param string $AddressDetailed
     * @return \AddressDoctor\AddressOptions
     */
    public function setAddressDetailed($AddressDetailed)
    {
      $this->AddressDetailed = $AddressDetailed;
      return $this;
    }

}
