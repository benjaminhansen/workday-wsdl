<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Service_Center_Representative_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Service Center Representative Request
 * @subpackage Structs
 */
class Put_Service_Center_Representative_RequestType extends AbstractStructBase
{
    /**
     * The Service_Center_Representative_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to an existing Service Center Representative for update purposes only.
     * - minOccurs: 0
     * @var \StructType\Service_Center_RepresentativeObjectType
     */
    public $Service_Center_Representative_Reference;
    /**
     * The Service_Center_Representative_Data
     * Meta information extracted from the WSDL
     * - documentation: Service Center Representative Data
     * @var \StructType\Service_Center_Representative_DataType
     */
    public $Service_Center_Representative_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only Flag. Indicates that the service is an add only, not an update.
     * @var bool
     */
    public $Add_Only;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Service_Center_Representative_RequestType
     * @uses Put_Service_Center_Representative_RequestType::setService_Center_Representative_Reference()
     * @uses Put_Service_Center_Representative_RequestType::setService_Center_Representative_Data()
     * @uses Put_Service_Center_Representative_RequestType::setAdd_Only()
     * @uses Put_Service_Center_Representative_RequestType::setVersion()
     * @param \StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Reference
     * @param \StructType\Service_Center_Representative_DataType $service_Center_Representative_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Reference = null, \StructType\Service_Center_Representative_DataType $service_Center_Representative_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setService_Center_Representative_Reference($service_Center_Representative_Reference)
            ->setService_Center_Representative_Data($service_Center_Representative_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Service_Center_Representative_Reference value
     * @return \StructType\Service_Center_RepresentativeObjectType|null
     */
    public function getService_Center_Representative_Reference()
    {
        return $this->Service_Center_Representative_Reference;
    }
    /**
     * Set Service_Center_Representative_Reference value
     * @param \StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Reference
     * @return \StructType\Put_Service_Center_Representative_RequestType
     */
    public function setService_Center_Representative_Reference(\StructType\Service_Center_RepresentativeObjectType $service_Center_Representative_Reference = null)
    {
        $this->Service_Center_Representative_Reference = $service_Center_Representative_Reference;
        return $this;
    }
    /**
     * Get Service_Center_Representative_Data value
     * @return \StructType\Service_Center_Representative_DataType|null
     */
    public function getService_Center_Representative_Data()
    {
        return $this->Service_Center_Representative_Data;
    }
    /**
     * Set Service_Center_Representative_Data value
     * @param \StructType\Service_Center_Representative_DataType $service_Center_Representative_Data
     * @return \StructType\Put_Service_Center_Representative_RequestType
     */
    public function setService_Center_Representative_Data(\StructType\Service_Center_Representative_DataType $service_Center_Representative_Data = null)
    {
        $this->Service_Center_Representative_Data = $service_Center_Representative_Data;
        return $this;
    }
    /**
     * Get Add_Only value
     * @return bool|null
     */
    public function getAdd_Only()
    {
        return $this->Add_Only;
    }
    /**
     * Set Add_Only value
     * @param bool $add_Only
     * @return \StructType\Put_Service_Center_Representative_RequestType
     */
    public function setAdd_Only($add_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($add_Only) && !is_bool($add_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_Only, true), gettype($add_Only)), __LINE__);
        }
        $this->Add_Only = $add_Only;
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
     * @return \StructType\Put_Service_Center_Representative_RequestType
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
     * @return \StructType\Put_Service_Center_Representative_RequestType
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
