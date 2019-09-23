<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Commission_Plan_Assignment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Commission Plan Compensation data.
 * @subpackage Structs
 */
class Employee_Commission_Plan_Assignment_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: Commission plan to update or assign. Does not default for Request Compensation Change.
     * - minOccurs: 0
     * @var \StructType\Commission_PlanObjectType
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
     * The Target_Amount
     * Meta information extracted from the WSDL
     * - documentation: Target Amount for Compensation Element. | Target amount for the Commission Plan. | Default target amount for the stock plan.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 26
     * @var float
     */
    public $Target_Amount;
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
     * The Draw_Amount
     * Meta information extracted from the WSDL
     * - documentation: Draw Amount for Compensation Element. | Draw amount for the Commission Plan.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 21
     * @var float
     */
    public $Draw_Amount;
    /**
     * The Draw_Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Frequency for the Draw Amount.
     * - minOccurs: 0
     * @var \StructType\FrequencyObjectType
     */
    public $Draw_Frequency_Reference;
    /**
     * The Draw_Duration
     * Meta information extracted from the WSDL
     * - documentation: Description of the duration of the draw amount. For informational purposes.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Draw_Duration;
    /**
     * The Recoverable
     * Meta information extracted from the WSDL
     * - documentation: If true, the compensation element is recoverable.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Recoverable;
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
     * Constructor method for Employee_Commission_Plan_Assignment_DataType
     * @uses Employee_Commission_Plan_Assignment_DataType::setCompensation_Plan_Reference()
     * @uses Employee_Commission_Plan_Assignment_DataType::setCompensation_Element_Reference()
     * @uses Employee_Commission_Plan_Assignment_DataType::setTarget_Amount()
     * @uses Employee_Commission_Plan_Assignment_DataType::setCurrency_Reference()
     * @uses Employee_Commission_Plan_Assignment_DataType::setFrequency_Reference()
     * @uses Employee_Commission_Plan_Assignment_DataType::setDraw_Amount()
     * @uses Employee_Commission_Plan_Assignment_DataType::setDraw_Frequency_Reference()
     * @uses Employee_Commission_Plan_Assignment_DataType::setDraw_Duration()
     * @uses Employee_Commission_Plan_Assignment_DataType::setRecoverable()
     * @uses Employee_Commission_Plan_Assignment_DataType::setAssignment_Effective_Date()
     * @param \StructType\Commission_PlanObjectType $compensation_Plan_Reference
     * @param \StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference
     * @param float $target_Amount
     * @param \StructType\CurrencyObjectType $currency_Reference
     * @param \StructType\FrequencyObjectType $frequency_Reference
     * @param float $draw_Amount
     * @param \StructType\FrequencyObjectType $draw_Frequency_Reference
     * @param string $draw_Duration
     * @param bool $recoverable
     * @param string $assignment_Effective_Date
     */
    public function __construct(\StructType\Commission_PlanObjectType $compensation_Plan_Reference = null, \StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference = null, $target_Amount = null, \StructType\CurrencyObjectType $currency_Reference = null, \StructType\FrequencyObjectType $frequency_Reference = null, $draw_Amount = null, \StructType\FrequencyObjectType $draw_Frequency_Reference = null, $draw_Duration = null, $recoverable = null, $assignment_Effective_Date = null)
    {
        $this
            ->setCompensation_Plan_Reference($compensation_Plan_Reference)
            ->setCompensation_Element_Reference($compensation_Element_Reference)
            ->setTarget_Amount($target_Amount)
            ->setCurrency_Reference($currency_Reference)
            ->setFrequency_Reference($frequency_Reference)
            ->setDraw_Amount($draw_Amount)
            ->setDraw_Frequency_Reference($draw_Frequency_Reference)
            ->setDraw_Duration($draw_Duration)
            ->setRecoverable($recoverable)
            ->setAssignment_Effective_Date($assignment_Effective_Date);
    }
    /**
     * Get Compensation_Plan_Reference value
     * @return \StructType\Commission_PlanObjectType|null
     */
    public function getCompensation_Plan_Reference()
    {
        return $this->Compensation_Plan_Reference;
    }
    /**
     * Set Compensation_Plan_Reference value
     * @param \StructType\Commission_PlanObjectType $compensation_Plan_Reference
     * @return \StructType\Employee_Commission_Plan_Assignment_DataType
     */
    public function setCompensation_Plan_Reference(\StructType\Commission_PlanObjectType $compensation_Plan_Reference = null)
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
     * @return \StructType\Employee_Commission_Plan_Assignment_DataType
     */
    public function setCompensation_Element_Reference(\StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference = null)
    {
        $this->Compensation_Element_Reference = $compensation_Element_Reference;
        return $this;
    }
    /**
     * Get Target_Amount value
     * @return float|null
     */
    public function getTarget_Amount()
    {
        return $this->Target_Amount;
    }
    /**
     * Set Target_Amount value
     * @param float $target_Amount
     * @return \StructType\Employee_Commission_Plan_Assignment_DataType
     */
    public function setTarget_Amount($target_Amount = null)
    {
        // validation for constraint: float
        if (!is_null($target_Amount) && !(is_float($target_Amount) || is_numeric($target_Amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($target_Amount, true), gettype($target_Amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($target_Amount) && mb_strlen(mb_substr($target_Amount, mb_strpos($target_Amount, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($target_Amount, true), mb_strlen(mb_substr($target_Amount, mb_strpos($target_Amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(26)
        if (!is_null($target_Amount) && mb_strlen(preg_replace('/(\D)/', '', $target_Amount)) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 26 digits, "%d" given', var_export($target_Amount, true), mb_strlen(preg_replace('/(\D)/', '', $target_Amount))), __LINE__);
        }
        $this->Target_Amount = $target_Amount;
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
     * @return \StructType\Employee_Commission_Plan_Assignment_DataType
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
     * @return \StructType\Employee_Commission_Plan_Assignment_DataType
     */
    public function setFrequency_Reference(\StructType\FrequencyObjectType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
        return $this;
    }
    /**
     * Get Draw_Amount value
     * @return float|null
     */
    public function getDraw_Amount()
    {
        return $this->Draw_Amount;
    }
    /**
     * Set Draw_Amount value
     * @param float $draw_Amount
     * @return \StructType\Employee_Commission_Plan_Assignment_DataType
     */
    public function setDraw_Amount($draw_Amount = null)
    {
        // validation for constraint: float
        if (!is_null($draw_Amount) && !(is_float($draw_Amount) || is_numeric($draw_Amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($draw_Amount, true), gettype($draw_Amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($draw_Amount) && mb_strlen(mb_substr($draw_Amount, mb_strpos($draw_Amount, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($draw_Amount, true), mb_strlen(mb_substr($draw_Amount, mb_strpos($draw_Amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($draw_Amount) && $draw_Amount < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($draw_Amount, true)), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($draw_Amount) && mb_strlen(preg_replace('/(\D)/', '', $draw_Amount)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($draw_Amount, true), mb_strlen(preg_replace('/(\D)/', '', $draw_Amount))), __LINE__);
        }
        $this->Draw_Amount = $draw_Amount;
        return $this;
    }
    /**
     * Get Draw_Frequency_Reference value
     * @return \StructType\FrequencyObjectType|null
     */
    public function getDraw_Frequency_Reference()
    {
        return $this->Draw_Frequency_Reference;
    }
    /**
     * Set Draw_Frequency_Reference value
     * @param \StructType\FrequencyObjectType $draw_Frequency_Reference
     * @return \StructType\Employee_Commission_Plan_Assignment_DataType
     */
    public function setDraw_Frequency_Reference(\StructType\FrequencyObjectType $draw_Frequency_Reference = null)
    {
        $this->Draw_Frequency_Reference = $draw_Frequency_Reference;
        return $this;
    }
    /**
     * Get Draw_Duration value
     * @return string|null
     */
    public function getDraw_Duration()
    {
        return $this->Draw_Duration;
    }
    /**
     * Set Draw_Duration value
     * @param string $draw_Duration
     * @return \StructType\Employee_Commission_Plan_Assignment_DataType
     */
    public function setDraw_Duration($draw_Duration = null)
    {
        // validation for constraint: string
        if (!is_null($draw_Duration) && !is_string($draw_Duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($draw_Duration, true), gettype($draw_Duration)), __LINE__);
        }
        $this->Draw_Duration = $draw_Duration;
        return $this;
    }
    /**
     * Get Recoverable value
     * @return bool|null
     */
    public function getRecoverable()
    {
        return $this->Recoverable;
    }
    /**
     * Set Recoverable value
     * @param bool $recoverable
     * @return \StructType\Employee_Commission_Plan_Assignment_DataType
     */
    public function setRecoverable($recoverable = null)
    {
        // validation for constraint: boolean
        if (!is_null($recoverable) && !is_bool($recoverable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($recoverable, true), gettype($recoverable)), __LINE__);
        }
        $this->Recoverable = $recoverable;
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
     * @return \StructType\Employee_Commission_Plan_Assignment_DataType
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
     * @return \StructType\Employee_Commission_Plan_Assignment_DataType
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
