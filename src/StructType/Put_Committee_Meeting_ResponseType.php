<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Committee_Meeting_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response data for put committee meeting request
 * @subpackage Structs
 */
class Put_Committee_Meeting_ResponseType extends AbstractStructBase
{
    /**
     * The Committee_Meeting_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee meeting reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_MeetingObjectType
     */
    public $Committee_Meeting_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Committee_Meeting_ResponseType
     * @uses Put_Committee_Meeting_ResponseType::setCommittee_Meeting_Reference()
     * @uses Put_Committee_Meeting_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Committee_MeetingObjectType $committee_Meeting_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Committee_MeetingObjectType $committee_Meeting_Reference = null, $version = null)
    {
        $this
            ->setCommittee_Meeting_Reference($committee_Meeting_Reference)
            ->setVersion($version);
    }
    /**
     * Get Committee_Meeting_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_MeetingObjectType|null
     */
    public function getCommittee_Meeting_Reference()
    {
        return $this->Committee_Meeting_Reference;
    }
    /**
     * Set Committee_Meeting_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_MeetingObjectType $committee_Meeting_Reference
     * @return \WorkdayWsdl\\StructType\Put_Committee_Meeting_ResponseType
     */
    public function setCommittee_Meeting_Reference(\WorkdayWsdl\\StructType\Committee_MeetingObjectType $committee_Meeting_Reference = null)
    {
        $this->Committee_Meeting_Reference = $committee_Meeting_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Committee_Meeting_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Committee_Meeting_ResponseType
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
