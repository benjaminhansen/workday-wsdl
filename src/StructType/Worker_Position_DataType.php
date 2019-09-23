<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Position_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containg all Position data.
 * @subpackage Structs
 */
class Worker_Position_DataType extends AbstractStructBase
{
    /**
     * The Position_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_ReferenceType
     */
    public $Position_Reference;
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
     * The Employee_Type_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Employee_Type_ReferenceType[]
     */
    public $Employee_Type_Reference;
    /**
     * The Position_Time_Type_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_Time_Type_ReferenceType[]
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
     * The Full_Time_Equivalent_Percentage
     * Meta information extracted from the WSDL
     * - documentation: Full Time Equivalent Percentage for Position.
     * - base: xsd:decimal
     * - fractionDigits: 4
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 14
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
     * The Pay_Rate_Type_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Pay_Rate_Type_ReferenceType[]
     */
    public $Pay_Rate_Type_Reference;
    /**
     * The Job_Classification_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Classification_ReferenceType[]
     */
    public $Job_Classification_Reference;
    /**
     * The Company_Insider_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Company_Insider_Type_ReferenceType[]
     */
    public $Company_Insider_Reference;
    /**
     * The Job_Profile_Summary_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType[]
     */
    public $Job_Profile_Summary_Data;
    /**
     * The Organization_Content_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_Content_DataType[]
     */
    public $Organization_Content_Data;
    /**
     * The Business_Site_Content_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_Content_DataType[]
     */
    public $Business_Site_Content_Data;
    /**
     * The Payroll_Processing_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Payroll_Interface_Processing_DataType[]
     */
    public $Payroll_Processing_Data;
    /**
     * The Supervisor_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains the reference to the manager of the worker. This will contain only one manager - even if there are actually multiple managers for the worker.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Supervisor_ReferenceType[]
     */
    public $Supervisor_Reference;
    /**
     * The Work_Shift_Reference
     * Meta information extracted from the WSDL
     * - documentation: The work hour profile(s) for the position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_ShiftObjectType
     */
    public $Work_Shift_Reference;
    /**
     * The Work_Hours_Profile_Reference
     * Meta information extracted from the WSDL
     * - documentation: The work hour profile(s) for the position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Hours_ProfileObjectType
     */
    public $Work_Hours_Profile_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date for Position.
     * @var string
     */
    public $Effective_Date;
    /**
     * Constructor method for Worker_Position_DataType
     * @uses Worker_Position_DataType::setPosition_Reference()
     * @uses Worker_Position_DataType::setPosition_ID()
     * @uses Worker_Position_DataType::setPosition_Title()
     * @uses Worker_Position_DataType::setBusiness_Title()
     * @uses Worker_Position_DataType::setEmployee_Type_Reference()
     * @uses Worker_Position_DataType::setPosition_Time_Type_Reference()
     * @uses Worker_Position_DataType::setJob_Exempt()
     * @uses Worker_Position_DataType::setScheduled_Weekly_Hours()
     * @uses Worker_Position_DataType::setDefault_Weekly_Hours()
     * @uses Worker_Position_DataType::setFull_Time_Equivalent_Percentage()
     * @uses Worker_Position_DataType::setSpecify_Paid_FTE()
     * @uses Worker_Position_DataType::setPaid_FTE()
     * @uses Worker_Position_DataType::setSpecify_Working_FTE()
     * @uses Worker_Position_DataType::setWorking_FTE()
     * @uses Worker_Position_DataType::setPay_Rate_Type_Reference()
     * @uses Worker_Position_DataType::setJob_Classification_Reference()
     * @uses Worker_Position_DataType::setCompany_Insider_Reference()
     * @uses Worker_Position_DataType::setJob_Profile_Summary_Data()
     * @uses Worker_Position_DataType::setOrganization_Content_Data()
     * @uses Worker_Position_DataType::setBusiness_Site_Content_Data()
     * @uses Worker_Position_DataType::setPayroll_Processing_Data()
     * @uses Worker_Position_DataType::setSupervisor_Reference()
     * @uses Worker_Position_DataType::setWork_Shift_Reference()
     * @uses Worker_Position_DataType::setWork_Hours_Profile_Reference()
     * @uses Worker_Position_DataType::setEffective_Date()
     * @param \WorkdayWsdl\\StructType\Position_ReferenceType $position_Reference
     * @param string $position_ID
     * @param string $position_Title
     * @param string $business_Title
     * @param \WorkdayWsdl\\StructType\Employee_Type_ReferenceType[] $employee_Type_Reference
     * @param \WorkdayWsdl\\StructType\Position_Time_Type_ReferenceType[] $position_Time_Type_Reference
     * @param bool $job_Exempt
     * @param float $scheduled_Weekly_Hours
     * @param float $default_Weekly_Hours
     * @param float $full_Time_Equivalent_Percentage
     * @param bool $specify_Paid_FTE
     * @param float $paid_FTE
     * @param bool $specify_Working_FTE
     * @param float $working_FTE
     * @param \WorkdayWsdl\\StructType\Pay_Rate_Type_ReferenceType[] $pay_Rate_Type_Reference
     * @param \WorkdayWsdl\\StructType\Job_Classification_ReferenceType[] $job_Classification_Reference
     * @param \WorkdayWsdl\\StructType\Company_Insider_Type_ReferenceType[] $company_Insider_Reference
     * @param \WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType[] $job_Profile_Summary_Data
     * @param \WorkdayWsdl\\StructType\Organization_Content_DataType[] $organization_Content_Data
     * @param \WorkdayWsdl\\StructType\Location_Content_DataType[] $business_Site_Content_Data
     * @param \WorkdayWsdl\\StructType\Payroll_Interface_Processing_DataType[] $payroll_Processing_Data
     * @param \WorkdayWsdl\\StructType\Supervisor_ReferenceType[] $supervisor_Reference
     * @param \WorkdayWsdl\\StructType\Work_ShiftObjectType $work_Shift_Reference
     * @param \WorkdayWsdl\\StructType\Work_Hours_ProfileObjectType $work_Hours_Profile_Reference
     * @param string $effective_Date
     */
    public function __construct(\WorkdayWsdl\\StructType\Position_ReferenceType $position_Reference = null, $position_ID = null, $position_Title = null, $business_Title = null, array $employee_Type_Reference = array(), array $position_Time_Type_Reference = array(), $job_Exempt = null, $scheduled_Weekly_Hours = null, $default_Weekly_Hours = null, $full_Time_Equivalent_Percentage = null, $specify_Paid_FTE = null, $paid_FTE = null, $specify_Working_FTE = null, $working_FTE = null, array $pay_Rate_Type_Reference = array(), array $job_Classification_Reference = array(), array $company_Insider_Reference = array(), array $job_Profile_Summary_Data = array(), array $organization_Content_Data = array(), array $business_Site_Content_Data = array(), array $payroll_Processing_Data = array(), array $supervisor_Reference = array(), \WorkdayWsdl\\StructType\Work_ShiftObjectType $work_Shift_Reference = null, \WorkdayWsdl\\StructType\Work_Hours_ProfileObjectType $work_Hours_Profile_Reference = null, $effective_Date = null)
    {
        $this
            ->setPosition_Reference($position_Reference)
            ->setPosition_ID($position_ID)
            ->setPosition_Title($position_Title)
            ->setBusiness_Title($business_Title)
            ->setEmployee_Type_Reference($employee_Type_Reference)
            ->setPosition_Time_Type_Reference($position_Time_Type_Reference)
            ->setJob_Exempt($job_Exempt)
            ->setScheduled_Weekly_Hours($scheduled_Weekly_Hours)
            ->setDefault_Weekly_Hours($default_Weekly_Hours)
            ->setFull_Time_Equivalent_Percentage($full_Time_Equivalent_Percentage)
            ->setSpecify_Paid_FTE($specify_Paid_FTE)
            ->setPaid_FTE($paid_FTE)
            ->setSpecify_Working_FTE($specify_Working_FTE)
            ->setWorking_FTE($working_FTE)
            ->setPay_Rate_Type_Reference($pay_Rate_Type_Reference)
            ->setJob_Classification_Reference($job_Classification_Reference)
            ->setCompany_Insider_Reference($company_Insider_Reference)
            ->setJob_Profile_Summary_Data($job_Profile_Summary_Data)
            ->setOrganization_Content_Data($organization_Content_Data)
            ->setBusiness_Site_Content_Data($business_Site_Content_Data)
            ->setPayroll_Processing_Data($payroll_Processing_Data)
            ->setSupervisor_Reference($supervisor_Reference)
            ->setWork_Shift_Reference($work_Shift_Reference)
            ->setWork_Hours_Profile_Reference($work_Hours_Profile_Reference)
            ->setEffective_Date($effective_Date);
    }
    /**
     * Get Position_Reference value
     * @return \WorkdayWsdl\\StructType\Position_ReferenceType|null
     */
    public function getPosition_Reference()
    {
        return $this->Position_Reference;
    }
    /**
     * Set Position_Reference value
     * @param \WorkdayWsdl\\StructType\Position_ReferenceType $position_Reference
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function setPosition_Reference(\WorkdayWsdl\\StructType\Position_ReferenceType $position_Reference = null)
    {
        $this->Position_Reference = $position_Reference;
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
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
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
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
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
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
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
     * Get Employee_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Employee_Type_ReferenceType[]|null
     */
    public function getEmployee_Type_Reference()
    {
        return $this->Employee_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setEmployee_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmployee_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmployee_Type_ReferenceForArrayConstraintsFromSetEmployee_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Position_DataTypeEmployee_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$worker_Position_DataTypeEmployee_Type_ReferenceItem instanceof \WorkdayWsdl\\StructType\Employee_Type_ReferenceType) {
                $invalidValues[] = is_object($worker_Position_DataTypeEmployee_Type_ReferenceItem) ? get_class($worker_Position_DataTypeEmployee_Type_ReferenceItem) : sprintf('%s(%s)', gettype($worker_Position_DataTypeEmployee_Type_ReferenceItem), var_export($worker_Position_DataTypeEmployee_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Employee_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Employee_Type_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Employee_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Employee_Type_ReferenceType[] $employee_Type_Reference
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function setEmployee_Type_Reference(array $employee_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($employee_Type_ReferenceArrayErrorMessage = self::validateEmployee_Type_ReferenceForArrayConstraintsFromSetEmployee_Type_Reference($employee_Type_Reference))) {
            throw new \InvalidArgumentException($employee_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Employee_Type_Reference = $employee_Type_Reference;
        return $this;
    }
    /**
     * Add item to Employee_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Employee_Type_ReferenceType $item
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function addToEmployee_Type_Reference(\WorkdayWsdl\\StructType\Employee_Type_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Employee_Type_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Employee_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Employee_Type_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Employee_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Get Position_Time_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Position_Time_Type_ReferenceType[]|null
     */
    public function getPosition_Time_Type_Reference()
    {
        return $this->Position_Time_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setPosition_Time_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPosition_Time_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePosition_Time_Type_ReferenceForArrayConstraintsFromSetPosition_Time_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Position_DataTypePosition_Time_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$worker_Position_DataTypePosition_Time_Type_ReferenceItem instanceof \WorkdayWsdl\\StructType\Position_Time_Type_ReferenceType) {
                $invalidValues[] = is_object($worker_Position_DataTypePosition_Time_Type_ReferenceItem) ? get_class($worker_Position_DataTypePosition_Time_Type_ReferenceItem) : sprintf('%s(%s)', gettype($worker_Position_DataTypePosition_Time_Type_ReferenceItem), var_export($worker_Position_DataTypePosition_Time_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Position_Time_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Position_Time_Type_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Position_Time_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Position_Time_Type_ReferenceType[] $position_Time_Type_Reference
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function setPosition_Time_Type_Reference(array $position_Time_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($position_Time_Type_ReferenceArrayErrorMessage = self::validatePosition_Time_Type_ReferenceForArrayConstraintsFromSetPosition_Time_Type_Reference($position_Time_Type_Reference))) {
            throw new \InvalidArgumentException($position_Time_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Position_Time_Type_Reference = $position_Time_Type_Reference;
        return $this;
    }
    /**
     * Add item to Position_Time_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Position_Time_Type_ReferenceType $item
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function addToPosition_Time_Type_Reference(\WorkdayWsdl\\StructType\Position_Time_Type_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Position_Time_Type_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Position_Time_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Position_Time_Type_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Position_Time_Type_Reference[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
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
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
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
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
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
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function setFull_Time_Equivalent_Percentage($full_Time_Equivalent_Percentage = null)
    {
        // validation for constraint: float
        if (!is_null($full_Time_Equivalent_Percentage) && !(is_float($full_Time_Equivalent_Percentage) || is_numeric($full_Time_Equivalent_Percentage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($full_Time_Equivalent_Percentage, true), gettype($full_Time_Equivalent_Percentage)), __LINE__);
        }
        // validation for constraint: fractionDigits(4)
        if (!is_null($full_Time_Equivalent_Percentage) && mb_strlen(mb_substr($full_Time_Equivalent_Percentage, mb_strpos($full_Time_Equivalent_Percentage, '.') + 1)) > 4) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 4 fraction digits, %d given', var_export($full_Time_Equivalent_Percentage, true), mb_strlen(mb_substr($full_Time_Equivalent_Percentage, mb_strpos($full_Time_Equivalent_Percentage, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(14)
        if (!is_null($full_Time_Equivalent_Percentage) && mb_strlen(preg_replace('/(\D)/', '', $full_Time_Equivalent_Percentage)) > 14) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 14 digits, "%d" given', var_export($full_Time_Equivalent_Percentage, true), mb_strlen(preg_replace('/(\D)/', '', $full_Time_Equivalent_Percentage))), __LINE__);
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
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
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
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
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
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
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
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
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
     * Get Pay_Rate_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Pay_Rate_Type_ReferenceType[]|null
     */
    public function getPay_Rate_Type_Reference()
    {
        return $this->Pay_Rate_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setPay_Rate_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPay_Rate_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePay_Rate_Type_ReferenceForArrayConstraintsFromSetPay_Rate_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Position_DataTypePay_Rate_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$worker_Position_DataTypePay_Rate_Type_ReferenceItem instanceof \WorkdayWsdl\\StructType\Pay_Rate_Type_ReferenceType) {
                $invalidValues[] = is_object($worker_Position_DataTypePay_Rate_Type_ReferenceItem) ? get_class($worker_Position_DataTypePay_Rate_Type_ReferenceItem) : sprintf('%s(%s)', gettype($worker_Position_DataTypePay_Rate_Type_ReferenceItem), var_export($worker_Position_DataTypePay_Rate_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Pay_Rate_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Pay_Rate_Type_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Pay_Rate_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Pay_Rate_Type_ReferenceType[] $pay_Rate_Type_Reference
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function setPay_Rate_Type_Reference(array $pay_Rate_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($pay_Rate_Type_ReferenceArrayErrorMessage = self::validatePay_Rate_Type_ReferenceForArrayConstraintsFromSetPay_Rate_Type_Reference($pay_Rate_Type_Reference))) {
            throw new \InvalidArgumentException($pay_Rate_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Pay_Rate_Type_Reference = $pay_Rate_Type_Reference;
        return $this;
    }
    /**
     * Add item to Pay_Rate_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Pay_Rate_Type_ReferenceType $item
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function addToPay_Rate_Type_Reference(\WorkdayWsdl\\StructType\Pay_Rate_Type_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Pay_Rate_Type_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Pay_Rate_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Pay_Rate_Type_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Pay_Rate_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Get Job_Classification_Reference value
     * @return \WorkdayWsdl\\StructType\Job_Classification_ReferenceType[]|null
     */
    public function getJob_Classification_Reference()
    {
        return $this->Job_Classification_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Classification_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Classification_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Classification_ReferenceForArrayConstraintsFromSetJob_Classification_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Position_DataTypeJob_Classification_ReferenceItem) {
            // validation for constraint: itemType
            if (!$worker_Position_DataTypeJob_Classification_ReferenceItem instanceof \WorkdayWsdl\\StructType\Job_Classification_ReferenceType) {
                $invalidValues[] = is_object($worker_Position_DataTypeJob_Classification_ReferenceItem) ? get_class($worker_Position_DataTypeJob_Classification_ReferenceItem) : sprintf('%s(%s)', gettype($worker_Position_DataTypeJob_Classification_ReferenceItem), var_export($worker_Position_DataTypeJob_Classification_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Classification_Reference property can only contain items of type \WorkdayWsdl\\StructType\Job_Classification_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Classification_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_Classification_ReferenceType[] $job_Classification_Reference
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function setJob_Classification_Reference(array $job_Classification_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Classification_ReferenceArrayErrorMessage = self::validateJob_Classification_ReferenceForArrayConstraintsFromSetJob_Classification_Reference($job_Classification_Reference))) {
            throw new \InvalidArgumentException($job_Classification_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Job_Classification_Reference = $job_Classification_Reference;
        return $this;
    }
    /**
     * Add item to Job_Classification_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_Classification_ReferenceType $item
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function addToJob_Classification_Reference(\WorkdayWsdl\\StructType\Job_Classification_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_Classification_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Job_Classification_Reference property can only contain items of type \WorkdayWsdl\\StructType\Job_Classification_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Classification_Reference[] = $item;
        return $this;
    }
    /**
     * Get Company_Insider_Reference value
     * @return \WorkdayWsdl\\StructType\Company_Insider_Type_ReferenceType[]|null
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
        foreach ($values as $worker_Position_DataTypeCompany_Insider_ReferenceItem) {
            // validation for constraint: itemType
            if (!$worker_Position_DataTypeCompany_Insider_ReferenceItem instanceof \WorkdayWsdl\\StructType\Company_Insider_Type_ReferenceType) {
                $invalidValues[] = is_object($worker_Position_DataTypeCompany_Insider_ReferenceItem) ? get_class($worker_Position_DataTypeCompany_Insider_ReferenceItem) : sprintf('%s(%s)', gettype($worker_Position_DataTypeCompany_Insider_ReferenceItem), var_export($worker_Position_DataTypeCompany_Insider_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Company_Insider_Reference property can only contain items of type \WorkdayWsdl\\StructType\Company_Insider_Type_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Company_Insider_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Company_Insider_Type_ReferenceType[] $company_Insider_Reference
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
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
     * @param \WorkdayWsdl\\StructType\Company_Insider_Type_ReferenceType $item
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function addToCompany_Insider_Reference(\WorkdayWsdl\\StructType\Company_Insider_Type_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Company_Insider_Type_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Company_Insider_Reference property can only contain items of type \WorkdayWsdl\\StructType\Company_Insider_Type_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Company_Insider_Reference[] = $item;
        return $this;
    }
    /**
     * Get Job_Profile_Summary_Data value
     * @return \WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType[]|null
     */
    public function getJob_Profile_Summary_Data()
    {
        return $this->Job_Profile_Summary_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Profile_Summary_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Profile_Summary_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Profile_Summary_DataForArrayConstraintsFromSetJob_Profile_Summary_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Position_DataTypeJob_Profile_Summary_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Position_DataTypeJob_Profile_Summary_DataItem instanceof \WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType) {
                $invalidValues[] = is_object($worker_Position_DataTypeJob_Profile_Summary_DataItem) ? get_class($worker_Position_DataTypeJob_Profile_Summary_DataItem) : sprintf('%s(%s)', gettype($worker_Position_DataTypeJob_Profile_Summary_DataItem), var_export($worker_Position_DataTypeJob_Profile_Summary_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Profile_Summary_Data property can only contain items of type \WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Profile_Summary_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType[] $job_Profile_Summary_Data
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function setJob_Profile_Summary_Data(array $job_Profile_Summary_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Profile_Summary_DataArrayErrorMessage = self::validateJob_Profile_Summary_DataForArrayConstraintsFromSetJob_Profile_Summary_Data($job_Profile_Summary_Data))) {
            throw new \InvalidArgumentException($job_Profile_Summary_DataArrayErrorMessage, __LINE__);
        }
        $this->Job_Profile_Summary_Data = $job_Profile_Summary_Data;
        return $this;
    }
    /**
     * Add item to Job_Profile_Summary_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType $item
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function addToJob_Profile_Summary_Data(\WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_Profile_Summary_Data property can only contain items of type \WorkdayWsdl\\StructType\Job_Profile_in_Position_Summary_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Profile_Summary_Data[] = $item;
        return $this;
    }
    /**
     * Get Organization_Content_Data value
     * @return \WorkdayWsdl\\StructType\Organization_Content_DataType[]|null
     */
    public function getOrganization_Content_Data()
    {
        return $this->Organization_Content_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Content_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Content_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_Content_DataForArrayConstraintsFromSetOrganization_Content_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Position_DataTypeOrganization_Content_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Position_DataTypeOrganization_Content_DataItem instanceof \WorkdayWsdl\\StructType\Organization_Content_DataType) {
                $invalidValues[] = is_object($worker_Position_DataTypeOrganization_Content_DataItem) ? get_class($worker_Position_DataTypeOrganization_Content_DataItem) : sprintf('%s(%s)', gettype($worker_Position_DataTypeOrganization_Content_DataItem), var_export($worker_Position_DataTypeOrganization_Content_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Content_Data property can only contain items of type \WorkdayWsdl\\StructType\Organization_Content_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Content_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_Content_DataType[] $organization_Content_Data
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function setOrganization_Content_Data(array $organization_Content_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_Content_DataArrayErrorMessage = self::validateOrganization_Content_DataForArrayConstraintsFromSetOrganization_Content_Data($organization_Content_Data))) {
            throw new \InvalidArgumentException($organization_Content_DataArrayErrorMessage, __LINE__);
        }
        $this->Organization_Content_Data = $organization_Content_Data;
        return $this;
    }
    /**
     * Add item to Organization_Content_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Organization_Content_DataType $item
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function addToOrganization_Content_Data(\WorkdayWsdl\\StructType\Organization_Content_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Organization_Content_DataType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Content_Data property can only contain items of type \WorkdayWsdl\\StructType\Organization_Content_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Content_Data[] = $item;
        return $this;
    }
    /**
     * Get Business_Site_Content_Data value
     * @return \WorkdayWsdl\\StructType\Location_Content_DataType[]|null
     */
    public function getBusiness_Site_Content_Data()
    {
        return $this->Business_Site_Content_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setBusiness_Site_Content_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusiness_Site_Content_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBusiness_Site_Content_DataForArrayConstraintsFromSetBusiness_Site_Content_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Position_DataTypeBusiness_Site_Content_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Position_DataTypeBusiness_Site_Content_DataItem instanceof \WorkdayWsdl\\StructType\Location_Content_DataType) {
                $invalidValues[] = is_object($worker_Position_DataTypeBusiness_Site_Content_DataItem) ? get_class($worker_Position_DataTypeBusiness_Site_Content_DataItem) : sprintf('%s(%s)', gettype($worker_Position_DataTypeBusiness_Site_Content_DataItem), var_export($worker_Position_DataTypeBusiness_Site_Content_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Business_Site_Content_Data property can only contain items of type \WorkdayWsdl\\StructType\Location_Content_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Business_Site_Content_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_Content_DataType[] $business_Site_Content_Data
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function setBusiness_Site_Content_Data(array $business_Site_Content_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($business_Site_Content_DataArrayErrorMessage = self::validateBusiness_Site_Content_DataForArrayConstraintsFromSetBusiness_Site_Content_Data($business_Site_Content_Data))) {
            throw new \InvalidArgumentException($business_Site_Content_DataArrayErrorMessage, __LINE__);
        }
        $this->Business_Site_Content_Data = $business_Site_Content_Data;
        return $this;
    }
    /**
     * Add item to Business_Site_Content_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_Content_DataType $item
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function addToBusiness_Site_Content_Data(\WorkdayWsdl\\StructType\Location_Content_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Location_Content_DataType) {
            throw new \InvalidArgumentException(sprintf('The Business_Site_Content_Data property can only contain items of type \WorkdayWsdl\\StructType\Location_Content_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Business_Site_Content_Data[] = $item;
        return $this;
    }
    /**
     * Get Payroll_Processing_Data value
     * @return \WorkdayWsdl\\StructType\Payroll_Interface_Processing_DataType[]|null
     */
    public function getPayroll_Processing_Data()
    {
        return $this->Payroll_Processing_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPayroll_Processing_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPayroll_Processing_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePayroll_Processing_DataForArrayConstraintsFromSetPayroll_Processing_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Position_DataTypePayroll_Processing_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Position_DataTypePayroll_Processing_DataItem instanceof \WorkdayWsdl\\StructType\Payroll_Interface_Processing_DataType) {
                $invalidValues[] = is_object($worker_Position_DataTypePayroll_Processing_DataItem) ? get_class($worker_Position_DataTypePayroll_Processing_DataItem) : sprintf('%s(%s)', gettype($worker_Position_DataTypePayroll_Processing_DataItem), var_export($worker_Position_DataTypePayroll_Processing_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Payroll_Processing_Data property can only contain items of type \WorkdayWsdl\\StructType\Payroll_Interface_Processing_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Payroll_Processing_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Payroll_Interface_Processing_DataType[] $payroll_Processing_Data
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function setPayroll_Processing_Data(array $payroll_Processing_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($payroll_Processing_DataArrayErrorMessage = self::validatePayroll_Processing_DataForArrayConstraintsFromSetPayroll_Processing_Data($payroll_Processing_Data))) {
            throw new \InvalidArgumentException($payroll_Processing_DataArrayErrorMessage, __LINE__);
        }
        $this->Payroll_Processing_Data = $payroll_Processing_Data;
        return $this;
    }
    /**
     * Add item to Payroll_Processing_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Payroll_Interface_Processing_DataType $item
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function addToPayroll_Processing_Data(\WorkdayWsdl\\StructType\Payroll_Interface_Processing_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Payroll_Interface_Processing_DataType) {
            throw new \InvalidArgumentException(sprintf('The Payroll_Processing_Data property can only contain items of type \WorkdayWsdl\\StructType\Payroll_Interface_Processing_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Payroll_Processing_Data[] = $item;
        return $this;
    }
    /**
     * Get Supervisor_Reference value
     * @return \WorkdayWsdl\\StructType\Supervisor_ReferenceType[]|null
     */
    public function getSupervisor_Reference()
    {
        return $this->Supervisor_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setSupervisor_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupervisor_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupervisor_ReferenceForArrayConstraintsFromSetSupervisor_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Position_DataTypeSupervisor_ReferenceItem) {
            // validation for constraint: itemType
            if (!$worker_Position_DataTypeSupervisor_ReferenceItem instanceof \WorkdayWsdl\\StructType\Supervisor_ReferenceType) {
                $invalidValues[] = is_object($worker_Position_DataTypeSupervisor_ReferenceItem) ? get_class($worker_Position_DataTypeSupervisor_ReferenceItem) : sprintf('%s(%s)', gettype($worker_Position_DataTypeSupervisor_ReferenceItem), var_export($worker_Position_DataTypeSupervisor_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Supervisor_Reference property can only contain items of type \WorkdayWsdl\\StructType\Supervisor_ReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Supervisor_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Supervisor_ReferenceType[] $supervisor_Reference
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function setSupervisor_Reference(array $supervisor_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($supervisor_ReferenceArrayErrorMessage = self::validateSupervisor_ReferenceForArrayConstraintsFromSetSupervisor_Reference($supervisor_Reference))) {
            throw new \InvalidArgumentException($supervisor_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Supervisor_Reference = $supervisor_Reference;
        return $this;
    }
    /**
     * Add item to Supervisor_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Supervisor_ReferenceType $item
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function addToSupervisor_Reference(\WorkdayWsdl\\StructType\Supervisor_ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Supervisor_ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Supervisor_Reference property can only contain items of type \WorkdayWsdl\\StructType\Supervisor_ReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Supervisor_Reference[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function setWork_Shift_Reference(\WorkdayWsdl\\StructType\Work_ShiftObjectType $work_Shift_Reference = null)
    {
        $this->Work_Shift_Reference = $work_Shift_Reference;
        return $this;
    }
    /**
     * Get Work_Hours_Profile_Reference value
     * @return \WorkdayWsdl\\StructType\Work_Hours_ProfileObjectType|null
     */
    public function getWork_Hours_Profile_Reference()
    {
        return $this->Work_Hours_Profile_Reference;
    }
    /**
     * Set Work_Hours_Profile_Reference value
     * @param \WorkdayWsdl\\StructType\Work_Hours_ProfileObjectType $work_Hours_Profile_Reference
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
     */
    public function setWork_Hours_Profile_Reference(\WorkdayWsdl\\StructType\Work_Hours_ProfileObjectType $work_Hours_Profile_Reference = null)
    {
        $this->Work_Hours_Profile_Reference = $work_Hours_Profile_Reference;
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
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
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
     * @return \WorkdayWsdl\\StructType\Worker_Position_DataType
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
