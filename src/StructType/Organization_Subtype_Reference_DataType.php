<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Subtype_Reference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Organization Subtype.
 * @subpackage Structs
 */
class Organization_Subtype_Reference_DataType extends AbstractStructBase
{
    /**
     * The Organization_Subtype_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Organization Subtype must exist for the given value of Organization Subtype Name. | Unique attribute name/description identifying a valid instance of Organization Subtype.
     * - maxOccurs: 1
     * @var string
     */
    public $Organization_Subtype_Name;
    /**
     * Constructor method for Organization_Subtype_Reference_DataType
     * @uses Organization_Subtype_Reference_DataType::setOrganization_Subtype_Name()
     * @param string $organization_Subtype_Name
     */
    public function __construct($organization_Subtype_Name = null)
    {
        $this
            ->setOrganization_Subtype_Name($organization_Subtype_Name);
    }
    /**
     * Get Organization_Subtype_Name value
     * @return string|null
     */
    public function getOrganization_Subtype_Name()
    {
        return $this->Organization_Subtype_Name;
    }
    /**
     * Set Organization_Subtype_Name value
     * @param string $organization_Subtype_Name
     * @return \StructType\Organization_Subtype_Reference_DataType
     */
    public function setOrganization_Subtype_Name($organization_Subtype_Name = null)
    {
        // validation for constraint: string
        if (!is_null($organization_Subtype_Name) && !is_string($organization_Subtype_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_Subtype_Name, true), gettype($organization_Subtype_Name)), __LINE__);
        }
        $this->Organization_Subtype_Name = $organization_Subtype_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Subtype_Reference_DataType
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
