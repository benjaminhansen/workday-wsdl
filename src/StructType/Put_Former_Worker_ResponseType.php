<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Former_Worker_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element for the response to Put Former Worker. Shows the Former Worker Reference ID created.
 * @subpackage Structs
 */
class Put_Former_Worker_ResponseType extends AbstractStructBase
{
    /**
     * The Former_Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Reference to a Former Worker.Reference ID Type: Former_Worker_ID
     * - minOccurs: 0
     * @var \StructType\Former_WorkerObjectType
     */
    public $Former_Worker_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Former_Worker_ResponseType
     * @uses Put_Former_Worker_ResponseType::setFormer_Worker_Reference()
     * @uses Put_Former_Worker_ResponseType::setVersion()
     * @param \StructType\Former_WorkerObjectType $former_Worker_Reference
     * @param string $version
     */
    public function __construct(\StructType\Former_WorkerObjectType $former_Worker_Reference = null, $version = null)
    {
        $this
            ->setFormer_Worker_Reference($former_Worker_Reference)
            ->setVersion($version);
    }
    /**
     * Get Former_Worker_Reference value
     * @return \StructType\Former_WorkerObjectType|null
     */
    public function getFormer_Worker_Reference()
    {
        return $this->Former_Worker_Reference;
    }
    /**
     * Set Former_Worker_Reference value
     * @param \StructType\Former_WorkerObjectType $former_Worker_Reference
     * @return \StructType\Put_Former_Worker_ResponseType
     */
    public function setFormer_Worker_Reference(\StructType\Former_WorkerObjectType $former_Worker_Reference = null)
    {
        $this->Former_Worker_Reference = $former_Worker_Reference;
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
     * @return \StructType\Put_Former_Worker_ResponseType
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
     * @return \StructType\Put_Former_Worker_ResponseType
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
