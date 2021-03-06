<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Qualification_Data_for_Position_Restriction_or_Job_ProfileType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the qualification data for a Position Restriction or Job Profile.
 * @subpackage Structs
 */
class Qualification_Data_for_Position_Restriction_or_Job_ProfileType extends AbstractStructBase
{
    /**
     * The Responsibility_Qualification_Replacement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Responsibility_Qualification_ReplacementType
     */
    public $Responsibility_Qualification_Replacement;
    /**
     * The Work_Experience_Qualification_Replacement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Experience_Qualification_ReplacementType
     */
    public $Work_Experience_Qualification_Replacement;
    /**
     * The Education_Qualification_Replacement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Education_Qualification_ReplacementType
     */
    public $Education_Qualification_Replacement;
    /**
     * The Language_Qualification_Replacement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Language_Qualification_ReplacementType
     */
    public $Language_Qualification_Replacement;
    /**
     * The Competency_Qualification_Replacement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Competency_Qualification_ReplacementType
     */
    public $Competency_Qualification_Replacement;
    /**
     * The Certification_Qualification_Replacement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Certification_Qualification_ReplacementType
     */
    public $Certification_Qualification_Replacement;
    /**
     * The Training_Qualification_Replacement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Training_Qualification_ReplacementType
     */
    public $Training_Qualification_Replacement;
    /**
     * The Skill_Qualification_Replacement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Skill_Qualification_ReplacementType
     */
    public $Skill_Qualification_Replacement;
    /**
     * Constructor method for
     * Qualification_Data_for_Position_Restriction_or_Job_ProfileType
     * @uses Qualification_Data_for_Position_Restriction_or_Job_ProfileType::setResponsibility_Qualification_Replacement()
     * @uses Qualification_Data_for_Position_Restriction_or_Job_ProfileType::setWork_Experience_Qualification_Replacement()
     * @uses Qualification_Data_for_Position_Restriction_or_Job_ProfileType::setEducation_Qualification_Replacement()
     * @uses Qualification_Data_for_Position_Restriction_or_Job_ProfileType::setLanguage_Qualification_Replacement()
     * @uses Qualification_Data_for_Position_Restriction_or_Job_ProfileType::setCompetency_Qualification_Replacement()
     * @uses Qualification_Data_for_Position_Restriction_or_Job_ProfileType::setCertification_Qualification_Replacement()
     * @uses Qualification_Data_for_Position_Restriction_or_Job_ProfileType::setTraining_Qualification_Replacement()
     * @uses Qualification_Data_for_Position_Restriction_or_Job_ProfileType::setSkill_Qualification_Replacement()
     * @param \WorkdayWsdl\\StructType\Responsibility_Qualification_ReplacementType $responsibility_Qualification_Replacement
     * @param \WorkdayWsdl\\StructType\Work_Experience_Qualification_ReplacementType $work_Experience_Qualification_Replacement
     * @param \WorkdayWsdl\\StructType\Education_Qualification_ReplacementType $education_Qualification_Replacement
     * @param \WorkdayWsdl\\StructType\Language_Qualification_ReplacementType $language_Qualification_Replacement
     * @param \WorkdayWsdl\\StructType\Competency_Qualification_ReplacementType $competency_Qualification_Replacement
     * @param \WorkdayWsdl\\StructType\Certification_Qualification_ReplacementType $certification_Qualification_Replacement
     * @param \WorkdayWsdl\\StructType\Training_Qualification_ReplacementType $training_Qualification_Replacement
     * @param \WorkdayWsdl\\StructType\Skill_Qualification_ReplacementType $skill_Qualification_Replacement
     */
    public function __construct(\WorkdayWsdl\\StructType\Responsibility_Qualification_ReplacementType $responsibility_Qualification_Replacement = null, \WorkdayWsdl\\StructType\Work_Experience_Qualification_ReplacementType $work_Experience_Qualification_Replacement = null, \WorkdayWsdl\\StructType\Education_Qualification_ReplacementType $education_Qualification_Replacement = null, \WorkdayWsdl\\StructType\Language_Qualification_ReplacementType $language_Qualification_Replacement = null, \WorkdayWsdl\\StructType\Competency_Qualification_ReplacementType $competency_Qualification_Replacement = null, \WorkdayWsdl\\StructType\Certification_Qualification_ReplacementType $certification_Qualification_Replacement = null, \WorkdayWsdl\\StructType\Training_Qualification_ReplacementType $training_Qualification_Replacement = null, \WorkdayWsdl\\StructType\Skill_Qualification_ReplacementType $skill_Qualification_Replacement = null)
    {
        $this
            ->setResponsibility_Qualification_Replacement($responsibility_Qualification_Replacement)
            ->setWork_Experience_Qualification_Replacement($work_Experience_Qualification_Replacement)
            ->setEducation_Qualification_Replacement($education_Qualification_Replacement)
            ->setLanguage_Qualification_Replacement($language_Qualification_Replacement)
            ->setCompetency_Qualification_Replacement($competency_Qualification_Replacement)
            ->setCertification_Qualification_Replacement($certification_Qualification_Replacement)
            ->setTraining_Qualification_Replacement($training_Qualification_Replacement)
            ->setSkill_Qualification_Replacement($skill_Qualification_Replacement);
    }
    /**
     * Get Responsibility_Qualification_Replacement value
     * @return \WorkdayWsdl\\StructType\Responsibility_Qualification_ReplacementType|null
     */
    public function getResponsibility_Qualification_Replacement()
    {
        return $this->Responsibility_Qualification_Replacement;
    }
    /**
     * Set Responsibility_Qualification_Replacement value
     * @param \WorkdayWsdl\\StructType\Responsibility_Qualification_ReplacementType $responsibility_Qualification_Replacement
     * @return \WorkdayWsdl\\StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType
     */
    public function setResponsibility_Qualification_Replacement(\WorkdayWsdl\\StructType\Responsibility_Qualification_ReplacementType $responsibility_Qualification_Replacement = null)
    {
        $this->Responsibility_Qualification_Replacement = $responsibility_Qualification_Replacement;
        return $this;
    }
    /**
     * Get Work_Experience_Qualification_Replacement value
     * @return \WorkdayWsdl\\StructType\Work_Experience_Qualification_ReplacementType|null
     */
    public function getWork_Experience_Qualification_Replacement()
    {
        return $this->Work_Experience_Qualification_Replacement;
    }
    /**
     * Set Work_Experience_Qualification_Replacement value
     * @param \WorkdayWsdl\\StructType\Work_Experience_Qualification_ReplacementType $work_Experience_Qualification_Replacement
     * @return \WorkdayWsdl\\StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType
     */
    public function setWork_Experience_Qualification_Replacement(\WorkdayWsdl\\StructType\Work_Experience_Qualification_ReplacementType $work_Experience_Qualification_Replacement = null)
    {
        $this->Work_Experience_Qualification_Replacement = $work_Experience_Qualification_Replacement;
        return $this;
    }
    /**
     * Get Education_Qualification_Replacement value
     * @return \WorkdayWsdl\\StructType\Education_Qualification_ReplacementType|null
     */
    public function getEducation_Qualification_Replacement()
    {
        return $this->Education_Qualification_Replacement;
    }
    /**
     * Set Education_Qualification_Replacement value
     * @param \WorkdayWsdl\\StructType\Education_Qualification_ReplacementType $education_Qualification_Replacement
     * @return \WorkdayWsdl\\StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType
     */
    public function setEducation_Qualification_Replacement(\WorkdayWsdl\\StructType\Education_Qualification_ReplacementType $education_Qualification_Replacement = null)
    {
        $this->Education_Qualification_Replacement = $education_Qualification_Replacement;
        return $this;
    }
    /**
     * Get Language_Qualification_Replacement value
     * @return \WorkdayWsdl\\StructType\Language_Qualification_ReplacementType|null
     */
    public function getLanguage_Qualification_Replacement()
    {
        return $this->Language_Qualification_Replacement;
    }
    /**
     * Set Language_Qualification_Replacement value
     * @param \WorkdayWsdl\\StructType\Language_Qualification_ReplacementType $language_Qualification_Replacement
     * @return \WorkdayWsdl\\StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType
     */
    public function setLanguage_Qualification_Replacement(\WorkdayWsdl\\StructType\Language_Qualification_ReplacementType $language_Qualification_Replacement = null)
    {
        $this->Language_Qualification_Replacement = $language_Qualification_Replacement;
        return $this;
    }
    /**
     * Get Competency_Qualification_Replacement value
     * @return \WorkdayWsdl\\StructType\Competency_Qualification_ReplacementType|null
     */
    public function getCompetency_Qualification_Replacement()
    {
        return $this->Competency_Qualification_Replacement;
    }
    /**
     * Set Competency_Qualification_Replacement value
     * @param \WorkdayWsdl\\StructType\Competency_Qualification_ReplacementType $competency_Qualification_Replacement
     * @return \WorkdayWsdl\\StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType
     */
    public function setCompetency_Qualification_Replacement(\WorkdayWsdl\\StructType\Competency_Qualification_ReplacementType $competency_Qualification_Replacement = null)
    {
        $this->Competency_Qualification_Replacement = $competency_Qualification_Replacement;
        return $this;
    }
    /**
     * Get Certification_Qualification_Replacement value
     * @return \WorkdayWsdl\\StructType\Certification_Qualification_ReplacementType|null
     */
    public function getCertification_Qualification_Replacement()
    {
        return $this->Certification_Qualification_Replacement;
    }
    /**
     * Set Certification_Qualification_Replacement value
     * @param \WorkdayWsdl\\StructType\Certification_Qualification_ReplacementType $certification_Qualification_Replacement
     * @return \WorkdayWsdl\\StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType
     */
    public function setCertification_Qualification_Replacement(\WorkdayWsdl\\StructType\Certification_Qualification_ReplacementType $certification_Qualification_Replacement = null)
    {
        $this->Certification_Qualification_Replacement = $certification_Qualification_Replacement;
        return $this;
    }
    /**
     * Get Training_Qualification_Replacement value
     * @return \WorkdayWsdl\\StructType\Training_Qualification_ReplacementType|null
     */
    public function getTraining_Qualification_Replacement()
    {
        return $this->Training_Qualification_Replacement;
    }
    /**
     * Set Training_Qualification_Replacement value
     * @param \WorkdayWsdl\\StructType\Training_Qualification_ReplacementType $training_Qualification_Replacement
     * @return \WorkdayWsdl\\StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType
     */
    public function setTraining_Qualification_Replacement(\WorkdayWsdl\\StructType\Training_Qualification_ReplacementType $training_Qualification_Replacement = null)
    {
        $this->Training_Qualification_Replacement = $training_Qualification_Replacement;
        return $this;
    }
    /**
     * Get Skill_Qualification_Replacement value
     * @return \WorkdayWsdl\\StructType\Skill_Qualification_ReplacementType|null
     */
    public function getSkill_Qualification_Replacement()
    {
        return $this->Skill_Qualification_Replacement;
    }
    /**
     * Set Skill_Qualification_Replacement value
     * @param \WorkdayWsdl\\StructType\Skill_Qualification_ReplacementType $skill_Qualification_Replacement
     * @return \WorkdayWsdl\\StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType
     */
    public function setSkill_Qualification_Replacement(\WorkdayWsdl\\StructType\Skill_Qualification_ReplacementType $skill_Qualification_Replacement = null)
    {
        $this->Skill_Qualification_Replacement = $skill_Qualification_Replacement;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Qualification_Data_for_Position_Restriction_or_Job_ProfileType
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
