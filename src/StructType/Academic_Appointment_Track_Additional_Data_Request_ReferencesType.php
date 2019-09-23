<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Academic_Appointment_Track_Additional_Data_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Academic Appointment Track References to view Additional Data
 * @subpackage Structs
 */
class Academic_Appointment_Track_Additional_Data_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Academic_Appointment_Track_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic Appointment Track reference.
     * - maxOccurs: unbounded
     * @var \StructType\Academic_Appointment_TrackObjectType[]
     */
    public $Academic_Appointment_Track_Reference;
    /**
     * Constructor method for
     * Academic_Appointment_Track_Additional_Data_Request_ReferencesType
     * @uses Academic_Appointment_Track_Additional_Data_Request_ReferencesType::setAcademic_Appointment_Track_Reference()
     * @param \StructType\Academic_Appointment_TrackObjectType[] $academic_Appointment_Track_Reference
     */
    public function __construct(array $academic_Appointment_Track_Reference = array())
    {
        $this
            ->setAcademic_Appointment_Track_Reference($academic_Appointment_Track_Reference);
    }
    /**
     * Get Academic_Appointment_Track_Reference value
     * @return \StructType\Academic_Appointment_TrackObjectType[]|null
     */
    public function getAcademic_Appointment_Track_Reference()
    {
        return $this->Academic_Appointment_Track_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setAcademic_Appointment_Track_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademic_Appointment_Track_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcademic_Appointment_Track_ReferenceForArrayConstraintsFromSetAcademic_Appointment_Track_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Appointment_Track_Additional_Data_Request_ReferencesTypeAcademic_Appointment_Track_ReferenceItem) {
            // validation for constraint: itemType
            if (!$academic_Appointment_Track_Additional_Data_Request_ReferencesTypeAcademic_Appointment_Track_ReferenceItem instanceof \StructType\Academic_Appointment_TrackObjectType) {
                $invalidValues[] = is_object($academic_Appointment_Track_Additional_Data_Request_ReferencesTypeAcademic_Appointment_Track_ReferenceItem) ? get_class($academic_Appointment_Track_Additional_Data_Request_ReferencesTypeAcademic_Appointment_Track_ReferenceItem) : sprintf('%s(%s)', gettype($academic_Appointment_Track_Additional_Data_Request_ReferencesTypeAcademic_Appointment_Track_ReferenceItem), var_export($academic_Appointment_Track_Additional_Data_Request_ReferencesTypeAcademic_Appointment_Track_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Academic_Appointment_Track_Reference property can only contain items of type \StructType\Academic_Appointment_TrackObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Academic_Appointment_Track_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_Appointment_TrackObjectType[] $academic_Appointment_Track_Reference
     * @return \StructType\Academic_Appointment_Track_Additional_Data_Request_ReferencesType
     */
    public function setAcademic_Appointment_Track_Reference(array $academic_Appointment_Track_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($academic_Appointment_Track_ReferenceArrayErrorMessage = self::validateAcademic_Appointment_Track_ReferenceForArrayConstraintsFromSetAcademic_Appointment_Track_Reference($academic_Appointment_Track_Reference))) {
            throw new \InvalidArgumentException($academic_Appointment_Track_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Academic_Appointment_Track_Reference = $academic_Appointment_Track_Reference;
        return $this;
    }
    /**
     * Add item to Academic_Appointment_Track_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_Appointment_TrackObjectType $item
     * @return \StructType\Academic_Appointment_Track_Additional_Data_Request_ReferencesType
     */
    public function addToAcademic_Appointment_Track_Reference(\StructType\Academic_Appointment_TrackObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Academic_Appointment_TrackObjectType) {
            throw new \InvalidArgumentException(sprintf('The Academic_Appointment_Track_Reference property can only contain items of type \StructType\Academic_Appointment_TrackObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Academic_Appointment_Track_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Academic_Appointment_Track_Additional_Data_Request_ReferencesType
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
