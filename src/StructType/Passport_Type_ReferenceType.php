<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Passport_Type_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Passport ID Type.
 * @subpackage Structs
 */
class Passport_Type_ReferenceType extends AbstractStructBase
{
    /**
     * The Passport_Type_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Passport ID Type must exist for the given value of Passport ID Type Name. | Unique attribute name/description identifying a valid instance of Passport ID Type (Identifier Type).
     * - maxOccurs: 1
     * @var string
     */
    public $Passport_Type_Name;
    /**
     * Constructor method for Passport_Type_ReferenceType
     * @uses Passport_Type_ReferenceType::setPassport_Type_Name()
     * @param string $passport_Type_Name
     */
    public function __construct($passport_Type_Name = null)
    {
        $this
            ->setPassport_Type_Name($passport_Type_Name);
    }
    /**
     * Get Passport_Type_Name value
     * @return string|null
     */
    public function getPassport_Type_Name()
    {
        return $this->Passport_Type_Name;
    }
    /**
     * Set Passport_Type_Name value
     * @param string $passport_Type_Name
     * @return \StructType\Passport_Type_ReferenceType
     */
    public function setPassport_Type_Name($passport_Type_Name = null)
    {
        // validation for constraint: string
        if (!is_null($passport_Type_Name) && !is_string($passport_Type_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passport_Type_Name, true), gettype($passport_Type_Name)), __LINE__);
        }
        $this->Passport_Type_Name = $passport_Type_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Passport_Type_ReferenceType
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
