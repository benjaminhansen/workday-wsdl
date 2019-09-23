<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Workers_Compensation_Codes_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains request reference, filter and response group for getting Workers' Compensation Code data
 * @subpackage Structs
 */
class Get_Workers_Compensation_Codes_RequestType extends AbstractStructBase
{
    /**
     * The Request_References
     * Meta information extracted from the WSDL
     * - documentation: Get Workers' Compensation Code request references
     * - choice: Request_References | Request_Criteria
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_ReferencesType
     */
    public $Request_References;
    /**
     * The Request_Criteria
     * Meta information extracted from the WSDL
     * - choice: Request_References | Request_Criteria
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_CriteriaType
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
     * - documentation: Element containing Workers' Compensation Code response grouping options
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Workers_Compensation_Code_Response_GroupType[]
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
     * Constructor method for Get_Workers_Compensation_Codes_RequestType
     * @uses Get_Workers_Compensation_Codes_RequestType::setRequest_References()
     * @uses Get_Workers_Compensation_Codes_RequestType::setRequest_Criteria()
     * @uses Get_Workers_Compensation_Codes_RequestType::setResponse_Filter()
     * @uses Get_Workers_Compensation_Codes_RequestType::setResponse_Group()
     * @uses Get_Workers_Compensation_Codes_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_ReferencesType $request_References
     * @param \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_CriteriaType $request_Criteria
     * @param \WorkdayWsdl\\StructType\Response_FilterType $response_Filter
     * @param \WorkdayWsdl\\StructType\Workers_Compensation_Code_Response_GroupType[] $response_Group
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_ReferencesType $request_References = null, \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_CriteriaType $request_Criteria = null, \WorkdayWsdl\\StructType\Response_FilterType $response_Filter = null, array $response_Group = array(), $version = null)
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
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_ReferencesType|null
     */
    public function getRequest_References()
    {
        return isset($this->Request_References) ? $this->Request_References : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRequest_References method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequest_References method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRequest_ReferencesForChoiceConstraintsFromSetRequest_References($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Request_Criteria',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Request_References can\'t be set as the property %s is already set. Only one property must be set among these properties: Request_References, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Request_References value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_ReferencesType $request_References
     * @return \WorkdayWsdl\\StructType\Get_Workers_Compensation_Codes_RequestType
     */
    public function setRequest_References(\WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_ReferencesType $request_References = null)
    {
        // validation for constraint: choice(Request_References, Request_Criteria)
        if ('' !== ($request_ReferencesChoiceErrorMessage = self::validateRequest_ReferencesForChoiceConstraintsFromSetRequest_References($request_References))) {
            throw new \InvalidArgumentException($request_ReferencesChoiceErrorMessage, __LINE__);
        }
        if (is_null($request_References) || (is_array($request_References) && empty($request_References))) {
            unset($this->Request_References);
        } else {
            $this->Request_References = $request_References;
        }
        return $this;
    }
    /**
     * Get Request_Criteria value
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_CriteriaType|null
     */
    public function getRequest_Criteria()
    {
        return isset($this->Request_Criteria) ? $this->Request_Criteria : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRequest_Criteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequest_Criteria method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRequest_CriteriaForChoiceConstraintsFromSetRequest_Criteria($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Request_References',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Request_Criteria can\'t be set as the property %s is already set. Only one property must be set among these properties: Request_Criteria, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Request_Criteria value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_CriteriaType $request_Criteria
     * @return \WorkdayWsdl\\StructType\Get_Workers_Compensation_Codes_RequestType
     */
    public function setRequest_Criteria(\WorkdayWsdl\\StructType\Workers_Compensation_Code_Request_CriteriaType $request_Criteria = null)
    {
        // validation for constraint: choice(Request_References, Request_Criteria)
        if ('' !== ($request_CriteriaChoiceErrorMessage = self::validateRequest_CriteriaForChoiceConstraintsFromSetRequest_Criteria($request_Criteria))) {
            throw new \InvalidArgumentException($request_CriteriaChoiceErrorMessage, __LINE__);
        }
        if (is_null($request_Criteria) || (is_array($request_Criteria) && empty($request_Criteria))) {
            unset($this->Request_Criteria);
        } else {
            $this->Request_Criteria = $request_Criteria;
        }
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
     * @return \WorkdayWsdl\\StructType\Get_Workers_Compensation_Codes_RequestType
     */
    public function setResponse_Filter(\WorkdayWsdl\\StructType\Response_FilterType $response_Filter = null)
    {
        $this->Response_Filter = $response_Filter;
        return $this;
    }
    /**
     * Get Response_Group value
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Code_Response_GroupType[]|null
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
        foreach ($values as $get_Workers_Compensation_Codes_RequestTypeResponse_GroupItem) {
            // validation for constraint: itemType
            if (!$get_Workers_Compensation_Codes_RequestTypeResponse_GroupItem instanceof \WorkdayWsdl\\StructType\Workers_Compensation_Code_Response_GroupType) {
                $invalidValues[] = is_object($get_Workers_Compensation_Codes_RequestTypeResponse_GroupItem) ? get_class($get_Workers_Compensation_Codes_RequestTypeResponse_GroupItem) : sprintf('%s(%s)', gettype($get_Workers_Compensation_Codes_RequestTypeResponse_GroupItem), var_export($get_Workers_Compensation_Codes_RequestTypeResponse_GroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Response_Group property can only contain items of type \WorkdayWsdl\\StructType\Workers_Compensation_Code_Response_GroupType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Response_Group value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Workers_Compensation_Code_Response_GroupType[] $response_Group
     * @return \WorkdayWsdl\\StructType\Get_Workers_Compensation_Codes_RequestType
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
     * @param \WorkdayWsdl\\StructType\Workers_Compensation_Code_Response_GroupType $item
     * @return \WorkdayWsdl\\StructType\Get_Workers_Compensation_Codes_RequestType
     */
    public function addToResponse_Group(\WorkdayWsdl\\StructType\Workers_Compensation_Code_Response_GroupType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Workers_Compensation_Code_Response_GroupType) {
            throw new \InvalidArgumentException(sprintf('The Response_Group property can only contain items of type \WorkdayWsdl\\StructType\Workers_Compensation_Code_Response_GroupType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \WorkdayWsdl\\StructType\Get_Workers_Compensation_Codes_RequestType
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
     * @return \WorkdayWsdl\\StructType\Get_Workers_Compensation_Codes_RequestType
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
