<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Shift_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing reference instance for a Work Shift.
 * @subpackage Structs
 */
class Work_Shift_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Work_Shift_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a Work Shift.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Work_ShiftObjectType[]
     */
    public $Work_Shift_Reference;
    /**
     * Constructor method for Work_Shift_Request_ReferencesType
     * @uses Work_Shift_Request_ReferencesType::setWork_Shift_Reference()
     * @param \StructType\Work_ShiftObjectType[] $work_Shift_Reference
     */
    public function __construct(array $work_Shift_Reference = array())
    {
        $this
            ->setWork_Shift_Reference($work_Shift_Reference);
    }
    /**
     * Get Work_Shift_Reference value
     * @return \StructType\Work_ShiftObjectType[]|null
     */
    public function getWork_Shift_Reference()
    {
        return $this->Work_Shift_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Shift_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Shift_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Shift_ReferenceForArrayConstraintsFromSetWork_Shift_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Shift_Request_ReferencesTypeWork_Shift_ReferenceItem) {
            // validation for constraint: itemType
            if (!$work_Shift_Request_ReferencesTypeWork_Shift_ReferenceItem instanceof \StructType\Work_ShiftObjectType) {
                $invalidValues[] = is_object($work_Shift_Request_ReferencesTypeWork_Shift_ReferenceItem) ? get_class($work_Shift_Request_ReferencesTypeWork_Shift_ReferenceItem) : sprintf('%s(%s)', gettype($work_Shift_Request_ReferencesTypeWork_Shift_ReferenceItem), var_export($work_Shift_Request_ReferencesTypeWork_Shift_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Shift_Reference property can only contain items of type \StructType\Work_ShiftObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Shift_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_ShiftObjectType[] $work_Shift_Reference
     * @return \StructType\Work_Shift_Request_ReferencesType
     */
    public function setWork_Shift_Reference(array $work_Shift_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Shift_ReferenceArrayErrorMessage = self::validateWork_Shift_ReferenceForArrayConstraintsFromSetWork_Shift_Reference($work_Shift_Reference))) {
            throw new \InvalidArgumentException($work_Shift_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Work_Shift_Reference = $work_Shift_Reference;
        return $this;
    }
    /**
     * Add item to Work_Shift_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_ShiftObjectType $item
     * @return \StructType\Work_Shift_Request_ReferencesType
     */
    public function addToWork_Shift_Reference(\StructType\Work_ShiftObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Work_ShiftObjectType) {
            throw new \InvalidArgumentException(sprintf('The Work_Shift_Reference property can only contain items of type \StructType\Work_ShiftObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Shift_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Work_Shift_Request_ReferencesType
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
