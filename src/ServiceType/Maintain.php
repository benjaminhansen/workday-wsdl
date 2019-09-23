<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Maintain ServiceType
 * @subpackage Services
 */
class Maintain extends AbstractSoapClientBase
{
    /**
     * Sets the Workday_Common_Header SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \StructType\Workday_Common_HeaderType $workday_Common_Header
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderWorkday_Common_Header(\StructType\Workday_Common_HeaderType $workday_Common_Header, $nameSpace = 'urn:com.workday/bsvc', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'Workday_Common_Header', $workday_Common_Header, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named Maintain_Contact_Information
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Creates or updates contact information for a person. Contact information includes email addresses, physical addresses, phone numbers, web addresses, and instant messenger contact information. Changes are routed through existing
     * Contact Information for Person Event business process for necessary approvals.Submitted contact information by default replaces existing entries of the same type. For example, submitting a new email address replaces the current email address. Set the
     * Add Only flag to override this default behavior. When this flag is set to true, existing information is not replaced in cases where multiple entries are allowed.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Maintain_Contact_Information_for_Person_Event_RequestType $body
     * @return \StructType\Maintain_Contact_Information_for_Person_Event_ResponseType|bool
     */
    public function Maintain_Contact_Information(\StructType\Maintain_Contact_Information_for_Person_Event_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Maintain_Contact_Information($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Maintain_Committee_Definition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a Committee Definition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Maintain_Committee_Definition_RequestType $body
     * @return \StructType\Maintain_Committee_Definition_ResponseType|bool
     */
    public function Maintain_Committee_Definition(\StructType\Maintain_Committee_Definition_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Maintain_Committee_Definition($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\Maintain_Committee_Definition_ResponseType|\StructType\Maintain_Contact_Information_for_Person_Event_ResponseType
     */
    public function getResult()
    {
        return parent::getResult();
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
