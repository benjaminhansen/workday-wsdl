<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Search_Settings_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Search Settings Data
 * @subpackage Structs
 */
class Search_Settings_DataType extends AbstractStructBase
{
    /**
     * The Object_Type_to_Suppress_from_Search_Reference
     * Meta information extracted from the WSDL
     * - documentation: Specify the object types that are suppressed by default in search results. Suppressions are not applied to domain searches and can be turned off by using the "all:" domain.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType[]
     */
    public $Object_Type_to_Suppress_from_Search_Reference;
    /**
     * The Synonyms
     * Meta information extracted from the WSDL
     * - documentation: Create synonyms for Workday Terms to help make tasks and standard reports more easily discovered using worker's terminology. Enter the Workday Term using the tenant base language, then define synonyms separated by comma (i.e. "PTO,
     * vacation, holiday").Synonyms in different languages can be listed together. However, if many synonyms will be defined across several languages, it is recommended to define synonyms below in the tenant base language and then use the Business Object
     * Translation task to create translations in other languages.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Synonym_Webservice_DataType[]
     */
    public $Synonyms;
    /**
     * Constructor method for Search_Settings_DataType
     * @uses Search_Settings_DataType::setObject_Type_to_Suppress_from_Search_Reference()
     * @uses Search_Settings_DataType::setSynonyms()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType[] $object_Type_to_Suppress_from_Search_Reference
     * @param \WorkdayWsdl\\StructType\Synonym_Webservice_DataType[] $synonyms
     */
    public function __construct(array $object_Type_to_Suppress_from_Search_Reference = array(), array $synonyms = array())
    {
        $this
            ->setObject_Type_to_Suppress_from_Search_Reference($object_Type_to_Suppress_from_Search_Reference)
            ->setSynonyms($synonyms);
    }
    /**
     * Get Object_Type_to_Suppress_from_Search_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType[]|null
     */
    public function getObject_Type_to_Suppress_from_Search_Reference()
    {
        return $this->Object_Type_to_Suppress_from_Search_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setObject_Type_to_Suppress_from_Search_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setObject_Type_to_Suppress_from_Search_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateObject_Type_to_Suppress_from_Search_ReferenceForArrayConstraintsFromSetObject_Type_to_Suppress_from_Search_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $search_Settings_DataTypeObject_Type_to_Suppress_from_Search_ReferenceItem) {
            // validation for constraint: itemType
            if (!$search_Settings_DataTypeObject_Type_to_Suppress_from_Search_ReferenceItem instanceof \WorkdayWsdl\\StructType\Unique_IdentifierObjectType) {
                $invalidValues[] = is_object($search_Settings_DataTypeObject_Type_to_Suppress_from_Search_ReferenceItem) ? get_class($search_Settings_DataTypeObject_Type_to_Suppress_from_Search_ReferenceItem) : sprintf('%s(%s)', gettype($search_Settings_DataTypeObject_Type_to_Suppress_from_Search_ReferenceItem), var_export($search_Settings_DataTypeObject_Type_to_Suppress_from_Search_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Object_Type_to_Suppress_from_Search_Reference property can only contain items of type \WorkdayWsdl\\StructType\Unique_IdentifierObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Object_Type_to_Suppress_from_Search_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType[] $object_Type_to_Suppress_from_Search_Reference
     * @return \WorkdayWsdl\\StructType\Search_Settings_DataType
     */
    public function setObject_Type_to_Suppress_from_Search_Reference(array $object_Type_to_Suppress_from_Search_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($object_Type_to_Suppress_from_Search_ReferenceArrayErrorMessage = self::validateObject_Type_to_Suppress_from_Search_ReferenceForArrayConstraintsFromSetObject_Type_to_Suppress_from_Search_Reference($object_Type_to_Suppress_from_Search_Reference))) {
            throw new \InvalidArgumentException($object_Type_to_Suppress_from_Search_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Object_Type_to_Suppress_from_Search_Reference = $object_Type_to_Suppress_from_Search_Reference;
        return $this;
    }
    /**
     * Add item to Object_Type_to_Suppress_from_Search_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $item
     * @return \WorkdayWsdl\\StructType\Search_Settings_DataType
     */
    public function addToObject_Type_to_Suppress_from_Search_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Unique_IdentifierObjectType) {
            throw new \InvalidArgumentException(sprintf('The Object_Type_to_Suppress_from_Search_Reference property can only contain items of type \WorkdayWsdl\\StructType\Unique_IdentifierObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Object_Type_to_Suppress_from_Search_Reference[] = $item;
        return $this;
    }
    /**
     * Get Synonyms value
     * @return \WorkdayWsdl\\StructType\Synonym_Webservice_DataType[]|null
     */
    public function getSynonyms()
    {
        return $this->Synonyms;
    }
    /**
     * This method is responsible for validating the values passed to the setSynonyms method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSynonyms method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSynonymsForArrayConstraintsFromSetSynonyms(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $search_Settings_DataTypeSynonymsItem) {
            // validation for constraint: itemType
            if (!$search_Settings_DataTypeSynonymsItem instanceof \WorkdayWsdl\\StructType\Synonym_Webservice_DataType) {
                $invalidValues[] = is_object($search_Settings_DataTypeSynonymsItem) ? get_class($search_Settings_DataTypeSynonymsItem) : sprintf('%s(%s)', gettype($search_Settings_DataTypeSynonymsItem), var_export($search_Settings_DataTypeSynonymsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Synonyms property can only contain items of type \WorkdayWsdl\\StructType\Synonym_Webservice_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Synonyms value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Synonym_Webservice_DataType[] $synonyms
     * @return \WorkdayWsdl\\StructType\Search_Settings_DataType
     */
    public function setSynonyms(array $synonyms = array())
    {
        // validation for constraint: array
        if ('' !== ($synonymsArrayErrorMessage = self::validateSynonymsForArrayConstraintsFromSetSynonyms($synonyms))) {
            throw new \InvalidArgumentException($synonymsArrayErrorMessage, __LINE__);
        }
        $this->Synonyms = $synonyms;
        return $this;
    }
    /**
     * Add item to Synonyms value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Synonym_Webservice_DataType $item
     * @return \WorkdayWsdl\\StructType\Search_Settings_DataType
     */
    public function addToSynonyms(\WorkdayWsdl\\StructType\Synonym_Webservice_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Synonym_Webservice_DataType) {
            throw new \InvalidArgumentException(sprintf('The Synonyms property can only contain items of type \WorkdayWsdl\\StructType\Synonym_Webservice_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Synonyms[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Search_Settings_DataType
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
