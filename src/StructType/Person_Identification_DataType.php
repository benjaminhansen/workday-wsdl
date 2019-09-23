<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Identification_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Person Identification Data. Includes National Identifiers, Government Identifiers, Visa Identifiers, Passport Identifiers, License Identifiers and Custom Identifiers.
 * @subpackage Structs
 */
class Person_Identification_DataType extends AbstractStructBase
{
    /**
     * The National_ID
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for all National Identifier Data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\National_IDType[]
     */
    public $National_ID;
    /**
     * The Government_ID
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for all Government Identifier Data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Government_IDType[]
     */
    public $Government_ID;
    /**
     * The Visa_ID
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for all Visa Identifier Data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Visa_IDType[]
     */
    public $Visa_ID;
    /**
     * The Passport_ID
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for all Passport Identifier Data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Passport_IDType[]
     */
    public $Passport_ID;
    /**
     * The License_ID
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for all License Identifier Data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\License_IDType[]
     */
    public $License_ID;
    /**
     * The Custom_ID
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for all Custom Identifier Data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Custom_IDType[]
     */
    public $Custom_ID;
    /**
     * Constructor method for Person_Identification_DataType
     * @uses Person_Identification_DataType::setNational_ID()
     * @uses Person_Identification_DataType::setGovernment_ID()
     * @uses Person_Identification_DataType::setVisa_ID()
     * @uses Person_Identification_DataType::setPassport_ID()
     * @uses Person_Identification_DataType::setLicense_ID()
     * @uses Person_Identification_DataType::setCustom_ID()
     * @param \StructType\National_IDType[] $national_ID
     * @param \StructType\Government_IDType[] $government_ID
     * @param \StructType\Visa_IDType[] $visa_ID
     * @param \StructType\Passport_IDType[] $passport_ID
     * @param \StructType\License_IDType[] $license_ID
     * @param \StructType\Custom_IDType[] $custom_ID
     */
    public function __construct(array $national_ID = array(), array $government_ID = array(), array $visa_ID = array(), array $passport_ID = array(), array $license_ID = array(), array $custom_ID = array())
    {
        $this
            ->setNational_ID($national_ID)
            ->setGovernment_ID($government_ID)
            ->setVisa_ID($visa_ID)
            ->setPassport_ID($passport_ID)
            ->setLicense_ID($license_ID)
            ->setCustom_ID($custom_ID);
    }
    /**
     * Get National_ID value
     * @return \StructType\National_IDType[]|null
     */
    public function getNational_ID()
    {
        return $this->National_ID;
    }
    /**
     * This method is responsible for validating the values passed to the setNational_ID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNational_ID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNational_IDForArrayConstraintsFromSetNational_ID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Identification_DataTypeNational_IDItem) {
            // validation for constraint: itemType
            if (!$person_Identification_DataTypeNational_IDItem instanceof \StructType\National_IDType) {
                $invalidValues[] = is_object($person_Identification_DataTypeNational_IDItem) ? get_class($person_Identification_DataTypeNational_IDItem) : sprintf('%s(%s)', gettype($person_Identification_DataTypeNational_IDItem), var_export($person_Identification_DataTypeNational_IDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The National_ID property can only contain items of type \StructType\National_IDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set National_ID value
     * @throws \InvalidArgumentException
     * @param \StructType\National_IDType[] $national_ID
     * @return \StructType\Person_Identification_DataType
     */
    public function setNational_ID(array $national_ID = array())
    {
        // validation for constraint: array
        if ('' !== ($national_IDArrayErrorMessage = self::validateNational_IDForArrayConstraintsFromSetNational_ID($national_ID))) {
            throw new \InvalidArgumentException($national_IDArrayErrorMessage, __LINE__);
        }
        $this->National_ID = $national_ID;
        return $this;
    }
    /**
     * Add item to National_ID value
     * @throws \InvalidArgumentException
     * @param \StructType\National_IDType $item
     * @return \StructType\Person_Identification_DataType
     */
    public function addToNational_ID(\StructType\National_IDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\National_IDType) {
            throw new \InvalidArgumentException(sprintf('The National_ID property can only contain items of type \StructType\National_IDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->National_ID[] = $item;
        return $this;
    }
    /**
     * Get Government_ID value
     * @return \StructType\Government_IDType[]|null
     */
    public function getGovernment_ID()
    {
        return $this->Government_ID;
    }
    /**
     * This method is responsible for validating the values passed to the setGovernment_ID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGovernment_ID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGovernment_IDForArrayConstraintsFromSetGovernment_ID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Identification_DataTypeGovernment_IDItem) {
            // validation for constraint: itemType
            if (!$person_Identification_DataTypeGovernment_IDItem instanceof \StructType\Government_IDType) {
                $invalidValues[] = is_object($person_Identification_DataTypeGovernment_IDItem) ? get_class($person_Identification_DataTypeGovernment_IDItem) : sprintf('%s(%s)', gettype($person_Identification_DataTypeGovernment_IDItem), var_export($person_Identification_DataTypeGovernment_IDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Government_ID property can only contain items of type \StructType\Government_IDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Government_ID value
     * @throws \InvalidArgumentException
     * @param \StructType\Government_IDType[] $government_ID
     * @return \StructType\Person_Identification_DataType
     */
    public function setGovernment_ID(array $government_ID = array())
    {
        // validation for constraint: array
        if ('' !== ($government_IDArrayErrorMessage = self::validateGovernment_IDForArrayConstraintsFromSetGovernment_ID($government_ID))) {
            throw new \InvalidArgumentException($government_IDArrayErrorMessage, __LINE__);
        }
        $this->Government_ID = $government_ID;
        return $this;
    }
    /**
     * Add item to Government_ID value
     * @throws \InvalidArgumentException
     * @param \StructType\Government_IDType $item
     * @return \StructType\Person_Identification_DataType
     */
    public function addToGovernment_ID(\StructType\Government_IDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Government_IDType) {
            throw new \InvalidArgumentException(sprintf('The Government_ID property can only contain items of type \StructType\Government_IDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Government_ID[] = $item;
        return $this;
    }
    /**
     * Get Visa_ID value
     * @return \StructType\Visa_IDType[]|null
     */
    public function getVisa_ID()
    {
        return $this->Visa_ID;
    }
    /**
     * This method is responsible for validating the values passed to the setVisa_ID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVisa_ID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVisa_IDForArrayConstraintsFromSetVisa_ID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Identification_DataTypeVisa_IDItem) {
            // validation for constraint: itemType
            if (!$person_Identification_DataTypeVisa_IDItem instanceof \StructType\Visa_IDType) {
                $invalidValues[] = is_object($person_Identification_DataTypeVisa_IDItem) ? get_class($person_Identification_DataTypeVisa_IDItem) : sprintf('%s(%s)', gettype($person_Identification_DataTypeVisa_IDItem), var_export($person_Identification_DataTypeVisa_IDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Visa_ID property can only contain items of type \StructType\Visa_IDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Visa_ID value
     * @throws \InvalidArgumentException
     * @param \StructType\Visa_IDType[] $visa_ID
     * @return \StructType\Person_Identification_DataType
     */
    public function setVisa_ID(array $visa_ID = array())
    {
        // validation for constraint: array
        if ('' !== ($visa_IDArrayErrorMessage = self::validateVisa_IDForArrayConstraintsFromSetVisa_ID($visa_ID))) {
            throw new \InvalidArgumentException($visa_IDArrayErrorMessage, __LINE__);
        }
        $this->Visa_ID = $visa_ID;
        return $this;
    }
    /**
     * Add item to Visa_ID value
     * @throws \InvalidArgumentException
     * @param \StructType\Visa_IDType $item
     * @return \StructType\Person_Identification_DataType
     */
    public function addToVisa_ID(\StructType\Visa_IDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Visa_IDType) {
            throw new \InvalidArgumentException(sprintf('The Visa_ID property can only contain items of type \StructType\Visa_IDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Visa_ID[] = $item;
        return $this;
    }
    /**
     * Get Passport_ID value
     * @return \StructType\Passport_IDType[]|null
     */
    public function getPassport_ID()
    {
        return $this->Passport_ID;
    }
    /**
     * This method is responsible for validating the values passed to the setPassport_ID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassport_ID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassport_IDForArrayConstraintsFromSetPassport_ID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Identification_DataTypePassport_IDItem) {
            // validation for constraint: itemType
            if (!$person_Identification_DataTypePassport_IDItem instanceof \StructType\Passport_IDType) {
                $invalidValues[] = is_object($person_Identification_DataTypePassport_IDItem) ? get_class($person_Identification_DataTypePassport_IDItem) : sprintf('%s(%s)', gettype($person_Identification_DataTypePassport_IDItem), var_export($person_Identification_DataTypePassport_IDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Passport_ID property can only contain items of type \StructType\Passport_IDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Passport_ID value
     * @throws \InvalidArgumentException
     * @param \StructType\Passport_IDType[] $passport_ID
     * @return \StructType\Person_Identification_DataType
     */
    public function setPassport_ID(array $passport_ID = array())
    {
        // validation for constraint: array
        if ('' !== ($passport_IDArrayErrorMessage = self::validatePassport_IDForArrayConstraintsFromSetPassport_ID($passport_ID))) {
            throw new \InvalidArgumentException($passport_IDArrayErrorMessage, __LINE__);
        }
        $this->Passport_ID = $passport_ID;
        return $this;
    }
    /**
     * Add item to Passport_ID value
     * @throws \InvalidArgumentException
     * @param \StructType\Passport_IDType $item
     * @return \StructType\Person_Identification_DataType
     */
    public function addToPassport_ID(\StructType\Passport_IDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Passport_IDType) {
            throw new \InvalidArgumentException(sprintf('The Passport_ID property can only contain items of type \StructType\Passport_IDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Passport_ID[] = $item;
        return $this;
    }
    /**
     * Get License_ID value
     * @return \StructType\License_IDType[]|null
     */
    public function getLicense_ID()
    {
        return $this->License_ID;
    }
    /**
     * This method is responsible for validating the values passed to the setLicense_ID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLicense_ID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLicense_IDForArrayConstraintsFromSetLicense_ID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Identification_DataTypeLicense_IDItem) {
            // validation for constraint: itemType
            if (!$person_Identification_DataTypeLicense_IDItem instanceof \StructType\License_IDType) {
                $invalidValues[] = is_object($person_Identification_DataTypeLicense_IDItem) ? get_class($person_Identification_DataTypeLicense_IDItem) : sprintf('%s(%s)', gettype($person_Identification_DataTypeLicense_IDItem), var_export($person_Identification_DataTypeLicense_IDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The License_ID property can only contain items of type \StructType\License_IDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set License_ID value
     * @throws \InvalidArgumentException
     * @param \StructType\License_IDType[] $license_ID
     * @return \StructType\Person_Identification_DataType
     */
    public function setLicense_ID(array $license_ID = array())
    {
        // validation for constraint: array
        if ('' !== ($license_IDArrayErrorMessage = self::validateLicense_IDForArrayConstraintsFromSetLicense_ID($license_ID))) {
            throw new \InvalidArgumentException($license_IDArrayErrorMessage, __LINE__);
        }
        $this->License_ID = $license_ID;
        return $this;
    }
    /**
     * Add item to License_ID value
     * @throws \InvalidArgumentException
     * @param \StructType\License_IDType $item
     * @return \StructType\Person_Identification_DataType
     */
    public function addToLicense_ID(\StructType\License_IDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\License_IDType) {
            throw new \InvalidArgumentException(sprintf('The License_ID property can only contain items of type \StructType\License_IDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->License_ID[] = $item;
        return $this;
    }
    /**
     * Get Custom_ID value
     * @return \StructType\Custom_IDType[]|null
     */
    public function getCustom_ID()
    {
        return $this->Custom_ID;
    }
    /**
     * This method is responsible for validating the values passed to the setCustom_ID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustom_ID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustom_IDForArrayConstraintsFromSetCustom_ID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Identification_DataTypeCustom_IDItem) {
            // validation for constraint: itemType
            if (!$person_Identification_DataTypeCustom_IDItem instanceof \StructType\Custom_IDType) {
                $invalidValues[] = is_object($person_Identification_DataTypeCustom_IDItem) ? get_class($person_Identification_DataTypeCustom_IDItem) : sprintf('%s(%s)', gettype($person_Identification_DataTypeCustom_IDItem), var_export($person_Identification_DataTypeCustom_IDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Custom_ID property can only contain items of type \StructType\Custom_IDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Custom_ID value
     * @throws \InvalidArgumentException
     * @param \StructType\Custom_IDType[] $custom_ID
     * @return \StructType\Person_Identification_DataType
     */
    public function setCustom_ID(array $custom_ID = array())
    {
        // validation for constraint: array
        if ('' !== ($custom_IDArrayErrorMessage = self::validateCustom_IDForArrayConstraintsFromSetCustom_ID($custom_ID))) {
            throw new \InvalidArgumentException($custom_IDArrayErrorMessage, __LINE__);
        }
        $this->Custom_ID = $custom_ID;
        return $this;
    }
    /**
     * Add item to Custom_ID value
     * @throws \InvalidArgumentException
     * @param \StructType\Custom_IDType $item
     * @return \StructType\Person_Identification_DataType
     */
    public function addToCustom_ID(\StructType\Custom_IDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Custom_IDType) {
            throw new \InvalidArgumentException(sprintf('The Custom_ID property can only contain items of type \StructType\Custom_IDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Custom_ID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Person_Identification_DataType
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
