<div class="container col-md-7">
    <button type="button" class=" btn btn-dark lg addCountry">Добавить страну</button>
</div>
<form class="container add-form hide" name="addForm" method="post" action="\intervolga\five\logic\addCountries.php">
    <div class="form-row">
        <div class="form-group col-md-auto">
            <label for="formGroupExampleInput">Название</label>
            <input type="text" class="form-control" name="countryName" required>
        </div>
        <div class="form-group col-md-aut">
            <label for="formGroupExampleInput2">Столица</label>
            <input type="text" class="form-control" name="countryCapital" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-aut">
            <label for="formGroupExampleInput">Население</label>
            <input type="number" class="form-control" name="countryPopulation" required>
        </div>
        <div class="form-group col-md-aut">
            <label for="formGroupExampleInput">Площадь</label>
            <input type="number" step="any" class="form-control" name="countryArea" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-aut">
            <label for="formGroupExampleInput">Официальный язык</label>
            <input type="text" class="form-control" name="countryLang" required>
        </div>

    </div>
    <div>
        <button type="submit" name="submit" class="btn btn-outline-secondary">Отправить</button>
    </div>
</form>