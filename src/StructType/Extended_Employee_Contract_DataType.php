<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Extended_Employee_Contract_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains extended data for an employee contract.
 * @subpackage Structs
 */
class Extended_Employee_Contract_DataType extends AbstractStructBase
{
    /**
     * The Employee_Contract_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains data for a Pre-Hire Contract.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Contract_DataType[]
     */
    public $Employee_Contract_Data;
    /**
     * Constructor method for Extended_Employee_Contract_DataType
     * @uses Extended_Employee_Contract_DataType::setEmployee_Contract_Data()
     * @param \StructType\Employee_Contract_DataType[] $employee_Contract_Data
     */
    public function __construct(array $employee_Contract_Data = array())
    {
        $this
            ->setEmployee_Contract_Data($employee_Contract_Data);
    }
    /**
     * Get Employee_Contract_Data value
     * @return \StructType\Employee_Contract_DataType[]|null
     */
    public function getEmployee_Contract_Data()
    {
        return $this->Employee_Contract_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployee_Contract_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee_Contract_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployee_Contract_DataForArrayConstraintsFromSetEmployee_Contract_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $extended_Employee_Contract_DataTypeEmployee_Contract_DataItem) {
            // validation for constraint: itemType
            if (!$extended_Employee_Contract_DataTypeEmployee_Contract_DataItem instanceof \StructType\Employee_Contract_DataType) {
                $invalidValues[] = is_object($extended_Employee_Contract_DataTypeEmployee_Contract_DataItem) ? get_class($extended_Employee_Contract_DataTypeEmployee_Contract_DataItem) : sprintf('%s(%s)', gettype($extended_Employee_Contract_DataTypeEmployee_Contract_DataItem), var_export($extended_Employee_Contract_DataTypeEmployee_Contract_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Employee_Contract_Data property can only contain items of type \StructType\Employee_Contract_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Employee_Contract_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Contract_DataType[] $employee_Contract_Data
     * @return \StructType\Extended_Employee_Contract_DataType
     */
    public function setEmployee_Contract_Data(array $employee_Contract_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($employee_Contract_DataArrayErrorMessage = self::validateEmployee_Contract_DataForArrayConstraintsFromSetEmployee_Contract_Data($employee_Contract_Data))) {
            throw new \InvalidArgumentException($employee_Contract_DataArrayErrorMessage, __LINE__);
        }
        $this->Employee_Contract_Data = $employee_Contract_Data;
        return $this;
    }
    /**
     * Add item to Employee_Contract_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Contract_DataType $item
     * @return \StructType\Extended_Employee_Contract_DataType
     */
    public function addToEmployee_Contract_Data(\StructType\Employee_Contract_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Contract_DataType) {
            throw new \InvalidArgumentException(sprintf('The Employee_Contract_Data property can only contain items of type \StructType\Employee_Contract_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Employee_Contract_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Extended_Employee_Contract_DataType
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
