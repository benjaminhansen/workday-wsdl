<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Competency_Achievement_Data__v10_Type StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Competency Data.
 * @subpackage Structs
 */
class Competency_Achievement_Data__v10_Type extends AbstractStructBase
{
    /**
     * The Competency_Level_Behavior_Reference
     * Meta information extracted from the WSDL
     * - documentation: Statement about the Competency.
     * - minOccurs: 0
     * @var \StructType\Proficiency_Rating_BehaviorObjectType
     */
    public $Competency_Level_Behavior_Reference;
    /**
     * The Competency_Level_Behavior_Descriptor
     * Meta information extracted from the WSDL
     * - documentation: Statement about the Competency.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Competency_Level_Behavior_Descriptor;
    /**
     * The Assessment_Comment
     * Meta information extracted from the WSDL
     * - documentation: Comments about the competency assessment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Assessment_Comment;
    /**
     * The Assessed_On
     * Meta information extracted from the WSDL
     * - documentation: Date the competency assessment was carried out.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Assessed_On;
    /**
     * The Assessed_By_Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: Worker carrying out the competency assessment.
     * - minOccurs: 0
     * @var \StructType\RoleObjectType
     */
    public $Assessed_By_Person_Reference;
    /**
     * The Assessed_By_Worker_Descriptor
     * Meta information extracted from the WSDL
     * - documentation: Worker carrying out the competency assessment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Assessed_By_Worker_Descriptor;
    /**
     * The Competency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for the Competency.
     * @var \StructType\CompetencyObjectType
     */
    public $Competency_Reference;
    /**
     * The Competency_Descriptor
     * Meta information extracted from the WSDL
     * - documentation: Reference for the Competency.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Competency_Descriptor;
    /**
     * Constructor method for Competency_Achievement_Data__v10_Type
     * @uses Competency_Achievement_Data__v10_Type::setCompetency_Level_Behavior_Reference()
     * @uses Competency_Achievement_Data__v10_Type::setCompetency_Level_Behavior_Descriptor()
     * @uses Competency_Achievement_Data__v10_Type::setAssessment_Comment()
     * @uses Competency_Achievement_Data__v10_Type::setAssessed_On()
     * @uses Competency_Achievement_Data__v10_Type::setAssessed_By_Person_Reference()
     * @uses Competency_Achievement_Data__v10_Type::setAssessed_By_Worker_Descriptor()
     * @uses Competency_Achievement_Data__v10_Type::setCompetency_Reference()
     * @uses Competency_Achievement_Data__v10_Type::setCompetency_Descriptor()
     * @param \StructType\Proficiency_Rating_BehaviorObjectType $competency_Level_Behavior_Reference
     * @param string $competency_Level_Behavior_Descriptor
     * @param string $assessment_Comment
     * @param string $assessed_On
     * @param \StructType\RoleObjectType $assessed_By_Person_Reference
     * @param string $assessed_By_Worker_Descriptor
     * @param \StructType\CompetencyObjectType $competency_Reference
     * @param string $competency_Descriptor
     */
    public function __construct(\StructType\Proficiency_Rating_BehaviorObjectType $competency_Level_Behavior_Reference = null, $competency_Level_Behavior_Descriptor = null, $assessment_Comment = null, $assessed_On = null, \StructType\RoleObjectType $assessed_By_Person_Reference = null, $assessed_By_Worker_Descriptor = null, \StructType\CompetencyObjectType $competency_Reference = null, $competency_Descriptor = null)
    {
        $this
            ->setCompetency_Level_Behavior_Reference($competency_Level_Behavior_Reference)
            ->setCompetency_Level_Behavior_Descriptor($competency_Level_Behavior_Descriptor)
            ->setAssessment_Comment($assessment_Comment)
            ->setAssessed_On($assessed_On)
            ->setAssessed_By_Person_Reference($assessed_By_Person_Reference)
            ->setAssessed_By_Worker_Descriptor($assessed_By_Worker_Descriptor)
            ->setCompetency_Reference($competency_Reference)
            ->setCompetency_Descriptor($competency_Descriptor);
    }
    /**
     * Get Competency_Level_Behavior_Reference value
     * @return \StructType\Proficiency_Rating_BehaviorObjectType|null
     */
    public function getCompetency_Level_Behavior_Reference()
    {
        return $this->Competency_Level_Behavior_Reference;
    }
    /**
     * Set Competency_Level_Behavior_Reference value
     * @param \StructType\Proficiency_Rating_BehaviorObjectType $competency_Level_Behavior_Reference
     * @return \StructType\Competency_Achievement_Data__v10_Type
     */
    public function setCompetency_Level_Behavior_Reference(\StructType\Proficiency_Rating_BehaviorObjectType $competency_Level_Behavior_Reference = null)
    {
        $this->Competency_Level_Behavior_Reference = $competency_Level_Behavior_Reference;
        return $this;
    }
    /**
     * Get Competency_Level_Behavior_Descriptor value
     * @return string|null
     */
    public function getCompetency_Level_Behavior_Descriptor()
    {
        return $this->Competency_Level_Behavior_Descriptor;
    }
    /**
     * Set Competency_Level_Behavior_Descriptor value
     * @param string $competency_Level_Behavior_Descriptor
     * @return \StructType\Competency_Achievement_Data__v10_Type
     */
    public function setCompetency_Level_Behavior_Descriptor($competency_Level_Behavior_Descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($competency_Level_Behavior_Descriptor) && !is_string($competency_Level_Behavior_Descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($competency_Level_Behavior_Descriptor, true), gettype($competency_Level_Behavior_Descriptor)), __LINE__);
        }
        $this->Competency_Level_Behavior_Descriptor = $competency_Level_Behavior_Descriptor;
        return $this;
    }
    /**
     * Get Assessment_Comment value
     * @return string|null
     */
    public function getAssessment_Comment()
    {
        return $this->Assessment_Comment;
    }
    /**
     * Set Assessment_Comment value
     * @param string $assessment_Comment
     * @return \StructType\Competency_Achievement_Data__v10_Type
     */
    public function setAssessment_Comment($assessment_Comment = null)
    {
        // validation for constraint: string
        if (!is_null($assessment_Comment) && !is_string($assessment_Comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assessment_Comment, true), gettype($assessment_Comment)), __LINE__);
        }
        $this->Assessment_Comment = $assessment_Comment;
        return $this;
    }
    /**
     * Get Assessed_On value
     * @return string|null
     */
    public function getAssessed_On()
    {
        return $this->Assessed_On;
    }
    /**
     * Set Assessed_On value
     * @param string $assessed_On
     * @return \StructType\Competency_Achievement_Data__v10_Type
     */
    public function setAssessed_On($assessed_On = null)
    {
        // validation for constraint: string
        if (!is_null($assessed_On) && !is_string($assessed_On)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assessed_On, true), gettype($assessed_On)), __LINE__);
        }
        $this->Assessed_On = $assessed_On;
        return $this;
    }
    /**
     * Get Assessed_By_Person_Reference value
     * @return \StructType\RoleObjectType|null
     */
    public function getAssessed_By_Person_Reference()
    {
        return $this->Assessed_By_Person_Reference;
    }
    /**
     * Set Assessed_By_Person_Reference value
     * @param \StructType\RoleObjectType $assessed_By_Person_Reference
     * @return \StructType\Competency_Achievement_Data__v10_Type
     */
    public function setAssessed_By_Person_Reference(\StructType\RoleObjectType $assessed_By_Person_Reference = null)
    {
        $this->Assessed_By_Person_Reference = $assessed_By_Person_Reference;
        return $this;
    }
    /**
     * Get Assessed_By_Worker_Descriptor value
     * @return string|null
     */
    public function getAssessed_By_Worker_Descriptor()
    {
        return $this->Assessed_By_Worker_Descriptor;
    }
    /**
     * Set Assessed_By_Worker_Descriptor value
     * @param string $assessed_By_Worker_Descriptor
     * @return \StructType\Competency_Achievement_Data__v10_Type
     */
    public function setAssessed_By_Worker_Descriptor($assessed_By_Worker_Descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($assessed_By_Worker_Descriptor) && !is_string($assessed_By_Worker_Descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assessed_By_Worker_Descriptor, true), gettype($assessed_By_Worker_Descriptor)), __LINE__);
        }
        $this->Assessed_By_Worker_Descriptor = $assessed_By_Worker_Descriptor;
        return $this;
    }
    /**
     * Get Competency_Reference value
     * @return \StructType\CompetencyObjectType|null
     */
    public function getCompetency_Reference()
    {
        return $this->Competency_Reference;
    }
    /**
     * Set Competency_Reference value
     * @param \StructType\CompetencyObjectType $competency_Reference
     * @return \StructType\Competency_Achievement_Data__v10_Type
     */
    public function setCompetency_Reference(\StructType\CompetencyObjectType $competency_Reference = null)
    {
        $this->Competency_Reference = $competency_Reference;
        return $this;
    }
    /**
     * Get Competency_Descriptor value
     * @return string|null
     */
    public function getCompetency_Descriptor()
    {
        return $this->Competency_Descriptor;
    }
    /**
     * Set Competency_Descriptor value
     * @param string $competency_Descriptor
     * @return \StructType\Competency_Achievement_Data__v10_Type
     */
    public function setCompetency_Descriptor($competency_Descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($competency_Descriptor) && !is_string($competency_Descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($competency_Descriptor, true), gettype($competency_Descriptor)), __LINE__);
        }
        $this->Competency_Descriptor = $competency_Descriptor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Competency_Achievement_Data__v10_Type
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
