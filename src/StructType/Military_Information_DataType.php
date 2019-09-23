<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Military_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for all Military Service data for the worker.
 * @subpackage Structs
 */
class Military_Information_DataType extends AbstractStructBase
{
    /**
     * The Military_Service_Information_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Military_Service_Information_DataType[]
     */
    public $Military_Service_Information_Data;
    /**
     * The Replace_All
     * Meta information extracted from the WSDL
     * - documentation: When this flag is set to false, existing Military data for the Worker will be preserved. When true, it causes the web service to replace all Military data for the Worker with the information in the request. (This is the default
     * behavior when the entire tag is omitted.)
     * @var bool
     */
    public $Replace_All;
    /**
     * Constructor method for Military_Information_DataType
     * @uses Military_Information_DataType::setMilitary_Service_Information_Data()
     * @uses Military_Information_DataType::setReplace_All()
     * @param \StructType\Military_Service_Information_DataType[] $military_Service_Information_Data
     * @param bool $replace_All
     */
    public function __construct(array $military_Service_Information_Data = array(), $replace_All = null)
    {
        $this
            ->setMilitary_Service_Information_Data($military_Service_Information_Data)
            ->setReplace_All($replace_All);
    }
    /**
     * Get Military_Service_Information_Data value
     * @return \StructType\Military_Service_Information_DataType[]|null
     */
    public function getMilitary_Service_Information_Data()
    {
        return $this->Military_Service_Information_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setMilitary_Service_Information_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMilitary_Service_Information_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMilitary_Service_Information_DataForArrayConstraintsFromSetMilitary_Service_Information_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $military_Information_DataTypeMilitary_Service_Information_DataItem) {
            // validation for constraint: itemType
            if (!$military_Information_DataTypeMilitary_Service_Information_DataItem instanceof \StructType\Military_Service_Information_DataType) {
                $invalidValues[] = is_object($military_Information_DataTypeMilitary_Service_Information_DataItem) ? get_class($military_Information_DataTypeMilitary_Service_Information_DataItem) : sprintf('%s(%s)', gettype($military_Information_DataTypeMilitary_Service_Information_DataItem), var_export($military_Information_DataTypeMilitary_Service_Information_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Military_Service_Information_Data property can only contain items of type \StructType\Military_Service_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Military_Service_Information_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Military_Service_Information_DataType[] $military_Service_Information_Data
     * @return \StructType\Military_Information_DataType
     */
    public function setMilitary_Service_Information_Data(array $military_Service_Information_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($military_Service_Information_DataArrayErrorMessage = self::validateMilitary_Service_Information_DataForArrayConstraintsFromSetMilitary_Service_Information_Data($military_Service_Information_Data))) {
            throw new \InvalidArgumentException($military_Service_Information_DataArrayErrorMessage, __LINE__);
        }
        $this->Military_Service_Information_Data = $military_Service_Information_Data;
        return $this;
    }
    /**
     * Add item to Military_Service_Information_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Military_Service_Information_DataType $item
     * @return \StructType\Military_Information_DataType
     */
    public function addToMilitary_Service_Information_Data(\StructType\Military_Service_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Military_Service_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Military_Service_Information_Data property can only contain items of type \StructType\Military_Service_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Military_Service_Information_Data[] = $item;
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
     * @return \StructType\Military_Information_DataType
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
     * @return \StructType\Military_Information_DataType
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
