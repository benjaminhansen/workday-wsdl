<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Retirement_Savings_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the retirement savings election information for the benefit plan year period.
 * @subpackage Structs
 */
class Retirement_Savings_DataType extends AbstractStructBase
{
    /**
     * The Retirement_Savings_Period_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Retirement_Savings_Period_DataType[]
     */
    public $Retirement_Savings_Period_Data;
    /**
     * Constructor method for Retirement_Savings_DataType
     * @uses Retirement_Savings_DataType::setRetirement_Savings_Period_Data()
     * @param \WorkdayWsdl\\StructType\Worker_Retirement_Savings_Period_DataType[] $retirement_Savings_Period_Data
     */
    public function __construct(array $retirement_Savings_Period_Data = array())
    {
        $this
            ->setRetirement_Savings_Period_Data($retirement_Savings_Period_Data);
    }
    /**
     * Get Retirement_Savings_Period_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Retirement_Savings_Period_DataType[]|null
     */
    public function getRetirement_Savings_Period_Data()
    {
        return $this->Retirement_Savings_Period_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setRetirement_Savings_Period_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRetirement_Savings_Period_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRetirement_Savings_Period_DataForArrayConstraintsFromSetRetirement_Savings_Period_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $retirement_Savings_DataTypeRetirement_Savings_Period_DataItem) {
            // validation for constraint: itemType
            if (!$retirement_Savings_DataTypeRetirement_Savings_Period_DataItem instanceof \WorkdayWsdl\\StructType\Worker_Retirement_Savings_Period_DataType) {
                $invalidValues[] = is_object($retirement_Savings_DataTypeRetirement_Savings_Period_DataItem) ? get_class($retirement_Savings_DataTypeRetirement_Savings_Period_DataItem) : sprintf('%s(%s)', gettype($retirement_Savings_DataTypeRetirement_Savings_Period_DataItem), var_export($retirement_Savings_DataTypeRetirement_Savings_Period_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Retirement_Savings_Period_Data property can only contain items of type \WorkdayWsdl\\StructType\Worker_Retirement_Savings_Period_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Retirement_Savings_Period_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Retirement_Savings_Period_DataType[] $retirement_Savings_Period_Data
     * @return \WorkdayWsdl\\StructType\Retirement_Savings_DataType
     */
    public function setRetirement_Savings_Period_Data(array $retirement_Savings_Period_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($retirement_Savings_Period_DataArrayErrorMessage = self::validateRetirement_Savings_Period_DataForArrayConstraintsFromSetRetirement_Savings_Period_Data($retirement_Savings_Period_Data))) {
            throw new \InvalidArgumentException($retirement_Savings_Period_DataArrayErrorMessage, __LINE__);
        }
        $this->Retirement_Savings_Period_Data = $retirement_Savings_Period_Data;
        return $this;
    }
    /**
     * Add item to Retirement_Savings_Period_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Retirement_Savings_Period_DataType $item
     * @return \WorkdayWsdl\\StructType\Retirement_Savings_DataType
     */
    public function addToRetirement_Savings_Period_Data(\WorkdayWsdl\\StructType\Worker_Retirement_Savings_Period_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Worker_Retirement_Savings_Period_DataType) {
            throw new \InvalidArgumentException(sprintf('The Retirement_Savings_Period_Data property can only contain items of type \WorkdayWsdl\\StructType\Worker_Retirement_Savings_Period_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Retirement_Savings_Period_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Retirement_Savings_DataType
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
