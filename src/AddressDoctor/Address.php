<?php

namespace AddressDoctor;

class Address
{

    /**
     * @var string $RecordId
     */
    protected $RecordId = null;

    /**
     * @var ArrayOfString $Organization
     */
    protected $Organization = null;

    /**
     * @var ArrayOfString $Department
     */
    protected $Department = null;

    /**
     * @var ArrayOfString $Contact
     */
    protected $Contact = null;

    /**
     * @var ArrayOfString $Email
     */
    protected $Email = null;

    /**
     * @var ArrayOfString $Building
     */
    protected $Building = null;

    /**
     * @var ArrayOfString $SubBuilding
     */
    protected $SubBuilding = null;

    /**
     * @var ArrayOfString $Street
     */
    protected $Street = null;

    /**
     * @var ArrayOfString $HouseNumber
     */
    protected $HouseNumber = null;

    /**
     * @var ArrayOfString $DeliveryService
     */
    protected $DeliveryService = null;

    /**
     * @var ArrayOfString $Locality
     */
    protected $Locality = null;

    /**
     * @var ArrayOfString $PreferredLocality
     */
    protected $PreferredLocality = null;

    /**
     * @var ArrayOfString $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var ArrayOfString $Province
     */
    protected $Province = null;

    /**
     * @var ArrayOfString $Country
     */
    protected $Country = null;

    /**
     * @var ArrayOfString $Residue
     */
    protected $Residue = null;

    /**
     * @var ArrayOfString $RecipientLines
     */
    protected $RecipientLines = null;

    /**
     * @var ArrayOfString $DeliveryAddressLines
     */
    protected $DeliveryAddressLines = null;

    /**
     * @var ArrayOfString $CountrySpecificLocalityLine
     */
    protected $CountrySpecificLocalityLine = null;

    /**
     * @var ArrayOfString $FormattedAddress
     */
    protected $FormattedAddress = null;

    /**
     * @var AdditionalInformation[] $AdditionalAddressInformation
     */
    protected $AdditionalAddressInformation = null;

    /**
     * @var string $AddressComplete
     */
    protected $AddressComplete = null;

    /**
     * @var AddressCode $AddressCode
     */
    protected $AddressCode = null;

    /**
     * @var AddressDetailed $AddressDetailed
     */
    protected $AddressDetailed = null;

    /**
     * @param string $RecordId
     * @param ArrayOfString $Organization
     * @param ArrayOfString $Department
     * @param ArrayOfString $Contact
     * @param ArrayOfString $Email
     * @param ArrayOfString $Building
     * @param ArrayOfString $SubBuilding
     * @param ArrayOfString $Street
     * @param ArrayOfString $HouseNumber
     * @param ArrayOfString $DeliveryService
     * @param ArrayOfString $Locality
     * @param ArrayOfString $PreferredLocality
     * @param ArrayOfString $PostalCode
     * @param ArrayOfString $Province
     * @param ArrayOfString $Country
     * @param ArrayOfString $Residue
     * @param ArrayOfString $RecipientLines
     * @param ArrayOfString $DeliveryAddressLines
     * @param ArrayOfString $CountrySpecificLocalityLine
     * @param ArrayOfString $FormattedAddress
     * @param string $AddressComplete
     * @param AddressCode $AddressCode
     * @param AddressDetailed $AddressDetailed
     */
    public function __construct($RecordId, $Organization, $Department, $Contact, $Email, $Building, $SubBuilding, $Street, $HouseNumber, $DeliveryService, $Locality, $PreferredLocality, $PostalCode, $Province, $Country, $Residue, $RecipientLines, $DeliveryAddressLines, $CountrySpecificLocalityLine, $FormattedAddress, $AddressComplete, $AddressCode, $AddressDetailed)
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
      $this->AddressCode = $AddressCode;
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
     * @return \AddressDoctor\Address
     */
    public function setRecordId($RecordId)
    {
      $this->RecordId = $RecordId;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getOrganization()
    {
      return $this->Organization;
    }

    /**
     * @param ArrayOfString $Organization
     * @return \AddressDoctor\Address
     */
    public function setOrganization($Organization)
    {
      $this->Organization = $Organization;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getDepartment()
    {
      return $this->Department;
    }

    /**
     * @param ArrayOfString $Department
     * @return \AddressDoctor\Address
     */
    public function setDepartment($Department)
    {
      $this->Department = $Department;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param ArrayOfString $Contact
     * @return \AddressDoctor\Address
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param ArrayOfString $Email
     * @return \AddressDoctor\Address
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getBuilding()
    {
      return $this->Building;
    }

    /**
     * @param ArrayOfString $Building
     * @return \AddressDoctor\Address
     */
    public function setBuilding($Building)
    {
      $this->Building = $Building;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getSubBuilding()
    {
      return $this->SubBuilding;
    }

    /**
     * @param ArrayOfString $SubBuilding
     * @return \AddressDoctor\Address
     */
    public function setSubBuilding($SubBuilding)
    {
      $this->SubBuilding = $SubBuilding;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getStreet()
    {
      return $this->Street;
    }

    /**
     * @param ArrayOfString $Street
     * @return \AddressDoctor\Address
     */
    public function setStreet($Street)
    {
      $this->Street = $Street;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getHouseNumber()
    {
      return $this->HouseNumber;
    }

    /**
     * @param ArrayOfString $HouseNumber
     * @return \AddressDoctor\Address
     */
    public function setHouseNumber($HouseNumber)
    {
      $this->HouseNumber = $HouseNumber;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getDeliveryService()
    {
      return $this->DeliveryService;
    }

    /**
     * @param ArrayOfString $DeliveryService
     * @return \AddressDoctor\Address
     */
    public function setDeliveryService($DeliveryService)
    {
      $this->DeliveryService = $DeliveryService;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getLocality()
    {
      return $this->Locality;
    }

    /**
     * @param ArrayOfString $Locality
     * @return \AddressDoctor\Address
     */
    public function setLocality($Locality)
    {
      $this->Locality = $Locality;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getPreferredLocality()
    {
      return $this->PreferredLocality;
    }

    /**
     * @param ArrayOfString $PreferredLocality
     * @return \AddressDoctor\Address
     */
    public function setPreferredLocality($PreferredLocality)
    {
      $this->PreferredLocality = $PreferredLocality;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param ArrayOfString $PostalCode
     * @return \AddressDoctor\Address
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getProvince()
    {
      return $this->Province;
    }

    /**
     * @param ArrayOfString $Province
     * @return \AddressDoctor\Address
     */
    public function setProvince($Province)
    {
      $this->Province = $Province;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param ArrayOfString $Country
     * @return \AddressDoctor\Address
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getResidue()
    {
      return $this->Residue;
    }

    /**
     * @param ArrayOfString $Residue
     * @return \AddressDoctor\Address
     */
    public function setResidue($Residue)
    {
      $this->Residue = $Residue;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getRecipientLines()
    {
      return $this->RecipientLines;
    }

    /**
     * @param ArrayOfString $RecipientLines
     * @return \AddressDoctor\Address
     */
    public function setRecipientLines($RecipientLines)
    {
      $this->RecipientLines = $RecipientLines;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getDeliveryAddressLines()
    {
      return $this->DeliveryAddressLines;
    }

    /**
     * @param ArrayOfString $DeliveryAddressLines
     * @return \AddressDoctor\Address
     */
    public function setDeliveryAddressLines($DeliveryAddressLines)
    {
      $this->DeliveryAddressLines = $DeliveryAddressLines;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getCountrySpecificLocalityLine()
    {
      return $this->CountrySpecificLocalityLine;
    }

    /**
     * @param ArrayOfString $CountrySpecificLocalityLine
     * @return \AddressDoctor\Address
     */
    public function setCountrySpecificLocalityLine($CountrySpecificLocalityLine)
    {
      $this->CountrySpecificLocalityLine = $CountrySpecificLocalityLine;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getFormattedAddress()
    {
      return $this->FormattedAddress;
    }

    /**
     * @param ArrayOfString $FormattedAddress
     * @return \AddressDoctor\Address
     */
    public function setFormattedAddress($FormattedAddress)
    {
      $this->FormattedAddress = $FormattedAddress;
      return $this;
    }

    /**
     * @return AdditionalInformation[]
     */
    public function getAdditionalAddressInformation()
    {
      return $this->AdditionalAddressInformation;
    }

    /**
     * @param AdditionalInformation[] $AdditionalAddressInformation
     * @return \AddressDoctor\Address
     */
    public function setAdditionalAddressInformation(array $AdditionalAddressInformation)
    {
      $this->AdditionalAddressInformation = $AdditionalAddressInformation;
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
     * @return \AddressDoctor\Address
     */
    public function setAddressComplete($AddressComplete)
    {
      $this->AddressComplete = $AddressComplete;
      return $this;
    }

    /**
     * @return AddressCode
     */
    public function getAddressCode()
    {
      return $this->AddressCode;
    }

    /**
     * @param AddressCode $AddressCode
     * @return \AddressDoctor\Address
     */
    public function setAddressCode($AddressCode)
    {
      $this->AddressCode = $AddressCode;
      return $this;
    }

    /**
     * @return AddressDetailed
     */
    public function getAddressDetailed()
    {
      return $this->AddressDetailed;
    }

    /**
     * @param AddressDetailed $AddressDetailed
     * @return \AddressDoctor\Address
     */
    public function setAddressDetailed($AddressDetailed)
    {
      $this->AddressDetailed = $AddressDetailed;
      return $this;
    }

}
