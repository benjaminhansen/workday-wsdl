<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compensation_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Compesation Detail data.
 * @subpackage Structs
 */
class Compensation_Detail_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Package_Reference
     * @var \StructType\Compensation_Package_ReferenceType
     */
    public $Compensation_Package_Reference;
    /**
     * The Compensation_Grade_Reference
     * @var \StructType\Compensation_Grade_ReferenceType
     */
    public $Compensation_Grade_Reference;
    /**
     * The Compensation_Grade_Profile_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Compensation_Grade_Profile_ReferenceType
     */
    public $Compensation_Grade_Profile_Reference;
    /**
     * The Compensation_Step_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Compensation_Step_Reference_DataType
     */
    public $Compensation_Step_Reference;
    /**
     * The Salary_Plan_for_Compensation_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Compensation_Salary_Plan_Assignment_DataType[]
     */
    public $Salary_Plan_for_Compensation_Data;
    /**
     * The Hourly_Plan_for_Compensation_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Compensation_Hourly_Plan_Assignment_DataType[]
     */
    public $Hourly_Plan_for_Compensation_Data;
    /**
     * The Unit_Salary_Plan_for_Compensation_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_DataType[]
     */
    public $Unit_Salary_Plan_for_Compensation_Data;
    /**
     * The Allowance_Plan_for_Compensation_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Compensation_Allowance_Plan_Assignment_DataType[]
     */
    public $Allowance_Plan_for_Compensation_Data;
    /**
     * The Unit_Allowance_Plan_for_Compensation_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Compensation_Allowance_Unit_Plan_Assignment_DataType[]
     */
    public $Unit_Allowance_Plan_for_Compensation_Data;
    /**
     * The Bonus_Plan_for_Compensation_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Compensation_Bonus_Plan_Assignment_DataType[]
     */
    public $Bonus_Plan_for_Compensation_Data;
    /**
     * The Merit_Plan_for_Compensation_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Compensation_Merit_Plan_Assignment_DataType[]
     */
    public $Merit_Plan_for_Compensation_Data;
    /**
     * The Commission_Plan_for_Compensation_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Compensation_Commission_Plan_Assignment_DataType[]
     */
    public $Commission_Plan_for_Compensation_Data;
    /**
     * The Period_Salary_Plan_for_Compensation_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_DataType[]
     */
    public $Period_Salary_Plan_for_Compensation_Data;
    /**
     * Constructor method for Compensation_Detail_DataType
     * @uses Compensation_Detail_DataType::setCompensation_Package_Reference()
     * @uses Compensation_Detail_DataType::setCompensation_Grade_Reference()
     * @uses Compensation_Detail_DataType::setCompensation_Grade_Profile_Reference()
     * @uses Compensation_Detail_DataType::setCompensation_Step_Reference()
     * @uses Compensation_Detail_DataType::setSalary_Plan_for_Compensation_Data()
     * @uses Compensation_Detail_DataType::setHourly_Plan_for_Compensation_Data()
     * @uses Compensation_Detail_DataType::setUnit_Salary_Plan_for_Compensation_Data()
     * @uses Compensation_Detail_DataType::setAllowance_Plan_for_Compensation_Data()
     * @uses Compensation_Detail_DataType::setUnit_Allowance_Plan_for_Compensation_Data()
     * @uses Compensation_Detail_DataType::setBonus_Plan_for_Compensation_Data()
     * @uses Compensation_Detail_DataType::setMerit_Plan_for_Compensation_Data()
     * @uses Compensation_Detail_DataType::setCommission_Plan_for_Compensation_Data()
     * @uses Compensation_Detail_DataType::setPeriod_Salary_Plan_for_Compensation_Data()
     * @param \StructType\Compensation_Package_ReferenceType $compensation_Package_Reference
     * @param \StructType\Compensation_Grade_ReferenceType $compensation_Grade_Reference
     * @param \StructType\Compensation_Grade_Profile_ReferenceType $compensation_Grade_Profile_Reference
     * @param \StructType\Compensation_Step_Reference_DataType $compensation_Step_Reference
     * @param \StructType\Employee_Compensation_Salary_Plan_Assignment_DataType[] $salary_Plan_for_Compensation_Data
     * @param \StructType\Employee_Compensation_Hourly_Plan_Assignment_DataType[] $hourly_Plan_for_Compensation_Data
     * @param \StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_DataType[] $unit_Salary_Plan_for_Compensation_Data
     * @param \StructType\Employee_Compensation_Allowance_Plan_Assignment_DataType[] $allowance_Plan_for_Compensation_Data
     * @param \StructType\Employee_Compensation_Allowance_Unit_Plan_Assignment_DataType[] $unit_Allowance_Plan_for_Compensation_Data
     * @param \StructType\Employee_Compensation_Bonus_Plan_Assignment_DataType[] $bonus_Plan_for_Compensation_Data
     * @param \StructType\Employee_Compensation_Merit_Plan_Assignment_DataType[] $merit_Plan_for_Compensation_Data
     * @param \StructType\Employee_Compensation_Commission_Plan_Assignment_DataType[] $commission_Plan_for_Compensation_Data
     * @param \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_DataType[] $period_Salary_Plan_for_Compensation_Data
     */
    public function __construct(\StructType\Compensation_Package_ReferenceType $compensation_Package_Reference = null, \StructType\Compensation_Grade_ReferenceType $compensation_Grade_Reference = null, \StructType\Compensation_Grade_Profile_ReferenceType $compensation_Grade_Profile_Reference = null, \StructType\Compensation_Step_Reference_DataType $compensation_Step_Reference = null, array $salary_Plan_for_Compensation_Data = array(), array $hourly_Plan_for_Compensation_Data = array(), array $unit_Salary_Plan_for_Compensation_Data = array(), array $allowance_Plan_for_Compensation_Data = array(), array $unit_Allowance_Plan_for_Compensation_Data = array(), array $bonus_Plan_for_Compensation_Data = array(), array $merit_Plan_for_Compensation_Data = array(), array $commission_Plan_for_Compensation_Data = array(), array $period_Salary_Plan_for_Compensation_Data = array())
    {
        $this
            ->setCompensation_Package_Reference($compensation_Package_Reference)
            ->setCompensation_Grade_Reference($compensation_Grade_Reference)
            ->setCompensation_Grade_Profile_Reference($compensation_Grade_Profile_Reference)
            ->setCompensation_Step_Reference($compensation_Step_Reference)
            ->setSalary_Plan_for_Compensation_Data($salary_Plan_for_Compensation_Data)
            ->setHourly_Plan_for_Compensation_Data($hourly_Plan_for_Compensation_Data)
            ->setUnit_Salary_Plan_for_Compensation_Data($unit_Salary_Plan_for_Compensation_Data)
            ->setAllowance_Plan_for_Compensation_Data($allowance_Plan_for_Compensation_Data)
            ->setUnit_Allowance_Plan_for_Compensation_Data($unit_Allowance_Plan_for_Compensation_Data)
            ->setBonus_Plan_for_Compensation_Data($bonus_Plan_for_Compensation_Data)
            ->setMerit_Plan_for_Compensation_Data($merit_Plan_for_Compensation_Data)
            ->setCommission_Plan_for_Compensation_Data($commission_Plan_for_Compensation_Data)
            ->setPeriod_Salary_Plan_for_Compensation_Data($period_Salary_Plan_for_Compensation_Data);
    }
    /**
     * Get Compensation_Package_Reference value
     * @return \StructType\Compensation_Package_ReferenceType|null
     */
    public function getCompensation_Package_Reference()
    {
        return $this->Compensation_Package_Reference;
    }
    /**
     * Set Compensation_Package_Reference value
     * @param \StructType\Compensation_Package_ReferenceType $compensation_Package_Reference
     * @return \StructType\Compensation_Detail_DataType
     */
    public function setCompensation_Package_Reference(\StructType\Compensation_Package_ReferenceType $compensation_Package_Reference = null)
    {
        $this->Compensation_Package_Reference = $compensation_Package_Reference;
        return $this;
    }
    /**
     * Get Compensation_Grade_Reference value
     * @return \StructType\Compensation_Grade_ReferenceType|null
     */
    public function getCompensation_Grade_Reference()
    {
        return $this->Compensation_Grade_Reference;
    }
    /**
     * Set Compensation_Grade_Reference value
     * @param \StructType\Compensation_Grade_ReferenceType $compensation_Grade_Reference
     * @return \StructType\Compensation_Detail_DataType
     */
    public function setCompensation_Grade_Reference(\StructType\Compensation_Grade_ReferenceType $compensation_Grade_Reference = null)
    {
        $this->Compensation_Grade_Reference = $compensation_Grade_Reference;
        return $this;
    }
    /**
     * Get Compensation_Grade_Profile_Reference value
     * @return \StructType\Compensation_Grade_Profile_ReferenceType|null
     */
    public function getCompensation_Grade_Profile_Reference()
    {
        return $this->Compensation_Grade_Profile_Reference;
    }
    /**
     * Set Compensation_Grade_Profile_Reference value
     * @param \StructType\Compensation_Grade_Profile_ReferenceType $compensation_Grade_Profile_Reference
     * @return \StructType\Compensation_Detail_DataType
     */
    public function setCompensation_Grade_Profile_Reference(\StructType\Compensation_Grade_Profile_ReferenceType $compensation_Grade_Profile_Reference = null)
    {
        $this->Compensation_Grade_Profile_Reference = $compensation_Grade_Profile_Reference;
        return $this;
    }
    /**
     * Get Compensation_Step_Reference value
     * @return \StructType\Compensation_Step_Reference_DataType|null
     */
    public function getCompensation_Step_Reference()
    {
        return $this->Compensation_Step_Reference;
    }
    /**
     * Set Compensation_Step_Reference value
     * @param \StructType\Compensation_Step_Reference_DataType $compensation_Step_Reference
     * @return \StructType\Compensation_Detail_DataType
     */
    public function setCompensation_Step_Reference(\StructType\Compensation_Step_Reference_DataType $compensation_Step_Reference = null)
    {
        $this->Compensation_Step_Reference = $compensation_Step_Reference;
        return $this;
    }
    /**
     * Get Salary_Plan_for_Compensation_Data value
     * @return \StructType\Employee_Compensation_Salary_Plan_Assignment_DataType[]|null
     */
    public function getSalary_Plan_for_Compensation_Data()
    {
        return $this->Salary_Plan_for_Compensation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setSalary_Plan_for_Compensation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSalary_Plan_for_Compensation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSalary_Plan_for_Compensation_DataForArrayConstraintsFromSetSalary_Plan_for_Compensation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $compensation_Detail_DataTypeSalary_Plan_for_Compensation_DataItem) {
            // validation for constraint: itemType
            if (!$compensation_Detail_DataTypeSalary_Plan_for_Compensation_DataItem instanceof \StructType\Employee_Compensation_Salary_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($compensation_Detail_DataTypeSalary_Plan_for_Compensation_DataItem) ? get_class($compensation_Detail_DataTypeSalary_Plan_for_Compensation_DataItem) : sprintf('%s(%s)', gettype($compensation_Detail_DataTypeSalary_Plan_for_Compensation_DataItem), var_export($compensation_Detail_DataTypeSalary_Plan_for_Compensation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Salary_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Salary_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Salary_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Salary_Plan_Assignment_DataType[] $salary_Plan_for_Compensation_Data
     * @return \StructType\Compensation_Detail_DataType
     */
    public function setSalary_Plan_for_Compensation_Data(array $salary_Plan_for_Compensation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($salary_Plan_for_Compensation_DataArrayErrorMessage = self::validateSalary_Plan_for_Compensation_DataForArrayConstraintsFromSetSalary_Plan_for_Compensation_Data($salary_Plan_for_Compensation_Data))) {
            throw new \InvalidArgumentException($salary_Plan_for_Compensation_DataArrayErrorMessage, __LINE__);
        }
        $this->Salary_Plan_for_Compensation_Data = $salary_Plan_for_Compensation_Data;
        return $this;
    }
    /**
     * Add item to Salary_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Salary_Plan_Assignment_DataType $item
     * @return \StructType\Compensation_Detail_DataType
     */
    public function addToSalary_Plan_for_Compensation_Data(\StructType\Employee_Compensation_Salary_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Compensation_Salary_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Salary_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Salary_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Salary_Plan_for_Compensation_Data[] = $item;
        return $this;
    }
    /**
     * Get Hourly_Plan_for_Compensation_Data value
     * @return \StructType\Employee_Compensation_Hourly_Plan_Assignment_DataType[]|null
     */
    public function getHourly_Plan_for_Compensation_Data()
    {
        return $this->Hourly_Plan_for_Compensation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setHourly_Plan_for_Compensation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHourly_Plan_for_Compensation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHourly_Plan_for_Compensation_DataForArrayConstraintsFromSetHourly_Plan_for_Compensation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $compensation_Detail_DataTypeHourly_Plan_for_Compensation_DataItem) {
            // validation for constraint: itemType
            if (!$compensation_Detail_DataTypeHourly_Plan_for_Compensation_DataItem instanceof \StructType\Employee_Compensation_Hourly_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($compensation_Detail_DataTypeHourly_Plan_for_Compensation_DataItem) ? get_class($compensation_Detail_DataTypeHourly_Plan_for_Compensation_DataItem) : sprintf('%s(%s)', gettype($compensation_Detail_DataTypeHourly_Plan_for_Compensation_DataItem), var_export($compensation_Detail_DataTypeHourly_Plan_for_Compensation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Hourly_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Hourly_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Hourly_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Hourly_Plan_Assignment_DataType[] $hourly_Plan_for_Compensation_Data
     * @return \StructType\Compensation_Detail_DataType
     */
    public function setHourly_Plan_for_Compensation_Data(array $hourly_Plan_for_Compensation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($hourly_Plan_for_Compensation_DataArrayErrorMessage = self::validateHourly_Plan_for_Compensation_DataForArrayConstraintsFromSetHourly_Plan_for_Compensation_Data($hourly_Plan_for_Compensation_Data))) {
            throw new \InvalidArgumentException($hourly_Plan_for_Compensation_DataArrayErrorMessage, __LINE__);
        }
        $this->Hourly_Plan_for_Compensation_Data = $hourly_Plan_for_Compensation_Data;
        return $this;
    }
    /**
     * Add item to Hourly_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Hourly_Plan_Assignment_DataType $item
     * @return \StructType\Compensation_Detail_DataType
     */
    public function addToHourly_Plan_for_Compensation_Data(\StructType\Employee_Compensation_Hourly_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Compensation_Hourly_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Hourly_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Hourly_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Hourly_Plan_for_Compensation_Data[] = $item;
        return $this;
    }
    /**
     * Get Unit_Salary_Plan_for_Compensation_Data value
     * @return \StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_DataType[]|null
     */
    public function getUnit_Salary_Plan_for_Compensation_Data()
    {
        return $this->Unit_Salary_Plan_for_Compensation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setUnit_Salary_Plan_for_Compensation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnit_Salary_Plan_for_Compensation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnit_Salary_Plan_for_Compensation_DataForArrayConstraintsFromSetUnit_Salary_Plan_for_Compensation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $compensation_Detail_DataTypeUnit_Salary_Plan_for_Compensation_DataItem) {
            // validation for constraint: itemType
            if (!$compensation_Detail_DataTypeUnit_Salary_Plan_for_Compensation_DataItem instanceof \StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($compensation_Detail_DataTypeUnit_Salary_Plan_for_Compensation_DataItem) ? get_class($compensation_Detail_DataTypeUnit_Salary_Plan_for_Compensation_DataItem) : sprintf('%s(%s)', gettype($compensation_Detail_DataTypeUnit_Salary_Plan_for_Compensation_DataItem), var_export($compensation_Detail_DataTypeUnit_Salary_Plan_for_Compensation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Unit_Salary_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Unit_Salary_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_DataType[] $unit_Salary_Plan_for_Compensation_Data
     * @return \StructType\Compensation_Detail_DataType
     */
    public function setUnit_Salary_Plan_for_Compensation_Data(array $unit_Salary_Plan_for_Compensation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($unit_Salary_Plan_for_Compensation_DataArrayErrorMessage = self::validateUnit_Salary_Plan_for_Compensation_DataForArrayConstraintsFromSetUnit_Salary_Plan_for_Compensation_Data($unit_Salary_Plan_for_Compensation_Data))) {
            throw new \InvalidArgumentException($unit_Salary_Plan_for_Compensation_DataArrayErrorMessage, __LINE__);
        }
        $this->Unit_Salary_Plan_for_Compensation_Data = $unit_Salary_Plan_for_Compensation_Data;
        return $this;
    }
    /**
     * Add item to Unit_Salary_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_DataType $item
     * @return \StructType\Compensation_Detail_DataType
     */
    public function addToUnit_Salary_Plan_for_Compensation_Data(\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Unit_Salary_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Unit_Salary_Plan_for_Compensation_Data[] = $item;
        return $this;
    }
    /**
     * Get Allowance_Plan_for_Compensation_Data value
     * @return \StructType\Employee_Compensation_Allowance_Plan_Assignment_DataType[]|null
     */
    public function getAllowance_Plan_for_Compensation_Data()
    {
        return $this->Allowance_Plan_for_Compensation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAllowance_Plan_for_Compensation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAllowance_Plan_for_Compensation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAllowance_Plan_for_Compensation_DataForArrayConstraintsFromSetAllowance_Plan_for_Compensation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $compensation_Detail_DataTypeAllowance_Plan_for_Compensation_DataItem) {
            // validation for constraint: itemType
            if (!$compensation_Detail_DataTypeAllowance_Plan_for_Compensation_DataItem instanceof \StructType\Employee_Compensation_Allowance_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($compensation_Detail_DataTypeAllowance_Plan_for_Compensation_DataItem) ? get_class($compensation_Detail_DataTypeAllowance_Plan_for_Compensation_DataItem) : sprintf('%s(%s)', gettype($compensation_Detail_DataTypeAllowance_Plan_for_Compensation_DataItem), var_export($compensation_Detail_DataTypeAllowance_Plan_for_Compensation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Allowance_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Allowance_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Allowance_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Allowance_Plan_Assignment_DataType[] $allowance_Plan_for_Compensation_Data
     * @return \StructType\Compensation_Detail_DataType
     */
    public function setAllowance_Plan_for_Compensation_Data(array $allowance_Plan_for_Compensation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($allowance_Plan_for_Compensation_DataArrayErrorMessage = self::validateAllowance_Plan_for_Compensation_DataForArrayConstraintsFromSetAllowance_Plan_for_Compensation_Data($allowance_Plan_for_Compensation_Data))) {
            throw new \InvalidArgumentException($allowance_Plan_for_Compensation_DataArrayErrorMessage, __LINE__);
        }
        $this->Allowance_Plan_for_Compensation_Data = $allowance_Plan_for_Compensation_Data;
        return $this;
    }
    /**
     * Add item to Allowance_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Allowance_Plan_Assignment_DataType $item
     * @return \StructType\Compensation_Detail_DataType
     */
    public function addToAllowance_Plan_for_Compensation_Data(\StructType\Employee_Compensation_Allowance_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Compensation_Allowance_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Allowance_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Allowance_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Allowance_Plan_for_Compensation_Data[] = $item;
        return $this;
    }
    /**
     * Get Unit_Allowance_Plan_for_Compensation_Data value
     * @return \StructType\Employee_Compensation_Allowance_Unit_Plan_Assignment_DataType[]|null
     */
    public function getUnit_Allowance_Plan_for_Compensation_Data()
    {
        return $this->Unit_Allowance_Plan_for_Compensation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setUnit_Allowance_Plan_for_Compensation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnit_Allowance_Plan_for_Compensation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnit_Allowance_Plan_for_Compensation_DataForArrayConstraintsFromSetUnit_Allowance_Plan_for_Compensation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $compensation_Detail_DataTypeUnit_Allowance_Plan_for_Compensation_DataItem) {
            // validation for constraint: itemType
            if (!$compensation_Detail_DataTypeUnit_Allowance_Plan_for_Compensation_DataItem instanceof \StructType\Employee_Compensation_Allowance_Unit_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($compensation_Detail_DataTypeUnit_Allowance_Plan_for_Compensation_DataItem) ? get_class($compensation_Detail_DataTypeUnit_Allowance_Plan_for_Compensation_DataItem) : sprintf('%s(%s)', gettype($compensation_Detail_DataTypeUnit_Allowance_Plan_for_Compensation_DataItem), var_export($compensation_Detail_DataTypeUnit_Allowance_Plan_for_Compensation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Unit_Allowance_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Allowance_Unit_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Unit_Allowance_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Allowance_Unit_Plan_Assignment_DataType[] $unit_Allowance_Plan_for_Compensation_Data
     * @return \StructType\Compensation_Detail_DataType
     */
    public function setUnit_Allowance_Plan_for_Compensation_Data(array $unit_Allowance_Plan_for_Compensation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($unit_Allowance_Plan_for_Compensation_DataArrayErrorMessage = self::validateUnit_Allowance_Plan_for_Compensation_DataForArrayConstraintsFromSetUnit_Allowance_Plan_for_Compensation_Data($unit_Allowance_Plan_for_Compensation_Data))) {
            throw new \InvalidArgumentException($unit_Allowance_Plan_for_Compensation_DataArrayErrorMessage, __LINE__);
        }
        $this->Unit_Allowance_Plan_for_Compensation_Data = $unit_Allowance_Plan_for_Compensation_Data;
        return $this;
    }
    /**
     * Add item to Unit_Allowance_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Allowance_Unit_Plan_Assignment_DataType $item
     * @return \StructType\Compensation_Detail_DataType
     */
    public function addToUnit_Allowance_Plan_for_Compensation_Data(\StructType\Employee_Compensation_Allowance_Unit_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Compensation_Allowance_Unit_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Unit_Allowance_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Allowance_Unit_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Unit_Allowance_Plan_for_Compensation_Data[] = $item;
        return $this;
    }
    /**
     * Get Bonus_Plan_for_Compensation_Data value
     * @return \StructType\Employee_Compensation_Bonus_Plan_Assignment_DataType[]|null
     */
    public function getBonus_Plan_for_Compensation_Data()
    {
        return $this->Bonus_Plan_for_Compensation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setBonus_Plan_for_Compensation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBonus_Plan_for_Compensation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBonus_Plan_for_Compensation_DataForArrayConstraintsFromSetBonus_Plan_for_Compensation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $compensation_Detail_DataTypeBonus_Plan_for_Compensation_DataItem) {
            // validation for constraint: itemType
            if (!$compensation_Detail_DataTypeBonus_Plan_for_Compensation_DataItem instanceof \StructType\Employee_Compensation_Bonus_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($compensation_Detail_DataTypeBonus_Plan_for_Compensation_DataItem) ? get_class($compensation_Detail_DataTypeBonus_Plan_for_Compensation_DataItem) : sprintf('%s(%s)', gettype($compensation_Detail_DataTypeBonus_Plan_for_Compensation_DataItem), var_export($compensation_Detail_DataTypeBonus_Plan_for_Compensation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Bonus_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Bonus_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Bonus_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Bonus_Plan_Assignment_DataType[] $bonus_Plan_for_Compensation_Data
     * @return \StructType\Compensation_Detail_DataType
     */
    public function setBonus_Plan_for_Compensation_Data(array $bonus_Plan_for_Compensation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($bonus_Plan_for_Compensation_DataArrayErrorMessage = self::validateBonus_Plan_for_Compensation_DataForArrayConstraintsFromSetBonus_Plan_for_Compensation_Data($bonus_Plan_for_Compensation_Data))) {
            throw new \InvalidArgumentException($bonus_Plan_for_Compensation_DataArrayErrorMessage, __LINE__);
        }
        $this->Bonus_Plan_for_Compensation_Data = $bonus_Plan_for_Compensation_Data;
        return $this;
    }
    /**
     * Add item to Bonus_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Bonus_Plan_Assignment_DataType $item
     * @return \StructType\Compensation_Detail_DataType
     */
    public function addToBonus_Plan_for_Compensation_Data(\StructType\Employee_Compensation_Bonus_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Compensation_Bonus_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Bonus_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Bonus_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Bonus_Plan_for_Compensation_Data[] = $item;
        return $this;
    }
    /**
     * Get Merit_Plan_for_Compensation_Data value
     * @return \StructType\Employee_Compensation_Merit_Plan_Assignment_DataType[]|null
     */
    public function getMerit_Plan_for_Compensation_Data()
    {
        return $this->Merit_Plan_for_Compensation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setMerit_Plan_for_Compensation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMerit_Plan_for_Compensation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMerit_Plan_for_Compensation_DataForArrayConstraintsFromSetMerit_Plan_for_Compensation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $compensation_Detail_DataTypeMerit_Plan_for_Compensation_DataItem) {
            // validation for constraint: itemType
            if (!$compensation_Detail_DataTypeMerit_Plan_for_Compensation_DataItem instanceof \StructType\Employee_Compensation_Merit_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($compensation_Detail_DataTypeMerit_Plan_for_Compensation_DataItem) ? get_class($compensation_Detail_DataTypeMerit_Plan_for_Compensation_DataItem) : sprintf('%s(%s)', gettype($compensation_Detail_DataTypeMerit_Plan_for_Compensation_DataItem), var_export($compensation_Detail_DataTypeMerit_Plan_for_Compensation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Merit_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Merit_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Merit_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Merit_Plan_Assignment_DataType[] $merit_Plan_for_Compensation_Data
     * @return \StructType\Compensation_Detail_DataType
     */
    public function setMerit_Plan_for_Compensation_Data(array $merit_Plan_for_Compensation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($merit_Plan_for_Compensation_DataArrayErrorMessage = self::validateMerit_Plan_for_Compensation_DataForArrayConstraintsFromSetMerit_Plan_for_Compensation_Data($merit_Plan_for_Compensation_Data))) {
            throw new \InvalidArgumentException($merit_Plan_for_Compensation_DataArrayErrorMessage, __LINE__);
        }
        $this->Merit_Plan_for_Compensation_Data = $merit_Plan_for_Compensation_Data;
        return $this;
    }
    /**
     * Add item to Merit_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Merit_Plan_Assignment_DataType $item
     * @return \StructType\Compensation_Detail_DataType
     */
    public function addToMerit_Plan_for_Compensation_Data(\StructType\Employee_Compensation_Merit_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Compensation_Merit_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Merit_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Merit_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Merit_Plan_for_Compensation_Data[] = $item;
        return $this;
    }
    /**
     * Get Commission_Plan_for_Compensation_Data value
     * @return \StructType\Employee_Compensation_Commission_Plan_Assignment_DataType[]|null
     */
    public function getCommission_Plan_for_Compensation_Data()
    {
        return $this->Commission_Plan_for_Compensation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCommission_Plan_for_Compensation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommission_Plan_for_Compensation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommission_Plan_for_Compensation_DataForArrayConstraintsFromSetCommission_Plan_for_Compensation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $compensation_Detail_DataTypeCommission_Plan_for_Compensation_DataItem) {
            // validation for constraint: itemType
            if (!$compensation_Detail_DataTypeCommission_Plan_for_Compensation_DataItem instanceof \StructType\Employee_Compensation_Commission_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($compensation_Detail_DataTypeCommission_Plan_for_Compensation_DataItem) ? get_class($compensation_Detail_DataTypeCommission_Plan_for_Compensation_DataItem) : sprintf('%s(%s)', gettype($compensation_Detail_DataTypeCommission_Plan_for_Compensation_DataItem), var_export($compensation_Detail_DataTypeCommission_Plan_for_Compensation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Commission_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Commission_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Commission_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Commission_Plan_Assignment_DataType[] $commission_Plan_for_Compensation_Data
     * @return \StructType\Compensation_Detail_DataType
     */
    public function setCommission_Plan_for_Compensation_Data(array $commission_Plan_for_Compensation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($commission_Plan_for_Compensation_DataArrayErrorMessage = self::validateCommission_Plan_for_Compensation_DataForArrayConstraintsFromSetCommission_Plan_for_Compensation_Data($commission_Plan_for_Compensation_Data))) {
            throw new \InvalidArgumentException($commission_Plan_for_Compensation_DataArrayErrorMessage, __LINE__);
        }
        $this->Commission_Plan_for_Compensation_Data = $commission_Plan_for_Compensation_Data;
        return $this;
    }
    /**
     * Add item to Commission_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Commission_Plan_Assignment_DataType $item
     * @return \StructType\Compensation_Detail_DataType
     */
    public function addToCommission_Plan_for_Compensation_Data(\StructType\Employee_Compensation_Commission_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Compensation_Commission_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Commission_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Commission_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Commission_Plan_for_Compensation_Data[] = $item;
        return $this;
    }
    /**
     * Get Period_Salary_Plan_for_Compensation_Data value
     * @return \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_DataType[]|null
     */
    public function getPeriod_Salary_Plan_for_Compensation_Data()
    {
        return $this->Period_Salary_Plan_for_Compensation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPeriod_Salary_Plan_for_Compensation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeriod_Salary_Plan_for_Compensation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePeriod_Salary_Plan_for_Compensation_DataForArrayConstraintsFromSetPeriod_Salary_Plan_for_Compensation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $compensation_Detail_DataTypePeriod_Salary_Plan_for_Compensation_DataItem) {
            // validation for constraint: itemType
            if (!$compensation_Detail_DataTypePeriod_Salary_Plan_for_Compensation_DataItem instanceof \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_DataType) {
                $invalidValues[] = is_object($compensation_Detail_DataTypePeriod_Salary_Plan_for_Compensation_DataItem) ? get_class($compensation_Detail_DataTypePeriod_Salary_Plan_for_Compensation_DataItem) : sprintf('%s(%s)', gettype($compensation_Detail_DataTypePeriod_Salary_Plan_for_Compensation_DataItem), var_export($compensation_Detail_DataTypePeriod_Salary_Plan_for_Compensation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Period_Salary_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Period_Salary_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_DataType[] $period_Salary_Plan_for_Compensation_Data
     * @return \StructType\Compensation_Detail_DataType
     */
    public function setPeriod_Salary_Plan_for_Compensation_Data(array $period_Salary_Plan_for_Compensation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($period_Salary_Plan_for_Compensation_DataArrayErrorMessage = self::validatePeriod_Salary_Plan_for_Compensation_DataForArrayConstraintsFromSetPeriod_Salary_Plan_for_Compensation_Data($period_Salary_Plan_for_Compensation_Data))) {
            throw new \InvalidArgumentException($period_Salary_Plan_for_Compensation_DataArrayErrorMessage, __LINE__);
        }
        $this->Period_Salary_Plan_for_Compensation_Data = $period_Salary_Plan_for_Compensation_Data;
        return $this;
    }
    /**
     * Add item to Period_Salary_Plan_for_Compensation_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_DataType $item
     * @return \StructType\Compensation_Detail_DataType
     */
    public function addToPeriod_Salary_Plan_for_Compensation_Data(\StructType\Employee_Compensation_Period_Salary_Plan_Assignment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Period_Salary_Plan_for_Compensation_Data property can only contain items of type \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Period_Salary_Plan_for_Compensation_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Compensation_Detail_DataType
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
