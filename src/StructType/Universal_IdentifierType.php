<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Universal_IdentifierType StructType
 * Meta information extracted from the WSDL
 * - documentation: Universal Identifier
 * @subpackage Structs
 */
class Universal_IdentifierType extends AbstractStructBase
{
    /**
     * The Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: Person Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\RoleObjectType
     */
    public $Person_Reference;
    /**
     * The Universal_Identifier_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Universal_Identifier_DataType[]
     */
    public $Universal_Identifier_Data;
    /**
     * Constructor method for Universal_IdentifierType
     * @uses Universal_IdentifierType::setPerson_Reference()
     * @uses Universal_IdentifierType::setUniversal_Identifier_Data()
     * @param \WorkdayWsdl\\StructType\RoleObjectType $person_Reference
     * @param \WorkdayWsdl\\StructType\Universal_Identifier_DataType[] $universal_Identifier_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null, array $universal_Identifier_Data = array())
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setUniversal_Identifier_Data($universal_Identifier_Data);
    }
    /**
     * Get Person_Reference value
     * @return \WorkdayWsdl\\StructType\RoleObjectType|null
     */
    public function getPerson_Reference()
    {
        return $this->Person_Reference;
    }
    /**
     * Set Person_Reference value
     * @param \WorkdayWsdl\\StructType\RoleObjectType $person_Reference
     * @return \WorkdayWsdl\\StructType\Universal_IdentifierType
     */
    public function setPerson_Reference(\WorkdayWsdl\\StructType\RoleObjectType $person_Reference = null)
    {
        $this->Person_Reference = $person_Reference;
        return $this;
    }
    /**
     * Get Universal_Identifier_Data value
     * @return \WorkdayWsdl\\StructType\Universal_Identifier_DataType[]|null
     */
    public function getUniversal_Identifier_Data()
    {
        return $this->Universal_Identifier_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setUniversal_Identifier_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUniversal_Identifier_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUniversal_Identifier_DataForArrayConstraintsFromSetUniversal_Identifier_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $universal_IdentifierTypeUniversal_Identifier_DataItem) {
            // validation for constraint: itemType
            if (!$universal_IdentifierTypeUniversal_Identifier_DataItem instanceof \WorkdayWsdl\\StructType\Universal_Identifier_DataType) {
                $invalidValues[] = is_object($universal_IdentifierTypeUniversal_Identifier_DataItem) ? get_class($universal_IdentifierTypeUniversal_Identifier_DataItem) : sprintf('%s(%s)', gettype($universal_IdentifierTypeUniversal_Identifier_DataItem), var_export($universal_IdentifierTypeUniversal_Identifier_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Universal_Identifier_Data property can only contain items of type \WorkdayWsdl\\StructType\Universal_Identifier_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Universal_Identifier_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Universal_Identifier_DataType[] $universal_Identifier_Data
     * @return \WorkdayWsdl\\StructType\Universal_IdentifierType
     */
    public function setUniversal_Identifier_Data(array $universal_Identifier_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($universal_Identifier_DataArrayErrorMessage = self::validateUniversal_Identifier_DataForArrayConstraintsFromSetUniversal_Identifier_Data($universal_Identifier_Data))) {
            throw new \InvalidArgumentException($universal_Identifier_DataArrayErrorMessage, __LINE__);
        }
        $this->Universal_Identifier_Data = $universal_Identifier_Data;
        return $this;
    }
    /**
     * Add item to Universal_Identifier_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Universal_Identifier_DataType $item
     * @return \WorkdayWsdl\\StructType\Universal_IdentifierType
     */
    public function addToUniversal_Identifier_Data(\WorkdayWsdl\\StructType\Universal_Identifier_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Universal_Identifier_DataType) {
            throw new \InvalidArgumentException(sprintf('The Universal_Identifier_Data property can only contain items of type \WorkdayWsdl\\StructType\Universal_Identifier_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Universal_Identifier_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Universal_IdentifierType
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
