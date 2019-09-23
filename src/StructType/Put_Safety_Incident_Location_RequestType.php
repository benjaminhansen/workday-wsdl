<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Safety_Incident_Location_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Safety Incident Location Request
 * @subpackage Structs
 */
class Put_Safety_Incident_Location_RequestType extends AbstractStructBase
{
    /**
     * The Safety_Incident_Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Safety Incident Location
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType
     */
    public $Safety_Incident_Location_Reference;
    /**
     * The Safety_Incident_Location_Data
     * Meta information extracted from the WSDL
     * - documentation: Safety Incident Location Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Safety_Incident_Location_DataType
     */
    public $Safety_Incident_Location_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only
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
     * Constructor method for Put_Safety_Incident_Location_RequestType
     * @uses Put_Safety_Incident_Location_RequestType::setSafety_Incident_Location_Reference()
     * @uses Put_Safety_Incident_Location_RequestType::setSafety_Incident_Location_Data()
     * @uses Put_Safety_Incident_Location_RequestType::setAdd_Only()
     * @uses Put_Safety_Incident_Location_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Location_DataType $safety_Incident_Location_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference = null, \WorkdayWsdl\\StructType\Safety_Incident_Location_DataType $safety_Incident_Location_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setSafety_Incident_Location_Reference($safety_Incident_Location_Reference)
            ->setSafety_Incident_Location_Data($safety_Incident_Location_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Safety_Incident_Location_Reference value
     * @return \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType|null
     */
    public function getSafety_Incident_Location_Reference()
    {
        return $this->Safety_Incident_Location_Reference;
    }
    /**
     * Set Safety_Incident_Location_Reference value
     * @param \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference
     * @return \WorkdayWsdl\\StructType\Put_Safety_Incident_Location_RequestType
     */
    public function setSafety_Incident_Location_Reference(\WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference = null)
    {
        $this->Safety_Incident_Location_Reference = $safety_Incident_Location_Reference;
        return $this;
    }
    /**
     * Get Safety_Incident_Location_Data value
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Location_DataType|null
     */
    public function getSafety_Incident_Location_Data()
    {
        return $this->Safety_Incident_Location_Data;
    }
    /**
     * Set Safety_Incident_Location_Data value
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Location_DataType $safety_Incident_Location_Data
     * @return \WorkdayWsdl\\StructType\Put_Safety_Incident_Location_RequestType
     */
    public function setSafety_Incident_Location_Data(\WorkdayWsdl\\StructType\Safety_Incident_Location_DataType $safety_Incident_Location_Data = null)
    {
        $this->Safety_Incident_Location_Data = $safety_Incident_Location_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Safety_Incident_Location_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Safety_Incident_Location_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Safety_Incident_Location_RequestType
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
