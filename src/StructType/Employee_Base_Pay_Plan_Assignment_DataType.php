<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Base_Pay_Plan_Assignment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Salary or Hourly Plan Compensation data.
 * @subpackage Structs
 */
class Employee_Base_Pay_Plan_Assignment_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: Salary or hourly plan to update or assign. Doesn't default for Request Compensation Change.
     * - minOccurs: 0
     * @var \StructType\Salary_Pay_PlanObjectType
     */
    public $Compensation_Plan_Reference;
    /**
     * The Compensation_Element_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Compensation Element.
     * - minOccurs: 0
     * @var \StructType\Compensation_Pay_EarningObjectType
     */
    public $Compensation_Element_Reference;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Amount for Compensation Element. | The percentage allocated to the beneficiary. | Amount for the salary or hourly plan assignment. Required if the plan has no default amount. Decimal precision of the amount must match the currency.
     * Mutually exclusive from the percent. | Amount for the allowance plan. Decimal precision of the amount must match the currency. Required if amount allowance plan is entered and there is no default amount for the plan. Mutually exclusive from the
     * percent.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 26
     * @var float
     */
    public $Amount;
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
     * The Assignment_Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: The more recent of the effective date of this assignment or the FTE Change Date (if using).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Assignment_Effective_Date;
    /**
     * Constructor method for Employee_Base_Pay_Plan_Assignment_DataType
     * @uses Employee_Base_Pay_Plan_Assignment_DataType::setCompensation_Plan_Reference()
     * @uses Employee_Base_Pay_Plan_Assignment_DataType::setCompensation_Element_Reference()
     * @uses Employee_Base_Pay_Plan_Assignment_DataType::setAmount()
     * @uses Employee_Base_Pay_Plan_Assignment_DataType::setCurrency_Reference()
     * @uses Employee_Base_Pay_Plan_Assignment_DataType::setFrequency_Reference()
     * @uses Employee_Base_Pay_Plan_Assignment_DataType::setAssignment_Effective_Date()
     * @param \StructType\Salary_Pay_PlanObjectType $compensation_Plan_Reference
     * @param \StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference
     * @param float $amount
     * @param \StructType\CurrencyObjectType $currency_Reference
     * @param \StructType\FrequencyObjectType $frequency_Reference
     * @param string $assignment_Effective_Date
     */
    public function __construct(\StructType\Salary_Pay_PlanObjectType $compensation_Plan_Reference = null, \StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference = null, $amount = null, \StructType\CurrencyObjectType $currency_Reference = null, \StructType\FrequencyObjectType $frequency_Reference = null, $assignment_Effective_Date = null)
    {
        $this
            ->setCompensation_Plan_Reference($compensation_Plan_Reference)
            ->setCompensation_Element_Reference($compensation_Element_Reference)
            ->setAmount($amount)
            ->setCurrency_Reference($currency_Reference)
            ->setFrequency_Reference($frequency_Reference)
            ->setAssignment_Effective_Date($assignment_Effective_Date);
    }
    /**
     * Get Compensation_Plan_Reference value
     * @return \StructType\Salary_Pay_PlanObjectType|null
     */
    public function getCompensation_Plan_Reference()
    {
        return $this->Compensation_Plan_Reference;
    }
    /**
     * Set Compensation_Plan_Reference value
     * @param \StructType\Salary_Pay_PlanObjectType $compensation_Plan_Reference
     * @return \StructType\Employee_Base_Pay_Plan_Assignment_DataType
     */
    public function setCompensation_Plan_Reference(\StructType\Salary_Pay_PlanObjectType $compensation_Plan_Reference = null)
    {
        $this->Compensation_Plan_Reference = $compensation_Plan_Reference;
        return $this;
    }
    /**
     * Get Compensation_Element_Reference value
     * @return \StructType\Compensation_Pay_EarningObjectType|null
     */
    public function getCompensation_Element_Reference()
    {
        return $this->Compensation_Element_Reference;
    }
    /**
     * Set Compensation_Element_Reference value
     * @param \StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference
     * @return \StructType\Employee_Base_Pay_Plan_Assignment_DataType
     */
    public function setCompensation_Element_Reference(\StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference = null)
    {
        $this->Compensation_Element_Reference = $compensation_Element_Reference;
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
     * @return \StructType\Employee_Base_Pay_Plan_Assignment_DataType
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($amount) && mb_strlen(mb_substr($amount, mb_strpos($amount, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($amount, true), mb_strlen(mb_substr($amount, mb_strpos($amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(26)
        if (!is_null($amount) && mb_strlen(preg_replace('/(\D)/', '', $amount)) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 26 digits, "%d" given', var_export($amount, true), mb_strlen(preg_replace('/(\D)/', '', $amount))), __LINE__);
        }
        $this->Amount = $amount;
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
     * @return \StructType\Employee_Base_Pay_Plan_Assignment_DataType
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
     * @return \StructType\Employee_Base_Pay_Plan_Assignment_DataType
     */
    public function setFrequency_Reference(\StructType\FrequencyObjectType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
        return $this;
    }
    /**
     * Get Assignment_Effective_Date value
     * @return string|null
     */
    public function getAssignment_Effective_Date()
    {
        return $this->Assignment_Effective_Date;
    }
    /**
     * Set Assignment_Effective_Date value
     * @param string $assignment_Effective_Date
     * @return \StructType\Employee_Base_Pay_Plan_Assignment_DataType
     */
    public function setAssignment_Effective_Date($assignment_Effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($assignment_Effective_Date) && !is_string($assignment_Effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignment_Effective_Date, true), gettype($assignment_Effective_Date)), __LINE__);
        }
        $this->Assignment_Effective_Date = $assignment_Effective_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Employee_Base_Pay_Plan_Assignment_DataType
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
