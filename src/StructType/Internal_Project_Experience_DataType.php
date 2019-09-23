<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Internal_Project_Experience_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Only one change can be in progress (the event in progress and not complete or canceled) for an internal project experience for a particular worker. | Wrapper element for the Internal Project Experience information.
 * @subpackage Structs
 */
class Internal_Project_Experience_DataType extends AbstractStructBase
{
    /**
     * The Internal_Project_Experience_ID
     * Meta information extracted from the WSDL
     * - documentation: Internal Project Experience ID. If no value is provided, a new internal project experience will be created. If a value is passed in an a corresponding internal project experience is not found, a new internal project experience will
     * be created with the provided id.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Internal_Project_Experience_ID;
    /**
     * The Remove_Internal_Project_Experience
     * Meta information extracted from the WSDL
     * - documentation: Used for inbound operations to indicate that the internal project experience should be removed for the person. Will always return false for outbound operations.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Remove_Internal_Project_Experience;
    /**
     * The Internal_Project
     * Meta information extracted from the WSDL
     * - documentation: The name of the project. Required unless the project is being removed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Internal_Project;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The project description.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Start_Date
     * Meta information extracted from the WSDL
     * - documentation: The date the project started.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Start_Date;
    /**
     * The End_Date
     * Meta information extracted from the WSDL
     * - documentation: The date the project ended.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Date;
    /**
     * The Project_Leader
     * Meta information extracted from the WSDL
     * - documentation: The project leader. This field is free entry and is not tied in any way to any employee or other person in the system.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Project_Leader;
    /**
     * Constructor method for Internal_Project_Experience_DataType
     * @uses Internal_Project_Experience_DataType::setInternal_Project_Experience_ID()
     * @uses Internal_Project_Experience_DataType::setRemove_Internal_Project_Experience()
     * @uses Internal_Project_Experience_DataType::setInternal_Project()
     * @uses Internal_Project_Experience_DataType::setDescription()
     * @uses Internal_Project_Experience_DataType::setStart_Date()
     * @uses Internal_Project_Experience_DataType::setEnd_Date()
     * @uses Internal_Project_Experience_DataType::setProject_Leader()
     * @param string $internal_Project_Experience_ID
     * @param bool $remove_Internal_Project_Experience
     * @param string $internal_Project
     * @param string $description
     * @param string $start_Date
     * @param string $end_Date
     * @param string $project_Leader
     */
    public function __construct($internal_Project_Experience_ID = null, $remove_Internal_Project_Experience = null, $internal_Project = null, $description = null, $start_Date = null, $end_Date = null, $project_Leader = null)
    {
        $this
            ->setInternal_Project_Experience_ID($internal_Project_Experience_ID)
            ->setRemove_Internal_Project_Experience($remove_Internal_Project_Experience)
            ->setInternal_Project($internal_Project)
            ->setDescription($description)
            ->setStart_Date($start_Date)
            ->setEnd_Date($end_Date)
            ->setProject_Leader($project_Leader);
    }
    /**
     * Get Internal_Project_Experience_ID value
     * @return string|null
     */
    public function getInternal_Project_Experience_ID()
    {
        return $this->Internal_Project_Experience_ID;
    }
    /**
     * Set Internal_Project_Experience_ID value
     * @param string $internal_Project_Experience_ID
     * @return \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType
     */
    public function setInternal_Project_Experience_ID($internal_Project_Experience_ID = null)
    {
        // validation for constraint: string
        if (!is_null($internal_Project_Experience_ID) && !is_string($internal_Project_Experience_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internal_Project_Experience_ID, true), gettype($internal_Project_Experience_ID)), __LINE__);
        }
        $this->Internal_Project_Experience_ID = $internal_Project_Experience_ID;
        return $this;
    }
    /**
     * Get Remove_Internal_Project_Experience value
     * @return bool|null
     */
    public function getRemove_Internal_Project_Experience()
    {
        return $this->Remove_Internal_Project_Experience;
    }
    /**
     * Set Remove_Internal_Project_Experience value
     * @param bool $remove_Internal_Project_Experience
     * @return \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType
     */
    public function setRemove_Internal_Project_Experience($remove_Internal_Project_Experience = null)
    {
        // validation for constraint: boolean
        if (!is_null($remove_Internal_Project_Experience) && !is_bool($remove_Internal_Project_Experience)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($remove_Internal_Project_Experience, true), gettype($remove_Internal_Project_Experience)), __LINE__);
        }
        $this->Remove_Internal_Project_Experience = $remove_Internal_Project_Experience;
        return $this;
    }
    /**
     * Get Internal_Project value
     * @return string|null
     */
    public function getInternal_Project()
    {
        return $this->Internal_Project;
    }
    /**
     * Set Internal_Project value
     * @param string $internal_Project
     * @return \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType
     */
    public function setInternal_Project($internal_Project = null)
    {
        // validation for constraint: string
        if (!is_null($internal_Project) && !is_string($internal_Project)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internal_Project, true), gettype($internal_Project)), __LINE__);
        }
        $this->Internal_Project = $internal_Project;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Start_Date value
     * @return string|null
     */
    public function getStart_Date()
    {
        return $this->Start_Date;
    }
    /**
     * Set Start_Date value
     * @param string $start_Date
     * @return \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType
     */
    public function setStart_Date($start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($start_Date) && !is_string($start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_Date, true), gettype($start_Date)), __LINE__);
        }
        $this->Start_Date = $start_Date;
        return $this;
    }
    /**
     * Get End_Date value
     * @return string|null
     */
    public function getEnd_Date()
    {
        return $this->End_Date;
    }
    /**
     * Set End_Date value
     * @param string $end_Date
     * @return \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType
     */
    public function setEnd_Date($end_Date = null)
    {
        // validation for constraint: string
        if (!is_null($end_Date) && !is_string($end_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_Date, true), gettype($end_Date)), __LINE__);
        }
        $this->End_Date = $end_Date;
        return $this;
    }
    /**
     * Get Project_Leader value
     * @return string|null
     */
    public function getProject_Leader()
    {
        return $this->Project_Leader;
    }
    /**
     * Set Project_Leader value
     * @param string $project_Leader
     * @return \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType
     */
    public function setProject_Leader($project_Leader = null)
    {
        // validation for constraint: string
        if (!is_null($project_Leader) && !is_string($project_Leader)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($project_Leader, true), gettype($project_Leader)), __LINE__);
        }
        $this->Project_Leader = $project_Leader;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Internal_Project_Experience_DataType
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
