<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Previous_System_Job_History_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the Data for adding, updating or deleting a previous system job history entry for a worker.
 * @subpackage Structs
 */
class Put_Previous_System_Job_History_RequestType extends AbstractStructBase
{
    /**
     * The Previous_System_Job_History_Data
     * @var \StructType\Previous_System_Job_HistoryType
     */
    public $Previous_System_Job_History_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Previous_System_Job_History_RequestType
     * @uses Put_Previous_System_Job_History_RequestType::setPrevious_System_Job_History_Data()
     * @uses Put_Previous_System_Job_History_RequestType::setVersion()
     * @param \StructType\Previous_System_Job_HistoryType $previous_System_Job_History_Data
     * @param string $version
     */
    public function __construct(\StructType\Previous_System_Job_HistoryType $previous_System_Job_History_Data = null, $version = null)
    {
        $this
            ->setPrevious_System_Job_History_Data($previous_System_Job_History_Data)
            ->setVersion($version);
    }
    /**
     * Get Previous_System_Job_History_Data value
     * @return \StructType\Previous_System_Job_HistoryType|null
     */
    public function getPrevious_System_Job_History_Data()
    {
        return $this->Previous_System_Job_History_Data;
    }
    /**
     * Set Previous_System_Job_History_Data value
     * @param \StructType\Previous_System_Job_HistoryType $previous_System_Job_History_Data
     * @return \StructType\Put_Previous_System_Job_History_RequestType
     */
    public function setPrevious_System_Job_History_Data(\StructType\Previous_System_Job_HistoryType $previous_System_Job_History_Data = null)
    {
        $this->Previous_System_Job_History_Data = $previous_System_Job_History_Data;
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
     * @return \StructType\Put_Previous_System_Job_History_RequestType
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
     * @return \StructType\Put_Previous_System_Job_History_RequestType
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
