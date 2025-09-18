<div class="app-guests-header">
    <div class="head-setting" style="margin-bottom: 30px;">
    <h1 class="header-title">
        Wedding
        <i class="icon-tools icon-tools-settings icon-left settings-icon"></i>
    </h1>
    <a href="/tools/EventForm?id=42985234" class="settings-button" role="button">
        Settings
    </a>
    </div>

    <div class="app-guests-summary guestStats">
        <div class="guestStats__item">
            <i class="guestStats__icon icon-tools icon-tools-guest-count"></i>
            <div class="guestStats__content">
                <div class="guestStats__count">
                    <span class="guestStats__subtitle app-tools-guests-stats-total">2</span>
                    <span class="app-guests-stats-total-title">Guests</span>
                </div>
            </div>
        </div>
        <div class="guestStats__item">
            <i class="guestStats__icon icon-tools icon-tools-guest-stats"></i>
            <div class="guestStats__content">
                <div class="guestStats__count">
                    <span class="guestStats__subtitle app-tools-guests-stats-confirmed">2</span>
                    <span class="app-budget-stats-confirmed-title">Attending</span>
                </div>
                <div class="guestStats__count">
                    <span class="guestStats__text">
                        <strong class="app-tools-guests-stats-pending">0</strong>
                        <span class="app-budget-stats-pending-title">Pending</span>
                    </span>
                    <span class="guestStats__text">
                        <strong class="app-tools-guests-stats-cancelled">0</strong>
                        <span class="app-budget-stats-cancelled-title">Declined</span>
                    </span>
                </div>
            </div>
        </div>
        <div class="guestStats__item">
            <i class="guestStats__icon icon-tools icon-tools-guest-tables"></i>
            <div class="guestStats__content">
                <span class="guestStats__text">
                    <strong class="app-tools-guests-stats-seated guestStats__subtitle">2</strong>
                    <span>Seated guests</span>
                    <a class="link--primary" href="https://www.weddingwire.com/tools/Seating?idEvent=42985234">Arrange seating</a>
                </span>
            </div>
        </div>
    </div>    
</div>

<style>
    .app-guests-header {
        padding: 20px;
        background: #f7f9fc;
        border-bottom: 1px solid #e2e6ea;
    }

    .settings-icon {
        margin-left: 10px; 
        font-size: 18px; 
        color: #007bff;
    }

    .settings-button {
        background: #FFE6B3;
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        margin-left: 10px; 
    }

    .header-title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin: 0;
        display: flex;
        align-items: center;
        float: left;
    }

    .app-guests-summary {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .guestStats__item {
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 15px;
        flex: 1;
        margin: 0 10px;
        text-align: center;
        transition: transform 0.2s;
    }

    .guestStats__item:hover {
        transform: translateY(-5px);
    }

    .guestStats__icon {
        font-size: 36px;
        color: #007bff;
        margin-bottom: 10px;
    }

    .guestStats__subtitle {
        font-size: 28px;
        font-weight: bold;
        color: #dc3545;
    }

    .app-guests-stats-total-title,
    .app-budget-stats-confirmed-title,
    .app-budget-stats-pending-title,
    .app-budget-stats-cancelled-title {
        font-size: 14px;
        color: #666;
    }

    .app-guests-header {
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background: #f7f9fc;
        border-bottom: 1px solid #e2e6ea;
    }    

    .app-guests-stats-total-title, .app-budget-stats-confirmed-title, .guestStats__text span {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
    }
    a.link--primary {
        width: 100%;
        float: inline-end;
    }
</style>
