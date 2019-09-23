<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Membership_Type_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing an instances of committee member type and their associated data
 * @subpackage Structs
 */
class Committee_Membership_Type_Response_DataType extends AbstractStructBase
{
    /**
     * The Committee_Membership_Type
     * Meta information extracted from the WSDL
     * - documentation: Contains the data for a Committee Member Type
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Membership_TypeType[]
     */
    public $Committee_Membership_Type;
    /**
     * Constructor method for Committee_Membership_Type_Response_DataType
     * @uses Committee_Membership_Type_Response_DataType::setCommittee_Membership_Type()
     * @param \WorkdayWsdl\\StructType\Committee_Membership_TypeType[] $committee_Membership_Type
     */
    public function __construct(array $committee_Membership_Type = array())
    {
        $this
            ->setCommittee_Membership_Type($committee_Membership_Type);
    }
    /**
     * Get Committee_Membership_Type value
     * @return \WorkdayWsdl\\StructType\Committee_Membership_TypeType[]|null
     */
    public function getCommittee_Membership_Type()
    {
        return $this->Committee_Membership_Type;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Membership_Type method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Membership_Type method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Membership_TypeForArrayConstraintsFromSetCommittee_Membership_Type(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Membership_Type_Response_DataTypeCommittee_Membership_TypeItem) {
            // validation for constraint: itemType
            if (!$committee_Membership_Type_Response_DataTypeCommittee_Membership_TypeItem instanceof \WorkdayWsdl\\StructType\Committee_Membership_TypeType) {
                $invalidValues[] = is_object($committee_Membership_Type_Response_DataTypeCommittee_Membership_TypeItem) ? get_class($committee_Membership_Type_Response_DataTypeCommittee_Membership_TypeItem) : sprintf('%s(%s)', gettype($committee_Membership_Type_Response_DataTypeCommittee_Membership_TypeItem), var_export($committee_Membership_Type_Response_DataTypeCommittee_Membership_TypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Membership_Type property can only contain items of type \WorkdayWsdl\\StructType\Committee_Membership_TypeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Membership_Type value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Membership_TypeType[] $committee_Membership_Type
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Type_Response_DataType
     */
    public function setCommittee_Membership_Type(array $committee_Membership_Type = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Membership_TypeArrayErrorMessage = self::validateCommittee_Membership_TypeForArrayConstraintsFromSetCommittee_Membership_Type($committee_Membership_Type))) {
            throw new \InvalidArgumentException($committee_Membership_TypeArrayErrorMessage, __LINE__);
        }
        $this->Committee_Membership_Type = $committee_Membership_Type;
        return $this;
    }
    /**
     * Add item to Committee_Membership_Type value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Committee_Membership_TypeType $item
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Type_Response_DataType
     */
    public function addToCommittee_Membership_Type(\WorkdayWsdl\\StructType\Committee_Membership_TypeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Committee_Membership_TypeType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Membership_Type property can only contain items of type \WorkdayWsdl\\StructType\Committee_Membership_TypeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Membership_Type[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Committee_Membership_Type_Response_DataType
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
