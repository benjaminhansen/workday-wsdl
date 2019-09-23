<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Pronoun_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response to the pronoun put request.
 * @subpackage Structs
 */
class Put_Pronoun_ResponseType extends AbstractStructBase
{
    /**
     * The Pronoun_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Pronoun of the person.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\PronounObjectType
     */
    public $Pronoun_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Pronoun_ResponseType
     * @uses Put_Pronoun_ResponseType::setPronoun_Reference()
     * @uses Put_Pronoun_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\PronounObjectType $pronoun_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\PronounObjectType $pronoun_Reference = null, $version = null)
    {
        $this
            ->setPronoun_Reference($pronoun_Reference)
            ->setVersion($version);
    }
    /**
     * Get Pronoun_Reference value
     * @return \WorkdayWsdl\\StructType\PronounObjectType|null
     */
    public function getPronoun_Reference()
    {
        return $this->Pronoun_Reference;
    }
    /**
     * Set Pronoun_Reference value
     * @param \WorkdayWsdl\\StructType\PronounObjectType $pronoun_Reference
     * @return \WorkdayWsdl\\StructType\Put_Pronoun_ResponseType
     */
    public function setPronoun_Reference(\WorkdayWsdl\\StructType\PronounObjectType $pronoun_Reference = null)
    {
        $this->Pronoun_Reference = $pronoun_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Pronoun_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Pronoun_ResponseType
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
