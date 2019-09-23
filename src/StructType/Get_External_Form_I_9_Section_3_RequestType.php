<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_External_Form_I-9_Section_3_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Worker Reference to extract External Form I-9 Section 3 for Workers.
 * @subpackage Structs
 */
class Get_External_Form_I_9_Section_3_RequestType extends AbstractStructBase
{
    /**
     * The Request_References
     * Meta information extracted from the WSDL
     * - documentation: The Worker Reference to extract External Form I-9 Section 3 for Workers.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Get_Change_External_Form_I_9_Section_3_Request_ReferencesType
     */
    public $Request_References;
    /**
     * The Response_Filter
     * Meta information extracted from the WSDL
     * - documentation: Parameters that let you filter the data returned in the response. You can filter returned data by dates and page attributes.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Response_FilterType
     */
    public $Response_Filter;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Get_External_Form_I-9_Section_3_RequestType
     * @uses Get_External_Form_I_9_Section_3_RequestType::setRequest_References()
     * @uses Get_External_Form_I_9_Section_3_RequestType::setResponse_Filter()
     * @uses Get_External_Form_I_9_Section_3_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Get_Change_External_Form_I_9_Section_3_Request_ReferencesType $request_References
     * @param \WorkdayWsdl\\StructType\Response_FilterType $response_Filter
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Get_Change_External_Form_I_9_Section_3_Request_ReferencesType $request_References = null, \WorkdayWsdl\\StructType\Response_FilterType $response_Filter = null, $version = null)
    {
        $this
            ->setRequest_References($request_References)
            ->setResponse_Filter($response_Filter)
            ->setVersion($version);
    }
    /**
     * Get Request_References value
     * @return \WorkdayWsdl\\StructType\Get_Change_External_Form_I_9_Section_3_Request_ReferencesType|null
     */
    public function getRequest_References()
    {
        return $this->Request_References;
    }
    /**
     * Set Request_References value
     * @param \WorkdayWsdl\\StructType\Get_Change_External_Form_I_9_Section_3_Request_ReferencesType $request_References
     * @return \WorkdayWsdl\\StructType\Get_External_Form_I_9_Section_3_RequestType
     */
    public function setRequest_References(\WorkdayWsdl\\StructType\Get_Change_External_Form_I_9_Section_3_Request_ReferencesType $request_References = null)
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
     * @return \WorkdayWsdl\\StructType\Get_External_Form_I_9_Section_3_RequestType
     */
    public function setResponse_Filter(\WorkdayWsdl\\StructType\Response_FilterType $response_Filter = null)
    {
        $this->Response_Filter = $response_Filter;
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
     * @return \WorkdayWsdl\\StructType\Get_External_Form_I_9_Section_3_RequestType
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
     * @return \WorkdayWsdl\\StructType\Get_External_Form_I_9_Section_3_RequestType
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
