<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Provisioning_Group_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Provisioning Group Request
 * @subpackage Structs
 */
class Put_Provisioning_Group_RequestType extends AbstractStructBase
{
    /**
     * The Provisioning_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a provisioning group.
     * - minOccurs: 0
     * @var \StructType\Provisioning_GroupObjectType
     */
    public $Provisioning_Group_Reference;
    /**
     * The Provisioning_Group_Data
     * @var \StructType\Provisioning_Group_DataType
     */
    public $Provisioning_Group_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Provisioning_Group_RequestType
     * @uses Put_Provisioning_Group_RequestType::setProvisioning_Group_Reference()
     * @uses Put_Provisioning_Group_RequestType::setProvisioning_Group_Data()
     * @uses Put_Provisioning_Group_RequestType::setVersion()
     * @param \StructType\Provisioning_GroupObjectType $provisioning_Group_Reference
     * @param \StructType\Provisioning_Group_DataType $provisioning_Group_Data
     * @param string $version
     */
    public function __construct(\StructType\Provisioning_GroupObjectType $provisioning_Group_Reference = null, \StructType\Provisioning_Group_DataType $provisioning_Group_Data = null, $version = null)
    {
        $this
            ->setProvisioning_Group_Reference($provisioning_Group_Reference)
            ->setProvisioning_Group_Data($provisioning_Group_Data)
            ->setVersion($version);
    }
    /**
     * Get Provisioning_Group_Reference value
     * @return \StructType\Provisioning_GroupObjectType|null
     */
    public function getProvisioning_Group_Reference()
    {
        return $this->Provisioning_Group_Reference;
    }
    /**
     * Set Provisioning_Group_Reference value
     * @param \StructType\Provisioning_GroupObjectType $provisioning_Group_Reference
     * @return \StructType\Put_Provisioning_Group_RequestType
     */
    public function setProvisioning_Group_Reference(\StructType\Provisioning_GroupObjectType $provisioning_Group_Reference = null)
    {
        $this->Provisioning_Group_Reference = $provisioning_Group_Reference;
        return $this;
    }
    /**
     * Get Provisioning_Group_Data value
     * @return \StructType\Provisioning_Group_DataType|null
     */
    public function getProvisioning_Group_Data()
    {
        return $this->Provisioning_Group_Data;
    }
    /**
     * Set Provisioning_Group_Data value
     * @param \StructType\Provisioning_Group_DataType $provisioning_Group_Data
     * @return \StructType\Put_Provisioning_Group_RequestType
     */
    public function setProvisioning_Group_Data(\StructType\Provisioning_Group_DataType $provisioning_Group_Data = null)
    {
        $this->Provisioning_Group_Data = $provisioning_Group_Data;
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
     * @return \StructType\Put_Provisioning_Group_RequestType
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
     * @return \StructType\Put_Provisioning_Group_RequestType
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
