<?php
/**
 * Plugin Name:     Lyphe Blocks
 * Description:     Gutenberg blocks for Lyphe.
 * Version:         0.0.1
 * Author:          Marko Nikolaš
 * Author URI:      https://lyphe.com
 * License:         MIT License
 * Text Domain:     lyphe
 * Domain Path:     /resources/lang
 */

namespace LypheBlocks;

require_once __DIR__.'/vendor/autoload.php';

$blocks = new Providers\LypheBlocksServiceProvider;
$blocks->register();

add_action('init', [$blocks, 'boot']);
