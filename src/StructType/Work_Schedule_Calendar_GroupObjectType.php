<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Schedule_Calendar_GroupObjectType StructType
 * @subpackage Structs
 */
class Work_Schedule_Calendar_GroupObjectType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectIDType[]
     */
    public $ID;
    /**
     * The Descriptor
     * Meta information extracted from the WSDL
     * - documentation: Display information used to describe an instance of an object. This 'optional' information is for outbound descriptive purposes only and is not processed on inbound Workday Web Services requests.
     * @var string
     */
    public $Descriptor;
    /**
     * Constructor method for Work_Schedule_Calendar_GroupObjectType
     * @uses Work_Schedule_Calendar_GroupObjectType::setID()
     * @uses Work_Schedule_Calendar_GroupObjectType::setDescriptor()
     * @param \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectIDType[] $iD
     * @param string $descriptor
     */
    public function __construct(array $iD = array(), $descriptor = null)
    {
        $this
            ->setID($iD)
            ->setDescriptor($descriptor);
    }
    /**
     * Get ID value
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectIDType[]|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * This method is responsible for validating the values passed to the setID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIDForArrayConstraintsFromSetID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Schedule_Calendar_GroupObjectTypeIDItem) {
            // validation for constraint: itemType
            if (!$work_Schedule_Calendar_GroupObjectTypeIDItem instanceof \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectIDType) {
                $invalidValues[] = is_object($work_Schedule_Calendar_GroupObjectTypeIDItem) ? get_class($work_Schedule_Calendar_GroupObjectTypeIDItem) : sprintf('%s(%s)', gettype($work_Schedule_Calendar_GroupObjectTypeIDItem), var_export($work_Schedule_Calendar_GroupObjectTypeIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ID property can only contain items of type \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectIDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ID value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectIDType[] $iD
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectType
     */
    public function setID(array $iD = array())
    {
        // validation for constraint: array
        if ('' !== ($iDArrayErrorMessage = self::validateIDForArrayConstraintsFromSetID($iD))) {
            throw new \InvalidArgumentException($iDArrayErrorMessage, __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Add item to ID value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectIDType $item
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectType
     */
    public function addToID(\WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectIDType) {
            throw new \InvalidArgumentException(sprintf('The ID property can only contain items of type \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectIDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ID[] = $item;
        return $this;
    }
    /**
     * Get Descriptor value
     * @return string|null
     */
    public function getDescriptor()
    {
        return $this->Descriptor;
    }
    /**
     * Set Descriptor value
     * @param string $descriptor
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectType
     */
    public function setDescriptor($descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($descriptor) && !is_string($descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptor, true), gettype($descriptor)), __LINE__);
        }
        $this->Descriptor = $descriptor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_GroupObjectType
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
