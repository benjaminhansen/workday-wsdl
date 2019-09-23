<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains each Job Profile based on the Request References or Request Criteria. The data returned is the current information as of the dates in the response filter, and does not include all historical information about the job
 * profile.
 * @subpackage Structs
 */
class Job_Profile_Response_DataType extends AbstractStructBase
{
    /**
     * The Job_Profile
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Profile_Get_DataType[]
     */
    public $Job_Profile;
    /**
     * Constructor method for Job_Profile_Response_DataType
     * @uses Job_Profile_Response_DataType::setJob_Profile()
     * @param \WorkdayWsdl\\StructType\Job_Profile_Get_DataType[] $job_Profile
     */
    public function __construct(array $job_Profile = array())
    {
        $this
            ->setJob_Profile($job_Profile);
    }
    /**
     * Get Job_Profile value
     * @return \WorkdayWsdl\\StructType\Job_Profile_Get_DataType[]|null
     */
    public function getJob_Profile()
    {
        return $this->Job_Profile;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Profile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Profile method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_ProfileForArrayConstraintsFromSetJob_Profile(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Response_DataTypeJob_ProfileItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Response_DataTypeJob_ProfileItem instanceof \WorkdayWsdl\\StructType\Job_Profile_Get_DataType) {
                $invalidValues[] = is_object($job_Profile_Response_DataTypeJob_ProfileItem) ? get_class($job_Profile_Response_DataTypeJob_ProfileItem) : sprintf('%s(%s)', gettype($job_Profile_Response_DataTypeJob_ProfileItem), var_export($job_Profile_Response_DataTypeJob_ProfileItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Profile property can only contain items of type \WorkdayWsdl\\StructType\Job_Profile_Get_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Profile value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_Profile_Get_DataType[] $job_Profile
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_DataType
     */
    public function setJob_Profile(array $job_Profile = array())
    {
        // validation for constraint: array
        if ('' !== ($job_ProfileArrayErrorMessage = self::validateJob_ProfileForArrayConstraintsFromSetJob_Profile($job_Profile))) {
            throw new \InvalidArgumentException($job_ProfileArrayErrorMessage, __LINE__);
        }
        $this->Job_Profile = $job_Profile;
        return $this;
    }
    /**
     * Add item to Job_Profile value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_Profile_Get_DataType $item
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_DataType
     */
    public function addToJob_Profile(\WorkdayWsdl\\StructType\Job_Profile_Get_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_Profile_Get_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_Profile property can only contain items of type \WorkdayWsdl\\StructType\Job_Profile_Get_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Profile[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Profile_Response_DataType
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
