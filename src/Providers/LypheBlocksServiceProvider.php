<?php

namespace LypheBlocks\Providers;

class LypheBlocksServiceProvider implements Provider
{
    protected function providers(): array
    {
        return [
            ApiServiceProvider::class,
            BlockServiceProvider::class,
            CommandServiceProvider::class,
        ];
    }

    public function register(): void
    {
        foreach ($this->providers() as $service) {
            (new $service)->register();
        }
    }

    public function boot(): void {}
}
