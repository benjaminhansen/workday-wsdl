<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Employee_Compensation_Commission_Plan_Assignment_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Compensation Element Values for Commission Plan data.
 * @subpackage Structs
 */
class Employee_Compensation_Commission_Plan_Assignment_Detail_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Element_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Compensation_Element_ReferenceType
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
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Draw_Frequency_ReferenceType
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
     * Employee_Compensation_Commission_Plan_Assignment_Detail_DataType
     * @uses Employee_Compensation_Commission_Plan_Assignment_Detail_DataType::setCompensation_Element_Reference()
     * @uses Employee_Compensation_Commission_Plan_Assignment_Detail_DataType::setTarget_Amount()
     * @uses Employee_Compensation_Commission_Plan_Assignment_Detail_DataType::setCurrency_Reference()
     * @uses Employee_Compensation_Commission_Plan_Assignment_Detail_DataType::setFrequency_Reference()
     * @uses Employee_Compensation_Commission_Plan_Assignment_Detail_DataType::setDraw_Amount()
     * @uses Employee_Compensation_Commission_Plan_Assignment_Detail_DataType::setDraw_Frequency_Reference()
     * @uses Employee_Compensation_Commission_Plan_Assignment_Detail_DataType::setDraw_Duration()
     * @uses Employee_Compensation_Commission_Plan_Assignment_Detail_DataType::setRecoverable()
     * @uses Employee_Compensation_Commission_Plan_Assignment_Detail_DataType::setActual_End_Date()
     * @param \WorkdayWsdl\\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference
     * @param float $target_Amount
     * @param \WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference
     * @param \WorkdayWsdl\\StructType\Frequency_Reference_DataType $frequency_Reference
     * @param float $draw_Amount
     * @param \WorkdayWsdl\\StructType\Draw_Frequency_ReferenceType $draw_Frequency_Reference
     * @param string $draw_Duration
     * @param bool $recoverable
     * @param string $actual_End_Date
     */
    public function __construct(\WorkdayWsdl\\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference = null, $target_Amount = null, \WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference = null, \WorkdayWsdl\\StructType\Frequency_Reference_DataType $frequency_Reference = null, $draw_Amount = null, \WorkdayWsdl\\StructType\Draw_Frequency_ReferenceType $draw_Frequency_Reference = null, $draw_Duration = null, $recoverable = null, $actual_End_Date = null)
    {
        $this
            ->setCompensation_Element_Reference($compensation_Element_Reference)
            ->setTarget_Amount($target_Amount)
            ->setCurrency_Reference($currency_Reference)
            ->setFrequency_Reference($frequency_Reference)
            ->setDraw_Amount($draw_Amount)
            ->setDraw_Frequency_Reference($draw_Frequency_Reference)
            ->setDraw_Duration($draw_Duration)
            ->setRecoverable($recoverable)
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Commission_Plan_Assignment_Detail_DataType
     */
    public function setCompensation_Element_Reference(\WorkdayWsdl\\StructType\Compensation_Element_ReferenceType $compensation_Element_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Commission_Plan_Assignment_Detail_DataType
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
     * @return \WorkdayWsdl\\StructType\Currency_Reference_DataType|null
     */
    public function getCurrency_Reference()
    {
        return $this->Currency_Reference;
    }
    /**
     * Set Currency_Reference value
     * @param \WorkdayWsdl\\StructType\Currency_Reference_DataType $currency_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Commission_Plan_Assignment_Detail_DataType
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Commission_Plan_Assignment_Detail_DataType
     */
    public function setFrequency_Reference(\WorkdayWsdl\\StructType\Frequency_Reference_DataType $frequency_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Commission_Plan_Assignment_Detail_DataType
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
     * @return \WorkdayWsdl\\StructType\Draw_Frequency_ReferenceType|null
     */
    public function getDraw_Frequency_Reference()
    {
        return $this->Draw_Frequency_Reference;
    }
    /**
     * Set Draw_Frequency_Reference value
     * @param \WorkdayWsdl\\StructType\Draw_Frequency_ReferenceType $draw_Frequency_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Commission_Plan_Assignment_Detail_DataType
     */
    public function setDraw_Frequency_Reference(\WorkdayWsdl\\StructType\Draw_Frequency_ReferenceType $draw_Frequency_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Commission_Plan_Assignment_Detail_DataType
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Commission_Plan_Assignment_Detail_DataType
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Commission_Plan_Assignment_Detail_DataType
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
     * @return \WorkdayWsdl\\StructType\Employee_Compensation_Commission_Plan_Assignment_Detail_DataType
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
