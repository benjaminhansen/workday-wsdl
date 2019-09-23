<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: A valid instance of Employee must exist for the given Integration ID Reference. | Reference element representing a unique instance of Employee.
 * @subpackage Structs
 */
class Employee_ReferenceType extends AbstractStructBase
{
    /**
     * The Integration_ID_Reference
     * @var \StructType\External_Integration_ID_Reference_DataType
     */
    public $Integration_ID_Reference;
    /**
     * Constructor method for Employee_ReferenceType
     * @uses Employee_ReferenceType::setIntegration_ID_Reference()
     * @param \StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference
     */
    public function __construct(\StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference = null)
    {
        $this
            ->setIntegration_ID_Reference($integration_ID_Reference);
    }
    /**
     * Get Integration_ID_Reference value
     * @return \StructType\External_Integration_ID_Reference_DataType|null
     */
    public function getIntegration_ID_Reference()
    {
        return $this->Integration_ID_Reference;
    }
    /**
     * Set Integration_ID_Reference value
     * @param \StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference
     * @return \StructType\Employee_ReferenceType
     */
    public function setIntegration_ID_Reference(\StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference = null)
    {
        $this->Integration_ID_Reference = $integration_ID_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Employee_ReferenceType
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
