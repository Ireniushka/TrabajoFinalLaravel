<form action="" method="post">
    <label for="description">{{'Descripción'}}</label>
    <input type="text" name="description" id="description" value="{{ $ficha->description}}">
    </br>

    <label for="date">{{'Fecha'}}</label>
    <input type="date" name="date" id="date" value="{{ $ficha->date}}">  
</form>