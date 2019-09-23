<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Employee_Compensation_Salary_Plan_Assignment_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Compensation Element Values for Base Pay data.
 * @subpackage Structs
 */
class Employee_Compensation_Salary_Plan_Assignment_Detail_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Element_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Compensation_Element_ReferenceType
     */
    public $Compensation_Element_Reference;
    /**
     * The Compensation_Element_Amount
     * Meta information extracted from the WSDL
     * - documentation: Amount of Compensation Element.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - totalDigits: 26
     * @var float
     */
    public $Compensation_Element_Amount;
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
     * - documentation: The expected end date of the plan assignment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expected_End_Date;
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
     * Employee_Compensation_Salary_Plan_Assignment_Detail_DataType
     * @uses Employee_Compensation_Salary_Plan_Assignment_Detail_DataType::setCompensation_Element_Reference()
     * @uses Employee_Compensation_Salary_Plan_Assignment_Detail_DataType::setCompensation_Element_Amount()
     * @uses Employee_Compensation_Salary_Plan_Assignment_Detail_DataType::setCurrency_Reference()
     * @uses Employee_Compensation_Salary_Plan_Assignment_Detail_DataType::setFrequency_Reference()
     * @uses Employee_Compensation_Salary_Plan_Assignment_Detail_DataType::setExpected_End_Date()
     * @uses Employee_Compensation_Salary_Plan_Assignment_Detail_DataType::setActual_End_Date()
     * @param \StructType\Compensation_Element_ReferenceType $compensation_Element_Reference
     * @param float $compensation_Element_Amount
     * @param \StructType\Currency_Reference_DataType $currency_Reference
     * @param \StructType\Frequency_Reference_DataType $frequency_Reference
     * @param string $expected_End_Date
     * @param string $actual_End_Date
     */
    public function __construct(\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference = null, $compensation_Element_Amount = null, \StructType\Currency_Reference_DataType $currency_Reference = null, \StructType\Frequency_Reference_DataType $frequency_Reference = null, $expected_End_Date = null, $actual_End_Date = null)
    {
        $this
            ->setCompensation_Element_Reference($compensation_Element_Reference)
            ->setCompensation_Element_Amount($compensation_Element_Amount)
            ->setCurrency_Reference($currency_Reference)
            ->setFrequency_Reference($frequency_Reference)
            ->setExpected_End_Date($expected_End_Date)
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
     * @return \StructType\Employee_Compensation_Salary_Plan_Assignment_Detail_DataType
     */
    public function setCompensation_Element_Reference(\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference = null)
    {
        $this->Compensation_Element_Reference = $compensation_Element_Reference;
        return $this;
    }
    /**
     * Get Compensation_Element_Amount value
     * @return float|null
     */
    public function getCompensation_Element_Amount()
    {
        return $this->Compensation_Element_Amount;
    }
    /**
     * Set Compensation_Element_Amount value
     * @param float $compensation_Element_Amount
     * @return \StructType\Employee_Compensation_Salary_Plan_Assignment_Detail_DataType
     */
    public function setCompensation_Element_Amount($compensation_Element_Amount = null)
    {
        // validation for constraint: float
        if (!is_null($compensation_Element_Amount) && !(is_float($compensation_Element_Amount) || is_numeric($compensation_Element_Amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($compensation_Element_Amount, true), gettype($compensation_Element_Amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($compensation_Element_Amount) && mb_strlen(mb_substr($compensation_Element_Amount, mb_strpos($compensation_Element_Amount, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($compensation_Element_Amount, true), mb_strlen(mb_substr($compensation_Element_Amount, mb_strpos($compensation_Element_Amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(26)
        if (!is_null($compensation_Element_Amount) && mb_strlen(preg_replace('/(\D)/', '', $compensation_Element_Amount)) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 26 digits, "%d" given', var_export($compensation_Element_Amount, true), mb_strlen(preg_replace('/(\D)/', '', $compensation_Element_Amount))), __LINE__);
        }
        $this->Compensation_Element_Amount = $compensation_Element_Amount;
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
     * @return \StructType\Employee_Compensation_Salary_Plan_Assignment_Detail_DataType
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
     * @return \StructType\Employee_Compensation_Salary_Plan_Assignment_Detail_DataType
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
     * @return \StructType\Employee_Compensation_Salary_Plan_Assignment_Detail_DataType
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
     * @return \StructType\Employee_Compensation_Salary_Plan_Assignment_Detail_DataType
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
     * @return \StructType\Employee_Compensation_Salary_Plan_Assignment_Detail_DataType
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
