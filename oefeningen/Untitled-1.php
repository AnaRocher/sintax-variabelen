
<?php
$foutmeldingen = [];
if ($_POST) {
    //verzonden
    if (empty($_POST['naam'])) {
        $foutmeldingen['naam'] = "Naam is verplicht"; }
}
    if (empty($foutmeldingen)) {
        mail(...);
}
?>
<div>
    <h1>Contact</h1>
</div>
<div>
    <p>Lorem ipsum dolor sit amet, consectetueradipiscing elit.<br> 
    Aenean commodo ligulaeget dolor. Aenean massa.<br>
    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
</div>
<form action="" method="get/post" >
    <div class="<?php echo isset($foutmeldingen['naam']) ? 'has-error' : '' ?>">
        <label for="naam">Naam:</label>
        <input name="naam" id="naam" type="text">
    </div>
    <div class="<?php echo isset($foutmeldingen['email']) ? 'has-error' : '' ?>">
        <label for="email">E-mail:</label>
        <input name="email" id="email" type="text">
    </div>
    <div>
        <label for="onderwerp">Onderwerp:</label>
        <select name="onderwerp" id="onderwerp">
            <option value="onderwerp1">Contact</option>
            <option value="onderwerp2">Klacht</option>
            <option value="onderwerp3">Sollicitatie</option>
        </select>
    </div>
    <div>
        <label for="bericht">Bericht:</label>
        <textarea name="bericht" id="bericht"></textarea>
    </div>
    <div>
        <label>
            <input name="voorwaarden" type="checkbox">Ik accepter de voorwaarden
        </label>
    </div>
    <div>
        <p>Ik wil me inscrijven voor de nieuwsbrief</p>
        <label>
            <input name="yes" value="yes" type="radio">Yes
        </label>
        <label>
            <input name="no" value="no" type="radio">No
        </label>
    </div>
      
    <input type="submit" value="Verzenden">
</form>



<form action="" method="get/post" >
    <div class="<?php echo isset($foutmeldingen['naam']) ? 'has-error' : '' ?>">
        <label>
            Naam: <input value="<?php echo $_POST['naam'] ?? 'Gast' ?>" name="naam" type="text">
        </label>
            <label>
                E-mail: <input value="email" name="email" type="text">
            </label>

        <?php if ($foutmeldingen['naam']): ?>
        <span class="error"><?php echo $foutmeldingen['naam'] ?></span>
        <?php endif ?>
    </div>
    <input type="submit" value="Verzenden">
</form>