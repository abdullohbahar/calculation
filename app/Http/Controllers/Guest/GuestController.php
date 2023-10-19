<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function hrCalculation()
    {
        return view('guest.hr-calculation');
    }

    public function resultCalculationHrForm(Request $request)
    {
        $arrQuestion = [];

        for ($i = 1; $i < 11; $i++) {
            $question = $request->input('question' . $i);
            array_push($arrQuestion, $question);
        }

        $countValues = array_count_values($arrQuestion);

        if ($countValues['Ya'] <= 3) {
            $messages = "Ambil tindakan
                        segera. Bisnis Anda berisiko mengalami salah satu atau beberapa
                        hal yang sangat serius.
                    ";
        } else if ($countValues['Ya'] >= 4 && $countValues['Ya'] <= 6) {
            $messages = "
            Diperlukan tindakan
                lebih lanjut. Anda telah menanggung sebagian risiko SDM, namun
                masih banyak area yang perlu Anda tingkatkan sebelum Anda dapat
                yakin bahwa Anda telah sepenuhnya menerapkan pengelolaan HR
                sesuai Undang-Undang Ketenagakerjaan.
            ";
        } else {
            $messages = "
                Anda melakukannya
                dengan baik, namun masih ada ruang untuk ditingkatkan. Beberapa
                permasalahan masih perlu ditangani dan tidak boleh diabaikan.
            ";
        }

        $data = [
            'messages' => $messages,
        ];

        return view('guest.result', $data);
    }

    public function businessCalculation()
    {
        return view('guest.business-calculation');
    }
}
