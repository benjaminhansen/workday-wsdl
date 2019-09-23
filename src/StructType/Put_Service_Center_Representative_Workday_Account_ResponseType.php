<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Put_Service_Center_Representative_Workday_Account_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Service Center Representative Workday Account Response
 * @subpackage Structs
 */
class Put_Service_Center_Representative_Workday_Account_ResponseType extends AbstractStructBase
{
    /**
     * The Service_Center_Representative_Workday_Account_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the Service Center Representative.
     * - minOccurs: 0
     * @var \StructType\Service_Center_RepresentativeObjectType
     */
    public $Service_Center_Representative_Workday_Account_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for
     * Put_Service_Center_Representative_Workday_Account_ResponseType
     * @uses Put_Service_Center_Representative_Workday_Account_ResponseType::setService_Center_Representative_Workday_Account_Reference()
     * @uses Put_Service_Center_Representative_Workday_Account_ResponseType::setVersion()
     * @param \StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Workday_Account_Reference
     * @param string $version
     */
    public function __construct(\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Workday_Account_Reference = null, $version = null)
    {
        $this
            ->setService_Center_Representative_Workday_Account_Reference($service_Center_Representative_Workday_Account_Reference)
            ->setVersion($version);
    }
    /**
     * Get Service_Center_Representative_Workday_Account_Reference value
     * @return \StructType\Service_Center_RepresentativeObjectType|null
     */
    public function getService_Center_Representative_Workday_Account_Reference()
    {
        return $this->Service_Center_Representative_Workday_Account_Reference;
    }
    /**
     * Set Service_Center_Representative_Workday_Account_Reference value
     * @param \StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Workday_Account_Reference
     * @return \StructType\Put_Service_Center_Representative_Workday_Account_ResponseType
     */
    public function setService_Center_Representative_Workday_Account_Reference(\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Workday_Account_Reference = null)
    {
        $this->Service_Center_Representative_Workday_Account_Reference = $service_Center_Representative_Workday_Account_Reference;
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
     * @return \StructType\Put_Service_Center_Representative_Workday_Account_ResponseType
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
     * @return \StructType\Put_Service_Center_Representative_Workday_Account_ResponseType
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
