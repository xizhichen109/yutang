@extends('layouts.app')

@section('content')
    <div class="container venue_list">
        <div class="row">
            <ul class="type_nav">
                @foreach($types as $type )
                <li><a href="/venue/type/{{$type->id}}">{{$type->name}}</a></li>

                @endforeach
            </ul>
        </div>
        <div class="row">
            <div class="col-md-9">
                @foreach($venues as $venue )

                {{--场馆列表--}}
                <div class="venue_item">
                    <div class="pic"><img src="/images/venue_icon.jpg" alt=""></div>
                    <div class="txt">
                        <h3>{{$venue->name}}</h3>
                        <p>{{$venue->des}}</p>
                        <p>{{$venue->created_at}}  关注</p>
                    </div>
                </div>
                @endforeach
                {{$venues->links()}}

            </div>
            <div class="col-md-3">
                {{--推荐场馆--}}
                <div class="t_box">
                    <h3>最新公告</h3>
                    <hr>
                    <p>网球俱乐部全国锦标赛准备策划中...</p>

                </div>
                <div class="b_box">
                    <h3>推荐场馆 <a class="all" href="#">全部></a></h3>
                    <hr>
                    <img src="/images/menu_icon.jpg" alt="">
                    <p>首亮乒乓球俱乐部</p>

                    <img src="/images/menu_icon.jpg" alt="">
                    <p>首亮乒乓球俱乐部</p>

                    <img src="/images/menu_icon.jpg" alt="">
                    <p>首亮乒乓球俱乐部</p>

                </div>
            </div>
        </div>
    </div>
    @endsection