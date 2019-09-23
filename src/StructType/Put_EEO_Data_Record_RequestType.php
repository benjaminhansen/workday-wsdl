<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_EEO_Data_Record_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put EEO Data Record Request
 * @subpackage Structs
 */
class Put_EEO_Data_Record_RequestType extends AbstractStructBase
{
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Delete
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Delete;
    /**
     * The External_EEO_1_Data_Reference
     * Meta information extracted from the WSDL
     * - documentation: External EEO-1 Data Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_EEO_1_DataObjectType
     */
    public $External_EEO_1_Data_Reference;
    /**
     * The External_EEO_1_Data_Data
     * Meta information extracted from the WSDL
     * - documentation: External EEO-1 Data Record
     * @var \WorkdayWsdl\\StructType\External_EEO_1_Data_RecordType
     */
    public $External_EEO_1_Data_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_EEO_Data_Record_RequestType
     * @uses Put_EEO_Data_Record_RequestType::setDelete()
     * @uses Put_EEO_Data_Record_RequestType::setExternal_EEO_1_Data_Reference()
     * @uses Put_EEO_Data_Record_RequestType::setExternal_EEO_1_Data_Data()
     * @uses Put_EEO_Data_Record_RequestType::setVersion()
     * @param bool $delete
     * @param \WorkdayWsdl\\StructType\External_EEO_1_DataObjectType $external_EEO_1_Data_Reference
     * @param \WorkdayWsdl\\StructType\External_EEO_1_Data_RecordType $external_EEO_1_Data_Data
     * @param string $version
     */
    public function __construct($delete = null, \WorkdayWsdl\\StructType\External_EEO_1_DataObjectType $external_EEO_1_Data_Reference = null, \WorkdayWsdl\\StructType\External_EEO_1_Data_RecordType $external_EEO_1_Data_Data = null, $version = null)
    {
        $this
            ->setDelete($delete)
            ->setExternal_EEO_1_Data_Reference($external_EEO_1_Data_Reference)
            ->setExternal_EEO_1_Data_Data($external_EEO_1_Data_Data)
            ->setVersion($version);
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
     * @return \WorkdayWsdl\\StructType\Put_EEO_Data_Record_RequestType
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
     * Get external_EEO_Data_Reference value
     * @return external_EEO_Data_Reference
     */
    public function getExternal_EEO_1_Data_Reference()
    {
        return $this->{'External_EEO-1_Data_Reference'};
    }
    /**
     * Set external_EEO_Data_Reference value
     * @param external_EEO_Data_Reference $external_EEO_Data_Reference
     * @return \WorkdayWsdl\\StructType\Put_EEO_Data_Record_RequestType
     */
    public function setExternal_EEO_1_Data_Reference(\WorkdayWsdl\\StructType\External_EEO_1_DataObjectType $external_EEO_1_Data_Reference = null)
    {
        $this->External_EEO_1_Data_Reference = $this->{'External_EEO-1_Data_Reference'} = $external_EEO_1_Data_Reference;
        return $this;
    }
    /**
     * Get external_EEO_Data_Data value
     * @return external_EEO_Data_Data
     */
    public function getExternal_EEO_1_Data_Data()
    {
        return $this->{'External_EEO-1_Data_Data'};
    }
    /**
     * Set external_EEO_Data_Data value
     * @param external_EEO_Data_Data $external_EEO_Data_Data
     * @return \WorkdayWsdl\\StructType\Put_EEO_Data_Record_RequestType
     */
    public function setExternal_EEO_1_Data_Data(\WorkdayWsdl\\StructType\External_EEO_1_Data_RecordType $external_EEO_1_Data_Data = null)
    {
        $this->External_EEO_1_Data_Data = $this->{'External_EEO-1_Data_Data'} = $external_EEO_1_Data_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_EEO_Data_Record_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_EEO_Data_Record_RequestType
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
