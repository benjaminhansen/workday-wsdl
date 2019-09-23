<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for License_ID_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: In order to specify an issuing body for the license, only one of Country Reference, Country Region Reference, or Authority Reference is allowed. | Wrapper for License Identifier Data.
 * @subpackage Structs
 */
class License_ID_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: License Identifier.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The ID_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: License Identifier Type.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\License_ID_Type__All_ObjectType
     */
    public $ID_Type_Reference;
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country issuing the License Identifier. No more than one Country Reference, Country Region Reference, or Authority Reference can be specified.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * The Country_Region_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country Region issuing the License Identifier. No more than one Country Reference, Country Region Reference, or Authority Reference can be specified.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_RegionObjectType
     */
    public $Country_Region_Reference;
    /**
     * The Country_Region_Descriptor
     * Meta information extracted from the WSDL
     * - documentation: Country Region issuing the License Identifier. No more than one Country Reference, Country Region Reference, or Authority Reference can be specified.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Country_Region_Descriptor;
    /**
     * The Authority_Reference
     * Meta information extracted from the WSDL
     * - documentation: Authority issuing the License Identifier. No more than one Country Reference, Country Region Reference, or Authority Reference can be specified.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\AuthorityObjectType
     */
    public $Authority_Reference;
    /**
     * The License_Class
     * Meta information extracted from the WSDL
     * - documentation: License Class.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $License_Class;
    /**
     * The Issued_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the License Identifier was issued.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Issued_Date;
    /**
     * The Expiration_Date
     * Meta information extracted from the WSDL
     * - documentation: Expiration Date of the License Identifier.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expiration_Date;
    /**
     * The Verification_Date
     * Meta information extracted from the WSDL
     * - documentation: Verification Date of the License Identifier.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Verification_Date;
    /**
     * The Verified_By_Reference
     * Meta information extracted from the WSDL
     * - documentation: Worker who verified the ID.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType
     */
    public $Verified_By_Reference;
    /**
     * Constructor method for License_ID_DataType
     * @uses License_ID_DataType::setID()
     * @uses License_ID_DataType::setID_Type_Reference()
     * @uses License_ID_DataType::setCountry_Reference()
     * @uses License_ID_DataType::setCountry_Region_Reference()
     * @uses License_ID_DataType::setCountry_Region_Descriptor()
     * @uses License_ID_DataType::setAuthority_Reference()
     * @uses License_ID_DataType::setLicense_Class()
     * @uses License_ID_DataType::setIssued_Date()
     * @uses License_ID_DataType::setExpiration_Date()
     * @uses License_ID_DataType::setVerification_Date()
     * @uses License_ID_DataType::setVerified_By_Reference()
     * @param string $iD
     * @param \WorkdayWsdl\\StructType\License_ID_Type__All_ObjectType $iD_Type_Reference
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $country_Region_Reference
     * @param string $country_Region_Descriptor
     * @param \WorkdayWsdl\\StructType\AuthorityObjectType $authority_Reference
     * @param string $license_Class
     * @param string $issued_Date
     * @param string $expiration_Date
     * @param string $verification_Date
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $verified_By_Reference
     */
    public function __construct($iD = null, \WorkdayWsdl\\StructType\License_ID_Type__All_ObjectType $iD_Type_Reference = null, \WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null, \WorkdayWsdl\\StructType\Country_RegionObjectType $country_Region_Reference = null, $country_Region_Descriptor = null, \WorkdayWsdl\\StructType\AuthorityObjectType $authority_Reference = null, $license_Class = null, $issued_Date = null, $expiration_Date = null, $verification_Date = null, \WorkdayWsdl\\StructType\WorkerObjectType $verified_By_Reference = null)
    {
        $this
            ->setID($iD)
            ->setID_Type_Reference($iD_Type_Reference)
            ->setCountry_Reference($country_Reference)
            ->setCountry_Region_Reference($country_Region_Reference)
            ->setCountry_Region_Descriptor($country_Region_Descriptor)
            ->setAuthority_Reference($authority_Reference)
            ->setLicense_Class($license_Class)
            ->setIssued_Date($issued_Date)
            ->setExpiration_Date($expiration_Date)
            ->setVerification_Date($verification_Date)
            ->setVerified_By_Reference($verified_By_Reference);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \WorkdayWsdl\\StructType\License_ID_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get ID_Type_Reference value
     * @return \WorkdayWsdl\\StructType\License_ID_Type__All_ObjectType|null
     */
    public function getID_Type_Reference()
    {
        return $this->ID_Type_Reference;
    }
    /**
     * Set ID_Type_Reference value
     * @param \WorkdayWsdl\\StructType\License_ID_Type__All_ObjectType $iD_Type_Reference
     * @return \WorkdayWsdl\\StructType\License_ID_DataType
     */
    public function setID_Type_Reference(\WorkdayWsdl\\StructType\License_ID_Type__All_ObjectType $iD_Type_Reference = null)
    {
        $this->ID_Type_Reference = $iD_Type_Reference;
        return $this;
    }
    /**
     * Get Country_Reference value
     * @return \WorkdayWsdl\\StructType\CountryObjectType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     * @return \WorkdayWsdl\\StructType\License_ID_DataType
     */
    public function setCountry_Reference(\WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get Country_Region_Reference value
     * @return \WorkdayWsdl\\StructType\Country_RegionObjectType|null
     */
    public function getCountry_Region_Reference()
    {
        return $this->Country_Region_Reference;
    }
    /**
     * Set Country_Region_Reference value
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $country_Region_Reference
     * @return \WorkdayWsdl\\StructType\License_ID_DataType
     */
    public function setCountry_Region_Reference(\WorkdayWsdl\\StructType\Country_RegionObjectType $country_Region_Reference = null)
    {
        $this->Country_Region_Reference = $country_Region_Reference;
        return $this;
    }
    /**
     * Get Country_Region_Descriptor value
     * @return string|null
     */
    public function getCountry_Region_Descriptor()
    {
        return $this->Country_Region_Descriptor;
    }
    /**
     * Set Country_Region_Descriptor value
     * @param string $country_Region_Descriptor
     * @return \WorkdayWsdl\\StructType\License_ID_DataType
     */
    public function setCountry_Region_Descriptor($country_Region_Descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($country_Region_Descriptor) && !is_string($country_Region_Descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country_Region_Descriptor, true), gettype($country_Region_Descriptor)), __LINE__);
        }
        $this->Country_Region_Descriptor = $country_Region_Descriptor;
        return $this;
    }
    /**
     * Get Authority_Reference value
     * @return \WorkdayWsdl\\StructType\AuthorityObjectType|null
     */
    public function getAuthority_Reference()
    {
        return $this->Authority_Reference;
    }
    /**
     * Set Authority_Reference value
     * @param \WorkdayWsdl\\StructType\AuthorityObjectType $authority_Reference
     * @return \WorkdayWsdl\\StructType\License_ID_DataType
     */
    public function setAuthority_Reference(\WorkdayWsdl\\StructType\AuthorityObjectType $authority_Reference = null)
    {
        $this->Authority_Reference = $authority_Reference;
        return $this;
    }
    /**
     * Get License_Class value
     * @return string|null
     */
    public function getLicense_Class()
    {
        return $this->License_Class;
    }
    /**
     * Set License_Class value
     * @param string $license_Class
     * @return \WorkdayWsdl\\StructType\License_ID_DataType
     */
    public function setLicense_Class($license_Class = null)
    {
        // validation for constraint: string
        if (!is_null($license_Class) && !is_string($license_Class)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($license_Class, true), gettype($license_Class)), __LINE__);
        }
        $this->License_Class = $license_Class;
        return $this;
    }
    /**
     * Get Issued_Date value
     * @return string|null
     */
    public function getIssued_Date()
    {
        return $this->Issued_Date;
    }
    /**
     * Set Issued_Date value
     * @param string $issued_Date
     * @return \WorkdayWsdl\\StructType\License_ID_DataType
     */
    public function setIssued_Date($issued_Date = null)
    {
        // validation for constraint: string
        if (!is_null($issued_Date) && !is_string($issued_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issued_Date, true), gettype($issued_Date)), __LINE__);
        }
        $this->Issued_Date = $issued_Date;
        return $this;
    }
    /**
     * Get Expiration_Date value
     * @return string|null
     */
    public function getExpiration_Date()
    {
        return $this->Expiration_Date;
    }
    /**
     * Set Expiration_Date value
     * @param string $expiration_Date
     * @return \WorkdayWsdl\\StructType\License_ID_DataType
     */
    public function setExpiration_Date($expiration_Date = null)
    {
        // validation for constraint: string
        if (!is_null($expiration_Date) && !is_string($expiration_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiration_Date, true), gettype($expiration_Date)), __LINE__);
        }
        $this->Expiration_Date = $expiration_Date;
        return $this;
    }
    /**
     * Get Verification_Date value
     * @return string|null
     */
    public function getVerification_Date()
    {
        return $this->Verification_Date;
    }
    /**
     * Set Verification_Date value
     * @param string $verification_Date
     * @return \WorkdayWsdl\\StructType\License_ID_DataType
     */
    public function setVerification_Date($verification_Date = null)
    {
        // validation for constraint: string
        if (!is_null($verification_Date) && !is_string($verification_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verification_Date, true), gettype($verification_Date)), __LINE__);
        }
        $this->Verification_Date = $verification_Date;
        return $this;
    }
    /**
     * Get Verified_By_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType|null
     */
    public function getVerified_By_Reference()
    {
        return $this->Verified_By_Reference;
    }
    /**
     * Set Verified_By_Reference value
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $verified_By_Reference
     * @return \WorkdayWsdl\\StructType\License_ID_DataType
     */
    public function setVerified_By_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $verified_By_Reference = null)
    {
        $this->Verified_By_Reference = $verified_By_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\License_ID_DataType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
