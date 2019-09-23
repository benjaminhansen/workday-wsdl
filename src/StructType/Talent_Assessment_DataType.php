<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Talent_Assessment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the potential assessment for the employee.
 * @subpackage Structs
 */
class Talent_Assessment_DataType extends AbstractStructBase
{
    /**
     * The Employee_Potential_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the information about the employee's potential.
     * - minOccurs: 0
     * @var \StructType\Employee_Talent_Assessment_DataType
     */
    public $Employee_Potential_Data;
    /**
     * Constructor method for Talent_Assessment_DataType
     * @uses Talent_Assessment_DataType::setEmployee_Potential_Data()
     * @param \StructType\Employee_Talent_Assessment_DataType $employee_Potential_Data
     */
    public function __construct(\StructType\Employee_Talent_Assessment_DataType $employee_Potential_Data = null)
    {
        $this
            ->setEmployee_Potential_Data($employee_Potential_Data);
    }
    /**
     * Get Employee_Potential_Data value
     * @return \StructType\Employee_Talent_Assessment_DataType|null
     */
    public function getEmployee_Potential_Data()
    {
        return $this->Employee_Potential_Data;
    }
    /**
     * Set Employee_Potential_Data value
     * @param \StructType\Employee_Talent_Assessment_DataType $employee_Potential_Data
     * @return \StructType\Talent_Assessment_DataType
     */
    public function setEmployee_Potential_Data(\StructType\Employee_Talent_Assessment_DataType $employee_Potential_Data = null)
    {
        $this->Employee_Potential_Data = $employee_Potential_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Talent_Assessment_DataType
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
