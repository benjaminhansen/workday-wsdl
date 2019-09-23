<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Type_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Committee Type Request References
 * @subpackage Structs
 */
class Committee_Type_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Committee_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Type Request References
     * - maxOccurs: unbounded
     * @var \StructType\Committee_TypeObjectType[]
     */
    public $Committee_Type_Reference;
    /**
     * Constructor method for Committee_Type_Request_ReferencesType
     * @uses Committee_Type_Request_ReferencesType::setCommittee_Type_Reference()
     * @param \StructType\Committee_TypeObjectType[] $committee_Type_Reference
     */
    public function __construct(array $committee_Type_Reference = array())
    {
        $this
            ->setCommittee_Type_Reference($committee_Type_Reference);
    }
    /**
     * Get Committee_Type_Reference value
     * @return \StructType\Committee_TypeObjectType[]|null
     */
    public function getCommittee_Type_Reference()
    {
        return $this->Committee_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Type_ReferenceForArrayConstraintsFromSetCommittee_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Type_Request_ReferencesTypeCommittee_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$committee_Type_Request_ReferencesTypeCommittee_Type_ReferenceItem instanceof \StructType\Committee_TypeObjectType) {
                $invalidValues[] = is_object($committee_Type_Request_ReferencesTypeCommittee_Type_ReferenceItem) ? get_class($committee_Type_Request_ReferencesTypeCommittee_Type_ReferenceItem) : sprintf('%s(%s)', gettype($committee_Type_Request_ReferencesTypeCommittee_Type_ReferenceItem), var_export($committee_Type_Request_ReferencesTypeCommittee_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Type_Reference property can only contain items of type \StructType\Committee_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_TypeObjectType[] $committee_Type_Reference
     * @return \StructType\Committee_Type_Request_ReferencesType
     */
    public function setCommittee_Type_Reference(array $committee_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Type_ReferenceArrayErrorMessage = self::validateCommittee_Type_ReferenceForArrayConstraintsFromSetCommittee_Type_Reference($committee_Type_Reference))) {
            throw new \InvalidArgumentException($committee_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Committee_Type_Reference = $committee_Type_Reference;
        return $this;
    }
    /**
     * Add item to Committee_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_TypeObjectType $item
     * @return \StructType\Committee_Type_Request_ReferencesType
     */
    public function addToCommittee_Type_Reference(\StructType\Committee_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Committee_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Type_Reference property can only contain items of type \StructType\Committee_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Committee_Type_Request_ReferencesType
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
