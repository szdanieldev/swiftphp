<link rel="stylesheet" href="/css/main/dashboard.css">
<div class="dashboard-hub">
    <header class="hub-header">
        <h1>Üdv, <?php echo $_SESSION["fullname"] ?>!</h1>
        <p>Válasszon kategóriát a jegyei megtekintéséhez</p>
    </header>

    <div class="hub-grid">
        <a href="/boarding" class="hub-card flight-card">
            <div class="card-icon">✈</div>
            <div class="card-content">
                <h2>Repülőjegyek</h2>
                <span class="count"><?= $data['flight_count'] ?? 0 ?> mentett út</span>
            </div>
            <div class="card-arrow">&rsaquo;</div>
        </a>

        <a href="/passes/stores" class="hub-card store-card">
            <div class="card-icon">🛍</div>
            <div class="card-content">
                <h2>Üzletek & Hűség</h2>
                <span class="count"><?= $data['store_count'] ?? 0 ?> kártya</span>
            </div>
            <div class="card-arrow">&rsaquo;</div>
        </a>

        <a href="/passes/events" class="hub-card event-card">
            <div class="card-icon">🎟</div>
            <div class="card-content">
                <h2>Események</h2>
                <span class="count"><?= $data['event_count'] ?? 0 ?> jegy</span>
            </div>
            <div class="card-arrow">&rsaquo;</div>
        </a>
    </div>

    <div class="quick-actions-shelf">
        <a href="/passes/create" class="shelf-item">
            <div class="action-icon add"></div>
            <span>Új hozzáadása</span>
        </a>
        <a href="/user/settings" class="shelf-item">
            <div class="action-icon settings"></div>
            <span>Beállítások</span>
        </a>
    </div>
</div>