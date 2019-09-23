<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Contribution_Percentage_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: This section holds the employee's election and the maximum the employee can elect when the benefit plan uses percentages as elections.
 * @subpackage Structs
 */
class Employee_Contribution_Percentage_DataType extends AbstractStructBase
{
    /**
     * The Election_Percentage
     * Meta information extracted from the WSDL
     * - documentation: The employee's election. This is the percent that should be taken as a deduction. | The employer's contribution.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 5
     * @var float
     */
    public $Election_Percentage;
    /**
     * The Contribution_Percentage_Maximum
     * Meta information extracted from the WSDL
     * - documentation: The maximum amount the employee can elect.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - totalDigits: 5
     * @var float
     */
    public $Contribution_Percentage_Maximum;
    /**
     * Constructor method for Employee_Contribution_Percentage_DataType
     * @uses Employee_Contribution_Percentage_DataType::setElection_Percentage()
     * @uses Employee_Contribution_Percentage_DataType::setContribution_Percentage_Maximum()
     * @param float $election_Percentage
     * @param float $contribution_Percentage_Maximum
     */
    public function __construct($election_Percentage = null, $contribution_Percentage_Maximum = null)
    {
        $this
            ->setElection_Percentage($election_Percentage)
            ->setContribution_Percentage_Maximum($contribution_Percentage_Maximum);
    }
    /**
     * Get Election_Percentage value
     * @return float|null
     */
    public function getElection_Percentage()
    {
        return $this->Election_Percentage;
    }
    /**
     * Set Election_Percentage value
     * @param float $election_Percentage
     * @return \WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType
     */
    public function setElection_Percentage($election_Percentage = null)
    {
        // validation for constraint: float
        if (!is_null($election_Percentage) && !(is_float($election_Percentage) || is_numeric($election_Percentage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($election_Percentage, true), gettype($election_Percentage)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($election_Percentage) && mb_strlen(mb_substr($election_Percentage, mb_strpos($election_Percentage, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($election_Percentage, true), mb_strlen(mb_substr($election_Percentage, mb_strpos($election_Percentage, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($election_Percentage) && $election_Percentage < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($election_Percentage, true)), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($election_Percentage) && mb_strlen(preg_replace('/(\D)/', '', $election_Percentage)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($election_Percentage, true), mb_strlen(preg_replace('/(\D)/', '', $election_Percentage))), __LINE__);
        }
        $this->Election_Percentage = $election_Percentage;
        return $this;
    }
    /**
     * Get Contribution_Percentage_Maximum value
     * @return float|null
     */
    public function getContribution_Percentage_Maximum()
    {
        return $this->Contribution_Percentage_Maximum;
    }
    /**
     * Set Contribution_Percentage_Maximum value
     * @param float $contribution_Percentage_Maximum
     * @return \WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType
     */
    public function setContribution_Percentage_Maximum($contribution_Percentage_Maximum = null)
    {
        // validation for constraint: float
        if (!is_null($contribution_Percentage_Maximum) && !(is_float($contribution_Percentage_Maximum) || is_numeric($contribution_Percentage_Maximum))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($contribution_Percentage_Maximum, true), gettype($contribution_Percentage_Maximum)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($contribution_Percentage_Maximum) && mb_strlen(mb_substr($contribution_Percentage_Maximum, mb_strpos($contribution_Percentage_Maximum, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($contribution_Percentage_Maximum, true), mb_strlen(mb_substr($contribution_Percentage_Maximum, mb_strpos($contribution_Percentage_Maximum, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($contribution_Percentage_Maximum) && $contribution_Percentage_Maximum < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($contribution_Percentage_Maximum, true)), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($contribution_Percentage_Maximum) && mb_strlen(preg_replace('/(\D)/', '', $contribution_Percentage_Maximum)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($contribution_Percentage_Maximum, true), mb_strlen(preg_replace('/(\D)/', '', $contribution_Percentage_Maximum))), __LINE__);
        }
        $this->Contribution_Percentage_Maximum = $contribution_Percentage_Maximum;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Employee_Contribution_Percentage_DataType
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
