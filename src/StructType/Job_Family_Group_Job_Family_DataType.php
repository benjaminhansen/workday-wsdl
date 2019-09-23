<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Family_Group_Job_Family_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Info only data about a Job Family
 * @subpackage Structs
 */
class Job_Family_Group_Job_Family_DataType extends AbstractStructBase
{
    /**
     * The Job_Family_Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the Job Family.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Family_Name;
    /**
     * The Job_Family_Summary
     * Meta information extracted from the WSDL
     * - documentation: A summary description of the Job Family.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Family_Summary;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute indicating if a Job Family/Job Family Group is Inactive or not. Inactive Job Families/Groups will not appear in prompts.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Job_Profile_Info_Data
     * Meta information extracted from the WSDL
     * - documentation: Optional, Information only, Job Profile data. This data is optionally included here and cannot be updated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Profile_Summary_DataType[]
     */
    public $Job_Profile_Info_Data;
    /**
     * Constructor method for Job_Family_Group_Job_Family_DataType
     * @uses Job_Family_Group_Job_Family_DataType::setJob_Family_Name()
     * @uses Job_Family_Group_Job_Family_DataType::setJob_Family_Summary()
     * @uses Job_Family_Group_Job_Family_DataType::setInactive()
     * @uses Job_Family_Group_Job_Family_DataType::setJob_Profile_Info_Data()
     * @param string $job_Family_Name
     * @param string $job_Family_Summary
     * @param bool $inactive
     * @param \WorkdayWsdl\\StructType\Job_Profile_Summary_DataType[] $job_Profile_Info_Data
     */
    public function __construct($job_Family_Name = null, $job_Family_Summary = null, $inactive = null, array $job_Profile_Info_Data = array())
    {
        $this
            ->setJob_Family_Name($job_Family_Name)
            ->setJob_Family_Summary($job_Family_Summary)
            ->setInactive($inactive)
            ->setJob_Profile_Info_Data($job_Profile_Info_Data);
    }
    /**
     * Get Job_Family_Name value
     * @return string|null
     */
    public function getJob_Family_Name()
    {
        return $this->Job_Family_Name;
    }
    /**
     * Set Job_Family_Name value
     * @param string $job_Family_Name
     * @return \WorkdayWsdl\\StructType\Job_Family_Group_Job_Family_DataType
     */
    public function setJob_Family_Name($job_Family_Name = null)
    {
        // validation for constraint: string
        if (!is_null($job_Family_Name) && !is_string($job_Family_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Family_Name, true), gettype($job_Family_Name)), __LINE__);
        }
        $this->Job_Family_Name = $job_Family_Name;
        return $this;
    }
    /**
     * Get Job_Family_Summary value
     * @return string|null
     */
    public function getJob_Family_Summary()
    {
        return $this->Job_Family_Summary;
    }
    /**
     * Set Job_Family_Summary value
     * @param string $job_Family_Summary
     * @return \WorkdayWsdl\\StructType\Job_Family_Group_Job_Family_DataType
     */
    public function setJob_Family_Summary($job_Family_Summary = null)
    {
        // validation for constraint: string
        if (!is_null($job_Family_Summary) && !is_string($job_Family_Summary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Family_Summary, true), gettype($job_Family_Summary)), __LINE__);
        }
        $this->Job_Family_Summary = $job_Family_Summary;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \WorkdayWsdl\\StructType\Job_Family_Group_Job_Family_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Get Job_Profile_Info_Data value
     * @return \WorkdayWsdl\\StructType\Job_Profile_Summary_DataType[]|null
     */
    public function getJob_Profile_Info_Data()
    {
        return $this->Job_Profile_Info_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Profile_Info_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Profile_Info_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Profile_Info_DataForArrayConstraintsFromSetJob_Profile_Info_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Family_Group_Job_Family_DataTypeJob_Profile_Info_DataItem) {
            // validation for constraint: itemType
            if (!$job_Family_Group_Job_Family_DataTypeJob_Profile_Info_DataItem instanceof \WorkdayWsdl\\StructType\Job_Profile_Summary_DataType) {
                $invalidValues[] = is_object($job_Family_Group_Job_Family_DataTypeJob_Profile_Info_DataItem) ? get_class($job_Family_Group_Job_Family_DataTypeJob_Profile_Info_DataItem) : sprintf('%s(%s)', gettype($job_Family_Group_Job_Family_DataTypeJob_Profile_Info_DataItem), var_export($job_Family_Group_Job_Family_DataTypeJob_Profile_Info_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Profile_Info_Data property can only contain items of type \WorkdayWsdl\\StructType\Job_Profile_Summary_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Profile_Info_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_Profile_Summary_DataType[] $job_Profile_Info_Data
     * @return \WorkdayWsdl\\StructType\Job_Family_Group_Job_Family_DataType
     */
    public function setJob_Profile_Info_Data(array $job_Profile_Info_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Profile_Info_DataArrayErrorMessage = self::validateJob_Profile_Info_DataForArrayConstraintsFromSetJob_Profile_Info_Data($job_Profile_Info_Data))) {
            throw new \InvalidArgumentException($job_Profile_Info_DataArrayErrorMessage, __LINE__);
        }
        $this->Job_Profile_Info_Data = $job_Profile_Info_Data;
        return $this;
    }
    /**
     * Add item to Job_Profile_Info_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_Profile_Summary_DataType $item
     * @return \WorkdayWsdl\\StructType\Job_Family_Group_Job_Family_DataType
     */
    public function addToJob_Profile_Info_Data(\WorkdayWsdl\\StructType\Job_Profile_Summary_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_Profile_Summary_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_Profile_Info_Data property can only contain items of type \WorkdayWsdl\\StructType\Job_Profile_Summary_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Profile_Info_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Family_Group_Job_Family_DataType
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
