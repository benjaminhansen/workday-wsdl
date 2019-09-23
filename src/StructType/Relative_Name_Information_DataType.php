<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Relative_Name_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for all relative names of a person
 * @subpackage Structs
 */
class Relative_Name_Information_DataType extends AbstractStructBase
{
    /**
     * The Relative_Name_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Relative_Name_DataType[]
     */
    public $Relative_Name_Data;
    /**
     * The Replace_All
     * Meta information extracted from the WSDL
     * - documentation: When this flag is set to false, existing Relative Name data for the Worker will be preserved. When true, it causes the web service to replace all Relative Name data for the Worker with the information in the request. (This is the
     * default behavior when the entire tag is omitted.)
     * @var bool
     */
    public $Replace_All;
    /**
     * Constructor method for Relative_Name_Information_DataType
     * @uses Relative_Name_Information_DataType::setRelative_Name_Data()
     * @uses Relative_Name_Information_DataType::setReplace_All()
     * @param \WorkdayWsdl\\StructType\Relative_Name_DataType[] $relative_Name_Data
     * @param bool $replace_All
     */
    public function __construct(array $relative_Name_Data = array(), $replace_All = null)
    {
        $this
            ->setRelative_Name_Data($relative_Name_Data)
            ->setReplace_All($replace_All);
    }
    /**
     * Get Relative_Name_Data value
     * @return \WorkdayWsdl\\StructType\Relative_Name_DataType[]|null
     */
    public function getRelative_Name_Data()
    {
        return $this->Relative_Name_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setRelative_Name_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRelative_Name_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRelative_Name_DataForArrayConstraintsFromSetRelative_Name_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $relative_Name_Information_DataTypeRelative_Name_DataItem) {
            // validation for constraint: itemType
            if (!$relative_Name_Information_DataTypeRelative_Name_DataItem instanceof \WorkdayWsdl\\StructType\Relative_Name_DataType) {
                $invalidValues[] = is_object($relative_Name_Information_DataTypeRelative_Name_DataItem) ? get_class($relative_Name_Information_DataTypeRelative_Name_DataItem) : sprintf('%s(%s)', gettype($relative_Name_Information_DataTypeRelative_Name_DataItem), var_export($relative_Name_Information_DataTypeRelative_Name_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Relative_Name_Data property can only contain items of type \WorkdayWsdl\\StructType\Relative_Name_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Relative_Name_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Relative_Name_DataType[] $relative_Name_Data
     * @return \WorkdayWsdl\\StructType\Relative_Name_Information_DataType
     */
    public function setRelative_Name_Data(array $relative_Name_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($relative_Name_DataArrayErrorMessage = self::validateRelative_Name_DataForArrayConstraintsFromSetRelative_Name_Data($relative_Name_Data))) {
            throw new \InvalidArgumentException($relative_Name_DataArrayErrorMessage, __LINE__);
        }
        $this->Relative_Name_Data = $relative_Name_Data;
        return $this;
    }
    /**
     * Add item to Relative_Name_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Relative_Name_DataType $item
     * @return \WorkdayWsdl\\StructType\Relative_Name_Information_DataType
     */
    public function addToRelative_Name_Data(\WorkdayWsdl\\StructType\Relative_Name_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Relative_Name_DataType) {
            throw new \InvalidArgumentException(sprintf('The Relative_Name_Data property can only contain items of type \WorkdayWsdl\\StructType\Relative_Name_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Relative_Name_Data[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Relative_Name_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Relative_Name_Information_DataType
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
