<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Probation_Period_Review_LengthType StructType
 * Meta information extracted from the WSDL
 * - documentation: Probation Review Data
 * @subpackage Structs
 */
class Probation_Period_Review_LengthType extends AbstractStructBase
{
    /**
     * The Schedule
     * Meta information extracted from the WSDL
     * - documentation: Schedule
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 20
     * @var float
     */
    public $Schedule;
    /**
     * The Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unit Reference
     * @var \StructType\Date_And_Time_UnitObjectType
     */
    public $Unit_Reference;
    /**
     * Constructor method for Probation_Period_Review_LengthType
     * @uses Probation_Period_Review_LengthType::setSchedule()
     * @uses Probation_Period_Review_LengthType::setUnit_Reference()
     * @param float $schedule
     * @param \StructType\Date_And_Time_UnitObjectType $unit_Reference
     */
    public function __construct($schedule = null, \StructType\Date_And_Time_UnitObjectType $unit_Reference = null)
    {
        $this
            ->setSchedule($schedule)
            ->setUnit_Reference($unit_Reference);
    }
    /**
     * Get Schedule value
     * @return float|null
     */
    public function getSchedule()
    {
        return $this->Schedule;
    }
    /**
     * Set Schedule value
     * @param float $schedule
     * @return \StructType\Probation_Period_Review_LengthType
     */
    public function setSchedule($schedule = null)
    {
        // validation for constraint: float
        if (!is_null($schedule) && !(is_float($schedule) || is_numeric($schedule))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($schedule, true), gettype($schedule)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($schedule) && mb_strlen(mb_substr($schedule, mb_strpos($schedule, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($schedule, true), mb_strlen(mb_substr($schedule, mb_strpos($schedule, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($schedule) && $schedule < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($schedule, true)), __LINE__);
        }
        // validation for constraint: totalDigits(20)
        if (!is_null($schedule) && mb_strlen(preg_replace('/(\D)/', '', $schedule)) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 20 digits, "%d" given', var_export($schedule, true), mb_strlen(preg_replace('/(\D)/', '', $schedule))), __LINE__);
        }
        $this->Schedule = $schedule;
        return $this;
    }
    /**
     * Get Unit_Reference value
     * @return \StructType\Date_And_Time_UnitObjectType|null
     */
    public function getUnit_Reference()
    {
        return $this->Unit_Reference;
    }
    /**
     * Set Unit_Reference value
     * @param \StructType\Date_And_Time_UnitObjectType $unit_Reference
     * @return \StructType\Probation_Period_Review_LengthType
     */
    public function setUnit_Reference(\StructType\Date_And_Time_UnitObjectType $unit_Reference = null)
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
     * @return \StructType\Probation_Period_Review_LengthType
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
