<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Work_Schedule_Calendar_Group_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Work Schedule Calendar Group response.
 * @subpackage Structs
 */
class Put_Work_Schedule_Calendar_Group_ResponseType extends AbstractStructBase
{
    /**
     * The Work_Schedule_Calendar_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Work Schedule Calendar Group.
     * - minOccurs: 0
     * @var \StructType\Work_Schedule_Calendar_GroupObjectType
     */
    public $Work_Schedule_Calendar_Group_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Work_Schedule_Calendar_Group_ResponseType
     * @uses Put_Work_Schedule_Calendar_Group_ResponseType::setWork_Schedule_Calendar_Group_Reference()
     * @uses Put_Work_Schedule_Calendar_Group_ResponseType::setVersion()
     * @param \StructType\Work_Schedule_Calendar_GroupObjectType $work_Schedule_Calendar_Group_Reference
     * @param string $version
     */
    public function __construct(\StructType\Work_Schedule_Calendar_GroupObjectType $work_Schedule_Calendar_Group_Reference = null, $version = null)
    {
        $this
            ->setWork_Schedule_Calendar_Group_Reference($work_Schedule_Calendar_Group_Reference)
            ->setVersion($version);
    }
    /**
     * Get Work_Schedule_Calendar_Group_Reference value
     * @return \StructType\Work_Schedule_Calendar_GroupObjectType|null
     */
    public function getWork_Schedule_Calendar_Group_Reference()
    {
        return $this->Work_Schedule_Calendar_Group_Reference;
    }
    /**
     * Set Work_Schedule_Calendar_Group_Reference value
     * @param \StructType\Work_Schedule_Calendar_GroupObjectType $work_Schedule_Calendar_Group_Reference
     * @return \StructType\Put_Work_Schedule_Calendar_Group_ResponseType
     */
    public function setWork_Schedule_Calendar_Group_Reference(\StructType\Work_Schedule_Calendar_GroupObjectType $work_Schedule_Calendar_Group_Reference = null)
    {
        $this->Work_Schedule_Calendar_Group_Reference = $work_Schedule_Calendar_Group_Reference;
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
     * @return \StructType\Put_Work_Schedule_Calendar_Group_ResponseType
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
     * @return \StructType\Put_Work_Schedule_Calendar_Group_ResponseType
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
