<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Salary_Unit_Plan_Assignment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Unit Salary Plan Compensation data.
 * @subpackage Structs
 */
class Employee_Salary_Unit_Plan_Assignment_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unit salary plan to update or assign. Doesn't default for Request Compensation Change.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Salary_Unit_PlanObjectType
     */
    public $Compensation_Plan_Reference;
    /**
     * The Compensation_Element_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Compensation Element.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Compensation_Pay_EarningObjectType
     */
    public $Compensation_Element_Reference;
    /**
     * The Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Unit of Measure.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unit_of_MeasureObjectType
     */
    public $Unit_Reference;
    /**
     * The Per_Unit_Amount
     * Meta information extracted from the WSDL
     * - documentation: Amount per unit (based on Frequency).
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 26
     * @var float
     */
    public $Per_Unit_Amount;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Currency.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * The Number_of_Units
     * Meta information extracted from the WSDL
     * - documentation: Number of units to assign.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 21
     * @var float
     */
    public $Number_of_Units;
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Frequency.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\FrequencyObjectType
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
     * Constructor method for Employee_Salary_Unit_Plan_Assignment_DataType
     * @uses Employee_Salary_Unit_Plan_Assignment_DataType::setCompensation_Plan_Reference()
     * @uses Employee_Salary_Unit_Plan_Assignment_DataType::setCompensation_Element_Reference()
     * @uses Employee_Salary_Unit_Plan_Assignment_DataType::setUnit_Reference()
     * @uses Employee_Salary_Unit_Plan_Assignment_DataType::setPer_Unit_Amount()
     * @uses Employee_Salary_Unit_Plan_Assignment_DataType::setCurrency_Reference()
     * @uses Employee_Salary_Unit_Plan_Assignment_DataType::setNumber_of_Units()
     * @uses Employee_Salary_Unit_Plan_Assignment_DataType::setFrequency_Reference()
     * @uses Employee_Salary_Unit_Plan_Assignment_DataType::setAssignment_Effective_Date()
     * @param \WorkdayWsdl\\StructType\Salary_Unit_PlanObjectType $compensation_Plan_Reference
     * @param \WorkdayWsdl\\StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference
     * @param \WorkdayWsdl\\StructType\Unit_of_MeasureObjectType $unit_Reference
     * @param float $per_Unit_Amount
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference
     * @param float $number_of_Units
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference
     * @param string $assignment_Effective_Date
     */
    public function __construct(\WorkdayWsdl\\StructType\Salary_Unit_PlanObjectType $compensation_Plan_Reference = null, \WorkdayWsdl\\StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference = null, \WorkdayWsdl\\StructType\Unit_of_MeasureObjectType $unit_Reference = null, $per_Unit_Amount = null, \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null, $number_of_Units = null, \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null, $assignment_Effective_Date = null)
    {
        $this
            ->setCompensation_Plan_Reference($compensation_Plan_Reference)
            ->setCompensation_Element_Reference($compensation_Element_Reference)
            ->setUnit_Reference($unit_Reference)
            ->setPer_Unit_Amount($per_Unit_Amount)
            ->setCurrency_Reference($currency_Reference)
            ->setNumber_of_Units($number_of_Units)
            ->setFrequency_Reference($frequency_Reference)
            ->setAssignment_Effective_Date($assignment_Effective_Date);
    }
    /**
     * Get Compensation_Plan_Reference value
     * @return \WorkdayWsdl\\StructType\Salary_Unit_PlanObjectType|null
     */
    public function getCompensation_Plan_Reference()
    {
        return $this->Compensation_Plan_Reference;
    }
    /**
     * Set Compensation_Plan_Reference value
     * @param \WorkdayWsdl\\StructType\Salary_Unit_PlanObjectType $compensation_Plan_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Salary_Unit_Plan_Assignment_DataType
     */
    public function setCompensation_Plan_Reference(\WorkdayWsdl\\StructType\Salary_Unit_PlanObjectType $compensation_Plan_Reference = null)
    {
        $this->Compensation_Plan_Reference = $compensation_Plan_Reference;
        return $this;
    }
    /**
     * Get Compensation_Element_Reference value
     * @return \WorkdayWsdl\\StructType\Compensation_Pay_EarningObjectType|null
     */
    public function getCompensation_Element_Reference()
    {
        return $this->Compensation_Element_Reference;
    }
    /**
     * Set Compensation_Element_Reference value
     * @param \WorkdayWsdl\\StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Salary_Unit_Plan_Assignment_DataType
     */
    public function setCompensation_Element_Reference(\WorkdayWsdl\\StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference = null)
    {
        $this->Compensation_Element_Reference = $compensation_Element_Reference;
        return $this;
    }
    /**
     * Get Unit_Reference value
     * @return \WorkdayWsdl\\StructType\Unit_of_MeasureObjectType|null
     */
    public function getUnit_Reference()
    {
        return $this->Unit_Reference;
    }
    /**
     * Set Unit_Reference value
     * @param \WorkdayWsdl\\StructType\Unit_of_MeasureObjectType $unit_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Salary_Unit_Plan_Assignment_DataType
     */
    public function setUnit_Reference(\WorkdayWsdl\\StructType\Unit_of_MeasureObjectType $unit_Reference = null)
    {
        $this->Unit_Reference = $unit_Reference;
        return $this;
    }
    /**
     * Get Per_Unit_Amount value
     * @return float|null
     */
    public function getPer_Unit_Amount()
    {
        return $this->Per_Unit_Amount;
    }
    /**
     * Set Per_Unit_Amount value
     * @param float $per_Unit_Amount
     * @return \WorkdayWsdl\\StructType\Employee_Salary_Unit_Plan_Assignment_DataType
     */
    public function setPer_Unit_Amount($per_Unit_Amount = null)
    {
        // validation for constraint: float
        if (!is_null($per_Unit_Amount) && !(is_float($per_Unit_Amount) || is_numeric($per_Unit_Amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($per_Unit_Amount, true), gettype($per_Unit_Amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($per_Unit_Amount) && mb_strlen(mb_substr($per_Unit_Amount, mb_strpos($per_Unit_Amount, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($per_Unit_Amount, true), mb_strlen(mb_substr($per_Unit_Amount, mb_strpos($per_Unit_Amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(26)
        if (!is_null($per_Unit_Amount) && mb_strlen(preg_replace('/(\D)/', '', $per_Unit_Amount)) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 26 digits, "%d" given', var_export($per_Unit_Amount, true), mb_strlen(preg_replace('/(\D)/', '', $per_Unit_Amount))), __LINE__);
        }
        $this->Per_Unit_Amount = $per_Unit_Amount;
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
     * @return \WorkdayWsdl\\StructType\Employee_Salary_Unit_Plan_Assignment_DataType
     */
    public function setCurrency_Reference(\WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
        return $this;
    }
    /**
     * Get Number_of_Units value
     * @return float|null
     */
    public function getNumber_of_Units()
    {
        return $this->Number_of_Units;
    }
    /**
     * Set Number_of_Units value
     * @param float $number_of_Units
     * @return \WorkdayWsdl\\StructType\Employee_Salary_Unit_Plan_Assignment_DataType
     */
    public function setNumber_of_Units($number_of_Units = null)
    {
        // validation for constraint: float
        if (!is_null($number_of_Units) && !(is_float($number_of_Units) || is_numeric($number_of_Units))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($number_of_Units, true), gettype($number_of_Units)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($number_of_Units) && mb_strlen(mb_substr($number_of_Units, mb_strpos($number_of_Units, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($number_of_Units, true), mb_strlen(mb_substr($number_of_Units, mb_strpos($number_of_Units, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($number_of_Units) && $number_of_Units < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($number_of_Units, true)), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($number_of_Units) && mb_strlen(preg_replace('/(\D)/', '', $number_of_Units)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($number_of_Units, true), mb_strlen(preg_replace('/(\D)/', '', $number_of_Units))), __LINE__);
        }
        $this->Number_of_Units = $number_of_Units;
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
     * @return \WorkdayWsdl\\StructType\Employee_Salary_Unit_Plan_Assignment_DataType
     */
    public function setFrequency_Reference(\WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\Employee_Salary_Unit_Plan_Assignment_DataType
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
     * @return \WorkdayWsdl\\StructType\Employee_Salary_Unit_Plan_Assignment_DataType
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
