<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Unit_of_Measure_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Unit of Measure.
 * @subpackage Structs
 */
class Unit_of_Measure_ReferenceType extends AbstractStructBase
{
    /**
     * The Unit_of_Measure_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Unit of Measure must exist for the given value of Unit of Measure Name. | Unique attribute name/description identifying a valid instance of Unit of Measure.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Unit_of_Measure_Name;
    /**
     * Constructor method for Unit_of_Measure_ReferenceType
     * @uses Unit_of_Measure_ReferenceType::setUnit_of_Measure_Name()
     * @param string $unit_of_Measure_Name
     */
    public function __construct($unit_of_Measure_Name = null)
    {
        $this
            ->setUnit_of_Measure_Name($unit_of_Measure_Name);
    }
    /**
     * Get Unit_of_Measure_Name value
     * @return string|null
     */
    public function getUnit_of_Measure_Name()
    {
        return $this->Unit_of_Measure_Name;
    }
    /**
     * Set Unit_of_Measure_Name value
     * @param string $unit_of_Measure_Name
     * @return \WorkdayWsdl\\StructType\Unit_of_Measure_ReferenceType
     */
    public function setUnit_of_Measure_Name($unit_of_Measure_Name = null)
    {
        // validation for constraint: string
        if (!is_null($unit_of_Measure_Name) && !is_string($unit_of_Measure_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unit_of_Measure_Name, true), gettype($unit_of_Measure_Name)), __LINE__);
        }
        $this->Unit_of_Measure_Name = $unit_of_Measure_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Unit_of_Measure_ReferenceType
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
