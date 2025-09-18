<div class="guest-container">
    <h1 class="tools-subtitle">Guest Management</h1>

    <div class="tab-content">
        <?php echo $__env->make('livewire.main.account.guest.overview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>  
</div> 

<style>
     .action-buttons {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border: 1px solid #FFE6B3;
        padding: 40px;
    }

    .btnOutline {
        padding: 10px 15px;
        border: 1px solid #FFE6B3;
        border-radius: 5px;
        background: transparent;
        color: #FF8080;
        font-weight: bold;
        text-decoration: none;
        transition: background 0.3s, color 0.3s;
    }

    .btnOutline:hover {
        background: #FF8080;
        color: white;
    }

    .app-dropdown-layer {
        position: relative;
    }

    .guestsDropdown {
        position: absolute;
        display: none;
        top: 100%;
        left: 0;
        background: white;
        border: 1px solid #e2e6ea;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        z-index: 10;
    }

    .guestsDropdown a {
        padding: 10px 15px;
        display: block;
        color: #333;
        text-decoration: none;
        transition: background 0.3s;
    }

    .guestsDropdown a:hover {
        background: #f7f9fc;
    }

    .dnone {
        display: none;
    }
</style><?php /**PATH C:\xampp\htdocs\freeluncer\resources\views/livewire/main/account/guest/guest.blade.php ENDPATH**/ ?>