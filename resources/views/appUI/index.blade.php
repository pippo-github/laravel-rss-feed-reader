@extends('layouts.layout')
@section('title', 'rss feed reader')
@section('contents')
<h1 class='container m-4 mt-5'>

    Welcome to the RSS feed reader

</h1>

<p class='subTitle'>
    Please, select the element for read the article, click it and after press 'Alt' for appear a button to link to contents.
</p>


    @if(count($mySqlRecordSet) > 0)
    
            @foreach ($mySqlRecordSet as $key => $singleRow)

            <div class='card card-body m-2 my_block'  
                 title="press Alt to show the bottna link"
                 id="div_{{ $singleRow['id'] }}"
                 tabindex=" {{ $singleRow['id'] }} " >

                <div>{{ $singleRow["title"] }}</div>
                <div> <a 
                            href={{ $singleRow["link"] }} 
                            target="_blank"
                            class='btn btn-success m-2 my_btn' 
                            id='btn_{{$singleRow["id"]}}'                                                       
                        >  read the article 
                        </a> 
                </div>
                <div> 
                    
                    <small>
                        <b>Published at:</b> <small> <i> {{ $singleRow["pubDate"] }} </i> </small>
                    </small>
                
                </div>                

            </div>
                
            @endforeach

    @endif


@endsection

<script src="{{ asset('js/utilities_js/hideAllBtn.js') }}" ></script>
<script src="{{ asset('js/utilities_js/getKey.js') }}" ></script>
<script src="{{ asset('js/utilities_js/blockEvtCtrl.js') }}"></script>