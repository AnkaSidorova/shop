<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="/admin/redact/create/" class="href_style">Добавить админа</a>
                </li>
                <li class="list-group-item">
                    <a href="/admin/" class="text-danger">Вернуться назад</a>
                </li>
                <li class="list-group-item">
                    <a href="/user/logout/" class="text-danger">Выйти</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container main_block">
    <div class="row">
        <div class="col">
            <div class="mb-4 text-dark font-weight-bold text-center">СПИСОК АДМИНОВ</div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row width_overflow">
        <div class="col">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Почта</th>
                    <th>Пароль</th>
                    <th>Имя</th>
                    <th>Роль</th>
                    <th>Удалить</th>
                    <th>Редактировать</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($adminsList as $admin): ?>
                    <tr>
                        <th scope="row"><?php echo $admin['id']; ?></th>
                        <td><?php echo $admin['email']; ?></td>
                        <td><?php echo $admin['password']; ?></td>
                        <td><?php echo $admin['name']; ?></td>
                        <td><?php echo $admin['role']; ?></td>
                        <td>
                            <a href="/admin/redact/delete/<?php echo $admin['id'] ?>" class="btn btn-dark">Удалить</a>
                        </td>
                        <td>
                            <a href="/admin/redact/update/<?php echo $admin['id'] ?>" class="btn btn-dark">Редактировать</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body></html>
