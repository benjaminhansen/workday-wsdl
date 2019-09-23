<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Spending_Account_Period_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the spending account period data for an employee based on the benefit plan year.
 * @subpackage Structs
 */
class Worker_Spending_Account_Period_DataType extends AbstractStructBase
{
    /**
     * The Enrollment_Period_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Enrollment_Period_DataType
     */
    public $Enrollment_Period_Data;
    /**
     * The Spending_Account_Coverage_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the spending account coverage information (elections) for an employee.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Spending_Account_Coverage_DataType[]
     */
    public $Spending_Account_Coverage_Data;
    /**
     * Constructor method for Worker_Spending_Account_Period_DataType
     * @uses Worker_Spending_Account_Period_DataType::setEnrollment_Period_Data()
     * @uses Worker_Spending_Account_Period_DataType::setSpending_Account_Coverage_Data()
     * @param \WorkdayWsdl\\StructType\Enrollment_Period_DataType $enrollment_Period_Data
     * @param \WorkdayWsdl\\StructType\Spending_Account_Coverage_DataType[] $spending_Account_Coverage_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Enrollment_Period_DataType $enrollment_Period_Data = null, array $spending_Account_Coverage_Data = array())
    {
        $this
            ->setEnrollment_Period_Data($enrollment_Period_Data)
            ->setSpending_Account_Coverage_Data($spending_Account_Coverage_Data);
    }
    /**
     * Get Enrollment_Period_Data value
     * @return \WorkdayWsdl\\StructType\Enrollment_Period_DataType|null
     */
    public function getEnrollment_Period_Data()
    {
        return $this->Enrollment_Period_Data;
    }
    /**
     * Set Enrollment_Period_Data value
     * @param \WorkdayWsdl\\StructType\Enrollment_Period_DataType $enrollment_Period_Data
     * @return \WorkdayWsdl\\StructType\Worker_Spending_Account_Period_DataType
     */
    public function setEnrollment_Period_Data(\WorkdayWsdl\\StructType\Enrollment_Period_DataType $enrollment_Period_Data = null)
    {
        $this->Enrollment_Period_Data = $enrollment_Period_Data;
        return $this;
    }
    /**
     * Get Spending_Account_Coverage_Data value
     * @return \WorkdayWsdl\\StructType\Spending_Account_Coverage_DataType[]|null
     */
    public function getSpending_Account_Coverage_Data()
    {
        return $this->Spending_Account_Coverage_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setSpending_Account_Coverage_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpending_Account_Coverage_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSpending_Account_Coverage_DataForArrayConstraintsFromSetSpending_Account_Coverage_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Spending_Account_Period_DataTypeSpending_Account_Coverage_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Spending_Account_Period_DataTypeSpending_Account_Coverage_DataItem instanceof \WorkdayWsdl\\StructType\Spending_Account_Coverage_DataType) {
                $invalidValues[] = is_object($worker_Spending_Account_Period_DataTypeSpending_Account_Coverage_DataItem) ? get_class($worker_Spending_Account_Period_DataTypeSpending_Account_Coverage_DataItem) : sprintf('%s(%s)', gettype($worker_Spending_Account_Period_DataTypeSpending_Account_Coverage_DataItem), var_export($worker_Spending_Account_Period_DataTypeSpending_Account_Coverage_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Spending_Account_Coverage_Data property can only contain items of type \WorkdayWsdl\\StructType\Spending_Account_Coverage_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Spending_Account_Coverage_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Spending_Account_Coverage_DataType[] $spending_Account_Coverage_Data
     * @return \WorkdayWsdl\\StructType\Worker_Spending_Account_Period_DataType
     */
    public function setSpending_Account_Coverage_Data(array $spending_Account_Coverage_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($spending_Account_Coverage_DataArrayErrorMessage = self::validateSpending_Account_Coverage_DataForArrayConstraintsFromSetSpending_Account_Coverage_Data($spending_Account_Coverage_Data))) {
            throw new \InvalidArgumentException($spending_Account_Coverage_DataArrayErrorMessage, __LINE__);
        }
        $this->Spending_Account_Coverage_Data = $spending_Account_Coverage_Data;
        return $this;
    }
    /**
     * Add item to Spending_Account_Coverage_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Spending_Account_Coverage_DataType $item
     * @return \WorkdayWsdl\\StructType\Worker_Spending_Account_Period_DataType
     */
    public function addToSpending_Account_Coverage_Data(\WorkdayWsdl\\StructType\Spending_Account_Coverage_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Spending_Account_Coverage_DataType) {
            throw new \InvalidArgumentException(sprintf('The Spending_Account_Coverage_Data property can only contain items of type \WorkdayWsdl\\StructType\Spending_Account_Coverage_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Spending_Account_Coverage_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Spending_Account_Period_DataType
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
