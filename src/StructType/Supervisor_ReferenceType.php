<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Supervisor_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Worker (e.g. Employee or Contingent Worker).
 * @subpackage Structs
 */
class Supervisor_ReferenceType extends AbstractStructBase
{
    /**
     * The Employee_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_ReferenceType
     */
    public $Employee_Reference;
    /**
     * The Contingent_Worker_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType
     */
    public $Contingent_Worker_Reference;
    /**
     * Constructor method for Supervisor_ReferenceType
     * @uses Supervisor_ReferenceType::setEmployee_Reference()
     * @uses Supervisor_ReferenceType::setContingent_Worker_Reference()
     * @param \WorkdayWsdl\\StructType\Employee_ReferenceType $employee_Reference
     * @param \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Employee_ReferenceType $employee_Reference = null, \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference = null)
    {
        $this
            ->setEmployee_Reference($employee_Reference)
            ->setContingent_Worker_Reference($contingent_Worker_Reference);
    }
    /**
     * Get Employee_Reference value
     * @return \WorkdayWsdl\\StructType\Employee_ReferenceType|null
     */
    public function getEmployee_Reference()
    {
        return $this->Employee_Reference;
    }
    /**
     * Set Employee_Reference value
     * @param \WorkdayWsdl\\StructType\Employee_ReferenceType $employee_Reference
     * @return \WorkdayWsdl\\StructType\Supervisor_ReferenceType
     */
    public function setEmployee_Reference(\WorkdayWsdl\\StructType\Employee_ReferenceType $employee_Reference = null)
    {
        $this->Employee_Reference = $employee_Reference;
        return $this;
    }
    /**
     * Get Contingent_Worker_Reference value
     * @return \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType|null
     */
    public function getContingent_Worker_Reference()
    {
        return $this->Contingent_Worker_Reference;
    }
    /**
     * Set Contingent_Worker_Reference value
     * @param \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference
     * @return \WorkdayWsdl\\StructType\Supervisor_ReferenceType
     */
    public function setContingent_Worker_Reference(\WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference = null)
    {
        $this->Contingent_Worker_Reference = $contingent_Worker_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Supervisor_ReferenceType
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
