<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Classification_Group_Request_ReferencesType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of a Committee Classification Group and its associated data.
 * @subpackage Structs
 */
class Committee_Classification_Group_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Committee_Classification_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Reference to the Committee Classification Group. Used to identify the Committee Classification Group to update. Leave blank on an Add.
     * - maxOccurs: unbounded
     * @var \StructType\Committee_Classification_GroupObjectType[]
     */
    public $Committee_Classification_Group_Reference;
    /**
     * Constructor method for Committee_Classification_Group_Request_ReferencesType
     * @uses Committee_Classification_Group_Request_ReferencesType::setCommittee_Classification_Group_Reference()
     * @param \StructType\Committee_Classification_GroupObjectType[] $committee_Classification_Group_Reference
     */
    public function __construct(array $committee_Classification_Group_Reference = array())
    {
        $this
            ->setCommittee_Classification_Group_Reference($committee_Classification_Group_Reference);
    }
    /**
     * Get Committee_Classification_Group_Reference value
     * @return \StructType\Committee_Classification_GroupObjectType[]|null
     */
    public function getCommittee_Classification_Group_Reference()
    {
        return $this->Committee_Classification_Group_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Classification_Group_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Classification_Group_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Classification_Group_ReferenceForArrayConstraintsFromSetCommittee_Classification_Group_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Classification_Group_Request_ReferencesTypeCommittee_Classification_Group_ReferenceItem) {
            // validation for constraint: itemType
            if (!$committee_Classification_Group_Request_ReferencesTypeCommittee_Classification_Group_ReferenceItem instanceof \StructType\Committee_Classification_GroupObjectType) {
                $invalidValues[] = is_object($committee_Classification_Group_Request_ReferencesTypeCommittee_Classification_Group_ReferenceItem) ? get_class($committee_Classification_Group_Request_ReferencesTypeCommittee_Classification_Group_ReferenceItem) : sprintf('%s(%s)', gettype($committee_Classification_Group_Request_ReferencesTypeCommittee_Classification_Group_ReferenceItem), var_export($committee_Classification_Group_Request_ReferencesTypeCommittee_Classification_Group_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Classification_Group_Reference property can only contain items of type \StructType\Committee_Classification_GroupObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Classification_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Classification_GroupObjectType[] $committee_Classification_Group_Reference
     * @return \StructType\Committee_Classification_Group_Request_ReferencesType
     */
    public function setCommittee_Classification_Group_Reference(array $committee_Classification_Group_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Classification_Group_ReferenceArrayErrorMessage = self::validateCommittee_Classification_Group_ReferenceForArrayConstraintsFromSetCommittee_Classification_Group_Reference($committee_Classification_Group_Reference))) {
            throw new \InvalidArgumentException($committee_Classification_Group_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Committee_Classification_Group_Reference = $committee_Classification_Group_Reference;
        return $this;
    }
    /**
     * Add item to Committee_Classification_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Classification_GroupObjectType $item
     * @return \StructType\Committee_Classification_Group_Request_ReferencesType
     */
    public function addToCommittee_Classification_Group_Reference(\StructType\Committee_Classification_GroupObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Committee_Classification_GroupObjectType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Classification_Group_Reference property can only contain items of type \StructType\Committee_Classification_GroupObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Classification_Group_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Committee_Classification_Group_Request_ReferencesType
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
