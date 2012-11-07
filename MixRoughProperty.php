<?php
class MixRoughProperty {

	protected $unknownProperties = array();

	public function __set($propertyName, $value) {
		$this->unknownProperties[$propertyName] = $value;
	}

	public function __get($propertyName) {
		$result = null;
		if ($this->unknownProperties[$propertyName]) {
			$result = $this->unknownProperties[$propertyName];
		}
		return $result;
	}
}
