<?php

namespace App\Livewire;

use App\Models\User;
use App\Tables\Columns\ColorColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
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
				Filter::make('email_verified_at')
					->form([
						Fieldset::make('email_verified_at')
							->schema([
								DatePicker::make('from'),
								DatePicker::make('to')
							])
							->columns(1)
					])
					->query(function(Builder $query, array $data) {
						return $query
							->when(
								$data['from'] ?? null,
								fn(Builder $query) => $query->whereDate('email_verified_at', '>=', $data['from'])
							)
							->when(
								$data['to'] ?? null,
								fn(Builder $query) => $query->whereDate('email_verified_at', '<=', $data['to'])
							);
					})
			]);
	}

	public function render() {
		return view('livewire.demo-table');
	}
}
