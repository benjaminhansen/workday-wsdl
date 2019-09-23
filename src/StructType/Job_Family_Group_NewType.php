<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Family_Group_NewType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Job Family Group data.
 * @subpackage Structs
 */
class Job_Family_Group_NewType extends AbstractStructBase
{
    /**
     * The Job_Family_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Job Family Group.
     * - minOccurs: 0
     * @var \StructType\Job_FamilyObjectType
     */
    public $Job_Family_Group_Reference;
    /**
     * The Job_Family_Group_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the detailed information about an Job Family Group.
     * - minOccurs: 0
     * @var \StructType\Job_Family_Group_DataType
     */
    public $Job_Family_Group_Data;
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
     * Constructor method for Job_Family_Group_NewType
     * @uses Job_Family_Group_NewType::setJob_Family_Group_Reference()
     * @uses Job_Family_Group_NewType::setJob_Family_Group_Data()
     * @uses Job_Family_Group_NewType::setAs_Of_Date()
     * @uses Job_Family_Group_NewType::setAs_Of_Moment()
     * @param \StructType\Job_FamilyObjectType $job_Family_Group_Reference
     * @param \StructType\Job_Family_Group_DataType $job_Family_Group_Data
     * @param string $as_Of_Date
     * @param string $as_Of_Moment
     */
    public function __construct(\StructType\Job_FamilyObjectType $job_Family_Group_Reference = null, \StructType\Job_Family_Group_DataType $job_Family_Group_Data = null, $as_Of_Date = null, $as_Of_Moment = null)
    {
        $this
            ->setJob_Family_Group_Reference($job_Family_Group_Reference)
            ->setJob_Family_Group_Data($job_Family_Group_Data)
            ->setAs_Of_Date($as_Of_Date)
            ->setAs_Of_Moment($as_Of_Moment);
    }
    /**
     * Get Job_Family_Group_Reference value
     * @return \StructType\Job_FamilyObjectType|null
     */
    public function getJob_Family_Group_Reference()
    {
        return $this->Job_Family_Group_Reference;
    }
    /**
     * Set Job_Family_Group_Reference value
     * @param \StructType\Job_FamilyObjectType $job_Family_Group_Reference
     * @return \StructType\Job_Family_Group_NewType
     */
    public function setJob_Family_Group_Reference(\StructType\Job_FamilyObjectType $job_Family_Group_Reference = null)
    {
        $this->Job_Family_Group_Reference = $job_Family_Group_Reference;
        return $this;
    }
    /**
     * Get Job_Family_Group_Data value
     * @return \StructType\Job_Family_Group_DataType|null
     */
    public function getJob_Family_Group_Data()
    {
        return $this->Job_Family_Group_Data;
    }
    /**
     * Set Job_Family_Group_Data value
     * @param \StructType\Job_Family_Group_DataType $job_Family_Group_Data
     * @return \StructType\Job_Family_Group_NewType
     */
    public function setJob_Family_Group_Data(\StructType\Job_Family_Group_DataType $job_Family_Group_Data = null)
    {
        $this->Job_Family_Group_Data = $job_Family_Group_Data;
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
     * @return \StructType\Job_Family_Group_NewType
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
     * @return \StructType\Job_Family_Group_NewType
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
     * @return \StructType\Job_Family_Group_NewType
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
