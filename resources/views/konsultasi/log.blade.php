@extends('layouts.app')
@section('content')
<main class="page-content">
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Log Konsultasi</h6>
                    <hr/>
                        

                    <div class="container py-2">

                        @foreach ($data as $index => $list)
                            @if(($index+1) % 2 == 0)
                            <div class="row g-0">
								<div class="col-sm">
									<!--spacer-->
								</div>
								<!-- timeline item 1 center dot -->
								<div class="col-sm-1 text-center flex-column d-none d-sm-flex">
									<div class="row h-50">
										<div class="col">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
									<h5 class="m-2"><span class="badge rounded-pill @if($index == 0) bg-primary @else bg-light border @endif ">&nbsp;</span>
								</h5>
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								</div>
								<!-- timeline item 1 event content -->
								<div class="col-sm py-2">
									<div class="card radius-15">
										<div class="card-body">
											<div class="float-end @if($index == 0) text-primary @else text-muted @endif small">
                                            {{ \Carbon\Carbon::createFromTimeStamp(strtotime($list->created_at))->isoFormat('D MMMM Y') 
                                            }}
                                            {{ \Carbon\Carbon::createFromTimeStamp(strtotime($list->created_at))->format('H:i').' WIB'
                                            }}
                                            </div>
											<h4 class="card-title @if($index == 0) text-primary @lese text-muted @endif">{{$list->nama->name??""}}</h4>
                                            @if($list->tiket_status_st == 'TIKET_STATUS_ST_01')
                                            <span class="badge bg-success">{{$list->status->code_nm}}</span>
                                            @else
                                            <span class="badge bg-danger mb-1">{{$list->status->code_nm}}</span>
                                            @endif
											<p class="card-text">{{$list->keterangan??''}}</p>
										</div>
									</div>
								</div>
							</div>
                            @else
                            <div class="row g-0">
								<div class="col-sm py-2">
									<div class="card border-primary shadow radius-15">
										<div class="card-body">
											<div class="float-end @if($index == 0) text-primary @endif small">
                                            {{ \Carbon\Carbon::createFromTimeStamp(strtotime($list->created_at))->isoFormat('D MMMM Y') 
                                            }}
                                            {{ \Carbon\Carbon::createFromTimeStamp(strtotime($list->created_at))->format('H:i').' WIB'
                                            }}
                                            </div>
											<h4 class="card-title @if($index == 0) text-primary @lese text-muted @endif">{{$list->nama->name??""}}</h4>
                                            @if($list->tiket_status_st == 'TIKET_STATUS_ST_01')
                                            <span class="badge bg-success">{{$list->status->code_nm}}</span>
                                            @else
                                            <span class="badge bg-danger mb-1">{{$list->status->code_nm}}</span>
                                            @endif
											<p class="card-text">{{$list->keterangan??''}}</p>
										</div>
									</div>
								</div>
								<div class="col-sm-1 text-center flex-column d-none d-sm-flex">
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
									<h5 class="m-2">
									<span class="badge rounded-pill @if($index == 0) bg-primary @else bg-light border @endif ">&nbsp;</span>
								</h5>
									<div class="row h-50">
										<div class="col border-end">&nbsp;</div>
										<div class="col">&nbsp;</div>
									</div>
								</div>
								<div class="col-sm">
									<!--spacer-->
								</div>
							</div>
                            @endif
                        
                        @endforeach
                        
                    </div>

					<div class="row">
						<label class="col-sm-3 col-form-label"></label>
						<div class="col-sm-12 text-end">
							<a href="{{ url()->previous() }}" class="px-5 btn btn-secondary">Kembali</a>
						</div>
					</div>


                    </div>
                </div>
           </div>
        </div>
    </div>
</main>
@endsection