<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Period Salary Plan Compensation data.
 * @subpackage Structs
 */
class Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Element_Reference
     * Meta information extracted from the WSDL
     * - documentation: Compensation Plan Default Compensation Element for a Period Salary Plan.
     * - minOccurs: 0
     * @var \StructType\Compensation_Element_ReferenceType
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
     * - documentation: A unique identifier for the currency.
     * @var \StructType\Currency_Reference_DataType
     */
    public $Currency_Reference;
    /**
     * The Compensation_Multiplier
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
    public $Compensation_Multiplier;
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Frequency.
     * - minOccurs: 0
     * @var \StructType\Frequency_Reference_DataType
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
     * Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType
     * @uses Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType::setCompensation_Element_Reference()
     * @uses Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType::setCompensation_Period_Reference()
     * @uses Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType::setCurrency_Reference()
     * @uses Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType::setCompensation_Multiplier()
     * @uses Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType::setFrequency_Reference()
     * @uses Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType::setActual_End_Date()
     * @param \StructType\Compensation_Element_ReferenceType $compensation_Element_Reference
     * @param \StructType\Compensation_PeriodObjectType $compensation_Period_Reference
     * @param \StructType\Currency_Reference_DataType $currency_Reference
     * @param float $compensation_Multiplier
     * @param \StructType\Frequency_Reference_DataType $frequency_Reference
     * @param string $actual_End_Date
     */
    public function __construct(\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference = null, \StructType\Compensation_PeriodObjectType $compensation_Period_Reference = null, \StructType\Currency_Reference_DataType $currency_Reference = null, $compensation_Multiplier = null, \StructType\Frequency_Reference_DataType $frequency_Reference = null, $actual_End_Date = null)
    {
        $this
            ->setCompensation_Element_Reference($compensation_Element_Reference)
            ->setCompensation_Period_Reference($compensation_Period_Reference)
            ->setCurrency_Reference($currency_Reference)
            ->setCompensation_Multiplier($compensation_Multiplier)
            ->setFrequency_Reference($frequency_Reference)
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
     * @return \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType
     */
    public function setCompensation_Element_Reference(\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference = null)
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
     * @return \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType
     */
    public function setCompensation_Period_Reference(\StructType\Compensation_PeriodObjectType $compensation_Period_Reference = null)
    {
        $this->Compensation_Period_Reference = $compensation_Period_Reference;
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
     * @return \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType
     */
    public function setCurrency_Reference(\StructType\Currency_Reference_DataType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
        return $this;
    }
    /**
     * Get Compensation_Multiplier value
     * @return float|null
     */
    public function getCompensation_Multiplier()
    {
        return $this->Compensation_Multiplier;
    }
    /**
     * Set Compensation_Multiplier value
     * @param float $compensation_Multiplier
     * @return \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType
     */
    public function setCompensation_Multiplier($compensation_Multiplier = null)
    {
        // validation for constraint: float
        if (!is_null($compensation_Multiplier) && !(is_float($compensation_Multiplier) || is_numeric($compensation_Multiplier))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($compensation_Multiplier, true), gettype($compensation_Multiplier)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($compensation_Multiplier) && mb_strlen(mb_substr($compensation_Multiplier, mb_strpos($compensation_Multiplier, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($compensation_Multiplier, true), mb_strlen(mb_substr($compensation_Multiplier, mb_strpos($compensation_Multiplier, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($compensation_Multiplier) && $compensation_Multiplier < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($compensation_Multiplier, true)), __LINE__);
        }
        // validation for constraint: totalDigits(18)
        if (!is_null($compensation_Multiplier) && mb_strlen(preg_replace('/(\D)/', '', $compensation_Multiplier)) > 18) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 18 digits, "%d" given', var_export($compensation_Multiplier, true), mb_strlen(preg_replace('/(\D)/', '', $compensation_Multiplier))), __LINE__);
        }
        $this->Compensation_Multiplier = $compensation_Multiplier;
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
     * @return \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType
     */
    public function setFrequency_Reference(\StructType\Frequency_Reference_DataType $frequency_Reference = null)
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
     * @return \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType
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
     * @return \StructType\Employee_Compensation_Period_Salary_Plan_Assignment_Detail_DataType
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
