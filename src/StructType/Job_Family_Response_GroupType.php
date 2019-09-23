<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Family_Response_GroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: Job Family Response Group
 * @subpackage Structs
 */
class Job_Family_Response_GroupType extends AbstractStructBase
{
    /**
     * The Include_Reference
     * Meta information extracted from the WSDL
     * - documentation: Flag indicating if the reference to the Job Family should be included. If omitted, the default is to return the references.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Reference;
    /**
     * The Include_Job_Profile_Info_Data
     * Meta information extracted from the WSDL
     * - documentation: Flag indicating whether or not to include the basic data about Job Profiles that are used by the Job Families associated with the group. Default is to not return this additional information.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Job_Profile_Info_Data;
    /**
     * Constructor method for Job_Family_Response_GroupType
     * @uses Job_Family_Response_GroupType::setInclude_Reference()
     * @uses Job_Family_Response_GroupType::setInclude_Job_Profile_Info_Data()
     * @param bool $include_Reference
     * @param bool $include_Job_Profile_Info_Data
     */
    public function __construct($include_Reference = null, $include_Job_Profile_Info_Data = null)
    {
        $this
            ->setInclude_Reference($include_Reference)
            ->setInclude_Job_Profile_Info_Data($include_Job_Profile_Info_Data);
    }
    /**
     * Get Include_Reference value
     * @return bool|null
     */
    public function getInclude_Reference()
    {
        return $this->Include_Reference;
    }
    /**
     * Set Include_Reference value
     * @param bool $include_Reference
     * @return \WorkdayWsdl\\StructType\Job_Family_Response_GroupType
     */
    public function setInclude_Reference($include_Reference = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Reference) && !is_bool($include_Reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Reference, true), gettype($include_Reference)), __LINE__);
        }
        $this->Include_Reference = $include_Reference;
        return $this;
    }
    /**
     * Get Include_Job_Profile_Info_Data value
     * @return bool|null
     */
    public function getInclude_Job_Profile_Info_Data()
    {
        return $this->Include_Job_Profile_Info_Data;
    }
    /**
     * Set Include_Job_Profile_Info_Data value
     * @param bool $include_Job_Profile_Info_Data
     * @return \WorkdayWsdl\\StructType\Job_Family_Response_GroupType
     */
    public function setInclude_Job_Profile_Info_Data($include_Job_Profile_Info_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Job_Profile_Info_Data) && !is_bool($include_Job_Profile_Info_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Job_Profile_Info_Data, true), gettype($include_Job_Profile_Info_Data)), __LINE__);
        }
        $this->Include_Job_Profile_Info_Data = $include_Job_Profile_Info_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Family_Response_GroupType
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
