<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for System_User_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Validates that the code provided matches one of the locale codes in the Workday system. | Validates that an email address is available if the random password option is specified. | Validates that a password is provided (or will be
 * generated) for a new Workday account. | Validates that the user name provided is not already in use by another system user. | The data necessary to create or update a user's account in the Workday system.
 * @subpackage Structs
 */
class System_User_DataType extends AbstractStructBase
{
    /**
     * The User_Name
     * Meta information extracted from the WSDL
     * - documentation: The user name the new user will use to sign on to Workday.
     * - maxOccurs: 1
     * @var string
     */
    public $User_Name;
    /**
     * The Session_Timeout_Minutes
     * Meta information extracted from the WSDL
     * - documentation: Validates that the timeout setting is between 5 and 720 minutes. | The number of minutes the user may be idle before the system requires them to re-enter their user name and password.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minInclusive: 0
     * - minOccurs: 0
     * - totalDigits: 3
     * @var float
     */
    public $Session_Timeout_Minutes;
    /**
     * The Account_Disabled
     * Meta information extracted from the WSDL
     * - documentation: The user is prevented from signing on to the system.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Account_Disabled;
    /**
     * The Account_Expiration_Date
     * Meta information extracted from the WSDL
     * - documentation: The user will be prevented from signing on to the system after this date (Pacific Time).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Account_Expiration_Date;
    /**
     * The Account_Locked
     * Meta information extracted from the WSDL
     * - documentation: The user is prevented from signing on to the system until their account is unlocked.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Account_Locked;
    /**
     * The Required_New_Password_At_Next_Login
     * Meta information extracted from the WSDL
     * - documentation: The user will be required to change their password upon initial sign on.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Required_New_Password_At_Next_Login;
    /**
     * The Show_User_Name_in_Browser_Window
     * Meta information extracted from the WSDL
     * - documentation: The web browser title will include the user name in parenthesis.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Show_User_Name_in_Browser_Window;
    /**
     * The Display_XML_Icon_on_Reports
     * Meta information extracted from the WSDL
     * - documentation: The user will be presented with an icon to view reports as an RSS feed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Display_XML_Icon_on_Reports;
    /**
     * The Enable_Workbox
     * Meta information extracted from the WSDL
     * - documentation: The user will have the Workbox tab available in the right-side slide-out.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Enable_Workbox;
    /**
     * The Locale_Reference
     * Meta information extracted from the WSDL
     * - documentation: The local defines the user's language and country which will affect their experience in the Workday system.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LocaleObjectType
     */
    public $Locale_Reference;
    /**
     * The User_Language_Reference
     * Meta information extracted from the WSDL
     * - documentation: If set, specifies language for user. If not set, language specification taken from Locale_Reference parameter.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\User_LanguageObjectType
     */
    public $User_Language_Reference;
    /**
     * The Preferred_Search_Scope_Reference
     * Meta information extracted from the WSDL
     * - documentation: If set, specifies the initial search category displayed to the user.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Preferred_Search_Scope_Reference;
    /**
     * The Delegated_Authentication_Integration_System_Reference
     * Meta information extracted from the WSDL
     * - documentation: The user will be authenticated via an external system.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Integration_System__Audited_ObjectType
     */
    public $Delegated_Authentication_Integration_System_Reference;
    /**
     * The Allow_Mixed_Language_Transactions
     * Meta information extracted from the WSDL
     * - documentation: The user is allowed to view mixed language transactions.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Allow_Mixed_Language_Transactions;
    /**
     * The Notification_Sub_Type_Configurations
     * Meta information extracted from the WSDL
     * - documentation: Notification Type Configurations for a particular user
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Notification_Sub_Category_Configurations_for_UsersType[]
     */
    public $Notification_Sub_Type_Configurations;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - documentation: Validates that the password conforms to the configured password rules. | The initial password the user will sign on with.
     * - choice: Password | Generate_Random_Password
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Password;
    /**
     * The Generate_Random_Password
     * Meta information extracted from the WSDL
     * - documentation: The system should generate a random password for the user.
     * - choice: Password | Generate_Random_Password
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Generate_Random_Password;
    /**
     * The Exempt_from_Delegated_Authentication
     * Meta information extracted from the WSDL
     * - documentation: True when the user is exempt from Delegated Authentication, False otherwise. Set this element to true if you want the user to be exempt from delegated authentication.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exempt_from_Delegated_Authentication;
    /**
     * The Passcode_Exempt
     * Meta information extracted from the WSDL
     * - documentation: True when the user is exempt from One-Time Passcode Authentication, False otherwise. Set this element to true if you want the user to be exempt from one-time passcode authentication.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Passcode_Exempt;
    /**
     * The Passcode_Grace_Period_Enabled
     * Meta information extracted from the WSDL
     * - documentation: True when the user's One-Time Passcode grace period is enabled, False otherwise. Set this element to false if you want the user's one-time passcode grace period to be disabled.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Passcode_Grace_Period_Enabled;
    /**
     * The Passcode_Grace_Period_Login_Remaining_Count
     * Meta information extracted from the WSDL
     * - documentation: The remaining number of times the user can login without providing a one-time passcode. This cannot be higher than the configured tenant maximum grace period login count.
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 12
     * @var float
     */
    public $Passcode_Grace_Period_Login_Remaining_Count;
    /**
     * The OpenID_Identifier
     * Meta information extracted from the WSDL
     * - documentation: This field is used for OpenID based authentication and contains the email address associated with the OpenID account. This value needs to be provided to enable OpenID authentication for this user.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OpenID_Identifier;
    /**
     * The OpenID_Internal_Identifier
     * Meta information extracted from the WSDL
     * - documentation: This field is used for OpenID based authentication and contains the OpenID GUID. It will be unpopulated until the user completes an initial successful OpenID authentication attempt.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OpenID_Internal_Identifier;
    /**
     * The OpenID_Connect_Internal_Identifier
     * Meta information extracted from the WSDL
     * - documentation: This field is used for OpenID Connect based authentication and contains the OpenID Connect subject. It will be unpopulated until the user completes an initial successful OpenID Connect authentication attempt.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OpenID_Connect_Internal_Identifier;
    /**
     * The Simplified_View
     * Meta information extracted from the WSDL
     * - documentation: To enable user preferences that simplify the overall user experience.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Simplified_View;
    /**
     * Constructor method for System_User_DataType
     * @uses System_User_DataType::setUser_Name()
     * @uses System_User_DataType::setSession_Timeout_Minutes()
     * @uses System_User_DataType::setAccount_Disabled()
     * @uses System_User_DataType::setAccount_Expiration_Date()
     * @uses System_User_DataType::setAccount_Locked()
     * @uses System_User_DataType::setRequired_New_Password_At_Next_Login()
     * @uses System_User_DataType::setShow_User_Name_in_Browser_Window()
     * @uses System_User_DataType::setDisplay_XML_Icon_on_Reports()
     * @uses System_User_DataType::setEnable_Workbox()
     * @uses System_User_DataType::setLocale_Reference()
     * @uses System_User_DataType::setUser_Language_Reference()
     * @uses System_User_DataType::setPreferred_Search_Scope_Reference()
     * @uses System_User_DataType::setDelegated_Authentication_Integration_System_Reference()
     * @uses System_User_DataType::setAllow_Mixed_Language_Transactions()
     * @uses System_User_DataType::setNotification_Sub_Type_Configurations()
     * @uses System_User_DataType::setPassword()
     * @uses System_User_DataType::setGenerate_Random_Password()
     * @uses System_User_DataType::setExempt_from_Delegated_Authentication()
     * @uses System_User_DataType::setPasscode_Exempt()
     * @uses System_User_DataType::setPasscode_Grace_Period_Enabled()
     * @uses System_User_DataType::setPasscode_Grace_Period_Login_Remaining_Count()
     * @uses System_User_DataType::setOpenID_Identifier()
     * @uses System_User_DataType::setOpenID_Internal_Identifier()
     * @uses System_User_DataType::setOpenID_Connect_Internal_Identifier()
     * @uses System_User_DataType::setSimplified_View()
     * @param string $user_Name
     * @param float $session_Timeout_Minutes
     * @param bool $account_Disabled
     * @param string $account_Expiration_Date
     * @param bool $account_Locked
     * @param bool $required_New_Password_At_Next_Login
     * @param bool $show_User_Name_in_Browser_Window
     * @param bool $display_XML_Icon_on_Reports
     * @param bool $enable_Workbox
     * @param \WorkdayWsdl\\StructType\LocaleObjectType $locale_Reference
     * @param \WorkdayWsdl\\StructType\User_LanguageObjectType $user_Language_Reference
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $preferred_Search_Scope_Reference
     * @param \WorkdayWsdl\\StructType\Integration_System__Audited_ObjectType $delegated_Authentication_Integration_System_Reference
     * @param bool $allow_Mixed_Language_Transactions
     * @param \WorkdayWsdl\\StructType\Notification_Sub_Category_Configurations_for_UsersType[] $notification_Sub_Type_Configurations
     * @param string $password
     * @param bool $generate_Random_Password
     * @param bool $exempt_from_Delegated_Authentication
     * @param bool $passcode_Exempt
     * @param bool $passcode_Grace_Period_Enabled
     * @param float $passcode_Grace_Period_Login_Remaining_Count
     * @param string $openID_Identifier
     * @param string $openID_Internal_Identifier
     * @param string $openID_Connect_Internal_Identifier
     * @param bool $simplified_View
     */
    public function __construct($user_Name = null, $session_Timeout_Minutes = null, $account_Disabled = null, $account_Expiration_Date = null, $account_Locked = null, $required_New_Password_At_Next_Login = null, $show_User_Name_in_Browser_Window = null, $display_XML_Icon_on_Reports = null, $enable_Workbox = null, \WorkdayWsdl\\StructType\LocaleObjectType $locale_Reference = null, \WorkdayWsdl\\StructType\User_LanguageObjectType $user_Language_Reference = null, \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $preferred_Search_Scope_Reference = null, \WorkdayWsdl\\StructType\Integration_System__Audited_ObjectType $delegated_Authentication_Integration_System_Reference = null, $allow_Mixed_Language_Transactions = null, array $notification_Sub_Type_Configurations = array(), $password = null, $generate_Random_Password = null, $exempt_from_Delegated_Authentication = null, $passcode_Exempt = null, $passcode_Grace_Period_Enabled = null, $passcode_Grace_Period_Login_Remaining_Count = null, $openID_Identifier = null, $openID_Internal_Identifier = null, $openID_Connect_Internal_Identifier = null, $simplified_View = null)
    {
        $this
            ->setUser_Name($user_Name)
            ->setSession_Timeout_Minutes($session_Timeout_Minutes)
            ->setAccount_Disabled($account_Disabled)
            ->setAccount_Expiration_Date($account_Expiration_Date)
            ->setAccount_Locked($account_Locked)
            ->setRequired_New_Password_At_Next_Login($required_New_Password_At_Next_Login)
            ->setShow_User_Name_in_Browser_Window($show_User_Name_in_Browser_Window)
            ->setDisplay_XML_Icon_on_Reports($display_XML_Icon_on_Reports)
            ->setEnable_Workbox($enable_Workbox)
            ->setLocale_Reference($locale_Reference)
            ->setUser_Language_Reference($user_Language_Reference)
            ->setPreferred_Search_Scope_Reference($preferred_Search_Scope_Reference)
            ->setDelegated_Authentication_Integration_System_Reference($delegated_Authentication_Integration_System_Reference)
            ->setAllow_Mixed_Language_Transactions($allow_Mixed_Language_Transactions)
            ->setNotification_Sub_Type_Configurations($notification_Sub_Type_Configurations)
            ->setPassword($password)
            ->setGenerate_Random_Password($generate_Random_Password)
            ->setExempt_from_Delegated_Authentication($exempt_from_Delegated_Authentication)
            ->setPasscode_Exempt($passcode_Exempt)
            ->setPasscode_Grace_Period_Enabled($passcode_Grace_Period_Enabled)
            ->setPasscode_Grace_Period_Login_Remaining_Count($passcode_Grace_Period_Login_Remaining_Count)
            ->setOpenID_Identifier($openID_Identifier)
            ->setOpenID_Internal_Identifier($openID_Internal_Identifier)
            ->setOpenID_Connect_Internal_Identifier($openID_Connect_Internal_Identifier)
            ->setSimplified_View($simplified_View);
    }
    /**
     * Get User_Name value
     * @return string|null
     */
    public function getUser_Name()
    {
        return $this->User_Name;
    }
    /**
     * Set User_Name value
     * @param string $user_Name
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setUser_Name($user_Name = null)
    {
        // validation for constraint: string
        if (!is_null($user_Name) && !is_string($user_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user_Name, true), gettype($user_Name)), __LINE__);
        }
        $this->User_Name = $user_Name;
        return $this;
    }
    /**
     * Get Session_Timeout_Minutes value
     * @return float|null
     */
    public function getSession_Timeout_Minutes()
    {
        return $this->Session_Timeout_Minutes;
    }
    /**
     * Set Session_Timeout_Minutes value
     * @param float $session_Timeout_Minutes
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setSession_Timeout_Minutes($session_Timeout_Minutes = null)
    {
        // validation for constraint: float
        if (!is_null($session_Timeout_Minutes) && !(is_float($session_Timeout_Minutes) || is_numeric($session_Timeout_Minutes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($session_Timeout_Minutes, true), gettype($session_Timeout_Minutes)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($session_Timeout_Minutes) && mb_strlen(mb_substr($session_Timeout_Minutes, mb_strpos($session_Timeout_Minutes, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($session_Timeout_Minutes, true), mb_strlen(mb_substr($session_Timeout_Minutes, mb_strpos($session_Timeout_Minutes, '.') + 1))), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($session_Timeout_Minutes) && $session_Timeout_Minutes < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($session_Timeout_Minutes, true)), __LINE__);
        }
        // validation for constraint: totalDigits(3)
        if (!is_null($session_Timeout_Minutes) && mb_strlen(preg_replace('/(\D)/', '', $session_Timeout_Minutes)) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 3 digits, "%d" given', var_export($session_Timeout_Minutes, true), mb_strlen(preg_replace('/(\D)/', '', $session_Timeout_Minutes))), __LINE__);
        }
        $this->Session_Timeout_Minutes = $session_Timeout_Minutes;
        return $this;
    }
    /**
     * Get Account_Disabled value
     * @return bool|null
     */
    public function getAccount_Disabled()
    {
        return $this->Account_Disabled;
    }
    /**
     * Set Account_Disabled value
     * @param bool $account_Disabled
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setAccount_Disabled($account_Disabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($account_Disabled) && !is_bool($account_Disabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($account_Disabled, true), gettype($account_Disabled)), __LINE__);
        }
        $this->Account_Disabled = $account_Disabled;
        return $this;
    }
    /**
     * Get Account_Expiration_Date value
     * @return string|null
     */
    public function getAccount_Expiration_Date()
    {
        return $this->Account_Expiration_Date;
    }
    /**
     * Set Account_Expiration_Date value
     * @param string $account_Expiration_Date
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setAccount_Expiration_Date($account_Expiration_Date = null)
    {
        // validation for constraint: string
        if (!is_null($account_Expiration_Date) && !is_string($account_Expiration_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account_Expiration_Date, true), gettype($account_Expiration_Date)), __LINE__);
        }
        $this->Account_Expiration_Date = $account_Expiration_Date;
        return $this;
    }
    /**
     * Get Account_Locked value
     * @return bool|null
     */
    public function getAccount_Locked()
    {
        return $this->Account_Locked;
    }
    /**
     * Set Account_Locked value
     * @param bool $account_Locked
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setAccount_Locked($account_Locked = null)
    {
        // validation for constraint: boolean
        if (!is_null($account_Locked) && !is_bool($account_Locked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($account_Locked, true), gettype($account_Locked)), __LINE__);
        }
        $this->Account_Locked = $account_Locked;
        return $this;
    }
    /**
     * Get Required_New_Password_At_Next_Login value
     * @return bool|null
     */
    public function getRequired_New_Password_At_Next_Login()
    {
        return $this->Required_New_Password_At_Next_Login;
    }
    /**
     * Set Required_New_Password_At_Next_Login value
     * @param bool $required_New_Password_At_Next_Login
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setRequired_New_Password_At_Next_Login($required_New_Password_At_Next_Login = null)
    {
        // validation for constraint: boolean
        if (!is_null($required_New_Password_At_Next_Login) && !is_bool($required_New_Password_At_Next_Login)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required_New_Password_At_Next_Login, true), gettype($required_New_Password_At_Next_Login)), __LINE__);
        }
        $this->Required_New_Password_At_Next_Login = $required_New_Password_At_Next_Login;
        return $this;
    }
    /**
     * Get Show_User_Name_in_Browser_Window value
     * @return bool|null
     */
    public function getShow_User_Name_in_Browser_Window()
    {
        return $this->Show_User_Name_in_Browser_Window;
    }
    /**
     * Set Show_User_Name_in_Browser_Window value
     * @param bool $show_User_Name_in_Browser_Window
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setShow_User_Name_in_Browser_Window($show_User_Name_in_Browser_Window = null)
    {
        // validation for constraint: boolean
        if (!is_null($show_User_Name_in_Browser_Window) && !is_bool($show_User_Name_in_Browser_Window)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($show_User_Name_in_Browser_Window, true), gettype($show_User_Name_in_Browser_Window)), __LINE__);
        }
        $this->Show_User_Name_in_Browser_Window = $show_User_Name_in_Browser_Window;
        return $this;
    }
    /**
     * Get Display_XML_Icon_on_Reports value
     * @return bool|null
     */
    public function getDisplay_XML_Icon_on_Reports()
    {
        return $this->Display_XML_Icon_on_Reports;
    }
    /**
     * Set Display_XML_Icon_on_Reports value
     * @param bool $display_XML_Icon_on_Reports
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setDisplay_XML_Icon_on_Reports($display_XML_Icon_on_Reports = null)
    {
        // validation for constraint: boolean
        if (!is_null($display_XML_Icon_on_Reports) && !is_bool($display_XML_Icon_on_Reports)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($display_XML_Icon_on_Reports, true), gettype($display_XML_Icon_on_Reports)), __LINE__);
        }
        $this->Display_XML_Icon_on_Reports = $display_XML_Icon_on_Reports;
        return $this;
    }
    /**
     * Get Enable_Workbox value
     * @return bool|null
     */
    public function getEnable_Workbox()
    {
        return $this->Enable_Workbox;
    }
    /**
     * Set Enable_Workbox value
     * @param bool $enable_Workbox
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setEnable_Workbox($enable_Workbox = null)
    {
        // validation for constraint: boolean
        if (!is_null($enable_Workbox) && !is_bool($enable_Workbox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enable_Workbox, true), gettype($enable_Workbox)), __LINE__);
        }
        $this->Enable_Workbox = $enable_Workbox;
        return $this;
    }
    /**
     * Get Locale_Reference value
     * @return \WorkdayWsdl\\StructType\LocaleObjectType|null
     */
    public function getLocale_Reference()
    {
        return $this->Locale_Reference;
    }
    /**
     * Set Locale_Reference value
     * @param \WorkdayWsdl\\StructType\LocaleObjectType $locale_Reference
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setLocale_Reference(\WorkdayWsdl\\StructType\LocaleObjectType $locale_Reference = null)
    {
        $this->Locale_Reference = $locale_Reference;
        return $this;
    }
    /**
     * Get User_Language_Reference value
     * @return \WorkdayWsdl\\StructType\User_LanguageObjectType|null
     */
    public function getUser_Language_Reference()
    {
        return $this->User_Language_Reference;
    }
    /**
     * Set User_Language_Reference value
     * @param \WorkdayWsdl\\StructType\User_LanguageObjectType $user_Language_Reference
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setUser_Language_Reference(\WorkdayWsdl\\StructType\User_LanguageObjectType $user_Language_Reference = null)
    {
        $this->User_Language_Reference = $user_Language_Reference;
        return $this;
    }
    /**
     * Get Preferred_Search_Scope_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getPreferred_Search_Scope_Reference()
    {
        return $this->Preferred_Search_Scope_Reference;
    }
    /**
     * Set Preferred_Search_Scope_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $preferred_Search_Scope_Reference
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setPreferred_Search_Scope_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $preferred_Search_Scope_Reference = null)
    {
        $this->Preferred_Search_Scope_Reference = $preferred_Search_Scope_Reference;
        return $this;
    }
    /**
     * Get Delegated_Authentication_Integration_System_Reference value
     * @return \WorkdayWsdl\\StructType\Integration_System__Audited_ObjectType|null
     */
    public function getDelegated_Authentication_Integration_System_Reference()
    {
        return $this->Delegated_Authentication_Integration_System_Reference;
    }
    /**
     * Set Delegated_Authentication_Integration_System_Reference value
     * @param \WorkdayWsdl\\StructType\Integration_System__Audited_ObjectType $delegated_Authentication_Integration_System_Reference
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setDelegated_Authentication_Integration_System_Reference(\WorkdayWsdl\\StructType\Integration_System__Audited_ObjectType $delegated_Authentication_Integration_System_Reference = null)
    {
        $this->Delegated_Authentication_Integration_System_Reference = $delegated_Authentication_Integration_System_Reference;
        return $this;
    }
    /**
     * Get Allow_Mixed_Language_Transactions value
     * @return bool|null
     */
    public function getAllow_Mixed_Language_Transactions()
    {
        return $this->{'Allow_Mixed-Language_Transactions'};
    }
    /**
     * Set Allow_Mixed_Language_Transactions value
     * @param bool $allow_Mixed_Language_Transactions
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setAllow_Mixed_Language_Transactions($allow_Mixed_Language_Transactions = null)
    {
        // validation for constraint: boolean
        if (!is_null($allow_Mixed_Language_Transactions) && !is_bool($allow_Mixed_Language_Transactions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allow_Mixed_Language_Transactions, true), gettype($allow_Mixed_Language_Transactions)), __LINE__);
        }
        $this->Allow_Mixed_Language_Transactions = $this->{'Allow_Mixed-Language_Transactions'} = $allow_Mixed_Language_Transactions;
        return $this;
    }
    /**
     * Get Notification_Sub_Type_Configurations value
     * @return \WorkdayWsdl\\StructType\Notification_Sub_Category_Configurations_for_UsersType[]|null
     */
    public function getNotification_Sub_Type_Configurations()
    {
        return $this->Notification_Sub_Type_Configurations;
    }
    /**
     * This method is responsible for validating the values passed to the setNotification_Sub_Type_Configurations method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotification_Sub_Type_Configurations method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotification_Sub_Type_ConfigurationsForArrayConstraintsFromSetNotification_Sub_Type_Configurations(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $system_User_DataTypeNotification_Sub_Type_ConfigurationsItem) {
            // validation for constraint: itemType
            if (!$system_User_DataTypeNotification_Sub_Type_ConfigurationsItem instanceof \WorkdayWsdl\\StructType\Notification_Sub_Category_Configurations_for_UsersType) {
                $invalidValues[] = is_object($system_User_DataTypeNotification_Sub_Type_ConfigurationsItem) ? get_class($system_User_DataTypeNotification_Sub_Type_ConfigurationsItem) : sprintf('%s(%s)', gettype($system_User_DataTypeNotification_Sub_Type_ConfigurationsItem), var_export($system_User_DataTypeNotification_Sub_Type_ConfigurationsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Notification_Sub_Type_Configurations property can only contain items of type \WorkdayWsdl\\StructType\Notification_Sub_Category_Configurations_for_UsersType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Notification_Sub_Type_Configurations value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Notification_Sub_Category_Configurations_for_UsersType[] $notification_Sub_Type_Configurations
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setNotification_Sub_Type_Configurations(array $notification_Sub_Type_Configurations = array())
    {
        // validation for constraint: array
        if ('' !== ($notification_Sub_Type_ConfigurationsArrayErrorMessage = self::validateNotification_Sub_Type_ConfigurationsForArrayConstraintsFromSetNotification_Sub_Type_Configurations($notification_Sub_Type_Configurations))) {
            throw new \InvalidArgumentException($notification_Sub_Type_ConfigurationsArrayErrorMessage, __LINE__);
        }
        $this->Notification_Sub_Type_Configurations = $notification_Sub_Type_Configurations;
        return $this;
    }
    /**
     * Add item to Notification_Sub_Type_Configurations value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Notification_Sub_Category_Configurations_for_UsersType $item
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function addToNotification_Sub_Type_Configurations(\WorkdayWsdl\\StructType\Notification_Sub_Category_Configurations_for_UsersType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Notification_Sub_Category_Configurations_for_UsersType) {
            throw new \InvalidArgumentException(sprintf('The Notification_Sub_Type_Configurations property can only contain items of type \WorkdayWsdl\\StructType\Notification_Sub_Category_Configurations_for_UsersType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Notification_Sub_Type_Configurations[] = $item;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->Password) ? $this->Password : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPassword method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassword method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePasswordForChoiceConstraintsFromSetPassword($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Generate_Random_Password',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Password can\'t be set as the property %s is already set. Only one property must be set among these properties: Password, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Password value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $password
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        // validation for constraint: choice(Password, Generate_Random_Password)
        if ('' !== ($passwordChoiceErrorMessage = self::validatePasswordForChoiceConstraintsFromSetPassword($password))) {
            throw new \InvalidArgumentException($passwordChoiceErrorMessage, __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->Password);
        } else {
            $this->Password = $password;
        }
        return $this;
    }
    /**
     * Get Generate_Random_Password value
     * @return bool|null
     */
    public function getGenerate_Random_Password()
    {
        return isset($this->Generate_Random_Password) ? $this->Generate_Random_Password : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGenerate_Random_Password method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGenerate_Random_Password method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGenerate_Random_PasswordForChoiceConstraintsFromSetGenerate_Random_Password($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Password',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Generate_Random_Password can\'t be set as the property %s is already set. Only one property must be set among these properties: Generate_Random_Password, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Generate_Random_Password value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param bool $generate_Random_Password
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setGenerate_Random_Password($generate_Random_Password = null)
    {
        // validation for constraint: boolean
        if (!is_null($generate_Random_Password) && !is_bool($generate_Random_Password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($generate_Random_Password, true), gettype($generate_Random_Password)), __LINE__);
        }
        // validation for constraint: choice(Password, Generate_Random_Password)
        if ('' !== ($generate_Random_PasswordChoiceErrorMessage = self::validateGenerate_Random_PasswordForChoiceConstraintsFromSetGenerate_Random_Password($generate_Random_Password))) {
            throw new \InvalidArgumentException($generate_Random_PasswordChoiceErrorMessage, __LINE__);
        }
        if (is_null($generate_Random_Password) || (is_array($generate_Random_Password) && empty($generate_Random_Password))) {
            unset($this->Generate_Random_Password);
        } else {
            $this->Generate_Random_Password = $generate_Random_Password;
        }
        return $this;
    }
    /**
     * Get Exempt_from_Delegated_Authentication value
     * @return bool|null
     */
    public function getExempt_from_Delegated_Authentication()
    {
        return $this->Exempt_from_Delegated_Authentication;
    }
    /**
     * Set Exempt_from_Delegated_Authentication value
     * @param bool $exempt_from_Delegated_Authentication
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setExempt_from_Delegated_Authentication($exempt_from_Delegated_Authentication = null)
    {
        // validation for constraint: boolean
        if (!is_null($exempt_from_Delegated_Authentication) && !is_bool($exempt_from_Delegated_Authentication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exempt_from_Delegated_Authentication, true), gettype($exempt_from_Delegated_Authentication)), __LINE__);
        }
        $this->Exempt_from_Delegated_Authentication = $exempt_from_Delegated_Authentication;
        return $this;
    }
    /**
     * Get Passcode_Exempt value
     * @return bool|null
     */
    public function getPasscode_Exempt()
    {
        return $this->Passcode_Exempt;
    }
    /**
     * Set Passcode_Exempt value
     * @param bool $passcode_Exempt
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setPasscode_Exempt($passcode_Exempt = null)
    {
        // validation for constraint: boolean
        if (!is_null($passcode_Exempt) && !is_bool($passcode_Exempt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($passcode_Exempt, true), gettype($passcode_Exempt)), __LINE__);
        }
        $this->Passcode_Exempt = $passcode_Exempt;
        return $this;
    }
    /**
     * Get Passcode_Grace_Period_Enabled value
     * @return bool|null
     */
    public function getPasscode_Grace_Period_Enabled()
    {
        return $this->Passcode_Grace_Period_Enabled;
    }
    /**
     * Set Passcode_Grace_Period_Enabled value
     * @param bool $passcode_Grace_Period_Enabled
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setPasscode_Grace_Period_Enabled($passcode_Grace_Period_Enabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($passcode_Grace_Period_Enabled) && !is_bool($passcode_Grace_Period_Enabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($passcode_Grace_Period_Enabled, true), gettype($passcode_Grace_Period_Enabled)), __LINE__);
        }
        $this->Passcode_Grace_Period_Enabled = $passcode_Grace_Period_Enabled;
        return $this;
    }
    /**
     * Get Passcode_Grace_Period_Login_Remaining_Count value
     * @return float|null
     */
    public function getPasscode_Grace_Period_Login_Remaining_Count()
    {
        return $this->Passcode_Grace_Period_Login_Remaining_Count;
    }
    /**
     * Set Passcode_Grace_Period_Login_Remaining_Count value
     * @param float $passcode_Grace_Period_Login_Remaining_Count
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setPasscode_Grace_Period_Login_Remaining_Count($passcode_Grace_Period_Login_Remaining_Count = null)
    {
        // validation for constraint: float
        if (!is_null($passcode_Grace_Period_Login_Remaining_Count) && !(is_float($passcode_Grace_Period_Login_Remaining_Count) || is_numeric($passcode_Grace_Period_Login_Remaining_Count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($passcode_Grace_Period_Login_Remaining_Count, true), gettype($passcode_Grace_Period_Login_Remaining_Count)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($passcode_Grace_Period_Login_Remaining_Count) && mb_strlen(mb_substr($passcode_Grace_Period_Login_Remaining_Count, mb_strpos($passcode_Grace_Period_Login_Remaining_Count, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($passcode_Grace_Period_Login_Remaining_Count, true), mb_strlen(mb_substr($passcode_Grace_Period_Login_Remaining_Count, mb_strpos($passcode_Grace_Period_Login_Remaining_Count, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($passcode_Grace_Period_Login_Remaining_Count) && mb_strlen(preg_replace('/(\D)/', '', $passcode_Grace_Period_Login_Remaining_Count)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($passcode_Grace_Period_Login_Remaining_Count, true), mb_strlen(preg_replace('/(\D)/', '', $passcode_Grace_Period_Login_Remaining_Count))), __LINE__);
        }
        $this->Passcode_Grace_Period_Login_Remaining_Count = $passcode_Grace_Period_Login_Remaining_Count;
        return $this;
    }
    /**
     * Get OpenID_Identifier value
     * @return string|null
     */
    public function getOpenID_Identifier()
    {
        return $this->OpenID_Identifier;
    }
    /**
     * Set OpenID_Identifier value
     * @param string $openID_Identifier
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setOpenID_Identifier($openID_Identifier = null)
    {
        // validation for constraint: string
        if (!is_null($openID_Identifier) && !is_string($openID_Identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($openID_Identifier, true), gettype($openID_Identifier)), __LINE__);
        }
        $this->OpenID_Identifier = $openID_Identifier;
        return $this;
    }
    /**
     * Get OpenID_Internal_Identifier value
     * @return string|null
     */
    public function getOpenID_Internal_Identifier()
    {
        return $this->OpenID_Internal_Identifier;
    }
    /**
     * Set OpenID_Internal_Identifier value
     * @param string $openID_Internal_Identifier
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setOpenID_Internal_Identifier($openID_Internal_Identifier = null)
    {
        // validation for constraint: string
        if (!is_null($openID_Internal_Identifier) && !is_string($openID_Internal_Identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($openID_Internal_Identifier, true), gettype($openID_Internal_Identifier)), __LINE__);
        }
        $this->OpenID_Internal_Identifier = $openID_Internal_Identifier;
        return $this;
    }
    /**
     * Get OpenID_Connect_Internal_Identifier value
     * @return string|null
     */
    public function getOpenID_Connect_Internal_Identifier()
    {
        return $this->OpenID_Connect_Internal_Identifier;
    }
    /**
     * Set OpenID_Connect_Internal_Identifier value
     * @param string $openID_Connect_Internal_Identifier
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setOpenID_Connect_Internal_Identifier($openID_Connect_Internal_Identifier = null)
    {
        // validation for constraint: string
        if (!is_null($openID_Connect_Internal_Identifier) && !is_string($openID_Connect_Internal_Identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($openID_Connect_Internal_Identifier, true), gettype($openID_Connect_Internal_Identifier)), __LINE__);
        }
        $this->OpenID_Connect_Internal_Identifier = $openID_Connect_Internal_Identifier;
        return $this;
    }
    /**
     * Get Simplified_View value
     * @return bool|null
     */
    public function getSimplified_View()
    {
        return $this->Simplified_View;
    }
    /**
     * Set Simplified_View value
     * @param bool $simplified_View
     * @return \WorkdayWsdl\\StructType\System_User_DataType
     */
    public function setSimplified_View($simplified_View = null)
    {
        // validation for constraint: boolean
        if (!is_null($simplified_View) && !is_bool($simplified_View)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($simplified_View, true), gettype($simplified_View)), __LINE__);
        }
        $this->Simplified_View = $simplified_View;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\System_User_DataType
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
