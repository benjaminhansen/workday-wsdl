<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Political_Affiliation_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for the Put Political Affiliation operation.
 * @subpackage Structs
 */
class Put_Political_Affiliation_ResponseType extends AbstractStructBase
{
    /**
     * The Political_Affiliation_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Political Affiliation.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Political_AffiliationObjectType
     */
    public $Political_Affiliation_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Political_Affiliation_ResponseType
     * @uses Put_Political_Affiliation_ResponseType::setPolitical_Affiliation_Reference()
     * @uses Put_Political_Affiliation_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Political_AffiliationObjectType $political_Affiliation_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Political_AffiliationObjectType $political_Affiliation_Reference = null, $version = null)
    {
        $this
            ->setPolitical_Affiliation_Reference($political_Affiliation_Reference)
            ->setVersion($version);
    }
    /**
     * Get Political_Affiliation_Reference value
     * @return \WorkdayWsdl\\StructType\Political_AffiliationObjectType|null
     */
    public function getPolitical_Affiliation_Reference()
    {
        return $this->Political_Affiliation_Reference;
    }
    /**
     * Set Political_Affiliation_Reference value
     * @param \WorkdayWsdl\\StructType\Political_AffiliationObjectType $political_Affiliation_Reference
     * @return \WorkdayWsdl\\StructType\Put_Political_Affiliation_ResponseType
     */
    public function setPolitical_Affiliation_Reference(\WorkdayWsdl\\StructType\Political_AffiliationObjectType $political_Affiliation_Reference = null)
    {
        $this->Political_Affiliation_Reference = $political_Affiliation_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Political_Affiliation_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Political_Affiliation_ResponseType
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
