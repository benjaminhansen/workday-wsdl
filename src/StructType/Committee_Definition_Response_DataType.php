<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Definition_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Committee Definition Response
 * @subpackage Structs
 */
class Committee_Definition_Response_DataType extends AbstractStructBase
{
    /**
     * The Committee_Definition
     * Meta information extracted from the WSDL
     * - documentation: Wrapper for Committee Definition
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Committee_DefinitionType[]
     */
    public $Committee_Definition;
    /**
     * Constructor method for Committee_Definition_Response_DataType
     * @uses Committee_Definition_Response_DataType::setCommittee_Definition()
     * @param \StructType\Committee_DefinitionType[] $committee_Definition
     */
    public function __construct(array $committee_Definition = array())
    {
        $this
            ->setCommittee_Definition($committee_Definition);
    }
    /**
     * Get Committee_Definition value
     * @return \StructType\Committee_DefinitionType[]|null
     */
    public function getCommittee_Definition()
    {
        return $this->Committee_Definition;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Definition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Definition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_DefinitionForArrayConstraintsFromSetCommittee_Definition(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Definition_Response_DataTypeCommittee_DefinitionItem) {
            // validation for constraint: itemType
            if (!$committee_Definition_Response_DataTypeCommittee_DefinitionItem instanceof \StructType\Committee_DefinitionType) {
                $invalidValues[] = is_object($committee_Definition_Response_DataTypeCommittee_DefinitionItem) ? get_class($committee_Definition_Response_DataTypeCommittee_DefinitionItem) : sprintf('%s(%s)', gettype($committee_Definition_Response_DataTypeCommittee_DefinitionItem), var_export($committee_Definition_Response_DataTypeCommittee_DefinitionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Definition property can only contain items of type \StructType\Committee_DefinitionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Definition value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_DefinitionType[] $committee_Definition
     * @return \StructType\Committee_Definition_Response_DataType
     */
    public function setCommittee_Definition(array $committee_Definition = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_DefinitionArrayErrorMessage = self::validateCommittee_DefinitionForArrayConstraintsFromSetCommittee_Definition($committee_Definition))) {
            throw new \InvalidArgumentException($committee_DefinitionArrayErrorMessage, __LINE__);
        }
        $this->Committee_Definition = $committee_Definition;
        return $this;
    }
    /**
     * Add item to Committee_Definition value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_DefinitionType $item
     * @return \StructType\Committee_Definition_Response_DataType
     */
    public function addToCommittee_Definition(\StructType\Committee_DefinitionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Committee_DefinitionType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Definition property can only contain items of type \StructType\Committee_DefinitionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Definition[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Committee_Definition_Response_DataType
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
