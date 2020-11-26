<?php
require_once ("logic/logicDB/requestsDB.php");
$data = read_countries();
$el = [];
?>
<div class="container col-md-7">
    <button type="button" class=" btn btn-dark lg readCountry">Посмотреть список стран</button>
</div>

<form class="container read-form hide" name="readForm">
    <?php foreach ($data as $el): ?>
        <div class="container">
            <h3> <?= $el['name']?></h3>
            <dl class="row">
                <dt class="col-sm-3">Столица</dt>
                <dd class="col-sm-9"><?= $el['capital']?></dd>

                <dt class="col-sm-3">Население</dt>
                <dd class="col-sm-9"><?= $el['population']?> человек</dd>

                <dt class="col-sm-3 ">Площадь</dt>
                <dd class="col-sm-9"><?= $el['area']?> кв.км</dd>

                <dt class="col-sm-3">Язык</dt>
                <dd class="col-sm-9"> <?= $el['language']?></dd>
            </dl>
        </div>
    <?php endforeach; ?>
</form>