<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Assign_User-Based_Security_Group_RequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Get Request wrapper for retrieving User-Based Security Groups and Workday Accounts that are members of the group
 * @subpackage Structs
 */
class Get_Assign_User_Based_Security_Group_RequestType extends AbstractStructBase
{
    /**
     * The Request_References
     * Meta information extracted from the WSDL
     * - choice: Request_References | Request_Criteria
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_ReferencesType[]
     */
    public $Request_References;
    /**
     * The Request_Criteria
     * Meta information extracted from the WSDL
     * - choice: Request_References | Request_Criteria
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_CriteriaType[]
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
     * @var \WorkdayWsdl\\StructType\User_Based_Security_Group_Reference_Only_Response_GroupType[]
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
     * Constructor method for Get_Assign_User-Based_Security_Group_RequestType
     * @uses Get_Assign_User_Based_Security_Group_RequestType::setRequest_References()
     * @uses Get_Assign_User_Based_Security_Group_RequestType::setRequest_Criteria()
     * @uses Get_Assign_User_Based_Security_Group_RequestType::setResponse_Filter()
     * @uses Get_Assign_User_Based_Security_Group_RequestType::setResponse_Group()
     * @uses Get_Assign_User_Based_Security_Group_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_ReferencesType[] $request_References
     * @param \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_CriteriaType[] $request_Criteria
     * @param \WorkdayWsdl\\StructType\Response_FilterType[] $response_Filter
     * @param \WorkdayWsdl\\StructType\User_Based_Security_Group_Reference_Only_Response_GroupType[] $response_Group
     * @param string $version
     */
    public function __construct(array $request_References = array(), array $request_Criteria = array(), array $response_Filter = array(), array $response_Group = array(), $version = null)
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
     * @return \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_ReferencesType[]|null
     */
    public function getRequest_References()
    {
        return isset($this->Request_References) ? $this->Request_References : null;
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
        foreach ($values as $get_Assign_User_Based_Security_Group_RequestTypeRequest_ReferencesItem) {
            // validation for constraint: itemType
            if (!$get_Assign_User_Based_Security_Group_RequestTypeRequest_ReferencesItem instanceof \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_ReferencesType) {
                $invalidValues[] = is_object($get_Assign_User_Based_Security_Group_RequestTypeRequest_ReferencesItem) ? get_class($get_Assign_User_Based_Security_Group_RequestTypeRequest_ReferencesItem) : sprintf('%s(%s)', gettype($get_Assign_User_Based_Security_Group_RequestTypeRequest_ReferencesItem), var_export($get_Assign_User_Based_Security_Group_RequestTypeRequest_ReferencesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Request_References property can only contain items of type \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_ReferencesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
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
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_ReferencesType[] $request_References
     * @return \WorkdayWsdl\\StructType\Get_Assign_User_Based_Security_Group_RequestType
     */
    public function setRequest_References(array $request_References = array())
    {
        // validation for constraint: array
        if ('' !== ($request_ReferencesArrayErrorMessage = self::validateRequest_ReferencesForArrayConstraintsFromSetRequest_References($request_References))) {
            throw new \InvalidArgumentException($request_ReferencesArrayErrorMessage, __LINE__);
        }
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
     * This method is responsible for validating the value passed to the addToRequest_References method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToRequest_References method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToRequest_References($value)
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
     * Add item to Request_References value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_ReferencesType $item
     * @return \WorkdayWsdl\\StructType\Get_Assign_User_Based_Security_Group_RequestType
     */
    public function addToRequest_References(\WorkdayWsdl\\StructType\User_Based_Security_Group_Request_ReferencesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_ReferencesType) {
            throw new \InvalidArgumentException(sprintf('The Request_References property can only contain items of type \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_ReferencesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(Request_References, Request_Criteria)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToRequest_References($item))) {
            throw new \InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        $this->Request_References[] = $item;
        return $this;
    }
    /**
     * Get Request_Criteria value
     * @return \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_CriteriaType[]|null
     */
    public function getRequest_Criteria()
    {
        return isset($this->Request_Criteria) ? $this->Request_Criteria : null;
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
        foreach ($values as $get_Assign_User_Based_Security_Group_RequestTypeRequest_CriteriaItem) {
            // validation for constraint: itemType
            if (!$get_Assign_User_Based_Security_Group_RequestTypeRequest_CriteriaItem instanceof \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_CriteriaType) {
                $invalidValues[] = is_object($get_Assign_User_Based_Security_Group_RequestTypeRequest_CriteriaItem) ? get_class($get_Assign_User_Based_Security_Group_RequestTypeRequest_CriteriaItem) : sprintf('%s(%s)', gettype($get_Assign_User_Based_Security_Group_RequestTypeRequest_CriteriaItem), var_export($get_Assign_User_Based_Security_Group_RequestTypeRequest_CriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Request_Criteria property can only contain items of type \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_CriteriaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
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
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_CriteriaType[] $request_Criteria
     * @return \WorkdayWsdl\\StructType\Get_Assign_User_Based_Security_Group_RequestType
     */
    public function setRequest_Criteria(array $request_Criteria = array())
    {
        // validation for constraint: array
        if ('' !== ($request_CriteriaArrayErrorMessage = self::validateRequest_CriteriaForArrayConstraintsFromSetRequest_Criteria($request_Criteria))) {
            throw new \InvalidArgumentException($request_CriteriaArrayErrorMessage, __LINE__);
        }
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
     * This method is responsible for validating the value passed to the addToRequest_Criteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToRequest_Criteria method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToRequest_Criteria($value)
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
     * Add item to Request_Criteria value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_CriteriaType $item
     * @return \WorkdayWsdl\\StructType\Get_Assign_User_Based_Security_Group_RequestType
     */
    public function addToRequest_Criteria(\WorkdayWsdl\\StructType\User_Based_Security_Group_Request_CriteriaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_CriteriaType) {
            throw new \InvalidArgumentException(sprintf('The Request_Criteria property can only contain items of type \WorkdayWsdl\\StructType\User_Based_Security_Group_Request_CriteriaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(Request_References, Request_Criteria)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToRequest_Criteria($item))) {
            throw new \InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
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
        foreach ($values as $get_Assign_User_Based_Security_Group_RequestTypeResponse_FilterItem) {
            // validation for constraint: itemType
            if (!$get_Assign_User_Based_Security_Group_RequestTypeResponse_FilterItem instanceof \WorkdayWsdl\\StructType\Response_FilterType) {
                $invalidValues[] = is_object($get_Assign_User_Based_Security_Group_RequestTypeResponse_FilterItem) ? get_class($get_Assign_User_Based_Security_Group_RequestTypeResponse_FilterItem) : sprintf('%s(%s)', gettype($get_Assign_User_Based_Security_Group_RequestTypeResponse_FilterItem), var_export($get_Assign_User_Based_Security_Group_RequestTypeResponse_FilterItem, true));
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
     * @return \WorkdayWsdl\\StructType\Get_Assign_User_Based_Security_Group_RequestType
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
     * @return \WorkdayWsdl\\StructType\Get_Assign_User_Based_Security_Group_RequestType
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
     * @return \WorkdayWsdl\\StructType\User_Based_Security_Group_Reference_Only_Response_GroupType[]|null
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
        foreach ($values as $get_Assign_User_Based_Security_Group_RequestTypeResponse_GroupItem) {
            // validation for constraint: itemType
            if (!$get_Assign_User_Based_Security_Group_RequestTypeResponse_GroupItem instanceof \WorkdayWsdl\\StructType\User_Based_Security_Group_Reference_Only_Response_GroupType) {
                $invalidValues[] = is_object($get_Assign_User_Based_Security_Group_RequestTypeResponse_GroupItem) ? get_class($get_Assign_User_Based_Security_Group_RequestTypeResponse_GroupItem) : sprintf('%s(%s)', gettype($get_Assign_User_Based_Security_Group_RequestTypeResponse_GroupItem), var_export($get_Assign_User_Based_Security_Group_RequestTypeResponse_GroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Response_Group property can only contain items of type \WorkdayWsdl\\StructType\User_Based_Security_Group_Reference_Only_Response_GroupType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Response_Group value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\User_Based_Security_Group_Reference_Only_Response_GroupType[] $response_Group
     * @return \WorkdayWsdl\\StructType\Get_Assign_User_Based_Security_Group_RequestType
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
     * @param \WorkdayWsdl\\StructType\User_Based_Security_Group_Reference_Only_Response_GroupType $item
     * @return \WorkdayWsdl\\StructType\Get_Assign_User_Based_Security_Group_RequestType
     */
    public function addToResponse_Group(\WorkdayWsdl\\StructType\User_Based_Security_Group_Reference_Only_Response_GroupType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\User_Based_Security_Group_Reference_Only_Response_GroupType) {
            throw new \InvalidArgumentException(sprintf('The Response_Group property can only contain items of type \WorkdayWsdl\\StructType\User_Based_Security_Group_Reference_Only_Response_GroupType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \WorkdayWsdl\\StructType\Get_Assign_User_Based_Security_Group_RequestType
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
     * @return \WorkdayWsdl\\StructType\Get_Assign_User_Based_Security_Group_RequestType
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
