
<table class="table">
    <thead><tr>
        <td>Kode Tiket</td>
        <td>Tanggal Masuk</td>
        <td>Subject</td>
        <td>Status</td>
        <td >Urusan</td>
        <td>Pertanyaan</td>
        <td>Penanya</td>
        <td>Jawaban</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td> {{ $item->kode_tiket }} </td>
                <td>{{ $item->created_at }}</td>
                <td> {{ $item->subject }} </td>
                <td> {{ $item->status->code_nm??"" }} </td>
                <td>  <ul>
                    @foreach ($item->urusan as $urus )
                   
                        <li>{{ $urus->nama??"" }}</li>
                    
                    @endforeach
                    </ul>
                </td>
                <td> {!! $item->pertanyaan !!} </td>
                <td> {{ $item->penanya->opd??"-" }}</td>
                <td>{!! $item->jawaban !!}</td>
            </tr>
        @endforeach
    </tbody>
 </table>