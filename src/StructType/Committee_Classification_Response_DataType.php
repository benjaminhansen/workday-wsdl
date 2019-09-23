<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Classification_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Get Committee Classifications Response
 * @subpackage Structs
 */
class Committee_Classification_Response_DataType extends AbstractStructBase
{
    /**
     * The Committee_Classification
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_ClassificationType[]
     */
    public $Committee_Classification;
    /**
     * Constructor method for Committee_Classification_Response_DataType
     * @uses Committee_Classification_Response_DataType::setCommittee_Classification()
     * @param \WorkdayWsdl\\StructType\Committee_ClassificationType[] $committee_Classification
     */
    public function __construct(array $committee_Classification = array())
    {
        $this
            ->setCommittee_Classification($committee_Classification);
    }
    /**
     * Get Committee_Classification value
     * @return \WorkdayWsdl\\StructType\Committee_ClassificationType[]|null
     */
    public function getCommittee_Classification()
    {
        return $this->Committee_Classification;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Classification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Classification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_ClassificationForArrayConstraintsFromSetCommittee_Classification(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Classification_Response_DataTypeCommittee_ClassificationItem) {
            // validation for constraint: itemType
            if (!$committee_Classification_Response_DataTypeCommittee_ClassificationItem instanceof \WorkdayWsdl\\StructType\Committee_ClassificationType) {
                $invalidValues[] = is_object($committee_Classification_Response_DataTypeCommittee_ClassificationItem) ? get_class($committee_Classification_Response_DataTypeCommittee_ClassificationItem) : sprintf('%s(%s)', gettype($committee_Classification_Response_DataTypeCommittee_ClassificationItem), var_export($committee_Classification_Response_DataTypeCommittee_ClassificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Classification property can only contain items of type \WorkdayWsdl\\StructType\Committee_ClassificationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Classification value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_ClassificationType[] $committee_Classification
     * @return \WorkdayWsdl\\StructType\Committee_Classification_Response_DataType
     */
    public function setCommittee_Classification(array $committee_Classification = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_ClassificationArrayErrorMessage = self::validateCommittee_ClassificationForArrayConstraintsFromSetCommittee_Classification($committee_Classification))) {
            throw new \InvalidArgumentException($committee_ClassificationArrayErrorMessage, __LINE__);
        }
        $this->Committee_Classification = $committee_Classification;
        return $this;
    }
    /**
     * Add item to Committee_Classification value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_ClassificationType $item
     * @return \WorkdayWsdl\\StructType\Committee_Classification_Response_DataType
     */
    public function addToCommittee_Classification(\WorkdayWsdl\\StructType\Committee_ClassificationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Committee_ClassificationType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Classification property can only contain items of type \WorkdayWsdl\\StructType\Committee_ClassificationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Classification[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Committee_Classification_Response_DataType
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
