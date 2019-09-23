<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Phone_Core_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Only Numbers are allowed for Phone Number field when the Country associated with the Phone is listed in the 'Allowed Phone Validations' field in Tenant Setup - Global | Phone core data.
 * @subpackage Structs
 */
class Phone_Core_DataType extends AbstractStructBase
{
    /**
     * The Device_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for Phone Device Type.
     * @var \WorkdayWsdl\\StructType\Phone_Device_TypeObjectType
     */
    public $Device_Type_Reference;
    /**
     * The Country_Code_Reference
     * Meta information extracted from the WSDL
     * - documentation: International phone code number.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Country_Phone_CodeObjectType
     */
    public $Country_Code_Reference;
    /**
     * The Complete_Phone_Number
     * Meta information extracted from the WSDL
     * - documentation: Full phone number.
     * - maxOccurs: 1
     * @var string
     */
    public $Complete_Phone_Number;
    /**
     * The Extension
     * Meta information extracted from the WSDL
     * - documentation: Phone extension.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Extension;
    /**
     * The Formatted_Phone
     * Meta information extracted from the WSDL
     * - documentation: The formatted Phone number. This data is not used in inbound requests. Any data provided for this attribute will be ignored.
     * @var string
     */
    public $Formatted_Phone;
    /**
     * Constructor method for Phone_Core_DataType
     * @uses Phone_Core_DataType::setDevice_Type_Reference()
     * @uses Phone_Core_DataType::setCountry_Code_Reference()
     * @uses Phone_Core_DataType::setComplete_Phone_Number()
     * @uses Phone_Core_DataType::setExtension()
     * @uses Phone_Core_DataType::setFormatted_Phone()
     * @param \WorkdayWsdl\\StructType\Phone_Device_TypeObjectType $device_Type_Reference
     * @param \WorkdayWsdl\\StructType\Country_Phone_CodeObjectType $country_Code_Reference
     * @param string $complete_Phone_Number
     * @param string $extension
     * @param string $formatted_Phone
     */
    public function __construct(\WorkdayWsdl\\StructType\Phone_Device_TypeObjectType $device_Type_Reference = null, \WorkdayWsdl\\StructType\Country_Phone_CodeObjectType $country_Code_Reference = null, $complete_Phone_Number = null, $extension = null, $formatted_Phone = null)
    {
        $this
            ->setDevice_Type_Reference($device_Type_Reference)
            ->setCountry_Code_Reference($country_Code_Reference)
            ->setComplete_Phone_Number($complete_Phone_Number)
            ->setExtension($extension)
            ->setFormatted_Phone($formatted_Phone);
    }
    /**
     * Get Device_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Phone_Device_TypeObjectType|null
     */
    public function getDevice_Type_Reference()
    {
        return $this->Device_Type_Reference;
    }
    /**
     * Set Device_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Phone_Device_TypeObjectType $device_Type_Reference
     * @return \WorkdayWsdl\\StructType\Phone_Core_DataType
     */
    public function setDevice_Type_Reference(\WorkdayWsdl\\StructType\Phone_Device_TypeObjectType $device_Type_Reference = null)
    {
        $this->Device_Type_Reference = $device_Type_Reference;
        return $this;
    }
    /**
     * Get Country_Code_Reference value
     * @return \WorkdayWsdl\\StructType\Country_Phone_CodeObjectType|null
     */
    public function getCountry_Code_Reference()
    {
        return $this->Country_Code_Reference;
    }
    /**
     * Set Country_Code_Reference value
     * @param \WorkdayWsdl\\StructType\Country_Phone_CodeObjectType $country_Code_Reference
     * @return \WorkdayWsdl\\StructType\Phone_Core_DataType
     */
    public function setCountry_Code_Reference(\WorkdayWsdl\\StructType\Country_Phone_CodeObjectType $country_Code_Reference = null)
    {
        $this->Country_Code_Reference = $country_Code_Reference;
        return $this;
    }
    /**
     * Get Complete_Phone_Number value
     * @return string|null
     */
    public function getComplete_Phone_Number()
    {
        return $this->Complete_Phone_Number;
    }
    /**
     * Set Complete_Phone_Number value
     * @param string $complete_Phone_Number
     * @return \WorkdayWsdl\\StructType\Phone_Core_DataType
     */
    public function setComplete_Phone_Number($complete_Phone_Number = null)
    {
        // validation for constraint: string
        if (!is_null($complete_Phone_Number) && !is_string($complete_Phone_Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($complete_Phone_Number, true), gettype($complete_Phone_Number)), __LINE__);
        }
        $this->Complete_Phone_Number = $complete_Phone_Number;
        return $this;
    }
    /**
     * Get Extension value
     * @return string|null
     */
    public function getExtension()
    {
        return $this->Extension;
    }
    /**
     * Set Extension value
     * @param string $extension
     * @return \WorkdayWsdl\\StructType\Phone_Core_DataType
     */
    public function setExtension($extension = null)
    {
        // validation for constraint: string
        if (!is_null($extension) && !is_string($extension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extension, true), gettype($extension)), __LINE__);
        }
        $this->Extension = $extension;
        return $this;
    }
    /**
     * Get Formatted_Phone value
     * @return string|null
     */
    public function getFormatted_Phone()
    {
        return $this->Formatted_Phone;
    }
    /**
     * Set Formatted_Phone value
     * @param string $formatted_Phone
     * @return \WorkdayWsdl\\StructType\Phone_Core_DataType
     */
    public function setFormatted_Phone($formatted_Phone = null)
    {
        // validation for constraint: string
        if (!is_null($formatted_Phone) && !is_string($formatted_Phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatted_Phone, true), gettype($formatted_Phone)), __LINE__);
        }
        $this->Formatted_Phone = $formatted_Phone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Phone_Core_DataType
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
