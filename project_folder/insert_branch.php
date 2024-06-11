<?php

require '../../vendor/autoload.php';

use Medoo\Medoo;

require 'database.php';

   // Insert branch details
   $branch_details = [
    [
        'branch_name' => 'madurai_garage',
        'branch_phone' => '1234567890',
        'branch_email' => 'madurai@gmail.com',
        'branch_tax_id' => 'TX123',
        'branch_invoice' => 'INV001',
        'branch_id' => 'MDU001'
    ],
    [
        'branch_name' => 'Chennai_garage',
        'branch_phone' => '0987654321',
        'branch_email' => 'chennai@gmail.com',
        'branch_tax_id' => 'TX124',
        'branch_invoice' => 'INV002',
        'branch_id' => 'CHE001'
    ],
    [
        'branch_name' => 'bangalore_garage',
        'branch_phone' => '1122334455',
        'branch_email' => 'bangalore@gmail.com',
        'branch_tax_id' => 'TX125',
        'branch_invoice' => 'INV003',
        'branch_id' => 'BLR001'
    ],
    [
        'branch_name' => 'hyderabad_garage',
        'branch_phone' => '2233445566',
        'branch_email' => 'hyderabad@gmail.com',
        'branch_tax_id' => 'TX126',
        'branch_invoice' => 'INV004',
        'branch_id' => 'HYD001'
    ]
];

$database->insert('branch_details', $branch_details);

echo "Data inserted successfully";

