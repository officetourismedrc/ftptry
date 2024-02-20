@extends('Admin.index')
@section('sectionC')

<div class="container-content_1">
    <div class="page-title">
        <h2 class="section-title__1"> Article</h2>
    </div>

    <div class="top-controller">
       
        <div class="province__header">
            <ul class="province__header-lists">
                <li class="province__header-list">
                    <a class="province__header-link" href="#">Add new article</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sub-content-container">
        <div class="table-title__1">
            <h2 class="table-title__2">List of {{$data['model']->name}}'s articles</h2>
        </div>
        <table class="province__table">
            <thead class="table-header">
                <tr class="table-header-container">
                    <th  class="table-header-list">.</th>
                    <th  class="table-header-list">id</th>
                    <th class="table-header-list">author</th>
                    <th class="table-header-list">author email</th>
                    <th class="table-header-list">title</th>
                    <th class="table-header-list">qr_code</th>
                    <th class="table-header-list">priority</th>
                    <th class="table-header-list">appear</th>
                    <th class="table-header-list">clicks</th>
                    <th class="table-header-list">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['article'] as $item)
                <tr class="table-body-container">
                    <td class="table-body-cell"><a href="">view</a></td>
                    <td class="table-body-cell">{{$loop->iteration}}</td>
                   <td class="table-body-cell"><a href="">{{$item->author_name}}</a></td>
                    <td class="table-body-cell">{{$item->author_email}}</td>
                    <td class="table-body-cell">{{$item->article_title}}</td>
                    <td class="table-body-cell">{{$item->article_qr_code}}</td>
                    <td class="table-body-cell">
                        @if($item->article_priority === null)
                        not set
                        @else
                        {{$item->article_priority}}
                        @endif
                    </td>
                    <td class="table-body-cell">{{$item->weather_appear_or_not}}</td>
                    <td class="table-body-cell">{{$item->article_click}}</td>
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
