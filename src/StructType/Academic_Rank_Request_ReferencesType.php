<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Rank_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request References
 * @subpackage Structs
 */
class Academic_Rank_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Academic_Rank_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic Rank Reference
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Academic_RankObjectType[]
     */
    public $Academic_Rank_Reference;
    /**
     * Constructor method for Academic_Rank_Request_ReferencesType
     * @uses Academic_Rank_Request_ReferencesType::setAcademic_Rank_Reference()
     * @param \WorkdayWsdl\\StructType\Academic_RankObjectType[] $academic_Rank_Reference
     */
    public function __construct(array $academic_Rank_Reference = array())
    {
        $this
            ->setAcademic_Rank_Reference($academic_Rank_Reference);
    }
    /**
     * Get Academic_Rank_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_RankObjectType[]|null
     */
    public function getAcademic_Rank_Reference()
    {
        return $this->Academic_Rank_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setAcademic_Rank_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademic_Rank_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcademic_Rank_ReferenceForArrayConstraintsFromSetAcademic_Rank_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Rank_Request_ReferencesTypeAcademic_Rank_ReferenceItem) {
            // validation for constraint: itemType
            if (!$academic_Rank_Request_ReferencesTypeAcademic_Rank_ReferenceItem instanceof \WorkdayWsdl\\StructType\Academic_RankObjectType) {
                $invalidValues[] = is_object($academic_Rank_Request_ReferencesTypeAcademic_Rank_ReferenceItem) ? get_class($academic_Rank_Request_ReferencesTypeAcademic_Rank_ReferenceItem) : sprintf('%s(%s)', gettype($academic_Rank_Request_ReferencesTypeAcademic_Rank_ReferenceItem), var_export($academic_Rank_Request_ReferencesTypeAcademic_Rank_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Academic_Rank_Reference property can only contain items of type \WorkdayWsdl\\StructType\Academic_RankObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Academic_Rank_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_RankObjectType[] $academic_Rank_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Rank_Request_ReferencesType
     */
    public function setAcademic_Rank_Reference(array $academic_Rank_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($academic_Rank_ReferenceArrayErrorMessage = self::validateAcademic_Rank_ReferenceForArrayConstraintsFromSetAcademic_Rank_Reference($academic_Rank_Reference))) {
            throw new \InvalidArgumentException($academic_Rank_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Academic_Rank_Reference = $academic_Rank_Reference;
        return $this;
    }
    /**
     * Add item to Academic_Rank_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_RankObjectType $item
     * @return \WorkdayWsdl\\StructType\Academic_Rank_Request_ReferencesType
     */
    public function addToAcademic_Rank_Reference(\WorkdayWsdl\\StructType\Academic_RankObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Academic_RankObjectType) {
            throw new \InvalidArgumentException(sprintf('The Academic_Rank_Reference property can only contain items of type \WorkdayWsdl\\StructType\Academic_RankObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Academic_Rank_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Academic_Rank_Request_ReferencesType
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
