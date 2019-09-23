<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Workteam_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Put Workteam Response.
 * @subpackage Structs
 */
class Put_Workteam_ResponseType extends AbstractStructBase
{
    /**
     * The Workteam_Reference
     * Meta information extracted from the WSDL
     * - documentation: Workteam Class
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkteamObjectType
     */
    public $Workteam_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Workteam_ResponseType
     * @uses Put_Workteam_ResponseType::setWorkteam_Reference()
     * @uses Put_Workteam_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\WorkteamObjectType $workteam_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\WorkteamObjectType $workteam_Reference = null, $version = null)
    {
        $this
            ->setWorkteam_Reference($workteam_Reference)
            ->setVersion($version);
    }
    /**
     * Get Workteam_Reference value
     * @return \WorkdayWsdl\\StructType\WorkteamObjectType|null
     */
    public function getWorkteam_Reference()
    {
        return $this->Workteam_Reference;
    }
    /**
     * Set Workteam_Reference value
     * @param \WorkdayWsdl\\StructType\WorkteamObjectType $workteam_Reference
     * @return \WorkdayWsdl\\StructType\Put_Workteam_ResponseType
     */
    public function setWorkteam_Reference(\WorkdayWsdl\\StructType\WorkteamObjectType $workteam_Reference = null)
    {
        $this->Workteam_Reference = $workteam_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Workteam_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Workteam_ResponseType
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
