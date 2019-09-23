<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Edit_Academic_Appointment_Track_Additional_Data_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Top-level response for Edit Academic Appointment Track Additional Data
 * @subpackage Structs
 */
class Edit_Academic_Appointment_Track_Additional_Data_ResponseType extends AbstractStructBase
{
    /**
     * The Academic_Appointment_Track_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic Appointment Track that was updated with additional data.
     * - minOccurs: 0
     * @var \StructType\Academic_Appointment_TrackObjectType
     */
    public $Academic_Appointment_Track_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective date of additional data.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Additional_Data
     * Meta information extracted from the WSDL
     * - documentation: Effective dated additional data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Effective_Dated_Web_Service_Additional_DataType[]
     */
    public $Additional_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for
     * Edit_Academic_Appointment_Track_Additional_Data_ResponseType
     * @uses Edit_Academic_Appointment_Track_Additional_Data_ResponseType::setAcademic_Appointment_Track_Reference()
     * @uses Edit_Academic_Appointment_Track_Additional_Data_ResponseType::setEffective_Date()
     * @uses Edit_Academic_Appointment_Track_Additional_Data_ResponseType::setAdditional_Data()
     * @uses Edit_Academic_Appointment_Track_Additional_Data_ResponseType::setVersion()
     * @param \StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference
     * @param string $effective_Date
     * @param \StructType\Effective_Dated_Web_Service_Additional_DataType[] $additional_Data
     * @param string $version
     */
    public function __construct(\StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference = null, $effective_Date = null, array $additional_Data = array(), $version = null)
    {
        $this
            ->setAcademic_Appointment_Track_Reference($academic_Appointment_Track_Reference)
            ->setEffective_Date($effective_Date)
            ->setAdditional_Data($additional_Data)
            ->setVersion($version);
    }
    /**
     * Get Academic_Appointment_Track_Reference value
     * @return \StructType\Academic_Appointment_TrackObjectType|null
     */
    public function getAcademic_Appointment_Track_Reference()
    {
        return $this->Academic_Appointment_Track_Reference;
    }
    /**
     * Set Academic_Appointment_Track_Reference value
     * @param \StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference
     * @return \StructType\Edit_Academic_Appointment_Track_Additional_Data_ResponseType
     */
    public function setAcademic_Appointment_Track_Reference(\StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference = null)
    {
        $this->Academic_Appointment_Track_Reference = $academic_Appointment_Track_Reference;
        return $this;
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \StructType\Edit_Academic_Appointment_Track_Additional_Data_ResponseType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Additional_Data value
     * @return \StructType\Effective_Dated_Web_Service_Additional_DataType[]|null
     */
    public function getAdditional_Data()
    {
        return $this->Additional_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditional_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditional_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditional_DataForArrayConstraintsFromSetAdditional_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $edit_Academic_Appointment_Track_Additional_Data_ResponseTypeAdditional_DataItem) {
            // validation for constraint: itemType
            if (!$edit_Academic_Appointment_Track_Additional_Data_ResponseTypeAdditional_DataItem instanceof \StructType\Effective_Dated_Web_Service_Additional_DataType) {
                $invalidValues[] = is_object($edit_Academic_Appointment_Track_Additional_Data_ResponseTypeAdditional_DataItem) ? get_class($edit_Academic_Appointment_Track_Additional_Data_ResponseTypeAdditional_DataItem) : sprintf('%s(%s)', gettype($edit_Academic_Appointment_Track_Additional_Data_ResponseTypeAdditional_DataItem), var_export($edit_Academic_Appointment_Track_Additional_Data_ResponseTypeAdditional_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Additional_Data property can only contain items of type \StructType\Effective_Dated_Web_Service_Additional_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Additional_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Effective_Dated_Web_Service_Additional_DataType[] $additional_Data
     * @return \StructType\Edit_Academic_Appointment_Track_Additional_Data_ResponseType
     */
    public function setAdditional_Data(array $additional_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($additional_DataArrayErrorMessage = self::validateAdditional_DataForArrayConstraintsFromSetAdditional_Data($additional_Data))) {
            throw new \InvalidArgumentException($additional_DataArrayErrorMessage, __LINE__);
        }
        $this->Additional_Data = $additional_Data;
        return $this;
    }
    /**
     * Add item to Additional_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Effective_Dated_Web_Service_Additional_DataType $item
     * @return \StructType\Edit_Academic_Appointment_Track_Additional_Data_ResponseType
     */
    public function addToAdditional_Data(\StructType\Effective_Dated_Web_Service_Additional_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Effective_Dated_Web_Service_Additional_DataType) {
            throw new \InvalidArgumentException(sprintf('The Additional_Data property can only contain items of type \StructType\Effective_Dated_Web_Service_Additional_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Additional_Data[] = $item;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\Edit_Academic_Appointment_Track_Additional_Data_ResponseType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Edit_Academic_Appointment_Track_Additional_Data_ResponseType
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
