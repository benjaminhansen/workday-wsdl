<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Career_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the current career information for an employee. This includes the travel and relocation preferences, job profiles the employee is interested in, and their career interests
 * @subpackage Structs
 */
class Worker_Career_DataType extends AbstractStructBase
{
    /**
     * The Relocation_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Relocation_Preference_DataType
     */
    public $Relocation_Data;
    /**
     * The Travel_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Travel_Preference_DataType
     */
    public $Travel_Data;
    /**
     * The Job_Interests_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Interests_DataType
     */
    public $Job_Interests_Data;
    /**
     * The Career_Interests_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Career_Preferences_DataType
     */
    public $Career_Interests_Data;
    /**
     * Constructor method for Worker_Career_DataType
     * @uses Worker_Career_DataType::setRelocation_Data()
     * @uses Worker_Career_DataType::setTravel_Data()
     * @uses Worker_Career_DataType::setJob_Interests_Data()
     * @uses Worker_Career_DataType::setCareer_Interests_Data()
     * @param \WorkdayWsdl\\StructType\Relocation_Preference_DataType $relocation_Data
     * @param \WorkdayWsdl\\StructType\Travel_Preference_DataType $travel_Data
     * @param \WorkdayWsdl\\StructType\Job_Interests_DataType $job_Interests_Data
     * @param \WorkdayWsdl\\StructType\Career_Preferences_DataType $career_Interests_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Relocation_Preference_DataType $relocation_Data = null, \WorkdayWsdl\\StructType\Travel_Preference_DataType $travel_Data = null, \WorkdayWsdl\\StructType\Job_Interests_DataType $job_Interests_Data = null, \WorkdayWsdl\\StructType\Career_Preferences_DataType $career_Interests_Data = null)
    {
        $this
            ->setRelocation_Data($relocation_Data)
            ->setTravel_Data($travel_Data)
            ->setJob_Interests_Data($job_Interests_Data)
            ->setCareer_Interests_Data($career_Interests_Data);
    }
    /**
     * Get Relocation_Data value
     * @return \WorkdayWsdl\\StructType\Relocation_Preference_DataType|null
     */
    public function getRelocation_Data()
    {
        return $this->Relocation_Data;
    }
    /**
     * Set Relocation_Data value
     * @param \WorkdayWsdl\\StructType\Relocation_Preference_DataType $relocation_Data
     * @return \WorkdayWsdl\\StructType\Worker_Career_DataType
     */
    public function setRelocation_Data(\WorkdayWsdl\\StructType\Relocation_Preference_DataType $relocation_Data = null)
    {
        $this->Relocation_Data = $relocation_Data;
        return $this;
    }
    /**
     * Get Travel_Data value
     * @return \WorkdayWsdl\\StructType\Travel_Preference_DataType|null
     */
    public function getTravel_Data()
    {
        return $this->Travel_Data;
    }
    /**
     * Set Travel_Data value
     * @param \WorkdayWsdl\\StructType\Travel_Preference_DataType $travel_Data
     * @return \WorkdayWsdl\\StructType\Worker_Career_DataType
     */
    public function setTravel_Data(\WorkdayWsdl\\StructType\Travel_Preference_DataType $travel_Data = null)
    {
        $this->Travel_Data = $travel_Data;
        return $this;
    }
    /**
     * Get Job_Interests_Data value
     * @return \WorkdayWsdl\\StructType\Job_Interests_DataType|null
     */
    public function getJob_Interests_Data()
    {
        return $this->Job_Interests_Data;
    }
    /**
     * Set Job_Interests_Data value
     * @param \WorkdayWsdl\\StructType\Job_Interests_DataType $job_Interests_Data
     * @return \WorkdayWsdl\\StructType\Worker_Career_DataType
     */
    public function setJob_Interests_Data(\WorkdayWsdl\\StructType\Job_Interests_DataType $job_Interests_Data = null)
    {
        $this->Job_Interests_Data = $job_Interests_Data;
        return $this;
    }
    /**
     * Get Career_Interests_Data value
     * @return \WorkdayWsdl\\StructType\Career_Preferences_DataType|null
     */
    public function getCareer_Interests_Data()
    {
        return $this->Career_Interests_Data;
    }
    /**
     * Set Career_Interests_Data value
     * @param \WorkdayWsdl\\StructType\Career_Preferences_DataType $career_Interests_Data
     * @return \WorkdayWsdl\\StructType\Worker_Career_DataType
     */
    public function setCareer_Interests_Data(\WorkdayWsdl\\StructType\Career_Preferences_DataType $career_Interests_Data = null)
    {
        $this->Career_Interests_Data = $career_Interests_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Career_DataType
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
