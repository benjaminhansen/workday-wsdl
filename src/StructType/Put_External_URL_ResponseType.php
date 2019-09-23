<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_External_URL_ResponseType StructType
 * @subpackage Structs
 */
class Put_External_URL_ResponseType extends AbstractStructBase
{
    /**
     * The External_URL_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_URLObjectType
     */
    public $External_URL_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_External_URL_ResponseType
     * @uses Put_External_URL_ResponseType::setExternal_URL_Reference()
     * @uses Put_External_URL_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference = null, $version = null)
    {
        $this
            ->setExternal_URL_Reference($external_URL_Reference)
            ->setVersion($version);
    }
    /**
     * Get External_URL_Reference value
     * @return \WorkdayWsdl\\StructType\External_URLObjectType|null
     */
    public function getExternal_URL_Reference()
    {
        return $this->External_URL_Reference;
    }
    /**
     * Set External_URL_Reference value
     * @param \WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference
     * @return \WorkdayWsdl\\StructType\Put_External_URL_ResponseType
     */
    public function setExternal_URL_Reference(\WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference = null)
    {
        $this->External_URL_Reference = $external_URL_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_External_URL_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_External_URL_ResponseType
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
