<?php

echo date('d-m-Y');
if (checkdate( $_GET['d'], $_GET['m'], $_GET['Y'])) {
    echo 'Data jest poprawna';
} else {
    echo 'Data jest niepoprawna';
}

?>
}