<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Meeting_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for Get Committee Meetings
 * @subpackage Structs
 */
class Committee_Meeting_Response_DataType extends AbstractStructBase
{
    /**
     * The Committee_Meeting
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_MeetingType[]
     */
    public $Committee_Meeting;
    /**
     * Constructor method for Committee_Meeting_Response_DataType
     * @uses Committee_Meeting_Response_DataType::setCommittee_Meeting()
     * @param \WorkdayWsdl\\StructType\Committee_MeetingType[] $committee_Meeting
     */
    public function __construct(array $committee_Meeting = array())
    {
        $this
            ->setCommittee_Meeting($committee_Meeting);
    }
    /**
     * Get Committee_Meeting value
     * @return \WorkdayWsdl\\StructType\Committee_MeetingType[]|null
     */
    public function getCommittee_Meeting()
    {
        return $this->Committee_Meeting;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Meeting method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Meeting method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_MeetingForArrayConstraintsFromSetCommittee_Meeting(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Meeting_Response_DataTypeCommittee_MeetingItem) {
            // validation for constraint: itemType
            if (!$committee_Meeting_Response_DataTypeCommittee_MeetingItem instanceof \WorkdayWsdl\\StructType\Committee_MeetingType) {
                $invalidValues[] = is_object($committee_Meeting_Response_DataTypeCommittee_MeetingItem) ? get_class($committee_Meeting_Response_DataTypeCommittee_MeetingItem) : sprintf('%s(%s)', gettype($committee_Meeting_Response_DataTypeCommittee_MeetingItem), var_export($committee_Meeting_Response_DataTypeCommittee_MeetingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Meeting property can only contain items of type \WorkdayWsdl\\StructType\Committee_MeetingType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Meeting value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_MeetingType[] $committee_Meeting
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Response_DataType
     */
    public function setCommittee_Meeting(array $committee_Meeting = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_MeetingArrayErrorMessage = self::validateCommittee_MeetingForArrayConstraintsFromSetCommittee_Meeting($committee_Meeting))) {
            throw new \InvalidArgumentException($committee_MeetingArrayErrorMessage, __LINE__);
        }
        $this->Committee_Meeting = $committee_Meeting;
        return $this;
    }
    /**
     * Add item to Committee_Meeting value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_MeetingType $item
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Response_DataType
     */
    public function addToCommittee_Meeting(\WorkdayWsdl\\StructType\Committee_MeetingType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Committee_MeetingType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Meeting property can only contain items of type \WorkdayWsdl\\StructType\Committee_MeetingType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Meeting[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_Response_DataType
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
