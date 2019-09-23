<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Overall_Evaluation_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The overall section evaluation information (rating, comments) for the evaluator.
 * @subpackage Structs
 */
class Overall_Evaluation_Detail_DataType extends AbstractStructBase
{
    /**
     * The Rating_Reference
     * Meta information extracted from the WSDL
     * - documentation: The overall rating assigned to the review.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Review_RatingObjectType
     */
    public $Rating_Reference;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - documentation: The overall comment assigned to the review.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * Constructor method for Overall_Evaluation_Detail_DataType
     * @uses Overall_Evaluation_Detail_DataType::setRating_Reference()
     * @uses Overall_Evaluation_Detail_DataType::setComment()
     * @param \WorkdayWsdl\\StructType\Review_RatingObjectType $rating_Reference
     * @param string $comment
     */
    public function __construct(\WorkdayWsdl\\StructType\Review_RatingObjectType $rating_Reference = null, $comment = null)
    {
        $this
            ->setRating_Reference($rating_Reference)
            ->setComment($comment);
    }
    /**
     * Get Rating_Reference value
     * @return \WorkdayWsdl\\StructType\Review_RatingObjectType|null
     */
    public function getRating_Reference()
    {
        return $this->Rating_Reference;
    }
    /**
     * Set Rating_Reference value
     * @param \WorkdayWsdl\\StructType\Review_RatingObjectType $rating_Reference
     * @return \WorkdayWsdl\\StructType\Overall_Evaluation_Detail_DataType
     */
    public function setRating_Reference(\WorkdayWsdl\\StructType\Review_RatingObjectType $rating_Reference = null)
    {
        $this->Rating_Reference = $rating_Reference;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \WorkdayWsdl\\StructType\Overall_Evaluation_Detail_DataType
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Overall_Evaluation_Detail_DataType
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
