<?php
/**
 * Created by PhpStorm.
 * User: BGDN
 * Date: 14.05.14
 * Time: 18:51
 */
namespace BionicUniversity\BogdanKolesnyk\HomeWork\Builder;

abstract class BuilderClass implements BuilderInterface {
	
	private $givenMaterials;
	private $result;
	private $materialsUsed;
	private $materialsLeft;
	private $stealAmount;
	private $materialsStolen;
	
	function __construct($stealAmount) {
		$this->stealAmount = $stealAmount;
		return $this;
	}


	private function setGivenMaterials(array $materials) {
		$this->givenMaterials = $materials;
		return $this;
	}
	
	public function buildHouse(array $materials, \HouseInterface $blueprint) {
		$this->setGivenMaterials($materials);
		
		return $this->result;
	}
}
