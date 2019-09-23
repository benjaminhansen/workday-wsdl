<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Add_UpdateType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the following elements to add (or update, if already existing) a new Organization into the Workday system. A new effective-dated organization name is automatically created if any attributes used for organization name are
 * different as of specified effective date.
 * @subpackage Structs
 */
class Organization_Add_UpdateType extends AbstractStructBase
{
    /**
     * The Organization_Data
     * @var \WorkdayWsdl\\StructType\Organization_DataType
     */
    public $Organization_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Organization_Add_UpdateType
     * @uses Organization_Add_UpdateType::setOrganization_Data()
     * @uses Organization_Add_UpdateType::setVersion()
     * @param \WorkdayWsdl\\StructType\Organization_DataType $organization_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Organization_DataType $organization_Data = null, $version = null)
    {
        $this
            ->setOrganization_Data($organization_Data)
            ->setVersion($version);
    }
    /**
     * Get Organization_Data value
     * @return \WorkdayWsdl\\StructType\Organization_DataType|null
     */
    public function getOrganization_Data()
    {
        return $this->Organization_Data;
    }
    /**
     * Set Organization_Data value
     * @param \WorkdayWsdl\\StructType\Organization_DataType $organization_Data
     * @return \WorkdayWsdl\\StructType\Organization_Add_UpdateType
     */
    public function setOrganization_Data(\WorkdayWsdl\\StructType\Organization_DataType $organization_Data = null)
    {
        $this->Organization_Data = $organization_Data;
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
     * @return \WorkdayWsdl\\StructType\Organization_Add_UpdateType
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
     * @return \WorkdayWsdl\\StructType\Organization_Add_UpdateType
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
