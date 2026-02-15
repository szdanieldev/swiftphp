<link rel="stylesheet" href="/css/auth.css">
<div class="auth-wrapper">
    <div class="passbook-header">
        <div class="passbook-icon-wrapper">
            <img src="/assets/images/logo/retropass.svg" alt="RetroPass Logo" class="retropass-logo-auth">
            <div class="icon-reflection"></div>
        </div>
        <h1>Regisztráció</h1>
        <p>Hozzon létre egy felhasználót</p>
    </div>

    <?php if (isset($data['error'])): ?>
        <div class="ios-alert-bubble">
            <div class="alert-content">
                <span class="alert-icon">!</span>
                <p><?= htmlspecialchars($data['error']) ?></p>
            </div>
            <div class="bubble-arrow"></div>
        </div>
    <?php endif; ?>

    <div class="ios-card">
        <form action="/auth/register" method="POST">

            <div class="input-group">
                <label for="fullname">Név</label>
                <div class="input-field">
                    <input
                        type="text"
                        id="fullname"
                        name="fullname"
                        placeholder="Minta János"
                        autocomplete="off"
                        required
                        autofocus>
                </div>
            </div>

            <div class="input-divider"></div>

            <div class="input-group">
                <label for="username">Felhasználónév</label>
                <div class="input-field">
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="felhasználónév"
                        autocomplete="off"
                        required>
                </div>
            </div>

            <div class="input-divider"></div>

            <div class="input-group">
                <label for="email">E-mail</label>
                <div class="input-field">
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="pelda@domain.hu"
                        autocomplete="off"
                        required>
                </div>
            </div>

            <div class="input-divider"></div>

            <div class="input-group">
                <label for="password">Jelszó</label>
                <div class="input-field">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="••••••••"
                        required>
                </div>
            </div>

            <div class="button-area">
                <button type="submit" class="ios-blue-button register-btn">Regisztráció</button>
            </div>

        </form>
    </div>

    <div class="auth-footer">
        <p>Már van fiókja? <a href="/auth/login">Bejelentkezés</a></p>
    </div>
</div>