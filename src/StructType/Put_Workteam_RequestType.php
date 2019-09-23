<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Workteam_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Workteam reference for update and all Workteam data items.
 * @subpackage Structs
 */
class Put_Workteam_RequestType extends AbstractStructBase
{
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Add_Only;
    /**
     * The Workteam_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Instance ID or Reference ID.
     * - minOccurs: 0
     * @var \StructType\WorkteamObjectType
     */
    public $Workteam_Reference;
    /**
     * The Workteam_Data
     * Meta information extracted from the WSDL
     * - documentation: Workteam Data
     * @var \StructType\Workteam_DataType
     */
    public $Workteam_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Workteam_RequestType
     * @uses Put_Workteam_RequestType::setAdd_Only()
     * @uses Put_Workteam_RequestType::setWorkteam_Reference()
     * @uses Put_Workteam_RequestType::setWorkteam_Data()
     * @uses Put_Workteam_RequestType::setVersion()
     * @param bool $add_Only
     * @param \StructType\WorkteamObjectType $workteam_Reference
     * @param \StructType\Workteam_DataType $workteam_Data
     * @param string $version
     */
    public function __construct($add_Only = null, \StructType\WorkteamObjectType $workteam_Reference = null, \StructType\Workteam_DataType $workteam_Data = null, $version = null)
    {
        $this
            ->setAdd_Only($add_Only)
            ->setWorkteam_Reference($workteam_Reference)
            ->setWorkteam_Data($workteam_Data)
            ->setVersion($version);
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
     * @return \StructType\Put_Workteam_RequestType
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
     * Get Workteam_Reference value
     * @return \StructType\WorkteamObjectType|null
     */
    public function getWorkteam_Reference()
    {
        return $this->Workteam_Reference;
    }
    /**
     * Set Workteam_Reference value
     * @param \StructType\WorkteamObjectType $workteam_Reference
     * @return \StructType\Put_Workteam_RequestType
     */
    public function setWorkteam_Reference(\StructType\WorkteamObjectType $workteam_Reference = null)
    {
        $this->Workteam_Reference = $workteam_Reference;
        return $this;
    }
    /**
     * Get Workteam_Data value
     * @return \StructType\Workteam_DataType|null
     */
    public function getWorkteam_Data()
    {
        return $this->Workteam_Data;
    }
    /**
     * Set Workteam_Data value
     * @param \StructType\Workteam_DataType $workteam_Data
     * @return \StructType\Put_Workteam_RequestType
     */
    public function setWorkteam_Data(\StructType\Workteam_DataType $workteam_Data = null)
    {
        $this->Workteam_Data = $workteam_Data;
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
     * @return \StructType\Put_Workteam_RequestType
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
     * @return \StructType\Put_Workteam_RequestType
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
