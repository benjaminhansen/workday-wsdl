<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Universal_Identifier_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Request for Universal Identifiers. It's required to put a Person Reference in either Person Reference. Either place a manual Universal ID or no Universal ID, if no Universal ID is supplied it will use the Universal ID generator.
 * @subpackage Structs
 */
class Put_Universal_Identifier_RequestType extends AbstractStructBase
{
    /**
     * The Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: Person Reference
     * - minOccurs: 0
     * @var \StructType\RoleObjectType
     */
    public $Person_Reference;
    /**
     * The Universal_Identifier_Data
     * @var \StructType\Universal_Identifier_DataType
     */
    public $Universal_Identifier_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only
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
     * Constructor method for Put_Universal_Identifier_RequestType
     * @uses Put_Universal_Identifier_RequestType::setPerson_Reference()
     * @uses Put_Universal_Identifier_RequestType::setUniversal_Identifier_Data()
     * @uses Put_Universal_Identifier_RequestType::setAdd_Only()
     * @uses Put_Universal_Identifier_RequestType::setVersion()
     * @param \StructType\RoleObjectType $person_Reference
     * @param \StructType\Universal_Identifier_DataType $universal_Identifier_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\RoleObjectType $person_Reference = null, \StructType\Universal_Identifier_DataType $universal_Identifier_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setPerson_Reference($person_Reference)
            ->setUniversal_Identifier_Data($universal_Identifier_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Person_Reference value
     * @return \StructType\RoleObjectType|null
     */
    public function getPerson_Reference()
    {
        return $this->Person_Reference;
    }
    /**
     * Set Person_Reference value
     * @param \StructType\RoleObjectType $person_Reference
     * @return \StructType\Put_Universal_Identifier_RequestType
     */
    public function setPerson_Reference(\StructType\RoleObjectType $person_Reference = null)
    {
        $this->Person_Reference = $person_Reference;
        return $this;
    }
    /**
     * Get Universal_Identifier_Data value
     * @return \StructType\Universal_Identifier_DataType|null
     */
    public function getUniversal_Identifier_Data()
    {
        return $this->Universal_Identifier_Data;
    }
    /**
     * Set Universal_Identifier_Data value
     * @param \StructType\Universal_Identifier_DataType $universal_Identifier_Data
     * @return \StructType\Put_Universal_Identifier_RequestType
     */
    public function setUniversal_Identifier_Data(\StructType\Universal_Identifier_DataType $universal_Identifier_Data = null)
    {
        $this->Universal_Identifier_Data = $universal_Identifier_Data;
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
     * @return \StructType\Put_Universal_Identifier_RequestType
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
     * @return \StructType\Put_Universal_Identifier_RequestType
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
     * @return \StructType\Put_Universal_Identifier_RequestType
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
