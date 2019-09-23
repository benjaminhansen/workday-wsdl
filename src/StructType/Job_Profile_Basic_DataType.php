<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_Basic_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the basic job profile information.
 * @subpackage Structs
 */
class Job_Profile_Basic_DataType extends AbstractStructBase
{
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute indicates if the Job Profile is inactive.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Job_Title
     * Meta information extracted from the WSDL
     * - documentation: The name of the job profile.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Title;
    /**
     * The Include_Job_Code_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether Job Code should be included in Name (Display ID within Workday).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Job_Code_in_Name;
    /**
     * The Job_Profile_Private_Title
     * Meta information extracted from the WSDL
     * - documentation: Private Job Profile Title. This field is the same as Job Title Default in the online page.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Profile_Private_Title;
    /**
     * The Job_Profile_Summary
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Job Profile Summary.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Profile_Summary;
    /**
     * The Job_Description
     * Meta information extracted from the WSDL
     * - documentation: Rich text attribute identifying Job Profile Job Description.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Description;
    /**
     * The Additional_Job_Description
     * Meta information extracted from the WSDL
     * - documentation: The Additional Job Description is only available when the Recruiting functional area is enabled. Use job posting templates to control where the Additional Job Description displays. Example: Define a Job Description for external job
     * postings and an Additional Job Description for internal job postings.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Additional_Job_Description;
    /**
     * The Work_Shift_Required
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute indicating whether a work shift is required for workers in this job profile.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Work_Shift_Required;
    /**
     * The Public_Job
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute indicating whether the job profile is considered a public job.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Public_Job;
    /**
     * The Management_Level_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Management Level.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Management_LevelObjectType
     */
    public $Management_Level_Reference;
    /**
     * The Job_Category_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a Job Category.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_CategoryObjectType
     */
    public $Job_Category_Reference;
    /**
     * The Job_Level_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a job level for a job profile
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_LevelObjectType
     */
    public $Job_Level_Reference;
    /**
     * The Job_Family_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Profile_Job_Family_DataType[]
     */
    public $Job_Family_Data;
    /**
     * The Company_Insider_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Company_Insider_Job_Profile_DataType[]
     */
    public $Company_Insider_Data;
    /**
     * The Referral_Payment_Plan_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for an Active Referral One-Time Payment Plan
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\One_Time_Payment_PlanObjectType
     */
    public $Referral_Payment_Plan_Reference;
    /**
     * The Critical_Job
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute indicating whether the job profile is considered a critical job.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Critical_Job;
    /**
     * The Difficulty_to_Fill_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a difficulty to fill.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Difficulty_to_FillObjectType
     */
    public $Difficulty_to_Fill_Reference;
    /**
     * The Restrict_to_Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: Restrict to Country Reference
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CountryObjectType[]
     */
    public $Restrict_to_Country_Reference;
    /**
     * Constructor method for Job_Profile_Basic_DataType
     * @uses Job_Profile_Basic_DataType::setInactive()
     * @uses Job_Profile_Basic_DataType::setJob_Title()
     * @uses Job_Profile_Basic_DataType::setInclude_Job_Code_in_Name()
     * @uses Job_Profile_Basic_DataType::setJob_Profile_Private_Title()
     * @uses Job_Profile_Basic_DataType::setJob_Profile_Summary()
     * @uses Job_Profile_Basic_DataType::setJob_Description()
     * @uses Job_Profile_Basic_DataType::setAdditional_Job_Description()
     * @uses Job_Profile_Basic_DataType::setWork_Shift_Required()
     * @uses Job_Profile_Basic_DataType::setPublic_Job()
     * @uses Job_Profile_Basic_DataType::setManagement_Level_Reference()
     * @uses Job_Profile_Basic_DataType::setJob_Category_Reference()
     * @uses Job_Profile_Basic_DataType::setJob_Level_Reference()
     * @uses Job_Profile_Basic_DataType::setJob_Family_Data()
     * @uses Job_Profile_Basic_DataType::setCompany_Insider_Data()
     * @uses Job_Profile_Basic_DataType::setReferral_Payment_Plan_Reference()
     * @uses Job_Profile_Basic_DataType::setCritical_Job()
     * @uses Job_Profile_Basic_DataType::setDifficulty_to_Fill_Reference()
     * @uses Job_Profile_Basic_DataType::setRestrict_to_Country_Reference()
     * @param bool $inactive
     * @param string $job_Title
     * @param bool $include_Job_Code_in_Name
     * @param string $job_Profile_Private_Title
     * @param string $job_Profile_Summary
     * @param string $job_Description
     * @param string $additional_Job_Description
     * @param bool $work_Shift_Required
     * @param bool $public_Job
     * @param \WorkdayWsdl\\StructType\Management_LevelObjectType $management_Level_Reference
     * @param \WorkdayWsdl\\StructType\Job_CategoryObjectType $job_Category_Reference
     * @param \WorkdayWsdl\\StructType\Job_LevelObjectType $job_Level_Reference
     * @param \WorkdayWsdl\\StructType\Job_Profile_Job_Family_DataType[] $job_Family_Data
     * @param \WorkdayWsdl\\StructType\Company_Insider_Job_Profile_DataType[] $company_Insider_Data
     * @param \WorkdayWsdl\\StructType\One_Time_Payment_PlanObjectType $referral_Payment_Plan_Reference
     * @param bool $critical_Job
     * @param \WorkdayWsdl\\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference
     * @param \WorkdayWsdl\\StructType\CountryObjectType[] $restrict_to_Country_Reference
     */
    public function __construct($inactive = null, $job_Title = null, $include_Job_Code_in_Name = null, $job_Profile_Private_Title = null, $job_Profile_Summary = null, $job_Description = null, $additional_Job_Description = null, $work_Shift_Required = null, $public_Job = null, \WorkdayWsdl\\StructType\Management_LevelObjectType $management_Level_Reference = null, \WorkdayWsdl\\StructType\Job_CategoryObjectType $job_Category_Reference = null, \WorkdayWsdl\\StructType\Job_LevelObjectType $job_Level_Reference = null, array $job_Family_Data = array(), array $company_Insider_Data = array(), \WorkdayWsdl\\StructType\One_Time_Payment_PlanObjectType $referral_Payment_Plan_Reference = null, $critical_Job = null, \WorkdayWsdl\\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference = null, array $restrict_to_Country_Reference = array())
    {
        $this
            ->setInactive($inactive)
            ->setJob_Title($job_Title)
            ->setInclude_Job_Code_in_Name($include_Job_Code_in_Name)
            ->setJob_Profile_Private_Title($job_Profile_Private_Title)
            ->setJob_Profile_Summary($job_Profile_Summary)
            ->setJob_Description($job_Description)
            ->setAdditional_Job_Description($additional_Job_Description)
            ->setWork_Shift_Required($work_Shift_Required)
            ->setPublic_Job($public_Job)
            ->setManagement_Level_Reference($management_Level_Reference)
            ->setJob_Category_Reference($job_Category_Reference)
            ->setJob_Level_Reference($job_Level_Reference)
            ->setJob_Family_Data($job_Family_Data)
            ->setCompany_Insider_Data($company_Insider_Data)
            ->setReferral_Payment_Plan_Reference($referral_Payment_Plan_Reference)
            ->setCritical_Job($critical_Job)
            ->setDifficulty_to_Fill_Reference($difficulty_to_Fill_Reference)
            ->setRestrict_to_Country_Reference($restrict_to_Country_Reference);
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Get Job_Title value
     * @return string|null
     */
    public function getJob_Title()
    {
        return $this->Job_Title;
    }
    /**
     * Set Job_Title value
     * @param string $job_Title
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setJob_Title($job_Title = null)
    {
        // validation for constraint: string
        if (!is_null($job_Title) && !is_string($job_Title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Title, true), gettype($job_Title)), __LINE__);
        }
        $this->Job_Title = $job_Title;
        return $this;
    }
    /**
     * Get Include_Job_Code_in_Name value
     * @return bool|null
     */
    public function getInclude_Job_Code_in_Name()
    {
        return $this->Include_Job_Code_in_Name;
    }
    /**
     * Set Include_Job_Code_in_Name value
     * @param bool $include_Job_Code_in_Name
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setInclude_Job_Code_in_Name($include_Job_Code_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Job_Code_in_Name) && !is_bool($include_Job_Code_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Job_Code_in_Name, true), gettype($include_Job_Code_in_Name)), __LINE__);
        }
        $this->Include_Job_Code_in_Name = $include_Job_Code_in_Name;
        return $this;
    }
    /**
     * Get Job_Profile_Private_Title value
     * @return string|null
     */
    public function getJob_Profile_Private_Title()
    {
        return $this->Job_Profile_Private_Title;
    }
    /**
     * Set Job_Profile_Private_Title value
     * @param string $job_Profile_Private_Title
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setJob_Profile_Private_Title($job_Profile_Private_Title = null)
    {
        // validation for constraint: string
        if (!is_null($job_Profile_Private_Title) && !is_string($job_Profile_Private_Title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Profile_Private_Title, true), gettype($job_Profile_Private_Title)), __LINE__);
        }
        $this->Job_Profile_Private_Title = $job_Profile_Private_Title;
        return $this;
    }
    /**
     * Get Job_Profile_Summary value
     * @return string|null
     */
    public function getJob_Profile_Summary()
    {
        return $this->Job_Profile_Summary;
    }
    /**
     * Set Job_Profile_Summary value
     * @param string $job_Profile_Summary
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setJob_Profile_Summary($job_Profile_Summary = null)
    {
        // validation for constraint: string
        if (!is_null($job_Profile_Summary) && !is_string($job_Profile_Summary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Profile_Summary, true), gettype($job_Profile_Summary)), __LINE__);
        }
        $this->Job_Profile_Summary = $job_Profile_Summary;
        return $this;
    }
    /**
     * Get Job_Description value
     * @return string|null
     */
    public function getJob_Description()
    {
        return $this->Job_Description;
    }
    /**
     * Set Job_Description value
     * @param string $job_Description
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setJob_Description($job_Description = null)
    {
        // validation for constraint: string
        if (!is_null($job_Description) && !is_string($job_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Description, true), gettype($job_Description)), __LINE__);
        }
        $this->Job_Description = $job_Description;
        return $this;
    }
    /**
     * Get Additional_Job_Description value
     * @return string|null
     */
    public function getAdditional_Job_Description()
    {
        return $this->Additional_Job_Description;
    }
    /**
     * Set Additional_Job_Description value
     * @param string $additional_Job_Description
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setAdditional_Job_Description($additional_Job_Description = null)
    {
        // validation for constraint: string
        if (!is_null($additional_Job_Description) && !is_string($additional_Job_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additional_Job_Description, true), gettype($additional_Job_Description)), __LINE__);
        }
        $this->Additional_Job_Description = $additional_Job_Description;
        return $this;
    }
    /**
     * Get Work_Shift_Required value
     * @return bool|null
     */
    public function getWork_Shift_Required()
    {
        return $this->Work_Shift_Required;
    }
    /**
     * Set Work_Shift_Required value
     * @param bool $work_Shift_Required
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setWork_Shift_Required($work_Shift_Required = null)
    {
        // validation for constraint: boolean
        if (!is_null($work_Shift_Required) && !is_bool($work_Shift_Required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($work_Shift_Required, true), gettype($work_Shift_Required)), __LINE__);
        }
        $this->Work_Shift_Required = $work_Shift_Required;
        return $this;
    }
    /**
     * Get Public_Job value
     * @return bool|null
     */
    public function getPublic_Job()
    {
        return $this->Public_Job;
    }
    /**
     * Set Public_Job value
     * @param bool $public_Job
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setPublic_Job($public_Job = null)
    {
        // validation for constraint: boolean
        if (!is_null($public_Job) && !is_bool($public_Job)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($public_Job, true), gettype($public_Job)), __LINE__);
        }
        $this->Public_Job = $public_Job;
        return $this;
    }
    /**
     * Get Management_Level_Reference value
     * @return \WorkdayWsdl\\StructType\Management_LevelObjectType|null
     */
    public function getManagement_Level_Reference()
    {
        return $this->Management_Level_Reference;
    }
    /**
     * Set Management_Level_Reference value
     * @param \WorkdayWsdl\\StructType\Management_LevelObjectType $management_Level_Reference
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setManagement_Level_Reference(\WorkdayWsdl\\StructType\Management_LevelObjectType $management_Level_Reference = null)
    {
        $this->Management_Level_Reference = $management_Level_Reference;
        return $this;
    }
    /**
     * Get Job_Category_Reference value
     * @return \WorkdayWsdl\\StructType\Job_CategoryObjectType|null
     */
    public function getJob_Category_Reference()
    {
        return $this->Job_Category_Reference;
    }
    /**
     * Set Job_Category_Reference value
     * @param \WorkdayWsdl\\StructType\Job_CategoryObjectType $job_Category_Reference
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setJob_Category_Reference(\WorkdayWsdl\\StructType\Job_CategoryObjectType $job_Category_Reference = null)
    {
        $this->Job_Category_Reference = $job_Category_Reference;
        return $this;
    }
    /**
     * Get Job_Level_Reference value
     * @return \WorkdayWsdl\\StructType\Job_LevelObjectType|null
     */
    public function getJob_Level_Reference()
    {
        return $this->Job_Level_Reference;
    }
    /**
     * Set Job_Level_Reference value
     * @param \WorkdayWsdl\\StructType\Job_LevelObjectType $job_Level_Reference
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setJob_Level_Reference(\WorkdayWsdl\\StructType\Job_LevelObjectType $job_Level_Reference = null)
    {
        $this->Job_Level_Reference = $job_Level_Reference;
        return $this;
    }
    /**
     * Get Job_Family_Data value
     * @return \WorkdayWsdl\\StructType\Job_Profile_Job_Family_DataType[]|null
     */
    public function getJob_Family_Data()
    {
        return $this->Job_Family_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Family_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Family_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Family_DataForArrayConstraintsFromSetJob_Family_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Basic_DataTypeJob_Family_DataItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Basic_DataTypeJob_Family_DataItem instanceof \WorkdayWsdl\\StructType\Job_Profile_Job_Family_DataType) {
                $invalidValues[] = is_object($job_Profile_Basic_DataTypeJob_Family_DataItem) ? get_class($job_Profile_Basic_DataTypeJob_Family_DataItem) : sprintf('%s(%s)', gettype($job_Profile_Basic_DataTypeJob_Family_DataItem), var_export($job_Profile_Basic_DataTypeJob_Family_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Family_Data property can only contain items of type \WorkdayWsdl\\StructType\Job_Profile_Job_Family_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Family_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_Profile_Job_Family_DataType[] $job_Family_Data
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setJob_Family_Data(array $job_Family_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Family_DataArrayErrorMessage = self::validateJob_Family_DataForArrayConstraintsFromSetJob_Family_Data($job_Family_Data))) {
            throw new \InvalidArgumentException($job_Family_DataArrayErrorMessage, __LINE__);
        }
        $this->Job_Family_Data = $job_Family_Data;
        return $this;
    }
    /**
     * Add item to Job_Family_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_Profile_Job_Family_DataType $item
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function addToJob_Family_Data(\WorkdayWsdl\\StructType\Job_Profile_Job_Family_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_Profile_Job_Family_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_Family_Data property can only contain items of type \WorkdayWsdl\\StructType\Job_Profile_Job_Family_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Family_Data[] = $item;
        return $this;
    }
    /**
     * Get Company_Insider_Data value
     * @return \WorkdayWsdl\\StructType\Company_Insider_Job_Profile_DataType[]|null
     */
    public function getCompany_Insider_Data()
    {
        return $this->Company_Insider_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCompany_Insider_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompany_Insider_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompany_Insider_DataForArrayConstraintsFromSetCompany_Insider_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Basic_DataTypeCompany_Insider_DataItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Basic_DataTypeCompany_Insider_DataItem instanceof \WorkdayWsdl\\StructType\Company_Insider_Job_Profile_DataType) {
                $invalidValues[] = is_object($job_Profile_Basic_DataTypeCompany_Insider_DataItem) ? get_class($job_Profile_Basic_DataTypeCompany_Insider_DataItem) : sprintf('%s(%s)', gettype($job_Profile_Basic_DataTypeCompany_Insider_DataItem), var_export($job_Profile_Basic_DataTypeCompany_Insider_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Company_Insider_Data property can only contain items of type \WorkdayWsdl\\StructType\Company_Insider_Job_Profile_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Company_Insider_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Company_Insider_Job_Profile_DataType[] $company_Insider_Data
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setCompany_Insider_Data(array $company_Insider_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($company_Insider_DataArrayErrorMessage = self::validateCompany_Insider_DataForArrayConstraintsFromSetCompany_Insider_Data($company_Insider_Data))) {
            throw new \InvalidArgumentException($company_Insider_DataArrayErrorMessage, __LINE__);
        }
        $this->Company_Insider_Data = $company_Insider_Data;
        return $this;
    }
    /**
     * Add item to Company_Insider_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Company_Insider_Job_Profile_DataType $item
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function addToCompany_Insider_Data(\WorkdayWsdl\\StructType\Company_Insider_Job_Profile_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Company_Insider_Job_Profile_DataType) {
            throw new \InvalidArgumentException(sprintf('The Company_Insider_Data property can only contain items of type \WorkdayWsdl\\StructType\Company_Insider_Job_Profile_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Company_Insider_Data[] = $item;
        return $this;
    }
    /**
     * Get Referral_Payment_Plan_Reference value
     * @return \WorkdayWsdl\\StructType\One_Time_Payment_PlanObjectType|null
     */
    public function getReferral_Payment_Plan_Reference()
    {
        return $this->Referral_Payment_Plan_Reference;
    }
    /**
     * Set Referral_Payment_Plan_Reference value
     * @param \WorkdayWsdl\\StructType\One_Time_Payment_PlanObjectType $referral_Payment_Plan_Reference
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setReferral_Payment_Plan_Reference(\WorkdayWsdl\\StructType\One_Time_Payment_PlanObjectType $referral_Payment_Plan_Reference = null)
    {
        $this->Referral_Payment_Plan_Reference = $referral_Payment_Plan_Reference;
        return $this;
    }
    /**
     * Get Critical_Job value
     * @return bool|null
     */
    public function getCritical_Job()
    {
        return $this->Critical_Job;
    }
    /**
     * Set Critical_Job value
     * @param bool $critical_Job
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setCritical_Job($critical_Job = null)
    {
        // validation for constraint: boolean
        if (!is_null($critical_Job) && !is_bool($critical_Job)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($critical_Job, true), gettype($critical_Job)), __LINE__);
        }
        $this->Critical_Job = $critical_Job;
        return $this;
    }
    /**
     * Get Difficulty_to_Fill_Reference value
     * @return \WorkdayWsdl\\StructType\Difficulty_to_FillObjectType|null
     */
    public function getDifficulty_to_Fill_Reference()
    {
        return $this->Difficulty_to_Fill_Reference;
    }
    /**
     * Set Difficulty_to_Fill_Reference value
     * @param \WorkdayWsdl\\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setDifficulty_to_Fill_Reference(\WorkdayWsdl\\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference = null)
    {
        $this->Difficulty_to_Fill_Reference = $difficulty_to_Fill_Reference;
        return $this;
    }
    /**
     * Get Restrict_to_Country_Reference value
     * @return \WorkdayWsdl\\StructType\CountryObjectType[]|null
     */
    public function getRestrict_to_Country_Reference()
    {
        return $this->Restrict_to_Country_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setRestrict_to_Country_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRestrict_to_Country_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRestrict_to_Country_ReferenceForArrayConstraintsFromSetRestrict_to_Country_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Basic_DataTypeRestrict_to_Country_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Basic_DataTypeRestrict_to_Country_ReferenceItem instanceof \WorkdayWsdl\\StructType\CountryObjectType) {
                $invalidValues[] = is_object($job_Profile_Basic_DataTypeRestrict_to_Country_ReferenceItem) ? get_class($job_Profile_Basic_DataTypeRestrict_to_Country_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Basic_DataTypeRestrict_to_Country_ReferenceItem), var_export($job_Profile_Basic_DataTypeRestrict_to_Country_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Restrict_to_Country_Reference property can only contain items of type \WorkdayWsdl\\StructType\CountryObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Restrict_to_Country_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\CountryObjectType[] $restrict_to_Country_Reference
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function setRestrict_to_Country_Reference(array $restrict_to_Country_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($restrict_to_Country_ReferenceArrayErrorMessage = self::validateRestrict_to_Country_ReferenceForArrayConstraintsFromSetRestrict_to_Country_Reference($restrict_to_Country_Reference))) {
            throw new \InvalidArgumentException($restrict_to_Country_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Restrict_to_Country_Reference = $restrict_to_Country_Reference;
        return $this;
    }
    /**
     * Add item to Restrict_to_Country_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\CountryObjectType $item
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
     */
    public function addToRestrict_to_Country_Reference(\WorkdayWsdl\\StructType\CountryObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\CountryObjectType) {
            throw new \InvalidArgumentException(sprintf('The Restrict_to_Country_Reference property can only contain items of type \WorkdayWsdl\\StructType\CountryObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Restrict_to_Country_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Profile_Basic_DataType
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
