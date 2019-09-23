<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Put_External_Disability_Self_Identification_Record_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element for Put External Disability Self-Identification Record
 * @subpackage Structs
 */
class Put_External_Disability_Self_Identification_Record_RequestType extends AbstractStructBase
{
    /**
     * The External_Disability_Self_Identification_Record_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference an External Disability Self-Identification Record.
     * - minOccurs: 0
     * @var \StructType\External_Disability_Self_Identification_RecordObjectType
     */
    public $External_Disability_Self_Identification_Record_Reference;
    /**
     * The External_Disability_Self_Identification_Record_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all External Disability Self-Identification Record data.
     * @var \StructType\External_Disability_Self_Identification_Record_DataType
     */
    public $External_Disability_Self_Identification_Record_Data;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Flag to delete an existing External Disability Self-Identification Record.
     * @var bool
     */
    public $Delete;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for
     * Put_External_Disability_Self_Identification_Record_RequestType
     * @uses Put_External_Disability_Self_Identification_Record_RequestType::setExternal_Disability_Self_Identification_Record_Reference()
     * @uses Put_External_Disability_Self_Identification_Record_RequestType::setExternal_Disability_Self_Identification_Record_Data()
     * @uses Put_External_Disability_Self_Identification_Record_RequestType::setDelete()
     * @uses Put_External_Disability_Self_Identification_Record_RequestType::setVersion()
     * @param \StructType\External_Disability_Self_Identification_RecordObjectType $external_Disability_Self_Identification_Record_Reference
     * @param \StructType\External_Disability_Self_Identification_Record_DataType $external_Disability_Self_Identification_Record_Data
     * @param bool $delete
     * @param string $version
     */
    public function __construct(\StructType\External_Disability_Self_Identification_RecordObjectType $external_Disability_Self_Identification_Record_Reference = null, \StructType\External_Disability_Self_Identification_Record_DataType $external_Disability_Self_Identification_Record_Data = null, $delete = null, $version = null)
    {
        $this
            ->setExternal_Disability_Self_Identification_Record_Reference($external_Disability_Self_Identification_Record_Reference)
            ->setExternal_Disability_Self_Identification_Record_Data($external_Disability_Self_Identification_Record_Data)
            ->setDelete($delete)
            ->setVersion($version);
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
     * @return \StructType\Put_External_Disability_Self_Identification_Record_RequestType
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
     * @return \StructType\Put_External_Disability_Self_Identification_Record_RequestType
     */
    public function setExternal_Disability_Self_Identification_Record_Data(\StructType\External_Disability_Self_Identification_Record_DataType $external_Disability_Self_Identification_Record_Data = null)
    {
        $this->External_Disability_Self_Identification_Record_Data = $external_Disability_Self_Identification_Record_Data;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \StructType\Put_External_Disability_Self_Identification_Record_RequestType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\Put_External_Disability_Self_Identification_Record_RequestType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Put_External_Disability_Self_Identification_Record_RequestType
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
