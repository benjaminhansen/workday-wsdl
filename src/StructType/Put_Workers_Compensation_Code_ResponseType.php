<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Workers_Compensation_Code_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Put Workers' Compensation Code Response Data
 * @subpackage Structs
 */
class Put_Workers_Compensation_Code_ResponseType extends AbstractStructBase
{
    /**
     * The Workers_Compensation_Code_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Workers' Compensation Code
     * - minOccurs: 0
     * @var \StructType\Workers_Compensation_CodeObjectType
     */
    public $Workers_Compensation_Code_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Workers_Compensation_Code_ResponseType
     * @uses Put_Workers_Compensation_Code_ResponseType::setWorkers_Compensation_Code_Reference()
     * @uses Put_Workers_Compensation_Code_ResponseType::setVersion()
     * @param \StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference
     * @param string $version
     */
    public function __construct(\StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference = null, $version = null)
    {
        $this
            ->setWorkers_Compensation_Code_Reference($workers_Compensation_Code_Reference)
            ->setVersion($version);
    }
    /**
     * Get Workers_Compensation_Code_Reference value
     * @return \StructType\Workers_Compensation_CodeObjectType|null
     */
    public function getWorkers_Compensation_Code_Reference()
    {
        return $this->Workers_Compensation_Code_Reference;
    }
    /**
     * Set Workers_Compensation_Code_Reference value
     * @param \StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference
     * @return \StructType\Put_Workers_Compensation_Code_ResponseType
     */
    public function setWorkers_Compensation_Code_Reference(\StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference = null)
    {
        $this->Workers_Compensation_Code_Reference = $workers_Compensation_Code_Reference;
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
     * @return \StructType\Put_Workers_Compensation_Code_ResponseType
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
     * @return \StructType\Put_Workers_Compensation_Code_ResponseType
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
