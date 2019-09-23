<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Type_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Employee Type.
 * @subpackage Structs
 */
class Employee_Type_ReferenceType extends AbstractStructBase
{
    /**
     * The Employee_Type_Description
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Employee Type must exist for the given Employee Type Description. | Text attribute representing Description of an Employee Type.
     * - maxOccurs: 1
     * @var string
     */
    public $Employee_Type_Description;
    /**
     * Constructor method for Employee_Type_ReferenceType
     * @uses Employee_Type_ReferenceType::setEmployee_Type_Description()
     * @param string $employee_Type_Description
     */
    public function __construct($employee_Type_Description = null)
    {
        $this
            ->setEmployee_Type_Description($employee_Type_Description);
    }
    /**
     * Get Employee_Type_Description value
     * @return string|null
     */
    public function getEmployee_Type_Description()
    {
        return $this->Employee_Type_Description;
    }
    /**
     * Set Employee_Type_Description value
     * @param string $employee_Type_Description
     * @return \StructType\Employee_Type_ReferenceType
     */
    public function setEmployee_Type_Description($employee_Type_Description = null)
    {
        // validation for constraint: string
        if (!is_null($employee_Type_Description) && !is_string($employee_Type_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employee_Type_Description, true), gettype($employee_Type_Description)), __LINE__);
        }
        $this->Employee_Type_Description = $employee_Type_Description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Employee_Type_ReferenceType
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
