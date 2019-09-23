<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Marital_Status_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: A valid instance of Marital Status must exist for the given value of Marital Status Description in a specific Location Context. The location context is derived from the person's location. | Reference element representing a unique
 * instance of Marital Status.
 * @subpackage Structs
 */
class Marital_Status_ReferenceType extends AbstractStructBase
{
    /**
     * The Marital_Status_Description
     * Meta information extracted from the WSDL
     * - documentation: Unique attribute name/description identifying a valid instance of Marital Status.
     * - maxOccurs: 1
     * @var string
     */
    public $Marital_Status_Description;
    /**
     * Constructor method for Marital_Status_ReferenceType
     * @uses Marital_Status_ReferenceType::setMarital_Status_Description()
     * @param string $marital_Status_Description
     */
    public function __construct($marital_Status_Description = null)
    {
        $this
            ->setMarital_Status_Description($marital_Status_Description);
    }
    /**
     * Get Marital_Status_Description value
     * @return string|null
     */
    public function getMarital_Status_Description()
    {
        return $this->Marital_Status_Description;
    }
    /**
     * Set Marital_Status_Description value
     * @param string $marital_Status_Description
     * @return \StructType\Marital_Status_ReferenceType
     */
    public function setMarital_Status_Description($marital_Status_Description = null)
    {
        // validation for constraint: string
        if (!is_null($marital_Status_Description) && !is_string($marital_Status_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marital_Status_Description, true), gettype($marital_Status_Description)), __LINE__);
        }
        $this->Marital_Status_Description = $marital_Status_Description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Marital_Status_ReferenceType
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
