<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the detailed information about a worker.
 * @subpackage Structs
 */
class Worker_DataType extends AbstractStructBase
{
    /**
     * The Worker_ID
     * Meta information extracted from the WSDL
     * - documentation: The ID for the employee or contingent worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Worker_ID;
    /**
     * The User_ID
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying User Name.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $User_ID;
    /**
     * The Universal_ID
     * Meta information extracted from the WSDL
     * - documentation: Universal ID for the worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Universal_ID;
    /**
     * The Personal_Data
     * Meta information extracted from the WSDL
     * - documentation: Personal Data
     * - minOccurs: 0
     * @var \StructType\Personal_Information_DataType
     */
    public $Personal_Data;
    /**
     * The Employment_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the worker's employment information, such as their position and job information.Security Note: This element is secured to the following domains: Self-Service: Current Staffing Information, Worker Data: Current Staffing
     * Information
     * - minOccurs: 0
     * @var \StructType\Worker_Employment_Information_DataType
     */
    public $Employment_Data;
    /**
     * The Compensation_Data
     * Meta information extracted from the WSDL
     * - documentation: Compensation Data
     * - minOccurs: 0
     * @var \StructType\Worker_Compensation_DataType
     */
    public $Compensation_Data;
    /**
     * The Organization_Data
     * Meta information extracted from the WSDL
     * - documentation: Organization Data
     * - minOccurs: 0
     * @var \StructType\Worker_Organization_DataType
     */
    public $Organization_Data;
    /**
     * The Role_Data
     * Meta information extracted from the WSDL
     * - documentation: Role Data
     * - minOccurs: 0
     * @var \StructType\Worker_Role_DataType
     */
    public $Role_Data;
    /**
     * The Management_Chain_Data
     * Meta information extracted from the WSDL
     * - documentation: Management Chain Data
     * - minOccurs: 0
     * @var \StructType\Worker_Management_Chain_DataType
     */
    public $Management_Chain_Data;
    /**
     * The Benefit_Enrollment_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the worker's benefits information.Security Note: This element is secured to the following domains: Self Service: Benefit Elections; Worker Data: Benefit Elections
     * - minOccurs: 0
     * @var \StructType\Worker_Benefit_Enrollment_DataType
     */
    public $Benefit_Enrollment_Data;
    /**
     * The Benefit_Eligibility_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the worker's benefit eligibility information for all Benefit Plan criteria that is not in the current plan year definition.
     * - minOccurs: 0
     * @var \StructType\Worker_Benefit_Eligibility_DataType
     */
    public $Benefit_Eligibility_Data;
    /**
     * The Related_Person_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the person's that are related to the worker as a dependent, beneficiary or emergency contact.Security Note: This element is secured to the following domains: Self Service: Benefit Elections; Worker Data: Benefit Elections
     * - minOccurs: 0
     * @var \StructType\Worker_Related_Persons_DataType
     */
    public $Related_Person_Data;
    /**
     * The Qualification_Data
     * Meta information extracted from the WSDL
     * - documentation: Qualification Data
     * - minOccurs: 0
     * @var \StructType\Person_Qualification_DataType
     */
    public $Qualification_Data;
    /**
     * The Employee_Review_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the employee's latest review for performance, performance improvement plan, development plan, and disciplinary action. This is only valid for a worker than is an employee.Security Note: This element is secured to the
     * following domains: Worker Data: Employee Reviews, Self Service: Employee Reviews
     * - minOccurs: 0
     * @var \StructType\Employee_Review_DataType
     */
    public $Employee_Review_Data;
    /**
     * The Photo_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains a photo of the worker.Security Note: This element is not secured so anyone that can run this web service has access to this element.
     * - minOccurs: 0
     * @var \StructType\Employee_Image_DataType
     */
    public $Photo_Data;
    /**
     * The Worker_Document_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the documents that were added for a worker during staffing events or ad-hoc.Security Note: This element is not secured so anyone that can run this web service has access to this element.
     * - minOccurs: 0
     * @var \StructType\Worker_Document_Data_WWSType
     */
    public $Worker_Document_Data;
    /**
     * The Integration_Field_Override_Data
     * Meta information extracted from the WSDL
     * - documentation: Worker External Field Result Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Document_Field_Result_DataType[]
     */
    public $Integration_Field_Override_Data;
    /**
     * The Transaction_Log_Entry_Data
     * Meta information extracted from the WSDL
     * - documentation: Transaction Log Entry Data
     * - minOccurs: 0
     * @var \StructType\Event_Target_Transaction_Log_Entry_DataType
     */
    public $Transaction_Log_Entry_Data;
    /**
     * The Transaction_Log_Corrected_And_Rescinded_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Event_Target_Transaction_Log_Rescind_And_Correct_DataType[]
     */
    public $Transaction_Log_Corrected_And_Rescinded_Data;
    /**
     * The Succession_Profile_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains a list of positions for which the employee is a succession candidate. This is only valid for a worker than is an employee.Security Note: This element is secured to the following domain: Worker Data: Succession.
     * - minOccurs: 0
     * @var \StructType\Succession_Profile_DataType
     */
    public $Succession_Profile_Data;
    /**
     * The Talent_Assessment_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the employee's latest talent assessment, such as potential, achievable level, and retention. This is only valid for a worker than is an employee.Security Note: This element is secured to the following domain: Worker Data:
     * Talent.
     * - minOccurs: 0
     * @var \StructType\Talent_Assessment_DataType
     */
    public $Talent_Assessment_Data;
    /**
     * The Worker_Goal_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the employee's goals and is similar to the content that is found in the Employee Goals UI page for an employee.Security Note: This element is secured to the following domain: Worker Data: Employee Goals
     * - minOccurs: 0
     * @var \StructType\Worker_Goal_DataType
     */
    public $Worker_Goal_Data;
    /**
     * The Development_Item_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the employee's development items and is similar to the content that is found in the Development Items UI page for an employee.
     * - minOccurs: 0
     * @var \StructType\Worker_Development_Item_DataType
     */
    public $Development_Item_Data;
    /**
     * The Skill_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Skill_Item_DataType
     */
    public $Skill_Data;
    /**
     * The Employee_Contracts_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the employee's contract information.
     * - minOccurs: 0
     * @var \StructType\Employee_Contracts_DataType
     */
    public $Employee_Contracts_Data;
    /**
     * The Extended_Employee_Contracts_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the extended employee's contract information.
     * - minOccurs: 0
     * @var \StructType\Extended_Employee_Contracts_DataType
     */
    public $Extended_Employee_Contracts_Data;
    /**
     * The Feedback_Received_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the employee's feedback received
     * - minOccurs: 0
     * @var \StructType\Feedback_Received_DataType
     */
    public $Feedback_Received_Data;
    /**
     * The User_Account_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the worker's user account information (user name, preferred language).
     * - minOccurs: 0
     * @var \StructType\System_User_for_Worker_DataType
     */
    public $User_Account_Data;
    /**
     * The Career_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Career_DataType
     */
    public $Career_Data;
    /**
     * The Account_Provisioning_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the worker's provisioning group assignments
     * - minOccurs: 0
     * @var \StructType\Person_Account_Provisioning_DataType
     */
    public $Account_Provisioning_Data;
    /**
     * The Background_Check_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains Background Check Information
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Background_Check_Overall_Status_DataType[]
     */
    public $Background_Check_Data;
    /**
     * The Contingent_Worker_Tax_Authority_Form_Type_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Contingent_Worker_Tax_Authority_Form_Information_DataType[]
     */
    public $Contingent_Worker_Tax_Authority_Form_Type_Data;
    /**
     * Constructor method for Worker_DataType
     * @uses Worker_DataType::setWorker_ID()
     * @uses Worker_DataType::setUser_ID()
     * @uses Worker_DataType::setUniversal_ID()
     * @uses Worker_DataType::setPersonal_Data()
     * @uses Worker_DataType::setEmployment_Data()
     * @uses Worker_DataType::setCompensation_Data()
     * @uses Worker_DataType::setOrganization_Data()
     * @uses Worker_DataType::setRole_Data()
     * @uses Worker_DataType::setManagement_Chain_Data()
     * @uses Worker_DataType::setBenefit_Enrollment_Data()
     * @uses Worker_DataType::setBenefit_Eligibility_Data()
     * @uses Worker_DataType::setRelated_Person_Data()
     * @uses Worker_DataType::setQualification_Data()
     * @uses Worker_DataType::setEmployee_Review_Data()
     * @uses Worker_DataType::setPhoto_Data()
     * @uses Worker_DataType::setWorker_Document_Data()
     * @uses Worker_DataType::setIntegration_Field_Override_Data()
     * @uses Worker_DataType::setTransaction_Log_Entry_Data()
     * @uses Worker_DataType::setTransaction_Log_Corrected_And_Rescinded_Data()
     * @uses Worker_DataType::setSuccession_Profile_Data()
     * @uses Worker_DataType::setTalent_Assessment_Data()
     * @uses Worker_DataType::setWorker_Goal_Data()
     * @uses Worker_DataType::setDevelopment_Item_Data()
     * @uses Worker_DataType::setSkill_Data()
     * @uses Worker_DataType::setEmployee_Contracts_Data()
     * @uses Worker_DataType::setExtended_Employee_Contracts_Data()
     * @uses Worker_DataType::setFeedback_Received_Data()
     * @uses Worker_DataType::setUser_Account_Data()
     * @uses Worker_DataType::setCareer_Data()
     * @uses Worker_DataType::setAccount_Provisioning_Data()
     * @uses Worker_DataType::setBackground_Check_Data()
     * @uses Worker_DataType::setContingent_Worker_Tax_Authority_Form_Type_Data()
     * @param string $worker_ID
     * @param string $user_ID
     * @param string $universal_ID
     * @param \StructType\Personal_Information_DataType $personal_Data
     * @param \StructType\Worker_Employment_Information_DataType $employment_Data
     * @param \StructType\Worker_Compensation_DataType $compensation_Data
     * @param \StructType\Worker_Organization_DataType $organization_Data
     * @param \StructType\Worker_Role_DataType $role_Data
     * @param \StructType\Worker_Management_Chain_DataType $management_Chain_Data
     * @param \StructType\Worker_Benefit_Enrollment_DataType $benefit_Enrollment_Data
     * @param \StructType\Worker_Benefit_Eligibility_DataType $benefit_Eligibility_Data
     * @param \StructType\Worker_Related_Persons_DataType $related_Person_Data
     * @param \StructType\Person_Qualification_DataType $qualification_Data
     * @param \StructType\Employee_Review_DataType $employee_Review_Data
     * @param \StructType\Employee_Image_DataType $photo_Data
     * @param \StructType\Worker_Document_Data_WWSType $worker_Document_Data
     * @param \StructType\Document_Field_Result_DataType[] $integration_Field_Override_Data
     * @param \StructType\Event_Target_Transaction_Log_Entry_DataType $transaction_Log_Entry_Data
     * @param \StructType\Event_Target_Transaction_Log_Rescind_And_Correct_DataType[] $transaction_Log_Corrected_And_Rescinded_Data
     * @param \StructType\Succession_Profile_DataType $succession_Profile_Data
     * @param \StructType\Talent_Assessment_DataType $talent_Assessment_Data
     * @param \StructType\Worker_Goal_DataType $worker_Goal_Data
     * @param \StructType\Worker_Development_Item_DataType $development_Item_Data
     * @param \StructType\Worker_Skill_Item_DataType $skill_Data
     * @param \StructType\Employee_Contracts_DataType $employee_Contracts_Data
     * @param \StructType\Extended_Employee_Contracts_DataType $extended_Employee_Contracts_Data
     * @param \StructType\Feedback_Received_DataType $feedback_Received_Data
     * @param \StructType\System_User_for_Worker_DataType $user_Account_Data
     * @param \StructType\Worker_Career_DataType $career_Data
     * @param \StructType\Person_Account_Provisioning_DataType $account_Provisioning_Data
     * @param \StructType\Background_Check_Overall_Status_DataType[] $background_Check_Data
     * @param \StructType\Contingent_Worker_Tax_Authority_Form_Information_DataType[] $contingent_Worker_Tax_Authority_Form_Type_Data
     */
    public function __construct($worker_ID = null, $user_ID = null, $universal_ID = null, \StructType\Personal_Information_DataType $personal_Data = null, \StructType\Worker_Employment_Information_DataType $employment_Data = null, \StructType\Worker_Compensation_DataType $compensation_Data = null, \StructType\Worker_Organization_DataType $organization_Data = null, \StructType\Worker_Role_DataType $role_Data = null, \StructType\Worker_Management_Chain_DataType $management_Chain_Data = null, \StructType\Worker_Benefit_Enrollment_DataType $benefit_Enrollment_Data = null, \StructType\Worker_Benefit_Eligibility_DataType $benefit_Eligibility_Data = null, \StructType\Worker_Related_Persons_DataType $related_Person_Data = null, \StructType\Person_Qualification_DataType $qualification_Data = null, \StructType\Employee_Review_DataType $employee_Review_Data = null, \StructType\Employee_Image_DataType $photo_Data = null, \StructType\Worker_Document_Data_WWSType $worker_Document_Data = null, array $integration_Field_Override_Data = array(), \StructType\Event_Target_Transaction_Log_Entry_DataType $transaction_Log_Entry_Data = null, array $transaction_Log_Corrected_And_Rescinded_Data = array(), \StructType\Succession_Profile_DataType $succession_Profile_Data = null, \StructType\Talent_Assessment_DataType $talent_Assessment_Data = null, \StructType\Worker_Goal_DataType $worker_Goal_Data = null, \StructType\Worker_Development_Item_DataType $development_Item_Data = null, \StructType\Worker_Skill_Item_DataType $skill_Data = null, \StructType\Employee_Contracts_DataType $employee_Contracts_Data = null, \StructType\Extended_Employee_Contracts_DataType $extended_Employee_Contracts_Data = null, \StructType\Feedback_Received_DataType $feedback_Received_Data = null, \StructType\System_User_for_Worker_DataType $user_Account_Data = null, \StructType\Worker_Career_DataType $career_Data = null, \StructType\Person_Account_Provisioning_DataType $account_Provisioning_Data = null, array $background_Check_Data = array(), array $contingent_Worker_Tax_Authority_Form_Type_Data = array())
    {
        $this
            ->setWorker_ID($worker_ID)
            ->setUser_ID($user_ID)
            ->setUniversal_ID($universal_ID)
            ->setPersonal_Data($personal_Data)
            ->setEmployment_Data($employment_Data)
            ->setCompensation_Data($compensation_Data)
            ->setOrganization_Data($organization_Data)
            ->setRole_Data($role_Data)
            ->setManagement_Chain_Data($management_Chain_Data)
            ->setBenefit_Enrollment_Data($benefit_Enrollment_Data)
            ->setBenefit_Eligibility_Data($benefit_Eligibility_Data)
            ->setRelated_Person_Data($related_Person_Data)
            ->setQualification_Data($qualification_Data)
            ->setEmployee_Review_Data($employee_Review_Data)
            ->setPhoto_Data($photo_Data)
            ->setWorker_Document_Data($worker_Document_Data)
            ->setIntegration_Field_Override_Data($integration_Field_Override_Data)
            ->setTransaction_Log_Entry_Data($transaction_Log_Entry_Data)
            ->setTransaction_Log_Corrected_And_Rescinded_Data($transaction_Log_Corrected_And_Rescinded_Data)
            ->setSuccession_Profile_Data($succession_Profile_Data)
            ->setTalent_Assessment_Data($talent_Assessment_Data)
            ->setWorker_Goal_Data($worker_Goal_Data)
            ->setDevelopment_Item_Data($development_Item_Data)
            ->setSkill_Data($skill_Data)
            ->setEmployee_Contracts_Data($employee_Contracts_Data)
            ->setExtended_Employee_Contracts_Data($extended_Employee_Contracts_Data)
            ->setFeedback_Received_Data($feedback_Received_Data)
            ->setUser_Account_Data($user_Account_Data)
            ->setCareer_Data($career_Data)
            ->setAccount_Provisioning_Data($account_Provisioning_Data)
            ->setBackground_Check_Data($background_Check_Data)
            ->setContingent_Worker_Tax_Authority_Form_Type_Data($contingent_Worker_Tax_Authority_Form_Type_Data);
    }
    /**
     * Get Worker_ID value
     * @return string|null
     */
    public function getWorker_ID()
    {
        return $this->Worker_ID;
    }
    /**
     * Set Worker_ID value
     * @param string $worker_ID
     * @return \StructType\Worker_DataType
     */
    public function setWorker_ID($worker_ID = null)
    {
        // validation for constraint: string
        if (!is_null($worker_ID) && !is_string($worker_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($worker_ID, true), gettype($worker_ID)), __LINE__);
        }
        $this->Worker_ID = $worker_ID;
        return $this;
    }
    /**
     * Get User_ID value
     * @return string|null
     */
    public function getUser_ID()
    {
        return $this->User_ID;
    }
    /**
     * Set User_ID value
     * @param string $user_ID
     * @return \StructType\Worker_DataType
     */
    public function setUser_ID($user_ID = null)
    {
        // validation for constraint: string
        if (!is_null($user_ID) && !is_string($user_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user_ID, true), gettype($user_ID)), __LINE__);
        }
        $this->User_ID = $user_ID;
        return $this;
    }
    /**
     * Get Universal_ID value
     * @return string|null
     */
    public function getUniversal_ID()
    {
        return $this->Universal_ID;
    }
    /**
     * Set Universal_ID value
     * @param string $universal_ID
     * @return \StructType\Worker_DataType
     */
    public function setUniversal_ID($universal_ID = null)
    {
        // validation for constraint: string
        if (!is_null($universal_ID) && !is_string($universal_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($universal_ID, true), gettype($universal_ID)), __LINE__);
        }
        $this->Universal_ID = $universal_ID;
        return $this;
    }
    /**
     * Get Personal_Data value
     * @return \StructType\Personal_Information_DataType|null
     */
    public function getPersonal_Data()
    {
        return $this->Personal_Data;
    }
    /**
     * Set Personal_Data value
     * @param \StructType\Personal_Information_DataType $personal_Data
     * @return \StructType\Worker_DataType
     */
    public function setPersonal_Data(\StructType\Personal_Information_DataType $personal_Data = null)
    {
        $this->Personal_Data = $personal_Data;
        return $this;
    }
    /**
     * Get Employment_Data value
     * @return \StructType\Worker_Employment_Information_DataType|null
     */
    public function getEmployment_Data()
    {
        return $this->Employment_Data;
    }
    /**
     * Set Employment_Data value
     * @param \StructType\Worker_Employment_Information_DataType $employment_Data
     * @return \StructType\Worker_DataType
     */
    public function setEmployment_Data(\StructType\Worker_Employment_Information_DataType $employment_Data = null)
    {
        $this->Employment_Data = $employment_Data;
        return $this;
    }
    /**
     * Get Compensation_Data value
     * @return \StructType\Worker_Compensation_DataType|null
     */
    public function getCompensation_Data()
    {
        return $this->Compensation_Data;
    }
    /**
     * Set Compensation_Data value
     * @param \StructType\Worker_Compensation_DataType $compensation_Data
     * @return \StructType\Worker_DataType
     */
    public function setCompensation_Data(\StructType\Worker_Compensation_DataType $compensation_Data = null)
    {
        $this->Compensation_Data = $compensation_Data;
        return $this;
    }
    /**
     * Get Organization_Data value
     * @return \StructType\Worker_Organization_DataType|null
     */
    public function getOrganization_Data()
    {
        return $this->Organization_Data;
    }
    /**
     * Set Organization_Data value
     * @param \StructType\Worker_Organization_DataType $organization_Data
     * @return \StructType\Worker_DataType
     */
    public function setOrganization_Data(\StructType\Worker_Organization_DataType $organization_Data = null)
    {
        $this->Organization_Data = $organization_Data;
        return $this;
    }
    /**
     * Get Role_Data value
     * @return \StructType\Worker_Role_DataType|null
     */
    public function getRole_Data()
    {
        return $this->Role_Data;
    }
    /**
     * Set Role_Data value
     * @param \StructType\Worker_Role_DataType $role_Data
     * @return \StructType\Worker_DataType
     */
    public function setRole_Data(\StructType\Worker_Role_DataType $role_Data = null)
    {
        $this->Role_Data = $role_Data;
        return $this;
    }
    /**
     * Get Management_Chain_Data value
     * @return \StructType\Worker_Management_Chain_DataType|null
     */
    public function getManagement_Chain_Data()
    {
        return $this->Management_Chain_Data;
    }
    /**
     * Set Management_Chain_Data value
     * @param \StructType\Worker_Management_Chain_DataType $management_Chain_Data
     * @return \StructType\Worker_DataType
     */
    public function setManagement_Chain_Data(\StructType\Worker_Management_Chain_DataType $management_Chain_Data = null)
    {
        $this->Management_Chain_Data = $management_Chain_Data;
        return $this;
    }
    /**
     * Get Benefit_Enrollment_Data value
     * @return \StructType\Worker_Benefit_Enrollment_DataType|null
     */
    public function getBenefit_Enrollment_Data()
    {
        return $this->Benefit_Enrollment_Data;
    }
    /**
     * Set Benefit_Enrollment_Data value
     * @param \StructType\Worker_Benefit_Enrollment_DataType $benefit_Enrollment_Data
     * @return \StructType\Worker_DataType
     */
    public function setBenefit_Enrollment_Data(\StructType\Worker_Benefit_Enrollment_DataType $benefit_Enrollment_Data = null)
    {
        $this->Benefit_Enrollment_Data = $benefit_Enrollment_Data;
        return $this;
    }
    /**
     * Get Benefit_Eligibility_Data value
     * @return \StructType\Worker_Benefit_Eligibility_DataType|null
     */
    public function getBenefit_Eligibility_Data()
    {
        return $this->Benefit_Eligibility_Data;
    }
    /**
     * Set Benefit_Eligibility_Data value
     * @param \StructType\Worker_Benefit_Eligibility_DataType $benefit_Eligibility_Data
     * @return \StructType\Worker_DataType
     */
    public function setBenefit_Eligibility_Data(\StructType\Worker_Benefit_Eligibility_DataType $benefit_Eligibility_Data = null)
    {
        $this->Benefit_Eligibility_Data = $benefit_Eligibility_Data;
        return $this;
    }
    /**
     * Get Related_Person_Data value
     * @return \StructType\Worker_Related_Persons_DataType|null
     */
    public function getRelated_Person_Data()
    {
        return $this->Related_Person_Data;
    }
    /**
     * Set Related_Person_Data value
     * @param \StructType\Worker_Related_Persons_DataType $related_Person_Data
     * @return \StructType\Worker_DataType
     */
    public function setRelated_Person_Data(\StructType\Worker_Related_Persons_DataType $related_Person_Data = null)
    {
        $this->Related_Person_Data = $related_Person_Data;
        return $this;
    }
    /**
     * Get Qualification_Data value
     * @return \StructType\Person_Qualification_DataType|null
     */
    public function getQualification_Data()
    {
        return $this->Qualification_Data;
    }
    /**
     * Set Qualification_Data value
     * @param \StructType\Person_Qualification_DataType $qualification_Data
     * @return \StructType\Worker_DataType
     */
    public function setQualification_Data(\StructType\Person_Qualification_DataType $qualification_Data = null)
    {
        $this->Qualification_Data = $qualification_Data;
        return $this;
    }
    /**
     * Get Employee_Review_Data value
     * @return \StructType\Employee_Review_DataType|null
     */
    public function getEmployee_Review_Data()
    {
        return $this->Employee_Review_Data;
    }
    /**
     * Set Employee_Review_Data value
     * @param \StructType\Employee_Review_DataType $employee_Review_Data
     * @return \StructType\Worker_DataType
     */
    public function setEmployee_Review_Data(\StructType\Employee_Review_DataType $employee_Review_Data = null)
    {
        $this->Employee_Review_Data = $employee_Review_Data;
        return $this;
    }
    /**
     * Get Photo_Data value
     * @return \StructType\Employee_Image_DataType|null
     */
    public function getPhoto_Data()
    {
        return $this->Photo_Data;
    }
    /**
     * Set Photo_Data value
     * @param \StructType\Employee_Image_DataType $photo_Data
     * @return \StructType\Worker_DataType
     */
    public function setPhoto_Data(\StructType\Employee_Image_DataType $photo_Data = null)
    {
        $this->Photo_Data = $photo_Data;
        return $this;
    }
    /**
     * Get Worker_Document_Data value
     * @return \StructType\Worker_Document_Data_WWSType|null
     */
    public function getWorker_Document_Data()
    {
        return $this->Worker_Document_Data;
    }
    /**
     * Set Worker_Document_Data value
     * @param \StructType\Worker_Document_Data_WWSType $worker_Document_Data
     * @return \StructType\Worker_DataType
     */
    public function setWorker_Document_Data(\StructType\Worker_Document_Data_WWSType $worker_Document_Data = null)
    {
        $this->Worker_Document_Data = $worker_Document_Data;
        return $this;
    }
    /**
     * Get Integration_Field_Override_Data value
     * @return \StructType\Document_Field_Result_DataType[]|null
     */
    public function getIntegration_Field_Override_Data()
    {
        return $this->Integration_Field_Override_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setIntegration_Field_Override_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIntegration_Field_Override_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIntegration_Field_Override_DataForArrayConstraintsFromSetIntegration_Field_Override_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_DataTypeIntegration_Field_Override_DataItem) {
            // validation for constraint: itemType
            if (!$worker_DataTypeIntegration_Field_Override_DataItem instanceof \StructType\Document_Field_Result_DataType) {
                $invalidValues[] = is_object($worker_DataTypeIntegration_Field_Override_DataItem) ? get_class($worker_DataTypeIntegration_Field_Override_DataItem) : sprintf('%s(%s)', gettype($worker_DataTypeIntegration_Field_Override_DataItem), var_export($worker_DataTypeIntegration_Field_Override_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Integration_Field_Override_Data property can only contain items of type \StructType\Document_Field_Result_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Integration_Field_Override_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Document_Field_Result_DataType[] $integration_Field_Override_Data
     * @return \StructType\Worker_DataType
     */
    public function setIntegration_Field_Override_Data(array $integration_Field_Override_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($integration_Field_Override_DataArrayErrorMessage = self::validateIntegration_Field_Override_DataForArrayConstraintsFromSetIntegration_Field_Override_Data($integration_Field_Override_Data))) {
            throw new \InvalidArgumentException($integration_Field_Override_DataArrayErrorMessage, __LINE__);
        }
        $this->Integration_Field_Override_Data = $integration_Field_Override_Data;
        return $this;
    }
    /**
     * Add item to Integration_Field_Override_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Document_Field_Result_DataType $item
     * @return \StructType\Worker_DataType
     */
    public function addToIntegration_Field_Override_Data(\StructType\Document_Field_Result_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Document_Field_Result_DataType) {
            throw new \InvalidArgumentException(sprintf('The Integration_Field_Override_Data property can only contain items of type \StructType\Document_Field_Result_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Integration_Field_Override_Data[] = $item;
        return $this;
    }
    /**
     * Get Transaction_Log_Entry_Data value
     * @return \StructType\Event_Target_Transaction_Log_Entry_DataType|null
     */
    public function getTransaction_Log_Entry_Data()
    {
        return $this->Transaction_Log_Entry_Data;
    }
    /**
     * Set Transaction_Log_Entry_Data value
     * @param \StructType\Event_Target_Transaction_Log_Entry_DataType $transaction_Log_Entry_Data
     * @return \StructType\Worker_DataType
     */
    public function setTransaction_Log_Entry_Data(\StructType\Event_Target_Transaction_Log_Entry_DataType $transaction_Log_Entry_Data = null)
    {
        $this->Transaction_Log_Entry_Data = $transaction_Log_Entry_Data;
        return $this;
    }
    /**
     * Get Transaction_Log_Corrected_And_Rescinded_Data value
     * @return \StructType\Event_Target_Transaction_Log_Rescind_And_Correct_DataType[]|null
     */
    public function getTransaction_Log_Corrected_And_Rescinded_Data()
    {
        return $this->Transaction_Log_Corrected_And_Rescinded_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setTransaction_Log_Corrected_And_Rescinded_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction_Log_Corrected_And_Rescinded_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransaction_Log_Corrected_And_Rescinded_DataForArrayConstraintsFromSetTransaction_Log_Corrected_And_Rescinded_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_DataTypeTransaction_Log_Corrected_And_Rescinded_DataItem) {
            // validation for constraint: itemType
            if (!$worker_DataTypeTransaction_Log_Corrected_And_Rescinded_DataItem instanceof \StructType\Event_Target_Transaction_Log_Rescind_And_Correct_DataType) {
                $invalidValues[] = is_object($worker_DataTypeTransaction_Log_Corrected_And_Rescinded_DataItem) ? get_class($worker_DataTypeTransaction_Log_Corrected_And_Rescinded_DataItem) : sprintf('%s(%s)', gettype($worker_DataTypeTransaction_Log_Corrected_And_Rescinded_DataItem), var_export($worker_DataTypeTransaction_Log_Corrected_And_Rescinded_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Transaction_Log_Corrected_And_Rescinded_Data property can only contain items of type \StructType\Event_Target_Transaction_Log_Rescind_And_Correct_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Transaction_Log_Corrected_And_Rescinded_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Event_Target_Transaction_Log_Rescind_And_Correct_DataType[] $transaction_Log_Corrected_And_Rescinded_Data
     * @return \StructType\Worker_DataType
     */
    public function setTransaction_Log_Corrected_And_Rescinded_Data(array $transaction_Log_Corrected_And_Rescinded_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($transaction_Log_Corrected_And_Rescinded_DataArrayErrorMessage = self::validateTransaction_Log_Corrected_And_Rescinded_DataForArrayConstraintsFromSetTransaction_Log_Corrected_And_Rescinded_Data($transaction_Log_Corrected_And_Rescinded_Data))) {
            throw new \InvalidArgumentException($transaction_Log_Corrected_And_Rescinded_DataArrayErrorMessage, __LINE__);
        }
        $this->Transaction_Log_Corrected_And_Rescinded_Data = $transaction_Log_Corrected_And_Rescinded_Data;
        return $this;
    }
    /**
     * Add item to Transaction_Log_Corrected_And_Rescinded_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Event_Target_Transaction_Log_Rescind_And_Correct_DataType $item
     * @return \StructType\Worker_DataType
     */
    public function addToTransaction_Log_Corrected_And_Rescinded_Data(\StructType\Event_Target_Transaction_Log_Rescind_And_Correct_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Event_Target_Transaction_Log_Rescind_And_Correct_DataType) {
            throw new \InvalidArgumentException(sprintf('The Transaction_Log_Corrected_And_Rescinded_Data property can only contain items of type \StructType\Event_Target_Transaction_Log_Rescind_And_Correct_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Transaction_Log_Corrected_And_Rescinded_Data[] = $item;
        return $this;
    }
    /**
     * Get Succession_Profile_Data value
     * @return \StructType\Succession_Profile_DataType|null
     */
    public function getSuccession_Profile_Data()
    {
        return $this->Succession_Profile_Data;
    }
    /**
     * Set Succession_Profile_Data value
     * @param \StructType\Succession_Profile_DataType $succession_Profile_Data
     * @return \StructType\Worker_DataType
     */
    public function setSuccession_Profile_Data(\StructType\Succession_Profile_DataType $succession_Profile_Data = null)
    {
        $this->Succession_Profile_Data = $succession_Profile_Data;
        return $this;
    }
    /**
     * Get Talent_Assessment_Data value
     * @return \StructType\Talent_Assessment_DataType|null
     */
    public function getTalent_Assessment_Data()
    {
        return $this->Talent_Assessment_Data;
    }
    /**
     * Set Talent_Assessment_Data value
     * @param \StructType\Talent_Assessment_DataType $talent_Assessment_Data
     * @return \StructType\Worker_DataType
     */
    public function setTalent_Assessment_Data(\StructType\Talent_Assessment_DataType $talent_Assessment_Data = null)
    {
        $this->Talent_Assessment_Data = $talent_Assessment_Data;
        return $this;
    }
    /**
     * Get Worker_Goal_Data value
     * @return \StructType\Worker_Goal_DataType|null
     */
    public function getWorker_Goal_Data()
    {
        return $this->Worker_Goal_Data;
    }
    /**
     * Set Worker_Goal_Data value
     * @param \StructType\Worker_Goal_DataType $worker_Goal_Data
     * @return \StructType\Worker_DataType
     */
    public function setWorker_Goal_Data(\StructType\Worker_Goal_DataType $worker_Goal_Data = null)
    {
        $this->Worker_Goal_Data = $worker_Goal_Data;
        return $this;
    }
    /**
     * Get Development_Item_Data value
     * @return \StructType\Worker_Development_Item_DataType|null
     */
    public function getDevelopment_Item_Data()
    {
        return $this->Development_Item_Data;
    }
    /**
     * Set Development_Item_Data value
     * @param \StructType\Worker_Development_Item_DataType $development_Item_Data
     * @return \StructType\Worker_DataType
     */
    public function setDevelopment_Item_Data(\StructType\Worker_Development_Item_DataType $development_Item_Data = null)
    {
        $this->Development_Item_Data = $development_Item_Data;
        return $this;
    }
    /**
     * Get Skill_Data value
     * @return \StructType\Worker_Skill_Item_DataType|null
     */
    public function getSkill_Data()
    {
        return $this->Skill_Data;
    }
    /**
     * Set Skill_Data value
     * @param \StructType\Worker_Skill_Item_DataType $skill_Data
     * @return \StructType\Worker_DataType
     */
    public function setSkill_Data(\StructType\Worker_Skill_Item_DataType $skill_Data = null)
    {
        $this->Skill_Data = $skill_Data;
        return $this;
    }
    /**
     * Get Employee_Contracts_Data value
     * @return \StructType\Employee_Contracts_DataType|null
     */
    public function getEmployee_Contracts_Data()
    {
        return $this->Employee_Contracts_Data;
    }
    /**
     * Set Employee_Contracts_Data value
     * @param \StructType\Employee_Contracts_DataType $employee_Contracts_Data
     * @return \StructType\Worker_DataType
     */
    public function setEmployee_Contracts_Data(\StructType\Employee_Contracts_DataType $employee_Contracts_Data = null)
    {
        $this->Employee_Contracts_Data = $employee_Contracts_Data;
        return $this;
    }
    /**
     * Get Extended_Employee_Contracts_Data value
     * @return \StructType\Extended_Employee_Contracts_DataType|null
     */
    public function getExtended_Employee_Contracts_Data()
    {
        return $this->Extended_Employee_Contracts_Data;
    }
    /**
     * Set Extended_Employee_Contracts_Data value
     * @param \StructType\Extended_Employee_Contracts_DataType $extended_Employee_Contracts_Data
     * @return \StructType\Worker_DataType
     */
    public function setExtended_Employee_Contracts_Data(\StructType\Extended_Employee_Contracts_DataType $extended_Employee_Contracts_Data = null)
    {
        $this->Extended_Employee_Contracts_Data = $extended_Employee_Contracts_Data;
        return $this;
    }
    /**
     * Get Feedback_Received_Data value
     * @return \StructType\Feedback_Received_DataType|null
     */
    public function getFeedback_Received_Data()
    {
        return $this->Feedback_Received_Data;
    }
    /**
     * Set Feedback_Received_Data value
     * @param \StructType\Feedback_Received_DataType $feedback_Received_Data
     * @return \StructType\Worker_DataType
     */
    public function setFeedback_Received_Data(\StructType\Feedback_Received_DataType $feedback_Received_Data = null)
    {
        $this->Feedback_Received_Data = $feedback_Received_Data;
        return $this;
    }
    /**
     * Get User_Account_Data value
     * @return \StructType\System_User_for_Worker_DataType|null
     */
    public function getUser_Account_Data()
    {
        return $this->User_Account_Data;
    }
    /**
     * Set User_Account_Data value
     * @param \StructType\System_User_for_Worker_DataType $user_Account_Data
     * @return \StructType\Worker_DataType
     */
    public function setUser_Account_Data(\StructType\System_User_for_Worker_DataType $user_Account_Data = null)
    {
        $this->User_Account_Data = $user_Account_Data;
        return $this;
    }
    /**
     * Get Career_Data value
     * @return \StructType\Worker_Career_DataType|null
     */
    public function getCareer_Data()
    {
        return $this->Career_Data;
    }
    /**
     * Set Career_Data value
     * @param \StructType\Worker_Career_DataType $career_Data
     * @return \StructType\Worker_DataType
     */
    public function setCareer_Data(\StructType\Worker_Career_DataType $career_Data = null)
    {
        $this->Career_Data = $career_Data;
        return $this;
    }
    /**
     * Get Account_Provisioning_Data value
     * @return \StructType\Person_Account_Provisioning_DataType|null
     */
    public function getAccount_Provisioning_Data()
    {
        return $this->Account_Provisioning_Data;
    }
    /**
     * Set Account_Provisioning_Data value
     * @param \StructType\Person_Account_Provisioning_DataType $account_Provisioning_Data
     * @return \StructType\Worker_DataType
     */
    public function setAccount_Provisioning_Data(\StructType\Person_Account_Provisioning_DataType $account_Provisioning_Data = null)
    {
        $this->Account_Provisioning_Data = $account_Provisioning_Data;
        return $this;
    }
    /**
     * Get Background_Check_Data value
     * @return \StructType\Background_Check_Overall_Status_DataType[]|null
     */
    public function getBackground_Check_Data()
    {
        return $this->Background_Check_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setBackground_Check_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBackground_Check_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBackground_Check_DataForArrayConstraintsFromSetBackground_Check_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_DataTypeBackground_Check_DataItem) {
            // validation for constraint: itemType
            if (!$worker_DataTypeBackground_Check_DataItem instanceof \StructType\Background_Check_Overall_Status_DataType) {
                $invalidValues[] = is_object($worker_DataTypeBackground_Check_DataItem) ? get_class($worker_DataTypeBackground_Check_DataItem) : sprintf('%s(%s)', gettype($worker_DataTypeBackground_Check_DataItem), var_export($worker_DataTypeBackground_Check_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Background_Check_Data property can only contain items of type \StructType\Background_Check_Overall_Status_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Background_Check_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Background_Check_Overall_Status_DataType[] $background_Check_Data
     * @return \StructType\Worker_DataType
     */
    public function setBackground_Check_Data(array $background_Check_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($background_Check_DataArrayErrorMessage = self::validateBackground_Check_DataForArrayConstraintsFromSetBackground_Check_Data($background_Check_Data))) {
            throw new \InvalidArgumentException($background_Check_DataArrayErrorMessage, __LINE__);
        }
        $this->Background_Check_Data = $background_Check_Data;
        return $this;
    }
    /**
     * Add item to Background_Check_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Background_Check_Overall_Status_DataType $item
     * @return \StructType\Worker_DataType
     */
    public function addToBackground_Check_Data(\StructType\Background_Check_Overall_Status_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Background_Check_Overall_Status_DataType) {
            throw new \InvalidArgumentException(sprintf('The Background_Check_Data property can only contain items of type \StructType\Background_Check_Overall_Status_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Background_Check_Data[] = $item;
        return $this;
    }
    /**
     * Get Contingent_Worker_Tax_Authority_Form_Type_Data value
     * @return \StructType\Contingent_Worker_Tax_Authority_Form_Information_DataType[]|null
     */
    public function getContingent_Worker_Tax_Authority_Form_Type_Data()
    {
        return $this->Contingent_Worker_Tax_Authority_Form_Type_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setContingent_Worker_Tax_Authority_Form_Type_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContingent_Worker_Tax_Authority_Form_Type_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContingent_Worker_Tax_Authority_Form_Type_DataForArrayConstraintsFromSetContingent_Worker_Tax_Authority_Form_Type_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_DataTypeContingent_Worker_Tax_Authority_Form_Type_DataItem) {
            // validation for constraint: itemType
            if (!$worker_DataTypeContingent_Worker_Tax_Authority_Form_Type_DataItem instanceof \StructType\Contingent_Worker_Tax_Authority_Form_Information_DataType) {
                $invalidValues[] = is_object($worker_DataTypeContingent_Worker_Tax_Authority_Form_Type_DataItem) ? get_class($worker_DataTypeContingent_Worker_Tax_Authority_Form_Type_DataItem) : sprintf('%s(%s)', gettype($worker_DataTypeContingent_Worker_Tax_Authority_Form_Type_DataItem), var_export($worker_DataTypeContingent_Worker_Tax_Authority_Form_Type_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contingent_Worker_Tax_Authority_Form_Type_Data property can only contain items of type \StructType\Contingent_Worker_Tax_Authority_Form_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Contingent_Worker_Tax_Authority_Form_Type_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Contingent_Worker_Tax_Authority_Form_Information_DataType[] $contingent_Worker_Tax_Authority_Form_Type_Data
     * @return \StructType\Worker_DataType
     */
    public function setContingent_Worker_Tax_Authority_Form_Type_Data(array $contingent_Worker_Tax_Authority_Form_Type_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($contingent_Worker_Tax_Authority_Form_Type_DataArrayErrorMessage = self::validateContingent_Worker_Tax_Authority_Form_Type_DataForArrayConstraintsFromSetContingent_Worker_Tax_Authority_Form_Type_Data($contingent_Worker_Tax_Authority_Form_Type_Data))) {
            throw new \InvalidArgumentException($contingent_Worker_Tax_Authority_Form_Type_DataArrayErrorMessage, __LINE__);
        }
        $this->Contingent_Worker_Tax_Authority_Form_Type_Data = $contingent_Worker_Tax_Authority_Form_Type_Data;
        return $this;
    }
    /**
     * Add item to Contingent_Worker_Tax_Authority_Form_Type_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Contingent_Worker_Tax_Authority_Form_Information_DataType $item
     * @return \StructType\Worker_DataType
     */
    public function addToContingent_Worker_Tax_Authority_Form_Type_Data(\StructType\Contingent_Worker_Tax_Authority_Form_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Contingent_Worker_Tax_Authority_Form_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Contingent_Worker_Tax_Authority_Form_Type_Data property can only contain items of type \StructType\Contingent_Worker_Tax_Authority_Form_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Contingent_Worker_Tax_Authority_Form_Type_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_DataType
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
