<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Compensatable_Summary_Amount_In_Target_Frequency_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Data element containing summary compensation information for a worker converted to their pay group frequency.
 * @subpackage Structs
 */
class Compensatable_Summary_Amount_In_Target_Frequency_DataType extends AbstractStructBase
{
    /**
     * The Total_Base_Pay
     * Meta information extracted from the WSDL
     * - documentation: Total Base Pay (as stated for Frequency). | Amount representing the total base pay for the worker in the currency and frequency specified.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 26
     * @var float
     */
    public $Total_Base_Pay;
    /**
     * The Total_Salary_and_Allowances
     * Meta information extracted from the WSDL
     * - documentation: Amount representing the total salary and allowances for the worker in the currency and frequency specified.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 26
     * @var float
     */
    public $Total_Salary_and_Allowances;
    /**
     * The Primary_Compensation_Basis
     * Meta information extracted from the WSDL
     * - documentation: Amount representing the primary compensation basis for the worker in the currency and frequency specified.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 26
     * @var float
     */
    public $Primary_Compensation_Basis;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Currency.
     * - minOccurs: 0
     * @var \StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Frequency.
     * - minOccurs: 0
     * @var \StructType\FrequencyObjectType
     */
    public $Frequency_Reference;
    /**
     * Constructor method for Compensatable_Summary_Amount_In_Target_Frequency_DataType
     * @uses Compensatable_Summary_Amount_In_Target_Frequency_DataType::setTotal_Base_Pay()
     * @uses Compensatable_Summary_Amount_In_Target_Frequency_DataType::setTotal_Salary_and_Allowances()
     * @uses Compensatable_Summary_Amount_In_Target_Frequency_DataType::setPrimary_Compensation_Basis()
     * @uses Compensatable_Summary_Amount_In_Target_Frequency_DataType::setCurrency_Reference()
     * @uses Compensatable_Summary_Amount_In_Target_Frequency_DataType::setFrequency_Reference()
     * @param float $total_Base_Pay
     * @param float $total_Salary_and_Allowances
     * @param float $primary_Compensation_Basis
     * @param \StructType\CurrencyObjectType $currency_Reference
     * @param \StructType\FrequencyObjectType $frequency_Reference
     */
    public function __construct($total_Base_Pay = null, $total_Salary_and_Allowances = null, $primary_Compensation_Basis = null, \StructType\CurrencyObjectType $currency_Reference = null, \StructType\FrequencyObjectType $frequency_Reference = null)
    {
        $this
            ->setTotal_Base_Pay($total_Base_Pay)
            ->setTotal_Salary_and_Allowances($total_Salary_and_Allowances)
            ->setPrimary_Compensation_Basis($primary_Compensation_Basis)
            ->setCurrency_Reference($currency_Reference)
            ->setFrequency_Reference($frequency_Reference);
    }
    /**
     * Get Total_Base_Pay value
     * @return float|null
     */
    public function getTotal_Base_Pay()
    {
        return $this->Total_Base_Pay;
    }
    /**
     * Set Total_Base_Pay value
     * @param float $total_Base_Pay
     * @return \StructType\Compensatable_Summary_Amount_In_Target_Frequency_DataType
     */
    public function setTotal_Base_Pay($total_Base_Pay = null)
    {
        // validation for constraint: float
        if (!is_null($total_Base_Pay) && !(is_float($total_Base_Pay) || is_numeric($total_Base_Pay))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total_Base_Pay, true), gettype($total_Base_Pay)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($total_Base_Pay) && mb_strlen(mb_substr($total_Base_Pay, mb_strpos($total_Base_Pay, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($total_Base_Pay, true), mb_strlen(mb_substr($total_Base_Pay, mb_strpos($total_Base_Pay, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(26)
        if (!is_null($total_Base_Pay) && mb_strlen(preg_replace('/(\D)/', '', $total_Base_Pay)) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 26 digits, "%d" given', var_export($total_Base_Pay, true), mb_strlen(preg_replace('/(\D)/', '', $total_Base_Pay))), __LINE__);
        }
        $this->Total_Base_Pay = $total_Base_Pay;
        return $this;
    }
    /**
     * Get Total_Salary_and_Allowances value
     * @return float|null
     */
    public function getTotal_Salary_and_Allowances()
    {
        return $this->Total_Salary_and_Allowances;
    }
    /**
     * Set Total_Salary_and_Allowances value
     * @param float $total_Salary_and_Allowances
     * @return \StructType\Compensatable_Summary_Amount_In_Target_Frequency_DataType
     */
    public function setTotal_Salary_and_Allowances($total_Salary_and_Allowances = null)
    {
        // validation for constraint: float
        if (!is_null($total_Salary_and_Allowances) && !(is_float($total_Salary_and_Allowances) || is_numeric($total_Salary_and_Allowances))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($total_Salary_and_Allowances, true), gettype($total_Salary_and_Allowances)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($total_Salary_and_Allowances) && mb_strlen(mb_substr($total_Salary_and_Allowances, mb_strpos($total_Salary_and_Allowances, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($total_Salary_and_Allowances, true), mb_strlen(mb_substr($total_Salary_and_Allowances, mb_strpos($total_Salary_and_Allowances, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(26)
        if (!is_null($total_Salary_and_Allowances) && mb_strlen(preg_replace('/(\D)/', '', $total_Salary_and_Allowances)) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 26 digits, "%d" given', var_export($total_Salary_and_Allowances, true), mb_strlen(preg_replace('/(\D)/', '', $total_Salary_and_Allowances))), __LINE__);
        }
        $this->Total_Salary_and_Allowances = $total_Salary_and_Allowances;
        return $this;
    }
    /**
     * Get Primary_Compensation_Basis value
     * @return float|null
     */
    public function getPrimary_Compensation_Basis()
    {
        return $this->Primary_Compensation_Basis;
    }
    /**
     * Set Primary_Compensation_Basis value
     * @param float $primary_Compensation_Basis
     * @return \StructType\Compensatable_Summary_Amount_In_Target_Frequency_DataType
     */
    public function setPrimary_Compensation_Basis($primary_Compensation_Basis = null)
    {
        // validation for constraint: float
        if (!is_null($primary_Compensation_Basis) && !(is_float($primary_Compensation_Basis) || is_numeric($primary_Compensation_Basis))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($primary_Compensation_Basis, true), gettype($primary_Compensation_Basis)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($primary_Compensation_Basis) && mb_strlen(mb_substr($primary_Compensation_Basis, mb_strpos($primary_Compensation_Basis, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($primary_Compensation_Basis, true), mb_strlen(mb_substr($primary_Compensation_Basis, mb_strpos($primary_Compensation_Basis, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(26)
        if (!is_null($primary_Compensation_Basis) && mb_strlen(preg_replace('/(\D)/', '', $primary_Compensation_Basis)) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 26 digits, "%d" given', var_export($primary_Compensation_Basis, true), mb_strlen(preg_replace('/(\D)/', '', $primary_Compensation_Basis))), __LINE__);
        }
        $this->Primary_Compensation_Basis = $primary_Compensation_Basis;
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
     * @return \StructType\Compensatable_Summary_Amount_In_Target_Frequency_DataType
     */
    public function setCurrency_Reference(\StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
        return $this;
    }
    /**
     * Get Frequency_Reference value
     * @return \StructType\FrequencyObjectType|null
     */
    public function getFrequency_Reference()
    {
        return $this->Frequency_Reference;
    }
    /**
     * Set Frequency_Reference value
     * @param \StructType\FrequencyObjectType $frequency_Reference
     * @return \StructType\Compensatable_Summary_Amount_In_Target_Frequency_DataType
     */
    public function setFrequency_Reference(\StructType\FrequencyObjectType $frequency_Reference = null)
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
     * @return \StructType\Compensatable_Summary_Amount_In_Target_Frequency_DataType
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
