<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Web_Address_Information_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Web Address ID field is for updating the value of the Web Address Reference. It cannot be the same as another existing web address. | You can't change the Usage Type of an existing Web Address | Web Address is required unless you
 * are deleting a web address. | Web Address Reference is required when you delete a web address. | Invalid Web Address Reference or the Web Address with this Reference has been deleted. | When Do Not Replace All is False for all web address elements,
 * Delete can't be True. | You can't change a primary web address to an additional web address or an additional web address to a primary web address. | When Do Not Replace All is False for all web address elements, you can't pass a Web Address
 * Reference. | Primary Web Address can't be deleted when there are additional web addresses with the same Usage Type or the web address reference does not belong to the processing record. | Usage Data is required unless you are deleting a Web Address.
 * | You cannot specify the same usage type more than once for an address. | Invalid Usage Type and Use For combination for Web Address. | Web Address Information
 * @subpackage Structs
 */
class Web_Address_Information_DataType extends AbstractStructBase
{
    /**
     * The Web_Address
     * Meta information extracted from the WSDL
     * - documentation: Web address (Example: URL).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Web_Address;
    /**
     * The Web_Address_Comment
     * Meta information extracted from the WSDL
     * - documentation: Web address comment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Web_Address_Comment;
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
     * The Web_Address_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Web Address Reference Instance
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Web_Address_ReferenceObjectType
     */
    public $Web_Address_Reference;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: New ID value used in web address updates. The ID cannot already be in use by another web address.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Set this flag to true in order to delete the referenced communication method. If this flag is set, the Reference ID field becomes required, and all other communication method fields that would otherwise be required will be optional
     * and meaningless.
     * @var bool
     */
    public $Delete;
    /**
     * The Do_Not_Replace_All
     * Meta information extracted from the WSDL
     * - documentation: This flag controls whether or not existing non-primary web address data will be replaced. A value of true means only the referenced web address will be updated, or created if it does not exist or no reference was provided. This
     * behavior is used if the flag is set to true for ANY web address in the request.
     * @var bool
     */
    public $Do_Not_Replace_All;
    /**
     * Constructor method for Web_Address_Information_DataType
     * @uses Web_Address_Information_DataType::setWeb_Address()
     * @uses Web_Address_Information_DataType::setWeb_Address_Comment()
     * @uses Web_Address_Information_DataType::setUsage_Data()
     * @uses Web_Address_Information_DataType::setWeb_Address_Reference()
     * @uses Web_Address_Information_DataType::setID()
     * @uses Web_Address_Information_DataType::setDelete()
     * @uses Web_Address_Information_DataType::setDo_Not_Replace_All()
     * @param string $web_Address
     * @param string $web_Address_Comment
     * @param \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType[] $usage_Data
     * @param \WorkdayWsdl\\StructType\Web_Address_ReferenceObjectType $web_Address_Reference
     * @param string $iD
     * @param bool $delete
     * @param bool $do_Not_Replace_All
     */
    public function __construct($web_Address = null, $web_Address_Comment = null, array $usage_Data = array(), \WorkdayWsdl\\StructType\Web_Address_ReferenceObjectType $web_Address_Reference = null, $iD = null, $delete = null, $do_Not_Replace_All = null)
    {
        $this
            ->setWeb_Address($web_Address)
            ->setWeb_Address_Comment($web_Address_Comment)
            ->setUsage_Data($usage_Data)
            ->setWeb_Address_Reference($web_Address_Reference)
            ->setID($iD)
            ->setDelete($delete)
            ->setDo_Not_Replace_All($do_Not_Replace_All);
    }
    /**
     * Get Web_Address value
     * @return string|null
     */
    public function getWeb_Address()
    {
        return $this->Web_Address;
    }
    /**
     * Set Web_Address value
     * @param string $web_Address
     * @return \WorkdayWsdl\\StructType\Web_Address_Information_DataType
     */
    public function setWeb_Address($web_Address = null)
    {
        // validation for constraint: string
        if (!is_null($web_Address) && !is_string($web_Address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($web_Address, true), gettype($web_Address)), __LINE__);
        }
        $this->Web_Address = $web_Address;
        return $this;
    }
    /**
     * Get Web_Address_Comment value
     * @return string|null
     */
    public function getWeb_Address_Comment()
    {
        return $this->Web_Address_Comment;
    }
    /**
     * Set Web_Address_Comment value
     * @param string $web_Address_Comment
     * @return \WorkdayWsdl\\StructType\Web_Address_Information_DataType
     */
    public function setWeb_Address_Comment($web_Address_Comment = null)
    {
        // validation for constraint: string
        if (!is_null($web_Address_Comment) && !is_string($web_Address_Comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($web_Address_Comment, true), gettype($web_Address_Comment)), __LINE__);
        }
        $this->Web_Address_Comment = $web_Address_Comment;
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
        foreach ($values as $web_Address_Information_DataTypeUsage_DataItem) {
            // validation for constraint: itemType
            if (!$web_Address_Information_DataTypeUsage_DataItem instanceof \WorkdayWsdl\\StructType\Communication_Method_Usage_Information_DataType) {
                $invalidValues[] = is_object($web_Address_Information_DataTypeUsage_DataItem) ? get_class($web_Address_Information_DataTypeUsage_DataItem) : sprintf('%s(%s)', gettype($web_Address_Information_DataTypeUsage_DataItem), var_export($web_Address_Information_DataTypeUsage_DataItem, true));
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
     * @return \WorkdayWsdl\\StructType\Web_Address_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Web_Address_Information_DataType
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
     * Get Web_Address_Reference value
     * @return \WorkdayWsdl\\StructType\Web_Address_ReferenceObjectType|null
     */
    public function getWeb_Address_Reference()
    {
        return $this->Web_Address_Reference;
    }
    /**
     * Set Web_Address_Reference value
     * @param \WorkdayWsdl\\StructType\Web_Address_ReferenceObjectType $web_Address_Reference
     * @return \WorkdayWsdl\\StructType\Web_Address_Information_DataType
     */
    public function setWeb_Address_Reference(\WorkdayWsdl\\StructType\Web_Address_ReferenceObjectType $web_Address_Reference = null)
    {
        $this->Web_Address_Reference = $web_Address_Reference;
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
     * @return \WorkdayWsdl\\StructType\Web_Address_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Web_Address_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Web_Address_Information_DataType
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
     * @return \WorkdayWsdl\\StructType\Web_Address_Information_DataType
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
