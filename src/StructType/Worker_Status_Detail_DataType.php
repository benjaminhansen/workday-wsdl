<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Status_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Status data for a Worker.
 * @subpackage Structs
 */
class Worker_Status_Detail_DataType extends AbstractStructBase
{
    /**
     * The Active
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the Worker is Active.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Active;
    /**
     * The Active_Status_Date
     * Meta information extracted from the WSDL
     * - documentation: The most recent date the employee's status was changed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Active_Status_Date;
    /**
     * The Hire_Date
     * Meta information extracted from the WSDL
     * - documentation: The most recent hire date for the employee or contract start date for the contingent worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Hire_Date;
    /**
     * The Original_Hire_Date
     * Meta information extracted from the WSDL
     * - documentation: Earliest Hire Date for the Worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Original_Hire_Date;
    /**
     * The Hire_Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reason for Hire from the most recent Hire event.
     * - minOccurs: 0
     * @var \StructType\General_Event_SubcategoryObjectType
     */
    public $Hire_Reason_Reference;
    /**
     * The End_Employment_Date
     * Meta information extracted from the WSDL
     * - documentation: Employment End Date for the Worker. This field is informational only. The value is effective immediately on update.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Employment_Date;
    /**
     * The Continuous_Service_Date
     * Meta information extracted from the WSDL
     * - documentation: Continuous Service Date for the Worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Continuous_Service_Date;
    /**
     * The First_Day_of_Work
     * Meta information extracted from the WSDL
     * - documentation: First Day of Work only applies to the Payroll web service.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $First_Day_of_Work;
    /**
     * The Expected_Retirement_Date
     * Meta information extracted from the WSDL
     * - documentation: Expected retirement date for the worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expected_Retirement_Date;
    /**
     * The Retirement_Eligibility_Date
     * Meta information extracted from the WSDL
     * - documentation: Retirement Eligibility Date for the Worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Retirement_Eligibility_Date;
    /**
     * The Retired
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the Worker is currently retired.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Retired;
    /**
     * The Retirement_Date
     * Meta information extracted from the WSDL
     * - documentation: Most recent Retirement Date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Retirement_Date;
    /**
     * The Seniority_Date
     * Meta information extracted from the WSDL
     * - documentation: Seniority date for the worker. Defaults to hire date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Seniority_Date;
    /**
     * The Severance_Date
     * Meta information extracted from the WSDL
     * - documentation: Severance date for the worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Severance_Date;
    /**
     * The Benefits_Service_Date
     * Meta information extracted from the WSDL
     * - documentation: The Benefits Service Date in the employee's service dates. If empty, Workday will use the existing date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Benefits_Service_Date;
    /**
     * The Company_Service_Date
     * Meta information extracted from the WSDL
     * - documentation: The Company Service Date in the employee's service dates. If empty, Workday will use the existing date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Company_Service_Date;
    /**
     * The Time_Off_Service_Date
     * Meta information extracted from the WSDL
     * - documentation: The Time Off Service Date in the worker's service dates. If empty, Workday will use the existing date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Time_Off_Service_Date;
    /**
     * The Vesting_Date
     * Meta information extracted from the WSDL
     * - documentation: The Vesting Date in the employee's service dates. If empty, Workday will use the existing date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Vesting_Date;
    /**
     * The Date_Entered_Workforce
     * Meta information extracted from the WSDL
     * - documentation: The Date Entered Workforce in the employee's service dates. If empty, Workday will use the existing date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_Entered_Workforce;
    /**
     * The Days_Unemployed
     * Meta information extracted from the WSDL
     * - documentation: Number of days unemployed since the employee first joined the work force. Used only for China.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 12
     * @var float
     */
    public $Days_Unemployed;
    /**
     * The Months_Continuous_Prior_Employment
     * Meta information extracted from the WSDL
     * - documentation: Number of months of continuous prior employment at the employee's most recent job. Used only for China.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 14
     * @var float
     */
    public $Months_Continuous_Prior_Employment;
    /**
     * The Terminated
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the Worker is currently Terminated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Terminated;
    /**
     * The Termination_Date
     * Meta information extracted from the WSDL
     * - documentation: Most recent Termination Date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Termination_Date;
    /**
     * The Pay_Through_Date
     * Meta information extracted from the WSDL
     * - documentation: The payroll pay through date from the worker's most recent termination.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Pay_Through_Date;
    /**
     * The Primary_Termination_Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: The primary reason for the worker's most recent termination.
     * - minOccurs: 0
     * @var \StructType\Termination_SubcategoryObjectType
     */
    public $Primary_Termination_Reason_Reference;
    /**
     * The Primary_Termination_Category_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to primary termination reason category.
     * - minOccurs: 0
     * @var \StructType\Event_Classification_CategoryObjectType
     */
    public $Primary_Termination_Category_Reference;
    /**
     * The Termination_Involuntary
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the termination was involuntary.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Termination_Involuntary;
    /**
     * The Secondary_Termination_Reasons_Data
     * Meta information extracted from the WSDL
     * - documentation: Secondary Termination Reasons Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Secondary_Termination_DataType[]
     */
    public $Secondary_Termination_Reasons_Data;
    /**
     * The Local_Termination_Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: The local reason for the worker's most recent termination.
     * - minOccurs: 0
     * @var \StructType\Local_Termination_ReasonObjectType
     */
    public $Local_Termination_Reason_Reference;
    /**
     * The Eligible_for_Hire_Reference
     * Meta information extracted from the WSDL
     * - documentation: The ~pre-hire’s~ hire eligibility status.
     * - minOccurs: 0
     * @var \StructType\Common_Yes_NoObjectType
     */
    public $Eligible_for_Hire_Reference;
    /**
     * The Regrettable_Termination
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether the termination was regrettable.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Regrettable_Termination;
    /**
     * The Eligible_for_Rehire_on_Latest_Termination_Reference
     * Meta information extracted from the WSDL
     * - documentation: The ~worker’s~ rehire eligibility status as stated on their most recent termination.
     * - minOccurs: 0
     * @var \StructType\Common_Yes_NoObjectType
     */
    public $Eligible_for_Rehire_on_Latest_Termination_Reference;
    /**
     * The Hire_Rescinded
     * Meta information extracted from the WSDL
     * - documentation: If True, the Employee's hire was rescinded.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Hire_Rescinded;
    /**
     * The Termination_Last_Day_of_Work
     * Meta information extracted from the WSDL
     * - documentation: Last day worked for the worker's termination event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Termination_Last_Day_of_Work;
    /**
     * The Resignation_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the employee submitted their resignation.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Resignation_Date;
    /**
     * The Last_Date_for_Which_Paid
     * Meta information extracted from the WSDL
     * - documentation: The last date for which the Canadian worker is paid as specified on the most recent termination transaction for the worker. This field is specific to Canadian employment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Date_for_Which_Paid;
    /**
     * The Expected_Date_of_Return
     * Meta information extracted from the WSDL
     * - documentation: The date the Canadian worker is expected to return as specified on the most recent termination transaction for the worker. This field is specific to Canadian employment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expected_Date_of_Return;
    /**
     * The Not_Returning
     * Meta information extracted from the WSDL
     * - documentation: Returns "Yes" if the Canadian worker is not expected to return as specified on the most recent termination transaction. This field is specific to Canadian employment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Not_Returning;
    /**
     * The Return_Unknown
     * Meta information extracted from the WSDL
     * - documentation: Returns "Yes" if it is unknown if the Canadian worker is expected to return as specified on the most recent termination transaction. This field is specific to Canadian employment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Return_Unknown;
    /**
     * The Probation_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Primary Position Probation Start Date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Probation_Start_Date;
    /**
     * The Probation_End_Date
     * Meta information extracted from the WSDL
     * - documentation: Primary Position Probation End Date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Probation_End_Date;
    /**
     * The Leave_Status_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containg all Leave Status data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Leave_Status_Detail_DataType[]
     */
    public $Leave_Status_Data;
    /**
     * The Leave_Requests_Corrected_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing leave requests that have been corrected.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Leave_Requests_Corrected_Detail_DataType[]
     */
    public $Leave_Requests_Corrected_Data;
    /**
     * The Academic_Tenure_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the worker received tenure.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Academic_Tenure_Date;
    /**
     * The Rehire
     * Meta information extracted from the WSDL
     * - documentation: Returns "Yes" if the worker is a rehire based on the most recent hire event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Rehire;
    /**
     * Constructor method for Worker_Status_Detail_DataType
     * @uses Worker_Status_Detail_DataType::setActive()
     * @uses Worker_Status_Detail_DataType::setActive_Status_Date()
     * @uses Worker_Status_Detail_DataType::setHire_Date()
     * @uses Worker_Status_Detail_DataType::setOriginal_Hire_Date()
     * @uses Worker_Status_Detail_DataType::setHire_Reason_Reference()
     * @uses Worker_Status_Detail_DataType::setEnd_Employment_Date()
     * @uses Worker_Status_Detail_DataType::setContinuous_Service_Date()
     * @uses Worker_Status_Detail_DataType::setFirst_Day_of_Work()
     * @uses Worker_Status_Detail_DataType::setExpected_Retirement_Date()
     * @uses Worker_Status_Detail_DataType::setRetirement_Eligibility_Date()
     * @uses Worker_Status_Detail_DataType::setRetired()
     * @uses Worker_Status_Detail_DataType::setRetirement_Date()
     * @uses Worker_Status_Detail_DataType::setSeniority_Date()
     * @uses Worker_Status_Detail_DataType::setSeverance_Date()
     * @uses Worker_Status_Detail_DataType::setBenefits_Service_Date()
     * @uses Worker_Status_Detail_DataType::setCompany_Service_Date()
     * @uses Worker_Status_Detail_DataType::setTime_Off_Service_Date()
     * @uses Worker_Status_Detail_DataType::setVesting_Date()
     * @uses Worker_Status_Detail_DataType::setDate_Entered_Workforce()
     * @uses Worker_Status_Detail_DataType::setDays_Unemployed()
     * @uses Worker_Status_Detail_DataType::setMonths_Continuous_Prior_Employment()
     * @uses Worker_Status_Detail_DataType::setTerminated()
     * @uses Worker_Status_Detail_DataType::setTermination_Date()
     * @uses Worker_Status_Detail_DataType::setPay_Through_Date()
     * @uses Worker_Status_Detail_DataType::setPrimary_Termination_Reason_Reference()
     * @uses Worker_Status_Detail_DataType::setPrimary_Termination_Category_Reference()
     * @uses Worker_Status_Detail_DataType::setTermination_Involuntary()
     * @uses Worker_Status_Detail_DataType::setSecondary_Termination_Reasons_Data()
     * @uses Worker_Status_Detail_DataType::setLocal_Termination_Reason_Reference()
     * @uses Worker_Status_Detail_DataType::setEligible_for_Hire_Reference()
     * @uses Worker_Status_Detail_DataType::setRegrettable_Termination()
     * @uses Worker_Status_Detail_DataType::setEligible_for_Rehire_on_Latest_Termination_Reference()
     * @uses Worker_Status_Detail_DataType::setHire_Rescinded()
     * @uses Worker_Status_Detail_DataType::setTermination_Last_Day_of_Work()
     * @uses Worker_Status_Detail_DataType::setResignation_Date()
     * @uses Worker_Status_Detail_DataType::setLast_Date_for_Which_Paid()
     * @uses Worker_Status_Detail_DataType::setExpected_Date_of_Return()
     * @uses Worker_Status_Detail_DataType::setNot_Returning()
     * @uses Worker_Status_Detail_DataType::setReturn_Unknown()
     * @uses Worker_Status_Detail_DataType::setProbation_Start_Date()
     * @uses Worker_Status_Detail_DataType::setProbation_End_Date()
     * @uses Worker_Status_Detail_DataType::setLeave_Status_Data()
     * @uses Worker_Status_Detail_DataType::setLeave_Requests_Corrected_Data()
     * @uses Worker_Status_Detail_DataType::setAcademic_Tenure_Date()
     * @uses Worker_Status_Detail_DataType::setRehire()
     * @param bool $active
     * @param string $active_Status_Date
     * @param string $hire_Date
     * @param string $original_Hire_Date
     * @param \StructType\General_Event_SubcategoryObjectType $hire_Reason_Reference
     * @param string $end_Employment_Date
     * @param string $continuous_Service_Date
     * @param string $first_Day_of_Work
     * @param string $expected_Retirement_Date
     * @param string $retirement_Eligibility_Date
     * @param bool $retired
     * @param string $retirement_Date
     * @param string $seniority_Date
     * @param string $severance_Date
     * @param string $benefits_Service_Date
     * @param string $company_Service_Date
     * @param string $time_Off_Service_Date
     * @param string $vesting_Date
     * @param string $date_Entered_Workforce
     * @param float $days_Unemployed
     * @param float $months_Continuous_Prior_Employment
     * @param bool $terminated
     * @param string $termination_Date
     * @param string $pay_Through_Date
     * @param \StructType\Termination_SubcategoryObjectType $primary_Termination_Reason_Reference
     * @param \StructType\Event_Classification_CategoryObjectType $primary_Termination_Category_Reference
     * @param bool $termination_Involuntary
     * @param \StructType\Secondary_Termination_DataType[] $secondary_Termination_Reasons_Data
     * @param \StructType\Local_Termination_ReasonObjectType $local_Termination_Reason_Reference
     * @param \StructType\Common_Yes_NoObjectType $eligible_for_Hire_Reference
     * @param bool $regrettable_Termination
     * @param \StructType\Common_Yes_NoObjectType $eligible_for_Rehire_on_Latest_Termination_Reference
     * @param bool $hire_Rescinded
     * @param string $termination_Last_Day_of_Work
     * @param string $resignation_Date
     * @param string $last_Date_for_Which_Paid
     * @param string $expected_Date_of_Return
     * @param bool $not_Returning
     * @param bool $return_Unknown
     * @param string $probation_Start_Date
     * @param string $probation_End_Date
     * @param \StructType\Leave_Status_Detail_DataType[] $leave_Status_Data
     * @param \StructType\Leave_Requests_Corrected_Detail_DataType[] $leave_Requests_Corrected_Data
     * @param string $academic_Tenure_Date
     * @param bool $rehire
     */
    public function __construct($active = null, $active_Status_Date = null, $hire_Date = null, $original_Hire_Date = null, \StructType\General_Event_SubcategoryObjectType $hire_Reason_Reference = null, $end_Employment_Date = null, $continuous_Service_Date = null, $first_Day_of_Work = null, $expected_Retirement_Date = null, $retirement_Eligibility_Date = null, $retired = null, $retirement_Date = null, $seniority_Date = null, $severance_Date = null, $benefits_Service_Date = null, $company_Service_Date = null, $time_Off_Service_Date = null, $vesting_Date = null, $date_Entered_Workforce = null, $days_Unemployed = null, $months_Continuous_Prior_Employment = null, $terminated = null, $termination_Date = null, $pay_Through_Date = null, \StructType\Termination_SubcategoryObjectType $primary_Termination_Reason_Reference = null, \StructType\Event_Classification_CategoryObjectType $primary_Termination_Category_Reference = null, $termination_Involuntary = null, array $secondary_Termination_Reasons_Data = array(), \StructType\Local_Termination_ReasonObjectType $local_Termination_Reason_Reference = null, \StructType\Common_Yes_NoObjectType $eligible_for_Hire_Reference = null, $regrettable_Termination = null, \StructType\Common_Yes_NoObjectType $eligible_for_Rehire_on_Latest_Termination_Reference = null, $hire_Rescinded = null, $termination_Last_Day_of_Work = null, $resignation_Date = null, $last_Date_for_Which_Paid = null, $expected_Date_of_Return = null, $not_Returning = null, $return_Unknown = null, $probation_Start_Date = null, $probation_End_Date = null, array $leave_Status_Data = array(), array $leave_Requests_Corrected_Data = array(), $academic_Tenure_Date = null, $rehire = null)
    {
        $this
            ->setActive($active)
            ->setActive_Status_Date($active_Status_Date)
            ->setHire_Date($hire_Date)
            ->setOriginal_Hire_Date($original_Hire_Date)
            ->setHire_Reason_Reference($hire_Reason_Reference)
            ->setEnd_Employment_Date($end_Employment_Date)
            ->setContinuous_Service_Date($continuous_Service_Date)
            ->setFirst_Day_of_Work($first_Day_of_Work)
            ->setExpected_Retirement_Date($expected_Retirement_Date)
            ->setRetirement_Eligibility_Date($retirement_Eligibility_Date)
            ->setRetired($retired)
            ->setRetirement_Date($retirement_Date)
            ->setSeniority_Date($seniority_Date)
            ->setSeverance_Date($severance_Date)
            ->setBenefits_Service_Date($benefits_Service_Date)
            ->setCompany_Service_Date($company_Service_Date)
            ->setTime_Off_Service_Date($time_Off_Service_Date)
            ->setVesting_Date($vesting_Date)
            ->setDate_Entered_Workforce($date_Entered_Workforce)
            ->setDays_Unemployed($days_Unemployed)
            ->setMonths_Continuous_Prior_Employment($months_Continuous_Prior_Employment)
            ->setTerminated($terminated)
            ->setTermination_Date($termination_Date)
            ->setPay_Through_Date($pay_Through_Date)
            ->setPrimary_Termination_Reason_Reference($primary_Termination_Reason_Reference)
            ->setPrimary_Termination_Category_Reference($primary_Termination_Category_Reference)
            ->setTermination_Involuntary($termination_Involuntary)
            ->setSecondary_Termination_Reasons_Data($secondary_Termination_Reasons_Data)
            ->setLocal_Termination_Reason_Reference($local_Termination_Reason_Reference)
            ->setEligible_for_Hire_Reference($eligible_for_Hire_Reference)
            ->setRegrettable_Termination($regrettable_Termination)
            ->setEligible_for_Rehire_on_Latest_Termination_Reference($eligible_for_Rehire_on_Latest_Termination_Reference)
            ->setHire_Rescinded($hire_Rescinded)
            ->setTermination_Last_Day_of_Work($termination_Last_Day_of_Work)
            ->setResignation_Date($resignation_Date)
            ->setLast_Date_for_Which_Paid($last_Date_for_Which_Paid)
            ->setExpected_Date_of_Return($expected_Date_of_Return)
            ->setNot_Returning($not_Returning)
            ->setReturn_Unknown($return_Unknown)
            ->setProbation_Start_Date($probation_Start_Date)
            ->setProbation_End_Date($probation_End_Date)
            ->setLeave_Status_Data($leave_Status_Data)
            ->setLeave_Requests_Corrected_Data($leave_Requests_Corrected_Data)
            ->setAcademic_Tenure_Date($academic_Tenure_Date)
            ->setRehire($rehire);
    }
    /**
     * Get Active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->Active;
    }
    /**
     * Set Active value
     * @param bool $active
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->Active = $active;
        return $this;
    }
    /**
     * Get Active_Status_Date value
     * @return string|null
     */
    public function getActive_Status_Date()
    {
        return $this->Active_Status_Date;
    }
    /**
     * Set Active_Status_Date value
     * @param string $active_Status_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setActive_Status_Date($active_Status_Date = null)
    {
        // validation for constraint: string
        if (!is_null($active_Status_Date) && !is_string($active_Status_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($active_Status_Date, true), gettype($active_Status_Date)), __LINE__);
        }
        $this->Active_Status_Date = $active_Status_Date;
        return $this;
    }
    /**
     * Get Hire_Date value
     * @return string|null
     */
    public function getHire_Date()
    {
        return $this->Hire_Date;
    }
    /**
     * Set Hire_Date value
     * @param string $hire_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setHire_Date($hire_Date = null)
    {
        // validation for constraint: string
        if (!is_null($hire_Date) && !is_string($hire_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hire_Date, true), gettype($hire_Date)), __LINE__);
        }
        $this->Hire_Date = $hire_Date;
        return $this;
    }
    /**
     * Get Original_Hire_Date value
     * @return string|null
     */
    public function getOriginal_Hire_Date()
    {
        return $this->Original_Hire_Date;
    }
    /**
     * Set Original_Hire_Date value
     * @param string $original_Hire_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setOriginal_Hire_Date($original_Hire_Date = null)
    {
        // validation for constraint: string
        if (!is_null($original_Hire_Date) && !is_string($original_Hire_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($original_Hire_Date, true), gettype($original_Hire_Date)), __LINE__);
        }
        $this->Original_Hire_Date = $original_Hire_Date;
        return $this;
    }
    /**
     * Get Hire_Reason_Reference value
     * @return \StructType\General_Event_SubcategoryObjectType|null
     */
    public function getHire_Reason_Reference()
    {
        return $this->Hire_Reason_Reference;
    }
    /**
     * Set Hire_Reason_Reference value
     * @param \StructType\General_Event_SubcategoryObjectType $hire_Reason_Reference
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setHire_Reason_Reference(\StructType\General_Event_SubcategoryObjectType $hire_Reason_Reference = null)
    {
        $this->Hire_Reason_Reference = $hire_Reason_Reference;
        return $this;
    }
    /**
     * Get End_Employment_Date value
     * @return string|null
     */
    public function getEnd_Employment_Date()
    {
        return $this->End_Employment_Date;
    }
    /**
     * Set End_Employment_Date value
     * @param string $end_Employment_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setEnd_Employment_Date($end_Employment_Date = null)
    {
        // validation for constraint: string
        if (!is_null($end_Employment_Date) && !is_string($end_Employment_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_Employment_Date, true), gettype($end_Employment_Date)), __LINE__);
        }
        $this->End_Employment_Date = $end_Employment_Date;
        return $this;
    }
    /**
     * Get Continuous_Service_Date value
     * @return string|null
     */
    public function getContinuous_Service_Date()
    {
        return $this->Continuous_Service_Date;
    }
    /**
     * Set Continuous_Service_Date value
     * @param string $continuous_Service_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setContinuous_Service_Date($continuous_Service_Date = null)
    {
        // validation for constraint: string
        if (!is_null($continuous_Service_Date) && !is_string($continuous_Service_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($continuous_Service_Date, true), gettype($continuous_Service_Date)), __LINE__);
        }
        $this->Continuous_Service_Date = $continuous_Service_Date;
        return $this;
    }
    /**
     * Get First_Day_of_Work value
     * @return string|null
     */
    public function getFirst_Day_of_Work()
    {
        return $this->First_Day_of_Work;
    }
    /**
     * Set First_Day_of_Work value
     * @param string $first_Day_of_Work
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setFirst_Day_of_Work($first_Day_of_Work = null)
    {
        // validation for constraint: string
        if (!is_null($first_Day_of_Work) && !is_string($first_Day_of_Work)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first_Day_of_Work, true), gettype($first_Day_of_Work)), __LINE__);
        }
        $this->First_Day_of_Work = $first_Day_of_Work;
        return $this;
    }
    /**
     * Get Expected_Retirement_Date value
     * @return string|null
     */
    public function getExpected_Retirement_Date()
    {
        return $this->Expected_Retirement_Date;
    }
    /**
     * Set Expected_Retirement_Date value
     * @param string $expected_Retirement_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setExpected_Retirement_Date($expected_Retirement_Date = null)
    {
        // validation for constraint: string
        if (!is_null($expected_Retirement_Date) && !is_string($expected_Retirement_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expected_Retirement_Date, true), gettype($expected_Retirement_Date)), __LINE__);
        }
        $this->Expected_Retirement_Date = $expected_Retirement_Date;
        return $this;
    }
    /**
     * Get Retirement_Eligibility_Date value
     * @return string|null
     */
    public function getRetirement_Eligibility_Date()
    {
        return $this->Retirement_Eligibility_Date;
    }
    /**
     * Set Retirement_Eligibility_Date value
     * @param string $retirement_Eligibility_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setRetirement_Eligibility_Date($retirement_Eligibility_Date = null)
    {
        // validation for constraint: string
        if (!is_null($retirement_Eligibility_Date) && !is_string($retirement_Eligibility_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retirement_Eligibility_Date, true), gettype($retirement_Eligibility_Date)), __LINE__);
        }
        $this->Retirement_Eligibility_Date = $retirement_Eligibility_Date;
        return $this;
    }
    /**
     * Get Retired value
     * @return bool|null
     */
    public function getRetired()
    {
        return $this->Retired;
    }
    /**
     * Set Retired value
     * @param bool $retired
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setRetired($retired = null)
    {
        // validation for constraint: boolean
        if (!is_null($retired) && !is_bool($retired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($retired, true), gettype($retired)), __LINE__);
        }
        $this->Retired = $retired;
        return $this;
    }
    /**
     * Get Retirement_Date value
     * @return string|null
     */
    public function getRetirement_Date()
    {
        return $this->Retirement_Date;
    }
    /**
     * Set Retirement_Date value
     * @param string $retirement_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setRetirement_Date($retirement_Date = null)
    {
        // validation for constraint: string
        if (!is_null($retirement_Date) && !is_string($retirement_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retirement_Date, true), gettype($retirement_Date)), __LINE__);
        }
        $this->Retirement_Date = $retirement_Date;
        return $this;
    }
    /**
     * Get Seniority_Date value
     * @return string|null
     */
    public function getSeniority_Date()
    {
        return $this->Seniority_Date;
    }
    /**
     * Set Seniority_Date value
     * @param string $seniority_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setSeniority_Date($seniority_Date = null)
    {
        // validation for constraint: string
        if (!is_null($seniority_Date) && !is_string($seniority_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seniority_Date, true), gettype($seniority_Date)), __LINE__);
        }
        $this->Seniority_Date = $seniority_Date;
        return $this;
    }
    /**
     * Get Severance_Date value
     * @return string|null
     */
    public function getSeverance_Date()
    {
        return $this->Severance_Date;
    }
    /**
     * Set Severance_Date value
     * @param string $severance_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setSeverance_Date($severance_Date = null)
    {
        // validation for constraint: string
        if (!is_null($severance_Date) && !is_string($severance_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($severance_Date, true), gettype($severance_Date)), __LINE__);
        }
        $this->Severance_Date = $severance_Date;
        return $this;
    }
    /**
     * Get Benefits_Service_Date value
     * @return string|null
     */
    public function getBenefits_Service_Date()
    {
        return $this->Benefits_Service_Date;
    }
    /**
     * Set Benefits_Service_Date value
     * @param string $benefits_Service_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setBenefits_Service_Date($benefits_Service_Date = null)
    {
        // validation for constraint: string
        if (!is_null($benefits_Service_Date) && !is_string($benefits_Service_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($benefits_Service_Date, true), gettype($benefits_Service_Date)), __LINE__);
        }
        $this->Benefits_Service_Date = $benefits_Service_Date;
        return $this;
    }
    /**
     * Get Company_Service_Date value
     * @return string|null
     */
    public function getCompany_Service_Date()
    {
        return $this->Company_Service_Date;
    }
    /**
     * Set Company_Service_Date value
     * @param string $company_Service_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setCompany_Service_Date($company_Service_Date = null)
    {
        // validation for constraint: string
        if (!is_null($company_Service_Date) && !is_string($company_Service_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company_Service_Date, true), gettype($company_Service_Date)), __LINE__);
        }
        $this->Company_Service_Date = $company_Service_Date;
        return $this;
    }
    /**
     * Get Time_Off_Service_Date value
     * @return string|null
     */
    public function getTime_Off_Service_Date()
    {
        return $this->Time_Off_Service_Date;
    }
    /**
     * Set Time_Off_Service_Date value
     * @param string $time_Off_Service_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setTime_Off_Service_Date($time_Off_Service_Date = null)
    {
        // validation for constraint: string
        if (!is_null($time_Off_Service_Date) && !is_string($time_Off_Service_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time_Off_Service_Date, true), gettype($time_Off_Service_Date)), __LINE__);
        }
        $this->Time_Off_Service_Date = $time_Off_Service_Date;
        return $this;
    }
    /**
     * Get Vesting_Date value
     * @return string|null
     */
    public function getVesting_Date()
    {
        return $this->Vesting_Date;
    }
    /**
     * Set Vesting_Date value
     * @param string $vesting_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setVesting_Date($vesting_Date = null)
    {
        // validation for constraint: string
        if (!is_null($vesting_Date) && !is_string($vesting_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vesting_Date, true), gettype($vesting_Date)), __LINE__);
        }
        $this->Vesting_Date = $vesting_Date;
        return $this;
    }
    /**
     * Get Date_Entered_Workforce value
     * @return string|null
     */
    public function getDate_Entered_Workforce()
    {
        return $this->Date_Entered_Workforce;
    }
    /**
     * Set Date_Entered_Workforce value
     * @param string $date_Entered_Workforce
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setDate_Entered_Workforce($date_Entered_Workforce = null)
    {
        // validation for constraint: string
        if (!is_null($date_Entered_Workforce) && !is_string($date_Entered_Workforce)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_Entered_Workforce, true), gettype($date_Entered_Workforce)), __LINE__);
        }
        $this->Date_Entered_Workforce = $date_Entered_Workforce;
        return $this;
    }
    /**
     * Get Days_Unemployed value
     * @return float|null
     */
    public function getDays_Unemployed()
    {
        return $this->Days_Unemployed;
    }
    /**
     * Set Days_Unemployed value
     * @param float $days_Unemployed
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setDays_Unemployed($days_Unemployed = null)
    {
        // validation for constraint: float
        if (!is_null($days_Unemployed) && !(is_float($days_Unemployed) || is_numeric($days_Unemployed))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($days_Unemployed, true), gettype($days_Unemployed)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($days_Unemployed) && mb_strlen(mb_substr($days_Unemployed, mb_strpos($days_Unemployed, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($days_Unemployed, true), mb_strlen(mb_substr($days_Unemployed, mb_strpos($days_Unemployed, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($days_Unemployed) && $days_Unemployed < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($days_Unemployed, true)), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($days_Unemployed) && mb_strlen(preg_replace('/(\D)/', '', $days_Unemployed)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($days_Unemployed, true), mb_strlen(preg_replace('/(\D)/', '', $days_Unemployed))), __LINE__);
        }
        $this->Days_Unemployed = $days_Unemployed;
        return $this;
    }
    /**
     * Get Months_Continuous_Prior_Employment value
     * @return float|null
     */
    public function getMonths_Continuous_Prior_Employment()
    {
        return $this->Months_Continuous_Prior_Employment;
    }
    /**
     * Set Months_Continuous_Prior_Employment value
     * @param float $months_Continuous_Prior_Employment
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setMonths_Continuous_Prior_Employment($months_Continuous_Prior_Employment = null)
    {
        // validation for constraint: float
        if (!is_null($months_Continuous_Prior_Employment) && !(is_float($months_Continuous_Prior_Employment) || is_numeric($months_Continuous_Prior_Employment))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($months_Continuous_Prior_Employment, true), gettype($months_Continuous_Prior_Employment)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($months_Continuous_Prior_Employment) && mb_strlen(mb_substr($months_Continuous_Prior_Employment, mb_strpos($months_Continuous_Prior_Employment, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($months_Continuous_Prior_Employment, true), mb_strlen(mb_substr($months_Continuous_Prior_Employment, mb_strpos($months_Continuous_Prior_Employment, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($months_Continuous_Prior_Employment) && $months_Continuous_Prior_Employment < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($months_Continuous_Prior_Employment, true)), __LINE__);
        }
        // validation for constraint: totalDigits(14)
        if (!is_null($months_Continuous_Prior_Employment) && mb_strlen(preg_replace('/(\D)/', '', $months_Continuous_Prior_Employment)) > 14) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 14 digits, "%d" given', var_export($months_Continuous_Prior_Employment, true), mb_strlen(preg_replace('/(\D)/', '', $months_Continuous_Prior_Employment))), __LINE__);
        }
        $this->Months_Continuous_Prior_Employment = $months_Continuous_Prior_Employment;
        return $this;
    }
    /**
     * Get Terminated value
     * @return bool|null
     */
    public function getTerminated()
    {
        return $this->Terminated;
    }
    /**
     * Set Terminated value
     * @param bool $terminated
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setTerminated($terminated = null)
    {
        // validation for constraint: boolean
        if (!is_null($terminated) && !is_bool($terminated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($terminated, true), gettype($terminated)), __LINE__);
        }
        $this->Terminated = $terminated;
        return $this;
    }
    /**
     * Get Termination_Date value
     * @return string|null
     */
    public function getTermination_Date()
    {
        return $this->Termination_Date;
    }
    /**
     * Set Termination_Date value
     * @param string $termination_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setTermination_Date($termination_Date = null)
    {
        // validation for constraint: string
        if (!is_null($termination_Date) && !is_string($termination_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($termination_Date, true), gettype($termination_Date)), __LINE__);
        }
        $this->Termination_Date = $termination_Date;
        return $this;
    }
    /**
     * Get Pay_Through_Date value
     * @return string|null
     */
    public function getPay_Through_Date()
    {
        return $this->Pay_Through_Date;
    }
    /**
     * Set Pay_Through_Date value
     * @param string $pay_Through_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setPay_Through_Date($pay_Through_Date = null)
    {
        // validation for constraint: string
        if (!is_null($pay_Through_Date) && !is_string($pay_Through_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pay_Through_Date, true), gettype($pay_Through_Date)), __LINE__);
        }
        $this->Pay_Through_Date = $pay_Through_Date;
        return $this;
    }
    /**
     * Get Primary_Termination_Reason_Reference value
     * @return \StructType\Termination_SubcategoryObjectType|null
     */
    public function getPrimary_Termination_Reason_Reference()
    {
        return $this->Primary_Termination_Reason_Reference;
    }
    /**
     * Set Primary_Termination_Reason_Reference value
     * @param \StructType\Termination_SubcategoryObjectType $primary_Termination_Reason_Reference
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setPrimary_Termination_Reason_Reference(\StructType\Termination_SubcategoryObjectType $primary_Termination_Reason_Reference = null)
    {
        $this->Primary_Termination_Reason_Reference = $primary_Termination_Reason_Reference;
        return $this;
    }
    /**
     * Get Primary_Termination_Category_Reference value
     * @return \StructType\Event_Classification_CategoryObjectType|null
     */
    public function getPrimary_Termination_Category_Reference()
    {
        return $this->Primary_Termination_Category_Reference;
    }
    /**
     * Set Primary_Termination_Category_Reference value
     * @param \StructType\Event_Classification_CategoryObjectType $primary_Termination_Category_Reference
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setPrimary_Termination_Category_Reference(\StructType\Event_Classification_CategoryObjectType $primary_Termination_Category_Reference = null)
    {
        $this->Primary_Termination_Category_Reference = $primary_Termination_Category_Reference;
        return $this;
    }
    /**
     * Get Termination_Involuntary value
     * @return bool|null
     */
    public function getTermination_Involuntary()
    {
        return $this->Termination_Involuntary;
    }
    /**
     * Set Termination_Involuntary value
     * @param bool $termination_Involuntary
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setTermination_Involuntary($termination_Involuntary = null)
    {
        // validation for constraint: boolean
        if (!is_null($termination_Involuntary) && !is_bool($termination_Involuntary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($termination_Involuntary, true), gettype($termination_Involuntary)), __LINE__);
        }
        $this->Termination_Involuntary = $termination_Involuntary;
        return $this;
    }
    /**
     * Get Secondary_Termination_Reasons_Data value
     * @return \StructType\Secondary_Termination_DataType[]|null
     */
    public function getSecondary_Termination_Reasons_Data()
    {
        return $this->Secondary_Termination_Reasons_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setSecondary_Termination_Reasons_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSecondary_Termination_Reasons_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSecondary_Termination_Reasons_DataForArrayConstraintsFromSetSecondary_Termination_Reasons_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Status_Detail_DataTypeSecondary_Termination_Reasons_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Status_Detail_DataTypeSecondary_Termination_Reasons_DataItem instanceof \StructType\Secondary_Termination_DataType) {
                $invalidValues[] = is_object($worker_Status_Detail_DataTypeSecondary_Termination_Reasons_DataItem) ? get_class($worker_Status_Detail_DataTypeSecondary_Termination_Reasons_DataItem) : sprintf('%s(%s)', gettype($worker_Status_Detail_DataTypeSecondary_Termination_Reasons_DataItem), var_export($worker_Status_Detail_DataTypeSecondary_Termination_Reasons_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Secondary_Termination_Reasons_Data property can only contain items of type \StructType\Secondary_Termination_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Secondary_Termination_Reasons_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Secondary_Termination_DataType[] $secondary_Termination_Reasons_Data
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setSecondary_Termination_Reasons_Data(array $secondary_Termination_Reasons_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($secondary_Termination_Reasons_DataArrayErrorMessage = self::validateSecondary_Termination_Reasons_DataForArrayConstraintsFromSetSecondary_Termination_Reasons_Data($secondary_Termination_Reasons_Data))) {
            throw new \InvalidArgumentException($secondary_Termination_Reasons_DataArrayErrorMessage, __LINE__);
        }
        $this->Secondary_Termination_Reasons_Data = $secondary_Termination_Reasons_Data;
        return $this;
    }
    /**
     * Add item to Secondary_Termination_Reasons_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Secondary_Termination_DataType $item
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function addToSecondary_Termination_Reasons_Data(\StructType\Secondary_Termination_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Secondary_Termination_DataType) {
            throw new \InvalidArgumentException(sprintf('The Secondary_Termination_Reasons_Data property can only contain items of type \StructType\Secondary_Termination_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Secondary_Termination_Reasons_Data[] = $item;
        return $this;
    }
    /**
     * Get Local_Termination_Reason_Reference value
     * @return \StructType\Local_Termination_ReasonObjectType|null
     */
    public function getLocal_Termination_Reason_Reference()
    {
        return $this->Local_Termination_Reason_Reference;
    }
    /**
     * Set Local_Termination_Reason_Reference value
     * @param \StructType\Local_Termination_ReasonObjectType $local_Termination_Reason_Reference
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setLocal_Termination_Reason_Reference(\StructType\Local_Termination_ReasonObjectType $local_Termination_Reason_Reference = null)
    {
        $this->Local_Termination_Reason_Reference = $local_Termination_Reason_Reference;
        return $this;
    }
    /**
     * Get Eligible_for_Hire_Reference value
     * @return \StructType\Common_Yes_NoObjectType|null
     */
    public function getEligible_for_Hire_Reference()
    {
        return $this->Eligible_for_Hire_Reference;
    }
    /**
     * Set Eligible_for_Hire_Reference value
     * @param \StructType\Common_Yes_NoObjectType $eligible_for_Hire_Reference
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setEligible_for_Hire_Reference(\StructType\Common_Yes_NoObjectType $eligible_for_Hire_Reference = null)
    {
        $this->Eligible_for_Hire_Reference = $eligible_for_Hire_Reference;
        return $this;
    }
    /**
     * Get Regrettable_Termination value
     * @return bool|null
     */
    public function getRegrettable_Termination()
    {
        return $this->Regrettable_Termination;
    }
    /**
     * Set Regrettable_Termination value
     * @param bool $regrettable_Termination
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setRegrettable_Termination($regrettable_Termination = null)
    {
        // validation for constraint: boolean
        if (!is_null($regrettable_Termination) && !is_bool($regrettable_Termination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($regrettable_Termination, true), gettype($regrettable_Termination)), __LINE__);
        }
        $this->Regrettable_Termination = $regrettable_Termination;
        return $this;
    }
    /**
     * Get Eligible_for_Rehire_on_Latest_Termination_Reference value
     * @return \StructType\Common_Yes_NoObjectType|null
     */
    public function getEligible_for_Rehire_on_Latest_Termination_Reference()
    {
        return $this->Eligible_for_Rehire_on_Latest_Termination_Reference;
    }
    /**
     * Set Eligible_for_Rehire_on_Latest_Termination_Reference value
     * @param \StructType\Common_Yes_NoObjectType $eligible_for_Rehire_on_Latest_Termination_Reference
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setEligible_for_Rehire_on_Latest_Termination_Reference(\StructType\Common_Yes_NoObjectType $eligible_for_Rehire_on_Latest_Termination_Reference = null)
    {
        $this->Eligible_for_Rehire_on_Latest_Termination_Reference = $eligible_for_Rehire_on_Latest_Termination_Reference;
        return $this;
    }
    /**
     * Get Hire_Rescinded value
     * @return bool|null
     */
    public function getHire_Rescinded()
    {
        return $this->Hire_Rescinded;
    }
    /**
     * Set Hire_Rescinded value
     * @param bool $hire_Rescinded
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setHire_Rescinded($hire_Rescinded = null)
    {
        // validation for constraint: boolean
        if (!is_null($hire_Rescinded) && !is_bool($hire_Rescinded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hire_Rescinded, true), gettype($hire_Rescinded)), __LINE__);
        }
        $this->Hire_Rescinded = $hire_Rescinded;
        return $this;
    }
    /**
     * Get Termination_Last_Day_of_Work value
     * @return string|null
     */
    public function getTermination_Last_Day_of_Work()
    {
        return $this->Termination_Last_Day_of_Work;
    }
    /**
     * Set Termination_Last_Day_of_Work value
     * @param string $termination_Last_Day_of_Work
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setTermination_Last_Day_of_Work($termination_Last_Day_of_Work = null)
    {
        // validation for constraint: string
        if (!is_null($termination_Last_Day_of_Work) && !is_string($termination_Last_Day_of_Work)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($termination_Last_Day_of_Work, true), gettype($termination_Last_Day_of_Work)), __LINE__);
        }
        $this->Termination_Last_Day_of_Work = $termination_Last_Day_of_Work;
        return $this;
    }
    /**
     * Get Resignation_Date value
     * @return string|null
     */
    public function getResignation_Date()
    {
        return $this->Resignation_Date;
    }
    /**
     * Set Resignation_Date value
     * @param string $resignation_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setResignation_Date($resignation_Date = null)
    {
        // validation for constraint: string
        if (!is_null($resignation_Date) && !is_string($resignation_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resignation_Date, true), gettype($resignation_Date)), __LINE__);
        }
        $this->Resignation_Date = $resignation_Date;
        return $this;
    }
    /**
     * Get Last_Date_for_Which_Paid value
     * @return string|null
     */
    public function getLast_Date_for_Which_Paid()
    {
        return $this->Last_Date_for_Which_Paid;
    }
    /**
     * Set Last_Date_for_Which_Paid value
     * @param string $last_Date_for_Which_Paid
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setLast_Date_for_Which_Paid($last_Date_for_Which_Paid = null)
    {
        // validation for constraint: string
        if (!is_null($last_Date_for_Which_Paid) && !is_string($last_Date_for_Which_Paid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Date_for_Which_Paid, true), gettype($last_Date_for_Which_Paid)), __LINE__);
        }
        $this->Last_Date_for_Which_Paid = $last_Date_for_Which_Paid;
        return $this;
    }
    /**
     * Get Expected_Date_of_Return value
     * @return string|null
     */
    public function getExpected_Date_of_Return()
    {
        return $this->Expected_Date_of_Return;
    }
    /**
     * Set Expected_Date_of_Return value
     * @param string $expected_Date_of_Return
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setExpected_Date_of_Return($expected_Date_of_Return = null)
    {
        // validation for constraint: string
        if (!is_null($expected_Date_of_Return) && !is_string($expected_Date_of_Return)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expected_Date_of_Return, true), gettype($expected_Date_of_Return)), __LINE__);
        }
        $this->Expected_Date_of_Return = $expected_Date_of_Return;
        return $this;
    }
    /**
     * Get Not_Returning value
     * @return bool|null
     */
    public function getNot_Returning()
    {
        return $this->Not_Returning;
    }
    /**
     * Set Not_Returning value
     * @param bool $not_Returning
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setNot_Returning($not_Returning = null)
    {
        // validation for constraint: boolean
        if (!is_null($not_Returning) && !is_bool($not_Returning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($not_Returning, true), gettype($not_Returning)), __LINE__);
        }
        $this->Not_Returning = $not_Returning;
        return $this;
    }
    /**
     * Get Return_Unknown value
     * @return bool|null
     */
    public function getReturn_Unknown()
    {
        return $this->Return_Unknown;
    }
    /**
     * Set Return_Unknown value
     * @param bool $return_Unknown
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setReturn_Unknown($return_Unknown = null)
    {
        // validation for constraint: boolean
        if (!is_null($return_Unknown) && !is_bool($return_Unknown)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($return_Unknown, true), gettype($return_Unknown)), __LINE__);
        }
        $this->Return_Unknown = $return_Unknown;
        return $this;
    }
    /**
     * Get Probation_Start_Date value
     * @return string|null
     */
    public function getProbation_Start_Date()
    {
        return $this->Probation_Start_Date;
    }
    /**
     * Set Probation_Start_Date value
     * @param string $probation_Start_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setProbation_Start_Date($probation_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($probation_Start_Date) && !is_string($probation_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($probation_Start_Date, true), gettype($probation_Start_Date)), __LINE__);
        }
        $this->Probation_Start_Date = $probation_Start_Date;
        return $this;
    }
    /**
     * Get Probation_End_Date value
     * @return string|null
     */
    public function getProbation_End_Date()
    {
        return $this->Probation_End_Date;
    }
    /**
     * Set Probation_End_Date value
     * @param string $probation_End_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setProbation_End_Date($probation_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($probation_End_Date) && !is_string($probation_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($probation_End_Date, true), gettype($probation_End_Date)), __LINE__);
        }
        $this->Probation_End_Date = $probation_End_Date;
        return $this;
    }
    /**
     * Get Leave_Status_Data value
     * @return \StructType\Leave_Status_Detail_DataType[]|null
     */
    public function getLeave_Status_Data()
    {
        return $this->Leave_Status_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setLeave_Status_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLeave_Status_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLeave_Status_DataForArrayConstraintsFromSetLeave_Status_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Status_Detail_DataTypeLeave_Status_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Status_Detail_DataTypeLeave_Status_DataItem instanceof \StructType\Leave_Status_Detail_DataType) {
                $invalidValues[] = is_object($worker_Status_Detail_DataTypeLeave_Status_DataItem) ? get_class($worker_Status_Detail_DataTypeLeave_Status_DataItem) : sprintf('%s(%s)', gettype($worker_Status_Detail_DataTypeLeave_Status_DataItem), var_export($worker_Status_Detail_DataTypeLeave_Status_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Leave_Status_Data property can only contain items of type \StructType\Leave_Status_Detail_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Leave_Status_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Leave_Status_Detail_DataType[] $leave_Status_Data
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setLeave_Status_Data(array $leave_Status_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($leave_Status_DataArrayErrorMessage = self::validateLeave_Status_DataForArrayConstraintsFromSetLeave_Status_Data($leave_Status_Data))) {
            throw new \InvalidArgumentException($leave_Status_DataArrayErrorMessage, __LINE__);
        }
        $this->Leave_Status_Data = $leave_Status_Data;
        return $this;
    }
    /**
     * Add item to Leave_Status_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Leave_Status_Detail_DataType $item
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function addToLeave_Status_Data(\StructType\Leave_Status_Detail_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Leave_Status_Detail_DataType) {
            throw new \InvalidArgumentException(sprintf('The Leave_Status_Data property can only contain items of type \StructType\Leave_Status_Detail_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Leave_Status_Data[] = $item;
        return $this;
    }
    /**
     * Get Leave_Requests_Corrected_Data value
     * @return \StructType\Leave_Requests_Corrected_Detail_DataType[]|null
     */
    public function getLeave_Requests_Corrected_Data()
    {
        return $this->Leave_Requests_Corrected_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setLeave_Requests_Corrected_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLeave_Requests_Corrected_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLeave_Requests_Corrected_DataForArrayConstraintsFromSetLeave_Requests_Corrected_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Status_Detail_DataTypeLeave_Requests_Corrected_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Status_Detail_DataTypeLeave_Requests_Corrected_DataItem instanceof \StructType\Leave_Requests_Corrected_Detail_DataType) {
                $invalidValues[] = is_object($worker_Status_Detail_DataTypeLeave_Requests_Corrected_DataItem) ? get_class($worker_Status_Detail_DataTypeLeave_Requests_Corrected_DataItem) : sprintf('%s(%s)', gettype($worker_Status_Detail_DataTypeLeave_Requests_Corrected_DataItem), var_export($worker_Status_Detail_DataTypeLeave_Requests_Corrected_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Leave_Requests_Corrected_Data property can only contain items of type \StructType\Leave_Requests_Corrected_Detail_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Leave_Requests_Corrected_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Leave_Requests_Corrected_Detail_DataType[] $leave_Requests_Corrected_Data
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setLeave_Requests_Corrected_Data(array $leave_Requests_Corrected_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($leave_Requests_Corrected_DataArrayErrorMessage = self::validateLeave_Requests_Corrected_DataForArrayConstraintsFromSetLeave_Requests_Corrected_Data($leave_Requests_Corrected_Data))) {
            throw new \InvalidArgumentException($leave_Requests_Corrected_DataArrayErrorMessage, __LINE__);
        }
        $this->Leave_Requests_Corrected_Data = $leave_Requests_Corrected_Data;
        return $this;
    }
    /**
     * Add item to Leave_Requests_Corrected_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Leave_Requests_Corrected_Detail_DataType $item
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function addToLeave_Requests_Corrected_Data(\StructType\Leave_Requests_Corrected_Detail_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Leave_Requests_Corrected_Detail_DataType) {
            throw new \InvalidArgumentException(sprintf('The Leave_Requests_Corrected_Data property can only contain items of type \StructType\Leave_Requests_Corrected_Detail_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Leave_Requests_Corrected_Data[] = $item;
        return $this;
    }
    /**
     * Get Academic_Tenure_Date value
     * @return string|null
     */
    public function getAcademic_Tenure_Date()
    {
        return $this->Academic_Tenure_Date;
    }
    /**
     * Set Academic_Tenure_Date value
     * @param string $academic_Tenure_Date
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setAcademic_Tenure_Date($academic_Tenure_Date = null)
    {
        // validation for constraint: string
        if (!is_null($academic_Tenure_Date) && !is_string($academic_Tenure_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($academic_Tenure_Date, true), gettype($academic_Tenure_Date)), __LINE__);
        }
        $this->Academic_Tenure_Date = $academic_Tenure_Date;
        return $this;
    }
    /**
     * Get Rehire value
     * @return bool|null
     */
    public function getRehire()
    {
        return $this->Rehire;
    }
    /**
     * Set Rehire value
     * @param bool $rehire
     * @return \StructType\Worker_Status_Detail_DataType
     */
    public function setRehire($rehire = null)
    {
        // validation for constraint: boolean
        if (!is_null($rehire) && !is_bool($rehire)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rehire, true), gettype($rehire)), __LINE__);
        }
        $this->Rehire = $rehire;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Status_Detail_DataType
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
