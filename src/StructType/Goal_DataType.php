<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Goal_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the target contribution amount for the spending account election.
 * @subpackage Structs
 */
class Goal_DataType extends AbstractStructBase
{
    /**
     * The Goal_Amount
     * Meta information extracted from the WSDL
     * - documentation: The amount of the contribution.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 21
     * @var float
     */
    public $Goal_Amount;
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the frequency.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\FrequencyObjectType
     */
    public $Frequency_Reference;
    /**
     * Constructor method for Goal_DataType
     * @uses Goal_DataType::setGoal_Amount()
     * @uses Goal_DataType::setFrequency_Reference()
     * @param float $goal_Amount
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference
     */
    public function __construct($goal_Amount = null, \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null)
    {
        $this
            ->setGoal_Amount($goal_Amount)
            ->setFrequency_Reference($frequency_Reference);
    }
    /**
     * Get Goal_Amount value
     * @return float|null
     */
    public function getGoal_Amount()
    {
        return $this->Goal_Amount;
    }
    /**
     * Set Goal_Amount value
     * @param float $goal_Amount
     * @return \WorkdayWsdl\\StructType\Goal_DataType
     */
    public function setGoal_Amount($goal_Amount = null)
    {
        // validation for constraint: float
        if (!is_null($goal_Amount) && !(is_float($goal_Amount) || is_numeric($goal_Amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($goal_Amount, true), gettype($goal_Amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($goal_Amount) && mb_strlen(mb_substr($goal_Amount, mb_strpos($goal_Amount, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($goal_Amount, true), mb_strlen(mb_substr($goal_Amount, mb_strpos($goal_Amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($goal_Amount) && $goal_Amount < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($goal_Amount, true)), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($goal_Amount) && mb_strlen(preg_replace('/(\D)/', '', $goal_Amount)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($goal_Amount, true), mb_strlen(preg_replace('/(\D)/', '', $goal_Amount))), __LINE__);
        }
        $this->Goal_Amount = $goal_Amount;
        return $this;
    }
    /**
     * Get Frequency_Reference value
     * @return \WorkdayWsdl\\StructType\FrequencyObjectType|null
     */
    public function getFrequency_Reference()
    {
        return $this->Frequency_Reference;
    }
    /**
     * Set Frequency_Reference value
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference
     * @return \WorkdayWsdl\\StructType\Goal_DataType
     */
    public function setFrequency_Reference(\WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Goal_DataType
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
