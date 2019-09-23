<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Specialty_Achievement_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains data about each Specialty-Subspecialty combination associated with the certification achievement
 * @subpackage Structs
 */
class Specialty_Achievement_DataType extends AbstractStructBase
{
    /**
     * The Specialty_Reference
     * Meta information extracted from the WSDL
     * - documentation: Enter the Speciality associated with the certification achievement.
     * - minOccurs: 0
     * @var \StructType\Specialty_ParentObjectType
     */
    public $Specialty_Reference;
    /**
     * The Subspecialty_Reference
     * Meta information extracted from the WSDL
     * - documentation: Enter the subspecialty ID associated with the specialty.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Specialty_ChildObjectType[]
     */
    public $Subspecialty_Reference;
    /**
     * Constructor method for Specialty_Achievement_DataType
     * @uses Specialty_Achievement_DataType::setSpecialty_Reference()
     * @uses Specialty_Achievement_DataType::setSubspecialty_Reference()
     * @param \StructType\Specialty_ParentObjectType $specialty_Reference
     * @param \StructType\Specialty_ChildObjectType[] $subspecialty_Reference
     */
    public function __construct(\StructType\Specialty_ParentObjectType $specialty_Reference = null, array $subspecialty_Reference = array())
    {
        $this
            ->setSpecialty_Reference($specialty_Reference)
            ->setSubspecialty_Reference($subspecialty_Reference);
    }
    /**
     * Get Specialty_Reference value
     * @return \StructType\Specialty_ParentObjectType|null
     */
    public function getSpecialty_Reference()
    {
        return $this->Specialty_Reference;
    }
    /**
     * Set Specialty_Reference value
     * @param \StructType\Specialty_ParentObjectType $specialty_Reference
     * @return \StructType\Specialty_Achievement_DataType
     */
    public function setSpecialty_Reference(\StructType\Specialty_ParentObjectType $specialty_Reference = null)
    {
        $this->Specialty_Reference = $specialty_Reference;
        return $this;
    }
    /**
     * Get Subspecialty_Reference value
     * @return \StructType\Specialty_ChildObjectType[]|null
     */
    public function getSubspecialty_Reference()
    {
        return $this->Subspecialty_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setSubspecialty_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubspecialty_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubspecialty_ReferenceForArrayConstraintsFromSetSubspecialty_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $specialty_Achievement_DataTypeSubspecialty_ReferenceItem) {
            // validation for constraint: itemType
            if (!$specialty_Achievement_DataTypeSubspecialty_ReferenceItem instanceof \StructType\Specialty_ChildObjectType) {
                $invalidValues[] = is_object($specialty_Achievement_DataTypeSubspecialty_ReferenceItem) ? get_class($specialty_Achievement_DataTypeSubspecialty_ReferenceItem) : sprintf('%s(%s)', gettype($specialty_Achievement_DataTypeSubspecialty_ReferenceItem), var_export($specialty_Achievement_DataTypeSubspecialty_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Subspecialty_Reference property can only contain items of type \StructType\Specialty_ChildObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Subspecialty_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Specialty_ChildObjectType[] $subspecialty_Reference
     * @return \StructType\Specialty_Achievement_DataType
     */
    public function setSubspecialty_Reference(array $subspecialty_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($subspecialty_ReferenceArrayErrorMessage = self::validateSubspecialty_ReferenceForArrayConstraintsFromSetSubspecialty_Reference($subspecialty_Reference))) {
            throw new \InvalidArgumentException($subspecialty_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Subspecialty_Reference = $subspecialty_Reference;
        return $this;
    }
    /**
     * Add item to Subspecialty_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Specialty_ChildObjectType $item
     * @return \StructType\Specialty_Achievement_DataType
     */
    public function addToSubspecialty_Reference(\StructType\Specialty_ChildObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Specialty_ChildObjectType) {
            throw new \InvalidArgumentException(sprintf('The Subspecialty_Reference property can only contain items of type \StructType\Specialty_ChildObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Subspecialty_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Specialty_Achievement_DataType
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
