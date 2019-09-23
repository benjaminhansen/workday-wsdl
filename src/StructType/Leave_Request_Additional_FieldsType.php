<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Leave_Request_Additional_FieldsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Leave Request Additional Fields
 * @subpackage Structs
 */
class Leave_Request_Additional_FieldsType extends AbstractStructBase
{
    /**
     * The Last_Date_for_Which_Paid
     * Meta information extracted from the WSDL
     * - documentation: Last Date for which paid (Canada)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Date_for_Which_Paid;
    /**
     * The Expected_Due_Date
     * Meta information extracted from the WSDL
     * - documentation: Expected due date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Expected_Due_Date;
    /**
     * The Child_s_Birth_Date
     * Meta information extracted from the WSDL
     * - documentation: Child's birth date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Child_s_Birth_Date;
    /**
     * The Stillbirth_Baby_Deceased
     * Meta information extracted from the WSDL
     * - documentation: Still birth or baby deceased
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Stillbirth_Baby_Deceased;
    /**
     * The Date_Baby_Arrived_Home_From_Hospital
     * Meta information extracted from the WSDL
     * - documentation: Date baby arrived home from hospital
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_Baby_Arrived_Home_From_Hospital;
    /**
     * The Adoption_Placement_Date
     * Meta information extracted from the WSDL
     * - documentation: Adoption placement date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Adoption_Placement_Date;
    /**
     * The Adoption_Notification_Date
     * Meta information extracted from the WSDL
     * - documentation: Adoption notification date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Adoption_Notification_Date;
    /**
     * The Date_Child_Entered_Country
     * Meta information extracted from the WSDL
     * - documentation: Date child entered country
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_Child_Entered_Country;
    /**
     * The Multiple_Child_Indicator
     * Meta information extracted from the WSDL
     * - documentation: Multiple child indicator
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Multiple_Child_Indicator;
    /**
     * The Number_of_Babies_Adopted_Children
     * Meta information extracted from the WSDL
     * - documentation: Number of babies or adopted children
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 2
     * @var float
     */
    public $Number_of_Babies_Adopted_Children;
    /**
     * The Number_of_Previous_Births
     * Meta information extracted from the WSDL
     * - documentation: Number of previous births
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 2
     * @var float
     */
    public $Number_of_Previous_Births;
    /**
     * The Number_of_Previous_Maternity_Leaves
     * Meta information extracted from the WSDL
     * - documentation: Number of previous maternity leaves
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 2
     * @var float
     */
    public $Number_of_Previous_Maternity_Leaves;
    /**
     * The Number_of_Child_Dependents
     * Meta information extracted from the WSDL
     * - documentation: Number of child dependents
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 2
     * @var float
     */
    public $Number_of_Child_Dependents;
    /**
     * The Single_Parent_Indicator
     * Meta information extracted from the WSDL
     * - documentation: Boolean to indicate single parent
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Single_Parent_Indicator;
    /**
     * The Age_of_Dependent
     * Meta information extracted from the WSDL
     * - documentation: Age of dependent
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 3
     * @var float
     */
    public $Age_of_Dependent;
    /**
     * The Work_Related
     * Meta information extracted from the WSDL
     * - documentation: Work related
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Work_Related;
    /**
     * The Stop_Payment_Date
     * Meta information extracted from the WSDL
     * - documentation: Date when paid leave ends.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Stop_Payment_Date;
    /**
     * The Social_Security_Disability_Code
     * Meta information extracted from the WSDL
     * - documentation: IMSS Folio Code.
     * - base: xsd:string
     * - maxLength: 8
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Social_Security_Disability_Code;
    /**
     * The Location_During_Leave
     * Meta information extracted from the WSDL
     * - documentation: Location for a worker on leave at another academic institution.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Location_During_Leave;
    /**
     * The Caesarean_Section_Birth
     * Meta information extracted from the WSDL
     * - documentation: Indicates Caesarean Section Birth.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Caesarean_Section_Birth;
    /**
     * The Leave_Percentage
     * Meta information extracted from the WSDL
     * - documentation: Used to record the percentage of working time for which the employee is on leave. Used when a worker is on partial leaves.
     * - base: xsd:decimal
     * - fractionDigits: 2
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 5
     * @var float
     */
    public $Leave_Percentage;
    /**
     * The Week_of_Confinement
     * Meta information extracted from the WSDL
     * - documentation: Used to record the date of the Sunday prior to the expected due date.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Week_of_Confinement;
    /**
     * The Leave_Entitlement_Override
     * Meta information extracted from the WSDL
     * - documentation: Used to record the value of an override to entitlement.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 5
     * @var float
     */
    public $Leave_Entitlement_Override;
    /**
     * The Date_of_Recall
     * Meta information extracted from the WSDL
     * - documentation: Used to record date of recall used in Canada ROE report.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date_of_Recall;
    /**
     * Constructor method for Leave_Request_Additional_FieldsType
     * @uses Leave_Request_Additional_FieldsType::setLast_Date_for_Which_Paid()
     * @uses Leave_Request_Additional_FieldsType::setExpected_Due_Date()
     * @uses Leave_Request_Additional_FieldsType::setChild_s_Birth_Date()
     * @uses Leave_Request_Additional_FieldsType::setStillbirth_Baby_Deceased()
     * @uses Leave_Request_Additional_FieldsType::setDate_Baby_Arrived_Home_From_Hospital()
     * @uses Leave_Request_Additional_FieldsType::setAdoption_Placement_Date()
     * @uses Leave_Request_Additional_FieldsType::setAdoption_Notification_Date()
     * @uses Leave_Request_Additional_FieldsType::setDate_Child_Entered_Country()
     * @uses Leave_Request_Additional_FieldsType::setMultiple_Child_Indicator()
     * @uses Leave_Request_Additional_FieldsType::setNumber_of_Babies_Adopted_Children()
     * @uses Leave_Request_Additional_FieldsType::setNumber_of_Previous_Births()
     * @uses Leave_Request_Additional_FieldsType::setNumber_of_Previous_Maternity_Leaves()
     * @uses Leave_Request_Additional_FieldsType::setNumber_of_Child_Dependents()
     * @uses Leave_Request_Additional_FieldsType::setSingle_Parent_Indicator()
     * @uses Leave_Request_Additional_FieldsType::setAge_of_Dependent()
     * @uses Leave_Request_Additional_FieldsType::setWork_Related()
     * @uses Leave_Request_Additional_FieldsType::setStop_Payment_Date()
     * @uses Leave_Request_Additional_FieldsType::setSocial_Security_Disability_Code()
     * @uses Leave_Request_Additional_FieldsType::setLocation_During_Leave()
     * @uses Leave_Request_Additional_FieldsType::setCaesarean_Section_Birth()
     * @uses Leave_Request_Additional_FieldsType::setLeave_Percentage()
     * @uses Leave_Request_Additional_FieldsType::setWeek_of_Confinement()
     * @uses Leave_Request_Additional_FieldsType::setLeave_Entitlement_Override()
     * @uses Leave_Request_Additional_FieldsType::setDate_of_Recall()
     * @param string $last_Date_for_Which_Paid
     * @param string $expected_Due_Date
     * @param string $child_s_Birth_Date
     * @param bool $stillbirth_Baby_Deceased
     * @param string $date_Baby_Arrived_Home_From_Hospital
     * @param string $adoption_Placement_Date
     * @param string $adoption_Notification_Date
     * @param string $date_Child_Entered_Country
     * @param bool $multiple_Child_Indicator
     * @param float $number_of_Babies_Adopted_Children
     * @param float $number_of_Previous_Births
     * @param float $number_of_Previous_Maternity_Leaves
     * @param float $number_of_Child_Dependents
     * @param bool $single_Parent_Indicator
     * @param float $age_of_Dependent
     * @param bool $work_Related
     * @param string $stop_Payment_Date
     * @param string $social_Security_Disability_Code
     * @param string $location_During_Leave
     * @param bool $caesarean_Section_Birth
     * @param float $leave_Percentage
     * @param string $week_of_Confinement
     * @param float $leave_Entitlement_Override
     * @param string $date_of_Recall
     */
    public function __construct($last_Date_for_Which_Paid = null, $expected_Due_Date = null, $child_s_Birth_Date = null, $stillbirth_Baby_Deceased = null, $date_Baby_Arrived_Home_From_Hospital = null, $adoption_Placement_Date = null, $adoption_Notification_Date = null, $date_Child_Entered_Country = null, $multiple_Child_Indicator = null, $number_of_Babies_Adopted_Children = null, $number_of_Previous_Births = null, $number_of_Previous_Maternity_Leaves = null, $number_of_Child_Dependents = null, $single_Parent_Indicator = null, $age_of_Dependent = null, $work_Related = null, $stop_Payment_Date = null, $social_Security_Disability_Code = null, $location_During_Leave = null, $caesarean_Section_Birth = null, $leave_Percentage = null, $week_of_Confinement = null, $leave_Entitlement_Override = null, $date_of_Recall = null)
    {
        $this
            ->setLast_Date_for_Which_Paid($last_Date_for_Which_Paid)
            ->setExpected_Due_Date($expected_Due_Date)
            ->setChild_s_Birth_Date($child_s_Birth_Date)
            ->setStillbirth_Baby_Deceased($stillbirth_Baby_Deceased)
            ->setDate_Baby_Arrived_Home_From_Hospital($date_Baby_Arrived_Home_From_Hospital)
            ->setAdoption_Placement_Date($adoption_Placement_Date)
            ->setAdoption_Notification_Date($adoption_Notification_Date)
            ->setDate_Child_Entered_Country($date_Child_Entered_Country)
            ->setMultiple_Child_Indicator($multiple_Child_Indicator)
            ->setNumber_of_Babies_Adopted_Children($number_of_Babies_Adopted_Children)
            ->setNumber_of_Previous_Births($number_of_Previous_Births)
            ->setNumber_of_Previous_Maternity_Leaves($number_of_Previous_Maternity_Leaves)
            ->setNumber_of_Child_Dependents($number_of_Child_Dependents)
            ->setSingle_Parent_Indicator($single_Parent_Indicator)
            ->setAge_of_Dependent($age_of_Dependent)
            ->setWork_Related($work_Related)
            ->setStop_Payment_Date($stop_Payment_Date)
            ->setSocial_Security_Disability_Code($social_Security_Disability_Code)
            ->setLocation_During_Leave($location_During_Leave)
            ->setCaesarean_Section_Birth($caesarean_Section_Birth)
            ->setLeave_Percentage($leave_Percentage)
            ->setWeek_of_Confinement($week_of_Confinement)
            ->setLeave_Entitlement_Override($leave_Entitlement_Override)
            ->setDate_of_Recall($date_of_Recall);
    }
    /**
     * Get Last_Date_for_Which_Paid value
     * @return string|null
     */
    public function getLast_Date_for_Which_Paid()
    {
        return $this->Last_Date_for_Which_Paid;
    }
    /**
     * Set Last_Date_for_Which_Paid value
     * @param string $last_Date_for_Which_Paid
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setLast_Date_for_Which_Paid($last_Date_for_Which_Paid = null)
    {
        // validation for constraint: string
        if (!is_null($last_Date_for_Which_Paid) && !is_string($last_Date_for_Which_Paid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Date_for_Which_Paid, true), gettype($last_Date_for_Which_Paid)), __LINE__);
        }
        $this->Last_Date_for_Which_Paid = $last_Date_for_Which_Paid;
        return $this;
    }
    /**
     * Get Expected_Due_Date value
     * @return string|null
     */
    public function getExpected_Due_Date()
    {
        return $this->Expected_Due_Date;
    }
    /**
     * Set Expected_Due_Date value
     * @param string $expected_Due_Date
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setExpected_Due_Date($expected_Due_Date = null)
    {
        // validation for constraint: string
        if (!is_null($expected_Due_Date) && !is_string($expected_Due_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expected_Due_Date, true), gettype($expected_Due_Date)), __LINE__);
        }
        $this->Expected_Due_Date = $expected_Due_Date;
        return $this;
    }
    /**
     * Get Child_s_Birth_Date value
     * @return string|null
     */
    public function getChild_s_Birth_Date()
    {
        return $this->Child_s_Birth_Date;
    }
    /**
     * Set Child_s_Birth_Date value
     * @param string $child_s_Birth_Date
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setChild_s_Birth_Date($child_s_Birth_Date = null)
    {
        // validation for constraint: string
        if (!is_null($child_s_Birth_Date) && !is_string($child_s_Birth_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($child_s_Birth_Date, true), gettype($child_s_Birth_Date)), __LINE__);
        }
        $this->Child_s_Birth_Date = $child_s_Birth_Date;
        return $this;
    }
    /**
     * Get Stillbirth_Baby_Deceased value
     * @return bool|null
     */
    public function getStillbirth_Baby_Deceased()
    {
        return $this->Stillbirth_Baby_Deceased;
    }
    /**
     * Set Stillbirth_Baby_Deceased value
     * @param bool $stillbirth_Baby_Deceased
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setStillbirth_Baby_Deceased($stillbirth_Baby_Deceased = null)
    {
        // validation for constraint: boolean
        if (!is_null($stillbirth_Baby_Deceased) && !is_bool($stillbirth_Baby_Deceased)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stillbirth_Baby_Deceased, true), gettype($stillbirth_Baby_Deceased)), __LINE__);
        }
        $this->Stillbirth_Baby_Deceased = $stillbirth_Baby_Deceased;
        return $this;
    }
    /**
     * Get Date_Baby_Arrived_Home_From_Hospital value
     * @return string|null
     */
    public function getDate_Baby_Arrived_Home_From_Hospital()
    {
        return $this->Date_Baby_Arrived_Home_From_Hospital;
    }
    /**
     * Set Date_Baby_Arrived_Home_From_Hospital value
     * @param string $date_Baby_Arrived_Home_From_Hospital
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setDate_Baby_Arrived_Home_From_Hospital($date_Baby_Arrived_Home_From_Hospital = null)
    {
        // validation for constraint: string
        if (!is_null($date_Baby_Arrived_Home_From_Hospital) && !is_string($date_Baby_Arrived_Home_From_Hospital)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_Baby_Arrived_Home_From_Hospital, true), gettype($date_Baby_Arrived_Home_From_Hospital)), __LINE__);
        }
        $this->Date_Baby_Arrived_Home_From_Hospital = $date_Baby_Arrived_Home_From_Hospital;
        return $this;
    }
    /**
     * Get Adoption_Placement_Date value
     * @return string|null
     */
    public function getAdoption_Placement_Date()
    {
        return $this->Adoption_Placement_Date;
    }
    /**
     * Set Adoption_Placement_Date value
     * @param string $adoption_Placement_Date
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setAdoption_Placement_Date($adoption_Placement_Date = null)
    {
        // validation for constraint: string
        if (!is_null($adoption_Placement_Date) && !is_string($adoption_Placement_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adoption_Placement_Date, true), gettype($adoption_Placement_Date)), __LINE__);
        }
        $this->Adoption_Placement_Date = $adoption_Placement_Date;
        return $this;
    }
    /**
     * Get Adoption_Notification_Date value
     * @return string|null
     */
    public function getAdoption_Notification_Date()
    {
        return $this->Adoption_Notification_Date;
    }
    /**
     * Set Adoption_Notification_Date value
     * @param string $adoption_Notification_Date
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setAdoption_Notification_Date($adoption_Notification_Date = null)
    {
        // validation for constraint: string
        if (!is_null($adoption_Notification_Date) && !is_string($adoption_Notification_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adoption_Notification_Date, true), gettype($adoption_Notification_Date)), __LINE__);
        }
        $this->Adoption_Notification_Date = $adoption_Notification_Date;
        return $this;
    }
    /**
     * Get Date_Child_Entered_Country value
     * @return string|null
     */
    public function getDate_Child_Entered_Country()
    {
        return $this->Date_Child_Entered_Country;
    }
    /**
     * Set Date_Child_Entered_Country value
     * @param string $date_Child_Entered_Country
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setDate_Child_Entered_Country($date_Child_Entered_Country = null)
    {
        // validation for constraint: string
        if (!is_null($date_Child_Entered_Country) && !is_string($date_Child_Entered_Country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_Child_Entered_Country, true), gettype($date_Child_Entered_Country)), __LINE__);
        }
        $this->Date_Child_Entered_Country = $date_Child_Entered_Country;
        return $this;
    }
    /**
     * Get Multiple_Child_Indicator value
     * @return bool|null
     */
    public function getMultiple_Child_Indicator()
    {
        return $this->Multiple_Child_Indicator;
    }
    /**
     * Set Multiple_Child_Indicator value
     * @param bool $multiple_Child_Indicator
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setMultiple_Child_Indicator($multiple_Child_Indicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($multiple_Child_Indicator) && !is_bool($multiple_Child_Indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($multiple_Child_Indicator, true), gettype($multiple_Child_Indicator)), __LINE__);
        }
        $this->Multiple_Child_Indicator = $multiple_Child_Indicator;
        return $this;
    }
    /**
     * Get Number_of_Babies_Adopted_Children value
     * @return float|null
     */
    public function getNumber_of_Babies_Adopted_Children()
    {
        return $this->Number_of_Babies_Adopted_Children;
    }
    /**
     * Set Number_of_Babies_Adopted_Children value
     * @param float $number_of_Babies_Adopted_Children
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setNumber_of_Babies_Adopted_Children($number_of_Babies_Adopted_Children = null)
    {
        // validation for constraint: float
        if (!is_null($number_of_Babies_Adopted_Children) && !(is_float($number_of_Babies_Adopted_Children) || is_numeric($number_of_Babies_Adopted_Children))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($number_of_Babies_Adopted_Children, true), gettype($number_of_Babies_Adopted_Children)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($number_of_Babies_Adopted_Children) && mb_strlen(mb_substr($number_of_Babies_Adopted_Children, mb_strpos($number_of_Babies_Adopted_Children, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($number_of_Babies_Adopted_Children, true), mb_strlen(mb_substr($number_of_Babies_Adopted_Children, mb_strpos($number_of_Babies_Adopted_Children, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($number_of_Babies_Adopted_Children) && $number_of_Babies_Adopted_Children < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($number_of_Babies_Adopted_Children, true)), __LINE__);
        }
        // validation for constraint: totalDigits(2)
        if (!is_null($number_of_Babies_Adopted_Children) && mb_strlen(preg_replace('/(\D)/', '', $number_of_Babies_Adopted_Children)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 2 digits, "%d" given', var_export($number_of_Babies_Adopted_Children, true), mb_strlen(preg_replace('/(\D)/', '', $number_of_Babies_Adopted_Children))), __LINE__);
        }
        $this->Number_of_Babies_Adopted_Children = $number_of_Babies_Adopted_Children;
        return $this;
    }
    /**
     * Get Number_of_Previous_Births value
     * @return float|null
     */
    public function getNumber_of_Previous_Births()
    {
        return $this->Number_of_Previous_Births;
    }
    /**
     * Set Number_of_Previous_Births value
     * @param float $number_of_Previous_Births
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setNumber_of_Previous_Births($number_of_Previous_Births = null)
    {
        // validation for constraint: float
        if (!is_null($number_of_Previous_Births) && !(is_float($number_of_Previous_Births) || is_numeric($number_of_Previous_Births))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($number_of_Previous_Births, true), gettype($number_of_Previous_Births)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($number_of_Previous_Births) && mb_strlen(mb_substr($number_of_Previous_Births, mb_strpos($number_of_Previous_Births, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($number_of_Previous_Births, true), mb_strlen(mb_substr($number_of_Previous_Births, mb_strpos($number_of_Previous_Births, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($number_of_Previous_Births) && $number_of_Previous_Births < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($number_of_Previous_Births, true)), __LINE__);
        }
        // validation for constraint: totalDigits(2)
        if (!is_null($number_of_Previous_Births) && mb_strlen(preg_replace('/(\D)/', '', $number_of_Previous_Births)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 2 digits, "%d" given', var_export($number_of_Previous_Births, true), mb_strlen(preg_replace('/(\D)/', '', $number_of_Previous_Births))), __LINE__);
        }
        $this->Number_of_Previous_Births = $number_of_Previous_Births;
        return $this;
    }
    /**
     * Get Number_of_Previous_Maternity_Leaves value
     * @return float|null
     */
    public function getNumber_of_Previous_Maternity_Leaves()
    {
        return $this->Number_of_Previous_Maternity_Leaves;
    }
    /**
     * Set Number_of_Previous_Maternity_Leaves value
     * @param float $number_of_Previous_Maternity_Leaves
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setNumber_of_Previous_Maternity_Leaves($number_of_Previous_Maternity_Leaves = null)
    {
        // validation for constraint: float
        if (!is_null($number_of_Previous_Maternity_Leaves) && !(is_float($number_of_Previous_Maternity_Leaves) || is_numeric($number_of_Previous_Maternity_Leaves))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($number_of_Previous_Maternity_Leaves, true), gettype($number_of_Previous_Maternity_Leaves)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($number_of_Previous_Maternity_Leaves) && mb_strlen(mb_substr($number_of_Previous_Maternity_Leaves, mb_strpos($number_of_Previous_Maternity_Leaves, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($number_of_Previous_Maternity_Leaves, true), mb_strlen(mb_substr($number_of_Previous_Maternity_Leaves, mb_strpos($number_of_Previous_Maternity_Leaves, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($number_of_Previous_Maternity_Leaves) && $number_of_Previous_Maternity_Leaves < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($number_of_Previous_Maternity_Leaves, true)), __LINE__);
        }
        // validation for constraint: totalDigits(2)
        if (!is_null($number_of_Previous_Maternity_Leaves) && mb_strlen(preg_replace('/(\D)/', '', $number_of_Previous_Maternity_Leaves)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 2 digits, "%d" given', var_export($number_of_Previous_Maternity_Leaves, true), mb_strlen(preg_replace('/(\D)/', '', $number_of_Previous_Maternity_Leaves))), __LINE__);
        }
        $this->Number_of_Previous_Maternity_Leaves = $number_of_Previous_Maternity_Leaves;
        return $this;
    }
    /**
     * Get Number_of_Child_Dependents value
     * @return float|null
     */
    public function getNumber_of_Child_Dependents()
    {
        return $this->Number_of_Child_Dependents;
    }
    /**
     * Set Number_of_Child_Dependents value
     * @param float $number_of_Child_Dependents
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setNumber_of_Child_Dependents($number_of_Child_Dependents = null)
    {
        // validation for constraint: float
        if (!is_null($number_of_Child_Dependents) && !(is_float($number_of_Child_Dependents) || is_numeric($number_of_Child_Dependents))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($number_of_Child_Dependents, true), gettype($number_of_Child_Dependents)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($number_of_Child_Dependents) && mb_strlen(mb_substr($number_of_Child_Dependents, mb_strpos($number_of_Child_Dependents, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($number_of_Child_Dependents, true), mb_strlen(mb_substr($number_of_Child_Dependents, mb_strpos($number_of_Child_Dependents, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($number_of_Child_Dependents) && $number_of_Child_Dependents < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($number_of_Child_Dependents, true)), __LINE__);
        }
        // validation for constraint: totalDigits(2)
        if (!is_null($number_of_Child_Dependents) && mb_strlen(preg_replace('/(\D)/', '', $number_of_Child_Dependents)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 2 digits, "%d" given', var_export($number_of_Child_Dependents, true), mb_strlen(preg_replace('/(\D)/', '', $number_of_Child_Dependents))), __LINE__);
        }
        $this->Number_of_Child_Dependents = $number_of_Child_Dependents;
        return $this;
    }
    /**
     * Get Single_Parent_Indicator value
     * @return bool|null
     */
    public function getSingle_Parent_Indicator()
    {
        return $this->Single_Parent_Indicator;
    }
    /**
     * Set Single_Parent_Indicator value
     * @param bool $single_Parent_Indicator
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setSingle_Parent_Indicator($single_Parent_Indicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($single_Parent_Indicator) && !is_bool($single_Parent_Indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($single_Parent_Indicator, true), gettype($single_Parent_Indicator)), __LINE__);
        }
        $this->Single_Parent_Indicator = $single_Parent_Indicator;
        return $this;
    }
    /**
     * Get Age_of_Dependent value
     * @return float|null
     */
    public function getAge_of_Dependent()
    {
        return $this->Age_of_Dependent;
    }
    /**
     * Set Age_of_Dependent value
     * @param float $age_of_Dependent
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setAge_of_Dependent($age_of_Dependent = null)
    {
        // validation for constraint: float
        if (!is_null($age_of_Dependent) && !(is_float($age_of_Dependent) || is_numeric($age_of_Dependent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($age_of_Dependent, true), gettype($age_of_Dependent)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($age_of_Dependent) && mb_strlen(mb_substr($age_of_Dependent, mb_strpos($age_of_Dependent, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($age_of_Dependent, true), mb_strlen(mb_substr($age_of_Dependent, mb_strpos($age_of_Dependent, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($age_of_Dependent) && $age_of_Dependent < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($age_of_Dependent, true)), __LINE__);
        }
        // validation for constraint: totalDigits(3)
        if (!is_null($age_of_Dependent) && mb_strlen(preg_replace('/(\D)/', '', $age_of_Dependent)) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 3 digits, "%d" given', var_export($age_of_Dependent, true), mb_strlen(preg_replace('/(\D)/', '', $age_of_Dependent))), __LINE__);
        }
        $this->Age_of_Dependent = $age_of_Dependent;
        return $this;
    }
    /**
     * Get Work_Related value
     * @return bool|null
     */
    public function getWork_Related()
    {
        return $this->Work_Related;
    }
    /**
     * Set Work_Related value
     * @param bool $work_Related
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setWork_Related($work_Related = null)
    {
        // validation for constraint: boolean
        if (!is_null($work_Related) && !is_bool($work_Related)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($work_Related, true), gettype($work_Related)), __LINE__);
        }
        $this->Work_Related = $work_Related;
        return $this;
    }
    /**
     * Get Stop_Payment_Date value
     * @return string|null
     */
    public function getStop_Payment_Date()
    {
        return $this->Stop_Payment_Date;
    }
    /**
     * Set Stop_Payment_Date value
     * @param string $stop_Payment_Date
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setStop_Payment_Date($stop_Payment_Date = null)
    {
        // validation for constraint: string
        if (!is_null($stop_Payment_Date) && !is_string($stop_Payment_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stop_Payment_Date, true), gettype($stop_Payment_Date)), __LINE__);
        }
        $this->Stop_Payment_Date = $stop_Payment_Date;
        return $this;
    }
    /**
     * Get Social_Security_Disability_Code value
     * @return string|null
     */
    public function getSocial_Security_Disability_Code()
    {
        return $this->Social_Security_Disability_Code;
    }
    /**
     * Set Social_Security_Disability_Code value
     * @param string $social_Security_Disability_Code
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setSocial_Security_Disability_Code($social_Security_Disability_Code = null)
    {
        // validation for constraint: string
        if (!is_null($social_Security_Disability_Code) && !is_string($social_Security_Disability_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($social_Security_Disability_Code, true), gettype($social_Security_Disability_Code)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($social_Security_Disability_Code) && mb_strlen($social_Security_Disability_Code) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen($social_Security_Disability_Code)), __LINE__);
        }
        $this->Social_Security_Disability_Code = $social_Security_Disability_Code;
        return $this;
    }
    /**
     * Get Location_During_Leave value
     * @return string|null
     */
    public function getLocation_During_Leave()
    {
        return $this->Location_During_Leave;
    }
    /**
     * Set Location_During_Leave value
     * @param string $location_During_Leave
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setLocation_During_Leave($location_During_Leave = null)
    {
        // validation for constraint: string
        if (!is_null($location_During_Leave) && !is_string($location_During_Leave)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_During_Leave, true), gettype($location_During_Leave)), __LINE__);
        }
        $this->Location_During_Leave = $location_During_Leave;
        return $this;
    }
    /**
     * Get Caesarean_Section_Birth value
     * @return bool|null
     */
    public function getCaesarean_Section_Birth()
    {
        return $this->Caesarean_Section_Birth;
    }
    /**
     * Set Caesarean_Section_Birth value
     * @param bool $caesarean_Section_Birth
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setCaesarean_Section_Birth($caesarean_Section_Birth = null)
    {
        // validation for constraint: boolean
        if (!is_null($caesarean_Section_Birth) && !is_bool($caesarean_Section_Birth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($caesarean_Section_Birth, true), gettype($caesarean_Section_Birth)), __LINE__);
        }
        $this->Caesarean_Section_Birth = $caesarean_Section_Birth;
        return $this;
    }
    /**
     * Get Leave_Percentage value
     * @return float|null
     */
    public function getLeave_Percentage()
    {
        return $this->Leave_Percentage;
    }
    /**
     * Set Leave_Percentage value
     * @param float $leave_Percentage
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setLeave_Percentage($leave_Percentage = null)
    {
        // validation for constraint: float
        if (!is_null($leave_Percentage) && !(is_float($leave_Percentage) || is_numeric($leave_Percentage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($leave_Percentage, true), gettype($leave_Percentage)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($leave_Percentage) && mb_strlen(mb_substr($leave_Percentage, mb_strpos($leave_Percentage, '.') + 1)) > 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($leave_Percentage, true), mb_strlen(mb_substr($leave_Percentage, mb_strpos($leave_Percentage, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($leave_Percentage) && $leave_Percentage < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($leave_Percentage, true)), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($leave_Percentage) && mb_strlen(preg_replace('/(\D)/', '', $leave_Percentage)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($leave_Percentage, true), mb_strlen(preg_replace('/(\D)/', '', $leave_Percentage))), __LINE__);
        }
        $this->Leave_Percentage = $leave_Percentage;
        return $this;
    }
    /**
     * Get Week_of_Confinement value
     * @return string|null
     */
    public function getWeek_of_Confinement()
    {
        return $this->Week_of_Confinement;
    }
    /**
     * Set Week_of_Confinement value
     * @param string $week_of_Confinement
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setWeek_of_Confinement($week_of_Confinement = null)
    {
        // validation for constraint: string
        if (!is_null($week_of_Confinement) && !is_string($week_of_Confinement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($week_of_Confinement, true), gettype($week_of_Confinement)), __LINE__);
        }
        $this->Week_of_Confinement = $week_of_Confinement;
        return $this;
    }
    /**
     * Get Leave_Entitlement_Override value
     * @return float|null
     */
    public function getLeave_Entitlement_Override()
    {
        return $this->Leave_Entitlement_Override;
    }
    /**
     * Set Leave_Entitlement_Override value
     * @param float $leave_Entitlement_Override
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setLeave_Entitlement_Override($leave_Entitlement_Override = null)
    {
        // validation for constraint: float
        if (!is_null($leave_Entitlement_Override) && !(is_float($leave_Entitlement_Override) || is_numeric($leave_Entitlement_Override))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($leave_Entitlement_Override, true), gettype($leave_Entitlement_Override)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($leave_Entitlement_Override) && mb_strlen(mb_substr($leave_Entitlement_Override, mb_strpos($leave_Entitlement_Override, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($leave_Entitlement_Override, true), mb_strlen(mb_substr($leave_Entitlement_Override, mb_strpos($leave_Entitlement_Override, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($leave_Entitlement_Override) && mb_strlen(preg_replace('/(\D)/', '', $leave_Entitlement_Override)) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($leave_Entitlement_Override, true), mb_strlen(preg_replace('/(\D)/', '', $leave_Entitlement_Override))), __LINE__);
        }
        $this->Leave_Entitlement_Override = $leave_Entitlement_Override;
        return $this;
    }
    /**
     * Get Date_of_Recall value
     * @return string|null
     */
    public function getDate_of_Recall()
    {
        return $this->Date_of_Recall;
    }
    /**
     * Set Date_of_Recall value
     * @param string $date_of_Recall
     * @return \StructType\Leave_Request_Additional_FieldsType
     */
    public function setDate_of_Recall($date_of_Recall = null)
    {
        // validation for constraint: string
        if (!is_null($date_of_Recall) && !is_string($date_of_Recall)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date_of_Recall, true), gettype($date_of_Recall)), __LINE__);
        }
        $this->Date_of_Recall = $date_of_Recall;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Leave_Request_Additional_FieldsType
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
