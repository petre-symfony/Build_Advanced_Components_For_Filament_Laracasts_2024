<?php

namespace App\Livewire;

use App\Models\User;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Component;

class DemoTable extends Component implements HasForms, HasTable {
	use InteractsWithForms;
	use InteractsWithTable;

	public function table(Table $table): Table {
		return $table
			->query(User::query())
			->columns([
				TextColumn::make('name')
			]);
	}

	public function render() {
		return view('livewire.demo-table');
	}
}
