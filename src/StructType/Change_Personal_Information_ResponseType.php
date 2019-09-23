<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Personal_Information_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Responds with the Event ID for the Personal Information Change Event.
 * @subpackage Structs
 */
class Change_Personal_Information_ResponseType extends AbstractStructBase
{
    /**
     * The Personal_Information_Change_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: Event ID of the Personal Information Change Event.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Personal_Information_Change_Event_Reference;
    /**
     * The Personal_Information_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Change_Personal_Information_DataType
     */
    public $Personal_Information_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Change_Personal_Information_ResponseType
     * @uses Change_Personal_Information_ResponseType::setPersonal_Information_Change_Event_Reference()
     * @uses Change_Personal_Information_ResponseType::setPersonal_Information_Data()
     * @uses Change_Personal_Information_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $personal_Information_Change_Event_Reference
     * @param \WorkdayWsdl\\StructType\Change_Personal_Information_DataType $personal_Information_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $personal_Information_Change_Event_Reference = null, \WorkdayWsdl\\StructType\Change_Personal_Information_DataType $personal_Information_Data = null, $version = null)
    {
        $this
            ->setPersonal_Information_Change_Event_Reference($personal_Information_Change_Event_Reference)
            ->setPersonal_Information_Data($personal_Information_Data)
            ->setVersion($version);
    }
    /**
     * Get Personal_Information_Change_Event_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getPersonal_Information_Change_Event_Reference()
    {
        return $this->Personal_Information_Change_Event_Reference;
    }
    /**
     * Set Personal_Information_Change_Event_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $personal_Information_Change_Event_Reference
     * @return \WorkdayWsdl\\StructType\Change_Personal_Information_ResponseType
     */
    public function setPersonal_Information_Change_Event_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $personal_Information_Change_Event_Reference = null)
    {
        $this->Personal_Information_Change_Event_Reference = $personal_Information_Change_Event_Reference;
        return $this;
    }
    /**
     * Get Personal_Information_Data value
     * @return \WorkdayWsdl\\StructType\Change_Personal_Information_DataType|null
     */
    public function getPersonal_Information_Data()
    {
        return $this->Personal_Information_Data;
    }
    /**
     * Set Personal_Information_Data value
     * @param \WorkdayWsdl\\StructType\Change_Personal_Information_DataType $personal_Information_Data
     * @return \WorkdayWsdl\\StructType\Change_Personal_Information_ResponseType
     */
    public function setPersonal_Information_Data(\WorkdayWsdl\\StructType\Change_Personal_Information_DataType $personal_Information_Data = null)
    {
        $this->Personal_Information_Data = $personal_Information_Data;
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
     * @return \WorkdayWsdl\\StructType\Change_Personal_Information_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Change_Personal_Information_ResponseType
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
