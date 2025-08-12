<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = [
            [
                'title' => 'Skyline Heights - Modern 3BHK Apartment',
                'price' => 12500000,
                'currency' => 'INR',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 1200,
                'address' => 'Sector 62, Noida, Uttar Pradesh, 201301',
                'city'     => 'Noida',
                'state'     => 'Uttar Pradesh',
                'pincode'   => '201301',
                'image_url' => 'property-1.jpg',
                'available_from' => '2024-09-15',
                'status' => 'for_sale'
            ],
            [
                'title' => 'Green Valley Villa - Spacious Family Home',
                'price' => 8500000,
                'currency' => 'INR',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 1500,
                'address' => 'Whitefield, Bangalore, Karnataka, 560066',
                'city'     => 'Bangalore',
                'state'     => 'Karnataka',
                'pincode'   => '560066',
                'image_url' => 'property-2.jpg',
                'available_from' => '2024-08-20',
                'status' => 'for_sale'
            ],
            [
                'title' => 'Ocean View Residency - Premium Beachfront Flat',
                'price' => 18500000,
                'currency' => 'INR',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => 950,
                'address' => 'Marine Drive, Mumbai, Maharashtra, 400002',
                'city'     => 'Mumbai',
                'state'     => 'Maharashtra',
                'pincode'   => '400002',
                'image_url' => 'property-3.jpg',
                'available_from' => '2024-10-01',
                'status' => 'for_sale'
            ],
            [
                'title' => 'Heritage Homes - Traditional Style Apartment',
                'price' => 6750000,
                'currency' => 'INR',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 1100,
                'address' => 'Koramangala, Bangalore, Karnataka, 560095',
                'city'     => 'Bangalore',
                'state'     => 'Karnataka',
                'pincode'   => '560095',
                'image_url' => 'property-4.jpg',
                'available_from' => '2024-08-25',
                'status' => 'for_sale'
            ],
            [
                'title' => 'Rose Garden Complex - Garden View 2BHK',
                'price' => 9200000,
                'currency' => 'INR',
                'bedrooms' => 2,
                'bathrooms' => 2,
                'area' => 850,
                'address' => 'Gurgaon Sector 14, Haryana, 122001',
                'city'     => 'Gurgaon',
                'state'     => 'Haryana',
                'pincode'   => '122001',
                'image_url' => 'property-5.jpg',
                'available_from' => '2024-09-05',
                'status' => 'for_sale'
            ],
            [
                'title' => 'Metro Connect Towers - Near IT Hub',
                'price' => 11000000,
                'currency' => 'INR',
                'bedrooms' => 3,
                'bathrooms' => 3,
                'area' => 1300,
                'address' => 'Hinjewadi, Pune, Maharashtra, 411057',
                'city'     => 'Pune',
                'state'     => 'Maharashtra',
                'pincode'   => '411057',
                'image_url' => 'property-6.jpg',
                'available_from' => '2024-08-30',
                'status' => 'for_sale'
            ],
        ];

        Property::insert($properties);
    }
}
