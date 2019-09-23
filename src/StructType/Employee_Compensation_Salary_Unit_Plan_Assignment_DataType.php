<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Compensation_Salary_Unit_Plan_Assignment_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Unit Salary Plan Compensation data.
 * @subpackage Structs
 */
class Employee_Compensation_Salary_Unit_Plan_Assignment_DataType extends AbstractStructBase
{
    /**
     * The Unit_Salary_Plan_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Compensation Component must exist for the given value of Unit Salary Plan Name. | Text attribute identifying name of Unit Salary Plan
     * - maxOccurs: 1
     * @var string
     */
    public $Unit_Salary_Plan_Name;
    /**
     * The Compensation_Element_Values_for_Unit_Salary_Plan_Data
     * @var \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType
     */
    public $Compensation_Element_Values_for_Unit_Salary_Plan_Data;
    /**
     * Constructor method for
     * Employee_Compensation_Salary_Unit_Plan_Assignment_DataType
     * @uses Employee_Compensation_Salary_Unit_Plan_Assignment_DataType::setUnit_Salary_Plan_Name()
     * @uses Employee_Compensation_Salary_Unit_Plan_Assignment_DataType::setCompensation_Element_Values_for_Unit_Salary_Plan_Data()
     * @param string $unit_Salary_Plan_Name
     * @param \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType $compensation_Element_Values_for_Unit_Salary_Plan_Data
     */
    public function __construct($unit_Salary_Plan_Name = null, \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType $compensation_Element_Values_for_Unit_Salary_Plan_Data = null)
    {
        $this
            ->setUnit_Salary_Plan_Name($unit_Salary_Plan_Name)
            ->setCompensation_Element_Values_for_Unit_Salary_Plan_Data($compensation_Element_Values_for_Unit_Salary_Plan_Data);
    }
    /**
     * Get Unit_Salary_Plan_Name value
     * @return string|null
     */
    public function getUnit_Salary_Plan_Name()
    {
        return $this->Unit_Salary_Plan_Name;
    }
    /**
     * Set Unit_Salary_Plan_Name value
     * @param string $unit_Salary_Plan_Name
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_DataType
     */
    public function setUnit_Salary_Plan_Name($unit_Salary_Plan_Name = null)
    {
        // validation for constraint: string
        if (!is_null($unit_Salary_Plan_Name) && !is_string($unit_Salary_Plan_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unit_Salary_Plan_Name, true), gettype($unit_Salary_Plan_Name)), __LINE__);
        }
        $this->Unit_Salary_Plan_Name = $unit_Salary_Plan_Name;
        return $this;
    }
    /**
     * Get Compensation_Element_Values_for_Unit_Salary_Plan_Data value
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType|null
     */
    public function getCompensation_Element_Values_for_Unit_Salary_Plan_Data()
    {
        return $this->Compensation_Element_Values_for_Unit_Salary_Plan_Data;
    }
    /**
     * Set Compensation_Element_Values_for_Unit_Salary_Plan_Data value
     * @param \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType $compensation_Element_Values_for_Unit_Salary_Plan_Data
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_DataType
     */
    public function setCompensation_Element_Values_for_Unit_Salary_Plan_Data(\WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType $compensation_Element_Values_for_Unit_Salary_Plan_Data = null)
    {
        $this->Compensation_Element_Values_for_Unit_Salary_Plan_Data = $compensation_Element_Values_for_Unit_Salary_Plan_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_DataType
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
