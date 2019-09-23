<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Account_Provisioning_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains all provisioning group assignments for a person.
 * @subpackage Structs
 */
class Person_Account_Provisioning_DataType extends AbstractStructBase
{
    /**
     * The Provisioning_Group_Assignment_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_for_Person_DataType[]
     */
    public $Provisioning_Group_Assignment_Data;
    /**
     * Constructor method for Person_Account_Provisioning_DataType
     * @uses Person_Account_Provisioning_DataType::setProvisioning_Group_Assignment_Data()
     * @param \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_for_Person_DataType[] $provisioning_Group_Assignment_Data
     */
    public function __construct(array $provisioning_Group_Assignment_Data = array())
    {
        $this
            ->setProvisioning_Group_Assignment_Data($provisioning_Group_Assignment_Data);
    }
    /**
     * Get Provisioning_Group_Assignment_Data value
     * @return \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_for_Person_DataType[]|null
     */
    public function getProvisioning_Group_Assignment_Data()
    {
        return $this->Provisioning_Group_Assignment_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setProvisioning_Group_Assignment_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProvisioning_Group_Assignment_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProvisioning_Group_Assignment_DataForArrayConstraintsFromSetProvisioning_Group_Assignment_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Account_Provisioning_DataTypeProvisioning_Group_Assignment_DataItem) {
            // validation for constraint: itemType
            if (!$person_Account_Provisioning_DataTypeProvisioning_Group_Assignment_DataItem instanceof \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_for_Person_DataType) {
                $invalidValues[] = is_object($person_Account_Provisioning_DataTypeProvisioning_Group_Assignment_DataItem) ? get_class($person_Account_Provisioning_DataTypeProvisioning_Group_Assignment_DataItem) : sprintf('%s(%s)', gettype($person_Account_Provisioning_DataTypeProvisioning_Group_Assignment_DataItem), var_export($person_Account_Provisioning_DataTypeProvisioning_Group_Assignment_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Provisioning_Group_Assignment_Data property can only contain items of type \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_for_Person_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Provisioning_Group_Assignment_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_for_Person_DataType[] $provisioning_Group_Assignment_Data
     * @return \WorkdayWsdl\\StructType\Person_Account_Provisioning_DataType
     */
    public function setProvisioning_Group_Assignment_Data(array $provisioning_Group_Assignment_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($provisioning_Group_Assignment_DataArrayErrorMessage = self::validateProvisioning_Group_Assignment_DataForArrayConstraintsFromSetProvisioning_Group_Assignment_Data($provisioning_Group_Assignment_Data))) {
            throw new \InvalidArgumentException($provisioning_Group_Assignment_DataArrayErrorMessage, __LINE__);
        }
        $this->Provisioning_Group_Assignment_Data = $provisioning_Group_Assignment_Data;
        return $this;
    }
    /**
     * Add item to Provisioning_Group_Assignment_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_for_Person_DataType $item
     * @return \WorkdayWsdl\\StructType\Person_Account_Provisioning_DataType
     */
    public function addToProvisioning_Group_Assignment_Data(\WorkdayWsdl\\StructType\Provisioning_Group_Assignment_for_Person_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_for_Person_DataType) {
            throw new \InvalidArgumentException(sprintf('The Provisioning_Group_Assignment_Data property can only contain items of type \WorkdayWsdl\\StructType\Provisioning_Group_Assignment_for_Person_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Provisioning_Group_Assignment_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Person_Account_Provisioning_DataType
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
