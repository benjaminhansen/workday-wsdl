<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Import_Process_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Import Process Response element
 * @subpackage Structs
 */
class Put_Import_Process_ResponseType extends AbstractStructBase
{
    /**
     * The Import_Process_Reference
     * Meta information extracted from the WSDL
     * - documentation: Web Service Background Process Runtime element
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Web_Service_Background_Process_RuntimeObjectType
     */
    public $Import_Process_Reference;
    /**
     * The Header_Instance_Reference
     * Meta information extracted from the WSDL
     * - documentation: Header Instance element
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\InstanceObjectType
     */
    public $Header_Instance_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Import_Process_ResponseType
     * @uses Put_Import_Process_ResponseType::setImport_Process_Reference()
     * @uses Put_Import_Process_ResponseType::setHeader_Instance_Reference()
     * @uses Put_Import_Process_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Web_Service_Background_Process_RuntimeObjectType $import_Process_Reference
     * @param \WorkdayWsdl\\StructType\InstanceObjectType $header_Instance_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Web_Service_Background_Process_RuntimeObjectType $import_Process_Reference = null, \WorkdayWsdl\\StructType\InstanceObjectType $header_Instance_Reference = null, $version = null)
    {
        $this
            ->setImport_Process_Reference($import_Process_Reference)
            ->setHeader_Instance_Reference($header_Instance_Reference)
            ->setVersion($version);
    }
    /**
     * Get Import_Process_Reference value
     * @return \WorkdayWsdl\\StructType\Web_Service_Background_Process_RuntimeObjectType|null
     */
    public function getImport_Process_Reference()
    {
        return $this->Import_Process_Reference;
    }
    /**
     * Set Import_Process_Reference value
     * @param \WorkdayWsdl\\StructType\Web_Service_Background_Process_RuntimeObjectType $import_Process_Reference
     * @return \WorkdayWsdl\\StructType\Put_Import_Process_ResponseType
     */
    public function setImport_Process_Reference(\WorkdayWsdl\\StructType\Web_Service_Background_Process_RuntimeObjectType $import_Process_Reference = null)
    {
        $this->Import_Process_Reference = $import_Process_Reference;
        return $this;
    }
    /**
     * Get Header_Instance_Reference value
     * @return \WorkdayWsdl\\StructType\InstanceObjectType|null
     */
    public function getHeader_Instance_Reference()
    {
        return $this->Header_Instance_Reference;
    }
    /**
     * Set Header_Instance_Reference value
     * @param \WorkdayWsdl\\StructType\InstanceObjectType $header_Instance_Reference
     * @return \WorkdayWsdl\\StructType\Put_Import_Process_ResponseType
     */
    public function setHeader_Instance_Reference(\WorkdayWsdl\\StructType\InstanceObjectType $header_Instance_Reference = null)
    {
        $this->Header_Instance_Reference = $header_Instance_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Import_Process_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Import_Process_ResponseType
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
