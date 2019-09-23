<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Compensation_Salary_Plan_Assignment_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Salary Plan Compensation data.
 * @subpackage Structs
 */
class Employee_Compensation_Salary_Plan_Assignment_DataType extends AbstractStructBase
{
    /**
     * The Salary_Plan_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Compensation Component must exist for the given value of Salary Plan Name. | Text attribute identifying name of Salary Plan.
     * - maxOccurs: 1
     * @var string
     */
    public $Salary_Plan_Name;
    /**
     * The Compensation_Element_Values_for_Base_Pay_Data
     * @var \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Plan_Assignment_Detail_DataType
     */
    public $Compensation_Element_Values_for_Base_Pay_Data;
    /**
     * Constructor method for Employee_Compensation_Salary_Plan_Assignment_DataType
     * @uses Employee_Compensation_Salary_Plan_Assignment_DataType::setSalary_Plan_Name()
     * @uses Employee_Compensation_Salary_Plan_Assignment_DataType::setCompensation_Element_Values_for_Base_Pay_Data()
     * @param string $salary_Plan_Name
     * @param \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Plan_Assignment_Detail_DataType $compensation_Element_Values_for_Base_Pay_Data
     */
    public function __construct($salary_Plan_Name = null, \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Plan_Assignment_Detail_DataType $compensation_Element_Values_for_Base_Pay_Data = null)
    {
        $this
            ->setSalary_Plan_Name($salary_Plan_Name)
            ->setCompensation_Element_Values_for_Base_Pay_Data($compensation_Element_Values_for_Base_Pay_Data);
    }
    /**
     * Get Salary_Plan_Name value
     * @return string|null
     */
    public function getSalary_Plan_Name()
    {
        return $this->Salary_Plan_Name;
    }
    /**
     * Set Salary_Plan_Name value
     * @param string $salary_Plan_Name
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Plan_Assignment_DataType
     */
    public function setSalary_Plan_Name($salary_Plan_Name = null)
    {
        // validation for constraint: string
        if (!is_null($salary_Plan_Name) && !is_string($salary_Plan_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salary_Plan_Name, true), gettype($salary_Plan_Name)), __LINE__);
        }
        $this->Salary_Plan_Name = $salary_Plan_Name;
        return $this;
    }
    /**
     * Get Compensation_Element_Values_for_Base_Pay_Data value
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Plan_Assignment_Detail_DataType|null
     */
    public function getCompensation_Element_Values_for_Base_Pay_Data()
    {
        return $this->Compensation_Element_Values_for_Base_Pay_Data;
    }
    /**
     * Set Compensation_Element_Values_for_Base_Pay_Data value
     * @param \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Plan_Assignment_Detail_DataType $compensation_Element_Values_for_Base_Pay_Data
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Plan_Assignment_DataType
     */
    public function setCompensation_Element_Values_for_Base_Pay_Data(\WorkdayWsdl\\StructType\Employee_Compensation_Salary_Plan_Assignment_Detail_DataType $compensation_Element_Values_for_Base_Pay_Data = null)
    {
        $this->Compensation_Element_Values_for_Base_Pay_Data = $compensation_Element_Values_for_Base_Pay_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Plan_Assignment_DataType
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
