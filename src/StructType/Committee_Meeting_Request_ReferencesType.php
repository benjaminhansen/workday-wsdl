<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Meeting_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference Element for Committee Meeting
 * @subpackage Structs
 */
class Committee_Meeting_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Committee_Meeting_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Committee Meeting
     * - maxOccurs: unbounded
     * @var \StructType\Committee_MeetingObjectType[]
     */
    public $Committee_Meeting_Reference;
    /**
     * Constructor method for Committee_Meeting_Request_ReferencesType
     * @uses Committee_Meeting_Request_ReferencesType::setCommittee_Meeting_Reference()
     * @param \StructType\Committee_MeetingObjectType[] $committee_Meeting_Reference
     */
    public function __construct(array $committee_Meeting_Reference = array())
    {
        $this
            ->setCommittee_Meeting_Reference($committee_Meeting_Reference);
    }
    /**
     * Get Committee_Meeting_Reference value
     * @return \StructType\Committee_MeetingObjectType[]|null
     */
    public function getCommittee_Meeting_Reference()
    {
        return $this->Committee_Meeting_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Meeting_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Meeting_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Meeting_ReferenceForArrayConstraintsFromSetCommittee_Meeting_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Meeting_Request_ReferencesTypeCommittee_Meeting_ReferenceItem) {
            // validation for constraint: itemType
            if (!$committee_Meeting_Request_ReferencesTypeCommittee_Meeting_ReferenceItem instanceof \StructType\Committee_MeetingObjectType) {
                $invalidValues[] = is_object($committee_Meeting_Request_ReferencesTypeCommittee_Meeting_ReferenceItem) ? get_class($committee_Meeting_Request_ReferencesTypeCommittee_Meeting_ReferenceItem) : sprintf('%s(%s)', gettype($committee_Meeting_Request_ReferencesTypeCommittee_Meeting_ReferenceItem), var_export($committee_Meeting_Request_ReferencesTypeCommittee_Meeting_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Meeting_Reference property can only contain items of type \StructType\Committee_MeetingObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Meeting_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_MeetingObjectType[] $committee_Meeting_Reference
     * @return \StructType\Committee_Meeting_Request_ReferencesType
     */
    public function setCommittee_Meeting_Reference(array $committee_Meeting_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Meeting_ReferenceArrayErrorMessage = self::validateCommittee_Meeting_ReferenceForArrayConstraintsFromSetCommittee_Meeting_Reference($committee_Meeting_Reference))) {
            throw new \InvalidArgumentException($committee_Meeting_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Committee_Meeting_Reference = $committee_Meeting_Reference;
        return $this;
    }
    /**
     * Add item to Committee_Meeting_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_MeetingObjectType $item
     * @return \StructType\Committee_Meeting_Request_ReferencesType
     */
    public function addToCommittee_Meeting_Reference(\StructType\Committee_MeetingObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Committee_MeetingObjectType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Meeting_Reference property can only contain items of type \StructType\Committee_MeetingObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Meeting_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Committee_Meeting_Request_ReferencesType
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
