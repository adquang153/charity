@extends('view.layouts.base')

@section('css')
<link rel="stylesheet" href="{{asset('css/detail.css')}}">
@endsection

@section('content')
<main class="main detail">
    <div class="container">
        <section id="campaign-top-header">
            <div class="row">
                <div class="col-lg-10">
                    <div class="media">
                        <div class="media-body">
                            <h1 class="mt-0 font-weight-normal">{{$data->name}}</h1>
                            <p class="mb-1 text-secondary">{{$data->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <ul class="nav nav-pills mt-4" role="tablist">
            <li class="nav-item">
                <a class=" nav-link active" data-toggle="pill" href="#content">Nội dung</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#lists">Danh sách ủng hộ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#comments">Bình luận</a>
            </li>
            <li class="nav-item">
                <a class="nav-link creator-main" data-toggle="pill" href="#creator">Chủ chiến dịch</a>
            </li>
        </ul>
        <hr class="hr-top">

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="content" class="container tab-pane active"><br>
                <article>
                    <div class="row">
                        <div class="col-lg-8">
                            @if($data->images)
                            <div class="embed-responsive embed-responsive-16by9 campaign-style1 no-shadow mb-3 mb-md-0">
                                <img class="embed-responsive-item" src="{{asset($data->images)}}">
                            </div>
                            @endif
                            @if($data->video)
                            <div class="embed-responsive embed-responsive-16by9 campaign-style1 no-shadow mb-3 mb-md-0">
                                {!! $data->video !!}
                            </div>
                            @endif
                        </div>
                        <div class="col-lg-4">
                            <div class=" d-flex flex-column align-items-start  bg-light p-3 h-100">
                                <div class="w-100">
                                    <div class="campagin-progress">
                                        <div class="d-flex justify-content-between align-items-end">
                                            <?php $perCent = ($data->price_total / $data->amount) *100 ?>
                                            <h4 class="text-primary mb-0 h3">{{number_format($data->price_total)}} đ
                                                <small>({{ number_format($perCent,2,'.',"") }}%)</small></h4>
                                            <span>{{number_format($data->amount)}} đ</span>
                                        </div>
                                        <div class="progress my-2">
                                            <div class="progress-bar" style="width: {{$perCent}}%" role="progressbar"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div class="user-count">
                                                <strong>1</strong> người ủng hộ
                                            </div>
                                            <div class="user-count">
                                                {{ (new Carbon\Carbon($data->date_end))->diffForHumans()}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <a href="https://kindmate.net/donate/1395"
                                            class="btn btn-danger btn-lg btn-block">Ủng hộ ngay</a>
                                        <div class="divider"></div>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"
                                          target="_blank"  class="btn btn-default btn-lg bg-white btn-block mt-3 border">Chia sẻ ngay</a>

                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div class="small">
                                        <div class="hints">Tips: Bạn có biết, mỗi lượt chia sẻ của bạn có thể mang lại 2 lượt ủng hộ từ bạn bè.</div>
                                    </div>
                                </div>
                                <hr>
                                <div class="mt-auto w-100">
                                    <div class="small text-secondary mb-1">
                                        CHỦ CHIẾN DỊCH
                                    </div>
                                    <div class="media align-items-center">
                                        <img width="50" class="mr-2 avatar "
                                            src="{{ asset($data->user->avatar ?? 'images/user.png') }}"
                                            alt="The Kapusta">
                                        <div class="media-body">
                                            <p class="dotdotdot mb-0">{{$data->user->name}}</p>
                                            <div class="campaign-summary">
                                                <a data-toggle="pill" href="#creator"
                                                    class="small change-tab-to-creator">Xem thông tin</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <div class="row mt-4">
                    <div class="col-lg-8">
                        <div class="campaign-content mt-2 pt-1 border-top">
                            <div id="campaign-content">
                                <h3 class="my-3 font-weight-bold h3">Nội dung chiến dịch</h3>
                                <div class="content-campaign">
                                    {!! $data->content !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="lists" class="container tab-pane fade"><br>
                <div class="row mt-4">
                    <div class="col-lg-8">
                        <div class="donate-content mt-4">
                            <h3 class="mb-3">1 người ủng hộ</h3>
                            <div class="my-3">
                                <table class="table table-block">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <img src="https://kindmate.net/svg/transfer.svg"
                                                        alt="kindmate-payment-type">
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-1">Ẩn Danh</h6>
                                                        <p class="mb-1">Chúc Dự án The Kapusta sẽ thành công trong
                                                            các hoạt
                                                            động sắp tới.</p>
                                                        <p class="small text-secondary mb-0">
                                                            KM012378 - Chuyển khoản - 5 ngày trước
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right ">
                                                <strong class="text-primary white-space">500,000 VNĐ</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class=" d-flex flex-column align-items-start  bg-light p-3 h-100">
                            <div class="w-100">
                                <div class="campagin-progress">
                                    <div class="d-flex justify-content-between align-items-end">
                                        <h4 class="text-primary mb-0 h3">500,000 đ
                                            <small>(2%)</small></h4>
                                        <span>30 tr đ</span>
                                    </div>
                                    <div class="progress my-2">
                                        <div class="progress-bar" style="width: 2%" role="progressbar"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="user-count">
                                            <strong>1</strong> người ủng hộ
                                        </div>
                                        <div class="user-count">
                                            Còn lại 356 ngày
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4">
                                    <a href="https://kindmate.net/donate/1395"
                                        class="btn btn-danger btn-lg btn-block">Ủng hộ ngay</a>
                                    <div class="divider"></div>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://kindmate.net/project/1395/the-kapusta"
                                        class="btn btn-default btn-lg bg-white btn-block mt-3">Chia sẻ ngay</a>

                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="small">
                                    <div class="hints">Tips: Bạn có biết, mỗi lượt chia sẻ của bạn có thể mang
                                        lại 2
                                        lượt ủng hộ từ bạn bè.</div>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://kindmate.net/project/1395/the-kapusta"
                                        class="text-info mt-1">
                                        <i class="zmdi zmdi-facebook mr-1"></i> Chia sẻ ngay
                                    </a>
                                </div>
                            </div>
                            <div class="mt-auto w-100">
                                <div class="small text-secondary mb-1">
                                    ĐƠN VỊ TỔ CHỨC
                                </div>
                                <div class="media align-items-center">
                                </div>
                            </div>
                            <hr>
                            <div class="mt-auto w-100">
                                <div class="small text-secondary mb-1">
                                    CHỦ CHIẾN DỊCH
                                </div>
                                <div class="media align-items-center">
                                    <img width="50" class="mr-2 avatar "
                                        src="https://kindmate.net/Uploads/2020/08/03/5f2819f599ef5-kapusta-a--nh-ava.jpg"
                                        alt="The Kapusta">
                                    <div class="media-body">
                                        <p class="dotdotdot mb-0">The Kapusta</p>
                                        <div class="campaign-summary">
                                            <a data-toggle="pill" href="#creator"
                                                class="small change-tab-to-creator">Xem thông tin</a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="comments" class="container tab-pane fade">
                <article class="campaign-style3">
                    <div class="row">
                        <div class="col-lg-8">

                            <div class="donate-content pt-4" id="comments">
                                <h3 class="mb-3">Bình luận</h3>
                                <div class="k-comments">
                                    <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop"
                                        data-href="https://kindmate.net/project/1404/trai-he-giao-duc-be-khoe-be-ngoan"
                                        data-numposts="10" data-width="100%" fb-xfbml-state="rendered"
                                        fb-iframe-plugin-query="app_id=1407210996040164&amp;container_width=770&amp;height=100&amp;href=https%3A%2F%2Fkindmate.net%2Fproject%2F1404%2Ftrai-he-giao-duc-be-khoe-be-ngoan&amp;locale=en_US&amp;numposts=10&amp;sdk=joey&amp;version=v2.8&amp;width="
                                        style="width: 100%;"><span
                                            style="vertical-align: bottom; width: 100%; height: 178px;"><iframe
                                                name="f1dc8f8a193a234" width="1000px" height="100px"
                                                data-testid="fb:comments Facebook Social Plugin"
                                                title="fb:comments Facebook Social Plugin" frameborder="0"
                                                allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                allow="encrypted-media"
                                                src="https://www.facebook.com/v2.8/plugins/comments.php?app_id=1407210996040164&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df22f33424003434%26domain%3Dkindmate.net%26origin%3Dhttps%253A%252F%252Fkindmate.net%252Ff3bc6a73dffe75c%26relation%3Dparent.parent&amp;container_width=770&amp;height=100&amp;href=https%3A%2F%2Fkindmate.net%2Fproject%2F1404%2Ftrai-he-giao-duc-be-khoe-be-ngoan&amp;locale=en_US&amp;numposts=10&amp;sdk=joey&amp;version=v2.8&amp;width="
                                                style="border: none; visibility: visible; width: 100%; height: 178px;"
                                                class=""></iframe></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class=" d-flex flex-column align-items-start  bg-light p-3">
                                <div class=" d-flex flex-column align-items-start  bg-light p-3 h-100">
                                    <div class="w-100">
                                        <div class="campagin-progress">
                                            <div class="d-flex justify-content-between align-items-end">
                                                <h4 class="text-primary mb-0 h3">20,000 đ
                                                    <small>(0%)</small></h4>
                                                <span>5 tr đ</span>
                                            </div>
                                            <div class="progress my-2">
                                                <div class="progress-bar" style="width: 0%" role="progressbar"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="user-count">
                                                    <strong>1</strong> người ủng hộ
                                                </div>
                                                <div class="user-count">
                                                    Hết hạn vào 11/08/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-4">
                                            <a href="https://kindmate.net/donate/1404"
                                                class="btn btn-danger btn-lg btn-block">Ủng hộ ngay</a>
                                            <div class="divider"></div>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://kindmate.net/project/1404/trai-he-giao-duc-be-khoe-be-ngoan"
                                                class="btn btn-default btn-lg bg-white btn-block mt-3">Chia sẻ
                                                ngay</a>

                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small">
                                            <div class="hints">Tips: Bạn có biết, mỗi lượt chia sẻ của bạn có thể
                                                mang lại 2 lượt ủng hộ từ bạn bè.</div>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://kindmate.net/project/1404/trai-he-giao-duc-be-khoe-be-ngoan"
                                                class="text-info mt-1">
                                                <i class="zmdi zmdi-facebook mr-1"></i> Chia sẻ ngay
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-auto w-100">
                                        <div class="small text-secondary mb-1">
                                            ĐƠN VỊ TỔ CHỨC
                                        </div>
                                        <div class="media align-items-center">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mt-auto w-100">
                                        <div class="small text-secondary mb-1">
                                            CHỦ CHIẾN DỊCH
                                        </div>
                                        <div class="media align-items-center">
                                            <img width="50" class="mr-2 avatar "
                                                src="https://kindmate.net/images/user-avatar.png"
                                                alt="CLB tình nguyện Bé Khỏe Bé Ngoan">
                                            <div class="media-body">
                                                <p class="dotdotdot mb-0">CLB tình nguyện Bé Khỏe Bé Ngoan</p>
                                                <div class="campaign-summary">
                                                    <a data-toggle="pill" href="#creator"
                                                        class="small change-tab-to-creator">Xem thông tin</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div id="creator" class="container tab-pane fade"><br>
                <article class="campaign-style3">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="donate-content mt-4">
                                <h3 class="mb-3">
                                    Thông tin chủ chiến dịch
                                </h3>
                                <div class="my-3">
                                    <ul class="list-unstyled">
                                        <li class="media mb-3">
                                            <div class="embed-responsive embed-responsive-16by9 mr-3"
                                                style="width: 170px">
                                                <img class="embed-responsive-item rounded"
                                                    src="https://kindmate.net/images/user-avatar.png">
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-2">CLB tình nguyện Bé Khỏe Bé Ngoan</h6>
                                                <p class="text-secondary mb-1 figure-caption ">
                                                    Email: quanghuy850@gmail.com</p>
                                                <p class="text-secondary mb-1 figure-caption ">
                                                    Phone: 0365759257</p>

                                            </div>
                                        </li>
                                    </ul>
                                    <div class="mt-3 text-center">
                                    </div>
                                </div>
                            </div>


                            <div class="col-xs-6">
                                <p class="lead">Các chiến dịch đã thực hiện</p>
                                <div class="table-responsive">
                                    <table class="table table-block">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="media">
                                                        <img src="https://kindmate.net/Uploads/2020/08/08/5f2e2c95a031d-cover.jpg"
                                                            alt="" style="width: 100px">
                                                        <div class="media-body ml-3">
                                                            <a class="mb-1"
                                                                href="https://kindmate.net/project/1404/view"
                                                                style="color: black;font-weight: bold;">TRẠI HÈ GIÁO
                                                                DỤC BÉ KHỎE BÉ NGOAN</a>
                                                            <p class="mb-1">Dự án đem đến những kiến thức y khoa cơ
                                                                bản, giúp các bệnh nhi tại bệnh viện Nhi Đồng 1 và
                                                                Nhi Đồng 2 có thể hiểu và tự chăm sóc bản thân....
                                                            </p>
                                                            <p class="small text-secondary mb-0">
                                                                Hết hạn vào 11/08/2020





                                                            </p>
                                                        </div>
                                                        <div class="modal fade in" id="info-0"
                                                            style="padding-right: 17px;">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Thông tin đã xác
                                                                            minh về chiến dịch</h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span
                                                                                aria-hidden="true">×</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th style="width:50%">Tên:
                                                                                        </th>
                                                                                        <td>DUONG QUANG HUY</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>Số chứng minh nhân dân:
                                                                                        </th>
                                                                                        <td>206296453</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>Địa chỉ:</th>
                                                                                        <td>QUẢNG NAM</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th>Số điện thoại:</th>
                                                                                        <td>0365759257</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-default pull-left"
                                                                            data-dismiss="modal">Đóng
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right ">
                                                    <strong class="text-primary white-space">20,000
                                                        /5,000,000 VND</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="donate-content mt-4 border-top pt-4" id="comments">
                                <h3 class="mb-3">Bình luận</h3>
                                <div class="k-comments">
                                    <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid_desktop"
                                        data-href="https://kindmate.net/project/1404/trai-he-giao-duc-be-khoe-be-ngoan"
                                        data-numposts="10" data-width="100%" fb-xfbml-state="rendered"
                                        fb-iframe-plugin-query="app_id=1407210996040164&amp;container_width=770&amp;height=100&amp;href=https%3A%2F%2Fkindmate.net%2Fproject%2F1404%2Ftrai-he-giao-duc-be-khoe-be-ngoan&amp;locale=en_US&amp;numposts=10&amp;sdk=joey&amp;version=v2.8&amp;width="
                                        style="width: 100%;"><span
                                            style="vertical-align: bottom; width: 100%; height: 178px;"><iframe
                                                name="f1dc8f8a193a234" width="1000px" height="100px"
                                                data-testid="fb:comments Facebook Social Plugin"
                                                title="fb:comments Facebook Social Plugin" frameborder="0"
                                                allowtransparency="true" allowfullscreen="true" scrolling="no"
                                                allow="encrypted-media"
                                                src="https://www.facebook.com/v2.8/plugins/comments.php?app_id=1407210996040164&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df22f33424003434%26domain%3Dkindmate.net%26origin%3Dhttps%253A%252F%252Fkindmate.net%252Ff3bc6a73dffe75c%26relation%3Dparent.parent&amp;container_width=770&amp;height=100&amp;href=https%3A%2F%2Fkindmate.net%2Fproject%2F1404%2Ftrai-he-giao-duc-be-khoe-be-ngoan&amp;locale=en_US&amp;numposts=10&amp;sdk=joey&amp;version=v2.8&amp;width="
                                                style="border: none; visibility: visible; width: 100%; height: 178px;"
                                                class=""></iframe></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class=" d-flex flex-column align-items-start  bg-light p-3">
                                <div class=" d-flex flex-column align-items-start  bg-light p-3 h-100">
                                    <div class="w-100">
                                        <div class="campagin-progress">
                                            <div class="d-flex justify-content-between align-items-end">
                                                <h4 class="text-primary mb-0 h3">20,000 đ
                                                    <small>(0%)</small></h4>
                                                <span>5 tr đ</span>
                                            </div>
                                            <div class="progress my-2">
                                                <div class="progress-bar" style="width: 0%" role="progressbar"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end">
                                                <div class="user-count">
                                                    <strong>1</strong> người ủng hộ
                                                </div>
                                                <div class="user-count">
                                                    Hết hạn vào 11/08/2020
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-4">
                                            <a href="https://kindmate.net/donate/1404"
                                                class="btn btn-danger btn-lg btn-block">Ủng hộ ngay</a>
                                            <div class="divider"></div>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://kindmate.net/project/1404/trai-he-giao-duc-be-khoe-be-ngoan"
                                                class="btn btn-default btn-lg bg-white btn-block mt-3">Chia sẻ
                                                ngay</a>

                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small">
                                            <div class="hints">Tips: Bạn có biết, mỗi lượt chia sẻ của bạn có thể
                                                mang lại 2 lượt ủng hộ từ bạn bè.</div>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://kindmate.net/project/1404/trai-he-giao-duc-be-khoe-be-ngoan"
                                                class="text-info mt-1">
                                                <i class="zmdi zmdi-facebook mr-1"></i> Chia sẻ ngay
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-auto w-100">
                                        <div class="small text-secondary mb-1">
                                            ĐƠN VỊ TỔ CHỨC
                                        </div>
                                        <div class="media align-items-center">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="mt-auto w-100">
                                        <div class="small text-secondary mb-1">
                                            CHỦ CHIẾN DỊCH
                                        </div>
                                        <div class="media align-items-center">
                                            <img width="50" class="mr-2 avatar "
                                                src="https://kindmate.net/images/user-avatar.png"
                                                alt="CLB tình nguyện Bé Khỏe Bé Ngoan">
                                            <div class="media-body">
                                                <p class="dotdotdot mb-0">CLB tình nguyện Bé Khỏe Bé Ngoan</p>
                                                <div class="campaign-summary">
                                                    <a data-toggle="pill" href="#creator"
                                                        class="small change-tab-to-creator">Xem thông tin</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script>
    $(function(){
        $('.change-tab-to-creator').click(function () {
            $('main.main.detail .nav-link').removeClass('active');
            $('.creator-main').addClass('active');
            $('.tab-content .tab-pane').removeClass('active').addClass('fade');
            $('#creator').addClass('active').removeClass('fade');
        });
    });
</script>
@endsection