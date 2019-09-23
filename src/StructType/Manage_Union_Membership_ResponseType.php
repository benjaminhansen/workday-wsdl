<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Manage_Union_Membership_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the response data for the Put Union member WS. Returns the Union Membership Event Reference info for the instance created.
 * @subpackage Structs
 */
class Manage_Union_Membership_ResponseType extends AbstractStructBase
{
    /**
     * The Union_Member_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains References for the Union Membership Event.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Union_Member_Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Manage_Union_Membership_ResponseType
     * @uses Manage_Union_Membership_ResponseType::setUnion_Member_Event_Reference()
     * @uses Manage_Union_Membership_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $union_Member_Event_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $union_Member_Event_Reference = null, $version = null)
    {
        $this
            ->setUnion_Member_Event_Reference($union_Member_Event_Reference)
            ->setVersion($version);
    }
    /**
     * Get Union_Member_Event_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getUnion_Member_Event_Reference()
    {
        return $this->Union_Member_Event_Reference;
    }
    /**
     * Set Union_Member_Event_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $union_Member_Event_Reference
     * @return \WorkdayWsdl\\StructType\Manage_Union_Membership_ResponseType
     */
    public function setUnion_Member_Event_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $union_Member_Event_Reference = null)
    {
        $this->Union_Member_Event_Reference = $union_Member_Event_Reference;
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
     * @return \WorkdayWsdl\\StructType\Manage_Union_Membership_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Manage_Union_Membership_ResponseType
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
