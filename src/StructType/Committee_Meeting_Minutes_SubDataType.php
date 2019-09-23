<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Meeting_Minutes_SubDataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data element for everything about Minutes
 * @subpackage Structs
 */
class Committee_Meeting_Minutes_SubDataType extends AbstractStructBase
{
    /**
     * The Minutes_Reference
     * Meta information extracted from the WSDL
     * - documentation: Minutes Reference for Committee Meeting or Agenda Item based on context
     * - minOccurs: 0
     * @var \StructType\Committee_Meeting_MinutesObjectType
     */
    public $Minutes_Reference;
    /**
     * The Details
     * Meta information extracted from the WSDL
     * - documentation: Minutes Details
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Details;
    /**
     * The Committee_Meeting_Minutes_ID
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for Committee Meeting Minutes
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Committee_Meeting_Minutes_ID;
    /**
     * Constructor method for Committee_Meeting_Minutes_SubDataType
     * @uses Committee_Meeting_Minutes_SubDataType::setMinutes_Reference()
     * @uses Committee_Meeting_Minutes_SubDataType::setDetails()
     * @uses Committee_Meeting_Minutes_SubDataType::setCommittee_Meeting_Minutes_ID()
     * @param \StructType\Committee_Meeting_MinutesObjectType $minutes_Reference
     * @param string $details
     * @param string $committee_Meeting_Minutes_ID
     */
    public function __construct(\StructType\Committee_Meeting_MinutesObjectType $minutes_Reference = null, $details = null, $committee_Meeting_Minutes_ID = null)
    {
        $this
            ->setMinutes_Reference($minutes_Reference)
            ->setDetails($details)
            ->setCommittee_Meeting_Minutes_ID($committee_Meeting_Minutes_ID);
    }
    /**
     * Get Minutes_Reference value
     * @return \StructType\Committee_Meeting_MinutesObjectType|null
     */
    public function getMinutes_Reference()
    {
        return $this->Minutes_Reference;
    }
    /**
     * Set Minutes_Reference value
     * @param \StructType\Committee_Meeting_MinutesObjectType $minutes_Reference
     * @return \StructType\Committee_Meeting_Minutes_SubDataType
     */
    public function setMinutes_Reference(\StructType\Committee_Meeting_MinutesObjectType $minutes_Reference = null)
    {
        $this->Minutes_Reference = $minutes_Reference;
        return $this;
    }
    /**
     * Get Details value
     * @return string|null
     */
    public function getDetails()
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @param string $details
     * @return \StructType\Committee_Meeting_Minutes_SubDataType
     */
    public function setDetails($details = null)
    {
        // validation for constraint: string
        if (!is_null($details) && !is_string($details)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($details, true), gettype($details)), __LINE__);
        }
        $this->Details = $details;
        return $this;
    }
    /**
     * Get Committee_Meeting_Minutes_ID value
     * @return string|null
     */
    public function getCommittee_Meeting_Minutes_ID()
    {
        return $this->Committee_Meeting_Minutes_ID;
    }
    /**
     * Set Committee_Meeting_Minutes_ID value
     * @param string $committee_Meeting_Minutes_ID
     * @return \StructType\Committee_Meeting_Minutes_SubDataType
     */
    public function setCommittee_Meeting_Minutes_ID($committee_Meeting_Minutes_ID = null)
    {
        // validation for constraint: string
        if (!is_null($committee_Meeting_Minutes_ID) && !is_string($committee_Meeting_Minutes_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($committee_Meeting_Minutes_ID, true), gettype($committee_Meeting_Minutes_ID)), __LINE__);
        }
        $this->Committee_Meeting_Minutes_ID = $committee_Meeting_Minutes_ID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Committee_Meeting_Minutes_SubDataType
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
