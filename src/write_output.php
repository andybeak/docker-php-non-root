<?php

if (false === file_put_contents('output.txt', 'This is output')) {

    echo 'Could not write a file into [' . __DIR__ . ']';

} else {

    echo 'Wrote file into [' . __DIR__ . DIRECTORY_SEPARATOR . 'output.txt]';

}