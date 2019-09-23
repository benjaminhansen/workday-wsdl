<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Coverage_Level_Value_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the detailed insurance coverage level information for an election.
 * @subpackage Structs
 */
class Coverage_Level_Value_DataType extends AbstractStructBase
{
    /**
     * The Coverage_Level_Value
     * Meta information extracted from the WSDL
     * - documentation: The coverage amount selected for the election.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 21
     * @var float
     */
    public $Coverage_Level_Value;
    /**
     * The Buy_Up_Amount
     * Meta information extracted from the WSDL
     * - documentation: The buy up amount selected for the election.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 21
     * @var float
     */
    public $Buy_Up_Amount;
    /**
     * The Guarantee_Issue_Amount
     * Meta information extracted from the WSDL
     * - documentation: The guarantee issue amount for the election.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 21
     * @var float
     */
    public $Guarantee_Issue_Amount;
    /**
     * The Coverage_Level_Multiplier
     * Meta information extracted from the WSDL
     * - documentation: The coverage level multiplier (1x, 2x, etc.) selected for the election.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 5
     * @var float
     */
    public $Coverage_Level_Multiplier;
    /**
     * The Coverage_Level_Type
     * Meta information extracted from the WSDL
     * - documentation: The type of coverage level selected.
     * - maxOccurs: 1
     * @var string
     */
    public $Coverage_Level_Type;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the currency.
     * @var \StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * Constructor method for Coverage_Level_Value_DataType
     * @uses Coverage_Level_Value_DataType::setCoverage_Level_Value()
     * @uses Coverage_Level_Value_DataType::setBuy_Up_Amount()
     * @uses Coverage_Level_Value_DataType::setGuarantee_Issue_Amount()
     * @uses Coverage_Level_Value_DataType::setCoverage_Level_Multiplier()
     * @uses Coverage_Level_Value_DataType::setCoverage_Level_Type()
     * @uses Coverage_Level_Value_DataType::setCurrency_Reference()
     * @param float $coverage_Level_Value
     * @param float $buy_Up_Amount
     * @param float $guarantee_Issue_Amount
     * @param float $coverage_Level_Multiplier
     * @param string $coverage_Level_Type
     * @param \StructType\CurrencyObjectType $currency_Reference
     */
    public function __construct($coverage_Level_Value = null, $buy_Up_Amount = null, $guarantee_Issue_Amount = null, $coverage_Level_Multiplier = null, $coverage_Level_Type = null, \StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this
            ->setCoverage_Level_Value($coverage_Level_Value)
            ->setBuy_Up_Amount($buy_Up_Amount)
            ->setGuarantee_Issue_Amount($guarantee_Issue_Amount)
            ->setCoverage_Level_Multiplier($coverage_Level_Multiplier)
            ->setCoverage_Level_Type($coverage_Level_Type)
            ->setCurrency_Reference($currency_Reference);
    }
    /**
     * Get Coverage_Level_Value value
     * @return float|null
     */
    public function getCoverage_Level_Value()
    {
        return $this->Coverage_Level_Value;
    }
    /**
     * Set Coverage_Level_Value value
     * @param float $coverage_Level_Value
     * @return \StructType\Coverage_Level_Value_DataType
     */
    public function setCoverage_Level_Value($coverage_Level_Value = null)
    {
        // validation for constraint: float
        if (!is_null($coverage_Level_Value) && !(is_float($coverage_Level_Value) || is_numeric($coverage_Level_Value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($coverage_Level_Value, true), gettype($coverage_Level_Value)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($coverage_Level_Value) && mb_strlen(mb_substr($coverage_Level_Value, mb_strpos($coverage_Level_Value, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($coverage_Level_Value, true), mb_strlen(mb_substr($coverage_Level_Value, mb_strpos($coverage_Level_Value, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($coverage_Level_Value) && $coverage_Level_Value < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($coverage_Level_Value, true)), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($coverage_Level_Value) && mb_strlen(preg_replace('/(\D)/', '', $coverage_Level_Value)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($coverage_Level_Value, true), mb_strlen(preg_replace('/(\D)/', '', $coverage_Level_Value))), __LINE__);
        }
        $this->Coverage_Level_Value = $coverage_Level_Value;
        return $this;
    }
    /**
     * Get Buy_Up_Amount value
     * @return float|null
     */
    public function getBuy_Up_Amount()
    {
        return $this->Buy_Up_Amount;
    }
    /**
     * Set Buy_Up_Amount value
     * @param float $buy_Up_Amount
     * @return \StructType\Coverage_Level_Value_DataType
     */
    public function setBuy_Up_Amount($buy_Up_Amount = null)
    {
        // validation for constraint: float
        if (!is_null($buy_Up_Amount) && !(is_float($buy_Up_Amount) || is_numeric($buy_Up_Amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buy_Up_Amount, true), gettype($buy_Up_Amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($buy_Up_Amount) && mb_strlen(mb_substr($buy_Up_Amount, mb_strpos($buy_Up_Amount, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($buy_Up_Amount, true), mb_strlen(mb_substr($buy_Up_Amount, mb_strpos($buy_Up_Amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($buy_Up_Amount) && $buy_Up_Amount < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($buy_Up_Amount, true)), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($buy_Up_Amount) && mb_strlen(preg_replace('/(\D)/', '', $buy_Up_Amount)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($buy_Up_Amount, true), mb_strlen(preg_replace('/(\D)/', '', $buy_Up_Amount))), __LINE__);
        }
        $this->Buy_Up_Amount = $buy_Up_Amount;
        return $this;
    }
    /**
     * Get Guarantee_Issue_Amount value
     * @return float|null
     */
    public function getGuarantee_Issue_Amount()
    {
        return $this->Guarantee_Issue_Amount;
    }
    /**
     * Set Guarantee_Issue_Amount value
     * @param float $guarantee_Issue_Amount
     * @return \StructType\Coverage_Level_Value_DataType
     */
    public function setGuarantee_Issue_Amount($guarantee_Issue_Amount = null)
    {
        // validation for constraint: float
        if (!is_null($guarantee_Issue_Amount) && !(is_float($guarantee_Issue_Amount) || is_numeric($guarantee_Issue_Amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($guarantee_Issue_Amount, true), gettype($guarantee_Issue_Amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($guarantee_Issue_Amount) && mb_strlen(mb_substr($guarantee_Issue_Amount, mb_strpos($guarantee_Issue_Amount, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($guarantee_Issue_Amount, true), mb_strlen(mb_substr($guarantee_Issue_Amount, mb_strpos($guarantee_Issue_Amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($guarantee_Issue_Amount) && $guarantee_Issue_Amount < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($guarantee_Issue_Amount, true)), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($guarantee_Issue_Amount) && mb_strlen(preg_replace('/(\D)/', '', $guarantee_Issue_Amount)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($guarantee_Issue_Amount, true), mb_strlen(preg_replace('/(\D)/', '', $guarantee_Issue_Amount))), __LINE__);
        }
        $this->Guarantee_Issue_Amount = $guarantee_Issue_Amount;
        return $this;
    }
    /**
     * Get Coverage_Level_Multiplier value
     * @return float|null
     */
    public function getCoverage_Level_Multiplier()
    {
        return $this->Coverage_Level_Multiplier;
    }
    /**
     * Set Coverage_Level_Multiplier value
     * @param float $coverage_Level_Multiplier
     * @return \StructType\Coverage_Level_Value_DataType
     */
    public function setCoverage_Level_Multiplier($coverage_Level_Multiplier = null)
    {
        // validation for constraint: float
        if (!is_null($coverage_Level_Multiplier) && !(is_float($coverage_Level_Multiplier) || is_numeric($coverage_Level_Multiplier))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($coverage_Level_Multiplier, true), gettype($coverage_Level_Multiplier)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($coverage_Level_Multiplier) && mb_strlen(mb_substr($coverage_Level_Multiplier, mb_strpos($coverage_Level_Multiplier, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($coverage_Level_Multiplier, true), mb_strlen(mb_substr($coverage_Level_Multiplier, mb_strpos($coverage_Level_Multiplier, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($coverage_Level_Multiplier) && $coverage_Level_Multiplier < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($coverage_Level_Multiplier, true)), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($coverage_Level_Multiplier) && mb_strlen(preg_replace('/(\D)/', '', $coverage_Level_Multiplier)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($coverage_Level_Multiplier, true), mb_strlen(preg_replace('/(\D)/', '', $coverage_Level_Multiplier))), __LINE__);
        }
        $this->Coverage_Level_Multiplier = $coverage_Level_Multiplier;
        return $this;
    }
    /**
     * Get Coverage_Level_Type value
     * @return string|null
     */
    public function getCoverage_Level_Type()
    {
        return $this->Coverage_Level_Type;
    }
    /**
     * Set Coverage_Level_Type value
     * @param string $coverage_Level_Type
     * @return \StructType\Coverage_Level_Value_DataType
     */
    public function setCoverage_Level_Type($coverage_Level_Type = null)
    {
        // validation for constraint: string
        if (!is_null($coverage_Level_Type) && !is_string($coverage_Level_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coverage_Level_Type, true), gettype($coverage_Level_Type)), __LINE__);
        }
        $this->Coverage_Level_Type = $coverage_Level_Type;
        return $this;
    }
    /**
     * Get Currency_Reference value
     * @return \StructType\CurrencyObjectType|null
     */
    public function getCurrency_Reference()
    {
        return $this->Currency_Reference;
    }
    /**
     * Set Currency_Reference value
     * @param \StructType\CurrencyObjectType $currency_Reference
     * @return \StructType\Coverage_Level_Value_DataType
     */
    public function setCurrency_Reference(\StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Coverage_Level_Value_DataType
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
