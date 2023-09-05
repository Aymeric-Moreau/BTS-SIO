<form method="post" action="Calculette.php" name="unformulaire">
<fieldset>
    <legend>Calculette</legend>
        
        <p>
            <label for="number">1er nombre : </label>
            <input type="number" id="1n" name="1n" required placeholder="ex : 666">
        </p>
        <p>
            <label >Operateur : </label>
                <select id="operateur" name="operateur">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>

                </select>
            </p>
        <p>
            <label for="number">2eme nombre : </label>
            <input type="number" id="2n" name="2n" required placeholder="ex : 999">
        </p>
        <p id="bouton">
            <input type="submit" id="calculer" value="Calculer">
            <input type="reset" id="annuler" value="Annuler">
    
        </p>
        
        </fieldset>
</form>

<?php  
$nbr1 = $_POST['1n'];
$nbr2 = $_POST['2n'];
$operateur = $_POST['operateur'];
$result = 0;

switch ($operateur) {
    case '/':
        $result = $nbr1 / $nbr2;
        break;
    case '+':
        $result = $nbr1 + $nbr2;
        break;
    case '-':
        $result = $nbr1 - $nbr2;
        break;
    case '*':
        $result = $nbr1 * $nbr2;
        break;
    }
    echo $result
?>