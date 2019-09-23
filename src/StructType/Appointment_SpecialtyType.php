<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Appointment_SpecialtyType StructType
 * Meta information extracted from the WSDL
 * - documentation: Appointment Specialty
 * @subpackage Structs
 */
class Appointment_SpecialtyType extends AbstractStructBase
{
    /**
     * The Appointment_Specialty_Reference
     * Meta information extracted from the WSDL
     * - documentation: Appointment Specialty Reference
     * - minOccurs: 0
     * @var \StructType\Appointment_SpecialtyObjectType
     */
    public $Appointment_Specialty_Reference;
    /**
     * The Appointment_Specialty_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Appointment_Specialty_DataType[]
     */
    public $Appointment_Specialty_Data;
    /**
     * Constructor method for Appointment_SpecialtyType
     * @uses Appointment_SpecialtyType::setAppointment_Specialty_Reference()
     * @uses Appointment_SpecialtyType::setAppointment_Specialty_Data()
     * @param \StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference
     * @param \StructType\Appointment_Specialty_DataType[] $appointment_Specialty_Data
     */
    public function __construct(\StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference = null, array $appointment_Specialty_Data = array())
    {
        $this
            ->setAppointment_Specialty_Reference($appointment_Specialty_Reference)
            ->setAppointment_Specialty_Data($appointment_Specialty_Data);
    }
    /**
     * Get Appointment_Specialty_Reference value
     * @return \StructType\Appointment_SpecialtyObjectType|null
     */
    public function getAppointment_Specialty_Reference()
    {
        return $this->Appointment_Specialty_Reference;
    }
    /**
     * Set Appointment_Specialty_Reference value
     * @param \StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference
     * @return \StructType\Appointment_SpecialtyType
     */
    public function setAppointment_Specialty_Reference(\StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference = null)
    {
        $this->Appointment_Specialty_Reference = $appointment_Specialty_Reference;
        return $this;
    }
    /**
     * Get Appointment_Specialty_Data value
     * @return \StructType\Appointment_Specialty_DataType[]|null
     */
    public function getAppointment_Specialty_Data()
    {
        return $this->Appointment_Specialty_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAppointment_Specialty_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAppointment_Specialty_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAppointment_Specialty_DataForArrayConstraintsFromSetAppointment_Specialty_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $appointment_SpecialtyTypeAppointment_Specialty_DataItem) {
            // validation for constraint: itemType
            if (!$appointment_SpecialtyTypeAppointment_Specialty_DataItem instanceof \StructType\Appointment_Specialty_DataType) {
                $invalidValues[] = is_object($appointment_SpecialtyTypeAppointment_Specialty_DataItem) ? get_class($appointment_SpecialtyTypeAppointment_Specialty_DataItem) : sprintf('%s(%s)', gettype($appointment_SpecialtyTypeAppointment_Specialty_DataItem), var_export($appointment_SpecialtyTypeAppointment_Specialty_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Appointment_Specialty_Data property can only contain items of type \StructType\Appointment_Specialty_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Appointment_Specialty_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Appointment_Specialty_DataType[] $appointment_Specialty_Data
     * @return \StructType\Appointment_SpecialtyType
     */
    public function setAppointment_Specialty_Data(array $appointment_Specialty_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($appointment_Specialty_DataArrayErrorMessage = self::validateAppointment_Specialty_DataForArrayConstraintsFromSetAppointment_Specialty_Data($appointment_Specialty_Data))) {
            throw new \InvalidArgumentException($appointment_Specialty_DataArrayErrorMessage, __LINE__);
        }
        $this->Appointment_Specialty_Data = $appointment_Specialty_Data;
        return $this;
    }
    /**
     * Add item to Appointment_Specialty_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Appointment_Specialty_DataType $item
     * @return \StructType\Appointment_SpecialtyType
     */
    public function addToAppointment_Specialty_Data(\StructType\Appointment_Specialty_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Appointment_Specialty_DataType) {
            throw new \InvalidArgumentException(sprintf('The Appointment_Specialty_Data property can only contain items of type \StructType\Appointment_Specialty_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Appointment_Specialty_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Appointment_SpecialtyType
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
