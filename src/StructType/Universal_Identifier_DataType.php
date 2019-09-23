<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Universal_Identifier_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Universal Identifier Data
 * @subpackage Structs
 */
class Universal_Identifier_DataType extends AbstractStructBase
{
    /**
     * The Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: Person Reference
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\RoleObjectType[]
     */
    public $Person_Reference;
    /**
     * The Universal_ID
     * Meta information extracted from the WSDL
     * - documentation: Universal ID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Universal_ID;
    /**
     * Constructor method for Universal_Identifier_DataType
     * @uses Universal_Identifier_DataType::setPerson_Reference()
     * @uses Universal_Identifier_DataType::setUniversal_ID()
     * @param \WorkdayWsdl\\StructType\RoleObjectType[] $person_Reference
     * @param string $universal_ID
     */
    public function __construct(array $person_Reference = array(), $universal_ID = null)
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setUniversal_ID($universal_ID);
    }
    /**
     * Get Person_Reference value
     * @return \WorkdayWsdl\\StructType\RoleObjectType[]|null
     */
    public function getPerson_Reference()
    {
        return $this->Person_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setPerson_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPerson_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePerson_ReferenceForArrayConstraintsFromSetPerson_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $universal_Identifier_DataTypePerson_ReferenceItem) {
            // validation for constraint: itemType
            if (!$universal_Identifier_DataTypePerson_ReferenceItem instanceof \WorkdayWsdl\\StructType\RoleObjectType) {
                $invalidValues[] = is_object($universal_Identifier_DataTypePerson_ReferenceItem) ? get_class($universal_Identifier_DataTypePerson_ReferenceItem) : sprintf('%s(%s)', gettype($universal_Identifier_DataTypePerson_ReferenceItem), var_export($universal_Identifier_DataTypePerson_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Person_Reference property can only contain items of type \WorkdayWsdl\\StructType\RoleObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Person_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\RoleObjectType[] $person_Reference
     * @return \WorkdayWsdl\\StructType\Universal_Identifier_DataType
     */
    public function setPerson_Reference(array $person_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($person_ReferenceArrayErrorMessage = self::validatePerson_ReferenceForArrayConstraintsFromSetPerson_Reference($person_Reference))) {
            throw new \InvalidArgumentException($person_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Person_Reference = $person_Reference;
        return $this;
    }
    /**
     * Add item to Person_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\RoleObjectType $item
     * @return \WorkdayWsdl\\StructType\Universal_Identifier_DataType
     */
    public function addToPerson_Reference(\WorkdayWsdl\\StructType\RoleObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\RoleObjectType) {
            throw new \InvalidArgumentException(sprintf('The Person_Reference property can only contain items of type \WorkdayWsdl\\StructType\RoleObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Person_Reference[] = $item;
        return $this;
    }
    /**
     * Get Universal_ID value
     * @return string|null
     */
    public function getUniversal_ID()
    {
        return $this->Universal_ID;
    }
    /**
     * Set Universal_ID value
     * @param string $universal_ID
     * @return \WorkdayWsdl\\StructType\Universal_Identifier_DataType
     */
    public function setUniversal_ID($universal_ID = null)
    {
        // validation for constraint: string
        if (!is_null($universal_ID) && !is_string($universal_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($universal_ID, true), gettype($universal_ID)), __LINE__);
        }
        $this->Universal_ID = $universal_ID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Universal_Identifier_DataType
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
