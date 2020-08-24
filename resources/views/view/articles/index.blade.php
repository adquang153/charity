@extends('view.layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
@endsection

@section('content')
    <main class="main explore">
        <section class="my-2 pb-4 container">
            <h2 class="mb-4">Tin tức</h2>
            <div class="mt-2 mb-4">
                <form method="GET" action="https://kindmate.net/explore" accept-charset="UTF-8" id="search-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="name" class="form-control" placeholder="Nhập từ khóa" name="name" type="text"
                                        value="">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fas fa-search"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row list-campaigns">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <article class="card campaign-style2 mb-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item"
                                src="https://kindmate.net/Uploads/2020/08/08/5f2e2c95a031d-cover.jpg">
                        </div>
                        <div class="card-body pb-3  d-flex flex-column align-items-start">
                            <div class="campaign-main-info mb-auto w-100">
                                <div class="campaign-badge-box d-flex justify-content-between align-items-center">
                                    <img width="50" height="50" class="mr-2 avatar bg-white img-fill"
                                        src="https://kindmate.net/images/user-avatar.png"
                                        alt="CLB tình nguyện Bé Khỏe Bé Ngoan">
                                </div>
                                <a href="https://kindmate.net/project/1404/trai-he-giao-duc-be-khoe-be-ngoan">
                                    <h6 class="card-title mt-3 mb-2 text-body ">TRẠI HÈ GIÁO DỤC BÉ KHỎE BÉ NGOAN</h6>
                                </a>
                                <div class="card-text text-secondary">
                                    Dự án đem đến những kiến thức y khoa cơ bản, giúp các bệnh nhi tại bệnh viện Nhi Đồng 1
                                    và Nhi Đồng 2 có thể hiểu và tự chăm sóc bản thân.
                                </div>
                                <div class="card-text card-author mt-1">
                                    <span class="text-secondary">bởi</span>
                                    <a href="javascript:void(0)" class="campaign-author-link">CLB tình nguyện Bé Khỏe Bé
                                        Ngoan</a>
                                </div>
                                <ul class="tags-box">
                                    <li>
                                        <a href="#">Hoàn cảnh khó khăn</a>
                                    </li>
                                    <li>
                                        <a href="#">Trẻ em</a>
                                    </li>
                                    <li>
                                        <a href="#">Mùa đông</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top w-100">
                                <div class="process-style d-flex justify-content-between align-items-center">

                                </div>
                                <div class="campaign-info text-right">

                                    <div class="campaign-deadline">
                                        <span class="small text-secondary">
                                            11/08/2020
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <article class="card campaign-style2 mb-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item"
                                src="https://kindmate.net/Uploads/2020/08/03/5f27e8f3312be-dsc-4531-jpg">
                        </div>
                        <div class="card-body pb-3  d-flex flex-column align-items-start">
                            <div class="campaign-main-info mb-auto w-100">
                                <div class="campaign-badge-box d-flex justify-content-between align-items-center">
                                    <img width="50" height="50" class="mr-2 avatar bg-white img-fill"
                                        src="https://kindmate.net/Uploads/2020/08/03/5f2819f599ef5-kapusta-a--nh-ava.jpg"
                                        alt="The Kapusta">
                                </div>
                                <a href="https://kindmate.net/project/1395/the-kapusta">
                                    <h6 class="card-title mt-3 mb-2 text-body ">The Kapusta</h6>
                                </a>
                                <div class="card-text text-secondary">
                                    The Kapusta là dự án thành lập bởi tập thể học sinh khối Nga trường THPT Hà Nội-
                                    Amsterdam nhằm gây quỹ từ thiện giúp đỡ cho học sinh nghèo trên các phương diện sinh
                                    hoạt, học tập, di chuyển.
                                </div>
                                <div class="card-text card-author mt-1">
                                    <span class="text-secondary">bởi</span>
                                    <a href="javascript:void(0)" class="campaign-author-link">The Kapusta</a>
                                </div>
                                <ul class="tags-box">
                                    <li>
                                        <a href="#">Hoàn cảnh khó khăn</a>
                                    </li>
                                    <li>
                                        <a href="#">Trẻ em</a>
                                    </li>
                                    <li>
                                        <a href="#">Mùa đông</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top w-100">
                                <div class="process-style d-flex justify-content-between align-items-center">

                                </div>
                                <div class="campaign-info text-right">

                                    <div class="campaign-deadline">
                                        <span class="small text-secondary">
                                            30/2/2020
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <article class="card campaign-style2 mb-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item"
                                src="https://kindmate.net/Uploads/2020/08/01/5f24c38350dd6-dc7db219-47b8-4f23-a361-5afc04676198.png">
                        </div>
                        <div class="card-body pb-3  d-flex flex-column align-items-start">
                            <div class="campaign-main-info mb-auto w-100">
                                <div class="campaign-badge-box d-flex justify-content-between align-items-center">
                                    <img width="50" height="50" class="mr-2 avatar bg-white img-fill"
                                        src="https://kindmate.net/images/user-avatar.png" alt="Dao Van Hoang">
                                </div>
                                <a href="https://kindmate.net/project/1390/ung-ho-da-nang-trong-vung-dich-kinh-te-kho-khan">
                                    <h6 class="card-title mt-3 mb-2 text-body ">Ủng hộ Đà Nẵng trong vùng dịch kinh tế khó
                                        khăn</h6>
                                </a>
                                <div class="card-text text-secondary">
                                    Chung tay góp sức cho Thành Phố Đà Nẵng vượt qua Tâm dịch covist 2.. Mong thành phố được
                                    bình an
                                </div>
                                <div class="card-text card-author mt-1">
                                    <span class="text-secondary">bởi</span>
                                    <a href="javascript:void(0)" class="campaign-author-link">Dao Van Hoang</a>
                                </div>
                                <ul class="tags-box">
                                    <li>
                                        <a href="#">Hoàn cảnh khó khăn</a>
                                    </li>
                                    <li>
                                        <a href="#">Trẻ em</a>
                                    </li>
                                    <li>
                                        <a href="#">Mùa đông</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top w-100">
                                <div class="process-style d-flex justify-content-between align-items-center">
                                </div>
                                <div class="campaign-info text-right">
                                    <div class="campaign-deadline">
                                        <span class="small text-secondary">
                                            30/2/2020
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <article class="card campaign-style2 mb-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item"
                                src="https://kindmate.net/Uploads/2020/07/31/5f241d0f5e356--mg-6055-min-jpg">
                        </div>
                        <div class="card-body pb-3  d-flex flex-column align-items-start">
                            <div class="campaign-main-info mb-auto w-100">
                                <div class="campaign-badge-box d-flex justify-content-between align-items-center">
                                    <img width="50" height="50" class="mr-2 avatar bg-white img-fill"
                                        src="https://kindmate.net/Uploads/2020/07/31/5f24197c8741b-logo.png"
                                        alt="Quoc Trung">
                                </div>
                                <a href="https://kindmate.net/project/1389/paper-airplane---may-bay-giay">
                                    <h6 class="card-title mt-3 mb-2 text-body ">Paper Airplane - Máy Bay Giấy</h6>
                                </a>
                                <div class="card-text text-secondary">
                                    &amp;quot;Máy Bay Giấy&amp;quot; là dự án từ thiện, dạy học tại trường THCS DTBT Cán Chu
                                    Phìn, Mèo Vạc, Hà Giang.
                                </div>
                                <div class="card-text card-author mt-1">
                                    <span class="text-secondary">bởi</span>
                                    <a href="javascript:void(0)" class="campaign-author-link">Quoc Trung</a>
                                </div>
                                <ul class="tags-box">
                                    <li>
                                        <a href="#">Hoàn cảnh khó khăn</a>
                                    </li>
                                    <li>
                                        <a href="#">Trẻ em</a>
                                    </li>
                                    <li>
                                        <a href="#">Mùa đông</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top w-100">
                                <div class="process-style d-flex justify-content-between align-items-center">

                                </div>
                                <div class="campaign-info text-right">

                                    <div class="campaign-deadline">
                                        <span class="small text-secondary">
                                            30/2/2020
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <article class="card campaign-style2 mb-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item"
                                src="https://kindmate.net/Uploads/2020/07/31/5f23e098a4d20-99432520-261160498575692-253690137488130048-o.jpg">
                        </div>
                        <div class="card-body pb-3  d-flex flex-column align-items-start">
                            <div class="campaign-main-info mb-auto w-100">
                                <div class="campaign-badge-box d-flex justify-content-between align-items-center">
                                    <img width="50" height="50" class="mr-2 avatar bg-white img-fill"
                                        src="https://kindmate.net/images/user-avatar.png" alt="Nguyễn Quang Minh">
                                </div>
                                <a
                                    href="https://kindmate.net/project/1388/aulove---love-for-autism---du-an-san-choi-danh-cho-tre-tu-ky">
                                    <h6 class="card-title mt-3 mb-2 text-body ">AuLove - Love For Autism | Dự án Sân chơi
                                        dành cho trẻ tự kỷ</h6>
                                </a>
                                <div class="card-text text-secondary">
                                    Tổ chức những hoạt động hàng tuần theo từng giáo án cụ thể, lồng ghép giữa học tập và
                                    vui chơi. Đây là sân chơi hoạt động ngoài trời an toàn và lành mạnh cho các em nhỏ tự
                                    kỷ, tại sân chơi này các con sẽ được tham gia cùng phụ huynh và các bạn thanh niên
                                </div>
                                <div class="card-text card-author mt-1">
                                    <span class="text-secondary">bởi</span>
                                    <a href="javascript:void(0)" class="campaign-author-link">Nguyễn Quang Minh</a>
                                </div>
                                <ul class="tags-box">
                                    <li>
                                        <a href="#">Hoàn cảnh khó khăn</a>
                                    </li>
                                    <li>
                                        <a href="#">Trẻ em</a>
                                    </li>
                                    <li>
                                        <a href="#">Mùa đông</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top w-100">
                                <div class="process-style d-flex justify-content-between align-items-center">
                                </div>
                                <div class="campaign-info text-right">

                                    <div class="campaign-deadline">
                                        <span class="small text-secondary">
                                            30/12/2020
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <article class="card campaign-style2 mb-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item"
                                src="https://kindmate.net/Uploads/2020/07/29/5f20ecf57d3fc-ephoto360-com-15f001923dc13f.jpg">
                        </div>
                        <div class="card-body pb-3  d-flex flex-column align-items-start">
                            <div class="campaign-main-info mb-auto w-100">
                                <div class="campaign-badge-box d-flex justify-content-between align-items-center">
                                    <img width="50" height="50" class="mr-2 avatar bg-white img-fill"
                                        src="https://kindmate.net/Uploads/2020/07/29/5f210a3128baa-pngtree-box-gradient-neon-lighting-effect-border-png-image-4299148.jpg"
                                        alt="Pham Tung Lam">
                                </div>
                                <a href="https://kindmate.net/project/1387/ban-nghi-sao-ve-viec-lam-youtuber--">
                                    <h6 class="card-title mt-3 mb-2 text-body ">Bạn nghĩ sao về việc làm youtuber??</h6>
                                </a>
                                <div class="card-text text-secondary">
                                    xin hãy giúp đỡ những người trong làng nghề streamer và youtuber vì họ là những người
                                    tốt, họ phục vụ chúng ta vào mục đính giúp chúng ta giải tỏa căng thẳng và kiếm thêm thu
                                    nhập cho bản thân
                                </div>
                                <div class="card-text card-author mt-1">
                                    <span class="text-secondary">bởi</span>
                                    <a href="javascript:void(0)" class="campaign-author-link">Pham Tung Lam</a>
                                </div>
                                <ul class="tags-box">
                                    <li>
                                        <a href="#">Hoàn cảnh khó khăn</a>
                                    </li>
                                    <li>
                                        <a href="#">Trẻ em</a>
                                    </li>
                                    <li>
                                        <a href="#">Mùa đông</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top w-100">
                                <div class="process-style d-flex justify-content-between align-items-center">

                                </div>
                                <div class="campaign-info text-right">

                                    <div class="campaign-deadline">
                                        <span class="small text-secondary">
                                            30/12/2020
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <article class="card campaign-style2 mb-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item"
                                src="https://kindmate.net/Uploads/2020/07/28/5f1fc01094069-fb-img-1595915403398.jpg">
                        </div>
                        <div class="card-body pb-3  d-flex flex-column align-items-start">
                            <div class="campaign-main-info mb-auto w-100">
                                <div class="campaign-badge-box d-flex justify-content-between align-items-center">
                                    <img width="50" height="50" class="mr-2 avatar bg-white img-fill"
                                        src="https://kindmate.net/Uploads/2020/08/02/5f2651da85314-7.png"
                                        alt="LGBT Thanh Hóa">
                                </div>
                                <a href="https://kindmate.net/project/1386/ung-ho-kinh-phi-to-chuc-thanhhoa-pride-2020">
                                    <h6 class="card-title mt-3 mb-2 text-body ">Ủng hộ kinh phí tổ chức ThanhHoa Pride 2020
                                    </h6>
                                </a>
                                <div class="card-text text-secondary">
                                    Là chiến dịch kêu gọi quỹ cho sự kiện tự hào của cộng đồng LGBT tại Thanh Hóa - ThanhHoa
                                    Pride 2020
                                </div>
                                <div class="card-text card-author mt-1">
                                    <span class="text-secondary">bởi</span>
                                    <a href="javascript:void(0)" class="campaign-author-link">LGBT Thanh Hóa</a>
                                </div>
                                <ul class="tags-box">
                                    <li>
                                        <a href="#">Hoàn cảnh khó khăn</a>
                                    </li>
                                    <li>
                                        <a href="#">Trẻ em</a>
                                    </li>
                                    <li>
                                        <a href="#">Mùa đông</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top w-100">
                                <div class="process-style d-flex justify-content-between align-items-center">

                                </div>
                                <div class="campaign-info text-right">

                                    <div class="campaign-deadline">
                                        <span class="small text-secondary">
                                            30/12/2020
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <article class="card campaign-style2 mb-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img class="embed-responsive-item"
                                src="https://kindmate.net/Uploads/2020/07/22/5f187f799495a-emaction--1-.png">
                        </div>
                        <div class="card-body pb-3  d-flex flex-column align-items-start">
                            <div class="campaign-main-info mb-auto w-100">
                                <div class="campaign-badge-box d-flex justify-content-between align-items-center">
                                    <img width="50" height="50" class="mr-2 avatar bg-white img-fill"
                                        src="https://kindmate.net/Uploads/2020/07/22/5f186eb5c776f-88002213-109558750653803-4349946738564399104-n.png"
                                        alt="Project emPOWER">
                                </div>
                                <a href="https://kindmate.net/project/1384/ung-ho-quy-emaction---project-empower">
                                    <h6 class="card-title mt-3 mb-2 text-body ">Ủng hộ Quỹ emACTION - Project emPOWER</h6>
                                </a>
                                <div class="card-text text-secondary">
                                    Quỹ emACTION được thành lập vì mục đích thiện nguyện phi lợi nhuận thuộc Project emPOWER
                                    - một dự án phi lợi nhuận nhằm hỗ trợ cộng đồng và mang đến những thông tin hữu ích xoay
                                    quanh các chủ đề phụ nữ và các chủ đề liên quan.
                                </div>
                                <div class="card-text card-author mt-1">
                                    <span class="text-secondary">bởi</span>
                                    <a href="javascript:void(0)" class="campaign-author-link">Project emPOWER</a>
                                </div>
                                <ul class="tags-box">
                                    <li>
                                        <a href="#">Hoàn cảnh khó khăn</a>
                                    </li>
                                    <li>
                                        <a href="#">Trẻ em</a>
                                    </li>
                                    <li>
                                        <a href="#">Mùa đông</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top w-100">
                                <div class="process-style d-flex justify-content-between align-items-center">
                                </div>
                                <div class="campaign-info text-right">
                                    <div class="campaign-deadline">
                                        <span class="small text-secondary">
                                            20/10/2022
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="my-3">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center" role="navigation">

                        <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                            <span class="page-link" aria-hidden="true">
                                <i class="zmdi zmdi-chevron-left zmdi-hc-lg"></i>
                                <i class="fa fa-chevron-left"></i>
                            </span>
                        </li>
                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="https://kindmate.net/explore?page=2">2</a></li>
                        <li class="page-item"><a class="page-link" href="https://kindmate.net/explore?page=3">3</a></li>
                        <li class="page-item"><a class="page-link" href="https://kindmate.net/explore?page=4">4</a></li>
                        <li class="page-item"><a class="page-link" href="https://kindmate.net/explore?page=5">5</a></li>
                        <li class="page-item"><a class="page-link" href="https://kindmate.net/explore?page=6">6</a></li>
                        <li class="page-item"><a class="page-link" href="https://kindmate.net/explore?page=7">7</a></li>
                        <li class="page-item"><a class="page-link" href="https://kindmate.net/explore?page=8">8</a></li>
                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                        <li class="page-item"><a class="page-link" href="https://kindmate.net/explore?page=46">46</a></li>
                        <li class="page-item"><a class="page-link" href="https://kindmate.net/explore?page=47">47</a></li>
                        <li class="page-item">
                            <a class="page-link" href="https://kindmate.net/explore?page=2" rel="next" aria-label="Next »">
                                <i class="zmdi zmdi-chevron-right zmdi-hc-lg"></i>
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </section>
        <section id="introduce" class="py-5 bg-light">
            <div class="container">
                <div class="bottom-introduce mt-4 row">
                    <div class="text-center py-2 col-md-8 offset-md-2">
                        <h2 class="mb-5">Mọi cá nhân, tổ chức đều có thể tự tạo một trang web gây quỹ với Kindmate</h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="my-2">
                                    <img src="https://kindmate.net/svg/quyen-gop.svg" alt="quyen-gop" class="mb-4">
                                    <h4 class="my-2">Tôi muốn quyên góp</h4>
                                    <p class="my-2">
                                        Khởi tạo chiến dịch của bạn ngay lập tức, chỉ với vài thao tác đơn giản và dễ dàng
                                    </p>
                                    <a href="https://kindmate.net/app/campaign/create"
                                        class="btn btn-lg btn-primary mt-3">Tạo chiến dịch</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="my-2">
                                    <img src="https://kindmate.net/svg/yeu-thuong.svg" alt="yeu-thuong" class="mb-4">
                                    <h4 class="my-2">Tôi muốn ủng hộ</h4>
                                    <p class="my-2">Hàng trăm chiến dịch đang cần sự trợ giúp của bạn, hãy cùng chúng tôi
                                        khám phá nhé</p>
                                    <a href="https://kindmate.net/explore" class="btn btn-lg btn-danger mt-3">Các chiến
                                        dịch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script>
        $(function() {
            $('.change-tab-to-creator').click(function() {
                $('main.main.detail .nav-link').removeClass('active');
                $('.creator-main').addClass('active');
                $('.tab-content .tab-pane').removeClass('active').addClass('fade');
                $('#creator').addClass('active').removeClass('fade');
            });
        });

    </script>
@endsection
