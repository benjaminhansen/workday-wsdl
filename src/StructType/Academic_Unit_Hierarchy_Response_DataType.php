<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Unit_Hierarchy_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Academic Unit Hierarchies
 * @subpackage Structs
 */
class Academic_Unit_Hierarchy_Response_DataType extends AbstractStructBase
{
    /**
     * The Academic_Unit_Hierarchy
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_Unit_HierarchyType[]
     */
    public $Academic_Unit_Hierarchy;
    /**
     * Constructor method for Academic_Unit_Hierarchy_Response_DataType
     * @uses Academic_Unit_Hierarchy_Response_DataType::setAcademic_Unit_Hierarchy()
     * @param \WorkdayWsdl\\StructType\Academic_Unit_HierarchyType[] $academic_Unit_Hierarchy
     */
    public function __construct(array $academic_Unit_Hierarchy = array())
    {
        $this
            ->setAcademic_Unit_Hierarchy($academic_Unit_Hierarchy);
    }
    /**
     * Get Academic_Unit_Hierarchy value
     * @return \WorkdayWsdl\\StructType\Academic_Unit_HierarchyType[]|null
     */
    public function getAcademic_Unit_Hierarchy()
    {
        return $this->Academic_Unit_Hierarchy;
    }
    /**
     * This method is responsible for validating the values passed to the setAcademic_Unit_Hierarchy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademic_Unit_Hierarchy method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcademic_Unit_HierarchyForArrayConstraintsFromSetAcademic_Unit_Hierarchy(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Unit_Hierarchy_Response_DataTypeAcademic_Unit_HierarchyItem) {
            // validation for constraint: itemType
            if (!$academic_Unit_Hierarchy_Response_DataTypeAcademic_Unit_HierarchyItem instanceof \WorkdayWsdl\\StructType\Academic_Unit_HierarchyType) {
                $invalidValues[] = is_object($academic_Unit_Hierarchy_Response_DataTypeAcademic_Unit_HierarchyItem) ? get_class($academic_Unit_Hierarchy_Response_DataTypeAcademic_Unit_HierarchyItem) : sprintf('%s(%s)', gettype($academic_Unit_Hierarchy_Response_DataTypeAcademic_Unit_HierarchyItem), var_export($academic_Unit_Hierarchy_Response_DataTypeAcademic_Unit_HierarchyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Academic_Unit_Hierarchy property can only contain items of type \WorkdayWsdl\\StructType\Academic_Unit_HierarchyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Academic_Unit_Hierarchy value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_Unit_HierarchyType[] $academic_Unit_Hierarchy
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_Response_DataType
     */
    public function setAcademic_Unit_Hierarchy(array $academic_Unit_Hierarchy = array())
    {
        // validation for constraint: array
        if ('' !== ($academic_Unit_HierarchyArrayErrorMessage = self::validateAcademic_Unit_HierarchyForArrayConstraintsFromSetAcademic_Unit_Hierarchy($academic_Unit_Hierarchy))) {
            throw new \InvalidArgumentException($academic_Unit_HierarchyArrayErrorMessage, __LINE__);
        }
        $this->Academic_Unit_Hierarchy = $academic_Unit_Hierarchy;
        return $this;
    }
    /**
     * Add item to Academic_Unit_Hierarchy value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_Unit_HierarchyType $item
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_Response_DataType
     */
    public function addToAcademic_Unit_Hierarchy(\WorkdayWsdl\\StructType\Academic_Unit_HierarchyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Academic_Unit_HierarchyType) {
            throw new \InvalidArgumentException(sprintf('The Academic_Unit_Hierarchy property can only contain items of type \WorkdayWsdl\\StructType\Academic_Unit_HierarchyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Academic_Unit_Hierarchy[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_Response_DataType
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
