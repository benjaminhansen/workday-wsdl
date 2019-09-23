<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Future_Payment_Plan_Assignment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Future payment plan assignment data submitted by the put future payment plan assignment request.
 * @subpackage Structs
 */
class Future_Payment_Plan_Assignment_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: Compensation Plan Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Future_Payment_PlanObjectType
     */
    public $Compensation_Plan_Reference;
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
     * The Individual_Target_Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Individual Target Currency Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CurrencyObjectType
     */
    public $Individual_Target_Currency_Reference;
    /**
     * The Individual_Target_Payment_Date
     * Meta information extracted from the WSDL
     * - documentation: Individual Target Payment Date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Individual_Target_Payment_Date;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - documentation: Comment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * Constructor method for Future_Payment_Plan_Assignment_DataType
     * @uses Future_Payment_Plan_Assignment_DataType::setCompensation_Plan_Reference()
     * @uses Future_Payment_Plan_Assignment_DataType::setIndividual_Target_Amount()
     * @uses Future_Payment_Plan_Assignment_DataType::setIndividual_Target_Currency_Reference()
     * @uses Future_Payment_Plan_Assignment_DataType::setIndividual_Target_Payment_Date()
     * @uses Future_Payment_Plan_Assignment_DataType::setComment()
     * @param \WorkdayWsdl\\StructType\Future_Payment_PlanObjectType $compensation_Plan_Reference
     * @param float $individual_Target_Amount
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $individual_Target_Currency_Reference
     * @param string $individual_Target_Payment_Date
     * @param string $comment
     */
    public function __construct(\WorkdayWsdl\\StructType\Future_Payment_PlanObjectType $compensation_Plan_Reference = null, $individual_Target_Amount = null, \WorkdayWsdl\\StructType\CurrencyObjectType $individual_Target_Currency_Reference = null, $individual_Target_Payment_Date = null, $comment = null)
    {
        $this
            ->setCompensation_Plan_Reference($compensation_Plan_Reference)
            ->setIndividual_Target_Amount($individual_Target_Amount)
            ->setIndividual_Target_Currency_Reference($individual_Target_Currency_Reference)
            ->setIndividual_Target_Payment_Date($individual_Target_Payment_Date)
            ->setComment($comment);
    }
    /**
     * Get Compensation_Plan_Reference value
     * @return \WorkdayWsdl\\StructType\Future_Payment_PlanObjectType|null
     */
    public function getCompensation_Plan_Reference()
    {
        return $this->Compensation_Plan_Reference;
    }
    /**
     * Set Compensation_Plan_Reference value
     * @param \WorkdayWsdl\\StructType\Future_Payment_PlanObjectType $compensation_Plan_Reference
     * @return \WorkdayWsdl\\StructType\Future_Payment_Plan_Assignment_DataType
     */
    public function setCompensation_Plan_Reference(\WorkdayWsdl\\StructType\Future_Payment_PlanObjectType $compensation_Plan_Reference = null)
    {
        $this->Compensation_Plan_Reference = $compensation_Plan_Reference;
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
     * @return \WorkdayWsdl\\StructType\Future_Payment_Plan_Assignment_DataType
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
     * Get Individual_Target_Currency_Reference value
     * @return \WorkdayWsdl\\StructType\CurrencyObjectType|null
     */
    public function getIndividual_Target_Currency_Reference()
    {
        return $this->Individual_Target_Currency_Reference;
    }
    /**
     * Set Individual_Target_Currency_Reference value
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $individual_Target_Currency_Reference
     * @return \WorkdayWsdl\\StructType\Future_Payment_Plan_Assignment_DataType
     */
    public function setIndividual_Target_Currency_Reference(\WorkdayWsdl\\StructType\CurrencyObjectType $individual_Target_Currency_Reference = null)
    {
        $this->Individual_Target_Currency_Reference = $individual_Target_Currency_Reference;
        return $this;
    }
    /**
     * Get Individual_Target_Payment_Date value
     * @return string|null
     */
    public function getIndividual_Target_Payment_Date()
    {
        return $this->Individual_Target_Payment_Date;
    }
    /**
     * Set Individual_Target_Payment_Date value
     * @param string $individual_Target_Payment_Date
     * @return \WorkdayWsdl\\StructType\Future_Payment_Plan_Assignment_DataType
     */
    public function setIndividual_Target_Payment_Date($individual_Target_Payment_Date = null)
    {
        // validation for constraint: string
        if (!is_null($individual_Target_Payment_Date) && !is_string($individual_Target_Payment_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($individual_Target_Payment_Date, true), gettype($individual_Target_Payment_Date)), __LINE__);
        }
        $this->Individual_Target_Payment_Date = $individual_Target_Payment_Date;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \WorkdayWsdl\\StructType\Future_Payment_Plan_Assignment_DataType
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Future_Payment_Plan_Assignment_DataType
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
