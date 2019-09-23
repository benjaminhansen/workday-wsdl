<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Workday_Account_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Workday Account Data
 * @subpackage Structs
 */
class Get_Workday_Account_ResponseType extends AbstractStructBase
{
    /**
     * The Request_References
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Get_Workday_Account_Request_ReferencesType[]
     */
    public $Request_References;
    /**
     * The Request_Criteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Get_Workday_Account_Request_CriteriaType[]
     */
    public $Request_Criteria;
    /**
     * The Response_Filter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Response_FilterType[]
     */
    public $Response_Filter;
    /**
     * The Response_Group
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Workday_Account_Response_GroupType[]
     */
    public $Response_Group;
    /**
     * The Response_Results
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Response_ResultsType[]
     */
    public $Response_Results;
    /**
     * The Response_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Get_Workday_Account_Response_DataType[]
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
     * Constructor method for Get_Workday_Account_ResponseType
     * @uses Get_Workday_Account_ResponseType::setRequest_References()
     * @uses Get_Workday_Account_ResponseType::setRequest_Criteria()
     * @uses Get_Workday_Account_ResponseType::setResponse_Filter()
     * @uses Get_Workday_Account_ResponseType::setResponse_Group()
     * @uses Get_Workday_Account_ResponseType::setResponse_Results()
     * @uses Get_Workday_Account_ResponseType::setResponse_Data()
     * @uses Get_Workday_Account_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Get_Workday_Account_Request_ReferencesType[] $request_References
     * @param \WorkdayWsdl\\StructType\Get_Workday_Account_Request_CriteriaType[] $request_Criteria
     * @param \WorkdayWsdl\\StructType\Response_FilterType[] $response_Filter
     * @param \WorkdayWsdl\\StructType\Workday_Account_Response_GroupType[] $response_Group
     * @param \WorkdayWsdl\\StructType\Response_ResultsType[] $response_Results
     * @param \WorkdayWsdl\\StructType\Get_Workday_Account_Response_DataType[] $response_Data
     * @param string $version
     */
    public function __construct(array $request_References = array(), array $request_Criteria = array(), array $response_Filter = array(), array $response_Group = array(), array $response_Results = array(), array $response_Data = array(), $version = null)
    {
        $this
            ->setRequest_References($request_References)
            ->setRequest_Criteria($request_Criteria)
            ->setResponse_Filter($response_Filter)
            ->setResponse_Group($response_Group)
            ->setResponse_Results($response_Results)
            ->setResponse_Data($response_Data)
            ->setVersion($version);
    }
    /**
     * Get Request_References value
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_Request_ReferencesType[]|null
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
        foreach ($values as $get_Workday_Account_ResponseTypeRequest_ReferencesItem) {
            // validation for constraint: itemType
            if (!$get_Workday_Account_ResponseTypeRequest_ReferencesItem instanceof \WorkdayWsdl\\StructType\Get_Workday_Account_Request_ReferencesType) {
                $invalidValues[] = is_object($get_Workday_Account_ResponseTypeRequest_ReferencesItem) ? get_class($get_Workday_Account_ResponseTypeRequest_ReferencesItem) : sprintf('%s(%s)', gettype($get_Workday_Account_ResponseTypeRequest_ReferencesItem), var_export($get_Workday_Account_ResponseTypeRequest_ReferencesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Request_References property can only contain items of type \WorkdayWsdl\\StructType\Get_Workday_Account_Request_ReferencesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Request_References value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Get_Workday_Account_Request_ReferencesType[] $request_References
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_ResponseType
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
     * @param \WorkdayWsdl\\StructType\Get_Workday_Account_Request_ReferencesType $item
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_ResponseType
     */
    public function addToRequest_References(\WorkdayWsdl\\StructType\Get_Workday_Account_Request_ReferencesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Get_Workday_Account_Request_ReferencesType) {
            throw new \InvalidArgumentException(sprintf('The Request_References property can only contain items of type \WorkdayWsdl\\StructType\Get_Workday_Account_Request_ReferencesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Request_References[] = $item;
        return $this;
    }
    /**
     * Get Request_Criteria value
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_Request_CriteriaType[]|null
     */
    public function getRequest_Criteria()
    {
        return $this->Request_Criteria;
    }
    /**
     * This method is responsible for validating the values passed to the setRequest_Criteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequest_Criteria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRequest_CriteriaForArrayConstraintsFromSetRequest_Criteria(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $get_Workday_Account_ResponseTypeRequest_CriteriaItem) {
            // validation for constraint: itemType
            if (!$get_Workday_Account_ResponseTypeRequest_CriteriaItem instanceof \WorkdayWsdl\\StructType\Get_Workday_Account_Request_CriteriaType) {
                $invalidValues[] = is_object($get_Workday_Account_ResponseTypeRequest_CriteriaItem) ? get_class($get_Workday_Account_ResponseTypeRequest_CriteriaItem) : sprintf('%s(%s)', gettype($get_Workday_Account_ResponseTypeRequest_CriteriaItem), var_export($get_Workday_Account_ResponseTypeRequest_CriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Request_Criteria property can only contain items of type \WorkdayWsdl\\StructType\Get_Workday_Account_Request_CriteriaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Request_Criteria value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Get_Workday_Account_Request_CriteriaType[] $request_Criteria
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_ResponseType
     */
    public function setRequest_Criteria(array $request_Criteria = array())
    {
        // validation for constraint: array
        if ('' !== ($request_CriteriaArrayErrorMessage = self::validateRequest_CriteriaForArrayConstraintsFromSetRequest_Criteria($request_Criteria))) {
            throw new \InvalidArgumentException($request_CriteriaArrayErrorMessage, __LINE__);
        }
        $this->Request_Criteria = $request_Criteria;
        return $this;
    }
    /**
     * Add item to Request_Criteria value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Get_Workday_Account_Request_CriteriaType $item
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_ResponseType
     */
    public function addToRequest_Criteria(\WorkdayWsdl\\StructType\Get_Workday_Account_Request_CriteriaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Get_Workday_Account_Request_CriteriaType) {
            throw new \InvalidArgumentException(sprintf('The Request_Criteria property can only contain items of type \WorkdayWsdl\\StructType\Get_Workday_Account_Request_CriteriaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Request_Criteria[] = $item;
        return $this;
    }
    /**
     * Get Response_Filter value
     * @return \WorkdayWsdl\\StructType\Response_FilterType[]|null
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
        foreach ($values as $get_Workday_Account_ResponseTypeResponse_FilterItem) {
            // validation for constraint: itemType
            if (!$get_Workday_Account_ResponseTypeResponse_FilterItem instanceof \WorkdayWsdl\\StructType\Response_FilterType) {
                $invalidValues[] = is_object($get_Workday_Account_ResponseTypeResponse_FilterItem) ? get_class($get_Workday_Account_ResponseTypeResponse_FilterItem) : sprintf('%s(%s)', gettype($get_Workday_Account_ResponseTypeResponse_FilterItem), var_export($get_Workday_Account_ResponseTypeResponse_FilterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Response_Filter property can only contain items of type \WorkdayWsdl\\StructType\Response_FilterType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Response_Filter value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Response_FilterType[] $response_Filter
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_ResponseType
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
     * @param \WorkdayWsdl\\StructType\Response_FilterType $item
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_ResponseType
     */
    public function addToResponse_Filter(\WorkdayWsdl\\StructType\Response_FilterType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Response_FilterType) {
            throw new \InvalidArgumentException(sprintf('The Response_Filter property can only contain items of type \WorkdayWsdl\\StructType\Response_FilterType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Response_Filter[] = $item;
        return $this;
    }
    /**
     * Get Response_Group value
     * @return \WorkdayWsdl\\StructType\Workday_Account_Response_GroupType[]|null
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
        foreach ($values as $get_Workday_Account_ResponseTypeResponse_GroupItem) {
            // validation for constraint: itemType
            if (!$get_Workday_Account_ResponseTypeResponse_GroupItem instanceof \WorkdayWsdl\\StructType\Workday_Account_Response_GroupType) {
                $invalidValues[] = is_object($get_Workday_Account_ResponseTypeResponse_GroupItem) ? get_class($get_Workday_Account_ResponseTypeResponse_GroupItem) : sprintf('%s(%s)', gettype($get_Workday_Account_ResponseTypeResponse_GroupItem), var_export($get_Workday_Account_ResponseTypeResponse_GroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Response_Group property can only contain items of type \WorkdayWsdl\\StructType\Workday_Account_Response_GroupType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Response_Group value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Workday_Account_Response_GroupType[] $response_Group
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_ResponseType
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
     * @param \WorkdayWsdl\\StructType\Workday_Account_Response_GroupType $item
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_ResponseType
     */
    public function addToResponse_Group(\WorkdayWsdl\\StructType\Workday_Account_Response_GroupType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Workday_Account_Response_GroupType) {
            throw new \InvalidArgumentException(sprintf('The Response_Group property can only contain items of type \WorkdayWsdl\\StructType\Workday_Account_Response_GroupType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Response_Group[] = $item;
        return $this;
    }
    /**
     * Get Response_Results value
     * @return \WorkdayWsdl\\StructType\Response_ResultsType[]|null
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
        foreach ($values as $get_Workday_Account_ResponseTypeResponse_ResultsItem) {
            // validation for constraint: itemType
            if (!$get_Workday_Account_ResponseTypeResponse_ResultsItem instanceof \WorkdayWsdl\\StructType\Response_ResultsType) {
                $invalidValues[] = is_object($get_Workday_Account_ResponseTypeResponse_ResultsItem) ? get_class($get_Workday_Account_ResponseTypeResponse_ResultsItem) : sprintf('%s(%s)', gettype($get_Workday_Account_ResponseTypeResponse_ResultsItem), var_export($get_Workday_Account_ResponseTypeResponse_ResultsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Response_Results property can only contain items of type \WorkdayWsdl\\StructType\Response_ResultsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Response_Results value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Response_ResultsType[] $response_Results
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_ResponseType
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
     * @param \WorkdayWsdl\\StructType\Response_ResultsType $item
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_ResponseType
     */
    public function addToResponse_Results(\WorkdayWsdl\\StructType\Response_ResultsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Response_ResultsType) {
            throw new \InvalidArgumentException(sprintf('The Response_Results property can only contain items of type \WorkdayWsdl\\StructType\Response_ResultsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Response_Results[] = $item;
        return $this;
    }
    /**
     * Get Response_Data value
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_Response_DataType[]|null
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
        foreach ($values as $get_Workday_Account_ResponseTypeResponse_DataItem) {
            // validation for constraint: itemType
            if (!$get_Workday_Account_ResponseTypeResponse_DataItem instanceof \WorkdayWsdl\\StructType\Get_Workday_Account_Response_DataType) {
                $invalidValues[] = is_object($get_Workday_Account_ResponseTypeResponse_DataItem) ? get_class($get_Workday_Account_ResponseTypeResponse_DataItem) : sprintf('%s(%s)', gettype($get_Workday_Account_ResponseTypeResponse_DataItem), var_export($get_Workday_Account_ResponseTypeResponse_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Response_Data property can only contain items of type \WorkdayWsdl\\StructType\Get_Workday_Account_Response_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Response_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Get_Workday_Account_Response_DataType[] $response_Data
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_ResponseType
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
     * @param \WorkdayWsdl\\StructType\Get_Workday_Account_Response_DataType $item
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_ResponseType
     */
    public function addToResponse_Data(\WorkdayWsdl\\StructType\Get_Workday_Account_Response_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Get_Workday_Account_Response_DataType) {
            throw new \InvalidArgumentException(sprintf('The Response_Data property can only contain items of type \WorkdayWsdl\\StructType\Get_Workday_Account_Response_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Get_Workday_Account_ResponseType
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
