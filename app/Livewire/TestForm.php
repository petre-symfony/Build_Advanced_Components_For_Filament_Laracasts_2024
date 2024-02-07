<?php

namespace App\Livewire;

use App\Components\TextInput;
use Livewire\Component;

class TestForm extends Component {
	public $email;

	public function render() {
		$nameInput = TextInput::make('name')
			->maxLength(10)
			->livewire($this)
		;

		$emailInput = TextInput::make('email')
			->maxLength(10)
			->livewire($this)
		;


		return view('livewire.test-form', [
			'nameInput' => $nameInput,
			'emailInput' => $emailInput
		]);
	}
}
