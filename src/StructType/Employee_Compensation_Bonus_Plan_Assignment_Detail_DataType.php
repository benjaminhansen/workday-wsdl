<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Compensation Element Values for Bonus Plan data.
 * @subpackage Structs
 */
class Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Element_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Compensation_Element_ReferenceType
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
     * The Percentage
     * Meta information extracted from the WSDL
     * - documentation: Percent for Compensation Element.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 16
     * @var float
     */
    public $Percentage;
    /**
     * The Guaranteed_Minimum
     * Meta information extracted from the WSDL
     * - documentation: Guaranteed Minimum for Compensation Element.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Guaranteed_Minimum;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Currency_Reference_DataType
     */
    public $Currency_Reference;
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Frequency_Reference_DataType
     */
    public $Frequency_Reference;
    /**
     * The Percentage_Assigned
     * Meta information extracted from the WSDL
     * - documentation: Percentage Assigned for Compensation Element.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 12
     * @var float
     */
    public $Percentage_Assigned;
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
     * Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType
     * @uses Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType::setCompensation_Element_Reference()
     * @uses Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType::setAmount()
     * @uses Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType::setPercentage()
     * @uses Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType::setGuaranteed_Minimum()
     * @uses Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType::setCurrency_Reference()
     * @uses Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType::setFrequency_Reference()
     * @uses Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType::setPercentage_Assigned()
     * @uses Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType::setActual_End_Date()
     * @param \WorkdayWsdl\\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference
     * @param float $amount
     * @param float $percentage
     * @param bool $guaranteed_Minimum
     * @param \WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference
     * @param \WorkdayWsdl\\StructType\Frequency_Reference_DataType $frequency_Reference
     * @param float $percentage_Assigned
     * @param string $actual_End_Date
     */
    public function __construct(\WorkdayWsdl\\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference = null, $amount = null, $percentage = null, $guaranteed_Minimum = null, \WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference = null, \WorkdayWsdl\\StructType\Frequency_Reference_DataType $frequency_Reference = null, $percentage_Assigned = null, $actual_End_Date = null)
    {
        $this
            ->setCompensation_Element_Reference($compensation_Element_Reference)
            ->setAmount($amount)
            ->setPercentage($percentage)
            ->setGuaranteed_Minimum($guaranteed_Minimum)
            ->setCurrency_Reference($currency_Reference)
            ->setFrequency_Reference($frequency_Reference)
            ->setPercentage_Assigned($percentage_Assigned)
            ->setActual_End_Date($actual_End_Date);
    }
    /**
     * Get Compensation_Element_Reference value
     * @return \WorkdayWsdl\\StructType\Compensation_Element_ReferenceType|null
     */
    public function getCompensation_Element_Reference()
    {
        return $this->Compensation_Element_Reference;
    }
    /**
     * Set Compensation_Element_Reference value
     * @param \WorkdayWsdl\\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType
     */
    public function setCompensation_Element_Reference(\WorkdayWsdl\\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType
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
     * Get Percentage value
     * @return float|null
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param float $percentage
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType
     */
    public function setPercentage($percentage = null)
    {
        // validation for constraint: float
        if (!is_null($percentage) && !(is_float($percentage) || is_numeric($percentage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentage, true), gettype($percentage)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($percentage) && mb_strlen(mb_substr($percentage, mb_strpos($percentage, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($percentage, true), mb_strlen(mb_substr($percentage, mb_strpos($percentage, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($percentage) && $percentage < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($percentage, true)), __LINE__);
        }
        // validation for constraint: totalDigits(16)
        if (!is_null($percentage) && mb_strlen(preg_replace('/(\D)/', '', $percentage)) > 16) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 16 digits, "%d" given', var_export($percentage, true), mb_strlen(preg_replace('/(\D)/', '', $percentage))), __LINE__);
        }
        $this->Percentage = $percentage;
        return $this;
    }
    /**
     * Get Guaranteed_Minimum value
     * @return bool|null
     */
    public function getGuaranteed_Minimum()
    {
        return $this->Guaranteed_Minimum;
    }
    /**
     * Set Guaranteed_Minimum value
     * @param bool $guaranteed_Minimum
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType
     */
    public function setGuaranteed_Minimum($guaranteed_Minimum = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteed_Minimum) && !is_bool($guaranteed_Minimum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($guaranteed_Minimum, true), gettype($guaranteed_Minimum)), __LINE__);
        }
        $this->Guaranteed_Minimum = $guaranteed_Minimum;
        return $this;
    }
    /**
     * Get Currency_Reference value
     * @return \WorkdayWsdl\\StructType\Currency_Reference_DataType|null
     */
    public function getCurrency_Reference()
    {
        return $this->Currency_Reference;
    }
    /**
     * Set Currency_Reference value
     * @param \WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType
     */
    public function setCurrency_Reference(\WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
        return $this;
    }
    /**
     * Get Frequency_Reference value
     * @return \WorkdayWsdl\\StructType\Frequency_Reference_DataType|null
     */
    public function getFrequency_Reference()
    {
        return $this->Frequency_Reference;
    }
    /**
     * Set Frequency_Reference value
     * @param \WorkdayWsdl\\StructType\Frequency_Reference_DataType $frequency_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType
     */
    public function setFrequency_Reference(\WorkdayWsdl\\StructType\Frequency_Reference_DataType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
        return $this;
    }
    /**
     * Get Percentage_Assigned value
     * @return float|null
     */
    public function getPercentage_Assigned()
    {
        return $this->Percentage_Assigned;
    }
    /**
     * Set Percentage_Assigned value
     * @param float $percentage_Assigned
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType
     */
    public function setPercentage_Assigned($percentage_Assigned = null)
    {
        // validation for constraint: float
        if (!is_null($percentage_Assigned) && !(is_float($percentage_Assigned) || is_numeric($percentage_Assigned))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentage_Assigned, true), gettype($percentage_Assigned)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($percentage_Assigned) && mb_strlen(mb_substr($percentage_Assigned, mb_strpos($percentage_Assigned, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($percentage_Assigned, true), mb_strlen(mb_substr($percentage_Assigned, mb_strpos($percentage_Assigned, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($percentage_Assigned) && $percentage_Assigned < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($percentage_Assigned, true)), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($percentage_Assigned) && mb_strlen(preg_replace('/(\D)/', '', $percentage_Assigned)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($percentage_Assigned, true), mb_strlen(preg_replace('/(\D)/', '', $percentage_Assigned))), __LINE__);
        }
        $this->Percentage_Assigned = $percentage_Assigned;
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Bonus_Plan_Assignment_Detail_DataType
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
