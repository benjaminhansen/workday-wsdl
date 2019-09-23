<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Definition_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Maintain Committee Definition Task
 * @subpackage Structs
 */
class Committee_Definition_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Integration Reference ID used for integration purposes; This is also the Committee ID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Private_Committee
     * Meta information extracted from the WSDL
     * - documentation: Private Committee
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Private_Committee;
    /**
     * The Include_Code_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Include Code in Name
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Code_in_Name;
    /**
     * The Committee_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Type
     * @var \StructType\Committee_TypeObjectType
     */
    public $Committee_Type_Reference;
    /**
     * The Include_Type_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Include Type in Name
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Type_in_Name;
    /**
     * The Committee_Subtype_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Subtype
     * @var \StructType\Organization_SubtypeObjectType
     */
    public $Committee_Subtype_Reference;
    /**
     * The Include_Subtype_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Include Subtype
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Subtype_in_Name;
    /**
     * The Committee_Classifications_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Classification
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Committee_ClassificationObjectType[]
     */
    public $Committee_Classifications_Reference;
    /**
     * The Publishable
     * Meta information extracted from the WSDL
     * - documentation: Publishable
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Publishable;
    /**
     * The External_URL_Reference
     * Meta information extracted from the WSDL
     * - documentation: External URL
     * - minOccurs: 0
     * @var \StructType\External_URLObjectType
     */
    public $External_URL_Reference;
    /**
     * The Committee_Attachment_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Committee_Attachment_DataType[]
     */
    public $Committee_Attachment_Data;
    /**
     * The Committee_Definition_Snapshot_Data
     * @var \StructType\Committee_Definition_Snapshot_DataType
     */
    public $Committee_Definition_Snapshot_Data;
    /**
     * Constructor method for Committee_Definition_DataType
     * @uses Committee_Definition_DataType::setID()
     * @uses Committee_Definition_DataType::setPrivate_Committee()
     * @uses Committee_Definition_DataType::setInclude_Code_in_Name()
     * @uses Committee_Definition_DataType::setCommittee_Type_Reference()
     * @uses Committee_Definition_DataType::setInclude_Type_in_Name()
     * @uses Committee_Definition_DataType::setCommittee_Subtype_Reference()
     * @uses Committee_Definition_DataType::setInclude_Subtype_in_Name()
     * @uses Committee_Definition_DataType::setCommittee_Classifications_Reference()
     * @uses Committee_Definition_DataType::setPublishable()
     * @uses Committee_Definition_DataType::setExternal_URL_Reference()
     * @uses Committee_Definition_DataType::setCommittee_Attachment_Data()
     * @uses Committee_Definition_DataType::setCommittee_Definition_Snapshot_Data()
     * @param string $iD
     * @param bool $private_Committee
     * @param bool $include_Code_in_Name
     * @param \StructType\Committee_TypeObjectType $committee_Type_Reference
     * @param bool $include_Type_in_Name
     * @param \StructType\Organization_SubtypeObjectType $committee_Subtype_Reference
     * @param bool $include_Subtype_in_Name
     * @param \StructType\Committee_ClassificationObjectType[] $committee_Classifications_Reference
     * @param bool $publishable
     * @param \StructType\External_URLObjectType $external_URL_Reference
     * @param \StructType\Committee_Attachment_DataType[] $committee_Attachment_Data
     * @param \StructType\Committee_Definition_Snapshot_DataType $committee_Definition_Snapshot_Data
     */
    public function __construct($iD = null, $private_Committee = null, $include_Code_in_Name = null, \StructType\Committee_TypeObjectType $committee_Type_Reference = null, $include_Type_in_Name = null, \StructType\Organization_SubtypeObjectType $committee_Subtype_Reference = null, $include_Subtype_in_Name = null, array $committee_Classifications_Reference = array(), $publishable = null, \StructType\External_URLObjectType $external_URL_Reference = null, array $committee_Attachment_Data = array(), \StructType\Committee_Definition_Snapshot_DataType $committee_Definition_Snapshot_Data = null)
    {
        $this
            ->setID($iD)
            ->setPrivate_Committee($private_Committee)
            ->setInclude_Code_in_Name($include_Code_in_Name)
            ->setCommittee_Type_Reference($committee_Type_Reference)
            ->setInclude_Type_in_Name($include_Type_in_Name)
            ->setCommittee_Subtype_Reference($committee_Subtype_Reference)
            ->setInclude_Subtype_in_Name($include_Subtype_in_Name)
            ->setCommittee_Classifications_Reference($committee_Classifications_Reference)
            ->setPublishable($publishable)
            ->setExternal_URL_Reference($external_URL_Reference)
            ->setCommittee_Attachment_Data($committee_Attachment_Data)
            ->setCommittee_Definition_Snapshot_Data($committee_Definition_Snapshot_Data);
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
     * @return \StructType\Committee_Definition_DataType
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
     * Get Private_Committee value
     * @return bool|null
     */
    public function getPrivate_Committee()
    {
        return $this->Private_Committee;
    }
    /**
     * Set Private_Committee value
     * @param bool $private_Committee
     * @return \StructType\Committee_Definition_DataType
     */
    public function setPrivate_Committee($private_Committee = null)
    {
        // validation for constraint: boolean
        if (!is_null($private_Committee) && !is_bool($private_Committee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($private_Committee, true), gettype($private_Committee)), __LINE__);
        }
        $this->Private_Committee = $private_Committee;
        return $this;
    }
    /**
     * Get Include_Code_in_Name value
     * @return bool|null
     */
    public function getInclude_Code_in_Name()
    {
        return $this->Include_Code_in_Name;
    }
    /**
     * Set Include_Code_in_Name value
     * @param bool $include_Code_in_Name
     * @return \StructType\Committee_Definition_DataType
     */
    public function setInclude_Code_in_Name($include_Code_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Code_in_Name) && !is_bool($include_Code_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Code_in_Name, true), gettype($include_Code_in_Name)), __LINE__);
        }
        $this->Include_Code_in_Name = $include_Code_in_Name;
        return $this;
    }
    /**
     * Get Committee_Type_Reference value
     * @return \StructType\Committee_TypeObjectType|null
     */
    public function getCommittee_Type_Reference()
    {
        return $this->Committee_Type_Reference;
    }
    /**
     * Set Committee_Type_Reference value
     * @param \StructType\Committee_TypeObjectType $committee_Type_Reference
     * @return \StructType\Committee_Definition_DataType
     */
    public function setCommittee_Type_Reference(\StructType\Committee_TypeObjectType $committee_Type_Reference = null)
    {
        $this->Committee_Type_Reference = $committee_Type_Reference;
        return $this;
    }
    /**
     * Get Include_Type_in_Name value
     * @return bool|null
     */
    public function getInclude_Type_in_Name()
    {
        return $this->Include_Type_in_Name;
    }
    /**
     * Set Include_Type_in_Name value
     * @param bool $include_Type_in_Name
     * @return \StructType\Committee_Definition_DataType
     */
    public function setInclude_Type_in_Name($include_Type_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Type_in_Name) && !is_bool($include_Type_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Type_in_Name, true), gettype($include_Type_in_Name)), __LINE__);
        }
        $this->Include_Type_in_Name = $include_Type_in_Name;
        return $this;
    }
    /**
     * Get Committee_Subtype_Reference value
     * @return \StructType\Organization_SubtypeObjectType|null
     */
    public function getCommittee_Subtype_Reference()
    {
        return $this->Committee_Subtype_Reference;
    }
    /**
     * Set Committee_Subtype_Reference value
     * @param \StructType\Organization_SubtypeObjectType $committee_Subtype_Reference
     * @return \StructType\Committee_Definition_DataType
     */
    public function setCommittee_Subtype_Reference(\StructType\Organization_SubtypeObjectType $committee_Subtype_Reference = null)
    {
        $this->Committee_Subtype_Reference = $committee_Subtype_Reference;
        return $this;
    }
    /**
     * Get Include_Subtype_in_Name value
     * @return bool|null
     */
    public function getInclude_Subtype_in_Name()
    {
        return $this->Include_Subtype_in_Name;
    }
    /**
     * Set Include_Subtype_in_Name value
     * @param bool $include_Subtype_in_Name
     * @return \StructType\Committee_Definition_DataType
     */
    public function setInclude_Subtype_in_Name($include_Subtype_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Subtype_in_Name) && !is_bool($include_Subtype_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Subtype_in_Name, true), gettype($include_Subtype_in_Name)), __LINE__);
        }
        $this->Include_Subtype_in_Name = $include_Subtype_in_Name;
        return $this;
    }
    /**
     * Get Committee_Classifications_Reference value
     * @return \StructType\Committee_ClassificationObjectType[]|null
     */
    public function getCommittee_Classifications_Reference()
    {
        return $this->Committee_Classifications_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Classifications_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Classifications_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Classifications_ReferenceForArrayConstraintsFromSetCommittee_Classifications_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Definition_DataTypeCommittee_Classifications_ReferenceItem) {
            // validation for constraint: itemType
            if (!$committee_Definition_DataTypeCommittee_Classifications_ReferenceItem instanceof \StructType\Committee_ClassificationObjectType) {
                $invalidValues[] = is_object($committee_Definition_DataTypeCommittee_Classifications_ReferenceItem) ? get_class($committee_Definition_DataTypeCommittee_Classifications_ReferenceItem) : sprintf('%s(%s)', gettype($committee_Definition_DataTypeCommittee_Classifications_ReferenceItem), var_export($committee_Definition_DataTypeCommittee_Classifications_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Classifications_Reference property can only contain items of type \StructType\Committee_ClassificationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Classifications_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_ClassificationObjectType[] $committee_Classifications_Reference
     * @return \StructType\Committee_Definition_DataType
     */
    public function setCommittee_Classifications_Reference(array $committee_Classifications_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Classifications_ReferenceArrayErrorMessage = self::validateCommittee_Classifications_ReferenceForArrayConstraintsFromSetCommittee_Classifications_Reference($committee_Classifications_Reference))) {
            throw new \InvalidArgumentException($committee_Classifications_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Committee_Classifications_Reference = $committee_Classifications_Reference;
        return $this;
    }
    /**
     * Add item to Committee_Classifications_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_ClassificationObjectType $item
     * @return \StructType\Committee_Definition_DataType
     */
    public function addToCommittee_Classifications_Reference(\StructType\Committee_ClassificationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Committee_ClassificationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Classifications_Reference property can only contain items of type \StructType\Committee_ClassificationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Classifications_Reference[] = $item;
        return $this;
    }
    /**
     * Get Publishable value
     * @return bool|null
     */
    public function getPublishable()
    {
        return $this->Publishable;
    }
    /**
     * Set Publishable value
     * @param bool $publishable
     * @return \StructType\Committee_Definition_DataType
     */
    public function setPublishable($publishable = null)
    {
        // validation for constraint: boolean
        if (!is_null($publishable) && !is_bool($publishable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($publishable, true), gettype($publishable)), __LINE__);
        }
        $this->Publishable = $publishable;
        return $this;
    }
    /**
     * Get External_URL_Reference value
     * @return \StructType\External_URLObjectType|null
     */
    public function getExternal_URL_Reference()
    {
        return $this->External_URL_Reference;
    }
    /**
     * Set External_URL_Reference value
     * @param \StructType\External_URLObjectType $external_URL_Reference
     * @return \StructType\Committee_Definition_DataType
     */
    public function setExternal_URL_Reference(\StructType\External_URLObjectType $external_URL_Reference = null)
    {
        $this->External_URL_Reference = $external_URL_Reference;
        return $this;
    }
    /**
     * Get Committee_Attachment_Data value
     * @return \StructType\Committee_Attachment_DataType[]|null
     */
    public function getCommittee_Attachment_Data()
    {
        return $this->Committee_Attachment_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setCommittee_Attachment_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommittee_Attachment_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommittee_Attachment_DataForArrayConstraintsFromSetCommittee_Attachment_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Definition_DataTypeCommittee_Attachment_DataItem) {
            // validation for constraint: itemType
            if (!$committee_Definition_DataTypeCommittee_Attachment_DataItem instanceof \StructType\Committee_Attachment_DataType) {
                $invalidValues[] = is_object($committee_Definition_DataTypeCommittee_Attachment_DataItem) ? get_class($committee_Definition_DataTypeCommittee_Attachment_DataItem) : sprintf('%s(%s)', gettype($committee_Definition_DataTypeCommittee_Attachment_DataItem), var_export($committee_Definition_DataTypeCommittee_Attachment_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Committee_Attachment_Data property can only contain items of type \StructType\Committee_Attachment_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Committee_Attachment_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Attachment_DataType[] $committee_Attachment_Data
     * @return \StructType\Committee_Definition_DataType
     */
    public function setCommittee_Attachment_Data(array $committee_Attachment_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($committee_Attachment_DataArrayErrorMessage = self::validateCommittee_Attachment_DataForArrayConstraintsFromSetCommittee_Attachment_Data($committee_Attachment_Data))) {
            throw new \InvalidArgumentException($committee_Attachment_DataArrayErrorMessage, __LINE__);
        }
        $this->Committee_Attachment_Data = $committee_Attachment_Data;
        return $this;
    }
    /**
     * Add item to Committee_Attachment_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_Attachment_DataType $item
     * @return \StructType\Committee_Definition_DataType
     */
    public function addToCommittee_Attachment_Data(\StructType\Committee_Attachment_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Committee_Attachment_DataType) {
            throw new \InvalidArgumentException(sprintf('The Committee_Attachment_Data property can only contain items of type \StructType\Committee_Attachment_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Committee_Attachment_Data[] = $item;
        return $this;
    }
    /**
     * Get Committee_Definition_Snapshot_Data value
     * @return \StructType\Committee_Definition_Snapshot_DataType|null
     */
    public function getCommittee_Definition_Snapshot_Data()
    {
        return $this->Committee_Definition_Snapshot_Data;
    }
    /**
     * Set Committee_Definition_Snapshot_Data value
     * @param \StructType\Committee_Definition_Snapshot_DataType $committee_Definition_Snapshot_Data
     * @return \StructType\Committee_Definition_DataType
     */
    public function setCommittee_Definition_Snapshot_Data(\StructType\Committee_Definition_Snapshot_DataType $committee_Definition_Snapshot_Data = null)
    {
        $this->Committee_Definition_Snapshot_Data = $committee_Definition_Snapshot_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Committee_Definition_DataType
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
