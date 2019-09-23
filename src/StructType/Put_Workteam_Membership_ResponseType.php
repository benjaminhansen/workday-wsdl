<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Workteam_Membership_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response containing workteam membership reference.
 * @subpackage Structs
 */
class Put_Workteam_Membership_ResponseType extends AbstractStructBase
{
    /**
     * The Workteam_Membership_Reference
     * Meta information extracted from the WSDL
     * - documentation: Workteam membership reference.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkteamObjectType
     */
    public $Workteam_Membership_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Workteam_Membership_ResponseType
     * @uses Put_Workteam_Membership_ResponseType::setWorkteam_Membership_Reference()
     * @uses Put_Workteam_Membership_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\WorkteamObjectType $workteam_Membership_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\WorkteamObjectType $workteam_Membership_Reference = null, $version = null)
    {
        $this
            ->setWorkteam_Membership_Reference($workteam_Membership_Reference)
            ->setVersion($version);
    }
    /**
     * Get Workteam_Membership_Reference value
     * @return \WorkdayWsdl\\StructType\WorkteamObjectType|null
     */
    public function getWorkteam_Membership_Reference()
    {
        return $this->Workteam_Membership_Reference;
    }
    /**
     * Set Workteam_Membership_Reference value
     * @param \WorkdayWsdl\\StructType\WorkteamObjectType $workteam_Membership_Reference
     * @return \WorkdayWsdl\\StructType\Put_Workteam_Membership_ResponseType
     */
    public function setWorkteam_Membership_Reference(\WorkdayWsdl\\StructType\WorkteamObjectType $workteam_Membership_Reference = null)
    {
        $this->Workteam_Membership_Reference = $workteam_Membership_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Workteam_Membership_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Workteam_Membership_ResponseType
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
