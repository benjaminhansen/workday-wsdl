<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Rank_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for all the detail information about the Academic Rank
 * @subpackage Structs
 */
class Academic_Rank_Response_DataType extends AbstractStructBase
{
    /**
     * The Academic_Rank
     * Meta information extracted from the WSDL
     * - documentation: Academic Rank Element
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Academic_RankType[]
     */
    public $Academic_Rank;
    /**
     * Constructor method for Academic_Rank_Response_DataType
     * @uses Academic_Rank_Response_DataType::setAcademic_Rank()
     * @param \StructType\Academic_RankType[] $academic_Rank
     */
    public function __construct(array $academic_Rank = array())
    {
        $this
            ->setAcademic_Rank($academic_Rank);
    }
    /**
     * Get Academic_Rank value
     * @return \StructType\Academic_RankType[]|null
     */
    public function getAcademic_Rank()
    {
        return $this->Academic_Rank;
    }
    /**
     * This method is responsible for validating the values passed to the setAcademic_Rank method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademic_Rank method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcademic_RankForArrayConstraintsFromSetAcademic_Rank(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Rank_Response_DataTypeAcademic_RankItem) {
            // validation for constraint: itemType
            if (!$academic_Rank_Response_DataTypeAcademic_RankItem instanceof \StructType\Academic_RankType) {
                $invalidValues[] = is_object($academic_Rank_Response_DataTypeAcademic_RankItem) ? get_class($academic_Rank_Response_DataTypeAcademic_RankItem) : sprintf('%s(%s)', gettype($academic_Rank_Response_DataTypeAcademic_RankItem), var_export($academic_Rank_Response_DataTypeAcademic_RankItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Academic_Rank property can only contain items of type \StructType\Academic_RankType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Academic_Rank value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_RankType[] $academic_Rank
     * @return \StructType\Academic_Rank_Response_DataType
     */
    public function setAcademic_Rank(array $academic_Rank = array())
    {
        // validation for constraint: array
        if ('' !== ($academic_RankArrayErrorMessage = self::validateAcademic_RankForArrayConstraintsFromSetAcademic_Rank($academic_Rank))) {
            throw new \InvalidArgumentException($academic_RankArrayErrorMessage, __LINE__);
        }
        $this->Academic_Rank = $academic_Rank;
        return $this;
    }
    /**
     * Add item to Academic_Rank value
     * @throws \InvalidArgumentException
     * @param \StructType\Academic_RankType $item
     * @return \StructType\Academic_Rank_Response_DataType
     */
    public function addToAcademic_Rank(\StructType\Academic_RankType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Academic_RankType) {
            throw new \InvalidArgumentException(sprintf('The Academic_Rank property can only contain items of type \StructType\Academic_RankType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Academic_Rank[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Academic_Rank_Response_DataType
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
