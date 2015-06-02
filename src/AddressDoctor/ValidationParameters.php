<?php

namespace AddressDoctor;

class ValidationParameters
{

    /**
     * @var string $FormatType
     */
    protected $FormatType = null;

    /**
     * @var string $FormatDelimiter
     */
    protected $FormatDelimiter = null;

    /**
     * @var string $DefaultCountryISO3
     */
    protected $DefaultCountryISO3 = null;

    /**
     * @var string $ForceCountryISO3
     */
    protected $ForceCountryISO3 = null;

    /**
     * @var string $CountryType
     */
    protected $CountryType = null;

    /**
     * @var string $CountryOfOriginISO3
     */
    protected $CountryOfOriginISO3 = null;

    /**
     * @var boolean $StreetWithNumber
     */
    protected $StreetWithNumber = null;

    /**
     * @var boolean $FormatWithCountry
     */
    protected $FormatWithCountry = null;

    /**
     * @var boolean $ElementAbbreviation
     */
    protected $ElementAbbreviation = null;

    /**
     * @var string $PreferredScript
     */
    protected $PreferredScript = null;

    /**
     * @var string $PreferredLanguage
     */
    protected $PreferredLanguage = null;

    /**
     * @var string $AliasStreet
     */
    protected $AliasStreet = null;

    /**
     * @var string $AliasLocality
     */
    protected $AliasLocality = null;

    /**
     * @var string $GlobalCasing
     */
    protected $GlobalCasing = null;

    /**
     * @var int $GlobalMaxLength
     */
    protected $GlobalMaxLength = null;

    /**
     * @var string $GlobalPreferredDescriptor
     */
    protected $GlobalPreferredDescriptor = null;

    /**
     * @var string $MatchingScope
     */
    protected $MatchingScope = null;

    /**
     * @var int $MaxResultCount
     */
    protected $MaxResultCount = null;

    /**
     * @var string $DualAddressPriority
     */
    protected $DualAddressPriority = null;

    /**
     * @var boolean $StandardizeInvalidAddresses
     */
    protected $StandardizeInvalidAddresses = null;

    /**
     * @var string $RangesToExpand
     */
    protected $RangesToExpand = null;

    /**
     * @var boolean $FlexibleRangeExpansion
     */
    protected $FlexibleRangeExpansion = null;

    /**
     * @var string $GeoCodingType
     */
    protected $GeoCodingType = null;

    /**
     * @var string $MatchingAlternatives
     */
    protected $MatchingAlternatives = null;

    /**
     * @var boolean $MatchingExtendedArchive
     */
    protected $MatchingExtendedArchive = null;

    /**
     * @var string $DisableCertifiedModeISO3
     */
    protected $DisableCertifiedModeISO3 = null;

    /**
     * @var int $FormatMaxLines
     */
    protected $FormatMaxLines = null;

    /**
     * @var Standardize[] $Standardizations
     */
    protected $Standardizations = null;

    /**
     * @var AdditionalInformation[] $AdditionalInformationSet
     */
    protected $AdditionalInformationSet = null;

    /**
     * @var AddressOptions $OutputOptions
     */
    protected $OutputOptions = null;

    /**
     * @param string $FormatType
     * @param string $FormatDelimiter
     * @param string $DefaultCountryISO3
     * @param string $ForceCountryISO3
     * @param string $CountryType
     * @param string $CountryOfOriginISO3
     * @param boolean $StreetWithNumber
     * @param boolean $FormatWithCountry
     * @param boolean $ElementAbbreviation
     * @param string $PreferredScript
     * @param string $PreferredLanguage
     * @param string $AliasStreet
     * @param string $AliasLocality
     * @param string $GlobalCasing
     * @param int $GlobalMaxLength
     * @param string $GlobalPreferredDescriptor
     * @param string $MatchingScope
     * @param int $MaxResultCount
     * @param string $DualAddressPriority
     * @param boolean $StandardizeInvalidAddresses
     * @param string $RangesToExpand
     * @param boolean $FlexibleRangeExpansion
     * @param string $GeoCodingType
     * @param string $MatchingAlternatives
     * @param boolean $MatchingExtendedArchive
     * @param string $DisableCertifiedModeISO3
     * @param int $FormatMaxLines
     * @param AddressOptions $OutputOptions
     */
    public function __construct($FormatType, $FormatDelimiter, $DefaultCountryISO3, $ForceCountryISO3, $CountryType, $CountryOfOriginISO3, $StreetWithNumber, $FormatWithCountry, $ElementAbbreviation, $PreferredScript, $PreferredLanguage, $AliasStreet, $AliasLocality, $GlobalCasing, $GlobalMaxLength, $GlobalPreferredDescriptor, $MatchingScope, $MaxResultCount, $DualAddressPriority, $StandardizeInvalidAddresses, $RangesToExpand, $FlexibleRangeExpansion, $GeoCodingType, $MatchingAlternatives, $MatchingExtendedArchive, $DisableCertifiedModeISO3, $FormatMaxLines, $OutputOptions)
    {
      $this->FormatType = $FormatType;
      $this->FormatDelimiter = $FormatDelimiter;
      $this->DefaultCountryISO3 = $DefaultCountryISO3;
      $this->ForceCountryISO3 = $ForceCountryISO3;
      $this->CountryType = $CountryType;
      $this->CountryOfOriginISO3 = $CountryOfOriginISO3;
      $this->StreetWithNumber = $StreetWithNumber;
      $this->FormatWithCountry = $FormatWithCountry;
      $this->ElementAbbreviation = $ElementAbbreviation;
      $this->PreferredScript = $PreferredScript;
      $this->PreferredLanguage = $PreferredLanguage;
      $this->AliasStreet = $AliasStreet;
      $this->AliasLocality = $AliasLocality;
      $this->GlobalCasing = $GlobalCasing;
      $this->GlobalMaxLength = $GlobalMaxLength;
      $this->GlobalPreferredDescriptor = $GlobalPreferredDescriptor;
      $this->MatchingScope = $MatchingScope;
      $this->MaxResultCount = $MaxResultCount;
      $this->DualAddressPriority = $DualAddressPriority;
      $this->StandardizeInvalidAddresses = $StandardizeInvalidAddresses;
      $this->RangesToExpand = $RangesToExpand;
      $this->FlexibleRangeExpansion = $FlexibleRangeExpansion;
      $this->GeoCodingType = $GeoCodingType;
      $this->MatchingAlternatives = $MatchingAlternatives;
      $this->MatchingExtendedArchive = $MatchingExtendedArchive;
      $this->DisableCertifiedModeISO3 = $DisableCertifiedModeISO3;
      $this->FormatMaxLines = $FormatMaxLines;
      $this->OutputOptions = $OutputOptions;
    }

    /**
     * @return string
     */
    public function getFormatType()
    {
      return $this->FormatType;
    }

    /**
     * @param string $FormatType
     * @return \AddressDoctor\ValidationParameters
     */
    public function setFormatType($FormatType)
    {
      $this->FormatType = $FormatType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormatDelimiter()
    {
      return $this->FormatDelimiter;
    }

    /**
     * @param string $FormatDelimiter
     * @return \AddressDoctor\ValidationParameters
     */
    public function setFormatDelimiter($FormatDelimiter)
    {
      $this->FormatDelimiter = $FormatDelimiter;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultCountryISO3()
    {
      return $this->DefaultCountryISO3;
    }

    /**
     * @param string $DefaultCountryISO3
     * @return \AddressDoctor\ValidationParameters
     */
    public function setDefaultCountryISO3($DefaultCountryISO3)
    {
      $this->DefaultCountryISO3 = $DefaultCountryISO3;
      return $this;
    }

    /**
     * @return string
     */
    public function getForceCountryISO3()
    {
      return $this->ForceCountryISO3;
    }

    /**
     * @param string $ForceCountryISO3
     * @return \AddressDoctor\ValidationParameters
     */
    public function setForceCountryISO3($ForceCountryISO3)
    {
      $this->ForceCountryISO3 = $ForceCountryISO3;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryType()
    {
      return $this->CountryType;
    }

    /**
     * @param string $CountryType
     * @return \AddressDoctor\ValidationParameters
     */
    public function setCountryType($CountryType)
    {
      $this->CountryType = $CountryType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryOfOriginISO3()
    {
      return $this->CountryOfOriginISO3;
    }

    /**
     * @param string $CountryOfOriginISO3
     * @return \AddressDoctor\ValidationParameters
     */
    public function setCountryOfOriginISO3($CountryOfOriginISO3)
    {
      $this->CountryOfOriginISO3 = $CountryOfOriginISO3;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStreetWithNumber()
    {
      return $this->StreetWithNumber;
    }

    /**
     * @param boolean $StreetWithNumber
     * @return \AddressDoctor\ValidationParameters
     */
    public function setStreetWithNumber($StreetWithNumber)
    {
      $this->StreetWithNumber = $StreetWithNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFormatWithCountry()
    {
      return $this->FormatWithCountry;
    }

    /**
     * @param boolean $FormatWithCountry
     * @return \AddressDoctor\ValidationParameters
     */
    public function setFormatWithCountry($FormatWithCountry)
    {
      $this->FormatWithCountry = $FormatWithCountry;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getElementAbbreviation()
    {
      return $this->ElementAbbreviation;
    }

    /**
     * @param boolean $ElementAbbreviation
     * @return \AddressDoctor\ValidationParameters
     */
    public function setElementAbbreviation($ElementAbbreviation)
    {
      $this->ElementAbbreviation = $ElementAbbreviation;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredScript()
    {
      return $this->PreferredScript;
    }

    /**
     * @param string $PreferredScript
     * @return \AddressDoctor\ValidationParameters
     */
    public function setPreferredScript($PreferredScript)
    {
      $this->PreferredScript = $PreferredScript;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredLanguage()
    {
      return $this->PreferredLanguage;
    }

    /**
     * @param string $PreferredLanguage
     * @return \AddressDoctor\ValidationParameters
     */
    public function setPreferredLanguage($PreferredLanguage)
    {
      $this->PreferredLanguage = $PreferredLanguage;
      return $this;
    }

    /**
     * @return string
     */
    public function getAliasStreet()
    {
      return $this->AliasStreet;
    }

    /**
     * @param string $AliasStreet
     * @return \AddressDoctor\ValidationParameters
     */
    public function setAliasStreet($AliasStreet)
    {
      $this->AliasStreet = $AliasStreet;
      return $this;
    }

    /**
     * @return string
     */
    public function getAliasLocality()
    {
      return $this->AliasLocality;
    }

    /**
     * @param string $AliasLocality
     * @return \AddressDoctor\ValidationParameters
     */
    public function setAliasLocality($AliasLocality)
    {
      $this->AliasLocality = $AliasLocality;
      return $this;
    }

    /**
     * @return string
     */
    public function getGlobalCasing()
    {
      return $this->GlobalCasing;
    }

    /**
     * @param string $GlobalCasing
     * @return \AddressDoctor\ValidationParameters
     */
    public function setGlobalCasing($GlobalCasing)
    {
      $this->GlobalCasing = $GlobalCasing;
      return $this;
    }

    /**
     * @return int
     */
    public function getGlobalMaxLength()
    {
      return $this->GlobalMaxLength;
    }

    /**
     * @param int $GlobalMaxLength
     * @return \AddressDoctor\ValidationParameters
     */
    public function setGlobalMaxLength($GlobalMaxLength)
    {
      $this->GlobalMaxLength = $GlobalMaxLength;
      return $this;
    }

    /**
     * @return string
     */
    public function getGlobalPreferredDescriptor()
    {
      return $this->GlobalPreferredDescriptor;
    }

    /**
     * @param string $GlobalPreferredDescriptor
     * @return \AddressDoctor\ValidationParameters
     */
    public function setGlobalPreferredDescriptor($GlobalPreferredDescriptor)
    {
      $this->GlobalPreferredDescriptor = $GlobalPreferredDescriptor;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatchingScope()
    {
      return $this->MatchingScope;
    }

    /**
     * @param string $MatchingScope
     * @return \AddressDoctor\ValidationParameters
     */
    public function setMatchingScope($MatchingScope)
    {
      $this->MatchingScope = $MatchingScope;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxResultCount()
    {
      return $this->MaxResultCount;
    }

    /**
     * @param int $MaxResultCount
     * @return \AddressDoctor\ValidationParameters
     */
    public function setMaxResultCount($MaxResultCount)
    {
      $this->MaxResultCount = $MaxResultCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDualAddressPriority()
    {
      return $this->DualAddressPriority;
    }

    /**
     * @param string $DualAddressPriority
     * @return \AddressDoctor\ValidationParameters
     */
    public function setDualAddressPriority($DualAddressPriority)
    {
      $this->DualAddressPriority = $DualAddressPriority;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStandardizeInvalidAddresses()
    {
      return $this->StandardizeInvalidAddresses;
    }

    /**
     * @param boolean $StandardizeInvalidAddresses
     * @return \AddressDoctor\ValidationParameters
     */
    public function setStandardizeInvalidAddresses($StandardizeInvalidAddresses)
    {
      $this->StandardizeInvalidAddresses = $StandardizeInvalidAddresses;
      return $this;
    }

    /**
     * @return string
     */
    public function getRangesToExpand()
    {
      return $this->RangesToExpand;
    }

    /**
     * @param string $RangesToExpand
     * @return \AddressDoctor\ValidationParameters
     */
    public function setRangesToExpand($RangesToExpand)
    {
      $this->RangesToExpand = $RangesToExpand;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFlexibleRangeExpansion()
    {
      return $this->FlexibleRangeExpansion;
    }

    /**
     * @param boolean $FlexibleRangeExpansion
     * @return \AddressDoctor\ValidationParameters
     */
    public function setFlexibleRangeExpansion($FlexibleRangeExpansion)
    {
      $this->FlexibleRangeExpansion = $FlexibleRangeExpansion;
      return $this;
    }

    /**
     * @return string
     */
    public function getGeoCodingType()
    {
      return $this->GeoCodingType;
    }

    /**
     * @param string $GeoCodingType
     * @return \AddressDoctor\ValidationParameters
     */
    public function setGeoCodingType($GeoCodingType)
    {
      $this->GeoCodingType = $GeoCodingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatchingAlternatives()
    {
      return $this->MatchingAlternatives;
    }

    /**
     * @param string $MatchingAlternatives
     * @return \AddressDoctor\ValidationParameters
     */
    public function setMatchingAlternatives($MatchingAlternatives)
    {
      $this->MatchingAlternatives = $MatchingAlternatives;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMatchingExtendedArchive()
    {
      return $this->MatchingExtendedArchive;
    }

    /**
     * @param boolean $MatchingExtendedArchive
     * @return \AddressDoctor\ValidationParameters
     */
    public function setMatchingExtendedArchive($MatchingExtendedArchive)
    {
      $this->MatchingExtendedArchive = $MatchingExtendedArchive;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisableCertifiedModeISO3()
    {
      return $this->DisableCertifiedModeISO3;
    }

    /**
     * @param string $DisableCertifiedModeISO3
     * @return \AddressDoctor\ValidationParameters
     */
    public function setDisableCertifiedModeISO3($DisableCertifiedModeISO3)
    {
      $this->DisableCertifiedModeISO3 = $DisableCertifiedModeISO3;
      return $this;
    }

    /**
     * @return int
     */
    public function getFormatMaxLines()
    {
      return $this->FormatMaxLines;
    }

    /**
     * @param int $FormatMaxLines
     * @return \AddressDoctor\ValidationParameters
     */
    public function setFormatMaxLines($FormatMaxLines)
    {
      $this->FormatMaxLines = $FormatMaxLines;
      return $this;
    }

    /**
     * @return Standardize[]
     */
    public function getStandardizations()
    {
      return $this->Standardizations;
    }

    /**
     * @param Standardize[] $Standardizations
     * @return \AddressDoctor\ValidationParameters
     */
    public function setStandardizations(array $Standardizations)
    {
      $this->Standardizations = $Standardizations;
      return $this;
    }

    /**
     * @return AdditionalInformation[]
     */
    public function getAdditionalInformationSet()
    {
      return $this->AdditionalInformationSet;
    }

    /**
     * @param AdditionalInformation[] $AdditionalInformationSet
     * @return \AddressDoctor\ValidationParameters
     */
    public function setAdditionalInformationSet(array $AdditionalInformationSet)
    {
      $this->AdditionalInformationSet = $AdditionalInformationSet;
      return $this;
    }

    /**
     * @return AddressOptions
     */
    public function getOutputOptions()
    {
      return $this->OutputOptions;
    }

    /**
     * @param AddressOptions $OutputOptions
     * @return \AddressDoctor\ValidationParameters
     */
    public function setOutputOptions($OutputOptions)
    {
      $this->OutputOptions = $OutputOptions;
      return $this;
    }

}
