<?php

namespace App\Livewire;


use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Infolists\Components\ColorEntry;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists\Infolist;
use Livewire\Component;

class DemoInfolist extends Component implements HasForms, HasInfolists {
	use InteractsWithForms;
	use InteractsWithInfolists;

	public function infolist(Infolist $infolist) {
		return $infolist
			->schema([
				ColorEntry::make('color')
			])
			->state([
				'color' => ['#ff0000', '#00ff00']
			]);
	}

	public function render() {
		return view('livewire.demo-infolist');
	}
}
