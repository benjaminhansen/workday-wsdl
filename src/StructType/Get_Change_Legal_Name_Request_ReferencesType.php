<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Change_Legal_Name_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of Worker and its associated data.
 * @subpackage Structs
 */
class Get_Change_Legal_Name_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the ID of a role associated with a person. Roles are like worker, student, external student etc. The ID consists of a type attribute which should be set to 'Employee_ID' or "Contingent_Worker_ID", for worker or
     * 'Academic_Person_ID' for a student
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\RoleObjectType[]
     */
    public $Person_Reference;
    /**
     * The Universal_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the Universal ID for a person
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Universal_IdentifierObjectType[]
     */
    public $Universal_ID_Reference;
    /**
     * Constructor method for Get_Change_Legal_Name_Request_ReferencesType
     * @uses Get_Change_Legal_Name_Request_ReferencesType::setPerson_Reference()
     * @uses Get_Change_Legal_Name_Request_ReferencesType::setUniversal_ID_Reference()
     * @param \WorkdayWsdl\\StructType\RoleObjectType[] $person_Reference
     * @param \WorkdayWsdl\\StructType\Universal_IdentifierObjectType[] $universal_ID_Reference
     */
    public function __construct(array $person_Reference = array(), array $universal_ID_Reference = array())
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setUniversal_ID_Reference($universal_ID_Reference);
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
        foreach ($values as $get_Change_Legal_Name_Request_ReferencesTypePerson_ReferenceItem) {
            // validation for constraint: itemType
            if (!$get_Change_Legal_Name_Request_ReferencesTypePerson_ReferenceItem instanceof \WorkdayWsdl\\StructType\RoleObjectType) {
                $invalidValues[] = is_object($get_Change_Legal_Name_Request_ReferencesTypePerson_ReferenceItem) ? get_class($get_Change_Legal_Name_Request_ReferencesTypePerson_ReferenceItem) : sprintf('%s(%s)', gettype($get_Change_Legal_Name_Request_ReferencesTypePerson_ReferenceItem), var_export($get_Change_Legal_Name_Request_ReferencesTypePerson_ReferenceItem, true));
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
     * @return \WorkdayWsdl\\StructType\Get_Change_Legal_Name_Request_ReferencesType
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
     * @return \WorkdayWsdl\\StructType\Get_Change_Legal_Name_Request_ReferencesType
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
     * Get Universal_ID_Reference value
     * @return \WorkdayWsdl\\StructType\Universal_IdentifierObjectType[]|null
     */
    public function getUniversal_ID_Reference()
    {
        return $this->Universal_ID_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setUniversal_ID_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUniversal_ID_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUniversal_ID_ReferenceForArrayConstraintsFromSetUniversal_ID_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $get_Change_Legal_Name_Request_ReferencesTypeUniversal_ID_ReferenceItem) {
            // validation for constraint: itemType
            if (!$get_Change_Legal_Name_Request_ReferencesTypeUniversal_ID_ReferenceItem instanceof \WorkdayWsdl\\StructType\Universal_IdentifierObjectType) {
                $invalidValues[] = is_object($get_Change_Legal_Name_Request_ReferencesTypeUniversal_ID_ReferenceItem) ? get_class($get_Change_Legal_Name_Request_ReferencesTypeUniversal_ID_ReferenceItem) : sprintf('%s(%s)', gettype($get_Change_Legal_Name_Request_ReferencesTypeUniversal_ID_ReferenceItem), var_export($get_Change_Legal_Name_Request_ReferencesTypeUniversal_ID_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Universal_ID_Reference property can only contain items of type \WorkdayWsdl\\StructType\Universal_IdentifierObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Universal_ID_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Universal_IdentifierObjectType[] $universal_ID_Reference
     * @return \WorkdayWsdl\\StructType\Get_Change_Legal_Name_Request_ReferencesType
     */
    public function setUniversal_ID_Reference(array $universal_ID_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($universal_ID_ReferenceArrayErrorMessage = self::validateUniversal_ID_ReferenceForArrayConstraintsFromSetUniversal_ID_Reference($universal_ID_Reference))) {
            throw new \InvalidArgumentException($universal_ID_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Universal_ID_Reference = $universal_ID_Reference;
        return $this;
    }
    /**
     * Add item to Universal_ID_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Universal_IdentifierObjectType $item
     * @return \WorkdayWsdl\\StructType\Get_Change_Legal_Name_Request_ReferencesType
     */
    public function addToUniversal_ID_Reference(\WorkdayWsdl\\StructType\Universal_IdentifierObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Universal_IdentifierObjectType) {
            throw new \InvalidArgumentException(sprintf('The Universal_ID_Reference property can only contain items of type \WorkdayWsdl\\StructType\Universal_IdentifierObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Universal_ID_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Get_Change_Legal_Name_Request_ReferencesType
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
