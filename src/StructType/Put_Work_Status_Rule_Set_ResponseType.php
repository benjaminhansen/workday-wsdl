<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Work_Status_Rule_Set_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Work Status Rule Set Response from Put Request
 * @subpackage Structs
 */
class Put_Work_Status_Rule_Set_ResponseType extends AbstractStructBase
{
    /**
     * The Work_Status_Rule_Set_Reference
     * Meta information extracted from the WSDL
     * - documentation: Created/Edited Work Status Rule Set
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType
     */
    public $Work_Status_Rule_Set_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Work_Status_Rule_Set_ResponseType
     * @uses Put_Work_Status_Rule_Set_ResponseType::setWork_Status_Rule_Set_Reference()
     * @uses Put_Work_Status_Rule_Set_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType $work_Status_Rule_Set_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType $work_Status_Rule_Set_Reference = null, $version = null)
    {
        $this
            ->setWork_Status_Rule_Set_Reference($work_Status_Rule_Set_Reference)
            ->setVersion($version);
    }
    /**
     * Get Work_Status_Rule_Set_Reference value
     * @return \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType|null
     */
    public function getWork_Status_Rule_Set_Reference()
    {
        return $this->Work_Status_Rule_Set_Reference;
    }
    /**
     * Set Work_Status_Rule_Set_Reference value
     * @param \WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType $work_Status_Rule_Set_Reference
     * @return \WorkdayWsdl\\StructType\Put_Work_Status_Rule_Set_ResponseType
     */
    public function setWork_Status_Rule_Set_Reference(\WorkdayWsdl\\StructType\Work_Status_Rule_SetObjectType $work_Status_Rule_Set_Reference = null)
    {
        $this->Work_Status_Rule_Set_Reference = $work_Status_Rule_Set_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Work_Status_Rule_Set_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Work_Status_Rule_Set_ResponseType
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
