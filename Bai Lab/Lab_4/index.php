<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="action.php" method="post">
        <h1>Dang ky tai khoan</h1>
        <div>
            <label for="Username">Username</label>
            <input type="text" placeholder="Username" id="Username" name="Username">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" placeholder="email" id="email" name="email">
        </div>
        <div>
            <label for="country">Quoc tich</label>
            <select name="country" id="">
                <option value="1">Viet Nam</option>
                <option value="2">Nhat Ban</option>
                <option value="3">Han Quoc</option>
                <option value="4">Trung Quoc</option>
            </select>

        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" placeholder="password" id="password" name="password">
        </div>
        <div>
            <label for="confirm">Confirm</label>
            <input type="password" placeholder="confirm password" id="confirm" name="confirm">
        </div>
        <div>
            <label for="hobbies">Hobbies</label>
            <button type="button" onclick="addElement()">Them moi</button>
            <div class="render">
                <input type="type" placeholder="hobbies" id="hobbies" name="hobbies[]">
            </div>

        </div>
        <div>
            <label for="submit">Submit</label>
            <input type="submit" placeholder="submit" id="submit" name="submit">
        </div>
    </form>
    <script>
        function addElement() {
            let render = document.querySelector(".render");
            let input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "hobbies[]");
            render.appendChild(input);
        }
    </script>
</body>

</html>