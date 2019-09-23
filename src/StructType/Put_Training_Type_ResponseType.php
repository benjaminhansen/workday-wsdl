<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Training_Type_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for Put Training Type
 * @subpackage Structs
 */
class Put_Training_Type_ResponseType extends AbstractStructBase
{
    /**
     * The Training_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Training Type.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Training_TypeObjectType
     */
    public $Training_Type_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Training_Type_ResponseType
     * @uses Put_Training_Type_ResponseType::setTraining_Type_Reference()
     * @uses Put_Training_Type_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference = null, $version = null)
    {
        $this
            ->setTraining_Type_Reference($training_Type_Reference)
            ->setVersion($version);
    }
    /**
     * Get Training_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Training_TypeObjectType|null
     */
    public function getTraining_Type_Reference()
    {
        return $this->Training_Type_Reference;
    }
    /**
     * Set Training_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference
     * @return \WorkdayWsdl\\StructType\Put_Training_Type_ResponseType
     */
    public function setTraining_Type_Reference(\WorkdayWsdl\\StructType\Training_TypeObjectType $training_Type_Reference = null)
    {
        $this->Training_Type_Reference = $training_Type_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Training_Type_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Training_Type_ResponseType
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
