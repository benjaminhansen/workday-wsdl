<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Stock_Plan_Assignment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Stock Plan Compensation data.
 * @subpackage Structs
 */
class Employee_Stock_Plan_Assignment_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Stock Plan.
     * - minOccurs: 0
     * @var \StructType\Stock_PlanObjectType
     */
    public $Compensation_Plan_Reference;
    /**
     * The Percent_of_Target_as_Option
     * Meta information extracted from the WSDL
     * - documentation: Percent of target that are options.
     * - base: xsd:decimal
     * - fractionDigits: 4
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 7
     * @var float
     */
    public $Percent_of_Target_as_Option;
    /**
     * The Percent_of_Target_as_Stock
     * Meta information extracted from the WSDL
     * - documentation: Percent of target that are stocks.
     * - base: xsd:decimal
     * - fractionDigits: 4
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 7
     * @var float
     */
    public $Percent_of_Target_as_Stock;
    /**
     * The Target_Shares
     * Meta information extracted from the WSDL
     * - documentation: Default target shares for the stock plan.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 12
     * @var float
     */
    public $Target_Shares;
    /**
     * The Individual_Target_Shares
     * Meta information extracted from the WSDL
     * - documentation: Individual target share which overrides the default target share for the plan.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 21
     * @var float
     */
    public $Individual_Target_Shares;
    /**
     * The Target_Percent
     * Meta information extracted from the WSDL
     * - documentation: Default target percent for the stock plan.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 16
     * @var float
     */
    public $Target_Percent;
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
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Currency of amount.
     * - minOccurs: 0
     * @var \StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * The Vesting_Schedule_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Stock Vesting Schedule.
     * - minOccurs: 0
     * @var \StructType\Stock_Vesting_ScheduleObjectType
     */
    public $Vesting_Schedule_Reference;
    /**
     * The Compensation_Matrix_Reference
     * Meta information extracted from the WSDL
     * - documentation: Compensation Matrix of plan.
     * - minOccurs: 0
     * @var \StructType\Compensation_MatrixObjectType
     */
    public $Compensation_Matrix_Reference;
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
     * Constructor method for Employee_Stock_Plan_Assignment_DataType
     * @uses Employee_Stock_Plan_Assignment_DataType::setCompensation_Plan_Reference()
     * @uses Employee_Stock_Plan_Assignment_DataType::setPercent_of_Target_as_Option()
     * @uses Employee_Stock_Plan_Assignment_DataType::setPercent_of_Target_as_Stock()
     * @uses Employee_Stock_Plan_Assignment_DataType::setTarget_Shares()
     * @uses Employee_Stock_Plan_Assignment_DataType::setIndividual_Target_Shares()
     * @uses Employee_Stock_Plan_Assignment_DataType::setTarget_Percent()
     * @uses Employee_Stock_Plan_Assignment_DataType::setIndividual_Target_Amount()
     * @uses Employee_Stock_Plan_Assignment_DataType::setTarget_Amount()
     * @uses Employee_Stock_Plan_Assignment_DataType::setIndividual_Target_Percent()
     * @uses Employee_Stock_Plan_Assignment_DataType::setCurrency_Reference()
     * @uses Employee_Stock_Plan_Assignment_DataType::setVesting_Schedule_Reference()
     * @uses Employee_Stock_Plan_Assignment_DataType::setCompensation_Matrix_Reference()
     * @uses Employee_Stock_Plan_Assignment_DataType::setAssignment_Effective_Date()
     * @param \StructType\Stock_PlanObjectType $compensation_Plan_Reference
     * @param float $percent_of_Target_as_Option
     * @param float $percent_of_Target_as_Stock
     * @param float $target_Shares
     * @param float $individual_Target_Shares
     * @param float $target_Percent
     * @param float $individual_Target_Amount
     * @param float $target_Amount
     * @param float $individual_Target_Percent
     * @param \StructType\CurrencyObjectType $currency_Reference
     * @param \StructType\Stock_Vesting_ScheduleObjectType $vesting_Schedule_Reference
     * @param \StructType\Compensation_MatrixObjectType $compensation_Matrix_Reference
     * @param string $assignment_Effective_Date
     */
    public function __construct(\StructType\Stock_PlanObjectType $compensation_Plan_Reference = null, $percent_of_Target_as_Option = null, $percent_of_Target_as_Stock = null, $target_Shares = null, $individual_Target_Shares = null, $target_Percent = null, $individual_Target_Amount = null, $target_Amount = null, $individual_Target_Percent = null, \StructType\CurrencyObjectType $currency_Reference = null, \StructType\Stock_Vesting_ScheduleObjectType $vesting_Schedule_Reference = null, \StructType\Compensation_MatrixObjectType $compensation_Matrix_Reference = null, $assignment_Effective_Date = null)
    {
        $this
            ->setCompensation_Plan_Reference($compensation_Plan_Reference)
            ->setPercent_of_Target_as_Option($percent_of_Target_as_Option)
            ->setPercent_of_Target_as_Stock($percent_of_Target_as_Stock)
            ->setTarget_Shares($target_Shares)
            ->setIndividual_Target_Shares($individual_Target_Shares)
            ->setTarget_Percent($target_Percent)
            ->setIndividual_Target_Amount($individual_Target_Amount)
            ->setTarget_Amount($target_Amount)
            ->setIndividual_Target_Percent($individual_Target_Percent)
            ->setCurrency_Reference($currency_Reference)
            ->setVesting_Schedule_Reference($vesting_Schedule_Reference)
            ->setCompensation_Matrix_Reference($compensation_Matrix_Reference)
            ->setAssignment_Effective_Date($assignment_Effective_Date);
    }
    /**
     * Get Compensation_Plan_Reference value
     * @return \StructType\Stock_PlanObjectType|null
     */
    public function getCompensation_Plan_Reference()
    {
        return $this->Compensation_Plan_Reference;
    }
    /**
     * Set Compensation_Plan_Reference value
     * @param \StructType\Stock_PlanObjectType $compensation_Plan_Reference
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType
     */
    public function setCompensation_Plan_Reference(\StructType\Stock_PlanObjectType $compensation_Plan_Reference = null)
    {
        $this->Compensation_Plan_Reference = $compensation_Plan_Reference;
        return $this;
    }
    /**
     * Get Percent_of_Target_as_Option value
     * @return float|null
     */
    public function getPercent_of_Target_as_Option()
    {
        return $this->Percent_of_Target_as_Option;
    }
    /**
     * Set Percent_of_Target_as_Option value
     * @param float $percent_of_Target_as_Option
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType
     */
    public function setPercent_of_Target_as_Option($percent_of_Target_as_Option = null)
    {
        // validation for constraint: float
        if (!is_null($percent_of_Target_as_Option) && !(is_float($percent_of_Target_as_Option) || is_numeric($percent_of_Target_as_Option))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent_of_Target_as_Option, true), gettype($percent_of_Target_as_Option)), __LINE__);
        }
        // validation for constraint: fractionDigits(4)
        if (!is_null($percent_of_Target_as_Option) && mb_strlen(mb_substr($percent_of_Target_as_Option, mb_strpos($percent_of_Target_as_Option, '.') + 1)) > 4) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 4 fraction digits, %d given', var_export($percent_of_Target_as_Option, true), mb_strlen(mb_substr($percent_of_Target_as_Option, mb_strpos($percent_of_Target_as_Option, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($percent_of_Target_as_Option) && $percent_of_Target_as_Option < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($percent_of_Target_as_Option, true)), __LINE__);
        }
        // validation for constraint: totalDigits(7)
        if (!is_null($percent_of_Target_as_Option) && mb_strlen(preg_replace('/(\D)/', '', $percent_of_Target_as_Option)) > 7) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 7 digits, "%d" given', var_export($percent_of_Target_as_Option, true), mb_strlen(preg_replace('/(\D)/', '', $percent_of_Target_as_Option))), __LINE__);
        }
        $this->Percent_of_Target_as_Option = $percent_of_Target_as_Option;
        return $this;
    }
    /**
     * Get Percent_of_Target_as_Stock value
     * @return float|null
     */
    public function getPercent_of_Target_as_Stock()
    {
        return $this->Percent_of_Target_as_Stock;
    }
    /**
     * Set Percent_of_Target_as_Stock value
     * @param float $percent_of_Target_as_Stock
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType
     */
    public function setPercent_of_Target_as_Stock($percent_of_Target_as_Stock = null)
    {
        // validation for constraint: float
        if (!is_null($percent_of_Target_as_Stock) && !(is_float($percent_of_Target_as_Stock) || is_numeric($percent_of_Target_as_Stock))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent_of_Target_as_Stock, true), gettype($percent_of_Target_as_Stock)), __LINE__);
        }
        // validation for constraint: fractionDigits(4)
        if (!is_null($percent_of_Target_as_Stock) && mb_strlen(mb_substr($percent_of_Target_as_Stock, mb_strpos($percent_of_Target_as_Stock, '.') + 1)) > 4) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 4 fraction digits, %d given', var_export($percent_of_Target_as_Stock, true), mb_strlen(mb_substr($percent_of_Target_as_Stock, mb_strpos($percent_of_Target_as_Stock, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($percent_of_Target_as_Stock) && $percent_of_Target_as_Stock < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($percent_of_Target_as_Stock, true)), __LINE__);
        }
        // validation for constraint: totalDigits(7)
        if (!is_null($percent_of_Target_as_Stock) && mb_strlen(preg_replace('/(\D)/', '', $percent_of_Target_as_Stock)) > 7) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 7 digits, "%d" given', var_export($percent_of_Target_as_Stock, true), mb_strlen(preg_replace('/(\D)/', '', $percent_of_Target_as_Stock))), __LINE__);
        }
        $this->Percent_of_Target_as_Stock = $percent_of_Target_as_Stock;
        return $this;
    }
    /**
     * Get Target_Shares value
     * @return float|null
     */
    public function getTarget_Shares()
    {
        return $this->Target_Shares;
    }
    /**
     * Set Target_Shares value
     * @param float $target_Shares
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType
     */
    public function setTarget_Shares($target_Shares = null)
    {
        // validation for constraint: float
        if (!is_null($target_Shares) && !(is_float($target_Shares) || is_numeric($target_Shares))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($target_Shares, true), gettype($target_Shares)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($target_Shares) && mb_strlen(mb_substr($target_Shares, mb_strpos($target_Shares, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($target_Shares, true), mb_strlen(mb_substr($target_Shares, mb_strpos($target_Shares, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($target_Shares) && $target_Shares < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($target_Shares, true)), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($target_Shares) && mb_strlen(preg_replace('/(\D)/', '', $target_Shares)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($target_Shares, true), mb_strlen(preg_replace('/(\D)/', '', $target_Shares))), __LINE__);
        }
        $this->Target_Shares = $target_Shares;
        return $this;
    }
    /**
     * Get Individual_Target_Shares value
     * @return float|null
     */
    public function getIndividual_Target_Shares()
    {
        return $this->Individual_Target_Shares;
    }
    /**
     * Set Individual_Target_Shares value
     * @param float $individual_Target_Shares
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType
     */
    public function setIndividual_Target_Shares($individual_Target_Shares = null)
    {
        // validation for constraint: float
        if (!is_null($individual_Target_Shares) && !(is_float($individual_Target_Shares) || is_numeric($individual_Target_Shares))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($individual_Target_Shares, true), gettype($individual_Target_Shares)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($individual_Target_Shares) && mb_strlen(mb_substr($individual_Target_Shares, mb_strpos($individual_Target_Shares, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($individual_Target_Shares, true), mb_strlen(mb_substr($individual_Target_Shares, mb_strpos($individual_Target_Shares, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($individual_Target_Shares) && $individual_Target_Shares < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($individual_Target_Shares, true)), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($individual_Target_Shares) && mb_strlen(preg_replace('/(\D)/', '', $individual_Target_Shares)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($individual_Target_Shares, true), mb_strlen(preg_replace('/(\D)/', '', $individual_Target_Shares))), __LINE__);
        }
        $this->Individual_Target_Shares = $individual_Target_Shares;
        return $this;
    }
    /**
     * Get Target_Percent value
     * @return float|null
     */
    public function getTarget_Percent()
    {
        return $this->Target_Percent;
    }
    /**
     * Set Target_Percent value
     * @param float $target_Percent
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType
     */
    public function setTarget_Percent($target_Percent = null)
    {
        // validation for constraint: float
        if (!is_null($target_Percent) && !(is_float($target_Percent) || is_numeric($target_Percent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($target_Percent, true), gettype($target_Percent)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($target_Percent) && mb_strlen(mb_substr($target_Percent, mb_strpos($target_Percent, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($target_Percent, true), mb_strlen(mb_substr($target_Percent, mb_strpos($target_Percent, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($target_Percent) && $target_Percent < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($target_Percent, true)), __LINE__);
        }
        // validation for constraint: totalDigits(16)
        if (!is_null($target_Percent) && mb_strlen(preg_replace('/(\D)/', '', $target_Percent)) > 16) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 16 digits, "%d" given', var_export($target_Percent, true), mb_strlen(preg_replace('/(\D)/', '', $target_Percent))), __LINE__);
        }
        $this->Target_Percent = $target_Percent;
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
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType
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
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType
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
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType
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
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType
     */
    public function setCurrency_Reference(\StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
        return $this;
    }
    /**
     * Get Vesting_Schedule_Reference value
     * @return \StructType\Stock_Vesting_ScheduleObjectType|null
     */
    public function getVesting_Schedule_Reference()
    {
        return $this->Vesting_Schedule_Reference;
    }
    /**
     * Set Vesting_Schedule_Reference value
     * @param \StructType\Stock_Vesting_ScheduleObjectType $vesting_Schedule_Reference
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType
     */
    public function setVesting_Schedule_Reference(\StructType\Stock_Vesting_ScheduleObjectType $vesting_Schedule_Reference = null)
    {
        $this->Vesting_Schedule_Reference = $vesting_Schedule_Reference;
        return $this;
    }
    /**
     * Get Compensation_Matrix_Reference value
     * @return \StructType\Compensation_MatrixObjectType|null
     */
    public function getCompensation_Matrix_Reference()
    {
        return $this->Compensation_Matrix_Reference;
    }
    /**
     * Set Compensation_Matrix_Reference value
     * @param \StructType\Compensation_MatrixObjectType $compensation_Matrix_Reference
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType
     */
    public function setCompensation_Matrix_Reference(\StructType\Compensation_MatrixObjectType $compensation_Matrix_Reference = null)
    {
        $this->Compensation_Matrix_Reference = $compensation_Matrix_Reference;
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
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType
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
     * @return \StructType\Employee_Stock_Plan_Assignment_DataType
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
