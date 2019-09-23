<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for License_Identifier_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for all License Identifier data.
 * @subpackage Structs
 */
class License_Identifier_DataType extends AbstractStructBase
{
    /**
     * The License_ID
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying License ID.
     * - maxOccurs: 1
     * @var string
     */
    public $License_ID;
    /**
     * The License_Type_Reference
     * @var \WorkdayWsdl\\StructType\License_Type_ReferenceType
     */
    public $License_Type_Reference;
    /**
     * The License_Class
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying License Class.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $License_Class;
    /**
     * The Issued_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the License ID was issued.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Issued_Date;
    /**
     * The Expiration_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the License ID expires.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expiration_Date;
    /**
     * The Verification_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the License ID was verified.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Verification_Date;
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - choice: Country_Reference | Country_Region_Reference | Authority_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_ReferenceType
     */
    public $Country_Reference;
    /**
     * The Country_Region_Reference
     * Meta information extracted from the WSDL
     * - choice: Country_Reference | Country_Region_Reference | Authority_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_Region_ReferenceType
     */
    public $Country_Region_Reference;
    /**
     * The Authority_Reference
     * Meta information extracted from the WSDL
     * - choice: Country_Reference | Country_Region_Reference | Authority_Reference
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Authority_ReferenceType
     */
    public $Authority_Reference;
    /**
     * Constructor method for License_Identifier_DataType
     * @uses License_Identifier_DataType::setLicense_ID()
     * @uses License_Identifier_DataType::setLicense_Type_Reference()
     * @uses License_Identifier_DataType::setLicense_Class()
     * @uses License_Identifier_DataType::setIssued_Date()
     * @uses License_Identifier_DataType::setExpiration_Date()
     * @uses License_Identifier_DataType::setVerification_Date()
     * @uses License_Identifier_DataType::setCountry_Reference()
     * @uses License_Identifier_DataType::setCountry_Region_Reference()
     * @uses License_Identifier_DataType::setAuthority_Reference()
     * @param string $license_ID
     * @param \WorkdayWsdl\\StructType\License_Type_ReferenceType $license_Type_Reference
     * @param string $license_Class
     * @param string $issued_Date
     * @param string $expiration_Date
     * @param string $verification_Date
     * @param \WorkdayWsdl\\StructType\Country_ReferenceType $country_Reference
     * @param \WorkdayWsdl\\StructType\Country_Region_ReferenceType $country_Region_Reference
     * @param \WorkdayWsdl\\StructType\Authority_ReferenceType $authority_Reference
     */
    public function __construct($license_ID = null, \WorkdayWsdl\\StructType\License_Type_ReferenceType $license_Type_Reference = null, $license_Class = null, $issued_Date = null, $expiration_Date = null, $verification_Date = null, \WorkdayWsdl\\StructType\Country_ReferenceType $country_Reference = null, \WorkdayWsdl\\StructType\Country_Region_ReferenceType $country_Region_Reference = null, \WorkdayWsdl\\StructType\Authority_ReferenceType $authority_Reference = null)
    {
        $this
            ->setLicense_ID($license_ID)
            ->setLicense_Type_Reference($license_Type_Reference)
            ->setLicense_Class($license_Class)
            ->setIssued_Date($issued_Date)
            ->setExpiration_Date($expiration_Date)
            ->setVerification_Date($verification_Date)
            ->setCountry_Reference($country_Reference)
            ->setCountry_Region_Reference($country_Region_Reference)
            ->setAuthority_Reference($authority_Reference);
    }
    /**
     * Get License_ID value
     * @return string|null
     */
    public function getLicense_ID()
    {
        return $this->License_ID;
    }
    /**
     * Set License_ID value
     * @param string $license_ID
     * @return \WorkdayWsdl\\StructType\License_Identifier_DataType
     */
    public function setLicense_ID($license_ID = null)
    {
        // validation for constraint: string
        if (!is_null($license_ID) && !is_string($license_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($license_ID, true), gettype($license_ID)), __LINE__);
        }
        $this->License_ID = $license_ID;
        return $this;
    }
    /**
     * Get License_Type_Reference value
     * @return \WorkdayWsdl\\StructType\License_Type_ReferenceType|null
     */
    public function getLicense_Type_Reference()
    {
        return $this->License_Type_Reference;
    }
    /**
     * Set License_Type_Reference value
     * @param \WorkdayWsdl\\StructType\License_Type_ReferenceType $license_Type_Reference
     * @return \WorkdayWsdl\\StructType\License_Identifier_DataType
     */
    public function setLicense_Type_Reference(\WorkdayWsdl\\StructType\License_Type_ReferenceType $license_Type_Reference = null)
    {
        $this->License_Type_Reference = $license_Type_Reference;
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
     * @return \WorkdayWsdl\\StructType\License_Identifier_DataType
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
     * @return \WorkdayWsdl\\StructType\License_Identifier_DataType
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
     * @return \WorkdayWsdl\\StructType\License_Identifier_DataType
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
     * @return \WorkdayWsdl\\StructType\License_Identifier_DataType
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
     * Get Country_Reference value
     * @return \WorkdayWsdl\\StructType\Country_ReferenceType|null
     */
    public function getCountry_Reference()
    {
        return isset($this->Country_Reference) ? $this->Country_Reference : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCountry_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountry_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCountry_ReferenceForChoiceConstraintsFromSetCountry_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Country_Region_Reference',
            'Authority_Reference',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Country_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: Country_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Country_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Country_ReferenceType $country_Reference
     * @return \WorkdayWsdl\\StructType\License_Identifier_DataType
     */
    public function setCountry_Reference(\WorkdayWsdl\\StructType\Country_ReferenceType $country_Reference = null)
    {
        // validation for constraint: choice(Country_Reference, Country_Region_Reference, Authority_Reference)
        if ('' !== ($country_ReferenceChoiceErrorMessage = self::validateCountry_ReferenceForChoiceConstraintsFromSetCountry_Reference($country_Reference))) {
            throw new \InvalidArgumentException($country_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($country_Reference) || (is_array($country_Reference) && empty($country_Reference))) {
            unset($this->Country_Reference);
        } else {
            $this->Country_Reference = $country_Reference;
        }
        return $this;
    }
    /**
     * Get Country_Region_Reference value
     * @return \WorkdayWsdl\\StructType\Country_Region_ReferenceType|null
     */
    public function getCountry_Region_Reference()
    {
        return isset($this->Country_Region_Reference) ? $this->Country_Region_Reference : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCountry_Region_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountry_Region_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCountry_Region_ReferenceForChoiceConstraintsFromSetCountry_Region_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Country_Reference',
            'Authority_Reference',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Country_Region_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: Country_Region_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Country_Region_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Country_Region_ReferenceType $country_Region_Reference
     * @return \WorkdayWsdl\\StructType\License_Identifier_DataType
     */
    public function setCountry_Region_Reference(\WorkdayWsdl\\StructType\Country_Region_ReferenceType $country_Region_Reference = null)
    {
        // validation for constraint: choice(Country_Reference, Country_Region_Reference, Authority_Reference)
        if ('' !== ($country_Region_ReferenceChoiceErrorMessage = self::validateCountry_Region_ReferenceForChoiceConstraintsFromSetCountry_Region_Reference($country_Region_Reference))) {
            throw new \InvalidArgumentException($country_Region_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($country_Region_Reference) || (is_array($country_Region_Reference) && empty($country_Region_Reference))) {
            unset($this->Country_Region_Reference);
        } else {
            $this->Country_Region_Reference = $country_Region_Reference;
        }
        return $this;
    }
    /**
     * Get Authority_Reference value
     * @return \WorkdayWsdl\\StructType\Authority_ReferenceType|null
     */
    public function getAuthority_Reference()
    {
        return isset($this->Authority_Reference) ? $this->Authority_Reference : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAuthority_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAuthority_Reference method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAuthority_ReferenceForChoiceConstraintsFromSetAuthority_Reference($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Country_Reference',
            'Country_Region_Reference',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Authority_Reference can\'t be set as the property %s is already set. Only one property must be set among these properties: Authority_Reference, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Authority_Reference value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Authority_ReferenceType $authority_Reference
     * @return \WorkdayWsdl\\StructType\License_Identifier_DataType
     */
    public function setAuthority_Reference(\WorkdayWsdl\\StructType\Authority_ReferenceType $authority_Reference = null)
    {
        // validation for constraint: choice(Country_Reference, Country_Region_Reference, Authority_Reference)
        if ('' !== ($authority_ReferenceChoiceErrorMessage = self::validateAuthority_ReferenceForChoiceConstraintsFromSetAuthority_Reference($authority_Reference))) {
            throw new \InvalidArgumentException($authority_ReferenceChoiceErrorMessage, __LINE__);
        }
        if (is_null($authority_Reference) || (is_array($authority_Reference) && empty($authority_Reference))) {
            unset($this->Authority_Reference);
        } else {
            $this->Authority_Reference = $authority_Reference;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\License_Identifier_DataType
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
