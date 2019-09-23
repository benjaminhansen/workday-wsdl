<?php

namespace WorkdayWsdl\\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Inactivate ServiceType
 * @subpackage Services
 */
class Inactivate extends AbstractSoapClientBase
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
     * Method to call the operation originally named Inactivate_Organization
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \WorkdayWsdl\\StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation will inactivate an Organization. If you do not choose to 'Keep in Hierarchy' then the organization being inactivated will be moved out of the hierarchy. Default behavior for inactive subordinates / included
     * organizations is that they remain as is. Default behavior for active subordinates is that they are moved to the superior unless you specify another organization to move them to. If the organization has subordinates or included content that you do not
     * want to move to its superior or another organization, you can use the DISSOLVE_ORGANIZATION_STRUCTURE web service to disconnect it from the hierarchy and remove its subordinates and included organizations. In this web service, the
     * Integration_ID_Reference must be the external system id.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \WorkdayWsdl\\StructType\Organization_InactivateType $body
     * @return void|bool
     */
    public function Inactivate_Organization(\WorkdayWsdl\\StructType\Organization_InactivateType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Inactivate_Organization($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return void
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
