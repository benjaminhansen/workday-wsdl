<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_RankType StructType
 * Meta information extracted from the WSDL
 * - documentation: Academic Rank Element
 * @subpackage Structs
 */
class Academic_RankType extends AbstractStructBase
{
    /**
     * The Academic_Rank_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic Rank Reference
     * - minOccurs: 0
     * @var \StructType\Academic_RankObjectType
     */
    public $Academic_Rank_Reference;
    /**
     * The Academic_Rank_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Academic_Rank_DataType
     */
    public $Academic_Rank_Data;
    /**
     * Constructor method for Academic_RankType
     * @uses Academic_RankType::setAcademic_Rank_Reference()
     * @uses Academic_RankType::setAcademic_Rank_Data()
     * @param \StructType\Academic_RankObjectType $academic_Rank_Reference
     * @param \StructType\Academic_Rank_DataType $academic_Rank_Data
     */
    public function __construct(\StructType\Academic_RankObjectType $academic_Rank_Reference = null, \StructType\Academic_Rank_DataType $academic_Rank_Data = null)
    {
        $this
            ->setAcademic_Rank_Reference($academic_Rank_Reference)
            ->setAcademic_Rank_Data($academic_Rank_Data);
    }
    /**
     * Get Academic_Rank_Reference value
     * @return \StructType\Academic_RankObjectType|null
     */
    public function getAcademic_Rank_Reference()
    {
        return $this->Academic_Rank_Reference;
    }
    /**
     * Set Academic_Rank_Reference value
     * @param \StructType\Academic_RankObjectType $academic_Rank_Reference
     * @return \StructType\Academic_RankType
     */
    public function setAcademic_Rank_Reference(\StructType\Academic_RankObjectType $academic_Rank_Reference = null)
    {
        $this->Academic_Rank_Reference = $academic_Rank_Reference;
        return $this;
    }
    /**
     * Get Academic_Rank_Data value
     * @return \StructType\Academic_Rank_DataType|null
     */
    public function getAcademic_Rank_Data()
    {
        return $this->Academic_Rank_Data;
    }
    /**
     * Set Academic_Rank_Data value
     * @param \StructType\Academic_Rank_DataType $academic_Rank_Data
     * @return \StructType\Academic_RankType
     */
    public function setAcademic_Rank_Data(\StructType\Academic_Rank_DataType $academic_Rank_Data = null)
    {
        $this->Academic_Rank_Data = $academic_Rank_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Academic_RankType
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
