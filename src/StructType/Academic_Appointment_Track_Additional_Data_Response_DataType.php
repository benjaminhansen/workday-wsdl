<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Academic_Appointment_Track_Additional_Data_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the effective-dated additional data for the requested Academic Appointment Tracks as of the effective date.
 * @subpackage Structs
 */
class Academic_Appointment_Track_Additional_Data_Response_DataType extends AbstractStructBase
{
    /**
     * The Academic_Appointment_Track_Additional_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType[]
     */
    public $Academic_Appointment_Track_Additional_Data;
    /**
     * Constructor method for
     * Academic_Appointment_Track_Additional_Data_Response_DataType
     * @uses Academic_Appointment_Track_Additional_Data_Response_DataType::setAcademic_Appointment_Track_Additional_Data()
     * @param \WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType[] $academic_Appointment_Track_Additional_Data
     */
    public function __construct(array $academic_Appointment_Track_Additional_Data = array())
    {
        $this
            ->setAcademic_Appointment_Track_Additional_Data($academic_Appointment_Track_Additional_Data);
    }
    /**
     * Get Academic_Appointment_Track_Additional_Data value
     * @return \WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType[]|null
     */
    public function getAcademic_Appointment_Track_Additional_Data()
    {
        return $this->Academic_Appointment_Track_Additional_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAcademic_Appointment_Track_Additional_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademic_Appointment_Track_Additional_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcademic_Appointment_Track_Additional_DataForArrayConstraintsFromSetAcademic_Appointment_Track_Additional_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Appointment_Track_Additional_Data_Response_DataTypeAcademic_Appointment_Track_Additional_DataItem) {
            // validation for constraint: itemType
            if (!$academic_Appointment_Track_Additional_Data_Response_DataTypeAcademic_Appointment_Track_Additional_DataItem instanceof \WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType) {
                $invalidValues[] = is_object($academic_Appointment_Track_Additional_Data_Response_DataTypeAcademic_Appointment_Track_Additional_DataItem) ? get_class($academic_Appointment_Track_Additional_Data_Response_DataTypeAcademic_Appointment_Track_Additional_DataItem) : sprintf('%s(%s)', gettype($academic_Appointment_Track_Additional_Data_Response_DataTypeAcademic_Appointment_Track_Additional_DataItem), var_export($academic_Appointment_Track_Additional_Data_Response_DataTypeAcademic_Appointment_Track_Additional_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Academic_Appointment_Track_Additional_Data property can only contain items of type \WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Academic_Appointment_Track_Additional_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType[] $academic_Appointment_Track_Additional_Data
     * @return \WorkdayWsdl\\StructType\Academic_Appointment_Track_Additional_Data_Response_DataType
     */
    public function setAcademic_Appointment_Track_Additional_Data(array $academic_Appointment_Track_Additional_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($academic_Appointment_Track_Additional_DataArrayErrorMessage = self::validateAcademic_Appointment_Track_Additional_DataForArrayConstraintsFromSetAcademic_Appointment_Track_Additional_Data($academic_Appointment_Track_Additional_Data))) {
            throw new \InvalidArgumentException($academic_Appointment_Track_Additional_DataArrayErrorMessage, __LINE__);
        }
        $this->Academic_Appointment_Track_Additional_Data = $academic_Appointment_Track_Additional_Data;
        return $this;
    }
    /**
     * Add item to Academic_Appointment_Track_Additional_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType $item
     * @return \WorkdayWsdl\\StructType\Academic_Appointment_Track_Additional_Data_Response_DataType
     */
    public function addToAcademic_Appointment_Track_Additional_Data(\WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType) {
            throw new \InvalidArgumentException(sprintf('The Academic_Appointment_Track_Additional_Data property can only contain items of type \WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Academic_Appointment_Track_Additional_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Academic_Appointment_Track_Additional_Data_Response_DataType
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
