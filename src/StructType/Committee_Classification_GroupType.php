<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Classification_GroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the data for a Committee Classification Group.
 * @subpackage Structs
 */
class Committee_Classification_GroupType extends AbstractStructBase
{
    /**
     * The Committee_Classification_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Reference to the Committee Classification Group.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Classification_GroupObjectType
     */
    public $Committee_Classification_Group_Reference;
    /**
     * The Committee_Classification_Group_Data
     * Meta information extracted from the WSDL
     * - documentation: Committee Classification Group Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Classification_Group_DataType[]
     */
    public $Committee_Classification_Group_Data;
    /**
     * Constructor method for Committee_Classification_GroupType
     * @uses Committee_Classification_GroupType::setCommittee_Classification_Group_Reference()
     * @uses Committee_Classification_GroupType::setCommittee_Classification_Group_Data()
     * @param \WorkdayWsdl\\StructType\Committee_Classification_GroupObjectType $committee_Classification_Group_Reference
     * @param \WorkdayWsdl\\StructType\Committee_Classification_Group_DataType[] $committee_Classification_Group_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Committee_Classification_GroupObjectType $committee_Classification_Group_Reference = null, array $committee_Classification_Group_Data = array())
    {
        $this
            ->setCommittee_Classification_Group_Reference($committee_Classification_Group_Reference)
            ->setCommittee_Classification_Group_Data($committee_Classification_Group_Data);
    }
    /**
     * Get Committee_Classification_Group_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Classification_GroupObjectType|null
     */
    public function getCommittee_Classification_Group_Reference()
    {
        return $this->Committee_Classification_Group_Reference;
    }
    /**
     * Set Committee_Classification_Group_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_Classification_GroupObjectType $committee_Classification_Group_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Classification_GroupType
     */
    public function setCommittee_Classification_Group_Reference(\WorkdayWsdl\\StructType\Committee_Classification_GroupObjectType $committee_Classification_Group_Reference = null)
    {
        $this->Committee_Classification_Group_Reference = $committee_Classification_Group_Reference;
        return $this;
    }
    /**
     * Get Committee_Classification_Group_Data value
     * @return \WorkdayWsdl\\StructType\Committee_Classification_Group_DataType[]|null
     */
    public function getCommittee_Classification_Group_Data()
    {
        return $this->Committee_Classification_Group_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Classification_Group_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Classification_Group_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Classification_Group_DataForArrayConstraintsFromSetCommittee_Classification_Group_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Classification_GroupTypeCommittee_Classification_Group_DataItem) {
            // validation for constraint: itemType
            if (!$committee_Classification_GroupTypeCommittee_Classification_Group_DataItem instanceof \WorkdayWsdl\\StructType\Committee_Classification_Group_DataType) {
                $invalidValues[] = is_object($committee_Classification_GroupTypeCommittee_Classification_Group_DataItem) ? get_class($committee_Classification_GroupTypeCommittee_Classification_Group_DataItem) : sprintf('%s(%s)', gettype($committee_Classification_GroupTypeCommittee_Classification_Group_DataItem), var_export($committee_Classification_GroupTypeCommittee_Classification_Group_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Classification_Group_Data property can only contain items of type \WorkdayWsdl\\StructType\Committee_Classification_Group_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Classification_Group_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Classification_Group_DataType[] $committee_Classification_Group_Data
     * @return \WorkdayWsdl\\StructType\Committee_Classification_GroupType
     */
    public function setCommittee_Classification_Group_Data(array $committee_Classification_Group_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Classification_Group_DataArrayErrorMessage = self::validateCommittee_Classification_Group_DataForArrayConstraintsFromSetCommittee_Classification_Group_Data($committee_Classification_Group_Data))) {
            throw new \InvalidArgumentException($committee_Classification_Group_DataArrayErrorMessage, __LINE__);
        }
        $this->Committee_Classification_Group_Data = $committee_Classification_Group_Data;
        return $this;
    }
    /**
     * Add item to Committee_Classification_Group_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Classification_Group_DataType $item
     * @return \WorkdayWsdl\\StructType\Committee_Classification_GroupType
     */
    public function addToCommittee_Classification_Group_Data(\WorkdayWsdl\\StructType\Committee_Classification_Group_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Committee_Classification_Group_DataType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Classification_Group_Data property can only contain items of type \WorkdayWsdl\\StructType\Committee_Classification_Group_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Classification_Group_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Committee_Classification_GroupType
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
