<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Government_ID_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for the Government Identifier Data.
 * @subpackage Structs
 */
class Government_ID_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Government ID.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The ID_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Government ID Type.
     * - minOccurs: 0
     * @var \StructType\Government_ID_Type__All_ObjectType
     */
    public $ID_Type_Reference;
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country issuing the Government Identifier.
     * - minOccurs: 0
     * @var \StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * The Issued_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Government Identifier was issued.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Issued_Date;
    /**
     * The Expiration_Date
     * Meta information extracted from the WSDL
     * - documentation: Expiration Date of the Government Identifier.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expiration_Date;
    /**
     * The Verification_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Government Identifier was verified.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Verification_Date;
    /**
     * The Verified_by_Reference
     * Meta information extracted from the WSDL
     * - documentation: Worker who verified the ID.
     * - minOccurs: 0
     * @var \StructType\WorkerObjectType
     */
    public $Verified_by_Reference;
    /**
     * Constructor method for Government_ID_DataType
     * @uses Government_ID_DataType::setID()
     * @uses Government_ID_DataType::setID_Type_Reference()
     * @uses Government_ID_DataType::setCountry_Reference()
     * @uses Government_ID_DataType::setIssued_Date()
     * @uses Government_ID_DataType::setExpiration_Date()
     * @uses Government_ID_DataType::setVerification_Date()
     * @uses Government_ID_DataType::setVerified_by_Reference()
     * @param string $iD
     * @param \StructType\Government_ID_Type__All_ObjectType $iD_Type_Reference
     * @param \StructType\CountryObjectType $country_Reference
     * @param string $issued_Date
     * @param string $expiration_Date
     * @param string $verification_Date
     * @param \StructType\WorkerObjectType $verified_by_Reference
     */
    public function __construct($iD = null, \StructType\Government_ID_Type__All_ObjectType $iD_Type_Reference = null, \StructType\CountryObjectType $country_Reference = null, $issued_Date = null, $expiration_Date = null, $verification_Date = null, \StructType\WorkerObjectType $verified_by_Reference = null)
    {
        $this
            ->setID($iD)
            ->setID_Type_Reference($iD_Type_Reference)
            ->setCountry_Reference($country_Reference)
            ->setIssued_Date($issued_Date)
            ->setExpiration_Date($expiration_Date)
            ->setVerification_Date($verification_Date)
            ->setVerified_by_Reference($verified_by_Reference);
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
     * @return \StructType\Government_ID_DataType
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
     * @return \StructType\Government_ID_Type__All_ObjectType|null
     */
    public function getID_Type_Reference()
    {
        return $this->ID_Type_Reference;
    }
    /**
     * Set ID_Type_Reference value
     * @param \StructType\Government_ID_Type__All_ObjectType $iD_Type_Reference
     * @return \StructType\Government_ID_DataType
     */
    public function setID_Type_Reference(\StructType\Government_ID_Type__All_ObjectType $iD_Type_Reference = null)
    {
        $this->ID_Type_Reference = $iD_Type_Reference;
        return $this;
    }
    /**
     * Get Country_Reference value
     * @return \StructType\CountryObjectType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \StructType\CountryObjectType $country_Reference
     * @return \StructType\Government_ID_DataType
     */
    public function setCountry_Reference(\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
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
     * @return \StructType\Government_ID_DataType
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
     * @return \StructType\Government_ID_DataType
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
     * @return \StructType\Government_ID_DataType
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
     * Get Verified_by_Reference value
     * @return \StructType\WorkerObjectType|null
     */
    public function getVerified_by_Reference()
    {
        return $this->Verified_by_Reference;
    }
    /**
     * Set Verified_by_Reference value
     * @param \StructType\WorkerObjectType $verified_by_Reference
     * @return \StructType\Government_ID_DataType
     */
    public function setVerified_by_Reference(\StructType\WorkerObjectType $verified_by_Reference = null)
    {
        $this->Verified_by_Reference = $verified_by_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Government_ID_DataType
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
