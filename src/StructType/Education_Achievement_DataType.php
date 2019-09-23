<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Education_Achievement_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Only one change can be in progress (the event in progress and not complete or canceled) for an education for a particular worker. | Wrapper element for Education information.
 * @subpackage Structs
 */
class Education_Achievement_DataType extends AbstractStructBase
{
    /**
     * The Education_ID
     * Meta information extracted from the WSDL
     * - documentation: Education ID. If no value is provided, a new education will be created. If a value is passed in and a corresponding education is not found a new education will be created with the provided id.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Education_ID;
    /**
     * The Remove_Education
     * Meta information extracted from the WSDL
     * - documentation: Used for inbound operations to indicate that the education should be removed for the person. Will always return false for outbound operations.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Remove_Education;
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Reference of the Country in which the school is located. If the Country Reference and School Name matches an entry from the Schools report, this reference will not be set; a School Reference will be used instead.
     * @var \StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * The School_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Reference of the School where the education was received. The Schools report returns all of the schools that can be referenced.
     * - minOccurs: 0
     * @var \StructType\SchoolObjectType
     */
    public $School_Reference;
    /**
     * The School_Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the education institution.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $School_Name;
    /**
     * The School_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: A Reference of the of School Type. If a School Reference is submitted, or found by a matching Country Reference and School Name, this value will not be saved because the School Reference is linked to a School Type.
     * - minOccurs: 0
     * @var \StructType\School_TypeObjectType
     */
    public $School_Type_Reference;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: The text location of the education institution. If a School Reference is submitted, or found by a matching Country Reference and School Name, this value will not be saved.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The Degree_Reference
     * Meta information extracted from the WSDL
     * - documentation: The degree earned.
     * - minOccurs: 0
     * @var \StructType\DegreeObjectType
     */
    public $Degree_Reference;
    /**
     * The Degree_Completed_Reference
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the degree was received.
     * - minOccurs: 0
     * @var \StructType\Degree_CompletedObjectType
     */
    public $Degree_Completed_Reference;
    /**
     * The Date_Degree_Received
     * Meta information extracted from the WSDL
     * - documentation: The date on which the degree was awarded.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_Degree_Received;
    /**
     * The Field_Of_Study_Reference
     * Meta information extracted from the WSDL
     * - documentation: The field of study.
     * - minOccurs: 0
     * @var \StructType\Field_of_StudyObjectType
     */
    public $Field_Of_Study_Reference;
    /**
     * The Grade_Average
     * Meta information extracted from the WSDL
     * - documentation: The grade point average.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Grade_Average;
    /**
     * The First_Year_Attended
     * Meta information extracted from the WSDL
     * - documentation: The first year of attendance. This field should be in YYYY-MM-DD format, however the month and day will be ignored.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $First_Year_Attended;
    /**
     * The Last_Year_Attended
     * Meta information extracted from the WSDL
     * - documentation: The last year of attendance. Should be displayed in YYYY-MM-DD format, but the month and day will be ignored.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Year_Attended;
    /**
     * The Is_Highest_Level_of_Education
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether this is the worker's highest level of education. Degrees are ranked using Qualification Rating Value. If a worker has two or more equivalent degrees, the most recent one is considered highest.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Is_Highest_Level_of_Education;
    /**
     * The First_Day_Attended
     * Meta information extracted from the WSDL
     * - documentation: The first date of attendance using day month year precision. Note this can only be populated when the Education is for a Worker in a Country that has been configured to 'Use Date with Day Precision for Education' on Tenant Setup -
     * Global.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $First_Day_Attended;
    /**
     * The Last_Day_Attended
     * Meta information extracted from the WSDL
     * - documentation: The last date of attendance using day month year precision. Note this can only be populated when the Education is for a Worker in a Country that has been configured to 'Use Date with Day Precision for Education' on Tenant Setup -
     * Global.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Day_Attended;
    /**
     * Constructor method for Education_Achievement_DataType
     * @uses Education_Achievement_DataType::setEducation_ID()
     * @uses Education_Achievement_DataType::setRemove_Education()
     * @uses Education_Achievement_DataType::setCountry_Reference()
     * @uses Education_Achievement_DataType::setSchool_Reference()
     * @uses Education_Achievement_DataType::setSchool_Name()
     * @uses Education_Achievement_DataType::setSchool_Type_Reference()
     * @uses Education_Achievement_DataType::setLocation()
     * @uses Education_Achievement_DataType::setDegree_Reference()
     * @uses Education_Achievement_DataType::setDegree_Completed_Reference()
     * @uses Education_Achievement_DataType::setDate_Degree_Received()
     * @uses Education_Achievement_DataType::setField_Of_Study_Reference()
     * @uses Education_Achievement_DataType::setGrade_Average()
     * @uses Education_Achievement_DataType::setFirst_Year_Attended()
     * @uses Education_Achievement_DataType::setLast_Year_Attended()
     * @uses Education_Achievement_DataType::setIs_Highest_Level_of_Education()
     * @uses Education_Achievement_DataType::setFirst_Day_Attended()
     * @uses Education_Achievement_DataType::setLast_Day_Attended()
     * @param string $education_ID
     * @param bool $remove_Education
     * @param \StructType\CountryObjectType $country_Reference
     * @param \StructType\SchoolObjectType $school_Reference
     * @param string $school_Name
     * @param \StructType\School_TypeObjectType $school_Type_Reference
     * @param string $location
     * @param \StructType\DegreeObjectType $degree_Reference
     * @param \StructType\Degree_CompletedObjectType $degree_Completed_Reference
     * @param string $date_Degree_Received
     * @param \StructType\Field_of_StudyObjectType $field_Of_Study_Reference
     * @param string $grade_Average
     * @param string $first_Year_Attended
     * @param string $last_Year_Attended
     * @param bool $is_Highest_Level_of_Education
     * @param string $first_Day_Attended
     * @param string $last_Day_Attended
     */
    public function __construct($education_ID = null, $remove_Education = null, \StructType\CountryObjectType $country_Reference = null, \StructType\SchoolObjectType $school_Reference = null, $school_Name = null, \StructType\School_TypeObjectType $school_Type_Reference = null, $location = null, \StructType\DegreeObjectType $degree_Reference = null, \StructType\Degree_CompletedObjectType $degree_Completed_Reference = null, $date_Degree_Received = null, \StructType\Field_of_StudyObjectType $field_Of_Study_Reference = null, $grade_Average = null, $first_Year_Attended = null, $last_Year_Attended = null, $is_Highest_Level_of_Education = null, $first_Day_Attended = null, $last_Day_Attended = null)
    {
        $this
            ->setEducation_ID($education_ID)
            ->setRemove_Education($remove_Education)
            ->setCountry_Reference($country_Reference)
            ->setSchool_Reference($school_Reference)
            ->setSchool_Name($school_Name)
            ->setSchool_Type_Reference($school_Type_Reference)
            ->setLocation($location)
            ->setDegree_Reference($degree_Reference)
            ->setDegree_Completed_Reference($degree_Completed_Reference)
            ->setDate_Degree_Received($date_Degree_Received)
            ->setField_Of_Study_Reference($field_Of_Study_Reference)
            ->setGrade_Average($grade_Average)
            ->setFirst_Year_Attended($first_Year_Attended)
            ->setLast_Year_Attended($last_Year_Attended)
            ->setIs_Highest_Level_of_Education($is_Highest_Level_of_Education)
            ->setFirst_Day_Attended($first_Day_Attended)
            ->setLast_Day_Attended($last_Day_Attended);
    }
    /**
     * Get Education_ID value
     * @return string|null
     */
    public function getEducation_ID()
    {
        return $this->Education_ID;
    }
    /**
     * Set Education_ID value
     * @param string $education_ID
     * @return \StructType\Education_Achievement_DataType
     */
    public function setEducation_ID($education_ID = null)
    {
        // validation for constraint: string
        if (!is_null($education_ID) && !is_string($education_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($education_ID, true), gettype($education_ID)), __LINE__);
        }
        $this->Education_ID = $education_ID;
        return $this;
    }
    /**
     * Get Remove_Education value
     * @return bool|null
     */
    public function getRemove_Education()
    {
        return $this->Remove_Education;
    }
    /**
     * Set Remove_Education value
     * @param bool $remove_Education
     * @return \StructType\Education_Achievement_DataType
     */
    public function setRemove_Education($remove_Education = null)
    {
        // validation for constraint: boolean
        if (!is_null($remove_Education) && !is_bool($remove_Education)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($remove_Education, true), gettype($remove_Education)), __LINE__);
        }
        $this->Remove_Education = $remove_Education;
        return $this;
    }
    /**
     * Get Country_Reference value
     * @return \StructType\CountryObjectType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \StructType\CountryObjectType $country_Reference
     * @return \StructType\Education_Achievement_DataType
     */
    public function setCountry_Reference(\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get School_Reference value
     * @return \StructType\SchoolObjectType|null
     */
    public function getSchool_Reference()
    {
        return $this->School_Reference;
    }
    /**
     * Set School_Reference value
     * @param \StructType\SchoolObjectType $school_Reference
     * @return \StructType\Education_Achievement_DataType
     */
    public function setSchool_Reference(\StructType\SchoolObjectType $school_Reference = null)
    {
        $this->School_Reference = $school_Reference;
        return $this;
    }
    /**
     * Get School_Name value
     * @return string|null
     */
    public function getSchool_Name()
    {
        return $this->School_Name;
    }
    /**
     * Set School_Name value
     * @param string $school_Name
     * @return \StructType\Education_Achievement_DataType
     */
    public function setSchool_Name($school_Name = null)
    {
        // validation for constraint: string
        if (!is_null($school_Name) && !is_string($school_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($school_Name, true), gettype($school_Name)), __LINE__);
        }
        $this->School_Name = $school_Name;
        return $this;
    }
    /**
     * Get School_Type_Reference value
     * @return \StructType\School_TypeObjectType|null
     */
    public function getSchool_Type_Reference()
    {
        return $this->School_Type_Reference;
    }
    /**
     * Set School_Type_Reference value
     * @param \StructType\School_TypeObjectType $school_Type_Reference
     * @return \StructType\Education_Achievement_DataType
     */
    public function setSchool_Type_Reference(\StructType\School_TypeObjectType $school_Type_Reference = null)
    {
        $this->School_Type_Reference = $school_Type_Reference;
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
     * @return \StructType\Education_Achievement_DataType
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
     * Get Degree_Reference value
     * @return \StructType\DegreeObjectType|null
     */
    public function getDegree_Reference()
    {
        return $this->Degree_Reference;
    }
    /**
     * Set Degree_Reference value
     * @param \StructType\DegreeObjectType $degree_Reference
     * @return \StructType\Education_Achievement_DataType
     */
    public function setDegree_Reference(\StructType\DegreeObjectType $degree_Reference = null)
    {
        $this->Degree_Reference = $degree_Reference;
        return $this;
    }
    /**
     * Get Degree_Completed_Reference value
     * @return \StructType\Degree_CompletedObjectType|null
     */
    public function getDegree_Completed_Reference()
    {
        return $this->Degree_Completed_Reference;
    }
    /**
     * Set Degree_Completed_Reference value
     * @param \StructType\Degree_CompletedObjectType $degree_Completed_Reference
     * @return \StructType\Education_Achievement_DataType
     */
    public function setDegree_Completed_Reference(\StructType\Degree_CompletedObjectType $degree_Completed_Reference = null)
    {
        $this->Degree_Completed_Reference = $degree_Completed_Reference;
        return $this;
    }
    /**
     * Get Date_Degree_Received value
     * @return string|null
     */
    public function getDate_Degree_Received()
    {
        return $this->Date_Degree_Received;
    }
    /**
     * Set Date_Degree_Received value
     * @param string $date_Degree_Received
     * @return \StructType\Education_Achievement_DataType
     */
    public function setDate_Degree_Received($date_Degree_Received = null)
    {
        // validation for constraint: string
        if (!is_null($date_Degree_Received) && !is_string($date_Degree_Received)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_Degree_Received, true), gettype($date_Degree_Received)), __LINE__);
        }
        $this->Date_Degree_Received = $date_Degree_Received;
        return $this;
    }
    /**
     * Get Field_Of_Study_Reference value
     * @return \StructType\Field_of_StudyObjectType|null
     */
    public function getField_Of_Study_Reference()
    {
        return $this->Field_Of_Study_Reference;
    }
    /**
     * Set Field_Of_Study_Reference value
     * @param \StructType\Field_of_StudyObjectType $field_Of_Study_Reference
     * @return \StructType\Education_Achievement_DataType
     */
    public function setField_Of_Study_Reference(\StructType\Field_of_StudyObjectType $field_Of_Study_Reference = null)
    {
        $this->Field_Of_Study_Reference = $field_Of_Study_Reference;
        return $this;
    }
    /**
     * Get Grade_Average value
     * @return string|null
     */
    public function getGrade_Average()
    {
        return $this->Grade_Average;
    }
    /**
     * Set Grade_Average value
     * @param string $grade_Average
     * @return \StructType\Education_Achievement_DataType
     */
    public function setGrade_Average($grade_Average = null)
    {
        // validation for constraint: string
        if (!is_null($grade_Average) && !is_string($grade_Average)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($grade_Average, true), gettype($grade_Average)), __LINE__);
        }
        $this->Grade_Average = $grade_Average;
        return $this;
    }
    /**
     * Get First_Year_Attended value
     * @return string|null
     */
    public function getFirst_Year_Attended()
    {
        return $this->First_Year_Attended;
    }
    /**
     * Set First_Year_Attended value
     * @param string $first_Year_Attended
     * @return \StructType\Education_Achievement_DataType
     */
    public function setFirst_Year_Attended($first_Year_Attended = null)
    {
        // validation for constraint: string
        if (!is_null($first_Year_Attended) && !is_string($first_Year_Attended)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first_Year_Attended, true), gettype($first_Year_Attended)), __LINE__);
        }
        $this->First_Year_Attended = $first_Year_Attended;
        return $this;
    }
    /**
     * Get Last_Year_Attended value
     * @return string|null
     */
    public function getLast_Year_Attended()
    {
        return $this->Last_Year_Attended;
    }
    /**
     * Set Last_Year_Attended value
     * @param string $last_Year_Attended
     * @return \StructType\Education_Achievement_DataType
     */
    public function setLast_Year_Attended($last_Year_Attended = null)
    {
        // validation for constraint: string
        if (!is_null($last_Year_Attended) && !is_string($last_Year_Attended)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Year_Attended, true), gettype($last_Year_Attended)), __LINE__);
        }
        $this->Last_Year_Attended = $last_Year_Attended;
        return $this;
    }
    /**
     * Get Is_Highest_Level_of_Education value
     * @return bool|null
     */
    public function getIs_Highest_Level_of_Education()
    {
        return $this->Is_Highest_Level_of_Education;
    }
    /**
     * Set Is_Highest_Level_of_Education value
     * @param bool $is_Highest_Level_of_Education
     * @return \StructType\Education_Achievement_DataType
     */
    public function setIs_Highest_Level_of_Education($is_Highest_Level_of_Education = null)
    {
        // validation for constraint: boolean
        if (!is_null($is_Highest_Level_of_Education) && !is_bool($is_Highest_Level_of_Education)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_Highest_Level_of_Education, true), gettype($is_Highest_Level_of_Education)), __LINE__);
        }
        $this->Is_Highest_Level_of_Education = $is_Highest_Level_of_Education;
        return $this;
    }
    /**
     * Get First_Day_Attended value
     * @return string|null
     */
    public function getFirst_Day_Attended()
    {
        return $this->First_Day_Attended;
    }
    /**
     * Set First_Day_Attended value
     * @param string $first_Day_Attended
     * @return \StructType\Education_Achievement_DataType
     */
    public function setFirst_Day_Attended($first_Day_Attended = null)
    {
        // validation for constraint: string
        if (!is_null($first_Day_Attended) && !is_string($first_Day_Attended)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first_Day_Attended, true), gettype($first_Day_Attended)), __LINE__);
        }
        $this->First_Day_Attended = $first_Day_Attended;
        return $this;
    }
    /**
     * Get Last_Day_Attended value
     * @return string|null
     */
    public function getLast_Day_Attended()
    {
        return $this->Last_Day_Attended;
    }
    /**
     * Set Last_Day_Attended value
     * @param string $last_Day_Attended
     * @return \StructType\Education_Achievement_DataType
     */
    public function setLast_Day_Attended($last_Day_Attended = null)
    {
        // validation for constraint: string
        if (!is_null($last_Day_Attended) && !is_string($last_Day_Attended)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Day_Attended, true), gettype($last_Day_Attended)), __LINE__);
        }
        $this->Last_Day_Attended = $last_Day_Attended;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Education_Achievement_DataType
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
