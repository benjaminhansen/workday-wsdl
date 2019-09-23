<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Visibility_Reference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Organization Visibility.
 * @subpackage Structs
 */
class Organization_Visibility_Reference_DataType extends AbstractStructBase
{
    /**
     * The Organization_Visibility_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Organization Visibility must exist for the given value of Organization Visibility Name. | Unique attribute name/description identifying a valid instance of Organization Visibility.
     * - maxOccurs: 1
     * @var string
     */
    public $Organization_Visibility_Name;
    /**
     * Constructor method for Organization_Visibility_Reference_DataType
     * @uses Organization_Visibility_Reference_DataType::setOrganization_Visibility_Name()
     * @param string $organization_Visibility_Name
     */
    public function __construct($organization_Visibility_Name = null)
    {
        $this
            ->setOrganization_Visibility_Name($organization_Visibility_Name);
    }
    /**
     * Get Organization_Visibility_Name value
     * @return string|null
     */
    public function getOrganization_Visibility_Name()
    {
        return $this->Organization_Visibility_Name;
    }
    /**
     * Set Organization_Visibility_Name value
     * @param string $organization_Visibility_Name
     * @return \StructType\Organization_Visibility_Reference_DataType
     */
    public function setOrganization_Visibility_Name($organization_Visibility_Name = null)
    {
        // validation for constraint: string
        if (!is_null($organization_Visibility_Name) && !is_string($organization_Visibility_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_Visibility_Name, true), gettype($organization_Visibility_Name)), __LINE__);
        }
        $this->Organization_Visibility_Name = $organization_Visibility_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Visibility_Reference_DataType
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
