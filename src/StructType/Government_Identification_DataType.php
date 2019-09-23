<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Government_Identification_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Government Identification Data. Includes National Identifiers and Government Identifiers.
 * @subpackage Structs
 */
class Government_Identification_DataType extends AbstractStructBase
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
     * The Replace_All
     * Meta information extracted from the WSDL
     * - documentation: If Replace All is set to True, a full sync is performed after you submit the web service. Set to False if you want to preserve the existing data and only add, edit, or remove specific reference ids. Note: If you leave this boolean
     * value blank it defaults to True to preserve the existing Replace All functionality in older versions of this web service for web service users depending on the default behavior.
     * @var bool
     */
    public $Replace_All;
    /**
     * Constructor method for Government_Identification_DataType
     * @uses Government_Identification_DataType::setNational_ID()
     * @uses Government_Identification_DataType::setGovernment_ID()
     * @uses Government_Identification_DataType::setReplace_All()
     * @param \StructType\National_IDType[] $national_ID
     * @param \StructType\Government_IDType[] $government_ID
     * @param bool $replace_All
     */
    public function __construct(array $national_ID = array(), array $government_ID = array(), $replace_All = null)
    {
        $this
            ->setNational_ID($national_ID)
            ->setGovernment_ID($government_ID)
            ->setReplace_All($replace_All);
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
        foreach ($values as $government_Identification_DataTypeNational_IDItem) {
            // validation for constraint: itemType
            if (!$government_Identification_DataTypeNational_IDItem instanceof \StructType\National_IDType) {
                $invalidValues[] = is_object($government_Identification_DataTypeNational_IDItem) ? get_class($government_Identification_DataTypeNational_IDItem) : sprintf('%s(%s)', gettype($government_Identification_DataTypeNational_IDItem), var_export($government_Identification_DataTypeNational_IDItem, true));
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
     * @return \StructType\Government_Identification_DataType
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
     * @return \StructType\Government_Identification_DataType
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
        foreach ($values as $government_Identification_DataTypeGovernment_IDItem) {
            // validation for constraint: itemType
            if (!$government_Identification_DataTypeGovernment_IDItem instanceof \StructType\Government_IDType) {
                $invalidValues[] = is_object($government_Identification_DataTypeGovernment_IDItem) ? get_class($government_Identification_DataTypeGovernment_IDItem) : sprintf('%s(%s)', gettype($government_Identification_DataTypeGovernment_IDItem), var_export($government_Identification_DataTypeGovernment_IDItem, true));
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
     * @return \StructType\Government_Identification_DataType
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
     * @return \StructType\Government_Identification_DataType
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
     * @return \StructType\Government_Identification_DataType
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
     * @return \StructType\Government_Identification_DataType
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
