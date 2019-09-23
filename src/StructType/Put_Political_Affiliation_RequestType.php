<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Political_Affiliation_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element for Put Political Affiliation
 * @subpackage Structs
 */
class Put_Political_Affiliation_RequestType extends AbstractStructBase
{
    /**
     * The Political_Affiliation_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Political Affiliation.
     * - minOccurs: 0
     * @var \StructType\Political_AffiliationObjectType
     */
    public $Political_Affiliation_Reference;
    /**
     * The Political_Affiliation_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Political Affiliation data.
     * @var \StructType\Political_Affiliation_DataType
     */
    public $Political_Affiliation_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only Flag. Indicates that the service is an add only, not an update.
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
     * Constructor method for Put_Political_Affiliation_RequestType
     * @uses Put_Political_Affiliation_RequestType::setPolitical_Affiliation_Reference()
     * @uses Put_Political_Affiliation_RequestType::setPolitical_Affiliation_Data()
     * @uses Put_Political_Affiliation_RequestType::setAdd_Only()
     * @uses Put_Political_Affiliation_RequestType::setVersion()
     * @param \StructType\Political_AffiliationObjectType $political_Affiliation_Reference
     * @param \StructType\Political_Affiliation_DataType $political_Affiliation_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\Political_AffiliationObjectType $political_Affiliation_Reference = null, \StructType\Political_Affiliation_DataType $political_Affiliation_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setPolitical_Affiliation_Reference($political_Affiliation_Reference)
            ->setPolitical_Affiliation_Data($political_Affiliation_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Political_Affiliation_Reference value
     * @return \StructType\Political_AffiliationObjectType|null
     */
    public function getPolitical_Affiliation_Reference()
    {
        return $this->Political_Affiliation_Reference;
    }
    /**
     * Set Political_Affiliation_Reference value
     * @param \StructType\Political_AffiliationObjectType $political_Affiliation_Reference
     * @return \StructType\Put_Political_Affiliation_RequestType
     */
    public function setPolitical_Affiliation_Reference(\StructType\Political_AffiliationObjectType $political_Affiliation_Reference = null)
    {
        $this->Political_Affiliation_Reference = $political_Affiliation_Reference;
        return $this;
    }
    /**
     * Get Political_Affiliation_Data value
     * @return \StructType\Political_Affiliation_DataType|null
     */
    public function getPolitical_Affiliation_Data()
    {
        return $this->Political_Affiliation_Data;
    }
    /**
     * Set Political_Affiliation_Data value
     * @param \StructType\Political_Affiliation_DataType $political_Affiliation_Data
     * @return \StructType\Put_Political_Affiliation_RequestType
     */
    public function setPolitical_Affiliation_Data(\StructType\Political_Affiliation_DataType $political_Affiliation_Data = null)
    {
        $this->Political_Affiliation_Data = $political_Affiliation_Data;
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
     * @return \StructType\Put_Political_Affiliation_RequestType
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
     * @return \StructType\Put_Political_Affiliation_RequestType
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
     * @return \StructType\Put_Political_Affiliation_RequestType
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
