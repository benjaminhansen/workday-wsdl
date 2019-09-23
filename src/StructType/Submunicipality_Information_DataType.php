<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Submunicipality_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The submunicipality of the address.
 * @subpackage Structs
 */
class Submunicipality_Information_DataType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Address_Component_Name
     * Meta information extracted from the WSDL
     * - documentation: The descriptor is an optional serialized attribute that shows the text Override Label (such as Municipality or District) that helps describe the usage of the type (such as CITY_SUBDIVISION_1 or CITY_SUBDIVISION_2) for each country.
     * @var string
     */
    public $Address_Component_Name;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The city subdivision part of the address.
     * @var string
     */
    public $Type;
    /**
     * Constructor method for Submunicipality_Information_DataType
     * @uses Submunicipality_Information_DataType::set_()
     * @uses Submunicipality_Information_DataType::setAddress_Component_Name()
     * @uses Submunicipality_Information_DataType::setType()
     * @param string $_
     * @param string $address_Component_Name
     * @param string $type
     */
    public function __construct($_ = null, $address_Component_Name = null, $type = null)
    {
        $this
            ->set_($_)
            ->setAddress_Component_Name($address_Component_Name)
            ->setType($type);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \WorkdayWsdl\\StructType\Submunicipality_Information_DataType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Address_Component_Name value
     * @return string|null
     */
    public function getAddress_Component_Name()
    {
        return $this->Address_Component_Name;
    }
    /**
     * Set Address_Component_Name value
     * @param string $address_Component_Name
     * @return \WorkdayWsdl\\StructType\Submunicipality_Information_DataType
     */
    public function setAddress_Component_Name($address_Component_Name = null)
    {
        // validation for constraint: string
        if (!is_null($address_Component_Name) && !is_string($address_Component_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address_Component_Name, true), gettype($address_Component_Name)), __LINE__);
        }
        $this->Address_Component_Name = $address_Component_Name;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \WorkdayWsdl\\StructType\Submunicipality_Information_DataType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Submunicipality_Information_DataType
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
