<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    public function product() {
        return $this->hasOne('App\Models\Products', 'name', 'product_name');
    }

    public function customer() {
        return $this->hasOne('App\Models\Customers', 'full_name', 'customer_name');
    }

    public function employee() {
        return $this->hasOne('App\Models\Employee', 'name', 'sales_person');
    }
}
