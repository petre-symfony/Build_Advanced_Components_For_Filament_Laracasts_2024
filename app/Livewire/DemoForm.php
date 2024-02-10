<?php

namespace App\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class DemoForm extends Component implements HasForms {
	use InteractsWithForms;

	public ?array $data = [];

	public function mount() {
		$this->form->fill();
	}

	public function form(Form $form) {
		return $form
			->schema([

			])
			->statePath('data');
	}

	public function submit(): void {
		$data = $this->form->getState();
	}

	public function render() {
		return view('livewire.demo-form');
	}
}
