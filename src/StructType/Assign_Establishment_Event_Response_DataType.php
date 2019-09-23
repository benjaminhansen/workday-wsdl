<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_Establishment_Event_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Get Assign Establishment Events Response Data
 * @subpackage Structs
 */
class Assign_Establishment_Event_Response_DataType extends AbstractStructBase
{
    /**
     * The Assign_Establishment
     * Meta information extracted from the WSDL
     * - documentation: Assign Establishment Event
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Assign_Establishment_EventType[]
     */
    public $Assign_Establishment;
    /**
     * Constructor method for Assign_Establishment_Event_Response_DataType
     * @uses Assign_Establishment_Event_Response_DataType::setAssign_Establishment()
     * @param \WorkdayWsdl\\StructType\Assign_Establishment_EventType[] $assign_Establishment
     */
    public function __construct(array $assign_Establishment = array())
    {
        $this
            ->setAssign_Establishment($assign_Establishment);
    }
    /**
     * Get Assign_Establishment value
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_EventType[]|null
     */
    public function getAssign_Establishment()
    {
        return $this->Assign_Establishment;
    }
    /**
     * This method is responsible for validating the values passed to the setAssign_Establishment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssign_Establishment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssign_EstablishmentForArrayConstraintsFromSetAssign_Establishment(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $assign_Establishment_Event_Response_DataTypeAssign_EstablishmentItem) {
            // validation for constraint: itemType
            if (!$assign_Establishment_Event_Response_DataTypeAssign_EstablishmentItem instanceof \WorkdayWsdl\\StructType\Assign_Establishment_EventType) {
                $invalidValues[] = is_object($assign_Establishment_Event_Response_DataTypeAssign_EstablishmentItem) ? get_class($assign_Establishment_Event_Response_DataTypeAssign_EstablishmentItem) : sprintf('%s(%s)', gettype($assign_Establishment_Event_Response_DataTypeAssign_EstablishmentItem), var_export($assign_Establishment_Event_Response_DataTypeAssign_EstablishmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Assign_Establishment property can only contain items of type \WorkdayWsdl\\StructType\Assign_Establishment_EventType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Assign_Establishment value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Assign_Establishment_EventType[] $assign_Establishment
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_Event_Response_DataType
     */
    public function setAssign_Establishment(array $assign_Establishment = array())
    {
        // validation for constraint: array
        if ('' !== ($assign_EstablishmentArrayErrorMessage = self::validateAssign_EstablishmentForArrayConstraintsFromSetAssign_Establishment($assign_Establishment))) {
            throw new \InvalidArgumentException($assign_EstablishmentArrayErrorMessage, __LINE__);
        }
        $this->Assign_Establishment = $assign_Establishment;
        return $this;
    }
    /**
     * Add item to Assign_Establishment value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Assign_Establishment_EventType $item
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_Event_Response_DataType
     */
    public function addToAssign_Establishment(\WorkdayWsdl\\StructType\Assign_Establishment_EventType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Assign_Establishment_EventType) {
            throw new \InvalidArgumentException(sprintf('The Assign_Establishment property can only contain items of type \WorkdayWsdl\\StructType\Assign_Establishment_EventType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Assign_Establishment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_Event_Response_DataType
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
