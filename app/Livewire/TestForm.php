<?php

namespace App\Livewire;

use App\Components\TextInput;
use Livewire\Component;

class TestForm extends Component {
	public $email;

	public function render() {
		$input = TextInput::make('email')
			->label(function () {
				return \Str::random();
			});


		return view('livewire.test-form', [
			'input' => $input
		]);
	}
}
