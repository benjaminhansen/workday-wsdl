<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Country_Region_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Country Region specified in the Reference does not exist. | Reference element representing a unique instance of Country Region. Note that this is a multipart key of Region name and Country code.
 * @subpackage Structs
 */
class Country_Region_ReferenceType extends AbstractStructBase
{
    /**
     * The Country_Reference
     * @var \WorkdayWsdl\\StructType\Country_ReferenceType
     */
    public $Country_Reference;
    /**
     * The Country_Region_Name
     * Meta information extracted from the WSDL
     * - documentation: A name uniquely identifying a Country Region (a geographic or governmental subdivision).
     * - maxOccurs: 1
     * @var string
     */
    public $Country_Region_Name;
    /**
     * Constructor method for Country_Region_ReferenceType
     * @uses Country_Region_ReferenceType::setCountry_Reference()
     * @uses Country_Region_ReferenceType::setCountry_Region_Name()
     * @param \WorkdayWsdl\\StructType\Country_ReferenceType $country_Reference
     * @param string $country_Region_Name
     */
    public function __construct(\WorkdayWsdl\\StructType\Country_ReferenceType $country_Reference = null, $country_Region_Name = null)
    {
        $this
            ->setCountry_Reference($country_Reference)
            ->setCountry_Region_Name($country_Region_Name);
    }
    /**
     * Get Country_Reference value
     * @return \WorkdayWsdl\\StructType\Country_ReferenceType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \WorkdayWsdl\\StructType\Country_ReferenceType $country_Reference
     * @return \WorkdayWsdl\\StructType\Country_Region_ReferenceType
     */
    public function setCountry_Reference(\WorkdayWsdl\\StructType\Country_ReferenceType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get Country_Region_Name value
     * @return string|null
     */
    public function getCountry_Region_Name()
    {
        return $this->Country_Region_Name;
    }
    /**
     * Set Country_Region_Name value
     * @param string $country_Region_Name
     * @return \WorkdayWsdl\\StructType\Country_Region_ReferenceType
     */
    public function setCountry_Region_Name($country_Region_Name = null)
    {
        // validation for constraint: string
        if (!is_null($country_Region_Name) && !is_string($country_Region_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country_Region_Name, true), gettype($country_Region_Name)), __LINE__);
        }
        $this->Country_Region_Name = $country_Region_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Country_Region_ReferenceType
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
