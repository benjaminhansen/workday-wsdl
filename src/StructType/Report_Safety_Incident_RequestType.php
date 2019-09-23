<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Report_Safety_Incident_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The request element containing all necessary information to report a Safety Incident.
 * @subpackage Structs
 */
class Report_Safety_Incident_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Report_Safety_Incident_Data
     * @var \StructType\Report_Safety_Incident_DataType
     */
    public $Report_Safety_Incident_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Report_Safety_Incident_RequestType
     * @uses Report_Safety_Incident_RequestType::setBusiness_Process_Parameters()
     * @uses Report_Safety_Incident_RequestType::setReport_Safety_Incident_Data()
     * @uses Report_Safety_Incident_RequestType::setVersion()
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \StructType\Report_Safety_Incident_DataType $report_Safety_Incident_Data
     * @param string $version
     */
    public function __construct(\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \StructType\Report_Safety_Incident_DataType $report_Safety_Incident_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setReport_Safety_Incident_Data($report_Safety_Incident_Data)
            ->setVersion($version);
    }
    /**
     * Get Business_Process_Parameters value
     * @return \StructType\Business_Process_ParametersType|null
     */
    public function getBusiness_Process_Parameters()
    {
        return $this->Business_Process_Parameters;
    }
    /**
     * Set Business_Process_Parameters value
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @return \StructType\Report_Safety_Incident_RequestType
     */
    public function setBusiness_Process_Parameters(\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Report_Safety_Incident_Data value
     * @return \StructType\Report_Safety_Incident_DataType|null
     */
    public function getReport_Safety_Incident_Data()
    {
        return $this->Report_Safety_Incident_Data;
    }
    /**
     * Set Report_Safety_Incident_Data value
     * @param \StructType\Report_Safety_Incident_DataType $report_Safety_Incident_Data
     * @return \StructType\Report_Safety_Incident_RequestType
     */
    public function setReport_Safety_Incident_Data(\StructType\Report_Safety_Incident_DataType $report_Safety_Incident_Data = null)
    {
        $this->Report_Safety_Incident_Data = $report_Safety_Incident_Data;
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
     * @return \StructType\Report_Safety_Incident_RequestType
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
     * @return \StructType\Report_Safety_Incident_RequestType
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
