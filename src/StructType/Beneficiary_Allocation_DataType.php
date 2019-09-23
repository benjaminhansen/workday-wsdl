<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Beneficiary_Allocation_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the detailed allocation amounts for the beneficiaries of the elected coverage.
 * @subpackage Structs
 */
class Beneficiary_Allocation_DataType extends AbstractStructBase
{
    /**
     * The Allocation_Type
     * Meta information extracted from the WSDL
     * - documentation: The type of allocation (primary or secondary).
     * - maxOccurs: 1
     * @var string
     */
    public $Allocation_Type;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Amount for Compensation Element. | The percentage allocated to the beneficiary. | Amount for the salary or hourly plan assignment. Required if the plan has no default amount. Decimal precision of the amount must match the currency.
     * Mutually exclusive from the percent. | Amount for the allowance plan. Decimal precision of the amount must match the currency. Required if amount allowance plan is entered and there is no default amount for the plan. Mutually exclusive from the
     * percent.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 5
     * @var float
     */
    public $Amount;
    /**
     * The Amount_Type
     * Meta information extracted from the WSDL
     * - documentation: The amount type for percentage.
     * - maxOccurs: 1
     * @var string
     */
    public $Amount_Type;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the currency.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * Constructor method for Beneficiary_Allocation_DataType
     * @uses Beneficiary_Allocation_DataType::setAllocation_Type()
     * @uses Beneficiary_Allocation_DataType::setAmount()
     * @uses Beneficiary_Allocation_DataType::setAmount_Type()
     * @uses Beneficiary_Allocation_DataType::setCurrency_Reference()
     * @param string $allocation_Type
     * @param float $amount
     * @param string $amount_Type
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference
     */
    public function __construct($allocation_Type = null, $amount = null, $amount_Type = null, \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this
            ->setAllocation_Type($allocation_Type)
            ->setAmount($amount)
            ->setAmount_Type($amount_Type)
            ->setCurrency_Reference($currency_Reference);
    }
    /**
     * Get Allocation_Type value
     * @return string|null
     */
    public function getAllocation_Type()
    {
        return $this->Allocation_Type;
    }
    /**
     * Set Allocation_Type value
     * @param string $allocation_Type
     * @return \WorkdayWsdl\\StructType\Beneficiary_Allocation_DataType
     */
    public function setAllocation_Type($allocation_Type = null)
    {
        // validation for constraint: string
        if (!is_null($allocation_Type) && !is_string($allocation_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allocation_Type, true), gettype($allocation_Type)), __LINE__);
        }
        $this->Allocation_Type = $allocation_Type;
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \WorkdayWsdl\\StructType\Beneficiary_Allocation_DataType
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($amount) && mb_strlen(mb_substr($amount, mb_strpos($amount, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($amount, true), mb_strlen(mb_substr($amount, mb_strpos($amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($amount) && $amount < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($amount, true)), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($amount) && mb_strlen(preg_replace('/(\D)/', '', $amount)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($amount, true), mb_strlen(preg_replace('/(\D)/', '', $amount))), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Amount_Type value
     * @return string|null
     */
    public function getAmount_Type()
    {
        return $this->Amount_Type;
    }
    /**
     * Set Amount_Type value
     * @param string $amount_Type
     * @return \WorkdayWsdl\\StructType\Beneficiary_Allocation_DataType
     */
    public function setAmount_Type($amount_Type = null)
    {
        // validation for constraint: string
        if (!is_null($amount_Type) && !is_string($amount_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount_Type, true), gettype($amount_Type)), __LINE__);
        }
        $this->Amount_Type = $amount_Type;
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
     * @return \WorkdayWsdl\\StructType\Beneficiary_Allocation_DataType
     */
    public function setCurrency_Reference(\WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\Beneficiary_Allocation_DataType
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
