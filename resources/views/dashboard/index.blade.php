@extends('layouts/app')
@section('content')
<!--start content-->
<main class="page-content">
	<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
		<div class="col">
			<div class="card rounded-4">
			  	<div class="card-body">
					<div class="d-flex align-items-center">
						<div class="">
							<p class="mb-1">Total Tiket</p>
							@if (auth()->user()->hasRole('irban'))
								@if(auth()->user()->email == 'irban1@wonosobokab.go.id')
									<h4 class="mb-0">{{ $data['total_irban1'] }}</h4>
								@elseif(auth()->user()->email == 'irban2@wonosobokab.go.id')
									<h4 class="mb-0">{{ $data['total_irban2'] }}</h4>
								@elseif(auth()->user()->email == 'irban3@wonosobokab.go.id')
									<h4 class="mb-0">{{ $data['total_irban3'] }}</h4>
								@elseif(auth()->user()->email == 'irban4@wonosobokab.go.id')
									<h4 class="mb-0">{{ $data['total_irban4'] }}</h4>
								@elseif(auth()->user()->email == 'irban5@wonosobokab.go.id')
									<h4 class="mb-0">{{ $data['total_irban5'] }}</h4>
								@endif
							@elseif(auth()->user()->hasRole(['admin', 'sekretaris', 'inspektur']))
								<h4 class="mb-0">{{ $data['total'] }}</h4>
							@elseif(auth()->user()->hasRole('opd'))
								<h4 class="mb-0">{{ $data['total2'] }}</h4>
							@endif
						</div>
						<div class="text-white ms-auto widget-icon bg-primary">
							<i class="fadeIn animated bx bx-book-bookmark"></i>
						</div>
					</div>
			  	</div>
			</div>
		</div>
		@if (auth()->user()->hasRole('irban'))
			@if(auth()->user()->email == 'irban1@wonosobokab.go.id')
				@foreach ($data['tiket_irban1'] as $index => $item )
				<div class="col">
					<div class="card rounded-4">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="">
									<p class="mb-1">{{ $item->nama }}</p>
									<h4 class="mb-0">{{ $item->jumlah }}</h4>
							
								</div>
								<div class="ms-auto widget-icon bg-{{ $data['bg'][$index] }} text-white">
									<i class="fadeIn animated bx {{ $data['icon'][$index] }}"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			@elseif(auth()->user()->email == 'irban2@wonosobokab.go.id')
				@foreach ($data['tiket_irban2'] as $index => $item )
				<div class="col">
					<div class="card rounded-4">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="">
									<p class="mb-1">{{ $item->nama }}</p>
									<h4 class="mb-0">{{ $item->jumlah }}</h4>
							
								</div>
								<div class="ms-auto widget-icon bg-{{ $data['bg'][$index] }} text-white">
									<i class="fadeIn animated bx {{ $data['icon'][$index] }}"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			@elseif(auth()->user()->email == 'irban3@wonosobokab.go.id')
				@foreach ($data['tiket_irban3'] as $index => $item )
				<div class="col">
					<div class="card rounded-4">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="">
									<p class="mb-1">{{ $item->nama }}</p>
									<h4 class="mb-0">{{ $item->jumlah }}</h4>
							
								</div>
								<div class="ms-auto widget-icon bg-{{ $data['bg'][$index] }} text-white">
									<i class="fadeIn animated bx {{ $data['icon'][$index] }}"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			@elseif(auth()->user()->email == 'irban4@wonosobokab.go.id')
				@foreach ($data['tiket_irban4'] as $index => $item )
				<div class="col">
					<div class="card rounded-4">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="">
									<p class="mb-1">{{ $item->nama }}</p>
									<h4 class="mb-0">{{ $item->jumlah }}</h4>
							
								</div>
								<div class="ms-auto widget-icon bg-{{ $data['bg'][$index] }} text-white">
									<i class="fadeIn animated bx {{ $data['icon'][$index] }}"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			@elseif(auth()->user()->email == 'irban5@wonosobokab.go.id')
				@foreach ($data['tiket_irban5'] as $index => $item )
				<div class="col">
					<div class="card rounded-4">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="">
									<p class="mb-1">{{ $item->nama }}</p>
									<h4 class="mb-0">{{ $item->jumlah }}</h4>
							
								</div>
								<div class="ms-auto widget-icon bg-{{ $data['bg'][$index] }} text-white">
									<i class="fadeIn animated bx {{ $data['icon'][$index] }}"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			@endif
		@elseif(auth()->user()->hasRole(['admin', 'sekretaris', 'inspektur']))
			@foreach ($data['tiket'] as $index => $item )
			<div class="col">
				<div class="card rounded-4">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div class="">
								<p class="mb-1">{{ $item->nama }}</p>
								<h4 class="mb-0">{{ $item->jumlah }}</h4>
						
							</div>
							<div class="ms-auto widget-icon bg-{{ $data['bg'][$index] }} text-white">
								<i class="fadeIn animated bx {{ $data['icon'][$index] }}"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		@elseif(auth()->user()->hasRole('opd'))
			@foreach ($data['tiket2'] as $index => $item )
			<div class="col">
				<div class="card rounded-4">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div class="">
								<p class="mb-1">{{ $item->nama }}</p>
								<h4 class="mb-0">{{ $item->jumlah }}</h4>
						
							</div>
							<div class="ms-auto widget-icon bg-{{ $data['bg'][$index] }} text-white">
								<i class="fadeIn animated bx {{ $data['icon'][$index] }}"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		@endif

</main>
<!--end page main-->
@endsection