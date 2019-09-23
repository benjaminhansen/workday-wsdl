<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Status_Rule_Set_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the Response of the Web Service Get Request
 * @subpackage Structs
 */
class Work_Status_Rule_Set_Response_DataType extends AbstractStructBase
{
    /**
     * The Work_Status_Rule_Set
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Status_Rule_SetType[]
     */
    public $Work_Status_Rule_Set;
    /**
     * Constructor method for Work_Status_Rule_Set_Response_DataType
     * @uses Work_Status_Rule_Set_Response_DataType::setWork_Status_Rule_Set()
     * @param \WorkdayWsdl\\StructType\Work_Status_Rule_SetType[] $work_Status_Rule_Set
     */
    public function __construct(array $work_Status_Rule_Set = array())
    {
        $this
            ->setWork_Status_Rule_Set($work_Status_Rule_Set);
    }
    /**
     * Get Work_Status_Rule_Set value
     * @return \WorkdayWsdl\\StructType\Work_Status_Rule_SetType[]|null
     */
    public function getWork_Status_Rule_Set()
    {
        return $this->Work_Status_Rule_Set;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Status_Rule_Set method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Status_Rule_Set method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Status_Rule_SetForArrayConstraintsFromSetWork_Status_Rule_Set(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Status_Rule_Set_Response_DataTypeWork_Status_Rule_SetItem) {
            // validation for constraint: itemType
            if (!$work_Status_Rule_Set_Response_DataTypeWork_Status_Rule_SetItem instanceof \WorkdayWsdl\\StructType\Work_Status_Rule_SetType) {
                $invalidValues[] = is_object($work_Status_Rule_Set_Response_DataTypeWork_Status_Rule_SetItem) ? get_class($work_Status_Rule_Set_Response_DataTypeWork_Status_Rule_SetItem) : sprintf('%s(%s)', gettype($work_Status_Rule_Set_Response_DataTypeWork_Status_Rule_SetItem), var_export($work_Status_Rule_Set_Response_DataTypeWork_Status_Rule_SetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Status_Rule_Set property can only contain items of type \WorkdayWsdl\\StructType\Work_Status_Rule_SetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Status_Rule_Set value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Status_Rule_SetType[] $work_Status_Rule_Set
     * @return \WorkdayWsdl\\StructType\Work_Status_Rule_Set_Response_DataType
     */
    public function setWork_Status_Rule_Set(array $work_Status_Rule_Set = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Status_Rule_SetArrayErrorMessage = self::validateWork_Status_Rule_SetForArrayConstraintsFromSetWork_Status_Rule_Set($work_Status_Rule_Set))) {
            throw new \InvalidArgumentException($work_Status_Rule_SetArrayErrorMessage, __LINE__);
        }
        $this->Work_Status_Rule_Set = $work_Status_Rule_Set;
        return $this;
    }
    /**
     * Add item to Work_Status_Rule_Set value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Status_Rule_SetType $item
     * @return \WorkdayWsdl\\StructType\Work_Status_Rule_Set_Response_DataType
     */
    public function addToWork_Status_Rule_Set(\WorkdayWsdl\\StructType\Work_Status_Rule_SetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Work_Status_Rule_SetType) {
            throw new \InvalidArgumentException(sprintf('The Work_Status_Rule_Set property can only contain items of type \WorkdayWsdl\\StructType\Work_Status_Rule_SetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Status_Rule_Set[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Work_Status_Rule_Set_Response_DataType
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
