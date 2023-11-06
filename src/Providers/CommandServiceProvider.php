<?php

namespace LypheBlocks\Providers;

use LypheBlocks\Commands\PluginNameCommand;

class CommandServiceProvider implements Provider
{
    public function register(): void
    {
        if (! defined('WP_CLI') || ! WP_CLI) {
            return;
        }

        \WP_CLI::add_command('plugin-name', PluginNameCommand::class);
    }
}
