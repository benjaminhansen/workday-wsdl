<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Old_Emergency_ContactType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Emergency Contact data.
 * @subpackage Structs
 */
class Old_Emergency_ContactType extends AbstractStructBase
{
    /**
     * The Emergency_Contact_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference for the emergency contact.
     * @var \WorkdayWsdl\\StructType\Emergency_ContactObjectType
     */
    public $Emergency_Contact_Reference;
    /**
     * The Emergency_Contact_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the details about an emergency contact.
     * @var \WorkdayWsdl\\StructType\Emergency_Contact_DataType
     */
    public $Emergency_Contact_Data;
    /**
     * Constructor method for Old_Emergency_ContactType
     * @uses Old_Emergency_ContactType::setEmergency_Contact_Reference()
     * @uses Old_Emergency_ContactType::setEmergency_Contact_Data()
     * @param \WorkdayWsdl\\StructType\Emergency_ContactObjectType $emergency_Contact_Reference
     * @param \WorkdayWsdl\\StructType\Emergency_Contact_DataType $emergency_Contact_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Emergency_ContactObjectType $emergency_Contact_Reference = null, \WorkdayWsdl\\StructType\Emergency_Contact_DataType $emergency_Contact_Data = null)
    {
        $this
            ->setEmergency_Contact_Reference($emergency_Contact_Reference)
            ->setEmergency_Contact_Data($emergency_Contact_Data);
    }
    /**
     * Get Emergency_Contact_Reference value
     * @return \WorkdayWsdl\\StructType\Emergency_ContactObjectType|null
     */
    public function getEmergency_Contact_Reference()
    {
        return $this->Emergency_Contact_Reference;
    }
    /**
     * Set Emergency_Contact_Reference value
     * @param \WorkdayWsdl\\StructType\Emergency_ContactObjectType $emergency_Contact_Reference
     * @return \WorkdayWsdl\\StructType\Old_Emergency_ContactType
     */
    public function setEmergency_Contact_Reference(\WorkdayWsdl\\StructType\Emergency_ContactObjectType $emergency_Contact_Reference = null)
    {
        $this->Emergency_Contact_Reference = $emergency_Contact_Reference;
        return $this;
    }
    /**
     * Get Emergency_Contact_Data value
     * @return \WorkdayWsdl\\StructType\Emergency_Contact_DataType|null
     */
    public function getEmergency_Contact_Data()
    {
        return $this->Emergency_Contact_Data;
    }
    /**
     * Set Emergency_Contact_Data value
     * @param \WorkdayWsdl\\StructType\Emergency_Contact_DataType $emergency_Contact_Data
     * @return \WorkdayWsdl\\StructType\Old_Emergency_ContactType
     */
    public function setEmergency_Contact_Data(\WorkdayWsdl\\StructType\Emergency_Contact_DataType $emergency_Contact_Data = null)
    {
        $this->Emergency_Contact_Data = $emergency_Contact_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Old_Emergency_ContactType
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
