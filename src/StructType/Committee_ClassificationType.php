<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_ClassificationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the data for a Committee Classification.
 * @subpackage Structs
 */
class Committee_ClassificationType extends AbstractStructBase
{
    /**
     * The Committee_Classification_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Reference to the Committee Classification.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_ClassificationObjectType
     */
    public $Committee_Classification_Reference;
    /**
     * The Committee_Classification_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Classification_DataType[]
     */
    public $Committee_Classification_Data;
    /**
     * Constructor method for Committee_ClassificationType
     * @uses Committee_ClassificationType::setCommittee_Classification_Reference()
     * @uses Committee_ClassificationType::setCommittee_Classification_Data()
     * @param \WorkdayWsdl\\StructType\Committee_ClassificationObjectType $committee_Classification_Reference
     * @param \WorkdayWsdl\\StructType\Committee_Classification_DataType[] $committee_Classification_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Committee_ClassificationObjectType $committee_Classification_Reference = null, array $committee_Classification_Data = array())
    {
        $this
            ->setCommittee_Classification_Reference($committee_Classification_Reference)
            ->setCommittee_Classification_Data($committee_Classification_Data);
    }
    /**
     * Get Committee_Classification_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_ClassificationObjectType|null
     */
    public function getCommittee_Classification_Reference()
    {
        return $this->Committee_Classification_Reference;
    }
    /**
     * Set Committee_Classification_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_ClassificationObjectType $committee_Classification_Reference
     * @return \WorkdayWsdl\\StructType\Committee_ClassificationType
     */
    public function setCommittee_Classification_Reference(\WorkdayWsdl\\StructType\Committee_ClassificationObjectType $committee_Classification_Reference = null)
    {
        $this->Committee_Classification_Reference = $committee_Classification_Reference;
        return $this;
    }
    /**
     * Get Committee_Classification_Data value
     * @return \WorkdayWsdl\\StructType\Committee_Classification_DataType[]|null
     */
    public function getCommittee_Classification_Data()
    {
        return $this->Committee_Classification_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Classification_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Classification_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Classification_DataForArrayConstraintsFromSetCommittee_Classification_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_ClassificationTypeCommittee_Classification_DataItem) {
            // validation for constraint: itemType
            if (!$committee_ClassificationTypeCommittee_Classification_DataItem instanceof \WorkdayWsdl\\StructType\Committee_Classification_DataType) {
                $invalidValues[] = is_object($committee_ClassificationTypeCommittee_Classification_DataItem) ? get_class($committee_ClassificationTypeCommittee_Classification_DataItem) : sprintf('%s(%s)', gettype($committee_ClassificationTypeCommittee_Classification_DataItem), var_export($committee_ClassificationTypeCommittee_Classification_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Classification_Data property can only contain items of type \WorkdayWsdl\\StructType\Committee_Classification_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Classification_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Classification_DataType[] $committee_Classification_Data
     * @return \WorkdayWsdl\\StructType\Committee_ClassificationType
     */
    public function setCommittee_Classification_Data(array $committee_Classification_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Classification_DataArrayErrorMessage = self::validateCommittee_Classification_DataForArrayConstraintsFromSetCommittee_Classification_Data($committee_Classification_Data))) {
            throw new \InvalidArgumentException($committee_Classification_DataArrayErrorMessage, __LINE__);
        }
        $this->Committee_Classification_Data = $committee_Classification_Data;
        return $this;
    }
    /**
     * Add item to Committee_Classification_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Classification_DataType $item
     * @return \WorkdayWsdl\\StructType\Committee_ClassificationType
     */
    public function addToCommittee_Classification_Data(\WorkdayWsdl\\StructType\Committee_Classification_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Committee_Classification_DataType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Classification_Data property can only contain items of type \WorkdayWsdl\\StructType\Committee_Classification_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Classification_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Committee_ClassificationType
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
