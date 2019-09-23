<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Membership_Type_Request_ReferencesType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of a Committee Member Type and its associated data
 * @subpackage Structs
 */
class Committee_Membership_Type_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Committee_Membership_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Utilize the Request References element to retrieve a specific instance(s) of a Committee Member Type and its associated data.
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType[]
     */
    public $Committee_Membership_Type_Reference;
    /**
     * Constructor method for Committee_Membership_Type_Request_ReferencesType
     * @uses Committee_Membership_Type_Request_ReferencesType::setCommittee_Membership_Type_Reference()
     * @param \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType[] $committee_Membership_Type_Reference
     */
    public function __construct(array $committee_Membership_Type_Reference = array())
    {
        $this
            ->setCommittee_Membership_Type_Reference($committee_Membership_Type_Reference);
    }
    /**
     * Get Committee_Membership_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType[]|null
     */
    public function getCommittee_Membership_Type_Reference()
    {
        return $this->Committee_Membership_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Membership_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Membership_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Membership_Type_ReferenceForArrayConstraintsFromSetCommittee_Membership_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Membership_Type_Request_ReferencesTypeCommittee_Membership_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$committee_Membership_Type_Request_ReferencesTypeCommittee_Membership_Type_ReferenceItem instanceof \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType) {
                $invalidValues[] = is_object($committee_Membership_Type_Request_ReferencesTypeCommittee_Membership_Type_ReferenceItem) ? get_class($committee_Membership_Type_Request_ReferencesTypeCommittee_Membership_Type_ReferenceItem) : sprintf('%s(%s)', gettype($committee_Membership_Type_Request_ReferencesTypeCommittee_Membership_Type_ReferenceItem), var_export($committee_Membership_Type_Request_ReferencesTypeCommittee_Membership_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Membership_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Membership_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType[] $committee_Membership_Type_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Type_Request_ReferencesType
     */
    public function setCommittee_Membership_Type_Reference(array $committee_Membership_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Membership_Type_ReferenceArrayErrorMessage = self::validateCommittee_Membership_Type_ReferenceForArrayConstraintsFromSetCommittee_Membership_Type_Reference($committee_Membership_Type_Reference))) {
            throw new \InvalidArgumentException($committee_Membership_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Committee_Membership_Type_Reference = $committee_Membership_Type_Reference;
        return $this;
    }
    /**
     * Add item to Committee_Membership_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType $item
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Type_Request_ReferencesType
     */
    public function addToCommittee_Membership_Type_Reference(\WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Membership_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Membership_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Type_Request_ReferencesType
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
