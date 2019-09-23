<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Provisioning_Group_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains each provisioning group based on the Request References or Request Criteria.
 * @subpackage Structs
 */
class Provisioning_Group_Response_DataType extends AbstractStructBase
{
    /**
     * The Provisioning_Group
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Provisioning_GroupType[]
     */
    public $Provisioning_Group;
    /**
     * Constructor method for Provisioning_Group_Response_DataType
     * @uses Provisioning_Group_Response_DataType::setProvisioning_Group()
     * @param \StructType\Provisioning_GroupType[] $provisioning_Group
     */
    public function __construct(array $provisioning_Group = array())
    {
        $this
            ->setProvisioning_Group($provisioning_Group);
    }
    /**
     * Get Provisioning_Group value
     * @return \StructType\Provisioning_GroupType[]|null
     */
    public function getProvisioning_Group()
    {
        return $this->Provisioning_Group;
    }
    /**
     * This method is responsible for validating the values passed to the setProvisioning_Group method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProvisioning_Group method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProvisioning_GroupForArrayConstraintsFromSetProvisioning_Group(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $provisioning_Group_Response_DataTypeProvisioning_GroupItem) {
            // validation for constraint: itemType
            if (!$provisioning_Group_Response_DataTypeProvisioning_GroupItem instanceof \StructType\Provisioning_GroupType) {
                $invalidValues[] = is_object($provisioning_Group_Response_DataTypeProvisioning_GroupItem) ? get_class($provisioning_Group_Response_DataTypeProvisioning_GroupItem) : sprintf('%s(%s)', gettype($provisioning_Group_Response_DataTypeProvisioning_GroupItem), var_export($provisioning_Group_Response_DataTypeProvisioning_GroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Provisioning_Group property can only contain items of type \StructType\Provisioning_GroupType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Provisioning_Group value
     * @throws \InvalidArgumentException
     * @param \StructType\Provisioning_GroupType[] $provisioning_Group
     * @return \StructType\Provisioning_Group_Response_DataType
     */
    public function setProvisioning_Group(array $provisioning_Group = array())
    {
        // validation for constraint: array
        if ('' !== ($provisioning_GroupArrayErrorMessage = self::validateProvisioning_GroupForArrayConstraintsFromSetProvisioning_Group($provisioning_Group))) {
            throw new \InvalidArgumentException($provisioning_GroupArrayErrorMessage, __LINE__);
        }
        $this->Provisioning_Group = $provisioning_Group;
        return $this;
    }
    /**
     * Add item to Provisioning_Group value
     * @throws \InvalidArgumentException
     * @param \StructType\Provisioning_GroupType $item
     * @return \StructType\Provisioning_Group_Response_DataType
     */
    public function addToProvisioning_Group(\StructType\Provisioning_GroupType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Provisioning_GroupType) {
            throw new \InvalidArgumentException(sprintf('The Provisioning_Group property can only contain items of type \StructType\Provisioning_GroupType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Provisioning_Group[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Provisioning_Group_Response_DataType
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
