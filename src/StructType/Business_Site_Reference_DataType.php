<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Business_Site_Reference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: A valid instance of Location must exist for the given Integration ID Reference. | Reference element representing a unique instance of Location.
 * @subpackage Structs
 */
class Business_Site_Reference_DataType extends AbstractStructBase
{
    /**
     * The Integration_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: Integration ID reference is used as a unique identifier for integratable objects in the Workday system.
     * @var \WorkdayWsdl\\StructType\External_Integration_ID_Reference_DataType
     */
    public $Integration_ID_Reference;
    /**
     * Constructor method for Business_Site_Reference_DataType
     * @uses Business_Site_Reference_DataType::setIntegration_ID_Reference()
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
     * @return \WorkdayWsdl\\StructType\Business_Site_Reference_DataType
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
     * @return \WorkdayWsdl\\StructType\Business_Site_Reference_DataType
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
