<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Passports_and_Visas_Identification_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Passports and Visas Identification Data. Includes Passport Identifiers and Visa Identifiers
 * @subpackage Structs
 */
class Passports_and_Visas_Identification_DataType extends AbstractStructBase
{
    /**
     * The Passport_ID
     * Meta information extracted from the WSDL
     * - documentation: Wrapper for Passport Identifier data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Passport_IDType[]
     */
    public $Passport_ID;
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
     * The Replace_All
     * Meta information extracted from the WSDL
     * - documentation: If Replace All is set to True, a full sync is performed after you submit the web service. Set to False if you want to preserve the existing data and only add, edit, or remove specific reference ids. Note: If you leave this boolean
     * value blank it defaults to True to preserve the existing Replace All functionality in older versions of this web service for web service users depending on the default behavior.
     * @var bool
     */
    public $Replace_All;
    /**
     * Constructor method for Passports_and_Visas_Identification_DataType
     * @uses Passports_and_Visas_Identification_DataType::setPassport_ID()
     * @uses Passports_and_Visas_Identification_DataType::setVisa_ID()
     * @uses Passports_and_Visas_Identification_DataType::setReplace_All()
     * @param \StructType\Passport_IDType[] $passport_ID
     * @param \StructType\Visa_IDType[] $visa_ID
     * @param bool $replace_All
     */
    public function __construct(array $passport_ID = array(), array $visa_ID = array(), $replace_All = null)
    {
        $this
            ->setPassport_ID($passport_ID)
            ->setVisa_ID($visa_ID)
            ->setReplace_All($replace_All);
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
        foreach ($values as $passports_and_Visas_Identification_DataTypePassport_IDItem) {
            // validation for constraint: itemType
            if (!$passports_and_Visas_Identification_DataTypePassport_IDItem instanceof \StructType\Passport_IDType) {
                $invalidValues[] = is_object($passports_and_Visas_Identification_DataTypePassport_IDItem) ? get_class($passports_and_Visas_Identification_DataTypePassport_IDItem) : sprintf('%s(%s)', gettype($passports_and_Visas_Identification_DataTypePassport_IDItem), var_export($passports_and_Visas_Identification_DataTypePassport_IDItem, true));
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
     * @return \StructType\Passports_and_Visas_Identification_DataType
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
     * @return \StructType\Passports_and_Visas_Identification_DataType
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
        foreach ($values as $passports_and_Visas_Identification_DataTypeVisa_IDItem) {
            // validation for constraint: itemType
            if (!$passports_and_Visas_Identification_DataTypeVisa_IDItem instanceof \StructType\Visa_IDType) {
                $invalidValues[] = is_object($passports_and_Visas_Identification_DataTypeVisa_IDItem) ? get_class($passports_and_Visas_Identification_DataTypeVisa_IDItem) : sprintf('%s(%s)', gettype($passports_and_Visas_Identification_DataTypeVisa_IDItem), var_export($passports_and_Visas_Identification_DataTypeVisa_IDItem, true));
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
     * @return \StructType\Passports_and_Visas_Identification_DataType
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
     * @return \StructType\Passports_and_Visas_Identification_DataType
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
     * Get Replace_All value
     * @return bool|null
     */
    public function getReplace_All()
    {
        return $this->Replace_All;
    }
    /**
     * Set Replace_All value
     * @param bool $replace_All
     * @return \StructType\Passports_and_Visas_Identification_DataType
     */
    public function setReplace_All($replace_All = null)
    {
        // validation for constraint: boolean
        if (!is_null($replace_All) && !is_bool($replace_All)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replace_All, true), gettype($replace_All)), __LINE__);
        }
        $this->Replace_All = $replace_All;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Passports_and_Visas_Identification_DataType
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
