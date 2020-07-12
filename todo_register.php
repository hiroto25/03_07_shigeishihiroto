<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スイカ予約</title>
</head>

<body>
    <form action="todo_register_act.php" method="POST">
        <fieldset>
            <legend>スイカ予約</legend>
            <div>
                ユーザー: <input type="text" name="user_id">
            </div>
            <div>
                パスワード: <input type="text" name="password">
            </div>
            <div>
                <button>送信</button>
            </div>
            <a href="todo_login.php">or login</a>
        </fieldset>
    </form>

</body>

</html>