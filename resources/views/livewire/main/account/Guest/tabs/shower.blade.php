<div class="app-guests-header">
    <a href="/tools/EventForm?id=42985238" class="tools-title-count guestsTitle__action mt10 mr10" role="button">
        <i class="icon-tools icon-tools-settings icon-left"></i> Settings
    </a>
    <h1 class="tools-title guestsTitle">Shower</h1>
    <div class="pure-g mb20 app-guests-summary guestStats">
        <div class="guestStats__item pure-u-1-2">
            <i class="guestStats__icon icon-tools icon-tools-guest-count"></i>
            <div class="guestStats__content">
                <div class="guestStats__count">
                    <span class="guestStats__subtitle app-tools-guests-stats-total">2</span>
                    <span class="app-guests-stats-total-title">Guests</span>
                </div>
            </div>
        </div>
        <div class="guestStats__item pure-u-1-2">
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
    </div>
    <div class="pure-g ">
        <div class="pure-u-1-2">
            <div class="pure-u app-toogle-layer pointer relative inline-block" data-selector="app-dropdown-request-contact">
                <a class="btnOutline btnOutline--grey" role="button"><i class="icon icon-mail-letter mr10"></i>Message guests <i class="icon icon-arrow-down"></i></a>
                <div class="guestsDropdown app-dropdown-request-contact dnone">
                    <a href="/tools/InvitationsAdd?idEvent=42985238" class="icon icon-mail-letter icon-left">Online invitation</a>
                    <a href="/tools/GuestsRequestConfirm?idEvent=42985238" class="icon icon-mail-letter icon-left">Request RSVP</a>
                </div>
            </div>
        </div>
        <div class="pure-u-1-2 text-right">
            <div class="pure-u ml10">
                <div class="app-toogle-layer relative inline-block" data-selector="app-dropdown-export">
                    <a class="btnOutline btnOutline--grey" role="button"><i class="icon-tools icon-tools-export mr10"></i>Export</a>
                    <div class="guestsDropdown guestsDropdown--right app-dropdown-export dnone">
                        <a href="/tools/GuestsCSV?idEvent=42985238" class="icon-tools icon-tools-download-pdf">Download</a>
                        <a href="/tools/GuestsPrint?tab=1&amp;idEvent=42985238" class="app-tools-guest-print icon-tools icon-tools-print" target="_blank">Print</a>
                    </div>
                </div>
            </div>
            <div class="pure-u ml10">
                <a class="btnOutline btnOutline--grey" href="/tools/Stats?idEvent=42985238">
                    <i class="icon icon-stats icon-left"></i> View summary
                </a>
            </div>
        </div>
    </div>
</div>
<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f9f9f9;
    color: #333;
    margin: 0;
    padding: 20px;
}

.app-guests-header {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.tools-title-count {
    font-size: 16px;
    color: #007bff;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
}

.tools-title {
    font-size: 28px;
    margin: 10px 0;
}

.app-guests-summary {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.guestStats__item {
    display: flex;
    align-items: center;
    padding: 10px;
    flex-basis: 48%;
    background-color: #f0f8ff;
    border-radius: 5px;
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
}

.guestStats__icon {
    font-size: 24px;
    margin-right: 10px;
}

.guestStats__content {
    flex-grow: 1;
}

.guestStats__count {
    font-size: 18px;
}

.guestStats__subtitle {
    font-weight: bold;
    font-size: 20px;
}

.app-tools-guests-stats-total,
.app-tools-guests-stats-confirmed,
.app-tools-guests-stats-pending,
.app-tools-guests-stats-cancelled {
    color: #007bff;
}

.btnOutline {
    display: inline-flex;
    align-items: center;
    padding: 10px 15px;
    border: 1px solid #007bff;
    border-radius: 5px;
    background-color: transparent;
    color: #007bff;
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s;
}

.btnOutline:hover {
    background-color: #007bff;
    color: white;
}

.guestsDropdown {
    position: absolute;
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    display: none;
}

.guestsDropdown a {
    display: block;
    padding: 10px;
    color: #007bff;
    text-decoration: none;
}

.guestsDropdown a:hover {
    background-color: #f0f8ff;
}

.pointer {
    cursor: pointer;
}

.relative {
    position: relative;
}

.inline-block {
    display: inline-block;
}

.dnone {
    display: none;
}

/* Show dropdown on hover */
.app-toogle-layer:hover .guestsDropdown {
    display: block;
}
</style>


<div class="guestsRows app-tools-guest-container">

    <nav class="guestsRows__nav">
        <span class="guestsRows__navLink active app-tools-guest-change-tab" data-tab="1">Groups</span>
        <span class="guestsRows__navLink  app-tools-guest-change-tab" data-tab="4">Attendance</span>
        <span class="guestsRows__navLink  app-tools-guest-change-tab" data-tab="5">Lists</span>
    </nav>

    <div class="guestsRows__actions">
        <a role="button" style="display:none;" class="app-layer-add-guest app-tools-guest-add btnFlat btnFlat--primary mr10" data-remote="/tools/TablesGuestsAdd?idEvent=42985238">
            <i class="svgIcon svgIcon__plusCircle ">
                    <svg viewBox="0 0 32 32" width="16" height="16">
                        <use xlink:href="#svg-_common-plusCircle"></use>
                    </svg>
                </i> Guest </a>

        <a role="button" class="app-layer-assign-event btnFlat btnFlat--primary mr10" data-remote="/tools/GuestsAssignEvent?idEvent=42985238">
            <i class="svgIcon svgIcon__plusCircle ">
                    <svg viewBox="0 0 32 32" width="16" height="16">
                        <use xlink:href="#svg-_common-plusCircle"></use>
                    </svg>
                </i> Guest </a>

        <a role="button" data-remote="/tools/GroupsAdd?section=group" class="app-layer-add-modal btnOutline btnOutline--red mr10 app-tools-section-add " data-tab="1">
            <i class="svgIcon svgIcon__plusCircle ">
                    <svg viewBox="0 0 32 32" width="16" height="16">
                        <use xlink:href="#svg-_common-plusCircle"></use>
                    </svg>
                </i> Group </a>


        <div class="guestsRows__search">
            <i class="icon-tools icon-tools-search icon-left"></i>
            <span class="reset-input app-input-search-guests-reset" style="display: none;">×</span>
            <input type="text" class=" guests-rows-header-search app-input-search-guests" placeholder="Search guests..." value="" name="Query">
        </div>
    </div>

    <form name="frmGuests" id="frmPaged" action="/tools/Guests" method="post">
        <input type="hidden" name="isSimplifyListOverview" value="true">
        <input type="hidden" class="app-form-paged-tab" name="tab" id="tab" value="1">
        <input type="hidden" class="app-form-paged-viewGrid" name="viewGrid" id="viewGrid" value="1">
        <input type="hidden" class="app-form-paged-show" name="show" id="show" value="">
        <input type="hidden" class="app-form-paged-idContact" name="idContact" id="idContact" value="">
        <input type="hidden" class="app-form-paged-idEvent" name="idEvent" id="idEvent" value="42985238">
        <input type="hidden" class="app-form-paged-subIdEvent" name="subIdEvent" id="subIdEvent" value="">
        <div class="relative">
            <div class="app-dropdown-filters"></div>
            <div class="guests-rows-content guests-rows-content-full">
                <ul id="app-guest-mark-nav" class="app-mark-as app-mark-multi guests-mark-nav guests-mark-nav-white disabled">
                    <li>
                        <div class="input-group-line">
                            <label class="guests-rows-select-all">
                                <input type="checkbox" class="app-guest-select-all app-not-icheck">
                                <span></span>
                                <span class="label-mark-all app-guest-mark-hide-label">Select all</span>
                            </label>
                        </div>
                    </li>
                    <li class="app-guest-multi-open guests-mark-nav-action" data-action="group">
                        <i class="icon-tools icon-tools-mark-switch"></i>Group </li>
                    <li class="app-guest-multi-open guests-mark-nav-action" data-action="confirmacion">
                        <i class="icon-tools icon-tools-mark-confirm"></i>Attendance </li>
                    <li class="app-guest-multi-open guests-mark-nav-action" data-action="lists">
                        <i class="icon-tools icon-tools-mark-list"></i>Lists </li>
                    <li class="app-guest-multi-delete guests-mark-nav-action">
                        <i class="icon-tools icon-tools-mark-remove"></i>Remove </li>
                </ul>

                <div class="guests-rows-group-container">
                    <table class="app-guest-row-group guests-rows-group guests-rows-group-white">
                        <thead>
                            <tr class="guests-rows-head app-guests-group-title">
                                <td class="guests-rows-td guests-rows-noBorder" width="3%"></td>
                                <td class="guests-rows-td guests-rows-nameBig" width="24%">
                                    Couple<span class="guests-rows-count app-guests-group-items-count">2</span>
                                </td>
                                <td class="guests-rows-td guestsRowsTitle" width="15%">Attendance</td>
                                <td class="guests-rows-td guestsRowsTitle" width="18%">List</td>

                                <td class="guests-rows-td guestsRowsTitle" width="5%"></td>


                                <td class="guests-rows-td guestsRowsLink" align="right" width="10%">
                                    <span class="app-toogle-layer pointer" data-selector="app-dropdown-header1">
                                                    Edit                                            </span>
                                    <div class="guestsDropdown guestsDropdown--right app-dropdown-header1" style="display:none;">
                                        <a class="app-layer-add-modal" role="button" data-selector="app-dropdown-header1" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=1">
                                            <i class="icon-tools icon-tools-edit icon-left"></i> Rename </a>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="app-contact-row guests-rows-item" data-contact-id="225656474" data-event-id="42985238" data-parent-contact-id="225656474" data-name="developer ">
                                <td class="guests-rows-td guests-rows-noBorder" width="3%">
                                    <div class="guests-rows-td-checkbox input-group-line inline">
                                        <label class="app-guest-check-label">
                                            <input type="checkbox" class="app-guest-check app-not-icheck" data-isnovios="1">
                                            <span></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="guests-rows-td guests-rows-name pointer app-contact-edit" data-idcontact="225656474">
                                    <span class="icon-tools icon-tools-avatar-guest-adult"></span> <span class="app-contact-grid-name pointer pl5">
            developer         </span>
                                </td>
                                <td class="guests-rows-td">
                                    <div class="app-input-select input-select app-guest-update select-attendance guests-rows-select" data-eager="true" data-type="confirmacion" data-event="42985238">
                                        <span class="app-input-label input-select-label input-filled"><i class="icon-tools icon-tools-checkbox mr10"></i>Attending</span>
                                        <span class="app-input-no-value-label dnone">Select</span>
                                        <div class="app-input-dropdown input-select-dropdown">
                                            <ul>
                                                <li class="input-select-dropdown__title app-input-select-label ">
                                                    <i class="icon-tools icon-tools-checkbox mr10"></i>Attending </li>

                                                <li data-value="0">
                                                    <i class="icon-tools icon-tools-clock-orange mr10"></i>Pending </li>
                                                <li data-value="1" data-default="" style="display: none;">
                                                    <i class="icon-tools icon-tools-checkbox mr10"></i>Attending </li>
                                                <li data-value="2" data-confirm="If you change the attendance to &quot;Declined,&quot; you will lose the associated Seating Chart data for the selected guest. ">
                                                    <i class="icon-tools icon-tools-times-red mr10"></i>Canceled </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="guests-rows-td">
                                    <span class="app-guest-canceled" style="display: none">Canceled</span>
                                    <div class="app-input-select input-select app-guest-update guests-rows-select" data-eager="true" data-type="lists">
                                        <span class="app-input-label input-select-label ">Select</span>
                                        <span class="app-input-no-value-label dnone">Select</span>
                                        <div class="app-input-dropdown input-select-dropdown">
                                            <ul>

                                                <li data-value="A-List">
                                                    A-List </li>
                                                <li data-value="B-List">
                                                    B-List </li>
                                                <li data-value="C-List">
                                                    C-List </li>
                                                <li class="app-layer-add-modal guests-rows-select-add" data-remote="/tools/ListsAdd?assignToIdGuest=225656474&amp;idEvent=42985238" data-action="">
                                                    <i class="icon-tools icon-tools-plus-circle-medium icon-left"></i>Create new list </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="guests-rows-td">
                                </td>

                                <td class="guests-rows-td guestsRowsMore" align="right">

                                    <div class="app-toogle-layer pointer relative inline-block" data-selector="app-dropdown-225656474">···
                                        <div class="guestsDropdown guestsDropdown--right app-dropdown-225656474 dnone">
                                            <a role="button" class="app-contact-edit" data-idcontact="225656474">
                                                <i class="icon-tools icon-tools-edit icon-left"></i> Edit </a>
                                            <a role="button" class="app-layer-remove-guest" data-remote="/tools/GuestsDeleteModal?idGuest=225656474&amp;idEvent=42985238">
                                                <i class="icon-tools icon-tools-trash icon-left"></i> Remove </a>

                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr class="app-contact-row guests-rows-item" data-contact-id="225656476" data-event-id="42985238" data-parent-contact-id="225656476" data-name="Partner ">
                                <td class="guests-rows-td guests-rows-noBorder" width="3%">
                                    <div class="guests-rows-td-checkbox input-group-line inline">
                                        <label class="app-guest-check-label">
                                            <input type="checkbox" class="app-guest-check app-not-icheck" data-isnovios="1">
                                            <span></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="guests-rows-td guests-rows-name pointer app-contact-edit" data-idcontact="225656476">
                                    <span class="icon-tools icon-tools-avatar-guest-adult"></span> <span class="app-contact-grid-name pointer pl5">
            Partner         </span>
                                </td>
                                <td class="guests-rows-td">
                                    <div class="app-input-select input-select app-guest-update select-attendance guests-rows-select" data-eager="true" data-type="confirmacion" data-event="42985238">
                                        <span class="app-input-label input-select-label input-filled"><i class="icon-tools icon-tools-checkbox mr10"></i>Attending</span>
                                        <span class="app-input-no-value-label dnone">Select</span>
                                        <div class="app-input-dropdown input-select-dropdown">
                                            <ul>
                                                <li class="input-select-dropdown__title app-input-select-label ">
                                                    <i class="icon-tools icon-tools-checkbox mr10"></i>Attending </li>

                                                <li data-value="0">
                                                    <i class="icon-tools icon-tools-clock-orange mr10"></i>Pending </li>
                                                <li data-value="1" data-default="" style="display: none;">
                                                    <i class="icon-tools icon-tools-checkbox mr10"></i>Attending </li>
                                                <li data-value="2" data-confirm="If you change the attendance to &quot;Declined,&quot; you will lose the associated Seating Chart data for the selected guest. ">
                                                    <i class="icon-tools icon-tools-times-red mr10"></i>Canceled </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="guests-rows-td">
                                    <span class="app-guest-canceled" style="display: none">Canceled</span>
                                    <div class="app-input-select input-select app-guest-update guests-rows-select" data-eager="true" data-type="lists">
                                        <span class="app-input-label input-select-label ">Select</span>
                                        <span class="app-input-no-value-label dnone">Select</span>
                                        <div class="app-input-dropdown input-select-dropdown">
                                            <ul>

                                                <li data-value="A-List">
                                                    A-List </li>
                                                <li data-value="B-List">
                                                    B-List </li>
                                                <li data-value="C-List">
                                                    C-List </li>
                                                <li class="app-layer-add-modal guests-rows-select-add" data-remote="/tools/ListsAdd?assignToIdGuest=225656476&amp;idEvent=42985238" data-action="">
                                                    <i class="icon-tools icon-tools-plus-circle-medium icon-left"></i>Create new list </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="guests-rows-td">
                                </td>

                                <td class="guests-rows-td guestsRowsMore" align="right">

                                    <div class="app-toogle-layer pointer relative inline-block" data-selector="app-dropdown-225656476">···
                                        <div class="guestsDropdown guestsDropdown--right app-dropdown-225656476 dnone">
                                            <a role="button" class="app-contact-edit" data-idcontact="225656476">
                                                <i class="icon-tools icon-tools-edit icon-left"></i> Edit </a>
                                            <a role="button" class="app-layer-remove-guest" data-remote="/tools/GuestsDeleteModal?idGuest=225656476&amp;idEvent=42985238">
                                                <i class="icon-tools icon-tools-trash icon-left"></i> Remove </a>

                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr class="app-row-no-items" style="display: none;">
                                <td width="3%"></td>
                                <td class="guests-rows-empty" colspan="7">
                                    <span>No guests</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="app-guest-row-group guests-rows-group guests-rows-group-white">
                        <thead>
                            <tr class="guests-rows-head app-guests-group-title">
                                <td class="guests-rows-td guests-rows-noBorder" width="3%"></td>
                                <td class="guests-rows-td guests-rows-nameBig" width="24%">
                                    Family friends of my partner<span class="guests-rows-count app-guests-group-items-count">0</span>
                                </td>
                                <td class="guests-rows-td guestsRowsTitle" width="15%">Attendance</td>
                                <td class="guests-rows-td guestsRowsTitle" width="18%">List</td>

                                <td class="guests-rows-td guestsRowsTitle" width="5%"></td>


                                <td class="guests-rows-td guestsRowsLink" align="right" width="10%">
                                    <span class="app-toogle-layer pointer" data-selector="app-dropdown-header10">
                                                    Edit                                            </span>
                                    <div class="guestsDropdown guestsDropdown--right app-dropdown-header10" style="display:none;">
                                        <a class="app-layer-add-modal" role="button" data-selector="app-dropdown-header10" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=10">
                                            <i class="icon-tools icon-tools-edit icon-left"></i> Rename </a>
                                        <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header10" data-id="10">
                                            <i class="icon-tools icon-tools-trash icon-left"></i> Remove
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="app-row-no-items">
                                <td width="3%"></td>
                                <td class="guests-rows-empty" colspan="7">
                                    <span>No guests</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="app-guest-row-group guests-rows-group guests-rows-group-white">
                        <thead>
                            <tr class="guests-rows-head app-guests-group-title">
                                <td class="guests-rows-td guests-rows-noBorder" width="3%"></td>
                                <td class="guests-rows-td guests-rows-nameBig" width="24%">
                                    Family friends of developer<span class="guests-rows-count app-guests-group-items-count">0</span>
                                </td>
                                <td class="guests-rows-td guestsRowsTitle" width="15%">Attendance</td>
                                <td class="guests-rows-td guestsRowsTitle" width="18%">List</td>

                                <td class="guests-rows-td guestsRowsTitle" width="5%"></td>


                                <td class="guests-rows-td guestsRowsLink" align="right" width="10%">
                                    <span class="app-toogle-layer pointer" data-selector="app-dropdown-header9">
                                                    Edit                                            </span>
                                    <div class="guestsDropdown guestsDropdown--right app-dropdown-header9" style="display:none;">
                                        <a class="app-layer-add-modal" role="button" data-selector="app-dropdown-header9" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=9">
                                            <i class="icon-tools icon-tools-edit icon-left"></i> Rename </a>
                                        <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header9" data-id="9">
                                            <i class="icon-tools icon-tools-trash icon-left"></i> Remove
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="app-row-no-items">
                                <td width="3%"></td>
                                <td class="guests-rows-empty" colspan="7">
                                    <span>No guests</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="app-guest-row-group guests-rows-group guests-rows-group-white">
                        <thead>
                            <tr class="guests-rows-head app-guests-group-title">
                                <td class="guests-rows-td guests-rows-noBorder" width="3%"></td>
                                <td class="guests-rows-td guests-rows-nameBig" width="24%">
                                    test's coworkers<span class="guests-rows-count app-guests-group-items-count">0</span>
                                </td>
                                <td class="guests-rows-td guestsRowsTitle" width="15%">Attendance</td>
                                <td class="guests-rows-td guestsRowsTitle" width="18%">List</td>

                                <td class="guests-rows-td guestsRowsTitle" width="5%"></td>


                                <td class="guests-rows-td guestsRowsLink" align="right" width="10%">
                                    <span class="app-toogle-layer pointer" data-selector="app-dropdown-header8">
                                                    Edit                                            </span>
                                    <div class="guestsDropdown guestsDropdown--right app-dropdown-header8" style="display:none;">
                                        <a class="app-layer-add-modal" role="button" data-selector="app-dropdown-header8" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=8">
                                            <i class="icon-tools icon-tools-edit icon-left"></i> Rename </a>
                                        <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header8" data-id="8">
                                            <i class="icon-tools icon-tools-trash icon-left"></i> Remove
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="app-row-no-items">
                                <td width="3%"></td>
                                <td class="guests-rows-empty" colspan="7">
                                    <span>No guests</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="app-guest-row-group guests-rows-group guests-rows-group-white">
                        <thead>
                            <tr class="guests-rows-head app-guests-group-title">
                                <td class="guests-rows-td guests-rows-noBorder" width="3%"></td>
                                <td class="guests-rows-td guests-rows-nameBig" width="24%">
                                    developer's coworkers<span class="guests-rows-count app-guests-group-items-count">0</span>
                                </td>
                                <td class="guests-rows-td guestsRowsTitle" width="15%">Attendance</td>
                                <td class="guests-rows-td guestsRowsTitle" width="18%">List</td>

                                <td class="guests-rows-td guestsRowsTitle" width="5%"></td>


                                <td class="guests-rows-td guestsRowsLink" align="right" width="10%">
                                    <span class="app-toogle-layer pointer" data-selector="app-dropdown-header7">
                                                    Edit                                            </span>
                                    <div class="guestsDropdown guestsDropdown--right app-dropdown-header7" style="display:none;">
                                        <a class="app-layer-add-modal" role="button" data-selector="app-dropdown-header7" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=7">
                                            <i class="icon-tools icon-tools-edit icon-left"></i> Rename </a>
                                        <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header7" data-id="7">
                                            <i class="icon-tools icon-tools-trash icon-left"></i> Remove
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="app-row-no-items">
                                <td width="3%"></td>
                                <td class="guests-rows-empty" colspan="7">
                                    <span>No guests</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="app-guest-row-group guests-rows-group guests-rows-group-white">
                        <thead>
                            <tr class="guests-rows-head app-guests-group-title">
                                <td class="guests-rows-td guests-rows-noBorder" width="3%"></td>
                                <td class="guests-rows-td guests-rows-nameBig" width="24%">
                                    Mutual friends<span class="guests-rows-count app-guests-group-items-count">0</span>
                                </td>
                                <td class="guests-rows-td guestsRowsTitle" width="15%">Attendance</td>
                                <td class="guests-rows-td guestsRowsTitle" width="18%">List</td>

                                <td class="guests-rows-td guestsRowsTitle" width="5%"></td>


                                <td class="guests-rows-td guestsRowsLink" align="right" width="10%">
                                    <span class="app-toogle-layer pointer" data-selector="app-dropdown-header6">
                                                    Edit                                            </span>
                                    <div class="guestsDropdown guestsDropdown--right app-dropdown-header6" style="display:none;">
                                        <a class="app-layer-add-modal" role="button" data-selector="app-dropdown-header6" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=6">
                                            <i class="icon-tools icon-tools-edit icon-left"></i> Rename </a>
                                        <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header6" data-id="6">
                                            <i class="icon-tools icon-tools-trash icon-left"></i> Remove
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="app-row-no-items">
                                <td width="3%"></td>
                                <td class="guests-rows-empty" colspan="7">
                                    <span>No guests</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="app-guest-row-group guests-rows-group guests-rows-group-white">
                        <thead>
                            <tr class="guests-rows-head app-guests-group-title">
                                <td class="guests-rows-td guests-rows-noBorder" width="3%"></td>
                                <td class="guests-rows-td guests-rows-nameBig" width="24%">
                                    test's friends<span class="guests-rows-count app-guests-group-items-count">0</span>
                                </td>
                                <td class="guests-rows-td guestsRowsTitle" width="15%">Attendance</td>
                                <td class="guests-rows-td guestsRowsTitle" width="18%">List</td>

                                <td class="guests-rows-td guestsRowsTitle" width="5%"></td>


                                <td class="guests-rows-td guestsRowsLink" align="right" width="10%">
                                    <span class="app-toogle-layer pointer" data-selector="app-dropdown-header5">
                                                    Edit                                            </span>
                                    <div class="guestsDropdown guestsDropdown--right app-dropdown-header5" style="display:none;">
                                        <a class="app-layer-add-modal" role="button" data-selector="app-dropdown-header5" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=5">
                                            <i class="icon-tools icon-tools-edit icon-left"></i> Rename </a>
                                        <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header5" data-id="5">
                                            <i class="icon-tools icon-tools-trash icon-left"></i> Remove
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="app-row-no-items">
                                <td width="3%"></td>
                                <td class="guests-rows-empty" colspan="7">
                                    <span>No guests</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="app-guest-row-group guests-rows-group guests-rows-group-white">
                        <thead>
                            <tr class="guests-rows-head app-guests-group-title">
                                <td class="guests-rows-td guests-rows-noBorder" width="3%"></td>
                                <td class="guests-rows-td guests-rows-nameBig" width="24%">
                                    developer's friends<span class="guests-rows-count app-guests-group-items-count">0</span>
                                </td>
                                <td class="guests-rows-td guestsRowsTitle" width="15%">Attendance</td>
                                <td class="guests-rows-td guestsRowsTitle" width="18%">List</td>

                                <td class="guests-rows-td guestsRowsTitle" width="5%"></td>


                                <td class="guests-rows-td guestsRowsLink" align="right" width="10%">
                                    <span class="app-toogle-layer pointer" data-selector="app-dropdown-header4">
                                                    Edit                                            </span>
                                    <div class="guestsDropdown guestsDropdown--right app-dropdown-header4" style="display:none;">
                                        <a class="app-layer-add-modal" role="button" data-selector="app-dropdown-header4" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=4">
                                            <i class="icon-tools icon-tools-edit icon-left"></i> Rename </a>
                                        <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header4" data-id="4">
                                            <i class="icon-tools icon-tools-trash icon-left"></i> Remove
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="app-row-no-items">
                                <td width="3%"></td>
                                <td class="guests-rows-empty" colspan="7">
                                    <span>No guests</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="app-guest-row-group guests-rows-group guests-rows-group-white">
                        <thead>
                            <tr class="guests-rows-head app-guests-group-title">
                                <td class="guests-rows-td guests-rows-noBorder" width="3%"></td>
                                <td class="guests-rows-td guests-rows-nameBig" width="24%">
                                    test's family<span class="guests-rows-count app-guests-group-items-count">0</span>
                                </td>
                                <td class="guests-rows-td guestsRowsTitle" width="15%">Attendance</td>
                                <td class="guests-rows-td guestsRowsTitle" width="18%">List</td>

                                <td class="guests-rows-td guestsRowsTitle" width="5%"></td>


                                <td class="guests-rows-td guestsRowsLink" align="right" width="10%">
                                    <span class="app-toogle-layer pointer" data-selector="app-dropdown-header3">
                                                    Edit                                            </span>
                                    <div class="guestsDropdown guestsDropdown--right app-dropdown-header3" style="display:none;">
                                        <a class="app-layer-add-modal" role="button" data-selector="app-dropdown-header3" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=3">
                                            <i class="icon-tools icon-tools-edit icon-left"></i> Rename </a>
                                        <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header3" data-id="3">
                                            <i class="icon-tools icon-tools-trash icon-left"></i> Remove
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="app-row-no-items">
                                <td width="3%"></td>
                                <td class="guests-rows-empty" colspan="7">
                                    <span>No guests</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="app-guest-row-group guests-rows-group guests-rows-group-white">
                        <thead>
                            <tr class="guests-rows-head app-guests-group-title">
                                <td class="guests-rows-td guests-rows-noBorder" width="3%"></td>
                                <td class="guests-rows-td guests-rows-nameBig" width="24%">
                                    developer's family<span class="guests-rows-count app-guests-group-items-count">0</span>
                                </td>
                                <td class="guests-rows-td guestsRowsTitle" width="15%">Attendance</td>
                                <td class="guests-rows-td guestsRowsTitle" width="18%">List</td>

                                <td class="guests-rows-td guestsRowsTitle" width="5%"></td>


                                <td class="guests-rows-td guestsRowsLink" align="right" width="10%">
                                    <span class="app-toogle-layer pointer" data-selector="app-dropdown-header2">
                                                    Edit                                            </span>
                                    <div class="guestsDropdown guestsDropdown--right app-dropdown-header2" style="display:none;">
                                        <a class="app-layer-add-modal" role="button" data-selector="app-dropdown-header2" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=2">
                                            <i class="icon-tools icon-tools-edit icon-left"></i> Rename </a>
                                        <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header2" data-id="2">
                                            <i class="icon-tools icon-tools-trash icon-left"></i> Remove
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="app-row-no-items">
                                <td width="3%"></td>
                                <td class="guests-rows-empty" colspan="7">
                                    <span>No guests</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>

<style>
    .app-guests-header {
        padding: 20px;
        background: #f7f9fc;
        border-bottom: 2px solid #dfe3e8;
    }
    
    .tools-title-count {
        color: #4b9cd3;
        font-size: 16px;
        text-decoration: none;
        margin-right: 15px;
    }
    
    .tools-title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }
    
    .guestStats {
        display: flex;
        gap: 20px;
        margin: 20px 0;
    }
    
    .guestStats__item {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .guestStats__icon {
        font-size: 24px;
        color: #4b9cd3;
    }
    
    .guestStats__content {
        color: #666;
    }
    
    .actions {
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }
    
    .btn {
        display: inline-flex;
        align-items: center;
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        text-decoration: none;
    }
    
    .btn-outline {
        color: #4b9cd3;
        border: 1px solid #4b9cd3;
        background: none;
    }
    
    .btn-primary {
        background-color: #4b9cd3;
        color: #fff;
        border: none;
    }
    
    .btn-secondary {
        background-color: #ff6b6b;
        color: #fff;
        border: none;
    }
    
    .guestsRows__nav {
        display: flex;
        gap: 20px;
        padding: 10px;
        border-bottom: 2px solid #dfe3e8;
    }
    
    .guestsRows__navLink {
        cursor: pointer;
        padding: 5px 10px;
        color: #666;
        font-size: 16px;
    }
    
    .guestsRows__navLink.active {
        color: #4b9cd3;
        border-bottom: 2px solid #4b9cd3;
    }
    
    .guestsRows__actions {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
    }
    
    .guestsRows__search input {
        padding: 8px;
        border: 1px solid #dfe3e8;
        border-radius: 5px;
        font-size: 14px;
        width: 200px;
    }
</style>

<style>
    .form-section {
        margin-top: 20px;
    }
    
    .filter-container {
        margin-bottom: 20px;
    }
    
    .guest-actions {
        list-style: none;
        display: flex;
        gap: 15px;
        padding: 0;
        margin-bottom: 20px;
    }
    
    .guest-actions li {
        cursor: pointer;
        color: #007bff;
    }
    
    .guest-actions li:hover {
        text-decoration: underline;
    }
    
    .select-all {
        margin-right: 8px;
    }
    
    .guest-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }
    
    .guest-table th, .guest-table td {
        border-bottom: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }
    
    .guest-table th {
        background-color: #f9f9f9;
        font-weight: bold;
    }
    
    .attendance-select, .list-select {
        width: 100%;
        padding: 5px;
        font-size: 1rem;
    }
    
    .edit-btn {
        padding: 5px 10px;
        color: #007bff;
        background: none;
        border: none;
        cursor: pointer;
        font-size: 1rem;
    }
    
    .edit-btn:hover {
        text-decoration: underline;
    }
</style>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f4f4f4;
    }
    
    .guest-lists {
        max-width: 800px;
        margin: 0 auto;
    }
    
    .guest-list {
        width: 100%;
        border-collapse: collapse;
    }
    
    .guest-list-header {
        background-color: #FFE6B3;
        color: #000;
        text-align: left;
    }
    
    .guest-list-header td {
        padding: 10px;
    }
    
    .guest-list tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    
    .guest-list tbody td {
        padding: 10px;
        border-top: 1px solid #ddd;
    }
    
    .guest-count {
        font-weight: bold;
        margin-left: 10px;
    }
    
    .edit-toggle {
        cursor: pointer;
        color: #fff;
        text-decoration: underline;
    }
    
    .dropdown-menu {
        position: absolute;
        background-color: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        display: none;
        z-index: 1000;
        padding: 5px;
        border-radius: 5px;
    }
    
    .dropdown-menu a {
        display: block;
        padding: 5px 10px;
        text-decoration: none;
        color: #007bff;
    }
    
    .dropdown-menu a:hover {
        background-color: #f0f0f0;
    }
    
    .dropdown-header {
        position: relative;
    }
    
    .dropdown-header:hover .dropdown-menu {
        display: block;
    }
</style>



<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f9f9f9;
    }
    
    .guest-tables {
        max-width: 800px;
        margin: 0 auto;
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    
    th, td {
        padding: 10px;
        text-align: left;
    }
    
    .guests-rows-group-white {
        background-color: white;
        border: 1px solid #ccc;
    }
    
    .guests-rows-head {
        background-color: #f1f1f1;
    }
    
    .guests-rows-td {
        border-bottom: 1px solid #ddd;
    }
    
    .guests-rows-empty {
        text-align: center;
        color: #888;
    }
    
    .app-toogle-layer {
        cursor: pointer;
        color: #007bff;
        text-decoration: underline;
    }
    
    .guestsDropdown {
        position: absolute;
        background-color: white;
        border: 1px solid #ccc;
        z-index: 10;
        padding: 10px;
    }
    
    .guestsDropdown a {
        display: block;
        color: #333;
        text-decoration: none;
        padding: 5px 0;
    }
    
    .guestsDropdown a:hover {
        color: #007bff;
    }
    
    .icon-tools {
        margin-right: 5px;
    }
    
    
    /* General Styles for the Guest Mark Navigation */
    #app-guest-mark-nav {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        background-color: #f9f9f9; /* Light background for visibility */
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    /* List Items */
    #app-guest-mark-nav li {
        display: flex;
        align-items: center;
        padding: 10px 15px; /* Space around items */
        cursor: pointer;
        transition: background-color 0.2s; /* Smooth background change on hover */
    }
    
    #app-guest-mark-nav li:hover {
        background-color: #e0e0e0; /* Light gray on hover */
    }
    
    /* Input Group Line */
    .input-group-line {
        display: flex;
        align-items: center;
    }
    
    /* Select All Checkbox */
    .guests-rows-select-all {
        display: flex;
        align-items: center;
    }
    
    .guests-rows-select-all input {
        margin-right: 10px; /* Space between checkbox and label */
    }
    
    /* Label Styles */
    .label-mark-all {
        font-weight: bold; /* Make the label text bold */
    }
    
    /* Action Items */
    .guests-mark-nav-action {
        flex-grow: 1; /* Allows text to occupy available space */
        font-size: 14px; /* Adjust font size */
    }
    
    /* Icons */
    .icon-tools {
        margin-right: 8px; /* Space between icon and text */
        font-size: 16px; /* Adjust icon size */
        color: #4a4a4a; /* Icon color */
    }
    
    /* Disable State */
    .disabled {
        opacity: 0.6; /* Dimmed appearance for disabled state */
        pointer-events: none; /* Prevent interactions */
    }
</style>