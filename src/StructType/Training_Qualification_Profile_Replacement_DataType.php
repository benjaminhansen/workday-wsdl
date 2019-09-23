<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Training_Qualification_Profile_Replacement_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Replacement element containing Training Qualifications for the Job ProfileWhen updating a Job Profile, all Training Qualifications for the Job Profile will be replaced by the submitted data. If no data is submitted, then the existing
 * Training Qualifications are not changed.
 * @subpackage Structs
 */
class Training_Qualification_Profile_Replacement_DataType extends AbstractStructBase
{
    /**
     * The Training_Name
     * Meta information extracted from the WSDL
     * - documentation: Enter the text attribute that identifies the Training Program/Class.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Training_Name;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Enter the text attribute that describes the Training Program/Class.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Training_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Enter the Training Type ID specified in Training Types report.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Training_TypeObjectType
     */
    public $Training_Type_Reference;
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - documentation: If Yes, Training Qualification is required.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Required;
    /**
     * Constructor method for Training_Qualification_Profile_Replacement_DataType
     * @uses Training_Qualification_Profile_Replacement_DataType::setTraining_Name()
     * @uses Training_Qualification_Profile_Replacement_DataType::setDescription()
     * @uses Training_Qualification_Profile_Replacement_DataType::setTraining_Type_Reference()
     * @uses Training_Qualification_Profile_Replacement_DataType::setRequired()
     * @param string $training_Name
     * @param string $description
     * @param \WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference
     * @param bool $required
     */
    public function __construct($training_Name = null, $description = null, \WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference = null, $required = null)
    {
        $this
            ->setTraining_Name($training_Name)
            ->setDescription($description)
            ->setTraining_Type_Reference($training_Type_Reference)
            ->setRequired($required);
    }
    /**
     * Get Training_Name value
     * @return string|null
     */
    public function getTraining_Name()
    {
        return $this->Training_Name;
    }
    /**
     * Set Training_Name value
     * @param string $training_Name
     * @return \WorkdayWsdl\\StructType\Training_Qualification_Profile_Replacement_DataType
     */
    public function setTraining_Name($training_Name = null)
    {
        // validation for constraint: string
        if (!is_null($training_Name) && !is_string($training_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($training_Name, true), gettype($training_Name)), __LINE__);
        }
        $this->Training_Name = $training_Name;
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
     * @return \WorkdayWsdl\\StructType\Training_Qualification_Profile_Replacement_DataType
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
     * Get Training_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Training_TypeObjectType|null
     */
    public function getTraining_Type_Reference()
    {
        return $this->Training_Type_Reference;
    }
    /**
     * Set Training_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference
     * @return \WorkdayWsdl\\StructType\Training_Qualification_Profile_Replacement_DataType
     */
    public function setTraining_Type_Reference(\WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference = null)
    {
        $this->Training_Type_Reference = $training_Type_Reference;
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
     * @return \WorkdayWsdl\\StructType\Training_Qualification_Profile_Replacement_DataType
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
     * @return \WorkdayWsdl\\StructType\Training_Qualification_Profile_Replacement_DataType
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
