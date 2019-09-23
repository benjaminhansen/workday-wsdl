<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Communication_Usage_Type_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference ID for the communication usage type.
 * @subpackage Structs
 */
class Communication_Usage_Type_DataType extends AbstractStructBase
{
    /**
     * The Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the communication usage type.
     * @var \StructType\Communication_Usage_TypeObjectType
     */
    public $Type_Reference;
    /**
     * The Primary
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the communication method is primary.
     * @var bool
     */
    public $Primary;
    /**
     * Constructor method for Communication_Usage_Type_DataType
     * @uses Communication_Usage_Type_DataType::setType_Reference()
     * @uses Communication_Usage_Type_DataType::setPrimary()
     * @param \StructType\Communication_Usage_TypeObjectType $type_Reference
     * @param bool $primary
     */
    public function __construct(\StructType\Communication_Usage_TypeObjectType $type_Reference = null, $primary = null)
    {
        $this
            ->setType_Reference($type_Reference)
            ->setPrimary($primary);
    }
    /**
     * Get Type_Reference value
     * @return \StructType\Communication_Usage_TypeObjectType|null
     */
    public function getType_Reference()
    {
        return $this->Type_Reference;
    }
    /**
     * Set Type_Reference value
     * @param \StructType\Communication_Usage_TypeObjectType $type_Reference
     * @return \StructType\Communication_Usage_Type_DataType
     */
    public function setType_Reference(\StructType\Communication_Usage_TypeObjectType $type_Reference = null)
    {
        $this->Type_Reference = $type_Reference;
        return $this;
    }
    /**
     * Get Primary value
     * @return bool|null
     */
    public function getPrimary()
    {
        return $this->Primary;
    }
    /**
     * Set Primary value
     * @param bool $primary
     * @return \StructType\Communication_Usage_Type_DataType
     */
    public function setPrimary($primary = null)
    {
        // validation for constraint: boolean
        if (!is_null($primary) && !is_bool($primary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($primary, true), gettype($primary)), __LINE__);
        }
        $this->Primary = $primary;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Communication_Usage_Type_DataType
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
