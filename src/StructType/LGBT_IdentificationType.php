<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LGBT_IdentificationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of LGBT Identification
 * @subpackage Structs
 */
class LGBT_IdentificationType extends AbstractStructBase
{
    /**
     * The LGBT_Identification_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a LGBT Identification
     * - minOccurs: 0
     * @var \StructType\LGBT_IdentificationObjectType
     */
    public $LGBT_Identification_Reference;
    /**
     * The LGBT_Identification_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all LGBT Identification data.
     * - minOccurs: 0
     * @var \StructType\LGBT_Identification_DataType
     */
    public $LGBT_Identification_Data;
    /**
     * Constructor method for LGBT_IdentificationType
     * @uses LGBT_IdentificationType::setLGBT_Identification_Reference()
     * @uses LGBT_IdentificationType::setLGBT_Identification_Data()
     * @param \StructType\LGBT_IdentificationObjectType $lGBT_Identification_Reference
     * @param \StructType\LGBT_Identification_DataType $lGBT_Identification_Data
     */
    public function __construct(\StructType\LGBT_IdentificationObjectType $lGBT_Identification_Reference = null, \StructType\LGBT_Identification_DataType $lGBT_Identification_Data = null)
    {
        $this
            ->setLGBT_Identification_Reference($lGBT_Identification_Reference)
            ->setLGBT_Identification_Data($lGBT_Identification_Data);
    }
    /**
     * Get LGBT_Identification_Reference value
     * @return \StructType\LGBT_IdentificationObjectType|null
     */
    public function getLGBT_Identification_Reference()
    {
        return $this->LGBT_Identification_Reference;
    }
    /**
     * Set LGBT_Identification_Reference value
     * @param \StructType\LGBT_IdentificationObjectType $lGBT_Identification_Reference
     * @return \StructType\LGBT_IdentificationType
     */
    public function setLGBT_Identification_Reference(\StructType\LGBT_IdentificationObjectType $lGBT_Identification_Reference = null)
    {
        $this->LGBT_Identification_Reference = $lGBT_Identification_Reference;
        return $this;
    }
    /**
     * Get LGBT_Identification_Data value
     * @return \StructType\LGBT_Identification_DataType|null
     */
    public function getLGBT_Identification_Data()
    {
        return $this->LGBT_Identification_Data;
    }
    /**
     * Set LGBT_Identification_Data value
     * @param \StructType\LGBT_Identification_DataType $lGBT_Identification_Data
     * @return \StructType\LGBT_IdentificationType
     */
    public function setLGBT_Identification_Data(\StructType\LGBT_Identification_DataType $lGBT_Identification_Data = null)
    {
        $this->LGBT_Identification_Data = $lGBT_Identification_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LGBT_IdentificationType
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
