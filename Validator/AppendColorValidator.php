<?php

namespace Modules\AppendColor\Validator; 


class AppendColorValidator
{

	public function rule($data){
		return [
			'color' =>  'string|max:255'
		];
	}

	public function filterRules($data)
	{

	}

}
