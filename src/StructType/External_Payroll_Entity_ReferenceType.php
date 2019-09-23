<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Payroll_Entity_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of External Payroll Entity.
 * @subpackage Structs
 */
class External_Payroll_Entity_ReferenceType extends AbstractStructBase
{
    /**
     * The Payroll_Entity_ID
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of External Payroll Entity must exist for the given value of Payroll Entity ID. | Unique attribute name/description identifying a valid instance of External Payroll Entity.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Payroll_Entity_ID;
    /**
     * Constructor method for External_Payroll_Entity_ReferenceType
     * @uses External_Payroll_Entity_ReferenceType::setPayroll_Entity_ID()
     * @param string $payroll_Entity_ID
     */
    public function __construct($payroll_Entity_ID = null)
    {
        $this
            ->setPayroll_Entity_ID($payroll_Entity_ID);
    }
    /**
     * Get Payroll_Entity_ID value
     * @return string|null
     */
    public function getPayroll_Entity_ID()
    {
        return $this->Payroll_Entity_ID;
    }
    /**
     * Set Payroll_Entity_ID value
     * @param string $payroll_Entity_ID
     * @return \WorkdayWsdl\\StructType\External_Payroll_Entity_ReferenceType
     */
    public function setPayroll_Entity_ID($payroll_Entity_ID = null)
    {
        // validation for constraint: string
        if (!is_null($payroll_Entity_ID) && !is_string($payroll_Entity_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payroll_Entity_ID, true), gettype($payroll_Entity_ID)), __LINE__);
        }
        $this->Payroll_Entity_ID = $payroll_Entity_ID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\External_Payroll_Entity_ReferenceType
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
