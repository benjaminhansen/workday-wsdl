<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Locations_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element used to find and get Locations and their associated data.
 * @subpackage Structs
 */
class Get_Locations_RequestType extends AbstractStructBase
{
    /**
     * The Request_References
     * Meta information extracted from the WSDL
     * - documentation: Element containing reference to a specific Location.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_Request_ReferencesType
     */
    public $Request_References;
    /**
     * The Request_Criteria
     * Meta information extracted from the WSDL
     * - documentation: Element containing filtering criteria to specify the Location to return in the response.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_Request_CriteriaType
     */
    public $Request_Criteria;
    /**
     * The Response_Filter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Response_FilterType
     */
    public $Response_Filter;
    /**
     * The Response_Group
     * Meta information extracted from the WSDL
     * - documentation: The response group allows for the response data to be tailored to only included elements that the user is looking for. If no response group is provided in the request, then all groups will be returned.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_Response_GroupType
     */
    public $Response_Group;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Get_Locations_RequestType
     * @uses Get_Locations_RequestType::setRequest_References()
     * @uses Get_Locations_RequestType::setRequest_Criteria()
     * @uses Get_Locations_RequestType::setResponse_Filter()
     * @uses Get_Locations_RequestType::setResponse_Group()
     * @uses Get_Locations_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Location_Request_ReferencesType $request_References
     * @param \WorkdayWsdl\\StructType\Location_Request_CriteriaType $request_Criteria
     * @param \WorkdayWsdl\\StructType\Response_FilterType $response_Filter
     * @param \WorkdayWsdl\\StructType\Location_Response_GroupType $response_Group
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Location_Request_ReferencesType $request_References = null, \WorkdayWsdl\\StructType\Location_Request_CriteriaType $request_Criteria = null, \WorkdayWsdl\\StructType\Response_FilterType $response_Filter = null, \WorkdayWsdl\\StructType\Location_Response_GroupType $response_Group = null, $version = null)
    {
        $this
            ->setRequest_References($request_References)
            ->setRequest_Criteria($request_Criteria)
            ->setResponse_Filter($response_Filter)
            ->setResponse_Group($response_Group)
            ->setVersion($version);
    }
    /**
     * Get Request_References value
     * @return \WorkdayWsdl\\StructType\Location_Request_ReferencesType|null
     */
    public function getRequest_References()
    {
        return $this->Request_References;
    }
    /**
     * Set Request_References value
     * @param \WorkdayWsdl\\StructType\Location_Request_ReferencesType $request_References
     * @return \WorkdayWsdl\\StructType\Get_Locations_RequestType
     */
    public function setRequest_References(\WorkdayWsdl\\StructType\Location_Request_ReferencesType $request_References = null)
    {
        $this->Request_References = $request_References;
        return $this;
    }
    /**
     * Get Request_Criteria value
     * @return \WorkdayWsdl\\StructType\Location_Request_CriteriaType|null
     */
    public function getRequest_Criteria()
    {
        return $this->Request_Criteria;
    }
    /**
     * Set Request_Criteria value
     * @param \WorkdayWsdl\\StructType\Location_Request_CriteriaType $request_Criteria
     * @return \WorkdayWsdl\\StructType\Get_Locations_RequestType
     */
    public function setRequest_Criteria(\WorkdayWsdl\\StructType\Location_Request_CriteriaType $request_Criteria = null)
    {
        $this->Request_Criteria = $request_Criteria;
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
     * @return \WorkdayWsdl\\StructType\Get_Locations_RequestType
     */
    public function setResponse_Filter(\WorkdayWsdl\\StructType\Response_FilterType $response_Filter = null)
    {
        $this->Response_Filter = $response_Filter;
        return $this;
    }
    /**
     * Get Response_Group value
     * @return \WorkdayWsdl\\StructType\Location_Response_GroupType|null
     */
    public function getResponse_Group()
    {
        return $this->Response_Group;
    }
    /**
     * Set Response_Group value
     * @param \WorkdayWsdl\\StructType\Location_Response_GroupType $response_Group
     * @return \WorkdayWsdl\\StructType\Get_Locations_RequestType
     */
    public function setResponse_Group(\WorkdayWsdl\\StructType\Location_Response_GroupType $response_Group = null)
    {
        $this->Response_Group = $response_Group;
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
     * @return \WorkdayWsdl\\StructType\Get_Locations_RequestType
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
     * @return \WorkdayWsdl\\StructType\Get_Locations_RequestType
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
