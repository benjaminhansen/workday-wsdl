<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Universal_Identifier_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request References
 * @subpackage Structs
 */
class Universal_Identifier_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: Person Reference
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RoleObjectType[]
     */
    public $Person_Reference;
    /**
     * Constructor method for Universal_Identifier_Request_ReferencesType
     * @uses Universal_Identifier_Request_ReferencesType::setPerson_Reference()
     * @param \StructType\RoleObjectType[] $person_Reference
     */
    public function __construct(array $person_Reference = array())
    {
        $this
            ->setPerson_Reference($person_Reference);
    }
    /**
     * Get Person_Reference value
     * @return \StructType\RoleObjectType[]|null
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
        foreach ($values as $universal_Identifier_Request_ReferencesTypePerson_ReferenceItem) {
            // validation for constraint: itemType
            if (!$universal_Identifier_Request_ReferencesTypePerson_ReferenceItem instanceof \StructType\RoleObjectType) {
                $invalidValues[] = is_object($universal_Identifier_Request_ReferencesTypePerson_ReferenceItem) ? get_class($universal_Identifier_Request_ReferencesTypePerson_ReferenceItem) : sprintf('%s(%s)', gettype($universal_Identifier_Request_ReferencesTypePerson_ReferenceItem), var_export($universal_Identifier_Request_ReferencesTypePerson_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Person_Reference property can only contain items of type \StructType\RoleObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Person_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\RoleObjectType[] $person_Reference
     * @return \StructType\Universal_Identifier_Request_ReferencesType
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
     * @param \StructType\RoleObjectType $item
     * @return \StructType\Universal_Identifier_Request_ReferencesType
     */
    public function addToPerson_Reference(\StructType\RoleObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RoleObjectType) {
            throw new \InvalidArgumentException(sprintf('The Person_Reference property can only contain items of type \StructType\RoleObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Person_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Universal_Identifier_Request_ReferencesType
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
