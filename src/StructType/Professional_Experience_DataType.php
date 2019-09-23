<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Professional_Experience_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Professional Experience data.
 * @subpackage Structs
 */
class Professional_Experience_DataType extends AbstractStructBase
{
    /**
     * The Professional_Experience
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Professional Experience must exist for Professional Experience description. | Text attribute identifying description of Professional Experience.
     * - maxOccurs: 1
     * @var string
     */
    public $Professional_Experience;
    /**
     * The Professional_Experience_Rating_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Professional_Experience_Rating_ReferenceType
     */
    public $Professional_Experience_Rating_Reference;
    /**
     * The Professional_Experience_Comment
     * Meta information extracted from the WSDL
     * - documentation: Comment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Professional_Experience_Comment;
    /**
     * Constructor method for Professional_Experience_DataType
     * @uses Professional_Experience_DataType::setProfessional_Experience()
     * @uses Professional_Experience_DataType::setProfessional_Experience_Rating_Reference()
     * @uses Professional_Experience_DataType::setProfessional_Experience_Comment()
     * @param string $professional_Experience
     * @param \WorkdayWsdl\\StructType\Professional_Experience_Rating_ReferenceType $professional_Experience_Rating_Reference
     * @param string $professional_Experience_Comment
     */
    public function __construct($professional_Experience = null, \WorkdayWsdl\\StructType\Professional_Experience_Rating_ReferenceType $professional_Experience_Rating_Reference = null, $professional_Experience_Comment = null)
    {
        $this
            ->setProfessional_Experience($professional_Experience)
            ->setProfessional_Experience_Rating_Reference($professional_Experience_Rating_Reference)
            ->setProfessional_Experience_Comment($professional_Experience_Comment);
    }
    /**
     * Get Professional_Experience value
     * @return string|null
     */
    public function getProfessional_Experience()
    {
        return $this->Professional_Experience;
    }
    /**
     * Set Professional_Experience value
     * @param string $professional_Experience
     * @return \WorkdayWsdl\\StructType\Professional_Experience_DataType
     */
    public function setProfessional_Experience($professional_Experience = null)
    {
        // validation for constraint: string
        if (!is_null($professional_Experience) && !is_string($professional_Experience)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($professional_Experience, true), gettype($professional_Experience)), __LINE__);
        }
        $this->Professional_Experience = $professional_Experience;
        return $this;
    }
    /**
     * Get Professional_Experience_Rating_Reference value
     * @return \WorkdayWsdl\\StructType\Professional_Experience_Rating_ReferenceType|null
     */
    public function getProfessional_Experience_Rating_Reference()
    {
        return $this->Professional_Experience_Rating_Reference;
    }
    /**
     * Set Professional_Experience_Rating_Reference value
     * @param \WorkdayWsdl\\StructType\Professional_Experience_Rating_ReferenceType $professional_Experience_Rating_Reference
     * @return \WorkdayWsdl\\StructType\Professional_Experience_DataType
     */
    public function setProfessional_Experience_Rating_Reference(\WorkdayWsdl\\StructType\Professional_Experience_Rating_ReferenceType $professional_Experience_Rating_Reference = null)
    {
        $this->Professional_Experience_Rating_Reference = $professional_Experience_Rating_Reference;
        return $this;
    }
    /**
     * Get Professional_Experience_Comment value
     * @return string|null
     */
    public function getProfessional_Experience_Comment()
    {
        return $this->Professional_Experience_Comment;
    }
    /**
     * Set Professional_Experience_Comment value
     * @param string $professional_Experience_Comment
     * @return \WorkdayWsdl\\StructType\Professional_Experience_DataType
     */
    public function setProfessional_Experience_Comment($professional_Experience_Comment = null)
    {
        // validation for constraint: string
        if (!is_null($professional_Experience_Comment) && !is_string($professional_Experience_Comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($professional_Experience_Comment, true), gettype($professional_Experience_Comment)), __LINE__);
        }
        $this->Professional_Experience_Comment = $professional_Experience_Comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Professional_Experience_DataType
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
