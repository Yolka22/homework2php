<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="styledtext.php" method="GET">
    <div>
        <div>text</div>
        <textarea name="text"></textarea>
    </div>
    <div>
        <div>Font Family</div>
        <select name="font-family">
            <option value="Arial">Arial</option>
        </select>
    </div>
    <div>
        <div>Font size</div>
        <input type="number" name="font-size">
    </div>
    <div>
        <label for="bold">bold</label>
        <input type="checkbox" name="bold">
        <label for="italic">italic</label>
        <input type="checkbox" name="italic">
        <label for="underline">underline</label>
        <input type="checkbox" name="underline">
    </div>
    <div>
        <input type="color" name="text-color">
    </div>
    <input type="submit" value="Отправить">
</form>

</body>

</html>