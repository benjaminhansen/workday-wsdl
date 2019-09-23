<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Service_Center_Representative_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Service Center Representative Response
 * @subpackage Structs
 */
class Put_Service_Center_Representative_ResponseType extends AbstractStructBase
{
    /**
     * The Service_Center_Representative_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the Service Center Representative.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType
     */
    public $Service_Center_Representative_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Service_Center_Representative_ResponseType
     * @uses Put_Service_Center_Representative_ResponseType::setService_Center_Representative_Reference()
     * @uses Put_Service_Center_Representative_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Reference = null, $version = null)
    {
        $this
            ->setService_Center_Representative_Reference($service_Center_Representative_Reference)
            ->setVersion($version);
    }
    /**
     * Get Service_Center_Representative_Reference value
     * @return \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType|null
     */
    public function getService_Center_Representative_Reference()
    {
        return $this->Service_Center_Representative_Reference;
    }
    /**
     * Set Service_Center_Representative_Reference value
     * @param \WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Reference
     * @return \WorkdayWsdl\\StructType\Put_Service_Center_Representative_ResponseType
     */
    public function setService_Center_Representative_Reference(\WorkdayWsdl\\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Reference = null)
    {
        $this->Service_Center_Representative_Reference = $service_Center_Representative_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Service_Center_Representative_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Service_Center_Representative_ResponseType
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
