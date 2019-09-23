<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contribution_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the contribtion information for the spending account election.
 * @subpackage Structs
 */
class Contribution_DataType extends AbstractStructBase
{
    /**
     * The Contribution_Amount
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
    public $Contribution_Amount;
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the frequency.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\FrequencyObjectType
     */
    public $Frequency_Reference;
    /**
     * Constructor method for Contribution_DataType
     * @uses Contribution_DataType::setContribution_Amount()
     * @uses Contribution_DataType::setFrequency_Reference()
     * @param float $contribution_Amount
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference
     */
    public function __construct($contribution_Amount = null, \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null)
    {
        $this
            ->setContribution_Amount($contribution_Amount)
            ->setFrequency_Reference($frequency_Reference);
    }
    /**
     * Get Contribution_Amount value
     * @return float|null
     */
    public function getContribution_Amount()
    {
        return $this->Contribution_Amount;
    }
    /**
     * Set Contribution_Amount value
     * @param float $contribution_Amount
     * @return \WorkdayWsdl\\StructType\Contribution_DataType
     */
    public function setContribution_Amount($contribution_Amount = null)
    {
        // validation for constraint: float
        if (!is_null($contribution_Amount) && !(is_float($contribution_Amount) || is_numeric($contribution_Amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($contribution_Amount, true), gettype($contribution_Amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($contribution_Amount) && mb_strlen(mb_substr($contribution_Amount, mb_strpos($contribution_Amount, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($contribution_Amount, true), mb_strlen(mb_substr($contribution_Amount, mb_strpos($contribution_Amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($contribution_Amount) && $contribution_Amount < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($contribution_Amount, true)), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($contribution_Amount) && mb_strlen(preg_replace('/(\D)/', '', $contribution_Amount)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($contribution_Amount, true), mb_strlen(preg_replace('/(\D)/', '', $contribution_Amount))), __LINE__);
        }
        $this->Contribution_Amount = $contribution_Amount;
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
     * @return \WorkdayWsdl\\StructType\Contribution_DataType
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
     * @return \WorkdayWsdl\\StructType\Contribution_DataType
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
