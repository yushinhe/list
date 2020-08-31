@extends('layouts.AssetSys')
@section('content')

    <h2 class="text-center mb-4">資產管理作業規範</h2>
<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    一、目的
                </button>
            </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
                為了解各單位財物管理現況及所保管使用之財產有無毀損減失，有必要建立財物盤點制度、執行財物盤點，以利財物管理，特制定本作業規範。
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    二、說明
                </button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
                (一)一般原則 <br>
                1. 本公司財物管理及使用單位對所保管財產，應注意保養及整理，不得損毀、棄置。 <br>
                2. 財產由管理及使用單位隨時盤查，每一會計年度至少實施盤點一次，並應做成盤點紀錄，以確保財物安全。 <br>
                3. 本公司之財物，董事長認為必要時，得隨時派員抽查或盤點。 <br>
                4. 財物之抽查或盤點，各單位應指派專人配合作業。 <br>
                (二)注意事項 <br>
                1. 財物盤點後，如發現有損毀者，應及時查明原因，基肇因於保管人或使用人之過失者，保管人或使用人應負賠償責任。其因意外事故或為正常使用自然毀損者，應依規定手續辦理財物報廢或報損。 <br>
                2. 如有盤盈或盤虧，應分別查明原因，並依規定辦理財物增減之登記。 <br>
        

            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    三、作業流程說明
                </button>
            </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
                資產經營管理草擬盤點計畫（包括盤點範圍、盤點作業流程）同時繕印盤點資料→陳核→通知各單位盤點開始→各單位財物保管人自行按計畫初盤→盤點資料整理→盤盈或盤虧處理→資料陳核→結束。
            </div>
        </div>
    </div>
</div>
<p class="text-right mt-3">2020/8/31</p>
@endsection