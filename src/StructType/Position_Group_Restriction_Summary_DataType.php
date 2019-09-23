<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Position_Group_Restriction_Summary_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for restriction data for openings for all staffing models.
 * @subpackage Structs
 */
class Position_Group_Restriction_Summary_DataType extends AbstractStructBase
{
    /**
     * The Availability_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the opening is available.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Availability_Date;
    /**
     * The Earliest_Hire_Date
     * Meta information extracted from the WSDL
     * - documentation: Earliest date that a worker can be hired/contracted into this opening.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Earliest_Hire_Date;
    /**
     * The Job_Family_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference(s) to the job families that a worker being hired/contracted using this opening can use.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_Family_BaseObjectType[]
     */
    public $Job_Family_Reference;
    /**
     * The Job_Profile_Restriction_Summary_Data
     * Meta information extracted from the WSDL
     * - documentation: Reference(s) (and additional data) to the job profiles that a worker being hired/contracted using this opening can use.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_Profile_Summary_DataType[]
     */
    public $Job_Profile_Restriction_Summary_Data;
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference(s) to the location that a worker being hired/contracted using this opening can use.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\LocationObjectType[]
     */
    public $Location_Reference;
    /**
     * The Worker_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the worker type that a worker being hired/contracted using this opening can use.
     * - minOccurs: 0
     * @var \StructType\Worker_TypeObjectType
     */
    public $Worker_Type_Reference;
    /**
     * The Time_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the time type that a worker being hired/contracted using this opening can use.
     * - minOccurs: 0
     * @var \StructType\Position_Time_TypeObjectType
     */
    public $Time_Type_Reference;
    /**
     * The Position_Worker_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference(s) to the position worker types that the position is restricted by (e.g., Regular, Contractor, Temporary).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Position_Worker_TypeObjectType[]
     */
    public $Position_Worker_Type_Reference;
    /**
     * Constructor method for Position_Group_Restriction_Summary_DataType
     * @uses Position_Group_Restriction_Summary_DataType::setAvailability_Date()
     * @uses Position_Group_Restriction_Summary_DataType::setEarliest_Hire_Date()
     * @uses Position_Group_Restriction_Summary_DataType::setJob_Family_Reference()
     * @uses Position_Group_Restriction_Summary_DataType::setJob_Profile_Restriction_Summary_Data()
     * @uses Position_Group_Restriction_Summary_DataType::setLocation_Reference()
     * @uses Position_Group_Restriction_Summary_DataType::setWorker_Type_Reference()
     * @uses Position_Group_Restriction_Summary_DataType::setTime_Type_Reference()
     * @uses Position_Group_Restriction_Summary_DataType::setPosition_Worker_Type_Reference()
     * @param string $availability_Date
     * @param string $earliest_Hire_Date
     * @param \StructType\Job_Family_BaseObjectType[] $job_Family_Reference
     * @param \StructType\Job_Profile_Summary_DataType[] $job_Profile_Restriction_Summary_Data
     * @param \StructType\LocationObjectType[] $location_Reference
     * @param \StructType\Worker_TypeObjectType $worker_Type_Reference
     * @param \StructType\Position_Time_TypeObjectType $time_Type_Reference
     * @param \StructType\Position_Worker_TypeObjectType[] $position_Worker_Type_Reference
     */
    public function __construct($availability_Date = null, $earliest_Hire_Date = null, array $job_Family_Reference = array(), array $job_Profile_Restriction_Summary_Data = array(), array $location_Reference = array(), \StructType\Worker_TypeObjectType $worker_Type_Reference = null, \StructType\Position_Time_TypeObjectType $time_Type_Reference = null, array $position_Worker_Type_Reference = array())
    {
        $this
            ->setAvailability_Date($availability_Date)
            ->setEarliest_Hire_Date($earliest_Hire_Date)
            ->setJob_Family_Reference($job_Family_Reference)
            ->setJob_Profile_Restriction_Summary_Data($job_Profile_Restriction_Summary_Data)
            ->setLocation_Reference($location_Reference)
            ->setWorker_Type_Reference($worker_Type_Reference)
            ->setTime_Type_Reference($time_Type_Reference)
            ->setPosition_Worker_Type_Reference($position_Worker_Type_Reference);
    }
    /**
     * Get Availability_Date value
     * @return string|null
     */
    public function getAvailability_Date()
    {
        return $this->Availability_Date;
    }
    /**
     * Set Availability_Date value
     * @param string $availability_Date
     * @return \StructType\Position_Group_Restriction_Summary_DataType
     */
    public function setAvailability_Date($availability_Date = null)
    {
        // validation for constraint: string
        if (!is_null($availability_Date) && !is_string($availability_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($availability_Date, true), gettype($availability_Date)), __LINE__);
        }
        $this->Availability_Date = $availability_Date;
        return $this;
    }
    /**
     * Get Earliest_Hire_Date value
     * @return string|null
     */
    public function getEarliest_Hire_Date()
    {
        return $this->Earliest_Hire_Date;
    }
    /**
     * Set Earliest_Hire_Date value
     * @param string $earliest_Hire_Date
     * @return \StructType\Position_Group_Restriction_Summary_DataType
     */
    public function setEarliest_Hire_Date($earliest_Hire_Date = null)
    {
        // validation for constraint: string
        if (!is_null($earliest_Hire_Date) && !is_string($earliest_Hire_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($earliest_Hire_Date, true), gettype($earliest_Hire_Date)), __LINE__);
        }
        $this->Earliest_Hire_Date = $earliest_Hire_Date;
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
        foreach ($values as $position_Group_Restriction_Summary_DataTypeJob_Family_ReferenceItem) {
            // validation for constraint: itemType
            if (!$position_Group_Restriction_Summary_DataTypeJob_Family_ReferenceItem instanceof \StructType\Job_Family_BaseObjectType) {
                $invalidValues[] = is_object($position_Group_Restriction_Summary_DataTypeJob_Family_ReferenceItem) ? get_class($position_Group_Restriction_Summary_DataTypeJob_Family_ReferenceItem) : sprintf('%s(%s)', gettype($position_Group_Restriction_Summary_DataTypeJob_Family_ReferenceItem), var_export($position_Group_Restriction_Summary_DataTypeJob_Family_ReferenceItem, true));
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
     * @return \StructType\Position_Group_Restriction_Summary_DataType
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
     * @return \StructType\Position_Group_Restriction_Summary_DataType
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
     * Get Job_Profile_Restriction_Summary_Data value
     * @return \StructType\Job_Profile_Summary_DataType[]|null
     */
    public function getJob_Profile_Restriction_Summary_Data()
    {
        return $this->Job_Profile_Restriction_Summary_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Profile_Restriction_Summary_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Profile_Restriction_Summary_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Profile_Restriction_Summary_DataForArrayConstraintsFromSetJob_Profile_Restriction_Summary_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $position_Group_Restriction_Summary_DataTypeJob_Profile_Restriction_Summary_DataItem) {
            // validation for constraint: itemType
            if (!$position_Group_Restriction_Summary_DataTypeJob_Profile_Restriction_Summary_DataItem instanceof \StructType\Job_Profile_Summary_DataType) {
                $invalidValues[] = is_object($position_Group_Restriction_Summary_DataTypeJob_Profile_Restriction_Summary_DataItem) ? get_class($position_Group_Restriction_Summary_DataTypeJob_Profile_Restriction_Summary_DataItem) : sprintf('%s(%s)', gettype($position_Group_Restriction_Summary_DataTypeJob_Profile_Restriction_Summary_DataItem), var_export($position_Group_Restriction_Summary_DataTypeJob_Profile_Restriction_Summary_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Profile_Restriction_Summary_Data property can only contain items of type \StructType\Job_Profile_Summary_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Profile_Restriction_Summary_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Profile_Summary_DataType[] $job_Profile_Restriction_Summary_Data
     * @return \StructType\Position_Group_Restriction_Summary_DataType
     */
    public function setJob_Profile_Restriction_Summary_Data(array $job_Profile_Restriction_Summary_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Profile_Restriction_Summary_DataArrayErrorMessage = self::validateJob_Profile_Restriction_Summary_DataForArrayConstraintsFromSetJob_Profile_Restriction_Summary_Data($job_Profile_Restriction_Summary_Data))) {
            throw new \InvalidArgumentException($job_Profile_Restriction_Summary_DataArrayErrorMessage, __LINE__);
        }
        $this->Job_Profile_Restriction_Summary_Data = $job_Profile_Restriction_Summary_Data;
        return $this;
    }
    /**
     * Add item to Job_Profile_Restriction_Summary_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Profile_Summary_DataType $item
     * @return \StructType\Position_Group_Restriction_Summary_DataType
     */
    public function addToJob_Profile_Restriction_Summary_Data(\StructType\Job_Profile_Summary_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_Profile_Summary_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_Profile_Restriction_Summary_Data property can only contain items of type \StructType\Job_Profile_Summary_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Profile_Restriction_Summary_Data[] = $item;
        return $this;
    }
    /**
     * Get Location_Reference value
     * @return \StructType\LocationObjectType[]|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_ReferenceForArrayConstraintsFromSetLocation_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $position_Group_Restriction_Summary_DataTypeLocation_ReferenceItem) {
            // validation for constraint: itemType
            if (!$position_Group_Restriction_Summary_DataTypeLocation_ReferenceItem instanceof \StructType\LocationObjectType) {
                $invalidValues[] = is_object($position_Group_Restriction_Summary_DataTypeLocation_ReferenceItem) ? get_class($position_Group_Restriction_Summary_DataTypeLocation_ReferenceItem) : sprintf('%s(%s)', gettype($position_Group_Restriction_Summary_DataTypeLocation_ReferenceItem), var_export($position_Group_Restriction_Summary_DataTypeLocation_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Reference property can only contain items of type \StructType\LocationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\LocationObjectType[] $location_Reference
     * @return \StructType\Position_Group_Restriction_Summary_DataType
     */
    public function setLocation_Reference(array $location_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($location_ReferenceArrayErrorMessage = self::validateLocation_ReferenceForArrayConstraintsFromSetLocation_Reference($location_Reference))) {
            throw new \InvalidArgumentException($location_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Add item to Location_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\LocationObjectType $item
     * @return \StructType\Position_Group_Restriction_Summary_DataType
     */
    public function addToLocation_Reference(\StructType\LocationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LocationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Reference property can only contain items of type \StructType\LocationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Reference[] = $item;
        return $this;
    }
    /**
     * Get Worker_Type_Reference value
     * @return \StructType\Worker_TypeObjectType|null
     */
    public function getWorker_Type_Reference()
    {
        return $this->Worker_Type_Reference;
    }
    /**
     * Set Worker_Type_Reference value
     * @param \StructType\Worker_TypeObjectType $worker_Type_Reference
     * @return \StructType\Position_Group_Restriction_Summary_DataType
     */
    public function setWorker_Type_Reference(\StructType\Worker_TypeObjectType $worker_Type_Reference = null)
    {
        $this->Worker_Type_Reference = $worker_Type_Reference;
        return $this;
    }
    /**
     * Get Time_Type_Reference value
     * @return \StructType\Position_Time_TypeObjectType|null
     */
    public function getTime_Type_Reference()
    {
        return $this->Time_Type_Reference;
    }
    /**
     * Set Time_Type_Reference value
     * @param \StructType\Position_Time_TypeObjectType $time_Type_Reference
     * @return \StructType\Position_Group_Restriction_Summary_DataType
     */
    public function setTime_Type_Reference(\StructType\Position_Time_TypeObjectType $time_Type_Reference = null)
    {
        $this->Time_Type_Reference = $time_Type_Reference;
        return $this;
    }
    /**
     * Get Position_Worker_Type_Reference value
     * @return \StructType\Position_Worker_TypeObjectType[]|null
     */
    public function getPosition_Worker_Type_Reference()
    {
        return $this->Position_Worker_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setPosition_Worker_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPosition_Worker_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePosition_Worker_Type_ReferenceForArrayConstraintsFromSetPosition_Worker_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $position_Group_Restriction_Summary_DataTypePosition_Worker_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$position_Group_Restriction_Summary_DataTypePosition_Worker_Type_ReferenceItem instanceof \StructType\Position_Worker_TypeObjectType) {
                $invalidValues[] = is_object($position_Group_Restriction_Summary_DataTypePosition_Worker_Type_ReferenceItem) ? get_class($position_Group_Restriction_Summary_DataTypePosition_Worker_Type_ReferenceItem) : sprintf('%s(%s)', gettype($position_Group_Restriction_Summary_DataTypePosition_Worker_Type_ReferenceItem), var_export($position_Group_Restriction_Summary_DataTypePosition_Worker_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Position_Worker_Type_Reference property can only contain items of type \StructType\Position_Worker_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Position_Worker_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Position_Worker_TypeObjectType[] $position_Worker_Type_Reference
     * @return \StructType\Position_Group_Restriction_Summary_DataType
     */
    public function setPosition_Worker_Type_Reference(array $position_Worker_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($position_Worker_Type_ReferenceArrayErrorMessage = self::validatePosition_Worker_Type_ReferenceForArrayConstraintsFromSetPosition_Worker_Type_Reference($position_Worker_Type_Reference))) {
            throw new \InvalidArgumentException($position_Worker_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Position_Worker_Type_Reference = $position_Worker_Type_Reference;
        return $this;
    }
    /**
     * Add item to Position_Worker_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Position_Worker_TypeObjectType $item
     * @return \StructType\Position_Group_Restriction_Summary_DataType
     */
    public function addToPosition_Worker_Type_Reference(\StructType\Position_Worker_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Position_Worker_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Position_Worker_Type_Reference property can only contain items of type \StructType\Position_Worker_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Position_Worker_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Position_Group_Restriction_Summary_DataType
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
