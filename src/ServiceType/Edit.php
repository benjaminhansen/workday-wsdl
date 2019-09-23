<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Edit ServiceType
 * @subpackage Services
 */
class Edit extends AbstractSoapClientBase
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
     * Method to call the operation originally named Edit_Named_Professorship
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Put Task for Edit named Professorship
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Edit_Named_Professorship_RequestType $body
     * @return \StructType\Edit_Named_Professorship_ResponseType|bool
     */
    public function Edit_Named_Professorship(\StructType\Edit_Named_Professorship_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Edit_Named_Professorship($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Edit_Academic_Appointment_Track_Additional_Data
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service operation is best suited for the initial creation of the effective-dated custom object data on the appointment track. Subsequent updates are best performed via the UI using the online Update Academic Appointment
     * business process. If this operation is used for updates, it should be noted that it will require the full set of all the custom object data every time any sort of update is performed.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Edit_Academic_Appointment_Track_Additional_Data_RequestType $body
     * @return \StructType\Edit_Academic_Appointment_Track_Additional_Data_ResponseType|bool
     */
    public function Edit_Academic_Appointment_Track_Additional_Data(\StructType\Edit_Academic_Appointment_Track_Additional_Data_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Edit_Academic_Appointment_Track_Additional_Data($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\Edit_Academic_Appointment_Track_Additional_Data_ResponseType|\StructType\Edit_Named_Professorship_ResponseType
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
