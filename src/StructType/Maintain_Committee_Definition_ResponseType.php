<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Maintain_Committee_Definition_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Maintain Committee Definition Response
 * @subpackage Structs
 */
class Maintain_Committee_Definition_ResponseType extends AbstractStructBase
{
    /**
     * The Committee_Definition_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Definition Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CommitteeObjectType
     */
    public $Committee_Definition_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Maintain_Committee_Definition_ResponseType
     * @uses Maintain_Committee_Definition_ResponseType::setCommittee_Definition_Reference()
     * @uses Maintain_Committee_Definition_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\CommitteeObjectType $committee_Definition_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\CommitteeObjectType $committee_Definition_Reference = null, $version = null)
    {
        $this
            ->setCommittee_Definition_Reference($committee_Definition_Reference)
            ->setVersion($version);
    }
    /**
     * Get Committee_Definition_Reference value
     * @return \WorkdayWsdl\\StructType\CommitteeObjectType|null
     */
    public function getCommittee_Definition_Reference()
    {
        return $this->Committee_Definition_Reference;
    }
    /**
     * Set Committee_Definition_Reference value
     * @param \WorkdayWsdl\\StructType\CommitteeObjectType $committee_Definition_Reference
     * @return \WorkdayWsdl\\StructType\Maintain_Committee_Definition_ResponseType
     */
    public function setCommittee_Definition_Reference(\WorkdayWsdl\\StructType\CommitteeObjectType $committee_Definition_Reference = null)
    {
        $this->Committee_Definition_Reference = $committee_Definition_Reference;
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
     * @return \WorkdayWsdl\\StructType\Maintain_Committee_Definition_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Maintain_Committee_Definition_ResponseType
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
