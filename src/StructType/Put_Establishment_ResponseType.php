<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Establishment_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Establishment Response
 * @subpackage Structs
 */
class Put_Establishment_ResponseType extends AbstractStructBase
{
    /**
     * The Establishment_Reference
     * Meta information extracted from the WSDL
     * - documentation: Establishment Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\EstablishmentObjectType
     */
    public $Establishment_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Establishment_ResponseType
     * @uses Put_Establishment_ResponseType::setEstablishment_Reference()
     * @uses Put_Establishment_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference = null, $version = null)
    {
        $this
            ->setEstablishment_Reference($establishment_Reference)
            ->setVersion($version);
    }
    /**
     * Get Establishment_Reference value
     * @return \WorkdayWsdl\\StructType\EstablishmentObjectType|null
     */
    public function getEstablishment_Reference()
    {
        return $this->Establishment_Reference;
    }
    /**
     * Set Establishment_Reference value
     * @param \WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference
     * @return \WorkdayWsdl\\StructType\Put_Establishment_ResponseType
     */
    public function setEstablishment_Reference(\WorkdayWsdl\\StructType\EstablishmentObjectType $establishment_Reference = null)
    {
        $this->Establishment_Reference = $establishment_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Establishment_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Establishment_ResponseType
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
