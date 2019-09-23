<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Status_Rule_Set_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: References Provided to be returned by Get Work Status Rule Set
 * @subpackage Structs
 */
class Work_Status_Rule_Set_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Work_Status_Rule_Set_Reference
     * Meta information extracted from the WSDL
     * - documentation: References provided to obtain attributes and relationship information
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType[]
     */
    public $Work_Status_Rule_Set_Reference;
    /**
     * Constructor method for Work_Status_Rule_Set_Request_ReferencesType
     * @uses Work_Status_Rule_Set_Request_ReferencesType::setWork_Status_Rule_Set_Reference()
     * @param \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType[] $work_Status_Rule_Set_Reference
     */
    public function __construct(array $work_Status_Rule_Set_Reference = array())
    {
        $this
            ->setWork_Status_Rule_Set_Reference($work_Status_Rule_Set_Reference);
    }
    /**
     * Get Work_Status_Rule_Set_Reference value
     * @return \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType[]|null
     */
    public function getWork_Status_Rule_Set_Reference()
    {
        return $this->Work_Status_Rule_Set_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Status_Rule_Set_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Status_Rule_Set_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Status_Rule_Set_ReferenceForArrayConstraintsFromSetWork_Status_Rule_Set_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Status_Rule_Set_Request_ReferencesTypeWork_Status_Rule_Set_ReferenceItem) {
            // validation for constraint: itemType
            if (!$work_Status_Rule_Set_Request_ReferencesTypeWork_Status_Rule_Set_ReferenceItem instanceof \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType) {
                $invalidValues[] = is_object($work_Status_Rule_Set_Request_ReferencesTypeWork_Status_Rule_Set_ReferenceItem) ? get_class($work_Status_Rule_Set_Request_ReferencesTypeWork_Status_Rule_Set_ReferenceItem) : sprintf('%s(%s)', gettype($work_Status_Rule_Set_Request_ReferencesTypeWork_Status_Rule_Set_ReferenceItem), var_export($work_Status_Rule_Set_Request_ReferencesTypeWork_Status_Rule_Set_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Status_Rule_Set_Reference property can only contain items of type \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Status_Rule_Set_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType[] $work_Status_Rule_Set_Reference
     * @return \WorkdayWsdl\\StructType\Work_Status_Rule_Set_Request_ReferencesType
     */
    public function setWork_Status_Rule_Set_Reference(array $work_Status_Rule_Set_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Status_Rule_Set_ReferenceArrayErrorMessage = self::validateWork_Status_Rule_Set_ReferenceForArrayConstraintsFromSetWork_Status_Rule_Set_Reference($work_Status_Rule_Set_Reference))) {
            throw new \InvalidArgumentException($work_Status_Rule_Set_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Work_Status_Rule_Set_Reference = $work_Status_Rule_Set_Reference;
        return $this;
    }
    /**
     * Add item to Work_Status_Rule_Set_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType $item
     * @return \WorkdayWsdl\\StructType\Work_Status_Rule_Set_Request_ReferencesType
     */
    public function addToWork_Status_Rule_Set_Reference(\WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType) {
            throw new \InvalidArgumentException(sprintf('The Work_Status_Rule_Set_Reference property can only contain items of type \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Status_Rule_Set_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Work_Status_Rule_Set_Request_ReferencesType
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
