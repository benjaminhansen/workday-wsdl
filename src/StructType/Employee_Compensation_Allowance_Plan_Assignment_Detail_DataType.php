<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Compensation Element Values for Allowance Plan data.
 * @subpackage Structs
 */
class Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Element_Reference
     * Meta information extracted from the WSDL
     * - documentation: The expected end date of the plan assignment.
     * - minOccurs: 0
     * @var \StructType\Compensation_Element_ReferenceType
     */
    public $Compensation_Element_Reference;
    /**
     * The Percent
     * Meta information extracted from the WSDL
     * - documentation: Percent for Compensation Element. | Percent for the allowance plan. Required if percent allowance plan is entered and there is no default percent for the plan. The amount will be calculated using this percent. Mutually exclusive from
     * the amount.
     * - base: xsd:decimal
     * - fractionDigits: 10
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 20
     * @var float
     */
    public $Percent;
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
     * @var \StructType\Currency_Reference_DataType
     */
    public $Currency_Reference;
    /**
     * The Frequency_Reference
     * @var \StructType\Frequency_Reference_DataType
     */
    public $Frequency_Reference;
    /**
     * The Expected_End_Date
     * Meta information extracted from the WSDL
     * - documentation: Expected End Date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expected_End_Date;
    /**
     * The Reimbursement_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Reimbursement Start Date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Reimbursement_Start_Date;
    /**
     * The Actual_End_Date
     * Meta information extracted from the WSDL
     * - documentation: Actual End Date for the plan assignment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Actual_End_Date;
    /**
     * Constructor method for
     * Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType
     * @uses Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType::setCompensation_Element_Reference()
     * @uses Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType::setPercent()
     * @uses Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType::setAmount()
     * @uses Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType::setCurrency_Reference()
     * @uses Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType::setFrequency_Reference()
     * @uses Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType::setExpected_End_Date()
     * @uses Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType::setReimbursement_Start_Date()
     * @uses Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType::setActual_End_Date()
     * @param \StructType\Compensation_Element_ReferenceType $compensation_Element_Reference
     * @param float $percent
     * @param float $amount
     * @param \StructType\Currency_Reference_DataType $currency_Reference
     * @param \StructType\Frequency_Reference_DataType $frequency_Reference
     * @param string $expected_End_Date
     * @param string $reimbursement_Start_Date
     * @param string $actual_End_Date
     */
    public function __construct(\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference = null, $percent = null, $amount = null, \StructType\Currency_Reference_DataType $currency_Reference = null, \StructType\Frequency_Reference_DataType $frequency_Reference = null, $expected_End_Date = null, $reimbursement_Start_Date = null, $actual_End_Date = null)
    {
        $this
            ->setCompensation_Element_Reference($compensation_Element_Reference)
            ->setPercent($percent)
            ->setAmount($amount)
            ->setCurrency_Reference($currency_Reference)
            ->setFrequency_Reference($frequency_Reference)
            ->setExpected_End_Date($expected_End_Date)
            ->setReimbursement_Start_Date($reimbursement_Start_Date)
            ->setActual_End_Date($actual_End_Date);
    }
    /**
     * Get Compensation_Element_Reference value
     * @return \StructType\Compensation_Element_ReferenceType|null
     */
    public function getCompensation_Element_Reference()
    {
        return $this->Compensation_Element_Reference;
    }
    /**
     * Set Compensation_Element_Reference value
     * @param \StructType\Compensation_Element_ReferenceType $compensation_Element_Reference
     * @return \StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType
     */
    public function setCompensation_Element_Reference(\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference = null)
    {
        $this->Compensation_Element_Reference = $compensation_Element_Reference;
        return $this;
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType
     */
    public function setPercent($percent = null)
    {
        // validation for constraint: float
        if (!is_null($percent) && !(is_float($percent) || is_numeric($percent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        // validation for constraint: fractionDigits(10)
        if (!is_null($percent) && mb_strlen(mb_substr($percent, mb_strpos($percent, '.') + 1)) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 10 fraction digits, %d given', var_export($percent, true), mb_strlen(mb_substr($percent, mb_strpos($percent, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($percent) && $percent < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($percent, true)), __LINE__);
        }
        // validation for constraint: totalDigits(20)
        if (!is_null($percent) && mb_strlen(preg_replace('/(\D)/', '', $percent)) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 20 digits, "%d" given', var_export($percent, true), mb_strlen(preg_replace('/(\D)/', '', $percent))), __LINE__);
        }
        $this->Percent = $percent;
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
     * @return \StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType
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
     * @return \StructType\Currency_Reference_DataType|null
     */
    public function getCurrency_Reference()
    {
        return $this->Currency_Reference;
    }
    /**
     * Set Currency_Reference value
     * @param \StructType\Currency_Reference_DataType $currency_Reference
     * @return \StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType
     */
    public function setCurrency_Reference(\StructType\Currency_Reference_DataType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
        return $this;
    }
    /**
     * Get Frequency_Reference value
     * @return \StructType\Frequency_Reference_DataType|null
     */
    public function getFrequency_Reference()
    {
        return $this->Frequency_Reference;
    }
    /**
     * Set Frequency_Reference value
     * @param \StructType\Frequency_Reference_DataType $frequency_Reference
     * @return \StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType
     */
    public function setFrequency_Reference(\StructType\Frequency_Reference_DataType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
        return $this;
    }
    /**
     * Get Expected_End_Date value
     * @return string|null
     */
    public function getExpected_End_Date()
    {
        return $this->Expected_End_Date;
    }
    /**
     * Set Expected_End_Date value
     * @param string $expected_End_Date
     * @return \StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType
     */
    public function setExpected_End_Date($expected_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($expected_End_Date) && !is_string($expected_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expected_End_Date, true), gettype($expected_End_Date)), __LINE__);
        }
        $this->Expected_End_Date = $expected_End_Date;
        return $this;
    }
    /**
     * Get Reimbursement_Start_Date value
     * @return string|null
     */
    public function getReimbursement_Start_Date()
    {
        return $this->Reimbursement_Start_Date;
    }
    /**
     * Set Reimbursement_Start_Date value
     * @param string $reimbursement_Start_Date
     * @return \StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType
     */
    public function setReimbursement_Start_Date($reimbursement_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($reimbursement_Start_Date) && !is_string($reimbursement_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reimbursement_Start_Date, true), gettype($reimbursement_Start_Date)), __LINE__);
        }
        $this->Reimbursement_Start_Date = $reimbursement_Start_Date;
        return $this;
    }
    /**
     * Get Actual_End_Date value
     * @return string|null
     */
    public function getActual_End_Date()
    {
        return $this->Actual_End_Date;
    }
    /**
     * Set Actual_End_Date value
     * @param string $actual_End_Date
     * @return \StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType
     */
    public function setActual_End_Date($actual_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($actual_End_Date) && !is_string($actual_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actual_End_Date, true), gettype($actual_End_Date)), __LINE__);
        }
        $this->Actual_End_Date = $actual_End_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Employee_Compensation_Allowance_Plan_Assignment_Detail_DataType
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
