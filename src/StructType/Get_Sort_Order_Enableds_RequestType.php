<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Sort_Order_Enableds_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Get Sort Order Enableds request element.
 * @subpackage Structs
 */
class Get_Sort_Order_Enableds_RequestType extends AbstractStructBase
{
    /**
     * The Request_References
     * Meta information extracted from the WSDL
     * - documentation: Sort Order Enabled instance references.
     * - choice: Request_References
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Sort_Order_Enabled_Request_ReferencesType
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
     * Constructor method for Get_Sort_Order_Enableds_RequestType
     * @uses Get_Sort_Order_Enableds_RequestType::setRequest_References()
     * @uses Get_Sort_Order_Enableds_RequestType::setResponse_Filter()
     * @uses Get_Sort_Order_Enableds_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Sort_Order_Enabled_Request_ReferencesType $request_References
     * @param \WorkdayWsdl\\StructType\Response_FilterType $response_Filter
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Sort_Order_Enabled_Request_ReferencesType $request_References = null, \WorkdayWsdl\\StructType\Response_FilterType $response_Filter = null, $version = null)
    {
        $this
            ->setRequest_References($request_References)
            ->setResponse_Filter($response_Filter)
            ->setVersion($version);
    }
    /**
     * Get Request_References value
     * @return \WorkdayWsdl\\StructType\Sort_Order_Enabled_Request_ReferencesType|null
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
     * @param \WorkdayWsdl\\StructType\Sort_Order_Enabled_Request_ReferencesType $request_References
     * @return \WorkdayWsdl\\StructType\Get_Sort_Order_Enableds_RequestType
     */
    public function setRequest_References(\WorkdayWsdl\\StructType\Sort_Order_Enabled_Request_ReferencesType $request_References = null)
    {
        // validation for constraint: choice(Request_References)
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
     * @return \WorkdayWsdl\\StructType\Get_Sort_Order_Enableds_RequestType
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
     * @return \WorkdayWsdl\\StructType\Get_Sort_Order_Enableds_RequestType
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
     * @return \WorkdayWsdl\\StructType\Get_Sort_Order_Enableds_RequestType
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
