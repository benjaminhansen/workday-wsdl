<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Military_Service_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for Military Service Data.
 * @subpackage Structs
 */
class Military_Service_DataType extends AbstractStructBase
{
    /**
     * The Military_Status_Reference
     * @var \WorkdayWsdl\\StructType\Military_Status_ReferenceType
     */
    public $Military_Status_Reference;
    /**
     * The Military_Discharge_Date
     * Meta information extracted from the WSDL
     * - documentation: Date of Military Discharge.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Military_Discharge_Date;
    /**
     * Constructor method for Military_Service_DataType
     * @uses Military_Service_DataType::setMilitary_Status_Reference()
     * @uses Military_Service_DataType::setMilitary_Discharge_Date()
     * @param \WorkdayWsdl\\StructType\Military_Status_ReferenceType $military_Status_Reference
     * @param string $military_Discharge_Date
     */
    public function __construct(\WorkdayWsdl\\StructType\Military_Status_ReferenceType $military_Status_Reference = null, $military_Discharge_Date = null)
    {
        $this
            ->setMilitary_Status_Reference($military_Status_Reference)
            ->setMilitary_Discharge_Date($military_Discharge_Date);
    }
    /**
     * Get Military_Status_Reference value
     * @return \WorkdayWsdl\\StructType\Military_Status_ReferenceType|null
     */
    public function getMilitary_Status_Reference()
    {
        return $this->Military_Status_Reference;
    }
    /**
     * Set Military_Status_Reference value
     * @param \WorkdayWsdl\\StructType\Military_Status_ReferenceType $military_Status_Reference
     * @return \WorkdayWsdl\\StructType\Military_Service_DataType
     */
    public function setMilitary_Status_Reference(\WorkdayWsdl\\StructType\Military_Status_ReferenceType $military_Status_Reference = null)
    {
        $this->Military_Status_Reference = $military_Status_Reference;
        return $this;
    }
    /**
     * Get Military_Discharge_Date value
     * @return string|null
     */
    public function getMilitary_Discharge_Date()
    {
        return $this->Military_Discharge_Date;
    }
    /**
     * Set Military_Discharge_Date value
     * @param string $military_Discharge_Date
     * @return \WorkdayWsdl\\StructType\Military_Service_DataType
     */
    public function setMilitary_Discharge_Date($military_Discharge_Date = null)
    {
        // validation for constraint: string
        if (!is_null($military_Discharge_Date) && !is_string($military_Discharge_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($military_Discharge_Date, true), gettype($military_Discharge_Date)), __LINE__);
        }
        $this->Military_Discharge_Date = $military_Discharge_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Military_Service_DataType
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
