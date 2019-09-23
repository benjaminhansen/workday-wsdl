<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for User_Notification_Frequency_Configuration_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Set the Notification Frequency for the channel.
 * @subpackage Structs
 */
class User_Notification_Frequency_Configuration_DataType extends AbstractStructBase
{
    /**
     * The Channel_Reference
     * Meta information extracted from the WSDL
     * - documentation: Channel for Notification Frequency Configuration
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Channel_Reference;
    /**
     * The Delivery_Frequency_Reference
     * Meta information extracted from the WSDL
     * - documentation: Delivery frequency for Notification Type
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Delivery_Frequency_Reference;
    /**
     * Constructor method for User_Notification_Frequency_Configuration_DataType
     * @uses User_Notification_Frequency_Configuration_DataType::setChannel_Reference()
     * @uses User_Notification_Frequency_Configuration_DataType::setDelivery_Frequency_Reference()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $channel_Reference
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $delivery_Frequency_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $channel_Reference = null, \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $delivery_Frequency_Reference = null)
    {
        $this
            ->setChannel_Reference($channel_Reference)
            ->setDelivery_Frequency_Reference($delivery_Frequency_Reference);
    }
    /**
     * Get Channel_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getChannel_Reference()
    {
        return $this->Channel_Reference;
    }
    /**
     * Set Channel_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $channel_Reference
     * @return \WorkdayWsdl\\StructType\User_Notification_Frequency_Configuration_DataType
     */
    public function setChannel_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $channel_Reference = null)
    {
        $this->Channel_Reference = $channel_Reference;
        return $this;
    }
    /**
     * Get Delivery_Frequency_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getDelivery_Frequency_Reference()
    {
        return $this->Delivery_Frequency_Reference;
    }
    /**
     * Set Delivery_Frequency_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $delivery_Frequency_Reference
     * @return \WorkdayWsdl\\StructType\User_Notification_Frequency_Configuration_DataType
     */
    public function setDelivery_Frequency_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $delivery_Frequency_Reference = null)
    {
        $this->Delivery_Frequency_Reference = $delivery_Frequency_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\User_Notification_Frequency_Configuration_DataType
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
