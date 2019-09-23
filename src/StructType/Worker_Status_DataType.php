<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Status_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Status data for a Worker.
 * @subpackage Structs
 */
class Worker_Status_DataType extends AbstractStructBase
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
     * The Hire_Date
     * Meta information extracted from the WSDL
     * - documentation: Most recent Hire Date for the Worker.
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
     * The End_Employment_Date
     * Meta information extracted from the WSDL
     * - documentation: Employment End Date for the Worker. This field is informational only. The value is effective immediately on update.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Employment_Date;
    /**
     * The Hire_Reason
     * Meta information extracted from the WSDL
     * - documentation: Reason for Hire from the most recent Hire event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Hire_Reason;
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
     * The Leave_Status_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Leave_Status_DataType[]
     */
    public $Leave_Status_Data;
    /**
     * The Termination_Status_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Termination_Status_DataType[]
     */
    public $Termination_Status_Data;
    /**
     * The Probation_Status_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Probation_Status_DataType[]
     */
    public $Probation_Status_Data;
    /**
     * Constructor method for Worker_Status_DataType
     * @uses Worker_Status_DataType::setActive()
     * @uses Worker_Status_DataType::setHire_Date()
     * @uses Worker_Status_DataType::setOriginal_Hire_Date()
     * @uses Worker_Status_DataType::setEnd_Employment_Date()
     * @uses Worker_Status_DataType::setHire_Reason()
     * @uses Worker_Status_DataType::setContinuous_Service_Date()
     * @uses Worker_Status_DataType::setFirst_Day_of_Work()
     * @uses Worker_Status_DataType::setExpected_Retirement_Date()
     * @uses Worker_Status_DataType::setRetirement_Eligibility_Date()
     * @uses Worker_Status_DataType::setRetired()
     * @uses Worker_Status_DataType::setRetirement_Date()
     * @uses Worker_Status_DataType::setSeniority_Date()
     * @uses Worker_Status_DataType::setSeverance_Date()
     * @uses Worker_Status_DataType::setBenefits_Service_Date()
     * @uses Worker_Status_DataType::setCompany_Service_Date()
     * @uses Worker_Status_DataType::setTime_Off_Service_Date()
     * @uses Worker_Status_DataType::setVesting_Date()
     * @uses Worker_Status_DataType::setDate_Entered_Workforce()
     * @uses Worker_Status_DataType::setDays_Unemployed()
     * @uses Worker_Status_DataType::setMonths_Continuous_Prior_Employment()
     * @uses Worker_Status_DataType::setLeave_Status_Data()
     * @uses Worker_Status_DataType::setTermination_Status_Data()
     * @uses Worker_Status_DataType::setProbation_Status_Data()
     * @param bool $active
     * @param string $hire_Date
     * @param string $original_Hire_Date
     * @param string $end_Employment_Date
     * @param string $hire_Reason
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
     * @param \StructType\Leave_Status_DataType[] $leave_Status_Data
     * @param \StructType\Termination_Status_DataType[] $termination_Status_Data
     * @param \StructType\Probation_Status_DataType[] $probation_Status_Data
     */
    public function __construct($active = null, $hire_Date = null, $original_Hire_Date = null, $end_Employment_Date = null, $hire_Reason = null, $continuous_Service_Date = null, $first_Day_of_Work = null, $expected_Retirement_Date = null, $retirement_Eligibility_Date = null, $retired = null, $retirement_Date = null, $seniority_Date = null, $severance_Date = null, $benefits_Service_Date = null, $company_Service_Date = null, $time_Off_Service_Date = null, $vesting_Date = null, $date_Entered_Workforce = null, $days_Unemployed = null, $months_Continuous_Prior_Employment = null, array $leave_Status_Data = array(), array $termination_Status_Data = array(), array $probation_Status_Data = array())
    {
        $this
            ->setActive($active)
            ->setHire_Date($hire_Date)
            ->setOriginal_Hire_Date($original_Hire_Date)
            ->setEnd_Employment_Date($end_Employment_Date)
            ->setHire_Reason($hire_Reason)
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
            ->setLeave_Status_Data($leave_Status_Data)
            ->setTermination_Status_Data($termination_Status_Data)
            ->setProbation_Status_Data($probation_Status_Data);
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * Get Hire_Reason value
     * @return string|null
     */
    public function getHire_Reason()
    {
        return $this->Hire_Reason;
    }
    /**
     * Set Hire_Reason value
     * @param string $hire_Reason
     * @return \StructType\Worker_Status_DataType
     */
    public function setHire_Reason($hire_Reason = null)
    {
        // validation for constraint: string
        if (!is_null($hire_Reason) && !is_string($hire_Reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hire_Reason, true), gettype($hire_Reason)), __LINE__);
        }
        $this->Hire_Reason = $hire_Reason;
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * @return \StructType\Worker_Status_DataType
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
     * Get Leave_Status_Data value
     * @return \StructType\Leave_Status_DataType[]|null
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
        foreach ($values as $worker_Status_DataTypeLeave_Status_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Status_DataTypeLeave_Status_DataItem instanceof \StructType\Leave_Status_DataType) {
                $invalidValues[] = is_object($worker_Status_DataTypeLeave_Status_DataItem) ? get_class($worker_Status_DataTypeLeave_Status_DataItem) : sprintf('%s(%s)', gettype($worker_Status_DataTypeLeave_Status_DataItem), var_export($worker_Status_DataTypeLeave_Status_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Leave_Status_Data property can only contain items of type \StructType\Leave_Status_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Leave_Status_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Leave_Status_DataType[] $leave_Status_Data
     * @return \StructType\Worker_Status_DataType
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
     * @param \StructType\Leave_Status_DataType $item
     * @return \StructType\Worker_Status_DataType
     */
    public function addToLeave_Status_Data(\StructType\Leave_Status_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Leave_Status_DataType) {
            throw new \InvalidArgumentException(sprintf('The Leave_Status_Data property can only contain items of type \StructType\Leave_Status_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Leave_Status_Data[] = $item;
        return $this;
    }
    /**
     * Get Termination_Status_Data value
     * @return \StructType\Termination_Status_DataType[]|null
     */
    public function getTermination_Status_Data()
    {
        return $this->Termination_Status_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setTermination_Status_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTermination_Status_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTermination_Status_DataForArrayConstraintsFromSetTermination_Status_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Status_DataTypeTermination_Status_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Status_DataTypeTermination_Status_DataItem instanceof \StructType\Termination_Status_DataType) {
                $invalidValues[] = is_object($worker_Status_DataTypeTermination_Status_DataItem) ? get_class($worker_Status_DataTypeTermination_Status_DataItem) : sprintf('%s(%s)', gettype($worker_Status_DataTypeTermination_Status_DataItem), var_export($worker_Status_DataTypeTermination_Status_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Termination_Status_Data property can only contain items of type \StructType\Termination_Status_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Termination_Status_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Termination_Status_DataType[] $termination_Status_Data
     * @return \StructType\Worker_Status_DataType
     */
    public function setTermination_Status_Data(array $termination_Status_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($termination_Status_DataArrayErrorMessage = self::validateTermination_Status_DataForArrayConstraintsFromSetTermination_Status_Data($termination_Status_Data))) {
            throw new \InvalidArgumentException($termination_Status_DataArrayErrorMessage, __LINE__);
        }
        $this->Termination_Status_Data = $termination_Status_Data;
        return $this;
    }
    /**
     * Add item to Termination_Status_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Termination_Status_DataType $item
     * @return \StructType\Worker_Status_DataType
     */
    public function addToTermination_Status_Data(\StructType\Termination_Status_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Termination_Status_DataType) {
            throw new \InvalidArgumentException(sprintf('The Termination_Status_Data property can only contain items of type \StructType\Termination_Status_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Termination_Status_Data[] = $item;
        return $this;
    }
    /**
     * Get Probation_Status_Data value
     * @return \StructType\Probation_Status_DataType[]|null
     */
    public function getProbation_Status_Data()
    {
        return $this->Probation_Status_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setProbation_Status_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProbation_Status_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProbation_Status_DataForArrayConstraintsFromSetProbation_Status_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Status_DataTypeProbation_Status_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Status_DataTypeProbation_Status_DataItem instanceof \StructType\Probation_Status_DataType) {
                $invalidValues[] = is_object($worker_Status_DataTypeProbation_Status_DataItem) ? get_class($worker_Status_DataTypeProbation_Status_DataItem) : sprintf('%s(%s)', gettype($worker_Status_DataTypeProbation_Status_DataItem), var_export($worker_Status_DataTypeProbation_Status_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Probation_Status_Data property can only contain items of type \StructType\Probation_Status_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Probation_Status_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Probation_Status_DataType[] $probation_Status_Data
     * @return \StructType\Worker_Status_DataType
     */
    public function setProbation_Status_Data(array $probation_Status_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($probation_Status_DataArrayErrorMessage = self::validateProbation_Status_DataForArrayConstraintsFromSetProbation_Status_Data($probation_Status_Data))) {
            throw new \InvalidArgumentException($probation_Status_DataArrayErrorMessage, __LINE__);
        }
        $this->Probation_Status_Data = $probation_Status_Data;
        return $this;
    }
    /**
     * Add item to Probation_Status_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Probation_Status_DataType $item
     * @return \StructType\Worker_Status_DataType
     */
    public function addToProbation_Status_Data(\StructType\Probation_Status_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Probation_Status_DataType) {
            throw new \InvalidArgumentException(sprintf('The Probation_Status_Data property can only contain items of type \StructType\Probation_Status_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Probation_Status_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Status_DataType
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
