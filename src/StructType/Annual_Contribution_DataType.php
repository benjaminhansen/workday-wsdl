<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Annual_Contribution_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The annual contribution for the spending account election.
 * @subpackage Structs
 */
class Annual_Contribution_DataType extends AbstractStructBase
{
    /**
     * The Annual_Contribution_Amount
     * Meta information extracted from the WSDL
     * - documentation: The annual contribution amount for the spending account election.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 21
     * @var float
     */
    public $Annual_Contribution_Amount;
    /**
     * The Prior_Contribution_Amount
     * Meta information extracted from the WSDL
     * - documentation: The prior annual contribution amount if any was previously made.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 21
     * @var float
     */
    public $Prior_Contribution_Amount;
    /**
     * The Remaining_Periods
     * Meta information extracted from the WSDL
     * - documentation: The remaining pay periods after the prior contribution amount.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 10
     * @var float
     */
    public $Remaining_Periods;
    /**
     * Constructor method for Annual_Contribution_DataType
     * @uses Annual_Contribution_DataType::setAnnual_Contribution_Amount()
     * @uses Annual_Contribution_DataType::setPrior_Contribution_Amount()
     * @uses Annual_Contribution_DataType::setRemaining_Periods()
     * @param float $annual_Contribution_Amount
     * @param float $prior_Contribution_Amount
     * @param float $remaining_Periods
     */
    public function __construct($annual_Contribution_Amount = null, $prior_Contribution_Amount = null, $remaining_Periods = null)
    {
        $this
            ->setAnnual_Contribution_Amount($annual_Contribution_Amount)
            ->setPrior_Contribution_Amount($prior_Contribution_Amount)
            ->setRemaining_Periods($remaining_Periods);
    }
    /**
     * Get Annual_Contribution_Amount value
     * @return float|null
     */
    public function getAnnual_Contribution_Amount()
    {
        return $this->Annual_Contribution_Amount;
    }
    /**
     * Set Annual_Contribution_Amount value
     * @param float $annual_Contribution_Amount
     * @return \WorkdayWsdl\\StructType\Annual_Contribution_DataType
     */
    public function setAnnual_Contribution_Amount($annual_Contribution_Amount = null)
    {
        // validation for constraint: float
        if (!is_null($annual_Contribution_Amount) && !(is_float($annual_Contribution_Amount) || is_numeric($annual_Contribution_Amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($annual_Contribution_Amount, true), gettype($annual_Contribution_Amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($annual_Contribution_Amount) && mb_strlen(mb_substr($annual_Contribution_Amount, mb_strpos($annual_Contribution_Amount, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($annual_Contribution_Amount, true), mb_strlen(mb_substr($annual_Contribution_Amount, mb_strpos($annual_Contribution_Amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($annual_Contribution_Amount) && $annual_Contribution_Amount < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($annual_Contribution_Amount, true)), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($annual_Contribution_Amount) && mb_strlen(preg_replace('/(\D)/', '', $annual_Contribution_Amount)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($annual_Contribution_Amount, true), mb_strlen(preg_replace('/(\D)/', '', $annual_Contribution_Amount))), __LINE__);
        }
        $this->Annual_Contribution_Amount = $annual_Contribution_Amount;
        return $this;
    }
    /**
     * Get Prior_Contribution_Amount value
     * @return float|null
     */
    public function getPrior_Contribution_Amount()
    {
        return $this->Prior_Contribution_Amount;
    }
    /**
     * Set Prior_Contribution_Amount value
     * @param float $prior_Contribution_Amount
     * @return \WorkdayWsdl\\StructType\Annual_Contribution_DataType
     */
    public function setPrior_Contribution_Amount($prior_Contribution_Amount = null)
    {
        // validation for constraint: float
        if (!is_null($prior_Contribution_Amount) && !(is_float($prior_Contribution_Amount) || is_numeric($prior_Contribution_Amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($prior_Contribution_Amount, true), gettype($prior_Contribution_Amount)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($prior_Contribution_Amount) && mb_strlen(mb_substr($prior_Contribution_Amount, mb_strpos($prior_Contribution_Amount, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($prior_Contribution_Amount, true), mb_strlen(mb_substr($prior_Contribution_Amount, mb_strpos($prior_Contribution_Amount, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($prior_Contribution_Amount) && $prior_Contribution_Amount < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($prior_Contribution_Amount, true)), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($prior_Contribution_Amount) && mb_strlen(preg_replace('/(\D)/', '', $prior_Contribution_Amount)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($prior_Contribution_Amount, true), mb_strlen(preg_replace('/(\D)/', '', $prior_Contribution_Amount))), __LINE__);
        }
        $this->Prior_Contribution_Amount = $prior_Contribution_Amount;
        return $this;
    }
    /**
     * Get Remaining_Periods value
     * @return float|null
     */
    public function getRemaining_Periods()
    {
        return $this->Remaining_Periods;
    }
    /**
     * Set Remaining_Periods value
     * @param float $remaining_Periods
     * @return \WorkdayWsdl\\StructType\Annual_Contribution_DataType
     */
    public function setRemaining_Periods($remaining_Periods = null)
    {
        // validation for constraint: float
        if (!is_null($remaining_Periods) && !(is_float($remaining_Periods) || is_numeric($remaining_Periods))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($remaining_Periods, true), gettype($remaining_Periods)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($remaining_Periods) && mb_strlen(mb_substr($remaining_Periods, mb_strpos($remaining_Periods, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($remaining_Periods, true), mb_strlen(mb_substr($remaining_Periods, mb_strpos($remaining_Periods, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($remaining_Periods) && $remaining_Periods < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($remaining_Periods, true)), __LINE__);
        }
        // validation for constraint: totalDigits(10)
        if (!is_null($remaining_Periods) && mb_strlen(preg_replace('/(\D)/', '', $remaining_Periods)) > 10) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 10 digits, "%d" given', var_export($remaining_Periods, true), mb_strlen(preg_replace('/(\D)/', '', $remaining_Periods))), __LINE__);
        }
        $this->Remaining_Periods = $remaining_Periods;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Annual_Contribution_DataType
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
