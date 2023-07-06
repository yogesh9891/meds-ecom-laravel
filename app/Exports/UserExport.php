<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class UserExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
      public function collection()
    {
        return User::select('id','created_at','name','country','mobile','email','password')->get();
    }

         public function headings(): array
    {
	        return [
				'ID No.',
				'Date',
				'Name',
				'Country',
				'Mobile',
				'Email',
				'Password',
		];

	}
}
