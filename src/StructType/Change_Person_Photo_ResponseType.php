<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Person_Photo_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Submit Person Photo Response information.
 * @subpackage Structs
 */
class Change_Person_Photo_ResponseType extends AbstractStructBase
{
    /**
     * The Photo_Change_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Photo Change Event created by the corresponding request.
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Photo_Change_Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Change_Person_Photo_ResponseType
     * @uses Change_Person_Photo_ResponseType::setPhoto_Change_Event_Reference()
     * @uses Change_Person_Photo_ResponseType::setVersion()
     * @param \StructType\Unique_IdentifierObjectType $photo_Change_Event_Reference
     * @param string $version
     */
    public function __construct(\StructType\Unique_IdentifierObjectType $photo_Change_Event_Reference = null, $version = null)
    {
        $this
            ->setPhoto_Change_Event_Reference($photo_Change_Event_Reference)
            ->setVersion($version);
    }
    /**
     * Get Photo_Change_Event_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getPhoto_Change_Event_Reference()
    {
        return $this->Photo_Change_Event_Reference;
    }
    /**
     * Set Photo_Change_Event_Reference value
     * @param \StructType\Unique_IdentifierObjectType $photo_Change_Event_Reference
     * @return \StructType\Change_Person_Photo_ResponseType
     */
    public function setPhoto_Change_Event_Reference(\StructType\Unique_IdentifierObjectType $photo_Change_Event_Reference = null)
    {
        $this->Photo_Change_Event_Reference = $photo_Change_Event_Reference;
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
     * @return \StructType\Change_Person_Photo_ResponseType
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
     * @return \StructType\Change_Person_Photo_ResponseType
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
