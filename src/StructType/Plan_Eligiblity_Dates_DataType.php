<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Plan_Eligiblity_Dates_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about the Earliest and Earliest Contiguous Eligiblility Dates for Retirement Plans which are Part of a Plan Year
 * @subpackage Structs
 */
class Plan_Eligiblity_Dates_DataType extends AbstractStructBase
{
    /**
     * The Benefit_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Benefit Plan for these Dates
     * - minOccurs: 0
     * @var \StructType\Benefit_PlanObjectType
     */
    public $Benefit_Plan_Reference;
    /**
     * The Earliest_Eligibility_Date
     * Meta information extracted from the WSDL
     * - documentation: The earliest date that the worker was ever eligible for this plan, ignoring gaps in coverage.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Earliest_Eligibility_Date;
    /**
     * The Earliest_Contiguous_Eligibility_Date
     * Meta information extracted from the WSDL
     * - documentation: The earliest date that the worker was contiguously eligible for this plan (accounting for gaps in coverage).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Earliest_Contiguous_Eligibility_Date;
    /**
     * Constructor method for Plan_Eligiblity_Dates_DataType
     * @uses Plan_Eligiblity_Dates_DataType::setBenefit_Plan_Reference()
     * @uses Plan_Eligiblity_Dates_DataType::setEarliest_Eligibility_Date()
     * @uses Plan_Eligiblity_Dates_DataType::setEarliest_Contiguous_Eligibility_Date()
     * @param \StructType\Benefit_PlanObjectType $benefit_Plan_Reference
     * @param string $earliest_Eligibility_Date
     * @param string $earliest_Contiguous_Eligibility_Date
     */
    public function __construct(\StructType\Benefit_PlanObjectType $benefit_Plan_Reference = null, $earliest_Eligibility_Date = null, $earliest_Contiguous_Eligibility_Date = null)
    {
        $this
            ->setBenefit_Plan_Reference($benefit_Plan_Reference)
            ->setEarliest_Eligibility_Date($earliest_Eligibility_Date)
            ->setEarliest_Contiguous_Eligibility_Date($earliest_Contiguous_Eligibility_Date);
    }
    /**
     * Get Benefit_Plan_Reference value
     * @return \StructType\Benefit_PlanObjectType|null
     */
    public function getBenefit_Plan_Reference()
    {
        return $this->Benefit_Plan_Reference;
    }
    /**
     * Set Benefit_Plan_Reference value
     * @param \StructType\Benefit_PlanObjectType $benefit_Plan_Reference
     * @return \StructType\Plan_Eligiblity_Dates_DataType
     */
    public function setBenefit_Plan_Reference(\StructType\Benefit_PlanObjectType $benefit_Plan_Reference = null)
    {
        $this->Benefit_Plan_Reference = $benefit_Plan_Reference;
        return $this;
    }
    /**
     * Get Earliest_Eligibility_Date value
     * @return string|null
     */
    public function getEarliest_Eligibility_Date()
    {
        return $this->Earliest_Eligibility_Date;
    }
    /**
     * Set Earliest_Eligibility_Date value
     * @param string $earliest_Eligibility_Date
     * @return \StructType\Plan_Eligiblity_Dates_DataType
     */
    public function setEarliest_Eligibility_Date($earliest_Eligibility_Date = null)
    {
        // validation for constraint: string
        if (!is_null($earliest_Eligibility_Date) && !is_string($earliest_Eligibility_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($earliest_Eligibility_Date, true), gettype($earliest_Eligibility_Date)), __LINE__);
        }
        $this->Earliest_Eligibility_Date = $earliest_Eligibility_Date;
        return $this;
    }
    /**
     * Get Earliest_Contiguous_Eligibility_Date value
     * @return string|null
     */
    public function getEarliest_Contiguous_Eligibility_Date()
    {
        return $this->Earliest_Contiguous_Eligibility_Date;
    }
    /**
     * Set Earliest_Contiguous_Eligibility_Date value
     * @param string $earliest_Contiguous_Eligibility_Date
     * @return \StructType\Plan_Eligiblity_Dates_DataType
     */
    public function setEarliest_Contiguous_Eligibility_Date($earliest_Contiguous_Eligibility_Date = null)
    {
        // validation for constraint: string
        if (!is_null($earliest_Contiguous_Eligibility_Date) && !is_string($earliest_Contiguous_Eligibility_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($earliest_Contiguous_Eligibility_Date, true), gettype($earliest_Contiguous_Eligibility_Date)), __LINE__);
        }
        $this->Earliest_Contiguous_Eligibility_Date = $earliest_Contiguous_Eligibility_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Plan_Eligiblity_Dates_DataType
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
