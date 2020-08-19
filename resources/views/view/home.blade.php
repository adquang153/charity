@extends('view.layouts.base')
  
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
<main class="main">
<section id="top-hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 d-flex">
          <div class="align-self-center">
            <h1>
              Minh bạch quyên góp <br> Dễ dàng ủng hộ
            </h1>
            <p class="text-secondary my-4 pr-4 text-intro">
              Kindmate là một nền tảng gây quỹ cộng đồng - nơi mọi cá nhân, tổ chức đều có thể tự tạo
              một
              trang web gây quỹ nhanh chóng và chuyên nghiệp...
              <a href="about.html">Tìm hiểu</a>
            </p>
            <div class="take-action-buttons mb-3">
              <a href="{{ route('view.campaign.create') }}" class="btn btn-danger btn-lg">Tạo
                chiến
                dịch</a>
              <a href="{{ route('view.explore') }}" class="btn btn-primary btn-lg">Các chiến dịch</a>
            </div>
          </div>
        </div>
        <div class="col-lg-7 offset-lg-1">
          <article class="embed-responsive embed-responsive-16by9">
            <img class="embed-responsive-item rounded" src="{{asset('images/thumb.png')}}">
          </article>
        </div>
      </div>
    </div>
  </section>
  <section id="category" class="py-5">
    <div class="container">
      <ul class="list-unstyled d-flex justify-content-between list-categories">
        <li>
          <a href="#" class="btn btn-default btn-lg">
            <img src="{{asset('images/tu-thien.svg')}}" alt="kindmate-icon" class="mr-2" width="28">
            Từ thiện
          </a>
        </li>
        <li>
          <a href="#" class="btn btn-default btn-lg">
            <img src="{{asset('images/tre-em.svg')}}" alt="kindmate-icon" class="mr-2" width="28">
            Trẻ em
          </a>
        </li>
        <li>
          <a href="#" class="btn btn-default btn-lg">
            <img src="{{asset('images/hoan-canh.svg')}}" alt="kindmate-icon" class="mr-2" width="28">
            Khó khăn
          </a>
        </li>
        <li>
          <a href="#" class="btn btn-default btn-lg">
            <img src="{{asset('images/khuyet-tat.svg')}}" alt="kindmate-icon" class="mr-2" width="28">
            Khuyết tật
          </a>
        </li>
        <li>
          <a href="#" class="btn btn-default btn-lg">
            <img src="{{asset('images/giao-duc.svg')}}" alt="kindmate-icon" class="mr-2" width="28">
            Giáo dục
          </a>
        </li>
        <li>
          <a href="#" class="btn btn-default btn-lg">
            <img src="{{asset('images/ung-ho.svg')}}" alt="kindmate-icon" class="mr-2" width="28">
            Khác
          </a>
        </li>
      </ul>
    </div>
  </section>
  <section id="list-campaign" class="pb-5">
    <div class="container">
      <div class="row list-campaigns">
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <article class="card campaign-style2 mb-4">
            <div class="embed-responsive embed-responsive-16by9">
              <img class="embed-responsive-item" src="https://kindmate.net/Uploads/2020/08/08/5f2e2c95a031d-cover.jpg">
            </div>
            <div class="card-body pb-3  d-flex flex-column align-items-start">
              <div class="campaign-main-info mb-auto w-100">
                <div class="campaign-badge-box d-flex justify-content-between align-items-center">
                  <img width="50" height="50" class="mr-2 avatar bg-white img-fill"
                    src="https://kindmate.net/images/user-avatar.png" alt="CLB tình nguyện Bé Khỏe Bé Ngoan">
                </div>
                <a href="detail.html">
                  <h6 class="card-title mt-3 mb-2 text-body ">TRẠI HÈ GIÁO DỤC BÉ KHỎE BÉ NGOAN
                  </h6>
                </a>
                <div class="card-text text-secondary">
                  Dự án đem đến những kiến thức y khoa cơ bản, giúp các bệnh nhi tại bệnh viện Nhi
                  Đồng 1 và Nhi Đồng 2 có thể hiểu và tự chăm sóc bản thân.
                </div>
                <div class="card-text card-author mt-1">
                  <span class="text-secondary">bởi</span>
                  <a href="javascript:void(0)" class="campaign-author-link">CLB tình nguyện Bé
                    Khỏe Bé Ngoan</a>
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
                  <div class="circlechart" data-percentage="50">
                    50%
                  </div>
                </div>
                <div class="campaign-info text-right">
                  <div class="campaign-money">
                    <span>5,000,000 đ</span>
                  </div>
                  <div class="campaign-deadline">
                    <span class="small text-secondary">
                      Hết hạn vào 11/08/2020
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
                    src="https://kindmate.net/Uploads/2020/08/03/5f2819f599ef5-kapusta-a--nh-ava.jpg" alt="The Kapusta">
                </div>
                <a href="detail.html">
                  <h6 class="card-title mt-3 mb-2 text-body ">The Kapusta</h6>
                </a>
                <div class="card-text text-secondary">
                  The Kapusta là dự án thành lập bởi tập thể học sinh khối Nga trường THPT Hà Nội-
                  Amsterdam nhằm gây quỹ từ thiện giúp đỡ cho học sinh nghèo trên các phương diện
                  sinh hoạt, học tập, di chuyển.
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
                  <div class="circlechart" data-percentage="50">
                    50%
                  </div>
                </div>
                <div class="campaign-info text-right">
                  <div class="campaign-money">
                    <span>30,000,000 đ</span>
                  </div>
                  <div class="campaign-deadline">
                    <span class="small text-secondary">
                      Còn lại 357 ngày
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
                <a href="detail.html">
                  <h6 class="card-title mt-3 mb-2 text-body ">Ủng hộ Đà Nẵng trong vùng dịch kinh
                    tế khó khăn</h6>
                </a>
                <div class="card-text text-secondary">
                  Chung tay góp sức cho Thành Phố Đà Nẵng vượt qua Tâm dịch covist 2.. Mong thành
                  phố được bình an
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
                  <div class="circlechart" data-percentage="50">
                    50%
                  </div>
                </div>
                <div class="campaign-info text-right">
                  <div class="campaign-money">
                    <span>5,000,000 đ</span>
                  </div>
                  <div class="campaign-deadline">
                    <span class="small text-secondary">
                      Còn lại 3 ngày
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
                    src="https://kindmate.net/Uploads/2020/07/31/5f24197c8741b-logo.png" alt="Quoc Trung">
                </div>
                <a href="detail.html">
                  <h6 class="card-title mt-3 mb-2 text-body ">Paper Airplane - Máy Bay Giấy</h6>
                </a>
                <div class="card-text text-secondary">
                  &amp;quot;Máy Bay Giấy&amp;quot; là dự án từ thiện, dạy học tại trường THCS DTBT
                  Cán Chu Phìn, Mèo Vạc, Hà Giang.
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
                  <div class="circlechart" data-percentage="50">
                    50%
                  </div>
                </div>
                <div class="campaign-info text-right">
                  <div class="campaign-money">
                    <span>10,000,000 đ</span>
                  </div>
                  <div class="campaign-deadline">
                    <span class="small text-secondary">
                      Còn lại 17 ngày
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
                <a href="detail.html">
                  <h6 class="card-title mt-3 mb-2 text-body ">AuLove - Love For Autism | Dự án Sân
                    chơi dành cho trẻ tự kỷ</h6>
                </a>
                <div class="card-text text-secondary">
                  Tổ chức những hoạt động hàng tuần theo từng giáo án cụ thể, lồng ghép giữa học
                  tập và vui chơi. Đây là sân chơi hoạt động ngoài trời an toàn và lành mạnh cho
                  các em nhỏ tự kỷ, tại sân chơi này các con sẽ được tham gia cùng phụ huynh và
                  các bạn thanh niên
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
                  <div class="circlechart" data-percentage="50">
                    50%
                  </div>
                </div>
                <div class="campaign-info text-right">
                  <div class="campaign-money">
                    <span>10,000,000 đ</span>
                  </div>
                  <div class="campaign-deadline">
                    <span class="small text-secondary">
                      Còn lại 80 ngày
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
                <a href="detail.html">
                  <h6 class="card-title mt-3 mb-2 text-body ">Bạn nghĩ sao về việc làm youtuber??
                  </h6>
                </a>
                <div class="card-text text-secondary">
                  xin hãy giúp đỡ những người trong làng nghề streamer và youtuber vì họ là những
                  người tốt, họ phục vụ chúng ta vào mục đính giúp chúng ta giải tỏa căng thẳng và
                  kiếm thêm thu nhập cho bản thân
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
                  <div class="circlechart" data-percentage="50">
                    50%
                  </div>
                </div>
                <div class="campaign-info text-right">
                  <div class="campaign-money">
                    <span>20,000,000 đ</span>
                  </div>
                  <div class="campaign-deadline">
                    <span class="small text-secondary">
                      Còn lại 350 ngày
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
                    src="https://kindmate.net/Uploads/2020/08/02/5f2651da85314-7.png" alt="LGBT Thanh Hóa">
                </div>
                <a href="detail.html">
                  <h6 class="card-title mt-3 mb-2 text-body ">Ủng hộ kinh phí tổ chức ThanhHoa
                    Pride 2020</h6>
                </a>
                <div class="card-text text-secondary">
                  Là chiến dịch kêu gọi quỹ cho sự kiện tự hào của cộng đồng LGBT tại Thanh Hóa -
                  ThanhHoa Pride 2020
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
                  <div class="circlechart" data-percentage="50">
                    50%
                  </div>
                </div>
                <div class="campaign-info text-right">
                  <div class="campaign-money">
                    <span>25,000,000 đ</span>
                  </div>
                  <div class="campaign-deadline">
                    <span class="small text-secondary">
                      Còn lại 36 ngày
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
                <a href="detail.html">
                  <h6 class="card-title mt-3 mb-2 text-body ">Ủng hộ Quỹ emACTION - Project
                    emPOWER</h6>
                </a>
                <div class="card-text text-secondary">
                  Quỹ emACTION được thành lập vì mục đích thiện nguyện phi lợi nhuận thuộc Project
                  emPOWER - một dự án phi lợi nhuận nhằm hỗ trợ cộng đồng và mang đến những thông
                  tin hữu ích xoay quanh các chủ đề phụ nữ và các chủ đề liên quan.
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
                  <div class="circlechart" data-percentage="50">
                    50%
                  </div>
                </div>
                <div class="campaign-info text-right">
                  <div class="campaign-money">
                    <span>20,000,000 đ</span>
                  </div>
                  <div class="campaign-deadline">
                    <span class="small text-secondary">
                      Còn lại 203 ngày
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
      <div class="text-center mt-3">
        <a href="explore.html" class="btn btn-danger btn-lg">Xem tất cả chiến dịch</a>
      </div>
    </div>
  </section>
  <section id="success-campaign" class="mb-5">
    <div class="container  border-top mt-4 pt-5">
      <h5 class="section-title mb-4">Chiến dịch thành công</h5>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item campaign-style3 active">
            <div class="row">
              <div class="col-md-7">
                <div class="embed-responsive embed-responsive-16by9 campaign-style1 mb-3 mb-md-0">
                  <img class="embed-responsive-item"
                    src="https://kindmate.net/Uploads/2019/10/29/5db7a25ce0597-hiojojojojo.jpg"
                    alt="Dự án Đông ấm cho em - Mang tình yêu thương tới trẻ em bị bỏ rơi tại chùa Mục Đồng">
                </div>
              </div>
              <div class="col-md-5 d-flex flex-column align-items-start">
                <div class="w-100">
                  <a href="detail.html">
                    <h2 class="campaign-title text-dark">Dự án Đông ấm cho em - Mang tình yêu
                      thương tới trẻ em bị bỏ rơi tại chùa Mục Đồng</h2>
                  </a>
                  <div class="text-secondary my-3">Dang tay giúp đỡ các trẻ em bị bỏ rơi và các bà
                    mẹ đơn thân đang nương tựa tại Chùa Mục Đồng. Mùa đông đang tới rất gần, số
                    lượng trẻ em bị bỏ rơi ngày càng tăng lên, rất cần sự hỗ trợ của cộng đồng.
                  </div>

                  <div class="campagin-progress">
                    <div class="d-flex justify-content-between align-items-end">
                      <h4 class="text-primary mb-0 h3">37,600,000
                        đ <small>(150%)</small></h4>
                      <span>25 tr triệu</span>
                    </div>
                    <div class="progress my-2">
                      <div class="progress-bar" style="width: 150%" role="progressbar" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                      <div class="user-count">
                        <strong>85</strong> người
                        ủng hộ
                      </div>
                      <div class="user-count">
                        <span class="small text-secondary">
                          Đã hết hạn 9 tháng trước
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-auto w-100">
                  <div class="small text-secondary mb-1">
                    ĐƠN VỊ TỔ CHỨC
                  </div>
                  <div class="media align-items-center">
                    <img width="50" class="mr-2 avatar " src="https://kindmate.net/images/user-avatar.png"
                      alt="https://kindmate.net/images/user-avatar.png">
                    <div class="media-body">
                      <p class="dotdotdot mb-0">IvyPrep Education</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item campaign-style3">
            <div class="row">
              <div class="col-md-7">
                <div class="embed-responsive embed-responsive-16by9 campaign-style1 mb-3 mb-md-0">
                  <img class="embed-responsive-item"
                    src="https://kindmate.net/Uploads/2019/10/09/5d9dbafcad669-cover.jpg"
                    alt="Gây quỹ Thành lập Xưởng nghệ thuật đào tạo nghề - hướng nghiệp cho trẻ tự kỷ">
                </div>
              </div>
              <div class="col-md-5 d-flex flex-column align-items-start">
                <div class="w-100">
                  <a href="detail.html">
                    <h2 class="campaign-title text-dark">Gây quỹ Thành lập Xưởng nghệ thuật đào
                      tạo nghề - hướng nghiệp cho trẻ tự kỷ</h2>
                  </a>
                  <div class="text-secondary my-3">Xưởng nghệ thuật Tòhe Fun là nơi đào tạo nghề -
                    hướng nghiệp dành cho trẻ tự kỷ, nhằm chuẩn bị cho các bạn một cuộc sống tự
                    lập và hoà nhập tốt hơn với xã hội khi đến giai đoạn trưởng thành.</div>

                  <div class="campagin-progress">
                    <div class="d-flex justify-content-between align-items-end">
                      <h4 class="text-primary mb-0 h3">50,500,000
                        đ <small>(15%)</small></h4>
                      <span>345 tr triệu</span>
                    </div>
                    <div class="progress my-2">
                      <div class="progress-bar" style="width: 15%" role="progressbar" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                      <div class="user-count">
                        <strong>47</strong> người
                        ủng hộ
                      </div>
                      <div class="user-count">
                        <span class="small text-secondary">
                          Đã hết hạn 7 tháng trước
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-auto w-100">
                  <div class="small text-secondary mb-1">
                    ĐƠN VỊ TỔ CHỨC
                  </div>
                  <div class="media align-items-center">
                    <img width="50" class="mr-2 avatar "
                      src="https://kindmate.net/Uploads/2019/10/09/5d9dbb0247021-logo.jpg" alt="Tòhe">
                    <div class="media-body">
                      <p class="dotdotdot mb-0">Tòhe</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <section id="introduce" class="py-5 bg-light">
    <div class="container">
      <div class="top-introduce py-5">
        <div class="row">
          <div class="col-md-5 order-2 order-md-1 d-flex align-items-center">
            <article class="introduce-box">
              <h2>Kindmate là một nền tảng gây quỹ cộng đồng</h2>
              <p class="my-3 text-secondary">
                Được phát triển bởi Wakeitup, Kindmate tập trung vào việc sử dụng công nghệ để giảm bớt rào cản và kết
                nối các nguồn lực cộng đồng, giúp cho việc gây quỹ trở nên đơn giản, hiệu quả và minh bạch.
              </p>
              <div class="d-flex justify-content-between">
                <div class="count-box">
                  <h4 class="text-primary">300+</h4>
                  <div class="text-secondary">
                    Chiến dịch
                  </div>
                </div>
                <div class="count-box px-3">
                  <h4 class="text-primary">6,000 +</h4>
                  <div class="text-secondary">
                    Người tham gia
                  </div>
                </div>
                <div class="count-box">
                  <h4 class="text-primary">5,5 tỷ</h4>
                  <div class="text-secondary">
                    Tiền quyên góp được
                  </div>
                </div>
              </div>
              <a href="about.html" class="btn btn-lg btn-primary mt-5">
                Tìm hiểu thêm
              </a>
            </article>
          </div>
          <div class="col-md-6 offset-sm-1 order-1 order-md-2 ">
            <img width="100%" class="my-3" src="https://kindmate.net/svg/donation.svg" alt="">
          </div>
        </div>
      </div>

      <div class="middle-introduce py-5">
        <div class="row">
        </div>
      </div>


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
                <a href="{{ route('view.campaign.create') }}" class="btn btn-lg btn-primary mt-3">Tạo chiến dịch</a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="my-2">
                <img src="https://kindmate.net/svg/yeu-thuong.svg" alt="yeu-thuong" class="mb-4">
                <h4 class="my-2">Tôi muốn ủng hộ</h4>
                <p class="my-2">Hàng trăm chiến dịch đang cần sự trợ giúp của bạn, hãy cùng chúng tôi khám phá nhé</p>
                <a href="{{ route('view.explore') }}" class="btn btn-lg btn-danger mt-3">Các chiến dịch</a>
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

@endsection