<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Usage Type is Invalid for this Contactable. | At least 1 and only 1 Name must be set as Legal. | At least 1 and only 1 Name must be set as Preferred. | All of the personal data. This includes name, contact information (Email, Phone,
 * Address, Web, Instant Messenger), Visa and ID information, Biographic, Demographic, and Background Check Information.
 * @subpackage Structs
 */
class Person_DataType extends AbstractStructBase
{
    /**
     * The Name_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for all of the Name data for a person.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Name_DataType[]
     */
    public $Name_Data;
    /**
     * The Contact_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Contact_DataType
     */
    public $Contact_Data;
    /**
     * The Demographic_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Demographic_DataType
     */
    public $Demographic_Data;
    /**
     * The Biographic_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Biographic_DataType
     */
    public $Biographic_Data;
    /**
     * The Visa_ID_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Visa_Identifier_DataType[]
     */
    public $Visa_ID_Data;
    /**
     * The Custom_ID_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Custom_Identifier_DataType[]
     */
    public $Custom_ID_Data;
    /**
     * The Government_ID_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Government_Identifier_DataType[]
     */
    public $Government_ID_Data;
    /**
     * The License_ID_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\License_Identifier_DataType[]
     */
    public $License_ID_Data;
    /**
     * The Passport_ID_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Passport_Identifier_DataType[]
     */
    public $Passport_ID_Data;
    /**
     * The Personal_Preferences_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Personal_Preferences_DataType
     */
    public $Personal_Preferences_Data;
    /**
     * Constructor method for Person_DataType
     * @uses Person_DataType::setName_Data()
     * @uses Person_DataType::setContact_Data()
     * @uses Person_DataType::setDemographic_Data()
     * @uses Person_DataType::setBiographic_Data()
     * @uses Person_DataType::setVisa_ID_Data()
     * @uses Person_DataType::setCustom_ID_Data()
     * @uses Person_DataType::setGovernment_ID_Data()
     * @uses Person_DataType::setLicense_ID_Data()
     * @uses Person_DataType::setPassport_ID_Data()
     * @uses Person_DataType::setPersonal_Preferences_Data()
     * @param \StructType\Name_DataType[] $name_Data
     * @param \StructType\Contact_DataType $contact_Data
     * @param \StructType\Demographic_DataType $demographic_Data
     * @param \StructType\Biographic_DataType $biographic_Data
     * @param \StructType\Visa_Identifier_DataType[] $visa_ID_Data
     * @param \StructType\Custom_Identifier_DataType[] $custom_ID_Data
     * @param \StructType\Government_Identifier_DataType[] $government_ID_Data
     * @param \StructType\License_Identifier_DataType[] $license_ID_Data
     * @param \StructType\Passport_Identifier_DataType[] $passport_ID_Data
     * @param \StructType\Personal_Preferences_DataType $personal_Preferences_Data
     */
    public function __construct(array $name_Data = array(), \StructType\Contact_DataType $contact_Data = null, \StructType\Demographic_DataType $demographic_Data = null, \StructType\Biographic_DataType $biographic_Data = null, array $visa_ID_Data = array(), array $custom_ID_Data = array(), array $government_ID_Data = array(), array $license_ID_Data = array(), array $passport_ID_Data = array(), \StructType\Personal_Preferences_DataType $personal_Preferences_Data = null)
    {
        $this
            ->setName_Data($name_Data)
            ->setContact_Data($contact_Data)
            ->setDemographic_Data($demographic_Data)
            ->setBiographic_Data($biographic_Data)
            ->setVisa_ID_Data($visa_ID_Data)
            ->setCustom_ID_Data($custom_ID_Data)
            ->setGovernment_ID_Data($government_ID_Data)
            ->setLicense_ID_Data($license_ID_Data)
            ->setPassport_ID_Data($passport_ID_Data)
            ->setPersonal_Preferences_Data($personal_Preferences_Data);
    }
    /**
     * Get Name_Data value
     * @return \StructType\Name_DataType[]|null
     */
    public function getName_Data()
    {
        return $this->Name_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setName_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setName_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateName_DataForArrayConstraintsFromSetName_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_DataTypeName_DataItem) {
            // validation for constraint: itemType
            if (!$person_DataTypeName_DataItem instanceof \StructType\Name_DataType) {
                $invalidValues[] = is_object($person_DataTypeName_DataItem) ? get_class($person_DataTypeName_DataItem) : sprintf('%s(%s)', gettype($person_DataTypeName_DataItem), var_export($person_DataTypeName_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Name_Data property can only contain items of type \StructType\Name_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Name_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Name_DataType[] $name_Data
     * @return \StructType\Person_DataType
     */
    public function setName_Data(array $name_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($name_DataArrayErrorMessage = self::validateName_DataForArrayConstraintsFromSetName_Data($name_Data))) {
            throw new \InvalidArgumentException($name_DataArrayErrorMessage, __LINE__);
        }
        $this->Name_Data = $name_Data;
        return $this;
    }
    /**
     * Add item to Name_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Name_DataType $item
     * @return \StructType\Person_DataType
     */
    public function addToName_Data(\StructType\Name_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Name_DataType) {
            throw new \InvalidArgumentException(sprintf('The Name_Data property can only contain items of type \StructType\Name_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Name_Data[] = $item;
        return $this;
    }
    /**
     * Get Contact_Data value
     * @return \StructType\Contact_DataType|null
     */
    public function getContact_Data()
    {
        return $this->Contact_Data;
    }
    /**
     * Set Contact_Data value
     * @param \StructType\Contact_DataType $contact_Data
     * @return \StructType\Person_DataType
     */
    public function setContact_Data(\StructType\Contact_DataType $contact_Data = null)
    {
        $this->Contact_Data = $contact_Data;
        return $this;
    }
    /**
     * Get Demographic_Data value
     * @return \StructType\Demographic_DataType|null
     */
    public function getDemographic_Data()
    {
        return $this->Demographic_Data;
    }
    /**
     * Set Demographic_Data value
     * @param \StructType\Demographic_DataType $demographic_Data
     * @return \StructType\Person_DataType
     */
    public function setDemographic_Data(\StructType\Demographic_DataType $demographic_Data = null)
    {
        $this->Demographic_Data = $demographic_Data;
        return $this;
    }
    /**
     * Get Biographic_Data value
     * @return \StructType\Biographic_DataType|null
     */
    public function getBiographic_Data()
    {
        return $this->Biographic_Data;
    }
    /**
     * Set Biographic_Data value
     * @param \StructType\Biographic_DataType $biographic_Data
     * @return \StructType\Person_DataType
     */
    public function setBiographic_Data(\StructType\Biographic_DataType $biographic_Data = null)
    {
        $this->Biographic_Data = $biographic_Data;
        return $this;
    }
    /**
     * Get Visa_ID_Data value
     * @return \StructType\Visa_Identifier_DataType[]|null
     */
    public function getVisa_ID_Data()
    {
        return $this->Visa_ID_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setVisa_ID_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVisa_ID_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVisa_ID_DataForArrayConstraintsFromSetVisa_ID_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_DataTypeVisa_ID_DataItem) {
            // validation for constraint: itemType
            if (!$person_DataTypeVisa_ID_DataItem instanceof \StructType\Visa_Identifier_DataType) {
                $invalidValues[] = is_object($person_DataTypeVisa_ID_DataItem) ? get_class($person_DataTypeVisa_ID_DataItem) : sprintf('%s(%s)', gettype($person_DataTypeVisa_ID_DataItem), var_export($person_DataTypeVisa_ID_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Visa_ID_Data property can only contain items of type \StructType\Visa_Identifier_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Visa_ID_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Visa_Identifier_DataType[] $visa_ID_Data
     * @return \StructType\Person_DataType
     */
    public function setVisa_ID_Data(array $visa_ID_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($visa_ID_DataArrayErrorMessage = self::validateVisa_ID_DataForArrayConstraintsFromSetVisa_ID_Data($visa_ID_Data))) {
            throw new \InvalidArgumentException($visa_ID_DataArrayErrorMessage, __LINE__);
        }
        $this->Visa_ID_Data = $visa_ID_Data;
        return $this;
    }
    /**
     * Add item to Visa_ID_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Visa_Identifier_DataType $item
     * @return \StructType\Person_DataType
     */
    public function addToVisa_ID_Data(\StructType\Visa_Identifier_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Visa_Identifier_DataType) {
            throw new \InvalidArgumentException(sprintf('The Visa_ID_Data property can only contain items of type \StructType\Visa_Identifier_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Visa_ID_Data[] = $item;
        return $this;
    }
    /**
     * Get Custom_ID_Data value
     * @return \StructType\Custom_Identifier_DataType[]|null
     */
    public function getCustom_ID_Data()
    {
        return $this->Custom_ID_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCustom_ID_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustom_ID_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustom_ID_DataForArrayConstraintsFromSetCustom_ID_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_DataTypeCustom_ID_DataItem) {
            // validation for constraint: itemType
            if (!$person_DataTypeCustom_ID_DataItem instanceof \StructType\Custom_Identifier_DataType) {
                $invalidValues[] = is_object($person_DataTypeCustom_ID_DataItem) ? get_class($person_DataTypeCustom_ID_DataItem) : sprintf('%s(%s)', gettype($person_DataTypeCustom_ID_DataItem), var_export($person_DataTypeCustom_ID_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Custom_ID_Data property can only contain items of type \StructType\Custom_Identifier_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Custom_ID_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Custom_Identifier_DataType[] $custom_ID_Data
     * @return \StructType\Person_DataType
     */
    public function setCustom_ID_Data(array $custom_ID_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($custom_ID_DataArrayErrorMessage = self::validateCustom_ID_DataForArrayConstraintsFromSetCustom_ID_Data($custom_ID_Data))) {
            throw new \InvalidArgumentException($custom_ID_DataArrayErrorMessage, __LINE__);
        }
        $this->Custom_ID_Data = $custom_ID_Data;
        return $this;
    }
    /**
     * Add item to Custom_ID_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Custom_Identifier_DataType $item
     * @return \StructType\Person_DataType
     */
    public function addToCustom_ID_Data(\StructType\Custom_Identifier_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Custom_Identifier_DataType) {
            throw new \InvalidArgumentException(sprintf('The Custom_ID_Data property can only contain items of type \StructType\Custom_Identifier_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Custom_ID_Data[] = $item;
        return $this;
    }
    /**
     * Get Government_ID_Data value
     * @return \StructType\Government_Identifier_DataType[]|null
     */
    public function getGovernment_ID_Data()
    {
        return $this->Government_ID_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setGovernment_ID_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGovernment_ID_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGovernment_ID_DataForArrayConstraintsFromSetGovernment_ID_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_DataTypeGovernment_ID_DataItem) {
            // validation for constraint: itemType
            if (!$person_DataTypeGovernment_ID_DataItem instanceof \StructType\Government_Identifier_DataType) {
                $invalidValues[] = is_object($person_DataTypeGovernment_ID_DataItem) ? get_class($person_DataTypeGovernment_ID_DataItem) : sprintf('%s(%s)', gettype($person_DataTypeGovernment_ID_DataItem), var_export($person_DataTypeGovernment_ID_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Government_ID_Data property can only contain items of type \StructType\Government_Identifier_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Government_ID_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Government_Identifier_DataType[] $government_ID_Data
     * @return \StructType\Person_DataType
     */
    public function setGovernment_ID_Data(array $government_ID_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($government_ID_DataArrayErrorMessage = self::validateGovernment_ID_DataForArrayConstraintsFromSetGovernment_ID_Data($government_ID_Data))) {
            throw new \InvalidArgumentException($government_ID_DataArrayErrorMessage, __LINE__);
        }
        $this->Government_ID_Data = $government_ID_Data;
        return $this;
    }
    /**
     * Add item to Government_ID_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Government_Identifier_DataType $item
     * @return \StructType\Person_DataType
     */
    public function addToGovernment_ID_Data(\StructType\Government_Identifier_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Government_Identifier_DataType) {
            throw new \InvalidArgumentException(sprintf('The Government_ID_Data property can only contain items of type \StructType\Government_Identifier_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Government_ID_Data[] = $item;
        return $this;
    }
    /**
     * Get License_ID_Data value
     * @return \StructType\License_Identifier_DataType[]|null
     */
    public function getLicense_ID_Data()
    {
        return $this->License_ID_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setLicense_ID_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLicense_ID_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLicense_ID_DataForArrayConstraintsFromSetLicense_ID_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_DataTypeLicense_ID_DataItem) {
            // validation for constraint: itemType
            if (!$person_DataTypeLicense_ID_DataItem instanceof \StructType\License_Identifier_DataType) {
                $invalidValues[] = is_object($person_DataTypeLicense_ID_DataItem) ? get_class($person_DataTypeLicense_ID_DataItem) : sprintf('%s(%s)', gettype($person_DataTypeLicense_ID_DataItem), var_export($person_DataTypeLicense_ID_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The License_ID_Data property can only contain items of type \StructType\License_Identifier_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set License_ID_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\License_Identifier_DataType[] $license_ID_Data
     * @return \StructType\Person_DataType
     */
    public function setLicense_ID_Data(array $license_ID_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($license_ID_DataArrayErrorMessage = self::validateLicense_ID_DataForArrayConstraintsFromSetLicense_ID_Data($license_ID_Data))) {
            throw new \InvalidArgumentException($license_ID_DataArrayErrorMessage, __LINE__);
        }
        $this->License_ID_Data = $license_ID_Data;
        return $this;
    }
    /**
     * Add item to License_ID_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\License_Identifier_DataType $item
     * @return \StructType\Person_DataType
     */
    public function addToLicense_ID_Data(\StructType\License_Identifier_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\License_Identifier_DataType) {
            throw new \InvalidArgumentException(sprintf('The License_ID_Data property can only contain items of type \StructType\License_Identifier_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->License_ID_Data[] = $item;
        return $this;
    }
    /**
     * Get Passport_ID_Data value
     * @return \StructType\Passport_Identifier_DataType[]|null
     */
    public function getPassport_ID_Data()
    {
        return $this->Passport_ID_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPassport_ID_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassport_ID_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassport_ID_DataForArrayConstraintsFromSetPassport_ID_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_DataTypePassport_ID_DataItem) {
            // validation for constraint: itemType
            if (!$person_DataTypePassport_ID_DataItem instanceof \StructType\Passport_Identifier_DataType) {
                $invalidValues[] = is_object($person_DataTypePassport_ID_DataItem) ? get_class($person_DataTypePassport_ID_DataItem) : sprintf('%s(%s)', gettype($person_DataTypePassport_ID_DataItem), var_export($person_DataTypePassport_ID_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Passport_ID_Data property can only contain items of type \StructType\Passport_Identifier_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Passport_ID_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Passport_Identifier_DataType[] $passport_ID_Data
     * @return \StructType\Person_DataType
     */
    public function setPassport_ID_Data(array $passport_ID_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($passport_ID_DataArrayErrorMessage = self::validatePassport_ID_DataForArrayConstraintsFromSetPassport_ID_Data($passport_ID_Data))) {
            throw new \InvalidArgumentException($passport_ID_DataArrayErrorMessage, __LINE__);
        }
        $this->Passport_ID_Data = $passport_ID_Data;
        return $this;
    }
    /**
     * Add item to Passport_ID_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Passport_Identifier_DataType $item
     * @return \StructType\Person_DataType
     */
    public function addToPassport_ID_Data(\StructType\Passport_Identifier_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Passport_Identifier_DataType) {
            throw new \InvalidArgumentException(sprintf('The Passport_ID_Data property can only contain items of type \StructType\Passport_Identifier_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Passport_ID_Data[] = $item;
        return $this;
    }
    /**
     * Get Personal_Preferences_Data value
     * @return \StructType\Personal_Preferences_DataType|null
     */
    public function getPersonal_Preferences_Data()
    {
        return $this->Personal_Preferences_Data;
    }
    /**
     * Set Personal_Preferences_Data value
     * @param \StructType\Personal_Preferences_DataType $personal_Preferences_Data
     * @return \StructType\Person_DataType
     */
    public function setPersonal_Preferences_Data(\StructType\Personal_Preferences_DataType $personal_Preferences_Data = null)
    {
        $this->Personal_Preferences_Data = $personal_Preferences_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Person_DataType
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
