<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Military_Status_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: A valid instance of Military Status must exist for the given value of Military Status Name and Country Reference. | Reference element representing a unique instance of Military Status.
 * @subpackage Structs
 */
class Military_Status_ReferenceType extends AbstractStructBase
{
    /**
     * The Military_Status_Name
     * Meta information extracted from the WSDL
     * - documentation: Along with Country Reference, unique attribute name/description identifying a valid instance of Military Status.
     * - maxOccurs: 1
     * @var string
     */
    public $Military_Status_Name;
    /**
     * The Country_Reference
     * @var \StructType\Country_ReferenceType
     */
    public $Country_Reference;
    /**
     * Constructor method for Military_Status_ReferenceType
     * @uses Military_Status_ReferenceType::setMilitary_Status_Name()
     * @uses Military_Status_ReferenceType::setCountry_Reference()
     * @param string $military_Status_Name
     * @param \StructType\Country_ReferenceType $country_Reference
     */
    public function __construct($military_Status_Name = null, \StructType\Country_ReferenceType $country_Reference = null)
    {
        $this
            ->setMilitary_Status_Name($military_Status_Name)
            ->setCountry_Reference($country_Reference);
    }
    /**
     * Get Military_Status_Name value
     * @return string|null
     */
    public function getMilitary_Status_Name()
    {
        return $this->Military_Status_Name;
    }
    /**
     * Set Military_Status_Name value
     * @param string $military_Status_Name
     * @return \StructType\Military_Status_ReferenceType
     */
    public function setMilitary_Status_Name($military_Status_Name = null)
    {
        // validation for constraint: string
        if (!is_null($military_Status_Name) && !is_string($military_Status_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($military_Status_Name, true), gettype($military_Status_Name)), __LINE__);
        }
        $this->Military_Status_Name = $military_Status_Name;
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
     * @return \StructType\Military_Status_ReferenceType
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
     * @return \StructType\Military_Status_ReferenceType
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
