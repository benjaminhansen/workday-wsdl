<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_Members_to_Custom_Organization_RequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element having the organization, positions to be added/removed and the effective date.
 * @subpackage Structs
 */
class Assign_Members_to_Custom_Organization_RequestType extends AbstractStructBase
{
    /**
     * The Assign_Members_to_Custom_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Custom organization with options ‘Allow Organization Tasks’ = Yes and ‘Position Assignment Unique’ = No
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType
     */
    public $Assign_Members_to_Custom_Organization_Reference;
    /**
     * The Assign_Members_to_Custom_Organization_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_DataType
     */
    public $Assign_Members_to_Custom_Organization_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Assign_Members_to_Custom_Organization_RequestType
     * @uses Assign_Members_to_Custom_Organization_RequestType::setAssign_Members_to_Custom_Organization_Reference()
     * @uses Assign_Members_to_Custom_Organization_RequestType::setAssign_Members_to_Custom_Organization_Data()
     * @uses Assign_Members_to_Custom_Organization_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $assign_Members_to_Custom_Organization_Reference
     * @param \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_DataType $assign_Members_to_Custom_Organization_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\OrganizationObjectType $assign_Members_to_Custom_Organization_Reference = null, \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_DataType $assign_Members_to_Custom_Organization_Data = null, $version = null)
    {
        $this
            ->setAssign_Members_to_Custom_Organization_Reference($assign_Members_to_Custom_Organization_Reference)
            ->setAssign_Members_to_Custom_Organization_Data($assign_Members_to_Custom_Organization_Data)
            ->setVersion($version);
    }
    /**
     * Get Assign_Members_to_Custom_Organization_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType|null
     */
    public function getAssign_Members_to_Custom_Organization_Reference()
    {
        return $this->Assign_Members_to_Custom_Organization_Reference;
    }
    /**
     * Set Assign_Members_to_Custom_Organization_Reference value
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $assign_Members_to_Custom_Organization_Reference
     * @return \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_RequestType
     */
    public function setAssign_Members_to_Custom_Organization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $assign_Members_to_Custom_Organization_Reference = null)
    {
        $this->Assign_Members_to_Custom_Organization_Reference = $assign_Members_to_Custom_Organization_Reference;
        return $this;
    }
    /**
     * Get Assign_Members_to_Custom_Organization_Data value
     * @return \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_DataType|null
     */
    public function getAssign_Members_to_Custom_Organization_Data()
    {
        return $this->Assign_Members_to_Custom_Organization_Data;
    }
    /**
     * Set Assign_Members_to_Custom_Organization_Data value
     * @param \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_DataType $assign_Members_to_Custom_Organization_Data
     * @return \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_RequestType
     */
    public function setAssign_Members_to_Custom_Organization_Data(\WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_DataType $assign_Members_to_Custom_Organization_Data = null)
    {
        $this->Assign_Members_to_Custom_Organization_Data = $assign_Members_to_Custom_Organization_Data;
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
     * @return \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_RequestType
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
     * @return \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_RequestType
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
