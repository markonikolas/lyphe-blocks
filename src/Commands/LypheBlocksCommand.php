<?php

namespace LypheBlocks\Commands;

class LypheBlocks extends \WP_CLI_Command
{
    public function __construct()
    {
        parent::__construct();
    }

    public function howdy(): void
    {
        \WP_CLI::success('Howdy!');
    }
}
