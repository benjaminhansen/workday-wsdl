<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Notification_Sub_Type_ConfigurationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Notification sub type configuration for each notification sub type
 * @subpackage Structs
 */
class Notification_Sub_Type_ConfigurationType extends AbstractStructBase
{
    /**
     * The Notification_Sub_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Notification sub type for which notification channels will be updated/added.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Notification_CategorizableObjectType
     */
    public $Notification_Sub_Type_Reference;
    /**
     * The User_Notification_Frequency_Configuration
     * Meta information extracted from the WSDL
     * - documentation: Notification Frequency Configurations for Notification Categorizable
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\User_Notification_Frequency_Configuration_DataType[]
     */
    public $User_Notification_Frequency_Configuration;
    /**
     * Constructor method for Notification_Sub_Type_ConfigurationType
     * @uses Notification_Sub_Type_ConfigurationType::setNotification_Sub_Type_Reference()
     * @uses Notification_Sub_Type_ConfigurationType::setUser_Notification_Frequency_Configuration()
     * @param \WorkdayWsdl\\StructType\Notification_CategorizableObjectType $notification_Sub_Type_Reference
     * @param \WorkdayWsdl\\StructType\User_Notification_Frequency_Configuration_DataType[] $user_Notification_Frequency_Configuration
     */
    public function __construct(\WorkdayWsdl\\StructType\Notification_CategorizableObjectType $notification_Sub_Type_Reference = null, array $user_Notification_Frequency_Configuration = array())
    {
        $this
            ->setNotification_Sub_Type_Reference($notification_Sub_Type_Reference)
            ->setUser_Notification_Frequency_Configuration($user_Notification_Frequency_Configuration);
    }
    /**
     * Get Notification_Sub_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Notification_CategorizableObjectType|null
     */
    public function getNotification_Sub_Type_Reference()
    {
        return $this->Notification_Sub_Type_Reference;
    }
    /**
     * Set Notification_Sub_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Notification_CategorizableObjectType $notification_Sub_Type_Reference
     * @return \WorkdayWsdl\\StructType\Notification_Sub_Type_ConfigurationType
     */
    public function setNotification_Sub_Type_Reference(\WorkdayWsdl\\StructType\Notification_CategorizableObjectType $notification_Sub_Type_Reference = null)
    {
        $this->Notification_Sub_Type_Reference = $notification_Sub_Type_Reference;
        return $this;
    }
    /**
     * Get User_Notification_Frequency_Configuration value
     * @return \WorkdayWsdl\\StructType\User_Notification_Frequency_Configuration_DataType[]|null
     */
    public function getUser_Notification_Frequency_Configuration()
    {
        return $this->User_Notification_Frequency_Configuration;
    }
    /**
     * This method is responsible for validating the values passed to the setUser_Notification_Frequency_Configuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUser_Notification_Frequency_Configuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUser_Notification_Frequency_ConfigurationForArrayConstraintsFromSetUser_Notification_Frequency_Configuration(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $notification_Sub_Type_ConfigurationTypeUser_Notification_Frequency_ConfigurationItem) {
            // validation for constraint: itemType
            if (!$notification_Sub_Type_ConfigurationTypeUser_Notification_Frequency_ConfigurationItem instanceof \WorkdayWsdl\\StructType\User_Notification_Frequency_Configuration_DataType) {
                $invalidValues[] = is_object($notification_Sub_Type_ConfigurationTypeUser_Notification_Frequency_ConfigurationItem) ? get_class($notification_Sub_Type_ConfigurationTypeUser_Notification_Frequency_ConfigurationItem) : sprintf('%s(%s)', gettype($notification_Sub_Type_ConfigurationTypeUser_Notification_Frequency_ConfigurationItem), var_export($notification_Sub_Type_ConfigurationTypeUser_Notification_Frequency_ConfigurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The User_Notification_Frequency_Configuration property can only contain items of type \WorkdayWsdl\\StructType\User_Notification_Frequency_Configuration_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set User_Notification_Frequency_Configuration value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\User_Notification_Frequency_Configuration_DataType[] $user_Notification_Frequency_Configuration
     * @return \WorkdayWsdl\\StructType\Notification_Sub_Type_ConfigurationType
     */
    public function setUser_Notification_Frequency_Configuration(array $user_Notification_Frequency_Configuration = array())
    {
        // validation for constraint: array
        if ('' !== ($user_Notification_Frequency_ConfigurationArrayErrorMessage = self::validateUser_Notification_Frequency_ConfigurationForArrayConstraintsFromSetUser_Notification_Frequency_Configuration($user_Notification_Frequency_Configuration))) {
            throw new \InvalidArgumentException($user_Notification_Frequency_ConfigurationArrayErrorMessage, __LINE__);
        }
        $this->User_Notification_Frequency_Configuration = $user_Notification_Frequency_Configuration;
        return $this;
    }
    /**
     * Add item to User_Notification_Frequency_Configuration value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\User_Notification_Frequency_Configuration_DataType $item
     * @return \WorkdayWsdl\\StructType\Notification_Sub_Type_ConfigurationType
     */
    public function addToUser_Notification_Frequency_Configuration(\WorkdayWsdl\\StructType\User_Notification_Frequency_Configuration_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\User_Notification_Frequency_Configuration_DataType) {
            throw new \InvalidArgumentException(sprintf('The User_Notification_Frequency_Configuration property can only contain items of type \WorkdayWsdl\\StructType\User_Notification_Frequency_Configuration_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->User_Notification_Frequency_Configuration[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Notification_Sub_Type_ConfigurationType
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
