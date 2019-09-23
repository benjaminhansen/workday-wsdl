<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Union_Membership_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing specific union membership dates and details.
 * @subpackage Structs
 */
class Union_Membership_DataType extends AbstractStructBase
{
    /**
     * The Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Start date of the union membership.
     * - maxOccurs: 1
     * @var string
     */
    public $Start_Date;
    /**
     * The End_Date
     * Meta information extracted from the WSDL
     * - documentation: End date of the union membership.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Date;
    /**
     * The Membership_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the types of membership, such as regular, retired, pending, or dues only.
     * @var \WorkdayWsdl\\StructType\Union_Membership_TypeObjectType
     */
    public $Membership_Type_Reference;
    /**
     * The Related_Position_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the related position for the union membership. Can either be filled with a position or a position group.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Staffing_InterfaceObjectType
     */
    public $Related_Position_Reference;
    /**
     * The Notes
     * Meta information extracted from the WSDL
     * - documentation: Notes about the union membership.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * Constructor method for Union_Membership_DataType
     * @uses Union_Membership_DataType::setStart_Date()
     * @uses Union_Membership_DataType::setEnd_Date()
     * @uses Union_Membership_DataType::setMembership_Type_Reference()
     * @uses Union_Membership_DataType::setRelated_Position_Reference()
     * @uses Union_Membership_DataType::setNotes()
     * @param string $start_Date
     * @param string $end_Date
     * @param \WorkdayWsdl\\StructType\Union_Membership_TypeObjectType $membership_Type_Reference
     * @param \WorkdayWsdl\\StructType\Staffing_InterfaceObjectType $related_Position_Reference
     * @param string $notes
     */
    public function __construct($start_Date = null, $end_Date = null, \WorkdayWsdl\\StructType\Union_Membership_TypeObjectType $membership_Type_Reference = null, \WorkdayWsdl\\StructType\Staffing_InterfaceObjectType $related_Position_Reference = null, $notes = null)
    {
        $this
            ->setStart_Date($start_Date)
            ->setEnd_Date($end_Date)
            ->setMembership_Type_Reference($membership_Type_Reference)
            ->setRelated_Position_Reference($related_Position_Reference)
            ->setNotes($notes);
    }
    /**
     * Get Start_Date value
     * @return string|null
     */
    public function getStart_Date()
    {
        return $this->Start_Date;
    }
    /**
     * Set Start_Date value
     * @param string $start_Date
     * @return \WorkdayWsdl\\StructType\Union_Membership_DataType
     */
    public function setStart_Date($start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($start_Date) && !is_string($start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_Date, true), gettype($start_Date)), __LINE__);
        }
        $this->Start_Date = $start_Date;
        return $this;
    }
    /**
     * Get End_Date value
     * @return string|null
     */
    public function getEnd_Date()
    {
        return $this->End_Date;
    }
    /**
     * Set End_Date value
     * @param string $end_Date
     * @return \WorkdayWsdl\\StructType\Union_Membership_DataType
     */
    public function setEnd_Date($end_Date = null)
    {
        // validation for constraint: string
        if (!is_null($end_Date) && !is_string($end_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_Date, true), gettype($end_Date)), __LINE__);
        }
        $this->End_Date = $end_Date;
        return $this;
    }
    /**
     * Get Membership_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Union_Membership_TypeObjectType|null
     */
    public function getMembership_Type_Reference()
    {
        return $this->Membership_Type_Reference;
    }
    /**
     * Set Membership_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Union_Membership_TypeObjectType $membership_Type_Reference
     * @return \WorkdayWsdl\\StructType\Union_Membership_DataType
     */
    public function setMembership_Type_Reference(\WorkdayWsdl\\StructType\Union_Membership_TypeObjectType $membership_Type_Reference = null)
    {
        $this->Membership_Type_Reference = $membership_Type_Reference;
        return $this;
    }
    /**
     * Get Related_Position_Reference value
     * @return \WorkdayWsdl\\StructType\Staffing_InterfaceObjectType|null
     */
    public function getRelated_Position_Reference()
    {
        return $this->Related_Position_Reference;
    }
    /**
     * Set Related_Position_Reference value
     * @param \WorkdayWsdl\\StructType\Staffing_InterfaceObjectType $related_Position_Reference
     * @return \WorkdayWsdl\\StructType\Union_Membership_DataType
     */
    public function setRelated_Position_Reference(\WorkdayWsdl\\StructType\Staffing_InterfaceObjectType $related_Position_Reference = null)
    {
        $this->Related_Position_Reference = $related_Position_Reference;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \WorkdayWsdl\\StructType\Union_Membership_DataType
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notes, true), gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Union_Membership_DataType
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
