<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Appointment_Specialty_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Appointment Specialty Response Data
 * @subpackage Structs
 */
class Appointment_Specialty_Response_DataType extends AbstractStructBase
{
    /**
     * The Appointment_Specialty
     * Meta information extracted from the WSDL
     * - documentation: Appointment Specialty
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Appointment_SpecialtyType[]
     */
    public $Appointment_Specialty;
    /**
     * Constructor method for Appointment_Specialty_Response_DataType
     * @uses Appointment_Specialty_Response_DataType::setAppointment_Specialty()
     * @param \WorkdayWsdl\\StructType\Appointment_SpecialtyType[] $appointment_Specialty
     */
    public function __construct(array $appointment_Specialty = array())
    {
        $this
            ->setAppointment_Specialty($appointment_Specialty);
    }
    /**
     * Get Appointment_Specialty value
     * @return \WorkdayWsdl\\StructType\Appointment_SpecialtyType[]|null
     */
    public function getAppointment_Specialty()
    {
        return $this->Appointment_Specialty;
    }
    /**
     * This method is responsible for validating the values passed to the setAppointment_Specialty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAppointment_Specialty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAppointment_SpecialtyForArrayConstraintsFromSetAppointment_Specialty(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $appointment_Specialty_Response_DataTypeAppointment_SpecialtyItem) {
            // validation for constraint: itemType
            if (!$appointment_Specialty_Response_DataTypeAppointment_SpecialtyItem instanceof \WorkdayWsdl\\StructType\Appointment_SpecialtyType) {
                $invalidValues[] = is_object($appointment_Specialty_Response_DataTypeAppointment_SpecialtyItem) ? get_class($appointment_Specialty_Response_DataTypeAppointment_SpecialtyItem) : sprintf('%s(%s)', gettype($appointment_Specialty_Response_DataTypeAppointment_SpecialtyItem), var_export($appointment_Specialty_Response_DataTypeAppointment_SpecialtyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Appointment_Specialty property can only contain items of type \WorkdayWsdl\\StructType\Appointment_SpecialtyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Appointment_Specialty value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Appointment_SpecialtyType[] $appointment_Specialty
     * @return \WorkdayWsdl\\StructType\Appointment_Specialty_Response_DataType
     */
    public function setAppointment_Specialty(array $appointment_Specialty = array())
    {
        // validation for constraint: array
        if ('' !== ($appointment_SpecialtyArrayErrorMessage = self::validateAppointment_SpecialtyForArrayConstraintsFromSetAppointment_Specialty($appointment_Specialty))) {
            throw new \InvalidArgumentException($appointment_SpecialtyArrayErrorMessage, __LINE__);
        }
        $this->Appointment_Specialty = $appointment_Specialty;
        return $this;
    }
    /**
     * Add item to Appointment_Specialty value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Appointment_SpecialtyType $item
     * @return \WorkdayWsdl\\StructType\Appointment_Specialty_Response_DataType
     */
    public function addToAppointment_Specialty(\WorkdayWsdl\\StructType\Appointment_SpecialtyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Appointment_SpecialtyType) {
            throw new \InvalidArgumentException(sprintf('The Appointment_Specialty property can only contain items of type \WorkdayWsdl\\StructType\Appointment_SpecialtyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Appointment_Specialty[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Appointment_Specialty_Response_DataType
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
