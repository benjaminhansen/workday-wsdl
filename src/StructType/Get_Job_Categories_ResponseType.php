<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Job_Categories_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Job Category response elements include received criteria, references, data based on criteria and grouping, results filter and result summary.
 * @subpackage Structs
 */
class Get_Job_Categories_ResponseType extends AbstractStructBase
{
    /**
     * The Request_References
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Category_Request_ReferencesType
     */
    public $Request_References;
    /**
     * The Response_Filter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Response_FilterType
     */
    public $Response_Filter;
    /**
     * The Response_Results
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Response_ResultsType
     */
    public $Response_Results;
    /**
     * The Response_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Category_Response_DataType
     */
    public $Response_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Get_Job_Categories_ResponseType
     * @uses Get_Job_Categories_ResponseType::setRequest_References()
     * @uses Get_Job_Categories_ResponseType::setResponse_Filter()
     * @uses Get_Job_Categories_ResponseType::setResponse_Results()
     * @uses Get_Job_Categories_ResponseType::setResponse_Data()
     * @uses Get_Job_Categories_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Job_Category_Request_ReferencesType $request_References
     * @param \WorkdayWsdl\\StructType\Response_FilterType $response_Filter
     * @param \WorkdayWsdl\\StructType\Response_ResultsType $response_Results
     * @param \WorkdayWsdl\\StructType\Job_Category_Response_DataType $response_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Job_Category_Request_ReferencesType $request_References = null, \WorkdayWsdl\\StructType\Response_FilterType $response_Filter = null, \WorkdayWsdl\\StructType\Response_ResultsType $response_Results = null, \WorkdayWsdl\\StructType\Job_Category_Response_DataType $response_Data = null, $version = null)
    {
        $this
            ->setRequest_References($request_References)
            ->setResponse_Filter($response_Filter)
            ->setResponse_Results($response_Results)
            ->setResponse_Data($response_Data)
            ->setVersion($version);
    }
    /**
     * Get Request_References value
     * @return \WorkdayWsdl\\StructType\Job_Category_Request_ReferencesType|null
     */
    public function getRequest_References()
    {
        return $this->Request_References;
    }
    /**
     * Set Request_References value
     * @param \WorkdayWsdl\\StructType\Job_Category_Request_ReferencesType $request_References
     * @return \WorkdayWsdl\\StructType\Get_Job_Categories_ResponseType
     */
    public function setRequest_References(\WorkdayWsdl\\StructType\Job_Category_Request_ReferencesType $request_References = null)
    {
        $this->Request_References = $request_References;
        return $this;
    }
    /**
     * Get Response_Filter value
     * @return \WorkdayWsdl\\StructType\Response_FilterType|null
     */
    public function getResponse_Filter()
    {
        return $this->Response_Filter;
    }
    /**
     * Set Response_Filter value
     * @param \WorkdayWsdl\\StructType\Response_FilterType $response_Filter
     * @return \WorkdayWsdl\\StructType\Get_Job_Categories_ResponseType
     */
    public function setResponse_Filter(\WorkdayWsdl\\StructType\Response_FilterType $response_Filter = null)
    {
        $this->Response_Filter = $response_Filter;
        return $this;
    }
    /**
     * Get Response_Results value
     * @return \WorkdayWsdl\\StructType\Response_ResultsType|null
     */
    public function getResponse_Results()
    {
        return $this->Response_Results;
    }
    /**
     * Set Response_Results value
     * @param \WorkdayWsdl\\StructType\Response_ResultsType $response_Results
     * @return \WorkdayWsdl\\StructType\Get_Job_Categories_ResponseType
     */
    public function setResponse_Results(\WorkdayWsdl\\StructType\Response_ResultsType $response_Results = null)
    {
        $this->Response_Results = $response_Results;
        return $this;
    }
    /**
     * Get Response_Data value
     * @return \WorkdayWsdl\\StructType\Job_Category_Response_DataType|null
     */
    public function getResponse_Data()
    {
        return $this->Response_Data;
    }
    /**
     * Set Response_Data value
     * @param \WorkdayWsdl\\StructType\Job_Category_Response_DataType $response_Data
     * @return \WorkdayWsdl\\StructType\Get_Job_Categories_ResponseType
     */
    public function setResponse_Data(\WorkdayWsdl\\StructType\Job_Category_Response_DataType $response_Data = null)
    {
        $this->Response_Data = $response_Data;
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
     * @return \WorkdayWsdl\\StructType\Get_Job_Categories_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Get_Job_Categories_ResponseType
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
