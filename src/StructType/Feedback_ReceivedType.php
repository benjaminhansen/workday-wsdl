<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Feedback_ReceivedType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the informational components of a feedback (comment, date, question asked, sender, requester, and type).
 * @subpackage Structs
 */
class Feedback_ReceivedType extends AbstractStructBase
{
    /**
     * The From
     * Meta information extracted from the WSDL
     * - documentation: The worker who sent the feedback or displayed as anonymous
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $From;
    /**
     * The Requested_By_Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: The worker who requested the feedback
     * - minOccurs: 0
     * @var \StructType\WorkerObjectType
     */
    public $Requested_By_Worker_Reference;
    /**
     * The Feedback_Type
     * Meta information extracted from the WSDL
     * - documentation: The feedback type
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Feedback_Type;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - documentation: The date when feedback was submitted
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * The Feedback_Response_Data
     * Meta information extracted from the WSDL
     * - documentation: Element for Feedback Comments and Questions. There can be multiple questions per request, thus multiple comments per feedback given.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Feedback_ResponseType[]
     */
    public $Feedback_Response_Data;
    /**
     * Constructor method for Feedback_ReceivedType
     * @uses Feedback_ReceivedType::setFrom()
     * @uses Feedback_ReceivedType::setRequested_By_Worker_Reference()
     * @uses Feedback_ReceivedType::setFeedback_Type()
     * @uses Feedback_ReceivedType::setDate()
     * @uses Feedback_ReceivedType::setFeedback_Response_Data()
     * @param string $from
     * @param \StructType\WorkerObjectType $requested_By_Worker_Reference
     * @param string $feedback_Type
     * @param string $date
     * @param \StructType\Feedback_ResponseType[] $feedback_Response_Data
     */
    public function __construct($from = null, \StructType\WorkerObjectType $requested_By_Worker_Reference = null, $feedback_Type = null, $date = null, array $feedback_Response_Data = array())
    {
        $this
            ->setFrom($from)
            ->setRequested_By_Worker_Reference($requested_By_Worker_Reference)
            ->setFeedback_Type($feedback_Type)
            ->setDate($date)
            ->setFeedback_Response_Data($feedback_Response_Data);
    }
    /**
     * Get From value
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param string $from
     * @return \StructType\Feedback_ReceivedType
     */
    public function setFrom($from = null)
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
        $this->From = $from;
        return $this;
    }
    /**
     * Get Requested_By_Worker_Reference value
     * @return \StructType\WorkerObjectType|null
     */
    public function getRequested_By_Worker_Reference()
    {
        return $this->Requested_By_Worker_Reference;
    }
    /**
     * Set Requested_By_Worker_Reference value
     * @param \StructType\WorkerObjectType $requested_By_Worker_Reference
     * @return \StructType\Feedback_ReceivedType
     */
    public function setRequested_By_Worker_Reference(\StructType\WorkerObjectType $requested_By_Worker_Reference = null)
    {
        $this->Requested_By_Worker_Reference = $requested_By_Worker_Reference;
        return $this;
    }
    /**
     * Get Feedback_Type value
     * @return string|null
     */
    public function getFeedback_Type()
    {
        return $this->Feedback_Type;
    }
    /**
     * Set Feedback_Type value
     * @param string $feedback_Type
     * @return \StructType\Feedback_ReceivedType
     */
    public function setFeedback_Type($feedback_Type = null)
    {
        // validation for constraint: string
        if (!is_null($feedback_Type) && !is_string($feedback_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feedback_Type, true), gettype($feedback_Type)), __LINE__);
        }
        $this->Feedback_Type = $feedback_Type;
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \StructType\Feedback_ReceivedType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get Feedback_Response_Data value
     * @return \StructType\Feedback_ResponseType[]|null
     */
    public function getFeedback_Response_Data()
    {
        return $this->Feedback_Response_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setFeedback_Response_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeedback_Response_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeedback_Response_DataForArrayConstraintsFromSetFeedback_Response_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $feedback_ReceivedTypeFeedback_Response_DataItem) {
            // validation for constraint: itemType
            if (!$feedback_ReceivedTypeFeedback_Response_DataItem instanceof \StructType\Feedback_ResponseType) {
                $invalidValues[] = is_object($feedback_ReceivedTypeFeedback_Response_DataItem) ? get_class($feedback_ReceivedTypeFeedback_Response_DataItem) : sprintf('%s(%s)', gettype($feedback_ReceivedTypeFeedback_Response_DataItem), var_export($feedback_ReceivedTypeFeedback_Response_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Feedback_Response_Data property can only contain items of type \StructType\Feedback_ResponseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Feedback_Response_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Feedback_ResponseType[] $feedback_Response_Data
     * @return \StructType\Feedback_ReceivedType
     */
    public function setFeedback_Response_Data(array $feedback_Response_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($feedback_Response_DataArrayErrorMessage = self::validateFeedback_Response_DataForArrayConstraintsFromSetFeedback_Response_Data($feedback_Response_Data))) {
            throw new \InvalidArgumentException($feedback_Response_DataArrayErrorMessage, __LINE__);
        }
        $this->Feedback_Response_Data = $feedback_Response_Data;
        return $this;
    }
    /**
     * Add item to Feedback_Response_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Feedback_ResponseType $item
     * @return \StructType\Feedback_ReceivedType
     */
    public function addToFeedback_Response_Data(\StructType\Feedback_ResponseType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Feedback_ResponseType) {
            throw new \InvalidArgumentException(sprintf('The Feedback_Response_Data property can only contain items of type \StructType\Feedback_ResponseType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Feedback_Response_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Feedback_ReceivedType
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
