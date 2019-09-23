<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Establishment_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request Criteria
 * @subpackage Structs
 */
class Establishment_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Country for Establishments
     * @var \StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * Constructor method for Establishment_Request_CriteriaType
     * @uses Establishment_Request_CriteriaType::setCountry_Reference()
     * @param \StructType\CountryObjectType $country_Reference
     */
    public function __construct(\StructType\CountryObjectType $country_Reference = null)
    {
        $this
            ->setCountry_Reference($country_Reference);
    }
    /**
     * Get Country_Reference value
     * @return \StructType\CountryObjectType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \StructType\CountryObjectType $country_Reference
     * @return \StructType\Establishment_Request_CriteriaType
     */
    public function setCountry_Reference(\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Establishment_Request_CriteriaType
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
