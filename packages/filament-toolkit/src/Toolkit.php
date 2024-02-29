<?php

namespace DanHarrin\FilamentToolkit;

use DanHarrin\FilamentToolkit\Resources\UserResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

class Toolkit implements Plugin {
	public function getId(): string {
		return 'danharrin-toolkit';
	}

	public function register(Panel $panel): void {
		$panel->resources([
			UserResource::class
		]);
	}

	public function boot(Panel $panel): void {
		$panel->colors([
			'primary' => auth()->user()->color
		]);
	}
}