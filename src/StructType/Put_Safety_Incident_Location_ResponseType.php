<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Safety_Incident_Location_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Safety Incident Location Response
 * @subpackage Structs
 */
class Put_Safety_Incident_Location_ResponseType extends AbstractStructBase
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
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Safety_Incident_Location_ResponseType
     * @uses Put_Safety_Incident_Location_ResponseType::setSafety_Incident_Location_Reference()
     * @uses Put_Safety_Incident_Location_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference = null, $version = null)
    {
        $this
            ->setSafety_Incident_Location_Reference($safety_Incident_Location_Reference)
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
     * @return \WorkdayWsdl\\StructType\Put_Safety_Incident_Location_ResponseType
     */
    public function setSafety_Incident_Location_Reference(\WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference = null)
    {
        $this->Safety_Incident_Location_Reference = $safety_Incident_Location_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Safety_Incident_Location_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Safety_Incident_Location_ResponseType
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
