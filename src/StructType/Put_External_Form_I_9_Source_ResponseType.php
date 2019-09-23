<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_External_Form_I-9_Source_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put External Form I-9 Source Response
 * @subpackage Structs
 */
class Put_External_Form_I_9_Source_ResponseType extends AbstractStructBase
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
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_External_Form_I-9_Source_ResponseType
     * @uses Put_External_Form_I_9_Source_ResponseType::setExternal_Form_I_9_Source_Reference()
     * @uses Put_External_Form_I_9_Source_ResponseType::setVersion()
     * @param \StructType\External_Form_I_9_SourceObjectType $external_Form_I_9_Source_Reference
     * @param string $version
     */
    public function __construct(\StructType\External_Form_I_9_SourceObjectType $external_Form_I_9_Source_Reference = null, $version = null)
    {
        $this
            ->setExternal_Form_I_9_Source_Reference($external_Form_I_9_Source_Reference)
            ->setVersion($version);
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
     * @return \StructType\Put_External_Form_I_9_Source_ResponseType
     */
    public function setExternal_Form_I_9_Source_Reference(\StructType\External_Form_I_9_SourceObjectType $external_Form_I_9_Source_Reference = null)
    {
        $this->External_Form_I_9_Source_Reference = $this->{'External_Form_I-9_Source_Reference'} = $external_Form_I_9_Source_Reference;
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
     * @return \StructType\Put_External_Form_I_9_Source_ResponseType
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
     * @return \StructType\Put_External_Form_I_9_Source_ResponseType
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
