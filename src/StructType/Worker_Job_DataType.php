<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Job_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the Position-level data for a Worker. The primary position is always the first element.
 * @subpackage Structs
 */
class Worker_Job_DataType extends AbstractStructBase
{
    /**
     * The Position_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the worker's employment information, such as their position and job information.Security Note: This element is secured to the following domains: Self-Service: Current Staffing Information, Worker Data: Current Staffing
     * Information
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_Detail_DataType
     */
    public $Position_Data;
    /**
     * The Position_Organizations_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the worker's organizations that they are a member of related to the position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_Organization_DataType
     */
    public $Position_Organizations_Data;
    /**
     * The Position_Management_Chains_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the worker's management chains related to the position.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_Management_Chains_DataType
     */
    public $Position_Management_Chains_Data;
    /**
     * The Primary_Job
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the position is the primary position for a worker.
     * @var bool
     */
    public $Primary_Job;
    /**
     * Constructor method for Worker_Job_DataType
     * @uses Worker_Job_DataType::setPosition_Data()
     * @uses Worker_Job_DataType::setPosition_Organizations_Data()
     * @uses Worker_Job_DataType::setPosition_Management_Chains_Data()
     * @uses Worker_Job_DataType::setPrimary_Job()
     * @param \WorkdayWsdl\\StructType\Position_Detail_DataType $position_Data
     * @param \WorkdayWsdl\\StructType\Position_Organization_DataType $position_Organizations_Data
     * @param \WorkdayWsdl\\StructType\Position_Management_Chains_DataType $position_Management_Chains_Data
     * @param bool $primary_Job
     */
    public function __construct(\WorkdayWsdl\\StructType\Position_Detail_DataType $position_Data = null, \WorkdayWsdl\\StructType\Position_Organization_DataType $position_Organizations_Data = null, \WorkdayWsdl\\StructType\Position_Management_Chains_DataType $position_Management_Chains_Data = null, $primary_Job = null)
    {
        $this
            ->setPosition_Data($position_Data)
            ->setPosition_Organizations_Data($position_Organizations_Data)
            ->setPosition_Management_Chains_Data($position_Management_Chains_Data)
            ->setPrimary_Job($primary_Job);
    }
    /**
     * Get Position_Data value
     * @return \WorkdayWsdl\\StructType\Position_Detail_DataType|null
     */
    public function getPosition_Data()
    {
        return $this->Position_Data;
    }
    /**
     * Set Position_Data value
     * @param \WorkdayWsdl\\StructType\Position_Detail_DataType $position_Data
     * @return \WorkdayWsdl\\StructType\Worker_Job_DataType
     */
    public function setPosition_Data(\WorkdayWsdl\\StructType\Position_Detail_DataType $position_Data = null)
    {
        $this->Position_Data = $position_Data;
        return $this;
    }
    /**
     * Get Position_Organizations_Data value
     * @return \WorkdayWsdl\\StructType\Position_Organization_DataType|null
     */
    public function getPosition_Organizations_Data()
    {
        return $this->Position_Organizations_Data;
    }
    /**
     * Set Position_Organizations_Data value
     * @param \WorkdayWsdl\\StructType\Position_Organization_DataType $position_Organizations_Data
     * @return \WorkdayWsdl\\StructType\Worker_Job_DataType
     */
    public function setPosition_Organizations_Data(\WorkdayWsdl\\StructType\Position_Organization_DataType $position_Organizations_Data = null)
    {
        $this->Position_Organizations_Data = $position_Organizations_Data;
        return $this;
    }
    /**
     * Get Position_Management_Chains_Data value
     * @return \WorkdayWsdl\\StructType\Position_Management_Chains_DataType|null
     */
    public function getPosition_Management_Chains_Data()
    {
        return $this->Position_Management_Chains_Data;
    }
    /**
     * Set Position_Management_Chains_Data value
     * @param \WorkdayWsdl\\StructType\Position_Management_Chains_DataType $position_Management_Chains_Data
     * @return \WorkdayWsdl\\StructType\Worker_Job_DataType
     */
    public function setPosition_Management_Chains_Data(\WorkdayWsdl\\StructType\Position_Management_Chains_DataType $position_Management_Chains_Data = null)
    {
        $this->Position_Management_Chains_Data = $position_Management_Chains_Data;
        return $this;
    }
    /**
     * Get Primary_Job value
     * @return bool|null
     */
    public function getPrimary_Job()
    {
        return $this->Primary_Job;
    }
    /**
     * Set Primary_Job value
     * @param bool $primary_Job
     * @return \WorkdayWsdl\\StructType\Worker_Job_DataType
     */
    public function setPrimary_Job($primary_Job = null)
    {
        // validation for constraint: boolean
        if (!is_null($primary_Job) && !is_bool($primary_Job)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($primary_Job, true), gettype($primary_Job)), __LINE__);
        }
        $this->Primary_Job = $primary_Job;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Job_DataType
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
