@extends('dashboard.index.index')




@section('content')


    <div class="container-fluid">
        <br>
        <form action="{{route('dashboard.title.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="first_title"> {{$title->first_title ?? 'من نحن'}}</label>
                <input type="text" name="first_title" class="form-control" value="{{$title->first_title ?? ''}}" id="first_title" placeholder="">
            </div>

            <div class="form-group">
                <label for="second_title">{{$title->second_title ?? 'رسالة قهوة بيتسبرغ'}}</label>
                <input type="text" name="second_title" class="form-control" value="{{$title->second_title ?? ''}}" id="second_title" placeholder="">
            </div>

            <div class="form-group">

                <label for="third_title">{{$title->third_title ?? 'هدف قهوة بيتسبرغ'}}</label>
                <input type="text" name="third_title" class="form-control" value="{{$title->third_title ?? ''}}" id="third_title" placeholder="">
            </div>

            <div class="form-group">
                <label for="count_title">{{$title->count_title ?? 'عدداللقاءات الحاصلة'}}</label>
                <input type="text" name="count_title" class="form-control" value="{{$title->count_title ?? ''}}" id="count_title" placeholder="">
            </div>

            <div class="form-group">
                <label for="subscribe_title">{{$title->subscribe_title ?? 'مشترك'}}</label>
                <input type="text" name="subscribe_title" class="form-control" value="{{$title->subscribe_title ?? ''}}" id="subscribe_title" placeholder="">
            </div>

            <div class="form-group">
                <label for="meeting_title">{{$title->meeting_title ?? 'لقاء'}}</label>
                <input type="text" name="meeting_title" class="form-control" value="{{$title->meeting_title ?? ''}}" id="meeting_title" placeholder="">
            </div>

            <div class="form-group">
                <label for="volunteer">{{$title->volunteer ?? 'المتطوعون'}}</label>
                <input type="text" name="volunteer" class="form-control" value="{{$title->volunteer ?? ''}}" id="volunteer" placeholder="">
            </div>

            <div class="form-group">
                <label for="success">{{$title->success ?? 'شركاء النجاح'}}</label>
                <input type="text" name="success" class="form-control" value="{{$title->success ?? ''}}" id="success" placeholder="">
            </div>

            <button type="submit" class="btn btn-primary">حفظ</button>

        </form>
        <br/><br/>
    </div>







@endsection
