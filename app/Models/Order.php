<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'total_amount',
        'subtotal',
        'sales_tax',
        'shipping_fee',
        'payment_method',
        'delivery_address',
        'delivery_option',
        'status',
        'order_date',
        'estimated_delivery_time',
        'notes'
    ];

    protected $casts = [
        'order_date' => 'datetime',
        'estimated_delivery_time' => 'datetime',
        'total_amount' => 'decimal:2',
        'subtotal' => 'decimal:2',
        'sales_tax' => 'decimal:2',
        'shipping_fee' => 'decimal:2',
    ];

    // Relationship with OrderItems
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // Relationship with Student
    public function student()
    {
        return $this->belongsTo(Student::class, 'matric_no', 'matric_no');
    }

    // Relationship with Cafeteria
    public function cafeteria()
    {
        return $this->belongsTo(Cafeteria::class);
    }

    // Order.php

    public function shipping()
    {
        return $this->hasOne(Shipping::class);
    }

}
