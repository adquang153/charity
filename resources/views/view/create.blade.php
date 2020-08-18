@extends('view.layouts.base')

@section('content')
<main class="py-5 mt-4">
    
    <section class="my-2 container">
        <h1 class="mb-4">Tạo chiến dịch mới</h1>
        <form method="POST" action="{{route('view.store-campaign')}}" accept-charset="UTF-8" id="campaign-form"
            enctype="multipart/form-data">
            @csrf
            <div class="alert alert-danger" id="error-box" hidden="">
                <ul class="list-unstyled mb-0">
                </ul>
            </div>
            <div class="row">
                <div class="col-md-8 order-2 order-md-1">
                    <div class="embed-responsive embed-responsive-16by9 image-file-com border">
                        <div class="close ">
                            ×
                        </div>
                        <div class="embed-responsive-item d-flex justify-content-center align-items-center text-center">
                            <label for="campaign-cover">
                                <i class="zmdi zmdi-camera zmdi-hc-3x"></i>
                                <div class="">Ảnh đại diện <br>850 x 480 pixel</div>
                            </label> <input accept="image/*" hidden="" id="campaign-cover" name="images" type="file">
                        </div>
                    </div>

                    <div class="form-group mt-3 mb-5">
                        <label for="campaign-embed">Mã nhúng video (không bắt buộc)</label> <textarea
                            id="campaign-description" class="form-control"
                            placeholder="Hỗ trợ mã nhúng có dạng <iframe src='https://www.youtube.com/embed/8Qr9WW2bLAQ' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"
                            rows="3" maxlength="1000" name="video" cols="50">{{old('video')}}</textarea>
                        <small id="campaign-embed-help" class="form-text text-muted"><span
                                class="text-primary font-weight-bold">Tips:</span> Để thực hiện việc lấy mã nhúng bạo
                            vào video Youtube bạn chọn &gt; chọn Chia sẻ &gt; Embeb &gt; Copy mã Nhúng. Hỗ trợ cả mã
                            nhúng của Facebook, Vimeo... và các trang tương tự.</small>
                    </div>
                    <div class="form-group mt-4">
                        <h5>Nội dung chiến dịch*</h5>
                        <textarea name="content" id="" class="form-control" rows="10" required>{{old('content')}}</textarea>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-danger" onclick="window.history.back();">Hủy bỏ</button>
                        <div class="publish-wrap">
                            <button type="submit" class="btn btn-primary">Lưu chiến dịch</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 order-1 order-md-2">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                    <div class="form-group">
                        <label for="campaign-name">Tên chiến dịch*</label> <input id="campaign-name" required=""
                            class="form-control" placeholder="Tên chiến dịch" value="{{old('name')}}" maxlength="255" name="name" type="text">
                    </div>
                    <div class="form-group">
                        <label for="campaign-money">Số tiền mong muốn*</label>
                        <div class="input-group">
                            <input id="campaign-money" required="" min=0 class="form-control" placeholder="Số tiền mong muốn"
                                maxlength="15" value="{{old('amount')}}" name="amount" type="number">
                            <div class="input-group-append">
                                <span class="input-group-text">VNĐ</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="campaign-deadline">Ngày hết hạn*</label>
                        <div class="input-group single-date">
                            <input id="campaign-deadline" type="date" required="" class="form-control" placeholder="Ngày hết hạn"
                                maxlength="255" value="{{old('date_end')}}" name="date_end" type="text">
                            <!-- <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="zmdi zmdi-calendar-alt zmdi-hc-lg"></i>
                                </span>
                            </div> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="campaign-money">Loại chiến dịch*</label>
                        <div class="input-group">
                            <select name="category_id" class="form-control" required>
                                <option value="">-- Chọn loại chiến dịch --</option>
                                @foreach($listCate as $item)
                                <option value="{{$item->id}}" {{old('category_id') == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>Nội dung ngắn*</div>
                        <textarea name="description" id="" maxlength="500" class="form-control" rows="6" required>{{old('description')}}</textarea>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>
@endsection