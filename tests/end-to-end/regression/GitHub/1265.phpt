--TEST--
GH-1265: Could not use "PHPUnit\Runner\StandardTestSuiteLoader" as loader
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--configuration';
$_SERVER['argv'][] = __DIR__ . '/1265/phpunit1265.xml';
$_SERVER['argv'][] = __DIR__ . '/1265/Issue1265Test.php';

require __DIR__ . '/../../../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: %s, Memory: %s

OK (1 test, 1 assertion)
