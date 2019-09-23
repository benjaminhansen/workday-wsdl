<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Position_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containg all Payroll Interface Processing data.
 * @subpackage Structs
 */
class Position_Detail_DataType extends AbstractStructBase
{
    /**
     * The Position_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_ElementObjectType
     */
    public $Position_Reference;
    /**
     * The Headcount_Reference
     * Meta information extracted from the WSDL
     * - documentation: An unique identifier for the Headcount Group that the Position belongs to. This will return a value only if the Position belongs to a headcount. Any value put in this field for inbound web services will be ignored.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Headcount_RestrictionsObjectType
     */
    public $Headcount_Reference;
    /**
     * The Position_ID
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Position ID.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Position_ID;
    /**
     * The Position_Title
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Position Title.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Position_Title;
    /**
     * The Business_Title
     * Meta information extracted from the WSDL
     * - documentation: Business title for the position.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Business_Title;
    /**
     * The Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the Worker first started work in this Position. Will be the same value as the Hire Date in the Worker Status Section for the Primary Position.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Start_Date;
    /**
     * The End_Employment_Date
     * Meta information extracted from the WSDL
     * - documentation: Expected end of employment for this position. Will be the same value as the End Employment Date in the Worker Status Section for the Primary Position.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Employment_Date;
    /**
     * The End_Employment_Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: Termination/End Additional Job Reason
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType[]
     */
    public $End_Employment_Reason_Reference;
    /**
     * The Worker_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The worker type for the position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_Worker_TypeObjectType
     */
    public $Worker_Type_Reference;
    /**
     * The Position_Time_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the position time type.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_Time_TypeObjectType
     */
    public $Position_Time_Type_Reference;
    /**
     * The Job_Exempt
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether Position is Exempt.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Job_Exempt;
    /**
     * The Scheduled_Weekly_Hours
     * Meta information extracted from the WSDL
     * - documentation: Scheduled Weekly Hours for Position. | The scheduled weekly hours from the location's time profile. | Scheduled Weekly Hours for the former worker.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 5
     * @var float
     */
    public $Scheduled_Weekly_Hours;
    /**
     * The Default_Weekly_Hours
     * Meta information extracted from the WSDL
     * - documentation: Standard Weekly Hours for Position.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 5
     * @var float
     */
    public $Default_Weekly_Hours;
    /**
     * The Working_Time_Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: You can record details about a worker's expected schedule using the Working Time section. Enable Working Time in the Maintain Localization Settings task. Set the Working Time Frequency values in the Maintain Frequencies task.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\FrequencyObjectType
     */
    public $Working_Time_Frequency_Reference;
    /**
     * The Working_Time_Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Working Time Unit can be in hours or days. Enable Working Time in the Maintain Localization Settings task. Enable units in the Maintain Unit of Time task.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Working_Time_UnitObjectType
     */
    public $Working_Time_Unit_Reference;
    /**
     * The Working_Time_Value
     * Meta information extracted from the WSDL
     * - documentation: The numeric value of the Working Time Unit. Enable Working Time in the Maintain Localization Settings task.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 6
     * @var float
     */
    public $Working_Time_Value;
    /**
     * The Full_Time_Equivalent_Percentage
     * Meta information extracted from the WSDL
     * - documentation: Full Time Equivalent Percentage for Position.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 12
     * @var float
     */
    public $Full_Time_Equivalent_Percentage;
    /**
     * The Specify_Paid_FTE
     * Meta information extracted from the WSDL
     * - documentation: True if Paid FTE Percentage is specified on the position.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Specify_Paid_FTE;
    /**
     * The Paid_FTE
     * Meta information extracted from the WSDL
     * - documentation: The paid full time equivalent percentage for the position, entered as a decimal value. This overrides the calculated full time equivalent.
     * - base: xsd:decimal
     * - fractionDigits: 12
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 22
     * @var float
     */
    public $Paid_FTE;
    /**
     * The Specify_Working_FTE
     * Meta information extracted from the WSDL
     * - documentation: True if Working FTE Percentage is specified on the position.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Specify_Working_FTE;
    /**
     * The Working_FTE
     * Meta information extracted from the WSDL
     * - documentation: The working full time equivalent percentage for the position, entered as a decimal value. This overrides the calculated full time equivalent.
     * - base: xsd:decimal
     * - fractionDigits: 12
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 22
     * @var float
     */
    public $Working_FTE;
    /**
     * The Exclude_from_Headcount
     * Meta information extracted from the WSDL
     * - documentation: If Y, the position will be excluded from headcount reporting.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_from_Headcount;
    /**
     * The Pay_Rate_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the pay rate type for the position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Pay_Rate_TypeObjectType
     */
    public $Pay_Rate_Type_Reference;
    /**
     * The Job_Classification_Summary_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Classification_Summary_DataType[]
     */
    public $Job_Classification_Summary_Data;
    /**
     * The Company_Insider_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a company insider type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType[]
     */
    public $Company_Insider_Reference;
    /**
     * The Work_Shift_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the work shift for the position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_ShiftObjectType
     */
    public $Work_Shift_Reference;
    /**
     * The Work_Hours_Profiles_Reference
     * Meta information extracted from the WSDL
     * - documentation: The work hour profile(s) for the position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Hours_ProfileObjectType
     */
    public $Work_Hours_Profiles_Reference;
    /**
     * The Federal_Withholding_FEIN
     * Meta information extracted from the WSDL
     * - documentation: The employee's company Federal Employer Identification Number.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Federal_Withholding_FEIN;
    /**
     * The Worker_Compensation_Code_Data
     * Meta information extracted from the WSDL
     * - documentation: The worker's compensation code for this position - based on the location and job profile.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Worker_Compensation_Code_DataType[]
     */
    public $Worker_Compensation_Code_Data;
    /**
     * The Position_Payroll_Reporting_Code_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_Payroll_Reporting_Code_DataType[]
     */
    public $Position_Payroll_Reporting_Code_Data;
    /**
     * The Job_Profile_Summary_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the job profile for the position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType
     */
    public $Job_Profile_Summary_Data;
    /**
     * The Business_Site_Summary_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing a brief summary of Location data.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_Summary_DataType
     */
    public $Business_Site_Summary_Data;
    /**
     * The Payroll_Interface_Processing_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containg all Payroll Interface Processing data.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_Payroll_Interface_Detail_DataType
     */
    public $Payroll_Interface_Processing_Data;
    /**
     * The Regular_Paid_Equivalent_Hours
     * Meta information extracted from the WSDL
     * - documentation: Numeric value for number of equivalent regular paid hours for the work hours profile.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 5
     * @var float
     */
    public $Regular_Paid_Equivalent_Hours;
    /**
     * The Worker_Hours_Profile_Classification
     * Meta information extracted from the WSDL
     * - documentation: The Worker Hours Profile Classification.
     * - base: xsd:string
     * - maxLength: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Worker_Hours_Profile_Classification;
    /**
     * The International_Assignment_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\International_Assignment_DataType
     */
    public $International_Assignment_Data;
    /**
     * The Work_Space__Reference
     * Meta information extracted from the WSDL
     * - documentation: The work space (worker's physical location) for the position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LocationObjectType
     */
    public $Work_Space__Reference;
    /**
     * The Academic_Pay_Setup_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element that contains position's academic pay setup information if it is configured.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_Pay_Setup_DataType
     */
    public $Academic_Pay_Setup_Data;
    /**
     * The End_Date
     * Meta information extracted from the WSDL
     * - documentation: The effective date of the end employment business process
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Date;
    /**
     * The Pay_Through_Date
     * Meta information extracted from the WSDL
     * - documentation: The pay through date for the end of employment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Pay_Through_Date;
    /**
     * The Collective_Agreement_Summary_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Collective Agreement data. Including Corrected data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Collective_Agreement_Summary_DataType[]
     */
    public $Collective_Agreement_Summary_Data;
    /**
     * The Employee_Probation_Period_Summary_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Probation Period data.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Probation_Period_Summary_DataType
     */
    public $Employee_Probation_Period_Summary_Data;
    /**
     * The Manager_as_of_last_detected_manager_change_Reference
     * Meta information extracted from the WSDL
     * - documentation: Return the worker's new manager(s) during the most recent manager change event detected by manager compare background process. The background process may detect manager changes at a later time then when the manager change actually
     * occurred. This field only applies for the primary job of the worker.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType[]
     */
    public $Manager_as_of_last_detected_manager_change_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date for Position.
     * @var string
     */
    public $Effective_Date;
    /**
     * Constructor method for Position_Detail_DataType
     * @uses Position_Detail_DataType::setPosition_Reference()
     * @uses Position_Detail_DataType::setHeadcount_Reference()
     * @uses Position_Detail_DataType::setPosition_ID()
     * @uses Position_Detail_DataType::setPosition_Title()
     * @uses Position_Detail_DataType::setBusiness_Title()
     * @uses Position_Detail_DataType::setStart_Date()
     * @uses Position_Detail_DataType::setEnd_Employment_Date()
     * @uses Position_Detail_DataType::setEnd_Employment_Reason_Reference()
     * @uses Position_Detail_DataType::setWorker_Type_Reference()
     * @uses Position_Detail_DataType::setPosition_Time_Type_Reference()
     * @uses Position_Detail_DataType::setJob_Exempt()
     * @uses Position_Detail_DataType::setScheduled_Weekly_Hours()
     * @uses Position_Detail_DataType::setDefault_Weekly_Hours()
     * @uses Position_Detail_DataType::setWorking_Time_Frequency_Reference()
     * @uses Position_Detail_DataType::setWorking_Time_Unit_Reference()
     * @uses Position_Detail_DataType::setWorking_Time_Value()
     * @uses Position_Detail_DataType::setFull_Time_Equivalent_Percentage()
     * @uses Position_Detail_DataType::setSpecify_Paid_FTE()
     * @uses Position_Detail_DataType::setPaid_FTE()
     * @uses Position_Detail_DataType::setSpecify_Working_FTE()
     * @uses Position_Detail_DataType::setWorking_FTE()
     * @uses Position_Detail_DataType::setExclude_from_Headcount()
     * @uses Position_Detail_DataType::setPay_Rate_Type_Reference()
     * @uses Position_Detail_DataType::setJob_Classification_Summary_Data()
     * @uses Position_Detail_DataType::setCompany_Insider_Reference()
     * @uses Position_Detail_DataType::setWork_Shift_Reference()
     * @uses Position_Detail_DataType::setWork_Hours_Profiles_Reference()
     * @uses Position_Detail_DataType::setFederal_Withholding_FEIN()
     * @uses Position_Detail_DataType::setWorker_Compensation_Code_Data()
     * @uses Position_Detail_DataType::setPosition_Payroll_Reporting_Code_Data()
     * @uses Position_Detail_DataType::setJob_Profile_Summary_Data()
     * @uses Position_Detail_DataType::setBusiness_Site_Summary_Data()
     * @uses Position_Detail_DataType::setPayroll_Interface_Processing_Data()
     * @uses Position_Detail_DataType::setRegular_Paid_Equivalent_Hours()
     * @uses Position_Detail_DataType::setWorker_Hours_Profile_Classification()
     * @uses Position_Detail_DataType::setInternational_Assignment_Data()
     * @uses Position_Detail_DataType::setWork_Space__Reference()
     * @uses Position_Detail_DataType::setAcademic_Pay_Setup_Data()
     * @uses Position_Detail_DataType::setEnd_Date()
     * @uses Position_Detail_DataType::setPay_Through_Date()
     * @uses Position_Detail_DataType::setCollective_Agreement_Summary_Data()
     * @uses Position_Detail_DataType::setEmployee_Probation_Period_Summary_Data()
     * @uses Position_Detail_DataType::setManager_as_of_last_detected_manager_change_Reference()
     * @uses Position_Detail_DataType::setEffective_Date()
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference
     * @param \WorkdayWsdl\\StructType\Headcount_RestrictionsObjectType $headcount_Reference
     * @param string $position_ID
     * @param string $position_Title
     * @param string $business_Title
     * @param string $start_Date
     * @param string $end_Employment_Date
     * @param \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType[] $end_Employment_Reason_Reference
     * @param \WorkdayWsdl\\StructType\Position_Worker_TypeObjectType $worker_Type_Reference
     * @param \WorkdayWsdl\\StructType\Position_Time_TypeObjectType $position_Time_Type_Reference
     * @param bool $job_Exempt
     * @param float $scheduled_Weekly_Hours
     * @param float $default_Weekly_Hours
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $working_Time_Frequency_Reference
     * @param \WorkdayWsdl\\StructType\Working_Time_UnitObjectType $working_Time_Unit_Reference
     * @param float $working_Time_Value
     * @param float $full_Time_Equivalent_Percentage
     * @param bool $specify_Paid_FTE
     * @param float $paid_FTE
     * @param bool $specify_Working_FTE
     * @param float $working_FTE
     * @param bool $exclude_from_Headcount
     * @param \WorkdayWsdl\\StructType\Pay_Rate_TypeObjectType $pay_Rate_Type_Reference
     * @param \WorkdayWsdl\\StructType\Job_Classification_Summary_DataType[] $job_Classification_Summary_Data
     * @param \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType[] $company_Insider_Reference
     * @param \WorkdayWsdl\\StructType\Work_ShiftObjectType $work_Shift_Reference
     * @param \WorkdayWsdl\\StructType\Work_Hours_ProfileObjectType $work_Hours_Profiles_Reference
     * @param string $federal_Withholding_FEIN
     * @param \WorkdayWsdl\\StructType\Worker_Compensation_Code_DataType[] $worker_Compensation_Code_Data
     * @param \WorkdayWsdl\\StructType\Position_Payroll_Reporting_Code_DataType[] $position_Payroll_Reporting_Code_Data
     * @param \WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType $job_Profile_Summary_Data
     * @param \WorkdayWsdl\\StructType\Location_Summary_DataType $business_Site_Summary_Data
     * @param \WorkdayWsdl\\StructType\Position_Payroll_Interface_Detail_DataType $payroll_Interface_Processing_Data
     * @param float $regular_Paid_Equivalent_Hours
     * @param string $worker_Hours_Profile_Classification
     * @param \WorkdayWsdl\\StructType\International_Assignment_DataType $international_Assignment_Data
     * @param \WorkdayWsdl\\StructType\LocationObjectType $work_Space__Reference
     * @param \WorkdayWsdl\\StructType\Academic_Pay_Setup_DataType $academic_Pay_Setup_Data
     * @param string $end_Date
     * @param string $pay_Through_Date
     * @param \WorkdayWsdl\\StructType\Collective_Agreement_Summary_DataType[] $collective_Agreement_Summary_Data
     * @param \WorkdayWsdl\\StructType\Employee_Probation_Period_Summary_DataType $employee_Probation_Period_Summary_Data
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $manager_as_of_last_detected_manager_change_Reference
     * @param string $effective_Date
     */
    public function __construct(\WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference = null, \WorkdayWsdl\\StructType\Headcount_RestrictionsObjectType $headcount_Reference = null, $position_ID = null, $position_Title = null, $business_Title = null, $start_Date = null, $end_Employment_Date = null, array $end_Employment_Reason_Reference = array(), \WorkdayWsdl\\StructType\Position_Worker_TypeObjectType $worker_Type_Reference = null, \WorkdayWsdl\\StructType\Position_Time_TypeObjectType $position_Time_Type_Reference = null, $job_Exempt = null, $scheduled_Weekly_Hours = null, $default_Weekly_Hours = null, \WorkdayWsdl\\StructType\FrequencyObjectType $working_Time_Frequency_Reference = null, \WorkdayWsdl\\StructType\Working_Time_UnitObjectType $working_Time_Unit_Reference = null, $working_Time_Value = null, $full_Time_Equivalent_Percentage = null, $specify_Paid_FTE = null, $paid_FTE = null, $specify_Working_FTE = null, $working_FTE = null, $exclude_from_Headcount = null, \WorkdayWsdl\\StructType\Pay_Rate_TypeObjectType $pay_Rate_Type_Reference = null, array $job_Classification_Summary_Data = array(), array $company_Insider_Reference = array(), \WorkdayWsdl\\StructType\Work_ShiftObjectType $work_Shift_Reference = null, \WorkdayWsdl\\StructType\Work_Hours_ProfileObjectType $work_Hours_Profiles_Reference = null, $federal_Withholding_FEIN = null, array $worker_Compensation_Code_Data = array(), array $position_Payroll_Reporting_Code_Data = array(), \WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType $job_Profile_Summary_Data = null, \WorkdayWsdl\\StructType\Location_Summary_DataType $business_Site_Summary_Data = null, \WorkdayWsdl\\StructType\Position_Payroll_Interface_Detail_DataType $payroll_Interface_Processing_Data = null, $regular_Paid_Equivalent_Hours = null, $worker_Hours_Profile_Classification = null, \WorkdayWsdl\\StructType\International_Assignment_DataType $international_Assignment_Data = null, \WorkdayWsdl\\StructType\LocationObjectType $work_Space__Reference = null, \WorkdayWsdl\\StructType\Academic_Pay_Setup_DataType $academic_Pay_Setup_Data = null, $end_Date = null, $pay_Through_Date = null, array $collective_Agreement_Summary_Data = array(), \WorkdayWsdl\\StructType\Employee_Probation_Period_Summary_DataType $employee_Probation_Period_Summary_Data = null, array $manager_as_of_last_detected_manager_change_Reference = array(), $effective_Date = null)
    {
        $this
            ->setPosition_Reference($position_Reference)
            ->setHeadcount_Reference($headcount_Reference)
            ->setPosition_ID($position_ID)
            ->setPosition_Title($position_Title)
            ->setBusiness_Title($business_Title)
            ->setStart_Date($start_Date)
            ->setEnd_Employment_Date($end_Employment_Date)
            ->setEnd_Employment_Reason_Reference($end_Employment_Reason_Reference)
            ->setWorker_Type_Reference($worker_Type_Reference)
            ->setPosition_Time_Type_Reference($position_Time_Type_Reference)
            ->setJob_Exempt($job_Exempt)
            ->setScheduled_Weekly_Hours($scheduled_Weekly_Hours)
            ->setDefault_Weekly_Hours($default_Weekly_Hours)
            ->setWorking_Time_Frequency_Reference($working_Time_Frequency_Reference)
            ->setWorking_Time_Unit_Reference($working_Time_Unit_Reference)
            ->setWorking_Time_Value($working_Time_Value)
            ->setFull_Time_Equivalent_Percentage($full_Time_Equivalent_Percentage)
            ->setSpecify_Paid_FTE($specify_Paid_FTE)
            ->setPaid_FTE($paid_FTE)
            ->setSpecify_Working_FTE($specify_Working_FTE)
            ->setWorking_FTE($working_FTE)
            ->setExclude_from_Headcount($exclude_from_Headcount)
            ->setPay_Rate_Type_Reference($pay_Rate_Type_Reference)
            ->setJob_Classification_Summary_Data($job_Classification_Summary_Data)
            ->setCompany_Insider_Reference($company_Insider_Reference)
            ->setWork_Shift_Reference($work_Shift_Reference)
            ->setWork_Hours_Profiles_Reference($work_Hours_Profiles_Reference)
            ->setFederal_Withholding_FEIN($federal_Withholding_FEIN)
            ->setWorker_Compensation_Code_Data($worker_Compensation_Code_Data)
            ->setPosition_Payroll_Reporting_Code_Data($position_Payroll_Reporting_Code_Data)
            ->setJob_Profile_Summary_Data($job_Profile_Summary_Data)
            ->setBusiness_Site_Summary_Data($business_Site_Summary_Data)
            ->setPayroll_Interface_Processing_Data($payroll_Interface_Processing_Data)
            ->setRegular_Paid_Equivalent_Hours($regular_Paid_Equivalent_Hours)
            ->setWorker_Hours_Profile_Classification($worker_Hours_Profile_Classification)
            ->setInternational_Assignment_Data($international_Assignment_Data)
            ->setWork_Space__Reference($work_Space__Reference)
            ->setAcademic_Pay_Setup_Data($academic_Pay_Setup_Data)
            ->setEnd_Date($end_Date)
            ->setPay_Through_Date($pay_Through_Date)
            ->setCollective_Agreement_Summary_Data($collective_Agreement_Summary_Data)
            ->setEmployee_Probation_Period_Summary_Data($employee_Probation_Period_Summary_Data)
            ->setManager_as_of_last_detected_manager_change_Reference($manager_as_of_last_detected_manager_change_Reference)
            ->setEffective_Date($effective_Date);
    }
    /**
     * Get Position_Reference value
     * @return \WorkdayWsdl\\StructType\Position_ElementObjectType|null
     */
    public function getPosition_Reference()
    {
        return $this->Position_Reference;
    }
    /**
     * Set Position_Reference value
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setPosition_Reference(\WorkdayWsdl\\StructType\Position_ElementObjectType $position_Reference = null)
    {
        $this->Position_Reference = $position_Reference;
        return $this;
    }
    /**
     * Get Headcount_Reference value
     * @return \WorkdayWsdl\\StructType\Headcount_RestrictionsObjectType|null
     */
    public function getHeadcount_Reference()
    {
        return $this->Headcount_Reference;
    }
    /**
     * Set Headcount_Reference value
     * @param \WorkdayWsdl\\StructType\Headcount_RestrictionsObjectType $headcount_Reference
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setHeadcount_Reference(\WorkdayWsdl\\StructType\Headcount_RestrictionsObjectType $headcount_Reference = null)
    {
        $this->Headcount_Reference = $headcount_Reference;
        return $this;
    }
    /**
     * Get Position_ID value
     * @return string|null
     */
    public function getPosition_ID()
    {
        return $this->Position_ID;
    }
    /**
     * Set Position_ID value
     * @param string $position_ID
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setPosition_ID($position_ID = null)
    {
        // validation for constraint: string
        if (!is_null($position_ID) && !is_string($position_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($position_ID, true), gettype($position_ID)), __LINE__);
        }
        $this->Position_ID = $position_ID;
        return $this;
    }
    /**
     * Get Position_Title value
     * @return string|null
     */
    public function getPosition_Title()
    {
        return $this->Position_Title;
    }
    /**
     * Set Position_Title value
     * @param string $position_Title
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setPosition_Title($position_Title = null)
    {
        // validation for constraint: string
        if (!is_null($position_Title) && !is_string($position_Title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($position_Title, true), gettype($position_Title)), __LINE__);
        }
        $this->Position_Title = $position_Title;
        return $this;
    }
    /**
     * Get Business_Title value
     * @return string|null
     */
    public function getBusiness_Title()
    {
        return $this->Business_Title;
    }
    /**
     * Set Business_Title value
     * @param string $business_Title
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setBusiness_Title($business_Title = null)
    {
        // validation for constraint: string
        if (!is_null($business_Title) && !is_string($business_Title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($business_Title, true), gettype($business_Title)), __LINE__);
        }
        $this->Business_Title = $business_Title;
        return $this;
    }
    /**
     * Get Start_Date value
     * @return string|null
     */
    public function getStart_Date()
    {
        return $this->Start_Date;
    }
    /**
     * Set Start_Date value
     * @param string $start_Date
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setStart_Date($start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($start_Date) && !is_string($start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_Date, true), gettype($start_Date)), __LINE__);
        }
        $this->Start_Date = $start_Date;
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
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
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
     * Get End_Employment_Reason_Reference value
     * @return \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType[]|null
     */
    public function getEnd_Employment_Reason_Reference()
    {
        return $this->End_Employment_Reason_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setEnd_Employment_Reason_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnd_Employment_Reason_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEnd_Employment_Reason_ReferenceForArrayConstraintsFromSetEnd_Employment_Reason_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $position_Detail_DataTypeEnd_Employment_Reason_ReferenceItem) {
            // validation for constraint: itemType
            if (!$position_Detail_DataTypeEnd_Employment_Reason_ReferenceItem instanceof \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType) {
                $invalidValues[] = is_object($position_Detail_DataTypeEnd_Employment_Reason_ReferenceItem) ? get_class($position_Detail_DataTypeEnd_Employment_Reason_ReferenceItem) : sprintf('%s(%s)', gettype($position_Detail_DataTypeEnd_Employment_Reason_ReferenceItem), var_export($position_Detail_DataTypeEnd_Employment_Reason_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The End_Employment_Reason_Reference property can only contain items of type \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set End_Employment_Reason_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType[] $end_Employment_Reason_Reference
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setEnd_Employment_Reason_Reference(array $end_Employment_Reason_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($end_Employment_Reason_ReferenceArrayErrorMessage = self::validateEnd_Employment_Reason_ReferenceForArrayConstraintsFromSetEnd_Employment_Reason_Reference($end_Employment_Reason_Reference))) {
            throw new \InvalidArgumentException($end_Employment_Reason_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->End_Employment_Reason_Reference = $end_Employment_Reason_Reference;
        return $this;
    }
    /**
     * Add item to End_Employment_Reason_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType $item
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function addToEnd_Employment_Reason_Reference(\WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType) {
            throw new \InvalidArgumentException(sprintf('The End_Employment_Reason_Reference property can only contain items of type \WorkdayWsdl\\StructType\Event_Classification_SubcategoryObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->End_Employment_Reason_Reference[] = $item;
        return $this;
    }
    /**
     * Get Worker_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Position_Worker_TypeObjectType|null
     */
    public function getWorker_Type_Reference()
    {
        return $this->Worker_Type_Reference;
    }
    /**
     * Set Worker_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Position_Worker_TypeObjectType $worker_Type_Reference
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setWorker_Type_Reference(\WorkdayWsdl\\StructType\Position_Worker_TypeObjectType $worker_Type_Reference = null)
    {
        $this->Worker_Type_Reference = $worker_Type_Reference;
        return $this;
    }
    /**
     * Get Position_Time_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Position_Time_TypeObjectType|null
     */
    public function getPosition_Time_Type_Reference()
    {
        return $this->Position_Time_Type_Reference;
    }
    /**
     * Set Position_Time_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Position_Time_TypeObjectType $position_Time_Type_Reference
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setPosition_Time_Type_Reference(\WorkdayWsdl\\StructType\Position_Time_TypeObjectType $position_Time_Type_Reference = null)
    {
        $this->Position_Time_Type_Reference = $position_Time_Type_Reference;
        return $this;
    }
    /**
     * Get Job_Exempt value
     * @return bool|null
     */
    public function getJob_Exempt()
    {
        return $this->Job_Exempt;
    }
    /**
     * Set Job_Exempt value
     * @param bool $job_Exempt
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setJob_Exempt($job_Exempt = null)
    {
        // validation for constraint: boolean
        if (!is_null($job_Exempt) && !is_bool($job_Exempt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($job_Exempt, true), gettype($job_Exempt)), __LINE__);
        }
        $this->Job_Exempt = $job_Exempt;
        return $this;
    }
    /**
     * Get Scheduled_Weekly_Hours value
     * @return float|null
     */
    public function getScheduled_Weekly_Hours()
    {
        return $this->Scheduled_Weekly_Hours;
    }
    /**
     * Set Scheduled_Weekly_Hours value
     * @param float $scheduled_Weekly_Hours
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setScheduled_Weekly_Hours($scheduled_Weekly_Hours = null)
    {
        // validation for constraint: float
        if (!is_null($scheduled_Weekly_Hours) && !(is_float($scheduled_Weekly_Hours) || is_numeric($scheduled_Weekly_Hours))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($scheduled_Weekly_Hours, true), gettype($scheduled_Weekly_Hours)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($scheduled_Weekly_Hours) && mb_strlen(mb_substr($scheduled_Weekly_Hours, mb_strpos($scheduled_Weekly_Hours, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($scheduled_Weekly_Hours, true), mb_strlen(mb_substr($scheduled_Weekly_Hours, mb_strpos($scheduled_Weekly_Hours, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($scheduled_Weekly_Hours) && mb_strlen(preg_replace('/(\D)/', '', $scheduled_Weekly_Hours)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($scheduled_Weekly_Hours, true), mb_strlen(preg_replace('/(\D)/', '', $scheduled_Weekly_Hours))), __LINE__);
        }
        $this->Scheduled_Weekly_Hours = $scheduled_Weekly_Hours;
        return $this;
    }
    /**
     * Get Default_Weekly_Hours value
     * @return float|null
     */
    public function getDefault_Weekly_Hours()
    {
        return $this->Default_Weekly_Hours;
    }
    /**
     * Set Default_Weekly_Hours value
     * @param float $default_Weekly_Hours
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setDefault_Weekly_Hours($default_Weekly_Hours = null)
    {
        // validation for constraint: float
        if (!is_null($default_Weekly_Hours) && !(is_float($default_Weekly_Hours) || is_numeric($default_Weekly_Hours))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($default_Weekly_Hours, true), gettype($default_Weekly_Hours)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($default_Weekly_Hours) && mb_strlen(mb_substr($default_Weekly_Hours, mb_strpos($default_Weekly_Hours, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($default_Weekly_Hours, true), mb_strlen(mb_substr($default_Weekly_Hours, mb_strpos($default_Weekly_Hours, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($default_Weekly_Hours) && $default_Weekly_Hours < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($default_Weekly_Hours, true)), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($default_Weekly_Hours) && mb_strlen(preg_replace('/(\D)/', '', $default_Weekly_Hours)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($default_Weekly_Hours, true), mb_strlen(preg_replace('/(\D)/', '', $default_Weekly_Hours))), __LINE__);
        }
        $this->Default_Weekly_Hours = $default_Weekly_Hours;
        return $this;
    }
    /**
     * Get Working_Time_Frequency_Reference value
     * @return \WorkdayWsdl\\StructType\FrequencyObjectType|null
     */
    public function getWorking_Time_Frequency_Reference()
    {
        return $this->Working_Time_Frequency_Reference;
    }
    /**
     * Set Working_Time_Frequency_Reference value
     * @param \WorkdayWsdl\\StructType\FrequencyObjectType $working_Time_Frequency_Reference
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setWorking_Time_Frequency_Reference(\WorkdayWsdl\\StructType\FrequencyObjectType $working_Time_Frequency_Reference = null)
    {
        $this->Working_Time_Frequency_Reference = $working_Time_Frequency_Reference;
        return $this;
    }
    /**
     * Get Working_Time_Unit_Reference value
     * @return \WorkdayWsdl\\StructType\Working_Time_UnitObjectType|null
     */
    public function getWorking_Time_Unit_Reference()
    {
        return $this->Working_Time_Unit_Reference;
    }
    /**
     * Set Working_Time_Unit_Reference value
     * @param \WorkdayWsdl\\StructType\Working_Time_UnitObjectType $working_Time_Unit_Reference
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setWorking_Time_Unit_Reference(\WorkdayWsdl\\StructType\Working_Time_UnitObjectType $working_Time_Unit_Reference = null)
    {
        $this->Working_Time_Unit_Reference = $working_Time_Unit_Reference;
        return $this;
    }
    /**
     * Get Working_Time_Value value
     * @return float|null
     */
    public function getWorking_Time_Value()
    {
        return $this->Working_Time_Value;
    }
    /**
     * Set Working_Time_Value value
     * @param float $working_Time_Value
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setWorking_Time_Value($working_Time_Value = null)
    {
        // validation for constraint: float
        if (!is_null($working_Time_Value) && !(is_float($working_Time_Value) || is_numeric($working_Time_Value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($working_Time_Value, true), gettype($working_Time_Value)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($working_Time_Value) && mb_strlen(mb_substr($working_Time_Value, mb_strpos($working_Time_Value, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($working_Time_Value, true), mb_strlen(mb_substr($working_Time_Value, mb_strpos($working_Time_Value, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($working_Time_Value) && $working_Time_Value < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($working_Time_Value, true)), __LINE__);
        }
        // validation for constraint: totalDigits(6)
        if (!is_null($working_Time_Value) && mb_strlen(preg_replace('/(\D)/', '', $working_Time_Value)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 6 digits, "%d" given', var_export($working_Time_Value, true), mb_strlen(preg_replace('/(\D)/', '', $working_Time_Value))), __LINE__);
        }
        $this->Working_Time_Value = $working_Time_Value;
        return $this;
    }
    /**
     * Get Full_Time_Equivalent_Percentage value
     * @return float|null
     */
    public function getFull_Time_Equivalent_Percentage()
    {
        return $this->Full_Time_Equivalent_Percentage;
    }
    /**
     * Set Full_Time_Equivalent_Percentage value
     * @param float $full_Time_Equivalent_Percentage
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setFull_Time_Equivalent_Percentage($full_Time_Equivalent_Percentage = null)
    {
        // validation for constraint: float
        if (!is_null($full_Time_Equivalent_Percentage) && !(is_float($full_Time_Equivalent_Percentage) || is_numeric($full_Time_Equivalent_Percentage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($full_Time_Equivalent_Percentage, true), gettype($full_Time_Equivalent_Percentage)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($full_Time_Equivalent_Percentage) && mb_strlen(mb_substr($full_Time_Equivalent_Percentage, mb_strpos($full_Time_Equivalent_Percentage, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($full_Time_Equivalent_Percentage, true), mb_strlen(mb_substr($full_Time_Equivalent_Percentage, mb_strpos($full_Time_Equivalent_Percentage, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($full_Time_Equivalent_Percentage) && $full_Time_Equivalent_Percentage < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($full_Time_Equivalent_Percentage, true)), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($full_Time_Equivalent_Percentage) && mb_strlen(preg_replace('/(\D)/', '', $full_Time_Equivalent_Percentage)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($full_Time_Equivalent_Percentage, true), mb_strlen(preg_replace('/(\D)/', '', $full_Time_Equivalent_Percentage))), __LINE__);
        }
        $this->Full_Time_Equivalent_Percentage = $full_Time_Equivalent_Percentage;
        return $this;
    }
    /**
     * Get Specify_Paid_FTE value
     * @return bool|null
     */
    public function getSpecify_Paid_FTE()
    {
        return $this->Specify_Paid_FTE;
    }
    /**
     * Set Specify_Paid_FTE value
     * @param bool $specify_Paid_FTE
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setSpecify_Paid_FTE($specify_Paid_FTE = null)
    {
        // validation for constraint: boolean
        if (!is_null($specify_Paid_FTE) && !is_bool($specify_Paid_FTE)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($specify_Paid_FTE, true), gettype($specify_Paid_FTE)), __LINE__);
        }
        $this->Specify_Paid_FTE = $specify_Paid_FTE;
        return $this;
    }
    /**
     * Get Paid_FTE value
     * @return float|null
     */
    public function getPaid_FTE()
    {
        return $this->Paid_FTE;
    }
    /**
     * Set Paid_FTE value
     * @param float $paid_FTE
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setPaid_FTE($paid_FTE = null)
    {
        // validation for constraint: float
        if (!is_null($paid_FTE) && !(is_float($paid_FTE) || is_numeric($paid_FTE))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paid_FTE, true), gettype($paid_FTE)), __LINE__);
        }
        // validation for constraint: fractionDigits(12)
        if (!is_null($paid_FTE) && mb_strlen(mb_substr($paid_FTE, mb_strpos($paid_FTE, '.') + 1)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 12 fraction digits, %d given', var_export($paid_FTE, true), mb_strlen(mb_substr($paid_FTE, mb_strpos($paid_FTE, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($paid_FTE) && $paid_FTE < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($paid_FTE, true)), __LINE__);
        }
        // validation for constraint: totalDigits(22)
        if (!is_null($paid_FTE) && mb_strlen(preg_replace('/(\D)/', '', $paid_FTE)) > 22) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 22 digits, "%d" given', var_export($paid_FTE, true), mb_strlen(preg_replace('/(\D)/', '', $paid_FTE))), __LINE__);
        }
        $this->Paid_FTE = $paid_FTE;
        return $this;
    }
    /**
     * Get Specify_Working_FTE value
     * @return bool|null
     */
    public function getSpecify_Working_FTE()
    {
        return $this->Specify_Working_FTE;
    }
    /**
     * Set Specify_Working_FTE value
     * @param bool $specify_Working_FTE
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setSpecify_Working_FTE($specify_Working_FTE = null)
    {
        // validation for constraint: boolean
        if (!is_null($specify_Working_FTE) && !is_bool($specify_Working_FTE)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($specify_Working_FTE, true), gettype($specify_Working_FTE)), __LINE__);
        }
        $this->Specify_Working_FTE = $specify_Working_FTE;
        return $this;
    }
    /**
     * Get Working_FTE value
     * @return float|null
     */
    public function getWorking_FTE()
    {
        return $this->Working_FTE;
    }
    /**
     * Set Working_FTE value
     * @param float $working_FTE
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setWorking_FTE($working_FTE = null)
    {
        // validation for constraint: float
        if (!is_null($working_FTE) && !(is_float($working_FTE) || is_numeric($working_FTE))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($working_FTE, true), gettype($working_FTE)), __LINE__);
        }
        // validation for constraint: fractionDigits(12)
        if (!is_null($working_FTE) && mb_strlen(mb_substr($working_FTE, mb_strpos($working_FTE, '.') + 1)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 12 fraction digits, %d given', var_export($working_FTE, true), mb_strlen(mb_substr($working_FTE, mb_strpos($working_FTE, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($working_FTE) && $working_FTE < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($working_FTE, true)), __LINE__);
        }
        // validation for constraint: totalDigits(22)
        if (!is_null($working_FTE) && mb_strlen(preg_replace('/(\D)/', '', $working_FTE)) > 22) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 22 digits, "%d" given', var_export($working_FTE, true), mb_strlen(preg_replace('/(\D)/', '', $working_FTE))), __LINE__);
        }
        $this->Working_FTE = $working_FTE;
        return $this;
    }
    /**
     * Get Exclude_from_Headcount value
     * @return bool|null
     */
    public function getExclude_from_Headcount()
    {
        return $this->Exclude_from_Headcount;
    }
    /**
     * Set Exclude_from_Headcount value
     * @param bool $exclude_from_Headcount
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setExclude_from_Headcount($exclude_from_Headcount = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_from_Headcount) && !is_bool($exclude_from_Headcount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_from_Headcount, true), gettype($exclude_from_Headcount)), __LINE__);
        }
        $this->Exclude_from_Headcount = $exclude_from_Headcount;
        return $this;
    }
    /**
     * Get Pay_Rate_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Pay_Rate_TypeObjectType|null
     */
    public function getPay_Rate_Type_Reference()
    {
        return $this->Pay_Rate_Type_Reference;
    }
    /**
     * Set Pay_Rate_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Pay_Rate_TypeObjectType $pay_Rate_Type_Reference
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setPay_Rate_Type_Reference(\WorkdayWsdl\\StructType\Pay_Rate_TypeObjectType $pay_Rate_Type_Reference = null)
    {
        $this->Pay_Rate_Type_Reference = $pay_Rate_Type_Reference;
        return $this;
    }
    /**
     * Get Job_Classification_Summary_Data value
     * @return \WorkdayWsdl\\StructType\Job_Classification_Summary_DataType[]|null
     */
    public function getJob_Classification_Summary_Data()
    {
        return $this->Job_Classification_Summary_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Classification_Summary_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Classification_Summary_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Classification_Summary_DataForArrayConstraintsFromSetJob_Classification_Summary_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $position_Detail_DataTypeJob_Classification_Summary_DataItem) {
            // validation for constraint: itemType
            if (!$position_Detail_DataTypeJob_Classification_Summary_DataItem instanceof \WorkdayWsdl\\StructType\Job_Classification_Summary_DataType) {
                $invalidValues[] = is_object($position_Detail_DataTypeJob_Classification_Summary_DataItem) ? get_class($position_Detail_DataTypeJob_Classification_Summary_DataItem) : sprintf('%s(%s)', gettype($position_Detail_DataTypeJob_Classification_Summary_DataItem), var_export($position_Detail_DataTypeJob_Classification_Summary_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Classification_Summary_Data property can only contain items of type \WorkdayWsdl\\StructType\Job_Classification_Summary_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Classification_Summary_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_Classification_Summary_DataType[] $job_Classification_Summary_Data
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setJob_Classification_Summary_Data(array $job_Classification_Summary_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Classification_Summary_DataArrayErrorMessage = self::validateJob_Classification_Summary_DataForArrayConstraintsFromSetJob_Classification_Summary_Data($job_Classification_Summary_Data))) {
            throw new \InvalidArgumentException($job_Classification_Summary_DataArrayErrorMessage, __LINE__);
        }
        $this->Job_Classification_Summary_Data = $job_Classification_Summary_Data;
        return $this;
    }
    /**
     * Add item to Job_Classification_Summary_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_Classification_Summary_DataType $item
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function addToJob_Classification_Summary_Data(\WorkdayWsdl\\StructType\Job_Classification_Summary_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_Classification_Summary_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_Classification_Summary_Data property can only contain items of type \WorkdayWsdl\\StructType\Job_Classification_Summary_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Classification_Summary_Data[] = $item;
        return $this;
    }
    /**
     * Get Company_Insider_Reference value
     * @return \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType[]|null
     */
    public function getCompany_Insider_Reference()
    {
        return $this->Company_Insider_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCompany_Insider_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompany_Insider_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompany_Insider_ReferenceForArrayConstraintsFromSetCompany_Insider_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $position_Detail_DataTypeCompany_Insider_ReferenceItem) {
            // validation for constraint: itemType
            if (!$position_Detail_DataTypeCompany_Insider_ReferenceItem instanceof \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType) {
                $invalidValues[] = is_object($position_Detail_DataTypeCompany_Insider_ReferenceItem) ? get_class($position_Detail_DataTypeCompany_Insider_ReferenceItem) : sprintf('%s(%s)', gettype($position_Detail_DataTypeCompany_Insider_ReferenceItem), var_export($position_Detail_DataTypeCompany_Insider_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Company_Insider_Reference property can only contain items of type \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Company_Insider_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType[] $company_Insider_Reference
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setCompany_Insider_Reference(array $company_Insider_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($company_Insider_ReferenceArrayErrorMessage = self::validateCompany_Insider_ReferenceForArrayConstraintsFromSetCompany_Insider_Reference($company_Insider_Reference))) {
            throw new \InvalidArgumentException($company_Insider_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Company_Insider_Reference = $company_Insider_Reference;
        return $this;
    }
    /**
     * Add item to Company_Insider_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType $item
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function addToCompany_Insider_Reference(\WorkdayWsdl\\StructType\Company_Insider_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Company_Insider_Reference property can only contain items of type \WorkdayWsdl\\StructType\Company_Insider_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Company_Insider_Reference[] = $item;
        return $this;
    }
    /**
     * Get Work_Shift_Reference value
     * @return \WorkdayWsdl\\StructType\Work_ShiftObjectType|null
     */
    public function getWork_Shift_Reference()
    {
        return $this->Work_Shift_Reference;
    }
    /**
     * Set Work_Shift_Reference value
     * @param \WorkdayWsdl\\StructType\Work_ShiftObjectType $work_Shift_Reference
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setWork_Shift_Reference(\WorkdayWsdl\\StructType\Work_ShiftObjectType $work_Shift_Reference = null)
    {
        $this->Work_Shift_Reference = $work_Shift_Reference;
        return $this;
    }
    /**
     * Get Work_Hours_Profiles_Reference value
     * @return \WorkdayWsdl\\StructType\Work_Hours_ProfileObjectType|null
     */
    public function getWork_Hours_Profiles_Reference()
    {
        return $this->Work_Hours_Profiles_Reference;
    }
    /**
     * Set Work_Hours_Profiles_Reference value
     * @param \WorkdayWsdl\\StructType\Work_Hours_ProfileObjectType $work_Hours_Profiles_Reference
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setWork_Hours_Profiles_Reference(\WorkdayWsdl\\StructType\Work_Hours_ProfileObjectType $work_Hours_Profiles_Reference = null)
    {
        $this->Work_Hours_Profiles_Reference = $work_Hours_Profiles_Reference;
        return $this;
    }
    /**
     * Get Federal_Withholding_FEIN value
     * @return string|null
     */
    public function getFederal_Withholding_FEIN()
    {
        return $this->Federal_Withholding_FEIN;
    }
    /**
     * Set Federal_Withholding_FEIN value
     * @param string $federal_Withholding_FEIN
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setFederal_Withholding_FEIN($federal_Withholding_FEIN = null)
    {
        // validation for constraint: string
        if (!is_null($federal_Withholding_FEIN) && !is_string($federal_Withholding_FEIN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($federal_Withholding_FEIN, true), gettype($federal_Withholding_FEIN)), __LINE__);
        }
        $this->Federal_Withholding_FEIN = $federal_Withholding_FEIN;
        return $this;
    }
    /**
     * Get Worker_Compensation_Code_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Compensation_Code_DataType[]|null
     */
    public function getWorker_Compensation_Code_Data()
    {
        return $this->Worker_Compensation_Code_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Compensation_Code_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Compensation_Code_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_Compensation_Code_DataForArrayConstraintsFromSetWorker_Compensation_Code_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $position_Detail_DataTypeWorker_Compensation_Code_DataItem) {
            // validation for constraint: itemType
            if (!$position_Detail_DataTypeWorker_Compensation_Code_DataItem instanceof \WorkdayWsdl\\StructType\Worker_Compensation_Code_DataType) {
                $invalidValues[] = is_object($position_Detail_DataTypeWorker_Compensation_Code_DataItem) ? get_class($position_Detail_DataTypeWorker_Compensation_Code_DataItem) : sprintf('%s(%s)', gettype($position_Detail_DataTypeWorker_Compensation_Code_DataItem), var_export($position_Detail_DataTypeWorker_Compensation_Code_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Compensation_Code_Data property can only contain items of type \WorkdayWsdl\\StructType\Worker_Compensation_Code_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Compensation_Code_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Compensation_Code_DataType[] $worker_Compensation_Code_Data
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setWorker_Compensation_Code_Data(array $worker_Compensation_Code_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_Compensation_Code_DataArrayErrorMessage = self::validateWorker_Compensation_Code_DataForArrayConstraintsFromSetWorker_Compensation_Code_Data($worker_Compensation_Code_Data))) {
            throw new \InvalidArgumentException($worker_Compensation_Code_DataArrayErrorMessage, __LINE__);
        }
        $this->Worker_Compensation_Code_Data = $worker_Compensation_Code_Data;
        return $this;
    }
    /**
     * Add item to Worker_Compensation_Code_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Worker_Compensation_Code_DataType $item
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function addToWorker_Compensation_Code_Data(\WorkdayWsdl\\StructType\Worker_Compensation_Code_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Worker_Compensation_Code_DataType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Compensation_Code_Data property can only contain items of type \WorkdayWsdl\\StructType\Worker_Compensation_Code_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Compensation_Code_Data[] = $item;
        return $this;
    }
    /**
     * Get Position_Payroll_Reporting_Code_Data value
     * @return \WorkdayWsdl\\StructType\Position_Payroll_Reporting_Code_DataType[]|null
     */
    public function getPosition_Payroll_Reporting_Code_Data()
    {
        return $this->Position_Payroll_Reporting_Code_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPosition_Payroll_Reporting_Code_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPosition_Payroll_Reporting_Code_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePosition_Payroll_Reporting_Code_DataForArrayConstraintsFromSetPosition_Payroll_Reporting_Code_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $position_Detail_DataTypePosition_Payroll_Reporting_Code_DataItem) {
            // validation for constraint: itemType
            if (!$position_Detail_DataTypePosition_Payroll_Reporting_Code_DataItem instanceof \WorkdayWsdl\\StructType\Position_Payroll_Reporting_Code_DataType) {
                $invalidValues[] = is_object($position_Detail_DataTypePosition_Payroll_Reporting_Code_DataItem) ? get_class($position_Detail_DataTypePosition_Payroll_Reporting_Code_DataItem) : sprintf('%s(%s)', gettype($position_Detail_DataTypePosition_Payroll_Reporting_Code_DataItem), var_export($position_Detail_DataTypePosition_Payroll_Reporting_Code_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Position_Payroll_Reporting_Code_Data property can only contain items of type \WorkdayWsdl\\StructType\Position_Payroll_Reporting_Code_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Position_Payroll_Reporting_Code_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Position_Payroll_Reporting_Code_DataType[] $position_Payroll_Reporting_Code_Data
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setPosition_Payroll_Reporting_Code_Data(array $position_Payroll_Reporting_Code_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($position_Payroll_Reporting_Code_DataArrayErrorMessage = self::validatePosition_Payroll_Reporting_Code_DataForArrayConstraintsFromSetPosition_Payroll_Reporting_Code_Data($position_Payroll_Reporting_Code_Data))) {
            throw new \InvalidArgumentException($position_Payroll_Reporting_Code_DataArrayErrorMessage, __LINE__);
        }
        $this->Position_Payroll_Reporting_Code_Data = $position_Payroll_Reporting_Code_Data;
        return $this;
    }
    /**
     * Add item to Position_Payroll_Reporting_Code_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Position_Payroll_Reporting_Code_DataType $item
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function addToPosition_Payroll_Reporting_Code_Data(\WorkdayWsdl\\StructType\Position_Payroll_Reporting_Code_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Position_Payroll_Reporting_Code_DataType) {
            throw new \InvalidArgumentException(sprintf('The Position_Payroll_Reporting_Code_Data property can only contain items of type \WorkdayWsdl\\StructType\Position_Payroll_Reporting_Code_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Position_Payroll_Reporting_Code_Data[] = $item;
        return $this;
    }
    /**
     * Get Job_Profile_Summary_Data value
     * @return \WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType|null
     */
    public function getJob_Profile_Summary_Data()
    {
        return $this->Job_Profile_Summary_Data;
    }
    /**
     * Set Job_Profile_Summary_Data value
     * @param \WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType $job_Profile_Summary_Data
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setJob_Profile_Summary_Data(\WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType $job_Profile_Summary_Data = null)
    {
        $this->Job_Profile_Summary_Data = $job_Profile_Summary_Data;
        return $this;
    }
    /**
     * Get Business_Site_Summary_Data value
     * @return \WorkdayWsdl\\StructType\Location_Summary_DataType|null
     */
    public function getBusiness_Site_Summary_Data()
    {
        return $this->Business_Site_Summary_Data;
    }
    /**
     * Set Business_Site_Summary_Data value
     * @param \WorkdayWsdl\\StructType\Location_Summary_DataType $business_Site_Summary_Data
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setBusiness_Site_Summary_Data(\WorkdayWsdl\\StructType\Location_Summary_DataType $business_Site_Summary_Data = null)
    {
        $this->Business_Site_Summary_Data = $business_Site_Summary_Data;
        return $this;
    }
    /**
     * Get Payroll_Interface_Processing_Data value
     * @return \WorkdayWsdl\\StructType\Position_Payroll_Interface_Detail_DataType|null
     */
    public function getPayroll_Interface_Processing_Data()
    {
        return $this->Payroll_Interface_Processing_Data;
    }
    /**
     * Set Payroll_Interface_Processing_Data value
     * @param \WorkdayWsdl\\StructType\Position_Payroll_Interface_Detail_DataType $payroll_Interface_Processing_Data
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setPayroll_Interface_Processing_Data(\WorkdayWsdl\\StructType\Position_Payroll_Interface_Detail_DataType $payroll_Interface_Processing_Data = null)
    {
        $this->Payroll_Interface_Processing_Data = $payroll_Interface_Processing_Data;
        return $this;
    }
    /**
     * Get Regular_Paid_Equivalent_Hours value
     * @return float|null
     */
    public function getRegular_Paid_Equivalent_Hours()
    {
        return $this->Regular_Paid_Equivalent_Hours;
    }
    /**
     * Set Regular_Paid_Equivalent_Hours value
     * @param float $regular_Paid_Equivalent_Hours
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setRegular_Paid_Equivalent_Hours($regular_Paid_Equivalent_Hours = null)
    {
        // validation for constraint: float
        if (!is_null($regular_Paid_Equivalent_Hours) && !(is_float($regular_Paid_Equivalent_Hours) || is_numeric($regular_Paid_Equivalent_Hours))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($regular_Paid_Equivalent_Hours, true), gettype($regular_Paid_Equivalent_Hours)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($regular_Paid_Equivalent_Hours) && mb_strlen(mb_substr($regular_Paid_Equivalent_Hours, mb_strpos($regular_Paid_Equivalent_Hours, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($regular_Paid_Equivalent_Hours, true), mb_strlen(mb_substr($regular_Paid_Equivalent_Hours, mb_strpos($regular_Paid_Equivalent_Hours, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($regular_Paid_Equivalent_Hours) && $regular_Paid_Equivalent_Hours < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($regular_Paid_Equivalent_Hours, true)), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($regular_Paid_Equivalent_Hours) && mb_strlen(preg_replace('/(\D)/', '', $regular_Paid_Equivalent_Hours)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($regular_Paid_Equivalent_Hours, true), mb_strlen(preg_replace('/(\D)/', '', $regular_Paid_Equivalent_Hours))), __LINE__);
        }
        $this->Regular_Paid_Equivalent_Hours = $regular_Paid_Equivalent_Hours;
        return $this;
    }
    /**
     * Get Worker_Hours_Profile_Classification value
     * @return string|null
     */
    public function getWorker_Hours_Profile_Classification()
    {
        return $this->Worker_Hours_Profile_Classification;
    }
    /**
     * Set Worker_Hours_Profile_Classification value
     * @param string $worker_Hours_Profile_Classification
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setWorker_Hours_Profile_Classification($worker_Hours_Profile_Classification = null)
    {
        // validation for constraint: string
        if (!is_null($worker_Hours_Profile_Classification) && !is_string($worker_Hours_Profile_Classification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($worker_Hours_Profile_Classification, true), gettype($worker_Hours_Profile_Classification)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($worker_Hours_Profile_Classification) && mb_strlen($worker_Hours_Profile_Classification) > 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen($worker_Hours_Profile_Classification)), __LINE__);
        }
        $this->Worker_Hours_Profile_Classification = $worker_Hours_Profile_Classification;
        return $this;
    }
    /**
     * Get International_Assignment_Data value
     * @return \WorkdayWsdl\\StructType\International_Assignment_DataType|null
     */
    public function getInternational_Assignment_Data()
    {
        return $this->International_Assignment_Data;
    }
    /**
     * Set International_Assignment_Data value
     * @param \WorkdayWsdl\\StructType\International_Assignment_DataType $international_Assignment_Data
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setInternational_Assignment_Data(\WorkdayWsdl\\StructType\International_Assignment_DataType $international_Assignment_Data = null)
    {
        $this->International_Assignment_Data = $international_Assignment_Data;
        return $this;
    }
    /**
     * Get Work_Space__Reference value
     * @return \WorkdayWsdl\\StructType\LocationObjectType|null
     */
    public function getWork_Space__Reference()
    {
        return $this->Work_Space__Reference;
    }
    /**
     * Set Work_Space__Reference value
     * @param \WorkdayWsdl\\StructType\LocationObjectType $work_Space__Reference
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setWork_Space__Reference(\WorkdayWsdl\\StructType\LocationObjectType $work_Space__Reference = null)
    {
        $this->Work_Space__Reference = $work_Space__Reference;
        return $this;
    }
    /**
     * Get Academic_Pay_Setup_Data value
     * @return \WorkdayWsdl\\StructType\Academic_Pay_Setup_DataType|null
     */
    public function getAcademic_Pay_Setup_Data()
    {
        return $this->Academic_Pay_Setup_Data;
    }
    /**
     * Set Academic_Pay_Setup_Data value
     * @param \WorkdayWsdl\\StructType\Academic_Pay_Setup_DataType $academic_Pay_Setup_Data
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setAcademic_Pay_Setup_Data(\WorkdayWsdl\\StructType\Academic_Pay_Setup_DataType $academic_Pay_Setup_Data = null)
    {
        $this->Academic_Pay_Setup_Data = $academic_Pay_Setup_Data;
        return $this;
    }
    /**
     * Get End_Date value
     * @return string|null
     */
    public function getEnd_Date()
    {
        return $this->End_Date;
    }
    /**
     * Set End_Date value
     * @param string $end_Date
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setEnd_Date($end_Date = null)
    {
        // validation for constraint: string
        if (!is_null($end_Date) && !is_string($end_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_Date, true), gettype($end_Date)), __LINE__);
        }
        $this->End_Date = $end_Date;
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
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
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
     * Get Collective_Agreement_Summary_Data value
     * @return \WorkdayWsdl\\StructType\Collective_Agreement_Summary_DataType[]|null
     */
    public function getCollective_Agreement_Summary_Data()
    {
        return $this->Collective_Agreement_Summary_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCollective_Agreement_Summary_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCollective_Agreement_Summary_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCollective_Agreement_Summary_DataForArrayConstraintsFromSetCollective_Agreement_Summary_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $position_Detail_DataTypeCollective_Agreement_Summary_DataItem) {
            // validation for constraint: itemType
            if (!$position_Detail_DataTypeCollective_Agreement_Summary_DataItem instanceof \WorkdayWsdl\\StructType\Collective_Agreement_Summary_DataType) {
                $invalidValues[] = is_object($position_Detail_DataTypeCollective_Agreement_Summary_DataItem) ? get_class($position_Detail_DataTypeCollective_Agreement_Summary_DataItem) : sprintf('%s(%s)', gettype($position_Detail_DataTypeCollective_Agreement_Summary_DataItem), var_export($position_Detail_DataTypeCollective_Agreement_Summary_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Collective_Agreement_Summary_Data property can only contain items of type \WorkdayWsdl\\StructType\Collective_Agreement_Summary_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Collective_Agreement_Summary_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Collective_Agreement_Summary_DataType[] $collective_Agreement_Summary_Data
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setCollective_Agreement_Summary_Data(array $collective_Agreement_Summary_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($collective_Agreement_Summary_DataArrayErrorMessage = self::validateCollective_Agreement_Summary_DataForArrayConstraintsFromSetCollective_Agreement_Summary_Data($collective_Agreement_Summary_Data))) {
            throw new \InvalidArgumentException($collective_Agreement_Summary_DataArrayErrorMessage, __LINE__);
        }
        $this->Collective_Agreement_Summary_Data = $collective_Agreement_Summary_Data;
        return $this;
    }
    /**
     * Add item to Collective_Agreement_Summary_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Collective_Agreement_Summary_DataType $item
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function addToCollective_Agreement_Summary_Data(\WorkdayWsdl\\StructType\Collective_Agreement_Summary_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Collective_Agreement_Summary_DataType) {
            throw new \InvalidArgumentException(sprintf('The Collective_Agreement_Summary_Data property can only contain items of type \WorkdayWsdl\\StructType\Collective_Agreement_Summary_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Collective_Agreement_Summary_Data[] = $item;
        return $this;
    }
    /**
     * Get Employee_Probation_Period_Summary_Data value
     * @return \WorkdayWsdl\\StructType\Employee_Probation_Period_Summary_DataType|null
     */
    public function getEmployee_Probation_Period_Summary_Data()
    {
        return $this->Employee_Probation_Period_Summary_Data;
    }
    /**
     * Set Employee_Probation_Period_Summary_Data value
     * @param \WorkdayWsdl\\StructType\Employee_Probation_Period_Summary_DataType $employee_Probation_Period_Summary_Data
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setEmployee_Probation_Period_Summary_Data(\WorkdayWsdl\\StructType\Employee_Probation_Period_Summary_DataType $employee_Probation_Period_Summary_Data = null)
    {
        $this->Employee_Probation_Period_Summary_Data = $employee_Probation_Period_Summary_Data;
        return $this;
    }
    /**
     * Get Manager_as_of_last_detected_manager_change_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType[]|null
     */
    public function getManager_as_of_last_detected_manager_change_Reference()
    {
        return $this->Manager_as_of_last_detected_manager_change_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setManager_as_of_last_detected_manager_change_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setManager_as_of_last_detected_manager_change_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateManager_as_of_last_detected_manager_change_ReferenceForArrayConstraintsFromSetManager_as_of_last_detected_manager_change_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $position_Detail_DataTypeManager_as_of_last_detected_manager_change_ReferenceItem) {
            // validation for constraint: itemType
            if (!$position_Detail_DataTypeManager_as_of_last_detected_manager_change_ReferenceItem instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
                $invalidValues[] = is_object($position_Detail_DataTypeManager_as_of_last_detected_manager_change_ReferenceItem) ? get_class($position_Detail_DataTypeManager_as_of_last_detected_manager_change_ReferenceItem) : sprintf('%s(%s)', gettype($position_Detail_DataTypeManager_as_of_last_detected_manager_change_ReferenceItem), var_export($position_Detail_DataTypeManager_as_of_last_detected_manager_change_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Manager_as_of_last_detected_manager_change_Reference property can only contain items of type \WorkdayWsdl\\StructType\WorkerObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Manager_as_of_last_detected_manager_change_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\WorkerObjectType[] $manager_as_of_last_detected_manager_change_Reference
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setManager_as_of_last_detected_manager_change_Reference(array $manager_as_of_last_detected_manager_change_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($manager_as_of_last_detected_manager_change_ReferenceArrayErrorMessage = self::validateManager_as_of_last_detected_manager_change_ReferenceForArrayConstraintsFromSetManager_as_of_last_detected_manager_change_Reference($manager_as_of_last_detected_manager_change_Reference))) {
            throw new \InvalidArgumentException($manager_as_of_last_detected_manager_change_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Manager_as_of_last_detected_manager_change_Reference = $manager_as_of_last_detected_manager_change_Reference;
        return $this;
    }
    /**
     * Add item to Manager_as_of_last_detected_manager_change_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $item
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function addToManager_as_of_last_detected_manager_change_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\WorkerObjectType) {
            throw new \InvalidArgumentException(sprintf('The Manager_as_of_last_detected_manager_change_Reference property can only contain items of type \WorkdayWsdl\\StructType\WorkerObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Manager_as_of_last_detected_manager_change_Reference[] = $item;
        return $this;
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType
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
