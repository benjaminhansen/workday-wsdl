<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Period_Salary_Plan_Assignment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Period Salary Plan Compensation data.
 * @subpackage Structs
 */
class Employee_Period_Salary_Plan_Assignment_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: Period salary plan to update or assign. Does not default for Request Compensation Change.
     * - minOccurs: 0
     * @var \StructType\Period_Salary_PlanObjectType
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
     * The Compensation_Period_Reference
     * Meta information extracted from the WSDL
     * - documentation: Compensation period of time measure.
     * - minOccurs: 0
     * @var \StructType\Compensation_PeriodObjectType
     */
    public $Compensation_Period_Reference;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Currency.
     * - minOccurs: 0
     * @var \StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * The Compensation_Period_Multiplier
     * Meta information extracted from the WSDL
     * - documentation: The multiplier for a Period Salary Plan.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 18
     * @var float
     */
    public $Compensation_Period_Multiplier;
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
     * Constructor method for Employee_Period_Salary_Plan_Assignment_DataType
     * @uses Employee_Period_Salary_Plan_Assignment_DataType::setCompensation_Plan_Reference()
     * @uses Employee_Period_Salary_Plan_Assignment_DataType::setCompensation_Element_Reference()
     * @uses Employee_Period_Salary_Plan_Assignment_DataType::setCompensation_Period_Reference()
     * @uses Employee_Period_Salary_Plan_Assignment_DataType::setCurrency_Reference()
     * @uses Employee_Period_Salary_Plan_Assignment_DataType::setCompensation_Period_Multiplier()
     * @uses Employee_Period_Salary_Plan_Assignment_DataType::setFrequency_Reference()
     * @uses Employee_Period_Salary_Plan_Assignment_DataType::setAssignment_Effective_Date()
     * @param \StructType\Period_Salary_PlanObjectType $compensation_Plan_Reference
     * @param \StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference
     * @param \StructType\Compensation_PeriodObjectType $compensation_Period_Reference
     * @param \StructType\CurrencyObjectType $currency_Reference
     * @param float $compensation_Period_Multiplier
     * @param \StructType\FrequencyObjectType $frequency_Reference
     * @param string $assignment_Effective_Date
     */
    public function __construct(\StructType\Period_Salary_PlanObjectType $compensation_Plan_Reference = null, \StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference = null, \StructType\Compensation_PeriodObjectType $compensation_Period_Reference = null, \StructType\CurrencyObjectType $currency_Reference = null, $compensation_Period_Multiplier = null, \StructType\FrequencyObjectType $frequency_Reference = null, $assignment_Effective_Date = null)
    {
        $this
            ->setCompensation_Plan_Reference($compensation_Plan_Reference)
            ->setCompensation_Element_Reference($compensation_Element_Reference)
            ->setCompensation_Period_Reference($compensation_Period_Reference)
            ->setCurrency_Reference($currency_Reference)
            ->setCompensation_Period_Multiplier($compensation_Period_Multiplier)
            ->setFrequency_Reference($frequency_Reference)
            ->setAssignment_Effective_Date($assignment_Effective_Date);
    }
    /**
     * Get Compensation_Plan_Reference value
     * @return \StructType\Period_Salary_PlanObjectType|null
     */
    public function getCompensation_Plan_Reference()
    {
        return $this->Compensation_Plan_Reference;
    }
    /**
     * Set Compensation_Plan_Reference value
     * @param \StructType\Period_Salary_PlanObjectType $compensation_Plan_Reference
     * @return \StructType\Employee_Period_Salary_Plan_Assignment_DataType
     */
    public function setCompensation_Plan_Reference(\StructType\Period_Salary_PlanObjectType $compensation_Plan_Reference = null)
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
     * @return \StructType\Employee_Period_Salary_Plan_Assignment_DataType
     */
    public function setCompensation_Element_Reference(\StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference = null)
    {
        $this->Compensation_Element_Reference = $compensation_Element_Reference;
        return $this;
    }
    /**
     * Get Compensation_Period_Reference value
     * @return \StructType\Compensation_PeriodObjectType|null
     */
    public function getCompensation_Period_Reference()
    {
        return $this->Compensation_Period_Reference;
    }
    /**
     * Set Compensation_Period_Reference value
     * @param \StructType\Compensation_PeriodObjectType $compensation_Period_Reference
     * @return \StructType\Employee_Period_Salary_Plan_Assignment_DataType
     */
    public function setCompensation_Period_Reference(\StructType\Compensation_PeriodObjectType $compensation_Period_Reference = null)
    {
        $this->Compensation_Period_Reference = $compensation_Period_Reference;
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
     * @return \StructType\Employee_Period_Salary_Plan_Assignment_DataType
     */
    public function setCurrency_Reference(\StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
        return $this;
    }
    /**
     * Get Compensation_Period_Multiplier value
     * @return float|null
     */
    public function getCompensation_Period_Multiplier()
    {
        return $this->Compensation_Period_Multiplier;
    }
    /**
     * Set Compensation_Period_Multiplier value
     * @param float $compensation_Period_Multiplier
     * @return \StructType\Employee_Period_Salary_Plan_Assignment_DataType
     */
    public function setCompensation_Period_Multiplier($compensation_Period_Multiplier = null)
    {
        // validation for constraint: float
        if (!is_null($compensation_Period_Multiplier) && !(is_float($compensation_Period_Multiplier) || is_numeric($compensation_Period_Multiplier))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($compensation_Period_Multiplier, true), gettype($compensation_Period_Multiplier)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($compensation_Period_Multiplier) && mb_strlen(mb_substr($compensation_Period_Multiplier, mb_strpos($compensation_Period_Multiplier, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($compensation_Period_Multiplier, true), mb_strlen(mb_substr($compensation_Period_Multiplier, mb_strpos($compensation_Period_Multiplier, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($compensation_Period_Multiplier) && $compensation_Period_Multiplier < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($compensation_Period_Multiplier, true)), __LINE__);
        }
        // validation for constraint: totalDigits(18)
        if (!is_null($compensation_Period_Multiplier) && mb_strlen(preg_replace('/(\D)/', '', $compensation_Period_Multiplier)) > 18) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 18 digits, "%d" given', var_export($compensation_Period_Multiplier, true), mb_strlen(preg_replace('/(\D)/', '', $compensation_Period_Multiplier))), __LINE__);
        }
        $this->Compensation_Period_Multiplier = $compensation_Period_Multiplier;
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
     * @return \StructType\Employee_Period_Salary_Plan_Assignment_DataType
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
     * @return \StructType\Employee_Period_Salary_Plan_Assignment_DataType
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
     * @return \StructType\Employee_Period_Salary_Plan_Assignment_DataType
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
