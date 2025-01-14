<?php

namespace App\Imports;

use App\Models\Mark;
use App\Models\Item;
use App\Models\Transaction;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Str;
//use Maatwebsite\Excel\Concerns\Importable;

class MarkImport implements ToCollection
{
    //  use Importable;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(collection $rows)
    {
        // dd($rows);
        $gtin = Str::substr($rows[0][0], 3, 13);
        //dd($gtin);

        $item = Item::where('gtin', $gtin)->first();
        if ($item == null) {
            
        } else {
            //dd($item);
            $trans = Transaction::create();
            foreach ($rows as $row) {
                //dd($row[0]);
                Mark::upsert(
                    [
                        [
                            'transaction_id' => $trans->id,
                            'item_id' => $item->id,
                            'value' => $row[0]
                        ]
                    ],
                    ['value'],
                    ['value']

                );
            }
        }
    }
}
