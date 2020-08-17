@extends('dashboard.index.index')




@section('content')

    <div class="container">


        <div class="card card-dark mt-5">
            <div class="card-header">
                <h6 class="">{{__('dashboard_layout.create_topic')}}</h6>
            </div>
            <!-- /.card-header -->
            <!-- form start -->


            <form role="form" action="{{route('dashboard.iframe.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <input type="hidden" value="{{$trailer_id}}" name="trailer_id">



                    <div class="form-group">
                        <label for="type">حدد نوع العرض في الواجهة</label>
                        <select class="form-control" id="type" name="type" onchange="selectType()">
                            <option value="">حدد نوع العرض في الواجهة</option>
                            <option value="y">Youtube</option>
                            <option value="t">Twitter</option>
                            <option value="p">Spotify</option>
                        </select>
                    </div>

                    <div class="form-group" id="url_id" style="display: none">
                        <label for="url_id_y">Youtube Url</label>
                        <input type="text" class="form-control" name="url_id" id="url_id_y">
                    </div>

                    <div class="form-group" id="iframe_twitter" style="display: none">
                        <label for="iframe_twitter_l">Embed Iframe</label>
                        <input type="text" class="form-control" id="iframe_twitter_l" name="iframe">
                    </div>


                </div>

                <div class="container mb-3">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">الخطوة التالية</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection



@section('script')
    <script>
        function selectType() {
            let type = document.getElementById('type').value

            if (type == 'y')
            {
                document.getElementById('iframe_twitter').style.display = "none";
                document.getElementById('url_id').style.display = "block";
                document.getElementById('iframe_spotify').style.display = "none";
                document.getElementById('img').style.display = "none";
            }

            if (type == 't')
            {
                document.getElementById('iframe_twitter').style.display = "block";
                document.getElementById('url_id').style.display = "none";
                document.getElementById('iframe_spotify').style.display = "none";
                document.getElementById('img').style.display = "none";
            }

            if (type == 'p')
            {
                document.getElementById('iframe_twitter').style.display = "block";
                document.getElementById('url_id').style.display = "none";
                document.getElementById('iframe_spotify').style.display = "none";
                document.getElementById('img').style.display = "none";
            }
        }


    </script>
@endsection