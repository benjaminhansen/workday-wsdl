<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Pronouns_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The request to get pronoun data for a worker.
 * @subpackage Structs
 */
class Get_Pronouns_RequestType extends AbstractStructBase
{
    /**
     * The Request_References
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Pronoun of the person.
     * - choice: Request_References | Request_Criteria
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Pronoun_Request_ReferencesType
     */
    public $Request_References;
    /**
     * The Request_Criteria
     * Meta information extracted from the WSDL
     * - documentation: The Criteria of the request
     * - choice: Request_References | Request_Criteria
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Pronoun_Request_CriteriaType
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
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Get_Pronouns_RequestType
     * @uses Get_Pronouns_RequestType::setRequest_References()
     * @uses Get_Pronouns_RequestType::setRequest_Criteria()
     * @uses Get_Pronouns_RequestType::setResponse_Filter()
     * @uses Get_Pronouns_RequestType::setVersion()
     * @param \StructType\Pronoun_Request_ReferencesType $request_References
     * @param \StructType\Pronoun_Request_CriteriaType $request_Criteria
     * @param \StructType\Response_FilterType $response_Filter
     * @param string $version
     */
    public function __construct(\StructType\Pronoun_Request_ReferencesType $request_References = null, \StructType\Pronoun_Request_CriteriaType $request_Criteria = null, \StructType\Response_FilterType $response_Filter = null, $version = null)
    {
        $this
            ->setRequest_References($request_References)
            ->setRequest_Criteria($request_Criteria)
            ->setResponse_Filter($response_Filter)
            ->setVersion($version);
    }
    /**
     * Get Request_References value
     * @return \StructType\Pronoun_Request_ReferencesType|null
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
     * @param \StructType\Pronoun_Request_ReferencesType $request_References
     * @return \StructType\Get_Pronouns_RequestType
     */
    public function setRequest_References(\StructType\Pronoun_Request_ReferencesType $request_References = null)
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
     * @return \StructType\Pronoun_Request_CriteriaType|null
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
     * @param \StructType\Pronoun_Request_CriteriaType $request_Criteria
     * @return \StructType\Get_Pronouns_RequestType
     */
    public function setRequest_Criteria(\StructType\Pronoun_Request_CriteriaType $request_Criteria = null)
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
     * @return \StructType\Response_FilterType|null
     */
    public function getResponse_Filter()
    {
        return $this->Response_Filter;
    }
    /**
     * Set Response_Filter value
     * @param \StructType\Response_FilterType $response_Filter
     * @return \StructType\Get_Pronouns_RequestType
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
     * @return \StructType\Get_Pronouns_RequestType
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
     * @return \StructType\Get_Pronouns_RequestType
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
