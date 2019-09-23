<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Country_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Country ISO code. If the Country ISO code is specified, then this ISO code will be used to determine the Country Phone Code for (eliminate space between f and o) the phone. Pass this ISO code to distinguish between multiple countries
 * sharing the same Country Phone Code. (For example, 1 is the Country Phone Code that is shared by USA, Canada, Dominican Republic, Bermuda, Jamaica, and Puerto Rico.)
 * @subpackage Structs
 */
class Country_ReferenceType extends AbstractStructBase
{
    /**
     * The Country_ISO_Code
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Country must exist for the value of Country ISO Code. | ISO Code identifying the country where the naming rules for this name are defined. Workday provides the ability for a customer to specify an ISO Code at the
     * country level. Each customer can also define various rules around names, required fields for names, labels for name fields at the Country level.http://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
     * - maxOccurs: 1
     * @var string
     */
    public $Country_ISO_Code;
    /**
     * Constructor method for Country_ReferenceType
     * @uses Country_ReferenceType::setCountry_ISO_Code()
     * @param string $country_ISO_Code
     */
    public function __construct($country_ISO_Code = null)
    {
        $this
            ->setCountry_ISO_Code($country_ISO_Code);
    }
    /**
     * Get Country_ISO_Code value
     * @return string|null
     */
    public function getCountry_ISO_Code()
    {
        return $this->Country_ISO_Code;
    }
    /**
     * Set Country_ISO_Code value
     * @param string $country_ISO_Code
     * @return \WorkdayWsdl\\StructType\Country_ReferenceType
     */
    public function setCountry_ISO_Code($country_ISO_Code = null)
    {
        // validation for constraint: string
        if (!is_null($country_ISO_Code) && !is_string($country_ISO_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country_ISO_Code, true), gettype($country_ISO_Code)), __LINE__);
        }
        $this->Country_ISO_Code = $country_ISO_Code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Country_ReferenceType
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
