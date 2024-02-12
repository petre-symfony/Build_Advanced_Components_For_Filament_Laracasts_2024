<?php

namespace App\Livewire;

use App\Models\User;
use App\Tables\Columns\ColorColumn;
use App\Tables\Filters\DateRangeFilter;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
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
				TextInputColumn::make('name'),
				ColorColumn::make('color'),
				TextColumn::make('email_verified_at')->since()
			])
			->filters([
				DateRangeFilter::make('email_verified_at')
					->maxDate(now()->addMonth())
			]);
	}

	public function render() {
		return view('livewire.demo-table');
	}
}
