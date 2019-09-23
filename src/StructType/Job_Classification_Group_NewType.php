<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Classification_Group_NewType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing an instance of Job Classification Group and its associated data.
 * @subpackage Structs
 */
class Job_Classification_Group_NewType extends AbstractStructBase
{
    /**
     * The Job_Classification_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the Job Classification Group.
     * - minOccurs: 0
     * @var \StructType\Job_Classification_GroupObjectType
     */
    public $Job_Classification_Group_Reference;
    /**
     * The Job_Classification_Group_Name_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing Job Classification Group data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_Classification_Group_Reference_DataType[]
     */
    public $Job_Classification_Group_Name_Data;
    /**
     * The Job_Classification_Group_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the detailed information about a Job Classification Group.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_Classification_Group_DataType[]
     */
    public $Job_Classification_Group_Data;
    /**
     * The As_Of_Date
     * Meta information extracted from the WSDL
     * - documentation: Defines the As Of Date to be used for any application effective dated data within the Workday system. For "Request" elements, the "As Of Date" determines what data is to be used within search logic or returned in a response. For
     * "Response" elements, this element will echo "As Of Date" entered in the "Request" element or the default "As Of Date" if omitted..
     * @var string
     */
    public $As_Of_Date;
    /**
     * The As_Of_Moment
     * Meta information extracted from the WSDL
     * - documentation: Defines the latest moment (e.g. datetime) data was entered into the Workday system. For "Request" elements, the "As Of Moment" determines what data is to be used within search logic or returned in a response. For "Response" elements,
     * this element will echo "As Of Moment" entered in the "Request" element or the default "As Of Moment" if omitted.
     * @var string
     */
    public $As_Of_Moment;
    /**
     * Constructor method for Job_Classification_Group_NewType
     * @uses Job_Classification_Group_NewType::setJob_Classification_Group_Reference()
     * @uses Job_Classification_Group_NewType::setJob_Classification_Group_Name_Data()
     * @uses Job_Classification_Group_NewType::setJob_Classification_Group_Data()
     * @uses Job_Classification_Group_NewType::setAs_Of_Date()
     * @uses Job_Classification_Group_NewType::setAs_Of_Moment()
     * @param \StructType\Job_Classification_GroupObjectType $job_Classification_Group_Reference
     * @param \StructType\Job_Classification_Group_Reference_DataType[] $job_Classification_Group_Name_Data
     * @param \StructType\Job_Classification_Group_DataType[] $job_Classification_Group_Data
     * @param string $as_Of_Date
     * @param string $as_Of_Moment
     */
    public function __construct(\StructType\Job_Classification_GroupObjectType $job_Classification_Group_Reference = null, array $job_Classification_Group_Name_Data = array(), array $job_Classification_Group_Data = array(), $as_Of_Date = null, $as_Of_Moment = null)
    {
        $this
            ->setJob_Classification_Group_Reference($job_Classification_Group_Reference)
            ->setJob_Classification_Group_Name_Data($job_Classification_Group_Name_Data)
            ->setJob_Classification_Group_Data($job_Classification_Group_Data)
            ->setAs_Of_Date($as_Of_Date)
            ->setAs_Of_Moment($as_Of_Moment);
    }
    /**
     * Get Job_Classification_Group_Reference value
     * @return \StructType\Job_Classification_GroupObjectType|null
     */
    public function getJob_Classification_Group_Reference()
    {
        return $this->Job_Classification_Group_Reference;
    }
    /**
     * Set Job_Classification_Group_Reference value
     * @param \StructType\Job_Classification_GroupObjectType $job_Classification_Group_Reference
     * @return \StructType\Job_Classification_Group_NewType
     */
    public function setJob_Classification_Group_Reference(\StructType\Job_Classification_GroupObjectType $job_Classification_Group_Reference = null)
    {
        $this->Job_Classification_Group_Reference = $job_Classification_Group_Reference;
        return $this;
    }
    /**
     * Get Job_Classification_Group_Name_Data value
     * @return \StructType\Job_Classification_Group_Reference_DataType[]|null
     */
    public function getJob_Classification_Group_Name_Data()
    {
        return $this->Job_Classification_Group_Name_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Classification_Group_Name_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Classification_Group_Name_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Classification_Group_Name_DataForArrayConstraintsFromSetJob_Classification_Group_Name_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Classification_Group_NewTypeJob_Classification_Group_Name_DataItem) {
            // validation for constraint: itemType
            if (!$job_Classification_Group_NewTypeJob_Classification_Group_Name_DataItem instanceof \StructType\Job_Classification_Group_Reference_DataType) {
                $invalidValues[] = is_object($job_Classification_Group_NewTypeJob_Classification_Group_Name_DataItem) ? get_class($job_Classification_Group_NewTypeJob_Classification_Group_Name_DataItem) : sprintf('%s(%s)', gettype($job_Classification_Group_NewTypeJob_Classification_Group_Name_DataItem), var_export($job_Classification_Group_NewTypeJob_Classification_Group_Name_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Classification_Group_Name_Data property can only contain items of type \StructType\Job_Classification_Group_Reference_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Classification_Group_Name_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Classification_Group_Reference_DataType[] $job_Classification_Group_Name_Data
     * @return \StructType\Job_Classification_Group_NewType
     */
    public function setJob_Classification_Group_Name_Data(array $job_Classification_Group_Name_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Classification_Group_Name_DataArrayErrorMessage = self::validateJob_Classification_Group_Name_DataForArrayConstraintsFromSetJob_Classification_Group_Name_Data($job_Classification_Group_Name_Data))) {
            throw new \InvalidArgumentException($job_Classification_Group_Name_DataArrayErrorMessage, __LINE__);
        }
        $this->Job_Classification_Group_Name_Data = $job_Classification_Group_Name_Data;
        return $this;
    }
    /**
     * Add item to Job_Classification_Group_Name_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Classification_Group_Reference_DataType $item
     * @return \StructType\Job_Classification_Group_NewType
     */
    public function addToJob_Classification_Group_Name_Data(\StructType\Job_Classification_Group_Reference_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_Classification_Group_Reference_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_Classification_Group_Name_Data property can only contain items of type \StructType\Job_Classification_Group_Reference_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Classification_Group_Name_Data[] = $item;
        return $this;
    }
    /**
     * Get Job_Classification_Group_Data value
     * @return \StructType\Job_Classification_Group_DataType[]|null
     */
    public function getJob_Classification_Group_Data()
    {
        return $this->Job_Classification_Group_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Classification_Group_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Classification_Group_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Classification_Group_DataForArrayConstraintsFromSetJob_Classification_Group_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Classification_Group_NewTypeJob_Classification_Group_DataItem) {
            // validation for constraint: itemType
            if (!$job_Classification_Group_NewTypeJob_Classification_Group_DataItem instanceof \StructType\Job_Classification_Group_DataType) {
                $invalidValues[] = is_object($job_Classification_Group_NewTypeJob_Classification_Group_DataItem) ? get_class($job_Classification_Group_NewTypeJob_Classification_Group_DataItem) : sprintf('%s(%s)', gettype($job_Classification_Group_NewTypeJob_Classification_Group_DataItem), var_export($job_Classification_Group_NewTypeJob_Classification_Group_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Classification_Group_Data property can only contain items of type \StructType\Job_Classification_Group_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Classification_Group_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Classification_Group_DataType[] $job_Classification_Group_Data
     * @return \StructType\Job_Classification_Group_NewType
     */
    public function setJob_Classification_Group_Data(array $job_Classification_Group_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Classification_Group_DataArrayErrorMessage = self::validateJob_Classification_Group_DataForArrayConstraintsFromSetJob_Classification_Group_Data($job_Classification_Group_Data))) {
            throw new \InvalidArgumentException($job_Classification_Group_DataArrayErrorMessage, __LINE__);
        }
        $this->Job_Classification_Group_Data = $job_Classification_Group_Data;
        return $this;
    }
    /**
     * Add item to Job_Classification_Group_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Classification_Group_DataType $item
     * @return \StructType\Job_Classification_Group_NewType
     */
    public function addToJob_Classification_Group_Data(\StructType\Job_Classification_Group_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_Classification_Group_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_Classification_Group_Data property can only contain items of type \StructType\Job_Classification_Group_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Classification_Group_Data[] = $item;
        return $this;
    }
    /**
     * Get As_Of_Date value
     * @return string|null
     */
    public function getAs_Of_Date()
    {
        return $this->As_Of_Date;
    }
    /**
     * Set As_Of_Date value
     * @param string $as_Of_Date
     * @return \StructType\Job_Classification_Group_NewType
     */
    public function setAs_Of_Date($as_Of_Date = null)
    {
        // validation for constraint: string
        if (!is_null($as_Of_Date) && !is_string($as_Of_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as_Of_Date, true), gettype($as_Of_Date)), __LINE__);
        }
        $this->As_Of_Date = $as_Of_Date;
        return $this;
    }
    /**
     * Get As_Of_Moment value
     * @return string|null
     */
    public function getAs_Of_Moment()
    {
        return $this->As_Of_Moment;
    }
    /**
     * Set As_Of_Moment value
     * @param string $as_Of_Moment
     * @return \StructType\Job_Classification_Group_NewType
     */
    public function setAs_Of_Moment($as_Of_Moment = null)
    {
        // validation for constraint: string
        if (!is_null($as_Of_Moment) && !is_string($as_Of_Moment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as_Of_Moment, true), gettype($as_Of_Moment)), __LINE__);
        }
        $this->As_Of_Moment = $as_Of_Moment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Classification_Group_NewType
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
