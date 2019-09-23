<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reactivate_Organization_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for the Reactivate Organization Web Service
 * @subpackage Structs
 */
class Reactivate_Organization_ResponseType extends AbstractStructBase
{
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Response with the Reactivated Organization reference
     * - minOccurs: 0
     * @var \StructType\OrganizationObjectType
     */
    public $Organization_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Reactivate_Organization_ResponseType
     * @uses Reactivate_Organization_ResponseType::setOrganization_Reference()
     * @uses Reactivate_Organization_ResponseType::setVersion()
     * @param \StructType\OrganizationObjectType $organization_Reference
     * @param string $version
     */
    public function __construct(\StructType\OrganizationObjectType $organization_Reference = null, $version = null)
    {
        $this
            ->setOrganization_Reference($organization_Reference)
            ->setVersion($version);
    }
    /**
     * Get Organization_Reference value
     * @return \StructType\OrganizationObjectType|null
     */
    public function getOrganization_Reference()
    {
        return $this->Organization_Reference;
    }
    /**
     * Set Organization_Reference value
     * @param \StructType\OrganizationObjectType $organization_Reference
     * @return \StructType\Reactivate_Organization_ResponseType
     */
    public function setOrganization_Reference(\StructType\OrganizationObjectType $organization_Reference = null)
    {
        $this->Organization_Reference = $organization_Reference;
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
     * @return \StructType\Reactivate_Organization_ResponseType
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
     * @return \StructType\Reactivate_Organization_ResponseType
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
