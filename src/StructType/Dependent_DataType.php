<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dependent_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the detailed information for a dependent.
 * @subpackage Structs
 */
class Dependent_DataType extends AbstractStructBase
{
    /**
     * The Dependent_ID
     * Meta information extracted from the WSDL
     * - documentation: The ID for the dependent.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Dependent_ID;
    /**
     * The Full_time_Student
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether Dependent is a Full-time Student.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Full_time_Student;
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
     * - documentation: Boolean attribute identifying whether Dependent is Disabled.
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
     * The Dependent_for_Payroll_Purposes
     * Meta information extracted from the WSDL
     * - documentation: Tells if this dependent's information is used in payroll calculations. Only use if dependents for payroll purposes are being tracked for the location context of the worker for this dependent.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Dependent_for_Payroll_Purposes;
    /**
     * The Citizenship_Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the legal status of the dependent.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Citizenship_StatusObjectType[]
     */
    public $Citizenship_Status_Reference;
    /**
     * The Country_of_Nationality_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the primary country of which the dependent is a national.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CountryObjectType
     */
    public $Country_of_Nationality_Reference;
    /**
     * The Country_of_Birth_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the dependent's country of birth.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CountryObjectType
     */
    public $Country_of_Birth_Reference;
    /**
     * The Region_of_Birth_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the dependent's country region of birth.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_RegionObjectType
     */
    public $Region_of_Birth_Reference;
    /**
     * The City_of_Birth
     * Meta information extracted from the WSDL
     * - documentation: The dependent's city of birth.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City_of_Birth;
    /**
     * The Court_Order
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[]
     */
    public $Court_Order;
    /**
     * The Lives_With_Worker_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Lives_With_Worker_DataType[]
     */
    public $Lives_With_Worker_Data;
    /**
     * The Has_Health_Insurance_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Has_Health_Insurance_DataType[]
     */
    public $Has_Health_Insurance_Data;
    /**
     * The Allowed_for_Tax_Deduction_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Allowed_for_Tax_Deduction_DataType[]
     */
    public $Allowed_for_Tax_Deduction_Data;
    /**
     * The Annual_Income_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Annual_Income_DataType[]
     */
    public $Annual_Income_Data;
    /**
     * The Occupation_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Occupation_DataType[]
     */
    public $Occupation_Data;
    /**
     * The Disability_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Disability_Information_Data_for_Related_PersonType[]
     */
    public $Disability_Data;
    /**
     * Constructor method for Dependent_DataType
     * @uses Dependent_DataType::setDependent_ID()
     * @uses Dependent_DataType::setFull_time_Student()
     * @uses Dependent_DataType::setStudent_Status_Start_Date()
     * @uses Dependent_DataType::setStudent_Status_End_Date()
     * @uses Dependent_DataType::setDisabled()
     * @uses Dependent_DataType::setInactive_Date()
     * @uses Dependent_DataType::setDependent_for_Payroll_Purposes()
     * @uses Dependent_DataType::setCitizenship_Status_Reference()
     * @uses Dependent_DataType::setCountry_of_Nationality_Reference()
     * @uses Dependent_DataType::setCountry_of_Birth_Reference()
     * @uses Dependent_DataType::setRegion_of_Birth_Reference()
     * @uses Dependent_DataType::setCity_of_Birth()
     * @uses Dependent_DataType::setCourt_Order()
     * @uses Dependent_DataType::setLives_With_Worker_Data()
     * @uses Dependent_DataType::setHas_Health_Insurance_Data()
     * @uses Dependent_DataType::setAllowed_for_Tax_Deduction_Data()
     * @uses Dependent_DataType::setAnnual_Income_Data()
     * @uses Dependent_DataType::setOccupation_Data()
     * @uses Dependent_DataType::setDisability_Data()
     * @param string $dependent_ID
     * @param bool $full_time_Student
     * @param string $student_Status_Start_Date
     * @param string $student_Status_End_Date
     * @param bool $disabled
     * @param string $inactive_Date
     * @param bool $dependent_for_Payroll_Purposes
     * @param \WorkdayWsdl\\StructType\Citizenship_StatusObjectType[] $citizenship_Status_Reference
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_of_Nationality_Reference
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_of_Birth_Reference
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $region_of_Birth_Reference
     * @param string $city_of_Birth
     * @param \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[] $court_Order
     * @param \WorkdayWsdl\\StructType\Lives_With_Worker_DataType[] $lives_With_Worker_Data
     * @param \WorkdayWsdl\\StructType\Has_Health_Insurance_DataType[] $has_Health_Insurance_Data
     * @param \WorkdayWsdl\\StructType\Allowed_for_Tax_Deduction_DataType[] $allowed_for_Tax_Deduction_Data
     * @param \WorkdayWsdl\\StructType\Annual_Income_DataType[] $annual_Income_Data
     * @param \WorkdayWsdl\\StructType\Occupation_DataType[] $occupation_Data
     * @param \WorkdayWsdl\\StructType\Disability_Information_Data_for_Related_PersonType[] $disability_Data
     */
    public function __construct($dependent_ID = null, $full_time_Student = null, $student_Status_Start_Date = null, $student_Status_End_Date = null, $disabled = null, $inactive_Date = null, $dependent_for_Payroll_Purposes = null, array $citizenship_Status_Reference = array(), \WorkdayWsdl\\StructType\CountryObjectType $country_of_Nationality_Reference = null, \WorkdayWsdl\\StructType\CountryObjectType $country_of_Birth_Reference = null, \WorkdayWsdl\\StructType\Country_RegionObjectType $region_of_Birth_Reference = null, $city_of_Birth = null, array $court_Order = array(), array $lives_With_Worker_Data = array(), array $has_Health_Insurance_Data = array(), array $allowed_for_Tax_Deduction_Data = array(), array $annual_Income_Data = array(), array $occupation_Data = array(), array $disability_Data = array())
    {
        $this
            ->setDependent_ID($dependent_ID)
            ->setFull_time_Student($full_time_Student)
            ->setStudent_Status_Start_Date($student_Status_Start_Date)
            ->setStudent_Status_End_Date($student_Status_End_Date)
            ->setDisabled($disabled)
            ->setInactive_Date($inactive_Date)
            ->setDependent_for_Payroll_Purposes($dependent_for_Payroll_Purposes)
            ->setCitizenship_Status_Reference($citizenship_Status_Reference)
            ->setCountry_of_Nationality_Reference($country_of_Nationality_Reference)
            ->setCountry_of_Birth_Reference($country_of_Birth_Reference)
            ->setRegion_of_Birth_Reference($region_of_Birth_Reference)
            ->setCity_of_Birth($city_of_Birth)
            ->setCourt_Order($court_Order)
            ->setLives_With_Worker_Data($lives_With_Worker_Data)
            ->setHas_Health_Insurance_Data($has_Health_Insurance_Data)
            ->setAllowed_for_Tax_Deduction_Data($allowed_for_Tax_Deduction_Data)
            ->setAnnual_Income_Data($annual_Income_Data)
            ->setOccupation_Data($occupation_Data)
            ->setDisability_Data($disability_Data);
    }
    /**
     * Get Dependent_ID value
     * @return string|null
     */
    public function getDependent_ID()
    {
        return $this->Dependent_ID;
    }
    /**
     * Set Dependent_ID value
     * @param string $dependent_ID
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setDependent_ID($dependent_ID = null)
    {
        // validation for constraint: string
        if (!is_null($dependent_ID) && !is_string($dependent_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dependent_ID, true), gettype($dependent_ID)), __LINE__);
        }
        $this->Dependent_ID = $dependent_ID;
        return $this;
    }
    /**
     * Get Full_time_Student value
     * @return bool|null
     */
    public function getFull_time_Student()
    {
        return $this->{'Full-time_Student'};
    }
    /**
     * Set Full_time_Student value
     * @param bool $full_time_Student
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setFull_time_Student($full_time_Student = null)
    {
        // validation for constraint: boolean
        if (!is_null($full_time_Student) && !is_bool($full_time_Student)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($full_time_Student, true), gettype($full_time_Student)), __LINE__);
        }
        $this->Full_time_Student = $this->{'Full-time_Student'} = $full_time_Student;
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
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
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
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
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
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
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
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
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
     * Get Dependent_for_Payroll_Purposes value
     * @return bool|null
     */
    public function getDependent_for_Payroll_Purposes()
    {
        return $this->Dependent_for_Payroll_Purposes;
    }
    /**
     * Set Dependent_for_Payroll_Purposes value
     * @param bool $dependent_for_Payroll_Purposes
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setDependent_for_Payroll_Purposes($dependent_for_Payroll_Purposes = null)
    {
        // validation for constraint: boolean
        if (!is_null($dependent_for_Payroll_Purposes) && !is_bool($dependent_for_Payroll_Purposes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dependent_for_Payroll_Purposes, true), gettype($dependent_for_Payroll_Purposes)), __LINE__);
        }
        $this->Dependent_for_Payroll_Purposes = $dependent_for_Payroll_Purposes;
        return $this;
    }
    /**
     * Get Citizenship_Status_Reference value
     * @return \WorkdayWsdl\\StructType\Citizenship_StatusObjectType[]|null
     */
    public function getCitizenship_Status_Reference()
    {
        return $this->Citizenship_Status_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCitizenship_Status_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCitizenship_Status_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCitizenship_Status_ReferenceForArrayConstraintsFromSetCitizenship_Status_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dependent_DataTypeCitizenship_Status_ReferenceItem) {
            // validation for constraint: itemType
            if (!$dependent_DataTypeCitizenship_Status_ReferenceItem instanceof \WorkdayWsdl\\StructType\Citizenship_StatusObjectType) {
                $invalidValues[] = is_object($dependent_DataTypeCitizenship_Status_ReferenceItem) ? get_class($dependent_DataTypeCitizenship_Status_ReferenceItem) : sprintf('%s(%s)', gettype($dependent_DataTypeCitizenship_Status_ReferenceItem), var_export($dependent_DataTypeCitizenship_Status_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Citizenship_Status_Reference property can only contain items of type \WorkdayWsdl\\StructType\Citizenship_StatusObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Citizenship_Status_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Citizenship_StatusObjectType[] $citizenship_Status_Reference
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setCitizenship_Status_Reference(array $citizenship_Status_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($citizenship_Status_ReferenceArrayErrorMessage = self::validateCitizenship_Status_ReferenceForArrayConstraintsFromSetCitizenship_Status_Reference($citizenship_Status_Reference))) {
            throw new \InvalidArgumentException($citizenship_Status_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Citizenship_Status_Reference = $citizenship_Status_Reference;
        return $this;
    }
    /**
     * Add item to Citizenship_Status_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Citizenship_StatusObjectType $item
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function addToCitizenship_Status_Reference(\WorkdayWsdl\\StructType\Citizenship_StatusObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Citizenship_StatusObjectType) {
            throw new \InvalidArgumentException(sprintf('The Citizenship_Status_Reference property can only contain items of type \WorkdayWsdl\\StructType\Citizenship_StatusObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Citizenship_Status_Reference[] = $item;
        return $this;
    }
    /**
     * Get Country_of_Nationality_Reference value
     * @return \WorkdayWsdl\\StructType\CountryObjectType|null
     */
    public function getCountry_of_Nationality_Reference()
    {
        return $this->Country_of_Nationality_Reference;
    }
    /**
     * Set Country_of_Nationality_Reference value
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_of_Nationality_Reference
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setCountry_of_Nationality_Reference(\WorkdayWsdl\\StructType\CountryObjectType $country_of_Nationality_Reference = null)
    {
        $this->Country_of_Nationality_Reference = $country_of_Nationality_Reference;
        return $this;
    }
    /**
     * Get Country_of_Birth_Reference value
     * @return \WorkdayWsdl\\StructType\CountryObjectType|null
     */
    public function getCountry_of_Birth_Reference()
    {
        return $this->Country_of_Birth_Reference;
    }
    /**
     * Set Country_of_Birth_Reference value
     * @param \WorkdayWsdl\\StructType\CountryObjectType $country_of_Birth_Reference
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setCountry_of_Birth_Reference(\WorkdayWsdl\\StructType\CountryObjectType $country_of_Birth_Reference = null)
    {
        $this->Country_of_Birth_Reference = $country_of_Birth_Reference;
        return $this;
    }
    /**
     * Get Region_of_Birth_Reference value
     * @return \WorkdayWsdl\\StructType\Country_RegionObjectType|null
     */
    public function getRegion_of_Birth_Reference()
    {
        return $this->Region_of_Birth_Reference;
    }
    /**
     * Set Region_of_Birth_Reference value
     * @param \WorkdayWsdl\\StructType\Country_RegionObjectType $region_of_Birth_Reference
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setRegion_of_Birth_Reference(\WorkdayWsdl\\StructType\Country_RegionObjectType $region_of_Birth_Reference = null)
    {
        $this->Region_of_Birth_Reference = $region_of_Birth_Reference;
        return $this;
    }
    /**
     * Get City_of_Birth value
     * @return string|null
     */
    public function getCity_of_Birth()
    {
        return $this->City_of_Birth;
    }
    /**
     * Set City_of_Birth value
     * @param string $city_of_Birth
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setCity_of_Birth($city_of_Birth = null)
    {
        // validation for constraint: string
        if (!is_null($city_of_Birth) && !is_string($city_of_Birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city_of_Birth, true), gettype($city_of_Birth)), __LINE__);
        }
        $this->City_of_Birth = $city_of_Birth;
        return $this;
    }
    /**
     * Get Court_Order value
     * @return \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[]|null
     */
    public function getCourt_Order()
    {
        return $this->Court_Order;
    }
    /**
     * This method is responsible for validating the values passed to the setCourt_Order method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCourt_Order method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCourt_OrderForArrayConstraintsFromSetCourt_Order(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dependent_DataTypeCourt_OrderItem) {
            // validation for constraint: itemType
            if (!$dependent_DataTypeCourt_OrderItem instanceof \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType) {
                $invalidValues[] = is_object($dependent_DataTypeCourt_OrderItem) ? get_class($dependent_DataTypeCourt_OrderItem) : sprintf('%s(%s)', gettype($dependent_DataTypeCourt_OrderItem), var_export($dependent_DataTypeCourt_OrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Court_Order property can only contain items of type \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Court_Order value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[] $court_Order
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setCourt_Order(array $court_Order = array())
    {
        // validation for constraint: array
        if ('' !== ($court_OrderArrayErrorMessage = self::validateCourt_OrderForArrayConstraintsFromSetCourt_Order($court_Order))) {
            throw new \InvalidArgumentException($court_OrderArrayErrorMessage, __LINE__);
        }
        $this->Court_Order = $court_Order;
        return $this;
    }
    /**
     * Add item to Court_Order value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType $item
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function addToCourt_Order(\WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Court_Order property can only contain items of type \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Court_Order[] = $item;
        return $this;
    }
    /**
     * Get Lives_With_Worker_Data value
     * @return \WorkdayWsdl\\StructType\Lives_With_Worker_DataType[]|null
     */
    public function getLives_With_Worker_Data()
    {
        return $this->Lives_With_Worker_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setLives_With_Worker_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLives_With_Worker_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLives_With_Worker_DataForArrayConstraintsFromSetLives_With_Worker_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dependent_DataTypeLives_With_Worker_DataItem) {
            // validation for constraint: itemType
            if (!$dependent_DataTypeLives_With_Worker_DataItem instanceof \WorkdayWsdl\\StructType\Lives_With_Worker_DataType) {
                $invalidValues[] = is_object($dependent_DataTypeLives_With_Worker_DataItem) ? get_class($dependent_DataTypeLives_With_Worker_DataItem) : sprintf('%s(%s)', gettype($dependent_DataTypeLives_With_Worker_DataItem), var_export($dependent_DataTypeLives_With_Worker_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Lives_With_Worker_Data property can only contain items of type \WorkdayWsdl\\StructType\Lives_With_Worker_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Lives_With_Worker_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Lives_With_Worker_DataType[] $lives_With_Worker_Data
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setLives_With_Worker_Data(array $lives_With_Worker_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($lives_With_Worker_DataArrayErrorMessage = self::validateLives_With_Worker_DataForArrayConstraintsFromSetLives_With_Worker_Data($lives_With_Worker_Data))) {
            throw new \InvalidArgumentException($lives_With_Worker_DataArrayErrorMessage, __LINE__);
        }
        $this->Lives_With_Worker_Data = $lives_With_Worker_Data;
        return $this;
    }
    /**
     * Add item to Lives_With_Worker_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Lives_With_Worker_DataType $item
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function addToLives_With_Worker_Data(\WorkdayWsdl\\StructType\Lives_With_Worker_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Lives_With_Worker_DataType) {
            throw new \InvalidArgumentException(sprintf('The Lives_With_Worker_Data property can only contain items of type \WorkdayWsdl\\StructType\Lives_With_Worker_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Lives_With_Worker_Data[] = $item;
        return $this;
    }
    /**
     * Get Has_Health_Insurance_Data value
     * @return \WorkdayWsdl\\StructType\Has_Health_Insurance_DataType[]|null
     */
    public function getHas_Health_Insurance_Data()
    {
        return $this->Has_Health_Insurance_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setHas_Health_Insurance_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHas_Health_Insurance_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHas_Health_Insurance_DataForArrayConstraintsFromSetHas_Health_Insurance_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dependent_DataTypeHas_Health_Insurance_DataItem) {
            // validation for constraint: itemType
            if (!$dependent_DataTypeHas_Health_Insurance_DataItem instanceof \WorkdayWsdl\\StructType\Has_Health_Insurance_DataType) {
                $invalidValues[] = is_object($dependent_DataTypeHas_Health_Insurance_DataItem) ? get_class($dependent_DataTypeHas_Health_Insurance_DataItem) : sprintf('%s(%s)', gettype($dependent_DataTypeHas_Health_Insurance_DataItem), var_export($dependent_DataTypeHas_Health_Insurance_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Has_Health_Insurance_Data property can only contain items of type \WorkdayWsdl\\StructType\Has_Health_Insurance_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Has_Health_Insurance_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Has_Health_Insurance_DataType[] $has_Health_Insurance_Data
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setHas_Health_Insurance_Data(array $has_Health_Insurance_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($has_Health_Insurance_DataArrayErrorMessage = self::validateHas_Health_Insurance_DataForArrayConstraintsFromSetHas_Health_Insurance_Data($has_Health_Insurance_Data))) {
            throw new \InvalidArgumentException($has_Health_Insurance_DataArrayErrorMessage, __LINE__);
        }
        $this->Has_Health_Insurance_Data = $has_Health_Insurance_Data;
        return $this;
    }
    /**
     * Add item to Has_Health_Insurance_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Has_Health_Insurance_DataType $item
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function addToHas_Health_Insurance_Data(\WorkdayWsdl\\StructType\Has_Health_Insurance_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Has_Health_Insurance_DataType) {
            throw new \InvalidArgumentException(sprintf('The Has_Health_Insurance_Data property can only contain items of type \WorkdayWsdl\\StructType\Has_Health_Insurance_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Has_Health_Insurance_Data[] = $item;
        return $this;
    }
    /**
     * Get Allowed_for_Tax_Deduction_Data value
     * @return \WorkdayWsdl\\StructType\Allowed_for_Tax_Deduction_DataType[]|null
     */
    public function getAllowed_for_Tax_Deduction_Data()
    {
        return $this->Allowed_for_Tax_Deduction_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAllowed_for_Tax_Deduction_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAllowed_for_Tax_Deduction_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAllowed_for_Tax_Deduction_DataForArrayConstraintsFromSetAllowed_for_Tax_Deduction_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dependent_DataTypeAllowed_for_Tax_Deduction_DataItem) {
            // validation for constraint: itemType
            if (!$dependent_DataTypeAllowed_for_Tax_Deduction_DataItem instanceof \WorkdayWsdl\\StructType\Allowed_for_Tax_Deduction_DataType) {
                $invalidValues[] = is_object($dependent_DataTypeAllowed_for_Tax_Deduction_DataItem) ? get_class($dependent_DataTypeAllowed_for_Tax_Deduction_DataItem) : sprintf('%s(%s)', gettype($dependent_DataTypeAllowed_for_Tax_Deduction_DataItem), var_export($dependent_DataTypeAllowed_for_Tax_Deduction_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Allowed_for_Tax_Deduction_Data property can only contain items of type \WorkdayWsdl\\StructType\Allowed_for_Tax_Deduction_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Allowed_for_Tax_Deduction_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Allowed_for_Tax_Deduction_DataType[] $allowed_for_Tax_Deduction_Data
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setAllowed_for_Tax_Deduction_Data(array $allowed_for_Tax_Deduction_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($allowed_for_Tax_Deduction_DataArrayErrorMessage = self::validateAllowed_for_Tax_Deduction_DataForArrayConstraintsFromSetAllowed_for_Tax_Deduction_Data($allowed_for_Tax_Deduction_Data))) {
            throw new \InvalidArgumentException($allowed_for_Tax_Deduction_DataArrayErrorMessage, __LINE__);
        }
        $this->Allowed_for_Tax_Deduction_Data = $allowed_for_Tax_Deduction_Data;
        return $this;
    }
    /**
     * Add item to Allowed_for_Tax_Deduction_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Allowed_for_Tax_Deduction_DataType $item
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function addToAllowed_for_Tax_Deduction_Data(\WorkdayWsdl\\StructType\Allowed_for_Tax_Deduction_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Allowed_for_Tax_Deduction_DataType) {
            throw new \InvalidArgumentException(sprintf('The Allowed_for_Tax_Deduction_Data property can only contain items of type \WorkdayWsdl\\StructType\Allowed_for_Tax_Deduction_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Allowed_for_Tax_Deduction_Data[] = $item;
        return $this;
    }
    /**
     * Get Annual_Income_Data value
     * @return \WorkdayWsdl\\StructType\Annual_Income_DataType[]|null
     */
    public function getAnnual_Income_Data()
    {
        return $this->Annual_Income_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAnnual_Income_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAnnual_Income_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAnnual_Income_DataForArrayConstraintsFromSetAnnual_Income_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dependent_DataTypeAnnual_Income_DataItem) {
            // validation for constraint: itemType
            if (!$dependent_DataTypeAnnual_Income_DataItem instanceof \WorkdayWsdl\\StructType\Annual_Income_DataType) {
                $invalidValues[] = is_object($dependent_DataTypeAnnual_Income_DataItem) ? get_class($dependent_DataTypeAnnual_Income_DataItem) : sprintf('%s(%s)', gettype($dependent_DataTypeAnnual_Income_DataItem), var_export($dependent_DataTypeAnnual_Income_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Annual_Income_Data property can only contain items of type \WorkdayWsdl\\StructType\Annual_Income_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Annual_Income_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Annual_Income_DataType[] $annual_Income_Data
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setAnnual_Income_Data(array $annual_Income_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($annual_Income_DataArrayErrorMessage = self::validateAnnual_Income_DataForArrayConstraintsFromSetAnnual_Income_Data($annual_Income_Data))) {
            throw new \InvalidArgumentException($annual_Income_DataArrayErrorMessage, __LINE__);
        }
        $this->Annual_Income_Data = $annual_Income_Data;
        return $this;
    }
    /**
     * Add item to Annual_Income_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Annual_Income_DataType $item
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function addToAnnual_Income_Data(\WorkdayWsdl\\StructType\Annual_Income_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Annual_Income_DataType) {
            throw new \InvalidArgumentException(sprintf('The Annual_Income_Data property can only contain items of type \WorkdayWsdl\\StructType\Annual_Income_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Annual_Income_Data[] = $item;
        return $this;
    }
    /**
     * Get Occupation_Data value
     * @return \WorkdayWsdl\\StructType\Occupation_DataType[]|null
     */
    public function getOccupation_Data()
    {
        return $this->Occupation_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setOccupation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOccupation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOccupation_DataForArrayConstraintsFromSetOccupation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dependent_DataTypeOccupation_DataItem) {
            // validation for constraint: itemType
            if (!$dependent_DataTypeOccupation_DataItem instanceof \WorkdayWsdl\\StructType\Occupation_DataType) {
                $invalidValues[] = is_object($dependent_DataTypeOccupation_DataItem) ? get_class($dependent_DataTypeOccupation_DataItem) : sprintf('%s(%s)', gettype($dependent_DataTypeOccupation_DataItem), var_export($dependent_DataTypeOccupation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Occupation_Data property can only contain items of type \WorkdayWsdl\\StructType\Occupation_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Occupation_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Occupation_DataType[] $occupation_Data
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setOccupation_Data(array $occupation_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($occupation_DataArrayErrorMessage = self::validateOccupation_DataForArrayConstraintsFromSetOccupation_Data($occupation_Data))) {
            throw new \InvalidArgumentException($occupation_DataArrayErrorMessage, __LINE__);
        }
        $this->Occupation_Data = $occupation_Data;
        return $this;
    }
    /**
     * Add item to Occupation_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Occupation_DataType $item
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function addToOccupation_Data(\WorkdayWsdl\\StructType\Occupation_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Occupation_DataType) {
            throw new \InvalidArgumentException(sprintf('The Occupation_Data property can only contain items of type \WorkdayWsdl\\StructType\Occupation_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Occupation_Data[] = $item;
        return $this;
    }
    /**
     * Get Disability_Data value
     * @return \WorkdayWsdl\\StructType\Disability_Information_Data_for_Related_PersonType[]|null
     */
    public function getDisability_Data()
    {
        return $this->Disability_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setDisability_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisability_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisability_DataForArrayConstraintsFromSetDisability_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dependent_DataTypeDisability_DataItem) {
            // validation for constraint: itemType
            if (!$dependent_DataTypeDisability_DataItem instanceof \WorkdayWsdl\\StructType\Disability_Information_Data_for_Related_PersonType) {
                $invalidValues[] = is_object($dependent_DataTypeDisability_DataItem) ? get_class($dependent_DataTypeDisability_DataItem) : sprintf('%s(%s)', gettype($dependent_DataTypeDisability_DataItem), var_export($dependent_DataTypeDisability_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Disability_Data property can only contain items of type \WorkdayWsdl\\StructType\Disability_Information_Data_for_Related_PersonType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Disability_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Disability_Information_Data_for_Related_PersonType[] $disability_Data
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function setDisability_Data(array $disability_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($disability_DataArrayErrorMessage = self::validateDisability_DataForArrayConstraintsFromSetDisability_Data($disability_Data))) {
            throw new \InvalidArgumentException($disability_DataArrayErrorMessage, __LINE__);
        }
        $this->Disability_Data = $disability_Data;
        return $this;
    }
    /**
     * Add item to Disability_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Disability_Information_Data_for_Related_PersonType $item
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
     */
    public function addToDisability_Data(\WorkdayWsdl\\StructType\Disability_Information_Data_for_Related_PersonType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Disability_Information_Data_for_Related_PersonType) {
            throw new \InvalidArgumentException(sprintf('The Disability_Data property can only contain items of type \WorkdayWsdl\\StructType\Disability_Information_Data_for_Related_PersonType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Disability_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Dependent_DataType
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
