<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Feedback_Received_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the employee's feedback received
 * @subpackage Structs
 */
class Feedback_Received_DataType extends AbstractStructBase
{
    /**
     * The Feedback_Received
     * Meta information extracted from the WSDL
     * - documentation: Contains the informational components of a feedback (comment, date, question asked, sender, requester, and type).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Feedback_ReceivedType[]
     */
    public $Feedback_Received;
    /**
     * Constructor method for Feedback_Received_DataType
     * @uses Feedback_Received_DataType::setFeedback_Received()
     * @param \WorkdayWsdl\\StructType\Feedback_ReceivedType[] $feedback_Received
     */
    public function __construct(array $feedback_Received = array())
    {
        $this
            ->setFeedback_Received($feedback_Received);
    }
    /**
     * Get Feedback_Received value
     * @return \WorkdayWsdl\\StructType\Feedback_ReceivedType[]|null
     */
    public function getFeedback_Received()
    {
        return $this->Feedback_Received;
    }
    /**
     * This method is responsible for validating the values passed to the setFeedback_Received method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeedback_Received method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeedback_ReceivedForArrayConstraintsFromSetFeedback_Received(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $feedback_Received_DataTypeFeedback_ReceivedItem) {
            // validation for constraint: itemType
            if (!$feedback_Received_DataTypeFeedback_ReceivedItem instanceof \WorkdayWsdl\\StructType\Feedback_ReceivedType) {
                $invalidValues[] = is_object($feedback_Received_DataTypeFeedback_ReceivedItem) ? get_class($feedback_Received_DataTypeFeedback_ReceivedItem) : sprintf('%s(%s)', gettype($feedback_Received_DataTypeFeedback_ReceivedItem), var_export($feedback_Received_DataTypeFeedback_ReceivedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Feedback_Received property can only contain items of type \WorkdayWsdl\\StructType\Feedback_ReceivedType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Feedback_Received value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Feedback_ReceivedType[] $feedback_Received
     * @return \WorkdayWsdl\\StructType\Feedback_Received_DataType
     */
    public function setFeedback_Received(array $feedback_Received = array())
    {
        // validation for constraint: array
        if ('' !== ($feedback_ReceivedArrayErrorMessage = self::validateFeedback_ReceivedForArrayConstraintsFromSetFeedback_Received($feedback_Received))) {
            throw new \InvalidArgumentException($feedback_ReceivedArrayErrorMessage, __LINE__);
        }
        $this->Feedback_Received = $feedback_Received;
        return $this;
    }
    /**
     * Add item to Feedback_Received value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Feedback_ReceivedType $item
     * @return \WorkdayWsdl\\StructType\Feedback_Received_DataType
     */
    public function addToFeedback_Received(\WorkdayWsdl\\StructType\Feedback_ReceivedType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Feedback_ReceivedType) {
            throw new \InvalidArgumentException(sprintf('The Feedback_Received property can only contain items of type \WorkdayWsdl\\StructType\Feedback_ReceivedType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Feedback_Received[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Feedback_Received_DataType
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
