<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulier</title>
    <style>
        form div {
            margin: 10px 0;
        }

        .textarea-label {
            display: block;
        }

        .nieuwsbrief {
            background-color: lightgray;
            padding: 10px 10px 5px;
            display: inline-block;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Contact</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem doloremque accusantium non atque, similique ab, voluptatum molestiae odio a veniam laborum eaque. Veniam fugit molestias totam tempora, adipisci dolorem. Architecto!</p>
    
    <form method="post" novalidate>
        <div>
            <label>
                Naam: <input type="text" name="naam" id="naam">
            </label>
        </div>
        <div>
            <label>
                E-mail: <input type="email" name="email" id="email">
            </label>
        </div>
        <div>
            <label>
                Onderwerp: <select name="onderwerp" id="onderwerp">
                    <option value="contact">Contact</option>
                    <option value="klacht">Klacht</option>
                    <option value="sollicitatie">Sollicitatie</option>
                </select>
            </label>
        </div>
        <div>
            <label class="textarea-label">Bericht</label>
            <textarea name="bericht" id="bericht" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label>
                <input type="checkbox" name="accept" id="accept">
                Ik accepteer de voorwaarden
            </label>
        </div>
        <div class="nieuwsbrief">
            Ik wil me inschrijven voor de nieuwsbrief
            <div>
                <label>
                    <input type="radio" name="nieuwsbrief" value="ja" id="nieuwsbrief">
                    Ja
                </label>
                <label>
                    <input type="radio" name="nieuwsbrief" value="nee" id="nieuwsbrief">
                    Nee
                </label>
            </div>
        </div>
        <div>
            <input type="submit" value="Verzenden">
        </div>
    </form>
</div>
    
</body>
</html>