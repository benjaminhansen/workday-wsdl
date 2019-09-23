<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_DefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Committee Definition Response Data
 * @subpackage Structs
 */
class Committee_DefinitionType extends AbstractStructBase
{
    /**
     * The Committee_Definition_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Definition Instance
     * - minOccurs: 0
     * @var \StructType\CommitteeObjectType
     */
    public $Committee_Definition_Reference;
    /**
     * The Committee_Definition_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Committee_Definition_DataType[]
     */
    public $Committee_Definition_Data;
    /**
     * Constructor method for Committee_DefinitionType
     * @uses Committee_DefinitionType::setCommittee_Definition_Reference()
     * @uses Committee_DefinitionType::setCommittee_Definition_Data()
     * @param \StructType\CommitteeObjectType $committee_Definition_Reference
     * @param \StructType\Committee_Definition_DataType[] $committee_Definition_Data
     */
    public function __construct(\StructType\CommitteeObjectType $committee_Definition_Reference = null, array $committee_Definition_Data = array())
    {
        $this
            ->setCommittee_Definition_Reference($committee_Definition_Reference)
            ->setCommittee_Definition_Data($committee_Definition_Data);
    }
    /**
     * Get Committee_Definition_Reference value
     * @return \StructType\CommitteeObjectType|null
     */
    public function getCommittee_Definition_Reference()
    {
        return $this->Committee_Definition_Reference;
    }
    /**
     * Set Committee_Definition_Reference value
     * @param \StructType\CommitteeObjectType $committee_Definition_Reference
     * @return \StructType\Committee_DefinitionType
     */
    public function setCommittee_Definition_Reference(\StructType\CommitteeObjectType $committee_Definition_Reference = null)
    {
        $this->Committee_Definition_Reference = $committee_Definition_Reference;
        return $this;
    }
    /**
     * Get Committee_Definition_Data value
     * @return \StructType\Committee_Definition_DataType[]|null
     */
    public function getCommittee_Definition_Data()
    {
        return $this->Committee_Definition_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Definition_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Definition_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Definition_DataForArrayConstraintsFromSetCommittee_Definition_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_DefinitionTypeCommittee_Definition_DataItem) {
            // validation for constraint: itemType
            if (!$committee_DefinitionTypeCommittee_Definition_DataItem instanceof \StructType\Committee_Definition_DataType) {
                $invalidValues[] = is_object($committee_DefinitionTypeCommittee_Definition_DataItem) ? get_class($committee_DefinitionTypeCommittee_Definition_DataItem) : sprintf('%s(%s)', gettype($committee_DefinitionTypeCommittee_Definition_DataItem), var_export($committee_DefinitionTypeCommittee_Definition_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Definition_Data property can only contain items of type \StructType\Committee_Definition_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Definition_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Definition_DataType[] $committee_Definition_Data
     * @return \StructType\Committee_DefinitionType
     */
    public function setCommittee_Definition_Data(array $committee_Definition_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Definition_DataArrayErrorMessage = self::validateCommittee_Definition_DataForArrayConstraintsFromSetCommittee_Definition_Data($committee_Definition_Data))) {
            throw new \InvalidArgumentException($committee_Definition_DataArrayErrorMessage, __LINE__);
        }
        $this->Committee_Definition_Data = $committee_Definition_Data;
        return $this;
    }
    /**
     * Add item to Committee_Definition_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Definition_DataType $item
     * @return \StructType\Committee_DefinitionType
     */
    public function addToCommittee_Definition_Data(\StructType\Committee_Definition_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Committee_Definition_DataType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Definition_Data property can only contain items of type \StructType\Committee_Definition_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Definition_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Committee_DefinitionType
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
