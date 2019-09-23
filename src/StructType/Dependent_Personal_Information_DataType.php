<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dependent_Personal_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for this dependent's personal information.
 * @subpackage Structs
 */
class Dependent_Personal_Information_DataType extends AbstractStructBase
{
    /**
     * The Person_Name_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for this dependent's name data.
     * - minOccurs: 0
     * @var \StructType\Person_Name_DataType
     */
    public $Person_Name_Data;
    /**
     * The Contact_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for this dependent's contact information.
     * - minOccurs: 0
     * @var \StructType\Contact_Information_DataType
     */
    public $Contact_Information_Data;
    /**
     * The Person_Identification_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for this dependent's ID data.
     * - minOccurs: 0
     * @var \StructType\Person_Identification_DataType
     */
    public $Person_Identification_Data;
    /**
     * The Date_of_Birth
     * Meta information extracted from the WSDL
     * - documentation: The date of birth of the dependent.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_of_Birth;
    /**
     * The Date_of_Death
     * Meta information extracted from the WSDL
     * - documentation: The date of death of the dependent.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_of_Death;
    /**
     * The Gender_Reference
     * Meta information extracted from the WSDL
     * - documentation: The gender of the dependent.
     * - minOccurs: 0
     * @var \StructType\GenderObjectType
     */
    public $Gender_Reference;
    /**
     * The Uses_Tobacco
     * Meta information extracted from the WSDL
     * - documentation: Boolean representing whether or not this dependent uses tobacco.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Uses_Tobacco;
    /**
     * The Full_Time_Student
     * Meta information extracted from the WSDL
     * - documentation: Boolean representing whether or not this dependent is a full-time student.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Full_Time_Student;
    /**
     * The Student_Status_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: The date the dependent became a full-time student.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Student_Status_Start_Date;
    /**
     * The Student_Status_End_Date
     * Meta information extracted from the WSDL
     * - documentation: The date the dependent's student status ended (no longer a full-time student)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Student_Status_End_Date;
    /**
     * The Disabled
     * Meta information extracted from the WSDL
     * - documentation: Boolean representing whether or not this dependent is disabled.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Disabled;
    /**
     * The Inactive_Date
     * Meta information extracted from the WSDL
     * - documentation: If inactive, the date from which dependent is inactive.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Inactive_Date;
    /**
     * Constructor method for Dependent_Personal_Information_DataType
     * @uses Dependent_Personal_Information_DataType::setPerson_Name_Data()
     * @uses Dependent_Personal_Information_DataType::setContact_Information_Data()
     * @uses Dependent_Personal_Information_DataType::setPerson_Identification_Data()
     * @uses Dependent_Personal_Information_DataType::setDate_of_Birth()
     * @uses Dependent_Personal_Information_DataType::setDate_of_Death()
     * @uses Dependent_Personal_Information_DataType::setGender_Reference()
     * @uses Dependent_Personal_Information_DataType::setUses_Tobacco()
     * @uses Dependent_Personal_Information_DataType::setFull_Time_Student()
     * @uses Dependent_Personal_Information_DataType::setStudent_Status_Start_Date()
     * @uses Dependent_Personal_Information_DataType::setStudent_Status_End_Date()
     * @uses Dependent_Personal_Information_DataType::setDisabled()
     * @uses Dependent_Personal_Information_DataType::setInactive_Date()
     * @param \StructType\Person_Name_DataType $person_Name_Data
     * @param \StructType\Contact_Information_DataType $contact_Information_Data
     * @param \StructType\Person_Identification_DataType $person_Identification_Data
     * @param string $date_of_Birth
     * @param string $date_of_Death
     * @param \StructType\GenderObjectType $gender_Reference
     * @param bool $uses_Tobacco
     * @param bool $full_Time_Student
     * @param string $student_Status_Start_Date
     * @param string $student_Status_End_Date
     * @param bool $disabled
     * @param string $inactive_Date
     */
    public function __construct(\StructType\Person_Name_DataType $person_Name_Data = null, \StructType\Contact_Information_DataType $contact_Information_Data = null, \StructType\Person_Identification_DataType $person_Identification_Data = null, $date_of_Birth = null, $date_of_Death = null, \StructType\GenderObjectType $gender_Reference = null, $uses_Tobacco = null, $full_Time_Student = null, $student_Status_Start_Date = null, $student_Status_End_Date = null, $disabled = null, $inactive_Date = null)
    {
        $this
            ->setPerson_Name_Data($person_Name_Data)
            ->setContact_Information_Data($contact_Information_Data)
            ->setPerson_Identification_Data($person_Identification_Data)
            ->setDate_of_Birth($date_of_Birth)
            ->setDate_of_Death($date_of_Death)
            ->setGender_Reference($gender_Reference)
            ->setUses_Tobacco($uses_Tobacco)
            ->setFull_Time_Student($full_Time_Student)
            ->setStudent_Status_Start_Date($student_Status_Start_Date)
            ->setStudent_Status_End_Date($student_Status_End_Date)
            ->setDisabled($disabled)
            ->setInactive_Date($inactive_Date);
    }
    /**
     * Get Person_Name_Data value
     * @return \StructType\Person_Name_DataType|null
     */
    public function getPerson_Name_Data()
    {
        return $this->Person_Name_Data;
    }
    /**
     * Set Person_Name_Data value
     * @param \StructType\Person_Name_DataType $person_Name_Data
     * @return \StructType\Dependent_Personal_Information_DataType
     */
    public function setPerson_Name_Data(\StructType\Person_Name_DataType $person_Name_Data = null)
    {
        $this->Person_Name_Data = $person_Name_Data;
        return $this;
    }
    /**
     * Get Contact_Information_Data value
     * @return \StructType\Contact_Information_DataType|null
     */
    public function getContact_Information_Data()
    {
        return $this->Contact_Information_Data;
    }
    /**
     * Set Contact_Information_Data value
     * @param \StructType\Contact_Information_DataType $contact_Information_Data
     * @return \StructType\Dependent_Personal_Information_DataType
     */
    public function setContact_Information_Data(\StructType\Contact_Information_DataType $contact_Information_Data = null)
    {
        $this->Contact_Information_Data = $contact_Information_Data;
        return $this;
    }
    /**
     * Get Person_Identification_Data value
     * @return \StructType\Person_Identification_DataType|null
     */
    public function getPerson_Identification_Data()
    {
        return $this->Person_Identification_Data;
    }
    /**
     * Set Person_Identification_Data value
     * @param \StructType\Person_Identification_DataType $person_Identification_Data
     * @return \StructType\Dependent_Personal_Information_DataType
     */
    public function setPerson_Identification_Data(\StructType\Person_Identification_DataType $person_Identification_Data = null)
    {
        $this->Person_Identification_Data = $person_Identification_Data;
        return $this;
    }
    /**
     * Get Date_of_Birth value
     * @return string|null
     */
    public function getDate_of_Birth()
    {
        return $this->Date_of_Birth;
    }
    /**
     * Set Date_of_Birth value
     * @param string $date_of_Birth
     * @return \StructType\Dependent_Personal_Information_DataType
     */
    public function setDate_of_Birth($date_of_Birth = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_Birth) && !is_string($date_of_Birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_of_Birth, true), gettype($date_of_Birth)), __LINE__);
        }
        $this->Date_of_Birth = $date_of_Birth;
        return $this;
    }
    /**
     * Get Date_of_Death value
     * @return string|null
     */
    public function getDate_of_Death()
    {
        return $this->Date_of_Death;
    }
    /**
     * Set Date_of_Death value
     * @param string $date_of_Death
     * @return \StructType\Dependent_Personal_Information_DataType
     */
    public function setDate_of_Death($date_of_Death = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_Death) && !is_string($date_of_Death)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_of_Death, true), gettype($date_of_Death)), __LINE__);
        }
        $this->Date_of_Death = $date_of_Death;
        return $this;
    }
    /**
     * Get Gender_Reference value
     * @return \StructType\GenderObjectType|null
     */
    public function getGender_Reference()
    {
        return $this->Gender_Reference;
    }
    /**
     * Set Gender_Reference value
     * @param \StructType\GenderObjectType $gender_Reference
     * @return \StructType\Dependent_Personal_Information_DataType
     */
    public function setGender_Reference(\StructType\GenderObjectType $gender_Reference = null)
    {
        $this->Gender_Reference = $gender_Reference;
        return $this;
    }
    /**
     * Get Uses_Tobacco value
     * @return bool|null
     */
    public function getUses_Tobacco()
    {
        return $this->Uses_Tobacco;
    }
    /**
     * Set Uses_Tobacco value
     * @param bool $uses_Tobacco
     * @return \StructType\Dependent_Personal_Information_DataType
     */
    public function setUses_Tobacco($uses_Tobacco = null)
    {
        // validation for constraint: boolean
        if (!is_null($uses_Tobacco) && !is_bool($uses_Tobacco)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($uses_Tobacco, true), gettype($uses_Tobacco)), __LINE__);
        }
        $this->Uses_Tobacco = $uses_Tobacco;
        return $this;
    }
    /**
     * Get Full_Time_Student value
     * @return bool|null
     */
    public function getFull_Time_Student()
    {
        return $this->{'Full-Time_Student'};
    }
    /**
     * Set Full_Time_Student value
     * @param bool $full_Time_Student
     * @return \StructType\Dependent_Personal_Information_DataType
     */
    public function setFull_Time_Student($full_Time_Student = null)
    {
        // validation for constraint: boolean
        if (!is_null($full_Time_Student) && !is_bool($full_Time_Student)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($full_Time_Student, true), gettype($full_Time_Student)), __LINE__);
        }
        $this->Full_Time_Student = $this->{'Full-Time_Student'} = $full_Time_Student;
        return $this;
    }
    /**
     * Get Student_Status_Start_Date value
     * @return string|null
     */
    public function getStudent_Status_Start_Date()
    {
        return $this->Student_Status_Start_Date;
    }
    /**
     * Set Student_Status_Start_Date value
     * @param string $student_Status_Start_Date
     * @return \StructType\Dependent_Personal_Information_DataType
     */
    public function setStudent_Status_Start_Date($student_Status_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($student_Status_Start_Date) && !is_string($student_Status_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($student_Status_Start_Date, true), gettype($student_Status_Start_Date)), __LINE__);
        }
        $this->Student_Status_Start_Date = $student_Status_Start_Date;
        return $this;
    }
    /**
     * Get Student_Status_End_Date value
     * @return string|null
     */
    public function getStudent_Status_End_Date()
    {
        return $this->Student_Status_End_Date;
    }
    /**
     * Set Student_Status_End_Date value
     * @param string $student_Status_End_Date
     * @return \StructType\Dependent_Personal_Information_DataType
     */
    public function setStudent_Status_End_Date($student_Status_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($student_Status_End_Date) && !is_string($student_Status_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($student_Status_End_Date, true), gettype($student_Status_End_Date)), __LINE__);
        }
        $this->Student_Status_End_Date = $student_Status_End_Date;
        return $this;
    }
    /**
     * Get Disabled value
     * @return bool|null
     */
    public function getDisabled()
    {
        return $this->Disabled;
    }
    /**
     * Set Disabled value
     * @param bool $disabled
     * @return \StructType\Dependent_Personal_Information_DataType
     */
    public function setDisabled($disabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($disabled) && !is_bool($disabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disabled, true), gettype($disabled)), __LINE__);
        }
        $this->Disabled = $disabled;
        return $this;
    }
    /**
     * Get Inactive_Date value
     * @return string|null
     */
    public function getInactive_Date()
    {
        return $this->Inactive_Date;
    }
    /**
     * Set Inactive_Date value
     * @param string $inactive_Date
     * @return \StructType\Dependent_Personal_Information_DataType
     */
    public function setInactive_Date($inactive_Date = null)
    {
        // validation for constraint: string
        if (!is_null($inactive_Date) && !is_string($inactive_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inactive_Date, true), gettype($inactive_Date)), __LINE__);
        }
        $this->Inactive_Date = $inactive_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Dependent_Personal_Information_DataType
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
