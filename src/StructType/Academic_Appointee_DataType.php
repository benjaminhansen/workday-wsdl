<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Appointee_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Academic Appointee Data
 * @subpackage Structs
 */
class Academic_Appointee_DataType extends AbstractStructBase
{
    /**
     * The Person_Data
     * Meta information extracted from the WSDL
     * - documentation: Person Name Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Person_Name_DataType
     */
    public $Person_Data;
    /**
     * The Person_Identification_Data
     * Meta information extracted from the WSDL
     * - documentation: Person Identification Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Person_Identification_DataType
     */
    public $Person_Identification_Data;
    /**
     * The Personal_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Generic Personal Information Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType
     */
    public $Personal_Information_Data;
    /**
     * The Person_Photo_Data
     * Meta information extracted from the WSDL
     * - documentation: Person Photo Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Person_Photo_DataType
     */
    public $Person_Photo_Data;
    /**
     * The Appointment_Data
     * Meta information extracted from the WSDL
     * - documentation: Academic Appointment Snapshot Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType[]
     */
    public $Appointment_Data;
    /**
     * Constructor method for Academic_Appointee_DataType
     * @uses Academic_Appointee_DataType::setPerson_Data()
     * @uses Academic_Appointee_DataType::setPerson_Identification_Data()
     * @uses Academic_Appointee_DataType::setPersonal_Information_Data()
     * @uses Academic_Appointee_DataType::setPerson_Photo_Data()
     * @uses Academic_Appointee_DataType::setAppointment_Data()
     * @param \WorkdayWsdl\\StructType\Person_Name_DataType $person_Data
     * @param \WorkdayWsdl\\StructType\Person_Identification_DataType $person_Identification_Data
     * @param \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType $personal_Information_Data
     * @param \WorkdayWsdl\\StructType\Person_Photo_DataType $person_Photo_Data
     * @param \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType[] $appointment_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Person_Name_DataType $person_Data = null, \WorkdayWsdl\\StructType\Person_Identification_DataType $person_Identification_Data = null, \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType $personal_Information_Data = null, \WorkdayWsdl\\StructType\Person_Photo_DataType $person_Photo_Data = null, array $appointment_Data = array())
    {
        $this
            ->setPerson_Data($person_Data)
            ->setPerson_Identification_Data($person_Identification_Data)
            ->setPersonal_Information_Data($personal_Information_Data)
            ->setPerson_Photo_Data($person_Photo_Data)
            ->setAppointment_Data($appointment_Data);
    }
    /**
     * Get Person_Data value
     * @return \WorkdayWsdl\\StructType\Person_Name_DataType|null
     */
    public function getPerson_Data()
    {
        return $this->Person_Data;
    }
    /**
     * Set Person_Data value
     * @param \WorkdayWsdl\\StructType\Person_Name_DataType $person_Data
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_DataType
     */
    public function setPerson_Data(\WorkdayWsdl\\StructType\Person_Name_DataType $person_Data = null)
    {
        $this->Person_Data = $person_Data;
        return $this;
    }
    /**
     * Get Person_Identification_Data value
     * @return \WorkdayWsdl\\StructType\Person_Identification_DataType|null
     */
    public function getPerson_Identification_Data()
    {
        return $this->Person_Identification_Data;
    }
    /**
     * Set Person_Identification_Data value
     * @param \WorkdayWsdl\\StructType\Person_Identification_DataType $person_Identification_Data
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_DataType
     */
    public function setPerson_Identification_Data(\WorkdayWsdl\\StructType\Person_Identification_DataType $person_Identification_Data = null)
    {
        $this->Person_Identification_Data = $person_Identification_Data;
        return $this;
    }
    /**
     * Get Personal_Information_Data value
     * @return \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType|null
     */
    public function getPersonal_Information_Data()
    {
        return $this->Personal_Information_Data;
    }
    /**
     * Set Personal_Information_Data value
     * @param \WorkdayWsdl\\StructType\Generic_Personal_Information_DataType $personal_Information_Data
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_DataType
     */
    public function setPersonal_Information_Data(\WorkdayWsdl\\StructType\Generic_Personal_Information_DataType $personal_Information_Data = null)
    {
        $this->Personal_Information_Data = $personal_Information_Data;
        return $this;
    }
    /**
     * Get Person_Photo_Data value
     * @return \WorkdayWsdl\\StructType\Person_Photo_DataType|null
     */
    public function getPerson_Photo_Data()
    {
        return $this->Person_Photo_Data;
    }
    /**
     * Set Person_Photo_Data value
     * @param \WorkdayWsdl\\StructType\Person_Photo_DataType $person_Photo_Data
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_DataType
     */
    public function setPerson_Photo_Data(\WorkdayWsdl\\StructType\Person_Photo_DataType $person_Photo_Data = null)
    {
        $this->Person_Photo_Data = $person_Photo_Data;
        return $this;
    }
    /**
     * Get Appointment_Data value
     * @return \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType[]|null
     */
    public function getAppointment_Data()
    {
        return $this->Appointment_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setAppointment_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAppointment_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAppointment_DataForArrayConstraintsFromSetAppointment_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Appointee_DataTypeAppointment_DataItem) {
            // validation for constraint: itemType
            if (!$academic_Appointee_DataTypeAppointment_DataItem instanceof \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType) {
                $invalidValues[] = is_object($academic_Appointee_DataTypeAppointment_DataItem) ? get_class($academic_Appointee_DataTypeAppointment_DataItem) : sprintf('%s(%s)', gettype($academic_Appointee_DataTypeAppointment_DataItem), var_export($academic_Appointee_DataTypeAppointment_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Appointment_Data property can only contain items of type \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Appointment_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType[] $appointment_Data
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_DataType
     */
    public function setAppointment_Data(array $appointment_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($appointment_DataArrayErrorMessage = self::validateAppointment_DataForArrayConstraintsFromSetAppointment_Data($appointment_Data))) {
            throw new \InvalidArgumentException($appointment_DataArrayErrorMessage, __LINE__);
        }
        $this->Appointment_Data = $appointment_Data;
        return $this;
    }
    /**
     * Add item to Appointment_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType $item
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_DataType
     */
    public function addToAppointment_Data(\WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType) {
            throw new \InvalidArgumentException(sprintf('The Appointment_Data property can only contain items of type \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Appointment_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_DataType
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
