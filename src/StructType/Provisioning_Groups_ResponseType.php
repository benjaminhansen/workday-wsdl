<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Provisioning_Groups_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing the requested instances of provisioning groups and their associated data.
 * @subpackage Structs
 */
class Provisioning_Groups_ResponseType extends AbstractStructBase
{
    /**
     * The Request_References
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Provisioning_Group_Request_ReferencesType
     */
    public $Request_References;
    /**
     * The Response_Filter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Response_FilterType
     */
    public $Response_Filter;
    /**
     * The Response_Group
     * Meta information extracted from the WSDL
     * - documentation: The response group allows for the response data to be tailored to only included elements that the user is looking for. If no response group is provided in the request all sub-elements will be returned.
     * - minOccurs: 0
     * @var \StructType\Provisioning_Group_Response_GroupType
     */
    public $Response_Group;
    /**
     * The Response_Results
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Response_ResultsType
     */
    public $Response_Results;
    /**
     * The Response_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Provisioning_Group_Response_DataType
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
     * Constructor method for Provisioning_Groups_ResponseType
     * @uses Provisioning_Groups_ResponseType::setRequest_References()
     * @uses Provisioning_Groups_ResponseType::setResponse_Filter()
     * @uses Provisioning_Groups_ResponseType::setResponse_Group()
     * @uses Provisioning_Groups_ResponseType::setResponse_Results()
     * @uses Provisioning_Groups_ResponseType::setResponse_Data()
     * @uses Provisioning_Groups_ResponseType::setVersion()
     * @param \StructType\Provisioning_Group_Request_ReferencesType $request_References
     * @param \StructType\Response_FilterType $response_Filter
     * @param \StructType\Provisioning_Group_Response_GroupType $response_Group
     * @param \StructType\Response_ResultsType $response_Results
     * @param \StructType\Provisioning_Group_Response_DataType $response_Data
     * @param string $version
     */
    public function __construct(\StructType\Provisioning_Group_Request_ReferencesType $request_References = null, \StructType\Response_FilterType $response_Filter = null, \StructType\Provisioning_Group_Response_GroupType $response_Group = null, \StructType\Response_ResultsType $response_Results = null, \StructType\Provisioning_Group_Response_DataType $response_Data = null, $version = null)
    {
        $this
            ->setRequest_References($request_References)
            ->setResponse_Filter($response_Filter)
            ->setResponse_Group($response_Group)
            ->setResponse_Results($response_Results)
            ->setResponse_Data($response_Data)
            ->setVersion($version);
    }
    /**
     * Get Request_References value
     * @return \StructType\Provisioning_Group_Request_ReferencesType|null
     */
    public function getRequest_References()
    {
        return $this->Request_References;
    }
    /**
     * Set Request_References value
     * @param \StructType\Provisioning_Group_Request_ReferencesType $request_References
     * @return \StructType\Provisioning_Groups_ResponseType
     */
    public function setRequest_References(\StructType\Provisioning_Group_Request_ReferencesType $request_References = null)
    {
        $this->Request_References = $request_References;
        return $this;
    }
    /**
     * Get Response_Filter value
     * @return \StructType\Response_FilterType|null
     */
    public function getResponse_Filter()
    {
        return $this->Response_Filter;
    }
    /**
     * Set Response_Filter value
     * @param \StructType\Response_FilterType $response_Filter
     * @return \StructType\Provisioning_Groups_ResponseType
     */
    public function setResponse_Filter(\StructType\Response_FilterType $response_Filter = null)
    {
        $this->Response_Filter = $response_Filter;
        return $this;
    }
    /**
     * Get Response_Group value
     * @return \StructType\Provisioning_Group_Response_GroupType|null
     */
    public function getResponse_Group()
    {
        return $this->Response_Group;
    }
    /**
     * Set Response_Group value
     * @param \StructType\Provisioning_Group_Response_GroupType $response_Group
     * @return \StructType\Provisioning_Groups_ResponseType
     */
    public function setResponse_Group(\StructType\Provisioning_Group_Response_GroupType $response_Group = null)
    {
        $this->Response_Group = $response_Group;
        return $this;
    }
    /**
     * Get Response_Results value
     * @return \StructType\Response_ResultsType|null
     */
    public function getResponse_Results()
    {
        return $this->Response_Results;
    }
    /**
     * Set Response_Results value
     * @param \StructType\Response_ResultsType $response_Results
     * @return \StructType\Provisioning_Groups_ResponseType
     */
    public function setResponse_Results(\StructType\Response_ResultsType $response_Results = null)
    {
        $this->Response_Results = $response_Results;
        return $this;
    }
    /**
     * Get Response_Data value
     * @return \StructType\Provisioning_Group_Response_DataType|null
     */
    public function getResponse_Data()
    {
        return $this->Response_Data;
    }
    /**
     * Set Response_Data value
     * @param \StructType\Provisioning_Group_Response_DataType $response_Data
     * @return \StructType\Provisioning_Groups_ResponseType
     */
    public function setResponse_Data(\StructType\Provisioning_Group_Response_DataType $response_Data = null)
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
     * @return \StructType\Provisioning_Groups_ResponseType
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
     * @return \StructType\Provisioning_Groups_ResponseType
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
