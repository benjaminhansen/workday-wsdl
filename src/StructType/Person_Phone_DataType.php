<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Phone_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Primary Phone can't be deleted when there are additional phones with the same Usage Type or the phone reference does not belong to the processing record. | Phone Reference must match an existing (and not deleted) phone in use by the
 * person subject of this request. | Phone Data and Usage Data elements are required unless phone is being deleted. | You cannot specify the same usage type more than once for a contact instance. | Phone Reference is required when you delete a phone
 * number. | Country Code is required unless the device type is VOIP. | You can't change a primary phone to an additional phone or an additional phone to a primary phone. | Invalid Usage Type and Use For combination for Phone. | A phone instance.
 * @subpackage Structs
 */
class Person_Phone_DataType extends AbstractStructBase
{
    /**
     * The Phone_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for all core Phone data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Phone_Core_DataType[]
     */
    public $Phone_Data;
    /**
     * The Usage_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for all Communication Method Usage data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Communication_Method_Usage_Information_DataType[]
     */
    public $Usage_Data;
    /**
     * The Phone_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Phone Reference ID.
     * - minOccurs: 0
     * @var \StructType\Phone_ReferenceObjectType
     */
    public $Phone_Reference;
    /**
     * The Phone_ID
     * Meta information extracted from the WSDL
     * - documentation: New ID value used in phone updates. The ID cannot already be in use by another phone.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Phone_ID;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Set this flag to true in order to delete the referenced communication method. If this flag is set, the Reference ID field becomes required, and all other communication method fields that would otherwise be required will be optional
     * and meaningless.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Person_Phone_DataType
     * @uses Person_Phone_DataType::setPhone_Data()
     * @uses Person_Phone_DataType::setUsage_Data()
     * @uses Person_Phone_DataType::setPhone_Reference()
     * @uses Person_Phone_DataType::setPhone_ID()
     * @uses Person_Phone_DataType::setDelete()
     * @param \StructType\Phone_Core_DataType[] $phone_Data
     * @param \StructType\Communication_Method_Usage_Information_DataType[] $usage_Data
     * @param \StructType\Phone_ReferenceObjectType $phone_Reference
     * @param string $phone_ID
     * @param bool $delete
     */
    public function __construct(array $phone_Data = array(), array $usage_Data = array(), \StructType\Phone_ReferenceObjectType $phone_Reference = null, $phone_ID = null, $delete = null)
    {
        $this
            ->setPhone_Data($phone_Data)
            ->setUsage_Data($usage_Data)
            ->setPhone_Reference($phone_Reference)
            ->setPhone_ID($phone_ID)
            ->setDelete($delete);
    }
    /**
     * Get Phone_Data value
     * @return \StructType\Phone_Core_DataType[]|null
     */
    public function getPhone_Data()
    {
        return $this->Phone_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPhone_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhone_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhone_DataForArrayConstraintsFromSetPhone_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Phone_DataTypePhone_DataItem) {
            // validation for constraint: itemType
            if (!$person_Phone_DataTypePhone_DataItem instanceof \StructType\Phone_Core_DataType) {
                $invalidValues[] = is_object($person_Phone_DataTypePhone_DataItem) ? get_class($person_Phone_DataTypePhone_DataItem) : sprintf('%s(%s)', gettype($person_Phone_DataTypePhone_DataItem), var_export($person_Phone_DataTypePhone_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Phone_Data property can only contain items of type \StructType\Phone_Core_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Phone_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Phone_Core_DataType[] $phone_Data
     * @return \StructType\Person_Phone_DataType
     */
    public function setPhone_Data(array $phone_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($phone_DataArrayErrorMessage = self::validatePhone_DataForArrayConstraintsFromSetPhone_Data($phone_Data))) {
            throw new \InvalidArgumentException($phone_DataArrayErrorMessage, __LINE__);
        }
        $this->Phone_Data = $phone_Data;
        return $this;
    }
    /**
     * Add item to Phone_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Phone_Core_DataType $item
     * @return \StructType\Person_Phone_DataType
     */
    public function addToPhone_Data(\StructType\Phone_Core_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Phone_Core_DataType) {
            throw new \InvalidArgumentException(sprintf('The Phone_Data property can only contain items of type \StructType\Phone_Core_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Phone_Data[] = $item;
        return $this;
    }
    /**
     * Get Usage_Data value
     * @return \StructType\Communication_Method_Usage_Information_DataType[]|null
     */
    public function getUsage_Data()
    {
        return $this->Usage_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setUsage_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUsage_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUsage_DataForArrayConstraintsFromSetUsage_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $person_Phone_DataTypeUsage_DataItem) {
            // validation for constraint: itemType
            if (!$person_Phone_DataTypeUsage_DataItem instanceof \StructType\Communication_Method_Usage_Information_DataType) {
                $invalidValues[] = is_object($person_Phone_DataTypeUsage_DataItem) ? get_class($person_Phone_DataTypeUsage_DataItem) : sprintf('%s(%s)', gettype($person_Phone_DataTypeUsage_DataItem), var_export($person_Phone_DataTypeUsage_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Usage_Data property can only contain items of type \StructType\Communication_Method_Usage_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Usage_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Communication_Method_Usage_Information_DataType[] $usage_Data
     * @return \StructType\Person_Phone_DataType
     */
    public function setUsage_Data(array $usage_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($usage_DataArrayErrorMessage = self::validateUsage_DataForArrayConstraintsFromSetUsage_Data($usage_Data))) {
            throw new \InvalidArgumentException($usage_DataArrayErrorMessage, __LINE__);
        }
        $this->Usage_Data = $usage_Data;
        return $this;
    }
    /**
     * Add item to Usage_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Communication_Method_Usage_Information_DataType $item
     * @return \StructType\Person_Phone_DataType
     */
    public function addToUsage_Data(\StructType\Communication_Method_Usage_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Communication_Method_Usage_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Usage_Data property can only contain items of type \StructType\Communication_Method_Usage_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Usage_Data[] = $item;
        return $this;
    }
    /**
     * Get Phone_Reference value
     * @return \StructType\Phone_ReferenceObjectType|null
     */
    public function getPhone_Reference()
    {
        return $this->Phone_Reference;
    }
    /**
     * Set Phone_Reference value
     * @param \StructType\Phone_ReferenceObjectType $phone_Reference
     * @return \StructType\Person_Phone_DataType
     */
    public function setPhone_Reference(\StructType\Phone_ReferenceObjectType $phone_Reference = null)
    {
        $this->Phone_Reference = $phone_Reference;
        return $this;
    }
    /**
     * Get Phone_ID value
     * @return string|null
     */
    public function getPhone_ID()
    {
        return $this->Phone_ID;
    }
    /**
     * Set Phone_ID value
     * @param string $phone_ID
     * @return \StructType\Person_Phone_DataType
     */
    public function setPhone_ID($phone_ID = null)
    {
        // validation for constraint: string
        if (!is_null($phone_ID) && !is_string($phone_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone_ID, true), gettype($phone_ID)), __LINE__);
        }
        $this->Phone_ID = $phone_ID;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \StructType\Person_Phone_DataType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Person_Phone_DataType
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
