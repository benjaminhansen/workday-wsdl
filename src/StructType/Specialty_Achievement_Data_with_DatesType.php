<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Specialty_Achievement_Data_with_DatesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains data about each Specialty-Subspecialty combination associated with the certification achievement
 * @subpackage Structs
 */
class Specialty_Achievement_Data_with_DatesType extends AbstractStructBase
{
    /**
     * The Specialty_Reference
     * Meta information extracted from the WSDL
     * - documentation: Enter the Speciality associated with the certification achievement.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Specialty_ParentObjectType
     */
    public $Specialty_Reference;
    /**
     * The Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Enter the Specialty Start Date associated with this certification achievement.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Start_Date;
    /**
     * The End_Date
     * Meta information extracted from the WSDL
     * - documentation: Enter the Specialty End Date associated with this certification achievement.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Date;
    /**
     * The Subspecialty_Reference
     * Meta information extracted from the WSDL
     * - documentation: Enter the subspecialty ID associated with the specialty.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Specialty_ChildObjectType[]
     */
    public $Subspecialty_Reference;
    /**
     * Constructor method for Specialty_Achievement_Data_with_DatesType
     * @uses Specialty_Achievement_Data_with_DatesType::setSpecialty_Reference()
     * @uses Specialty_Achievement_Data_with_DatesType::setStart_Date()
     * @uses Specialty_Achievement_Data_with_DatesType::setEnd_Date()
     * @uses Specialty_Achievement_Data_with_DatesType::setSubspecialty_Reference()
     * @param \WorkdayWsdl\\StructType\Specialty_ParentObjectType $specialty_Reference
     * @param string $start_Date
     * @param string $end_Date
     * @param \WorkdayWsdl\\StructType\Specialty_ChildObjectType[] $subspecialty_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Specialty_ParentObjectType $specialty_Reference = null, $start_Date = null, $end_Date = null, array $subspecialty_Reference = array())
    {
        $this
            ->setSpecialty_Reference($specialty_Reference)
            ->setStart_Date($start_Date)
            ->setEnd_Date($end_Date)
            ->setSubspecialty_Reference($subspecialty_Reference);
    }
    /**
     * Get Specialty_Reference value
     * @return \WorkdayWsdl\\StructType\Specialty_ParentObjectType|null
     */
    public function getSpecialty_Reference()
    {
        return $this->Specialty_Reference;
    }
    /**
     * Set Specialty_Reference value
     * @param \WorkdayWsdl\\StructType\Specialty_ParentObjectType $specialty_Reference
     * @return \WorkdayWsdl\\StructType\Specialty_Achievement_Data_with_DatesType
     */
    public function setSpecialty_Reference(\WorkdayWsdl\\StructType\Specialty_ParentObjectType $specialty_Reference = null)
    {
        $this->Specialty_Reference = $specialty_Reference;
        return $this;
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
     * @return \WorkdayWsdl\\StructType\Specialty_Achievement_Data_with_DatesType
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
     * @return \WorkdayWsdl\\StructType\Specialty_Achievement_Data_with_DatesType
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
     * Get Subspecialty_Reference value
     * @return \WorkdayWsdl\\StructType\Specialty_ChildObjectType[]|null
     */
    public function getSubspecialty_Reference()
    {
        return $this->Subspecialty_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setSubspecialty_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubspecialty_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubspecialty_ReferenceForArrayConstraintsFromSetSubspecialty_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $specialty_Achievement_Data_with_DatesTypeSubspecialty_ReferenceItem) {
            // validation for constraint: itemType
            if (!$specialty_Achievement_Data_with_DatesTypeSubspecialty_ReferenceItem instanceof \WorkdayWsdl\\StructType\Specialty_ChildObjectType) {
                $invalidValues[] = is_object($specialty_Achievement_Data_with_DatesTypeSubspecialty_ReferenceItem) ? get_class($specialty_Achievement_Data_with_DatesTypeSubspecialty_ReferenceItem) : sprintf('%s(%s)', gettype($specialty_Achievement_Data_with_DatesTypeSubspecialty_ReferenceItem), var_export($specialty_Achievement_Data_with_DatesTypeSubspecialty_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Subspecialty_Reference property can only contain items of type \WorkdayWsdl\\StructType\Specialty_ChildObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Subspecialty_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Specialty_ChildObjectType[] $subspecialty_Reference
     * @return \WorkdayWsdl\\StructType\Specialty_Achievement_Data_with_DatesType
     */
    public function setSubspecialty_Reference(array $subspecialty_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($subspecialty_ReferenceArrayErrorMessage = self::validateSubspecialty_ReferenceForArrayConstraintsFromSetSubspecialty_Reference($subspecialty_Reference))) {
            throw new \InvalidArgumentException($subspecialty_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Subspecialty_Reference = $subspecialty_Reference;
        return $this;
    }
    /**
     * Add item to Subspecialty_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Specialty_ChildObjectType $item
     * @return \WorkdayWsdl\\StructType\Specialty_Achievement_Data_with_DatesType
     */
    public function addToSubspecialty_Reference(\WorkdayWsdl\\StructType\Specialty_ChildObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Specialty_ChildObjectType) {
            throw new \InvalidArgumentException(sprintf('The Subspecialty_Reference property can only contain items of type \WorkdayWsdl\\StructType\Specialty_ChildObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Subspecialty_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Specialty_Achievement_Data_with_DatesType
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
