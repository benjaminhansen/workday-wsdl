<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
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
     * Method to call the operation originally named Get_Organization
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves data related to an Organization (e.g. Staffing Configuration, Structure, etc.).
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Organization_GetType $body
     * @return \StructType\OrganizationType|bool
     */
    public function Get_Organization(\StructType\Organization_GetType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Organization($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Employee_Personal_Info
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves data related to an Employee and his/her Personal (e.g. Biographic, Demographic, etc.) information.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Employee_Personal_Info_GetType $body
     * @return \StructType\Employee_Personal_InfoType|bool
     */
    public function Get_Employee_Personal_Info(\StructType\Employee_Personal_Info_GetType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Employee_Personal_Info($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Get_Contingent_Worker_Contract_Info
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves data related to a Contingent Worker and his/her Contract information.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Contingent_Worker_Contract_Info_GetType $body
     * @return \StructType\Contingent_Worker_Contract_InfoType|bool
     */
    public function Get_Contingent_Worker_Contract_Info(\StructType\Contingent_Worker_Contract_Info_GetType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Contingent_Worker_Contract_Info($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Worker_Profile
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves a subset of data related to a Worker (e.g. Employee and Contingent Worker) and his/her Employment/Contract, Personal and Compensation information.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Worker_Profile_GetType $body
     * @return \StructType\Worker_ProfileType|bool
     */
    public function Get_Worker_Profile(\StructType\Worker_Profile_GetType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Worker_Profile($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Business_Site
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: DEPRECATED: This web service operation is deprecated. Please use the Get Locations web service operation instead. This operation retrieves data related to an Business Site.1
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Business_Site_GetType $body
     * @return \StructType\Business_SiteType|bool
     */
    public function Get_Business_Site(\StructType\Business_Site_GetType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Business_Site($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Employee_Employment_Info
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves data related to an Employee and his/her Employment (e.g. Position, Job, Status, etc.) information.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Employee_Employment_Info_GetType $body
     * @return \StructType\Employee_Employment_InfoType|bool
     */
    public function Get_Employee_Employment_Info(\StructType\Employee_Employment_Info_GetType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Employee_Employment_Info($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Get_Contingent_Worker_Personal_Info
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves data related to a Contingent Worker and his/her Personal (e.g. Biographic, Demographic, etc.) information.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Contingent_Worker_Personal_Info_GetType $body
     * @return \StructType\Contingent_Worker_Personal_InfoType|bool
     */
    public function Get_Contingent_Worker_Personal_Info(\StructType\Contingent_Worker_Personal_Info_GetType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Contingent_Worker_Personal_Info($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Employee_Related_Persons
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves data related to an Employee's Related Persons (e.g. Dependents, Beneficiaries, etc.) and each of his/her Personal (e.g. Biographic, Demographic, etc.) information.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Employee_Related_Persons_GetType $body
     * @return \StructType\Employee_Related_PersonsType|bool
     */
    public function Get_Employee_Related_Persons(\StructType\Employee_Related_Persons_GetType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Employee_Related_Persons($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Locations
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves data related to a Location for the specified criteria. The request criteria can be for a single entry based on a Reference ID, Location Name or all Locations will be retrieved if no criteria is specified.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Locations_RequestType $body
     * @return \StructType\Get_Locations_ResponseType|bool
     */
    public function Get_Locations(\StructType\Get_Locations_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Locations($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Previous_System_Job_History
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns a worker's job or position history imported from a previous system; that is, the user's system prior to migrating to Workday.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Previous_System_Job_History_RequestType $body
     * @return \StructType\Get_Previous_System_Job_History_ResponseType|bool
     */
    public function Get_Previous_System_Job_History(\StructType\Get_Previous_System_Job_History_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Previous_System_Job_History($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Server_Timestamp
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves Workday's current system datetime.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Server_Timestamp_GetType $body
     * @return \StructType\Server_TimestampType|bool
     */
    public function Get_Server_Timestamp(\StructType\Server_Timestamp_GetType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Server_Timestamp($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Employee
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves data related to an Employee and his/her Employment, Personal and Compensation.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Employee_GetType $body
     * @return \StructType\EmployeeType|bool
     */
    public function Get_Employee(\StructType\Employee_GetType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Employee($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Contingent_Worker
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves data related to a Contingent Worker and his/her Contract and Personal information.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Contingent_Worker_GetType $body
     * @return \StructType\Contingent_WorkerType|bool
     */
    public function Get_Contingent_Worker(\StructType\Contingent_Worker_GetType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Contingent_Worker($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Worker_Event_History
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves references to all Events (created through workflow) associated with a Worker based on the Event Type and Date parameters.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Worker_Event_History_GetType $body
     * @return \StructType\Worker_Event_HistoryType|bool
     */
    public function Get_Worker_Event_History(\StructType\Worker_Event_History_GetType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Worker_Event_History($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Company_Insider_Types
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation will get Company Insider Types for the specified criteria. The request criteria can be for a single entry based on a Reference ID or all Company Insider Types will be retrieved if no criteria is specified. Company
     * Insider Type data includes the Reference ID, the name and the description.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Company_Insider_Types_RequestType $body
     * @return \StructType\Get_Company_Insider_Types_ResponseType|bool
     */
    public function Get_Company_Insider_Types(\StructType\Get_Company_Insider_Types_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Company_Insider_Types($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Employee_Image
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Get a photographic image of this employee.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Employee_Image_GetType $body
     * @return \StructType\Employee_ImageType|bool
     */
    public function Get_Employee_Image(\StructType\Employee_Image_GetType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Employee_Image($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Work_Shifts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves data related to a Work Shift.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Work_Shifts_RequestType $body
     * @return \StructType\Get_Work_Shifts_ResponseType|bool
     */
    public function Get_Work_Shifts(\StructType\Get_Work_Shifts_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Work_Shifts($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Job_Categories
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation will get Job Categories for the specified criteria. The request criteria can be for a single entry based on a Reference ID or all Job Categories will be retrieved if no criteria is specified. Job Category data includes
     * the Reference ID, the name and the description and inactive flag.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Job_Categories_RequestType $body
     * @return \StructType\Get_Job_Categories_ResponseType|bool
     */
    public function Get_Job_Categories(\StructType\Get_Job_Categories_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Job_Categories($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Workers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns public and private information for specified workers.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Workers_RequestType $body
     * @return \StructType\Get_Workers_ResponseRootType|bool
     */
    public function Get_Workers(\StructType\Get_Workers_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Workers($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Organizations
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns organization information for a type of organization. If the request does not specify an organization, the operation returns information for all organizations.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Organizations_RequestType $body
     * @return \StructType\Get_Organizations_ResponseType|bool
     */
    public function Get_Organizations(\StructType\Get_Organizations_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Organizations($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Workers_Compensation_Codes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation will get Workers' Compensation Codes for the specified criteria. The request criteria can be for a single entry based on a Reference ID; a specified country, country region, or business site; or all Workers'
     * Compensation Codes will be retrieved if no criteria is specified.Workers' Compensation Code data includes the code, name, business site, country, country region and inactive flag.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Workers_Compensation_Codes_RequestType $body
     * @return \StructType\Get_Workers_Compensation_Codes_ResponseType|bool
     */
    public function Get_Workers_Compensation_Codes(\StructType\Get_Workers_Compensation_Codes_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Workers_Compensation_Codes($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Holiday_Calendars
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns Holiday Calendars based on criteria.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Holiday_Calendars_RequestType $body
     * @return \StructType\Get_Holiday_Calendars_ResponseType|bool
     */
    public function Get_Holiday_Calendars(\StructType\Get_Holiday_Calendars_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Holiday_Calendars($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Work_Schedule_Calendars
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: View Work Schedule Calendars.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Work_Schedule_Calendars_RequestType $body
     * @return \StructType\Get_Work_Schedule_Calendars_ResponseType|bool
     */
    public function Get_Work_Schedule_Calendars(\StructType\Get_Work_Schedule_Calendars_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Work_Schedule_Calendars($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Get_Supervisory_Organization_Assignment_Restrictions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves the Organization Assignment Default Values and Allowed Values for Supervisory Organizations.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Organization_Assignment_Restrictions_RequestType $body
     * @return \StructType\Get_Organization_Assignment_Restrictions_ResponseType|bool
     */
    public function Get_Supervisory_Organization_Assignment_Restrictions(\StructType\Get_Organization_Assignment_Restrictions_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Supervisory_Organization_Assignment_Restrictions($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Frequencies
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves data related to Frequencies.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Frequencies_RequestType $body
     * @return \StructType\Get_Frequencies_ResponseType|bool
     */
    public function Get_Frequencies(\StructType\Get_Frequencies_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Frequencies($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Disabilities
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves the disabilities that are currently defined.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Disabilities_RequestType $body
     * @return \StructType\Get_Disabilities_ResponseType|bool
     */
    public function Get_Disabilities(\StructType\Get_Disabilities_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Disabilities($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Job_Profiles
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves data related to a Job Profile for the specified criteria. The request criteria can be for a single entry based on a Reference ID, management level, job level, job family, job category, company insider type,
     * job classification, workers compensation code, pay rate type , Job Exempt location context, work hours profiles or all Job Profiles will be retrieved if no criteria is specified. The data returned is organized into different response groups which can
     * be include or not.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Job_Profiles_RequestType $body
     * @return \StructType\Get_Job_Profiles_ResponseType|bool
     */
    public function Get_Job_Profiles(\StructType\Get_Job_Profiles_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Job_Profiles($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Ethnicities
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves data related to Ethnicities.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Ethnicities_RequestType $body
     * @return \StructType\Get_Ethnicities_ResponseType|bool
     */
    public function Get_Ethnicities(\StructType\Get_Ethnicities_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Ethnicities($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Training_Types
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves Training Types defined in the system.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Training_Types_RequestType $body
     * @return \StructType\Get_Training_Types_ResponseType|bool
     */
    public function Get_Training_Types(\StructType\Get_Training_Types_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Training_Types($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Job_Classification_Groups
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns job classification group data.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Job_Classification_Groups_RequestType $body
     * @return \StructType\Get_Job_Classification_Groups_ResponseType|bool
     */
    public function Get_Job_Classification_Groups(\StructType\Get_Job_Classification_Groups_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Job_Classification_Groups($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Job_Families
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns job family data.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Job_Families_RequestType $body
     * @return \StructType\Get_Job_Families_ResponseType|bool
     */
    public function Get_Job_Families(\StructType\Get_Job_Families_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Job_Families($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Job_Family_Groups
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns job family and job family group data.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Job_Family_Groups_RequestType $body
     * @return \StructType\Get_Job_Family_Groups_ResponseType|bool
     */
    public function Get_Job_Family_Groups(\StructType\Get_Job_Family_Groups_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Job_Family_Groups($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Get_User-Based_Security_Group_Assignments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Retrieves Workday Account and it's assigned user-based security groups.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Assign_User_Based_Security_Groups_RequestType $body
     * @return \StructType\Get_Assign_User_Based_Security_Groups_ResponseType|bool
     */
    public function Get_User_Based_Security_Group_Assignments(\StructType\Get_Assign_User_Based_Security_Groups_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->__call('Get_User-Based_Security_Group_Assignments', array(
                $body,
            )));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Difficulty_to_Fill
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Gets the difficulty level of filling a job profile.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Difficulty_to_Fill_RequestType $body
     * @return \StructType\Get_Difficulty_to_Fill_ResponseType|bool
     */
    public function Get_Difficulty_to_Fill(\StructType\Get_Difficulty_to_Fill_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Difficulty_to_Fill($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Worker_Photos
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Gets a Photo Image of the Worker
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Worker_Photos_RequestType $body
     * @return \StructType\Get_Worker_Photos_ResponseType|bool
     */
    public function Get_Worker_Photos(\StructType\Get_Worker_Photos_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Worker_Photos($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Academic_Ranks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Get Academic Rank Web Service
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Academic_Ranks_RequestType $body
     * @return \StructType\Get_Academic_Ranks_ResponseType|bool
     */
    public function Get_Academic_Ranks(\StructType\Get_Academic_Ranks_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Academic_Ranks($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Provisioning_Groups
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service operation will get provisioning groups. It will return the provisioning groups and their associated information excluding any provisioning group assignments. The request can be for a single transaction based on
     * reference, or all transactions can be retrieved if no reference is specified.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Provisioning_Groups_RequestType $body
     * @return \StructType\Provisioning_Groups_ResponseType|bool
     */
    public function Get_Provisioning_Groups(\StructType\Get_Provisioning_Groups_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Provisioning_Groups($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Provisioning_Group_Assignments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service operation will get assignments of persons to provisioning groups. For each assignment a reference to the provisioning group, the person, the worker and status information will be returned. The request can be made for
     * a list of persons as specified in the request criteria. Alternatively a list of workers can be specified there. Requests can also be made for individual assignments by specifying an assignment reference. If no request references or criteria are
     * specified, the assignments for all persons will be returned.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Provisioning_Group_Assignments_RequestType $body
     * @return \StructType\Provisioning_Group_Assignments_ResponseType|bool
     */
    public function Get_Provisioning_Group_Assignments(\StructType\Get_Provisioning_Group_Assignments_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Provisioning_Group_Assignments($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Search_Settings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation will get information for search settings.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Search_Settings_RequestType $body
     * @return \StructType\Get_Search_Settings_ResponseType|bool
     */
    public function Get_Search_Settings(\StructType\Get_Search_Settings_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Search_Settings($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Service_Center_Representatives
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Get Service Center Representatives.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Service_Center_Representatives_RequestType $body
     * @return \StructType\Get_Service_Center_Representatives_ResponseType|bool
     */
    public function Get_Service_Center_Representatives(\StructType\Get_Service_Center_Representatives_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Service_Center_Representatives($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Get_Service_Center_Representative_Workday_Accounts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Get Service Center Representative Workday Accounts.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Service_Center_Representative_Workday_Accounts_RequestType $body
     * @return \StructType\Get_Service_Center_Representative_Workday_Accounts_ResponseType|bool
     */
    public function Get_Service_Center_Representative_Workday_Accounts(\StructType\Get_Service_Center_Representative_Workday_Accounts_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Service_Center_Representative_Workday_Accounts($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Academic_Units
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns detailed information for Academic Units.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Academic_Units_RequestType $body
     * @return \StructType\Get_Academic_Units_ResponseType|bool
     */
    public function Get_Academic_Units(\StructType\Get_Academic_Units_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Academic_Units($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Academic_Unit_Hierarchies
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation is used to retrieve Academic Unit Hierarchies.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Academic_Unit_Hierarchies_RequestType $body
     * @return \StructType\Get_Academic_Unit_Hierarchies_ResponseType|bool
     */
    public function Get_Academic_Unit_Hierarchies(\StructType\Get_Academic_Unit_Hierarchies_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Academic_Unit_Hierarchies($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Political_Affiliations
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves the political affiliations that are currently defined.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Political_Affiliations_RequestType $body
     * @return \StructType\Get_Political_Affiliations_ResponseType|bool
     */
    public function Get_Political_Affiliations(\StructType\Get_Political_Affiliations_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Political_Affiliations($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Former_Workers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves Former Workers. Former Worker Storage is for tracking data for individuals that have previously been employed but were not included as a Workday worker. Data includes personal details, contact information,
     * and job details as of termination date.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Former_Workers_RequestType $body
     * @return \StructType\Get_Former_Workers_ResponseType|bool
     */
    public function Get_Former_Workers(\StructType\Get_Former_Workers_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Former_Workers($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Change_Government_IDs
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This public web service request gets government IDs for a worker. The response can be used as input to the web service request Change Government IDs.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Change_Government_IDs_RequestType $body
     * @return \StructType\Get_Change_Government_IDs_ResponseType|bool
     */
    public function Get_Change_Government_IDs(\StructType\Get_Change_Government_IDs_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Change_Government_IDs($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Change_Passports_and_Visas
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This public web service request gets passport and visas for a worker. The response can be used as input to the web service request Change Passports and Visas.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Change_Passports_and_Visas_RequestType $body
     * @return \StructType\Get_Change_Passports_and_Visas_ResponseType|bool
     */
    public function Get_Change_Passports_and_Visas(\StructType\Get_Change_Passports_and_Visas_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Change_Passports_and_Visas($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Change_Licenses
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This public web service request gets licenses for a worker. The response can be used as input to the web service request Change Licenses.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Change_Licenses_RequestType $body
     * @return \StructType\Get_Change_Licenses_ResponseType|bool
     */
    public function Get_Change_Licenses(\StructType\Get_Change_Licenses_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Change_Licenses($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Change_Other_IDs
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This public web service request gets custom IDs for a worker. The response can be used as input to the web service request Change Other IDs.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Change_Other_IDs_RequestType $body
     * @return \StructType\Get_Change_Other_IDs_ResponseType|bool
     */
    public function Get_Change_Other_IDs(\StructType\Get_Change_Other_IDs_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Change_Other_IDs($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Change_Preferred_Name
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This public web service request gets preferred name for a worker. The response can be used as input to the web service request Change Preferred Name. All response fields are secured to their specific granular domains.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Change_Preferred_Name_RequestType $body
     * @return \StructType\Get_Change_Preferred_Name_ResponseType|bool
     */
    public function Get_Change_Preferred_Name(\StructType\Get_Change_Preferred_Name_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Change_Preferred_Name($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Change_Legal_Name
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This public web service request gets the legal name for a worker. The response can be used as input to the web service request Change Legal Name. All response fields are secured to their specific granular domains.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Change_Legal_Name_RequestType $body
     * @return \StructType\Get_Change_Legal_Name_ResponseType|bool
     */
    public function Get_Change_Legal_Name(\StructType\Get_Change_Legal_Name_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Change_Legal_Name($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Social_Benefits_Localities
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves the social benefits localities that are currently defined.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Social_Benefits_Localities_RequestType $body
     * @return \StructType\Get_Social_Benefits_Localities_ResponseType|bool
     */
    public function Get_Social_Benefits_Localities(\StructType\Get_Social_Benefits_Localities_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Social_Benefits_Localities($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Former_Worker_Documents
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns former worker document data
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Former_Worker_Documents_RequestType $body
     * @return \StructType\Get_Former_Worker_Documents_ResponseType|bool
     */
    public function Get_Former_Worker_Documents(\StructType\Get_Former_Worker_Documents_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Former_Worker_Documents($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Get_Assign_User-Based_Security_Group
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Retrieves User-Based Security Group and Workday Accounts assigned to the security group.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Assign_User_Based_Security_Group_RequestType $body
     * @return \StructType\Get_Assign_User_Based_Security_Group_ResponseType|bool
     */
    public function Get_Assign_User_Based_Security_Group(\StructType\Get_Assign_User_Based_Security_Group_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->__call('Get_Assign_User-Based_Security_Group', array(
                $body,
            )));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Get_Location_Hierarchy_Organization_Assignments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns Organization Assignments for Location Hierarchies.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Location_Hierarchy_Organization_Assignments_RequestType $body
     * @return \StructType\Get_Location_Hierarchy_Organization_Assignments_ResponseType|bool
     */
    public function Get_Location_Hierarchy_Organization_Assignments(\StructType\Get_Location_Hierarchy_Organization_Assignments_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Location_Hierarchy_Organization_Assignments($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Organization_Reference_IDs
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This task can be used to retrieve Organization Reference ID for an Organization.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Organization_Reference_IDs_RequestType $body
     * @return \StructType\Get_Organization_Reference_IDs_ResponseType|bool
     */
    public function Get_Organization_Reference_IDs(\StructType\Get_Organization_Reference_IDs_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Organization_Reference_IDs($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Committee_Types
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves Committee Types
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Committee_Types_RequestType $body
     * @return \StructType\Get_Committee_Types_ResponseType|bool
     */
    public function Get_Committee_Types(\StructType\Get_Committee_Types_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Committee_Types($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Get_Committee_Classification_Groups
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves Committee Classification Groups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Committee_Classification_Groups_RequestType $body
     * @return \StructType\Get_Committee_Classification_Groups_ResponseType|bool
     */
    public function Get_Committee_Classification_Groups(\StructType\Get_Committee_Classification_Groups_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Committee_Classification_Groups($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Committee_Classifications
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves Committee Classifications
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Committee_Classifications_RequestType $body
     * @return \StructType\Get_Committee_Classifications_ResponseType|bool
     */
    public function Get_Committee_Classifications(\StructType\Get_Committee_Classifications_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Committee_Classifications($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Committee_Membership_Types
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves Committee Member Types.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Committee_Membership_Types_RequestType $body
     * @return \StructType\Get_Committee_Membership_Types_ResponseType|bool
     */
    public function Get_Committee_Membership_Types(\StructType\Get_Committee_Membership_Types_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Committee_Membership_Types($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Committee_Definition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation gets the current committee(s) definition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Committee_Definition_RequestType $body
     * @return \StructType\Get_Committee_Definition_ResponseType|bool
     */
    public function Get_Committee_Definition(\StructType\Get_Committee_Definition_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Committee_Definition($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_LGBT_Identifications
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves the LGBT Identifications that are currently defined.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_LGBT_Identifications_RequestType $body
     * @return \StructType\Get_LGBT_Identifications_ResponseType|bool
     */
    public function Get_LGBT_Identifications(\StructType\Get_LGBT_Identifications_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_LGBT_Identifications($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Appointment_Specialties
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves Appointment Specialties.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Appointment_Specialties_RequestType $body
     * @return \StructType\Get_Appointment_Specialties_ResponseType|bool
     */
    public function Get_Appointment_Specialties(\StructType\Get_Appointment_Specialties_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Appointment_Specialties($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Committee_Meetings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves data about existing committee meetings.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Committee_Meetings_RequestType $body
     * @return \StructType\Get_Committee_Meetings_ResponseType|bool
     */
    public function Get_Committee_Meetings(\StructType\Get_Committee_Meetings_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Committee_Meetings($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Establishments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Get Establishments Data.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Establishments_RequestType $body
     * @return \StructType\Get_Establishments_ResponseType|bool
     */
    public function Get_Establishments(\StructType\Get_Establishments_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Establishments($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Workday_Account
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Get Workday Accounts for a user or set of users
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Workday_Account_RequestType $body
     * @return \StructType\Get_Workday_Account_ResponseType|bool
     */
    public function Get_Workday_Account(\StructType\Get_Workday_Account_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Workday_Account($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Work_Status_Rule_Sets
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Retrieves existing Work Status Rule Sets via Web Service
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Work_Status_Rule_Sets_RequestType $body
     * @return \StructType\Get_Work_Status_Rule_Sets_ResponseType|bool
     */
    public function Get_Work_Status_Rule_Sets(\StructType\Get_Work_Status_Rule_Sets_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Work_Status_Rule_Sets($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Period_Reporting_Calendars
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Retrieves the information about the Period Reporting Calendars requested
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Period_Reporting_Calendars_RequestType $body
     * @return \StructType\Get_Period_Reporting_Calendars_ResponseType|bool
     */
    public function Get_Period_Reporting_Calendars(\StructType\Get_Period_Reporting_Calendars_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Period_Reporting_Calendars($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Location_Attributes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Public Web Service Operation for Retrieving Location Attributes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Location_Attributes_RequestType $body
     * @return \StructType\Get_Location_Attributes_ResponseType|bool
     */
    public function Get_Location_Attributes(\StructType\Get_Location_Attributes_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Location_Attributes($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Safety_Incident_Locations
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service allows a Safety Incident Location to be retrieved from Workday.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Safety_Incident_Locations_RequestType $body
     * @return \StructType\Get_Safety_Incident_Locations_ResponseType|bool
     */
    public function Get_Safety_Incident_Locations(\StructType\Get_Safety_Incident_Locations_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Safety_Incident_Locations($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Get_External_Disability_Self_Identification_Records
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation retrieves the External Disability Self-Identification Records that are currently defined
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_External_Disability_Self_Identification_Records_RequestType $body
     * @return \StructType\Get_External_Disability_Self_Identification_Records_ResponseType|bool
     */
    public function Get_External_Disability_Self_Identification_Records(\StructType\Get_External_Disability_Self_Identification_Records_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_External_Disability_Self_Identification_Records($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Gender_Identities
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns Gender Identities by Reference ID, or returns all Gender Identities if no Reference ID is provided.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Gender_Identities_RequestType $body
     * @return \StructType\Get_Gender_Identities_ResponseType|bool
     */
    public function Get_Gender_Identities(\StructType\Get_Gender_Identities_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Gender_Identities($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Sexual_Orientations
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns Sexual Orientations by Reference ID, or returns all Sexual Orientations if no Reference ID is provided.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Sexual_Orientations_RequestType $body
     * @return \StructType\Get_Sexual_Orientations_ResponseType|bool
     */
    public function Get_Sexual_Orientations(\StructType\Get_Sexual_Orientations_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Sexual_Orientations($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Pronouns
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns Pronouns by Reference ID, or returns all Pronouns if no Reference ID is provided.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Pronouns_RequestType $body
     * @return \StructType\Get_Pronouns_ResponseType|bool
     */
    public function Get_Pronouns(\StructType\Get_Pronouns_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Pronouns($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Organizations_Names
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Retrieves data related to the organization name or names in effect for a specified date range. If both From and To dates are empty, Workday retrieves data related to the organization name as of the current date. Retrieves all
     * organizations unless Organization or Organization Type is specified.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Organizations_Names_RequestType $body
     * @return \StructType\Get_Organizations_Names_ResponseType|bool
     */
    public function Get_Organizations_Names(\StructType\Get_Organizations_Names_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Organizations_Names($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Universal_Identifier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Request for Universal Identifiers. Use a Person Reference to get the Universal ID for the Person or don't request anybody and get all Universal IDs.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Universal_Identifiers_RequestType $body
     * @return \StructType\Get_Universal_Identifiers_ResponseType|bool
     */
    public function Get_Universal_Identifier(\StructType\Get_Universal_Identifiers_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Universal_Identifier($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Get_Academic_Appointment_Track_Additional_Data
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Retrieves effective-dated additional data for the specified Academic Appointment Tracks or for all Academic Appointment Tracks if none were specified. Use the effective response filter to specify the effective date, otherwise
     * additional data as of the current system time will be retrieved.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Academic_Appointment_Track_Additional_Data_RequestType $body
     * @return \StructType\Get_Academic_Appointment_Track_Additional_Data_ResponseType|bool
     */
    public function Get_Academic_Appointment_Track_Additional_Data(\StructType\Get_Academic_Appointment_Track_Additional_Data_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Academic_Appointment_Track_Additional_Data($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Academic_Appointee
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Get get Academic Appointee information
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Academic_Appointee_RequestType $body
     * @return \StructType\Get_Academic_Appointee_ResponseType|bool
     */
    public function Get_Academic_Appointee(\StructType\Get_Academic_Appointee_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Academic_Appointee($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Sort_Order_Enableds
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Web Service to get the order of orderable instances.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Sort_Order_Enableds_RequestType $body
     * @return \StructType\Get_Sort_Order_Enableds_ResponseType|bool
     */
    public function Get_Sort_Order_Enableds(\StructType\Get_Sort_Order_Enableds_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Sort_Order_Enableds($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Get_Preferred_Communication_Language
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Get Preferred Communication language configuration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Preferred_Communication_Language_RequestType $body
     * @return \StructType\Get_Preferred_Communication_Language_ResponseType|bool
     */
    public function Get_Preferred_Communication_Language(\StructType\Get_Preferred_Communication_Language_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Preferred_Communication_Language($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_EEO_Data_Record
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web services allows an External EEO-1 Data to be extracted from Workday.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_EEO_Data_Record_RequestType $body
     * @return \StructType\Get_EEO_Data_Record_ResponseType|bool
     */
    public function Get_EEO_Data_Record(\StructType\Get_EEO_Data_Record_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_EEO_Data_Record($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Workteams
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns Workteam information. If the request does not specify a Workteam, the operation returns information for all Workteam.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Workteams_RequestType $body
     * @return \StructType\Get_Workteams_ResponseType|bool
     */
    public function Get_Workteams(\StructType\Get_Workteams_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Workteams($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Get_Change_Work_Contact_Information
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This public web service request gets contact information for a person. The response can be used as input to the web service request Change Work Contact Information.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Change_Work_Contact_Information_RequestType $body
     * @return \StructType\Get_Change_Work_Contact_Information_ResponseType|bool
     */
    public function Get_Change_Work_Contact_Information(\StructType\Get_Change_Work_Contact_Information_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Change_Work_Contact_Information($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Get_Change_Home_Contact_Information
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This public web service request gets contact information for a person. The response can be used as input to the web service request Change Home Contact Information.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Change_Home_Contact_Information_RequestType $body
     * @return \StructType\Get_Change_Home_Contact_Information_ResponseType|bool
     */
    public function Get_Change_Home_Contact_Information(\StructType\Get_Change_Home_Contact_Information_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Change_Home_Contact_Information($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Get_Change_Veteran_Status_Identification
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service request gets veteran status identification for a worker. The response can be used as input to the web service request Change Veteran Status Identification.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Change_Veteran_Status_Identification_RequestType $body
     * @return \StructType\Get_Change_Veteran_Status_Identification_ResponseType|bool
     */
    public function Get_Change_Veteran_Status_Identification(\StructType\Get_Change_Veteran_Status_Identification_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Change_Veteran_Status_Identification($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_External_Form_I-9_Source
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web services allows an External Form I-9 Source to be extracted from Workday.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_External_Form_I_9_Source_RequestType $body
     * @return \StructType\Get_External_Form_I_9_Source_ResponseType|bool
     */
    public function Get_External_Form_I_9_Source(\StructType\Get_External_Form_I_9_Source_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->__call('Get_External_Form_I-9_Source', array(
                $body,
            )));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_External_Form_I-9
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web services allows a record of an External Form I-9 to be extracted from Workday.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_External_Form_I_9_RequestType $body
     * @return \StructType\Get_External_Form_I_9_ResponseType|bool
     */
    public function Get_External_Form_I_9(\StructType\Get_External_Form_I_9_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->__call('Get_External_Form_I-9', array(
                $body,
            )));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Person_Photos
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Returns the person photo by Person Reference or Universal ID. It will filter out any person instances that are not enabled for photos.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Person_Photos_RequestType $body
     * @return \StructType\Get_Person_Photos_ResponseType|bool
     */
    public function Get_Person_Photos(\StructType\Get_Person_Photos_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Person_Photos($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Report_Safety_Incident
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web services allows a safety incident to be extracted from Workday.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Report_Safety_Incident_RequestType $body
     * @return \StructType\Get_Report_Safety_Incident_ResponseType|bool
     */
    public function Get_Report_Safety_Incident(\StructType\Get_Report_Safety_Incident_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Report_Safety_Incident($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_External_Form_I-9_Section_3
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web services allows a record of an External Form I-9 Section 3 to be extracted from Workday.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_External_Form_I_9_Section_3_RequestType $body
     * @return \StructType\Get_External_Form_I_9_Section_3_ResponseType|bool
     */
    public function Get_External_Form_I_9_Section_3(\StructType\Get_External_Form_I_9_Section_3_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->__call('Get_External_Form_I-9_Section_3', array(
                $body,
            )));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Work_Schedule_Calendar_Groups
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: View Work Schedule Calendar Groups.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Work_Schedule_Calendar_Groups_RequestType $body
     * @return \StructType\Get_Work_Schedule_Calendar_Groups_ResponseType|bool
     */
    public function Get_Work_Schedule_Calendar_Groups(\StructType\Get_Work_Schedule_Calendar_Groups_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Work_Schedule_Calendar_Groups($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Get_Assign_Establishment_Events
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Get an Assign Establishment event
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Get_Assign_Establishment_Events_RequestType $body
     * @return \StructType\Get_Assign_Establishment_Events_ResponseType|bool
     */
    public function Get_Assign_Establishment_Events(\StructType\Get_Assign_Establishment_Events_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Get_Assign_Establishment_Events($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\Business_SiteType|\StructType\Contingent_WorkerType|\StructType\Contingent_Worker_Contract_InfoType|\StructType\Contingent_Worker_Personal_InfoType|\StructType\EmployeeType|\StructType\Employee_Employment_InfoType|\StructType\Employee_ImageType|\StructType\Employee_Personal_InfoType|\StructType\Employee_Related_PersonsType|\StructType\Get_Academic_Appointee_ResponseType|\StructType\Get_Academic_Appointment_Track_Additional_Data_ResponseType|\StructType\Get_Academic_Ranks_ResponseType|\StructType\Get_Academic_Units_ResponseType|\StructType\Get_Academic_Unit_Hierarchies_ResponseType|\StructType\Get_Appointment_Specialties_ResponseType|\StructType\Get_Assign_Establishment_Events_ResponseType|\StructType\Get_Assign_User_Based_Security_Groups_ResponseType|\StructType\Get_Assign_User_Based_Security_Group_ResponseType|\StructType\Get_Change_Government_IDs_ResponseType|\StructType\Get_Change_Home_Contact_Information_ResponseType|\StructType\Get_Change_Legal_Name_ResponseType|\StructType\Get_Change_Licenses_ResponseType|\StructType\Get_Change_Other_IDs_ResponseType|\StructType\Get_Change_Passports_and_Visas_ResponseType|\StructType\Get_Change_Preferred_Name_ResponseType|\StructType\Get_Change_Veteran_Status_Identification_ResponseType|\StructType\Get_Change_Work_Contact_Information_ResponseType|\StructType\Get_Committee_Classifications_ResponseType|\StructType\Get_Committee_Classification_Groups_ResponseType|\StructType\Get_Committee_Definition_ResponseType|\StructType\Get_Committee_Meetings_ResponseType|\StructType\Get_Committee_Membership_Types_ResponseType|\StructType\Get_Committee_Types_ResponseType|\StructType\Get_Company_Insider_Types_ResponseType|\StructType\Get_Difficulty_to_Fill_ResponseType|\StructType\Get_Disabilities_ResponseType|\StructType\Get_EEO_Data_Record_ResponseType|\StructType\Get_Establishments_ResponseType|\StructType\Get_Ethnicities_ResponseType|\StructType\Get_External_Disability_Self_Identification_Records_ResponseType|\StructType\Get_External_Form_I_9_ResponseType|\StructType\Get_External_Form_I_9_Section_3_ResponseType|\StructType\Get_External_Form_I_9_Source_ResponseType|\StructType\Get_Former_Workers_ResponseType|\StructType\Get_Former_Worker_Documents_ResponseType|\StructType\Get_Frequencies_ResponseType|\StructType\Get_Gender_Identities_ResponseType|\StructType\Get_Holiday_Calendars_ResponseType|\StructType\Get_Job_Categories_ResponseType|\StructType\Get_Job_Classification_Groups_ResponseType|\StructType\Get_Job_Families_ResponseType|\StructType\Get_Job_Family_Groups_ResponseType|\StructType\Get_Job_Profiles_ResponseType|\StructType\Get_LGBT_Identifications_ResponseType|\StructType\Get_Locations_ResponseType|\StructType\Get_Location_Attributes_ResponseType|\StructType\Get_Location_Hierarchy_Organization_Assignments_ResponseType|\StructType\Get_Organizations_Names_ResponseType|\StructType\Get_Organizations_ResponseType|\StructType\Get_Organization_Assignment_Restrictions_ResponseType|\StructType\Get_Organization_Reference_IDs_ResponseType|\StructType\Get_Period_Reporting_Calendars_ResponseType|\StructType\Get_Person_Photos_ResponseType|\StructType\Get_Political_Affiliations_ResponseType|\StructType\Get_Preferred_Communication_Language_ResponseType|\StructType\Get_Previous_System_Job_History_ResponseType|\StructType\Get_Pronouns_ResponseType|\StructType\Get_Report_Safety_Incident_ResponseType|\StructType\Get_Safety_Incident_Locations_ResponseType|\StructType\Get_Search_Settings_ResponseType|\StructType\Get_Service_Center_Representatives_ResponseType|\StructType\Get_Service_Center_Representative_Workday_Accounts_ResponseType|\StructType\Get_Sexual_Orientations_ResponseType|\StructType\Get_Social_Benefits_Localities_ResponseType|\StructType\Get_Sort_Order_Enableds_ResponseType|\StructType\Get_Training_Types_ResponseType|\StructType\Get_Universal_Identifiers_ResponseType|\StructType\Get_Workday_Account_ResponseType|\StructType\Get_Workers_Compensation_Codes_ResponseType|\StructType\Get_Workers_ResponseRootType|\StructType\Get_Worker_Photos_ResponseType|\StructType\Get_Workteams_ResponseType|\StructType\Get_Work_Schedule_Calendars_ResponseType|\StructType\Get_Work_Schedule_Calendar_Groups_ResponseType|\StructType\Get_Work_Shifts_ResponseType|\StructType\Get_Work_Status_Rule_Sets_ResponseType|\StructType\OrganizationType|\StructType\Provisioning_Groups_ResponseType|\StructType\Provisioning_Group_Assignments_ResponseType|\StructType\Server_TimestampType|\StructType\Worker_Event_HistoryType|\StructType\Worker_ProfileType
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
