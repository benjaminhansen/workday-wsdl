<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Country_Of_Birth_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Country of Birth.
 * @subpackage Structs
 */
class Country_Of_Birth_ReferenceType extends AbstractStructBase
{
    /**
     * The Country_Reference
     * @var \StructType\Country_ReferenceType
     */
    public $Country_Reference;
    /**
     * Constructor method for Country_Of_Birth_ReferenceType
     * @uses Country_Of_Birth_ReferenceType::setCountry_Reference()
     * @param \StructType\Country_ReferenceType $country_Reference
     */
    public function __construct(\StructType\Country_ReferenceType $country_Reference = null)
    {
        $this
            ->setCountry_Reference($country_Reference);
    }
    /**
     * Get Country_Reference value
     * @return \StructType\Country_ReferenceType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \StructType\Country_ReferenceType $country_Reference
     * @return \StructType\Country_Of_Birth_ReferenceType
     */
    public function setCountry_Reference(\StructType\Country_ReferenceType $country_Reference = null)
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
     * @return \StructType\Country_Of_Birth_ReferenceType
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
