<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Visa_Identifier_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for all Visa Identifier data.
 * @subpackage Structs
 */
class Visa_Identifier_DataType extends AbstractStructBase
{
    /**
     * The Visa_ID
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Visa ID.
     * - maxOccurs: 1
     * @var string
     */
    public $Visa_ID;
    /**
     * The Visa_Type_Reference
     * @var \StructType\Visa_Type_ReferenceType
     */
    public $Visa_Type_Reference;
    /**
     * The Country_Reference
     * @var \StructType\Country_ReferenceType
     */
    public $Country_Reference;
    /**
     * The Issued_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Visa ID was issued.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Issued_Date;
    /**
     * The Expiration_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Visa ID expires.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expiration_Date;
    /**
     * The Verification_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Visa ID was verified.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Verification_Date;
    /**
     * Constructor method for Visa_Identifier_DataType
     * @uses Visa_Identifier_DataType::setVisa_ID()
     * @uses Visa_Identifier_DataType::setVisa_Type_Reference()
     * @uses Visa_Identifier_DataType::setCountry_Reference()
     * @uses Visa_Identifier_DataType::setIssued_Date()
     * @uses Visa_Identifier_DataType::setExpiration_Date()
     * @uses Visa_Identifier_DataType::setVerification_Date()
     * @param string $visa_ID
     * @param \StructType\Visa_Type_ReferenceType $visa_Type_Reference
     * @param \StructType\Country_ReferenceType $country_Reference
     * @param string $issued_Date
     * @param string $expiration_Date
     * @param string $verification_Date
     */
    public function __construct($visa_ID = null, \StructType\Visa_Type_ReferenceType $visa_Type_Reference = null, \StructType\Country_ReferenceType $country_Reference = null, $issued_Date = null, $expiration_Date = null, $verification_Date = null)
    {
        $this
            ->setVisa_ID($visa_ID)
            ->setVisa_Type_Reference($visa_Type_Reference)
            ->setCountry_Reference($country_Reference)
            ->setIssued_Date($issued_Date)
            ->setExpiration_Date($expiration_Date)
            ->setVerification_Date($verification_Date);
    }
    /**
     * Get Visa_ID value
     * @return string|null
     */
    public function getVisa_ID()
    {
        return $this->Visa_ID;
    }
    /**
     * Set Visa_ID value
     * @param string $visa_ID
     * @return \StructType\Visa_Identifier_DataType
     */
    public function setVisa_ID($visa_ID = null)
    {
        // validation for constraint: string
        if (!is_null($visa_ID) && !is_string($visa_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($visa_ID, true), gettype($visa_ID)), __LINE__);
        }
        $this->Visa_ID = $visa_ID;
        return $this;
    }
    /**
     * Get Visa_Type_Reference value
     * @return \StructType\Visa_Type_ReferenceType|null
     */
    public function getVisa_Type_Reference()
    {
        return $this->Visa_Type_Reference;
    }
    /**
     * Set Visa_Type_Reference value
     * @param \StructType\Visa_Type_ReferenceType $visa_Type_Reference
     * @return \StructType\Visa_Identifier_DataType
     */
    public function setVisa_Type_Reference(\StructType\Visa_Type_ReferenceType $visa_Type_Reference = null)
    {
        $this->Visa_Type_Reference = $visa_Type_Reference;
        return $this;
    }
    /**
     * Get Country_Reference value
     * @return \StructType\Country_ReferenceType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \StructType\Country_ReferenceType $country_Reference
     * @return \StructType\Visa_Identifier_DataType
     */
    public function setCountry_Reference(\StructType\Country_ReferenceType $country_Reference = null)
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
     * @return \StructType\Visa_Identifier_DataType
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
     * @return \StructType\Visa_Identifier_DataType
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
     * @return \StructType\Visa_Identifier_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Visa_Identifier_DataType
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
