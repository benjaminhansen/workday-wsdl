<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_History_Achievement_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Only one change can be in progress (the event in progress and not complete or canceled) for a job history for a particular worker. | Wrapper element for the job history information.
 * @subpackage Structs
 */
class Job_History_Achievement_DataType extends AbstractStructBase
{
    /**
     * The Job_History_ID
     * Meta information extracted from the WSDL
     * - documentation: External Employment ID. If no value is provided, a new external employment will be created. If a value is passed in an a corresponding external employment is not found, a new external employment will be created with the provided id.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_History_ID;
    /**
     * The Remove_Job_History
     * Meta information extracted from the WSDL
     * - documentation: Used for inbound operations to indicate that the Job History should be removed for the person. Will always return false for outbound operations.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Remove_Job_History;
    /**
     * The Job_Title
     * Meta information extracted from the WSDL
     * - documentation: The Business Title for the job. Required unless the Job History is being removed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Title;
    /**
     * The Company
     * Meta information extracted from the WSDL
     * - documentation: The name of the company. Either this field or Job History Company Reference is required unless the Job History is being removed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Company;
    /**
     * The Job_History_Company_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to an existing Job History Company. Either this field or Company is required unless the Job History is being removed.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_History_CompanyObjectType
     */
    public $Job_History_Company_Reference;
    /**
     * The Start_Date
     * Meta information extracted from the WSDL
     * - documentation: The start date of employment. Required unless the Job History is being removed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Start_Date;
    /**
     * The End_Date
     * Meta information extracted from the WSDL
     * - documentation: The end date of employment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Date;
    /**
     * The Responsibilities_and_Achievements
     * Meta information extracted from the WSDL
     * - documentation: Description of responsibilities and achievements during the tenure of the job.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Responsibilities_and_Achievements;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: The location of the job.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The Job_Reference
     * Meta information extracted from the WSDL
     * - documentation: References from colleagues, subordinates,managers, associates during the job tenure.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Reference;
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - documentation: Contact information for the job.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Contact;
    /**
     * Constructor method for Job_History_Achievement_DataType
     * @uses Job_History_Achievement_DataType::setJob_History_ID()
     * @uses Job_History_Achievement_DataType::setRemove_Job_History()
     * @uses Job_History_Achievement_DataType::setJob_Title()
     * @uses Job_History_Achievement_DataType::setCompany()
     * @uses Job_History_Achievement_DataType::setJob_History_Company_Reference()
     * @uses Job_History_Achievement_DataType::setStart_Date()
     * @uses Job_History_Achievement_DataType::setEnd_Date()
     * @uses Job_History_Achievement_DataType::setResponsibilities_and_Achievements()
     * @uses Job_History_Achievement_DataType::setLocation()
     * @uses Job_History_Achievement_DataType::setJob_Reference()
     * @uses Job_History_Achievement_DataType::setContact()
     * @param string $job_History_ID
     * @param bool $remove_Job_History
     * @param string $job_Title
     * @param string $company
     * @param \WorkdayWsdl\\StructType\Job_History_CompanyObjectType $job_History_Company_Reference
     * @param string $start_Date
     * @param string $end_Date
     * @param string $responsibilities_and_Achievements
     * @param string $location
     * @param string $job_Reference
     * @param string $contact
     */
    public function __construct($job_History_ID = null, $remove_Job_History = null, $job_Title = null, $company = null, \WorkdayWsdl\\StructType\Job_History_CompanyObjectType $job_History_Company_Reference = null, $start_Date = null, $end_Date = null, $responsibilities_and_Achievements = null, $location = null, $job_Reference = null, $contact = null)
    {
        $this
            ->setJob_History_ID($job_History_ID)
            ->setRemove_Job_History($remove_Job_History)
            ->setJob_Title($job_Title)
            ->setCompany($company)
            ->setJob_History_Company_Reference($job_History_Company_Reference)
            ->setStart_Date($start_Date)
            ->setEnd_Date($end_Date)
            ->setResponsibilities_and_Achievements($responsibilities_and_Achievements)
            ->setLocation($location)
            ->setJob_Reference($job_Reference)
            ->setContact($contact);
    }
    /**
     * Get Job_History_ID value
     * @return string|null
     */
    public function getJob_History_ID()
    {
        return $this->Job_History_ID;
    }
    /**
     * Set Job_History_ID value
     * @param string $job_History_ID
     * @return \WorkdayWsdl\\StructType\Job_History_Achievement_DataType
     */
    public function setJob_History_ID($job_History_ID = null)
    {
        // validation for constraint: string
        if (!is_null($job_History_ID) && !is_string($job_History_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_History_ID, true), gettype($job_History_ID)), __LINE__);
        }
        $this->Job_History_ID = $job_History_ID;
        return $this;
    }
    /**
     * Get Remove_Job_History value
     * @return bool|null
     */
    public function getRemove_Job_History()
    {
        return $this->Remove_Job_History;
    }
    /**
     * Set Remove_Job_History value
     * @param bool $remove_Job_History
     * @return \WorkdayWsdl\\StructType\Job_History_Achievement_DataType
     */
    public function setRemove_Job_History($remove_Job_History = null)
    {
        // validation for constraint: boolean
        if (!is_null($remove_Job_History) && !is_bool($remove_Job_History)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($remove_Job_History, true), gettype($remove_Job_History)), __LINE__);
        }
        $this->Remove_Job_History = $remove_Job_History;
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
     * @return \WorkdayWsdl\\StructType\Job_History_Achievement_DataType
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
     * Get Company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->Company;
    }
    /**
     * Set Company value
     * @param string $company
     * @return \WorkdayWsdl\\StructType\Job_History_Achievement_DataType
     */
    public function setCompany($company = null)
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        $this->Company = $company;
        return $this;
    }
    /**
     * Get Job_History_Company_Reference value
     * @return \WorkdayWsdl\\StructType\Job_History_CompanyObjectType|null
     */
    public function getJob_History_Company_Reference()
    {
        return $this->Job_History_Company_Reference;
    }
    /**
     * Set Job_History_Company_Reference value
     * @param \WorkdayWsdl\\StructType\Job_History_CompanyObjectType $job_History_Company_Reference
     * @return \WorkdayWsdl\\StructType\Job_History_Achievement_DataType
     */
    public function setJob_History_Company_Reference(\WorkdayWsdl\\StructType\Job_History_CompanyObjectType $job_History_Company_Reference = null)
    {
        $this->Job_History_Company_Reference = $job_History_Company_Reference;
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
     * @return \WorkdayWsdl\\StructType\Job_History_Achievement_DataType
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
     * @return \WorkdayWsdl\\StructType\Job_History_Achievement_DataType
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
     * Get Responsibilities_and_Achievements value
     * @return string|null
     */
    public function getResponsibilities_and_Achievements()
    {
        return $this->Responsibilities_and_Achievements;
    }
    /**
     * Set Responsibilities_and_Achievements value
     * @param string $responsibilities_and_Achievements
     * @return \WorkdayWsdl\\StructType\Job_History_Achievement_DataType
     */
    public function setResponsibilities_and_Achievements($responsibilities_and_Achievements = null)
    {
        // validation for constraint: string
        if (!is_null($responsibilities_and_Achievements) && !is_string($responsibilities_and_Achievements)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responsibilities_and_Achievements, true), gettype($responsibilities_and_Achievements)), __LINE__);
        }
        $this->Responsibilities_and_Achievements = $responsibilities_and_Achievements;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \WorkdayWsdl\\StructType\Job_History_Achievement_DataType
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get Job_Reference value
     * @return string|null
     */
    public function getJob_Reference()
    {
        return $this->Job_Reference;
    }
    /**
     * Set Job_Reference value
     * @param string $job_Reference
     * @return \WorkdayWsdl\\StructType\Job_History_Achievement_DataType
     */
    public function setJob_Reference($job_Reference = null)
    {
        // validation for constraint: string
        if (!is_null($job_Reference) && !is_string($job_Reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Reference, true), gettype($job_Reference)), __LINE__);
        }
        $this->Job_Reference = $job_Reference;
        return $this;
    }
    /**
     * Get Contact value
     * @return string|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param string $contact
     * @return \WorkdayWsdl\\StructType\Job_History_Achievement_DataType
     */
    public function setContact($contact = null)
    {
        // validation for constraint: string
        if (!is_null($contact) && !is_string($contact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contact, true), gettype($contact)), __LINE__);
        }
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_History_Achievement_DataType
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
