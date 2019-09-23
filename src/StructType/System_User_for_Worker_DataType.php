<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for System_User_for_Worker_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the worker's user account information (user name, preferred language).
 * @subpackage Structs
 */
class System_User_for_Worker_DataType extends AbstractStructBase
{
    /**
     * The User_Name
     * Meta information extracted from the WSDL
     * - documentation: The user name that is used to sign on to the Workday application.
     * - maxOccurs: 1
     * @var string
     */
    public $User_Name;
    /**
     * The User_Language__Reference
     * Meta information extracted from the WSDL
     * - documentation: The preferred language for the user account.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\User_LanguageObjectType
     */
    public $User_Language__Reference;
    /**
     * The Preferred_Communication_Language_Reference
     * Meta information extracted from the WSDL
     * - documentation: Captures the Preferred Communication Language
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\User_LanguageObjectType
     */
    public $Preferred_Communication_Language_Reference;
    /**
     * The Locale__Reference
     * Meta information extracted from the WSDL
     * - documentation: The preferred locale for the user account.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\LocaleObjectType
     */
    public $Locale__Reference;
    /**
     * The Hour_Clock_Reference
     * Meta information extracted from the WSDL
     * - documentation: The preferred hour clock for the user account.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Hour_ClockObjectType
     */
    public $Hour_Clock_Reference;
    /**
     * The Currency_Reference
     * Meta information extracted from the WSDL
     * - documentation: The preferred currency for the user account.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CurrencyObjectType
     */
    public $Currency_Reference;
    /**
     * The Time_Zone_Reference
     * Meta information extracted from the WSDL
     * - documentation: The preferred time zone for the user account.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Time_ZoneObjectType
     */
    public $Time_Zone_Reference;
    /**
     * The Default_Display_Language_Reference
     * Meta information extracted from the WSDL
     * - documentation: The default display language is derived by the system from the employee data. It is overridden by the User Language Reference value if it exists.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\User_LanguageObjectType
     */
    public $Default_Display_Language_Reference;
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
     * Constructor method for System_User_for_Worker_DataType
     * @uses System_User_for_Worker_DataType::setUser_Name()
     * @uses System_User_for_Worker_DataType::setUser_Language__Reference()
     * @uses System_User_for_Worker_DataType::setPreferred_Communication_Language_Reference()
     * @uses System_User_for_Worker_DataType::setLocale__Reference()
     * @uses System_User_for_Worker_DataType::setHour_Clock_Reference()
     * @uses System_User_for_Worker_DataType::setCurrency_Reference()
     * @uses System_User_for_Worker_DataType::setTime_Zone_Reference()
     * @uses System_User_for_Worker_DataType::setDefault_Display_Language_Reference()
     * @uses System_User_for_Worker_DataType::setSimplified_View()
     * @param string $user_Name
     * @param \WorkdayWsdl\\StructType\User_LanguageObjectType $user_Language__Reference
     * @param \WorkdayWsdl\\StructType\User_LanguageObjectType $preferred_Communication_Language_Reference
     * @param \WorkdayWsdl\\StructType\LocaleObjectType $locale__Reference
     * @param \WorkdayWsdl\\StructType\Hour_ClockObjectType $hour_Clock_Reference
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference
     * @param \WorkdayWsdl\\StructType\Time_ZoneObjectType $time_Zone_Reference
     * @param \WorkdayWsdl\\StructType\User_LanguageObjectType $default_Display_Language_Reference
     * @param bool $simplified_View
     */
    public function __construct($user_Name = null, \WorkdayWsdl\\StructType\User_LanguageObjectType $user_Language__Reference = null, \WorkdayWsdl\\StructType\User_LanguageObjectType $preferred_Communication_Language_Reference = null, \WorkdayWsdl\\StructType\LocaleObjectType $locale__Reference = null, \WorkdayWsdl\\StructType\Hour_ClockObjectType $hour_Clock_Reference = null, \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null, \WorkdayWsdl\\StructType\Time_ZoneObjectType $time_Zone_Reference = null, \WorkdayWsdl\\StructType\User_LanguageObjectType $default_Display_Language_Reference = null, $simplified_View = null)
    {
        $this
            ->setUser_Name($user_Name)
            ->setUser_Language__Reference($user_Language__Reference)
            ->setPreferred_Communication_Language_Reference($preferred_Communication_Language_Reference)
            ->setLocale__Reference($locale__Reference)
            ->setHour_Clock_Reference($hour_Clock_Reference)
            ->setCurrency_Reference($currency_Reference)
            ->setTime_Zone_Reference($time_Zone_Reference)
            ->setDefault_Display_Language_Reference($default_Display_Language_Reference)
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
     * @return \WorkdayWsdl\\StructType\System_User_for_Worker_DataType
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
     * Get User_Language__Reference value
     * @return \WorkdayWsdl\\StructType\User_LanguageObjectType|null
     */
    public function getUser_Language__Reference()
    {
        return $this->User_Language__Reference;
    }
    /**
     * Set User_Language__Reference value
     * @param \WorkdayWsdl\\StructType\User_LanguageObjectType $user_Language__Reference
     * @return \WorkdayWsdl\\StructType\System_User_for_Worker_DataType
     */
    public function setUser_Language__Reference(\WorkdayWsdl\\StructType\User_LanguageObjectType $user_Language__Reference = null)
    {
        $this->User_Language__Reference = $user_Language__Reference;
        return $this;
    }
    /**
     * Get Preferred_Communication_Language_Reference value
     * @return \WorkdayWsdl\\StructType\User_LanguageObjectType|null
     */
    public function getPreferred_Communication_Language_Reference()
    {
        return $this->Preferred_Communication_Language_Reference;
    }
    /**
     * Set Preferred_Communication_Language_Reference value
     * @param \WorkdayWsdl\\StructType\User_LanguageObjectType $preferred_Communication_Language_Reference
     * @return \WorkdayWsdl\\StructType\System_User_for_Worker_DataType
     */
    public function setPreferred_Communication_Language_Reference(\WorkdayWsdl\\StructType\User_LanguageObjectType $preferred_Communication_Language_Reference = null)
    {
        $this->Preferred_Communication_Language_Reference = $preferred_Communication_Language_Reference;
        return $this;
    }
    /**
     * Get Locale__Reference value
     * @return \WorkdayWsdl\\StructType\LocaleObjectType|null
     */
    public function getLocale__Reference()
    {
        return $this->Locale__Reference;
    }
    /**
     * Set Locale__Reference value
     * @param \WorkdayWsdl\\StructType\LocaleObjectType $locale__Reference
     * @return \WorkdayWsdl\\StructType\System_User_for_Worker_DataType
     */
    public function setLocale__Reference(\WorkdayWsdl\\StructType\LocaleObjectType $locale__Reference = null)
    {
        $this->Locale__Reference = $locale__Reference;
        return $this;
    }
    /**
     * Get Hour_Clock_Reference value
     * @return \WorkdayWsdl\\StructType\Hour_ClockObjectType|null
     */
    public function getHour_Clock_Reference()
    {
        return $this->Hour_Clock_Reference;
    }
    /**
     * Set Hour_Clock_Reference value
     * @param \WorkdayWsdl\\StructType\Hour_ClockObjectType $hour_Clock_Reference
     * @return \WorkdayWsdl\\StructType\System_User_for_Worker_DataType
     */
    public function setHour_Clock_Reference(\WorkdayWsdl\\StructType\Hour_ClockObjectType $hour_Clock_Reference = null)
    {
        $this->Hour_Clock_Reference = $hour_Clock_Reference;
        return $this;
    }
    /**
     * Get Currency_Reference value
     * @return \WorkdayWsdl\\StructType\CurrencyObjectType|null
     */
    public function getCurrency_Reference()
    {
        return $this->Currency_Reference;
    }
    /**
     * Set Currency_Reference value
     * @param \WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference
     * @return \WorkdayWsdl\\StructType\System_User_for_Worker_DataType
     */
    public function setCurrency_Reference(\WorkdayWsdl\\StructType\CurrencyObjectType $currency_Reference = null)
    {
        $this->Currency_Reference = $currency_Reference;
        return $this;
    }
    /**
     * Get Time_Zone_Reference value
     * @return \WorkdayWsdl\\StructType\Time_ZoneObjectType|null
     */
    public function getTime_Zone_Reference()
    {
        return $this->Time_Zone_Reference;
    }
    /**
     * Set Time_Zone_Reference value
     * @param \WorkdayWsdl\\StructType\Time_ZoneObjectType $time_Zone_Reference
     * @return \WorkdayWsdl\\StructType\System_User_for_Worker_DataType
     */
    public function setTime_Zone_Reference(\WorkdayWsdl\\StructType\Time_ZoneObjectType $time_Zone_Reference = null)
    {
        $this->Time_Zone_Reference = $time_Zone_Reference;
        return $this;
    }
    /**
     * Get Default_Display_Language_Reference value
     * @return \WorkdayWsdl\\StructType\User_LanguageObjectType|null
     */
    public function getDefault_Display_Language_Reference()
    {
        return $this->Default_Display_Language_Reference;
    }
    /**
     * Set Default_Display_Language_Reference value
     * @param \WorkdayWsdl\\StructType\User_LanguageObjectType $default_Display_Language_Reference
     * @return \WorkdayWsdl\\StructType\System_User_for_Worker_DataType
     */
    public function setDefault_Display_Language_Reference(\WorkdayWsdl\\StructType\User_LanguageObjectType $default_Display_Language_Reference = null)
    {
        $this->Default_Display_Language_Reference = $default_Display_Language_Reference;
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
     * @return \WorkdayWsdl\\StructType\System_User_for_Worker_DataType
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
     * @return \WorkdayWsdl\\StructType\System_User_for_Worker_DataType
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
