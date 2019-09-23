<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compensation_Element_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Compensation Element.
 * @subpackage Structs
 */
class Compensation_Element_ReferenceType extends AbstractStructBase
{
    /**
     * The Compensation_Element_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Compensation Element must exist for the given value of Compensation Element Name. | Unique attribute name/description identifying a valid instance of Compensation Element.
     * - maxOccurs: 1
     * @var string
     */
    public $Compensation_Element_Name;
    /**
     * Constructor method for Compensation_Element_ReferenceType
     * @uses Compensation_Element_ReferenceType::setCompensation_Element_Name()
     * @param string $compensation_Element_Name
     */
    public function __construct($compensation_Element_Name = null)
    {
        $this
            ->setCompensation_Element_Name($compensation_Element_Name);
    }
    /**
     * Get Compensation_Element_Name value
     * @return string|null
     */
    public function getCompensation_Element_Name()
    {
        return $this->Compensation_Element_Name;
    }
    /**
     * Set Compensation_Element_Name value
     * @param string $compensation_Element_Name
     * @return \WorkdayWsdl\\StructType\Compensation_Element_ReferenceType
     */
    public function setCompensation_Element_Name($compensation_Element_Name = null)
    {
        // validation for constraint: string
        if (!is_null($compensation_Element_Name) && !is_string($compensation_Element_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compensation_Element_Name, true), gettype($compensation_Element_Name)), __LINE__);
        }
        $this->Compensation_Element_Name = $compensation_Element_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Compensation_Element_ReferenceType
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
