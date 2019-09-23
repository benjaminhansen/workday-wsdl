<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Health_Savings_Account_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the health savings account information for an employee.
 * @subpackage Structs
 */
class Worker_Health_Savings_Account_DataType extends AbstractStructBase
{
    /**
     * The Health_Savings_Account_Period_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the health savings account period data for an employee based on the benefit plan year.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Worker_Health_Savings_Account_Period_DataType[]
     */
    public $Health_Savings_Account_Period_Data;
    /**
     * Constructor method for Worker_Health_Savings_Account_DataType
     * @uses Worker_Health_Savings_Account_DataType::setHealth_Savings_Account_Period_Data()
     * @param \StructType\Worker_Health_Savings_Account_Period_DataType[] $health_Savings_Account_Period_Data
     */
    public function __construct(array $health_Savings_Account_Period_Data = array())
    {
        $this
            ->setHealth_Savings_Account_Period_Data($health_Savings_Account_Period_Data);
    }
    /**
     * Get Health_Savings_Account_Period_Data value
     * @return \StructType\Worker_Health_Savings_Account_Period_DataType[]|null
     */
    public function getHealth_Savings_Account_Period_Data()
    {
        return $this->Health_Savings_Account_Period_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setHealth_Savings_Account_Period_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHealth_Savings_Account_Period_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHealth_Savings_Account_Period_DataForArrayConstraintsFromSetHealth_Savings_Account_Period_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Health_Savings_Account_DataTypeHealth_Savings_Account_Period_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Health_Savings_Account_DataTypeHealth_Savings_Account_Period_DataItem instanceof \StructType\Worker_Health_Savings_Account_Period_DataType) {
                $invalidValues[] = is_object($worker_Health_Savings_Account_DataTypeHealth_Savings_Account_Period_DataItem) ? get_class($worker_Health_Savings_Account_DataTypeHealth_Savings_Account_Period_DataItem) : sprintf('%s(%s)', gettype($worker_Health_Savings_Account_DataTypeHealth_Savings_Account_Period_DataItem), var_export($worker_Health_Savings_Account_DataTypeHealth_Savings_Account_Period_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Health_Savings_Account_Period_Data property can only contain items of type \StructType\Worker_Health_Savings_Account_Period_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Health_Savings_Account_Period_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_Health_Savings_Account_Period_DataType[] $health_Savings_Account_Period_Data
     * @return \StructType\Worker_Health_Savings_Account_DataType
     */
    public function setHealth_Savings_Account_Period_Data(array $health_Savings_Account_Period_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($health_Savings_Account_Period_DataArrayErrorMessage = self::validateHealth_Savings_Account_Period_DataForArrayConstraintsFromSetHealth_Savings_Account_Period_Data($health_Savings_Account_Period_Data))) {
            throw new \InvalidArgumentException($health_Savings_Account_Period_DataArrayErrorMessage, __LINE__);
        }
        $this->Health_Savings_Account_Period_Data = $health_Savings_Account_Period_Data;
        return $this;
    }
    /**
     * Add item to Health_Savings_Account_Period_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Worker_Health_Savings_Account_Period_DataType $item
     * @return \StructType\Worker_Health_Savings_Account_DataType
     */
    public function addToHealth_Savings_Account_Period_Data(\StructType\Worker_Health_Savings_Account_Period_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Worker_Health_Savings_Account_Period_DataType) {
            throw new \InvalidArgumentException(sprintf('The Health_Savings_Account_Period_Data property can only contain items of type \StructType\Worker_Health_Savings_Account_Period_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Health_Savings_Account_Period_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Health_Savings_Account_DataType
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
