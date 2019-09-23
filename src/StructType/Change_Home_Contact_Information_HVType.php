<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Home_Contact_Information_HVType StructType
 * Meta information extracted from the WSDL
 * - documentation: Operation allowing the addition of contact information for a person
 * @subpackage Structs
 */
class Change_Home_Contact_Information_HVType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for the import home contact information event.
     * - minOccurs: 0
     * @var \StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Change_Home_Contact_Information_Data
     * @var \StructType\Change_Home_Contact_Information_Business_Process_DataType
     */
    public $Change_Home_Contact_Information_Data;
    /**
     * Constructor method for Change_Home_Contact_Information_HVType
     * @uses Change_Home_Contact_Information_HVType::setBusiness_Process_Parameters()
     * @uses Change_Home_Contact_Information_HVType::setChange_Home_Contact_Information_Data()
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \StructType\Change_Home_Contact_Information_Business_Process_DataType $change_Home_Contact_Information_Data
     */
    public function __construct(\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \StructType\Change_Home_Contact_Information_Business_Process_DataType $change_Home_Contact_Information_Data = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setChange_Home_Contact_Information_Data($change_Home_Contact_Information_Data);
    }
    /**
     * Get Business_Process_Parameters value
     * @return \StructType\Business_Process_ParametersType|null
     */
    public function getBusiness_Process_Parameters()
    {
        return $this->Business_Process_Parameters;
    }
    /**
     * Set Business_Process_Parameters value
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @return \StructType\Change_Home_Contact_Information_HVType
     */
    public function setBusiness_Process_Parameters(\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Change_Home_Contact_Information_Data value
     * @return \StructType\Change_Home_Contact_Information_Business_Process_DataType|null
     */
    public function getChange_Home_Contact_Information_Data()
    {
        return $this->Change_Home_Contact_Information_Data;
    }
    /**
     * Set Change_Home_Contact_Information_Data value
     * @param \StructType\Change_Home_Contact_Information_Business_Process_DataType $change_Home_Contact_Information_Data
     * @return \StructType\Change_Home_Contact_Information_HVType
     */
    public function setChange_Home_Contact_Information_Data(\StructType\Change_Home_Contact_Information_Business_Process_DataType $change_Home_Contact_Information_Data = null)
    {
        $this->Change_Home_Contact_Information_Data = $change_Home_Contact_Information_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Change_Home_Contact_Information_HVType
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
