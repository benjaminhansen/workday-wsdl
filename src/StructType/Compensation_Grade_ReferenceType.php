<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compensation_Grade_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Compensation grade to assign. Required if you select a compensation package. Doesn't default for Request Compensation Change.
 * @subpackage Structs
 */
class Compensation_Grade_ReferenceType extends AbstractStructBase
{
    /**
     * The Compensation_Grade_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Compensation Grade must exist for the given value of Compensation Grade Name. | Unique attribute name/description identifying a valid instance of Compensation Grade.
     * - maxOccurs: 1
     * @var string
     */
    public $Compensation_Grade_Name;
    /**
     * Constructor method for Compensation_Grade_ReferenceType
     * @uses Compensation_Grade_ReferenceType::setCompensation_Grade_Name()
     * @param string $compensation_Grade_Name
     */
    public function __construct($compensation_Grade_Name = null)
    {
        $this
            ->setCompensation_Grade_Name($compensation_Grade_Name);
    }
    /**
     * Get Compensation_Grade_Name value
     * @return string|null
     */
    public function getCompensation_Grade_Name()
    {
        return $this->Compensation_Grade_Name;
    }
    /**
     * Set Compensation_Grade_Name value
     * @param string $compensation_Grade_Name
     * @return \StructType\Compensation_Grade_ReferenceType
     */
    public function setCompensation_Grade_Name($compensation_Grade_Name = null)
    {
        // validation for constraint: string
        if (!is_null($compensation_Grade_Name) && !is_string($compensation_Grade_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compensation_Grade_Name, true), gettype($compensation_Grade_Name)), __LINE__);
        }
        $this->Compensation_Grade_Name = $compensation_Grade_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Compensation_Grade_ReferenceType
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
