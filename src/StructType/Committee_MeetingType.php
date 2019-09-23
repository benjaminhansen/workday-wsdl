<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_MeetingType StructType
 * Meta information extracted from the WSDL
 * - documentation: Committee Meeting Element
 * @subpackage Structs
 */
class Committee_MeetingType extends AbstractStructBase
{
    /**
     * The Committee_Meeting_Reference
     * Meta information extracted from the WSDL
     * - documentation: container for the created committee meeting
     * - minOccurs: 0
     * @var \StructType\Committee_MeetingObjectType
     */
    public $Committee_Meeting_Reference;
    /**
     * The Committee_Meeting_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Committee_Meeting_DataType
     */
    public $Committee_Meeting_Data;
    /**
     * Constructor method for Committee_MeetingType
     * @uses Committee_MeetingType::setCommittee_Meeting_Reference()
     * @uses Committee_MeetingType::setCommittee_Meeting_Data()
     * @param \StructType\Committee_MeetingObjectType $committee_Meeting_Reference
     * @param \StructType\Committee_Meeting_DataType $committee_Meeting_Data
     */
    public function __construct(\StructType\Committee_MeetingObjectType $committee_Meeting_Reference = null, \StructType\Committee_Meeting_DataType $committee_Meeting_Data = null)
    {
        $this
            ->setCommittee_Meeting_Reference($committee_Meeting_Reference)
            ->setCommittee_Meeting_Data($committee_Meeting_Data);
    }
    /**
     * Get Committee_Meeting_Reference value
     * @return \StructType\Committee_MeetingObjectType|null
     */
    public function getCommittee_Meeting_Reference()
    {
        return $this->Committee_Meeting_Reference;
    }
    /**
     * Set Committee_Meeting_Reference value
     * @param \StructType\Committee_MeetingObjectType $committee_Meeting_Reference
     * @return \StructType\Committee_MeetingType
     */
    public function setCommittee_Meeting_Reference(\StructType\Committee_MeetingObjectType $committee_Meeting_Reference = null)
    {
        $this->Committee_Meeting_Reference = $committee_Meeting_Reference;
        return $this;
    }
    /**
     * Get Committee_Meeting_Data value
     * @return \StructType\Committee_Meeting_DataType|null
     */
    public function getCommittee_Meeting_Data()
    {
        return $this->Committee_Meeting_Data;
    }
    /**
     * Set Committee_Meeting_Data value
     * @param \StructType\Committee_Meeting_DataType $committee_Meeting_Data
     * @return \StructType\Committee_MeetingType
     */
    public function setCommittee_Meeting_Data(\StructType\Committee_Meeting_DataType $committee_Meeting_Data = null)
    {
        $this->Committee_Meeting_Data = $committee_Meeting_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Committee_MeetingType
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
