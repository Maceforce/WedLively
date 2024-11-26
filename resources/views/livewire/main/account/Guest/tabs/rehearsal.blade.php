<div class="app-guests-header">
    <a href="/tools/EventForm?id=42985236" class="tools-title-count guestsTitle__action">
        <i class="icon-tools icon-tools-settings"></i> Settings
    </a>
    <h1 class="tools-title guestsTitle">Rehearsal Dinner</h1>
    <div class="guestStats">
        <div class="guestStats__item">
            <i class="guestStats__icon icon-tools icon-tools-guest-count"></i>
            <div class="guestStats__content">
                <span class="guestStats__subtitle">2</span>
                <span class="app-guests-stats-total-title">Guests</span>
            </div>
        </div>
        <div class="guestStats__item">
            <i class="guestStats__icon icon-tools icon-tools-guest-stats"></i>
            <div class="guestStats__content">
                <span class="guestStats__subtitle">2</span>
                <span>Attending</span>
                <div class="guestStats__count">
                    <span class="guestStats__text">0 Pending</span>
                    <span class="guestStats__text">0 Declined</span>
                </div>
            </div>
        </div>
    </div>
    <div class="actions">
        <a class="btn btn-outline" role="button">
            <i class="icon icon-mail-letter"></i> Message guests
        </a>
        <a class="btn btn-outline" role="button">
            <i class="icon icon-tools-export"></i> Export
        </a>
        <a class="btn btn-outline" href="/tools/Stats?idEvent=42985236">
            <i class="icon icon-stats"></i> View summary
        </a>
    </div>
</div>

<div class="guestsRows">
    <nav class="guestsRows__nav">
        <span class="guestsRows__navLink active">Groups</span>
        <span class="guestsRows__navLink">Attendance</span>
        <span class="guestsRows__navLink">Lists</span>
    </nav>
    <div class="guestsRows__actions">
        <a class="btn btn-primary" data-remote="/tools/GuestsAssignEvent?idEvent=42985236">+ Guest</a>
        <a class="btn btn-secondary" data-remote="/tools/GroupsAdd?section=group">+ Group</a>
        <div class="guestsRows__search">
            <input type="text" placeholder="Search guests..." name="Query">
        </div>
    </div>
</div>

<form id="guestForm" action="/tools/Guests" method="post">
        <input type="hidden" name="isSimplifyListOverview" value="true">
        <input type="hidden" name="tab" value="1">
        <input type="hidden" name="viewGrid" value="1">
        <input type="hidden" name="show" value="">
        <input type="hidden" name="idContact" value="">
        <input type="hidden" name="idEvent" value="42985236">
        <input type="hidden" name="subIdEvent" value="">

        <div class="form-section">
            <div class="filter-container">
                <!-- Dropdown filters placeholder -->
            </div>
            <div class="guest-list">
                <ul class="guest-actions">
                    <li><input type="checkbox" class="select-all"> <span>Select all</span></li>
                    <li data-action="group">Group</li>
                    <li data-action="attendance">Attendance</li>
                    <li data-action="lists">Lists</li>
                    <li class="remove-action">Remove</li>
                </ul>

                <table class="guest-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Couple <span class="guest-count">(2)</span></th>
                            <th>Attendance</th>
                            <th>List</th>
                            <th></th>
                            <th align="right">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Guest Row 1 -->
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Developer</td>
                            <td>
                                <select class="attendance-select">
                                    <option>Attending</option>
                                    <option>Pending</option>
                                    <option>Canceled</option>
                                </select>
                            </td>
                            <td>
                                <select class="list-select">
                                    <option>A-List</option>
                                    <option>B-List</option>
                                    <option>C-List</option>
                                </select>
                            </td>
                            <td></td>
                            <td><button class="edit-btn">Edit</button></td>
                        </tr>
                        <!-- Guest Row 2 -->
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Partner</td>
                            <td>
                                <select class="attendance-select">
                                    <option>Attending</option>
                                    <option>Pending</option>
                                    <option>Canceled</option>
                                </select>
                            </td>
                            <td>
                                <select class="list-select">
                                    <option>A-List</option>
                                    <option>B-List</option>
                                    <option>C-List</option>                                    
                                </select>
                            </td>
                            <td></td>
                            <td><button class="edit-btn">Edit</button></td>
                        </tr>
                    </tbody>
                </table>
            <!-- </div>
        </div> -->
    <!-- </form> -->
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
        
        <style>body {
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

    <!-- Guest List Section 1 -->
    <table class="guest-list">
        <thead>
            <tr class="guest-list-header">
                <td width="3%"></td>
                <td width="24%">Family friends of my partner<span class="guest-count">0</span></td>
                <td width="15%">Attendance</td>
                <td width="18%">List</td>
                <td width="10%" align="right">
                    <span class="edit-toggle" data-selector="dropdown-header10">Edit</span>
                    <div class="dropdown-menu dropdown-header10" style="display:none;">
                        <a class="rename" data-selector="dropdown-header10">Rename</a>
                        <a class="remove" data-selector="dropdown-header10">Remove</a>
                    </div>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="7"><span>No guests</span></td>
            </tr>
        </tbody>
    </table>

    <!-- Guest List Section 2 -->
    <table class="guest-list">
        <thead>
            <tr class="guest-list-header">
                <td width="3%"></td>
                <td width="24%">Family friends of developer<span class="guest-count">0</span></td>
                <td width="15%">Attendance</td>
                <td width="18%">List</td>
                <td width="10%" align="right">
                    <span class="edit-toggle" data-selector="dropdown-header9">Edit</span>
                    <div class="dropdown-menu dropdown-header9" style="display:none;">
                        <a class="rename" data-selector="dropdown-header9">Rename</a>
                        <a class="remove" data-selector="dropdown-header9">Remove</a>
                    </div>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="7"><span>No guests</span></td>
            </tr>
        </tbody>
    </table>

    <!-- Guest List Section 3 -->
    <table class="guest-list">
        <thead>
            <tr class="guest-list-header">
                <td width="3%"></td>
                <td width="24%">Test's coworkers<span class="guest-count">0</span></td>
                <td width="15%">Attendance</td>
                <td width="18%">List</td>
                <td width="10%" align="right">
                    <span class="edit-toggle" data-selector="dropdown-header8">Edit</span>
                    <div class="dropdown-menu dropdown-header8" style="display:none;">
                        <a class="rename" data-selector="dropdown-header8">Rename</a>
                        <a class="remove" data-selector="dropdown-header8">Remove</a>
                    </div>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="7"><span>No guests</span></td>
            </tr>
        </tbody>
    </table>

    <!-- Guest List Section 4 -->
    <table class="guest-list">
        <thead>
            <tr class="guest-list-header">
                <td width="3%"></td>
                <td width="24%">Developer's coworkers<span class="guest-count">0</span></td>
                <td width="15%">Attendance</td>
                <td width="18%">List</td>
                <td width="10%" align="right">
                    <span class="edit-toggle" data-selector="dropdown-header7">Edit</span>
                    <div class="dropdown-menu dropdown-header7" style="display:none;">
                        <a class="rename" data-selector="dropdown-header7">Rename</a>
                        <a class="remove" data-selector="dropdown-header7">Remove</a>
                    </div>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="7"><span>No guests</span></td>
            </tr>
        </tbody>
    </table>

    <!-- Additional guest list sections would follow the same structure, updating the content as needed -->
</div>




    <script>
        // jQuery for managing guest check/uncheck all
$(document).ready(function () {
    // Select all checkbox toggle
    $(".app-guest-select-all").change(function () {
        var isChecked = $(this).prop("checked");
        $(".app-guest-check").prop("checked", isChecked);
        toggleActions(isChecked);
    });

    // Individual checkbox change event
    $(".app-guest-check").change(function () {
        var allChecked = $(".app-guest-check").length === $(".app-guest-check:checked").length;
        $(".app-guest-select-all").prop("checked", allChecked);
        toggleActions($(".app-guest-check:checked").length > 0);
    });

    // Dropdown toggle script
    $(".app-toogle-layer").click(function (e) {
        e.stopPropagation();
        var selector = $(this).data("selector");
        $("." + selector).toggle();
    });

    // Hide dropdowns when clicking outside
    $(document).click(function () {
        $(".guestsDropdown").hide();
    });

    // AJAX form submission for guest updates
    $(".app-guest-update").change(function () {
        var updateType = $(this).data("type");
        var contactId = $(this).closest(".app-contact-row").data("contact-id");
        var newValue = $(this).find(":selected").data("value");

        $.ajax({
            url: "/tools/GuestsUpdate",
            method: "POST",
            data: {
                idContact: contactId,
                updateType: updateType,
                newValue: newValue,
            },
            success: function (response) {
                alert("Guest information updated successfully!");
            },
            error: function () {
                alert("Error updating guest information.");
            }
        });
    });

    // Delete guest confirmation
    $(".app-layer-remove-guest").click(function (e) {
        e.preventDefault();
        if (confirm("Are you sure you want to remove this guest?")) {
            var deleteUrl = $(this).data("remote");
            $.ajax({
                url: deleteUrl,
                method: "POST",
                success: function () {
                    alert("Guest removed successfully.");
                    location.reload();
                },
                error: function () {
                    alert("Error removing guest.");
                }
            });
        }
    });
});

// Toggle action buttons based on selection
function toggleActions(isEnabled) {
    if (isEnabled) {
        $(".app-mark-multi").removeClass("disabled");
    } else {
        $(".app-mark-multi").addClass("disabled");
    }
}
    </script>