<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Organization_Reference_ID_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for Put Organization Reference ID
 * @subpackage Structs
 */
class Put_Organization_Reference_ID_ResponseType extends AbstractStructBase
{
    /**
     * The Organization_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Organization for which the Organization Reference ID information has been changed.
     * - minOccurs: 0
     * @var \StructType\OrganizationObjectType
     */
    public $Organization_ID_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Organization_Reference_ID_ResponseType
     * @uses Put_Organization_Reference_ID_ResponseType::setOrganization_ID_Reference()
     * @uses Put_Organization_Reference_ID_ResponseType::setVersion()
     * @param \StructType\OrganizationObjectType $organization_ID_Reference
     * @param string $version
     */
    public function __construct(\StructType\OrganizationObjectType $organization_ID_Reference = null, $version = null)
    {
        $this
            ->setOrganization_ID_Reference($organization_ID_Reference)
            ->setVersion($version);
    }
    /**
     * Get Organization_ID_Reference value
     * @return \StructType\OrganizationObjectType|null
     */
    public function getOrganization_ID_Reference()
    {
        return $this->Organization_ID_Reference;
    }
    /**
     * Set Organization_ID_Reference value
     * @param \StructType\OrganizationObjectType $organization_ID_Reference
     * @return \StructType\Put_Organization_Reference_ID_ResponseType
     */
    public function setOrganization_ID_Reference(\StructType\OrganizationObjectType $organization_ID_Reference = null)
    {
        $this->Organization_ID_Reference = $organization_ID_Reference;
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
     * @return \StructType\Put_Organization_Reference_ID_ResponseType
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
     * @return \StructType\Put_Organization_Reference_ID_ResponseType
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
