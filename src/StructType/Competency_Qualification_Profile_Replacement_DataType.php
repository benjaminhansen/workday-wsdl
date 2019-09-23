<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Competency_Qualification_Profile_Replacement_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Replacement element containing Competency Qualifications for the Job ProfileWhen updating a Job Profile, all Competencies for the Job Profile will be replaced by the submitted data. If no data is submitted, then the existing
 * Competencies are not changed.
 * @subpackage Structs
 */
class Competency_Qualification_Profile_Replacement_DataType extends AbstractStructBase
{
    /**
     * The Competency_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Competency ID in the Competencies report.
     * @var \WorkdayWsdl\\StructType\CompetencyObjectType
     */
    public $Competency_Reference;
    /**
     * The Proficiency_Rating_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Proficiency Rating Behavior ID in the Proficiency Rating Behavior report.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Proficiency_RatingObjectType
     */
    public $Proficiency_Rating_Reference;
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - documentation: If Y, Competency is required.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Required;
    /**
     * Constructor method for Competency_Qualification_Profile_Replacement_DataType
     * @uses Competency_Qualification_Profile_Replacement_DataType::setCompetency_Reference()
     * @uses Competency_Qualification_Profile_Replacement_DataType::setProficiency_Rating_Reference()
     * @uses Competency_Qualification_Profile_Replacement_DataType::setRequired()
     * @param \WorkdayWsdl\\StructType\CompetencyObjectType $competency_Reference
     * @param \WorkdayWsdl\\StructType\Proficiency_RatingObjectType $proficiency_Rating_Reference
     * @param bool $required
     */
    public function __construct(\WorkdayWsdl\\StructType\CompetencyObjectType $competency_Reference = null, \WorkdayWsdl\\StructType\Proficiency_RatingObjectType $proficiency_Rating_Reference = null, $required = null)
    {
        $this
            ->setCompetency_Reference($competency_Reference)
            ->setProficiency_Rating_Reference($proficiency_Rating_Reference)
            ->setRequired($required);
    }
    /**
     * Get Competency_Reference value
     * @return \WorkdayWsdl\\StructType\CompetencyObjectType|null
     */
    public function getCompetency_Reference()
    {
        return $this->Competency_Reference;
    }
    /**
     * Set Competency_Reference value
     * @param \WorkdayWsdl\\StructType\CompetencyObjectType $competency_Reference
     * @return \WorkdayWsdl\\StructType\Competency_Qualification_Profile_Replacement_DataType
     */
    public function setCompetency_Reference(\WorkdayWsdl\\StructType\CompetencyObjectType $competency_Reference = null)
    {
        $this->Competency_Reference = $competency_Reference;
        return $this;
    }
    /**
     * Get Proficiency_Rating_Reference value
     * @return \WorkdayWsdl\\StructType\Proficiency_RatingObjectType|null
     */
    public function getProficiency_Rating_Reference()
    {
        return $this->Proficiency_Rating_Reference;
    }
    /**
     * Set Proficiency_Rating_Reference value
     * @param \WorkdayWsdl\\StructType\Proficiency_RatingObjectType $proficiency_Rating_Reference
     * @return \WorkdayWsdl\\StructType\Competency_Qualification_Profile_Replacement_DataType
     */
    public function setProficiency_Rating_Reference(\WorkdayWsdl\\StructType\Proficiency_RatingObjectType $proficiency_Rating_Reference = null)
    {
        $this->Proficiency_Rating_Reference = $proficiency_Rating_Reference;
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
     * @return \WorkdayWsdl\\StructType\Competency_Qualification_Profile_Replacement_DataType
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
     * @return \WorkdayWsdl\\StructType\Competency_Qualification_Profile_Replacement_DataType
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
