<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Assignment_RestrictionsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Organization Assignment Restrictions Response Data
 * @subpackage Structs
 */
class Organization_Assignment_RestrictionsType extends AbstractStructBase
{
    /**
     * The Organization_Assignment_Restrictions_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Organization_Assignment_Restrictions_DataType
     */
    public $Organization_Assignment_Restrictions_Data;
    /**
     * Constructor method for Organization_Assignment_RestrictionsType
     * @uses Organization_Assignment_RestrictionsType::setOrganization_Assignment_Restrictions_Data()
     * @param \StructType\Organization_Assignment_Restrictions_DataType $organization_Assignment_Restrictions_Data
     */
    public function __construct(\StructType\Organization_Assignment_Restrictions_DataType $organization_Assignment_Restrictions_Data = null)
    {
        $this
            ->setOrganization_Assignment_Restrictions_Data($organization_Assignment_Restrictions_Data);
    }
    /**
     * Get Organization_Assignment_Restrictions_Data value
     * @return \StructType\Organization_Assignment_Restrictions_DataType|null
     */
    public function getOrganization_Assignment_Restrictions_Data()
    {
        return $this->Organization_Assignment_Restrictions_Data;
    }
    /**
     * Set Organization_Assignment_Restrictions_Data value
     * @param \StructType\Organization_Assignment_Restrictions_DataType $organization_Assignment_Restrictions_Data
     * @return \StructType\Organization_Assignment_RestrictionsType
     */
    public function setOrganization_Assignment_Restrictions_Data(\StructType\Organization_Assignment_Restrictions_DataType $organization_Assignment_Restrictions_Data = null)
    {
        $this->Organization_Assignment_Restrictions_Data = $organization_Assignment_Restrictions_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Assignment_RestrictionsType
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
