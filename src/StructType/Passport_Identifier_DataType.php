<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Passport_Identifier_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The country submitted must match the country associated with the passport type. | Encapsulating element for all Passport Identifier data.
 * @subpackage Structs
 */
class Passport_Identifier_DataType extends AbstractStructBase
{
    /**
     * The Passport_Number
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Passport ID.
     * - maxOccurs: 1
     * @var string
     */
    public $Passport_Number;
    /**
     * The Passport_Type_Reference
     * @var \WorkdayWsdl\\StructType\Passport_Type_ReferenceType
     */
    public $Passport_Type_Reference;
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing the country.
     * @var \WorkdayWsdl\\StructType\Country_ReferenceType
     */
    public $Country_Reference;
    /**
     * The Issued_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Passport ID was issued.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Issued_Date;
    /**
     * The Expiration_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Passport ID expires.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expiration_Date;
    /**
     * The Verification_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Passport ID was verified.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Verification_Date;
    /**
     * Constructor method for Passport_Identifier_DataType
     * @uses Passport_Identifier_DataType::setPassport_Number()
     * @uses Passport_Identifier_DataType::setPassport_Type_Reference()
     * @uses Passport_Identifier_DataType::setCountry_Reference()
     * @uses Passport_Identifier_DataType::setIssued_Date()
     * @uses Passport_Identifier_DataType::setExpiration_Date()
     * @uses Passport_Identifier_DataType::setVerification_Date()
     * @param string $passport_Number
     * @param \WorkdayWsdl\\StructType\Passport_Type_ReferenceType $passport_Type_Reference
     * @param \WorkdayWsdl\\StructType\Country_ReferenceType $country_Reference
     * @param string $issued_Date
     * @param string $expiration_Date
     * @param string $verification_Date
     */
    public function __construct($passport_Number = null, \WorkdayWsdl\\StructType\Passport_Type_ReferenceType $passport_Type_Reference = null, \WorkdayWsdl\\StructType\Country_ReferenceType $country_Reference = null, $issued_Date = null, $expiration_Date = null, $verification_Date = null)
    {
        $this
            ->setPassport_Number($passport_Number)
            ->setPassport_Type_Reference($passport_Type_Reference)
            ->setCountry_Reference($country_Reference)
            ->setIssued_Date($issued_Date)
            ->setExpiration_Date($expiration_Date)
            ->setVerification_Date($verification_Date);
    }
    /**
     * Get Passport_Number value
     * @return string|null
     */
    public function getPassport_Number()
    {
        return $this->Passport_Number;
    }
    /**
     * Set Passport_Number value
     * @param string $passport_Number
     * @return \WorkdayWsdl\\StructType\Passport_Identifier_DataType
     */
    public function setPassport_Number($passport_Number = null)
    {
        // validation for constraint: string
        if (!is_null($passport_Number) && !is_string($passport_Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passport_Number, true), gettype($passport_Number)), __LINE__);
        }
        $this->Passport_Number = $passport_Number;
        return $this;
    }
    /**
     * Get Passport_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Passport_Type_ReferenceType|null
     */
    public function getPassport_Type_Reference()
    {
        return $this->Passport_Type_Reference;
    }
    /**
     * Set Passport_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Passport_Type_ReferenceType $passport_Type_Reference
     * @return \WorkdayWsdl\\StructType\Passport_Identifier_DataType
     */
    public function setPassport_Type_Reference(\WorkdayWsdl\\StructType\Passport_Type_ReferenceType $passport_Type_Reference = null)
    {
        $this->Passport_Type_Reference = $passport_Type_Reference;
        return $this;
    }
    /**
     * Get Country_Reference value
     * @return \WorkdayWsdl\\StructType\Country_ReferenceType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \WorkdayWsdl\\StructType\Country_ReferenceType $country_Reference
     * @return \WorkdayWsdl\\StructType\Passport_Identifier_DataType
     */
    public function setCountry_Reference(\WorkdayWsdl\\StructType\Country_ReferenceType $country_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\Passport_Identifier_DataType
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
     * @return \WorkdayWsdl\\StructType\Passport_Identifier_DataType
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
     * @return \WorkdayWsdl\\StructType\Passport_Identifier_DataType
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
     * @return \WorkdayWsdl\\StructType\Passport_Identifier_DataType
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
