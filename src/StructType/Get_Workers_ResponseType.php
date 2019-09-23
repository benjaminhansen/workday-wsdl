<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Workers_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Get Workers Response. The response element has to match the Operation Name.
 * @subpackage Structs
 */
class Get_Workers_ResponseType extends AbstractStructBase
{
    /**
     * The Request_References
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Request_ReferencesType
     */
    public $Request_References;
    /**
     * The Request_Criteria
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Request_CriteriaType
     */
    public $Request_Criteria;
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
     * - minOccurs: 0
     * @var \StructType\Worker_Response_GroupType
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
     * @var \StructType\Workers_Response_DataType
     */
    public $Response_Data;
    /**
     * The Invalid_Reference_ID_Response
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Invalid_Reference_ID_ResponseType[]
     */
    public $Invalid_Reference_ID_Response;
    /**
     * Constructor method for Get_Workers_ResponseType
     * @uses Get_Workers_ResponseType::setRequest_References()
     * @uses Get_Workers_ResponseType::setRequest_Criteria()
     * @uses Get_Workers_ResponseType::setResponse_Filter()
     * @uses Get_Workers_ResponseType::setResponse_Group()
     * @uses Get_Workers_ResponseType::setResponse_Results()
     * @uses Get_Workers_ResponseType::setResponse_Data()
     * @uses Get_Workers_ResponseType::setInvalid_Reference_ID_Response()
     * @param \StructType\Worker_Request_ReferencesType $request_References
     * @param \StructType\Worker_Request_CriteriaType $request_Criteria
     * @param \StructType\Response_FilterType $response_Filter
     * @param \StructType\Worker_Response_GroupType $response_Group
     * @param \StructType\Response_ResultsType $response_Results
     * @param \StructType\Workers_Response_DataType $response_Data
     * @param \StructType\Invalid_Reference_ID_ResponseType[] $invalid_Reference_ID_Response
     */
    public function __construct(\StructType\Worker_Request_ReferencesType $request_References = null, \StructType\Worker_Request_CriteriaType $request_Criteria = null, \StructType\Response_FilterType $response_Filter = null, \StructType\Worker_Response_GroupType $response_Group = null, \StructType\Response_ResultsType $response_Results = null, \StructType\Workers_Response_DataType $response_Data = null, array $invalid_Reference_ID_Response = array())
    {
        $this
            ->setRequest_References($request_References)
            ->setRequest_Criteria($request_Criteria)
            ->setResponse_Filter($response_Filter)
            ->setResponse_Group($response_Group)
            ->setResponse_Results($response_Results)
            ->setResponse_Data($response_Data)
            ->setInvalid_Reference_ID_Response($invalid_Reference_ID_Response);
    }
    /**
     * Get Request_References value
     * @return \StructType\Worker_Request_ReferencesType|null
     */
    public function getRequest_References()
    {
        return $this->Request_References;
    }
    /**
     * Set Request_References value
     * @param \StructType\Worker_Request_ReferencesType $request_References
     * @return \StructType\Get_Workers_ResponseType
     */
    public function setRequest_References(\StructType\Worker_Request_ReferencesType $request_References = null)
    {
        $this->Request_References = $request_References;
        return $this;
    }
    /**
     * Get Request_Criteria value
     * @return \StructType\Worker_Request_CriteriaType|null
     */
    public function getRequest_Criteria()
    {
        return $this->Request_Criteria;
    }
    /**
     * Set Request_Criteria value
     * @param \StructType\Worker_Request_CriteriaType $request_Criteria
     * @return \StructType\Get_Workers_ResponseType
     */
    public function setRequest_Criteria(\StructType\Worker_Request_CriteriaType $request_Criteria = null)
    {
        $this->Request_Criteria = $request_Criteria;
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
     * @return \StructType\Get_Workers_ResponseType
     */
    public function setResponse_Filter(\StructType\Response_FilterType $response_Filter = null)
    {
        $this->Response_Filter = $response_Filter;
        return $this;
    }
    /**
     * Get Response_Group value
     * @return \StructType\Worker_Response_GroupType|null
     */
    public function getResponse_Group()
    {
        return $this->Response_Group;
    }
    /**
     * Set Response_Group value
     * @param \StructType\Worker_Response_GroupType $response_Group
     * @return \StructType\Get_Workers_ResponseType
     */
    public function setResponse_Group(\StructType\Worker_Response_GroupType $response_Group = null)
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
     * @return \StructType\Get_Workers_ResponseType
     */
    public function setResponse_Results(\StructType\Response_ResultsType $response_Results = null)
    {
        $this->Response_Results = $response_Results;
        return $this;
    }
    /**
     * Get Response_Data value
     * @return \StructType\Workers_Response_DataType|null
     */
    public function getResponse_Data()
    {
        return $this->Response_Data;
    }
    /**
     * Set Response_Data value
     * @param \StructType\Workers_Response_DataType $response_Data
     * @return \StructType\Get_Workers_ResponseType
     */
    public function setResponse_Data(\StructType\Workers_Response_DataType $response_Data = null)
    {
        $this->Response_Data = $response_Data;
        return $this;
    }
    /**
     * Get Invalid_Reference_ID_Response value
     * @return \StructType\Invalid_Reference_ID_ResponseType[]|null
     */
    public function getInvalid_Reference_ID_Response()
    {
        return $this->Invalid_Reference_ID_Response;
    }
    /**
     * This method is responsible for validating the values passed to the setInvalid_Reference_ID_Response method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvalid_Reference_ID_Response method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvalid_Reference_ID_ResponseForArrayConstraintsFromSetInvalid_Reference_ID_Response(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $get_Workers_ResponseTypeInvalid_Reference_ID_ResponseItem) {
            // validation for constraint: itemType
            if (!$get_Workers_ResponseTypeInvalid_Reference_ID_ResponseItem instanceof \StructType\Invalid_Reference_ID_ResponseType) {
                $invalidValues[] = is_object($get_Workers_ResponseTypeInvalid_Reference_ID_ResponseItem) ? get_class($get_Workers_ResponseTypeInvalid_Reference_ID_ResponseItem) : sprintf('%s(%s)', gettype($get_Workers_ResponseTypeInvalid_Reference_ID_ResponseItem), var_export($get_Workers_ResponseTypeInvalid_Reference_ID_ResponseItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Invalid_Reference_ID_Response property can only contain items of type \StructType\Invalid_Reference_ID_ResponseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Invalid_Reference_ID_Response value
     * @throws \InvalidArgumentException
     * @param \StructType\Invalid_Reference_ID_ResponseType[] $invalid_Reference_ID_Response
     * @return \StructType\Get_Workers_ResponseType
     */
    public function setInvalid_Reference_ID_Response(array $invalid_Reference_ID_Response = array())
    {
        // validation for constraint: array
        if ('' !== ($invalid_Reference_ID_ResponseArrayErrorMessage = self::validateInvalid_Reference_ID_ResponseForArrayConstraintsFromSetInvalid_Reference_ID_Response($invalid_Reference_ID_Response))) {
            throw new \InvalidArgumentException($invalid_Reference_ID_ResponseArrayErrorMessage, __LINE__);
        }
        $this->Invalid_Reference_ID_Response = $invalid_Reference_ID_Response;
        return $this;
    }
    /**
     * Add item to Invalid_Reference_ID_Response value
     * @throws \InvalidArgumentException
     * @param \StructType\Invalid_Reference_ID_ResponseType $item
     * @return \StructType\Get_Workers_ResponseType
     */
    public function addToInvalid_Reference_ID_Response(\StructType\Invalid_Reference_ID_ResponseType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Invalid_Reference_ID_ResponseType) {
            throw new \InvalidArgumentException(sprintf('The Invalid_Reference_ID_Response property can only contain items of type \StructType\Invalid_Reference_ID_ResponseType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Invalid_Reference_ID_Response[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Get_Workers_ResponseType
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
