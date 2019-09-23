<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address_Line_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for all Address Line data.
 * @subpackage Structs
 */
class Address_Line_DataType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Descriptor
     * Meta information extracted from the WSDL
     * - documentation: The descriptor is an optional serialized attribute that shows the text Override Label (such as Apartment Number or Building Number) that helps describe the usage of the type (such as ADDRESS_LINE_5 and ADDRESS_LINE_6) for each
     * country.
     * @var string
     */
    public $Descriptor;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Enter the address line type, such as ADDRESS_LINE_1, or ADDRESS_LINE_2.
     * @var string
     */
    public $Type;
    /**
     * Constructor method for Address_Line_DataType
     * @uses Address_Line_DataType::set_()
     * @uses Address_Line_DataType::setDescriptor()
     * @uses Address_Line_DataType::setType()
     * @param string $_
     * @param string $descriptor
     * @param string $type
     */
    public function __construct($_ = null, $descriptor = null, $type = null)
    {
        $this
            ->set_($_)
            ->setDescriptor($descriptor)
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
     * @return \StructType\Address_Line_DataType
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
     * Get Descriptor value
     * @return string|null
     */
    public function getDescriptor()
    {
        return $this->Descriptor;
    }
    /**
     * Set Descriptor value
     * @param string $descriptor
     * @return \StructType\Address_Line_DataType
     */
    public function setDescriptor($descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($descriptor) && !is_string($descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptor, true), gettype($descriptor)), __LINE__);
        }
        $this->Descriptor = $descriptor;
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
     * @return \StructType\Address_Line_DataType
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
     * @return \StructType\Address_Line_DataType
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
