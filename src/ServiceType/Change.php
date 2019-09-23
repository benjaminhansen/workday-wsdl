<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Change ServiceType
 * @subpackage Services
 */
class Change extends AbstractSoapClientBase
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
     * Method to call the operation originally named Change_Background_Check_Status
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Updates the employee's background check status by adding a new instance of Background Check Descriptor, which stores Status Date, Status, and Comment.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Background_Check_Status_RequestType $body
     * @return \StructType\Change_Background_Check_Status_ResponseType|bool
     */
    public function Change_Background_Check_Status(\StructType\Change_Background_Check_Status_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Background_Check_Status($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Change_Personal_Information
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Sets a worker's personal information. Uses the Personal Information Change business process.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Personal_Information_RequestType $body
     * @return \StructType\Change_Personal_Information_ResponseType|bool
     */
    public function Change_Personal_Information(\StructType\Change_Personal_Information_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Personal_Information($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Change_Government_IDs
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service allows the updating of Government IDs for a worker.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Government_IDs_RequestType $body
     * @return \StructType\Change_Government_IDs_ResponseType|bool
     */
    public function Change_Government_IDs(\StructType\Change_Government_IDs_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Government_IDs($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Change_Legal_Name
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Sets a worker's legal name. Uses the Legal Name Change business process.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Legal_Name_RequestType $body
     * @return \StructType\Change_Legal_Name_ResponseType|bool
     */
    public function Change_Legal_Name(\StructType\Change_Legal_Name_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Legal_Name($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Change_Preferred_Name
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Sets a worker's preferred name. Uses the Preferred Name Change business process.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Preferred_Name_RequestType $body
     * @return \StructType\Change_Preferred_Name_ResponseType|bool
     */
    public function Change_Preferred_Name(\StructType\Change_Preferred_Name_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Preferred_Name($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Change_Additional_Names
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Sets a worker's additional names. Does not use an event.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Additional_Names_RequestType $body
     * @return \StructType\Change_Additional_Names_ResponseType|bool
     */
    public function Change_Additional_Names(\StructType\Change_Additional_Names_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Additional_Names($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Change_Passports_and_Visas
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service allows the updating of Passports and Visas for a worker.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Passports_and_Visas_RequestType $body
     * @return \StructType\Change_Passports_and_Visas_ResponseType|bool
     */
    public function Change_Passports_and_Visas(\StructType\Change_Passports_and_Visas_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Passports_and_Visas($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Change_Licenses
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service allows the updating of Licenses for a worker.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Licenses_RequestType $body
     * @return \StructType\Change_Licenses_ResponseType|bool
     */
    public function Change_Licenses(\StructType\Change_Licenses_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Licenses($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Change_Other_IDs
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service allows the updating of Other IDs for a worker.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Other_IDs_RequestType $body
     * @return \StructType\Change_Other_IDs_ResponseType|bool
     */
    public function Change_Other_IDs(\StructType\Change_Other_IDs_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Other_IDs($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Change_Emergency_Contacts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service allows the updating of emergency contacts for a person.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Emergency_Contacts_RequestType $body
     * @return \StructType\Change_Emergency_Contacts_ResponseType|bool
     */
    public function Change_Emergency_Contacts(\StructType\Change_Emergency_Contacts_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Emergency_Contacts($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Change_Veteran_Status_Identification
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service assigns Veteran Status Identifications for an Employee.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Veteran_Status_Identification_RequestType $body
     * @return \StructType\Change_Veteran_Status_Identification_ResponseType|bool
     */
    public function Change_Veteran_Status_Identification(\StructType\Change_Veteran_Status_Identification_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Veteran_Status_Identification($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Change_Business_Title
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Sets a ~worker's~ personal business title. Uses the Change Business Title business process. If a ~worker~ has two jobs, one of the jobs must be specified for the ~worker~.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Business_Title_RequestType $body
     * @return \StructType\Change_Business_Title_ResponseType|bool
     */
    public function Change_Business_Title(\StructType\Change_Business_Title_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Business_Title($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Change_Work_Space
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Assign Work Space Location to a Position. Uses the Change Work Space business process.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Work_Space_RequestType $body
     * @return \StructType\Change_Work_Space_ResponseType|bool
     */
    public function Change_Work_Space(\StructType\Change_Work_Space_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Work_Space($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Change_Work_Contact_Information
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Creates or updates work contact information for a person. Contact information includes email addresses, physical addresses, phone numbers, web addresses, and instant messenger contact information. Changes are routed through existing
     * Work Contact Change business process for necessary approvals.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Work_Contact_Information_RequestType $body
     * @return \StructType\Change_Work_Contact_Information_ResponseType|bool
     */
    public function Change_Work_Contact_Information(\StructType\Change_Work_Contact_Information_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Work_Contact_Information($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Change_Home_Contact_Information
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Creates or updates home contact information for a person. Contact information includes email addresses, physical addresses, phone numbers, web addresses, and instant messenger contact information. Changes are routed through existing
     * Home Contact Change business process for necessary approvals.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Home_Contact_Information_RequestType $body
     * @return \StructType\Change_Home_Contact_Information_ResponseType|bool
     */
    public function Change_Home_Contact_Information(\StructType\Change_Home_Contact_Information_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Home_Contact_Information($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Change_Person_Photo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service adds or updates a person photo.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Change_Person_Photo_RequestType $body
     * @return \StructType\Change_Person_Photo_ResponseType|bool
     */
    public function Change_Person_Photo(\StructType\Change_Person_Photo_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Change_Person_Photo($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\Change_Additional_Names_ResponseType|\StructType\Change_Background_Check_Status_ResponseType|\StructType\Change_Business_Title_ResponseType|\StructType\Change_Emergency_Contacts_ResponseType|\StructType\Change_Government_IDs_ResponseType|\StructType\Change_Home_Contact_Information_ResponseType|\StructType\Change_Legal_Name_ResponseType|\StructType\Change_Licenses_ResponseType|\StructType\Change_Other_IDs_ResponseType|\StructType\Change_Passports_and_Visas_ResponseType|\StructType\Change_Personal_Information_ResponseType|\StructType\Change_Person_Photo_ResponseType|\StructType\Change_Preferred_Name_ResponseType|\StructType\Change_Veteran_Status_Identification_ResponseType|\StructType\Change_Work_Contact_Information_ResponseType|\StructType\Change_Work_Space_ResponseType
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
