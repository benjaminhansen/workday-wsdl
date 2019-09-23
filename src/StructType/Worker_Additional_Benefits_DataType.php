<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Additional_Benefits_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the additional benefits data for an employee.
 * @subpackage Structs
 */
class Worker_Additional_Benefits_DataType extends AbstractStructBase
{
    /**
     * The Additional_Benefits_Period_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the additional benefits period data for an employee based on the benefit plan year.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Period_DataType[]
     */
    public $Additional_Benefits_Period_Data;
    /**
     * Constructor method for Worker_Additional_Benefits_DataType
     * @uses Worker_Additional_Benefits_DataType::setAdditional_Benefits_Period_Data()
     * @param \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Period_DataType[] $additional_Benefits_Period_Data
     */
    public function __construct(array $additional_Benefits_Period_Data = array())
    {
        $this
            ->setAdditional_Benefits_Period_Data($additional_Benefits_Period_Data);
    }
    /**
     * Get Additional_Benefits_Period_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Period_DataType[]|null
     */
    public function getAdditional_Benefits_Period_Data()
    {
        return $this->Additional_Benefits_Period_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditional_Benefits_Period_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditional_Benefits_Period_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditional_Benefits_Period_DataForArrayConstraintsFromSetAdditional_Benefits_Period_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Additional_Benefits_DataTypeAdditional_Benefits_Period_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Additional_Benefits_DataTypeAdditional_Benefits_Period_DataItem instanceof \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Period_DataType) {
                $invalidValues[] = is_object($worker_Additional_Benefits_DataTypeAdditional_Benefits_Period_DataItem) ? get_class($worker_Additional_Benefits_DataTypeAdditional_Benefits_Period_DataItem) : sprintf('%s(%s)', gettype($worker_Additional_Benefits_DataTypeAdditional_Benefits_Period_DataItem), var_export($worker_Additional_Benefits_DataTypeAdditional_Benefits_Period_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Additional_Benefits_Period_Data property can only contain items of type \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Period_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Additional_Benefits_Period_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Period_DataType[] $additional_Benefits_Period_Data
     * @return \WorkdayWsdl\\StructType\Worker_Additional_Benefits_DataType
     */
    public function setAdditional_Benefits_Period_Data(array $additional_Benefits_Period_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($additional_Benefits_Period_DataArrayErrorMessage = self::validateAdditional_Benefits_Period_DataForArrayConstraintsFromSetAdditional_Benefits_Period_Data($additional_Benefits_Period_Data))) {
            throw new \InvalidArgumentException($additional_Benefits_Period_DataArrayErrorMessage, __LINE__);
        }
        $this->Additional_Benefits_Period_Data = $additional_Benefits_Period_Data;
        return $this;
    }
    /**
     * Add item to Additional_Benefits_Period_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Period_DataType $item
     * @return \WorkdayWsdl\\StructType\Worker_Additional_Benefits_DataType
     */
    public function addToAdditional_Benefits_Period_Data(\WorkdayWsdl\\StructType\Worker_Additional_Benefits_Period_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Period_DataType) {
            throw new \InvalidArgumentException(sprintf('The Additional_Benefits_Period_Data property can only contain items of type \WorkdayWsdl\\StructType\Worker_Additional_Benefits_Period_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Additional_Benefits_Period_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Additional_Benefits_DataType
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
