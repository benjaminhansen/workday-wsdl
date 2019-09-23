<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Put_External_Disability_Self_Identification_Record_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for the Put External Disability Self-Identification Record operation.
 * @subpackage Structs
 */
class Put_External_Disability_Self_Identification_Record_ResponseType extends AbstractStructBase
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
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for
     * Put_External_Disability_Self_Identification_Record_ResponseType
     * @uses Put_External_Disability_Self_Identification_Record_ResponseType::setExternal_Disability_Self_Identification_Record_Reference()
     * @uses Put_External_Disability_Self_Identification_Record_ResponseType::setVersion()
     * @param \StructType\External_Disability_Self_Identification_RecordObjectType $external_Disability_Self_Identification_Record_Reference
     * @param string $version
     */
    public function __construct(\StructType\External_Disability_Self_Identification_RecordObjectType $external_Disability_Self_Identification_Record_Reference = null, $version = null)
    {
        $this
            ->setExternal_Disability_Self_Identification_Record_Reference($external_Disability_Self_Identification_Record_Reference)
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
     * @return \StructType\Put_External_Disability_Self_Identification_Record_ResponseType
     */
    public function setExternal_Disability_Self_Identification_Record_Reference(\StructType\External_Disability_Self_Identification_RecordObjectType $external_Disability_Self_Identification_Record_Reference = null)
    {
        $this->External_Disability_Self_Identification_Record_Reference = $external_Disability_Self_Identification_Record_Reference;
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
     * @return \StructType\Put_External_Disability_Self_Identification_Record_ResponseType
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
     * @return \StructType\Put_External_Disability_Self_Identification_Record_ResponseType
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
