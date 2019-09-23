<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for License_Type_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of License ID Type.
 * @subpackage Structs
 */
class License_Type_ReferenceType extends AbstractStructBase
{
    /**
     * The License_Type_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of License ID Type must exist for the given value of License ID Type Name. | Unique attribute name/description identifying a valid instance of License ID Type (Identifier Type).
     * - maxOccurs: 1
     * @var string
     */
    public $License_Type_Name;
    /**
     * Constructor method for License_Type_ReferenceType
     * @uses License_Type_ReferenceType::setLicense_Type_Name()
     * @param string $license_Type_Name
     */
    public function __construct($license_Type_Name = null)
    {
        $this
            ->setLicense_Type_Name($license_Type_Name);
    }
    /**
     * Get License_Type_Name value
     * @return string|null
     */
    public function getLicense_Type_Name()
    {
        return $this->License_Type_Name;
    }
    /**
     * Set License_Type_Name value
     * @param string $license_Type_Name
     * @return \WorkdayWsdl\\StructType\License_Type_ReferenceType
     */
    public function setLicense_Type_Name($license_Type_Name = null)
    {
        // validation for constraint: string
        if (!is_null($license_Type_Name) && !is_string($license_Type_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($license_Type_Name, true), gettype($license_Type_Name)), __LINE__);
        }
        $this->License_Type_Name = $license_Type_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\License_Type_ReferenceType
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
