<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Visa_Type_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Visa Type.
 * @subpackage Structs
 */
class Visa_Type_ReferenceType extends AbstractStructBase
{
    /**
     * The Visa_Type_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Visa Type must exist for the given value of Visa Type Name. | Unique attribute name/description identifying a valid instance of Visa Type (Identifier Type).
     * - maxOccurs: 1
     * @var string
     */
    public $Visa_Type_Name;
    /**
     * Constructor method for Visa_Type_ReferenceType
     * @uses Visa_Type_ReferenceType::setVisa_Type_Name()
     * @param string $visa_Type_Name
     */
    public function __construct($visa_Type_Name = null)
    {
        $this
            ->setVisa_Type_Name($visa_Type_Name);
    }
    /**
     * Get Visa_Type_Name value
     * @return string|null
     */
    public function getVisa_Type_Name()
    {
        return $this->Visa_Type_Name;
    }
    /**
     * Set Visa_Type_Name value
     * @param string $visa_Type_Name
     * @return \WorkdayWsdl\\StructType\Visa_Type_ReferenceType
     */
    public function setVisa_Type_Name($visa_Type_Name = null)
    {
        // validation for constraint: string
        if (!is_null($visa_Type_Name) && !is_string($visa_Type_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($visa_Type_Name, true), gettype($visa_Type_Name)), __LINE__);
        }
        $this->Visa_Type_Name = $visa_Type_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Visa_Type_ReferenceType
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
