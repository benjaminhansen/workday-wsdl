<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Frequency_Reference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Frequency.
 * @subpackage Structs
 */
class Frequency_Reference_DataType extends AbstractStructBase
{
    /**
     * The Frequency_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Frequency must exist for the given value of Frequency Name. | Unique attribute name/description identifying a valid instance of Frequency.
     * - maxOccurs: 1
     * @var string
     */
    public $Frequency_Name;
    /**
     * Constructor method for Frequency_Reference_DataType
     * @uses Frequency_Reference_DataType::setFrequency_Name()
     * @param string $frequency_Name
     */
    public function __construct($frequency_Name = null)
    {
        $this
            ->setFrequency_Name($frequency_Name);
    }
    /**
     * Get Frequency_Name value
     * @return string|null
     */
    public function getFrequency_Name()
    {
        return $this->Frequency_Name;
    }
    /**
     * Set Frequency_Name value
     * @param string $frequency_Name
     * @return \StructType\Frequency_Reference_DataType
     */
    public function setFrequency_Name($frequency_Name = null)
    {
        // validation for constraint: string
        if (!is_null($frequency_Name) && !is_string($frequency_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequency_Name, true), gettype($frequency_Name)), __LINE__);
        }
        $this->Frequency_Name = $frequency_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Frequency_Reference_DataType
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
