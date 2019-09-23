<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Personal_Preferences_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element for all Personal Preferences.
 * @subpackage Structs
 */
class Personal_Preferences_DataType extends AbstractStructBase
{
    /**
     * The Receive_Email_Notifications
     * Meta information extracted from the WSDL
     * - documentation: If true, sets email preferences to the 'immediate email' notification channel for the following notification types: tasks, to-dos, custom business process notifications, approvals. If false, sets email preferences to the 'disabled'
     * notification channel for the following notification types: tasks, to-dos, custom business process notifications, approvals. If no value is specified, there is no impact on the email preferences.NOTE: To-dos, tasks, approvals, and custom business
     * process notifications types must be enabled for user preferences and have an allowed channel of "disabled" in order to set this to false or an allowed channel of "immediate email" in order to set this to true.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Receive_Email_Notifications;
    /**
     * Constructor method for Personal_Preferences_DataType
     * @uses Personal_Preferences_DataType::setReceive_Email_Notifications()
     * @param bool $receive_Email_Notifications
     */
    public function __construct($receive_Email_Notifications = null)
    {
        $this
            ->setReceive_Email_Notifications($receive_Email_Notifications);
    }
    /**
     * Get Receive_Email_Notifications value
     * @return bool|null
     */
    public function getReceive_Email_Notifications()
    {
        return $this->Receive_Email_Notifications;
    }
    /**
     * Set Receive_Email_Notifications value
     * @param bool $receive_Email_Notifications
     * @return \StructType\Personal_Preferences_DataType
     */
    public function setReceive_Email_Notifications($receive_Email_Notifications = null)
    {
        // validation for constraint: boolean
        if (!is_null($receive_Email_Notifications) && !is_bool($receive_Email_Notifications)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($receive_Email_Notifications, true), gettype($receive_Email_Notifications)), __LINE__);
        }
        $this->Receive_Email_Notifications = $receive_Email_Notifications;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Personal_Preferences_DataType
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
