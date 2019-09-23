<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Response_GroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: Use the response group to limit the response to the data you are interested in. If the request does not set any values for the response group, then the response by default returns the following elements: Reference, Personal Data,
 * Employment Data, Compensation Data, Organization Data, and Role Data.
 * @subpackage Structs
 */
class Worker_Response_GroupType extends AbstractStructBase
{
    /**
     * The Include_Reference
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Reference element for the worker is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Reference;
    /**
     * The Include_Personal_Information
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Personal Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Personal_Information;
    /**
     * The Include_Additional_Jobs
     * Meta information extracted from the WSDL
     * - documentation: This flag indicates that data for Additional Jobs and International Assignments should be included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Additional_Jobs;
    /**
     * The Include_Employment_Information
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Employment Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Employment_Information;
    /**
     * The Include_Compensation
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Compensation Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Compensation;
    /**
     * The Include_Organizations
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Organization Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Organizations;
    /**
     * The Exclude_Organization_Support_Role_Data
     * Meta information extracted from the WSDL
     * - documentation: Excludes the supporting role information from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Organization_Support_Role_Data;
    /**
     * The Exclude_Location_Hierarchies
     * Meta information extracted from the WSDL
     * - documentation: Excludes the location hierarchies from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Location_Hierarchies;
    /**
     * The Exclude_Cost_Centers
     * Meta information extracted from the WSDL
     * - documentation: Excludes the cost centers from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Cost_Centers;
    /**
     * The Exclude_Cost_Center_Hierarchies
     * Meta information extracted from the WSDL
     * - documentation: Excludes the cost center hierarchies from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Cost_Center_Hierarchies;
    /**
     * The Exclude_Companies
     * Meta information extracted from the WSDL
     * - documentation: Excludes the company organizations from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Companies;
    /**
     * The Exclude_Company_Hierarchies
     * Meta information extracted from the WSDL
     * - documentation: Excludes the company hierarchies from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Company_Hierarchies;
    /**
     * The Exclude_Matrix_Organizations
     * Meta information extracted from the WSDL
     * - documentation: Excludes the matrix organizations from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Matrix_Organizations;
    /**
     * The Exclude_Pay_Groups
     * Meta information extracted from the WSDL
     * - documentation: Excludes the pay groups from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Pay_Groups;
    /**
     * The Exclude_Regions
     * Meta information extracted from the WSDL
     * - documentation: Excludes the regions from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Regions;
    /**
     * The Exclude_Region_Hierarchies
     * Meta information extracted from the WSDL
     * - documentation: Excludes the region hierarchies from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Region_Hierarchies;
    /**
     * The Exclude_Supervisory_Organizations
     * Meta information extracted from the WSDL
     * - documentation: Excludes the supervisory organizations from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Supervisory_Organizations;
    /**
     * The Exclude_Teams
     * Meta information extracted from the WSDL
     * - documentation: Excludes the teams from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Teams;
    /**
     * The Exclude_Custom_Organizations
     * Meta information extracted from the WSDL
     * - documentation: Excludes the custom organizations from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Custom_Organizations;
    /**
     * The Include_Roles
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Role Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Roles;
    /**
     * The Include_Management_Chain_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Management Chain Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Management_Chain_Data;
    /**
     * The Include_Multiple_Managers_in_Management_Chain_Data
     * Meta information extracted from the WSDL
     * - documentation: Set to true to return multiple managers in the management chain data section. Default selection is to return a single manager.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Multiple_Managers_in_Management_Chain_Data;
    /**
     * The Include_Benefit_Enrollments
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Benefit Enrollment Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Benefit_Enrollments;
    /**
     * The Include_Benefit_Eligibility
     * Meta information extracted from the WSDL
     * - documentation: Includes Benefit Eligibility Data
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Benefit_Eligibility;
    /**
     * The Include_Related_Persons
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Related Person Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Related_Persons;
    /**
     * The Include_Qualifications
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Qualification Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Qualifications;
    /**
     * The Include_Employee_Review
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Employee Review Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Employee_Review;
    /**
     * The Include_Goals
     * Meta information extracted from the WSDL
     * - documentation: Indicates that Goal Details will be included in the web service response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Goals;
    /**
     * The Include_Development_Items
     * Meta information extracted from the WSDL
     * - documentation: Indicates that Development Item Details will be included in the web service response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Development_Items;
    /**
     * The Include_Skills
     * Meta information extracted from the WSDL
     * - documentation: Indicates that Skill Details will be included in the web service response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Skills;
    /**
     * The Include_Photo
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Photo Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Photo;
    /**
     * The Include_Worker_Documents
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Worker Document Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Worker_Documents;
    /**
     * The Include_Transaction_Log_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Transaction Log Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Transaction_Log_Data;
    /**
     * The Include_Subevents_for_Corrected_Transaction
     * Meta information extracted from the WSDL
     * - documentation: Include sub-events of corrected events in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Subevents_for_Corrected_Transaction;
    /**
     * The Include_Subevents_for_Rescinded_Transaction
     * Meta information extracted from the WSDL
     * - documentation: Include sub-events of rescinded event in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Subevents_for_Rescinded_Transaction;
    /**
     * The Include_Succession_Profile
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Succession Profile element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Succession_Profile;
    /**
     * The Include_Talent_Assessment
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Talent Assessment element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Talent_Assessment;
    /**
     * The Include_Employee_Contract_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Employee Contract element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Employee_Contract_Data;
    /**
     * The Include_Contracts_for_Terminated_Workers
     * Meta information extracted from the WSDL
     * - documentation: Include Contracts for Terminated Workers
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Contracts_for_Terminated_Workers;
    /**
     * The Include_Collective_Agreement_Data
     * Meta information extracted from the WSDL
     * - documentation: Include Collective Agreement data. This also requires Include Employment Information to be true.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Collective_Agreement_Data;
    /**
     * The Include_Probation_Period_Data
     * Meta information extracted from the WSDL
     * - documentation: Include Probation Period data. This also requires the Inlcude Employment Information to be true
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Probation_Period_Data;
    /**
     * The Include_Extended_Employee_Contract_Details
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Extended Employee Contracts Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Extended_Employee_Contract_Details;
    /**
     * The Include_Feedback_Received
     * Meta information extracted from the WSDL
     * - documentation: Indicates that Feedback Received will be included in the web service response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Feedback_Received;
    /**
     * The Include_User_Account
     * Meta information extracted from the WSDL
     * - documentation: Indicates that User Account Data will be included in the web service response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_User_Account;
    /**
     * The Include_Career
     * Meta information extracted from the WSDL
     * - documentation: Indicates that Career Data will be included in the web service response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Career;
    /**
     * The Include_Account_Provisioning
     * Meta information extracted from the WSDL
     * - documentation: Indicates that Account Provisioning Data will be included in the web service response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Account_Provisioning;
    /**
     * The Include_Background_Check_Data
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Background Check Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Background_Check_Data;
    /**
     * The Include_Contingent_Worker_Tax_Authority_Form_Information
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the Contingent Worker Tax Authority Form Information Data element is included in the response.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Contingent_Worker_Tax_Authority_Form_Information;
    /**
     * The Exclude_Funds
     * Meta information extracted from the WSDL
     * - documentation: Excludes the Funds from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Funds;
    /**
     * The Exclude_Fund_Hierarchies
     * Meta information extracted from the WSDL
     * - documentation: Excludes the fund hierarchies from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Fund_Hierarchies;
    /**
     * The Exclude_Grants
     * Meta information extracted from the WSDL
     * - documentation: Excludes the Grants from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Grants;
    /**
     * The Exclude_Grant_Hierarchies
     * Meta information extracted from the WSDL
     * - documentation: Excludes the grant hierarchies from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Grant_Hierarchies;
    /**
     * The Exclude_Business_Units
     * Meta information extracted from the WSDL
     * - documentation: Excludes the Business Units from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Business_Units;
    /**
     * The Exclude_Business_Unit_Hierarchies
     * Meta information extracted from the WSDL
     * - documentation: Excludes the business unit hierarchies from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Business_Unit_Hierarchies;
    /**
     * The Exclude_Programs
     * Meta information extracted from the WSDL
     * - documentation: Excludes the Programs from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Programs;
    /**
     * The Exclude_Program_Hierarchies
     * Meta information extracted from the WSDL
     * - documentation: Excludes the program hierarchies from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Program_Hierarchies;
    /**
     * The Exclude_Gifts
     * Meta information extracted from the WSDL
     * - documentation: Excludes the Gifts from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Gifts;
    /**
     * The Exclude_Gift_Hierarchies
     * Meta information extracted from the WSDL
     * - documentation: Excludes the gift hierarchies from the Organization Data element response. This can only be selected when the Include Organization Data boolean is also selected.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Gift_Hierarchies;
    /**
     * Constructor method for Worker_Response_GroupType
     * @uses Worker_Response_GroupType::setInclude_Reference()
     * @uses Worker_Response_GroupType::setInclude_Personal_Information()
     * @uses Worker_Response_GroupType::setInclude_Additional_Jobs()
     * @uses Worker_Response_GroupType::setInclude_Employment_Information()
     * @uses Worker_Response_GroupType::setInclude_Compensation()
     * @uses Worker_Response_GroupType::setInclude_Organizations()
     * @uses Worker_Response_GroupType::setExclude_Organization_Support_Role_Data()
     * @uses Worker_Response_GroupType::setExclude_Location_Hierarchies()
     * @uses Worker_Response_GroupType::setExclude_Cost_Centers()
     * @uses Worker_Response_GroupType::setExclude_Cost_Center_Hierarchies()
     * @uses Worker_Response_GroupType::setExclude_Companies()
     * @uses Worker_Response_GroupType::setExclude_Company_Hierarchies()
     * @uses Worker_Response_GroupType::setExclude_Matrix_Organizations()
     * @uses Worker_Response_GroupType::setExclude_Pay_Groups()
     * @uses Worker_Response_GroupType::setExclude_Regions()
     * @uses Worker_Response_GroupType::setExclude_Region_Hierarchies()
     * @uses Worker_Response_GroupType::setExclude_Supervisory_Organizations()
     * @uses Worker_Response_GroupType::setExclude_Teams()
     * @uses Worker_Response_GroupType::setExclude_Custom_Organizations()
     * @uses Worker_Response_GroupType::setInclude_Roles()
     * @uses Worker_Response_GroupType::setInclude_Management_Chain_Data()
     * @uses Worker_Response_GroupType::setInclude_Multiple_Managers_in_Management_Chain_Data()
     * @uses Worker_Response_GroupType::setInclude_Benefit_Enrollments()
     * @uses Worker_Response_GroupType::setInclude_Benefit_Eligibility()
     * @uses Worker_Response_GroupType::setInclude_Related_Persons()
     * @uses Worker_Response_GroupType::setInclude_Qualifications()
     * @uses Worker_Response_GroupType::setInclude_Employee_Review()
     * @uses Worker_Response_GroupType::setInclude_Goals()
     * @uses Worker_Response_GroupType::setInclude_Development_Items()
     * @uses Worker_Response_GroupType::setInclude_Skills()
     * @uses Worker_Response_GroupType::setInclude_Photo()
     * @uses Worker_Response_GroupType::setInclude_Worker_Documents()
     * @uses Worker_Response_GroupType::setInclude_Transaction_Log_Data()
     * @uses Worker_Response_GroupType::setInclude_Subevents_for_Corrected_Transaction()
     * @uses Worker_Response_GroupType::setInclude_Subevents_for_Rescinded_Transaction()
     * @uses Worker_Response_GroupType::setInclude_Succession_Profile()
     * @uses Worker_Response_GroupType::setInclude_Talent_Assessment()
     * @uses Worker_Response_GroupType::setInclude_Employee_Contract_Data()
     * @uses Worker_Response_GroupType::setInclude_Contracts_for_Terminated_Workers()
     * @uses Worker_Response_GroupType::setInclude_Collective_Agreement_Data()
     * @uses Worker_Response_GroupType::setInclude_Probation_Period_Data()
     * @uses Worker_Response_GroupType::setInclude_Extended_Employee_Contract_Details()
     * @uses Worker_Response_GroupType::setInclude_Feedback_Received()
     * @uses Worker_Response_GroupType::setInclude_User_Account()
     * @uses Worker_Response_GroupType::setInclude_Career()
     * @uses Worker_Response_GroupType::setInclude_Account_Provisioning()
     * @uses Worker_Response_GroupType::setInclude_Background_Check_Data()
     * @uses Worker_Response_GroupType::setInclude_Contingent_Worker_Tax_Authority_Form_Information()
     * @uses Worker_Response_GroupType::setExclude_Funds()
     * @uses Worker_Response_GroupType::setExclude_Fund_Hierarchies()
     * @uses Worker_Response_GroupType::setExclude_Grants()
     * @uses Worker_Response_GroupType::setExclude_Grant_Hierarchies()
     * @uses Worker_Response_GroupType::setExclude_Business_Units()
     * @uses Worker_Response_GroupType::setExclude_Business_Unit_Hierarchies()
     * @uses Worker_Response_GroupType::setExclude_Programs()
     * @uses Worker_Response_GroupType::setExclude_Program_Hierarchies()
     * @uses Worker_Response_GroupType::setExclude_Gifts()
     * @uses Worker_Response_GroupType::setExclude_Gift_Hierarchies()
     * @param bool $include_Reference
     * @param bool $include_Personal_Information
     * @param bool $include_Additional_Jobs
     * @param bool $include_Employment_Information
     * @param bool $include_Compensation
     * @param bool $include_Organizations
     * @param bool $exclude_Organization_Support_Role_Data
     * @param bool $exclude_Location_Hierarchies
     * @param bool $exclude_Cost_Centers
     * @param bool $exclude_Cost_Center_Hierarchies
     * @param bool $exclude_Companies
     * @param bool $exclude_Company_Hierarchies
     * @param bool $exclude_Matrix_Organizations
     * @param bool $exclude_Pay_Groups
     * @param bool $exclude_Regions
     * @param bool $exclude_Region_Hierarchies
     * @param bool $exclude_Supervisory_Organizations
     * @param bool $exclude_Teams
     * @param bool $exclude_Custom_Organizations
     * @param bool $include_Roles
     * @param bool $include_Management_Chain_Data
     * @param bool $include_Multiple_Managers_in_Management_Chain_Data
     * @param bool $include_Benefit_Enrollments
     * @param bool $include_Benefit_Eligibility
     * @param bool $include_Related_Persons
     * @param bool $include_Qualifications
     * @param bool $include_Employee_Review
     * @param bool $include_Goals
     * @param bool $include_Development_Items
     * @param bool $include_Skills
     * @param bool $include_Photo
     * @param bool $include_Worker_Documents
     * @param bool $include_Transaction_Log_Data
     * @param bool $include_Subevents_for_Corrected_Transaction
     * @param bool $include_Subevents_for_Rescinded_Transaction
     * @param bool $include_Succession_Profile
     * @param bool $include_Talent_Assessment
     * @param bool $include_Employee_Contract_Data
     * @param bool $include_Contracts_for_Terminated_Workers
     * @param bool $include_Collective_Agreement_Data
     * @param bool $include_Probation_Period_Data
     * @param bool $include_Extended_Employee_Contract_Details
     * @param bool $include_Feedback_Received
     * @param bool $include_User_Account
     * @param bool $include_Career
     * @param bool $include_Account_Provisioning
     * @param bool $include_Background_Check_Data
     * @param bool $include_Contingent_Worker_Tax_Authority_Form_Information
     * @param bool $exclude_Funds
     * @param bool $exclude_Fund_Hierarchies
     * @param bool $exclude_Grants
     * @param bool $exclude_Grant_Hierarchies
     * @param bool $exclude_Business_Units
     * @param bool $exclude_Business_Unit_Hierarchies
     * @param bool $exclude_Programs
     * @param bool $exclude_Program_Hierarchies
     * @param bool $exclude_Gifts
     * @param bool $exclude_Gift_Hierarchies
     */
    public function __construct($include_Reference = null, $include_Personal_Information = null, $include_Additional_Jobs = null, $include_Employment_Information = null, $include_Compensation = null, $include_Organizations = null, $exclude_Organization_Support_Role_Data = null, $exclude_Location_Hierarchies = null, $exclude_Cost_Centers = null, $exclude_Cost_Center_Hierarchies = null, $exclude_Companies = null, $exclude_Company_Hierarchies = null, $exclude_Matrix_Organizations = null, $exclude_Pay_Groups = null, $exclude_Regions = null, $exclude_Region_Hierarchies = null, $exclude_Supervisory_Organizations = null, $exclude_Teams = null, $exclude_Custom_Organizations = null, $include_Roles = null, $include_Management_Chain_Data = null, $include_Multiple_Managers_in_Management_Chain_Data = null, $include_Benefit_Enrollments = null, $include_Benefit_Eligibility = null, $include_Related_Persons = null, $include_Qualifications = null, $include_Employee_Review = null, $include_Goals = null, $include_Development_Items = null, $include_Skills = null, $include_Photo = null, $include_Worker_Documents = null, $include_Transaction_Log_Data = null, $include_Subevents_for_Corrected_Transaction = null, $include_Subevents_for_Rescinded_Transaction = null, $include_Succession_Profile = null, $include_Talent_Assessment = null, $include_Employee_Contract_Data = null, $include_Contracts_for_Terminated_Workers = null, $include_Collective_Agreement_Data = null, $include_Probation_Period_Data = null, $include_Extended_Employee_Contract_Details = null, $include_Feedback_Received = null, $include_User_Account = null, $include_Career = null, $include_Account_Provisioning = null, $include_Background_Check_Data = null, $include_Contingent_Worker_Tax_Authority_Form_Information = null, $exclude_Funds = null, $exclude_Fund_Hierarchies = null, $exclude_Grants = null, $exclude_Grant_Hierarchies = null, $exclude_Business_Units = null, $exclude_Business_Unit_Hierarchies = null, $exclude_Programs = null, $exclude_Program_Hierarchies = null, $exclude_Gifts = null, $exclude_Gift_Hierarchies = null)
    {
        $this
            ->setInclude_Reference($include_Reference)
            ->setInclude_Personal_Information($include_Personal_Information)
            ->setInclude_Additional_Jobs($include_Additional_Jobs)
            ->setInclude_Employment_Information($include_Employment_Information)
            ->setInclude_Compensation($include_Compensation)
            ->setInclude_Organizations($include_Organizations)
            ->setExclude_Organization_Support_Role_Data($exclude_Organization_Support_Role_Data)
            ->setExclude_Location_Hierarchies($exclude_Location_Hierarchies)
            ->setExclude_Cost_Centers($exclude_Cost_Centers)
            ->setExclude_Cost_Center_Hierarchies($exclude_Cost_Center_Hierarchies)
            ->setExclude_Companies($exclude_Companies)
            ->setExclude_Company_Hierarchies($exclude_Company_Hierarchies)
            ->setExclude_Matrix_Organizations($exclude_Matrix_Organizations)
            ->setExclude_Pay_Groups($exclude_Pay_Groups)
            ->setExclude_Regions($exclude_Regions)
            ->setExclude_Region_Hierarchies($exclude_Region_Hierarchies)
            ->setExclude_Supervisory_Organizations($exclude_Supervisory_Organizations)
            ->setExclude_Teams($exclude_Teams)
            ->setExclude_Custom_Organizations($exclude_Custom_Organizations)
            ->setInclude_Roles($include_Roles)
            ->setInclude_Management_Chain_Data($include_Management_Chain_Data)
            ->setInclude_Multiple_Managers_in_Management_Chain_Data($include_Multiple_Managers_in_Management_Chain_Data)
            ->setInclude_Benefit_Enrollments($include_Benefit_Enrollments)
            ->setInclude_Benefit_Eligibility($include_Benefit_Eligibility)
            ->setInclude_Related_Persons($include_Related_Persons)
            ->setInclude_Qualifications($include_Qualifications)
            ->setInclude_Employee_Review($include_Employee_Review)
            ->setInclude_Goals($include_Goals)
            ->setInclude_Development_Items($include_Development_Items)
            ->setInclude_Skills($include_Skills)
            ->setInclude_Photo($include_Photo)
            ->setInclude_Worker_Documents($include_Worker_Documents)
            ->setInclude_Transaction_Log_Data($include_Transaction_Log_Data)
            ->setInclude_Subevents_for_Corrected_Transaction($include_Subevents_for_Corrected_Transaction)
            ->setInclude_Subevents_for_Rescinded_Transaction($include_Subevents_for_Rescinded_Transaction)
            ->setInclude_Succession_Profile($include_Succession_Profile)
            ->setInclude_Talent_Assessment($include_Talent_Assessment)
            ->setInclude_Employee_Contract_Data($include_Employee_Contract_Data)
            ->setInclude_Contracts_for_Terminated_Workers($include_Contracts_for_Terminated_Workers)
            ->setInclude_Collective_Agreement_Data($include_Collective_Agreement_Data)
            ->setInclude_Probation_Period_Data($include_Probation_Period_Data)
            ->setInclude_Extended_Employee_Contract_Details($include_Extended_Employee_Contract_Details)
            ->setInclude_Feedback_Received($include_Feedback_Received)
            ->setInclude_User_Account($include_User_Account)
            ->setInclude_Career($include_Career)
            ->setInclude_Account_Provisioning($include_Account_Provisioning)
            ->setInclude_Background_Check_Data($include_Background_Check_Data)
            ->setInclude_Contingent_Worker_Tax_Authority_Form_Information($include_Contingent_Worker_Tax_Authority_Form_Information)
            ->setExclude_Funds($exclude_Funds)
            ->setExclude_Fund_Hierarchies($exclude_Fund_Hierarchies)
            ->setExclude_Grants($exclude_Grants)
            ->setExclude_Grant_Hierarchies($exclude_Grant_Hierarchies)
            ->setExclude_Business_Units($exclude_Business_Units)
            ->setExclude_Business_Unit_Hierarchies($exclude_Business_Unit_Hierarchies)
            ->setExclude_Programs($exclude_Programs)
            ->setExclude_Program_Hierarchies($exclude_Program_Hierarchies)
            ->setExclude_Gifts($exclude_Gifts)
            ->setExclude_Gift_Hierarchies($exclude_Gift_Hierarchies);
    }
    /**
     * Get Include_Reference value
     * @return bool|null
     */
    public function getInclude_Reference()
    {
        return $this->Include_Reference;
    }
    /**
     * Set Include_Reference value
     * @param bool $include_Reference
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Reference($include_Reference = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Reference) && !is_bool($include_Reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Reference, true), gettype($include_Reference)), __LINE__);
        }
        $this->Include_Reference = $include_Reference;
        return $this;
    }
    /**
     * Get Include_Personal_Information value
     * @return bool|null
     */
    public function getInclude_Personal_Information()
    {
        return $this->Include_Personal_Information;
    }
    /**
     * Set Include_Personal_Information value
     * @param bool $include_Personal_Information
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Personal_Information($include_Personal_Information = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Personal_Information) && !is_bool($include_Personal_Information)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Personal_Information, true), gettype($include_Personal_Information)), __LINE__);
        }
        $this->Include_Personal_Information = $include_Personal_Information;
        return $this;
    }
    /**
     * Get Include_Additional_Jobs value
     * @return bool|null
     */
    public function getInclude_Additional_Jobs()
    {
        return $this->Include_Additional_Jobs;
    }
    /**
     * Set Include_Additional_Jobs value
     * @param bool $include_Additional_Jobs
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Additional_Jobs($include_Additional_Jobs = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Additional_Jobs) && !is_bool($include_Additional_Jobs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Additional_Jobs, true), gettype($include_Additional_Jobs)), __LINE__);
        }
        $this->Include_Additional_Jobs = $include_Additional_Jobs;
        return $this;
    }
    /**
     * Get Include_Employment_Information value
     * @return bool|null
     */
    public function getInclude_Employment_Information()
    {
        return $this->Include_Employment_Information;
    }
    /**
     * Set Include_Employment_Information value
     * @param bool $include_Employment_Information
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Employment_Information($include_Employment_Information = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Employment_Information) && !is_bool($include_Employment_Information)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Employment_Information, true), gettype($include_Employment_Information)), __LINE__);
        }
        $this->Include_Employment_Information = $include_Employment_Information;
        return $this;
    }
    /**
     * Get Include_Compensation value
     * @return bool|null
     */
    public function getInclude_Compensation()
    {
        return $this->Include_Compensation;
    }
    /**
     * Set Include_Compensation value
     * @param bool $include_Compensation
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Compensation($include_Compensation = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Compensation) && !is_bool($include_Compensation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Compensation, true), gettype($include_Compensation)), __LINE__);
        }
        $this->Include_Compensation = $include_Compensation;
        return $this;
    }
    /**
     * Get Include_Organizations value
     * @return bool|null
     */
    public function getInclude_Organizations()
    {
        return $this->Include_Organizations;
    }
    /**
     * Set Include_Organizations value
     * @param bool $include_Organizations
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Organizations($include_Organizations = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Organizations) && !is_bool($include_Organizations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Organizations, true), gettype($include_Organizations)), __LINE__);
        }
        $this->Include_Organizations = $include_Organizations;
        return $this;
    }
    /**
     * Get Exclude_Organization_Support_Role_Data value
     * @return bool|null
     */
    public function getExclude_Organization_Support_Role_Data()
    {
        return $this->Exclude_Organization_Support_Role_Data;
    }
    /**
     * Set Exclude_Organization_Support_Role_Data value
     * @param bool $exclude_Organization_Support_Role_Data
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Organization_Support_Role_Data($exclude_Organization_Support_Role_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Organization_Support_Role_Data) && !is_bool($exclude_Organization_Support_Role_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Organization_Support_Role_Data, true), gettype($exclude_Organization_Support_Role_Data)), __LINE__);
        }
        $this->Exclude_Organization_Support_Role_Data = $exclude_Organization_Support_Role_Data;
        return $this;
    }
    /**
     * Get Exclude_Location_Hierarchies value
     * @return bool|null
     */
    public function getExclude_Location_Hierarchies()
    {
        return $this->Exclude_Location_Hierarchies;
    }
    /**
     * Set Exclude_Location_Hierarchies value
     * @param bool $exclude_Location_Hierarchies
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Location_Hierarchies($exclude_Location_Hierarchies = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Location_Hierarchies) && !is_bool($exclude_Location_Hierarchies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Location_Hierarchies, true), gettype($exclude_Location_Hierarchies)), __LINE__);
        }
        $this->Exclude_Location_Hierarchies = $exclude_Location_Hierarchies;
        return $this;
    }
    /**
     * Get Exclude_Cost_Centers value
     * @return bool|null
     */
    public function getExclude_Cost_Centers()
    {
        return $this->Exclude_Cost_Centers;
    }
    /**
     * Set Exclude_Cost_Centers value
     * @param bool $exclude_Cost_Centers
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Cost_Centers($exclude_Cost_Centers = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Cost_Centers) && !is_bool($exclude_Cost_Centers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Cost_Centers, true), gettype($exclude_Cost_Centers)), __LINE__);
        }
        $this->Exclude_Cost_Centers = $exclude_Cost_Centers;
        return $this;
    }
    /**
     * Get Exclude_Cost_Center_Hierarchies value
     * @return bool|null
     */
    public function getExclude_Cost_Center_Hierarchies()
    {
        return $this->Exclude_Cost_Center_Hierarchies;
    }
    /**
     * Set Exclude_Cost_Center_Hierarchies value
     * @param bool $exclude_Cost_Center_Hierarchies
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Cost_Center_Hierarchies($exclude_Cost_Center_Hierarchies = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Cost_Center_Hierarchies) && !is_bool($exclude_Cost_Center_Hierarchies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Cost_Center_Hierarchies, true), gettype($exclude_Cost_Center_Hierarchies)), __LINE__);
        }
        $this->Exclude_Cost_Center_Hierarchies = $exclude_Cost_Center_Hierarchies;
        return $this;
    }
    /**
     * Get Exclude_Companies value
     * @return bool|null
     */
    public function getExclude_Companies()
    {
        return $this->Exclude_Companies;
    }
    /**
     * Set Exclude_Companies value
     * @param bool $exclude_Companies
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Companies($exclude_Companies = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Companies) && !is_bool($exclude_Companies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Companies, true), gettype($exclude_Companies)), __LINE__);
        }
        $this->Exclude_Companies = $exclude_Companies;
        return $this;
    }
    /**
     * Get Exclude_Company_Hierarchies value
     * @return bool|null
     */
    public function getExclude_Company_Hierarchies()
    {
        return $this->Exclude_Company_Hierarchies;
    }
    /**
     * Set Exclude_Company_Hierarchies value
     * @param bool $exclude_Company_Hierarchies
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Company_Hierarchies($exclude_Company_Hierarchies = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Company_Hierarchies) && !is_bool($exclude_Company_Hierarchies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Company_Hierarchies, true), gettype($exclude_Company_Hierarchies)), __LINE__);
        }
        $this->Exclude_Company_Hierarchies = $exclude_Company_Hierarchies;
        return $this;
    }
    /**
     * Get Exclude_Matrix_Organizations value
     * @return bool|null
     */
    public function getExclude_Matrix_Organizations()
    {
        return $this->Exclude_Matrix_Organizations;
    }
    /**
     * Set Exclude_Matrix_Organizations value
     * @param bool $exclude_Matrix_Organizations
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Matrix_Organizations($exclude_Matrix_Organizations = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Matrix_Organizations) && !is_bool($exclude_Matrix_Organizations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Matrix_Organizations, true), gettype($exclude_Matrix_Organizations)), __LINE__);
        }
        $this->Exclude_Matrix_Organizations = $exclude_Matrix_Organizations;
        return $this;
    }
    /**
     * Get Exclude_Pay_Groups value
     * @return bool|null
     */
    public function getExclude_Pay_Groups()
    {
        return $this->Exclude_Pay_Groups;
    }
    /**
     * Set Exclude_Pay_Groups value
     * @param bool $exclude_Pay_Groups
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Pay_Groups($exclude_Pay_Groups = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Pay_Groups) && !is_bool($exclude_Pay_Groups)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Pay_Groups, true), gettype($exclude_Pay_Groups)), __LINE__);
        }
        $this->Exclude_Pay_Groups = $exclude_Pay_Groups;
        return $this;
    }
    /**
     * Get Exclude_Regions value
     * @return bool|null
     */
    public function getExclude_Regions()
    {
        return $this->Exclude_Regions;
    }
    /**
     * Set Exclude_Regions value
     * @param bool $exclude_Regions
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Regions($exclude_Regions = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Regions) && !is_bool($exclude_Regions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Regions, true), gettype($exclude_Regions)), __LINE__);
        }
        $this->Exclude_Regions = $exclude_Regions;
        return $this;
    }
    /**
     * Get Exclude_Region_Hierarchies value
     * @return bool|null
     */
    public function getExclude_Region_Hierarchies()
    {
        return $this->Exclude_Region_Hierarchies;
    }
    /**
     * Set Exclude_Region_Hierarchies value
     * @param bool $exclude_Region_Hierarchies
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Region_Hierarchies($exclude_Region_Hierarchies = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Region_Hierarchies) && !is_bool($exclude_Region_Hierarchies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Region_Hierarchies, true), gettype($exclude_Region_Hierarchies)), __LINE__);
        }
        $this->Exclude_Region_Hierarchies = $exclude_Region_Hierarchies;
        return $this;
    }
    /**
     * Get Exclude_Supervisory_Organizations value
     * @return bool|null
     */
    public function getExclude_Supervisory_Organizations()
    {
        return $this->Exclude_Supervisory_Organizations;
    }
    /**
     * Set Exclude_Supervisory_Organizations value
     * @param bool $exclude_Supervisory_Organizations
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Supervisory_Organizations($exclude_Supervisory_Organizations = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Supervisory_Organizations) && !is_bool($exclude_Supervisory_Organizations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Supervisory_Organizations, true), gettype($exclude_Supervisory_Organizations)), __LINE__);
        }
        $this->Exclude_Supervisory_Organizations = $exclude_Supervisory_Organizations;
        return $this;
    }
    /**
     * Get Exclude_Teams value
     * @return bool|null
     */
    public function getExclude_Teams()
    {
        return $this->Exclude_Teams;
    }
    /**
     * Set Exclude_Teams value
     * @param bool $exclude_Teams
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Teams($exclude_Teams = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Teams) && !is_bool($exclude_Teams)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Teams, true), gettype($exclude_Teams)), __LINE__);
        }
        $this->Exclude_Teams = $exclude_Teams;
        return $this;
    }
    /**
     * Get Exclude_Custom_Organizations value
     * @return bool|null
     */
    public function getExclude_Custom_Organizations()
    {
        return $this->Exclude_Custom_Organizations;
    }
    /**
     * Set Exclude_Custom_Organizations value
     * @param bool $exclude_Custom_Organizations
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Custom_Organizations($exclude_Custom_Organizations = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Custom_Organizations) && !is_bool($exclude_Custom_Organizations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Custom_Organizations, true), gettype($exclude_Custom_Organizations)), __LINE__);
        }
        $this->Exclude_Custom_Organizations = $exclude_Custom_Organizations;
        return $this;
    }
    /**
     * Get Include_Roles value
     * @return bool|null
     */
    public function getInclude_Roles()
    {
        return $this->Include_Roles;
    }
    /**
     * Set Include_Roles value
     * @param bool $include_Roles
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Roles($include_Roles = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Roles) && !is_bool($include_Roles)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Roles, true), gettype($include_Roles)), __LINE__);
        }
        $this->Include_Roles = $include_Roles;
        return $this;
    }
    /**
     * Get Include_Management_Chain_Data value
     * @return bool|null
     */
    public function getInclude_Management_Chain_Data()
    {
        return $this->Include_Management_Chain_Data;
    }
    /**
     * Set Include_Management_Chain_Data value
     * @param bool $include_Management_Chain_Data
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Management_Chain_Data($include_Management_Chain_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Management_Chain_Data) && !is_bool($include_Management_Chain_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Management_Chain_Data, true), gettype($include_Management_Chain_Data)), __LINE__);
        }
        $this->Include_Management_Chain_Data = $include_Management_Chain_Data;
        return $this;
    }
    /**
     * Get Include_Multiple_Managers_in_Management_Chain_Data value
     * @return bool|null
     */
    public function getInclude_Multiple_Managers_in_Management_Chain_Data()
    {
        return $this->Include_Multiple_Managers_in_Management_Chain_Data;
    }
    /**
     * Set Include_Multiple_Managers_in_Management_Chain_Data value
     * @param bool $include_Multiple_Managers_in_Management_Chain_Data
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Multiple_Managers_in_Management_Chain_Data($include_Multiple_Managers_in_Management_Chain_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Multiple_Managers_in_Management_Chain_Data) && !is_bool($include_Multiple_Managers_in_Management_Chain_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Multiple_Managers_in_Management_Chain_Data, true), gettype($include_Multiple_Managers_in_Management_Chain_Data)), __LINE__);
        }
        $this->Include_Multiple_Managers_in_Management_Chain_Data = $include_Multiple_Managers_in_Management_Chain_Data;
        return $this;
    }
    /**
     * Get Include_Benefit_Enrollments value
     * @return bool|null
     */
    public function getInclude_Benefit_Enrollments()
    {
        return $this->Include_Benefit_Enrollments;
    }
    /**
     * Set Include_Benefit_Enrollments value
     * @param bool $include_Benefit_Enrollments
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Benefit_Enrollments($include_Benefit_Enrollments = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Benefit_Enrollments) && !is_bool($include_Benefit_Enrollments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Benefit_Enrollments, true), gettype($include_Benefit_Enrollments)), __LINE__);
        }
        $this->Include_Benefit_Enrollments = $include_Benefit_Enrollments;
        return $this;
    }
    /**
     * Get Include_Benefit_Eligibility value
     * @return bool|null
     */
    public function getInclude_Benefit_Eligibility()
    {
        return $this->Include_Benefit_Eligibility;
    }
    /**
     * Set Include_Benefit_Eligibility value
     * @param bool $include_Benefit_Eligibility
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Benefit_Eligibility($include_Benefit_Eligibility = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Benefit_Eligibility) && !is_bool($include_Benefit_Eligibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Benefit_Eligibility, true), gettype($include_Benefit_Eligibility)), __LINE__);
        }
        $this->Include_Benefit_Eligibility = $include_Benefit_Eligibility;
        return $this;
    }
    /**
     * Get Include_Related_Persons value
     * @return bool|null
     */
    public function getInclude_Related_Persons()
    {
        return $this->Include_Related_Persons;
    }
    /**
     * Set Include_Related_Persons value
     * @param bool $include_Related_Persons
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Related_Persons($include_Related_Persons = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Related_Persons) && !is_bool($include_Related_Persons)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Related_Persons, true), gettype($include_Related_Persons)), __LINE__);
        }
        $this->Include_Related_Persons = $include_Related_Persons;
        return $this;
    }
    /**
     * Get Include_Qualifications value
     * @return bool|null
     */
    public function getInclude_Qualifications()
    {
        return $this->Include_Qualifications;
    }
    /**
     * Set Include_Qualifications value
     * @param bool $include_Qualifications
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Qualifications($include_Qualifications = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Qualifications) && !is_bool($include_Qualifications)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Qualifications, true), gettype($include_Qualifications)), __LINE__);
        }
        $this->Include_Qualifications = $include_Qualifications;
        return $this;
    }
    /**
     * Get Include_Employee_Review value
     * @return bool|null
     */
    public function getInclude_Employee_Review()
    {
        return $this->Include_Employee_Review;
    }
    /**
     * Set Include_Employee_Review value
     * @param bool $include_Employee_Review
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Employee_Review($include_Employee_Review = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Employee_Review) && !is_bool($include_Employee_Review)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Employee_Review, true), gettype($include_Employee_Review)), __LINE__);
        }
        $this->Include_Employee_Review = $include_Employee_Review;
        return $this;
    }
    /**
     * Get Include_Goals value
     * @return bool|null
     */
    public function getInclude_Goals()
    {
        return $this->Include_Goals;
    }
    /**
     * Set Include_Goals value
     * @param bool $include_Goals
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Goals($include_Goals = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Goals) && !is_bool($include_Goals)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Goals, true), gettype($include_Goals)), __LINE__);
        }
        $this->Include_Goals = $include_Goals;
        return $this;
    }
    /**
     * Get Include_Development_Items value
     * @return bool|null
     */
    public function getInclude_Development_Items()
    {
        return $this->Include_Development_Items;
    }
    /**
     * Set Include_Development_Items value
     * @param bool $include_Development_Items
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Development_Items($include_Development_Items = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Development_Items) && !is_bool($include_Development_Items)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Development_Items, true), gettype($include_Development_Items)), __LINE__);
        }
        $this->Include_Development_Items = $include_Development_Items;
        return $this;
    }
    /**
     * Get Include_Skills value
     * @return bool|null
     */
    public function getInclude_Skills()
    {
        return $this->Include_Skills;
    }
    /**
     * Set Include_Skills value
     * @param bool $include_Skills
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Skills($include_Skills = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Skills) && !is_bool($include_Skills)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Skills, true), gettype($include_Skills)), __LINE__);
        }
        $this->Include_Skills = $include_Skills;
        return $this;
    }
    /**
     * Get Include_Photo value
     * @return bool|null
     */
    public function getInclude_Photo()
    {
        return $this->Include_Photo;
    }
    /**
     * Set Include_Photo value
     * @param bool $include_Photo
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Photo($include_Photo = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Photo) && !is_bool($include_Photo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Photo, true), gettype($include_Photo)), __LINE__);
        }
        $this->Include_Photo = $include_Photo;
        return $this;
    }
    /**
     * Get Include_Worker_Documents value
     * @return bool|null
     */
    public function getInclude_Worker_Documents()
    {
        return $this->Include_Worker_Documents;
    }
    /**
     * Set Include_Worker_Documents value
     * @param bool $include_Worker_Documents
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Worker_Documents($include_Worker_Documents = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Worker_Documents) && !is_bool($include_Worker_Documents)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Worker_Documents, true), gettype($include_Worker_Documents)), __LINE__);
        }
        $this->Include_Worker_Documents = $include_Worker_Documents;
        return $this;
    }
    /**
     * Get Include_Transaction_Log_Data value
     * @return bool|null
     */
    public function getInclude_Transaction_Log_Data()
    {
        return $this->Include_Transaction_Log_Data;
    }
    /**
     * Set Include_Transaction_Log_Data value
     * @param bool $include_Transaction_Log_Data
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Transaction_Log_Data($include_Transaction_Log_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Transaction_Log_Data) && !is_bool($include_Transaction_Log_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Transaction_Log_Data, true), gettype($include_Transaction_Log_Data)), __LINE__);
        }
        $this->Include_Transaction_Log_Data = $include_Transaction_Log_Data;
        return $this;
    }
    /**
     * Get Include_Subevents_for_Corrected_Transaction value
     * @return bool|null
     */
    public function getInclude_Subevents_for_Corrected_Transaction()
    {
        return $this->Include_Subevents_for_Corrected_Transaction;
    }
    /**
     * Set Include_Subevents_for_Corrected_Transaction value
     * @param bool $include_Subevents_for_Corrected_Transaction
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Subevents_for_Corrected_Transaction($include_Subevents_for_Corrected_Transaction = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Subevents_for_Corrected_Transaction) && !is_bool($include_Subevents_for_Corrected_Transaction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Subevents_for_Corrected_Transaction, true), gettype($include_Subevents_for_Corrected_Transaction)), __LINE__);
        }
        $this->Include_Subevents_for_Corrected_Transaction = $include_Subevents_for_Corrected_Transaction;
        return $this;
    }
    /**
     * Get Include_Subevents_for_Rescinded_Transaction value
     * @return bool|null
     */
    public function getInclude_Subevents_for_Rescinded_Transaction()
    {
        return $this->Include_Subevents_for_Rescinded_Transaction;
    }
    /**
     * Set Include_Subevents_for_Rescinded_Transaction value
     * @param bool $include_Subevents_for_Rescinded_Transaction
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Subevents_for_Rescinded_Transaction($include_Subevents_for_Rescinded_Transaction = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Subevents_for_Rescinded_Transaction) && !is_bool($include_Subevents_for_Rescinded_Transaction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Subevents_for_Rescinded_Transaction, true), gettype($include_Subevents_for_Rescinded_Transaction)), __LINE__);
        }
        $this->Include_Subevents_for_Rescinded_Transaction = $include_Subevents_for_Rescinded_Transaction;
        return $this;
    }
    /**
     * Get Include_Succession_Profile value
     * @return bool|null
     */
    public function getInclude_Succession_Profile()
    {
        return $this->Include_Succession_Profile;
    }
    /**
     * Set Include_Succession_Profile value
     * @param bool $include_Succession_Profile
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Succession_Profile($include_Succession_Profile = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Succession_Profile) && !is_bool($include_Succession_Profile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Succession_Profile, true), gettype($include_Succession_Profile)), __LINE__);
        }
        $this->Include_Succession_Profile = $include_Succession_Profile;
        return $this;
    }
    /**
     * Get Include_Talent_Assessment value
     * @return bool|null
     */
    public function getInclude_Talent_Assessment()
    {
        return $this->Include_Talent_Assessment;
    }
    /**
     * Set Include_Talent_Assessment value
     * @param bool $include_Talent_Assessment
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Talent_Assessment($include_Talent_Assessment = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Talent_Assessment) && !is_bool($include_Talent_Assessment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Talent_Assessment, true), gettype($include_Talent_Assessment)), __LINE__);
        }
        $this->Include_Talent_Assessment = $include_Talent_Assessment;
        return $this;
    }
    /**
     * Get Include_Employee_Contract_Data value
     * @return bool|null
     */
    public function getInclude_Employee_Contract_Data()
    {
        return $this->Include_Employee_Contract_Data;
    }
    /**
     * Set Include_Employee_Contract_Data value
     * @param bool $include_Employee_Contract_Data
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Employee_Contract_Data($include_Employee_Contract_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Employee_Contract_Data) && !is_bool($include_Employee_Contract_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Employee_Contract_Data, true), gettype($include_Employee_Contract_Data)), __LINE__);
        }
        $this->Include_Employee_Contract_Data = $include_Employee_Contract_Data;
        return $this;
    }
    /**
     * Get Include_Contracts_for_Terminated_Workers value
     * @return bool|null
     */
    public function getInclude_Contracts_for_Terminated_Workers()
    {
        return $this->Include_Contracts_for_Terminated_Workers;
    }
    /**
     * Set Include_Contracts_for_Terminated_Workers value
     * @param bool $include_Contracts_for_Terminated_Workers
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Contracts_for_Terminated_Workers($include_Contracts_for_Terminated_Workers = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Contracts_for_Terminated_Workers) && !is_bool($include_Contracts_for_Terminated_Workers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Contracts_for_Terminated_Workers, true), gettype($include_Contracts_for_Terminated_Workers)), __LINE__);
        }
        $this->Include_Contracts_for_Terminated_Workers = $include_Contracts_for_Terminated_Workers;
        return $this;
    }
    /**
     * Get Include_Collective_Agreement_Data value
     * @return bool|null
     */
    public function getInclude_Collective_Agreement_Data()
    {
        return $this->Include_Collective_Agreement_Data;
    }
    /**
     * Set Include_Collective_Agreement_Data value
     * @param bool $include_Collective_Agreement_Data
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Collective_Agreement_Data($include_Collective_Agreement_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Collective_Agreement_Data) && !is_bool($include_Collective_Agreement_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Collective_Agreement_Data, true), gettype($include_Collective_Agreement_Data)), __LINE__);
        }
        $this->Include_Collective_Agreement_Data = $include_Collective_Agreement_Data;
        return $this;
    }
    /**
     * Get Include_Probation_Period_Data value
     * @return bool|null
     */
    public function getInclude_Probation_Period_Data()
    {
        return $this->Include_Probation_Period_Data;
    }
    /**
     * Set Include_Probation_Period_Data value
     * @param bool $include_Probation_Period_Data
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Probation_Period_Data($include_Probation_Period_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Probation_Period_Data) && !is_bool($include_Probation_Period_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Probation_Period_Data, true), gettype($include_Probation_Period_Data)), __LINE__);
        }
        $this->Include_Probation_Period_Data = $include_Probation_Period_Data;
        return $this;
    }
    /**
     * Get Include_Extended_Employee_Contract_Details value
     * @return bool|null
     */
    public function getInclude_Extended_Employee_Contract_Details()
    {
        return $this->Include_Extended_Employee_Contract_Details;
    }
    /**
     * Set Include_Extended_Employee_Contract_Details value
     * @param bool $include_Extended_Employee_Contract_Details
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Extended_Employee_Contract_Details($include_Extended_Employee_Contract_Details = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Extended_Employee_Contract_Details) && !is_bool($include_Extended_Employee_Contract_Details)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Extended_Employee_Contract_Details, true), gettype($include_Extended_Employee_Contract_Details)), __LINE__);
        }
        $this->Include_Extended_Employee_Contract_Details = $include_Extended_Employee_Contract_Details;
        return $this;
    }
    /**
     * Get Include_Feedback_Received value
     * @return bool|null
     */
    public function getInclude_Feedback_Received()
    {
        return $this->Include_Feedback_Received;
    }
    /**
     * Set Include_Feedback_Received value
     * @param bool $include_Feedback_Received
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Feedback_Received($include_Feedback_Received = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Feedback_Received) && !is_bool($include_Feedback_Received)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Feedback_Received, true), gettype($include_Feedback_Received)), __LINE__);
        }
        $this->Include_Feedback_Received = $include_Feedback_Received;
        return $this;
    }
    /**
     * Get Include_User_Account value
     * @return bool|null
     */
    public function getInclude_User_Account()
    {
        return $this->Include_User_Account;
    }
    /**
     * Set Include_User_Account value
     * @param bool $include_User_Account
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_User_Account($include_User_Account = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_User_Account) && !is_bool($include_User_Account)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_User_Account, true), gettype($include_User_Account)), __LINE__);
        }
        $this->Include_User_Account = $include_User_Account;
        return $this;
    }
    /**
     * Get Include_Career value
     * @return bool|null
     */
    public function getInclude_Career()
    {
        return $this->Include_Career;
    }
    /**
     * Set Include_Career value
     * @param bool $include_Career
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Career($include_Career = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Career) && !is_bool($include_Career)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Career, true), gettype($include_Career)), __LINE__);
        }
        $this->Include_Career = $include_Career;
        return $this;
    }
    /**
     * Get Include_Account_Provisioning value
     * @return bool|null
     */
    public function getInclude_Account_Provisioning()
    {
        return $this->Include_Account_Provisioning;
    }
    /**
     * Set Include_Account_Provisioning value
     * @param bool $include_Account_Provisioning
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Account_Provisioning($include_Account_Provisioning = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Account_Provisioning) && !is_bool($include_Account_Provisioning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Account_Provisioning, true), gettype($include_Account_Provisioning)), __LINE__);
        }
        $this->Include_Account_Provisioning = $include_Account_Provisioning;
        return $this;
    }
    /**
     * Get Include_Background_Check_Data value
     * @return bool|null
     */
    public function getInclude_Background_Check_Data()
    {
        return $this->Include_Background_Check_Data;
    }
    /**
     * Set Include_Background_Check_Data value
     * @param bool $include_Background_Check_Data
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Background_Check_Data($include_Background_Check_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Background_Check_Data) && !is_bool($include_Background_Check_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Background_Check_Data, true), gettype($include_Background_Check_Data)), __LINE__);
        }
        $this->Include_Background_Check_Data = $include_Background_Check_Data;
        return $this;
    }
    /**
     * Get Include_Contingent_Worker_Tax_Authority_Form_Information value
     * @return bool|null
     */
    public function getInclude_Contingent_Worker_Tax_Authority_Form_Information()
    {
        return $this->Include_Contingent_Worker_Tax_Authority_Form_Information;
    }
    /**
     * Set Include_Contingent_Worker_Tax_Authority_Form_Information value
     * @param bool $include_Contingent_Worker_Tax_Authority_Form_Information
     * @return \StructType\Worker_Response_GroupType
     */
    public function setInclude_Contingent_Worker_Tax_Authority_Form_Information($include_Contingent_Worker_Tax_Authority_Form_Information = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Contingent_Worker_Tax_Authority_Form_Information) && !is_bool($include_Contingent_Worker_Tax_Authority_Form_Information)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Contingent_Worker_Tax_Authority_Form_Information, true), gettype($include_Contingent_Worker_Tax_Authority_Form_Information)), __LINE__);
        }
        $this->Include_Contingent_Worker_Tax_Authority_Form_Information = $include_Contingent_Worker_Tax_Authority_Form_Information;
        return $this;
    }
    /**
     * Get Exclude_Funds value
     * @return bool|null
     */
    public function getExclude_Funds()
    {
        return $this->Exclude_Funds;
    }
    /**
     * Set Exclude_Funds value
     * @param bool $exclude_Funds
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Funds($exclude_Funds = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Funds) && !is_bool($exclude_Funds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Funds, true), gettype($exclude_Funds)), __LINE__);
        }
        $this->Exclude_Funds = $exclude_Funds;
        return $this;
    }
    /**
     * Get Exclude_Fund_Hierarchies value
     * @return bool|null
     */
    public function getExclude_Fund_Hierarchies()
    {
        return $this->Exclude_Fund_Hierarchies;
    }
    /**
     * Set Exclude_Fund_Hierarchies value
     * @param bool $exclude_Fund_Hierarchies
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Fund_Hierarchies($exclude_Fund_Hierarchies = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Fund_Hierarchies) && !is_bool($exclude_Fund_Hierarchies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Fund_Hierarchies, true), gettype($exclude_Fund_Hierarchies)), __LINE__);
        }
        $this->Exclude_Fund_Hierarchies = $exclude_Fund_Hierarchies;
        return $this;
    }
    /**
     * Get Exclude_Grants value
     * @return bool|null
     */
    public function getExclude_Grants()
    {
        return $this->Exclude_Grants;
    }
    /**
     * Set Exclude_Grants value
     * @param bool $exclude_Grants
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Grants($exclude_Grants = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Grants) && !is_bool($exclude_Grants)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Grants, true), gettype($exclude_Grants)), __LINE__);
        }
        $this->Exclude_Grants = $exclude_Grants;
        return $this;
    }
    /**
     * Get Exclude_Grant_Hierarchies value
     * @return bool|null
     */
    public function getExclude_Grant_Hierarchies()
    {
        return $this->Exclude_Grant_Hierarchies;
    }
    /**
     * Set Exclude_Grant_Hierarchies value
     * @param bool $exclude_Grant_Hierarchies
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Grant_Hierarchies($exclude_Grant_Hierarchies = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Grant_Hierarchies) && !is_bool($exclude_Grant_Hierarchies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Grant_Hierarchies, true), gettype($exclude_Grant_Hierarchies)), __LINE__);
        }
        $this->Exclude_Grant_Hierarchies = $exclude_Grant_Hierarchies;
        return $this;
    }
    /**
     * Get Exclude_Business_Units value
     * @return bool|null
     */
    public function getExclude_Business_Units()
    {
        return $this->Exclude_Business_Units;
    }
    /**
     * Set Exclude_Business_Units value
     * @param bool $exclude_Business_Units
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Business_Units($exclude_Business_Units = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Business_Units) && !is_bool($exclude_Business_Units)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Business_Units, true), gettype($exclude_Business_Units)), __LINE__);
        }
        $this->Exclude_Business_Units = $exclude_Business_Units;
        return $this;
    }
    /**
     * Get Exclude_Business_Unit_Hierarchies value
     * @return bool|null
     */
    public function getExclude_Business_Unit_Hierarchies()
    {
        return $this->Exclude_Business_Unit_Hierarchies;
    }
    /**
     * Set Exclude_Business_Unit_Hierarchies value
     * @param bool $exclude_Business_Unit_Hierarchies
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Business_Unit_Hierarchies($exclude_Business_Unit_Hierarchies = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Business_Unit_Hierarchies) && !is_bool($exclude_Business_Unit_Hierarchies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Business_Unit_Hierarchies, true), gettype($exclude_Business_Unit_Hierarchies)), __LINE__);
        }
        $this->Exclude_Business_Unit_Hierarchies = $exclude_Business_Unit_Hierarchies;
        return $this;
    }
    /**
     * Get Exclude_Programs value
     * @return bool|null
     */
    public function getExclude_Programs()
    {
        return $this->Exclude_Programs;
    }
    /**
     * Set Exclude_Programs value
     * @param bool $exclude_Programs
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Programs($exclude_Programs = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Programs) && !is_bool($exclude_Programs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Programs, true), gettype($exclude_Programs)), __LINE__);
        }
        $this->Exclude_Programs = $exclude_Programs;
        return $this;
    }
    /**
     * Get Exclude_Program_Hierarchies value
     * @return bool|null
     */
    public function getExclude_Program_Hierarchies()
    {
        return $this->Exclude_Program_Hierarchies;
    }
    /**
     * Set Exclude_Program_Hierarchies value
     * @param bool $exclude_Program_Hierarchies
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Program_Hierarchies($exclude_Program_Hierarchies = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Program_Hierarchies) && !is_bool($exclude_Program_Hierarchies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Program_Hierarchies, true), gettype($exclude_Program_Hierarchies)), __LINE__);
        }
        $this->Exclude_Program_Hierarchies = $exclude_Program_Hierarchies;
        return $this;
    }
    /**
     * Get Exclude_Gifts value
     * @return bool|null
     */
    public function getExclude_Gifts()
    {
        return $this->Exclude_Gifts;
    }
    /**
     * Set Exclude_Gifts value
     * @param bool $exclude_Gifts
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Gifts($exclude_Gifts = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Gifts) && !is_bool($exclude_Gifts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Gifts, true), gettype($exclude_Gifts)), __LINE__);
        }
        $this->Exclude_Gifts = $exclude_Gifts;
        return $this;
    }
    /**
     * Get Exclude_Gift_Hierarchies value
     * @return bool|null
     */
    public function getExclude_Gift_Hierarchies()
    {
        return $this->Exclude_Gift_Hierarchies;
    }
    /**
     * Set Exclude_Gift_Hierarchies value
     * @param bool $exclude_Gift_Hierarchies
     * @return \StructType\Worker_Response_GroupType
     */
    public function setExclude_Gift_Hierarchies($exclude_Gift_Hierarchies = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Gift_Hierarchies) && !is_bool($exclude_Gift_Hierarchies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Gift_Hierarchies, true), gettype($exclude_Gift_Hierarchies)), __LINE__);
        }
        $this->Exclude_Gift_Hierarchies = $exclude_Gift_Hierarchies;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Response_GroupType
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
