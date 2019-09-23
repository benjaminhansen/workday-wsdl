<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Gender_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Gender.
 * @subpackage Structs
 */
class Gender_ReferenceType extends AbstractStructBase
{
    /**
     * The Gender_Description
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Gender must exist for the given value of Gender Description. | Unique attribute name and description that identifies a valid instance of gender.
     * - maxOccurs: 1
     * @var string
     */
    public $Gender_Description;
    /**
     * Constructor method for Gender_ReferenceType
     * @uses Gender_ReferenceType::setGender_Description()
     * @param string $gender_Description
     */
    public function __construct($gender_Description = null)
    {
        $this
            ->setGender_Description($gender_Description);
    }
    /**
     * Get Gender_Description value
     * @return string|null
     */
    public function getGender_Description()
    {
        return $this->Gender_Description;
    }
    /**
     * Set Gender_Description value
     * @param string $gender_Description
     * @return \StructType\Gender_ReferenceType
     */
    public function setGender_Description($gender_Description = null)
    {
        // validation for constraint: string
        if (!is_null($gender_Description) && !is_string($gender_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gender_Description, true), gettype($gender_Description)), __LINE__);
        }
        $this->Gender_Description = $gender_Description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Gender_ReferenceType
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
