@extends('Admin.index')
@section('sectionC')

<div class="container-content_1">
    <div class="page-title">
        <h2 class="section-title__1">{{$provinceList->name}}</h2>
    </div>

    <div class="top-controller">
        <div class="province__header">
            <ul class="province__header-lists">
                <li class="province__header-list">

                    <form class="province__header-link" action="{{route('provart.index')}}" method="get">
                        <button class="button-app-transparent">Article</button>
                        <input name="hid" type="hidden" value="{{$hid}}">
                    </form>
                </li>

                <li class="province__header-list">
                    <a class="province__header-link" href="#">Brochures</a>
                </li>

                <li class="province__header-list">
                    <a class="province__header-link" href="#">Newsletter</a>
                </li>
            </ul>
        </div>

        <div class="province__header">
            <ul class="province__header-lists">
                <li class="province__header-list">
                    <a class="province__header-link" href="#">Event</a>
                </li>

                <li class="province__header-list">
                    <a class="province__header-link" href="#">Attrait touristique</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sub-content-container">
        <div class="table-title__1">
            <h2 class="table-title__2">List of {{$data[0]->category}}</h2>
        </div>
        <table class="province__table">
            <thead class="table-header">
                <tr class="table-header-container">
                    <th  class="table-header-list">id</th>
                    <th class="table-header-list">{{$data[0]->category}}</th>
                    <th class="table-header-list">province</th>
                    <th class="table-header-list">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr class="table-body-container">
                    <td class="table-body-cell">{{$loop->iteration}}</td>
                   <td class="table-body-cell"><a href="">{{$item->entity_name}}</a></td>
                    <td class="table-body-cell">{{$item->province}}</td>
                    <td class="table-body-cell table-body-cell-action">
                        <form action="" method="get">
                            @csrf
                             <button>edit</button>
                        </form>
                        <form action="" method="post">
                            @csrf
                            @method('DELETE')
                            <button>delete</button>
                       </form>
                       <form action="" method="get">
                        @csrf
                        <button>show</button>
                   </form>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
            <tfoot></tfoot>
        </table>

    </div>
</div>
@endsection

{{-- p.name as province','p.id as province_id','d.name as entity_name','d.id as entity_id','da.name as category','da.id as category_id --}}
{{-- ['provinceList'=>$province, 'data' => $data] --}}