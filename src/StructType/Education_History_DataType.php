<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Education_History_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Education data.
 * @subpackage Structs
 */
class Education_History_DataType extends AbstractStructBase
{
    /**
     * The Country_Reference
     * Meta information extracted from the WSDL
     * - documentation: The country in which the school is located or in which studies took place.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CountryObjectType
     */
    public $Country_Reference;
    /**
     * The School_Reference
     * Meta information extracted from the WSDL
     * - documentation: The School in which studies took place.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\SchoolObjectType
     */
    public $School_Reference;
    /**
     * The Education_Institution
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying name of Education Institution.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Education_Institution;
    /**
     * The Educational_Institution_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The type of school.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\School_Type_ReferenceType
     */
    public $Educational_Institution_Type_Reference;
    /**
     * The Degree_Reference
     * Meta information extracted from the WSDL
     * - documentation: The degree program in which studies took place.
     * @var \WorkdayWsdl\\StructType\Degree_ReferenceType
     */
    public $Degree_Reference;
    /**
     * The Degree_Completed_Reference
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the degree was received. Possible values are 'Yes', 'No', and blank.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Degree_CompletedObjectType
     */
    public $Degree_Completed_Reference;
    /**
     * The Field_Of_Study_Reference
     * Meta information extracted from the WSDL
     * - documentation: Lookup representing a Field of Study.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Field_Of_Study_ReferenceType
     */
    public $Field_Of_Study_Reference;
    /**
     * The Education_Institution_Location
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Education Institution Location.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Education_Institution_Location;
    /**
     * The Education_Grade_Average
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Grade Average.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Education_Grade_Average;
    /**
     * The First_Year_Attended
     * Meta information extracted from the WSDL
     * - documentation: The first year in which studies took place at the school.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $First_Year_Attended;
    /**
     * The Last_Year_Attended
     * Meta information extracted from the WSDL
     * - documentation: The last year in which studies took place at the school.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Year_Attended;
    /**
     * Constructor method for Education_History_DataType
     * @uses Education_History_DataType::setCountry_Reference()
     * @uses Education_History_DataType::setSchool_Reference()
     * @uses Education_History_DataType::setEducation_Institution()
     * @uses Education_History_DataType::setEducational_Institution_Type_Reference()
     * @uses Education_History_DataType::setDegree_Reference()
     * @uses Education_History_DataType::setDegree_Completed_Reference()
     * @uses Education_History_DataType::setField_Of_Study_Reference()
     * @uses Education_History_DataType::setEducation_Institution_Location()
     * @uses Education_History_DataType::setEducation_Grade_Average()
     * @uses Education_History_DataType::setFirst_Year_Attended()
     * @uses Education_History_DataType::setLast_Year_Attended()
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     * @param \WorkdayWsdl\\StructType\SchoolObjectType $school_Reference
     * @param string $education_Institution
     * @param \WorkdayWsdl\\StructType\School_Type_ReferenceType $educational_Institution_Type_Reference
     * @param \WorkdayWsdl\\StructType\Degree_ReferenceType $degree_Reference
     * @param \WorkdayWsdl\\StructType\Degree_CompletedObjectType $degree_Completed_Reference
     * @param \WorkdayWsdl\\StructType\Field_Of_Study_ReferenceType $field_Of_Study_Reference
     * @param string $education_Institution_Location
     * @param string $education_Grade_Average
     * @param string $first_Year_Attended
     * @param string $last_Year_Attended
     */
    public function __construct(\WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null, \WorkdayWsdl\\StructType\SchoolObjectType $school_Reference = null, $education_Institution = null, \WorkdayWsdl\\StructType\School_Type_ReferenceType $educational_Institution_Type_Reference = null, \WorkdayWsdl\\StructType\Degree_ReferenceType $degree_Reference = null, \WorkdayWsdl\\StructType\Degree_CompletedObjectType $degree_Completed_Reference = null, \WorkdayWsdl\\StructType\Field_Of_Study_ReferenceType $field_Of_Study_Reference = null, $education_Institution_Location = null, $education_Grade_Average = null, $first_Year_Attended = null, $last_Year_Attended = null)
    {
        $this
            ->setCountry_Reference($country_Reference)
            ->setSchool_Reference($school_Reference)
            ->setEducation_Institution($education_Institution)
            ->setEducational_Institution_Type_Reference($educational_Institution_Type_Reference)
            ->setDegree_Reference($degree_Reference)
            ->setDegree_Completed_Reference($degree_Completed_Reference)
            ->setField_Of_Study_Reference($field_Of_Study_Reference)
            ->setEducation_Institution_Location($education_Institution_Location)
            ->setEducation_Grade_Average($education_Grade_Average)
            ->setFirst_Year_Attended($first_Year_Attended)
            ->setLast_Year_Attended($last_Year_Attended);
    }
    /**
     * Get Country_Reference value
     * @return \WorkdayWsdl\\StructType\CountryObjectType|null
     */
    public function getCountry_Reference()
    {
        return $this->Country_Reference;
    }
    /**
     * Set Country_Reference value
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_Reference
     * @return \WorkdayWsdl\\StructType\Education_History_DataType
     */
    public function setCountry_Reference(\WorkdayWsdl\\StructType\CountryObjectType $country_Reference = null)
    {
        $this->Country_Reference = $country_Reference;
        return $this;
    }
    /**
     * Get School_Reference value
     * @return \WorkdayWsdl\\StructType\SchoolObjectType|null
     */
    public function getSchool_Reference()
    {
        return $this->School_Reference;
    }
    /**
     * Set School_Reference value
     * @param \WorkdayWsdl\\StructType\SchoolObjectType $school_Reference
     * @return \WorkdayWsdl\\StructType\Education_History_DataType
     */
    public function setSchool_Reference(\WorkdayWsdl\\StructType\SchoolObjectType $school_Reference = null)
    {
        $this->School_Reference = $school_Reference;
        return $this;
    }
    /**
     * Get Education_Institution value
     * @return string|null
     */
    public function getEducation_Institution()
    {
        return $this->Education_Institution;
    }
    /**
     * Set Education_Institution value
     * @param string $education_Institution
     * @return \WorkdayWsdl\\StructType\Education_History_DataType
     */
    public function setEducation_Institution($education_Institution = null)
    {
        // validation for constraint: string
        if (!is_null($education_Institution) && !is_string($education_Institution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($education_Institution, true), gettype($education_Institution)), __LINE__);
        }
        $this->Education_Institution = $education_Institution;
        return $this;
    }
    /**
     * Get Educational_Institution_Type_Reference value
     * @return \WorkdayWsdl\\StructType\School_Type_ReferenceType|null
     */
    public function getEducational_Institution_Type_Reference()
    {
        return $this->Educational_Institution_Type_Reference;
    }
    /**
     * Set Educational_Institution_Type_Reference value
     * @param \WorkdayWsdl\\StructType\School_Type_ReferenceType $educational_Institution_Type_Reference
     * @return \WorkdayWsdl\\StructType\Education_History_DataType
     */
    public function setEducational_Institution_Type_Reference(\WorkdayWsdl\\StructType\School_Type_ReferenceType $educational_Institution_Type_Reference = null)
    {
        $this->Educational_Institution_Type_Reference = $educational_Institution_Type_Reference;
        return $this;
    }
    /**
     * Get Degree_Reference value
     * @return \WorkdayWsdl\\StructType\Degree_ReferenceType|null
     */
    public function getDegree_Reference()
    {
        return $this->Degree_Reference;
    }
    /**
     * Set Degree_Reference value
     * @param \WorkdayWsdl\\StructType\Degree_ReferenceType $degree_Reference
     * @return \WorkdayWsdl\\StructType\Education_History_DataType
     */
    public function setDegree_Reference(\WorkdayWsdl\\StructType\Degree_ReferenceType $degree_Reference = null)
    {
        $this->Degree_Reference = $degree_Reference;
        return $this;
    }
    /**
     * Get Degree_Completed_Reference value
     * @return \WorkdayWsdl\\StructType\Degree_CompletedObjectType|null
     */
    public function getDegree_Completed_Reference()
    {
        return $this->Degree_Completed_Reference;
    }
    /**
     * Set Degree_Completed_Reference value
     * @param \WorkdayWsdl\\StructType\Degree_CompletedObjectType $degree_Completed_Reference
     * @return \WorkdayWsdl\\StructType\Education_History_DataType
     */
    public function setDegree_Completed_Reference(\WorkdayWsdl\\StructType\Degree_CompletedObjectType $degree_Completed_Reference = null)
    {
        $this->Degree_Completed_Reference = $degree_Completed_Reference;
        return $this;
    }
    /**
     * Get Field_Of_Study_Reference value
     * @return \WorkdayWsdl\\StructType\Field_Of_Study_ReferenceType|null
     */
    public function getField_Of_Study_Reference()
    {
        return $this->Field_Of_Study_Reference;
    }
    /**
     * Set Field_Of_Study_Reference value
     * @param \WorkdayWsdl\\StructType\Field_Of_Study_ReferenceType $field_Of_Study_Reference
     * @return \WorkdayWsdl\\StructType\Education_History_DataType
     */
    public function setField_Of_Study_Reference(\WorkdayWsdl\\StructType\Field_Of_Study_ReferenceType $field_Of_Study_Reference = null)
    {
        $this->Field_Of_Study_Reference = $field_Of_Study_Reference;
        return $this;
    }
    /**
     * Get Education_Institution_Location value
     * @return string|null
     */
    public function getEducation_Institution_Location()
    {
        return $this->Education_Institution_Location;
    }
    /**
     * Set Education_Institution_Location value
     * @param string $education_Institution_Location
     * @return \WorkdayWsdl\\StructType\Education_History_DataType
     */
    public function setEducation_Institution_Location($education_Institution_Location = null)
    {
        // validation for constraint: string
        if (!is_null($education_Institution_Location) && !is_string($education_Institution_Location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($education_Institution_Location, true), gettype($education_Institution_Location)), __LINE__);
        }
        $this->Education_Institution_Location = $education_Institution_Location;
        return $this;
    }
    /**
     * Get Education_Grade_Average value
     * @return string|null
     */
    public function getEducation_Grade_Average()
    {
        return $this->Education_Grade_Average;
    }
    /**
     * Set Education_Grade_Average value
     * @param string $education_Grade_Average
     * @return \WorkdayWsdl\\StructType\Education_History_DataType
     */
    public function setEducation_Grade_Average($education_Grade_Average = null)
    {
        // validation for constraint: string
        if (!is_null($education_Grade_Average) && !is_string($education_Grade_Average)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($education_Grade_Average, true), gettype($education_Grade_Average)), __LINE__);
        }
        $this->Education_Grade_Average = $education_Grade_Average;
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
     * @return \WorkdayWsdl\\StructType\Education_History_DataType
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
     * @return \WorkdayWsdl\\StructType\Education_History_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Education_History_DataType
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
