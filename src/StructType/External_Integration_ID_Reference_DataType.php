<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Integration_ID_Reference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Integration ID reference is used as a unique identifier for integratable objects in the Workday system.
 * @subpackage Structs
 */
class External_Integration_ID_Reference_DataType extends AbstractStructBase
{
    /**
     * The ID
     * @var \StructType\IDType
     */
    public $ID;
    /**
     * The Descriptor
     * Meta information extracted from the WSDL
     * - documentation: Display name inside the Workday system.
     * @var string
     */
    public $Descriptor;
    /**
     * Constructor method for External_Integration_ID_Reference_DataType
     * @uses External_Integration_ID_Reference_DataType::setID()
     * @uses External_Integration_ID_Reference_DataType::setDescriptor()
     * @param \StructType\IDType $iD
     * @param string $descriptor
     */
    public function __construct(\StructType\IDType $iD = null, $descriptor = null)
    {
        $this
            ->setID($iD)
            ->setDescriptor($descriptor);
    }
    /**
     * Get ID value
     * @return \StructType\IDType|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param \StructType\IDType $iD
     * @return \StructType\External_Integration_ID_Reference_DataType
     */
    public function setID(\StructType\IDType $iD = null)
    {
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Descriptor value
     * @return string|null
     */
    public function getDescriptor()
    {
        return $this->Descriptor;
    }
    /**
     * Set Descriptor value
     * @param string $descriptor
     * @return \StructType\External_Integration_ID_Reference_DataType
     */
    public function setDescriptor($descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($descriptor) && !is_string($descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptor, true), gettype($descriptor)), __LINE__);
        }
        $this->Descriptor = $descriptor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\External_Integration_ID_Reference_DataType
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
