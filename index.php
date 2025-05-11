<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="styelsheet" href="css/main.css">
        <title>My Document</title>
    </head>
    <body>
        <main>
            <form action="include/formhandler.php" method="POST">
                <br>
                <label for="firstname">firstname</label>
                <input id="firstname" type="text" name="firstname" placeholder="firstname.....">
                <br>
                <label for="lastname">lastname</label>
                <input id="lastname" type="text" name="lastname" placeholder="lastname.....">
                <br>
                <label for="favoritepet">favorite pet</label>
                <select id="favoritepet" name="favoritepet">
                    <option value="none">none</option>
                    <option value="dog">dog</option>
                    <option value="cat">cat</option>
                    <option value="bird">bird</option>
                </select>
                <button type="submit">sumbit</button>
            </form>
        </main> 
    </body>
</html>