<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Development_Item_Version_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains detailed data for the referenced Development Item
 * @subpackage Structs
 */
class Development_Item_Version_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the Development Item.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Development_Item
     * Meta information extracted from the WSDL
     * - documentation: Title field of the referenced Development Item
     * - base: xsd:string
     * - maxLength: 140
     * - maxOccurs: 1
     * @var string
     */
    public $Development_Item;
    /**
     * The Additional_Information
     * Meta information extracted from the WSDL
     * - documentation: Additional Information field for the referenced Development Item
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Additional_Information;
    /**
     * The Category_Reference
     * Meta information extracted from the WSDL
     * - documentation: Category field for the referenced Development Item
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Development_Item_CategoryObjectType[]
     */
    public $Category_Reference;
    /**
     * The Development_Item_Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Start Date field for the referenced Development Item
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Development_Item_Start_Date;
    /**
     * The Development_Item_Completion_Date
     * Meta information extracted from the WSDL
     * - documentation: Completion Date field for the referenced Development Item
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Development_Item_Completion_Date;
    /**
     * The Status_Reference
     * Meta information extracted from the WSDL
     * - documentation: The status of the Development Item. The status is required and must be an active Development Item Status.
     * @var \WorkdayWsdl\\StructType\Development_Item_StatusObjectType
     */
    public $Status_Reference;
    /**
     * The Status_Note
     * Meta information extracted from the WSDL
     * - documentation: Status Note field for the referenced Development Item
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status_Note;
    /**
     * The Updated_by_Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Updated by Worker Reference is the worker updating the Development Item. If left empty, the processing worker will be used.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType
     */
    public $Updated_by_Worker_Reference;
    /**
     * The Relates_To_Reference
     * Meta information extracted from the WSDL
     * - documentation: Tag Reference for Development Items based on Competency, Job Profile, and Work Experience Skill.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Talent_TagObjectType[]
     */
    public $Relates_To_Reference;
    /**
     * Constructor method for Development_Item_Version_DataType
     * @uses Development_Item_Version_DataType::setID()
     * @uses Development_Item_Version_DataType::setDevelopment_Item()
     * @uses Development_Item_Version_DataType::setAdditional_Information()
     * @uses Development_Item_Version_DataType::setCategory_Reference()
     * @uses Development_Item_Version_DataType::setDevelopment_Item_Start_Date()
     * @uses Development_Item_Version_DataType::setDevelopment_Item_Completion_Date()
     * @uses Development_Item_Version_DataType::setStatus_Reference()
     * @uses Development_Item_Version_DataType::setStatus_Note()
     * @uses Development_Item_Version_DataType::setUpdated_by_Worker_Reference()
     * @uses Development_Item_Version_DataType::setRelates_To_Reference()
     * @param string $iD
     * @param string $development_Item
     * @param string $additional_Information
     * @param \WorkdayWsdl\\StructType\Development_Item_CategoryObjectType[] $category_Reference
     * @param string $development_Item_Start_Date
     * @param string $development_Item_Completion_Date
     * @param \WorkdayWsdl\\StructType\Development_Item_StatusObjectType $status_Reference
     * @param string $status_Note
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $updated_by_Worker_Reference
     * @param \WorkdayWsdl\\StructType\Talent_TagObjectType[] $relates_To_Reference
     */
    public function __construct($iD = null, $development_Item = null, $additional_Information = null, array $category_Reference = array(), $development_Item_Start_Date = null, $development_Item_Completion_Date = null, \WorkdayWsdl\\StructType\Development_Item_StatusObjectType $status_Reference = null, $status_Note = null, \WorkdayWsdl\\StructType\WorkerObjectType $updated_by_Worker_Reference = null, array $relates_To_Reference = array())
    {
        $this
            ->setID($iD)
            ->setDevelopment_Item($development_Item)
            ->setAdditional_Information($additional_Information)
            ->setCategory_Reference($category_Reference)
            ->setDevelopment_Item_Start_Date($development_Item_Start_Date)
            ->setDevelopment_Item_Completion_Date($development_Item_Completion_Date)
            ->setStatus_Reference($status_Reference)
            ->setStatus_Note($status_Note)
            ->setUpdated_by_Worker_Reference($updated_by_Worker_Reference)
            ->setRelates_To_Reference($relates_To_Reference);
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
     * @return \WorkdayWsdl\\StructType\Development_Item_Version_DataType
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
     * Get Development_Item value
     * @return string|null
     */
    public function getDevelopment_Item()
    {
        return $this->Development_Item;
    }
    /**
     * Set Development_Item value
     * @param string $development_Item
     * @return \WorkdayWsdl\\StructType\Development_Item_Version_DataType
     */
    public function setDevelopment_Item($development_Item = null)
    {
        // validation for constraint: string
        if (!is_null($development_Item) && !is_string($development_Item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($development_Item, true), gettype($development_Item)), __LINE__);
        }
        // validation for constraint: maxLength(140)
        if (!is_null($development_Item) && mb_strlen($development_Item) > 140) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 140', mb_strlen($development_Item)), __LINE__);
        }
        $this->Development_Item = $development_Item;
        return $this;
    }
    /**
     * Get Additional_Information value
     * @return string|null
     */
    public function getAdditional_Information()
    {
        return $this->Additional_Information;
    }
    /**
     * Set Additional_Information value
     * @param string $additional_Information
     * @return \WorkdayWsdl\\StructType\Development_Item_Version_DataType
     */
    public function setAdditional_Information($additional_Information = null)
    {
        // validation for constraint: string
        if (!is_null($additional_Information) && !is_string($additional_Information)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additional_Information, true), gettype($additional_Information)), __LINE__);
        }
        $this->Additional_Information = $additional_Information;
        return $this;
    }
    /**
     * Get Category_Reference value
     * @return \WorkdayWsdl\\StructType\Development_Item_CategoryObjectType[]|null
     */
    public function getCategory_Reference()
    {
        return $this->Category_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCategory_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategory_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategory_ReferenceForArrayConstraintsFromSetCategory_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $development_Item_Version_DataTypeCategory_ReferenceItem) {
            // validation for constraint: itemType
            if (!$development_Item_Version_DataTypeCategory_ReferenceItem instanceof \WorkdayWsdl\\StructType\Development_Item_CategoryObjectType) {
                $invalidValues[] = is_object($development_Item_Version_DataTypeCategory_ReferenceItem) ? get_class($development_Item_Version_DataTypeCategory_ReferenceItem) : sprintf('%s(%s)', gettype($development_Item_Version_DataTypeCategory_ReferenceItem), var_export($development_Item_Version_DataTypeCategory_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Category_Reference property can only contain items of type \WorkdayWsdl\\StructType\Development_Item_CategoryObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Category_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Development_Item_CategoryObjectType[] $category_Reference
     * @return \WorkdayWsdl\\StructType\Development_Item_Version_DataType
     */
    public function setCategory_Reference(array $category_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($category_ReferenceArrayErrorMessage = self::validateCategory_ReferenceForArrayConstraintsFromSetCategory_Reference($category_Reference))) {
            throw new \InvalidArgumentException($category_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Category_Reference = $category_Reference;
        return $this;
    }
    /**
     * Add item to Category_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Development_Item_CategoryObjectType $item
     * @return \WorkdayWsdl\\StructType\Development_Item_Version_DataType
     */
    public function addToCategory_Reference(\WorkdayWsdl\\StructType\Development_Item_CategoryObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Development_Item_CategoryObjectType) {
            throw new \InvalidArgumentException(sprintf('The Category_Reference property can only contain items of type \WorkdayWsdl\\StructType\Development_Item_CategoryObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Category_Reference[] = $item;
        return $this;
    }
    /**
     * Get Development_Item_Start_Date value
     * @return string|null
     */
    public function getDevelopment_Item_Start_Date()
    {
        return $this->Development_Item_Start_Date;
    }
    /**
     * Set Development_Item_Start_Date value
     * @param string $development_Item_Start_Date
     * @return \WorkdayWsdl\\StructType\Development_Item_Version_DataType
     */
    public function setDevelopment_Item_Start_Date($development_Item_Start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($development_Item_Start_Date) && !is_string($development_Item_Start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($development_Item_Start_Date, true), gettype($development_Item_Start_Date)), __LINE__);
        }
        $this->Development_Item_Start_Date = $development_Item_Start_Date;
        return $this;
    }
    /**
     * Get Development_Item_Completion_Date value
     * @return string|null
     */
    public function getDevelopment_Item_Completion_Date()
    {
        return $this->Development_Item_Completion_Date;
    }
    /**
     * Set Development_Item_Completion_Date value
     * @param string $development_Item_Completion_Date
     * @return \WorkdayWsdl\\StructType\Development_Item_Version_DataType
     */
    public function setDevelopment_Item_Completion_Date($development_Item_Completion_Date = null)
    {
        // validation for constraint: string
        if (!is_null($development_Item_Completion_Date) && !is_string($development_Item_Completion_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($development_Item_Completion_Date, true), gettype($development_Item_Completion_Date)), __LINE__);
        }
        $this->Development_Item_Completion_Date = $development_Item_Completion_Date;
        return $this;
    }
    /**
     * Get Status_Reference value
     * @return \WorkdayWsdl\\StructType\Development_Item_StatusObjectType|null
     */
    public function getStatus_Reference()
    {
        return $this->Status_Reference;
    }
    /**
     * Set Status_Reference value
     * @param \WorkdayWsdl\\StructType\Development_Item_StatusObjectType $status_Reference
     * @return \WorkdayWsdl\\StructType\Development_Item_Version_DataType
     */
    public function setStatus_Reference(\WorkdayWsdl\\StructType\Development_Item_StatusObjectType $status_Reference = null)
    {
        $this->Status_Reference = $status_Reference;
        return $this;
    }
    /**
     * Get Status_Note value
     * @return string|null
     */
    public function getStatus_Note()
    {
        return $this->Status_Note;
    }
    /**
     * Set Status_Note value
     * @param string $status_Note
     * @return \WorkdayWsdl\\StructType\Development_Item_Version_DataType
     */
    public function setStatus_Note($status_Note = null)
    {
        // validation for constraint: string
        if (!is_null($status_Note) && !is_string($status_Note)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status_Note, true), gettype($status_Note)), __LINE__);
        }
        $this->Status_Note = $status_Note;
        return $this;
    }
    /**
     * Get Updated_by_Worker_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType|null
     */
    public function getUpdated_by_Worker_Reference()
    {
        return $this->Updated_by_Worker_Reference;
    }
    /**
     * Set Updated_by_Worker_Reference value
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $updated_by_Worker_Reference
     * @return \WorkdayWsdl\\StructType\Development_Item_Version_DataType
     */
    public function setUpdated_by_Worker_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $updated_by_Worker_Reference = null)
    {
        $this->Updated_by_Worker_Reference = $updated_by_Worker_Reference;
        return $this;
    }
    /**
     * Get Relates_To_Reference value
     * @return \WorkdayWsdl\\StructType\Talent_TagObjectType[]|null
     */
    public function getRelates_To_Reference()
    {
        return $this->Relates_To_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setRelates_To_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRelates_To_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRelates_To_ReferenceForArrayConstraintsFromSetRelates_To_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $development_Item_Version_DataTypeRelates_To_ReferenceItem) {
            // validation for constraint: itemType
            if (!$development_Item_Version_DataTypeRelates_To_ReferenceItem instanceof \WorkdayWsdl\\StructType\Talent_TagObjectType) {
                $invalidValues[] = is_object($development_Item_Version_DataTypeRelates_To_ReferenceItem) ? get_class($development_Item_Version_DataTypeRelates_To_ReferenceItem) : sprintf('%s(%s)', gettype($development_Item_Version_DataTypeRelates_To_ReferenceItem), var_export($development_Item_Version_DataTypeRelates_To_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Relates_To_Reference property can only contain items of type \WorkdayWsdl\\StructType\Talent_TagObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Relates_To_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Talent_TagObjectType[] $relates_To_Reference
     * @return \WorkdayWsdl\\StructType\Development_Item_Version_DataType
     */
    public function setRelates_To_Reference(array $relates_To_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($relates_To_ReferenceArrayErrorMessage = self::validateRelates_To_ReferenceForArrayConstraintsFromSetRelates_To_Reference($relates_To_Reference))) {
            throw new \InvalidArgumentException($relates_To_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Relates_To_Reference = $relates_To_Reference;
        return $this;
    }
    /**
     * Add item to Relates_To_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Talent_TagObjectType $item
     * @return \WorkdayWsdl\\StructType\Development_Item_Version_DataType
     */
    public function addToRelates_To_Reference(\WorkdayWsdl\\StructType\Talent_TagObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Talent_TagObjectType) {
            throw new \InvalidArgumentException(sprintf('The Relates_To_Reference property can only contain items of type \WorkdayWsdl\\StructType\Talent_TagObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Relates_To_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Development_Item_Version_DataType
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
