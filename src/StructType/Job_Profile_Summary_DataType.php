<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_Summary_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the details of a Job Profile.
 * @subpackage Structs
 */
class Job_Profile_Summary_DataType extends AbstractStructBase
{
    /**
     * The Job_Profile_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the job profile.
     * - minOccurs: 0
     * @var \StructType\Job_ProfileObjectType
     */
    public $Job_Profile_Reference;
    /**
     * The Job_Profile_Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the job profile.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Profile_Name;
    /**
     * The Management_Level_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the management level.
     * - minOccurs: 0
     * @var \StructType\Management_LevelObjectType
     */
    public $Management_Level_Reference;
    /**
     * The Job_Category_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the job category.
     * - minOccurs: 0
     * @var \StructType\Job_CategoryObjectType
     */
    public $Job_Category_Reference;
    /**
     * The Job_Family_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the job family.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_Family_BaseObjectType[]
     */
    public $Job_Family_Reference;
    /**
     * The Work_Shift_Required
     * Meta information extracted from the WSDL
     * - documentation: A boolean attribute that returns true if a work shift is required on the position where this job profile is used.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Work_Shift_Required;
    /**
     * The Job_Profile_Exempt_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_Profile_Exempt_DataType[]
     */
    public $Job_Profile_Exempt_Data;
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
     * - documentation: A unique identifier for the difficulty to fill.
     * - minOccurs: 0
     * @var \StructType\Difficulty_to_FillObjectType
     */
    public $Difficulty_to_Fill_Reference;
    /**
     * Constructor method for Job_Profile_Summary_DataType
     * @uses Job_Profile_Summary_DataType::setJob_Profile_Reference()
     * @uses Job_Profile_Summary_DataType::setJob_Profile_Name()
     * @uses Job_Profile_Summary_DataType::setManagement_Level_Reference()
     * @uses Job_Profile_Summary_DataType::setJob_Category_Reference()
     * @uses Job_Profile_Summary_DataType::setJob_Family_Reference()
     * @uses Job_Profile_Summary_DataType::setWork_Shift_Required()
     * @uses Job_Profile_Summary_DataType::setJob_Profile_Exempt_Data()
     * @uses Job_Profile_Summary_DataType::setCritical_Job()
     * @uses Job_Profile_Summary_DataType::setDifficulty_to_Fill_Reference()
     * @param \StructType\Job_ProfileObjectType $job_Profile_Reference
     * @param string $job_Profile_Name
     * @param \StructType\Management_LevelObjectType $management_Level_Reference
     * @param \StructType\Job_CategoryObjectType $job_Category_Reference
     * @param \StructType\Job_Family_BaseObjectType[] $job_Family_Reference
     * @param bool $work_Shift_Required
     * @param \StructType\Job_Profile_Exempt_DataType[] $job_Profile_Exempt_Data
     * @param bool $critical_Job
     * @param \StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference
     */
    public function __construct(\StructType\Job_ProfileObjectType $job_Profile_Reference = null, $job_Profile_Name = null, \StructType\Management_LevelObjectType $management_Level_Reference = null, \StructType\Job_CategoryObjectType $job_Category_Reference = null, array $job_Family_Reference = array(), $work_Shift_Required = null, array $job_Profile_Exempt_Data = array(), $critical_Job = null, \StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference = null)
    {
        $this
            ->setJob_Profile_Reference($job_Profile_Reference)
            ->setJob_Profile_Name($job_Profile_Name)
            ->setManagement_Level_Reference($management_Level_Reference)
            ->setJob_Category_Reference($job_Category_Reference)
            ->setJob_Family_Reference($job_Family_Reference)
            ->setWork_Shift_Required($work_Shift_Required)
            ->setJob_Profile_Exempt_Data($job_Profile_Exempt_Data)
            ->setCritical_Job($critical_Job)
            ->setDifficulty_to_Fill_Reference($difficulty_to_Fill_Reference);
    }
    /**
     * Get Job_Profile_Reference value
     * @return \StructType\Job_ProfileObjectType|null
     */
    public function getJob_Profile_Reference()
    {
        return $this->Job_Profile_Reference;
    }
    /**
     * Set Job_Profile_Reference value
     * @param \StructType\Job_ProfileObjectType $job_Profile_Reference
     * @return \StructType\Job_Profile_Summary_DataType
     */
    public function setJob_Profile_Reference(\StructType\Job_ProfileObjectType $job_Profile_Reference = null)
    {
        $this->Job_Profile_Reference = $job_Profile_Reference;
        return $this;
    }
    /**
     * Get Job_Profile_Name value
     * @return string|null
     */
    public function getJob_Profile_Name()
    {
        return $this->Job_Profile_Name;
    }
    /**
     * Set Job_Profile_Name value
     * @param string $job_Profile_Name
     * @return \StructType\Job_Profile_Summary_DataType
     */
    public function setJob_Profile_Name($job_Profile_Name = null)
    {
        // validation for constraint: string
        if (!is_null($job_Profile_Name) && !is_string($job_Profile_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Profile_Name, true), gettype($job_Profile_Name)), __LINE__);
        }
        $this->Job_Profile_Name = $job_Profile_Name;
        return $this;
    }
    /**
     * Get Management_Level_Reference value
     * @return \StructType\Management_LevelObjectType|null
     */
    public function getManagement_Level_Reference()
    {
        return $this->Management_Level_Reference;
    }
    /**
     * Set Management_Level_Reference value
     * @param \StructType\Management_LevelObjectType $management_Level_Reference
     * @return \StructType\Job_Profile_Summary_DataType
     */
    public function setManagement_Level_Reference(\StructType\Management_LevelObjectType $management_Level_Reference = null)
    {
        $this->Management_Level_Reference = $management_Level_Reference;
        return $this;
    }
    /**
     * Get Job_Category_Reference value
     * @return \StructType\Job_CategoryObjectType|null
     */
    public function getJob_Category_Reference()
    {
        return $this->Job_Category_Reference;
    }
    /**
     * Set Job_Category_Reference value
     * @param \StructType\Job_CategoryObjectType $job_Category_Reference
     * @return \StructType\Job_Profile_Summary_DataType
     */
    public function setJob_Category_Reference(\StructType\Job_CategoryObjectType $job_Category_Reference = null)
    {
        $this->Job_Category_Reference = $job_Category_Reference;
        return $this;
    }
    /**
     * Get Job_Family_Reference value
     * @return \StructType\Job_Family_BaseObjectType[]|null
     */
    public function getJob_Family_Reference()
    {
        return $this->Job_Family_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Family_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Family_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Family_ReferenceForArrayConstraintsFromSetJob_Family_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Summary_DataTypeJob_Family_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Summary_DataTypeJob_Family_ReferenceItem instanceof \StructType\Job_Family_BaseObjectType) {
                $invalidValues[] = is_object($job_Profile_Summary_DataTypeJob_Family_ReferenceItem) ? get_class($job_Profile_Summary_DataTypeJob_Family_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Summary_DataTypeJob_Family_ReferenceItem), var_export($job_Profile_Summary_DataTypeJob_Family_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Family_Reference property can only contain items of type \StructType\Job_Family_BaseObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Family_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Family_BaseObjectType[] $job_Family_Reference
     * @return \StructType\Job_Profile_Summary_DataType
     */
    public function setJob_Family_Reference(array $job_Family_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Family_ReferenceArrayErrorMessage = self::validateJob_Family_ReferenceForArrayConstraintsFromSetJob_Family_Reference($job_Family_Reference))) {
            throw new \InvalidArgumentException($job_Family_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Job_Family_Reference = $job_Family_Reference;
        return $this;
    }
    /**
     * Add item to Job_Family_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Family_BaseObjectType $item
     * @return \StructType\Job_Profile_Summary_DataType
     */
    public function addToJob_Family_Reference(\StructType\Job_Family_BaseObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_Family_BaseObjectType) {
            throw new \InvalidArgumentException(sprintf('The Job_Family_Reference property can only contain items of type \StructType\Job_Family_BaseObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Family_Reference[] = $item;
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
     * @return \StructType\Job_Profile_Summary_DataType
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
     * Get Job_Profile_Exempt_Data value
     * @return \StructType\Job_Profile_Exempt_DataType[]|null
     */
    public function getJob_Profile_Exempt_Data()
    {
        return $this->Job_Profile_Exempt_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Profile_Exempt_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Profile_Exempt_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Profile_Exempt_DataForArrayConstraintsFromSetJob_Profile_Exempt_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Summary_DataTypeJob_Profile_Exempt_DataItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Summary_DataTypeJob_Profile_Exempt_DataItem instanceof \StructType\Job_Profile_Exempt_DataType) {
                $invalidValues[] = is_object($job_Profile_Summary_DataTypeJob_Profile_Exempt_DataItem) ? get_class($job_Profile_Summary_DataTypeJob_Profile_Exempt_DataItem) : sprintf('%s(%s)', gettype($job_Profile_Summary_DataTypeJob_Profile_Exempt_DataItem), var_export($job_Profile_Summary_DataTypeJob_Profile_Exempt_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Profile_Exempt_Data property can only contain items of type \StructType\Job_Profile_Exempt_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Profile_Exempt_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Profile_Exempt_DataType[] $job_Profile_Exempt_Data
     * @return \StructType\Job_Profile_Summary_DataType
     */
    public function setJob_Profile_Exempt_Data(array $job_Profile_Exempt_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Profile_Exempt_DataArrayErrorMessage = self::validateJob_Profile_Exempt_DataForArrayConstraintsFromSetJob_Profile_Exempt_Data($job_Profile_Exempt_Data))) {
            throw new \InvalidArgumentException($job_Profile_Exempt_DataArrayErrorMessage, __LINE__);
        }
        $this->Job_Profile_Exempt_Data = $job_Profile_Exempt_Data;
        return $this;
    }
    /**
     * Add item to Job_Profile_Exempt_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Profile_Exempt_DataType $item
     * @return \StructType\Job_Profile_Summary_DataType
     */
    public function addToJob_Profile_Exempt_Data(\StructType\Job_Profile_Exempt_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_Profile_Exempt_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_Profile_Exempt_Data property can only contain items of type \StructType\Job_Profile_Exempt_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Profile_Exempt_Data[] = $item;
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
     * @return \StructType\Job_Profile_Summary_DataType
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
     * @return \StructType\Difficulty_to_FillObjectType|null
     */
    public function getDifficulty_to_Fill_Reference()
    {
        return $this->Difficulty_to_Fill_Reference;
    }
    /**
     * Set Difficulty_to_Fill_Reference value
     * @param \StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference
     * @return \StructType\Job_Profile_Summary_DataType
     */
    public function setDifficulty_to_Fill_Reference(\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference = null)
    {
        $this->Difficulty_to_Fill_Reference = $difficulty_to_Fill_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Profile_Summary_DataType
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
