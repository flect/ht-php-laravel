<?php

class HelloController extends BaseController {

	public function getIndex() {
		return View::make('hello');
	}
}
