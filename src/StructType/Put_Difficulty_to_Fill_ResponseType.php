<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Difficulty_to_Fill_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for difficulty to fill.
 * @subpackage Structs
 */
class Put_Difficulty_to_Fill_ResponseType extends AbstractStructBase
{
    /**
     * The Difficulty_to_Fill_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the difficulty to fill.
     * - minOccurs: 0
     * @var \StructType\Difficulty_to_FillObjectType
     */
    public $Difficulty_to_Fill_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Difficulty_to_Fill_ResponseType
     * @uses Put_Difficulty_to_Fill_ResponseType::setDifficulty_to_Fill_Reference()
     * @uses Put_Difficulty_to_Fill_ResponseType::setVersion()
     * @param \StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference
     * @param string $version
     */
    public function __construct(\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference = null, $version = null)
    {
        $this
            ->setDifficulty_to_Fill_Reference($difficulty_to_Fill_Reference)
            ->setVersion($version);
    }
    /**
     * Get Difficulty_to_Fill_Reference value
     * @return \StructType\Difficulty_to_FillObjectType|null
     */
    public function getDifficulty_to_Fill_Reference()
    {
        return $this->Difficulty_to_Fill_Reference;
    }
    /**
     * Set Difficulty_to_Fill_Reference value
     * @param \StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference
     * @return \StructType\Put_Difficulty_to_Fill_ResponseType
     */
    public function setDifficulty_to_Fill_Reference(\StructType\Difficulty_to_FillObjectType $difficulty_to_Fill_Reference = null)
    {
        $this->Difficulty_to_Fill_Reference = $difficulty_to_Fill_Reference;
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
     * @return \StructType\Put_Difficulty_to_Fill_ResponseType
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
     * @return \StructType\Put_Difficulty_to_Fill_ResponseType
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
