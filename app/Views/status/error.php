<link rel="stylesheet" href="/css/error.css">
<div class="error-page-wrapper">
    <div class="error-badge">
        <span class="error-number"><?= $data['code'] ?></span>
    </div>

    <div class="error-message-box">
        <h1>Hoppá, hiba történt.</h1>
        <p><?= $data['message'] ?></p>

        <div class="error-actions">
            <a href="/" class="ios-link">Vissza a kezdőlapra</a>
            <div class="divider-line"></div>
            <a href="javascript:history.back()" class="ios-link">Visszatérés az előző oldalra &rsaquo;</a>
        </div>
    </div>
</div>