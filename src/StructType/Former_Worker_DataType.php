<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Former_Worker_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data for a Former Worker.
 * @subpackage Structs
 */
class Former_Worker_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier for the former worker. If not entered, one will be generated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Former_Worker_ID
     * Meta information extracted from the WSDL
     * - documentation: ID used in the former system. You can use this as the ID as well if it will be unique.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Former_Worker_ID;
    /**
     * The Worker_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Worker Type (Employee or Contingent Worker) for the former worker. Required for an add.
     * - minOccurs: 0
     * @var \StructType\Worker_TypeObjectType
     */
    public $Worker_Type_Reference;
    /**
     * The Last_Termination_Date
     * Meta information extracted from the WSDL
     * - documentation: Last Termination Date for the former worker. Required on the initial Add.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Termination_Date;
    /**
     * The Most_Recent_Hire_Date
     * Meta information extracted from the WSDL
     * - documentation: Most Recent Hire Date (prior to the termination) for the former worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Most_Recent_Hire_Date;
    /**
     * The Original_Hire_Date
     * Meta information extracted from the WSDL
     * - documentation: Original Hire Date for the former worker. This value will be brought forward on a re-hire.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Original_Hire_Date;
    /**
     * The Continuous_Service_Date
     * Meta information extracted from the WSDL
     * - documentation: Continuous Service date for the former worker. This date will be brought forward on a re-hire.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Continuous_Service_Date;
    /**
     * The Personal_Information_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Former_Worker_Personal_Information_DataType
     */
    public $Personal_Information_Data;
    /**
     * The Last_Termination_Reason
     * Meta information extracted from the WSDL
     * - documentation: Reason for the Last Termination.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Termination_Reason;
    /**
     * The Manager
     * Meta information extracted from the WSDL
     * - documentation: Last Manager of the former worker. Free-form text entry.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Manager;
    /**
     * The Cost_Center
     * Meta information extracted from the WSDL
     * - documentation: Cost Center for the former worker. Free-form text entry.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Cost_Center;
    /**
     * The Job_Title
     * Meta information extracted from the WSDL
     * - documentation: Job Title for the former worker. Free-form text entry.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Title;
    /**
     * The Job_Code
     * Meta information extracted from the WSDL
     * - documentation: Job Profile Code for the former worker. Free-form text entry.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Code;
    /**
     * The Job_Profile_Text
     * Meta information extracted from the WSDL
     * - documentation: Job Profile Name for the former worker. Free-form text entry.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Profile_Text;
    /**
     * The Job_Level
     * Meta information extracted from the WSDL
     * - documentation: Job Level for the former worker. Free-form text entry.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Level;
    /**
     * The Time_Type
     * Meta information extracted from the WSDL
     * - documentation: Time Type for the former worker. Free-form text entry. Example: Full Time or Part Time.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Time_Type;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: Location for the former worker. Free-form text entry.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The Base_Pay
     * Meta information extracted from the WSDL
     * - documentation: Last Base Pay for the former worker.
     * - base: xsd:decimal
     * - fractionDigits: 6
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 21
     * @var float
     */
    public $Base_Pay;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Currency Reference for the Base Pay.
     * - minOccurs: 0
     * @var \StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * The Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Frequency Reference for the Base Pay.
     * - minOccurs: 0
     * @var \StructType\FrequencyObjectType
     */
    public $Frequency_Reference;
    /**
     * The Scheduled_Weekly_Hours
     * Meta information extracted from the WSDL
     * - documentation: Scheduled Weekly Hours for Position. | The scheduled weekly hours from the location's time profile. | Scheduled Weekly Hours for the former worker.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 14
     * @var float
     */
    public $Scheduled_Weekly_Hours;
    /**
     * The Eligible_for_Rehire_Reference
     * Meta information extracted from the WSDL
     * - documentation: Enter Yes if the former worker is eligible for rehire. Enter No if the former worker isn’t eligible for rehire. If empty, Workday uses the existing rehire eligibility status.
     * - minOccurs: 0
     * @var \StructType\Common_Yes_NoObjectType
     */
    public $Eligible_for_Rehire_Reference;
    /**
     * The Performance_Rating
     * Meta information extracted from the WSDL
     * - documentation: Performance Rating for the former worker. Free-form text entry.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Performance_Rating;
    /**
     * The Former_Worker_Related_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Former_Worker_Related_DataType
     */
    public $Former_Worker_Related_Data;
    /**
     * Constructor method for Former_Worker_DataType
     * @uses Former_Worker_DataType::setID()
     * @uses Former_Worker_DataType::setFormer_Worker_ID()
     * @uses Former_Worker_DataType::setWorker_Type_Reference()
     * @uses Former_Worker_DataType::setLast_Termination_Date()
     * @uses Former_Worker_DataType::setMost_Recent_Hire_Date()
     * @uses Former_Worker_DataType::setOriginal_Hire_Date()
     * @uses Former_Worker_DataType::setContinuous_Service_Date()
     * @uses Former_Worker_DataType::setPersonal_Information_Data()
     * @uses Former_Worker_DataType::setLast_Termination_Reason()
     * @uses Former_Worker_DataType::setManager()
     * @uses Former_Worker_DataType::setCost_Center()
     * @uses Former_Worker_DataType::setJob_Title()
     * @uses Former_Worker_DataType::setJob_Code()
     * @uses Former_Worker_DataType::setJob_Profile_Text()
     * @uses Former_Worker_DataType::setJob_Level()
     * @uses Former_Worker_DataType::setTime_Type()
     * @uses Former_Worker_DataType::setLocation()
     * @uses Former_Worker_DataType::setBase_Pay()
     * @uses Former_Worker_DataType::setCurrency_Reference()
     * @uses Former_Worker_DataType::setFrequency_Reference()
     * @uses Former_Worker_DataType::setScheduled_Weekly_Hours()
     * @uses Former_Worker_DataType::setEligible_for_Rehire_Reference()
     * @uses Former_Worker_DataType::setPerformance_Rating()
     * @uses Former_Worker_DataType::setFormer_Worker_Related_Data()
     * @param string $iD
     * @param string $former_Worker_ID
     * @param \StructType\Worker_TypeObjectType $worker_Type_Reference
     * @param string $last_Termination_Date
     * @param string $most_Recent_Hire_Date
     * @param string $original_Hire_Date
     * @param string $continuous_Service_Date
     * @param \StructType\Former_Worker_Personal_Information_DataType $personal_Information_Data
     * @param string $last_Termination_Reason
     * @param string $manager
     * @param string $cost_Center
     * @param string $job_Title
     * @param string $job_Code
     * @param string $job_Profile_Text
     * @param string $job_Level
     * @param string $time_Type
     * @param string $location
     * @param float $base_Pay
     * @param \StructType\CurrencyObjectType $currency_Reference
     * @param \StructType\FrequencyObjectType $frequency_Reference
     * @param float $scheduled_Weekly_Hours
     * @param \StructType\Common_Yes_NoObjectType $eligible_for_Rehire_Reference
     * @param string $performance_Rating
     * @param \StructType\Former_Worker_Related_DataType $former_Worker_Related_Data
     */
    public function __construct($iD = null, $former_Worker_ID = null, \StructType\Worker_TypeObjectType $worker_Type_Reference = null, $last_Termination_Date = null, $most_Recent_Hire_Date = null, $original_Hire_Date = null, $continuous_Service_Date = null, \StructType\Former_Worker_Personal_Information_DataType $personal_Information_Data = null, $last_Termination_Reason = null, $manager = null, $cost_Center = null, $job_Title = null, $job_Code = null, $job_Profile_Text = null, $job_Level = null, $time_Type = null, $location = null, $base_Pay = null, \StructType\CurrencyObjectType $currency_Reference = null, \StructType\FrequencyObjectType $frequency_Reference = null, $scheduled_Weekly_Hours = null, \StructType\Common_Yes_NoObjectType $eligible_for_Rehire_Reference = null, $performance_Rating = null, \StructType\Former_Worker_Related_DataType $former_Worker_Related_Data = null)
    {
        $this
            ->setID($iD)
            ->setFormer_Worker_ID($former_Worker_ID)
            ->setWorker_Type_Reference($worker_Type_Reference)
            ->setLast_Termination_Date($last_Termination_Date)
            ->setMost_Recent_Hire_Date($most_Recent_Hire_Date)
            ->setOriginal_Hire_Date($original_Hire_Date)
            ->setContinuous_Service_Date($continuous_Service_Date)
            ->setPersonal_Information_Data($personal_Information_Data)
            ->setLast_Termination_Reason($last_Termination_Reason)
            ->setManager($manager)
            ->setCost_Center($cost_Center)
            ->setJob_Title($job_Title)
            ->setJob_Code($job_Code)
            ->setJob_Profile_Text($job_Profile_Text)
            ->setJob_Level($job_Level)
            ->setTime_Type($time_Type)
            ->setLocation($location)
            ->setBase_Pay($base_Pay)
            ->setCurrency_Reference($currency_Reference)
            ->setFrequency_Reference($frequency_Reference)
            ->setScheduled_Weekly_Hours($scheduled_Weekly_Hours)
            ->setEligible_for_Rehire_Reference($eligible_for_Rehire_Reference)
            ->setPerformance_Rating($performance_Rating)
            ->setFormer_Worker_Related_Data($former_Worker_Related_Data);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\Former_Worker_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Former_Worker_ID value
     * @return string|null
     */
    public function getFormer_Worker_ID()
    {
        return $this->Former_Worker_ID;
    }
    /**
     * Set Former_Worker_ID value
     * @param string $former_Worker_ID
     * @return \StructType\Former_Worker_DataType
     */
    public function setFormer_Worker_ID($former_Worker_ID = null)
    {
        // validation for constraint: string
        if (!is_null($former_Worker_ID) && !is_string($former_Worker_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($former_Worker_ID, true), gettype($former_Worker_ID)), __LINE__);
        }
        $this->Former_Worker_ID = $former_Worker_ID;
        return $this;
    }
    /**
     * Get Worker_Type_Reference value
     * @return \StructType\Worker_TypeObjectType|null
     */
    public function getWorker_Type_Reference()
    {
        return $this->Worker_Type_Reference;
    }
    /**
     * Set Worker_Type_Reference value
     * @param \StructType\Worker_TypeObjectType $worker_Type_Reference
     * @return \StructType\Former_Worker_DataType
     */
    public function setWorker_Type_Reference(\StructType\Worker_TypeObjectType $worker_Type_Reference = null)
    {
        $this->Worker_Type_Reference = $worker_Type_Reference;
        return $this;
    }
    /**
     * Get Last_Termination_Date value
     * @return string|null
     */
    public function getLast_Termination_Date()
    {
        return $this->Last_Termination_Date;
    }
    /**
     * Set Last_Termination_Date value
     * @param string $last_Termination_Date
     * @return \StructType\Former_Worker_DataType
     */
    public function setLast_Termination_Date($last_Termination_Date = null)
    {
        // validation for constraint: string
        if (!is_null($last_Termination_Date) && !is_string($last_Termination_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Termination_Date, true), gettype($last_Termination_Date)), __LINE__);
        }
        $this->Last_Termination_Date = $last_Termination_Date;
        return $this;
    }
    /**
     * Get Most_Recent_Hire_Date value
     * @return string|null
     */
    public function getMost_Recent_Hire_Date()
    {
        return $this->Most_Recent_Hire_Date;
    }
    /**
     * Set Most_Recent_Hire_Date value
     * @param string $most_Recent_Hire_Date
     * @return \StructType\Former_Worker_DataType
     */
    public function setMost_Recent_Hire_Date($most_Recent_Hire_Date = null)
    {
        // validation for constraint: string
        if (!is_null($most_Recent_Hire_Date) && !is_string($most_Recent_Hire_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($most_Recent_Hire_Date, true), gettype($most_Recent_Hire_Date)), __LINE__);
        }
        $this->Most_Recent_Hire_Date = $most_Recent_Hire_Date;
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
     * @return \StructType\Former_Worker_DataType
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
     * @return \StructType\Former_Worker_DataType
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
     * Get Personal_Information_Data value
     * @return \StructType\Former_Worker_Personal_Information_DataType|null
     */
    public function getPersonal_Information_Data()
    {
        return $this->Personal_Information_Data;
    }
    /**
     * Set Personal_Information_Data value
     * @param \StructType\Former_Worker_Personal_Information_DataType $personal_Information_Data
     * @return \StructType\Former_Worker_DataType
     */
    public function setPersonal_Information_Data(\StructType\Former_Worker_Personal_Information_DataType $personal_Information_Data = null)
    {
        $this->Personal_Information_Data = $personal_Information_Data;
        return $this;
    }
    /**
     * Get Last_Termination_Reason value
     * @return string|null
     */
    public function getLast_Termination_Reason()
    {
        return $this->Last_Termination_Reason;
    }
    /**
     * Set Last_Termination_Reason value
     * @param string $last_Termination_Reason
     * @return \StructType\Former_Worker_DataType
     */
    public function setLast_Termination_Reason($last_Termination_Reason = null)
    {
        // validation for constraint: string
        if (!is_null($last_Termination_Reason) && !is_string($last_Termination_Reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Termination_Reason, true), gettype($last_Termination_Reason)), __LINE__);
        }
        $this->Last_Termination_Reason = $last_Termination_Reason;
        return $this;
    }
    /**
     * Get Manager value
     * @return string|null
     */
    public function getManager()
    {
        return $this->Manager;
    }
    /**
     * Set Manager value
     * @param string $manager
     * @return \StructType\Former_Worker_DataType
     */
    public function setManager($manager = null)
    {
        // validation for constraint: string
        if (!is_null($manager) && !is_string($manager)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manager, true), gettype($manager)), __LINE__);
        }
        $this->Manager = $manager;
        return $this;
    }
    /**
     * Get Cost_Center value
     * @return string|null
     */
    public function getCost_Center()
    {
        return $this->Cost_Center;
    }
    /**
     * Set Cost_Center value
     * @param string $cost_Center
     * @return \StructType\Former_Worker_DataType
     */
    public function setCost_Center($cost_Center = null)
    {
        // validation for constraint: string
        if (!is_null($cost_Center) && !is_string($cost_Center)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cost_Center, true), gettype($cost_Center)), __LINE__);
        }
        $this->Cost_Center = $cost_Center;
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
     * @return \StructType\Former_Worker_DataType
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
     * Get Job_Code value
     * @return string|null
     */
    public function getJob_Code()
    {
        return $this->Job_Code;
    }
    /**
     * Set Job_Code value
     * @param string $job_Code
     * @return \StructType\Former_Worker_DataType
     */
    public function setJob_Code($job_Code = null)
    {
        // validation for constraint: string
        if (!is_null($job_Code) && !is_string($job_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Code, true), gettype($job_Code)), __LINE__);
        }
        $this->Job_Code = $job_Code;
        return $this;
    }
    /**
     * Get Job_Profile_Text value
     * @return string|null
     */
    public function getJob_Profile_Text()
    {
        return $this->Job_Profile_Text;
    }
    /**
     * Set Job_Profile_Text value
     * @param string $job_Profile_Text
     * @return \StructType\Former_Worker_DataType
     */
    public function setJob_Profile_Text($job_Profile_Text = null)
    {
        // validation for constraint: string
        if (!is_null($job_Profile_Text) && !is_string($job_Profile_Text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Profile_Text, true), gettype($job_Profile_Text)), __LINE__);
        }
        $this->Job_Profile_Text = $job_Profile_Text;
        return $this;
    }
    /**
     * Get Job_Level value
     * @return string|null
     */
    public function getJob_Level()
    {
        return $this->Job_Level;
    }
    /**
     * Set Job_Level value
     * @param string $job_Level
     * @return \StructType\Former_Worker_DataType
     */
    public function setJob_Level($job_Level = null)
    {
        // validation for constraint: string
        if (!is_null($job_Level) && !is_string($job_Level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Level, true), gettype($job_Level)), __LINE__);
        }
        $this->Job_Level = $job_Level;
        return $this;
    }
    /**
     * Get Time_Type value
     * @return string|null
     */
    public function getTime_Type()
    {
        return $this->Time_Type;
    }
    /**
     * Set Time_Type value
     * @param string $time_Type
     * @return \StructType\Former_Worker_DataType
     */
    public function setTime_Type($time_Type = null)
    {
        // validation for constraint: string
        if (!is_null($time_Type) && !is_string($time_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time_Type, true), gettype($time_Type)), __LINE__);
        }
        $this->Time_Type = $time_Type;
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
     * @return \StructType\Former_Worker_DataType
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
     * Get Base_Pay value
     * @return float|null
     */
    public function getBase_Pay()
    {
        return $this->Base_Pay;
    }
    /**
     * Set Base_Pay value
     * @param float $base_Pay
     * @return \StructType\Former_Worker_DataType
     */
    public function setBase_Pay($base_Pay = null)
    {
        // validation for constraint: float
        if (!is_null($base_Pay) && !(is_float($base_Pay) || is_numeric($base_Pay))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($base_Pay, true), gettype($base_Pay)), __LINE__);
        }
        // validation for constraint: fractionDigits(6)
        if (!is_null($base_Pay) && mb_strlen(mb_substr($base_Pay, mb_strpos($base_Pay, '.') + 1)) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 6 fraction digits, %d given', var_export($base_Pay, true), mb_strlen(mb_substr($base_Pay, mb_strpos($base_Pay, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($base_Pay) && $base_Pay < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($base_Pay, true)), __LINE__);
        }
        // validation for constraint: totalDigits(21)
        if (!is_null($base_Pay) && mb_strlen(preg_replace('/(\D)/', '', $base_Pay)) > 21) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 21 digits, "%d" given', var_export($base_Pay, true), mb_strlen(preg_replace('/(\D)/', '', $base_Pay))), __LINE__);
        }
        $this->Base_Pay = $base_Pay;
        return $this;
    }
    /**
     * Get Currency_Reference value
     * @return \StructType\CurrencyObjectType|null
     */
    public function getCurrency_Reference()
    {
        return $this->Currency_Reference;
    }
    /**
     * Set Currency_Reference value
     * @param \StructType\CurrencyObjectType $currency_Reference
     * @return \StructType\Former_Worker_DataType
     */
    public function setCurrency_Reference(\StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
        return $this;
    }
    /**
     * Get Frequency_Reference value
     * @return \StructType\FrequencyObjectType|null
     */
    public function getFrequency_Reference()
    {
        return $this->Frequency_Reference;
    }
    /**
     * Set Frequency_Reference value
     * @param \StructType\FrequencyObjectType $frequency_Reference
     * @return \StructType\Former_Worker_DataType
     */
    public function setFrequency_Reference(\StructType\FrequencyObjectType $frequency_Reference = null)
    {
        $this->Frequency_Reference = $frequency_Reference;
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
     * @return \StructType\Former_Worker_DataType
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
        // validation for constraint: totalDigits(14)
        if (!is_null($scheduled_Weekly_Hours) && mb_strlen(preg_replace('/(\D)/', '', $scheduled_Weekly_Hours)) > 14) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 14 digits, "%d" given', var_export($scheduled_Weekly_Hours, true), mb_strlen(preg_replace('/(\D)/', '', $scheduled_Weekly_Hours))), __LINE__);
        }
        $this->Scheduled_Weekly_Hours = $scheduled_Weekly_Hours;
        return $this;
    }
    /**
     * Get Eligible_for_Rehire_Reference value
     * @return \StructType\Common_Yes_NoObjectType|null
     */
    public function getEligible_for_Rehire_Reference()
    {
        return $this->Eligible_for_Rehire_Reference;
    }
    /**
     * Set Eligible_for_Rehire_Reference value
     * @param \StructType\Common_Yes_NoObjectType $eligible_for_Rehire_Reference
     * @return \StructType\Former_Worker_DataType
     */
    public function setEligible_for_Rehire_Reference(\StructType\Common_Yes_NoObjectType $eligible_for_Rehire_Reference = null)
    {
        $this->Eligible_for_Rehire_Reference = $eligible_for_Rehire_Reference;
        return $this;
    }
    /**
     * Get Performance_Rating value
     * @return string|null
     */
    public function getPerformance_Rating()
    {
        return $this->Performance_Rating;
    }
    /**
     * Set Performance_Rating value
     * @param string $performance_Rating
     * @return \StructType\Former_Worker_DataType
     */
    public function setPerformance_Rating($performance_Rating = null)
    {
        // validation for constraint: string
        if (!is_null($performance_Rating) && !is_string($performance_Rating)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($performance_Rating, true), gettype($performance_Rating)), __LINE__);
        }
        $this->Performance_Rating = $performance_Rating;
        return $this;
    }
    /**
     * Get Former_Worker_Related_Data value
     * @return \StructType\Former_Worker_Related_DataType|null
     */
    public function getFormer_Worker_Related_Data()
    {
        return $this->Former_Worker_Related_Data;
    }
    /**
     * Set Former_Worker_Related_Data value
     * @param \StructType\Former_Worker_Related_DataType $former_Worker_Related_Data
     * @return \StructType\Former_Worker_DataType
     */
    public function setFormer_Worker_Related_Data(\StructType\Former_Worker_Related_DataType $former_Worker_Related_Data = null)
    {
        $this->Former_Worker_Related_Data = $former_Worker_Related_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Former_Worker_DataType
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
