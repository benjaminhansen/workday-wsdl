<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Qualification_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the worker's skills and experience.Security Note: This element is secured to the following domains: Self Service: Skills and Experience; Worker: Skills and Experience
 * @subpackage Structs
 */
class Person_Qualification_DataType extends AbstractStructBase
{
    /**
     * The External_Job_History
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for job history.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_HistoryType[]
     */
    public $External_Job_History;
    /**
     * The Competency
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for Competency information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Competency_Achievement_Data__v10_Type[]
     */
    public $Competency;
    /**
     * The Certification
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for Certification information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Certification_AchievementType[]
     */
    public $Certification;
    /**
     * The Training
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for Training information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\TrainingType[]
     */
    public $Training;
    /**
     * The Award_and_Activity
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Award_and_ActivityType[]
     */
    public $Award_and_Activity;
    /**
     * The Organization_Membership
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for Organization Membership information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType[]
     */
    public $Organization_Membership;
    /**
     * The Education
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for Education information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\EducationType[]
     */
    public $Education;
    /**
     * The Work_Experience
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for work experience.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Experience_DataType[]
     */
    public $Work_Experience;
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for Language information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Language_Achievement_DataType[]
     */
    public $Language;
    /**
     * The Internal_Project_Experience
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for Internal Project Experience information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Internal_Project_ExperienceType[]
     */
    public $Internal_Project_Experience;
    /**
     * Constructor method for Person_Qualification_DataType
     * @uses Person_Qualification_DataType::setExternal_Job_History()
     * @uses Person_Qualification_DataType::setCompetency()
     * @uses Person_Qualification_DataType::setCertification()
     * @uses Person_Qualification_DataType::setTraining()
     * @uses Person_Qualification_DataType::setAward_and_Activity()
     * @uses Person_Qualification_DataType::setOrganization_Membership()
     * @uses Person_Qualification_DataType::setEducation()
     * @uses Person_Qualification_DataType::setWork_Experience()
     * @uses Person_Qualification_DataType::setLanguage()
     * @uses Person_Qualification_DataType::setInternal_Project_Experience()
     * @param \WorkdayWsdl\\StructType\Job_HistoryType[] $external_Job_History
     * @param \WorkdayWsdl\\StructType\Competency_Achievement_Data__v10_Type[] $competency
     * @param \WorkdayWsdl\\StructType\Certification_AchievementType[] $certification
     * @param \WorkdayWsdl\\StructType\TrainingType[] $training
     * @param \WorkdayWsdl\\StructType\Award_and_ActivityType[] $award_and_Activity
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType[] $organization_Membership
     * @param \WorkdayWsdl\\StructType\EducationType[] $education
     * @param \WorkdayWsdl\\StructType\Work_Experience_DataType[] $work_Experience
     * @param \WorkdayWsdl\\StructType\Language_Achievement_DataType[] $language
     * @param \WorkdayWsdl\\StructType\Internal_Project_ExperienceType[] $internal_Project_Experience
     */
    public function __construct(array $external_Job_History = array(), array $competency = array(), array $certification = array(), array $training = array(), array $award_and_Activity = array(), array $organization_Membership = array(), array $education = array(), array $work_Experience = array(), array $language = array(), array $internal_Project_Experience = array())
    {
        $this
            ->setExternal_Job_History($external_Job_History)
            ->setCompetency($competency)
            ->setCertification($certification)
            ->setTraining($training)
            ->setAward_and_Activity($award_and_Activity)
            ->setOrganization_Membership($organization_Membership)
            ->setEducation($education)
            ->setWork_Experience($work_Experience)
            ->setLanguage($language)
            ->setInternal_Project_Experience($internal_Project_Experience);
    }
    /**
     * Get External_Job_History value
     * @return \WorkdayWsdl\\StructType\Job_HistoryType[]|null
     */
    public function getExternal_Job_History()
    {
        return $this->External_Job_History;
    }
    /**
     * This method is responsible for validating the values passed to the setExternal_Job_History method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternal_Job_History method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternal_Job_HistoryForArrayConstraintsFromSetExternal_Job_History(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Qualification_DataTypeExternal_Job_HistoryItem) {
            // validation for constraint: itemType
            if (!$person_Qualification_DataTypeExternal_Job_HistoryItem instanceof \WorkdayWsdl\\StructType\Job_HistoryType) {
                $invalidValues[] = is_object($person_Qualification_DataTypeExternal_Job_HistoryItem) ? get_class($person_Qualification_DataTypeExternal_Job_HistoryItem) : sprintf('%s(%s)', gettype($person_Qualification_DataTypeExternal_Job_HistoryItem), var_export($person_Qualification_DataTypeExternal_Job_HistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The External_Job_History property can only contain items of type \WorkdayWsdl\\StructType\Job_HistoryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set External_Job_History value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_HistoryType[] $external_Job_History
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function setExternal_Job_History(array $external_Job_History = array())
    {
        // validation for constraint: array
        if ('' !== ($external_Job_HistoryArrayErrorMessage = self::validateExternal_Job_HistoryForArrayConstraintsFromSetExternal_Job_History($external_Job_History))) {
            throw new \InvalidArgumentException($external_Job_HistoryArrayErrorMessage, __LINE__);
        }
        $this->External_Job_History = $external_Job_History;
        return $this;
    }
    /**
     * Add item to External_Job_History value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_HistoryType $item
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function addToExternal_Job_History(\WorkdayWsdl\\StructType\Job_HistoryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_HistoryType) {
            throw new \InvalidArgumentException(sprintf('The External_Job_History property can only contain items of type \WorkdayWsdl\\StructType\Job_HistoryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->External_Job_History[] = $item;
        return $this;
    }
    /**
     * Get Competency value
     * @return \WorkdayWsdl\\StructType\Competency_Achievement_Data__v10_Type[]|null
     */
    public function getCompetency()
    {
        return $this->Competency;
    }
    /**
     * This method is responsible for validating the values passed to the setCompetency method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompetency method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompetencyForArrayConstraintsFromSetCompetency(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Qualification_DataTypeCompetencyItem) {
            // validation for constraint: itemType
            if (!$person_Qualification_DataTypeCompetencyItem instanceof \WorkdayWsdl\\StructType\Competency_Achievement_Data__v10_Type) {
                $invalidValues[] = is_object($person_Qualification_DataTypeCompetencyItem) ? get_class($person_Qualification_DataTypeCompetencyItem) : sprintf('%s(%s)', gettype($person_Qualification_DataTypeCompetencyItem), var_export($person_Qualification_DataTypeCompetencyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Competency property can only contain items of type \WorkdayWsdl\\StructType\Competency_Achievement_Data__v10_Type, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Competency value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Competency_Achievement_Data__v10_Type[] $competency
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function setCompetency(array $competency = array())
    {
        // validation for constraint: array
        if ('' !== ($competencyArrayErrorMessage = self::validateCompetencyForArrayConstraintsFromSetCompetency($competency))) {
            throw new \InvalidArgumentException($competencyArrayErrorMessage, __LINE__);
        }
        $this->Competency = $competency;
        return $this;
    }
    /**
     * Add item to Competency value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Competency_Achievement_Data__v10_Type $item
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function addToCompetency(\WorkdayWsdl\\StructType\Competency_Achievement_Data__v10_Type $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Competency_Achievement_Data__v10_Type) {
            throw new \InvalidArgumentException(sprintf('The Competency property can only contain items of type \WorkdayWsdl\\StructType\Competency_Achievement_Data__v10_Type, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Competency[] = $item;
        return $this;
    }
    /**
     * Get Certification value
     * @return \WorkdayWsdl\\StructType\Certification_AchievementType[]|null
     */
    public function getCertification()
    {
        return $this->Certification;
    }
    /**
     * This method is responsible for validating the values passed to the setCertification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCertification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCertificationForArrayConstraintsFromSetCertification(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Qualification_DataTypeCertificationItem) {
            // validation for constraint: itemType
            if (!$person_Qualification_DataTypeCertificationItem instanceof \WorkdayWsdl\\StructType\Certification_AchievementType) {
                $invalidValues[] = is_object($person_Qualification_DataTypeCertificationItem) ? get_class($person_Qualification_DataTypeCertificationItem) : sprintf('%s(%s)', gettype($person_Qualification_DataTypeCertificationItem), var_export($person_Qualification_DataTypeCertificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Certification property can only contain items of type \WorkdayWsdl\\StructType\Certification_AchievementType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Certification value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Certification_AchievementType[] $certification
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function setCertification(array $certification = array())
    {
        // validation for constraint: array
        if ('' !== ($certificationArrayErrorMessage = self::validateCertificationForArrayConstraintsFromSetCertification($certification))) {
            throw new \InvalidArgumentException($certificationArrayErrorMessage, __LINE__);
        }
        $this->Certification = $certification;
        return $this;
    }
    /**
     * Add item to Certification value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Certification_AchievementType $item
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function addToCertification(\WorkdayWsdl\\StructType\Certification_AchievementType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Certification_AchievementType) {
            throw new \InvalidArgumentException(sprintf('The Certification property can only contain items of type \WorkdayWsdl\\StructType\Certification_AchievementType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Certification[] = $item;
        return $this;
    }
    /**
     * Get Training value
     * @return \WorkdayWsdl\\StructType\TrainingType[]|null
     */
    public function getTraining()
    {
        return $this->Training;
    }
    /**
     * This method is responsible for validating the values passed to the setTraining method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTraining method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTrainingForArrayConstraintsFromSetTraining(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Qualification_DataTypeTrainingItem) {
            // validation for constraint: itemType
            if (!$person_Qualification_DataTypeTrainingItem instanceof \WorkdayWsdl\\StructType\TrainingType) {
                $invalidValues[] = is_object($person_Qualification_DataTypeTrainingItem) ? get_class($person_Qualification_DataTypeTrainingItem) : sprintf('%s(%s)', gettype($person_Qualification_DataTypeTrainingItem), var_export($person_Qualification_DataTypeTrainingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Training property can only contain items of type \WorkdayWsdl\\StructType\TrainingType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Training value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\TrainingType[] $training
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function setTraining(array $training = array())
    {
        // validation for constraint: array
        if ('' !== ($trainingArrayErrorMessage = self::validateTrainingForArrayConstraintsFromSetTraining($training))) {
            throw new \InvalidArgumentException($trainingArrayErrorMessage, __LINE__);
        }
        $this->Training = $training;
        return $this;
    }
    /**
     * Add item to Training value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\TrainingType $item
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function addToTraining(\WorkdayWsdl\\StructType\TrainingType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\TrainingType) {
            throw new \InvalidArgumentException(sprintf('The Training property can only contain items of type \WorkdayWsdl\\StructType\TrainingType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Training[] = $item;
        return $this;
    }
    /**
     * Get Award_and_Activity value
     * @return \WorkdayWsdl\\StructType\Award_and_ActivityType[]|null
     */
    public function getAward_and_Activity()
    {
        return $this->Award_and_Activity;
    }
    /**
     * This method is responsible for validating the values passed to the setAward_and_Activity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAward_and_Activity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAward_and_ActivityForArrayConstraintsFromSetAward_and_Activity(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Qualification_DataTypeAward_and_ActivityItem) {
            // validation for constraint: itemType
            if (!$person_Qualification_DataTypeAward_and_ActivityItem instanceof \WorkdayWsdl\\StructType\Award_and_ActivityType) {
                $invalidValues[] = is_object($person_Qualification_DataTypeAward_and_ActivityItem) ? get_class($person_Qualification_DataTypeAward_and_ActivityItem) : sprintf('%s(%s)', gettype($person_Qualification_DataTypeAward_and_ActivityItem), var_export($person_Qualification_DataTypeAward_and_ActivityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Award_and_Activity property can only contain items of type \WorkdayWsdl\\StructType\Award_and_ActivityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Award_and_Activity value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Award_and_ActivityType[] $award_and_Activity
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function setAward_and_Activity(array $award_and_Activity = array())
    {
        // validation for constraint: array
        if ('' !== ($award_and_ActivityArrayErrorMessage = self::validateAward_and_ActivityForArrayConstraintsFromSetAward_and_Activity($award_and_Activity))) {
            throw new \InvalidArgumentException($award_and_ActivityArrayErrorMessage, __LINE__);
        }
        $this->Award_and_Activity = $award_and_Activity;
        return $this;
    }
    /**
     * Add item to Award_and_Activity value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Award_and_ActivityType $item
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function addToAward_and_Activity(\WorkdayWsdl\\StructType\Award_and_ActivityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Award_and_ActivityType) {
            throw new \InvalidArgumentException(sprintf('The Award_and_Activity property can only contain items of type \WorkdayWsdl\\StructType\Award_and_ActivityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Award_and_Activity[] = $item;
        return $this;
    }
    /**
     * Get Organization_Membership value
     * @return \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType[]|null
     */
    public function getOrganization_Membership()
    {
        return $this->Organization_Membership;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Membership method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Membership method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_MembershipForArrayConstraintsFromSetOrganization_Membership(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Qualification_DataTypeOrganization_MembershipItem) {
            // validation for constraint: itemType
            if (!$person_Qualification_DataTypeOrganization_MembershipItem instanceof \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType) {
                $invalidValues[] = is_object($person_Qualification_DataTypeOrganization_MembershipItem) ? get_class($person_Qualification_DataTypeOrganization_MembershipItem) : sprintf('%s(%s)', gettype($person_Qualification_DataTypeOrganization_MembershipItem), var_export($person_Qualification_DataTypeOrganization_MembershipItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Membership property can only contain items of type \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Membership value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType[] $organization_Membership
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function setOrganization_Membership(array $organization_Membership = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_MembershipArrayErrorMessage = self::validateOrganization_MembershipForArrayConstraintsFromSetOrganization_Membership($organization_Membership))) {
            throw new \InvalidArgumentException($organization_MembershipArrayErrorMessage, __LINE__);
        }
        $this->Organization_Membership = $organization_Membership;
        return $this;
    }
    /**
     * Add item to Organization_Membership value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType $item
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function addToOrganization_Membership(\WorkdayWsdl\\StructType\Professional_Affiliation_SkillType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Membership property can only contain items of type \WorkdayWsdl\\StructType\Professional_Affiliation_SkillType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Membership[] = $item;
        return $this;
    }
    /**
     * Get Education value
     * @return \WorkdayWsdl\\StructType\EducationType[]|null
     */
    public function getEducation()
    {
        return $this->Education;
    }
    /**
     * This method is responsible for validating the values passed to the setEducation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEducation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEducationForArrayConstraintsFromSetEducation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Qualification_DataTypeEducationItem) {
            // validation for constraint: itemType
            if (!$person_Qualification_DataTypeEducationItem instanceof \WorkdayWsdl\\StructType\EducationType) {
                $invalidValues[] = is_object($person_Qualification_DataTypeEducationItem) ? get_class($person_Qualification_DataTypeEducationItem) : sprintf('%s(%s)', gettype($person_Qualification_DataTypeEducationItem), var_export($person_Qualification_DataTypeEducationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Education property can only contain items of type \WorkdayWsdl\\StructType\EducationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Education value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\EducationType[] $education
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function setEducation(array $education = array())
    {
        // validation for constraint: array
        if ('' !== ($educationArrayErrorMessage = self::validateEducationForArrayConstraintsFromSetEducation($education))) {
            throw new \InvalidArgumentException($educationArrayErrorMessage, __LINE__);
        }
        $this->Education = $education;
        return $this;
    }
    /**
     * Add item to Education value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\EducationType $item
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function addToEducation(\WorkdayWsdl\\StructType\EducationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\EducationType) {
            throw new \InvalidArgumentException(sprintf('The Education property can only contain items of type \WorkdayWsdl\\StructType\EducationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Education[] = $item;
        return $this;
    }
    /**
     * Get Work_Experience value
     * @return \WorkdayWsdl\\StructType\Work_Experience_DataType[]|null
     */
    public function getWork_Experience()
    {
        return $this->Work_Experience;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Experience method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Experience method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_ExperienceForArrayConstraintsFromSetWork_Experience(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Qualification_DataTypeWork_ExperienceItem) {
            // validation for constraint: itemType
            if (!$person_Qualification_DataTypeWork_ExperienceItem instanceof \WorkdayWsdl\\StructType\Work_Experience_DataType) {
                $invalidValues[] = is_object($person_Qualification_DataTypeWork_ExperienceItem) ? get_class($person_Qualification_DataTypeWork_ExperienceItem) : sprintf('%s(%s)', gettype($person_Qualification_DataTypeWork_ExperienceItem), var_export($person_Qualification_DataTypeWork_ExperienceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Experience property can only contain items of type \WorkdayWsdl\\StructType\Work_Experience_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Experience value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Experience_DataType[] $work_Experience
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function setWork_Experience(array $work_Experience = array())
    {
        // validation for constraint: array
        if ('' !== ($work_ExperienceArrayErrorMessage = self::validateWork_ExperienceForArrayConstraintsFromSetWork_Experience($work_Experience))) {
            throw new \InvalidArgumentException($work_ExperienceArrayErrorMessage, __LINE__);
        }
        $this->Work_Experience = $work_Experience;
        return $this;
    }
    /**
     * Add item to Work_Experience value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Experience_DataType $item
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function addToWork_Experience(\WorkdayWsdl\\StructType\Work_Experience_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Work_Experience_DataType) {
            throw new \InvalidArgumentException(sprintf('The Work_Experience property can only contain items of type \WorkdayWsdl\\StructType\Work_Experience_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Experience[] = $item;
        return $this;
    }
    /**
     * Get Language value
     * @return \WorkdayWsdl\\StructType\Language_Achievement_DataType[]|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * This method is responsible for validating the values passed to the setLanguage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLanguage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLanguageForArrayConstraintsFromSetLanguage(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Qualification_DataTypeLanguageItem) {
            // validation for constraint: itemType
            if (!$person_Qualification_DataTypeLanguageItem instanceof \WorkdayWsdl\\StructType\Language_Achievement_DataType) {
                $invalidValues[] = is_object($person_Qualification_DataTypeLanguageItem) ? get_class($person_Qualification_DataTypeLanguageItem) : sprintf('%s(%s)', gettype($person_Qualification_DataTypeLanguageItem), var_export($person_Qualification_DataTypeLanguageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Language property can only contain items of type \WorkdayWsdl\\StructType\Language_Achievement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Language value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Language_Achievement_DataType[] $language
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function setLanguage(array $language = array())
    {
        // validation for constraint: array
        if ('' !== ($languageArrayErrorMessage = self::validateLanguageForArrayConstraintsFromSetLanguage($language))) {
            throw new \InvalidArgumentException($languageArrayErrorMessage, __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Add item to Language value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Language_Achievement_DataType $item
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function addToLanguage(\WorkdayWsdl\\StructType\Language_Achievement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Language_Achievement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Language property can only contain items of type \WorkdayWsdl\\StructType\Language_Achievement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Language[] = $item;
        return $this;
    }
    /**
     * Get Internal_Project_Experience value
     * @return \WorkdayWsdl\\StructType\Internal_Project_ExperienceType[]|null
     */
    public function getInternal_Project_Experience()
    {
        return $this->Internal_Project_Experience;
    }
    /**
     * This method is responsible for validating the values passed to the setInternal_Project_Experience method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInternal_Project_Experience method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInternal_Project_ExperienceForArrayConstraintsFromSetInternal_Project_Experience(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Qualification_DataTypeInternal_Project_ExperienceItem) {
            // validation for constraint: itemType
            if (!$person_Qualification_DataTypeInternal_Project_ExperienceItem instanceof \WorkdayWsdl\\StructType\Internal_Project_ExperienceType) {
                $invalidValues[] = is_object($person_Qualification_DataTypeInternal_Project_ExperienceItem) ? get_class($person_Qualification_DataTypeInternal_Project_ExperienceItem) : sprintf('%s(%s)', gettype($person_Qualification_DataTypeInternal_Project_ExperienceItem), var_export($person_Qualification_DataTypeInternal_Project_ExperienceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Internal_Project_Experience property can only contain items of type \WorkdayWsdl\\StructType\Internal_Project_ExperienceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Internal_Project_Experience value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Internal_Project_ExperienceType[] $internal_Project_Experience
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function setInternal_Project_Experience(array $internal_Project_Experience = array())
    {
        // validation for constraint: array
        if ('' !== ($internal_Project_ExperienceArrayErrorMessage = self::validateInternal_Project_ExperienceForArrayConstraintsFromSetInternal_Project_Experience($internal_Project_Experience))) {
            throw new \InvalidArgumentException($internal_Project_ExperienceArrayErrorMessage, __LINE__);
        }
        $this->Internal_Project_Experience = $internal_Project_Experience;
        return $this;
    }
    /**
     * Add item to Internal_Project_Experience value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Internal_Project_ExperienceType $item
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
     */
    public function addToInternal_Project_Experience(\WorkdayWsdl\\StructType\Internal_Project_ExperienceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Internal_Project_ExperienceType) {
            throw new \InvalidArgumentException(sprintf('The Internal_Project_Experience property can only contain items of type \WorkdayWsdl\\StructType\Internal_Project_ExperienceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Internal_Project_Experience[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Person_Qualification_DataType
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
