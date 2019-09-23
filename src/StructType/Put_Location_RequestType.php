<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Location_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains data for adding or updating a Location.
 * @subpackage Structs
 */
class Put_Location_RequestType extends AbstractStructBase
{
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to an existing Location. Only needed when updating the Reference ID for the Location.
     * - minOccurs: 0
     * @var \StructType\LocationObjectType
     */
    public $Location_Reference;
    /**
     * The Location_Data
     * Meta information extracted from the WSDL
     * - documentation: Element containing all Location data.
     * @var \StructType\Location_iDataType
     */
    public $Location_Data;
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
     * Constructor method for Put_Location_RequestType
     * @uses Put_Location_RequestType::setLocation_Reference()
     * @uses Put_Location_RequestType::setLocation_Data()
     * @uses Put_Location_RequestType::setAdd_Only()
     * @uses Put_Location_RequestType::setVersion()
     * @param \StructType\LocationObjectType $location_Reference
     * @param \StructType\Location_iDataType $location_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\LocationObjectType $location_Reference = null, \StructType\Location_iDataType $location_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setLocation_Reference($location_Reference)
            ->setLocation_Data($location_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Location_Reference value
     * @return \StructType\LocationObjectType|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * Set Location_Reference value
     * @param \StructType\LocationObjectType $location_Reference
     * @return \StructType\Put_Location_RequestType
     */
    public function setLocation_Reference(\StructType\LocationObjectType $location_Reference = null)
    {
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Get Location_Data value
     * @return \StructType\Location_iDataType|null
     */
    public function getLocation_Data()
    {
        return $this->Location_Data;
    }
    /**
     * Set Location_Data value
     * @param \StructType\Location_iDataType $location_Data
     * @return \StructType\Put_Location_RequestType
     */
    public function setLocation_Data(\StructType\Location_iDataType $location_Data = null)
    {
        $this->Location_Data = $location_Data;
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
     * @return \StructType\Put_Location_RequestType
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
     * @return \StructType\Put_Location_RequestType
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
     * @return \StructType\Put_Location_RequestType
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
