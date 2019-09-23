<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Reactivate ServiceType
 * @subpackage Services
 */
class Reactivate extends AbstractSoapClientBase
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
     * Method to call the operation originally named Reactivate_Organization
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation reactivates an organization based on the specified reference ID or WID. The organization must already be inactive or be inactive in the future. The system automatically sets the reactivation effective date to the same
     * date as the date of the last inactivation so that there are no gaps when an active organization was inactive. This web service can currently be used to reactivate these organization types: Supervisory, Company, Cost Center, Region, Matrix, Pay Group,
     * Retiree, Custom Org, Company Hierarchy, Cost Center Hierarchy, Location Hierarchy, Region Hierarchy.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Reactivate_Organization_RequestType $body
     * @return \StructType\Reactivate_Organization_ResponseType|bool
     */
    public function Reactivate_Organization(\StructType\Reactivate_Organization_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Reactivate_Organization($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\Reactivate_Organization_ResponseType
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
