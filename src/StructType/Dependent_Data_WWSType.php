<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dependent_Data_WWSType StructType
 * Meta information extracted from the WSDL
 * - documentation: Dependent Data: ID subelements of Integration ID Data cannot reference multiple Dependents. | Encapsulating element containing all Dependent data.
 * @subpackage Structs
 */
class Dependent_Data_WWSType extends AbstractStructBase
{
    /**
     * The Integration_ID_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Integration_ID_DataType
     */
    public $Integration_ID_Data;
    /**
     * The Dependent_Educational_Institution
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying name of Dependent's Educational Institution.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Dependent_Educational_Institution;
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
     * The Dependent_Date_of_Death
     * Meta information extracted from the WSDL
     * - documentation: Date of Death of dependent.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Dependent_Date_of_Death;
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
     * The Court_Order_Replacement_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[]
     */
    public $Court_Order_Replacement_Data;
    /**
     * Constructor method for Dependent_Data_WWSType
     * @uses Dependent_Data_WWSType::setIntegration_ID_Data()
     * @uses Dependent_Data_WWSType::setDependent_Educational_Institution()
     * @uses Dependent_Data_WWSType::setFull_time_Student()
     * @uses Dependent_Data_WWSType::setStudent_Status_Start_Date()
     * @uses Dependent_Data_WWSType::setStudent_Status_End_Date()
     * @uses Dependent_Data_WWSType::setDependent_Date_of_Death()
     * @uses Dependent_Data_WWSType::setDisabled()
     * @uses Dependent_Data_WWSType::setCourt_Order_Replacement_Data()
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @param string $dependent_Educational_Institution
     * @param bool $full_time_Student
     * @param string $student_Status_Start_Date
     * @param string $student_Status_End_Date
     * @param string $dependent_Date_of_Death
     * @param bool $disabled
     * @param \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[] $court_Order_Replacement_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null, $dependent_Educational_Institution = null, $full_time_Student = null, $student_Status_Start_Date = null, $student_Status_End_Date = null, $dependent_Date_of_Death = null, $disabled = null, array $court_Order_Replacement_Data = array())
    {
        $this
            ->setIntegration_ID_Data($integration_ID_Data)
            ->setDependent_Educational_Institution($dependent_Educational_Institution)
            ->setFull_time_Student($full_time_Student)
            ->setStudent_Status_Start_Date($student_Status_Start_Date)
            ->setStudent_Status_End_Date($student_Status_End_Date)
            ->setDependent_Date_of_Death($dependent_Date_of_Death)
            ->setDisabled($disabled)
            ->setCourt_Order_Replacement_Data($court_Order_Replacement_Data);
    }
    /**
     * Get Integration_ID_Data value
     * @return \WorkdayWsdl\\StructType\External_Integration_ID_DataType|null
     */
    public function getIntegration_ID_Data()
    {
        return $this->Integration_ID_Data;
    }
    /**
     * Set Integration_ID_Data value
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @return \WorkdayWsdl\\StructType\Dependent_Data_WWSType
     */
    public function setIntegration_ID_Data(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null)
    {
        $this->Integration_ID_Data = $integration_ID_Data;
        return $this;
    }
    /**
     * Get Dependent_Educational_Institution value
     * @return string|null
     */
    public function getDependent_Educational_Institution()
    {
        return $this->Dependent_Educational_Institution;
    }
    /**
     * Set Dependent_Educational_Institution value
     * @param string $dependent_Educational_Institution
     * @return \WorkdayWsdl\\StructType\Dependent_Data_WWSType
     */
    public function setDependent_Educational_Institution($dependent_Educational_Institution = null)
    {
        // validation for constraint: string
        if (!is_null($dependent_Educational_Institution) && !is_string($dependent_Educational_Institution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dependent_Educational_Institution, true), gettype($dependent_Educational_Institution)), __LINE__);
        }
        $this->Dependent_Educational_Institution = $dependent_Educational_Institution;
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
     * @return \WorkdayWsdl\\StructType\Dependent_Data_WWSType
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
     * @return \WorkdayWsdl\\StructType\Dependent_Data_WWSType
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
     * @return \WorkdayWsdl\\StructType\Dependent_Data_WWSType
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
     * Get Dependent_Date_of_Death value
     * @return string|null
     */
    public function getDependent_Date_of_Death()
    {
        return $this->Dependent_Date_of_Death;
    }
    /**
     * Set Dependent_Date_of_Death value
     * @param string $dependent_Date_of_Death
     * @return \WorkdayWsdl\\StructType\Dependent_Data_WWSType
     */
    public function setDependent_Date_of_Death($dependent_Date_of_Death = null)
    {
        // validation for constraint: string
        if (!is_null($dependent_Date_of_Death) && !is_string($dependent_Date_of_Death)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dependent_Date_of_Death, true), gettype($dependent_Date_of_Death)), __LINE__);
        }
        $this->Dependent_Date_of_Death = $dependent_Date_of_Death;
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
     * @return \WorkdayWsdl\\StructType\Dependent_Data_WWSType
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
     * Get Court_Order_Replacement_Data value
     * @return \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[]|null
     */
    public function getCourt_Order_Replacement_Data()
    {
        return $this->Court_Order_Replacement_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCourt_Order_Replacement_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCourt_Order_Replacement_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCourt_Order_Replacement_DataForArrayConstraintsFromSetCourt_Order_Replacement_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $dependent_Data_WWSTypeCourt_Order_Replacement_DataItem) {
            // validation for constraint: itemType
            if (!$dependent_Data_WWSTypeCourt_Order_Replacement_DataItem instanceof \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType) {
                $invalidValues[] = is_object($dependent_Data_WWSTypeCourt_Order_Replacement_DataItem) ? get_class($dependent_Data_WWSTypeCourt_Order_Replacement_DataItem) : sprintf('%s(%s)', gettype($dependent_Data_WWSTypeCourt_Order_Replacement_DataItem), var_export($dependent_Data_WWSTypeCourt_Order_Replacement_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Court_Order_Replacement_Data property can only contain items of type \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Court_Order_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType[] $court_Order_Replacement_Data
     * @return \WorkdayWsdl\\StructType\Dependent_Data_WWSType
     */
    public function setCourt_Order_Replacement_Data(array $court_Order_Replacement_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($court_Order_Replacement_DataArrayErrorMessage = self::validateCourt_Order_Replacement_DataForArrayConstraintsFromSetCourt_Order_Replacement_Data($court_Order_Replacement_Data))) {
            throw new \InvalidArgumentException($court_Order_Replacement_DataArrayErrorMessage, __LINE__);
        }
        $this->Court_Order_Replacement_Data = $court_Order_Replacement_Data;
        return $this;
    }
    /**
     * Add item to Court_Order_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType $item
     * @return \WorkdayWsdl\\StructType\Dependent_Data_WWSType
     */
    public function addToCourt_Order_Replacement_Data(\WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Court_Order_Replacement_Data property can only contain items of type \WorkdayWsdl\\StructType\Qualified_Domestic_Relations_Order_Replacement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Court_Order_Replacement_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Dependent_Data_WWSType
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
