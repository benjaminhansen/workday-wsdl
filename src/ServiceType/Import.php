<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Import ServiceType
 * @subpackage Services
 */
class Import extends AbstractSoapClientBase
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
     * Method to call the operation originally named Import_Universal_Identifiers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Import Universal Identifiers. It's required to put a Person Reference. Either place a manual Universal ID or no Universal ID, if no Universal ID is supplied it will use the Universal ID generator.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Import_Universal_Identifier_RequestType $body
     * @return \StructType\Put_Import_Process_ResponseType|bool
     */
    public function Import_Universal_Identifiers(\StructType\Import_Universal_Identifier_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Import_Universal_Identifiers($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Import_Change_Work_Contact_Information
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This is a high volume version of the Change Work Contact Information web service. Creates or updates work contact information for a person or persons. Contact information includes email addresses, physical addresses, phone numbers,
     * web addresses, and instant messenger contact information. Changes are routed through existing Work Contact Change business process for necessary approvals.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Import_Change_Work_Contact_Information_RequestType $body
     * @return \StructType\Put_Import_Process_ResponseType|bool
     */
    public function Import_Change_Work_Contact_Information(\StructType\Import_Change_Work_Contact_Information_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Import_Change_Work_Contact_Information($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Import_Person_Photos
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This is a high volume version of the Change Person Photo web service. Creates or updates the photo for a person or persons. Changes are routed through existing Photo Change business process for necessary approvals.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Import_Person_Photo_RequestType $body
     * @return \StructType\Put_Import_Process_ResponseType|bool
     */
    public function Import_Person_Photos(\StructType\Import_Person_Photo_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Import_Person_Photos($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Import_Change_Home_Contact_Information
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This is a high volume version of the Change Home Contact Information web service. Creates or updates home contact information for a person or persons. Contact information includes email addresses, physical addresses, phone numbers,
     * web addresses, and instant messenger contact information. Changes are routed through existing Home Contact Change business process for necessary approvals.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Import_Change_Home_Contact_Information_RequestType $body
     * @return \StructType\Put_Import_Process_ResponseType|bool
     */
    public function Import_Change_Home_Contact_Information(\StructType\Import_Change_Home_Contact_Information_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Import_Change_Home_Contact_Information($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\Put_Import_Process_ResponseType
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
