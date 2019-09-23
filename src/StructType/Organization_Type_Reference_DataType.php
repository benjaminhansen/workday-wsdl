<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Type_Reference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Organization Type.
 * @subpackage Structs
 */
class Organization_Type_Reference_DataType extends AbstractStructBase
{
    /**
     * The Organization_Type_Name
     * Meta information extracted from the WSDL
     * - documentation: Unique attribute name/description identifying a valid instance of Organization Type.
     * - maxOccurs: 1
     * @var string
     */
    public $Organization_Type_Name;
    /**
     * Constructor method for Organization_Type_Reference_DataType
     * @uses Organization_Type_Reference_DataType::setOrganization_Type_Name()
     * @param string $organization_Type_Name
     */
    public function __construct($organization_Type_Name = null)
    {
        $this
            ->setOrganization_Type_Name($organization_Type_Name);
    }
    /**
     * Get Organization_Type_Name value
     * @return string|null
     */
    public function getOrganization_Type_Name()
    {
        return $this->Organization_Type_Name;
    }
    /**
     * Set Organization_Type_Name value
     * @param string $organization_Type_Name
     * @return \WorkdayWsdl\\StructType\Organization_Type_Reference_DataType
     */
    public function setOrganization_Type_Name($organization_Type_Name = null)
    {
        // validation for constraint: string
        if (!is_null($organization_Type_Name) && !is_string($organization_Type_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_Type_Name, true), gettype($organization_Type_Name)), __LINE__);
        }
        $this->Organization_Type_Name = $organization_Type_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_Type_Reference_DataType
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
