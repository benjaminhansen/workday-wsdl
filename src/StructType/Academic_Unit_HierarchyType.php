<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Unit_HierarchyType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Academic Unit Hierarchy reference and associated data.\
 * @subpackage Structs
 */
class Academic_Unit_HierarchyType extends AbstractStructBase
{
    /**
     * The Academic_Unit_Hierarchy_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Academic Unit Hierarchy
     * - minOccurs: 0
     * @var \StructType\Academic_Unit_HierarchyObjectType
     */
    public $Academic_Unit_Hierarchy_Reference;
    /**
     * The Academic_Unit_Hierarchy_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Academic_Unit_Hierarchy_DataType[]
     */
    public $Academic_Unit_Hierarchy_Data;
    /**
     * Constructor method for Academic_Unit_HierarchyType
     * @uses Academic_Unit_HierarchyType::setAcademic_Unit_Hierarchy_Reference()
     * @uses Academic_Unit_HierarchyType::setAcademic_Unit_Hierarchy_Data()
     * @param \StructType\Academic_Unit_HierarchyObjectType $academic_Unit_Hierarchy_Reference
     * @param \StructType\Academic_Unit_Hierarchy_DataType[] $academic_Unit_Hierarchy_Data
     */
    public function __construct(\StructType\Academic_Unit_HierarchyObjectType $academic_Unit_Hierarchy_Reference = null, array $academic_Unit_Hierarchy_Data = array())
    {
        $this
            ->setAcademic_Unit_Hierarchy_Reference($academic_Unit_Hierarchy_Reference)
            ->setAcademic_Unit_Hierarchy_Data($academic_Unit_Hierarchy_Data);
    }
    /**
     * Get Academic_Unit_Hierarchy_Reference value
     * @return \StructType\Academic_Unit_HierarchyObjectType|null
     */
    public function getAcademic_Unit_Hierarchy_Reference()
    {
        return $this->Academic_Unit_Hierarchy_Reference;
    }
    /**
     * Set Academic_Unit_Hierarchy_Reference value
     * @param \StructType\Academic_Unit_HierarchyObjectType $academic_Unit_Hierarchy_Reference
     * @return \StructType\Academic_Unit_HierarchyType
     */
    public function setAcademic_Unit_Hierarchy_Reference(\StructType\Academic_Unit_HierarchyObjectType $academic_Unit_Hierarchy_Reference = null)
    {
        $this->Academic_Unit_Hierarchy_Reference = $academic_Unit_Hierarchy_Reference;
        return $this;
    }
    /**
     * Get Academic_Unit_Hierarchy_Data value
     * @return \StructType\Academic_Unit_Hierarchy_DataType[]|null
     */
    public function getAcademic_Unit_Hierarchy_Data()
    {
        return $this->Academic_Unit_Hierarchy_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAcademic_Unit_Hierarchy_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademic_Unit_Hierarchy_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcademic_Unit_Hierarchy_DataForArrayConstraintsFromSetAcademic_Unit_Hierarchy_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Unit_HierarchyTypeAcademic_Unit_Hierarchy_DataItem) {
            // validation for constraint: itemType
            if (!$academic_Unit_HierarchyTypeAcademic_Unit_Hierarchy_DataItem instanceof \StructType\Academic_Unit_Hierarchy_DataType) {
                $invalidValues[] = is_object($academic_Unit_HierarchyTypeAcademic_Unit_Hierarchy_DataItem) ? get_class($academic_Unit_HierarchyTypeAcademic_Unit_Hierarchy_DataItem) : sprintf('%s(%s)', gettype($academic_Unit_HierarchyTypeAcademic_Unit_Hierarchy_DataItem), var_export($academic_Unit_HierarchyTypeAcademic_Unit_Hierarchy_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Academic_Unit_Hierarchy_Data property can only contain items of type \StructType\Academic_Unit_Hierarchy_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Academic_Unit_Hierarchy_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_Unit_Hierarchy_DataType[] $academic_Unit_Hierarchy_Data
     * @return \StructType\Academic_Unit_HierarchyType
     */
    public function setAcademic_Unit_Hierarchy_Data(array $academic_Unit_Hierarchy_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($academic_Unit_Hierarchy_DataArrayErrorMessage = self::validateAcademic_Unit_Hierarchy_DataForArrayConstraintsFromSetAcademic_Unit_Hierarchy_Data($academic_Unit_Hierarchy_Data))) {
            throw new \InvalidArgumentException($academic_Unit_Hierarchy_DataArrayErrorMessage, __LINE__);
        }
        $this->Academic_Unit_Hierarchy_Data = $academic_Unit_Hierarchy_Data;
        return $this;
    }
    /**
     * Add item to Academic_Unit_Hierarchy_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_Unit_Hierarchy_DataType $item
     * @return \StructType\Academic_Unit_HierarchyType
     */
    public function addToAcademic_Unit_Hierarchy_Data(\StructType\Academic_Unit_Hierarchy_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Academic_Unit_Hierarchy_DataType) {
            throw new \InvalidArgumentException(sprintf('The Academic_Unit_Hierarchy_Data property can only contain items of type \StructType\Academic_Unit_Hierarchy_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Academic_Unit_Hierarchy_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Academic_Unit_HierarchyType
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
