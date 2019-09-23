<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Compensation_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the worker's compensation information.Security Note: This element is secured to the following domains: Self Service: Compensation; Worker Data: Compensation by Organization
 * @subpackage Structs
 */
class Worker_Compensation_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date of Compensation.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Compensation_Effective_Date;
    /**
     * The Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reason for most recent Compensation event.
     * - minOccurs: 0
     * @var \StructType\Event_Classification_SubcategoryObjectType
     */
    public $Reason_Reference;
    /**
     * The Compensation_Guidelines_Data
     * Meta information extracted from the WSDL
     * - documentation: Compensation Guidelines Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Compensatable_Guidelines_DataType[]
     */
    public $Compensation_Guidelines_Data;
    /**
     * The Salary_and_Hourly_Data
     * Meta information extracted from the WSDL
     * - documentation: Salary and Hourly Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Base_Pay_Plan_Assignment_DataType[]
     */
    public $Salary_and_Hourly_Data;
    /**
     * The Unit_Salary_Plan_Data
     * Meta information extracted from the WSDL
     * - documentation: Unit Salary Plan Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Salary_Unit_Plan_Assignment_DataType[]
     */
    public $Unit_Salary_Plan_Data;
    /**
     * The Allowance_Plan_Data
     * Meta information extracted from the WSDL
     * - documentation: Allowance Plan Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Allowance_Plan_Assignment_DataType[]
     */
    public $Allowance_Plan_Data;
    /**
     * The Unit_Allowance_Plan_Data
     * Meta information extracted from the WSDL
     * - documentation: Unit Allowance Plan Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Allowance_Unit_Plan_Assignment_DataType[]
     */
    public $Unit_Allowance_Plan_Data;
    /**
     * The Bonus_Plan_Data
     * Meta information extracted from the WSDL
     * - documentation: Bonus Plan Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Bonus_Plan_Assignment_DataType[]
     */
    public $Bonus_Plan_Data;
    /**
     * The Merit_Plan_Data
     * Meta information extracted from the WSDL
     * - documentation: Merit Plan Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Merit_Plan_Assignment_DataType[]
     */
    public $Merit_Plan_Data;
    /**
     * The Commission_Plan_Data
     * Meta information extracted from the WSDL
     * - documentation: Commission Plan Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Commission_Plan_Assignment_DataType[]
     */
    public $Commission_Plan_Data;
    /**
     * The Stock_Plan_Data
     * Meta information extracted from the WSDL
     * - documentation: Stock Plan Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Stock_Plan_Assignment_DataType[]
     */
    public $Stock_Plan_Data;
    /**
     * The Future_Payment_Plan_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Future_Payment_Plan_Assignment_DataType[]
     */
    public $Future_Payment_Plan_Data;
    /**
     * The Period_Salary_Plan_Data
     * Meta information extracted from the WSDL
     * - documentation: Period Salary Plan Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Period_Salary_Plan_Assignment_DataType[]
     */
    public $Period_Salary_Plan_Data;
    /**
     * The Employee_Compensation_Summary_Data
     * Meta information extracted from the WSDL
     * - documentation: Employee Compensation Summary Data
     * - minOccurs: 0
     * @var \StructType\Compensatable_Summary_DataType
     */
    public $Employee_Compensation_Summary_Data;
    /**
     * Constructor method for Worker_Compensation_DataType
     * @uses Worker_Compensation_DataType::setCompensation_Effective_Date()
     * @uses Worker_Compensation_DataType::setReason_Reference()
     * @uses Worker_Compensation_DataType::setCompensation_Guidelines_Data()
     * @uses Worker_Compensation_DataType::setSalary_and_Hourly_Data()
     * @uses Worker_Compensation_DataType::setUnit_Salary_Plan_Data()
     * @uses Worker_Compensation_DataType::setAllowance_Plan_Data()
     * @uses Worker_Compensation_DataType::setUnit_Allowance_Plan_Data()
     * @uses Worker_Compensation_DataType::setBonus_Plan_Data()
     * @uses Worker_Compensation_DataType::setMerit_Plan_Data()
     * @uses Worker_Compensation_DataType::setCommission_Plan_Data()
     * @uses Worker_Compensation_DataType::setStock_Plan_Data()
     * @uses Worker_Compensation_DataType::setFuture_Payment_Plan_Data()
     * @uses Worker_Compensation_DataType::setPeriod_Salary_Plan_Data()
     * @uses Worker_Compensation_DataType::setEmployee_Compensation_Summary_Data()
     * @param string $compensation_Effective_Date
     * @param \StructType\Event_Classification_SubcategoryObjectType $reason_Reference
     * @param \StructType\Compensatable_Guidelines_DataType[] $compensation_Guidelines_Data
     * @param \StructType\Employee_Base_Pay_Plan_Assignment_DataType[] $salary_and_Hourly_Data
     * @param \StructType\Employee_Salary_Unit_Plan_Assignment_DataType[] $unit_Salary_Plan_Data
     * @param \StructType\Employee_Allowance_Plan_Assignment_DataType[] $allowance_Plan_Data
     * @param \StructType\Employee_Allowance_Unit_Plan_Assignment_DataType[] $unit_Allowance_Plan_Data
     * @param \StructType\Employee_Bonus_Plan_Assignment_DataType[] $bonus_Plan_Data
     * @param \StructType\Employee_Merit_Plan_Assignment_DataType[] $merit_Plan_Data
     * @param \StructType\Employee_Commission_Plan_Assignment_DataType[] $commission_Plan_Data
     * @param \StructType\Employee_Stock_Plan_Assignment_DataType[] $stock_Plan_Data
     * @param \StructType\Future_Payment_Plan_Assignment_DataType[] $future_Payment_Plan_Data
     * @param \StructType\Employee_Period_Salary_Plan_Assignment_DataType[] $period_Salary_Plan_Data
     * @param \StructType\Compensatable_Summary_DataType $employee_Compensation_Summary_Data
     */
    public function __construct($compensation_Effective_Date = null, \StructType\Event_Classification_SubcategoryObjectType $reason_Reference = null, array $compensation_Guidelines_Data = array(), array $salary_and_Hourly_Data = array(), array $unit_Salary_Plan_Data = array(), array $allowance_Plan_Data = array(), array $unit_Allowance_Plan_Data = array(), array $bonus_Plan_Data = array(), array $merit_Plan_Data = array(), array $commission_Plan_Data = array(), array $stock_Plan_Data = array(), array $future_Payment_Plan_Data = array(), array $period_Salary_Plan_Data = array(), \StructType\Compensatable_Summary_DataType $employee_Compensation_Summary_Data = null)
    {
        $this
            ->setCompensation_Effective_Date($compensation_Effective_Date)
            ->setReason_Reference($reason_Reference)
            ->setCompensation_Guidelines_Data($compensation_Guidelines_Data)
            ->setSalary_and_Hourly_Data($salary_and_Hourly_Data)
            ->setUnit_Salary_Plan_Data($unit_Salary_Plan_Data)
            ->setAllowance_Plan_Data($allowance_Plan_Data)
            ->setUnit_Allowance_Plan_Data($unit_Allowance_Plan_Data)
            ->setBonus_Plan_Data($bonus_Plan_Data)
            ->setMerit_Plan_Data($merit_Plan_Data)
            ->setCommission_Plan_Data($commission_Plan_Data)
            ->setStock_Plan_Data($stock_Plan_Data)
            ->setFuture_Payment_Plan_Data($future_Payment_Plan_Data)
            ->setPeriod_Salary_Plan_Data($period_Salary_Plan_Data)
            ->setEmployee_Compensation_Summary_Data($employee_Compensation_Summary_Data);
    }
    /**
     * Get Compensation_Effective_Date value
     * @return string|null
     */
    public function getCompensation_Effective_Date()
    {
        return $this->Compensation_Effective_Date;
    }
    /**
     * Set Compensation_Effective_Date value
     * @param string $compensation_Effective_Date
     * @return \StructType\Worker_Compensation_DataType
     */
    public function setCompensation_Effective_Date($compensation_Effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($compensation_Effective_Date) && !is_string($compensation_Effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compensation_Effective_Date, true), gettype($compensation_Effective_Date)), __LINE__);
        }
        $this->Compensation_Effective_Date = $compensation_Effective_Date;
        return $this;
    }
    /**
     * Get Reason_Reference value
     * @return \StructType\Event_Classification_SubcategoryObjectType|null
     */
    public function getReason_Reference()
    {
        return $this->Reason_Reference;
    }
    /**
     * Set Reason_Reference value
     * @param \StructType\Event_Classification_SubcategoryObjectType $reason_Reference
     * @return \StructType\Worker_Compensation_DataType
     */
    public function setReason_Reference(\StructType\Event_Classification_SubcategoryObjectType $reason_Reference = null)
    {
        $this->Reason_Reference = $reason_Reference;
        return $this;
    }
    /**
     * Get Compensation_Guidelines_Data value
     * @return \StructType\Compensatable_Guidelines_DataType[]|null
     */
    public function getCompensation_Guidelines_Data()
    {
        return $this->Compensation_Guidelines_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCompensation_Guidelines_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompensation_Guidelines_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompensation_Guidelines_DataForArrayConstraintsFromSetCompensation_Guidelines_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Compensation_DataTypeCompensation_Guidelines_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Compensation_DataTypeCompensation_Guidelines_DataItem instanceof \StructType\Compensatable_Guidelines_DataType) {
                $invalidValues[] = is_object($worker_Compensation_DataTypeCompensation_Guidelines_DataItem) ? get_class($worker_Compensation_DataTypeCompensation_Guidelines_DataItem) : sprintf('%s(%s)', gettype($worker_Compensation_DataTypeCompensation_Guidelines_DataItem), var_export($worker_Compensation_DataTypeCompensation_Guidelines_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Compensation_Guidelines_Data property can only contain items of type \StructType\Compensatable_Guidelines_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Compensation_Guidelines_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Compensatable_Guidelines_DataType[] $compensation_Guidelines_Data
     * @return \StructType\Worker_Compensation_DataType
     */
    public function setCompensation_Guidelines_Data(array $compensation_Guidelines_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($compensation_Guidelines_DataArrayErrorMessage = self::validateCompensation_Guidelines_DataForArrayConstraintsFromSetCompensation_Guidelines_Data($compensation_Guidelines_Data))) {
            throw new \InvalidArgumentException($compensation_Guidelines_DataArrayErrorMessage, __LINE__);
        }
        $this->Compensation_Guidelines_Data = $compensation_Guidelines_Data;
        return $this;
    }
    /**
     * Add item to Compensation_Guidelines_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Compensatable_Guidelines_DataType $item
     * @return \StructType\Worker_Compensation_DataType
     */
    public function addToCompensation_Guidelines_Data(\StructType\Compensatable_Guidelines_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Compensatable_Guidelines_DataType) {
            throw new \InvalidArgumentException(sprintf('The Compensation_Guidelines_Data property can only contain items of type \StructType\Compensatable_Guidelines_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Compensation_Guidelines_Data[] = $item;
        return $this;
    }
    /**
     * Get Salary_and_Hourly_Data value
     * @return \StructType\Employee_Base_Pay_Plan_Assignment_DataType[]|null
     */
    public function getSalary_and_Hourly_Data()
    {
        return $this->Salary_and_Hourly_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setSalary_and_Hourly_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSalary_and_Hourly_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSalary_and_Hourly_DataForArrayConstraintsFromSetSalary_and_Hourly_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Compensation_DataTypeSalary_and_Hourly_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Compensation_DataTypeSalary_and_Hourly_DataItem instanceof \StructType\Employee_Base_Pay_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($worker_Compensation_DataTypeSalary_and_Hourly_DataItem) ? get_class($worker_Compensation_DataTypeSalary_and_Hourly_DataItem) : sprintf('%s(%s)', gettype($worker_Compensation_DataTypeSalary_and_Hourly_DataItem), var_export($worker_Compensation_DataTypeSalary_and_Hourly_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Salary_and_Hourly_Data property can only contain items of type \StructType\Employee_Base_Pay_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Salary_and_Hourly_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Base_Pay_Plan_Assignment_DataType[] $salary_and_Hourly_Data
     * @return \StructType\Worker_Compensation_DataType
     */
    public function setSalary_and_Hourly_Data(array $salary_and_Hourly_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($salary_and_Hourly_DataArrayErrorMessage = self::validateSalary_and_Hourly_DataForArrayConstraintsFromSetSalary_and_Hourly_Data($salary_and_Hourly_Data))) {
            throw new \InvalidArgumentException($salary_and_Hourly_DataArrayErrorMessage, __LINE__);
        }
        $this->Salary_and_Hourly_Data = $salary_and_Hourly_Data;
        return $this;
    }
    /**
     * Add item to Salary_and_Hourly_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Base_Pay_Plan_Assignment_DataType $item
     * @return \StructType\Worker_Compensation_DataType
     */
    public function addToSalary_and_Hourly_Data(\StructType\Employee_Base_Pay_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Base_Pay_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Salary_and_Hourly_Data property can only contain items of type \StructType\Employee_Base_Pay_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Salary_and_Hourly_Data[] = $item;
        return $this;
    }
    /**
     * Get Unit_Salary_Plan_Data value
     * @return \StructType\Employee_Salary_Unit_Plan_Assignment_DataType[]|null
     */
    public function getUnit_Salary_Plan_Data()
    {
        return $this->Unit_Salary_Plan_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setUnit_Salary_Plan_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnit_Salary_Plan_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnit_Salary_Plan_DataForArrayConstraintsFromSetUnit_Salary_Plan_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Compensation_DataTypeUnit_Salary_Plan_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Compensation_DataTypeUnit_Salary_Plan_DataItem instanceof \StructType\Employee_Salary_Unit_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($worker_Compensation_DataTypeUnit_Salary_Plan_DataItem) ? get_class($worker_Compensation_DataTypeUnit_Salary_Plan_DataItem) : sprintf('%s(%s)', gettype($worker_Compensation_DataTypeUnit_Salary_Plan_DataItem), var_export($worker_Compensation_DataTypeUnit_Salary_Plan_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Unit_Salary_Plan_Data property can only contain items of type \StructType\Employee_Salary_Unit_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Unit_Salary_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Salary_Unit_Plan_Assignment_DataType[] $unit_Salary_Plan_Data
     * @return \StructType\Worker_Compensation_DataType
     */
    public function setUnit_Salary_Plan_Data(array $unit_Salary_Plan_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($unit_Salary_Plan_DataArrayErrorMessage = self::validateUnit_Salary_Plan_DataForArrayConstraintsFromSetUnit_Salary_Plan_Data($unit_Salary_Plan_Data))) {
            throw new \InvalidArgumentException($unit_Salary_Plan_DataArrayErrorMessage, __LINE__);
        }
        $this->Unit_Salary_Plan_Data = $unit_Salary_Plan_Data;
        return $this;
    }
    /**
     * Add item to Unit_Salary_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Salary_Unit_Plan_Assignment_DataType $item
     * @return \StructType\Worker_Compensation_DataType
     */
    public function addToUnit_Salary_Plan_Data(\StructType\Employee_Salary_Unit_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Salary_Unit_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Unit_Salary_Plan_Data property can only contain items of type \StructType\Employee_Salary_Unit_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Unit_Salary_Plan_Data[] = $item;
        return $this;
    }
    /**
     * Get Allowance_Plan_Data value
     * @return \StructType\Employee_Allowance_Plan_Assignment_DataType[]|null
     */
    public function getAllowance_Plan_Data()
    {
        return $this->Allowance_Plan_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAllowance_Plan_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAllowance_Plan_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAllowance_Plan_DataForArrayConstraintsFromSetAllowance_Plan_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Compensation_DataTypeAllowance_Plan_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Compensation_DataTypeAllowance_Plan_DataItem instanceof \StructType\Employee_Allowance_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($worker_Compensation_DataTypeAllowance_Plan_DataItem) ? get_class($worker_Compensation_DataTypeAllowance_Plan_DataItem) : sprintf('%s(%s)', gettype($worker_Compensation_DataTypeAllowance_Plan_DataItem), var_export($worker_Compensation_DataTypeAllowance_Plan_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Allowance_Plan_Data property can only contain items of type \StructType\Employee_Allowance_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Allowance_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Allowance_Plan_Assignment_DataType[] $allowance_Plan_Data
     * @return \StructType\Worker_Compensation_DataType
     */
    public function setAllowance_Plan_Data(array $allowance_Plan_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($allowance_Plan_DataArrayErrorMessage = self::validateAllowance_Plan_DataForArrayConstraintsFromSetAllowance_Plan_Data($allowance_Plan_Data))) {
            throw new \InvalidArgumentException($allowance_Plan_DataArrayErrorMessage, __LINE__);
        }
        $this->Allowance_Plan_Data = $allowance_Plan_Data;
        return $this;
    }
    /**
     * Add item to Allowance_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Allowance_Plan_Assignment_DataType $item
     * @return \StructType\Worker_Compensation_DataType
     */
    public function addToAllowance_Plan_Data(\StructType\Employee_Allowance_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Allowance_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Allowance_Plan_Data property can only contain items of type \StructType\Employee_Allowance_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Allowance_Plan_Data[] = $item;
        return $this;
    }
    /**
     * Get Unit_Allowance_Plan_Data value
     * @return \StructType\Employee_Allowance_Unit_Plan_Assignment_DataType[]|null
     */
    public function getUnit_Allowance_Plan_Data()
    {
        return $this->Unit_Allowance_Plan_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setUnit_Allowance_Plan_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnit_Allowance_Plan_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnit_Allowance_Plan_DataForArrayConstraintsFromSetUnit_Allowance_Plan_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Compensation_DataTypeUnit_Allowance_Plan_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Compensation_DataTypeUnit_Allowance_Plan_DataItem instanceof \StructType\Employee_Allowance_Unit_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($worker_Compensation_DataTypeUnit_Allowance_Plan_DataItem) ? get_class($worker_Compensation_DataTypeUnit_Allowance_Plan_DataItem) : sprintf('%s(%s)', gettype($worker_Compensation_DataTypeUnit_Allowance_Plan_DataItem), var_export($worker_Compensation_DataTypeUnit_Allowance_Plan_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Unit_Allowance_Plan_Data property can only contain items of type \StructType\Employee_Allowance_Unit_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Unit_Allowance_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Allowance_Unit_Plan_Assignment_DataType[] $unit_Allowance_Plan_Data
     * @return \StructType\Worker_Compensation_DataType
     */
    public function setUnit_Allowance_Plan_Data(array $unit_Allowance_Plan_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($unit_Allowance_Plan_DataArrayErrorMessage = self::validateUnit_Allowance_Plan_DataForArrayConstraintsFromSetUnit_Allowance_Plan_Data($unit_Allowance_Plan_Data))) {
            throw new \InvalidArgumentException($unit_Allowance_Plan_DataArrayErrorMessage, __LINE__);
        }
        $this->Unit_Allowance_Plan_Data = $unit_Allowance_Plan_Data;
        return $this;
    }
    /**
     * Add item to Unit_Allowance_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Allowance_Unit_Plan_Assignment_DataType $item
     * @return \StructType\Worker_Compensation_DataType
     */
    public function addToUnit_Allowance_Plan_Data(\StructType\Employee_Allowance_Unit_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Allowance_Unit_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Unit_Allowance_Plan_Data property can only contain items of type \StructType\Employee_Allowance_Unit_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Unit_Allowance_Plan_Data[] = $item;
        return $this;
    }
    /**
     * Get Bonus_Plan_Data value
     * @return \StructType\Employee_Bonus_Plan_Assignment_DataType[]|null
     */
    public function getBonus_Plan_Data()
    {
        return $this->Bonus_Plan_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setBonus_Plan_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBonus_Plan_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBonus_Plan_DataForArrayConstraintsFromSetBonus_Plan_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Compensation_DataTypeBonus_Plan_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Compensation_DataTypeBonus_Plan_DataItem instanceof \StructType\Employee_Bonus_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($worker_Compensation_DataTypeBonus_Plan_DataItem) ? get_class($worker_Compensation_DataTypeBonus_Plan_DataItem) : sprintf('%s(%s)', gettype($worker_Compensation_DataTypeBonus_Plan_DataItem), var_export($worker_Compensation_DataTypeBonus_Plan_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Bonus_Plan_Data property can only contain items of type \StructType\Employee_Bonus_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Bonus_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Bonus_Plan_Assignment_DataType[] $bonus_Plan_Data
     * @return \StructType\Worker_Compensation_DataType
     */
    public function setBonus_Plan_Data(array $bonus_Plan_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($bonus_Plan_DataArrayErrorMessage = self::validateBonus_Plan_DataForArrayConstraintsFromSetBonus_Plan_Data($bonus_Plan_Data))) {
            throw new \InvalidArgumentException($bonus_Plan_DataArrayErrorMessage, __LINE__);
        }
        $this->Bonus_Plan_Data = $bonus_Plan_Data;
        return $this;
    }
    /**
     * Add item to Bonus_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Bonus_Plan_Assignment_DataType $item
     * @return \StructType\Worker_Compensation_DataType
     */
    public function addToBonus_Plan_Data(\StructType\Employee_Bonus_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Bonus_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Bonus_Plan_Data property can only contain items of type \StructType\Employee_Bonus_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Bonus_Plan_Data[] = $item;
        return $this;
    }
    /**
     * Get Merit_Plan_Data value
     * @return \StructType\Employee_Merit_Plan_Assignment_DataType[]|null
     */
    public function getMerit_Plan_Data()
    {
        return $this->Merit_Plan_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setMerit_Plan_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMerit_Plan_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMerit_Plan_DataForArrayConstraintsFromSetMerit_Plan_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Compensation_DataTypeMerit_Plan_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Compensation_DataTypeMerit_Plan_DataItem instanceof \StructType\Employee_Merit_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($worker_Compensation_DataTypeMerit_Plan_DataItem) ? get_class($worker_Compensation_DataTypeMerit_Plan_DataItem) : sprintf('%s(%s)', gettype($worker_Compensation_DataTypeMerit_Plan_DataItem), var_export($worker_Compensation_DataTypeMerit_Plan_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Merit_Plan_Data property can only contain items of type \StructType\Employee_Merit_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Merit_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Merit_Plan_Assignment_DataType[] $merit_Plan_Data
     * @return \StructType\Worker_Compensation_DataType
     */
    public function setMerit_Plan_Data(array $merit_Plan_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($merit_Plan_DataArrayErrorMessage = self::validateMerit_Plan_DataForArrayConstraintsFromSetMerit_Plan_Data($merit_Plan_Data))) {
            throw new \InvalidArgumentException($merit_Plan_DataArrayErrorMessage, __LINE__);
        }
        $this->Merit_Plan_Data = $merit_Plan_Data;
        return $this;
    }
    /**
     * Add item to Merit_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Merit_Plan_Assignment_DataType $item
     * @return \StructType\Worker_Compensation_DataType
     */
    public function addToMerit_Plan_Data(\StructType\Employee_Merit_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Merit_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Merit_Plan_Data property can only contain items of type \StructType\Employee_Merit_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Merit_Plan_Data[] = $item;
        return $this;
    }
    /**
     * Get Commission_Plan_Data value
     * @return \StructType\Employee_Commission_Plan_Assignment_DataType[]|null
     */
    public function getCommission_Plan_Data()
    {
        return $this->Commission_Plan_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCommission_Plan_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommission_Plan_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommission_Plan_DataForArrayConstraintsFromSetCommission_Plan_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Compensation_DataTypeCommission_Plan_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Compensation_DataTypeCommission_Plan_DataItem instanceof \StructType\Employee_Commission_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($worker_Compensation_DataTypeCommission_Plan_DataItem) ? get_class($worker_Compensation_DataTypeCommission_Plan_DataItem) : sprintf('%s(%s)', gettype($worker_Compensation_DataTypeCommission_Plan_DataItem), var_export($worker_Compensation_DataTypeCommission_Plan_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Commission_Plan_Data property can only contain items of type \StructType\Employee_Commission_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Commission_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Commission_Plan_Assignment_DataType[] $commission_Plan_Data
     * @return \StructType\Worker_Compensation_DataType
     */
    public function setCommission_Plan_Data(array $commission_Plan_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($commission_Plan_DataArrayErrorMessage = self::validateCommission_Plan_DataForArrayConstraintsFromSetCommission_Plan_Data($commission_Plan_Data))) {
            throw new \InvalidArgumentException($commission_Plan_DataArrayErrorMessage, __LINE__);
        }
        $this->Commission_Plan_Data = $commission_Plan_Data;
        return $this;
    }
    /**
     * Add item to Commission_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Commission_Plan_Assignment_DataType $item
     * @return \StructType\Worker_Compensation_DataType
     */
    public function addToCommission_Plan_Data(\StructType\Employee_Commission_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Commission_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Commission_Plan_Data property can only contain items of type \StructType\Employee_Commission_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Commission_Plan_Data[] = $item;
        return $this;
    }
    /**
     * Get Stock_Plan_Data value
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType[]|null
     */
    public function getStock_Plan_Data()
    {
        return $this->Stock_Plan_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setStock_Plan_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStock_Plan_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStock_Plan_DataForArrayConstraintsFromSetStock_Plan_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Compensation_DataTypeStock_Plan_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Compensation_DataTypeStock_Plan_DataItem instanceof \StructType\Employee_Stock_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($worker_Compensation_DataTypeStock_Plan_DataItem) ? get_class($worker_Compensation_DataTypeStock_Plan_DataItem) : sprintf('%s(%s)', gettype($worker_Compensation_DataTypeStock_Plan_DataItem), var_export($worker_Compensation_DataTypeStock_Plan_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Stock_Plan_Data property can only contain items of type \StructType\Employee_Stock_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Stock_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Stock_Plan_Assignment_DataType[] $stock_Plan_Data
     * @return \StructType\Worker_Compensation_DataType
     */
    public function setStock_Plan_Data(array $stock_Plan_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($stock_Plan_DataArrayErrorMessage = self::validateStock_Plan_DataForArrayConstraintsFromSetStock_Plan_Data($stock_Plan_Data))) {
            throw new \InvalidArgumentException($stock_Plan_DataArrayErrorMessage, __LINE__);
        }
        $this->Stock_Plan_Data = $stock_Plan_Data;
        return $this;
    }
    /**
     * Add item to Stock_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Stock_Plan_Assignment_DataType $item
     * @return \StructType\Worker_Compensation_DataType
     */
    public function addToStock_Plan_Data(\StructType\Employee_Stock_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Stock_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Stock_Plan_Data property can only contain items of type \StructType\Employee_Stock_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Stock_Plan_Data[] = $item;
        return $this;
    }
    /**
     * Get Future_Payment_Plan_Data value
     * @return \StructType\Future_Payment_Plan_Assignment_DataType[]|null
     */
    public function getFuture_Payment_Plan_Data()
    {
        return $this->Future_Payment_Plan_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setFuture_Payment_Plan_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFuture_Payment_Plan_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFuture_Payment_Plan_DataForArrayConstraintsFromSetFuture_Payment_Plan_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Compensation_DataTypeFuture_Payment_Plan_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Compensation_DataTypeFuture_Payment_Plan_DataItem instanceof \StructType\Future_Payment_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($worker_Compensation_DataTypeFuture_Payment_Plan_DataItem) ? get_class($worker_Compensation_DataTypeFuture_Payment_Plan_DataItem) : sprintf('%s(%s)', gettype($worker_Compensation_DataTypeFuture_Payment_Plan_DataItem), var_export($worker_Compensation_DataTypeFuture_Payment_Plan_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Future_Payment_Plan_Data property can only contain items of type \StructType\Future_Payment_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Future_Payment_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Future_Payment_Plan_Assignment_DataType[] $future_Payment_Plan_Data
     * @return \StructType\Worker_Compensation_DataType
     */
    public function setFuture_Payment_Plan_Data(array $future_Payment_Plan_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($future_Payment_Plan_DataArrayErrorMessage = self::validateFuture_Payment_Plan_DataForArrayConstraintsFromSetFuture_Payment_Plan_Data($future_Payment_Plan_Data))) {
            throw new \InvalidArgumentException($future_Payment_Plan_DataArrayErrorMessage, __LINE__);
        }
        $this->Future_Payment_Plan_Data = $future_Payment_Plan_Data;
        return $this;
    }
    /**
     * Add item to Future_Payment_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Future_Payment_Plan_Assignment_DataType $item
     * @return \StructType\Worker_Compensation_DataType
     */
    public function addToFuture_Payment_Plan_Data(\StructType\Future_Payment_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Future_Payment_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Future_Payment_Plan_Data property can only contain items of type \StructType\Future_Payment_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Future_Payment_Plan_Data[] = $item;
        return $this;
    }
    /**
     * Get Period_Salary_Plan_Data value
     * @return \StructType\Employee_Period_Salary_Plan_Assignment_DataType[]|null
     */
    public function getPeriod_Salary_Plan_Data()
    {
        return $this->Period_Salary_Plan_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPeriod_Salary_Plan_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeriod_Salary_Plan_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePeriod_Salary_Plan_DataForArrayConstraintsFromSetPeriod_Salary_Plan_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Compensation_DataTypePeriod_Salary_Plan_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Compensation_DataTypePeriod_Salary_Plan_DataItem instanceof \StructType\Employee_Period_Salary_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($worker_Compensation_DataTypePeriod_Salary_Plan_DataItem) ? get_class($worker_Compensation_DataTypePeriod_Salary_Plan_DataItem) : sprintf('%s(%s)', gettype($worker_Compensation_DataTypePeriod_Salary_Plan_DataItem), var_export($worker_Compensation_DataTypePeriod_Salary_Plan_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Period_Salary_Plan_Data property can only contain items of type \StructType\Employee_Period_Salary_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Period_Salary_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Period_Salary_Plan_Assignment_DataType[] $period_Salary_Plan_Data
     * @return \StructType\Worker_Compensation_DataType
     */
    public function setPeriod_Salary_Plan_Data(array $period_Salary_Plan_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($period_Salary_Plan_DataArrayErrorMessage = self::validatePeriod_Salary_Plan_DataForArrayConstraintsFromSetPeriod_Salary_Plan_Data($period_Salary_Plan_Data))) {
            throw new \InvalidArgumentException($period_Salary_Plan_DataArrayErrorMessage, __LINE__);
        }
        $this->Period_Salary_Plan_Data = $period_Salary_Plan_Data;
        return $this;
    }
    /**
     * Add item to Period_Salary_Plan_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Period_Salary_Plan_Assignment_DataType $item
     * @return \StructType\Worker_Compensation_DataType
     */
    public function addToPeriod_Salary_Plan_Data(\StructType\Employee_Period_Salary_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Period_Salary_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Period_Salary_Plan_Data property can only contain items of type \StructType\Employee_Period_Salary_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Period_Salary_Plan_Data[] = $item;
        return $this;
    }
    /**
     * Get Employee_Compensation_Summary_Data value
     * @return \StructType\Compensatable_Summary_DataType|null
     */
    public function getEmployee_Compensation_Summary_Data()
    {
        return $this->Employee_Compensation_Summary_Data;
    }
    /**
     * Set Employee_Compensation_Summary_Data value
     * @param \StructType\Compensatable_Summary_DataType $employee_Compensation_Summary_Data
     * @return \StructType\Worker_Compensation_DataType
     */
    public function setEmployee_Compensation_Summary_Data(\StructType\Compensatable_Summary_DataType $employee_Compensation_Summary_Data = null)
    {
        $this->Employee_Compensation_Summary_Data = $employee_Compensation_Summary_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Compensation_DataType
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
