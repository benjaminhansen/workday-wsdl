<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Feedback_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element for Feedback Comments and Questions. There can be multiple questions per request, thus multiple comments per feedback given.
 * @subpackage Structs
 */
class Feedback_ResponseType extends AbstractStructBase
{
    /**
     * The Feedback_Question
     * Meta information extracted from the WSDL
     * - documentation: The feedback question
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Feedback_Question;
    /**
     * The Feedback_Comment
     * Meta information extracted from the WSDL
     * - documentation: The feedback comment
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Feedback_Comment;
    /**
     * Constructor method for Feedback_ResponseType
     * @uses Feedback_ResponseType::setFeedback_Question()
     * @uses Feedback_ResponseType::setFeedback_Comment()
     * @param string $feedback_Question
     * @param string $feedback_Comment
     */
    public function __construct($feedback_Question = null, $feedback_Comment = null)
    {
        $this
            ->setFeedback_Question($feedback_Question)
            ->setFeedback_Comment($feedback_Comment);
    }
    /**
     * Get Feedback_Question value
     * @return string|null
     */
    public function getFeedback_Question()
    {
        return $this->Feedback_Question;
    }
    /**
     * Set Feedback_Question value
     * @param string $feedback_Question
     * @return \StructType\Feedback_ResponseType
     */
    public function setFeedback_Question($feedback_Question = null)
    {
        // validation for constraint: string
        if (!is_null($feedback_Question) && !is_string($feedback_Question)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feedback_Question, true), gettype($feedback_Question)), __LINE__);
        }
        $this->Feedback_Question = $feedback_Question;
        return $this;
    }
    /**
     * Get Feedback_Comment value
     * @return string|null
     */
    public function getFeedback_Comment()
    {
        return $this->Feedback_Comment;
    }
    /**
     * Set Feedback_Comment value
     * @param string $feedback_Comment
     * @return \StructType\Feedback_ResponseType
     */
    public function setFeedback_Comment($feedback_Comment = null)
    {
        // validation for constraint: string
        if (!is_null($feedback_Comment) && !is_string($feedback_Comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feedback_Comment, true), gettype($feedback_Comment)), __LINE__);
        }
        $this->Feedback_Comment = $feedback_Comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Feedback_ResponseType
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
