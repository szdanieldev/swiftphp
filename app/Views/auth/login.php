<?php

use App\Core\Localization;

$locale = new Localization('en');
?>

<h1><?= $locale->get('login_title', 'Login') ?></h1>
<p><?= $locale->get('welcome_message') ?></p>

<div class="auth-wrapper">
    <div class="passbook-header">
        <div class="passbook-icon-wrapper">
            <img src="/assets/images/logo/retropass.svg" alt="RetroPass Logo" class="retropass-logo-auth">
            <div class="icon-reflection"></div>
        </div>
        <h1>Belépés</h1>
        <p>Jelentkezzen be a folytatáshoz</p>
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
        <form action="/auth/login" method="POST">
            <div class="input-group">
                <label for="username">Felhasználó</label>
                <div class="input-field">
                    <input
                        type="text"
                        id="username"
                        name="username"
                        autocomplete="off"
                        placeholder="felhasználónév"
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
                        autocomplete="off"
                        placeholder="••••••••"
                        required>
                </div>
            </div>

            <div class="button-area">
                <button type="submit" class="ios-blue-button">Bejelentkezés</button>
            </div>
        </form>
    </div>

    <div class="auth-footer">
        <p>Nincs még fiókja? <a href="/auth/register">Regisztráció</a></p>
    </div>
</div>