<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Academic_Rank_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element for the Put Academic Rank Request
 * @subpackage Structs
 */
class Put_Academic_Rank_RequestType extends AbstractStructBase
{
    /**
     * The Academic_Rank_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to Academic Rank
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_RankObjectType
     */
    public $Academic_Rank_Reference;
    /**
     * The Academic_Rank_Data
     * Meta information extracted from the WSDL
     * - documentation: Container for all the detail information about the Academic Rank
     * @var \WorkdayWsdl\\StructType\Academic_Rank_DataType
     */
    public $Academic_Rank_Data;
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
     * Constructor method for Put_Academic_Rank_RequestType
     * @uses Put_Academic_Rank_RequestType::setAcademic_Rank_Reference()
     * @uses Put_Academic_Rank_RequestType::setAcademic_Rank_Data()
     * @uses Put_Academic_Rank_RequestType::setAdd_Only()
     * @uses Put_Academic_Rank_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Academic_RankObjectType $academic_Rank_Reference
     * @param \WorkdayWsdl\\StructType\Academic_Rank_DataType $academic_Rank_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Academic_RankObjectType $academic_Rank_Reference = null, \WorkdayWsdl\\StructType\Academic_Rank_DataType $academic_Rank_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setAcademic_Rank_Reference($academic_Rank_Reference)
            ->setAcademic_Rank_Data($academic_Rank_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Academic_Rank_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_RankObjectType|null
     */
    public function getAcademic_Rank_Reference()
    {
        return $this->Academic_Rank_Reference;
    }
    /**
     * Set Academic_Rank_Reference value
     * @param \WorkdayWsdl\\StructType\Academic_RankObjectType $academic_Rank_Reference
     * @return \WorkdayWsdl\\StructType\Put_Academic_Rank_RequestType
     */
    public function setAcademic_Rank_Reference(\WorkdayWsdl\\StructType\Academic_RankObjectType $academic_Rank_Reference = null)
    {
        $this->Academic_Rank_Reference = $academic_Rank_Reference;
        return $this;
    }
    /**
     * Get Academic_Rank_Data value
     * @return \WorkdayWsdl\\StructType\Academic_Rank_DataType|null
     */
    public function getAcademic_Rank_Data()
    {
        return $this->Academic_Rank_Data;
    }
    /**
     * Set Academic_Rank_Data value
     * @param \WorkdayWsdl\\StructType\Academic_Rank_DataType $academic_Rank_Data
     * @return \WorkdayWsdl\\StructType\Put_Academic_Rank_RequestType
     */
    public function setAcademic_Rank_Data(\WorkdayWsdl\\StructType\Academic_Rank_DataType $academic_Rank_Data = null)
    {
        $this->Academic_Rank_Data = $academic_Rank_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Academic_Rank_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Academic_Rank_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Academic_Rank_RequestType
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
