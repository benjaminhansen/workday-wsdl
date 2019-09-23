<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Universal_Identifier_Data_HVType StructType
 * Meta information extracted from the WSDL
 * - documentation: Universal Identifier High Volume
 * @subpackage Structs
 */
class Universal_Identifier_Data_HVType extends AbstractStructBase
{
    /**
     * The Universal_Identifier_Data
     * @var \StructType\Universal_Identifier_DataType
     */
    public $Universal_Identifier_Data;
    /**
     * Constructor method for Universal_Identifier_Data_HVType
     * @uses Universal_Identifier_Data_HVType::setUniversal_Identifier_Data()
     * @param \StructType\Universal_Identifier_DataType $universal_Identifier_Data
     */
    public function __construct(\StructType\Universal_Identifier_DataType $universal_Identifier_Data = null)
    {
        $this
            ->setUniversal_Identifier_Data($universal_Identifier_Data);
    }
    /**
     * Get Universal_Identifier_Data value
     * @return \StructType\Universal_Identifier_DataType|null
     */
    public function getUniversal_Identifier_Data()
    {
        return $this->Universal_Identifier_Data;
    }
    /**
     * Set Universal_Identifier_Data value
     * @param \StructType\Universal_Identifier_DataType $universal_Identifier_Data
     * @return \StructType\Universal_Identifier_Data_HVType
     */
    public function setUniversal_Identifier_Data(\StructType\Universal_Identifier_DataType $universal_Identifier_Data = null)
    {
        $this->Universal_Identifier_Data = $universal_Identifier_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Universal_Identifier_Data_HVType
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
