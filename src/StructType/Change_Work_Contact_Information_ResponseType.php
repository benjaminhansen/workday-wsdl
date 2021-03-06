<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Work_Contact_Information_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Work Contact Change Event created by the corresponding request.
 * @subpackage Structs
 */
class Change_Work_Contact_Information_ResponseType extends AbstractStructBase
{
    /**
     * The Change_Work_Contact_Information_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Work Contact Change Event created by the corresponding request.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Change_Work_Contact_Information_Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Change_Work_Contact_Information_ResponseType
     * @uses Change_Work_Contact_Information_ResponseType::setChange_Work_Contact_Information_Event_Reference()
     * @uses Change_Work_Contact_Information_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $change_Work_Contact_Information_Event_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $change_Work_Contact_Information_Event_Reference = null, $version = null)
    {
        $this
            ->setChange_Work_Contact_Information_Event_Reference($change_Work_Contact_Information_Event_Reference)
            ->setVersion($version);
    }
    /**
     * Get Change_Work_Contact_Information_Event_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getChange_Work_Contact_Information_Event_Reference()
    {
        return $this->Change_Work_Contact_Information_Event_Reference;
    }
    /**
     * Set Change_Work_Contact_Information_Event_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $change_Work_Contact_Information_Event_Reference
     * @return \WorkdayWsdl\\StructType\Change_Work_Contact_Information_ResponseType
     */
    public function setChange_Work_Contact_Information_Event_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $change_Work_Contact_Information_Event_Reference = null)
    {
        $this->Change_Work_Contact_Information_Event_Reference = $change_Work_Contact_Information_Event_Reference;
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
     * @return \WorkdayWsdl\\StructType\Change_Work_Contact_Information_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Change_Work_Contact_Information_ResponseType
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
