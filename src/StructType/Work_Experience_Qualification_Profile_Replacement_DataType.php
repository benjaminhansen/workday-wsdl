<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Experience_Qualification_Profile_Replacement_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Replacement element containing Work Experience Qualifications for the Job ProfileWhen updating a Job Profile, all Work Experiences for the Job Profile will be replaced by the submitted data. If no data is submitted, then the existing
 * Work Experiences are not changed.
 * @subpackage Structs
 */
class Work_Experience_Qualification_Profile_Replacement_DataType extends AbstractStructBase
{
    /**
     * The Worker_Experience_Reference
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the Work Experience.
     * @var \WorkdayWsdl\\StructType\Work_Experience_SkillObjectType
     */
    public $Worker_Experience_Reference;
    /**
     * The Work_Experience_Rating_Reference
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the Work Experience Rating.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Experience_RatingObjectType
     */
    public $Work_Experience_Rating_Reference;
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - documentation: If Y, Work Experience Qualification Profile is required.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Required;
    /**
     * Constructor method for
     * Work_Experience_Qualification_Profile_Replacement_DataType
     * @uses Work_Experience_Qualification_Profile_Replacement_DataType::setWorker_Experience_Reference()
     * @uses Work_Experience_Qualification_Profile_Replacement_DataType::setWork_Experience_Rating_Reference()
     * @uses Work_Experience_Qualification_Profile_Replacement_DataType::setRequired()
     * @param \WorkdayWsdl\\StructType\Work_Experience_SkillObjectType $worker_Experience_Reference
     * @param \WorkdayWsdl\\StructType\Work_Experience_RatingObjectType $work_Experience_Rating_Reference
     * @param bool $required
     */
    public function __construct(\WorkdayWsdl\\StructType\Work_Experience_SkillObjectType $worker_Experience_Reference = null, \WorkdayWsdl\\StructType\Work_Experience_RatingObjectType $work_Experience_Rating_Reference = null, $required = null)
    {
        $this
            ->setWorker_Experience_Reference($worker_Experience_Reference)
            ->setWork_Experience_Rating_Reference($work_Experience_Rating_Reference)
            ->setRequired($required);
    }
    /**
     * Get Worker_Experience_Reference value
     * @return \WorkdayWsdl\\StructType\Work_Experience_SkillObjectType|null
     */
    public function getWorker_Experience_Reference()
    {
        return $this->Worker_Experience_Reference;
    }
    /**
     * Set Worker_Experience_Reference value
     * @param \WorkdayWsdl\\StructType\Work_Experience_SkillObjectType $worker_Experience_Reference
     * @return \WorkdayWsdl\\StructType\Work_Experience_Qualification_Profile_Replacement_DataType
     */
    public function setWorker_Experience_Reference(\WorkdayWsdl\\StructType\Work_Experience_SkillObjectType $worker_Experience_Reference = null)
    {
        $this->Worker_Experience_Reference = $worker_Experience_Reference;
        return $this;
    }
    /**
     * Get Work_Experience_Rating_Reference value
     * @return \WorkdayWsdl\\StructType\Work_Experience_RatingObjectType|null
     */
    public function getWork_Experience_Rating_Reference()
    {
        return $this->Work_Experience_Rating_Reference;
    }
    /**
     * Set Work_Experience_Rating_Reference value
     * @param \WorkdayWsdl\\StructType\Work_Experience_RatingObjectType $work_Experience_Rating_Reference
     * @return \WorkdayWsdl\\StructType\Work_Experience_Qualification_Profile_Replacement_DataType
     */
    public function setWork_Experience_Rating_Reference(\WorkdayWsdl\\StructType\Work_Experience_RatingObjectType $work_Experience_Rating_Reference = null)
    {
        $this->Work_Experience_Rating_Reference = $work_Experience_Rating_Reference;
        return $this;
    }
    /**
     * Get Required value
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->Required;
    }
    /**
     * Set Required value
     * @param bool $required
     * @return \WorkdayWsdl\\StructType\Work_Experience_Qualification_Profile_Replacement_DataType
     */
    public function setRequired($required = null)
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->Required = $required;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Work_Experience_Qualification_Profile_Replacement_DataType
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
