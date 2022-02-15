<div class="titulo">BIN - TO - DEC</div>

<form action="#" method="post">
    <input type="text" name="binary">
    <button>CONVERT</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

$binValue = $_POST['binary'];

if(isset($binValue) && is_numeric($binValue)) {
    echo bindec($binValue);
} else {
    echo "We were unable to convert this value :(";
}

?>