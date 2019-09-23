<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Former_Worker_Documents_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request for Get Former Worker Document
 * @subpackage Structs
 */
class Get_Former_Worker_Documents_RequestType extends AbstractStructBase
{
    /**
     * The Request_References
     * Meta information extracted from the WSDL
     * - documentation: Reference for Former Worker Document Request
     * - minOccurs: 0
     * @var \StructType\Former_Worker_Attachment_Request_ReferencesType
     */
    public $Request_References;
    /**
     * The Request_Critieria
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Former_Worker_Attachment_Request_Criteria__EL_Type
     */
    public $Request_Critieria;
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
     * @var \StructType\Former_Worker_Attachment_Response_GroupType
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
     * Constructor method for Get_Former_Worker_Documents_RequestType
     * @uses Get_Former_Worker_Documents_RequestType::setRequest_References()
     * @uses Get_Former_Worker_Documents_RequestType::setRequest_Critieria()
     * @uses Get_Former_Worker_Documents_RequestType::setResponse_Filter()
     * @uses Get_Former_Worker_Documents_RequestType::setResponse_Group()
     * @uses Get_Former_Worker_Documents_RequestType::setVersion()
     * @param \StructType\Former_Worker_Attachment_Request_ReferencesType $request_References
     * @param \StructType\Former_Worker_Attachment_Request_Criteria__EL_Type $request_Critieria
     * @param \StructType\Response_FilterType $response_Filter
     * @param \StructType\Former_Worker_Attachment_Response_GroupType $response_Group
     * @param string $version
     */
    public function __construct(\StructType\Former_Worker_Attachment_Request_ReferencesType $request_References = null, \StructType\Former_Worker_Attachment_Request_Criteria__EL_Type $request_Critieria = null, \StructType\Response_FilterType $response_Filter = null, \StructType\Former_Worker_Attachment_Response_GroupType $response_Group = null, $version = null)
    {
        $this
            ->setRequest_References($request_References)
            ->setRequest_Critieria($request_Critieria)
            ->setResponse_Filter($response_Filter)
            ->setResponse_Group($response_Group)
            ->setVersion($version);
    }
    /**
     * Get Request_References value
     * @return \StructType\Former_Worker_Attachment_Request_ReferencesType|null
     */
    public function getRequest_References()
    {
        return $this->Request_References;
    }
    /**
     * Set Request_References value
     * @param \StructType\Former_Worker_Attachment_Request_ReferencesType $request_References
     * @return \StructType\Get_Former_Worker_Documents_RequestType
     */
    public function setRequest_References(\StructType\Former_Worker_Attachment_Request_ReferencesType $request_References = null)
    {
        $this->Request_References = $request_References;
        return $this;
    }
    /**
     * Get Request_Critieria value
     * @return \StructType\Former_Worker_Attachment_Request_Criteria__EL_Type|null
     */
    public function getRequest_Critieria()
    {
        return $this->Request_Critieria;
    }
    /**
     * Set Request_Critieria value
     * @param \StructType\Former_Worker_Attachment_Request_Criteria__EL_Type $request_Critieria
     * @return \StructType\Get_Former_Worker_Documents_RequestType
     */
    public function setRequest_Critieria(\StructType\Former_Worker_Attachment_Request_Criteria__EL_Type $request_Critieria = null)
    {
        $this->Request_Critieria = $request_Critieria;
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
     * @return \StructType\Get_Former_Worker_Documents_RequestType
     */
    public function setResponse_Filter(\StructType\Response_FilterType $response_Filter = null)
    {
        $this->Response_Filter = $response_Filter;
        return $this;
    }
    /**
     * Get Response_Group value
     * @return \StructType\Former_Worker_Attachment_Response_GroupType|null
     */
    public function getResponse_Group()
    {
        return $this->Response_Group;
    }
    /**
     * Set Response_Group value
     * @param \StructType\Former_Worker_Attachment_Response_GroupType $response_Group
     * @return \StructType\Get_Former_Worker_Documents_RequestType
     */
    public function setResponse_Group(\StructType\Former_Worker_Attachment_Response_GroupType $response_Group = null)
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
     * @return \StructType\Get_Former_Worker_Documents_RequestType
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
     * @return \StructType\Get_Former_Worker_Documents_RequestType
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
