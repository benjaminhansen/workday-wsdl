<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Provisioning_Groups_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element to retrieve provisioning group setup data.
 * @subpackage Structs
 */
class Get_Provisioning_Groups_RequestType extends AbstractStructBase
{
    /**
     * The Request_References
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Provisioning_Group_Request_ReferencesType[]
     */
    public $Request_References;
    /**
     * The Response_Filter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Response_FilterType[]
     */
    public $Response_Filter;
    /**
     * The Response_Group
     * Meta information extracted from the WSDL
     * - documentation: The response group allows for the response data to be tailored to only included elements that the user is looking for. If no response group is provided in the request all sub-elements will be returned.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Provisioning_Group_Response_GroupType[]
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
     * Constructor method for Get_Provisioning_Groups_RequestType
     * @uses Get_Provisioning_Groups_RequestType::setRequest_References()
     * @uses Get_Provisioning_Groups_RequestType::setResponse_Filter()
     * @uses Get_Provisioning_Groups_RequestType::setResponse_Group()
     * @uses Get_Provisioning_Groups_RequestType::setVersion()
     * @param \StructType\Provisioning_Group_Request_ReferencesType[] $request_References
     * @param \StructType\Response_FilterType[] $response_Filter
     * @param \StructType\Provisioning_Group_Response_GroupType[] $response_Group
     * @param string $version
     */
    public function __construct(array $request_References = array(), array $response_Filter = array(), array $response_Group = array(), $version = null)
    {
        $this
            ->setRequest_References($request_References)
            ->setResponse_Filter($response_Filter)
            ->setResponse_Group($response_Group)
            ->setVersion($version);
    }
    /**
     * Get Request_References value
     * @return \StructType\Provisioning_Group_Request_ReferencesType[]|null
     */
    public function getRequest_References()
    {
        return $this->Request_References;
    }
    /**
     * This method is responsible for validating the values passed to the setRequest_References method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequest_References method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRequest_ReferencesForArrayConstraintsFromSetRequest_References(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $get_Provisioning_Groups_RequestTypeRequest_ReferencesItem) {
            // validation for constraint: itemType
            if (!$get_Provisioning_Groups_RequestTypeRequest_ReferencesItem instanceof \StructType\Provisioning_Group_Request_ReferencesType) {
                $invalidValues[] = is_object($get_Provisioning_Groups_RequestTypeRequest_ReferencesItem) ? get_class($get_Provisioning_Groups_RequestTypeRequest_ReferencesItem) : sprintf('%s(%s)', gettype($get_Provisioning_Groups_RequestTypeRequest_ReferencesItem), var_export($get_Provisioning_Groups_RequestTypeRequest_ReferencesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Request_References property can only contain items of type \StructType\Provisioning_Group_Request_ReferencesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Request_References value
     * @throws \InvalidArgumentException
     * @param \StructType\Provisioning_Group_Request_ReferencesType[] $request_References
     * @return \StructType\Get_Provisioning_Groups_RequestType
     */
    public function setRequest_References(array $request_References = array())
    {
        // validation for constraint: array
        if ('' !== ($request_ReferencesArrayErrorMessage = self::validateRequest_ReferencesForArrayConstraintsFromSetRequest_References($request_References))) {
            throw new \InvalidArgumentException($request_ReferencesArrayErrorMessage, __LINE__);
        }
        $this->Request_References = $request_References;
        return $this;
    }
    /**
     * Add item to Request_References value
     * @throws \InvalidArgumentException
     * @param \StructType\Provisioning_Group_Request_ReferencesType $item
     * @return \StructType\Get_Provisioning_Groups_RequestType
     */
    public function addToRequest_References(\StructType\Provisioning_Group_Request_ReferencesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Provisioning_Group_Request_ReferencesType) {
            throw new \InvalidArgumentException(sprintf('The Request_References property can only contain items of type \StructType\Provisioning_Group_Request_ReferencesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Request_References[] = $item;
        return $this;
    }
    /**
     * Get Response_Filter value
     * @return \StructType\Response_FilterType[]|null
     */
    public function getResponse_Filter()
    {
        return $this->Response_Filter;
    }
    /**
     * This method is responsible for validating the values passed to the setResponse_Filter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResponse_Filter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResponse_FilterForArrayConstraintsFromSetResponse_Filter(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $get_Provisioning_Groups_RequestTypeResponse_FilterItem) {
            // validation for constraint: itemType
            if (!$get_Provisioning_Groups_RequestTypeResponse_FilterItem instanceof \StructType\Response_FilterType) {
                $invalidValues[] = is_object($get_Provisioning_Groups_RequestTypeResponse_FilterItem) ? get_class($get_Provisioning_Groups_RequestTypeResponse_FilterItem) : sprintf('%s(%s)', gettype($get_Provisioning_Groups_RequestTypeResponse_FilterItem), var_export($get_Provisioning_Groups_RequestTypeResponse_FilterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Response_Filter property can only contain items of type \StructType\Response_FilterType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Response_Filter value
     * @throws \InvalidArgumentException
     * @param \StructType\Response_FilterType[] $response_Filter
     * @return \StructType\Get_Provisioning_Groups_RequestType
     */
    public function setResponse_Filter(array $response_Filter = array())
    {
        // validation for constraint: array
        if ('' !== ($response_FilterArrayErrorMessage = self::validateResponse_FilterForArrayConstraintsFromSetResponse_Filter($response_Filter))) {
            throw new \InvalidArgumentException($response_FilterArrayErrorMessage, __LINE__);
        }
        $this->Response_Filter = $response_Filter;
        return $this;
    }
    /**
     * Add item to Response_Filter value
     * @throws \InvalidArgumentException
     * @param \StructType\Response_FilterType $item
     * @return \StructType\Get_Provisioning_Groups_RequestType
     */
    public function addToResponse_Filter(\StructType\Response_FilterType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Response_FilterType) {
            throw new \InvalidArgumentException(sprintf('The Response_Filter property can only contain items of type \StructType\Response_FilterType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Response_Filter[] = $item;
        return $this;
    }
    /**
     * Get Response_Group value
     * @return \StructType\Provisioning_Group_Response_GroupType[]|null
     */
    public function getResponse_Group()
    {
        return $this->Response_Group;
    }
    /**
     * This method is responsible for validating the values passed to the setResponse_Group method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResponse_Group method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResponse_GroupForArrayConstraintsFromSetResponse_Group(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $get_Provisioning_Groups_RequestTypeResponse_GroupItem) {
            // validation for constraint: itemType
            if (!$get_Provisioning_Groups_RequestTypeResponse_GroupItem instanceof \StructType\Provisioning_Group_Response_GroupType) {
                $invalidValues[] = is_object($get_Provisioning_Groups_RequestTypeResponse_GroupItem) ? get_class($get_Provisioning_Groups_RequestTypeResponse_GroupItem) : sprintf('%s(%s)', gettype($get_Provisioning_Groups_RequestTypeResponse_GroupItem), var_export($get_Provisioning_Groups_RequestTypeResponse_GroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Response_Group property can only contain items of type \StructType\Provisioning_Group_Response_GroupType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Response_Group value
     * @throws \InvalidArgumentException
     * @param \StructType\Provisioning_Group_Response_GroupType[] $response_Group
     * @return \StructType\Get_Provisioning_Groups_RequestType
     */
    public function setResponse_Group(array $response_Group = array())
    {
        // validation for constraint: array
        if ('' !== ($response_GroupArrayErrorMessage = self::validateResponse_GroupForArrayConstraintsFromSetResponse_Group($response_Group))) {
            throw new \InvalidArgumentException($response_GroupArrayErrorMessage, __LINE__);
        }
        $this->Response_Group = $response_Group;
        return $this;
    }
    /**
     * Add item to Response_Group value
     * @throws \InvalidArgumentException
     * @param \StructType\Provisioning_Group_Response_GroupType $item
     * @return \StructType\Get_Provisioning_Groups_RequestType
     */
    public function addToResponse_Group(\StructType\Provisioning_Group_Response_GroupType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Provisioning_Group_Response_GroupType) {
            throw new \InvalidArgumentException(sprintf('The Response_Group property can only contain items of type \StructType\Provisioning_Group_Response_GroupType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Response_Group[] = $item;
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
     * @return \StructType\Get_Provisioning_Groups_RequestType
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
     * @return \StructType\Get_Provisioning_Groups_RequestType
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
