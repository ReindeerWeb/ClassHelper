<?php

$header = <<<EOF
This file is part of Class Helper.

(c) ReindeerWeb, Marcel Rudolf, Germany <hello@reindeer-web.de>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setUsingCache(false)
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@PSR2' => true,
        'header_comment' => array('header' => $header)
    ))
    ->setFinder($finder)
;
