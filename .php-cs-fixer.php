<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PhpCsFixer' => true,
        'array_syntax' => ['syntax' => 'short'],
        'curly_braces_position' => ['control_structures_opening_brace' => 'next_line_unless_newline_at_signature_end'],
        'no_multiple_statements_per_line' => true
    ])
    ->setFinder($finder);
