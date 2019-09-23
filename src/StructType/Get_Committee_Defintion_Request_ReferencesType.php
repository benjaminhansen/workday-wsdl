<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Committee_Defintion_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of a Committee and its associated data.
 * @subpackage Structs
 */
class Get_Committee_Defintion_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Committee_Definition_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Request Refereneces
     * - maxOccurs: unbounded
     * @var \StructType\CommitteeObjectType[]
     */
    public $Committee_Definition_Reference;
    /**
     * Constructor method for Get_Committee_Defintion_Request_ReferencesType
     * @uses Get_Committee_Defintion_Request_ReferencesType::setCommittee_Definition_Reference()
     * @param \StructType\CommitteeObjectType[] $committee_Definition_Reference
     */
    public function __construct(array $committee_Definition_Reference = array())
    {
        $this
            ->setCommittee_Definition_Reference($committee_Definition_Reference);
    }
    /**
     * Get Committee_Definition_Reference value
     * @return \StructType\CommitteeObjectType[]|null
     */
    public function getCommittee_Definition_Reference()
    {
        return $this->Committee_Definition_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Definition_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Definition_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Definition_ReferenceForArrayConstraintsFromSetCommittee_Definition_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $get_Committee_Defintion_Request_ReferencesTypeCommittee_Definition_ReferenceItem) {
            // validation for constraint: itemType
            if (!$get_Committee_Defintion_Request_ReferencesTypeCommittee_Definition_ReferenceItem instanceof \StructType\CommitteeObjectType) {
                $invalidValues[] = is_object($get_Committee_Defintion_Request_ReferencesTypeCommittee_Definition_ReferenceItem) ? get_class($get_Committee_Defintion_Request_ReferencesTypeCommittee_Definition_ReferenceItem) : sprintf('%s(%s)', gettype($get_Committee_Defintion_Request_ReferencesTypeCommittee_Definition_ReferenceItem), var_export($get_Committee_Defintion_Request_ReferencesTypeCommittee_Definition_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Definition_Reference property can only contain items of type \StructType\CommitteeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Definition_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\CommitteeObjectType[] $committee_Definition_Reference
     * @return \StructType\Get_Committee_Defintion_Request_ReferencesType
     */
    public function setCommittee_Definition_Reference(array $committee_Definition_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Definition_ReferenceArrayErrorMessage = self::validateCommittee_Definition_ReferenceForArrayConstraintsFromSetCommittee_Definition_Reference($committee_Definition_Reference))) {
            throw new \InvalidArgumentException($committee_Definition_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Committee_Definition_Reference = $committee_Definition_Reference;
        return $this;
    }
    /**
     * Add item to Committee_Definition_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\CommitteeObjectType $item
     * @return \StructType\Get_Committee_Defintion_Request_ReferencesType
     */
    public function addToCommittee_Definition_Reference(\StructType\CommitteeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CommitteeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Definition_Reference property can only contain items of type \StructType\CommitteeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Definition_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Get_Committee_Defintion_Request_ReferencesType
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
