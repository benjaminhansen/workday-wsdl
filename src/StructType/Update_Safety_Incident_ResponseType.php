<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Update_Safety_Incident_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response element containing all necessary information to update a safety incident.
 * @subpackage Structs
 */
class Update_Safety_Incident_ResponseType extends AbstractStructBase
{
    /**
     * The Edit_Safety_Incident_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Edit Safety Incident Event created from the request.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Edit_Safety_Incident_Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Update_Safety_Incident_ResponseType
     * @uses Update_Safety_Incident_ResponseType::setEdit_Safety_Incident_Event_Reference()
     * @uses Update_Safety_Incident_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $edit_Safety_Incident_Event_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $edit_Safety_Incident_Event_Reference = null, $version = null)
    {
        $this
            ->setEdit_Safety_Incident_Event_Reference($edit_Safety_Incident_Event_Reference)
            ->setVersion($version);
    }
    /**
     * Get Edit_Safety_Incident_Event_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getEdit_Safety_Incident_Event_Reference()
    {
        return $this->Edit_Safety_Incident_Event_Reference;
    }
    /**
     * Set Edit_Safety_Incident_Event_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $edit_Safety_Incident_Event_Reference
     * @return \WorkdayWsdl\\StructType\Update_Safety_Incident_ResponseType
     */
    public function setEdit_Safety_Incident_Event_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $edit_Safety_Incident_Event_Reference = null)
    {
        $this->Edit_Safety_Incident_Event_Reference = $edit_Safety_Incident_Event_Reference;
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
     * @return \WorkdayWsdl\\StructType\Update_Safety_Incident_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Update_Safety_Incident_ResponseType
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
