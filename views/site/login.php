<div class="main_block">
    <h2> Авторизация</h2>

    <h3><?= app()->auth->user()->name ?? ''; ?></h3>
    <?php
    if (!app()->auth::check()):
        ?>
        <form class="auth_form" method="post">
            <label>Логин <input class="auth_label " type="text" name="login"></label>
            <label>Пароль <input class="auth_label label-password" type="password" name="password"></label>
            <button class="auth_btn">Войти</button>
        </form>
    <?php endif ?>


</div>


