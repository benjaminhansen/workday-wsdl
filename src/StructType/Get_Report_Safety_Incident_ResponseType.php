<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Report_Safety_Incident_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response of the Safety Incident get request.
 * @subpackage Structs
 */
class Get_Report_Safety_Incident_ResponseType extends AbstractStructBase
{
    /**
     * The Request_References
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Safety_Incident_Request_ReferencesType[]
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
     * The Response_Results
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Response_ResultsType[]
     */
    public $Response_Results;
    /**
     * The Response_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Safety_Incident_Response_DataType[]
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
     * Constructor method for Get_Report_Safety_Incident_ResponseType
     * @uses Get_Report_Safety_Incident_ResponseType::setRequest_References()
     * @uses Get_Report_Safety_Incident_ResponseType::setResponse_Filter()
     * @uses Get_Report_Safety_Incident_ResponseType::setResponse_Results()
     * @uses Get_Report_Safety_Incident_ResponseType::setResponse_Data()
     * @uses Get_Report_Safety_Incident_ResponseType::setVersion()
     * @param \StructType\Safety_Incident_Request_ReferencesType[] $request_References
     * @param \StructType\Response_FilterType[] $response_Filter
     * @param \StructType\Response_ResultsType[] $response_Results
     * @param \StructType\Safety_Incident_Response_DataType[] $response_Data
     * @param string $version
     */
    public function __construct(array $request_References = array(), array $response_Filter = array(), array $response_Results = array(), array $response_Data = array(), $version = null)
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
     * @return \StructType\Safety_Incident_Request_ReferencesType[]|null
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
        foreach ($values as $get_Report_Safety_Incident_ResponseTypeRequest_ReferencesItem) {
            // validation for constraint: itemType
            if (!$get_Report_Safety_Incident_ResponseTypeRequest_ReferencesItem instanceof \StructType\Safety_Incident_Request_ReferencesType) {
                $invalidValues[] = is_object($get_Report_Safety_Incident_ResponseTypeRequest_ReferencesItem) ? get_class($get_Report_Safety_Incident_ResponseTypeRequest_ReferencesItem) : sprintf('%s(%s)', gettype($get_Report_Safety_Incident_ResponseTypeRequest_ReferencesItem), var_export($get_Report_Safety_Incident_ResponseTypeRequest_ReferencesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Request_References property can only contain items of type \StructType\Safety_Incident_Request_ReferencesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Request_References value
     * @throws \InvalidArgumentException
     * @param \StructType\Safety_Incident_Request_ReferencesType[] $request_References
     * @return \StructType\Get_Report_Safety_Incident_ResponseType
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
     * @param \StructType\Safety_Incident_Request_ReferencesType $item
     * @return \StructType\Get_Report_Safety_Incident_ResponseType
     */
    public function addToRequest_References(\StructType\Safety_Incident_Request_ReferencesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Safety_Incident_Request_ReferencesType) {
            throw new \InvalidArgumentException(sprintf('The Request_References property can only contain items of type \StructType\Safety_Incident_Request_ReferencesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
        foreach ($values as $get_Report_Safety_Incident_ResponseTypeResponse_FilterItem) {
            // validation for constraint: itemType
            if (!$get_Report_Safety_Incident_ResponseTypeResponse_FilterItem instanceof \StructType\Response_FilterType) {
                $invalidValues[] = is_object($get_Report_Safety_Incident_ResponseTypeResponse_FilterItem) ? get_class($get_Report_Safety_Incident_ResponseTypeResponse_FilterItem) : sprintf('%s(%s)', gettype($get_Report_Safety_Incident_ResponseTypeResponse_FilterItem), var_export($get_Report_Safety_Incident_ResponseTypeResponse_FilterItem, true));
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
     * @return \StructType\Get_Report_Safety_Incident_ResponseType
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
     * @return \StructType\Get_Report_Safety_Incident_ResponseType
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
     * Get Response_Results value
     * @return \StructType\Response_ResultsType[]|null
     */
    public function getResponse_Results()
    {
        return $this->Response_Results;
    }
    /**
     * This method is responsible for validating the values passed to the setResponse_Results method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResponse_Results method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResponse_ResultsForArrayConstraintsFromSetResponse_Results(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $get_Report_Safety_Incident_ResponseTypeResponse_ResultsItem) {
            // validation for constraint: itemType
            if (!$get_Report_Safety_Incident_ResponseTypeResponse_ResultsItem instanceof \StructType\Response_ResultsType) {
                $invalidValues[] = is_object($get_Report_Safety_Incident_ResponseTypeResponse_ResultsItem) ? get_class($get_Report_Safety_Incident_ResponseTypeResponse_ResultsItem) : sprintf('%s(%s)', gettype($get_Report_Safety_Incident_ResponseTypeResponse_ResultsItem), var_export($get_Report_Safety_Incident_ResponseTypeResponse_ResultsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Response_Results property can only contain items of type \StructType\Response_ResultsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Response_Results value
     * @throws \InvalidArgumentException
     * @param \StructType\Response_ResultsType[] $response_Results
     * @return \StructType\Get_Report_Safety_Incident_ResponseType
     */
    public function setResponse_Results(array $response_Results = array())
    {
        // validation for constraint: array
        if ('' !== ($response_ResultsArrayErrorMessage = self::validateResponse_ResultsForArrayConstraintsFromSetResponse_Results($response_Results))) {
            throw new \InvalidArgumentException($response_ResultsArrayErrorMessage, __LINE__);
        }
        $this->Response_Results = $response_Results;
        return $this;
    }
    /**
     * Add item to Response_Results value
     * @throws \InvalidArgumentException
     * @param \StructType\Response_ResultsType $item
     * @return \StructType\Get_Report_Safety_Incident_ResponseType
     */
    public function addToResponse_Results(\StructType\Response_ResultsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Response_ResultsType) {
            throw new \InvalidArgumentException(sprintf('The Response_Results property can only contain items of type \StructType\Response_ResultsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Response_Results[] = $item;
        return $this;
    }
    /**
     * Get Response_Data value
     * @return \StructType\Safety_Incident_Response_DataType[]|null
     */
    public function getResponse_Data()
    {
        return $this->Response_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setResponse_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResponse_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResponse_DataForArrayConstraintsFromSetResponse_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $get_Report_Safety_Incident_ResponseTypeResponse_DataItem) {
            // validation for constraint: itemType
            if (!$get_Report_Safety_Incident_ResponseTypeResponse_DataItem instanceof \StructType\Safety_Incident_Response_DataType) {
                $invalidValues[] = is_object($get_Report_Safety_Incident_ResponseTypeResponse_DataItem) ? get_class($get_Report_Safety_Incident_ResponseTypeResponse_DataItem) : sprintf('%s(%s)', gettype($get_Report_Safety_Incident_ResponseTypeResponse_DataItem), var_export($get_Report_Safety_Incident_ResponseTypeResponse_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Response_Data property can only contain items of type \StructType\Safety_Incident_Response_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Response_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Safety_Incident_Response_DataType[] $response_Data
     * @return \StructType\Get_Report_Safety_Incident_ResponseType
     */
    public function setResponse_Data(array $response_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($response_DataArrayErrorMessage = self::validateResponse_DataForArrayConstraintsFromSetResponse_Data($response_Data))) {
            throw new \InvalidArgumentException($response_DataArrayErrorMessage, __LINE__);
        }
        $this->Response_Data = $response_Data;
        return $this;
    }
    /**
     * Add item to Response_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Safety_Incident_Response_DataType $item
     * @return \StructType\Get_Report_Safety_Incident_ResponseType
     */
    public function addToResponse_Data(\StructType\Safety_Incident_Response_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Safety_Incident_Response_DataType) {
            throw new \InvalidArgumentException(sprintf('The Response_Data property can only contain items of type \StructType\Safety_Incident_Response_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Response_Data[] = $item;
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
     * @return \StructType\Get_Report_Safety_Incident_ResponseType
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
     * @return \StructType\Get_Report_Safety_Incident_ResponseType
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
