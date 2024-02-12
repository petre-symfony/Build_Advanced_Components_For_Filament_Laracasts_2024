<?php

namespace App\Tables\Filters;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class DateRangeFilter extends Filter {
	protected function setUp(): void {
		parent::setUp();

		$this->form([
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
			});
	}

}