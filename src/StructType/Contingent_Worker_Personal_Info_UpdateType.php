<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contingent_Worker_Personal_Info_UpdateType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the following elements to update the Personal Information for an existing Contingent Worker within the Workday system.
 * @subpackage Structs
 */
class Contingent_Worker_Personal_Info_UpdateType extends AbstractStructBase
{
    /**
     * The Contingent_Worker_Reference
     * @var \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType
     */
    public $Contingent_Worker_Reference;
    /**
     * The Contingent_Worker_Personal_Info_Data
     * @var \WorkdayWsdl\\StructType\Worker_Personal_Info_DataType
     */
    public $Contingent_Worker_Personal_Info_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Contingent_Worker_Personal_Info_UpdateType
     * @uses Contingent_Worker_Personal_Info_UpdateType::setContingent_Worker_Reference()
     * @uses Contingent_Worker_Personal_Info_UpdateType::setContingent_Worker_Personal_Info_Data()
     * @uses Contingent_Worker_Personal_Info_UpdateType::setVersion()
     * @param \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference
     * @param \WorkdayWsdl\\StructType\Worker_Personal_Info_DataType $contingent_Worker_Personal_Info_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference = null, \WorkdayWsdl\\StructType\Worker_Personal_Info_DataType $contingent_Worker_Personal_Info_Data = null, $version = null)
    {
        $this
            ->setContingent_Worker_Reference($contingent_Worker_Reference)
            ->setContingent_Worker_Personal_Info_Data($contingent_Worker_Personal_Info_Data)
            ->setVersion($version);
    }
    /**
     * Get Contingent_Worker_Reference value
     * @return \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType|null
     */
    public function getContingent_Worker_Reference()
    {
        return $this->Contingent_Worker_Reference;
    }
    /**
     * Set Contingent_Worker_Reference value
     * @param \WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference
     * @return \WorkdayWsdl\\StructType\Contingent_Worker_Personal_Info_UpdateType
     */
    public function setContingent_Worker_Reference(\WorkdayWsdl\\StructType\Contingent_Worker_Reference_DataType $contingent_Worker_Reference = null)
    {
        $this->Contingent_Worker_Reference = $contingent_Worker_Reference;
        return $this;
    }
    /**
     * Get Contingent_Worker_Personal_Info_Data value
     * @return \WorkdayWsdl\\StructType\Worker_Personal_Info_DataType|null
     */
    public function getContingent_Worker_Personal_Info_Data()
    {
        return $this->Contingent_Worker_Personal_Info_Data;
    }
    /**
     * Set Contingent_Worker_Personal_Info_Data value
     * @param \WorkdayWsdl\\StructType\Worker_Personal_Info_DataType $contingent_Worker_Personal_Info_Data
     * @return \WorkdayWsdl\\StructType\Contingent_Worker_Personal_Info_UpdateType
     */
    public function setContingent_Worker_Personal_Info_Data(\WorkdayWsdl\\StructType\Worker_Personal_Info_DataType $contingent_Worker_Personal_Info_Data = null)
    {
        $this->Contingent_Worker_Personal_Info_Data = $contingent_Worker_Personal_Info_Data;
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
     * @return \WorkdayWsdl\\StructType\Contingent_Worker_Personal_Info_UpdateType
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
     * @return \WorkdayWsdl\\StructType\Contingent_Worker_Personal_Info_UpdateType
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
