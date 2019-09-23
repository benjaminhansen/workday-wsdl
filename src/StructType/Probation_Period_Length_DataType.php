<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Probation_Period_Length_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Probation Period Length
 * @subpackage Structs
 */
class Probation_Period_Length_DataType extends AbstractStructBase
{
    /**
     * The Duration
     * Meta information extracted from the WSDL
     * - documentation: Duration
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 20
     * @var float
     */
    public $Duration;
    /**
     * The Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unit
     * @var \WorkdayWsdl\\StructType\Date_And_Time_UnitObjectType
     */
    public $Unit_Reference;
    /**
     * Constructor method for Probation_Period_Length_DataType
     * @uses Probation_Period_Length_DataType::setDuration()
     * @uses Probation_Period_Length_DataType::setUnit_Reference()
     * @param float $duration
     * @param \WorkdayWsdl\\StructType\Date_And_Time_UnitObjectType $unit_Reference
     */
    public function __construct($duration = null, \WorkdayWsdl\\StructType\Date_And_Time_UnitObjectType $unit_Reference = null)
    {
        $this
            ->setDuration($duration)
            ->setUnit_Reference($unit_Reference);
    }
    /**
     * Get Duration value
     * @return float|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param float $duration
     * @return \WorkdayWsdl\\StructType\Probation_Period_Length_DataType
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: float
        if (!is_null($duration) && !(is_float($duration) || is_numeric($duration))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($duration, true), gettype($duration)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($duration) && mb_strlen(mb_substr($duration, mb_strpos($duration, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($duration, true), mb_strlen(mb_substr($duration, mb_strpos($duration, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($duration) && $duration < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($duration, true)), __LINE__);
        }
        // validation for constraint: totalDigits(20)
        if (!is_null($duration) && mb_strlen(preg_replace('/(\D)/', '', $duration)) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 20 digits, "%d" given', var_export($duration, true), mb_strlen(preg_replace('/(\D)/', '', $duration))), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get Unit_Reference value
     * @return \WorkdayWsdl\\StructType\Date_And_Time_UnitObjectType|null
     */
    public function getUnit_Reference()
    {
        return $this->Unit_Reference;
    }
    /**
     * Set Unit_Reference value
     * @param \WorkdayWsdl\\StructType\Date_And_Time_UnitObjectType $unit_Reference
     * @return \WorkdayWsdl\\StructType\Probation_Period_Length_DataType
     */
    public function setUnit_Reference(\WorkdayWsdl\\StructType\Date_And_Time_UnitObjectType $unit_Reference = null)
    {
        $this->Unit_Reference = $unit_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Probation_Period_Length_DataType
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
