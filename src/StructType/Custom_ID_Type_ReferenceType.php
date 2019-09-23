<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Custom_ID_Type_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Custom ID Type.
 * @subpackage Structs
 */
class Custom_ID_Type_ReferenceType extends AbstractStructBase
{
    /**
     * The Custom_ID_Type_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Custom ID Type must exist for the given value of Custom ID Type Name. | Unique attribute name/description identifying a valid instance of Custom ID Type.
     * - maxOccurs: 1
     * @var string
     */
    public $Custom_ID_Type_Name;
    /**
     * Constructor method for Custom_ID_Type_ReferenceType
     * @uses Custom_ID_Type_ReferenceType::setCustom_ID_Type_Name()
     * @param string $custom_ID_Type_Name
     */
    public function __construct($custom_ID_Type_Name = null)
    {
        $this
            ->setCustom_ID_Type_Name($custom_ID_Type_Name);
    }
    /**
     * Get Custom_ID_Type_Name value
     * @return string|null
     */
    public function getCustom_ID_Type_Name()
    {
        return $this->Custom_ID_Type_Name;
    }
    /**
     * Set Custom_ID_Type_Name value
     * @param string $custom_ID_Type_Name
     * @return \StructType\Custom_ID_Type_ReferenceType
     */
    public function setCustom_ID_Type_Name($custom_ID_Type_Name = null)
    {
        // validation for constraint: string
        if (!is_null($custom_ID_Type_Name) && !is_string($custom_ID_Type_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custom_ID_Type_Name, true), gettype($custom_ID_Type_Name)), __LINE__);
        }
        $this->Custom_ID_Type_Name = $custom_ID_Type_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Custom_ID_Type_ReferenceType
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
