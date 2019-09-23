<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Suffix_Name_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Social Suffix can only be set for Countries that accept it. | Royal Suffix can only be set for Countries that accept it. | Academic Suffix can only be set for Countries that accept it. | Honorary Suffix can only be set for Countries
 * that accept it. | Hereditary Suffix can only be set for Countries that accept it. | Religious Suffix can only be set for Countries that accept it. | Professional Suffix can only be set for Countries that accept it. | Encapsulating element for all
 * Suffix Name data.
 * @subpackage Structs
 */
class Suffix_Name_DataType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Type of Suffix (e.g. Social, Royal, etc.)
     * @var string
     */
    public $Type;
    /**
     * Constructor method for Suffix_Name_DataType
     * @uses Suffix_Name_DataType::set_()
     * @uses Suffix_Name_DataType::setType()
     * @param string $_
     * @param string $type
     */
    public function __construct($_ = null, $type = null)
    {
        $this
            ->set_($_)
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
     * @return \StructType\Suffix_Name_DataType
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
     * @return \StructType\Suffix_Name_DataType
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
     * @return \StructType\Suffix_Name_DataType
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
