<div>
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

        span.ml5 {
            color: rgb(249 128 128/var(--tw-text-opacity));
            font-weight: lighter;
            font-size: 16px;
        }  
        .overflow-thin::-webkit-scrollbar {
            height: 4px;
            background-color:  #cfcfcf; /* or add it to the track */
        }
        .overflow-thin::-webkit-scrollbar-thumb {
                 background:#6b7280;
        }
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

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
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
        .guests-rows-group-container .py-2 {
            padding: 0px;
        }
        .guestsRows__actions {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px;
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
        .guestsRows__actions button.btn.btn-primary {
            margin: 0px 5px;
        }
    </style>

</div>

<div class="guestsRows app-tools-guest-container">
	<div class="pt-3 px-3 sm:p-2"><h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100">Guest Management</h2></div>
    <div class="guestsRows__actions px-3">
		
        <button type="button" class="inline-flex items-center justify-center rounded-sm border border-red-400 bg-red-400 px-4 py-2 font-medium text-white hover:text-red-500 focus:text-red-400 hover:bg-transparent transition-colors duration-300 mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#addGuestModal">+ Guest</button>
        <!-- <a class="btn btn-secondary" data-remote="/tools/GroupsAdd?section=group">+ Group</a>
        <button wire:click="addNewEvent" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEventModal">+ Event</button> -->
        <div class="guestsRows__search">           
            <!-- <input type="text" placeholder="Search guests..." name="Query"> -->
        </div>
    </div>
    <div class="relative w-fit">
        <!--<div class="app-dropdown-filters">
                @if (session()->has('success'))
                    <div id="success-alert" class="alert alert-success">{{ session('success') }}</div>
                    <script>
                        window.addEventListener('DOMContentLoaded', () => {
                            setTimeout(() => {
                                Livewire.emit('clearAlert');
                            }, 1000); // 1 second
                        });
                    </script>
                @endif
        </div>-->


        @if (session()->has('success'))
			<div id="success-message" class="alert alert-success">
				<div class="success-message-style">{{ session('success') }}</div>
			</div>

			<script>
				window.addEventListener('hide-success-message', () => {
					setTimeout(() => {
						const successMessage = document.getElementById('success-message');
						if (successMessage) {
							successMessage.style.display = 'none';
						}
					}, 2000); // 2000 milliseconds = 2 seconds
				});
			</script>
		@endif
        <div class="guests-rows-content guests-rows-content-full">
           <style>
            .success-message-style {
                padding: 10px;
                color: #31c48d;
                background: #31c48d14;
            }
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
            <!-- <ul id="app-guest-mark-nav" class="app-mark-as app-mark-multi guests-mark-nav guests-mark-nav-white disabled" style="list-style: none; padding: 0; margin: 0; background-color: #ffffff; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
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
            </ul>-->

            <div class="guests-rows-group-container">
               <style>
                table {
                    width: max-content;
                    border-collapse: collapse;
                    margin-top: 20px;
                }
                .app-guest-row-group {
                    border: 1px solid #ddd;
                    border-radius: 5px;
                    /* overflow: hidden; */
                }
                .app-guest-row-group:nth-of-type(1) {
                    margin-top: 0;
                }
                .app-guest-row-group tr > td {
                    font-size: 14px;
                    overflow: hidden;
                }
                .app-guest-row-group tr > td:nth-of-type(1) {
                    width: 29px !important;
                    padding: 10px 1px 10px 10px;
                }
                .app-guest-row-group tr > td:nth-of-type(2) {
                    width: 240px!important;
                }
                .app-guest-row-group tr > td:nth-of-type(3),
                .app-guest-row-group tr > td:nth-of-type(4),
                .app-guest-row-group tr > td:nth-of-type(5),
                .app-guest-row-group tr > td:nth-of-type(6),
                .app-guest-row-group tr > td:nth-of-type(7),
                .app-guest-row-group tr > td:nth-of-type(8) {
                    width: 120px!important;
                }
                .app-guest-row-group tr > td:nth-of-type(9) {
                    width: 145px!important;
                }
                .app-guest-row-group tr > td:nth-of-type(10) {
                    width: 80px!important;
                }

                

                .guests-rows-td {
                    padding: 10px;
                    text-align: left;
                    border-bottom: 1px solid #ddd;
                    transition: all 0.3s ease-in-out;
                }
                .guests-rows-nameBig {
                    font-weight: bold;
                }
                .app-input-select {
                    width: 100%;
                    min-width: 100px;
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
                .text-nowrap {
                    white-space: nowrap;
                }  
               </style>
                @foreach ($groupsWithGuestss as $group)
                <table class="app-guest-row-group guests-rows-group guests-rows-group-white">
                    <thead>
                        <tr class="guests-rows-head app-guests-group-title text-slate-500 bg-gray-100">
                            <td class="guests-rows-td guests-rows-noBorder" ></td>
                            <td class="guests-rows-td guests-rows-nameBig text-nowrap"> 
                                {{ $group['name'] }}
                                <span class="guests-rows-count app-guests-group-items-count">{{--2 --}}</span>
                            </td class="text-nowrap">
                            @if (isset($group['events']) && !empty($group['events']))                          
                                @foreach ($group['events'] as $event)
                                    <td class="guests-rows-td guestsRowsTitle text-nowrap">
                                        <strong>{{ $event['name'] }}</strong>
                                    </td>
                                @endforeach
                            @else
                                <td class="guests-rows-td guestsRowsTitle text-nowrap">
                                    <p>No events available</p>
                                </td>
                            @endif
                            <td class="guests-rows-td guestsRowsTitle text-nowrap"><strong>Contact</strong></td>
                           <!-- <td class="guests-rows-td guestsRowsTitle text-nowrap"><strong>Phone</strong></td>-->
							<td class="guests-rows-td guestsRowsTitle text-nowrap"><strong>Action</strong></td>
                        </tr>                        
                    </thead>
                    <tbody>
                    @forelse ($group['guests'] as $guest)
                        <tr class="app-contact-row guests-rows-item" data-contact-id="225656474">
                            <td class="guests-rows-td guests-rows-noBorder" >
                                <div class="guests-rows-td-checkbox input-group-line inline">
                                    <label class="app-guest-check-label">
                                        <input type="checkbox" class="app-guest-check" checked="checked">
                                        <span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="guests-rows-td guests-rows-name pointer app-contact-edit" data-idcontact="225656474">
                                <span class="icon-tools icon-tools-avatar-guest-adult"></span>
                                <span class="app-contact-grid-name pointer pl5">                                       
                                        <span class="text-gray-600 font-normal"> {{ $guest['name'] }} 
                                        </span>
                             </span>
                            </td>
                            @foreach ($group['events'] as $event)
                            <td class="guests-rows-noBorder px-4 py-2">
                                    <select
                                        class="app-input-select min-w-28	"
                                        wire:change="updateRsvp({{ $guest['id'] }}, {{ $event['id'] }}, $event.target.value)"
                                    >
                                        <option value="Accepted" {{ $guest['rsvp_statuses'][$event['id']] === 'Accepted' ? 'selected' : '' }}>
                                            Attending
                                        </option>
                                        <option value="Pending" {{ $guest['rsvp_statuses'][$event['id']] === 'Pending' ? 'selected' : '' }}>
                                            Pending
                                        </option>
                                        <option value="Declined" {{ $guest['rsvp_statuses'][$event['id']] === 'Declined' ? 'selected' : '' }}>
                                            Declined
                                        </option>
                                    </select>
                                </td>
                            @endforeach
                            <td class="guests-rows-td">
                                <i class="icon-tools icon-tools-form-phone-grey mr10" data-idcontact="225656474"></i>
                                <i class="icon-tools icon-tools-form-postal-grey mr10" data-idcontact="225656474"></i>                                
                                <div class="guestsRowsContact__mail">
                                    <i class="icon-tools icon-tools-form-mail" data-idcontact="225656474"></i>                                                                   {{ $guest['email'] }}
                                </div>
                            </td>
                            <!--<td class="guests-rows-td pointer app-contact-edit" data-idcontact="225656474">{{ $guest['phone'] }}</td>-->
                            <td class="guests-rows-td">
								<button type="button" wire:click="deleteGuest({{ $guest['id'] }})" class="text-red-600 hover:text-red-800">
									Delete
								</button>
							</td>
                        </tr>
                    @endforeach                        
                    </tbody>
                </table>
                @endforeach                 
            </div>

        </div>
    </div>
</div>
<!-- Add guest--->
<!-- Button to Open Modal -->
<!-- <a class="btn btn-primary" data-toggle="modal" data-target="#addGuestModal">+ Guest</a> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<style>
    .modal {
            --bs-modal-zindex: 1055;
            --bs-modal-width: 500px;
            --bs-modal-padding: 1rem;
            --bs-modal-margin: 0.5rem;
            --bs-modal-color: ;
            --bs-modal-bg: #F5F9FF;
            --bs-modal-border-color: var(--bs-border-color-translucent);
            --bs-modal-border-width: var(--bs-border-width);
            --bs-modal-border-radius: var(--bs-border-radius-lg);
            --bs-modal-box-shadow: var(--bs-box-shadow-sm);
            --bs-modal-inner-border-radius: calc(var(--bs-border-radius-lg) - (var(--bs-border-width)));
            --bs-modal-header-padding-x: 1rem;
            --bs-modal-header-padding-y: 1rem;
            --bs-modal-header-padding: 1rem 1rem;
            --bs-modal-header-border-color: var(--bs-border-color);
            --bs-modal-header-border-width: var(--bs-border-width);
            --bs-modal-title-line-height: 1.5;
            --bs-modal-footer-gap: 0.5rem;
            --bs-modal-footer-bg: ;
            --bs-modal-footer-border-color: var(--bs-border-color);
            --bs-modal-footer-border-width: var(--bs-border-width);
            position: fixed;
            top: 0;
            left: 0;
            z-index: var(--bs-modal-zindex);
            display: none;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            outline: 0;
        }
        .modal-dialog {
            position: relative;
            width: auto;
            margin: var(--bs-modal-margin);
            pointer-events: none;
        }
        .modal.fade .modal-dialog {
            transition: transform 0.3s ease-out;
            transform: translate(0, -50px);
        }
        @media (prefers-reduced-motion: reduce) {
            .modal.fade .modal-dialog {
                transition: none;
            }
        }
        .modal.show .modal-dialog {
            transform: none;
        }
        .modal.modal-static .modal-dialog {
            transform: scale(1.02);
        }
        .modal-dialog-scrollable {
            height: calc(100% - var(--bs-modal-margin) * 2);
        }
        .modal-dialog-scrollable .modal-content {
            max-height: 100%;
            overflow: hidden;
        }
        .modal-dialog-scrollable .modal-body {
            overflow-y: auto;
        }
        .modal-dialog-centered {
            display: flex;
            align-items: center;
            min-height: calc(100% - var(--bs-modal-margin) * 2);
        }
        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            color: var(--bs-modal-color);
            pointer-events: auto;
            background-color: var(--bs-modal-bg);
            background-clip: padding-box;
            border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
            border-radius: var(--bs-modal-border-radius);
            outline: 0;
        }
        .modal-backdrop {
            --bs-backdrop-zindex: 1050;
            --bs-backdrop-bg: #000;
            --bs-backdrop-opacity: 0.5;
            position: fixed;
            top: 0;
            left: 0;
            z-index: var(--bs-backdrop-zindex);
            width: 100vw;
            height: 100vh;
            background-color: var(--bs-backdrop-bg);
        }
        .modal-backdrop.fade {
            opacity: 0;
        }
        .modal-backdrop.show {
            opacity: var(--bs-backdrop-opacity);
        }
        .modal-header {
            display: flex;
            flex-shrink: 0;
            align-items: center;
            padding: var(--bs-modal-header-padding);
            border-bottom: var(--bs-modal-header-border-width) solid var(--bs-modal-header-border-color);
            border-top-left-radius: var(--bs-modal-inner-border-radius);
            border-top-right-radius: var(--bs-modal-inner-border-radius);
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.05)!important;
            background-color: #ffffff;
            z-index: 1;
        }
        .modal-header .btn-close {
            padding: calc(var(--bs-modal-header-padding-y) * 0.5) calc(var(--bs-modal-header-padding-x) * 0.5);
            margin: calc(-0.5 * var(--bs-modal-header-padding-y)) calc(-0.5 * var(--bs-modal-header-padding-x)) calc(-0.5 * var(--bs-modal-header-padding-y)) auto;
        }
        .modal-title {
            margin-bottom: 0;
            line-height: var(--bs-modal-title-line-height);
        }
        .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: var(--bs-modal-padding);
            background-color: #FFF;
            overflow-x: hidden;
        }
        .modal-footer {
            display: flex;
            flex-shrink: 0;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            padding: calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap) * 0.5);
            background-color: var(--bs-modal-footer-bg);
            border-top: var(--bs-modal-footer-border-width) solid var(--bs-modal-footer-border-color);
            border-bottom-right-radius: var(--bs-modal-inner-border-radius);
            border-bottom-left-radius: var(--bs-modal-inner-border-radius);
        }
        .modal-footer > * {
            margin: calc(var(--bs-modal-footer-gap) * 0.5);
        }
        @media (min-width: 576px) {
            .modal {
                --bs-modal-margin: 1.75rem;
                --bs-modal-box-shadow: var(--bs-box-shadow);
            }
            .modal-dialog {
                max-width: var(--bs-modal-width);
                margin-right: auto;
                margin-left: auto;
            }
            .modal-sm {
                --bs-modal-width: 300px;
            }
        }
        @media (min-width: 992px) {
            .modal-lg,
            .modal-xl {
                --bs-modal-width: 700px;
            }
        }
        @media (min-width: 1200px) {
            .modal-xl {
                --bs-modal-width: 1140px;
            }
        }
        .modal-fullscreen {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }
        .modal-fullscreen .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }
        .modal-fullscreen .modal-footer,
        .modal-fullscreen .modal-header {
            border-radius: 0;
        }
        .modal-fullscreen .modal-body {
            overflow-y: auto;
        }
        .btn-close {
            --bs-btn-close-color: #000;
            font-family: cursive;
            font-size: 20px;
            --bs-btn-close-hover-opacity: 0.75;
            --bs-btn-close-focus-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
            --bs-btn-close-focus-opacity: 1;
            --bs-btn-close-disabled-opacity: 0.25;
            --bs-btn-close-white-filter: invert(1) grayscale(100%) brightness(200%);
            box-sizing: content-box;
            width: 1em;
            height: 1em;
            padding: .25em .25em;
            color: var(--bs-btn-close-color);
            border: 0;
            border-radius: .375rem;
            margin-top: -15px !important;
            transition: all 0.3s ease-in-out;
        }
        .btn-close:hover {
            color: #f98080;
        }
        @media (max-width: 575.98px) {
            .modal-fullscreen-sm-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-sm-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-sm-down .modal-footer,
            .modal-fullscreen-sm-down .modal-header {
                border-radius: 0;
            }
            .modal-fullscreen-sm-down .modal-body {
                overflow-y: auto;
            }
        }
        @media (max-width: 767.98px) {
            .modal-fullscreen-md-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-md-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-md-down .modal-footer,
            .modal-fullscreen-md-down .modal-header {
                border-radius: 0;
            }
            .modal-fullscreen-md-down .modal-body {
                overflow-y: auto;
            }
        }
        @media (max-width: 991.98px) {
            .modal-fullscreen-lg-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-lg-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-lg-down .modal-footer,
            .modal-fullscreen-lg-down .modal-header {
                border-radius: 0;
            }
            .modal-fullscreen-lg-down .modal-body {
                overflow-y: auto;
            }
        }
        @media (max-width: 1199.98px) {
            .modal-fullscreen-xl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-xl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-xl-down .modal-footer,
            .modal-fullscreen-xl-down .modal-header {
                border-radius: 0;
            }
            .modal-fullscreen-xl-down .modal-body {
                overflow-y: auto;
            }
        }
        @media (max-width: 1399.98px) {
            .modal-fullscreen-xxl-down {
                width: 100vw;
                max-width: none;
                height: 100%;
                margin: 0;
            }
            .modal-fullscreen-xxl-down .modal-content {
                height: 100%;
                border: 0;
                border-radius: 0;
            }
            .modal-fullscreen-xxl-down .modal-footer,
            .modal-fullscreen-xxl-down .modal-header {
                border-radius: 0;
            }
            .modal-fullscreen-xxl-down .modal-body {
                overflow-y: auto;
            }
        }
        .nav {
            --bs-nav-link-padding-x: 1rem;
            --bs-nav-link-padding-y: 0.5rem;
            --bs-nav-link-font-weight: ;
            --bs-nav-link-color: var(--bs-link-color);
            --bs-nav-link-hover-color: var(--bs-link-hover-color);
            --bs-nav-link-disabled-color: var(--bs-secondary-color);
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
        }
        .nav-link {
            display: block;
            padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
            font-size: var(--bs-nav-link-font-size);
            font-weight: var(--bs-nav-link-font-weight);
            color: var(--bs-nav-link-color);
            text-decoration: none;
            background: 0 0;
            border: 0;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        }
        @media (prefers-reduced-motion: reduce) {
            .nav-link {
                transition: none;
            }
        }
        .nav-link:focus,
        .nav-link:hover {
            color: var(--bs-blue);
        }
        .nav-link:focus-visible {
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
        .nav-link.disabled,
        .nav-link:disabled {
            color: var(--bs-nav-link-disabled-color);
            pointer-events: none;
            cursor: default;
        }
        .nav-tabs {
            --bs-nav-tabs-border-width: 1px;
            --bs-nav-tabs-border-color: #dee2e6;
            --bs-nav-tabs-border-radius: 0.375rem;
            --bs-nav-tabs-link-hover-border-color: #e9ecef #e9ecef rgba(0, 0, 0, 0.175);
            --bs-nav-tabs-link-active-color: #000;
            --bs-nav-tabs-link-active-bg: #fff;
            --bs-nav-tabs-link-active-border-color: #dee2e6 #dee2e6 #fff;
            border-bottom: 1px solid #dee2e6;
        }
        .nav-tabs .nav-link {
            margin-bottom: calc(-1 * var(--bs-nav-tabs-border-width));
            border: var(--bs-nav-tabs-border-width) solid transparent;
            border-top-left-radius: var(--bs-nav-tabs-border-radius);
            border-top-right-radius: var(--bs-nav-tabs-border-radius);
        }
        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            isolation: isolate;
            border-color: var(--bs-nav-tabs-link-hover-border-color);
        }
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: var(--bs-nav-tabs-link-active-color);
            background-color: var(--bs-nav-tabs-link-active-bg);
            border-color: var(--bs-nav-tabs-link-active-border-color);
        }
        .nav-tabs .dropdown-menu {
            margin-top: calc(-1 * var(--bs-nav-tabs-border-width));
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .modalAddGuestTabs__itemIcon {
            width: 20px;
            height: 20px;
        }
        .guest-fields-container {
            margin-top: 20px;
        }
        .modalAddGuestAudit {}
        .modalAddGuestAudit:hover {}
        .textfield__label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
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
            border-color: #4a90e2;
            /* Focus color */
            outline: none;
        }
        .modalAddGuestAuditFormField__mandatory {
            color: red;
        }
        .app-guest-new-companion {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            background-color: #1f2937;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }
        .app-guest-new-companion:hover {
            background-color: #161f2c;
        }
        .app-add-guest-audit-companion-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }
        .modalAddGuestAuditActions__removeIcon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            transition: fill 0.3s ease;
        }
        .modalAddGuestAuditActions__removeIcon:hover {
            fill: #ff5e5e;
        }
        .app-add-guest-audit-unknown {
            cursor: pointer;
            color: #4a90e2;
            font-weight: bold;
            text-decoration: underline;
            transition: color 0.3s ease;
        }
        .app-add-guest-audit-unknown:hover {
            color: #357ab7;
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
            padding: 9px;
            font-size: 14px;
        }
        .guests-rows-group-container select:not([size]) {
            padding: 0px;
            border: unset;
        }
        .guests-rows-group-container .py-2 {
            padding: 10px !important;
            margin: 0px !important;
        }
        .app-dropdown-filters {
            width: 230px;
        }
</style>
<!-- Modal Structure -->
<div class="modal fade" id="addGuestModal" tabindex="-1" aria-labelledby="addGuestModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-2xl font-bold text-red-400 mb-6" id="addGuestModalLabel"> Add Guest</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
            @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="modal-body">

                <!-- Nav Tabs -->
                <ul class="nav nav-tabs mb-3 hidden" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="new-guest-tab" data-bs-toggle="tab" href="#new-guest" role="tab" aria-controls="new-guest" aria-selected="true">
                            <i class="bi bi-person-plus"></i>
                            Add new guest
                        </a>
                    </li>
                    {{-- <li class="nav-item" role="presentation">
                        <a class="nav-link" id="send-link-tab" data-bs-toggle="tab" href="#send-link" role="tab" aria-controls="send-link" aria-selected="false">
                            <i class="bi bi-link"></i> Send a link to guests
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="import-tab" data-bs-toggle="tab" href="#import" role="tab" aria-controls="import" aria-selected="false">
                            <i class="bi bi-file-earmark-spreadsheet"></i> Import spreadsheet
                        </a>
                    </li>--}}
                </ul>

                <!-- Tab Content -->
                <div class="tab-content mt-4" id="myTabContent">
                    <div class="tab-pane fade show active" id="new-guest" role="tabpanel" aria-labelledby="new-guest-tab">
                        <h6>Add New Guest</h6>
						

                        @if (session()->has('error'))
							<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
								<span class="block sm:inline">{{ session('error') }}</span>
							</div>
						@endif


                     <form id="spaceform" wire:submit.prevent="addGuest" class="space-y-1" >
			
							
							<div>
								<!--@if (session()->has('message'))
									<div class="alert alert-success">{{ session('message') }}</div>
								@endif

								@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif -->
							</div>                            
							
                            <div class="mb30">
                                <div class="app-guest-new-companion-container">
                                    <div class="modalAddGuestAudit app-addGuest-suggest-item-contact">
                                        <div class="modalAddGuestAuditFormRow modalAddGuestAuditFormRowBasic">
                                            <input type="hidden" class="app-modal-addGuest-suggest app-addGuest-suggest-item-contactid" name="contactId[]" value="">
                                            <!--<div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                                <span class="textfield__label app-audit-add-guest-label">First name<span class="modalAddGuestAuditFormField__mandatory"> *</span></span>
                                                <input type="text" wire:model.defer="first_name" class="w-full px-4 py-2 border border-gray-300  focus:outline-none focus:border-blue-500" name="NombreGuests[]" value="" placeholder="" data-redesign="redesign" data-msgerror="Your name must have a minimum of 2 characters." autocomplete="suggestName" data-disable-focus-on-init="false" maxlength="20" required>
                                                @error('first_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
											 </div>-->


                                             <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
												<span class="textfield__label app-audit-add-guest-label">First Name<span class="modalAddGuestAuditFormField__mandatory"> *</span></span>
												<input 
													type="text" 
													wire:model.defer="first_name" 
													   id="first_name"
													class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:border-blue-500" 
													name="first_name" 
													value="" 
													placeholder="" 
													data-redesign="redesign" 
													data-msgerror="Your name must have a minimum of 2 characters." 
													autocomplete="suggestName" 
													data-disable-focus-on-init="false" 
													maxlength="20" 	
													   required >                                                
												@error('first_name') 
													<span class="text-red-500 text-sm">{{ 'First name must have a minimum of 2 characters.' }}</span> 
												@enderror
											</div>	
                                            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
												<span class="textfield__label app-audit-add-guest-label">Last Name<span class="modalAddGuestAuditFormField__mandatory"> *</span></span>
												<input 
													type="text" 
													wire:model.defer="last_name" 
													class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:border-blue-500" 
													name="ApellidosGuests[]" 
													placeholder="Enter last name" 
													autocomplete="off" 
													data-redesign="redesign" 
													data-disable-focus-on-init="false" 
													required >
												@error('last_name') 
													<span class="text-red-500 text-sm">{{'Last name must have a minimum of 2 characters.' }}</span> 
												@enderror
											</div>
                                            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
												<span class="textfield__label">Age<span class="modalAddGuestAuditFormField__mandatory"> *</span></span>
												<select 
													id="Edad" 
													wire:model.defer="age" 
													class="textfield__input textfield__input--select w-full px-4 py-2 border border-gray-300 focus:outline-none focus:border-blue-500" name="age[]" data-redesign="redesign" required>
													<option value="" selected>Select Age Group</option> 
													<option value="1">Adult</option>
													<option value="2">Child</option>
													<option value="3">Baby</option>
												</select>
												@error('age') 
													<span class="text-red-500 text-sm">{{'Select an Age Group.' }}</span> 
												@enderror
											</div>

                                        </div>
                                    </div>

                                <!--   <script type="text/template" class="app-guest-new-companion-template">
    <div class="modalAddGuestAudit app-addGuest-suggest-item-contact">
        <div class="modalAddGuestAuditFormRow modalAddGuestAuditFormRowBasic">
            <input type="hidden" class="app-modal-addGuest-suggest app-addGuest-suggest-item-contactid" name="contactId[]" value="">
            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                <span class="textfield__label app-audit-add-guest-label">First name<span class="modalAddGuestAuditFormField__mandatory"> *</span></span>
                <input id="Nombre" class="textfield__input modalAddGuestAuditFormField__name modalAddGuestAuditFormField__input app-add-guest-audit-name app-addGuest-suggest-item-name app-companions-suggest-input-related" type="text" name="NombreGuests[]" value="" placeholder="" data-redesign="redesign" data-msgerror="Your name must have a minimum of 2 characters." autocomplete="suggestName" data-disable-focus-on-init="false" maxlength="20">
            </div>
            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                <span class="textfield__label app-audit-add-guest-label">Last name</span>
                <input id="Apellidos" class="textfield__input modalAddGuestAuditFormField__surname modalAddGuestAuditFormField__input app-add-guest-audit-surname app-addGuest-suggest-item-surname app-companions-suggest-input-related-surname" type="text" name="ApellidosGuests[]" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false">
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
            
            <button type="button" class="delete-guest-button" onclick="removeGuestField(this)">
                Remove
            </button>
        </div>
    </div>
</script>-->

		<a role="button" class="app-guest-new-companion modalAddGuest__link" onclick="addGuestFields()">
			<i class="svgIcon app-svg-async svgIcon__plusCircle modalAddGuest__linkIcon fill-white" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/plusCircle.svg" data-svg-lazyload="1" data-loaded="true" style="width: 16px; height: 16px; margin: 0px 5px 0px 0px">
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
                    <div class="delete-guest-icon" onclick="removeGuestFields(this)" style="position: relative;top:8px;right: 0px;cursor: pointer;vertical-align: middle;">
                        <svg viewBox="0 0 16 16" width="16" height="16" fill="#ff4757">
                            <path d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 118 0a8 8 0 010 16zM5 7.5h6a.5.5 0 010 1H5a.5.5 0 010-1z" fill-rule="nonzero"></path>
                        </svg>
                    </div>
                </div>
            </div>
        `;

        document.querySelector('.guest-fields-container').insertAdjacentHTML('beforeend', newGuestField);
    }

    function removeGuestFields(element) {
        element.closest('.modalAddGuestAudit').remove();
    }
</script>
   <style>
	   .modalAddGuestAuditFormRow {
		   display: flex;
		   flex-wrap: wrap;
		   gap: 15px;
	   }
	   .modalAddGuestAuditFormField {
		   flex: 1 1 calc(25% - 15px);
		   box-sizing: border-box;
	   }
	   .modalAddGuest__labelIcon {
		   width: 12px;
		   height: 12px;
	   }
	   .modalAddGuest__labelIcongroup {
		   width: 12px;
		   height: 12px;
	   }
	   .modalAddGuest__label {
		   display: flex;
		   align-items: center;
		   justify-content: space-between;
		   font-weight: 600;
		   background-color: #FFE6B3;
		   padding: 10px;
		   color: #f98080!important;
	   }
	   .textfield__input {
		   padding: 8px;
		   font-size: 14px;
	   }
	   .textfield__label {
		   font-weight: bold;
		   margin-bottom: 5px;
	   }

	   .pure-u.mt10.mr15 {
		   float: left;
		   margin-right: 15px;
	   }
</style>
								<p class="modalAddGuest__label app-addguest-toggle text-red-400 mb-2" id="toggleButton">
                                    Contact information
                                    <i class="svgIcon app-svg-async svgIcon__angleDown modalAddGuest__labelIcon active" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/angleDown.svg" data-svg-lazyload="1" data-loaded="true">
                                        <svg viewBox="0 0 18 18">
                                            <path d="M16.9 5.6c-.2-.2-.5-.2-.7 0L9 12.8 1.8 5.6c-.2-.2-.5-.2-.7 0s-.2.5 0 .7l7.5 7.5v.1c.1.1.3.1.4.1.1 0 .3 0 .4-.1v-.1l7.5-7.5c.2-.2.2-.5 0-.7z"></path>
                                        </svg>
                                    </i>
                                </p>

                                <div class="mb20" id="contactFields">
                                    <div class="modalAddGuestAudit">
                                        <div class="modalAddGuestAuditFormRow modalAddGuestAuditFormRow--columnsx2 mt-3">
                                            <!-- Email -->
                                            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                                <span class="textfield__label">Email</span>
                                                <input type="email" wire:model.defer="email" class="w-full px-4 py-2 border border-gray-300  focus:outline-none focus:border-blue-500" name="Mail" value="" placeholder="" data-redesign="redesign" data-msgerror="The email you entered is not valid." autocomplete="off" data-disable-focus-on-init="false" required>
                                                <!--@error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror-->
												
												@error('email')
													@if ($message == 'The email address is required.')
														<span class="text-red-500 text-sm">Please enter your email address.</span>
													@elseif ($message == 'Please provide a valid email address.')
														<span class="text-red-500 text-sm">The email format is incorrect. Please provide a valid email.</span>
													@elseif ($message == 'validation.unique')
														<span class="text-red-500 text-sm">This email is already registered. Please use a different one.</span>
													@else
														<span class="text-red-500 text-sm">{{ $message }}</span>
													@endif
												@enderror 
                                            </div>

                                            <!-- Phone Number -->
                                            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                                <span class="textfield__label">Phone number</span>
                                                <input id="Telefono" wire:model.defer="phone" class="textfield__input modalAddGuestAuditFormField__input app-input-phone" type="text" name="phone" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false" required>
                                                @error('phone') <span class="text-red-500 text-sm">{{ 'Please enter phone number.' }}</span> @enderror
                                            </div>

                                            <!-- Address -->
                                            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                                <span class="textfield__label">Address</span>
                                                <input id="Direccion" wire:model.defer="address" class="textfield__input modalAddGuestAuditFormField__input app-input-address" type="text" name="Direccion" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false" required>
												 @error('address') <span class="text-red-500 text-sm">{{ 'Please enter Address.' }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modalAddGuestAudit mt10">
                                        <div class="modalAddGuestAuditFormRow modalAddGuestAuditFormRow--columnsx2 mt-3">

                                            <!-- City/Town -->
                                            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                                <span class="textfield__label">City/Town</span>
                                                <input id="city" wire:model.defer="city" class="textfield__input modalAddGuestAuditFormField__input app-input-city" type="text" name="city" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false" required>
                                                 @error('city') <span class="text-red-500 text-sm">{{ 'Please enter city.' }}</span> @enderror
                                            </div>

                                            <!-- State -->
                                            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                                <span class="textfield__label">State</span>
                                                <input id="state" wire:model.defer="state" class="textfield__input modalAddGuestAuditFormField__input app-input-state" type="text" name="state" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false" required>
												@error('state') <span class="text-red-500 text-sm">{{ 'Please enter state.' }}</span> @enderror
                                            </div>

                                            <!-- Zip Code -->
                                            <div class="app-textfield-validate textfield modalAddGuestAuditFormField">
                                                <span class="textfield__label">Zip code</span>
                                                <input id="CodigoPostal" wire:model.defer="zip_code" class="textfield__input modalAddGuestAuditFormField__input app-input-postal-code" type="text" name="CodigoPostal" value="" placeholder="" data-redesign="redesign" autocomplete="off" data-disable-focus-on-init="false" required>
												@error('zip_code') <span class="text-red-500 text-sm">{{ 'Please enter zip_code.' }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    document.getElementById('toggleButton').addEventListener('click', function() {
                                        const contactFields = document.getElementById('contactFields');
                                        contactFields.classList.toggle('hidden');
                                        const icon = this.querySelector('.modalAddGuest__labelIcon');
                                        icon.classList.toggle('active');
                                        if (contactFields.classList.contains('hidden')) {
                                            icon.style.transform = 'rotate(180deg)';
                                        } else {
                                            icon.style.transform = 'rotate(0deg)';
                                        }
                                    });
                                </script>
								<p class="modalAddGuest__label app-addguest-toggle text-red-400" id="toggleButtonGroup">
                                    Guest information
                                    <i class="svgIcon app-svg-async svgIcon__angleDown modalAddGuest__labelIcongroup active" data-svg="https://cdn1.weddingwire.com/assets/svg/optimized/_common/angleDown.svg" data-svg-lazyload="1" data-loaded="true">
                                        <svg viewBox="0 0 18 18">
                                            <path d="M16.9 5.6c-.2-.2-.5-.2-.7 0L9 12.8 1.8 5.6c-.2-.2-.5-.2-.7 0s-.2.5 0 .7l7.5 7.5v.1c.1.1.3.1.4.1.1 0 .3 0 .4-.1v-.1l7.5-7.5c.2-.2.2-.5 0-.7z"></path>
                                        </svg>
                                    </i>
                                </p>
                                <div class="modalAddGuestAudit mt15" id="contactFieldsGroup">
                                    <div class="modalAddGuestAuditFormRow modalAddGuestAuditFormRow--contactInfo modalAddGuestAuditFormRow--columnsx2 mt-3">
										<input id="app-guest-gender" name="Sexo" type="hidden" value="0">
                                        <div class="app-textfield-validate textfield modalAddGuestAuditFormField modalAddGuestAuditFormField--group">
                                            <span class="textfield__label">Choose group</span>
											<select wire:model.defer="group_id" class="textfield__input textfield__input--select" name="group_id" data-redesign="redesign" required>
												<option value="" selected>Select a group</option>
												@foreach($groups as $group)
													<option value="{{ $group->id }}">{{ $group->name }}</option>
												@endforeach
											</select>
                                              @error('group_id') <span class="text-red-500 text-sm">{{ 'Please select a group' }}</span> @enderror
                                        </div>

                                        <div class="modalAddGuestAuditFormField modalAddGuestAuditFormField--rightAlign">
                                            <span class="textfield__label">Need hotel</span>
                                            <div class="input-group-line input-group-line--noMargin">
                                                <label>
                                                    <input type="checkbox" wire:model.defer="needhotel" id="NeedHotel" name="NeedHotel">
                                                    <span></span>
                                                    <span class="ml5">Yes</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Invited to -->
                                    <div class="mb30 mt20">
                                        <span class="textfield__label">Invited to</span>
                                        <div class="pure-g">
                                            @foreach($events as $index => $event)
                                            <div class="pure-u mt10 mr15">
                                                <div class="input-group-line input-group-line--noMargin">
                                                    <label>
                                                        <input
                                                            type="checkbox"
                                                            wire:model.defer="selectedEvents.{{ $event['id'] }}"
                                                            class="app-input-checkbox-event"
                                                            name="events[{{ $event['id'] }}]"
                                                            {{ $loop->first ? 'checked' : '' }}>
                                                        <span></span>
                                                        <span class="ml5">{{ $event['name'] }}</span>
                                                    </label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
								
                                   <footer class="modalAddGuest__footer">
                                        <div class="form-group mb-0 pt-5"><!--<button type="submit" wire:model.defer="submit" data-bs-dismiss="modal" class="w-full inline-flex items-center justify-center rounded-sm border border-black bg-gray-800 px-4 py-2 font-medium text-white hover:text-gray-800 focus:text-gray-800 hover:bg-transparent transition-colors duration-300">Add Guest</button>-->
											<button type="submit" wire:model.defer="submit"  class="w-full inline-flex items-center justify-center rounded-sm border border-black bg-gray-800 px-4 py-2 font-medium text-white hover:text-gray-800 focus:text-gray-800 hover:bg-transparent transition-colors duration-300">Add Guest</button>
                                        </div>
                                    </footer>
                    			</div>
                   
                    <script>
                        document.getElementById('toggleButtonGroup').addEventListener('click', function() {
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
                    <style>
                        .hiddenGroup {
                            display: none;
                        }
                    </style>
                </div>
            </div>
            
           </form>
            {{-- <div class="tab-pane fade" id="send-link" role="tabpanel" aria-labelledby="send-link-tab">
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
                    </div> --}}
        </div>
    </div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const alertElement = document.getElementById('success-alert');
        if (alertElement) {
            setTimeout(() => {
                alertElement.style.display = 'none';
            }, 500); 
        }
    });
	document.addEventListener('livewire:load', function () {
		Livewire.on('validationError', () => {
			// Prevent modal from hiding when validation fails
			const modal = document.getElementById('addGuestModal');
			const modalInstance = new bootstrap.Modal(modal);
			modalInstance.show();
		});
	});
</script>