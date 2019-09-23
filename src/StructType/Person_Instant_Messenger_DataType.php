<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Person_Instant_Messenger_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Primary Instant Messenger can't be deleted when there are additional instant messengers with the same Usage Type or the instant messenger reference does not belong to the processing record. | Instant Messenger Reference must match an
 * existing (and not deleted) Instant Messenger in use by the person subject of this request. | Instant Messenger Reference is required when you delete an Instant Messenger | You can't change a primary instant messenger to an additional instant
 * messenger or an additional instant messenger to a primary instant messenger | Instant Messenger Data and Usage Data is required unless you are deleting an Instant Messenger. | Invalid Usage Type and Use For combination for Instant Messenger Address.
 * | You cannot specify the same usage type more than once for a contact instance. | An instant messenger instance
 * @subpackage Structs
 */
class Person_Instant_Messenger_DataType extends AbstractStructBase
{
    /**
     * The Instant_Messenger_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for all core Instant Messenger data.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Instant_Messenger_Core_DataType
     */
    public $Instant_Messenger_Data;
    /**
     * The Usage_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for all Communication Method Usage data.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType
     */
    public $Usage_Data;
    /**
     * The Instant_Messenger_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Instant Messenger Reference Instance.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Instant_Messenger_ReferenceObjectType
     */
    public $Instant_Messenger_Reference;
    /**
     * The Instant_Messenger_ID
     * Meta information extracted from the WSDL
     * - documentation: New ID value used in Instant Messenger updates. The ID cannot already be in use by another Instant Messenger
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Instant_Messenger_ID;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Set this flag to true in order to delete the referenced communication method. If this flag is set, the Reference ID field becomes required, and all other communication method fields that would otherwise be required will be optional
     * and meaningless.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Person_Instant_Messenger_DataType
     * @uses Person_Instant_Messenger_DataType::setInstant_Messenger_Data()
     * @uses Person_Instant_Messenger_DataType::setUsage_Data()
     * @uses Person_Instant_Messenger_DataType::setInstant_Messenger_Reference()
     * @uses Person_Instant_Messenger_DataType::setInstant_Messenger_ID()
     * @uses Person_Instant_Messenger_DataType::setDelete()
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_Core_DataType $instant_Messenger_Data
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType $usage_Data
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_ReferenceObjectType $instant_Messenger_Reference
     * @param string $instant_Messenger_ID
     * @param bool $delete
     */
    public function __construct(\WorkdayWsdl\\StructType\Instant_Messenger_Core_DataType $instant_Messenger_Data = null, \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType $usage_Data = null, \WorkdayWsdl\\StructType\Instant_Messenger_ReferenceObjectType $instant_Messenger_Reference = null, $instant_Messenger_ID = null, $delete = null)
    {
        $this
            ->setInstant_Messenger_Data($instant_Messenger_Data)
            ->setUsage_Data($usage_Data)
            ->setInstant_Messenger_Reference($instant_Messenger_Reference)
            ->setInstant_Messenger_ID($instant_Messenger_ID)
            ->setDelete($delete);
    }
    /**
     * Get Instant_Messenger_Data value
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Core_DataType|null
     */
    public function getInstant_Messenger_Data()
    {
        return $this->Instant_Messenger_Data;
    }
    /**
     * Set Instant_Messenger_Data value
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_Core_DataType $instant_Messenger_Data
     * @return \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType
     */
    public function setInstant_Messenger_Data(\WorkdayWsdl\\StructType\Instant_Messenger_Core_DataType $instant_Messenger_Data = null)
    {
        $this->Instant_Messenger_Data = $instant_Messenger_Data;
        return $this;
    }
    /**
     * Get Usage_Data value
     * @return \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType|null
     */
    public function getUsage_Data()
    {
        return $this->Usage_Data;
    }
    /**
     * Set Usage_Data value
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType $usage_Data
     * @return \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType
     */
    public function setUsage_Data(\WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType $usage_Data = null)
    {
        $this->Usage_Data = $usage_Data;
        return $this;
    }
    /**
     * Get Instant_Messenger_Reference value
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_ReferenceObjectType|null
     */
    public function getInstant_Messenger_Reference()
    {
        return $this->Instant_Messenger_Reference;
    }
    /**
     * Set Instant_Messenger_Reference value
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_ReferenceObjectType $instant_Messenger_Reference
     * @return \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType
     */
    public function setInstant_Messenger_Reference(\WorkdayWsdl\\StructType\Instant_Messenger_ReferenceObjectType $instant_Messenger_Reference = null)
    {
        $this->Instant_Messenger_Reference = $instant_Messenger_Reference;
        return $this;
    }
    /**
     * Get Instant_Messenger_ID value
     * @return string|null
     */
    public function getInstant_Messenger_ID()
    {
        return $this->Instant_Messenger_ID;
    }
    /**
     * Set Instant_Messenger_ID value
     * @param string $instant_Messenger_ID
     * @return \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType
     */
    public function setInstant_Messenger_ID($instant_Messenger_ID = null)
    {
        // validation for constraint: string
        if (!is_null($instant_Messenger_ID) && !is_string($instant_Messenger_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instant_Messenger_ID, true), gettype($instant_Messenger_ID)), __LINE__);
        }
        $this->Instant_Messenger_ID = $instant_Messenger_ID;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Person_Instant_Messenger_DataType
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
