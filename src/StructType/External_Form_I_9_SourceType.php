<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Form_I-9_SourceType StructType
 * Meta information extracted from the WSDL
 * - documentation: External Form I-9 Source
 * @subpackage Structs
 */
class External_Form_I_9_SourceType extends AbstractStructBase
{
    /**
     * The External_Form_I_9_Source_Reference
     * Meta information extracted from the WSDL
     * - documentation: External Form I-9 Source Reference
     * - minOccurs: 0
     * @var \StructType\External_Form_I_9_SourceObjectType
     */
    public $External_Form_I_9_Source_Reference;
    /**
     * The External_Form_I_9_Source_Data
     * Meta information extracted from the WSDL
     * - documentation: External Form I-9 Source Data
     * - minOccurs: 0
     * @var \StructType\External_Form_I_9_Source_DataType
     */
    public $External_Form_I_9_Source_Data;
    /**
     * Constructor method for External_Form_I-9_SourceType
     * @uses External_Form_I_9_SourceType::setExternal_Form_I_9_Source_Reference()
     * @uses External_Form_I_9_SourceType::setExternal_Form_I_9_Source_Data()
     * @param \StructType\External_Form_I_9_SourceObjectType $external_Form_I_9_Source_Reference
     * @param \StructType\External_Form_I_9_Source_DataType $external_Form_I_9_Source_Data
     */
    public function __construct(\StructType\External_Form_I_9_SourceObjectType $external_Form_I_9_Source_Reference = null, \StructType\External_Form_I_9_Source_DataType $external_Form_I_9_Source_Data = null)
    {
        $this
            ->setExternal_Form_I_9_Source_Reference($external_Form_I_9_Source_Reference)
            ->setExternal_Form_I_9_Source_Data($external_Form_I_9_Source_Data);
    }
    /**
     * Get external_Form_I_Source_Reference value
     * @return external_Form_I_Source_Reference
     */
    public function getExternal_Form_I_9_Source_Reference()
    {
        return $this->{'External_Form_I-9_Source_Reference'};
    }
    /**
     * Set external_Form_I_Source_Reference value
     * @param external_Form_I_Source_Reference $external_Form_I_Source_Reference
     * @return \StructType\External_Form_I_9_SourceType
     */
    public function setExternal_Form_I_9_Source_Reference(\StructType\External_Form_I_9_SourceObjectType $external_Form_I_9_Source_Reference = null)
    {
        $this->External_Form_I_9_Source_Reference = $this->{'External_Form_I-9_Source_Reference'} = $external_Form_I_9_Source_Reference;
        return $this;
    }
    /**
     * Get external_Form_I_Source_Data value
     * @return external_Form_I_Source_Data
     */
    public function getExternal_Form_I_9_Source_Data()
    {
        return $this->{'External_Form_I-9_Source_Data'};
    }
    /**
     * Set external_Form_I_Source_Data value
     * @param external_Form_I_Source_Data $external_Form_I_Source_Data
     * @return \StructType\External_Form_I_9_SourceType
     */
    public function setExternal_Form_I_9_Source_Data(\StructType\External_Form_I_9_Source_DataType $external_Form_I_9_Source_Data = null)
    {
        $this->External_Form_I_9_Source_Data = $this->{'External_Form_I-9_Source_Data'} = $external_Form_I_9_Source_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\External_Form_I_9_SourceType
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
