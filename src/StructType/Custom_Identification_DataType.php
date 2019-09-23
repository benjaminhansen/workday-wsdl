<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Custom_Identification_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Custom Identification Data. Includes Custom Identifiers.
 * @subpackage Structs
 */
class Custom_Identification_DataType extends AbstractStructBase
{
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
     * The Replace_All
     * Meta information extracted from the WSDL
     * - documentation: If Replace All is set to True, a full sync is performed after you submit the web service. Set to False if you want to preserve the existing data and only add, edit, or remove specific reference ids. Note: If you leave this boolean
     * value blank it defaults to True to preserve the existing Replace All functionality in older versions of this web service for web service users depending on the default behavior.
     * @var bool
     */
    public $Replace_All;
    /**
     * Constructor method for Custom_Identification_DataType
     * @uses Custom_Identification_DataType::setCustom_ID()
     * @uses Custom_Identification_DataType::setReplace_All()
     * @param \StructType\Custom_IDType[] $custom_ID
     * @param bool $replace_All
     */
    public function __construct(array $custom_ID = array(), $replace_All = null)
    {
        $this
            ->setCustom_ID($custom_ID)
            ->setReplace_All($replace_All);
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
        foreach ($values as $custom_Identification_DataTypeCustom_IDItem) {
            // validation for constraint: itemType
            if (!$custom_Identification_DataTypeCustom_IDItem instanceof \StructType\Custom_IDType) {
                $invalidValues[] = is_object($custom_Identification_DataTypeCustom_IDItem) ? get_class($custom_Identification_DataTypeCustom_IDItem) : sprintf('%s(%s)', gettype($custom_Identification_DataTypeCustom_IDItem), var_export($custom_Identification_DataTypeCustom_IDItem, true));
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
     * @return \StructType\Custom_Identification_DataType
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
     * @return \StructType\Custom_Identification_DataType
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
     * @return \StructType\Custom_Identification_DataType
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
     * @return \StructType\Custom_Identification_DataType
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
