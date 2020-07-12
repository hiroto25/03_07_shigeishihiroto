<!DOCTYPE html>
<html lang="ja">
<style>

    .gamenn0 {
        background-color: green;
    }
    .gamenn {
        font-size: 24px;
        text-align: center;
    }

    .gamenn1 {
        text-align: center;
    }

    .gamenn2 {
        text-align: center;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todoリストログイン画面</title>
</head>

<body>
    <form action="todo_login_act.php" method="POST">
        <fieldset class="gamenn0">
            <legend class="gamenn">ログイン画面</legend>
            <div class="gamenn1">
                ユーザー: <input type="text" name="user_id">
            </div>
            <div class="gamenn2">
                パスワード: <input type="text" name="password">
            </div>
            <div>
                <button>Login</button>
            </div>
            <a href="todo_register.php">or register</a>
        </fieldset>
    </form>

</body>

</html>