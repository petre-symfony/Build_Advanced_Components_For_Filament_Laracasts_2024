<?php

namespace App\Livewire;

use App\Components\TextInput;
use Livewire\Component;

class TestForm extends Component {
	public function render() {
		$input = TextInput::make('email')
			->label('Email Address');


		return view('livewire.test-form', [
			'input' => $input
		]);
	}
}
