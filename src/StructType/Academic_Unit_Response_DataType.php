<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Unit_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: A container for Academic Unit responses
 * @subpackage Structs
 */
class Academic_Unit_Response_DataType extends AbstractStructBase
{
    /**
     * The Academic_Unit
     * Meta information extracted from the WSDL
     * - documentation: A container for Academic Unit Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_UnitType[]
     */
    public $Academic_Unit;
    /**
     * Constructor method for Academic_Unit_Response_DataType
     * @uses Academic_Unit_Response_DataType::setAcademic_Unit()
     * @param \WorkdayWsdl\\StructType\Academic_UnitType[] $academic_Unit
     */
    public function __construct(array $academic_Unit = array())
    {
        $this
            ->setAcademic_Unit($academic_Unit);
    }
    /**
     * Get Academic_Unit value
     * @return \WorkdayWsdl\\StructType\Academic_UnitType[]|null
     */
    public function getAcademic_Unit()
    {
        return $this->Academic_Unit;
    }
    /**
     * This method is responsible for validating the values passed to the setAcademic_Unit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademic_Unit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcademic_UnitForArrayConstraintsFromSetAcademic_Unit(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Unit_Response_DataTypeAcademic_UnitItem) {
            // validation for constraint: itemType
            if (!$academic_Unit_Response_DataTypeAcademic_UnitItem instanceof \WorkdayWsdl\\StructType\Academic_UnitType) {
                $invalidValues[] = is_object($academic_Unit_Response_DataTypeAcademic_UnitItem) ? get_class($academic_Unit_Response_DataTypeAcademic_UnitItem) : sprintf('%s(%s)', gettype($academic_Unit_Response_DataTypeAcademic_UnitItem), var_export($academic_Unit_Response_DataTypeAcademic_UnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Academic_Unit property can only contain items of type \WorkdayWsdl\\StructType\Academic_UnitType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Academic_Unit value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_UnitType[] $academic_Unit
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Response_DataType
     */
    public function setAcademic_Unit(array $academic_Unit = array())
    {
        // validation for constraint: array
        if ('' !== ($academic_UnitArrayErrorMessage = self::validateAcademic_UnitForArrayConstraintsFromSetAcademic_Unit($academic_Unit))) {
            throw new \InvalidArgumentException($academic_UnitArrayErrorMessage, __LINE__);
        }
        $this->Academic_Unit = $academic_Unit;
        return $this;
    }
    /**
     * Add item to Academic_Unit value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_UnitType $item
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Response_DataType
     */
    public function addToAcademic_Unit(\WorkdayWsdl\\StructType\Academic_UnitType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Academic_UnitType) {
            throw new \InvalidArgumentException(sprintf('The Academic_Unit property can only contain items of type \WorkdayWsdl\\StructType\Academic_UnitType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Academic_Unit[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Response_DataType
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
