<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Workday_Account_for_Worker_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: User Language Setting is not configured for System User's Country | User Language Setting is Configured for System User's Country but User Language is not valid | If Generate_Random_Password parameter is set to true,
 * Require_New_Password_at_Next_Login parameter must also be set to true. | Either Password parameter or Generate_Random_Password parameter must be set to false. | User Name must be unique within the Workday system. | Encapsulating element containing
 * all Workday Account data.
 * @subpackage Structs
 */
class Workday_Account_for_Worker_DataType extends AbstractStructBase
{
    /**
     * The User_Name
     * Meta information extracted from the WSDL
     * - documentation: User Name Parameter must not contain any semicolons or colons | Text attribute identifying User Name.
     * - maxOccurs: 1
     * @var string
     */
    public $User_Name;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - documentation: Password must meet password requirements. | Text attribute identifying Password.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Password;
    /**
     * The Generate_Random_Password
     * Meta information extracted from the WSDL
     * - documentation: If Generate_Random_Password is true, the user must have an email address on file, the tenant must be set up to send security emails, and the user cannot use delegated authentication. | If True, generates a random password for the
     * specified Workday Account and emails the new password to the email address associated with that account. If False, a new password can be provided in a different field, or if that is not provided, the associated Workday Account's password is
     * unchanged.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Generate_Random_Password;
    /**
     * The Require_New_Password_at_Next_Sign_In
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether user will need to enter a new password upon next sign-in to the Workday system.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Require_New_Password_at_Next_Sign_In;
    /**
     * The Multi_factor_Authentication_Exempt
     * Meta information extracted from the WSDL
     * - documentation: True when the user is exempt from Multi-factor Authentication, False otherwise. Set this element to true if you want the user to be exempt from multi-factor authentication.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Multi_factor_Authentication_Exempt;
    /**
     * The Multi_factor_Authentication_Grace_Period_Disabled
     * Meta information extracted from the WSDL
     * - documentation: True when the user's grace period is disabled, False otherwise. Set this element to false if you want the user's grace period to be enabled.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Multi_factor_Authentication_Grace_Period_Disabled;
    /**
     * The Grace_Period_Logins_Remaining
     * Meta information extracted from the WSDL
     * - documentation: The remaining number of times the user can login without providing multi-factor authentication. This cannot be higher than the configured tenant maximum grace period login count. | Grace Period Remaining Login Count cannot be less
     * than 0 or greater than the tenant Maximum Grace Period Login Count
     * - base: xsd:decimal
     * - fractionDigits: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * - totalDigits: 12
     * @var float
     */
    public $Grace_Period_Logins_Remaining;
    /**
     * The Multi_factor_Authentication
     * Meta information extracted from the WSDL
     * - documentation: Individual multi-factor authentication.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Multi_factor_Authentication_for_Worker_DataType[]
     */
    public $Multi_factor_Authentication;
    /**
     * The Account_Disabled
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether Workday Account is disabled.
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
     * The Delegated_Authentication_Integration_System_Reference
     * Meta information extracted from the WSDL
     * - documentation: The user will be authenticated via an external system.
     * - minOccurs: 0
     * @var \StructType\Integration_System__Audited_ObjectType
     */
    public $Delegated_Authentication_Integration_System_Reference;
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
     * @var \StructType\LocaleObjectType
     */
    public $Locale_Reference;
    /**
     * The User_Language_Reference
     * Meta information extracted from the WSDL
     * - documentation: If set, specifies language for user. If not set, language specification taken from Locale_Reference
     * - minOccurs: 0
     * @var \StructType\User_LanguageObjectType
     */
    public $User_Language_Reference;
    /**
     * The Preferred_Communication_Language_Reference
     * Meta information extracted from the WSDL
     * - documentation: Captures the Preferred Communication Language
     * - minOccurs: 0
     * @var \StructType\User_LanguageObjectType
     */
    public $Preferred_Communication_Language_Reference;
    /**
     * The Preferred_Search_Scope_Reference
     * Meta information extracted from the WSDL
     * - documentation: If set, specifies the initial search category displayed to the user.
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Preferred_Search_Scope_Reference;
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Notification_Sub_Category_Configurations_for_UsersType[]
     */
    public $Notification_Sub_Type_Configurations;
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
     * Constructor method for Workday_Account_for_Worker_DataType
     * @uses Workday_Account_for_Worker_DataType::setUser_Name()
     * @uses Workday_Account_for_Worker_DataType::setPassword()
     * @uses Workday_Account_for_Worker_DataType::setGenerate_Random_Password()
     * @uses Workday_Account_for_Worker_DataType::setRequire_New_Password_at_Next_Sign_In()
     * @uses Workday_Account_for_Worker_DataType::setMulti_factor_Authentication_Exempt()
     * @uses Workday_Account_for_Worker_DataType::setMulti_factor_Authentication_Grace_Period_Disabled()
     * @uses Workday_Account_for_Worker_DataType::setGrace_Period_Logins_Remaining()
     * @uses Workday_Account_for_Worker_DataType::setMulti_factor_Authentication()
     * @uses Workday_Account_for_Worker_DataType::setAccount_Disabled()
     * @uses Workday_Account_for_Worker_DataType::setAccount_Expiration_Date()
     * @uses Workday_Account_for_Worker_DataType::setOpenID_Identifier()
     * @uses Workday_Account_for_Worker_DataType::setOpenID_Internal_Identifier()
     * @uses Workday_Account_for_Worker_DataType::setOpenID_Connect_Internal_Identifier()
     * @uses Workday_Account_for_Worker_DataType::setDelegated_Authentication_Integration_System_Reference()
     * @uses Workday_Account_for_Worker_DataType::setSession_Timeout_Minutes()
     * @uses Workday_Account_for_Worker_DataType::setShow_User_Name_in_Browser_Window()
     * @uses Workday_Account_for_Worker_DataType::setDisplay_XML_Icon_on_Reports()
     * @uses Workday_Account_for_Worker_DataType::setEnable_Workbox()
     * @uses Workday_Account_for_Worker_DataType::setLocale_Reference()
     * @uses Workday_Account_for_Worker_DataType::setUser_Language_Reference()
     * @uses Workday_Account_for_Worker_DataType::setPreferred_Communication_Language_Reference()
     * @uses Workday_Account_for_Worker_DataType::setPreferred_Search_Scope_Reference()
     * @uses Workday_Account_for_Worker_DataType::setAllow_Mixed_Language_Transactions()
     * @uses Workday_Account_for_Worker_DataType::setNotification_Sub_Type_Configurations()
     * @uses Workday_Account_for_Worker_DataType::setExempt_from_Delegated_Authentication()
     * @param string $user_Name
     * @param string $password
     * @param bool $generate_Random_Password
     * @param bool $require_New_Password_at_Next_Sign_In
     * @param bool $multi_factor_Authentication_Exempt
     * @param bool $multi_factor_Authentication_Grace_Period_Disabled
     * @param float $grace_Period_Logins_Remaining
     * @param \StructType\Multi_factor_Authentication_for_Worker_DataType[] $multi_factor_Authentication
     * @param bool $account_Disabled
     * @param string $account_Expiration_Date
     * @param string $openID_Identifier
     * @param string $openID_Internal_Identifier
     * @param string $openID_Connect_Internal_Identifier
     * @param \StructType\Integration_System__Audited_ObjectType $delegated_Authentication_Integration_System_Reference
     * @param float $session_Timeout_Minutes
     * @param bool $show_User_Name_in_Browser_Window
     * @param bool $display_XML_Icon_on_Reports
     * @param bool $enable_Workbox
     * @param \StructType\LocaleObjectType $locale_Reference
     * @param \StructType\User_LanguageObjectType $user_Language_Reference
     * @param \StructType\User_LanguageObjectType $preferred_Communication_Language_Reference
     * @param \StructType\Unique_IdentifierObjectType $preferred_Search_Scope_Reference
     * @param bool $allow_Mixed_Language_Transactions
     * @param \StructType\Notification_Sub_Category_Configurations_for_UsersType[] $notification_Sub_Type_Configurations
     * @param bool $exempt_from_Delegated_Authentication
     */
    public function __construct($user_Name = null, $password = null, $generate_Random_Password = null, $require_New_Password_at_Next_Sign_In = null, $multi_factor_Authentication_Exempt = null, $multi_factor_Authentication_Grace_Period_Disabled = null, $grace_Period_Logins_Remaining = null, array $multi_factor_Authentication = array(), $account_Disabled = null, $account_Expiration_Date = null, $openID_Identifier = null, $openID_Internal_Identifier = null, $openID_Connect_Internal_Identifier = null, \StructType\Integration_System__Audited_ObjectType $delegated_Authentication_Integration_System_Reference = null, $session_Timeout_Minutes = null, $show_User_Name_in_Browser_Window = null, $display_XML_Icon_on_Reports = null, $enable_Workbox = null, \StructType\LocaleObjectType $locale_Reference = null, \StructType\User_LanguageObjectType $user_Language_Reference = null, \StructType\User_LanguageObjectType $preferred_Communication_Language_Reference = null, \StructType\Unique_IdentifierObjectType $preferred_Search_Scope_Reference = null, $allow_Mixed_Language_Transactions = null, array $notification_Sub_Type_Configurations = array(), $exempt_from_Delegated_Authentication = null)
    {
        $this
            ->setUser_Name($user_Name)
            ->setPassword($password)
            ->setGenerate_Random_Password($generate_Random_Password)
            ->setRequire_New_Password_at_Next_Sign_In($require_New_Password_at_Next_Sign_In)
            ->setMulti_factor_Authentication_Exempt($multi_factor_Authentication_Exempt)
            ->setMulti_factor_Authentication_Grace_Period_Disabled($multi_factor_Authentication_Grace_Period_Disabled)
            ->setGrace_Period_Logins_Remaining($grace_Period_Logins_Remaining)
            ->setMulti_factor_Authentication($multi_factor_Authentication)
            ->setAccount_Disabled($account_Disabled)
            ->setAccount_Expiration_Date($account_Expiration_Date)
            ->setOpenID_Identifier($openID_Identifier)
            ->setOpenID_Internal_Identifier($openID_Internal_Identifier)
            ->setOpenID_Connect_Internal_Identifier($openID_Connect_Internal_Identifier)
            ->setDelegated_Authentication_Integration_System_Reference($delegated_Authentication_Integration_System_Reference)
            ->setSession_Timeout_Minutes($session_Timeout_Minutes)
            ->setShow_User_Name_in_Browser_Window($show_User_Name_in_Browser_Window)
            ->setDisplay_XML_Icon_on_Reports($display_XML_Icon_on_Reports)
            ->setEnable_Workbox($enable_Workbox)
            ->setLocale_Reference($locale_Reference)
            ->setUser_Language_Reference($user_Language_Reference)
            ->setPreferred_Communication_Language_Reference($preferred_Communication_Language_Reference)
            ->setPreferred_Search_Scope_Reference($preferred_Search_Scope_Reference)
            ->setAllow_Mixed_Language_Transactions($allow_Mixed_Language_Transactions)
            ->setNotification_Sub_Type_Configurations($notification_Sub_Type_Configurations)
            ->setExempt_from_Delegated_Authentication($exempt_from_Delegated_Authentication);
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
     * @return \StructType\Workday_Account_for_Worker_DataType
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
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \StructType\Workday_Account_for_Worker_DataType
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Get Generate_Random_Password value
     * @return bool|null
     */
    public function getGenerate_Random_Password()
    {
        return $this->Generate_Random_Password;
    }
    /**
     * Set Generate_Random_Password value
     * @param bool $generate_Random_Password
     * @return \StructType\Workday_Account_for_Worker_DataType
     */
    public function setGenerate_Random_Password($generate_Random_Password = null)
    {
        // validation for constraint: boolean
        if (!is_null($generate_Random_Password) && !is_bool($generate_Random_Password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($generate_Random_Password, true), gettype($generate_Random_Password)), __LINE__);
        }
        $this->Generate_Random_Password = $generate_Random_Password;
        return $this;
    }
    /**
     * Get Require_New_Password_at_Next_Sign_In value
     * @return bool|null
     */
    public function getRequire_New_Password_at_Next_Sign_In()
    {
        return $this->Require_New_Password_at_Next_Sign_In;
    }
    /**
     * Set Require_New_Password_at_Next_Sign_In value
     * @param bool $require_New_Password_at_Next_Sign_In
     * @return \StructType\Workday_Account_for_Worker_DataType
     */
    public function setRequire_New_Password_at_Next_Sign_In($require_New_Password_at_Next_Sign_In = null)
    {
        // validation for constraint: boolean
        if (!is_null($require_New_Password_at_Next_Sign_In) && !is_bool($require_New_Password_at_Next_Sign_In)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($require_New_Password_at_Next_Sign_In, true), gettype($require_New_Password_at_Next_Sign_In)), __LINE__);
        }
        $this->Require_New_Password_at_Next_Sign_In = $require_New_Password_at_Next_Sign_In;
        return $this;
    }
    /**
     * Get Multi_factor_Authentication_Exempt value
     * @return bool|null
     */
    public function getMulti_factor_Authentication_Exempt()
    {
        return $this->{'Multi-factor_Authentication_Exempt'};
    }
    /**
     * Set Multi_factor_Authentication_Exempt value
     * @param bool $multi_factor_Authentication_Exempt
     * @return \StructType\Workday_Account_for_Worker_DataType
     */
    public function setMulti_factor_Authentication_Exempt($multi_factor_Authentication_Exempt = null)
    {
        // validation for constraint: boolean
        if (!is_null($multi_factor_Authentication_Exempt) && !is_bool($multi_factor_Authentication_Exempt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($multi_factor_Authentication_Exempt, true), gettype($multi_factor_Authentication_Exempt)), __LINE__);
        }
        $this->Multi_factor_Authentication_Exempt = $this->{'Multi-factor_Authentication_Exempt'} = $multi_factor_Authentication_Exempt;
        return $this;
    }
    /**
     * Get Multi_factor_Authentication_Grace_Period_Disabled value
     * @return bool|null
     */
    public function getMulti_factor_Authentication_Grace_Period_Disabled()
    {
        return $this->{'Multi-factor_Authentication_Grace_Period_Disabled'};
    }
    /**
     * Set Multi_factor_Authentication_Grace_Period_Disabled value
     * @param bool $multi_factor_Authentication_Grace_Period_Disabled
     * @return \StructType\Workday_Account_for_Worker_DataType
     */
    public function setMulti_factor_Authentication_Grace_Period_Disabled($multi_factor_Authentication_Grace_Period_Disabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($multi_factor_Authentication_Grace_Period_Disabled) && !is_bool($multi_factor_Authentication_Grace_Period_Disabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($multi_factor_Authentication_Grace_Period_Disabled, true), gettype($multi_factor_Authentication_Grace_Period_Disabled)), __LINE__);
        }
        $this->Multi_factor_Authentication_Grace_Period_Disabled = $this->{'Multi-factor_Authentication_Grace_Period_Disabled'} = $multi_factor_Authentication_Grace_Period_Disabled;
        return $this;
    }
    /**
     * Get Grace_Period_Logins_Remaining value
     * @return float|null
     */
    public function getGrace_Period_Logins_Remaining()
    {
        return $this->Grace_Period_Logins_Remaining;
    }
    /**
     * Set Grace_Period_Logins_Remaining value
     * @param float $grace_Period_Logins_Remaining
     * @return \StructType\Workday_Account_for_Worker_DataType
     */
    public function setGrace_Period_Logins_Remaining($grace_Period_Logins_Remaining = null)
    {
        // validation for constraint: float
        if (!is_null($grace_Period_Logins_Remaining) && !(is_float($grace_Period_Logins_Remaining) || is_numeric($grace_Period_Logins_Remaining))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grace_Period_Logins_Remaining, true), gettype($grace_Period_Logins_Remaining)), __LINE__);
        }
        // validation for constraint: fractionDigits
        if (!is_null($grace_Period_Logins_Remaining) && mb_strlen(mb_substr($grace_Period_Logins_Remaining, mb_strpos($grace_Period_Logins_Remaining, '.') + 1)) > 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 0 fraction digits, %d given', var_export($grace_Period_Logins_Remaining, true), mb_strlen(mb_substr($grace_Period_Logins_Remaining, mb_strpos($grace_Period_Logins_Remaining, '.') + 1))), __LINE__);
        }
        // validation for constraint: totalDigits(12)
        if (!is_null($grace_Period_Logins_Remaining) && mb_strlen(preg_replace('/(\D)/', '', $grace_Period_Logins_Remaining)) > 12) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 12 digits, "%d" given', var_export($grace_Period_Logins_Remaining, true), mb_strlen(preg_replace('/(\D)/', '', $grace_Period_Logins_Remaining))), __LINE__);
        }
        $this->Grace_Period_Logins_Remaining = $grace_Period_Logins_Remaining;
        return $this;
    }
    /**
     * Get Multi_factor_Authentication value
     * @return \StructType\Multi_factor_Authentication_for_Worker_DataType[]|null
     */
    public function getMulti_factor_Authentication()
    {
        return $this->{'Multi-factor_Authentication'};
    }
    /**
     * This method is responsible for validating the values passed to the setMulti_factor_Authentication method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMulti_factor_Authentication method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMulti_factor_AuthenticationForArrayConstraintsFromSetMulti_factor_Authentication(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $workday_Account_for_Worker_DataTypeMulti_factor_AuthenticationItem) {
            // validation for constraint: itemType
            if (!$workday_Account_for_Worker_DataTypeMulti_factor_AuthenticationItem instanceof \StructType\Multi_factor_Authentication_for_Worker_DataType) {
                $invalidValues[] = is_object($workday_Account_for_Worker_DataTypeMulti_factor_AuthenticationItem) ? get_class($workday_Account_for_Worker_DataTypeMulti_factor_AuthenticationItem) : sprintf('%s(%s)', gettype($workday_Account_for_Worker_DataTypeMulti_factor_AuthenticationItem), var_export($workday_Account_for_Worker_DataTypeMulti_factor_AuthenticationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Multi_factor_Authentication property can only contain items of type \StructType\Multi_factor_Authentication_for_Worker_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Multi_factor_Authentication value
     * @throws \InvalidArgumentException
     * @param \StructType\Multi_factor_Authentication_for_Worker_DataType[] $multi_factor_Authentication
     * @return \StructType\Workday_Account_for_Worker_DataType
     */
    public function setMulti_factor_Authentication(array $multi_factor_Authentication = array())
    {
        // validation for constraint: array
        if ('' !== ($multi_factor_AuthenticationArrayErrorMessage = self::validateMulti_factor_AuthenticationForArrayConstraintsFromSetMulti_factor_Authentication($multi_factor_Authentication))) {
            throw new \InvalidArgumentException($multi_factor_AuthenticationArrayErrorMessage, __LINE__);
        }
        $this->Multi_factor_Authentication = $this->{'Multi-factor_Authentication'} = $multi_factor_Authentication;
        return $this;
    }
    /**
     * Add item to Multi_factor_Authentication value
     * @throws \InvalidArgumentException
     * @param \StructType\Multi_factor_Authentication_for_Worker_DataType $item
     * @return \StructType\Workday_Account_for_Worker_DataType
     */
    public function addToMulti_factor_Authentication(\StructType\Multi_factor_Authentication_for_Worker_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Multi_factor_Authentication_for_Worker_DataType) {
            throw new \InvalidArgumentException(sprintf('The Multi_factor_Authentication property can only contain items of type \StructType\Multi_factor_Authentication_for_Worker_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Multi_factor_Authentication[] = $this->{'Multi-factor_Authentication'}[] = $item;
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
     * @return \StructType\Workday_Account_for_Worker_DataType
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
     * @return \StructType\Workday_Account_for_Worker_DataType
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
     * @return \StructType\Workday_Account_for_Worker_DataType
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
     * @return \StructType\Workday_Account_for_Worker_DataType
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
     * @return \StructType\Workday_Account_for_Worker_DataType
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
     * Get Delegated_Authentication_Integration_System_Reference value
     * @return \StructType\Integration_System__Audited_ObjectType|null
     */
    public function getDelegated_Authentication_Integration_System_Reference()
    {
        return $this->Delegated_Authentication_Integration_System_Reference;
    }
    /**
     * Set Delegated_Authentication_Integration_System_Reference value
     * @param \StructType\Integration_System__Audited_ObjectType $delegated_Authentication_Integration_System_Reference
     * @return \StructType\Workday_Account_for_Worker_DataType
     */
    public function setDelegated_Authentication_Integration_System_Reference(\StructType\Integration_System__Audited_ObjectType $delegated_Authentication_Integration_System_Reference = null)
    {
        $this->Delegated_Authentication_Integration_System_Reference = $delegated_Authentication_Integration_System_Reference;
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
     * @return \StructType\Workday_Account_for_Worker_DataType
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
     * @return \StructType\Workday_Account_for_Worker_DataType
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
     * @return \StructType\Workday_Account_for_Worker_DataType
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
     * @return \StructType\Workday_Account_for_Worker_DataType
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
     * @return \StructType\LocaleObjectType|null
     */
    public function getLocale_Reference()
    {
        return $this->Locale_Reference;
    }
    /**
     * Set Locale_Reference value
     * @param \StructType\LocaleObjectType $locale_Reference
     * @return \StructType\Workday_Account_for_Worker_DataType
     */
    public function setLocale_Reference(\StructType\LocaleObjectType $locale_Reference = null)
    {
        $this->Locale_Reference = $locale_Reference;
        return $this;
    }
    /**
     * Get User_Language_Reference value
     * @return \StructType\User_LanguageObjectType|null
     */
    public function getUser_Language_Reference()
    {
        return $this->User_Language_Reference;
    }
    /**
     * Set User_Language_Reference value
     * @param \StructType\User_LanguageObjectType $user_Language_Reference
     * @return \StructType\Workday_Account_for_Worker_DataType
     */
    public function setUser_Language_Reference(\StructType\User_LanguageObjectType $user_Language_Reference = null)
    {
        $this->User_Language_Reference = $user_Language_Reference;
        return $this;
    }
    /**
     * Get Preferred_Communication_Language_Reference value
     * @return \StructType\User_LanguageObjectType|null
     */
    public function getPreferred_Communication_Language_Reference()
    {
        return $this->Preferred_Communication_Language_Reference;
    }
    /**
     * Set Preferred_Communication_Language_Reference value
     * @param \StructType\User_LanguageObjectType $preferred_Communication_Language_Reference
     * @return \StructType\Workday_Account_for_Worker_DataType
     */
    public function setPreferred_Communication_Language_Reference(\StructType\User_LanguageObjectType $preferred_Communication_Language_Reference = null)
    {
        $this->Preferred_Communication_Language_Reference = $preferred_Communication_Language_Reference;
        return $this;
    }
    /**
     * Get Preferred_Search_Scope_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getPreferred_Search_Scope_Reference()
    {
        return $this->Preferred_Search_Scope_Reference;
    }
    /**
     * Set Preferred_Search_Scope_Reference value
     * @param \StructType\Unique_IdentifierObjectType $preferred_Search_Scope_Reference
     * @return \StructType\Workday_Account_for_Worker_DataType
     */
    public function setPreferred_Search_Scope_Reference(\StructType\Unique_IdentifierObjectType $preferred_Search_Scope_Reference = null)
    {
        $this->Preferred_Search_Scope_Reference = $preferred_Search_Scope_Reference;
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
     * @return \StructType\Workday_Account_for_Worker_DataType
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
     * @return \StructType\Notification_Sub_Category_Configurations_for_UsersType[]|null
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
        foreach ($values as $workday_Account_for_Worker_DataTypeNotification_Sub_Type_ConfigurationsItem) {
            // validation for constraint: itemType
            if (!$workday_Account_for_Worker_DataTypeNotification_Sub_Type_ConfigurationsItem instanceof \StructType\Notification_Sub_Category_Configurations_for_UsersType) {
                $invalidValues[] = is_object($workday_Account_for_Worker_DataTypeNotification_Sub_Type_ConfigurationsItem) ? get_class($workday_Account_for_Worker_DataTypeNotification_Sub_Type_ConfigurationsItem) : sprintf('%s(%s)', gettype($workday_Account_for_Worker_DataTypeNotification_Sub_Type_ConfigurationsItem), var_export($workday_Account_for_Worker_DataTypeNotification_Sub_Type_ConfigurationsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Notification_Sub_Type_Configurations property can only contain items of type \StructType\Notification_Sub_Category_Configurations_for_UsersType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Notification_Sub_Type_Configurations value
     * @throws \InvalidArgumentException
     * @param \StructType\Notification_Sub_Category_Configurations_for_UsersType[] $notification_Sub_Type_Configurations
     * @return \StructType\Workday_Account_for_Worker_DataType
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
     * @param \StructType\Notification_Sub_Category_Configurations_for_UsersType $item
     * @return \StructType\Workday_Account_for_Worker_DataType
     */
    public function addToNotification_Sub_Type_Configurations(\StructType\Notification_Sub_Category_Configurations_for_UsersType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Notification_Sub_Category_Configurations_for_UsersType) {
            throw new \InvalidArgumentException(sprintf('The Notification_Sub_Type_Configurations property can only contain items of type \StructType\Notification_Sub_Category_Configurations_for_UsersType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Notification_Sub_Type_Configurations[] = $item;
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
     * @return \StructType\Workday_Account_for_Worker_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Workday_Account_for_Worker_DataType
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
