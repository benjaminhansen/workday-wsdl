<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: A valid instance of Organization also infers that the Organization is in an Active status. | A valid instance of Organization must exist for the given Integration ID Reference. | Reference element representing a unique instance of
 * Organization.
 * @subpackage Structs
 */
class Organization_ReferenceType extends AbstractStructBase
{
    /**
     * The Integration_ID_Reference
     * @var \StructType\External_Integration_ID_Reference_DataType
     */
    public $Integration_ID_Reference;
    /**
     * Constructor method for Organization_ReferenceType
     * @uses Organization_ReferenceType::setIntegration_ID_Reference()
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
     * @return \StructType\Organization_ReferenceType
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
     * @return \StructType\Organization_ReferenceType
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
