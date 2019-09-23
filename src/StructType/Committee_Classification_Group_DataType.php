<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Committee_Classification_Group_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data Committee Classification Group
 * @subpackage Structs
 */
class Committee_Classification_Group_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier for the committee classification group. If not entered, one will be generated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Committee Classification Group Name. Required for add.
     * - maxOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: A boolean flag to set the committee classification group inactive.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * The Included_Classification_Reference
     * Meta information extracted from the WSDL
     * - documentation: Included classifications for classification group
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Committee_ClassificationObjectType[]
     */
    public $Included_Classification_Reference;
    /**
     * Constructor method for Committee_Classification_Group_DataType
     * @uses Committee_Classification_Group_DataType::setID()
     * @uses Committee_Classification_Group_DataType::setName()
     * @uses Committee_Classification_Group_DataType::setInactive()
     * @uses Committee_Classification_Group_DataType::setIncluded_Classification_Reference()
     * @param string $iD
     * @param string $name
     * @param bool $inactive
     * @param \StructType\Committee_ClassificationObjectType[] $included_Classification_Reference
     */
    public function __construct($iD = null, $name = null, $inactive = null, array $included_Classification_Reference = array())
    {
        $this
            ->setID($iD)
            ->setName($name)
            ->setInactive($inactive)
            ->setIncluded_Classification_Reference($included_Classification_Reference);
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
     * @return \StructType\Committee_Classification_Group_DataType
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
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\Committee_Classification_Group_DataType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \StructType\Committee_Classification_Group_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Get Included_Classification_Reference value
     * @return \StructType\Committee_ClassificationObjectType[]|null
     */
    public function getIncluded_Classification_Reference()
    {
        return $this->Included_Classification_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setIncluded_Classification_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIncluded_Classification_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncluded_Classification_ReferenceForArrayConstraintsFromSetIncluded_Classification_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $committee_Classification_Group_DataTypeIncluded_Classification_ReferenceItem) {
            // validation for constraint: itemType
            if (!$committee_Classification_Group_DataTypeIncluded_Classification_ReferenceItem instanceof \StructType\Committee_ClassificationObjectType) {
                $invalidValues[] = is_object($committee_Classification_Group_DataTypeIncluded_Classification_ReferenceItem) ? get_class($committee_Classification_Group_DataTypeIncluded_Classification_ReferenceItem) : sprintf('%s(%s)', gettype($committee_Classification_Group_DataTypeIncluded_Classification_ReferenceItem), var_export($committee_Classification_Group_DataTypeIncluded_Classification_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Included_Classification_Reference property can only contain items of type \StructType\Committee_ClassificationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Included_Classification_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_ClassificationObjectType[] $included_Classification_Reference
     * @return \StructType\Committee_Classification_Group_DataType
     */
    public function setIncluded_Classification_Reference(array $included_Classification_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($included_Classification_ReferenceArrayErrorMessage = self::validateIncluded_Classification_ReferenceForArrayConstraintsFromSetIncluded_Classification_Reference($included_Classification_Reference))) {
            throw new \InvalidArgumentException($included_Classification_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Included_Classification_Reference = $included_Classification_Reference;
        return $this;
    }
    /**
     * Add item to Included_Classification_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Committee_ClassificationObjectType $item
     * @return \StructType\Committee_Classification_Group_DataType
     */
    public function addToIncluded_Classification_Reference(\StructType\Committee_ClassificationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Committee_ClassificationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Included_Classification_Reference property can only contain items of type \StructType\Committee_ClassificationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Included_Classification_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Committee_Classification_Group_DataType
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
