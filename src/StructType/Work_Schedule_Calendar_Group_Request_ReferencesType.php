<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Schedule_Calendar_Group_Request_ReferencesType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Work Schedule Calendar Group references.
 * @subpackage Structs
 */
class Work_Schedule_Calendar_Group_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Work_Schedule_Calendar_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Work Schedule Calendar Group.
     * - maxOccurs: unbounded
     * @var \StructType\Work_Schedule_Calendar_GroupObjectType[]
     */
    public $Work_Schedule_Calendar_Group_Reference;
    /**
     * Constructor method for Work_Schedule_Calendar_Group_Request_ReferencesType
     * @uses Work_Schedule_Calendar_Group_Request_ReferencesType::setWork_Schedule_Calendar_Group_Reference()
     * @param \StructType\Work_Schedule_Calendar_GroupObjectType[] $work_Schedule_Calendar_Group_Reference
     */
    public function __construct(array $work_Schedule_Calendar_Group_Reference = array())
    {
        $this
            ->setWork_Schedule_Calendar_Group_Reference($work_Schedule_Calendar_Group_Reference);
    }
    /**
     * Get Work_Schedule_Calendar_Group_Reference value
     * @return \StructType\Work_Schedule_Calendar_GroupObjectType[]|null
     */
    public function getWork_Schedule_Calendar_Group_Reference()
    {
        return $this->Work_Schedule_Calendar_Group_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Schedule_Calendar_Group_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Schedule_Calendar_Group_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Schedule_Calendar_Group_ReferenceForArrayConstraintsFromSetWork_Schedule_Calendar_Group_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Schedule_Calendar_Group_Request_ReferencesTypeWork_Schedule_Calendar_Group_ReferenceItem) {
            // validation for constraint: itemType
            if (!$work_Schedule_Calendar_Group_Request_ReferencesTypeWork_Schedule_Calendar_Group_ReferenceItem instanceof \StructType\Work_Schedule_Calendar_GroupObjectType) {
                $invalidValues[] = is_object($work_Schedule_Calendar_Group_Request_ReferencesTypeWork_Schedule_Calendar_Group_ReferenceItem) ? get_class($work_Schedule_Calendar_Group_Request_ReferencesTypeWork_Schedule_Calendar_Group_ReferenceItem) : sprintf('%s(%s)', gettype($work_Schedule_Calendar_Group_Request_ReferencesTypeWork_Schedule_Calendar_Group_ReferenceItem), var_export($work_Schedule_Calendar_Group_Request_ReferencesTypeWork_Schedule_Calendar_Group_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Schedule_Calendar_Group_Reference property can only contain items of type \StructType\Work_Schedule_Calendar_GroupObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Schedule_Calendar_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Schedule_Calendar_GroupObjectType[] $work_Schedule_Calendar_Group_Reference
     * @return \StructType\Work_Schedule_Calendar_Group_Request_ReferencesType
     */
    public function setWork_Schedule_Calendar_Group_Reference(array $work_Schedule_Calendar_Group_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Schedule_Calendar_Group_ReferenceArrayErrorMessage = self::validateWork_Schedule_Calendar_Group_ReferenceForArrayConstraintsFromSetWork_Schedule_Calendar_Group_Reference($work_Schedule_Calendar_Group_Reference))) {
            throw new \InvalidArgumentException($work_Schedule_Calendar_Group_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Work_Schedule_Calendar_Group_Reference = $work_Schedule_Calendar_Group_Reference;
        return $this;
    }
    /**
     * Add item to Work_Schedule_Calendar_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Schedule_Calendar_GroupObjectType $item
     * @return \StructType\Work_Schedule_Calendar_Group_Request_ReferencesType
     */
    public function addToWork_Schedule_Calendar_Group_Reference(\StructType\Work_Schedule_Calendar_GroupObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Work_Schedule_Calendar_GroupObjectType) {
            throw new \InvalidArgumentException(sprintf('The Work_Schedule_Calendar_Group_Reference property can only contain items of type \StructType\Work_Schedule_Calendar_GroupObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Schedule_Calendar_Group_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Work_Schedule_Calendar_Group_Request_ReferencesType
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
