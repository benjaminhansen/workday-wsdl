<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Schedule_Calendar_Group_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Instance data for Work Schedule Calendar Group.
 * @subpackage Structs
 */
class Work_Schedule_Calendar_Group_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Text value for reference ID for Work Schedule Calendar Group.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Text name for Work Schedule Calendar Group.
     * - maxOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Boolean value specifying whether the Work Schedule Calendar Group is Inactive.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - documentation: Text comment for Work Schedule Calendar Group.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The Work_Schedule_Calendar_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Work Schedule Calendars for the Work Schedule Calendar Group.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType[]
     */
    public $Work_Schedule_Calendar_Reference;
    /**
     * Constructor method for Work_Schedule_Calendar_Group_DataType
     * @uses Work_Schedule_Calendar_Group_DataType::setID()
     * @uses Work_Schedule_Calendar_Group_DataType::setName()
     * @uses Work_Schedule_Calendar_Group_DataType::setInactive()
     * @uses Work_Schedule_Calendar_Group_DataType::setComment()
     * @uses Work_Schedule_Calendar_Group_DataType::setWork_Schedule_Calendar_Reference()
     * @param string $iD
     * @param string $name
     * @param bool $inactive
     * @param string $comment
     * @param \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType[] $work_Schedule_Calendar_Reference
     */
    public function __construct($iD = null, $name = null, $inactive = null, $comment = null, array $work_Schedule_Calendar_Reference = array())
    {
        $this
            ->setID($iD)
            ->setName($name)
            ->setInactive($inactive)
            ->setComment($comment)
            ->setWork_Schedule_Calendar_Reference($work_Schedule_Calendar_Reference);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Group_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Group_DataType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Group_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Group_DataType
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get Work_Schedule_Calendar_Reference value
     * @return \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType[]|null
     */
    public function getWork_Schedule_Calendar_Reference()
    {
        return $this->Work_Schedule_Calendar_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Schedule_Calendar_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Schedule_Calendar_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Schedule_Calendar_ReferenceForArrayConstraintsFromSetWork_Schedule_Calendar_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Schedule_Calendar_Group_DataTypeWork_Schedule_Calendar_ReferenceItem) {
            // validation for constraint: itemType
            if (!$work_Schedule_Calendar_Group_DataTypeWork_Schedule_Calendar_ReferenceItem instanceof \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType) {
                $invalidValues[] = is_object($work_Schedule_Calendar_Group_DataTypeWork_Schedule_Calendar_ReferenceItem) ? get_class($work_Schedule_Calendar_Group_DataTypeWork_Schedule_Calendar_ReferenceItem) : sprintf('%s(%s)', gettype($work_Schedule_Calendar_Group_DataTypeWork_Schedule_Calendar_ReferenceItem), var_export($work_Schedule_Calendar_Group_DataTypeWork_Schedule_Calendar_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Schedule_Calendar_Reference property can only contain items of type \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Schedule_Calendar_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType[] $work_Schedule_Calendar_Reference
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Group_DataType
     */
    public function setWork_Schedule_Calendar_Reference(array $work_Schedule_Calendar_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Schedule_Calendar_ReferenceArrayErrorMessage = self::validateWork_Schedule_Calendar_ReferenceForArrayConstraintsFromSetWork_Schedule_Calendar_Reference($work_Schedule_Calendar_Reference))) {
            throw new \InvalidArgumentException($work_Schedule_Calendar_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Work_Schedule_Calendar_Reference = $work_Schedule_Calendar_Reference;
        return $this;
    }
    /**
     * Add item to Work_Schedule_Calendar_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType $item
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Group_DataType
     */
    public function addToWork_Schedule_Calendar_Reference(\WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType) {
            throw new \InvalidArgumentException(sprintf('The Work_Schedule_Calendar_Reference property can only contain items of type \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Schedule_Calendar_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Group_DataType
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
