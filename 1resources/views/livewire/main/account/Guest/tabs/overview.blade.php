<div>
    <h2 class="tools-subtitle">Guest Overview</h2>
    <div class="guest-stats-container">
        <div class="guest-stats-item" data-event="42985234">
            <a href="/tools/Guests?idEvent=42985234">
                <i class="guest-stats-icon icon-tools icon-tools-guest-wedding"></i>
                <div class="guest-stats-content">
                    <p class="guest-stats-title">Wedding</p>
                    <div class="guest-stats-count">
                        <span class="guest-stats-number">2</span>
                        <span class="guest-stats-label">Guests</span>
                    </div>
                    <div class="guest-stats-details">
                        <span><strong>2</strong> Attending</span>
                        <span><strong>0</strong> Declined</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="guest-stats-item" data-event="42985236">
            <a href="/tools/Guests?idEvent=42985236">
                <i class="guest-stats-icon icon-tools icon-tools-guest-rehearsal"></i>
                <div class="guest-stats-content">
                    <p class="guest-stats-title">Rehearsal Dinner</p>
                    <div class="guest-stats-count">
                        <span class="guest-stats-number">2</span>
                        <span class="guest-stats-label">Guests</span>
                    </div>
                    <div class="guest-stats-details">
                        <span><strong>2</strong> Attending</span>
                        <span><strong>0</strong> Declined</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="guest-stats-item" data-event="42985238">
            <a href="/tools/Guests?idEvent=42985238">
                <i class="guest-stats-icon icon-tools icon-tools-guest-bridal"></i>
                <div class="guest-stats-content">
                    <p class="guest-stats-title">Shower</p>
                    <div class="guest-stats-count">
                        <span class="guest-stats-number">2</span>
                        <span class="guest-stats-label">Guests</span>
                    </div>
                    <div class="guest-stats-details">
                        <span><strong>2</strong> Attending</span>
                        <span><strong>0</strong> Declined</span>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <style>
        .guest-stats-container {
            display: flex;
            gap: 20px;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .guest-stats-item {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            width: 250px;
            padding: 20px;
        }

        .guest-stats-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .guest-stats-icon {
            font-size: 40px;
            color: #007bff;
            margin-bottom: 10px;
        }

        .guest-stats-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .guest-stats-count {
            display: flex;
            align-items: baseline;
            gap: 5px;
            font-size: 16px;
            color: #555;
        }

        .guest-stats-number {
            font-size: 24px;
            font-weight: bold;
            color: #dc3545;
        }

        .guest-stats-details {
            margin-top: 10px;
            font-size: 14px;
            color: #666;
        }

        .guest-stats-details span {
            display: block;
            margin: 5px 0;
        }
        a.link--primary {
            width: 100%;
            float: inline-end;
            color: #dc3545;
        }

        footer.modalAddGuest__footer {
            width: 100%;
            position: relative;
            margin: 50px 0px 0px 0px;
        }
    </style>

</div>

<style>
.guest-overview {
    margin: 20px auto;
}

.guest-overview h2 {
    text-align: center;
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    background-color: #FF8080;
    color: white;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {
    background-color: #FFE6B3;
}

.action-button {
    padding: 8px 12px;
    margin-right: 5px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.action-button.edit {
    background-color: #28a745;
    color: white;
}

.action-button.edit:hover {
    background-color: #218838;
}

.action-button.delete {
    background-color: #dc3545;
    color: white;
}

.action-button.delete:hover {
    background-color: #c82333;
}

</style>


<div class="guest-list-section">


        <div class="action-buttons">
            <div class="message-button">
                <div class="app-dropdown-layer relative inline-block" data-selector="app-dropdown-request-contact">
                    <a class="btnOutline" role="button">
                        <i class="icon icon-mail-letter mr10"></i>Message guests
                        <i class="icon icon-arrow-down"></i>
                    </a>
                    <div class="guestsDropdown app-dropdown-request-contact dnone">
                        <a href="/tools/InvitationsAdd?idEvent=42985234" class="icon icon-mail-letter icon-left">Online invitation</a>
                        <a href="/tools/GuestsRequestConfirm?idEvent=42985234" class="icon icon-mail-letter icon-left">Request RSVP</a>
                    </div>
                </div>
            </div>
            <div class="export-button text-right">
                <div class="app-dropdown-layer relative inline-block" data-selector="app-dropdown-export">
                    <a class="btnOutline" role="button">
                        <i class="icon-tools icon-tools-export mr10"></i>Export
                    </a>
                    <div class="guestsDropdown guestsDropdown--right app-dropdown-export dnone">
                        <a href="/tools/GuestsCSV?idEvent=42985234" class="icon-tools icon-tools-download-pdf">Download</a>
                        <a href="/tools/GuestsPrint?tab=1&amp;idEvent=42985234" class="app-tools-guest-print icon-tools icon-tools-print" target="_blank">Print</a>
                    </div>
                </div>
                <a class="btnOutline ml10" href="/tools/Stats?idEvent=42985234">
                    <i class="icon icon-stats icon-left"></i>View summary
                </a>
            </div>
        </div>

        <!-- @include('livewire.main.account.Guest.guest-list') -->
    </div>

<!--

<div class="guest-overview">
    <h2>All Guests</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>RSVP Status</th>
                <th>Meal Choice</th>
                <th>Group</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guests as $guest)
                <tr>
                    <td>{{ $guest->name }}</td>
                    <td>{{ $guest->email }}</td>
                    <td>{{ $guest->phone }}</td>
                    <td>{{ $guest->rsvp_status }}</td>
                    <td>{{ $guest->meal_choice }}</td>
                    <td>{{ optional($guest->group)->name }}</td>
                    <td>
                        <button class="action-button edit" wire:click="editGuest({{ $guest->id }})">Edit</button>
                        <button class="action-button delete" wire:click="deleteGuest({{ $guest->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>-->



<div class="guestsRows app-tools-guest-container">     

<style>
    .guestsRows__actions {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.btn {
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.btn-primary {
    background-color: #FFE6B3;
    color: #fff;
}

.btn-primary:hover {
    background-color: #FFE100;
}

.btn-secondary {
    background-color: #6c757d;
    color: #fff;
}

.btn-secondary:hover {
    background-color: #5a6268;
}

.guestsRows__search {
    flex-grow: 1;
    margin-left: 15px;
}

.guestsRows__search input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    transition: border-color 0.3s;
}

.guestsRows__search input:focus {
    border-color: #007bff;
    outline: none;
}

</style>

<div class="guestsRows__actions">
        <!-- <a class="btn btn-primary" data-remote="/tools/GuestsAssignEvent?idEvent=42985236">+ Guest</a> -->
        <!-- <a class="btn btn-primary" data-toggle="modal" data-target="#addGuestModal">+ Guest</a> -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addGuestModal">+ Guest</button>
        <a class="btn btn-secondary" data-remote="/tools/GroupsAdd?section=group">+ Group</a>
        <div class="guestsRows__search">
            <input type="text" placeholder="Search guests..." name="Query">
        </div>
    </div>


        
<form name="frmGuests" id="frmPaged" action="/tools/Guests" method="post">
                <input type="hidden" name="isSimplifyListOverview" value="true">
                <input type="hidden" class="app-form-paged-tab" name="tab" id="tab" value="1">
            <input type="hidden" class="app-form-paged-viewGrid" name="viewGrid" id="viewGrid" value="1">
            <input type="hidden" class="app-form-paged-show" name="show" id="show" value="">
            <input type="hidden" class="app-form-paged-idContact" name="idContact" id="idContact" value="">
            <input type="hidden" class="app-form-paged-idEvent" name="idEvent" id="idEvent" value="">
            <input type="hidden" class="app-form-paged-subIdEvent" name="subIdEvent" id="subIdEvent" value="">
        <div class="relative">
        <div class="app-dropdown-filters"></div>
        <div class="guests-rows-content guests-rows-content-full">
            <style>
                #app-guest-mark-nav {
                        list-style: none;
                        padding: 0;
                        margin: 0;
                        background-color: #ffffff;
                        border-radius: 5px;
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }

                    #app-guest-mark-nav li {
                        display: flex;
                        align-items: center;
                        padding: 10px 15px;
                        border-bottom: 1px solid #e0e0e0;
                    }

                    #app-guest-mark-nav li:last-child {
                        border-bottom: none;
                    }

                    .input-group-line {
                        display: flex;
                        align-items: center;
                    }

                    .guests-rows-select-all {
                        display: flex;
                        align-items: center;
                        cursor: pointer;
                    }

                    .app-guest-select-all {
                        margin-right: 10px;
                    }

                    .label-mark-all {
                        font-size: 14px;
                        color: #333;
                    }

                    .guests-mark-nav-action {
                        cursor: pointer;
                        display: flex;
                        align-items: center;
                        color: #007bff;
                        font-weight: bold;
                    }

                    .guests-mark-nav-action i {
                        margin-right: 8px;
                    }

                    .guests-mark-nav-action:hover {
                        color: #0056b3;
                    }

                    .disabled {
                        opacity: 0.6;
                        pointer-events: none;
                    }

            </style>
            <ul id="app-guest-mark-nav" class="app-mark-as app-mark-multi guests-mark-nav guests-mark-nav-white disabled" style="list-style: none; padding: 0; margin: 0; background-color: #ffffff; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                <li style="display: flex; align-items: center; padding: 10px 15px; border-bottom: 1px solid #e0e0e0;">
                    <div class="input-group-line" style="display: flex; align-items: center;">
                        <label class="guests-rows-select-all" style="display: flex; align-items: center; cursor: pointer;">
                            <input type="checkbox" class="app-guest-select-all app-not-icheck" style="margin-right: 10px;">
                            <span></span>
                            <span class="label-mark-all" style="font-size: 14px; color: #333;">Select all</span>
                        </label>
                    </div>
                </li>
                <li class="app-guest-multi-open guests-mark-nav-action" data-action="group" style="cursor: pointer; display: flex; align-items: center; color: #007bff; font-weight: bold; padding: 10px 15px; border-bottom: 1px solid #e0e0e0; display:none;">
                    <i class="icon-tools icon-tools-mark-switch" style="margin-right: 8px;"></i>Group
                </li>
                <li class="app-guest-multi-delete guests-mark-nav-action" style="cursor: pointer; display: flex; align-items: center; color: #007bff; font-weight: bold; padding: 10px 15px; border-bottom: none;">
                    <i class="icon-tools icon-tools-mark-remove" style="margin-right: 8px;"></i>Remove
                </li>
            </ul>

            <div class="guests-rows-group-container">

<style>body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.app-guest-row-group {
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
}

.guests-rows-head {
    background-color: #FF8080;
    color: white;
}

.guests-rows-td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.guests-rows-nameBig {
    font-weight: bold;
}

.app-input-select {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.pointer {
    cursor: pointer;
}

.guestsRowsMore {
    position: relative;
}

.guestsDropdown {
    position: absolute;
    right: 0;
    background-color: white;
    border: 1px solid #ddd;
    border-radius: 3px;
    z-index: 1000;
}

.guestsDropdown a {
    display: block;
    padding: 8px;
    color: #333;
    text-decoration: none;
}

.guestsDropdown a:hover {
    background-color: #f0f0f0;
}
</style>
<table class="app-guest-row-group guests-rows-group guests-rows-group-white">
    <thead>
        <tr class="guests-rows-head app-guests-group-title">
            <td class="guests-rows-td guests-rows-noBorder" width="3%"></td>
            <td class="guests-rows-td guests-rows-nameBig" width="24%">
                Couple<span class="guests-rows-count app-guests-group-items-count">2</span>
            </td>
            <td class="guests-rows-td guestsRowsTitle" width="18%">Wedding</td>
            <td class="guests-rows-td guestsRowsTitle" width="18%">Rehearsal Dinner</td>
            <td class="guests-rows-td guestsRowsTitle" width="18%">Shower</td>
            <td class="guests-rows-td guestsRowsTitle" width="12%">Contact</td>
            <td class="guests-rows-td guestsRowsTitle" width="6%"></td>
            <td class="guests-rows-td guestsRowsLink" width="18%" align="right">
                <span data-selector="app-dropdown-header1" class="app-toogle-layer pointer">Edit</span>
                <div class="guestsDropdown guestsDropdown--right app-dropdown-header1 dnone" style="display: none;">
                    <a role="button" class="app-layer-add-modal" data-selector="app-dropdown-header1" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=1">
                        <i class="svgIcon app-svg-async svgIcon__pencil guestsDropdown__pencilIcon" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/pencil.svg" data-svg-lazyload="1"></i>
                        Rename
                    </a>
                </div>
            </td>
        </tr>
    </thead>
    <tbody>
        <tr class="app-contact-row guests-rows-item" data-contact-id="225656474">
            <td class="guests-rows-td guests-rows-noBorder" width="3%">
                <div class="guests-rows-td-checkbox input-group-line inline">
                    <label class="app-guest-check-label">
                        <input type="checkbox" class="app-guest-check" checked="checked">
                        <span></span>
                    </label>
                </div>
            </td>
            <td class="guests-rows-td guests-rows-name pointer app-contact-edit" data-idcontact="225656474">
                <span class="icon-tools icon-tools-avatar-guest-adult"></span>
                <span class="app-contact-grid-name pointer pl5">developer</span>
            </td>
            <td class="guests-rows-td">
                <select class="app-input-select">
                    <option value="1">Attending</option>
                    <option value="0">Pending</option>
                    <option value="2">Canceled</option>
                </select>
            </td>
            <td class="guests-rows-td">
                <select class="app-input-select">
                    <option value="1">Attending</option>
                    <option value="0">Pending</option>
                    <option value="2">Canceled</option>
                </select>
            </td>
            <td class="guests-rows-td">
                <select class="app-input-select">
                    <option value="1">Attending</option>
                    <option value="0">Pending</option>
                    <option value="2">Canceled</option>
                </select>
            </td>
            <td class="guests-rows-td">
                <i class="icon-tools icon-tools-form-phone-grey mr10" data-idcontact="225656474"></i>
                <i class="icon-tools icon-tools-form-postal-grey mr10" data-idcontact="225656474"></i>
                <div class="guestsRowsContact__mail">
                    <i class="icon-tools icon-tools-form-mail" data-idcontact="225656474"></i>
                </div>
            </td>
            <td class="guests-rows-td pointer app-contact-edit" data-idcontact="225656474"></td>
            <td class="guests-rows-td guestsRowsMore" align="right">
                <div class="app-toogle-layer pointer relative inline-block" data-selector="app-dropdown-225656474">···
                    <div class="guestsDropdown guestsDropdown--right app-dropdown-225656474 dnone">
                        <a role="button" class="app-contact-edit" data-idcontact="225656474">
                            <i class="icon-tools icon-tools-edit icon-left"></i> Edit
                        </a>
                        <a role="button" class="app-layer-remove-guest" data-remote="/tools/GuestsDeleteModal?idGuest=225656474">
                            <i class="icon-tools icon-tools-trash icon-left"></i> Remove
                        </a>
                    </div>
                </div>
            </td>
        </tr>
        <!-- Add more rows as needed -->

        <tr class="app-contact-row guests-rows-item" data-contact-id="225656476" data-event-id="" data-parent-contact-id="225656476" data-name="Partner ">
            <td class="guests-rows-td guests-rows-noBorder" width="3%">
                <div class="guests-rows-td-checkbox input-group-line inline">
                    <label class="app-guest-check-label">
                        <input type="checkbox" class="app-guest-check app-not-icheck" data-isnovios="1" checked="checked">
                        <span></span>
                    </label>
                </div>
            </td>
            <td class="guests-rows-td guests-rows-name pointer app-contact-edit" data-idcontact="225656476">
                <span class="icon-tools icon-tools-avatar-guest-adult"></span>
                <span class="app-contact-grid-name pointer pl5">
                    Partner
                </span>
            </td>
            <td class="guests-rows-td">
                <select class="app-input-select">
                    <option value="1">Attending</option>
                    <option value="0">Pending</option>
                    <option value="2">Canceled</option>
                </select>
            </td>
            <td class="guests-rows-td">
                <select class="app-input-select">
                    <option value="1">Attending</option>
                    <option value="0">Pending</option>
                    <option value="2">Canceled</option>
                </select>
            </td>
            <td class="guests-rows-td">
                <select class="app-input-select">
                    <option value="1">Attending</option>
                    <option value="0">Pending</option>
                    <option value="2">Canceled</option>
                </select>
            </td>
            <td class="guests-rows-td">
                <i class="app-contact-edit pointer icon-tools icon-tools-form-phone-grey mr10" data-idcontact="225656476"></i>
                <i class="app-contact-edit pointer icon-tools icon-tools-form-postal-grey mr10" data-idcontact="225656476"></i>
                <div class="guestsRowsContact__mail">
                    <i class="app-contact-edit pointer icon-tools icon-tools-form-mail" data-idcontact="225656476"></i>
                </div>
            </td>
            <td class="guests-rows-td pointer app-contact-edit" data-idcontact="225656476"></td>
            <td class="guests-rows-td guestsRowsMore" align="right">
                <div class="app-toogle-layer pointer relative inline-block" data-selector="app-dropdown-225656476">···
                    <div class="guestsDropdown guestsDropdown--right app-dropdown-225656476 dnone">
                        <a role="button" class="app-contact-edit" data-idcontact="225656476">
                            <i class="icon-tools icon-tools-edit icon-left"></i>
                            Edit
                        </a>
                        <a role="button" class="app-layer-remove-guest" data-remote="/tools/GuestsDeleteModal?idGuest=225656476&amp;idEvent=">
                            <i class="icon-tools icon-tools-trash icon-left"></i>
                            Remove
                        </a>
                    </div>
                </div>
            </td>
        </tr>




    </tbody>
</table>
    <script>
        // jQuery(document).ready(function () {
            
        //     jQuery('.app-toogle-layer').on('click', function () {
        //         const selector = $(this).data('selector');
        //         jQuery('.guestsDropdown').not(`.${selector}`).hide(); 
        //         jQuery(`.${selector}`).toggle(); 
        //     });
            
        //     jQuery(document).on('click', function (e) {
        //         if (!jQuery(e.target).closest('.app-toogle-layer').length) {
        //             jQuery('.guestsDropdown').hide();
        //         }
        //     });
            
        // });
    </script>

           
                                    <table class="app-guest-row-group guests-rows-group guests-rows-group-white">
                        <thead>
                        <tr class="guests-rows-head app-guests-group-title">
            <td class="guests-rows-td guests-rows-noBorder" width="3%"></td>
        <td class="guests-rows-td guests-rows-nameBig" width="24%">
        Family friends of my partner<span class="guests-rows-count app-guests-group-items-count">0</span>
    </td>

                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Wedding        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Rehearsal Dinner        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Shower        </td>
                    
    <td class="guests-rows-td guestsRowsTitle" width="12%">
        Contact    </td>

        <td class="guests-rows-td guestsRowsTitle" width="6%"></td>

    <td class="guests-rows-td guestsRowsLink" width="18%" align="right">
                    <span data-selector="app-dropdown-header10" class="app-toogle-layer pointer">Edit</span>
            <div class="guestsDropdown guestsDropdown--right app-dropdown-header10 dnone" style="display: none;">
                <a role="button" class="app-layer-add-modal" data-selector="app-dropdown-header10" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=10">
                    <i class="svgIcon app-svg-async svgIcon__pencil guestsDropdown__pencilIcon" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/pencil.svg" data-svg-lazyload="1"></i>                    Rename                </a>
                                    <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header10" data-id="10">
                        <i class="icon-tools icon-tools-trash icon-left"></i>
                        Remove                    </a>
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

                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Wedding        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Rehearsal Dinner        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Shower        </td>
                    
    <td class="guests-rows-td guestsRowsTitle" width="12%">
        Contact    </td>

        <td class="guests-rows-td guestsRowsTitle" width="6%"></td>

    <td class="guests-rows-td guestsRowsLink" width="18%" align="right">
                    <span data-selector="app-dropdown-header9" class="app-toogle-layer pointer">Edit</span>
            <div class="guestsDropdown guestsDropdown--right app-dropdown-header9 dnone" style="display: none;">
                <a role="button" class="app-layer-add-modal" data-selector="app-dropdown-header9" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=9">
                    <i class="svgIcon app-svg-async svgIcon__pencil guestsDropdown__pencilIcon" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/pencil.svg" data-svg-lazyload="1"></i>                    Rename                </a>
                                    <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header9" data-id="9">
                        <i class="icon-tools icon-tools-trash icon-left"></i>
                        Remove                    </a>
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

                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Wedding        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Rehearsal Dinner        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Shower        </td>
                    
    <td class="guests-rows-td guestsRowsTitle" width="12%">
        Contact    </td>

        <td class="guests-rows-td guestsRowsTitle" width="6%"></td>

    <td class="guests-rows-td guestsRowsLink" width="18%" align="right">
                    <span data-selector="app-dropdown-header8" class="app-toogle-layer pointer">Edit</span>
            <div class="guestsDropdown guestsDropdown--right app-dropdown-header8 dnone" style="display: none;">
                <a role="button" class="app-layer-add-modal" data-selector="app-dropdown-header8" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=8">
                    <i class="svgIcon app-svg-async svgIcon__pencil guestsDropdown__pencilIcon" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/pencil.svg" data-svg-lazyload="1"></i>                    Rename                </a>
                                    <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header8" data-id="8">
                        <i class="icon-tools icon-tools-trash icon-left"></i>
                        Remove                    </a>
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

                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Wedding        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Rehearsal Dinner        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Shower        </td>
                    
    <td class="guests-rows-td guestsRowsTitle" width="12%">
        Contact    </td>

        <td class="guests-rows-td guestsRowsTitle" width="6%"></td>

    <td class="guests-rows-td guestsRowsLink" width="18%" align="right">
                    <span data-selector="app-dropdown-header7" class="app-toogle-layer pointer">Edit</span>
            <div class="guestsDropdown guestsDropdown--right app-dropdown-header7 dnone" style="display: none;">
                <a role="button" class="app-layer-add-modal" data-selector="app-dropdown-header7" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=7">
                    <i class="svgIcon app-svg-async svgIcon__pencil guestsDropdown__pencilIcon" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/pencil.svg" data-svg-lazyload="1"></i>                    Rename                </a>
                                    <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header7" data-id="7">
                        <i class="icon-tools icon-tools-trash icon-left"></i>
                        Remove                    </a>
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

                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Wedding        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Rehearsal Dinner        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Shower        </td>
                    
    <td class="guests-rows-td guestsRowsTitle" width="12%">
        Contact    </td>

        <td class="guests-rows-td guestsRowsTitle" width="6%"></td>

    <td class="guests-rows-td guestsRowsLink" width="18%" align="right">
                    <span data-selector="app-dropdown-header6" class="app-toogle-layer pointer">Edit</span>
            <div class="guestsDropdown guestsDropdown--right app-dropdown-header6 dnone" style="display: none;">
                <a role="button" class="app-layer-add-modal" data-selector="app-dropdown-header6" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=6">
                    <i class="svgIcon app-svg-async svgIcon__pencil guestsDropdown__pencilIcon" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/pencil.svg" data-svg-lazyload="1"></i>                    Rename                </a>
                                    <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header6" data-id="6">
                        <i class="icon-tools icon-tools-trash icon-left"></i>
                        Remove                    </a>
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

                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Wedding        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Rehearsal Dinner        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Shower        </td>
                    
    <td class="guests-rows-td guestsRowsTitle" width="12%">
        Contact    </td>

        <td class="guests-rows-td guestsRowsTitle" width="6%"></td>

    <td class="guests-rows-td guestsRowsLink" width="18%" align="right">
                    <span data-selector="app-dropdown-header5" class="app-toogle-layer pointer">Edit</span>
            <div class="guestsDropdown guestsDropdown--right app-dropdown-header5 dnone" style="display: none;">
                <a role="button" class="app-layer-add-modal" data-selector="app-dropdown-header5" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=5">
                    <i class="svgIcon app-svg-async svgIcon__pencil guestsDropdown__pencilIcon" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/pencil.svg" data-svg-lazyload="1"></i>                    Rename                </a>
                                    <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header5" data-id="5">
                        <i class="icon-tools icon-tools-trash icon-left"></i>
                        Remove                    </a>
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

                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Wedding        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Rehearsal Dinner        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Shower        </td>
                    
    <td class="guests-rows-td guestsRowsTitle" width="12%">
        Contact    </td>

        <td class="guests-rows-td guestsRowsTitle" width="6%"></td>

    <td class="guests-rows-td guestsRowsLink" width="18%" align="right">
                    <span data-selector="app-dropdown-header4" class="app-toogle-layer pointer">Edit</span>
            <div class="guestsDropdown guestsDropdown--right app-dropdown-header4 dnone" style="display: none;">
                <a role="button" class="app-layer-add-modal" data-selector="app-dropdown-header4" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=4">
                    <i class="svgIcon app-svg-async svgIcon__pencil guestsDropdown__pencilIcon" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/pencil.svg" data-svg-lazyload="1"></i>                    Rename                </a>
                                    <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header4" data-id="4">
                        <i class="icon-tools icon-tools-trash icon-left"></i>
                        Remove                    </a>
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

                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Wedding        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Rehearsal Dinner        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Shower        </td>
                    
    <td class="guests-rows-td guestsRowsTitle" width="12%">
        Contact    </td>

        <td class="guests-rows-td guestsRowsTitle" width="6%"></td>

    <td class="guests-rows-td guestsRowsLink" width="18%" align="right">
                    <span data-selector="app-dropdown-header3" class="app-toogle-layer pointer">Edit</span>
            <div class="guestsDropdown guestsDropdown--right app-dropdown-header3 dnone" style="display: none;">
                <a role="button" class="app-layer-add-modal" data-selector="app-dropdown-header3" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=3">
                    <i class="svgIcon app-svg-async svgIcon__pencil guestsDropdown__pencilIcon" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/pencil.svg" data-svg-lazyload="1"></i>                    Rename                </a>
                                    <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header3" data-id="3">
                        <i class="icon-tools icon-tools-trash icon-left"></i>
                        Remove                    </a>
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

                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Wedding        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Rehearsal Dinner        </td>
                    <td class="guests-rows-td guestsRowsTitle" width="18%">
            Shower        </td>
                    
    <td class="guests-rows-td guestsRowsTitle" width="12%">
        Contact    </td>

        <td class="guests-rows-td guestsRowsTitle" width="6%"></td>

    <td class="guests-rows-td guestsRowsLink" width="18%" align="right">
                    <span data-selector="app-dropdown-header2" class="app-toogle-layer pointer">Edit</span>
            <div class="guestsDropdown guestsDropdown--right app-dropdown-header2 dnone" style="display: none;">
                <a role="button" class="app-layer-add-modal" data-selector="app-dropdown-header2" data-remote="/tools/GroupsAdd?section=group&amp;idGroup=2">
                    <i class="svgIcon app-svg-async svgIcon__pencil guestsDropdown__pencilIcon" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/pencil.svg" data-svg-lazyload="1"></i>                    Rename                </a>
                                    <a role="button" class="app-contact-group-delete" data-selector="app-dropdown-header2" data-id="2">
                        <i class="icon-tools icon-tools-trash icon-left"></i>
                        Remove                    </a>
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






    <!-- Add guest--->
     <!-- Button to Open Modal -->
<!-- <a class="btn btn-primary" data-toggle="modal" data-target="#addGuestModal">+ Guest</a> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.modalAddGuestTabs__itemIcon {
    width: 20px;
    height: 20px;
}

/* General container styles */
.guest-fields-container {
    margin-top: 20px;
}

/* Guest field item styles */
.modalAddGuestAudit {
}

.modalAddGuestAudit:hover {
}

/* Label styles */
.textfield__label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: #333;
}

/* Input and select field styles */
.textfield__input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    color: #555;
    margin-bottom: 15px;
    transition: border-color 0.3s ease;
}

.textfield__input:focus {
    border-color: #4a90e2; /* Focus color */
    outline: none;
}

/* Mandatory field indicator */
.modalAddGuestAuditFormField__mandatory {
    color: red;
}

/* Button styles */
.app-guest-new-companion {
    display: flex;
    align-items: center;
    padding: 10px 15px;
    background-color: #4a90e2;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
    margin-top: 10px;
}

.app-guest-new-companion:hover {
    background-color: #357ab7; /* Darker blue on hover */
}

.app-add-guest-audit-companion-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 15px;
}

/* Trash icon styles */
.modalAddGuestAuditActions__removeIcon {
    cursor: pointer;
    width: 20px;
    height: 20px;
    transition: fill 0.3s ease;
}

.modalAddGuestAuditActions__removeIcon:hover {
    fill: #ff5e5e; /* Red color on hover */
}

/* Unknown name link styles */
.app-add-guest-audit-unknown {
    cursor: pointer;
    color: #4a90e2;
    font-weight: bold;
    text-decoration: underline;
    transition: color 0.3s ease;
}

.app-add-guest-audit-unknown:hover {
    color: #357ab7; /* Darker blue on hover */
}

.app-textfield-validate.textfield.modalAddGuestAuditFormField {
    width: 33%;
    float: left;
}
select:not([size]) {
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3E%3Cpath stroke='%236B7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3E%3C/svg%3E");
    background-position: right .5rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
    padding-right: 2.5rem;
    print-color-adjust: exact;
    padding: 12px;
}
</style>
<!-- Modal Structure -->
<div class="modal fade" id="addGuestModal" tabindex="-1" aria-labelledby="addGuestModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGuestModalLabel">Add Guest</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Nav Tabs -->
                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="new-guest-tab" data-bs-toggle="tab" href="#new-guest" role="tab" aria-controls="new-guest" aria-selected="true">
                            <i class="bi bi-person-plus"></i> Add new guest
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="send-link-tab" data-bs-toggle="tab" href="#send-link" role="tab" aria-controls="send-link" aria-selected="false">
                            <i class="bi bi-link"></i> Send a link to guests
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="import-tab" data-bs-toggle="tab" href="#import" role="tab" aria-controls="import" aria-selected="false">
                            <i class="bi bi-file-earmark-spreadsheet"></i> Import spreadsheet
                        </a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="new-guest" role="tabpanel" aria-labelledby="new-guest-tab">
                        <h6>Add New Guest</h6>
                       

                        <div class="mb30">
                            <div class="app-guest-new-companion-container">
                                <div class="modalAddGuestAudit app-addGuest-suggest-item-contact">
                                    <div class="modalAddGuestAuditFormRow modalAddGuestAuditFormRowBasic">
                                        <input type="hidden" class="app-modal-addGuest-suggest app-addGuest-suggest-item-contactid" name="contactId[]" value="">

                                        <!-- Name field -->
                                        <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                            <span class="textfield__label app-audit-add-guest-label">First name<span class="modalAddGuestAuditFormField__mandatory"> *</span></span>
                                            <input id="Nombre" class="textfield__input modalAddGuestAuditFormField__name modalAddGuestAuditFormField__input app-add-guest-audit-name app-addGuest-suggest-item-name" type="text" name="NombreGuests[]" value="" placeholder="" data-redesign="redesign" data-msgerror="Your name must have a minimum of 2 characters." autocomplete="suggestName" data-disable-focus-on-init="false" maxlength="20">
                                        </div>

                                        <!-- Surname field -->
                                        <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                            <span class="textfield__label app-audit-add-guest-label">Last name</span>
                                            <input id="Apellidos" class="textfield__input modalAddGuestAuditFormField__surname modalAddGuestAuditFormField__input app-add-guest-audit-surname app-addGuest-suggest-item-surname" type="text" name="ApellidosGuests[]" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false">
                                        </div>

                                        <!-- Age field -->
                                        <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                            <span class="textfield__label">Age</span>
                                            <select id="Edad" class="textfield__input textfield__input--select" name="EdadGuests[]" data-redesign="redesign">
                                                <option selected disabled value=""></option>
                                                <option value="1">Adult</option>
                                                <option value="2">Child</option>
                                                <option value="3">Baby</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <script type="text/template" class="app-guest-new-companion-template">
                                    <div class="modalAddGuestAudit app-addGuest-suggest-item-contact">
                                        <div class="modalAddGuestAuditFormRow modalAddGuestAuditFormRowBasic">
                                            <input type="hidden" class="app-modal-addGuest-suggest app-addGuest-suggest-item-contactid" name="contactId[]" value="">

                                            <!-- Name field -->
                                            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                                <span class="textfield__label app-audit-add-guest-label">First name<span class="modalAddGuestAuditFormField__mandatory"> *</span></span>
                                                <input id="Nombre" class="textfield__input modalAddGuestAuditFormField__name modalAddGuestAuditFormField__input app-add-guest-audit-name app-addGuest-suggest-item-name app-companions-suggest-input-related" type="text" name="NombreGuests[]" value="" placeholder="" data-redesign="redesign" data-msgerror="Your name must have a minimum of 2 characters." autocomplete="suggestName" data-disable-focus-on-init="false" maxlength="20" />
                                            </div>

                                            <!-- Surname field -->
                                            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                                <span class="textfield__label app-audit-add-guest-label">Last name</span>
                                                <input id="Apellidos" class="textfield__input modalAddGuestAuditFormField__surname modalAddGuestAuditFormField__input app-add-guest-audit-surname app-addGuest-suggest-item-surname app-companions-suggest-input-related-surname" type="text" name="ApellidosGuests[]" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false" />
                                            </div>

                                            <!-- Age field -->
                                            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                                <span class="textfield__label">Age</span>
                                                <select id="Edad" class="textfield__input textfield__input--select" name="EdadGuests[]" data-redesign="redesign">
                                                    <option selected disabled value=""></option>
                                                    <option value="1">Adult</option>
                                                    <option value="2">Child</option>
                                                    <option value="3">Baby</option>
                                                </select>
                                            </div>

                                            <!-- <div class="modalAddGuestAuditFormField__addCompanion">
                                                <div class="modalAddGuestAuditActions app-add-guest-audit-companion-actions">
                                                    <div class="modalAddGuestAuditActions__addUnknown app-add-guest-audit-unknown">
                                                        Name unknown?
                                                    </div>
                                                    <div class="modalAddGuestAuditActions__remove">
                                                        <i class="svgIcon app-svg-async svgIcon__trash modalAddGuestAuditActions__removeIcon app-guest-remove-companion" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/trash.svg" data-svg-lazyload="1"></i>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </script>

                                <a role="button" class="app-guest-new-companion modalAddGuest__link" onclick="addGuestFields()">
                                    <i class="svgIcon app-svg-async svgIcon__plusCircle modalAddGuest__linkIcon" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/plusCircle.svg" data-svg-lazyload="1" data-loaded="true" style="width: 16px; height: 16px;margin:0px 5px 0px 0px">
                                        <svg viewBox="0 0 16 16" width="16" height="16">
                                            <path d="M8.5 7.5h3a.5.5 0 110 1h-3v3a.5.5 0 11-1 0v-3h-3a.5.5 0 010-1h3v-3a.5.5 0 011 0v3zM8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 118 0a8 8 0 010 16z" fill-rule="nonzero"></path>
                                        </svg>
                                    </i>
                                    Add related guests or a plus one
                                </a>

                                <div class="guest-fields-container">
                                    <!-- Dynamically added guest fields will be inserted here -->
                                </div>


                                <script>
                            function addGuestFields() {
                                // Create a new guest field template
                                const newGuestField = `
                                    <div class="modalAddGuestAudit app-addGuest-suggest-item-contact">
                                        <div class="modalAddGuestAuditFormRow modalAddGuestAuditFormRowBasic">
                                            <input type="hidden" class="app-modal-addGuest-suggest app-addGuest-suggest-item-contactid" name="contactId[]" value="">

                                            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                                <span class="textfield__label app-audit-add-guest-label">First name<span class="modalAddGuestAuditFormField__mandatory"> *</span></span>
                                                <input id="Nombre" class="textfield__input modalAddGuestAuditFormField__name modalAddGuestAuditFormField__input app-add-guest-audit-name app-addGuest-suggest-item-name" type="text" name="NombreGuests[]" value="" placeholder="" data-redesign="redesign" data-msgerror="Your name must have a minimum of 2 characters." autocomplete="suggestName" data-disable-focus-on-init="false" maxlength="20">
                                            </div>

                                            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                                <span class="textfield__label app-audit-add-guest-label">Last name</span>
                                                <input id="Apellidos" class="textfield__input modalAddGuestAuditFormField__surname modalAddGuestAuditFormField__input app-add-guest-audit-surname app-addGuest-suggest-item-surname" type="text" name="ApellidosGuests[]" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false">
                                            </div>

                                            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                                <span class="textfield__label">Age</span>
                                                <select id="Edad" class="textfield__input textfield__input--select" name="EdadGuests[]" data-redesign="redesign">
                                                    <option selected disabled value=""></option>
                                                    <option value="1">Adult</option>
                                                    <option value="2">Child</option>
                                                    <option value="3">Baby</option>
                                                </select>
                                            </div>

                                            <!--<div class="modalAddGuestAuditFormField__addCompanion">
                                                <div class="modalAddGuestAuditActions app-add-guest-audit-companion-actions">
                                                    <div class="modalAddGuestAuditActions__addUnknown app-add-guest-audit-unknown">Name unknown?</div>
                                                    <div class="modalAddGuestAuditActions__remove">
                                                        <i class="svgIcon app-svg-async svgIcon__trash modalAddGuestAuditActions__removeIcon app-guest-remove-companion" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/trash.svg" data-svg-lazyload="1"></i>
                                                    </div>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                `;
                                
                                // Append the new fields to the container
                                document.querySelector('.guest-fields-container').insertAdjacentHTML('beforeend', newGuestField);
                            }
                        </script>


    </div>

<style>
/* Ensure the contact fields are initially visible */
/* #contactFields {
    display: block; 
} */

/* Add styles for hiding fields */
.hidden {
    display: none;
}

/* General adjustments */
.modalAddGuestAuditFormRow {
    display: flex;
    flex-wrap: wrap; /* Allow wrapping to create two lines */
    gap: 15px; /* Space between fields */
}

/* Make the form fields responsive */
.modalAddGuestAuditFormField {
    flex: 1 1 calc(25% - 15px); /* Two columns */
    box-sizing: border-box;
}

/* Adjust icons size */
.modalAddGuest__labelIcon {
    width: 12px; /* Smaller width for the icon */
    height: 12px; /* Smaller height for the icon */
}

.modalAddGuest__labelIcongroup {
    width: 12px; /* Smaller width for the icon */
    height: 12px; /* Smaller height for the icon */
}

/* Optional: Adjust the icon alignment */
.modalAddGuest__label {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-weight: 600;
    background-color: #FFE6B3;
    padding: 10px;
    color: #fff;
}

/* Optional: Additional styling for inputs */
.textfield__input {
    padding: 8px; /* Adjust padding as necessary */
    font-size: 14px; /* Smaller font size */
}

/* Label styling */
.textfield__label {
    font-weight: bold; /* Make labels stand out */
    margin-bottom: 5px; /* Space between label and input */
}

.hidden {
    display: none; /* This class hides the contact fields */
}

.pure-u.mt10.mr15 {
    float: left;
    margin-right: 15px;
}

/* #contactFields {
    display: block; 
} */

</style>

<p class="modalAddGuest__label app-addguest-toggle" id="toggleButton">
    Contact information
    <i class="svgIcon app-svg-async svgIcon__angleDown modalAddGuest__labelIcon active" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/angleDown.svg" data-svg-lazyload="1" data-loaded="true">
        <svg viewBox="0 0 18 18">
            <path d="M16.9 5.6c-.2-.2-.5-.2-.7 0L9 12.8 1.8 5.6c-.2-.2-.5-.2-.7 0s-.2.5 0 .7l7.5 7.5v.1c.1.1.3.1.4.1.1 0 .3 0 .4-.1v-.1l7.5-7.5c.2-.2.2-.5 0-.7z"></path>
        </svg>
    </i>
</p>

<div class="mb20" id="contactFields">
    <div class="modalAddGuestAudit">
        <div class="modalAddGuestAuditFormRow modalAddGuestAuditFormRow--columnsx2">
            <!-- Email -->
            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                <span class="textfield__label">Email</span>
                <input id="Mail" class="textfield__input modalAddGuestAuditFormField__input app-input-mail" type="text" name="Mail" value="" placeholder="" data-redesign="redesign" data-msgerror="The email you entered is not valid." autocomplete="off" data-disable-focus-on-init="false">
            </div>

            <!-- Phone Number -->
            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                <span class="textfield__label">Phone number</span>
                <input id="Telefono" class="textfield__input modalAddGuestAuditFormField__input app-input-phone" type="text" name="Telefono" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false">
            </div>

            <!-- Mobile Phone -->
            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                <span class="textfield__label">Mobile number</span>
                <input id="TelefonoMovil" class="textfield__input modalAddGuestAuditFormField__input app-input-phone-mobile" type="text" name="TelefonoMovil" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false">
            </div>
        </div>
    </div>

    <div class="modalAddGuestAudit mt10">
        <div class="modalAddGuestAuditFormRow modalAddGuestAuditFormRow--columnsx2">
            <!-- Address -->
            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                <span class="textfield__label">Address</span>
                <input id="Direccion" class="textfield__input modalAddGuestAuditFormField__input app-input-address" type="text" name="Direccion" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false">
            </div>

            <!-- City/Town -->
            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                <span class="textfield__label">City/Town</span>
                <input id="city" class="textfield__input modalAddGuestAuditFormField__input app-input-city" type="text" name="city" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false">
            </div>

            <!-- State -->
            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                <span class="textfield__label">State</span>
                <input id="state" class="textfield__input modalAddGuestAuditFormField__input app-input-state" type="text" name="state" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false">
            </div>

            <!-- Zip Code -->
            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                <span class="textfield__label">Zip code</span>
                <input id="CodigoPostal" class="textfield__input modalAddGuestAuditFormField__input app-input-postal-code" type="text" name="CodigoPostal" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false">
            </div>
        </div>
    </div>
</div>


<script>
document.getElementById('toggleButton').addEventListener('click', function () {
    const contactFields = document.getElementById('contactFields');
    contactFields.classList.toggle('hidden');

    // Toggle the icon's active state
    const icon = this.querySelector('.modalAddGuest__labelIcon');
    icon.classList.toggle('active');

    // Rotate the icon based on the toggle state
    if (contactFields.classList.contains('hidden')) {
        icon.style.transform = 'rotate(180deg)'; // Rotate the icon when hidden
    } else {
        icon.style.transform = 'rotate(0deg)'; // Reset the icon when shown
    }
});

</script>




<p class="modalAddGuest__label app-addguest-toggle" id="toggleButtonGroup">
    Guest information
    <i class="svgIcon app-svg-async svgIcon__angleDown modalAddGuest__labelIcongroup active" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/angleDown.svg" data-svg-lazyload="1" data-loaded="true">
        <svg viewBox="0 0 18 18">
            <path d="M16.9 5.6c-.2-.2-.5-.2-.7 0L9 12.8 1.8 5.6c-.2-.2-.5-.2-.7 0s-.2.5 0 .7l7.5 7.5v.1c.1.1.3.1.4.1.1 0 .3 0 .4-.1v-.1l7.5-7.5c.2-.2.2-.5 0-.7z"></path>
        </svg>
    </i>
</p>

<div class="modalAddGuestAudit mt15" id="contactFieldsGroup">
    <div class="modalAddGuestAuditFormRow modalAddGuestAuditFormRow--contactInfo modalAddGuestAuditFormRow--columnsx2">
        <!-- Gender selector -->
        <input id="app-guest-gender" name="Sexo" type="hidden" value="0">
        
        <!-- Group selector -->
        <div class="app-textfield-validate textfield modalAddGuestAuditFormField modalAddGuestAuditFormField--group">
            <span class="textfield__label">Choose group</span>
            <select id="Grupo" class="textfield__input textfield__input--select" name="Grupo" data-redesign="redesign">
                <option selected="" disabled="" value=""></option>
                <option value="1">Couple</option>
                <option value="7">Developer's coworkers</option>
                <option value="2">Developer's family</option>
                <option value="4">Developer's friends</option>
                <option value="9">Family friends of developer</option>
                <option value="10">Family friends of my partner</option>
                <option value="6">Mutual friends</option>
                <option value="8">Test's coworkers</option>
                <option value="3">Test's family</option>
                <option value="5">Test's friends</option>
            </select>
        </div>

        <!-- Accommodation -->
        <div class="modalAddGuestAuditFormField modalAddGuestAuditFormField--rightAlign">
            <span class="input-group-line-label">Need hotel</span>
            <div class="input-group-line input-group-line--noMargin mt10">
                <label>
                    <input type="checkbox" id="NeedHotel" name="NeedHotel">
                    <span></span>
                    <span class="ml5">Yes</span>
                </label>
            </div>
        </div>
    </div>

    <!-- Invited to -->
    <div class="mb30 mt20">
        <span class="input-group-line-label">Invited to</span>
        <div class="pure-g">
            <div class="pure-u mt10 mr15">
                <div class="input-group-line input-group-line--noMargin">
                    <label>
                        <input type="checkbox" class="app-input-checkbox-event" name="events[42985234]" checked="">
                        <span></span>
                        <span class="ml5">Wedding</span>
                    </label>
                </div>
            </div>
            <div class="pure-u mt10 mr15">
                <div class="input-group-line input-group-line--noMargin">
                    <label>
                        <input type="checkbox" class="app-input-checkbox-event" name="events[42985236]">
                        <span></span>
                        <span class="ml5">Rehearsal Dinner</span>
                    </label>
                </div>
            </div>
            <div class="pure-u mt10 mr15">
                <div class="input-group-line input-group-line--noMargin">
                    <label>
                        <input type="checkbox" class="app-input-checkbox-event" name="events[42985238]">
                        <span></span>
                        <span class="ml5">Shower</span>
                    </label>
                </div>
            </div>
            <div class="pure-u mt10 mr15">
                <div class="input-group-line input-group-line--noMargin">
                    <label>
                        <input type="checkbox" class="app-input-checkbox-event" name="events[43022896]">
                        <span></span>
                        <span class="ml5">Test</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <footer class="modalAddGuest__footer">
        <button type="button" class="btnOutline btnOutline--primary mr5 app-guest-save" data-add-more="">Save and add another</button>
        <button type="button" class="btnFlat btnFlat--primary app-guest-save" data-id-contact="null">Save</button>
    </footer>
</div>

<!-- JavaScript for Toggle Functionality -->
<script>
    document.getElementById('toggleButtonGroup').addEventListener('click', function () {
        const contactFields = document.getElementById('contactFieldsGroup');
        contactFields.classList.toggle('hiddenGroup');

       
        const icon = this.querySelector('.modalAddGuest__labelIcongroup');
        icon.classList.toggle('active');

       
        if (contactFields.classList.contains('hiddenGroup')) {
            icon.style.transform = 'rotate(180deg)'; 
        } else {
            icon.style.transform = 'rotate(0deg)';
        }
    });
</script>

<!-- CSS to initially hide the contact fields -->
<style>
     .hiddenGroup {
        display: none; 
    }
    
    /* #contactFieldsGroup {
        display: block; 
    }  */
</style>




</div>




                    </div>
                    <div class="tab-pane fade" id="send-link" role="tabpanel" aria-labelledby="send-link-tab">
                        <h6>Send a Link to Guests</h6>
                        <p>Share the link with your guests to allow them to RSVP online.</p>
                        <form>
                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input type="url" class="form-control" id="link" placeholder="Enter link to share">
                            </div>
                            <button type="submit" class="btn btn-primary">Send Link</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="import" role="tabpanel" aria-labelledby="import-tab">
                        <h6>Import Spreadsheet</h6>
                        <p>Upload a spreadsheet to add guests in bulk.</p>
                        <form>
                            <div class="mb-3">
                                <label for="spreadsheet" class="form-label">Spreadsheet</label>
                                <input type="file" class="form-control" id="spreadsheet" accept=".xlsx,.xls">
                            </div>
                            <button type="submit" class="btn btn-primary">Upload Spreadsheet</button>
                        </form>
                    </div>                  


                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/@cometchat-pro/chat@latest"></script>

<script>
    const appID = '266572645f03a39a';
    const region = 'IN'; // Change to your region if necessary

    CometChat.init(appID, new CometChat.AppSettingsBuilder().subscribePresenceForAllUsers().setRegion(region).build()).then(
        () => {
            console.log("CometChat initialized successfully.");
            loginUser("cometchat-uid-1"); 
        },
        (error) => {
            console.log("CometChat initialization failed with error:", error);
        }
    );    


    function loginUser(uid) {
        CometChat.login(uid, '27104a5c0cab8bb55a040da8d62a72963025b35e').then(
            (user) => {
                console.log("Login Successful:", { user });
            },
            (error) => {
                console.log("Login failed with exception:", { error });
            }
        );
    }
</script>


