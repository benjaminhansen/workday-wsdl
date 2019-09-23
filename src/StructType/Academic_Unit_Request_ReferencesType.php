<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Unit_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: A collection of references to one or more Academic Units
 * @subpackage Structs
 */
class Academic_Unit_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Academic_Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: A collection of references to one or more Academic Units
     * - maxOccurs: unbounded
     * @var \StructType\Academic_UnitObjectType[]
     */
    public $Academic_Unit_Reference;
    /**
     * Constructor method for Academic_Unit_Request_ReferencesType
     * @uses Academic_Unit_Request_ReferencesType::setAcademic_Unit_Reference()
     * @param \StructType\Academic_UnitObjectType[] $academic_Unit_Reference
     */
    public function __construct(array $academic_Unit_Reference = array())
    {
        $this
            ->setAcademic_Unit_Reference($academic_Unit_Reference);
    }
    /**
     * Get Academic_Unit_Reference value
     * @return \StructType\Academic_UnitObjectType[]|null
     */
    public function getAcademic_Unit_Reference()
    {
        return $this->Academic_Unit_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setAcademic_Unit_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademic_Unit_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcademic_Unit_ReferenceForArrayConstraintsFromSetAcademic_Unit_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Unit_Request_ReferencesTypeAcademic_Unit_ReferenceItem) {
            // validation for constraint: itemType
            if (!$academic_Unit_Request_ReferencesTypeAcademic_Unit_ReferenceItem instanceof \StructType\Academic_UnitObjectType) {
                $invalidValues[] = is_object($academic_Unit_Request_ReferencesTypeAcademic_Unit_ReferenceItem) ? get_class($academic_Unit_Request_ReferencesTypeAcademic_Unit_ReferenceItem) : sprintf('%s(%s)', gettype($academic_Unit_Request_ReferencesTypeAcademic_Unit_ReferenceItem), var_export($academic_Unit_Request_ReferencesTypeAcademic_Unit_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Academic_Unit_Reference property can only contain items of type \StructType\Academic_UnitObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Academic_Unit_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_UnitObjectType[] $academic_Unit_Reference
     * @return \StructType\Academic_Unit_Request_ReferencesType
     */
    public function setAcademic_Unit_Reference(array $academic_Unit_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($academic_Unit_ReferenceArrayErrorMessage = self::validateAcademic_Unit_ReferenceForArrayConstraintsFromSetAcademic_Unit_Reference($academic_Unit_Reference))) {
            throw new \InvalidArgumentException($academic_Unit_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Academic_Unit_Reference = $academic_Unit_Reference;
        return $this;
    }
    /**
     * Add item to Academic_Unit_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_UnitObjectType $item
     * @return \StructType\Academic_Unit_Request_ReferencesType
     */
    public function addToAcademic_Unit_Reference(\StructType\Academic_UnitObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Academic_UnitObjectType) {
            throw new \InvalidArgumentException(sprintf('The Academic_Unit_Reference property can only contain items of type \StructType\Academic_UnitObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Academic_Unit_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Academic_Unit_Request_ReferencesType
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
