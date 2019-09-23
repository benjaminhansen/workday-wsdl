<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Family_Group_Job_FamilyType StructType
 * Meta information extracted from the WSDL
 * - documentation: Job Family Data. Contains the references to Job Families contained in the group. Optionally contains other data about the contained families, however this extra data is for information only and cannot be updated here.
 * @subpackage Structs
 */
class Job_Family_Group_Job_FamilyType extends AbstractStructBase
{
    /**
     * The Job_Family_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Job Family.
     * @var \StructType\Job_FamilyObjectType
     */
    public $Job_Family_Reference;
    /**
     * The Job_Family_Info_Data
     * Meta information extracted from the WSDL
     * - documentation: Optional, read-only, data about the job family. This extra information is optionally provided on the Get operation.
     * - minOccurs: 0
     * @var \StructType\Job_Family_Group_Job_Family_DataType
     */
    public $Job_Family_Info_Data;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Flag indicating that the association of the given Job Family should be removed from the group.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Job_Family_Group_Job_FamilyType
     * @uses Job_Family_Group_Job_FamilyType::setJob_Family_Reference()
     * @uses Job_Family_Group_Job_FamilyType::setJob_Family_Info_Data()
     * @uses Job_Family_Group_Job_FamilyType::setDelete()
     * @param \StructType\Job_FamilyObjectType $job_Family_Reference
     * @param \StructType\Job_Family_Group_Job_Family_DataType $job_Family_Info_Data
     * @param bool $delete
     */
    public function __construct(\StructType\Job_FamilyObjectType $job_Family_Reference = null, \StructType\Job_Family_Group_Job_Family_DataType $job_Family_Info_Data = null, $delete = null)
    {
        $this
            ->setJob_Family_Reference($job_Family_Reference)
            ->setJob_Family_Info_Data($job_Family_Info_Data)
            ->setDelete($delete);
    }
    /**
     * Get Job_Family_Reference value
     * @return \StructType\Job_FamilyObjectType|null
     */
    public function getJob_Family_Reference()
    {
        return $this->Job_Family_Reference;
    }
    /**
     * Set Job_Family_Reference value
     * @param \StructType\Job_FamilyObjectType $job_Family_Reference
     * @return \StructType\Job_Family_Group_Job_FamilyType
     */
    public function setJob_Family_Reference(\StructType\Job_FamilyObjectType $job_Family_Reference = null)
    {
        $this->Job_Family_Reference = $job_Family_Reference;
        return $this;
    }
    /**
     * Get Job_Family_Info_Data value
     * @return \StructType\Job_Family_Group_Job_Family_DataType|null
     */
    public function getJob_Family_Info_Data()
    {
        return $this->Job_Family_Info_Data;
    }
    /**
     * Set Job_Family_Info_Data value
     * @param \StructType\Job_Family_Group_Job_Family_DataType $job_Family_Info_Data
     * @return \StructType\Job_Family_Group_Job_FamilyType
     */
    public function setJob_Family_Info_Data(\StructType\Job_Family_Group_Job_Family_DataType $job_Family_Info_Data = null)
    {
        $this->Job_Family_Info_Data = $job_Family_Info_Data;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \StructType\Job_Family_Group_Job_FamilyType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Family_Group_Job_FamilyType
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
