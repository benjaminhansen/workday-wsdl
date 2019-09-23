<?php

namespace WorkdayWsdl\\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Assign ServiceType
 * @subpackage Services
 */
class Assign extends AbstractSoapClientBase
{
    /**
     * Sets the Workday_Common_Header SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \WorkdayWsdl\\StructType\Workday_Common_HeaderType $workday_Common_Header
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderWorkday_Common_Header(\WorkdayWsdl\\StructType\Workday_Common_HeaderType $workday_Common_Header, $nameSpace = 'urn:com.workday/bsvc', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'Workday_Common_Header', $workday_Common_Header, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named
     * Assign_Employee_Collective_Agreement_Event
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \WorkdayWsdl\\StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Creates or Updates Collective Agreement for a Worker. The Collective Agreement includes Applicable Factors and Factor options.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_RequestType $body
     * @return \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_ResponseType|bool
     */
    public function Assign_Employee_Collective_Agreement_Event(\WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Assign_Employee_Collective_Agreement_Event($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Assign_Establishment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \WorkdayWsdl\\StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Manually assign establishments to workers' positions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WorkdayWsdl\\StructType\Assign_Establishment_RequestType $body
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_ResponseType|bool
     */
    public function Assign_Establishment(\WorkdayWsdl\\StructType\Assign_Establishment_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Assign_Establishment($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Assign_Members_to_Custom_Organization
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \WorkdayWsdl\\StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Directly assign or unassign worker positions as members to a custom organization. The custom organization type must be configured in 'Maintain Organization Types' as 'Allow Reorganization Tasks (like Move Workers, Assign Workers)' =
     * Y and 'Position Unique' = N. The Reorganization determines the effective date that a position is added as a member. In the UI, the equivalent task is executed via related action off the custom organization: Reorganization > Assign Workers > Select
     * Workers by Individual.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_RequestType $body
     * @return \WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_ResponseType|bool
     */
    public function Assign_Members_to_Custom_Organization(\WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Assign_Members_to_Custom_Organization($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_ResponseType|\WorkdayWsdl\\StructType\Assign_Establishment_ResponseType|\WorkdayWsdl\\StructType\Assign_Members_to_Custom_Organization_ResponseType
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
