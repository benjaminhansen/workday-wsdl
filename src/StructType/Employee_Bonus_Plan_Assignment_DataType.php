<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Bonus_Plan_Assignment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Bonus Plan Compensation data.
 * @subpackage Structs
 */
class Employee_Bonus_Plan_Assignment_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: Bonus Plan to update or assign. Does not default for Request Compensation Change.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Bonus_PlanObjectType
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
     * The Individual_Target_Amount
     * Meta information extracted from the WSDL
     * - documentation: Individual target amount that overrides the default target percent on the plan, provided Allow Target Override is enabled on the plan. Mutually exclusive from Individual Target Percent. | Individual target amount which overrides the
     * default target share for the plan. | Individual Target Amount
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 26
     * @var float
     */
    public $Individual_Target_Amount;
    /**
     * The Default_Target_Amount
     * Meta information extracted from the WSDL
     * - documentation: Target amount for this bonus plan.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 26
     * @var float
     */
    public $Default_Target_Amount;
    /**
     * The Individual_Target_Percent
     * Meta information extracted from the WSDL
     * - documentation: Individual target percent that overrides the default target percent on the plan, provided Allow Target Override is enabled on the plan. Mutually exclusive from Individual Target Amount. | Individual target percent which overrides the
     * default target share for the plan.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 18
     * @var float
     */
    public $Individual_Target_Percent;
    /**
     * The Default_Target_Percent
     * Meta information extracted from the WSDL
     * - documentation: Target percentage for this bonus plan. | Default target percent for the merit plan.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 16
     * @var float
     */
    public $Default_Target_Percent;
    /**
     * The Guaranteed_Minimum
     * Meta information extracted from the WSDL
     * - documentation: If true, employee is guaranteed the minimum for the bonus plan.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Guaranteed_Minimum;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Currency.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Frequency.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\FrequencyObjectType
     */
    public $Frequency_Reference;
    /**
     * The Percent_Assigned
     * Meta information extracted from the WSDL
     * - documentation: Percent of the bonus assigned. If none entered, default is 100%.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 16
     * @var float
     */
    public $Percent_Assigned;
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
     * Constructor method for Employee_Bonus_Plan_Assignment_DataType
     * @uses Employee_Bonus_Plan_Assignment_DataType::setCompensation_Plan_Reference()
     * @uses Employee_Bonus_Plan_Assignment_DataType::setCompensation_Element_Reference()
     * @uses Employee_Bonus_Plan_Assignment_DataType::setIndividual_Target_Amount()
     * @uses Employee_Bonus_Plan_Assignment_DataType::setDefault_Target_Amount()
     * @uses Employee_Bonus_Plan_Assignment_DataType::setIndividual_Target_Percent()
     * @uses Employee_Bonus_Plan_Assignment_DataType::setDefault_Target_Percent()
     * @uses Employee_Bonus_Plan_Assignment_DataType::setGuaranteed_Minimum()
     * @uses Employee_Bonus_Plan_Assignment_DataType::setCurrency_Reference()
     * @uses Employee_Bonus_Plan_Assignment_DataType::setFrequency_Reference()
     * @uses Employee_Bonus_Plan_Assignment_DataType::setPercent_Assigned()
     * @uses Employee_Bonus_Plan_Assignment_DataType::setAssignment_Effective_Date()
     * @param \WorkdayWsdl\\StructType\Bonus_PlanObjectType $compensation_Plan_Reference
     * @param \WorkdayWsdl\\StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference
     * @param float $individual_Target_Amount
     * @param float $default_Target_Amount
     * @param float $individual_Target_Percent
     * @param float $default_Target_Percent
     * @param bool $guaranteed_Minimum
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference
     * @param float $percent_Assigned
     * @param string $assignment_Effective_Date
     */
    public function __construct(\WorkdayWsdl\\StructType\Bonus_PlanObjectType $compensation_Plan_Reference = null, \WorkdayWsdl\\StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference = null, $individual_Target_Amount = null, $default_Target_Amount = null, $individual_Target_Percent = null, $default_Target_Percent = null, $guaranteed_Minimum = null, \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null, \WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null, $percent_Assigned = null, $assignment_Effective_Date = null)
    {
        $this
            ->setCompensation_Plan_Reference($compensation_Plan_Reference)
            ->setCompensation_Element_Reference($compensation_Element_Reference)
            ->setIndividual_Target_Amount($individual_Target_Amount)
            ->setDefault_Target_Amount($default_Target_Amount)
            ->setIndividual_Target_Percent($individual_Target_Percent)
            ->setDefault_Target_Percent($default_Target_Percent)
            ->setGuaranteed_Minimum($guaranteed_Minimum)
            ->setCurrency_Reference($currency_Reference)
            ->setFrequency_Reference($frequency_Reference)
            ->setPercent_Assigned($percent_Assigned)
            ->setAssignment_Effective_Date($assignment_Effective_Date);
    }
    /**
     * Get Compensation_Plan_Reference value
     * @return \WorkdayWsdl\\StructType\Bonus_PlanObjectType|null
     */
    public function getCompensation_Plan_Reference()
    {
        return $this->Compensation_Plan_Reference;
    }
    /**
     * Set Compensation_Plan_Reference value
     * @param \WorkdayWsdl\\StructType\Bonus_PlanObjectType $compensation_Plan_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Bonus_Plan_Assignment_DataType
     */
    public function setCompensation_Plan_Reference(\WorkdayWsdl\\StructType\Bonus_PlanObjectType $compensation_Plan_Reference = null)
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
     * @return \WorkdayWsdl\\StructType\Employee_Bonus_Plan_Assignment_DataType
     */
    public function setCompensation_Element_Reference(\WorkdayWsdl\\StructType\Compensation_Pay_EarningObjectType $compensation_Element_Reference = null)
    {
        $this->Compensation_Element_Reference = $compensation_Element_Reference;
        return $this;
    }
    /**
     * Get Individual_Target_Amount value
     * @return float|null
     */
    public function getIndividual_Target_Amount()
    {
        return $this->Individual_Target_Amount;
    }
    /**
     * Set Individual_Target_Amount value
     * @param float $individual_Target_Amount
     * @return \WorkdayWsdl\\StructType\Employee_Bonus_Plan_Assignment_DataType
     */
    public function setIndividual_Target_Amount($individual_Target_Amount = null)
    {
        // validation for constraint: float
        if (!is_null($individual_Target_Amount) && !(is_float($individual_Target_Amount) || is_numeric($individual_Target_Amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($individual_Target_Amount, true), gettype($individual_Target_Amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($individual_Target_Amount) && mb_strlen(mb_substr($individual_Target_Amount, mb_strpos($individual_Target_Amount, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($individual_Target_Amount, true), mb_strlen(mb_substr($individual_Target_Amount, mb_strpos($individual_Target_Amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(26)
        if (!is_null($individual_Target_Amount) && mb_strlen(preg_replace('/(\D)/', '', $individual_Target_Amount)) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 26 digits, "%d" given', var_export($individual_Target_Amount, true), mb_strlen(preg_replace('/(\D)/', '', $individual_Target_Amount))), __LINE__);
        }
        $this->Individual_Target_Amount = $individual_Target_Amount;
        return $this;
    }
    /**
     * Get Default_Target_Amount value
     * @return float|null
     */
    public function getDefault_Target_Amount()
    {
        return $this->Default_Target_Amount;
    }
    /**
     * Set Default_Target_Amount value
     * @param float $default_Target_Amount
     * @return \WorkdayWsdl\\StructType\Employee_Bonus_Plan_Assignment_DataType
     */
    public function setDefault_Target_Amount($default_Target_Amount = null)
    {
        // validation for constraint: float
        if (!is_null($default_Target_Amount) && !(is_float($default_Target_Amount) || is_numeric($default_Target_Amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($default_Target_Amount, true), gettype($default_Target_Amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($default_Target_Amount) && mb_strlen(mb_substr($default_Target_Amount, mb_strpos($default_Target_Amount, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($default_Target_Amount, true), mb_strlen(mb_substr($default_Target_Amount, mb_strpos($default_Target_Amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(26)
        if (!is_null($default_Target_Amount) && mb_strlen(preg_replace('/(\D)/', '', $default_Target_Amount)) > 26) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 26 digits, "%d" given', var_export($default_Target_Amount, true), mb_strlen(preg_replace('/(\D)/', '', $default_Target_Amount))), __LINE__);
        }
        $this->Default_Target_Amount = $default_Target_Amount;
        return $this;
    }
    /**
     * Get Individual_Target_Percent value
     * @return float|null
     */
    public function getIndividual_Target_Percent()
    {
        return $this->Individual_Target_Percent;
    }
    /**
     * Set Individual_Target_Percent value
     * @param float $individual_Target_Percent
     * @return \WorkdayWsdl\\StructType\Employee_Bonus_Plan_Assignment_DataType
     */
    public function setIndividual_Target_Percent($individual_Target_Percent = null)
    {
        // validation for constraint: float
        if (!is_null($individual_Target_Percent) && !(is_float($individual_Target_Percent) || is_numeric($individual_Target_Percent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($individual_Target_Percent, true), gettype($individual_Target_Percent)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($individual_Target_Percent) && mb_strlen(mb_substr($individual_Target_Percent, mb_strpos($individual_Target_Percent, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($individual_Target_Percent, true), mb_strlen(mb_substr($individual_Target_Percent, mb_strpos($individual_Target_Percent, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($individual_Target_Percent) && $individual_Target_Percent < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($individual_Target_Percent, true)), __LINE__);
        }
        // validation for constraint: totalDigits(18)
        if (!is_null($individual_Target_Percent) && mb_strlen(preg_replace('/(\D)/', '', $individual_Target_Percent)) > 18) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 18 digits, "%d" given', var_export($individual_Target_Percent, true), mb_strlen(preg_replace('/(\D)/', '', $individual_Target_Percent))), __LINE__);
        }
        $this->Individual_Target_Percent = $individual_Target_Percent;
        return $this;
    }
    /**
     * Get Default_Target_Percent value
     * @return float|null
     */
    public function getDefault_Target_Percent()
    {
        return $this->Default_Target_Percent;
    }
    /**
     * Set Default_Target_Percent value
     * @param float $default_Target_Percent
     * @return \WorkdayWsdl\\StructType\Employee_Bonus_Plan_Assignment_DataType
     */
    public function setDefault_Target_Percent($default_Target_Percent = null)
    {
        // validation for constraint: float
        if (!is_null($default_Target_Percent) && !(is_float($default_Target_Percent) || is_numeric($default_Target_Percent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($default_Target_Percent, true), gettype($default_Target_Percent)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($default_Target_Percent) && mb_strlen(mb_substr($default_Target_Percent, mb_strpos($default_Target_Percent, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($default_Target_Percent, true), mb_strlen(mb_substr($default_Target_Percent, mb_strpos($default_Target_Percent, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($default_Target_Percent) && $default_Target_Percent < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($default_Target_Percent, true)), __LINE__);
        }
        // validation for constraint: totalDigits(16)
        if (!is_null($default_Target_Percent) && mb_strlen(preg_replace('/(\D)/', '', $default_Target_Percent)) > 16) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 16 digits, "%d" given', var_export($default_Target_Percent, true), mb_strlen(preg_replace('/(\D)/', '', $default_Target_Percent))), __LINE__);
        }
        $this->Default_Target_Percent = $default_Target_Percent;
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
     * @return \WorkdayWsdl\\StructType\Employee_Bonus_Plan_Assignment_DataType
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
     * @return \WorkdayWsdl\\StructType\CurrencyObjectType|null
     */
    public function getCurrency_Reference()
    {
        return $this->Currency_Reference;
    }
    /**
     * Set Currency_Reference value
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference
     * @return \WorkdayWsdl\\StructType\Employee_Bonus_Plan_Assignment_DataType
     */
    public function setCurrency_Reference(\WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
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
     * @return \WorkdayWsdl\\StructType\Employee_Bonus_Plan_Assignment_DataType
     */
    public function setFrequency_Reference(\WorkdayWsdl\\StructType\FrequencyObjectType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
        return $this;
    }
    /**
     * Get Percent_Assigned value
     * @return float|null
     */
    public function getPercent_Assigned()
    {
        return $this->Percent_Assigned;
    }
    /**
     * Set Percent_Assigned value
     * @param float $percent_Assigned
     * @return \WorkdayWsdl\\StructType\Employee_Bonus_Plan_Assignment_DataType
     */
    public function setPercent_Assigned($percent_Assigned = null)
    {
        // validation for constraint: float
        if (!is_null($percent_Assigned) && !(is_float($percent_Assigned) || is_numeric($percent_Assigned))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent_Assigned, true), gettype($percent_Assigned)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($percent_Assigned) && mb_strlen(mb_substr($percent_Assigned, mb_strpos($percent_Assigned, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($percent_Assigned, true), mb_strlen(mb_substr($percent_Assigned, mb_strpos($percent_Assigned, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($percent_Assigned) && $percent_Assigned < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($percent_Assigned, true)), __LINE__);
        }
        // validation for constraint: totalDigits(16)
        if (!is_null($percent_Assigned) && mb_strlen(preg_replace('/(\D)/', '', $percent_Assigned)) > 16) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 16 digits, "%d" given', var_export($percent_Assigned, true), mb_strlen(preg_replace('/(\D)/', '', $percent_Assigned))), __LINE__);
        }
        $this->Percent_Assigned = $percent_Assigned;
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
     * @return \WorkdayWsdl\\StructType\Employee_Bonus_Plan_Assignment_DataType
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
     * @return \WorkdayWsdl\\StructType\Employee_Bonus_Plan_Assignment_DataType
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
