<html>
    <head>
        <title>
            Digimon Form
        </title>
    </head>
    <body>
        <form action="{{ route('form') }}">

            <h1>
                Select the level of the digimon:
            </h1>

            <select name="digimon_level" id="level">
                <option value="fresh">Fresh</option>
                <option value="intraining">In training</option>
                <option value="rookie">Rookie</option>
                <option value="armor">Armor</option>
                <option value="champion">Champion</option>
                <option value="ultimate">Ultimate</option>
                <option value="mega">Mega</option>
            </select>
            <p>
                <button type="submit">Enviar</button>
            </p>
        </form>
    </body>
</html>