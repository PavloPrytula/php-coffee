<?php
require PARTS_DIR . 'header.php';
extract(formSessionData(SESSION_KEYS::REGISTER));
?>

    <section id="register" class="section-gap">
        <div class="container">
            <div class="row">
                <main class="form-signin w-25 m-auto mt-5 mb-5">
                    <form action="/" method="POST">
                        <input type="hidden" name="type" value="register"/>
                        <h1 class="h3 mb-3 fw-normal">Registration</h1>
                        <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your name..."
                                   value="<?= $fields['name'] ?? '' ?>"
                                   autofocus>
                            <label for="floatingInput">Name</label>
                        </div>
                        <?= formError($errors['name'] ?? null) ?>
                        <div class="form-floating mt-2">
                            <input type="text" class="form-control" id="surname" name="surname"
                                   value="<?= $fields['surname'] ?? '' ?>"
                                   placeholder="Your surname...">
                            <label for="floatingInput">Your surname</label>
                        </div>
                        <?= formError($errors['surname'] ?? null) ?>
                        <div class="form-floating mt-2">
                            <input type="email" class="form-control" id="floatingInput" name="email"
                                   value="<?= $fields['email'] ?? '' ?>"
                                   placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <?= formError($errors['email'] ?? null) ?>
                        <div class="form-floating mt-2">
                            <input type="password" class="form-control" id="floatingPassword" name="password"
                                   placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <?= formError($errors['password'] ?? null) ?>
                        <div class="form-floating mt-2">
                            <input type="password" class="form-control" id="password_confirm" name="password_confirm"
                                   placeholder="Password confirmation">
                            <label for="password_confirm">Password confirmation</label>
                        </div>
                        <?= formError($errors['password_confirm'] ?? null) ?>
                        <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Create an account</button>
                    </form>
                </main>
            </div>
        </div>
    </section>

<?php
require PARTS_DIR . 'footer.php';
?>