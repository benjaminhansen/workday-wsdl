<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Appointment_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Top-level response element for Academic Appointment business process operations.
 * @subpackage Structs
 */
class Academic_Appointment_ResponseType extends AbstractStructBase
{
    /**
     * The Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Academic Appointment business process.
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Event_Reference;
    /**
     * The Academic_Appointee_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic Appointee Reference relating to Appointment Business Process
     * - minOccurs: 0
     * @var \StructType\Academic_Appointee_EnabledObjectType
     */
    public $Academic_Appointee_Reference;
    /**
     * The Academic_Appointment_Track_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Academic Appointment Track that the business process applies to.
     * - minOccurs: 0
     * @var \StructType\Academic_Appointment_TrackObjectType
     */
    public $Academic_Appointment_Track_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Academic_Appointment_ResponseType
     * @uses Academic_Appointment_ResponseType::setEvent_Reference()
     * @uses Academic_Appointment_ResponseType::setAcademic_Appointee_Reference()
     * @uses Academic_Appointment_ResponseType::setAcademic_Appointment_Track_Reference()
     * @uses Academic_Appointment_ResponseType::setVersion()
     * @param \StructType\Unique_IdentifierObjectType $event_Reference
     * @param \StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference
     * @param \StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference
     * @param string $version
     */
    public function __construct(\StructType\Unique_IdentifierObjectType $event_Reference = null, \StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference = null, \StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference = null, $version = null)
    {
        $this
            ->setEvent_Reference($event_Reference)
            ->setAcademic_Appointee_Reference($academic_Appointee_Reference)
            ->setAcademic_Appointment_Track_Reference($academic_Appointment_Track_Reference)
            ->setVersion($version);
    }
    /**
     * Get Event_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getEvent_Reference()
    {
        return $this->Event_Reference;
    }
    /**
     * Set Event_Reference value
     * @param \StructType\Unique_IdentifierObjectType $event_Reference
     * @return \StructType\Academic_Appointment_ResponseType
     */
    public function setEvent_Reference(\StructType\Unique_IdentifierObjectType $event_Reference = null)
    {
        $this->Event_Reference = $event_Reference;
        return $this;
    }
    /**
     * Get Academic_Appointee_Reference value
     * @return \StructType\Academic_Appointee_EnabledObjectType|null
     */
    public function getAcademic_Appointee_Reference()
    {
        return $this->Academic_Appointee_Reference;
    }
    /**
     * Set Academic_Appointee_Reference value
     * @param \StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference
     * @return \StructType\Academic_Appointment_ResponseType
     */
    public function setAcademic_Appointee_Reference(\StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference = null)
    {
        $this->Academic_Appointee_Reference = $academic_Appointee_Reference;
        return $this;
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
     * @return \StructType\Academic_Appointment_ResponseType
     */
    public function setAcademic_Appointment_Track_Reference(\StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference = null)
    {
        $this->Academic_Appointment_Track_Reference = $academic_Appointment_Track_Reference;
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
     * @return \StructType\Academic_Appointment_ResponseType
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
     * @return \StructType\Academic_Appointment_ResponseType
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
