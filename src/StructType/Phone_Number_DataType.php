<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Phone_Number_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Usage Type and Use For combination must be valid for Phone Number. | Encapsulating element for all Phone Number data.
 * @subpackage Structs
 */
class Phone_Number_DataType extends AbstractStructBase
{
    /**
     * The Country_ISO_Code
     * Meta information extracted from the WSDL
     * - documentation: Country ISO code. If the Country ISO code is specified, then this ISO code will be used to determine the Country Phone Code for (eliminate space between f and o) the phone. Pass this ISO code to distinguish between multiple countries
     * sharing the same Country Phone Code. (For example, 1 is the Country Phone Code that is shared by USA, Canada, Dominican Republic, Bermuda, Jamaica, and Puerto Rico.)
     * - base: xsd:string
     * - maxLength: 3
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Country_ISO_Code;
    /**
     * The International_Phone_Code
     * Meta information extracted from the WSDL
     * - documentation: International phone code number.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $International_Phone_Code;
    /**
     * The Area_Code
     * Meta information extracted from the WSDL
     * - documentation: Area code number.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Area_Code;
    /**
     * The Phone_Number
     * Meta information extracted from the WSDL
     * - documentation: Phone number.
     * - maxOccurs: 1
     * @var string
     */
    public $Phone_Number;
    /**
     * The Phone_Extension
     * Meta information extracted from the WSDL
     * - documentation: Phone extension.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Phone_Extension;
    /**
     * The Phone_Device_Type_Reference
     * @var \WorkdayWsdl\\StructType\Phone_Device_Type_ReferenceType
     */
    public $Phone_Device_Type_Reference;
    /**
     * The Usage_Data
     * @var \WorkdayWsdl\\StructType\Communication_Method_Usage_DataType
     */
    public $Usage_Data;
    /**
     * Constructor method for Phone_Number_DataType
     * @uses Phone_Number_DataType::setCountry_ISO_Code()
     * @uses Phone_Number_DataType::setInternational_Phone_Code()
     * @uses Phone_Number_DataType::setArea_Code()
     * @uses Phone_Number_DataType::setPhone_Number()
     * @uses Phone_Number_DataType::setPhone_Extension()
     * @uses Phone_Number_DataType::setPhone_Device_Type_Reference()
     * @uses Phone_Number_DataType::setUsage_Data()
     * @param string $country_ISO_Code
     * @param string $international_Phone_Code
     * @param string $area_Code
     * @param string $phone_Number
     * @param string $phone_Extension
     * @param \WorkdayWsdl\\StructType\Phone_Device_Type_ReferenceType $phone_Device_Type_Reference
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_DataType $usage_Data
     */
    public function __construct($country_ISO_Code = null, $international_Phone_Code = null, $area_Code = null, $phone_Number = null, $phone_Extension = null, \WorkdayWsdl\\StructType\Phone_Device_Type_ReferenceType $phone_Device_Type_Reference = null, \WorkdayWsdl\\StructType\Communication_Method_Usage_DataType $usage_Data = null)
    {
        $this
            ->setCountry_ISO_Code($country_ISO_Code)
            ->setInternational_Phone_Code($international_Phone_Code)
            ->setArea_Code($area_Code)
            ->setPhone_Number($phone_Number)
            ->setPhone_Extension($phone_Extension)
            ->setPhone_Device_Type_Reference($phone_Device_Type_Reference)
            ->setUsage_Data($usage_Data);
    }
    /**
     * Get Country_ISO_Code value
     * @return string|null
     */
    public function getCountry_ISO_Code()
    {
        return $this->Country_ISO_Code;
    }
    /**
     * Set Country_ISO_Code value
     * @param string $country_ISO_Code
     * @return \WorkdayWsdl\\StructType\Phone_Number_DataType
     */
    public function setCountry_ISO_Code($country_ISO_Code = null)
    {
        // validation for constraint: string
        if (!is_null($country_ISO_Code) && !is_string($country_ISO_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country_ISO_Code, true), gettype($country_ISO_Code)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($country_ISO_Code) && mb_strlen($country_ISO_Code) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen($country_ISO_Code)), __LINE__);
        }
        $this->Country_ISO_Code = $country_ISO_Code;
        return $this;
    }
    /**
     * Get International_Phone_Code value
     * @return string|null
     */
    public function getInternational_Phone_Code()
    {
        return $this->International_Phone_Code;
    }
    /**
     * Set International_Phone_Code value
     * @param string $international_Phone_Code
     * @return \WorkdayWsdl\\StructType\Phone_Number_DataType
     */
    public function setInternational_Phone_Code($international_Phone_Code = null)
    {
        // validation for constraint: string
        if (!is_null($international_Phone_Code) && !is_string($international_Phone_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($international_Phone_Code, true), gettype($international_Phone_Code)), __LINE__);
        }
        $this->International_Phone_Code = $international_Phone_Code;
        return $this;
    }
    /**
     * Get Area_Code value
     * @return string|null
     */
    public function getArea_Code()
    {
        return $this->Area_Code;
    }
    /**
     * Set Area_Code value
     * @param string $area_Code
     * @return \WorkdayWsdl\\StructType\Phone_Number_DataType
     */
    public function setArea_Code($area_Code = null)
    {
        // validation for constraint: string
        if (!is_null($area_Code) && !is_string($area_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($area_Code, true), gettype($area_Code)), __LINE__);
        }
        $this->Area_Code = $area_Code;
        return $this;
    }
    /**
     * Get Phone_Number value
     * @return string|null
     */
    public function getPhone_Number()
    {
        return $this->Phone_Number;
    }
    /**
     * Set Phone_Number value
     * @param string $phone_Number
     * @return \WorkdayWsdl\\StructType\Phone_Number_DataType
     */
    public function setPhone_Number($phone_Number = null)
    {
        // validation for constraint: string
        if (!is_null($phone_Number) && !is_string($phone_Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone_Number, true), gettype($phone_Number)), __LINE__);
        }
        $this->Phone_Number = $phone_Number;
        return $this;
    }
    /**
     * Get Phone_Extension value
     * @return string|null
     */
    public function getPhone_Extension()
    {
        return $this->Phone_Extension;
    }
    /**
     * Set Phone_Extension value
     * @param string $phone_Extension
     * @return \WorkdayWsdl\\StructType\Phone_Number_DataType
     */
    public function setPhone_Extension($phone_Extension = null)
    {
        // validation for constraint: string
        if (!is_null($phone_Extension) && !is_string($phone_Extension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone_Extension, true), gettype($phone_Extension)), __LINE__);
        }
        $this->Phone_Extension = $phone_Extension;
        return $this;
    }
    /**
     * Get Phone_Device_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Phone_Device_Type_ReferenceType|null
     */
    public function getPhone_Device_Type_Reference()
    {
        return $this->Phone_Device_Type_Reference;
    }
    /**
     * Set Phone_Device_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Phone_Device_Type_ReferenceType $phone_Device_Type_Reference
     * @return \WorkdayWsdl\\StructType\Phone_Number_DataType
     */
    public function setPhone_Device_Type_Reference(\WorkdayWsdl\\StructType\Phone_Device_Type_ReferenceType $phone_Device_Type_Reference = null)
    {
        $this->Phone_Device_Type_Reference = $phone_Device_Type_Reference;
        return $this;
    }
    /**
     * Get Usage_Data value
     * @return \WorkdayWsdl\\StructType\Communication_Method_Usage_DataType|null
     */
    public function getUsage_Data()
    {
        return $this->Usage_Data;
    }
    /**
     * Set Usage_Data value
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_DataType $usage_Data
     * @return \WorkdayWsdl\\StructType\Phone_Number_DataType
     */
    public function setUsage_Data(\WorkdayWsdl\\StructType\Communication_Method_Usage_DataType $usage_Data = null)
    {
        $this->Usage_Data = $usage_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Phone_Number_DataType
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
