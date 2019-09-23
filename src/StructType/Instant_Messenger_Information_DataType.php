<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Instant_Messenger_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Instant Messenger ID field is for updating the value of the Instant Messenger Reference. It cannot be the same as another existing instant messenger. | Instant Messenger is required unless you are deleting an instant messenger. |
 * Instant Messenger Reference is required when you delete an instant messenger. | When Do Not Replace All is False for all Instant Messenger elements, you can't pass an Instant Messenger Reference. | Invalid Instant Messenger Reference or the Instant
 * Messenger with this Reference has been deleted. | When Do Not Replace All is False for all Instant Messenger elements, Delete can't be True. | Instant Messenger Data and Usage Data is required unless you are deleting an Instant Messenger. | You can't
 * change a primary instant messenger to an additional instant messenger or an additional instant messenger to a primary instant messenger | Primary Instant Messenger can't be deleted when there are additional instant messengers with the same Usage Type
 * or the instant messenger reference does not belong to the processing record. | You can't change the Usage Type of an existing Instant Messenger | Invalid Usage Type and Use For combination for Instant Messenger Address. | Instant Messenger Address.
 * @subpackage Structs
 */
class Instant_Messenger_Information_DataType extends AbstractStructBase
{
    /**
     * The Instant_Messenger_Address
     * Meta information extracted from the WSDL
     * - documentation: Instant Messenger Address.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Instant_Messenger_Address;
    /**
     * The Instant_Messenger_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the instant messenger type.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Instant_Messenger_TypeObjectType
     */
    public $Instant_Messenger_Type_Reference;
    /**
     * The Instant_Messenger_Comment
     * Meta information extracted from the WSDL
     * - documentation: Instant messenger comment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Instant_Messenger_Comment;
    /**
     * The Usage_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element for all Communication Method Usage data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType[]
     */
    public $Usage_Data;
    /**
     * The Instant_Messenger_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Instant Messenger Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Instant_Messenger_ReferenceObjectType
     */
    public $Instant_Messenger_Reference;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: New ID value used in instant messenger updates. The ID cannot already be in use by another instant messenger.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Set this flag to true in order to delete the referenced instant messenger. If this flag is set, the Reference ID field becomes required, and all other instant messenger fields that would otherwise be required will be optional and
     * meaningless.
     * @var bool
     */
    public $Delete;
    /**
     * The Do_Not_Replace_All
     * Meta information extracted from the WSDL
     * - documentation: This flag controls whether or not existing non-primary instant messenger data will be replaced. A value of true means only the referenced instant messenger will be updated, or created if it does not exist or no reference was
     * provided. This behavior is used if the flag is set to true for ANY instant messenger in the request.
     * @var bool
     */
    public $Do_Not_Replace_All;
    /**
     * Constructor method for Instant_Messenger_Information_DataType
     * @uses Instant_Messenger_Information_DataType::setInstant_Messenger_Address()
     * @uses Instant_Messenger_Information_DataType::setInstant_Messenger_Type_Reference()
     * @uses Instant_Messenger_Information_DataType::setInstant_Messenger_Comment()
     * @uses Instant_Messenger_Information_DataType::setUsage_Data()
     * @uses Instant_Messenger_Information_DataType::setInstant_Messenger_Reference()
     * @uses Instant_Messenger_Information_DataType::setID()
     * @uses Instant_Messenger_Information_DataType::setDelete()
     * @uses Instant_Messenger_Information_DataType::setDo_Not_Replace_All()
     * @param string $instant_Messenger_Address
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_TypeObjectType $instant_Messenger_Type_Reference
     * @param string $instant_Messenger_Comment
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType[] $usage_Data
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_ReferenceObjectType $instant_Messenger_Reference
     * @param string $iD
     * @param bool $delete
     * @param bool $do_Not_Replace_All
     */
    public function __construct($instant_Messenger_Address = null, \WorkdayWsdl\\StructType\Instant_Messenger_TypeObjectType $instant_Messenger_Type_Reference = null, $instant_Messenger_Comment = null, array $usage_Data = array(), \WorkdayWsdl\\StructType\Instant_Messenger_ReferenceObjectType $instant_Messenger_Reference = null, $iD = null, $delete = null, $do_Not_Replace_All = null)
    {
        $this
            ->setInstant_Messenger_Address($instant_Messenger_Address)
            ->setInstant_Messenger_Type_Reference($instant_Messenger_Type_Reference)
            ->setInstant_Messenger_Comment($instant_Messenger_Comment)
            ->setUsage_Data($usage_Data)
            ->setInstant_Messenger_Reference($instant_Messenger_Reference)
            ->setID($iD)
            ->setDelete($delete)
            ->setDo_Not_Replace_All($do_Not_Replace_All);
    }
    /**
     * Get Instant_Messenger_Address value
     * @return string|null
     */
    public function getInstant_Messenger_Address()
    {
        return $this->Instant_Messenger_Address;
    }
    /**
     * Set Instant_Messenger_Address value
     * @param string $instant_Messenger_Address
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType
     */
    public function setInstant_Messenger_Address($instant_Messenger_Address = null)
    {
        // validation for constraint: string
        if (!is_null($instant_Messenger_Address) && !is_string($instant_Messenger_Address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instant_Messenger_Address, true), gettype($instant_Messenger_Address)), __LINE__);
        }
        $this->Instant_Messenger_Address = $instant_Messenger_Address;
        return $this;
    }
    /**
     * Get Instant_Messenger_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_TypeObjectType|null
     */
    public function getInstant_Messenger_Type_Reference()
    {
        return $this->Instant_Messenger_Type_Reference;
    }
    /**
     * Set Instant_Messenger_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Instant_Messenger_TypeObjectType $instant_Messenger_Type_Reference
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType
     */
    public function setInstant_Messenger_Type_Reference(\WorkdayWsdl\\StructType\Instant_Messenger_TypeObjectType $instant_Messenger_Type_Reference = null)
    {
        $this->Instant_Messenger_Type_Reference = $instant_Messenger_Type_Reference;
        return $this;
    }
    /**
     * Get Instant_Messenger_Comment value
     * @return string|null
     */
    public function getInstant_Messenger_Comment()
    {
        return $this->Instant_Messenger_Comment;
    }
    /**
     * Set Instant_Messenger_Comment value
     * @param string $instant_Messenger_Comment
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType
     */
    public function setInstant_Messenger_Comment($instant_Messenger_Comment = null)
    {
        // validation for constraint: string
        if (!is_null($instant_Messenger_Comment) && !is_string($instant_Messenger_Comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instant_Messenger_Comment, true), gettype($instant_Messenger_Comment)), __LINE__);
        }
        $this->Instant_Messenger_Comment = $instant_Messenger_Comment;
        return $this;
    }
    /**
     * Get Usage_Data value
     * @return \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType[]|null
     */
    public function getUsage_Data()
    {
        return $this->Usage_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setUsage_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUsage_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUsage_DataForArrayConstraintsFromSetUsage_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $instant_Messenger_Information_DataTypeUsage_DataItem) {
            // validation for constraint: itemType
            if (!$instant_Messenger_Information_DataTypeUsage_DataItem instanceof \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType) {
                $invalidValues[] = is_object($instant_Messenger_Information_DataTypeUsage_DataItem) ? get_class($instant_Messenger_Information_DataTypeUsage_DataItem) : sprintf('%s(%s)', gettype($instant_Messenger_Information_DataTypeUsage_DataItem), var_export($instant_Messenger_Information_DataTypeUsage_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Usage_Data property can only contain items of type \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Usage_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType[] $usage_Data
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType
     */
    public function setUsage_Data(array $usage_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($usage_DataArrayErrorMessage = self::validateUsage_DataForArrayConstraintsFromSetUsage_Data($usage_Data))) {
            throw new \InvalidArgumentException($usage_DataArrayErrorMessage, __LINE__);
        }
        $this->Usage_Data = $usage_Data;
        return $this;
    }
    /**
     * Add item to Usage_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType $item
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType
     */
    public function addToUsage_Data(\WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType) {
            throw new \InvalidArgumentException(sprintf('The Usage_Data property can only contain items of type \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Usage_Data[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType
     */
    public function setInstant_Messenger_Reference(\WorkdayWsdl\\StructType\Instant_Messenger_ReferenceObjectType $instant_Messenger_Reference = null)
    {
        $this->Instant_Messenger_Reference = $instant_Messenger_Reference;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
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
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType
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
     * Get Do_Not_Replace_All value
     * @return bool|null
     */
    public function getDo_Not_Replace_All()
    {
        return $this->Do_Not_Replace_All;
    }
    /**
     * Set Do_Not_Replace_All value
     * @param bool $do_Not_Replace_All
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType
     */
    public function setDo_Not_Replace_All($do_Not_Replace_All = null)
    {
        // validation for constraint: boolean
        if (!is_null($do_Not_Replace_All) && !is_bool($do_Not_Replace_All)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($do_Not_Replace_All, true), gettype($do_Not_Replace_All)), __LINE__);
        }
        $this->Do_Not_Replace_All = $do_Not_Replace_All;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Instant_Messenger_Information_DataType
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
