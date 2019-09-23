<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Disability_Self-Identification_RecordType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of External Disability Self-Identification Record
 * @subpackage Structs
 */
class External_Disability_Self_Identification_RecordType extends AbstractStructBase
{
    /**
     * The External_Disability_Self_Identification_Record_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference an External Disability Self-Identification Record
     * - minOccurs: 0
     * @var \StructType\External_Disability_Self_Identification_RecordObjectType
     */
    public $External_Disability_Self_Identification_Record_Reference;
    /**
     * The External_Disability_Self_Identification_Record_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\External_Disability_Self_Identification_Record_DataType
     */
    public $External_Disability_Self_Identification_Record_Data;
    /**
     * Constructor method for External_Disability_Self-Identification_RecordType
     * @uses External_Disability_Self_Identification_RecordType::setExternal_Disability_Self_Identification_Record_Reference()
     * @uses External_Disability_Self_Identification_RecordType::setExternal_Disability_Self_Identification_Record_Data()
     * @param \StructType\External_Disability_Self_Identification_RecordObjectType $external_Disability_Self_Identification_Record_Reference
     * @param \StructType\External_Disability_Self_Identification_Record_DataType $external_Disability_Self_Identification_Record_Data
     */
    public function __construct(\StructType\External_Disability_Self_Identification_RecordObjectType $external_Disability_Self_Identification_Record_Reference = null, \StructType\External_Disability_Self_Identification_Record_DataType $external_Disability_Self_Identification_Record_Data = null)
    {
        $this
            ->setExternal_Disability_Self_Identification_Record_Reference($external_Disability_Self_Identification_Record_Reference)
            ->setExternal_Disability_Self_Identification_Record_Data($external_Disability_Self_Identification_Record_Data);
    }
    /**
     * Get External_Disability_Self_Identification_Record_Reference value
     * @return \StructType\External_Disability_Self_Identification_RecordObjectType|null
     */
    public function getExternal_Disability_Self_Identification_Record_Reference()
    {
        return $this->External_Disability_Self_Identification_Record_Reference;
    }
    /**
     * Set External_Disability_Self_Identification_Record_Reference value
     * @param \StructType\External_Disability_Self_Identification_RecordObjectType $external_Disability_Self_Identification_Record_Reference
     * @return \StructType\External_Disability_Self_Identification_RecordType
     */
    public function setExternal_Disability_Self_Identification_Record_Reference(\StructType\External_Disability_Self_Identification_RecordObjectType $external_Disability_Self_Identification_Record_Reference = null)
    {
        $this->External_Disability_Self_Identification_Record_Reference = $external_Disability_Self_Identification_Record_Reference;
        return $this;
    }
    /**
     * Get External_Disability_Self_Identification_Record_Data value
     * @return \StructType\External_Disability_Self_Identification_Record_DataType|null
     */
    public function getExternal_Disability_Self_Identification_Record_Data()
    {
        return $this->External_Disability_Self_Identification_Record_Data;
    }
    /**
     * Set External_Disability_Self_Identification_Record_Data value
     * @param \StructType\External_Disability_Self_Identification_Record_DataType $external_Disability_Self_Identification_Record_Data
     * @return \StructType\External_Disability_Self_Identification_RecordType
     */
    public function setExternal_Disability_Self_Identification_Record_Data(\StructType\External_Disability_Self_Identification_Record_DataType $external_Disability_Self_Identification_Record_Data = null)
    {
        $this->External_Disability_Self_Identification_Record_Data = $external_Disability_Self_Identification_Record_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\External_Disability_Self_Identification_RecordType
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
