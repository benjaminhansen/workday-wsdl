<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Position_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: A valid instance of Position must exist for the given Integration ID Reference. | Reference element representing a unique instance of Position.
 * @subpackage Structs
 */
class Position_ReferenceType extends AbstractStructBase
{
    /**
     * The Integration_ID_Reference
     * @var \WorkdayWsdl\\StructType\External_Integration_ID_Reference_DataType
     */
    public $Integration_ID_Reference;
    /**
     * Constructor method for Position_ReferenceType
     * @uses Position_ReferenceType::setIntegration_ID_Reference()
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference = null)
    {
        $this
            ->setIntegration_ID_Reference($integration_ID_Reference);
    }
    /**
     * Get Integration_ID_Reference value
     * @return \WorkdayWsdl\\StructType\External_Integration_ID_Reference_DataType|null
     */
    public function getIntegration_ID_Reference()
    {
        return $this->Integration_ID_Reference;
    }
    /**
     * Set Integration_ID_Reference value
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference
     * @return \WorkdayWsdl\\StructType\Position_ReferenceType
     */
    public function setIntegration_ID_Reference(\WorkdayWsdl\\StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\Position_ReferenceType
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
