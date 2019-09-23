<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Membership_TypeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the data for a Committee Membership Type
 * @subpackage Structs
 */
class Committee_Membership_TypeType extends AbstractStructBase
{
    /**
     * The Committee_Membership_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Reference to the Committee Member Type
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType
     */
    public $Committee_Membership_Type_Reference;
    /**
     * The Committee_Membership_Type_Data
     * Meta information extracted from the WSDL
     * - documentation: Committee Member Type Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Membership_Type_DataType[]
     */
    public $Committee_Membership_Type_Data;
    /**
     * Constructor method for Committee_Membership_TypeType
     * @uses Committee_Membership_TypeType::setCommittee_Membership_Type_Reference()
     * @uses Committee_Membership_TypeType::setCommittee_Membership_Type_Data()
     * @param \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType $committee_Membership_Type_Reference
     * @param \WorkdayWsdl\\StructType\Committee_Membership_Type_DataType[] $committee_Membership_Type_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType $committee_Membership_Type_Reference = null, array $committee_Membership_Type_Data = array())
    {
        $this
            ->setCommittee_Membership_Type_Reference($committee_Membership_Type_Reference)
            ->setCommittee_Membership_Type_Data($committee_Membership_Type_Data);
    }
    /**
     * Get Committee_Membership_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType|null
     */
    public function getCommittee_Membership_Type_Reference()
    {
        return $this->Committee_Membership_Type_Reference;
    }
    /**
     * Set Committee_Membership_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType $committee_Membership_Type_Reference
     * @return \WorkdayWsdl\\StructType\Committee_Membership_TypeType
     */
    public function setCommittee_Membership_Type_Reference(\WorkdayWsdl\\StructType\Committee_Membership_TypeObjectType $committee_Membership_Type_Reference = null)
    {
        $this->Committee_Membership_Type_Reference = $committee_Membership_Type_Reference;
        return $this;
    }
    /**
     * Get Committee_Membership_Type_Data value
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Type_DataType[]|null
     */
    public function getCommittee_Membership_Type_Data()
    {
        return $this->Committee_Membership_Type_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Membership_Type_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Membership_Type_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Membership_Type_DataForArrayConstraintsFromSetCommittee_Membership_Type_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Membership_TypeTypeCommittee_Membership_Type_DataItem) {
            // validation for constraint: itemType
            if (!$committee_Membership_TypeTypeCommittee_Membership_Type_DataItem instanceof \WorkdayWsdl\\StructType\Committee_Membership_Type_DataType) {
                $invalidValues[] = is_object($committee_Membership_TypeTypeCommittee_Membership_Type_DataItem) ? get_class($committee_Membership_TypeTypeCommittee_Membership_Type_DataItem) : sprintf('%s(%s)', gettype($committee_Membership_TypeTypeCommittee_Membership_Type_DataItem), var_export($committee_Membership_TypeTypeCommittee_Membership_Type_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Membership_Type_Data property can only contain items of type \WorkdayWsdl\\StructType\Committee_Membership_Type_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Membership_Type_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Membership_Type_DataType[] $committee_Membership_Type_Data
     * @return \WorkdayWsdl\\StructType\Committee_Membership_TypeType
     */
    public function setCommittee_Membership_Type_Data(array $committee_Membership_Type_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Membership_Type_DataArrayErrorMessage = self::validateCommittee_Membership_Type_DataForArrayConstraintsFromSetCommittee_Membership_Type_Data($committee_Membership_Type_Data))) {
            throw new \InvalidArgumentException($committee_Membership_Type_DataArrayErrorMessage, __LINE__);
        }
        $this->Committee_Membership_Type_Data = $committee_Membership_Type_Data;
        return $this;
    }
    /**
     * Add item to Committee_Membership_Type_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Membership_Type_DataType $item
     * @return \WorkdayWsdl\\StructType\Committee_Membership_TypeType
     */
    public function addToCommittee_Membership_Type_Data(\WorkdayWsdl\\StructType\Committee_Membership_Type_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Committee_Membership_Type_DataType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Membership_Type_Data property can only contain items of type \WorkdayWsdl\\StructType\Committee_Membership_Type_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Membership_Type_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Committee_Membership_TypeType
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
