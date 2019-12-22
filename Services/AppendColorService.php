<?php

namespace Modules\AppendColor\Services;


class AppendColorService {
	
	public function fields(){
		return config('appendcolor.fields');
	}

	public function sample(){
		return config('appendcolor.sample');
	}

}
