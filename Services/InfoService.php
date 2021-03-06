<?php

namespace Modules\AppendColor\Services; 


use Modules\Portal\Services\Validation\Data\InfoValidationService;


class InfoService extends InfoValidationService
{


	public function rule($data, $index, $columns)
	{
		return [
			'color' =>  'string|max:255'
		];
	}

	public function modifiers($data)
	{
		return  [];
	}

	public function columnsFormat($header)
	{
		return  [];
	}

}
