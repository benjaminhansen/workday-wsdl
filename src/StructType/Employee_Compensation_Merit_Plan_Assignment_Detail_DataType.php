<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Employee_Compensation_Merit_Plan_Assignment_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all values for Merit Plan Assignment data
 * @subpackage Structs
 */
class Employee_Compensation_Merit_Plan_Assignment_Detail_DataType extends AbstractStructBase
{
    /**
     * The Individual_Target
     * Meta information extracted from the WSDL
     * - documentation: Percent for Compensation Element.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 16
     * @var float
     */
    public $Individual_Target;
    /**
     * The Guaranteed_Minimum
     * Meta information extracted from the WSDL
     * - documentation: Guaranteed Minimum for Compensation Element.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Guaranteed_Minimum;
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
     * Employee_Compensation_Merit_Plan_Assignment_Detail_DataType
     * @uses Employee_Compensation_Merit_Plan_Assignment_Detail_DataType::setIndividual_Target()
     * @uses Employee_Compensation_Merit_Plan_Assignment_Detail_DataType::setGuaranteed_Minimum()
     * @uses Employee_Compensation_Merit_Plan_Assignment_Detail_DataType::setActual_End_Date()
     * @param float $individual_Target
     * @param bool $guaranteed_Minimum
     * @param string $actual_End_Date
     */
    public function __construct($individual_Target = null, $guaranteed_Minimum = null, $actual_End_Date = null)
    {
        $this
            ->setIndividual_Target($individual_Target)
            ->setGuaranteed_Minimum($guaranteed_Minimum)
            ->setActual_End_Date($actual_End_Date);
    }
    /**
     * Get Individual_Target value
     * @return float|null
     */
    public function getIndividual_Target()
    {
        return $this->Individual_Target;
    }
    /**
     * Set Individual_Target value
     * @param float $individual_Target
     * @return \StructType\Employee_Compensation_Merit_Plan_Assignment_Detail_DataType
     */
    public function setIndividual_Target($individual_Target = null)
    {
        // validation for constraint: float
        if (!is_null($individual_Target) && !(is_float($individual_Target) || is_numeric($individual_Target))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($individual_Target, true), gettype($individual_Target)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($individual_Target) && mb_strlen(mb_substr($individual_Target, mb_strpos($individual_Target, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($individual_Target, true), mb_strlen(mb_substr($individual_Target, mb_strpos($individual_Target, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($individual_Target) && $individual_Target < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($individual_Target, true)), __LINE__);
        }
        // validation for constraint: totalDigits(16)
        if (!is_null($individual_Target) && mb_strlen(preg_replace('/(\D)/', '', $individual_Target)) > 16) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 16 digits, "%d" given', var_export($individual_Target, true), mb_strlen(preg_replace('/(\D)/', '', $individual_Target))), __LINE__);
        }
        $this->Individual_Target = $individual_Target;
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
     * @return \StructType\Employee_Compensation_Merit_Plan_Assignment_Detail_DataType
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
     * @return \StructType\Employee_Compensation_Merit_Plan_Assignment_Detail_DataType
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
     * @return \StructType\Employee_Compensation_Merit_Plan_Assignment_Detail_DataType
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
