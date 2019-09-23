<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Classification_Group_Response_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Documentation Response element containing an instance of a Committee Classification Group and its associated data.
 * @subpackage Structs
 */
class Committee_Classification_Group_Response_DataType extends AbstractStructBase
{
    /**
     * The Committee_Classification_Group
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Classification_GroupType[]
     */
    public $Committee_Classification_Group;
    /**
     * Constructor method for Committee_Classification_Group_Response_DataType
     * @uses Committee_Classification_Group_Response_DataType::setCommittee_Classification_Group()
     * @param \WorkdayWsdl\\StructType\Committee_Classification_GroupType[] $committee_Classification_Group
     */
    public function __construct(array $committee_Classification_Group = array())
    {
        $this
            ->setCommittee_Classification_Group($committee_Classification_Group);
    }
    /**
     * Get Committee_Classification_Group value
     * @return \WorkdayWsdl\\StructType\Committee_Classification_GroupType[]|null
     */
    public function getCommittee_Classification_Group()
    {
        return $this->Committee_Classification_Group;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Classification_Group method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Classification_Group method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Classification_GroupForArrayConstraintsFromSetCommittee_Classification_Group(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Classification_Group_Response_DataTypeCommittee_Classification_GroupItem) {
            // validation for constraint: itemType
            if (!$committee_Classification_Group_Response_DataTypeCommittee_Classification_GroupItem instanceof \WorkdayWsdl\\StructType\Committee_Classification_GroupType) {
                $invalidValues[] = is_object($committee_Classification_Group_Response_DataTypeCommittee_Classification_GroupItem) ? get_class($committee_Classification_Group_Response_DataTypeCommittee_Classification_GroupItem) : sprintf('%s(%s)', gettype($committee_Classification_Group_Response_DataTypeCommittee_Classification_GroupItem), var_export($committee_Classification_Group_Response_DataTypeCommittee_Classification_GroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Classification_Group property can only contain items of type \WorkdayWsdl\\StructType\Committee_Classification_GroupType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Classification_Group value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Classification_GroupType[] $committee_Classification_Group
     * @return \WorkdayWsdl\\StructType\Committee_Classification_Group_Response_DataType
     */
    public function setCommittee_Classification_Group(array $committee_Classification_Group = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Classification_GroupArrayErrorMessage = self::validateCommittee_Classification_GroupForArrayConstraintsFromSetCommittee_Classification_Group($committee_Classification_Group))) {
            throw new \InvalidArgumentException($committee_Classification_GroupArrayErrorMessage, __LINE__);
        }
        $this->Committee_Classification_Group = $committee_Classification_Group;
        return $this;
    }
    /**
     * Add item to Committee_Classification_Group value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Classification_GroupType $item
     * @return \WorkdayWsdl\\StructType\Committee_Classification_Group_Response_DataType
     */
    public function addToCommittee_Classification_Group(\WorkdayWsdl\\StructType\Committee_Classification_GroupType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Committee_Classification_GroupType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Classification_Group property can only contain items of type \WorkdayWsdl\\StructType\Committee_Classification_GroupType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Classification_Group[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Committee_Classification_Group_Response_DataType
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
