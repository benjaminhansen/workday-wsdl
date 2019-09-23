<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Experience_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the work experience.
 * @subpackage Structs
 */
class Work_Experience_DataType extends AbstractStructBase
{
    /**
     * The Experience_Reference
     * Meta information extracted from the WSDL
     * - documentation: The reference to the work experience.
     * - minOccurs: 0
     * @var \StructType\Work_Experience_SkillObjectType
     */
    public $Experience_Reference;
    /**
     * The Remove_Experience
     * Meta information extracted from the WSDL
     * - documentation: Used for inbound operations to indicate that the work experience should be removed for the person. Will always return false for outbound operations.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Remove_Experience;
    /**
     * The Experience_Rating_Reference
     * Meta information extracted from the WSDL
     * - documentation: The reference to the work experience rating.
     * - minOccurs: 0
     * @var \StructType\Work_Experience_RatingObjectType
     */
    public $Experience_Rating_Reference;
    /**
     * The Experience_Comment
     * Meta information extracted from the WSDL
     * - documentation: Comments about the work experience.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Experience_Comment;
    /**
     * Constructor method for Work_Experience_DataType
     * @uses Work_Experience_DataType::setExperience_Reference()
     * @uses Work_Experience_DataType::setRemove_Experience()
     * @uses Work_Experience_DataType::setExperience_Rating_Reference()
     * @uses Work_Experience_DataType::setExperience_Comment()
     * @param \StructType\Work_Experience_SkillObjectType $experience_Reference
     * @param bool $remove_Experience
     * @param \StructType\Work_Experience_RatingObjectType $experience_Rating_Reference
     * @param string $experience_Comment
     */
    public function __construct(\StructType\Work_Experience_SkillObjectType $experience_Reference = null, $remove_Experience = null, \StructType\Work_Experience_RatingObjectType $experience_Rating_Reference = null, $experience_Comment = null)
    {
        $this
            ->setExperience_Reference($experience_Reference)
            ->setRemove_Experience($remove_Experience)
            ->setExperience_Rating_Reference($experience_Rating_Reference)
            ->setExperience_Comment($experience_Comment);
    }
    /**
     * Get Experience_Reference value
     * @return \StructType\Work_Experience_SkillObjectType|null
     */
    public function getExperience_Reference()
    {
        return $this->Experience_Reference;
    }
    /**
     * Set Experience_Reference value
     * @param \StructType\Work_Experience_SkillObjectType $experience_Reference
     * @return \StructType\Work_Experience_DataType
     */
    public function setExperience_Reference(\StructType\Work_Experience_SkillObjectType $experience_Reference = null)
    {
        $this->Experience_Reference = $experience_Reference;
        return $this;
    }
    /**
     * Get Remove_Experience value
     * @return bool|null
     */
    public function getRemove_Experience()
    {
        return $this->Remove_Experience;
    }
    /**
     * Set Remove_Experience value
     * @param bool $remove_Experience
     * @return \StructType\Work_Experience_DataType
     */
    public function setRemove_Experience($remove_Experience = null)
    {
        // validation for constraint: boolean
        if (!is_null($remove_Experience) && !is_bool($remove_Experience)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($remove_Experience, true), gettype($remove_Experience)), __LINE__);
        }
        $this->Remove_Experience = $remove_Experience;
        return $this;
    }
    /**
     * Get Experience_Rating_Reference value
     * @return \StructType\Work_Experience_RatingObjectType|null
     */
    public function getExperience_Rating_Reference()
    {
        return $this->Experience_Rating_Reference;
    }
    /**
     * Set Experience_Rating_Reference value
     * @param \StructType\Work_Experience_RatingObjectType $experience_Rating_Reference
     * @return \StructType\Work_Experience_DataType
     */
    public function setExperience_Rating_Reference(\StructType\Work_Experience_RatingObjectType $experience_Rating_Reference = null)
    {
        $this->Experience_Rating_Reference = $experience_Rating_Reference;
        return $this;
    }
    /**
     * Get Experience_Comment value
     * @return string|null
     */
    public function getExperience_Comment()
    {
        return $this->Experience_Comment;
    }
    /**
     * Set Experience_Comment value
     * @param string $experience_Comment
     * @return \StructType\Work_Experience_DataType
     */
    public function setExperience_Comment($experience_Comment = null)
    {
        // validation for constraint: string
        if (!is_null($experience_Comment) && !is_string($experience_Comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($experience_Comment, true), gettype($experience_Comment)), __LINE__);
        }
        $this->Experience_Comment = $experience_Comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Work_Experience_DataType
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
