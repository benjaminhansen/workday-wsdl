<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_Members_to_Custom_Organization_ResponseType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element, returning only the organization.
 * @subpackage Structs
 */
class Assign_Members_to_Custom_Organization_ResponseType extends AbstractStructBase
{
    /**
     * The Assign_Workers_to_Custom_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Returning custom organization.
     * - minOccurs: 0
     * @var \StructType\OrganizationObjectType
     */
    public $Assign_Workers_to_Custom_Organization_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Assign_Members_to_Custom_Organization_ResponseType
     * @uses Assign_Members_to_Custom_Organization_ResponseType::setAssign_Workers_to_Custom_Organization_Reference()
     * @uses Assign_Members_to_Custom_Organization_ResponseType::setVersion()
     * @param \StructType\OrganizationObjectType $assign_Workers_to_Custom_Organization_Reference
     * @param string $version
     */
    public function __construct(\StructType\OrganizationObjectType $assign_Workers_to_Custom_Organization_Reference = null, $version = null)
    {
        $this
            ->setAssign_Workers_to_Custom_Organization_Reference($assign_Workers_to_Custom_Organization_Reference)
            ->setVersion($version);
    }
    /**
     * Get Assign_Workers_to_Custom_Organization_Reference value
     * @return \StructType\OrganizationObjectType|null
     */
    public function getAssign_Workers_to_Custom_Organization_Reference()
    {
        return $this->Assign_Workers_to_Custom_Organization_Reference;
    }
    /**
     * Set Assign_Workers_to_Custom_Organization_Reference value
     * @param \StructType\OrganizationObjectType $assign_Workers_to_Custom_Organization_Reference
     * @return \StructType\Assign_Members_to_Custom_Organization_ResponseType
     */
    public function setAssign_Workers_to_Custom_Organization_Reference(\StructType\OrganizationObjectType $assign_Workers_to_Custom_Organization_Reference = null)
    {
        $this->Assign_Workers_to_Custom_Organization_Reference = $assign_Workers_to_Custom_Organization_Reference;
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
     * @return \StructType\Assign_Members_to_Custom_Organization_ResponseType
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
     * @return \StructType\Assign_Members_to_Custom_Organization_ResponseType
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
