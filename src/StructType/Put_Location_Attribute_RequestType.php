<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Location_Attribute_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Web Service Element for Put Location Attribute Requests
 * @subpackage Structs
 */
class Put_Location_Attribute_RequestType extends AbstractStructBase
{
    /**
     * The Location_Attribute_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Location Attribute reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_AttributeObjectType
     */
    public $Location_Attribute_Reference;
    /**
     * The Location_Attribute_Data
     * @var \WorkdayWsdl\\StructType\Location_Attribute_DataType
     */
    public $Location_Attribute_Data;
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
     * Constructor method for Put_Location_Attribute_RequestType
     * @uses Put_Location_Attribute_RequestType::setLocation_Attribute_Reference()
     * @uses Put_Location_Attribute_RequestType::setLocation_Attribute_Data()
     * @uses Put_Location_Attribute_RequestType::setAdd_Only()
     * @uses Put_Location_Attribute_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Location_AttributeObjectType $location_Attribute_Reference
     * @param \WorkdayWsdl\\StructType\Location_Attribute_DataType $location_Attribute_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Location_AttributeObjectType $location_Attribute_Reference = null, \WorkdayWsdl\\StructType\Location_Attribute_DataType $location_Attribute_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setLocation_Attribute_Reference($location_Attribute_Reference)
            ->setLocation_Attribute_Data($location_Attribute_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Location_Attribute_Reference value
     * @return \WorkdayWsdl\\StructType\Location_AttributeObjectType|null
     */
    public function getLocation_Attribute_Reference()
    {
        return $this->Location_Attribute_Reference;
    }
    /**
     * Set Location_Attribute_Reference value
     * @param \WorkdayWsdl\\StructType\Location_AttributeObjectType $location_Attribute_Reference
     * @return \WorkdayWsdl\\StructType\Put_Location_Attribute_RequestType
     */
    public function setLocation_Attribute_Reference(\WorkdayWsdl\\StructType\Location_AttributeObjectType $location_Attribute_Reference = null)
    {
        $this->Location_Attribute_Reference = $location_Attribute_Reference;
        return $this;
    }
    /**
     * Get Location_Attribute_Data value
     * @return \WorkdayWsdl\\StructType\Location_Attribute_DataType|null
     */
    public function getLocation_Attribute_Data()
    {
        return $this->Location_Attribute_Data;
    }
    /**
     * Set Location_Attribute_Data value
     * @param \WorkdayWsdl\\StructType\Location_Attribute_DataType $location_Attribute_Data
     * @return \WorkdayWsdl\\StructType\Put_Location_Attribute_RequestType
     */
    public function setLocation_Attribute_Data(\WorkdayWsdl\\StructType\Location_Attribute_DataType $location_Attribute_Data = null)
    {
        $this->Location_Attribute_Data = $location_Attribute_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Location_Attribute_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Location_Attribute_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Location_Attribute_RequestType
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
