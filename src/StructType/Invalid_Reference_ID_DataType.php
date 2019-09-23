<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Invalid_Reference_ID_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Represents a reference ID that was submitted with data not found in Workday
 * @subpackage Structs
 */
class Invalid_Reference_ID_DataType extends AbstractStructBase
{
    /**
     * The Invalid_Reference_ID
     * Meta information extracted from the WSDL
     * - documentation: Invalid Reference ID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Invalid_Reference_ID;
    /**
     * The Invalid_Reference_ID_Type
     * Meta information extracted from the WSDL
     * - documentation: Invalid Reference ID Type
     * - base: xsd:string
     * - maxLength: 128
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Invalid_Reference_ID_Type;
    /**
     * Constructor method for Invalid_Reference_ID_DataType
     * @uses Invalid_Reference_ID_DataType::setInvalid_Reference_ID()
     * @uses Invalid_Reference_ID_DataType::setInvalid_Reference_ID_Type()
     * @param string $invalid_Reference_ID
     * @param string $invalid_Reference_ID_Type
     */
    public function __construct($invalid_Reference_ID = null, $invalid_Reference_ID_Type = null)
    {
        $this
            ->setInvalid_Reference_ID($invalid_Reference_ID)
            ->setInvalid_Reference_ID_Type($invalid_Reference_ID_Type);
    }
    /**
     * Get Invalid_Reference_ID value
     * @return string|null
     */
    public function getInvalid_Reference_ID()
    {
        return $this->Invalid_Reference_ID;
    }
    /**
     * Set Invalid_Reference_ID value
     * @param string $invalid_Reference_ID
     * @return \StructType\Invalid_Reference_ID_DataType
     */
    public function setInvalid_Reference_ID($invalid_Reference_ID = null)
    {
        // validation for constraint: string
        if (!is_null($invalid_Reference_ID) && !is_string($invalid_Reference_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invalid_Reference_ID, true), gettype($invalid_Reference_ID)), __LINE__);
        }
        $this->Invalid_Reference_ID = $invalid_Reference_ID;
        return $this;
    }
    /**
     * Get Invalid_Reference_ID_Type value
     * @return string|null
     */
    public function getInvalid_Reference_ID_Type()
    {
        return $this->Invalid_Reference_ID_Type;
    }
    /**
     * Set Invalid_Reference_ID_Type value
     * @param string $invalid_Reference_ID_Type
     * @return \StructType\Invalid_Reference_ID_DataType
     */
    public function setInvalid_Reference_ID_Type($invalid_Reference_ID_Type = null)
    {
        // validation for constraint: string
        if (!is_null($invalid_Reference_ID_Type) && !is_string($invalid_Reference_ID_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invalid_Reference_ID_Type, true), gettype($invalid_Reference_ID_Type)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($invalid_Reference_ID_Type) && mb_strlen($invalid_Reference_ID_Type) > 128) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen($invalid_Reference_ID_Type)), __LINE__);
        }
        $this->Invalid_Reference_ID_Type = $invalid_Reference_ID_Type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Invalid_Reference_ID_DataType
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
