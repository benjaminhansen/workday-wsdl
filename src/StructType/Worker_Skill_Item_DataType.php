<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Skill_Item_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Creates all Skills for the referenced Worker
 * @subpackage Structs
 */
class Worker_Skill_Item_DataType extends AbstractStructBase
{
    /**
     * The Worker_Skill_Item
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\SkillType[]
     */
    public $Worker_Skill_Item;
    /**
     * Constructor method for Worker_Skill_Item_DataType
     * @uses Worker_Skill_Item_DataType::setWorker_Skill_Item()
     * @param \WorkdayWsdl\\StructType\SkillType[] $worker_Skill_Item
     */
    public function __construct(array $worker_Skill_Item = array())
    {
        $this
            ->setWorker_Skill_Item($worker_Skill_Item);
    }
    /**
     * Get Worker_Skill_Item value
     * @return \WorkdayWsdl\\StructType\SkillType[]|null
     */
    public function getWorker_Skill_Item()
    {
        return $this->Worker_Skill_Item;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Skill_Item method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Skill_Item method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_Skill_ItemForArrayConstraintsFromSetWorker_Skill_Item(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Skill_Item_DataTypeWorker_Skill_ItemItem) {
            // validation for constraint: itemType
            if (!$worker_Skill_Item_DataTypeWorker_Skill_ItemItem instanceof \WorkdayWsdl\\StructType\SkillType) {
                $invalidValues[] = is_object($worker_Skill_Item_DataTypeWorker_Skill_ItemItem) ? get_class($worker_Skill_Item_DataTypeWorker_Skill_ItemItem) : sprintf('%s(%s)', gettype($worker_Skill_Item_DataTypeWorker_Skill_ItemItem), var_export($worker_Skill_Item_DataTypeWorker_Skill_ItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Skill_Item property can only contain items of type \WorkdayWsdl\\StructType\SkillType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Skill_Item value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\SkillType[] $worker_Skill_Item
     * @return \WorkdayWsdl\\StructType\Worker_Skill_Item_DataType
     */
    public function setWorker_Skill_Item(array $worker_Skill_Item = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_Skill_ItemArrayErrorMessage = self::validateWorker_Skill_ItemForArrayConstraintsFromSetWorker_Skill_Item($worker_Skill_Item))) {
            throw new \InvalidArgumentException($worker_Skill_ItemArrayErrorMessage, __LINE__);
        }
        $this->Worker_Skill_Item = $worker_Skill_Item;
        return $this;
    }
    /**
     * Add item to Worker_Skill_Item value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\SkillType $item
     * @return \WorkdayWsdl\\StructType\Worker_Skill_Item_DataType
     */
    public function addToWorker_Skill_Item(\WorkdayWsdl\\StructType\SkillType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\SkillType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Skill_Item property can only contain items of type \WorkdayWsdl\\StructType\SkillType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Skill_Item[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Skill_Item_DataType
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
