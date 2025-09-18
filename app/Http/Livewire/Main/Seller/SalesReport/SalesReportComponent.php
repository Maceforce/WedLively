<?php

namespace App\Http\Livewire\Main\Seller\SalesReport;

use App\Models\ConversationMessage;
use App\Models\Gig;
use App\Models\GigVisit;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\UserWithdrawalHistory;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;


class SalesReportComponent extends Component
{
    public $vendor_id;
    public $start_date;
    public $end_date;
    public $location;
    public $salesData;

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


    public function mount()
    {
        $this->vendor_id = auth()->id();
        $this->loadSalesReport($this->vendor_id);
        //$this->salesData = []; 
        
        
            // Calculate net income
            $this->net_income = Order::whereHas('items', function($query) {
                return $query->whereIn('status', ['pending', 'proceeded', 'delivered']);
            })->sum('total_value');
    
            // Calculate income from taxes
            $this->income_from_taxes = Order::sum('taxes_value');
    
            // Calculate income from commission
            $this->income_from_commission = OrderItem::where('is_finished', true)->where('status', 'delivered')->sum('commission_value');
    
            // Caluclate withdrawn money
            $this->withdrawn_money = UserWithdrawalHistory::where('status', 'paid')->sum('amount');
    
            // Calculate total sales
            $this->total_sales = OrderItem::where('status', 'delivered')->where('is_finished', true)->count();
    
            // Calculate total gigs
            $this->total_gigs = Gig::count();
    
            // Caluclate total users
            $this->total_users = User::count();
    
            // Calculate users messages
            $this->total_messages = ConversationMessage::count();

            //die("fggfdg");
    
            // Get visits by countries
            $this->visits_by_countries = GigVisit::whereNotNull('country_code')
                                                ->select('country_code',DB::raw('COUNT(country_code) as count'))
                                                ->groupBy('country_code')
                                                ->orderBy('count', 'desc')
                                                ->get();
    
            // Get latest 10 users
            $this->latest_users = User::latest()->take(10)->get();
    
            // Get top browsers
            $this->browsers  = GigVisit::whereNotNull('browser_name')
                                ->select('browser_name',DB::raw('COUNT(browser_name) as count'))
                                ->groupBy('browser_name')
                                ->orderBy('count', 'desc')
                                ->get();
    
            // Get top os
            $this->os  = GigVisit::whereNotNull('os_name')
                                ->select('os_name',DB::raw('COUNT(os_name) as count'))
                                ->groupBy('os_name')
                                ->orderBy('count', 'desc')
                                ->get();
    
            // Get top devices
            $this->devices  = GigVisit::whereNotNull('device_type')
                                ->select('device_type',DB::raw('COUNT(device_type) as count'))
                                ->groupBy('device_type')
                                ->orderBy('count', 'desc')
                                ->get();





       // echo 'test'; exit;
    }

    public function loadSalesReport()
    {

        $vendor_id = $this->vendor_id = auth()->id();

        $filters = [
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            //'location' => $this->location,
        ];

        $this->salesData = $this->getVendorSalesReport($vendor_id, $filters); // (new \App\Http\Controllers\ReportController)->getVendorSalesReport($this->vendor_id, $filters);
    
    }

    public function getVendorSalesReport($vendor_id, $filters = [])
    {    
      

    //    echo  $this->vendor_id;

    //      die("yyh");

        // $query = Order::query()
        //     ->where('vendor_id', $vendorId)
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

        // if (!empty($filters['location'])) {
        //     $query->where('location', $filters['location']);
        // }

        // return $query->get();

        //echo $this->vendorId;

        $query = Order::whereHas('items', function ($query) use ($vendor_id) {
            $query->where('owner_id', $vendor_id)
                  ->whereIn('status', ['pending', 'proceeded', 'delivered']);
        })
        ->select([
            DB::raw('SUM(total_value) as total_sales'),
            DB::raw('SUM(total_value) as revenue'),
            //'location',
            //'event_name',
            DB::raw('COUNT(*) as total_orders')
        ]);
        //->groupBy('location', 'event_name');
        //->groupBy('location', 'event_name');
        
        // Apply filters
        if (!empty($filters['start_date']) && !empty($filters['end_date'])) {
            $query->whereBetween('placed_at', [$filters['start_date'], $filters['end_date']]);
        }
        
        // if (!empty($filters['location'])) {
        //     $query->where('location', $filters['location']);
        // }
        // echo '<pre>';
        // print_r($query->get());
        // echo '</pre>';
        return $query->get();

        // echo $this->net_income = Order::whereHas('items', function($query) {
        //     return $query->where('owner_id',  $this->vendor_id)->whereIn('status', ['pending', 'proceeded', 'delivered']);
        // })->sum('total_value');
        //die("test");

        //return '';
    }

    public function render()
    {
        // return view('livewire.vendor.sales-report', [
        //     'salesData' => $this->salesData,
        // ])->extends('livewire.admin.layout.app')->section('content'); 

        return view('livewire.main.seller.salesreport.salesreport')->extends('livewire.main.seller.layout.app')->section('content');;
    
    }
}