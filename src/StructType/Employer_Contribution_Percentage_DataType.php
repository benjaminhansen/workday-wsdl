<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employer_Contribution_Percentage_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: This section holds the employer contribution if the plan includes employer contributions and the contributions are stated in percentages.
 * @subpackage Structs
 */
class Employer_Contribution_Percentage_DataType extends AbstractStructBase
{
    /**
     * The Election_Percentage
     * Meta information extracted from the WSDL
     * - documentation: The employee's election. This is the percent that should be taken as a deduction. | The employer's contribution.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 5
     * @var float
     */
    public $Election_Percentage;
    /**
     * Constructor method for Employer_Contribution_Percentage_DataType
     * @uses Employer_Contribution_Percentage_DataType::setElection_Percentage()
     * @param float $election_Percentage
     */
    public function __construct($election_Percentage = null)
    {
        $this
            ->setElection_Percentage($election_Percentage);
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
     * @return \WorkdayWsdl\\StructType\Employer_Contribution_Percentage_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Employer_Contribution_Percentage_DataType
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
