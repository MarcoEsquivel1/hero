@csrf
<div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" @isset($enemy) value="{{$enemy->name}}" @endisset placeholder="Ingrese un nombre" required>
</div>

<div class="mb-3">
    <label for="hp" class="form-label">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" @isset($enemy) value="{{$enemy->hp}}" @endisset placeholder="Ingrese los puntos de vida" required>
</div>

<div class="mb-3">
    <label for="atq" class="form-label">Ataque</label>
    <input type="number" class="form-control" id="atq" name="atq" @isset($enemy) value="{{$enemy->atq}}" @endisset placeholder="Ingrese los puntos de ataque" required>
</div>

<div class="mb-3">
    <label for="def" class="form-label">Defensa</label>
    <input type="number" class="form-control" id="def" name="def" @isset($enemy) value="{{$enemy->def}}" @endisset placeholder="Ingrese los puntos de defensa" required>
</div>

<div class="mb-3">
    <label for="coins" class="form-label">Monedas</label>
    <input type="number" class="form-control" id="coins" name="coins" @isset($enemy) value="{{$enemy->coins}}" @endisset placeholder="Ingrese la cantidad de monedas" required>
</div>

<div class="mb-3">
    <label for="xp" class="form-label">Experiencia</label>
    <input type="number" class="form-control" id="xp" name="xp" @isset($enemy) value="{{$enemy->xp}}" @endisset placeholder="Ingrese la experiencia" required>
</div>

<div class="mb-3">
    <label for="img_path" class="form-label">Imagen</label>
    <input type="file" class="form-control" id="img_path" name="img_path" @isset($enemy) value="{{$enemy->img_path}}" @endisset placeholder="seleccione la imagen" >
</div>