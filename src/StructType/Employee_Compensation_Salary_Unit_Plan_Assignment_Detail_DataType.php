<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Compensation Element Values for Unit Salary Plan data.
 * @subpackage Structs
 */
class Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Element_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Compensation_Element_ReferenceType
     */
    public $Compensation_Element_Reference;
    /**
     * The Unit_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unit_of_Measure_ReferenceType
     */
    public $Unit_Reference;
    /**
     * The Per_Unit_Amount
     * Meta information extracted from the WSDL
     * - documentation: Amount per unit (based on Frequency).
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - totalDigits: 26
     * @var float
     */
    public $Per_Unit_Amount;
    /**
     * The Currency_Reference
     * @var \WorkdayWsdl\\StructType\Currency_Reference_DataType
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
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Frequency_Reference_DataType
     */
    public $Frequency_Reference;
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
     * Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType
     * @uses Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType::setCompensation_Element_Reference()
     * @uses Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType::setUnit_Reference()
     * @uses Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType::setPer_Unit_Amount()
     * @uses Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType::setCurrency_Reference()
     * @uses Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType::setNumber_of_Units()
     * @uses Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType::setFrequency_Reference()
     * @uses Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType::setActual_End_Date()
     * @param \WorkdayWsdl\\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference
     * @param \WorkdayWsdl\\StructType\Unit_of_Measure_ReferenceType $unit_Reference
     * @param float $per_Unit_Amount
     * @param \WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference
     * @param float $number_of_Units
     * @param \WorkdayWsdl\\StructType\Frequency_Reference_DataType $frequency_Reference
     * @param string $actual_End_Date
     */
    public function __construct(\WorkdayWsdl\\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference = null, \WorkdayWsdl\\StructType\Unit_of_Measure_ReferenceType $unit_Reference = null, $per_Unit_Amount = null, \WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference = null, $number_of_Units = null, \WorkdayWsdl\\StructType\Frequency_Reference_DataType $frequency_Reference = null, $actual_End_Date = null)
    {
        $this
            ->setCompensation_Element_Reference($compensation_Element_Reference)
            ->setUnit_Reference($unit_Reference)
            ->setPer_Unit_Amount($per_Unit_Amount)
            ->setCurrency_Reference($currency_Reference)
            ->setNumber_of_Units($number_of_Units)
            ->setFrequency_Reference($frequency_Reference)
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType
     */
    public function setCompensation_Element_Reference(\WorkdayWsdl\\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference = null)
    {
        $this->Compensation_Element_Reference = $compensation_Element_Reference;
        return $this;
    }
    /**
     * Get Unit_Reference value
     * @return \WorkdayWsdl\\StructType\Unit_of_Measure_ReferenceType|null
     */
    public function getUnit_Reference()
    {
        return $this->Unit_Reference;
    }
    /**
     * Set Unit_Reference value
     * @param \WorkdayWsdl\\StructType\Unit_of_Measure_ReferenceType $unit_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType
     */
    public function setUnit_Reference(\WorkdayWsdl\\StructType\Unit_of_Measure_ReferenceType $unit_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType
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
     * @return \WorkdayWsdl\\StructType\Currency_Reference_DataType|null
     */
    public function getCurrency_Reference()
    {
        return $this->Currency_Reference;
    }
    /**
     * Set Currency_Reference value
     * @param \WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType
     */
    public function setCurrency_Reference(\WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType
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
     * @return \WorkdayWsdl\\StructType\Frequency_Reference_DataType|null
     */
    public function getFrequency_Reference()
    {
        return $this->Frequency_Reference;
    }
    /**
     * Set Frequency_Reference value
     * @param \WorkdayWsdl\\StructType\Frequency_Reference_DataType $frequency_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType
     */
    public function setFrequency_Reference(\WorkdayWsdl\\StructType\Frequency_Reference_DataType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Salary_Unit_Plan_Assignment_Detail_DataType
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
