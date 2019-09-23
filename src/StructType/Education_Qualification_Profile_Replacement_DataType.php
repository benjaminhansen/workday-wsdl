<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Education_Qualification_Profile_Replacement_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Replacement element containing Education Qualifications for the Job ProfileWhen updating a Job Profile, all Education Qualifications for the Job Profile will be replaced by the submitted data. If no data is submitted, then the
 * existing Education Qualifications are not changed.
 * @subpackage Structs
 */
class Education_Qualification_Profile_Replacement_DataType extends AbstractStructBase
{
    /**
     * The Degree_Reference
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the Degree.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\DegreeObjectType
     */
    public $Degree_Reference;
    /**
     * The Field_Of_Study_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Field of Study ID specified in the Fields of Study report.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Field_of_StudyObjectType
     */
    public $Field_Of_Study_Reference;
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - documentation: If Y, Education Qualification Profile is required.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Required;
    /**
     * Constructor method for Education_Qualification_Profile_Replacement_DataType
     * @uses Education_Qualification_Profile_Replacement_DataType::setDegree_Reference()
     * @uses Education_Qualification_Profile_Replacement_DataType::setField_Of_Study_Reference()
     * @uses Education_Qualification_Profile_Replacement_DataType::setRequired()
     * @param \WorkdayWsdl\\StructType\DegreeObjectType $degree_Reference
     * @param \WorkdayWsdl\\StructType\Field_of_StudyObjectType $field_Of_Study_Reference
     * @param bool $required
     */
    public function __construct(\WorkdayWsdl\\StructType\DegreeObjectType $degree_Reference = null, \WorkdayWsdl\\StructType\Field_of_StudyObjectType $field_Of_Study_Reference = null, $required = null)
    {
        $this
            ->setDegree_Reference($degree_Reference)
            ->setField_Of_Study_Reference($field_Of_Study_Reference)
            ->setRequired($required);
    }
    /**
     * Get Degree_Reference value
     * @return \WorkdayWsdl\\StructType\DegreeObjectType|null
     */
    public function getDegree_Reference()
    {
        return $this->Degree_Reference;
    }
    /**
     * Set Degree_Reference value
     * @param \WorkdayWsdl\\StructType\DegreeObjectType $degree_Reference
     * @return \WorkdayWsdl\\StructType\Education_Qualification_Profile_Replacement_DataType
     */
    public function setDegree_Reference(\WorkdayWsdl\\StructType\DegreeObjectType $degree_Reference = null)
    {
        $this->Degree_Reference = $degree_Reference;
        return $this;
    }
    /**
     * Get Field_Of_Study_Reference value
     * @return \WorkdayWsdl\\StructType\Field_of_StudyObjectType|null
     */
    public function getField_Of_Study_Reference()
    {
        return $this->Field_Of_Study_Reference;
    }
    /**
     * Set Field_Of_Study_Reference value
     * @param \WorkdayWsdl\\StructType\Field_of_StudyObjectType $field_Of_Study_Reference
     * @return \WorkdayWsdl\\StructType\Education_Qualification_Profile_Replacement_DataType
     */
    public function setField_Of_Study_Reference(\WorkdayWsdl\\StructType\Field_of_StudyObjectType $field_Of_Study_Reference = null)
    {
        $this->Field_Of_Study_Reference = $field_Of_Study_Reference;
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
     * @return \WorkdayWsdl\\StructType\Education_Qualification_Profile_Replacement_DataType
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
     * @return \WorkdayWsdl\\StructType\Education_Qualification_Profile_Replacement_DataType
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
