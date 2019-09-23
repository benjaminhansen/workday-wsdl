<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Notification_Sub_Category_Configurations_for_UsersType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Notification Type configurations for a particular user
 * @subpackage Structs
 */
class Notification_Sub_Category_Configurations_for_UsersType extends AbstractStructBase
{
    /**
     * The Notification_Sub_Type_Configuration
     * Meta information extracted from the WSDL
     * - documentation: Notification Sub Type configuration(includes selected notification channels) for each Notification Sub Type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Notification_Sub_Type_ConfigurationType[]
     */
    public $Notification_Sub_Type_Configuration;
    /**
     * Constructor method for Notification_Sub_Category_Configurations_for_UsersType
     * @uses Notification_Sub_Category_Configurations_for_UsersType::setNotification_Sub_Type_Configuration()
     * @param \WorkdayWsdl\\StructType\Notification_Sub_Type_ConfigurationType[] $notification_Sub_Type_Configuration
     */
    public function __construct(array $notification_Sub_Type_Configuration = array())
    {
        $this
            ->setNotification_Sub_Type_Configuration($notification_Sub_Type_Configuration);
    }
    /**
     * Get Notification_Sub_Type_Configuration value
     * @return \WorkdayWsdl\\StructType\Notification_Sub_Type_ConfigurationType[]|null
     */
    public function getNotification_Sub_Type_Configuration()
    {
        return $this->Notification_Sub_Type_Configuration;
    }
    /**
     * This method is responsible for validating the values passed to the setNotification_Sub_Type_Configuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotification_Sub_Type_Configuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotification_Sub_Type_ConfigurationForArrayConstraintsFromSetNotification_Sub_Type_Configuration(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $notification_Sub_Category_Configurations_for_UsersTypeNotification_Sub_Type_ConfigurationItem) {
            // validation for constraint: itemType
            if (!$notification_Sub_Category_Configurations_for_UsersTypeNotification_Sub_Type_ConfigurationItem instanceof \WorkdayWsdl\\StructType\Notification_Sub_Type_ConfigurationType) {
                $invalidValues[] = is_object($notification_Sub_Category_Configurations_for_UsersTypeNotification_Sub_Type_ConfigurationItem) ? get_class($notification_Sub_Category_Configurations_for_UsersTypeNotification_Sub_Type_ConfigurationItem) : sprintf('%s(%s)', gettype($notification_Sub_Category_Configurations_for_UsersTypeNotification_Sub_Type_ConfigurationItem), var_export($notification_Sub_Category_Configurations_for_UsersTypeNotification_Sub_Type_ConfigurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Notification_Sub_Type_Configuration property can only contain items of type \WorkdayWsdl\\StructType\Notification_Sub_Type_ConfigurationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Notification_Sub_Type_Configuration value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Notification_Sub_Type_ConfigurationType[] $notification_Sub_Type_Configuration
     * @return \WorkdayWsdl\\StructType\Notification_Sub_Category_Configurations_for_UsersType
     */
    public function setNotification_Sub_Type_Configuration(array $notification_Sub_Type_Configuration = array())
    {
        // validation for constraint: array
        if ('' !== ($notification_Sub_Type_ConfigurationArrayErrorMessage = self::validateNotification_Sub_Type_ConfigurationForArrayConstraintsFromSetNotification_Sub_Type_Configuration($notification_Sub_Type_Configuration))) {
            throw new \InvalidArgumentException($notification_Sub_Type_ConfigurationArrayErrorMessage, __LINE__);
        }
        $this->Notification_Sub_Type_Configuration = $notification_Sub_Type_Configuration;
        return $this;
    }
    /**
     * Add item to Notification_Sub_Type_Configuration value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Notification_Sub_Type_ConfigurationType $item
     * @return \WorkdayWsdl\\StructType\Notification_Sub_Category_Configurations_for_UsersType
     */
    public function addToNotification_Sub_Type_Configuration(\WorkdayWsdl\\StructType\Notification_Sub_Type_ConfigurationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Notification_Sub_Type_ConfigurationType) {
            throw new \InvalidArgumentException(sprintf('The Notification_Sub_Type_Configuration property can only contain items of type \WorkdayWsdl\\StructType\Notification_Sub_Type_ConfigurationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Notification_Sub_Type_Configuration[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Notification_Sub_Category_Configurations_for_UsersType
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
