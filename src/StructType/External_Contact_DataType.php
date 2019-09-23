<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Contact_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: External Contact Data: ID subelements of Integration ID Data cannot reference multiple External Contacts. | Encapsulating element containing all External Contact data.
 * @subpackage Structs
 */
class External_Contact_DataType extends AbstractStructBase
{
    /**
     * The Integration_ID_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Integration_ID_DataType
     */
    public $Integration_ID_Data;
    /**
     * The External_Contact_Type
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of External Contact Type must exist for the given value of External Contact Type Name. | Text attribute identifying name of External Contact Type.
     * - maxOccurs: 1
     * @var string
     */
    public $External_Contact_Type;
    /**
     * Constructor method for External_Contact_DataType
     * @uses External_Contact_DataType::setIntegration_ID_Data()
     * @uses External_Contact_DataType::setExternal_Contact_Type()
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @param string $external_Contact_Type
     */
    public function __construct(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null, $external_Contact_Type = null)
    {
        $this
            ->setIntegration_ID_Data($integration_ID_Data)
            ->setExternal_Contact_Type($external_Contact_Type);
    }
    /**
     * Get Integration_ID_Data value
     * @return \WorkdayWsdl\\StructType\External_Integration_ID_DataType|null
     */
    public function getIntegration_ID_Data()
    {
        return $this->Integration_ID_Data;
    }
    /**
     * Set Integration_ID_Data value
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data
     * @return \WorkdayWsdl\\StructType\External_Contact_DataType
     */
    public function setIntegration_ID_Data(\WorkdayWsdl\\StructType\External_Integration_ID_DataType $integration_ID_Data = null)
    {
        $this->Integration_ID_Data = $integration_ID_Data;
        return $this;
    }
    /**
     * Get External_Contact_Type value
     * @return string|null
     */
    public function getExternal_Contact_Type()
    {
        return $this->External_Contact_Type;
    }
    /**
     * Set External_Contact_Type value
     * @param string $external_Contact_Type
     * @return \WorkdayWsdl\\StructType\External_Contact_DataType
     */
    public function setExternal_Contact_Type($external_Contact_Type = null)
    {
        // validation for constraint: string
        if (!is_null($external_Contact_Type) && !is_string($external_Contact_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($external_Contact_Type, true), gettype($external_Contact_Type)), __LINE__);
        }
        $this->External_Contact_Type = $external_Contact_Type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\External_Contact_DataType
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
