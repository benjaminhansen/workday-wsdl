<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Licenses_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for the change licenses web service.
 * @subpackage Structs
 */
class Change_Licenses_ResponseType extends AbstractStructBase
{
    /**
     * The License_Identifier_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: Event ID of the License Identifier Event.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $License_Identifier_Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Change_Licenses_ResponseType
     * @uses Change_Licenses_ResponseType::setLicense_Identifier_Event_Reference()
     * @uses Change_Licenses_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $license_Identifier_Event_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $license_Identifier_Event_Reference = null, $version = null)
    {
        $this
            ->setLicense_Identifier_Event_Reference($license_Identifier_Event_Reference)
            ->setVersion($version);
    }
    /**
     * Get License_Identifier_Event_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getLicense_Identifier_Event_Reference()
    {
        return $this->License_Identifier_Event_Reference;
    }
    /**
     * Set License_Identifier_Event_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $license_Identifier_Event_Reference
     * @return \WorkdayWsdl\\StructType\Change_Licenses_ResponseType
     */
    public function setLicense_Identifier_Event_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $license_Identifier_Event_Reference = null)
    {
        $this->License_Identifier_Event_Reference = $license_Identifier_Event_Reference;
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
     * @return \WorkdayWsdl\\StructType\Change_Licenses_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Change_Licenses_ResponseType
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
