<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Appointment_Specialty_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Get Appointment Specialties Request
 * @subpackage Structs
 */
class Appointment_Specialty_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Appointment_Specialty_Reference
     * Meta information extracted from the WSDL
     * - documentation: Utilize the Request References element to retrieve a specific instance(s) of an Appointment Specialty and its associated data.
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType[]
     */
    public $Appointment_Specialty_Reference;
    /**
     * Constructor method for Appointment_Specialty_Request_ReferencesType
     * @uses Appointment_Specialty_Request_ReferencesType::setAppointment_Specialty_Reference()
     * @param \WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType[] $appointment_Specialty_Reference
     */
    public function __construct(array $appointment_Specialty_Reference = array())
    {
        $this
            ->setAppointment_Specialty_Reference($appointment_Specialty_Reference);
    }
    /**
     * Get Appointment_Specialty_Reference value
     * @return \WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType[]|null
     */
    public function getAppointment_Specialty_Reference()
    {
        return $this->Appointment_Specialty_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setAppointment_Specialty_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAppointment_Specialty_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAppointment_Specialty_ReferenceForArrayConstraintsFromSetAppointment_Specialty_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $appointment_Specialty_Request_ReferencesTypeAppointment_Specialty_ReferenceItem) {
            // validation for constraint: itemType
            if (!$appointment_Specialty_Request_ReferencesTypeAppointment_Specialty_ReferenceItem instanceof \WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType) {
                $invalidValues[] = is_object($appointment_Specialty_Request_ReferencesTypeAppointment_Specialty_ReferenceItem) ? get_class($appointment_Specialty_Request_ReferencesTypeAppointment_Specialty_ReferenceItem) : sprintf('%s(%s)', gettype($appointment_Specialty_Request_ReferencesTypeAppointment_Specialty_ReferenceItem), var_export($appointment_Specialty_Request_ReferencesTypeAppointment_Specialty_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Appointment_Specialty_Reference property can only contain items of type \WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Appointment_Specialty_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType[] $appointment_Specialty_Reference
     * @return \WorkdayWsdl\\StructType\Appointment_Specialty_Request_ReferencesType
     */
    public function setAppointment_Specialty_Reference(array $appointment_Specialty_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($appointment_Specialty_ReferenceArrayErrorMessage = self::validateAppointment_Specialty_ReferenceForArrayConstraintsFromSetAppointment_Specialty_Reference($appointment_Specialty_Reference))) {
            throw new \InvalidArgumentException($appointment_Specialty_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Appointment_Specialty_Reference = $appointment_Specialty_Reference;
        return $this;
    }
    /**
     * Add item to Appointment_Specialty_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType $item
     * @return \WorkdayWsdl\\StructType\Appointment_Specialty_Request_ReferencesType
     */
    public function addToAppointment_Specialty_Reference(\WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType) {
            throw new \InvalidArgumentException(sprintf('The Appointment_Specialty_Reference property can only contain items of type \WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Appointment_Specialty_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Appointment_Specialty_Request_ReferencesType
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
