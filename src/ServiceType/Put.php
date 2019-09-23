<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Put ServiceType
 * @subpackage Services
 */
class Put extends AbstractSoapClientBase
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
     * Method to call the operation originally named Put_Location
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a Location. Location Addresses, Usages, Email Addresses, Phone Numbers, Time Profile data, Location Attributes, Location Superior and Location Hierarchies to include location in can also be added and
     * updated with this operation. Effective date must be blank for new locations to be consistent with new locations created in the UI. When effective date is blank, the value is effective as of the beginning of time. The Effective Date applies to these
     * fields only: Location Name, Inactive, and Location Hierarchy Reference. If Location Hierarchy Reference is left blank for an existing location, location will be removed from all location hierarchies it is included in as of the effective date
     * specified. If these fields are left blank, existing values will be removed: Altitude, Latitude, Longitude, Trade Name, Worksite Identification Code, Locale, User Language, Location Attribute, Location Type, Time Profile, Time Zone, Superior Location.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Location_RequestType $body
     * @return \StructType\Put_Location_ResponseType|bool
     */
    public function Put_Location(\StructType\Put_Location_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Location($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Previous_System_Job_History
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Loads history for a Worker whose history did not get loaded during the initial implementation period. This operation allows free-form text entry of changes that occurred between the Worker's original hire date and the date that the
     * implementation occurred. Existing entries can be deleted or updated.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Previous_System_Job_History_RequestType $body
     * @return \StructType\Put_Previous_System_Job_History_ResponseType|bool
     */
    public function Put_Previous_System_Job_History(\StructType\Put_Previous_System_Job_History_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Previous_System_Job_History($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Company_Insider_Type
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates Company Insider Types.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Company_Insider_Type_RequestType $body
     * @return \StructType\Put_Company_Insider_Type_ResponseType|bool
     */
    public function Put_Company_Insider_Type(\StructType\Put_Company_Insider_Type_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Company_Insider_Type($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Work_Shift
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a Work Shift.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Work_Shift_RequestType $body
     * @return \StructType\Put_Work_Shift_ResponseType|bool
     */
    public function Put_Work_Shift(\StructType\Put_Work_Shift_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Work_Shift($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Job_Category
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a Job Category.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Job_Category_RequestType $body
     * @return \StructType\Put_Job_Category_ResponseType|bool
     */
    public function Put_Job_Category(\StructType\Put_Job_Category_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Job_Category($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Dependent
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: DEPRECATED: Adds or updates a dependent1
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Dependent_RequestType $body
     * @return \StructType\Put_Dependent_ResponseType|bool
     */
    public function Put_Dependent(\StructType\Put_Dependent_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Dependent($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Workers_Compensation_Code
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a Workers' Compensation Code.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Workers_Compensation_Code_RequestType $body
     * @return \StructType\Put_Workers_Compensation_Code_ResponseType|bool
     */
    public function Put_Workers_Compensation_Code(\StructType\Put_Workers_Compensation_Code_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Workers_Compensation_Code($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Holiday_Calendar
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Adds or updates Holiday Calendar.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Holiday_Calendar_RequestType $body
     * @return \StructType\Put_Holiday_Calendar_ResponseType|bool
     */
    public function Put_Holiday_Calendar(\StructType\Put_Holiday_Calendar_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Holiday_Calendar($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Work_Schedule_Calendar
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Adds or updates Work Schedule Calendar
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Work_Schedule_Calendar_RequestType $body
     * @return \StructType\Put_Work_Schedule_Calendar_ResponseType|bool
     */
    public function Put_Work_Schedule_Calendar(\StructType\Put_Work_Schedule_Calendar_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Work_Schedule_Calendar($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_External_URL
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: The service allows creating external URLs
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_External_URL_RequestType $body
     * @return \StructType\Put_External_URL_ResponseType|bool
     */
    public function Put_External_URL(\StructType\Put_External_URL_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_External_URL($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Put_Supervisory_Organization_Assignment_Restrictions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation updates the Organization Assignment Default Value and Allowed Values for a Supervisory Organization. Updates can be made by organization type. Note, the default value of Replace_All attribute is FALSE. This is
     * different from most other webservices with this attribute because in this case, FALSE is more conservative. Default and allowed values for all organization types are inherited from the superior when no values have been specified for any organization
     * types. Once a default or allowed value is specified for any organization type, the inheritance is severed. In the UI, inherited values are persisted when inheritance is severed. In order to mimic this behavior in the web service, inherited values
     * will be persisted unless the 'Replace All' or 'Delete' options are set to TRUE.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Organization_Assignment_Restrictions_RequestType $body
     * @return \StructType\Put_Organization_Assignment_Restrictions_ResponseType|bool
     */
    public function Put_Supervisory_Organization_Assignment_Restrictions(\StructType\Put_Organization_Assignment_Restrictions_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Supervisory_Organization_Assignment_Restrictions($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Frequency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a Frequency.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Frequency_RequestType $body
     * @return \StructType\Put_Frequency_ResponseType|bool
     */
    public function Put_Frequency(\StructType\Put_Frequency_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Frequency($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Disability
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a Disability.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Disability_RequestType $body
     * @return \StructType\Put_Disability_ResponseType|bool
     */
    public function Put_Disability(\StructType\Put_Disability_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Disability($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Job_Profile
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operations adds or updates a Job Profile.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Job_Profile_RequestType $body
     * @return \StructType\Put_Job_Profile_ResponseType|bool
     */
    public function Put_Job_Profile(\StructType\Put_Job_Profile_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Job_Profile($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Ethnicity
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates an Ethnicity.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Ethnicity_RequestType $body
     * @return \StructType\Put_Ethnicity_ResponseType|bool
     */
    public function Put_Ethnicity(\StructType\Put_Ethnicity_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Ethnicity($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Training_Type
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a Training Type
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Training_Type_RequestType $body
     * @return \StructType\Put_Training_Type_ResponseType|bool
     */
    public function Put_Training_Type(\StructType\Put_Training_Type_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Training_Type($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Job_Classification_Group
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Adds or updates a job classification group and/or job classifications.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Job_Classification_Group_RequestType $body
     * @return \StructType\Put_Job_Classification_Group_ResponseType|bool
     */
    public function Put_Job_Classification_Group(\StructType\Put_Job_Classification_Group_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Job_Classification_Group($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Job_Family
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Adds or updates a job family.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Job_Family_RequestType $body
     * @return \StructType\Put_Job_Family_ResponseType|bool
     */
    public function Put_Job_Family(\StructType\Put_Job_Family_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Job_Family($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Job_Family_Group
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Adds or updates a job family group. Also adds or removes a group's associated job families.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Job_Family_Group_RequestType $body
     * @return \StructType\Put_Job_Family_Group_ResponseType|bool
     */
    public function Put_Job_Family_Group(\StructType\Put_Job_Family_Group_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Job_Family_Group($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Put_User-Based_Security_Group_Assignments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation performs a FULL REPLACEMENT of User-Based Security Groups. It does not add to existing entries. Assigns 1 or more User-Based Security Groups to a Workday Account.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Assign_User_Based_Security_Groups_RequestType $body
     * @return \StructType\Put_Assign_User_Based_Security_Groups_ResponseType|bool
     */
    public function Put_User_Based_Security_Group_Assignments(\StructType\Put_Assign_User_Based_Security_Groups_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->__call('Put_User-Based_Security_Group_Assignments', array(
                $body,
            )));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Difficulty_to_Fill
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a job profile's Difficulty to Fill.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Difficulty_to_Fill_RequestType $body
     * @return \StructType\Put_Difficulty_to_Fill_ResponseType|bool
     */
    public function Put_Difficulty_to_Fill(\StructType\Put_Difficulty_to_Fill_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Difficulty_to_Fill($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Worker_Photo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a workers photo.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Worker_Photo_RequestType $body
     * @return \StructType\Put_Worker_Photo_ResponseType|bool
     */
    public function Put_Worker_Photo(\StructType\Put_Worker_Photo_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Worker_Photo($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Academic_Rank
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates Academic Ranks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Academic_Rank_RequestType $body
     * @return \StructType\Put_Academic_Rank_ResponseType|bool
     */
    public function Put_Academic_Rank(\StructType\Put_Academic_Rank_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Academic_Rank($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Provisioning_Group
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service operation updates an existing provisioning group if a reference is provided on the request, else it creates a new one. The provisioning group data to be specified as part of the request includes the name and
     * description. Assignment information needs to be submitted using the operation Put Provisioning Group Assignment.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Provisioning_Group_RequestType $body
     * @return \StructType\Put_Provisioning_Group_ResponseType|bool
     */
    public function Put_Provisioning_Group(\StructType\Put_Provisioning_Group_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Provisioning_Group($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Provisioning_Group_Assignment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation creates or updates the assignment of a person to a provisioning group. If the an assignment between the person and the provisioning group exists, it will be updated with the data given in the request, else a new one
     * will be created. The data to be specified include a reference to the person and the provisioning group. Alternatively to the person a worker can be specified. In this case the operation will retrieve the person for that worker and create or update
     * the assignment between that person and the group.The assignment status does not have to be specified on the request. If it is omitted, a default status of “Assigned” will be set.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Provisioning_Group_Assignment_RequestType $body
     * @return \StructType\Put_Provisioning_Group_Assignment_ResponseType|bool
     */
    public function Put_Provisioning_Group_Assignment(\StructType\Put_Provisioning_Group_Assignment_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Provisioning_Group_Assignment($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Search_Settings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation will put search configurations into workday.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Search_Settings_RequestType $body
     * @return \StructType\Put_Search_Settings_ResponseType|bool
     */
    public function Put_Search_Settings(\StructType\Put_Search_Settings_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Search_Settings($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Put_Addresses_for_Country_Format_Extension
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Use this operation ONLY for the country format extension and for local script addresses population. 1. Country Format ExtensionSince many countries require more granular address components than Workday currently supports, the
     * Alternate Address Formats allow Workday customers to define a Basic and an Extended Address Format metadata for these countries. Customers can then control address formats using Tenant Setup - Global when they want to use extended formats for a
     * country. This operation uploads addresses for a specified country after the addresses are modified to fit a new extended format. Note that the attribute use Extended Address Format in Tenant Setup - Global must be enabled for the country beforeusing
     * this operation to uploading addresses.2. Local Script Address PopulationLocal script address components were added in W18 to allow address input in local script. This operation uploads addresses with new local address components.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Addresses_for_Country_Format_Extension_RequestType $body
     * @return \StructType\Put_Addresses_for_Country_Format_Extension_ResponseType|bool
     */
    public function Put_Addresses_for_Country_Format_Extension(\StructType\Put_Addresses_for_Country_Format_Extension_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Addresses_for_Country_Format_Extension($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Service_Center_Representative
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Adds or updates a Service Center Representative.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Service_Center_Representative_RequestType $body
     * @return \StructType\Put_Service_Center_Representative_ResponseType|bool
     */
    public function Put_Service_Center_Representative(\StructType\Put_Service_Center_Representative_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Service_Center_Representative($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Put_Service_Center_Representative_Workday_Account
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Adds or updates a Service Center Representative Workday Account.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Service_Center_Representative_Workday_Account_RequestType $body
     * @return \StructType\Put_Service_Center_Representative_Workday_Account_ResponseType|bool
     */
    public function Put_Service_Center_Representative_Workday_Account(\StructType\Put_Service_Center_Representative_Workday_Account_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Service_Center_Representative_Workday_Account($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Academic_Unit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates Academic Units
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Academic_Unit_RequestType $body
     * @return \StructType\Put_Academic_Unit_ResponseType|bool
     */
    public function Put_Academic_Unit(\StructType\Put_Academic_Unit_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Academic_Unit($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Academic_Unit_Hierarchy
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation is used to create an Academic Unit Hierarchy.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Academic_Unit_Hierarchy_RequestType $body
     * @return \StructType\Put_Academic_Unit_Hierarchy_ResponseType|bool
     */
    public function Put_Academic_Unit_Hierarchy(\StructType\Put_Academic_Unit_Hierarchy_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Academic_Unit_Hierarchy($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Political_Affiliation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a Political Affiliation.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Political_Affiliation_RequestType $body
     * @return \StructType\Put_Political_Affiliation_ResponseType|bool
     */
    public function Put_Political_Affiliation(\StructType\Put_Political_Affiliation_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Political_Affiliation($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Former_Worker
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation allows Former Workers to be added and edited.Former Worker Storage is for tracking data for individuals that have previously been employed but were not included as a Workday worker. Data includes personal details,
     * contact information, and job details as of termination date.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Former_Worker_RequestType $body
     * @return \StructType\Put_Former_Worker_ResponseType|bool
     */
    public function Put_Former_Worker(\StructType\Put_Former_Worker_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Former_Worker($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Social_Benefits_Locality
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a Social Benefits Locality.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Social_Benefits_Locality_RequestType $body
     * @return \StructType\Put_Social_Benefits_Locality_ResponseType|bool
     */
    public function Put_Social_Benefits_Locality(\StructType\Put_Social_Benefits_Locality_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Social_Benefits_Locality($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Former_Worker_Document
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Adds or updates a former worker document. The operation adds documents not associated with events and those documents are not secured by the events.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Former_Worker_Document_RequestType $body
     * @return \StructType\Put_Former_Worker_Document_ResponseType|bool
     */
    public function Put_Former_Worker_Document(\StructType\Put_Former_Worker_Document_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Former_Worker_Document($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Put_Assign_User-Based_Security_Group
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation performs a FULL REPLACEMENT of User-Based Security Groups. It does not add to existing entries. Assigns 1 or more Workday Accounts to a User-Based Security Group.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Assign_User_Based_Security_Group_RequestType $body
     * @return \StructType\Put_Assign_User_Based_Security_Group_ResponseType|bool
     */
    public function Put_Assign_User_Based_Security_Group(\StructType\Put_Assign_User_Based_Security_Group_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->__call('Put_Assign_User-Based_Security_Group', array(
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
     * Put_Location_Hierarchy_Organization_Assignments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds, updates, replaces the Organization Assignment Allowed Values for a Location Hierarchy
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Location_Hierarchy_Organization_Assignments_RequestType $body
     * @return \StructType\Put_Location_Hierarchy_Organization_Assignments_ResponseType|bool
     */
    public function Put_Location_Hierarchy_Organization_Assignments(\StructType\Put_Location_Hierarchy_Organization_Assignments_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Location_Hierarchy_Organization_Assignments($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Organization_Reference_ID
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This task allows changing Organization Reference ID for an Organization. For Supervisory Organizations- if a valid sequence generator is defined, and the Organization Reference ID field is set to empty, then ID will be replaced with
     * an automatically generated ID- if no sequence generator is defined, and the Organization Reference ID field is set to empty, then ID will be generated follow default pattern (SUPERVISORY_ORGANIZATION_XX_YY)- an option 'Include Organization ID in
     * Name' can be set.A new effective-dated organization name is automatically created if any attributes used for organization name are different as of specified effective date.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Organization_Reference_ID_RequestType $body
     * @return \StructType\Put_Organization_Reference_ID_ResponseType|bool
     */
    public function Put_Organization_Reference_ID(\StructType\Put_Organization_Reference_ID_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Organization_Reference_ID($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Committee_Type
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates Committee Types
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Committee_Type_RequestType $body
     * @return \StructType\Put_Committee_Type_ResponseType|bool
     */
    public function Put_Committee_Type(\StructType\Put_Committee_Type_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Committee_Type($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Committee_Classification_Group
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates Committee Classification Groups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Committee_Classification_Group_RequestType $body
     * @return \StructType\Put_Committee_Classification_Group_ResponseType|bool
     */
    public function Put_Committee_Classification_Group(\StructType\Put_Committee_Classification_Group_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Committee_Classification_Group($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Committee_Classification
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates Committee Classification
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Committee_Classification_RequestType $body
     * @return \StructType\Put_Committee_Classification_ResponseType|bool
     */
    public function Put_Committee_Classification(\StructType\Put_Committee_Classification_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Committee_Classification($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Committee_Membership_Type
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates Committee Member Type.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Committee_Membership_Type_RequestType $body
     * @return \StructType\Put_Committee_Membership_Type_ResponseType|bool
     */
    public function Put_Committee_Membership_Type(\StructType\Put_Committee_Membership_Type_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Committee_Membership_Type($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_LGBT_Identification
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a LGBT Identification
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_LGBT_Identification_RequestType $body
     * @return \StructType\Put_LGBT_Identification_ResponseType|bool
     */
    public function Put_LGBT_Identification(\StructType\Put_LGBT_Identification_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_LGBT_Identification($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Appointment_Specialty
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates Appointment Specialty.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Appointment_Specialty_RequestType $body
     * @return \StructType\Put_Appointment_Specialty_ResponseType|bool
     */
    public function Put_Appointment_Specialty(\StructType\Put_Appointment_Specialty_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Appointment_Specialty($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Committee_Meeting
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a new Committee Meeting.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Committee_Meeting_RequestType $body
     * @return \StructType\Put_Committee_Meeting_ResponseType|bool
     */
    public function Put_Committee_Meeting(\StructType\Put_Committee_Meeting_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Committee_Meeting($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Establishment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Loads Establishment Data.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Establishment_RequestType $body
     * @return \StructType\Put_Establishment_ResponseType|bool
     */
    public function Put_Establishment(\StructType\Put_Establishment_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Establishment($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Work_Status_Rule_Set
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Create/Edit a Work Status Rule Set via Web Services
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Work_Status_Rule_Set_RequestType $body
     * @return \StructType\Put_Work_Status_Rule_Set_ResponseType|bool
     */
    public function Put_Work_Status_Rule_Set(\StructType\Put_Work_Status_Rule_Set_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Work_Status_Rule_Set($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Period_Reporting_Calendar
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or updates a Period Reporting Calendar
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Period_Reporting_Calendar_RequestType $body
     * @return \StructType\Put_Period_Reporting_Calendar_ResponseType|bool
     */
    public function Put_Period_Reporting_Calendar(\StructType\Put_Period_Reporting_Calendar_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Period_Reporting_Calendar($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Location_Attribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Public Web Service Operation for Adding/Editing Location Attributes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Location_Attribute_RequestType $body
     * @return \StructType\Put_Location_Attribute_ResponseType|bool
     */
    public function Put_Location_Attribute(\StructType\Put_Location_Attribute_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Location_Attribute($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Safety_Incident_Location
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service allows a Safety Incident Location to be added into Workday.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Safety_Incident_Location_RequestType $body
     * @return \StructType\Put_Safety_Incident_Location_ResponseType|bool
     */
    public function Put_Safety_Incident_Location(\StructType\Put_Safety_Incident_Location_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Safety_Incident_Location($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Put_External_Disability_Self_Identification_Record
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Web service task to add, delete, or edit external disability self-identification records
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_External_Disability_Self_Identification_Record_RequestType $body
     * @return \StructType\Put_External_Disability_Self_Identification_Record_ResponseType|bool
     */
    public function Put_External_Disability_Self_Identification_Record(\StructType\Put_External_Disability_Self_Identification_Record_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_External_Disability_Self_Identification_Record($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Gender_Identity
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Creates a new Gender Identity (or updates an existing Gender Identity) with the information supplied in the request.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Gender_Identity_RequestType $body
     * @return \StructType\Put_Gender_Identity_ResponseType|bool
     */
    public function Put_Gender_Identity(\StructType\Put_Gender_Identity_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Gender_Identity($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Sexual_Orientation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Creates a new Sexual Orientation (or updates an existing Sexual Orientation) with the information supplied in the request.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Sexual_Orientation_RequestType $body
     * @return \StructType\Put_Sexual_Orientation_ResponseType|bool
     */
    public function Put_Sexual_Orientation(\StructType\Put_Sexual_Orientation_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Sexual_Orientation($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Pronoun
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Creates a new Pronoun (or updates an existing Pronoun) with the information supplies in the request.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Pronoun_RequestType $body
     * @return \StructType\Put_Pronoun_ResponseType|bool
     */
    public function Put_Pronoun(\StructType\Put_Pronoun_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Pronoun($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Organization_Name
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Updates data related to an organization name as of the effective date. If no effective date is provided, Workday uses the current date.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Organization_Name_RequestType $body
     * @return \StructType\Put_Organization_Name_ResponseType|bool
     */
    public function Put_Organization_Name(\StructType\Put_Organization_Name_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Organization_Name($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Universal_Identifier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Put Request for Universal Identifiers. It's required to put a Person Reference in either Person Reference. Either place a manual Universal ID or no Universal ID, if no Universal ID is supplied it will use the Universal ID generator.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Universal_Identifier_RequestType $body
     * @return \StructType\Put_Universal_Identifier_ResponseType|bool
     */
    public function Put_Universal_Identifier(\StructType\Put_Universal_Identifier_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Universal_Identifier($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Sort_Order_Enabled
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Web Service to create/maintain the order of orderable instances.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Sort_Order_Enabled_RequestType $body
     * @return \StructType\Put_Sort_Order_Enabled_ResponseType|bool
     */
    public function Put_Sort_Order_Enabled(\StructType\Put_Sort_Order_Enabled_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Sort_Order_Enabled($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * Put_Preferred_Communication_Language
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Put Preferred Communication Language configuration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Preferred_Communication_Language_RequestType $body
     * @return \StructType\Put_Preferred_Communication_Language_ResponseType|bool
     */
    public function Put_Preferred_Communication_Language(\StructType\Put_Preferred_Communication_Language_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Preferred_Communication_Language($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_EEO_Data_Record
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web services allows EEO Data to be put into Workday.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_EEO_Data_Record_RequestType $body
     * @return \StructType\Put_EEO_Data_Record_ResponseType|bool
     */
    public function Put_EEO_Data_Record(\StructType\Put_EEO_Data_Record_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_EEO_Data_Record($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Workteam
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This operation adds or deletes workteam members, or updates workteam members' membership status. Each membership status change is effective dated in order to capture membership status history. Each effective-dated membership status
     * change is referred to as a snapshot.When a workteam member is deleted, it is as if they were never a member and their entire membership status history is also deleted. If you want to retain membership status history after a member departs, Workday
     * recommends that you change the member's status to Inactive instead.When a worker does not exist as a workteam member as of the specified effective date, they are added as a member with the specified effective date and membership status. When a worker
     * does exist as a workteam member as of the specified effective date, the operation updates their membership status. You can correct a membership status by using the same effective date as an existing membership status snapshot or correct the
     * membership status to an earlier effective date by specifying the desired effective date and the same membership status as the next effective-dated snapshot.Example: Membership status is Passive with effective date December 1, 2018. If you specify
     * November 15, 2018 as the effective date and membership status as Passive, the system will change the effective date on the December 1, 2018 snapshot to November 15, 2018. If a workteam member is added too early, you can either delete the member
     * entirely and add them again, or correct the membership status of the first snapshot to be Inactive and then add a new snapshot with the correct effective date and a membership status of Active or Passive.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Workteam_RequestType $body
     * @return \StructType\Put_Workteam_ResponseType|bool
     */
    public function Put_Workteam(\StructType\Put_Workteam_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Workteam($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_External_Form_I-9
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web services allows a record of an External Form I-9 to be put into Workday with only critical field information.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_External_Form_I_9_RequestType $body
     * @return \StructType\Put_External_Form_I_9_ResponseType|bool
     */
    public function Put_External_Form_I_9(\StructType\Put_External_Form_I_9_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->__call('Put_External_Form_I-9', array(
                $body,
            )));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_External_Form_I-9_Source
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web service allows an External Form I-9 Source to be put into Workday.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_External_Form_I_9_Source_RequestType $body
     * @return \StructType\Put_External_Form_I_9_Source_ResponseType|bool
     */
    public function Put_External_Form_I_9_Source(\StructType\Put_External_Form_I_9_Source_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->__call('Put_External_Form_I-9_Source', array(
                $body,
            )));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_External_Form_I-9_Section_3
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: This web services allows a record of an External Form I-9 Section 3 to be put into Workday with only critical field information.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_External_Form_I_9_Section_3_RequestType $body
     * @return \StructType\Put_External_Form_I_9_Section_3_ResponseType|bool
     */
    public function Put_External_Form_I_9_Section_3(\StructType\Put_External_Form_I_9_Section_3_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->__call('Put_External_Form_I-9_Section_3', array(
                $body,
            )));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Workteam_Membership
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Add, Change or Remove a Workteam Membership.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Workteam_Membership_RequestType $body
     * @return \StructType\Put_Workteam_Membership_ResponseType|bool
     */
    public function Put_Workteam_Membership(\StructType\Put_Workteam_Membership_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Workteam_Membership($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Put_Work_Schedule_Calendar_Group
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: Workday_Common_Header
     * - SOAPHeaderNamespaces: urn:com.workday/bsvc
     * - SOAPHeaderTypes: \StructType\Workday_Common_HeaderType
     * - SOAPHeaders: required
     * - documentation: Adds or updates Work Schedule Calendar Group
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Put_Work_Schedule_Calendar_Group_RequestType $body
     * @return \StructType\Put_Work_Schedule_Calendar_Group_ResponseType|bool
     */
    public function Put_Work_Schedule_Calendar_Group(\StructType\Put_Work_Schedule_Calendar_Group_RequestType $body)
    {
        try {
            $this->setResult($this->getSoapClient()->Put_Work_Schedule_Calendar_Group($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\Put_Academic_Rank_ResponseType|\StructType\Put_Academic_Unit_Hierarchy_ResponseType|\StructType\Put_Academic_Unit_ResponseType|\StructType\Put_Addresses_for_Country_Format_Extension_ResponseType|\StructType\Put_Appointment_Specialty_ResponseType|\StructType\Put_Assign_User_Based_Security_Groups_ResponseType|\StructType\Put_Assign_User_Based_Security_Group_ResponseType|\StructType\Put_Committee_Classification_Group_ResponseType|\StructType\Put_Committee_Classification_ResponseType|\StructType\Put_Committee_Meeting_ResponseType|\StructType\Put_Committee_Membership_Type_ResponseType|\StructType\Put_Committee_Type_ResponseType|\StructType\Put_Company_Insider_Type_ResponseType|\StructType\Put_Dependent_ResponseType|\StructType\Put_Difficulty_to_Fill_ResponseType|\StructType\Put_Disability_ResponseType|\StructType\Put_EEO_Data_Record_ResponseType|\StructType\Put_Establishment_ResponseType|\StructType\Put_Ethnicity_ResponseType|\StructType\Put_External_Disability_Self_Identification_Record_ResponseType|\StructType\Put_External_Form_I_9_ResponseType|\StructType\Put_External_Form_I_9_Section_3_ResponseType|\StructType\Put_External_Form_I_9_Source_ResponseType|\StructType\Put_External_URL_ResponseType|\StructType\Put_Former_Worker_Document_ResponseType|\StructType\Put_Former_Worker_ResponseType|\StructType\Put_Frequency_ResponseType|\StructType\Put_Gender_Identity_ResponseType|\StructType\Put_Holiday_Calendar_ResponseType|\StructType\Put_Job_Category_ResponseType|\StructType\Put_Job_Classification_Group_ResponseType|\StructType\Put_Job_Family_Group_ResponseType|\StructType\Put_Job_Family_ResponseType|\StructType\Put_Job_Profile_ResponseType|\StructType\Put_LGBT_Identification_ResponseType|\StructType\Put_Location_Attribute_ResponseType|\StructType\Put_Location_Hierarchy_Organization_Assignments_ResponseType|\StructType\Put_Location_ResponseType|\StructType\Put_Organization_Assignment_Restrictions_ResponseType|\StructType\Put_Organization_Name_ResponseType|\StructType\Put_Organization_Reference_ID_ResponseType|\StructType\Put_Period_Reporting_Calendar_ResponseType|\StructType\Put_Political_Affiliation_ResponseType|\StructType\Put_Preferred_Communication_Language_ResponseType|\StructType\Put_Previous_System_Job_History_ResponseType|\StructType\Put_Pronoun_ResponseType|\StructType\Put_Provisioning_Group_Assignment_ResponseType|\StructType\Put_Provisioning_Group_ResponseType|\StructType\Put_Safety_Incident_Location_ResponseType|\StructType\Put_Search_Settings_ResponseType|\StructType\Put_Service_Center_Representative_ResponseType|\StructType\Put_Service_Center_Representative_Workday_Account_ResponseType|\StructType\Put_Sexual_Orientation_ResponseType|\StructType\Put_Social_Benefits_Locality_ResponseType|\StructType\Put_Sort_Order_Enabled_ResponseType|\StructType\Put_Training_Type_ResponseType|\StructType\Put_Universal_Identifier_ResponseType|\StructType\Put_Workers_Compensation_Code_ResponseType|\StructType\Put_Worker_Photo_ResponseType|\StructType\Put_Workteam_Membership_ResponseType|\StructType\Put_Workteam_ResponseType|\StructType\Put_Work_Schedule_Calendar_Group_ResponseType|\StructType\Put_Work_Schedule_Calendar_ResponseType|\StructType\Put_Work_Shift_ResponseType|\StructType\Put_Work_Status_Rule_Set_ResponseType
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
