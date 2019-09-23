<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Pronoun_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The request to edit pronoun data for a worker.
 * @subpackage Structs
 */
class Put_Pronoun_RequestType extends AbstractStructBase
{
    /**
     * The Pronoun_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Pronoun of the person.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\PronounObjectType
     */
    public $Pronoun_Reference;
    /**
     * The Pronoun_Data
     * @var \WorkdayWsdl\\StructType\Pronoun_DataType
     */
    public $Pronoun_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only flag
     * @var bool
     */
    public $Add_Only;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Pronoun_RequestType
     * @uses Put_Pronoun_RequestType::setPronoun_Reference()
     * @uses Put_Pronoun_RequestType::setPronoun_Data()
     * @uses Put_Pronoun_RequestType::setAdd_Only()
     * @uses Put_Pronoun_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\PronounObjectType $pronoun_Reference
     * @param \WorkdayWsdl\\StructType\Pronoun_DataType $pronoun_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\PronounObjectType $pronoun_Reference = null, \WorkdayWsdl\\StructType\Pronoun_DataType $pronoun_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setPronoun_Reference($pronoun_Reference)
            ->setPronoun_Data($pronoun_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Pronoun_Reference value
     * @return \WorkdayWsdl\\StructType\PronounObjectType|null
     */
    public function getPronoun_Reference()
    {
        return $this->Pronoun_Reference;
    }
    /**
     * Set Pronoun_Reference value
     * @param \WorkdayWsdl\\StructType\PronounObjectType $pronoun_Reference
     * @return \WorkdayWsdl\\StructType\Put_Pronoun_RequestType
     */
    public function setPronoun_Reference(\WorkdayWsdl\\StructType\PronounObjectType $pronoun_Reference = null)
    {
        $this->Pronoun_Reference = $pronoun_Reference;
        return $this;
    }
    /**
     * Get Pronoun_Data value
     * @return \WorkdayWsdl\\StructType\Pronoun_DataType|null
     */
    public function getPronoun_Data()
    {
        return $this->Pronoun_Data;
    }
    /**
     * Set Pronoun_Data value
     * @param \WorkdayWsdl\\StructType\Pronoun_DataType $pronoun_Data
     * @return \WorkdayWsdl\\StructType\Put_Pronoun_RequestType
     */
    public function setPronoun_Data(\WorkdayWsdl\\StructType\Pronoun_DataType $pronoun_Data = null)
    {
        $this->Pronoun_Data = $pronoun_Data;
        return $this;
    }
    /**
     * Get Add_Only value
     * @return bool|null
     */
    public function getAdd_Only()
    {
        return $this->Add_Only;
    }
    /**
     * Set Add_Only value
     * @param bool $add_Only
     * @return \WorkdayWsdl\\StructType\Put_Pronoun_RequestType
     */
    public function setAdd_Only($add_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($add_Only) && !is_bool($add_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_Only, true), gettype($add_Only)), __LINE__);
        }
        $this->Add_Only = $add_Only;
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
     * @return \WorkdayWsdl\\StructType\Put_Pronoun_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Pronoun_RequestType
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
