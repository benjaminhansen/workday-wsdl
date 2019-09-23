<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_External_Form_I-9_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response element containing all necessary information to upload an External Form I-9 for a Worker.
 * @subpackage Structs
 */
class Put_External_Form_I_9_ResponseType extends AbstractStructBase
{
    /**
     * The Complete_Form_I_9_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Complete Form I-9 Event Process created from the request.
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Complete_Form_I_9_Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_External_Form_I-9_ResponseType
     * @uses Put_External_Form_I_9_ResponseType::setComplete_Form_I_9_Event_Reference()
     * @uses Put_External_Form_I_9_ResponseType::setVersion()
     * @param \StructType\Unique_IdentifierObjectType $complete_Form_I_9_Event_Reference
     * @param string $version
     */
    public function __construct(\StructType\Unique_IdentifierObjectType $complete_Form_I_9_Event_Reference = null, $version = null)
    {
        $this
            ->setComplete_Form_I_9_Event_Reference($complete_Form_I_9_Event_Reference)
            ->setVersion($version);
    }
    /**
     * Get complete_Form_I_Event_Reference value
     * @return complete_Form_I_Event_Reference
     */
    public function getComplete_Form_I_9_Event_Reference()
    {
        return $this->{'Complete_Form_I-9_Event_Reference'};
    }
    /**
     * Set complete_Form_I_Event_Reference value
     * @param complete_Form_I_Event_Reference $complete_Form_I_Event_Reference
     * @return \StructType\Put_External_Form_I_9_ResponseType
     */
    public function setComplete_Form_I_9_Event_Reference(\StructType\Unique_IdentifierObjectType $complete_Form_I_9_Event_Reference = null)
    {
        $this->Complete_Form_I_9_Event_Reference = $this->{'Complete_Form_I-9_Event_Reference'} = $complete_Form_I_9_Event_Reference;
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
     * @return \StructType\Put_External_Form_I_9_ResponseType
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
     * @return \StructType\Put_External_Form_I_9_ResponseType
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
