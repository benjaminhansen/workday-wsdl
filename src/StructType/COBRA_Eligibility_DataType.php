<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for COBRA_Eligibility_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains COBRA Eligibility detail for a participant. If this element is not populated then the participant is assumed to not be COBRA eligible.
 * @subpackage Structs
 */
class COBRA_Eligibility_DataType extends AbstractStructBase
{
    /**
     * The COBRA_Eligibility_Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: The reason why the participant is eligible for COBRA. The reason is required if the participant is eligible for COBRA..
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\COBRA_Eligibility_ReasonObjectType
     */
    public $COBRA_Eligibility_Reason_Reference;
    /**
     * The Eligible_Date
     * Meta information extracted from the WSDL
     * - documentation: The COBRA Eligible Date is the day the worker is eligible for COBRA coverage. It represents the worker's Last day of Coverage + 1 day. For example, if an employee terminated on June 28th and was covered to the end of the month (June
     * 30th), you would enter the COBRA Eligible Date as July 1st.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Eligible_Date;
    /**
     * The Loss_of_Coverage_Date
     * Meta information extracted from the WSDL
     * - documentation: The Qualifying Event Date is the date of the event that caused the worker to be eligible for COBRA. For example, in the case of a dependent that is now over age, you would enter the birth date. If an employee has a reduction in hours
     * and is now eligible for COBRA, you would enter the date they went from full-time to part-time.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Loss_of_Coverage_Date;
    /**
     * The Coverage_End_Date
     * Meta information extracted from the WSDL
     * - documentation: The date COBRA coverage ends for an employee or dependent. This is only required when the COBRA coverage ends on a different date than the COBRA provider would normally determine.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Coverage_End_Date;
    /**
     * The Benefit_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Benefit Plan whose coverage was lost.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Benefit_PlanObjectType
     */
    public $Benefit_Plan_Reference;
    /**
     * Constructor method for COBRA_Eligibility_DataType
     * @uses COBRA_Eligibility_DataType::setCOBRA_Eligibility_Reason_Reference()
     * @uses COBRA_Eligibility_DataType::setEligible_Date()
     * @uses COBRA_Eligibility_DataType::setLoss_of_Coverage_Date()
     * @uses COBRA_Eligibility_DataType::setCoverage_End_Date()
     * @uses COBRA_Eligibility_DataType::setBenefit_Plan_Reference()
     * @param \WorkdayWsdl\\StructType\COBRA_Eligibility_ReasonObjectType $cOBRA_Eligibility_Reason_Reference
     * @param string $eligible_Date
     * @param string $loss_of_Coverage_Date
     * @param string $coverage_End_Date
     * @param \WorkdayWsdl\\StructType\Benefit_PlanObjectType $benefit_Plan_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\COBRA_Eligibility_ReasonObjectType $cOBRA_Eligibility_Reason_Reference = null, $eligible_Date = null, $loss_of_Coverage_Date = null, $coverage_End_Date = null, \WorkdayWsdl\\StructType\Benefit_PlanObjectType $benefit_Plan_Reference = null)
    {
        $this
            ->setCOBRA_Eligibility_Reason_Reference($cOBRA_Eligibility_Reason_Reference)
            ->setEligible_Date($eligible_Date)
            ->setLoss_of_Coverage_Date($loss_of_Coverage_Date)
            ->setCoverage_End_Date($coverage_End_Date)
            ->setBenefit_Plan_Reference($benefit_Plan_Reference);
    }
    /**
     * Get COBRA_Eligibility_Reason_Reference value
     * @return \WorkdayWsdl\\StructType\COBRA_Eligibility_ReasonObjectType|null
     */
    public function getCOBRA_Eligibility_Reason_Reference()
    {
        return $this->COBRA_Eligibility_Reason_Reference;
    }
    /**
     * Set COBRA_Eligibility_Reason_Reference value
     * @param \WorkdayWsdl\\StructType\COBRA_Eligibility_ReasonObjectType $cOBRA_Eligibility_Reason_Reference
     * @return \WorkdayWsdl\\StructType\COBRA_Eligibility_DataType
     */
    public function setCOBRA_Eligibility_Reason_Reference(\WorkdayWsdl\\StructType\COBRA_Eligibility_ReasonObjectType $cOBRA_Eligibility_Reason_Reference = null)
    {
        $this->COBRA_Eligibility_Reason_Reference = $cOBRA_Eligibility_Reason_Reference;
        return $this;
    }
    /**
     * Get Eligible_Date value
     * @return string|null
     */
    public function getEligible_Date()
    {
        return $this->Eligible_Date;
    }
    /**
     * Set Eligible_Date value
     * @param string $eligible_Date
     * @return \WorkdayWsdl\\StructType\COBRA_Eligibility_DataType
     */
    public function setEligible_Date($eligible_Date = null)
    {
        // validation for constraint: string
        if (!is_null($eligible_Date) && !is_string($eligible_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eligible_Date, true), gettype($eligible_Date)), __LINE__);
        }
        $this->Eligible_Date = $eligible_Date;
        return $this;
    }
    /**
     * Get Loss_of_Coverage_Date value
     * @return string|null
     */
    public function getLoss_of_Coverage_Date()
    {
        return $this->Loss_of_Coverage_Date;
    }
    /**
     * Set Loss_of_Coverage_Date value
     * @param string $loss_of_Coverage_Date
     * @return \WorkdayWsdl\\StructType\COBRA_Eligibility_DataType
     */
    public function setLoss_of_Coverage_Date($loss_of_Coverage_Date = null)
    {
        // validation for constraint: string
        if (!is_null($loss_of_Coverage_Date) && !is_string($loss_of_Coverage_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loss_of_Coverage_Date, true), gettype($loss_of_Coverage_Date)), __LINE__);
        }
        $this->Loss_of_Coverage_Date = $loss_of_Coverage_Date;
        return $this;
    }
    /**
     * Get Coverage_End_Date value
     * @return string|null
     */
    public function getCoverage_End_Date()
    {
        return $this->Coverage_End_Date;
    }
    /**
     * Set Coverage_End_Date value
     * @param string $coverage_End_Date
     * @return \WorkdayWsdl\\StructType\COBRA_Eligibility_DataType
     */
    public function setCoverage_End_Date($coverage_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($coverage_End_Date) && !is_string($coverage_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($coverage_End_Date, true), gettype($coverage_End_Date)), __LINE__);
        }
        $this->Coverage_End_Date = $coverage_End_Date;
        return $this;
    }
    /**
     * Get Benefit_Plan_Reference value
     * @return \WorkdayWsdl\\StructType\Benefit_PlanObjectType|null
     */
    public function getBenefit_Plan_Reference()
    {
        return $this->Benefit_Plan_Reference;
    }
    /**
     * Set Benefit_Plan_Reference value
     * @param \WorkdayWsdl\\StructType\Benefit_PlanObjectType $benefit_Plan_Reference
     * @return \WorkdayWsdl\\StructType\COBRA_Eligibility_DataType
     */
    public function setBenefit_Plan_Reference(\WorkdayWsdl\\StructType\Benefit_PlanObjectType $benefit_Plan_Reference = null)
    {
        $this->Benefit_Plan_Reference = $benefit_Plan_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\COBRA_Eligibility_DataType
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
