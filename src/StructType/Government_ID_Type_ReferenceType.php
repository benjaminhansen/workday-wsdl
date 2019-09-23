<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Government_ID_Type_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Government ID Type.
 * @subpackage Structs
 */
class Government_ID_Type_ReferenceType extends AbstractStructBase
{
    /**
     * The Government_ID_Type_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Government ID Type (or National ID Type) must exist for the given value of Government ID Type Name. | Unique attribute name/description identifying a valid instance of Government ID Type.
     * - maxOccurs: 1
     * @var string
     */
    public $Government_ID_Type_Name;
    /**
     * Constructor method for Government_ID_Type_ReferenceType
     * @uses Government_ID_Type_ReferenceType::setGovernment_ID_Type_Name()
     * @param string $government_ID_Type_Name
     */
    public function __construct($government_ID_Type_Name = null)
    {
        $this
            ->setGovernment_ID_Type_Name($government_ID_Type_Name);
    }
    /**
     * Get Government_ID_Type_Name value
     * @return string|null
     */
    public function getGovernment_ID_Type_Name()
    {
        return $this->Government_ID_Type_Name;
    }
    /**
     * Set Government_ID_Type_Name value
     * @param string $government_ID_Type_Name
     * @return \WorkdayWsdl\\StructType\Government_ID_Type_ReferenceType
     */
    public function setGovernment_ID_Type_Name($government_ID_Type_Name = null)
    {
        // validation for constraint: string
        if (!is_null($government_ID_Type_Name) && !is_string($government_ID_Type_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($government_ID_Type_Name, true), gettype($government_ID_Type_Name)), __LINE__);
        }
        $this->Government_ID_Type_Name = $government_ID_Type_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Government_ID_Type_ReferenceType
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
