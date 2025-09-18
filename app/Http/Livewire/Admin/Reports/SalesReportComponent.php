<?php

namespace App\Http\Livewire\Admin\Reports;


use App\Models\User;
use Livewire\Component;
use WireUi\Traits\Actions;
use App\Models\ReportedUser;
use Livewire\WithPagination;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

use App\Models\Order;
use Illuminate\Support\Facades\DB;

use App\Models\ConversationMessage;
use App\Models\Gig;
use App\Models\GigVisit;
use App\Models\OrderItem;
use App\Models\UserWithdrawalHistory;

class SalesReportComponent extends Component
{
    use WithPagination, SEOToolsTrait, Actions;

    public $start_date;
    public $end_date;
    public $vendor_category;
    public $location;
    public $salesData;
    public $vendor_id;

    use SEOToolsTrait;

    public $net_income;
    public $income_from_taxes;
    public $income_from_commission;
    public $withdrawn_money;
    public $total_sales;
    public $total_gigs;
    public $total_users;
    public $total_messages;
    public $visits_by_countries;
    public $latest_users;
    public $browsers;
    public $os;
    public $devices;

    /**
     * Init component
     *
     * @return void
     */
    public function mount()
    {
        //echo 'hey!!'; die("test");
        // Mark new reports as seen
        // ReportedUser::where('is_seen', false)->update([
        //     'is_seen' => true
        // ]);

        $this->salesData = [];

        $this->vendor_id = auth()->id();
        $this->loadSalesReport();
    }

    public function loadSalesReport()
    {
        $filters = [
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'vendor_category' => $this->vendor_category,
            'location' => $this->location,
        ];      
        $this->salesData = $this->getAdminSalesReport($filters);
    }


    public function getAdminSalesReport($filters = [])
    {
        // $query = Order::query()
        //     ->select([
        //         DB::raw('SUM(total) as total_sales'),
        //         DB::raw('SUM(amount_paid) as revenue'),
        //         'location',
        //         'event_name',
        //         DB::raw('COUNT(*) as total_orders')
        //     ])
        //     ->groupBy('location', 'event_name');

        // // Apply filters
        // if (!empty($filters['start_date']) && !empty($filters['end_date'])) {
        //     $query->whereBetween('created_at', [$filters['start_date'], $filters['end_date']]);
        // }

        // if (!empty($filters['vendor_category'])) {
        //     $query->whereHas('vendor', function ($q) use ($filters) {
        //         $q->where('category_id', $filters['vendor_category']);
        //     });
        // }

        // if (!empty($filters['location'])) {
        //     $query->where('location', $filters['location']);
        // }

        // return $query->get();

        $query = Order::query()
        ->select([
            DB::raw('SUM(total_value) as total_sales'),
            DB::raw('SUM(total_value) as revenue'),
            //'location',
            //'event_name',
            DB::raw('COUNT(*) as total_orders')
        ]);

        // Apply filters
        if (!empty($filters['start_date']) && !empty($filters['end_date'])) {
            $query->whereBetween('placed_at', [$filters['start_date'], $filters['end_date']]);
        }

        if (!empty($filters['vendor_category'])) {
            $query->whereHas('vendor', function ($q) use ($filters) {
                $q->where('category_id', $filters['vendor_category']);
            });
        }

        if (!empty($filters['location'])) {
            $query->where('location', $filters['location']);
        }

        // Group by location and event_name
        //$query->groupBy('location', 'event_name');

        return $query->get();

    }

    /**
     * Render component
     *
     * @return Illuminate\View\View
     */
    public function render()
    {
        // Seo
        //$this->seo()->setTitle( setSeoTitle(__('messages.t_reported_users'), true) );
        //$this->seo()->setDescription( settings('seo')->description );

        return view('livewire.admin.reports.salesreports', [
            'salesData' => $this->salesData,
        ])->extends('livewire.admin.layout.app')->section('content');
    }


    /**
     * Get list of reports
     *
     * @return object
     */
    public function getReportsProperty()
    {
        return ReportedUser::latest()->paginate(42);
    }


    /**
     * Ban user
     *
     * @param integer $id
     * @return void
     */
    public function ban($id)
    {
        // Get report
        $report = ReportedUser::where('id', $id)->firstOrFail();

        // Ban user
        User::where('id', $report->reported_id)->update([
            'status' => 'banned'
        ]);

        // Success
        $this->notification([
            'title'       => __('messages.t_success'),
            'description' => __('messages.t_user_has_been_banned_success'),
            'icon'        => 'success'
        ]);
    }


    /**
     * Delete report
     *
     * @param integer $id
     * @return void
     */
    public function delete($id)
    {
        // Delete report
        ReportedUser::where('id', $id)->delete();

        // Success
        $this->notification([
            'title'       => __('messages.t_success'),
            'description' => __('messages.t_report_has_been_successfully_deleted'),
            'icon'        => 'success'
        ]);
    }
    
}
