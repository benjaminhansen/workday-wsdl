<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_Members_to_Custom_Organization_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Sub element of the request having positions to add/remove.
 * @subpackage Structs
 */
class Assign_Members_to_Custom_Organization_DataType extends AbstractStructBase
{
    /**
     * The Reorganization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reorganization determines the effective date that positions are added as a member
     * @var \WorkdayWsdl\\StructType\ReorganizationObjectType
     */
    public $Reorganization_Reference;
    /**
     * The Positions_to_Add_Reference
     * Meta information extracted from the WSDL
     * - documentation: The position or position restriction you want to add to the custom organization. For position restrictions, Workday uses the reorganization effective date to determine the position. When a position restriction has job overlap as of
     * the reorganization effective date, Workday assigns membership to the principal and overlap positions. If the position is unavailable or unfilled as of the date you view the custom organization it's assigned to, Workday doesn't display it.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_ElementObjectType[]
     */
    public $Positions_to_Add_Reference;
    /**
     * The Positions_to_Remove_Reference
     * Meta information extracted from the WSDL
     * - documentation: Positions to be removed from the custom organization.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_ElementObjectType[]
     */
    public $Positions_to_Remove_Reference;
    /**
     * Constructor method for Assign_Members_to_Custom_Organization_DataType
     * @uses Assign_Members_to_Custom_Organization_DataType::setReorganization_Reference()
     * @uses Assign_Members_to_Custom_Organization_DataType::setPositions_to_Add_Reference()
     * @uses Assign_Members_to_Custom_Organization_DataType::setPositions_to_Remove_Reference()
     * @param \WorkdayWsdl\\StructType\ReorganizationObjectType $reorganization_Reference
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType[] $positions_to_Add_Reference
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType[] $positions_to_Remove_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\ReorganizationObjectType $reorganization_Reference = null, array $positions_to_Add_Reference = array(), array $positions_to_Remove_Reference = array())
    {
        $this
            ->setReorganization_Reference($reorganization_Reference)
            ->setPositions_to_Add_Reference($positions_to_Add_Reference)
            ->setPositions_to_Remove_Reference($positions_to_Remove_Reference);
    }
    /**
     * Get Reorganization_Reference value
     * @return \WorkdayWsdl\\StructType\ReorganizationObjectType|null
     */
    public function getReorganization_Reference()
    {
        return $this->Reorganization_Reference;
    }
    /**
     * Set Reorganization_Reference value
     * @param \WorkdayWsdl\\StructType\ReorganizationObjectType $reorganization_Reference
     * @return \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_DataType
     */
    public function setReorganization_Reference(\WorkdayWsdl\\StructType\ReorganizationObjectType $reorganization_Reference = null)
    {
        $this->Reorganization_Reference = $reorganization_Reference;
        return $this;
    }
    /**
     * Get Positions_to_Add_Reference value
     * @return \WorkdayWsdl\\StructType\Position_ElementObjectType[]|null
     */
    public function getPositions_to_Add_Reference()
    {
        return $this->Positions_to_Add_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setPositions_to_Add_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPositions_to_Add_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePositions_to_Add_ReferenceForArrayConstraintsFromSetPositions_to_Add_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $assign_Members_to_Custom_Organization_DataTypePositions_to_Add_ReferenceItem) {
            // validation for constraint: itemType
            if (!$assign_Members_to_Custom_Organization_DataTypePositions_to_Add_ReferenceItem instanceof \WorkdayWsdl\\StructType\Position_ElementObjectType) {
                $invalidValues[] = is_object($assign_Members_to_Custom_Organization_DataTypePositions_to_Add_ReferenceItem) ? get_class($assign_Members_to_Custom_Organization_DataTypePositions_to_Add_ReferenceItem) : sprintf('%s(%s)', gettype($assign_Members_to_Custom_Organization_DataTypePositions_to_Add_ReferenceItem), var_export($assign_Members_to_Custom_Organization_DataTypePositions_to_Add_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Positions_to_Add_Reference property can only contain items of type \WorkdayWsdl\\StructType\Position_ElementObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Positions_to_Add_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType[] $positions_to_Add_Reference
     * @return \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_DataType
     */
    public function setPositions_to_Add_Reference(array $positions_to_Add_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($positions_to_Add_ReferenceArrayErrorMessage = self::validatePositions_to_Add_ReferenceForArrayConstraintsFromSetPositions_to_Add_Reference($positions_to_Add_Reference))) {
            throw new \InvalidArgumentException($positions_to_Add_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Positions_to_Add_Reference = $positions_to_Add_Reference;
        return $this;
    }
    /**
     * Add item to Positions_to_Add_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType $item
     * @return \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_DataType
     */
    public function addToPositions_to_Add_Reference(\WorkdayWsdl\\StructType\Position_ElementObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Position_ElementObjectType) {
            throw new \InvalidArgumentException(sprintf('The Positions_to_Add_Reference property can only contain items of type \WorkdayWsdl\\StructType\Position_ElementObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Positions_to_Add_Reference[] = $item;
        return $this;
    }
    /**
     * Get Positions_to_Remove_Reference value
     * @return \WorkdayWsdl\\StructType\Position_ElementObjectType[]|null
     */
    public function getPositions_to_Remove_Reference()
    {
        return $this->Positions_to_Remove_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setPositions_to_Remove_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPositions_to_Remove_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePositions_to_Remove_ReferenceForArrayConstraintsFromSetPositions_to_Remove_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $assign_Members_to_Custom_Organization_DataTypePositions_to_Remove_ReferenceItem) {
            // validation for constraint: itemType
            if (!$assign_Members_to_Custom_Organization_DataTypePositions_to_Remove_ReferenceItem instanceof \WorkdayWsdl\\StructType\Position_ElementObjectType) {
                $invalidValues[] = is_object($assign_Members_to_Custom_Organization_DataTypePositions_to_Remove_ReferenceItem) ? get_class($assign_Members_to_Custom_Organization_DataTypePositions_to_Remove_ReferenceItem) : sprintf('%s(%s)', gettype($assign_Members_to_Custom_Organization_DataTypePositions_to_Remove_ReferenceItem), var_export($assign_Members_to_Custom_Organization_DataTypePositions_to_Remove_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Positions_to_Remove_Reference property can only contain items of type \WorkdayWsdl\\StructType\Position_ElementObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Positions_to_Remove_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType[] $positions_to_Remove_Reference
     * @return \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_DataType
     */
    public function setPositions_to_Remove_Reference(array $positions_to_Remove_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($positions_to_Remove_ReferenceArrayErrorMessage = self::validatePositions_to_Remove_ReferenceForArrayConstraintsFromSetPositions_to_Remove_Reference($positions_to_Remove_Reference))) {
            throw new \InvalidArgumentException($positions_to_Remove_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Positions_to_Remove_Reference = $positions_to_Remove_Reference;
        return $this;
    }
    /**
     * Add item to Positions_to_Remove_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType $item
     * @return \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_DataType
     */
    public function addToPositions_to_Remove_Reference(\WorkdayWsdl\\StructType\Position_ElementObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Position_ElementObjectType) {
            throw new \InvalidArgumentException(sprintf('The Positions_to_Remove_Reference property can only contain items of type \WorkdayWsdl\\StructType\Position_ElementObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Positions_to_Remove_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_DataType
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
