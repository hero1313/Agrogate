<?php

namespace App\Exports;

use App\Models\Booking;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ServiceBookingExport implements FromCollection, WithHeadings, ShouldAutoSize, WithStyles
{
    
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        $modifiedData = $this->data;

        $rows = collect();
        foreach ($this->data as $booking) {
            $rows->push([
                'ID' => $booking->id,
                'total_price' => $booking->total_price,
                'status' => ($booking->status == 1) ? 'დადასტურებული' : 'დაუდასტურებელი',
                'pay_status' => ($booking->pay_status == 1) ? 'გადახდილი' : 'გადაუხდელი',
                'pay_method' => ($booking->pay_method == 1) ? 'ინვოისი' : 'ქეში',
                'date' => $booking->date,
                'created_at' => $booking->created_at,
            ]);
        }

        return $rows;
    }
     public function headings(): array
    {
        return [
            'Booking ID',
            'Total Price',
            'Status',
            'Pay Status',
            'Pay Method',
            'Date',
            'Created',
        ];
    }
    public function styles(Worksheet $sheet)
    {
        // Apply word wrapping to the 'Products' column
        $sheet->getStyle('B')->getAlignment()->setWrapText(true);

        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
