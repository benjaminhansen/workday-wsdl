<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Put_Service_Center_Representative_Workday_Account_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request Element for Put Service Center Representative Workday Account
 * @subpackage Structs
 */
class Put_Service_Center_Representative_Workday_Account_RequestType extends AbstractStructBase
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
     * The Service_Center_Representative_Workday_Account_Data
     * Meta information extracted from the WSDL
     * - documentation: Element containing Service Center Representative Workday Account data.
     * @var \StructType\Service_Center_Representative_Workday_Account_DataType
     */
    public $Service_Center_Representative_Workday_Account_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for
     * Put_Service_Center_Representative_Workday_Account_RequestType
     * @uses Put_Service_Center_Representative_Workday_Account_RequestType::setService_Center_Representative_Workday_Account_Reference()
     * @uses Put_Service_Center_Representative_Workday_Account_RequestType::setService_Center_Representative_Workday_Account_Data()
     * @uses Put_Service_Center_Representative_Workday_Account_RequestType::setVersion()
     * @param \StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Workday_Account_Reference
     * @param \StructType\Service_Center_Representative_Workday_Account_DataType $service_Center_Representative_Workday_Account_Data
     * @param string $version
     */
    public function __construct(\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Workday_Account_Reference = null, \StructType\Service_Center_Representative_Workday_Account_DataType $service_Center_Representative_Workday_Account_Data = null, $version = null)
    {
        $this
            ->setService_Center_Representative_Workday_Account_Reference($service_Center_Representative_Workday_Account_Reference)
            ->setService_Center_Representative_Workday_Account_Data($service_Center_Representative_Workday_Account_Data)
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
     * @return \StructType\Put_Service_Center_Representative_Workday_Account_RequestType
     */
    public function setService_Center_Representative_Workday_Account_Reference(\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Workday_Account_Reference = null)
    {
        $this->Service_Center_Representative_Workday_Account_Reference = $service_Center_Representative_Workday_Account_Reference;
        return $this;
    }
    /**
     * Get Service_Center_Representative_Workday_Account_Data value
     * @return \StructType\Service_Center_Representative_Workday_Account_DataType|null
     */
    public function getService_Center_Representative_Workday_Account_Data()
    {
        return $this->Service_Center_Representative_Workday_Account_Data;
    }
    /**
     * Set Service_Center_Representative_Workday_Account_Data value
     * @param \StructType\Service_Center_Representative_Workday_Account_DataType $service_Center_Representative_Workday_Account_Data
     * @return \StructType\Put_Service_Center_Representative_Workday_Account_RequestType
     */
    public function setService_Center_Representative_Workday_Account_Data(\StructType\Service_Center_Representative_Workday_Account_DataType $service_Center_Representative_Workday_Account_Data = null)
    {
        $this->Service_Center_Representative_Workday_Account_Data = $service_Center_Representative_Workday_Account_Data;
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
     * @return \StructType\Put_Service_Center_Representative_Workday_Account_RequestType
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
     * @return \StructType\Put_Service_Center_Representative_Workday_Account_RequestType
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
