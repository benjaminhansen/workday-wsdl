<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Work_Shifts_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains request references and filter for getting Work Shift Data.
 * @subpackage Structs
 */
class Get_Work_Shifts_RequestType extends AbstractStructBase
{
    /**
     * The Request_References
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Work_Shift_Request_ReferencesType
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
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Get_Work_Shifts_RequestType
     * @uses Get_Work_Shifts_RequestType::setRequest_References()
     * @uses Get_Work_Shifts_RequestType::setResponse_Filter()
     * @uses Get_Work_Shifts_RequestType::setVersion()
     * @param \StructType\Work_Shift_Request_ReferencesType $request_References
     * @param \StructType\Response_FilterType $response_Filter
     * @param string $version
     */
    public function __construct(\StructType\Work_Shift_Request_ReferencesType $request_References = null, \StructType\Response_FilterType $response_Filter = null, $version = null)
    {
        $this
            ->setRequest_References($request_References)
            ->setResponse_Filter($response_Filter)
            ->setVersion($version);
    }
    /**
     * Get Request_References value
     * @return \StructType\Work_Shift_Request_ReferencesType|null
     */
    public function getRequest_References()
    {
        return $this->Request_References;
    }
    /**
     * Set Request_References value
     * @param \StructType\Work_Shift_Request_ReferencesType $request_References
     * @return \StructType\Get_Work_Shifts_RequestType
     */
    public function setRequest_References(\StructType\Work_Shift_Request_ReferencesType $request_References = null)
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
     * @return \StructType\Get_Work_Shifts_RequestType
     */
    public function setResponse_Filter(\StructType\Response_FilterType $response_Filter = null)
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
     * @return \StructType\Get_Work_Shifts_RequestType
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
     * @return \StructType\Get_Work_Shifts_RequestType
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
