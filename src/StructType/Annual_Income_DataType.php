<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Annual_Income_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Dependent's annual income
 * @subpackage Structs
 */
class Annual_Income_DataType extends AbstractStructBase
{
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: The Effective date for dependent's annual income
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Currency of dependent's income
     * @var \WorkdayWsdl\\StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * The Annual_Income
     * Meta information extracted from the WSDL
     * - documentation: Currency attribute specifying the dependent's annual income
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 11
     * @var float
     */
    public $Annual_Income;
    /**
     * Constructor method for Annual_Income_DataType
     * @uses Annual_Income_DataType::setEffective_Date()
     * @uses Annual_Income_DataType::setCurrency_Reference()
     * @uses Annual_Income_DataType::setAnnual_Income()
     * @param string $effective_Date
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference
     * @param float $annual_Income
     */
    public function __construct($effective_Date = null, \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null, $annual_Income = null)
    {
        $this
            ->setEffective_Date($effective_Date)
            ->setCurrency_Reference($currency_Reference)
            ->setAnnual_Income($annual_Income);
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \WorkdayWsdl\\StructType\Annual_Income_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Currency_Reference value
     * @return \WorkdayWsdl\\StructType\CurrencyObjectType|null
     */
    public function getCurrency_Reference()
    {
        return $this->Currency_Reference;
    }
    /**
     * Set Currency_Reference value
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference
     * @return \WorkdayWsdl\\StructType\Annual_Income_DataType
     */
    public function setCurrency_Reference(\WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
        return $this;
    }
    /**
     * Get Annual_Income value
     * @return float|null
     */
    public function getAnnual_Income()
    {
        return $this->Annual_Income;
    }
    /**
     * Set Annual_Income value
     * @param float $annual_Income
     * @return \WorkdayWsdl\\StructType\Annual_Income_DataType
     */
    public function setAnnual_Income($annual_Income = null)
    {
        // validation for constraint: float
        if (!is_null($annual_Income) && !(is_float($annual_Income) || is_numeric($annual_Income))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($annual_Income, true), gettype($annual_Income)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($annual_Income) && mb_strlen(mb_substr($annual_Income, mb_strpos($annual_Income, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($annual_Income, true), mb_strlen(mb_substr($annual_Income, mb_strpos($annual_Income, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($annual_Income) && $annual_Income < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($annual_Income, true)), __LINE__);
        }
        // validation for constraint: totalDigits(11)
        if (!is_null($annual_Income) && mb_strlen(preg_replace('/(\D)/', '', $annual_Income)) > 11) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 11 digits, "%d" given', var_export($annual_Income, true), mb_strlen(preg_replace('/(\D)/', '', $annual_Income))), __LINE__);
        }
        $this->Annual_Income = $annual_Income;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Annual_Income_DataType
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
