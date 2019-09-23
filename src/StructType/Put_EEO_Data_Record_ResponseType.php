<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_EEO_Data_Record_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put EEO Data Record Response
 * @subpackage Structs
 */
class Put_EEO_Data_Record_ResponseType extends AbstractStructBase
{
    /**
     * The External_EEO_1_Data_Reference
     * Meta information extracted from the WSDL
     * - documentation: External EEO-1 Data
     * - minOccurs: 0
     * @var \StructType\External_EEO_1_DataObjectType
     */
    public $External_EEO_1_Data_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_EEO_Data_Record_ResponseType
     * @uses Put_EEO_Data_Record_ResponseType::setExternal_EEO_1_Data_Reference()
     * @uses Put_EEO_Data_Record_ResponseType::setVersion()
     * @param \StructType\External_EEO_1_DataObjectType $external_EEO_1_Data_Reference
     * @param string $version
     */
    public function __construct(\StructType\External_EEO_1_DataObjectType $external_EEO_1_Data_Reference = null, $version = null)
    {
        $this
            ->setExternal_EEO_1_Data_Reference($external_EEO_1_Data_Reference)
            ->setVersion($version);
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
     * @return \StructType\Put_EEO_Data_Record_ResponseType
     */
    public function setExternal_EEO_1_Data_Reference(\StructType\External_EEO_1_DataObjectType $external_EEO_1_Data_Reference = null)
    {
        $this->External_EEO_1_Data_Reference = $this->{'External_EEO-1_Data_Reference'} = $external_EEO_1_Data_Reference;
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
     * @return \StructType\Put_EEO_Data_Record_ResponseType
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
     * @return \StructType\Put_EEO_Data_Record_ResponseType
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
