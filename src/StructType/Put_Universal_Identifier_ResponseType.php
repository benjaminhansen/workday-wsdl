<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Universal_Identifier_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Universal Identifier Response
 * @subpackage Structs
 */
class Put_Universal_Identifier_ResponseType extends AbstractStructBase
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
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Universal_Identifier_ResponseType
     * @uses Put_Universal_Identifier_ResponseType::setPerson_Reference()
     * @uses Put_Universal_Identifier_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\RoleObjectType[] $person_Reference
     * @param string $version
     */
    public function __construct(array $person_Reference = array(), $version = null)
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setVersion($version);
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
        foreach ($values as $put_Universal_Identifier_ResponseTypePerson_ReferenceItem) {
            // validation for constraint: itemType
            if (!$put_Universal_Identifier_ResponseTypePerson_ReferenceItem instanceof \WorkdayWsdl\\StructType\RoleObjectType) {
                $invalidValues[] = is_object($put_Universal_Identifier_ResponseTypePerson_ReferenceItem) ? get_class($put_Universal_Identifier_ResponseTypePerson_ReferenceItem) : sprintf('%s(%s)', gettype($put_Universal_Identifier_ResponseTypePerson_ReferenceItem), var_export($put_Universal_Identifier_ResponseTypePerson_ReferenceItem, true));
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
     * @return \WorkdayWsdl\\StructType\Put_Universal_Identifier_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Universal_Identifier_ResponseType
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
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \WorkdayWsdl\\StructType\Put_Universal_Identifier_ResponseType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Put_Universal_Identifier_ResponseType
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
