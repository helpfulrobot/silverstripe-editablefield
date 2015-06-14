<?php

/**
 * EditableFieldDropdown is an object representing dropdown field created by CMS admin
 *
 * @package editablefield
 * @author  silverstripe/userforms
 * @author  Mohamed Alsharaf <mohamed.alsharaf@gmail.com>
 * @method EditableFieldOption Options
 * @property string $Name
 * @property string $Title
 */
class EditableFieldDropdown extends EditableFieldMultipleOption {
	private static $singular_name = 'Dropdown Field';
	private static $plural_name = 'Dropdowns';

	protected function initFormField() {
		$optionSet = $this->Options();
		$options = [];

		if ($optionSet) {
			foreach ($optionSet as $option) {
				$options[$option->Title] = $option->Title;
			}
		}

		return new DropdownField($this->Name, $this->Title, $options);
	}

}
