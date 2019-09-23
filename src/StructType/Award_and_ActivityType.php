<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Award_and_ActivityType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Award and Activity information.
 * @subpackage Structs
 */
class Award_and_ActivityType extends AbstractStructBase
{
    /**
     * The Award_and_Activity_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Award and Activity Profile.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\AwardObjectType
     */
    public $Award_and_Activity_Reference;
    /**
     * The Award_and_Activity_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for Award and Activity information.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType
     */
    public $Award_and_Activity_Data;
    /**
     * Constructor method for Award_and_ActivityType
     * @uses Award_and_ActivityType::setAward_and_Activity_Reference()
     * @uses Award_and_ActivityType::setAward_and_Activity_Data()
     * @param \WorkdayWsdl\\StructType\AwardObjectType $award_and_Activity_Reference
     * @param \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType $award_and_Activity_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\AwardObjectType $award_and_Activity_Reference = null, \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType $award_and_Activity_Data = null)
    {
        $this
            ->setAward_and_Activity_Reference($award_and_Activity_Reference)
            ->setAward_and_Activity_Data($award_and_Activity_Data);
    }
    /**
     * Get Award_and_Activity_Reference value
     * @return \WorkdayWsdl\\StructType\AwardObjectType|null
     */
    public function getAward_and_Activity_Reference()
    {
        return $this->Award_and_Activity_Reference;
    }
    /**
     * Set Award_and_Activity_Reference value
     * @param \WorkdayWsdl\\StructType\AwardObjectType $award_and_Activity_Reference
     * @return \WorkdayWsdl\\StructType\Award_and_ActivityType
     */
    public function setAward_and_Activity_Reference(\WorkdayWsdl\\StructType\AwardObjectType $award_and_Activity_Reference = null)
    {
        $this->Award_and_Activity_Reference = $award_and_Activity_Reference;
        return $this;
    }
    /**
     * Get Award_and_Activity_Data value
     * @return \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType|null
     */
    public function getAward_and_Activity_Data()
    {
        return $this->Award_and_Activity_Data;
    }
    /**
     * Set Award_and_Activity_Data value
     * @param \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType $award_and_Activity_Data
     * @return \WorkdayWsdl\\StructType\Award_and_ActivityType
     */
    public function setAward_and_Activity_Data(\WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType $award_and_Activity_Data = null)
    {
        $this->Award_and_Activity_Data = $award_and_Activity_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Award_and_ActivityType
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
