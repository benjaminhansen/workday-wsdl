<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Compensation_Allowance_Plan_Assignment_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Allowance Plan Compensation data.
 * @subpackage Structs
 */
class Employee_Compensation_Allowance_Plan_Assignment_DataType extends AbstractStructBase
{
    /**
     * The Allowance_Plan_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Compensation Component must exist for the given value of Allowance Plan Name. | Text attribute identifying name of Allowance Plan.
     * - maxOccurs: 1
     * @var string
     */
    public $Allowance_Plan_Name;
    /**
     * The Compensation_Element_Values_for_Allowance_Plan_Data
     * @var \StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType
     */
    public $Compensation_Element_Values_for_Allowance_Plan_Data;
    /**
     * Constructor method for Employee_Compensation_Allowance_Plan_Assignment_DataType
     * @uses Employee_Compensation_Allowance_Plan_Assignment_DataType::setAllowance_Plan_Name()
     * @uses Employee_Compensation_Allowance_Plan_Assignment_DataType::setCompensation_Element_Values_for_Allowance_Plan_Data()
     * @param string $allowance_Plan_Name
     * @param \StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType $compensation_Element_Values_for_Allowance_Plan_Data
     */
    public function __construct($allowance_Plan_Name = null, \StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType $compensation_Element_Values_for_Allowance_Plan_Data = null)
    {
        $this
            ->setAllowance_Plan_Name($allowance_Plan_Name)
            ->setCompensation_Element_Values_for_Allowance_Plan_Data($compensation_Element_Values_for_Allowance_Plan_Data);
    }
    /**
     * Get Allowance_Plan_Name value
     * @return string|null
     */
    public function getAllowance_Plan_Name()
    {
        return $this->Allowance_Plan_Name;
    }
    /**
     * Set Allowance_Plan_Name value
     * @param string $allowance_Plan_Name
     * @return \StructType\Employee_Compensation_Allowance_Plan_Assignment_DataType
     */
    public function setAllowance_Plan_Name($allowance_Plan_Name = null)
    {
        // validation for constraint: string
        if (!is_null($allowance_Plan_Name) && !is_string($allowance_Plan_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allowance_Plan_Name, true), gettype($allowance_Plan_Name)), __LINE__);
        }
        $this->Allowance_Plan_Name = $allowance_Plan_Name;
        return $this;
    }
    /**
     * Get Compensation_Element_Values_for_Allowance_Plan_Data value
     * @return \StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType|null
     */
    public function getCompensation_Element_Values_for_Allowance_Plan_Data()
    {
        return $this->Compensation_Element_Values_for_Allowance_Plan_Data;
    }
    /**
     * Set Compensation_Element_Values_for_Allowance_Plan_Data value
     * @param \StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType $compensation_Element_Values_for_Allowance_Plan_Data
     * @return \StructType\Employee_Compensation_Allowance_Plan_Assignment_DataType
     */
    public function setCompensation_Element_Values_for_Allowance_Plan_Data(\StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType $compensation_Element_Values_for_Allowance_Plan_Data = null)
    {
        $this->Compensation_Element_Values_for_Allowance_Plan_Data = $compensation_Element_Values_for_Allowance_Plan_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Employee_Compensation_Allowance_Plan_Assignment_DataType
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
