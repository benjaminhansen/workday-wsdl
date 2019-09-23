<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Citizenship_Status_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: A valid instance of Citizenship Status must exist for the given value of Citizenship Status Description and Country Reference. | Reference element representing a unique instance of Citizenship Status.
 * @subpackage Structs
 */
class Citizenship_Status_ReferenceType extends AbstractStructBase
{
    /**
     * The Citizenship_Status_Description
     * Meta information extracted from the WSDL
     * - documentation: Along with Country Reference, unique attribute name/description identifying a valid instance of Citizenship Status.
     * - maxOccurs: 1
     * @var string
     */
    public $Citizenship_Status_Description;
    /**
     * The Country_Reference
     * @var \StructType\Country_ReferenceType
     */
    public $Country_Reference;
    /**
     * Constructor method for Citizenship_Status_ReferenceType
     * @uses Citizenship_Status_ReferenceType::setCitizenship_Status_Description()
     * @uses Citizenship_Status_ReferenceType::setCountry_Reference()
     * @param string $citizenship_Status_Description
     * @param \StructType\Country_ReferenceType $country_Reference
     */
    public function __construct($citizenship_Status_Description = null, \StructType\Country_ReferenceType $country_Reference = null)
    {
        $this
            ->setCitizenship_Status_Description($citizenship_Status_Description)
            ->setCountry_Reference($country_Reference);
    }
    /**
     * Get Citizenship_Status_Description value
     * @return string|null
     */
    public function getCitizenship_Status_Description()
    {
        return $this->Citizenship_Status_Description;
    }
    /**
     * Set Citizenship_Status_Description value
     * @param string $citizenship_Status_Description
     * @return \StructType\Citizenship_Status_ReferenceType
     */
    public function setCitizenship_Status_Description($citizenship_Status_Description = null)
    {
        // validation for constraint: string
        if (!is_null($citizenship_Status_Description) && !is_string($citizenship_Status_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($citizenship_Status_Description, true), gettype($citizenship_Status_Description)), __LINE__);
        }
        $this->Citizenship_Status_Description = $citizenship_Status_Description;
        return $this;
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
     * @return \StructType\Citizenship_Status_ReferenceType
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
     * @return \StructType\Citizenship_Status_ReferenceType
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
