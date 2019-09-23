<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Provisioning_Group_Assignment_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains each provisioning group assignment based on the Request References or Request Criteria.
 * @subpackage Structs
 */
class Provisioning_Group_Assignment_Response_DataType extends AbstractStructBase
{
    /**
     * The Provisioning_Group_Assignment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Provisioning_Group_AssignmentType[]
     */
    public $Provisioning_Group_Assignment;
    /**
     * Constructor method for Provisioning_Group_Assignment_Response_DataType
     * @uses Provisioning_Group_Assignment_Response_DataType::setProvisioning_Group_Assignment()
     * @param \WorkdayWsdl\\StructType\Provisioning_Group_AssignmentType[] $provisioning_Group_Assignment
     */
    public function __construct(array $provisioning_Group_Assignment = array())
    {
        $this
            ->setProvisioning_Group_Assignment($provisioning_Group_Assignment);
    }
    /**
     * Get Provisioning_Group_Assignment value
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_AssignmentType[]|null
     */
    public function getProvisioning_Group_Assignment()
    {
        return $this->Provisioning_Group_Assignment;
    }
    /**
     * This method is responsible for validating the values passed to the setProvisioning_Group_Assignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProvisioning_Group_Assignment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProvisioning_Group_AssignmentForArrayConstraintsFromSetProvisioning_Group_Assignment(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $provisioning_Group_Assignment_Response_DataTypeProvisioning_Group_AssignmentItem) {
            // validation for constraint: itemType
            if (!$provisioning_Group_Assignment_Response_DataTypeProvisioning_Group_AssignmentItem instanceof \WorkdayWsdl\\StructType\Provisioning_Group_AssignmentType) {
                $invalidValues[] = is_object($provisioning_Group_Assignment_Response_DataTypeProvisioning_Group_AssignmentItem) ? get_class($provisioning_Group_Assignment_Response_DataTypeProvisioning_Group_AssignmentItem) : sprintf('%s(%s)', gettype($provisioning_Group_Assignment_Response_DataTypeProvisioning_Group_AssignmentItem), var_export($provisioning_Group_Assignment_Response_DataTypeProvisioning_Group_AssignmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Provisioning_Group_Assignment property can only contain items of type \WorkdayWsdl\\StructType\Provisioning_Group_AssignmentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Provisioning_Group_Assignment value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Provisioning_Group_AssignmentType[] $provisioning_Group_Assignment
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_Response_DataType
     */
    public function setProvisioning_Group_Assignment(array $provisioning_Group_Assignment = array())
    {
        // validation for constraint: array
        if ('' !== ($provisioning_Group_AssignmentArrayErrorMessage = self::validateProvisioning_Group_AssignmentForArrayConstraintsFromSetProvisioning_Group_Assignment($provisioning_Group_Assignment))) {
            throw new \InvalidArgumentException($provisioning_Group_AssignmentArrayErrorMessage, __LINE__);
        }
        $this->Provisioning_Group_Assignment = $provisioning_Group_Assignment;
        return $this;
    }
    /**
     * Add item to Provisioning_Group_Assignment value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Provisioning_Group_AssignmentType $item
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_Response_DataType
     */
    public function addToProvisioning_Group_Assignment(\WorkdayWsdl\\StructType\Provisioning_Group_AssignmentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Provisioning_Group_AssignmentType) {
            throw new \InvalidArgumentException(sprintf('The Provisioning_Group_Assignment property can only contain items of type \WorkdayWsdl\\StructType\Provisioning_Group_AssignmentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Provisioning_Group_Assignment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_Response_DataType
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
