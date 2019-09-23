<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Families_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request Criteria element to limit the Job Families returned based on the specific criteria. Job Families that are returned must meet all of the criteria specified.
 * @subpackage Structs
 */
class Job_Families_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Field_And_Parameter_Criteria_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType
     */
    public $Field_And_Parameter_Criteria_Data;
    /**
     * The Include_InActive_Job_Families
     * Meta information extracted from the WSDL
     * - documentation: Gives the customer the ability to have inactive job families returned
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_InActive_Job_Families;
    /**
     * Constructor method for Job_Families_Request_CriteriaType
     * @uses Job_Families_Request_CriteriaType::setField_And_Parameter_Criteria_Data()
     * @uses Job_Families_Request_CriteriaType::setInclude_InActive_Job_Families()
     * @param \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data
     * @param bool $include_InActive_Job_Families
     */
    public function __construct(\WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data = null, $include_InActive_Job_Families = null)
    {
        $this
            ->setField_And_Parameter_Criteria_Data($field_And_Parameter_Criteria_Data)
            ->setInclude_InActive_Job_Families($include_InActive_Job_Families);
    }
    /**
     * Get Field_And_Parameter_Criteria_Data value
     * @return \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType|null
     */
    public function getField_And_Parameter_Criteria_Data()
    {
        return $this->Field_And_Parameter_Criteria_Data;
    }
    /**
     * Set Field_And_Parameter_Criteria_Data value
     * @param \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data
     * @return \WorkdayWsdl\\StructType\Job_Families_Request_CriteriaType
     */
    public function setField_And_Parameter_Criteria_Data(\WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType $field_And_Parameter_Criteria_Data = null)
    {
        $this->Field_And_Parameter_Criteria_Data = $field_And_Parameter_Criteria_Data;
        return $this;
    }
    /**
     * Get Include_InActive_Job_Families value
     * @return bool|null
     */
    public function getInclude_InActive_Job_Families()
    {
        return $this->Include_InActive_Job_Families;
    }
    /**
     * Set Include_InActive_Job_Families value
     * @param bool $include_InActive_Job_Families
     * @return \WorkdayWsdl\\StructType\Job_Families_Request_CriteriaType
     */
    public function setInclude_InActive_Job_Families($include_InActive_Job_Families = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_InActive_Job_Families) && !is_bool($include_InActive_Job_Families)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_InActive_Job_Families, true), gettype($include_InActive_Job_Families)), __LINE__);
        }
        $this->Include_InActive_Job_Families = $include_InActive_Job_Families;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Families_Request_CriteriaType
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
