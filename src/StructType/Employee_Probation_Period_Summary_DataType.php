<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Probation_Period_Summary_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Probation Period data.
 * @subpackage Structs
 */
class Employee_Probation_Period_Summary_DataType extends AbstractStructBase
{
    /**
     * The Employee_Probation_Period_Detail_Data
     * Meta information extracted from the WSDL
     * - documentation: The Worker's Probation Period Data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Probation_Period_Detail_DataType[]
     */
    public $Employee_Probation_Period_Detail_Data;
    /**
     * Constructor method for Employee_Probation_Period_Summary_DataType
     * @uses Employee_Probation_Period_Summary_DataType::setEmployee_Probation_Period_Detail_Data()
     * @param \StructType\Employee_Probation_Period_Detail_DataType[] $employee_Probation_Period_Detail_Data
     */
    public function __construct(array $employee_Probation_Period_Detail_Data = array())
    {
        $this
            ->setEmployee_Probation_Period_Detail_Data($employee_Probation_Period_Detail_Data);
    }
    /**
     * Get Employee_Probation_Period_Detail_Data value
     * @return \StructType\Employee_Probation_Period_Detail_DataType[]|null
     */
    public function getEmployee_Probation_Period_Detail_Data()
    {
        return $this->Employee_Probation_Period_Detail_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployee_Probation_Period_Detail_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee_Probation_Period_Detail_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployee_Probation_Period_Detail_DataForArrayConstraintsFromSetEmployee_Probation_Period_Detail_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $employee_Probation_Period_Summary_DataTypeEmployee_Probation_Period_Detail_DataItem) {
            // validation for constraint: itemType
            if (!$employee_Probation_Period_Summary_DataTypeEmployee_Probation_Period_Detail_DataItem instanceof \StructType\Employee_Probation_Period_Detail_DataType) {
                $invalidValues[] = is_object($employee_Probation_Period_Summary_DataTypeEmployee_Probation_Period_Detail_DataItem) ? get_class($employee_Probation_Period_Summary_DataTypeEmployee_Probation_Period_Detail_DataItem) : sprintf('%s(%s)', gettype($employee_Probation_Period_Summary_DataTypeEmployee_Probation_Period_Detail_DataItem), var_export($employee_Probation_Period_Summary_DataTypeEmployee_Probation_Period_Detail_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Employee_Probation_Period_Detail_Data property can only contain items of type \StructType\Employee_Probation_Period_Detail_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Employee_Probation_Period_Detail_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Probation_Period_Detail_DataType[] $employee_Probation_Period_Detail_Data
     * @return \StructType\Employee_Probation_Period_Summary_DataType
     */
    public function setEmployee_Probation_Period_Detail_Data(array $employee_Probation_Period_Detail_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($employee_Probation_Period_Detail_DataArrayErrorMessage = self::validateEmployee_Probation_Period_Detail_DataForArrayConstraintsFromSetEmployee_Probation_Period_Detail_Data($employee_Probation_Period_Detail_Data))) {
            throw new \InvalidArgumentException($employee_Probation_Period_Detail_DataArrayErrorMessage, __LINE__);
        }
        $this->Employee_Probation_Period_Detail_Data = $employee_Probation_Period_Detail_Data;
        return $this;
    }
    /**
     * Add item to Employee_Probation_Period_Detail_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Probation_Period_Detail_DataType $item
     * @return \StructType\Employee_Probation_Period_Summary_DataType
     */
    public function addToEmployee_Probation_Period_Detail_Data(\StructType\Employee_Probation_Period_Detail_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Probation_Period_Detail_DataType) {
            throw new \InvalidArgumentException(sprintf('The Employee_Probation_Period_Detail_Data property can only contain items of type \StructType\Employee_Probation_Period_Detail_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Employee_Probation_Period_Detail_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Employee_Probation_Period_Summary_DataType
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
