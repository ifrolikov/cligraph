# cligraph

usage:

```php
$maxBarLength = 50;
$drawer = new \CliGraph\Drawer($maxBarLength);
$percents = 33;

print PHP_EOL;
print "{$percents} percents or {$maxBarLength} symbols: \n";
print $drawer->getBar($percents) . PHP_EOL;
print PHP_EOL;

```

result:

```

33 percents or 50 symbols: 
▉▉▉▉▉▉▉▉▉▉▉▉▉▉▉▉▉░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░


```
