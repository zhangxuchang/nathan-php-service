<?php

$name = getenv('NAME', true) ?: 'World';
echo sprintf('Hello %s!', $name);

echo "this is a new api";