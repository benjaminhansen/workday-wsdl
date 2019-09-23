<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compensation_Package_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Compensation Package to assign.
 * @subpackage Structs
 */
class Compensation_Package_ReferenceType extends AbstractStructBase
{
    /**
     * The Compensation_Package_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Compensation Package must exist for the given value of Compensation Package Name. | Unique attribute name/description identifying a valid instance of Compensation Package.
     * - maxOccurs: 1
     * @var string
     */
    public $Compensation_Package_Name;
    /**
     * Constructor method for Compensation_Package_ReferenceType
     * @uses Compensation_Package_ReferenceType::setCompensation_Package_Name()
     * @param string $compensation_Package_Name
     */
    public function __construct($compensation_Package_Name = null)
    {
        $this
            ->setCompensation_Package_Name($compensation_Package_Name);
    }
    /**
     * Get Compensation_Package_Name value
     * @return string|null
     */
    public function getCompensation_Package_Name()
    {
        return $this->Compensation_Package_Name;
    }
    /**
     * Set Compensation_Package_Name value
     * @param string $compensation_Package_Name
     * @return \WorkdayWsdl\\StructType\Compensation_Package_ReferenceType
     */
    public function setCompensation_Package_Name($compensation_Package_Name = null)
    {
        // validation for constraint: string
        if (!is_null($compensation_Package_Name) && !is_string($compensation_Package_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compensation_Package_Name, true), gettype($compensation_Package_Name)), __LINE__);
        }
        $this->Compensation_Package_Name = $compensation_Package_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Compensation_Package_ReferenceType
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
