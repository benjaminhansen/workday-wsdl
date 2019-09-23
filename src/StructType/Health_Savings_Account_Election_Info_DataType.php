<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Health_Savings_Account_Election_Info_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Benefit Plan Earnings Deduction Details Data
 * @subpackage Structs
 */
class Health_Savings_Account_Election_Info_DataType extends AbstractStructBase
{
    /**
     * The Coverage_Target_Name
     * Meta information extracted from the WSDL
     * - documentation: Whether Family or Employee is the target of the Health Savings Account.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Coverage_Target_Name;
    /**
     * The Maximum_Annual_Contribution_Amount
     * Meta information extracted from the WSDL
     * - documentation: The annual maximum amount total for employee and employer contribution in the Health Savings Account.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 26
     * @var float
     */
    public $Maximum_Annual_Contribution_Amount;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: The currency of the annual maximum amount for Health Savings Account.
     * - minOccurs: 0
     * @var \StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * Constructor method for Health_Savings_Account_Election_Info_DataType
     * @uses Health_Savings_Account_Election_Info_DataType::setCoverage_Target_Name()
     * @uses Health_Savings_Account_Election_Info_DataType::setMaximum_Annual_Contribution_Amount()
     * @uses Health_Savings_Account_Election_Info_DataType::setCurrency_Reference()
     * @param string $coverage_Target_Name
     * @param float $maximum_Annual_Contribution_Amount
     * @param \StructType\CurrencyObjectType $currency_Reference
     */
    public function __construct($coverage_Target_Name = null, $maximum_Annual_Contribution_Amount = null, \StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this
            ->setCoverage_Target_Name($coverage_Target_Name)
            ->setMaximum_Annual_Contribution_Amount($maximum_Annual_Contribution_Amount)
            ->setCurrency_Reference($currency_Reference);
    }
    /**
     * Get Coverage_Target_Name value
     * @return string|null
     */
    public function getCoverage_Target_Name()
    {
        return $this->Coverage_Target_Name;
    }
    /**
     * Set Coverage_Target_Name value
     * @param string $coverage_Target_Name
     * @return \StructType\Health_Savings_Account_Election_Info_DataType
     */
    public function setCoverage_Target_Name($coverage_Target_Name = null)
    {
        // validation for constraint: string
        if (!is_null($coverage_Target_Name) && !is_string($coverage_Target_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coverage_Target_Name, true), gettype($coverage_Target_Name)), __LINE__);
        }
        $this->Coverage_Target_Name = $coverage_Target_Name;
        return $this;
    }
    /**
     * Get Maximum_Annual_Contribution_Amount value
     * @return float|null
     */
    public function getMaximum_Annual_Contribution_Amount()
    {
        return $this->Maximum_Annual_Contribution_Amount;
    }
    /**
     * Set Maximum_Annual_Contribution_Amount value
     * @param float $maximum_Annual_Contribution_Amount
     * @return \StructType\Health_Savings_Account_Election_Info_DataType
     */
    public function setMaximum_Annual_Contribution_Amount($maximum_Annual_Contribution_Amount = null)
    {
        // validation for constraint: float
        if (!is_null($maximum_Annual_Contribution_Amount) && !(is_float($maximum_Annual_Contribution_Amount) || is_numeric($maximum_Annual_Contribution_Amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maximum_Annual_Contribution_Amount, true), gettype($maximum_Annual_Contribution_Amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($maximum_Annual_Contribution_Amount) && mb_strlen(mb_substr($maximum_Annual_Contribution_Amount, mb_strpos($maximum_Annual_Contribution_Amount, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($maximum_Annual_Contribution_Amount, true), mb_strlen(mb_substr($maximum_Annual_Contribution_Amount, mb_strpos($maximum_Annual_Contribution_Amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(26)
        if (!is_null($maximum_Annual_Contribution_Amount) && mb_strlen(preg_replace('/(\D)/', '', $maximum_Annual_Contribution_Amount)) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 26 digits, "%d" given', var_export($maximum_Annual_Contribution_Amount, true), mb_strlen(preg_replace('/(\D)/', '', $maximum_Annual_Contribution_Amount))), __LINE__);
        }
        $this->Maximum_Annual_Contribution_Amount = $maximum_Annual_Contribution_Amount;
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
     * @return \StructType\Health_Savings_Account_Election_Info_DataType
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
     * @return \StructType\Health_Savings_Account_Election_Info_DataType
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
