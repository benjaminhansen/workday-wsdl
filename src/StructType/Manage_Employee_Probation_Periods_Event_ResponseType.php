<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Manage_Employee_Probation_Periods_Event_ResponseType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Manage Employee Probation Period Response
 * @subpackage Structs
 */
class Manage_Employee_Probation_Periods_Event_ResponseType extends AbstractStructBase
{
    /**
     * The Employee_Probation_Period_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Probation Period Event that is created for the Woker
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Employee_Probation_Period_Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Manage_Employee_Probation_Periods_Event_ResponseType
     * @uses Manage_Employee_Probation_Periods_Event_ResponseType::setEmployee_Probation_Period_Event_Reference()
     * @uses Manage_Employee_Probation_Periods_Event_ResponseType::setVersion()
     * @param \StructType\Unique_IdentifierObjectType $employee_Probation_Period_Event_Reference
     * @param string $version
     */
    public function __construct(\StructType\Unique_IdentifierObjectType $employee_Probation_Period_Event_Reference = null, $version = null)
    {
        $this
            ->setEmployee_Probation_Period_Event_Reference($employee_Probation_Period_Event_Reference)
            ->setVersion($version);
    }
    /**
     * Get Employee_Probation_Period_Event_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getEmployee_Probation_Period_Event_Reference()
    {
        return $this->Employee_Probation_Period_Event_Reference;
    }
    /**
     * Set Employee_Probation_Period_Event_Reference value
     * @param \StructType\Unique_IdentifierObjectType $employee_Probation_Period_Event_Reference
     * @return \StructType\Manage_Employee_Probation_Periods_Event_ResponseType
     */
    public function setEmployee_Probation_Period_Event_Reference(\StructType\Unique_IdentifierObjectType $employee_Probation_Period_Event_Reference = null)
    {
        $this->Employee_Probation_Period_Event_Reference = $employee_Probation_Period_Event_Reference;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\Manage_Employee_Probation_Periods_Event_ResponseType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Manage_Employee_Probation_Periods_Event_ResponseType
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
