@extends('view.layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <style>
        .tab-content div#content .campaign-content .content-campaign {
            height: 100% !important;
            overflow: auto;
        }

    </style>
@endsection

@section('content')
    <main class="main detail">
        <div class="container">
            <section id="campaign-top-header">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="media">
                            <div class="media-body">
                                <h1 class="mt-0 font-weight-normal">The Kapusta</h1>
                                <p class="mb-1 text-secondary">The Kapusta là dự án thành lập bởi tập thể học sinh khối
                                    Nga trường THPT Hà Nội- Amsterdam nhằm gây quỹ từ thiện giúp đỡ cho học sinh nghèo
                                    trên các phương diện sinh hoạt, học tập, di chuyển.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="hr-top">

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="content" class="container tab-pane active"><br>
                    <article>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="embed-responsive embed-responsive-16by9 campaign-style1 no-shadow mb-3 mb-md-0">
                                    <img class="embed-responsive-item"
                                        src="https://kindmate.net/Uploads/2020/08/03/5f27e8f3312be-dsc-4531-jpg"> </div>
                                <div class="row mt-4">
                                    <div class="campaign-content mt-2 pt-1 border-top">
                                        <div id="campaign-content">
                                            <article class="fck_detail ">
                                                <p class="Normal">Trong kháng nghị vừa ban hành, VKSND TP HCM cho rằng, mức
                                                    án TAND TP HCM áp dụng đối với ông Trầm Bê (61 tuổi, nguyên Phó chủ tịch
                                                    Ngân hàng Phương Nam - đã sáp nhập Sacombank) và đồng phạm về tội <em>Vi
                                                        phạm quy định về cho vay trong hoạt động của các tổ chức tín dụng
                                                    </em>chưa tương xứng với mức độ phạm tội.</p>
                                                <p class="Normal">Tại phiên xử sơ thẩm, mức án VKS đề nghị đối với ông Trầm
                                                    Bê là 6-7 năm tù, nhưng <a
                                                        href="https://vnexpress.net/ong-tram-be-linh-them-3-nam-tu-4138589.html"
                                                        rel="dofollow">toà chỉ tuyên phạt 3 năm</a>. Tương tự, các bị cáo
                                                    còn lại toà cũng áp dụng hình phạt chưa bằng một nửa mức án VKS đề nghị.
                                                </p>
                                                <figure data-size="true" itemprop="associatedMedia image" itemscope=""
                                                    itemtype="http://schema.org/ImageObject"
                                                    class="tplCaption action_thumb_added">
                                                    <div class="action_thumb flexbox"
                                                        style="z-index: 9; transform-origin: 0px 0px; opacity: 1; transform: scale(1, 1); display: none;">
                                                        <a href="javascript:;" class="share_photo" data-type="fb"
                                                            data-reference-id="5"><svg class="ic ic-facebook">
                                                                <use xlink:href="#Facebook"></use>
                                                            </svg></a>
                                                        <a href="javascript:;" class="share_photo" data-type="tw"
                                                            data-reference-id="5"><svg class="ic ic-twitte">
                                                                <use xlink:href="#Twitter"></use>
                                                            </svg></a>
                                                        <a href="javascript:;" class="vne_zoom"
                                                            style="transform-origin: 0px 0px; opacity: 1; transform: scale(1, 1);"><svg
                                                                class="ic ic-zoom">
                                                                <use xlink:href="#Zoom"></use>
                                                            </svg></a>
                                                    </div>
                                                    <meta itemprop="url"
                                                        content="https://i1-vnexpress.vnecdn.net/2020/08/13/khang-nghi-tram-be-3755-1597311514.jpg?w=0&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=I1r8yhMWKQWdKAwRERy03A">
                                                    <meta itemprop="width" content="680">
                                                    <meta itemprop="height" content="462">
                                                    <meta itemprop="href" content="">
                                                    <div class="fig-picture"
                                                        style="padding-bottom: 67.941176470588%;position: relative;">
                                                        <picture>
                                                            <!--[if IE 9]><video style="display: none;"><![endif]-->
                                                            <source
                                                                data-srcset="https://i1-vnexpress.vnecdn.net/2020/08/13/khang-nghi-tram-be-3755-1597311514.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=7nzxnVbvirqozp53Nwi_MA 1x, https://i1-vnexpress.vnecdn.net/2020/08/13/khang-nghi-tram-be-3755-1597311514.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=BsZS27JCdC-rBwXtG8N9Mg 1.5x, https://i1-vnexpress.vnecdn.net/2020/08/13/khang-nghi-tram-be-3755-1597311514.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=IQGh9PD0Quyjn7i3zt-blg 2x"
                                                                srcset="https://i1-vnexpress.vnecdn.net/2020/08/13/khang-nghi-tram-be-3755-1597311514.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=7nzxnVbvirqozp53Nwi_MA 1x, https://i1-vnexpress.vnecdn.net/2020/08/13/khang-nghi-tram-be-3755-1597311514.jpg?w=1020&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=BsZS27JCdC-rBwXtG8N9Mg 1.5x, https://i1-vnexpress.vnecdn.net/2020/08/13/khang-nghi-tram-be-3755-1597311514.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=2&amp;fit=crop&amp;s=IQGh9PD0Quyjn7i3zt-blg 2x">
                                                            <!--[if IE 9]></video><![endif]-->
                                                            <img itemprop="contentUrl"
                                                                style="position: absolute;width:100%;left:0;" loading="lazy"
                                                                intrinsicsize="680x0"
                                                                alt="Ông Trầm Bê bị VKSND TP HCM đề nghị tăng hình phạt. Ảnh: Thành Nguyễn."
                                                                class="lazy lazied"
                                                                src="https://i1-vnexpress.vnecdn.net/2020/08/13/khang-nghi-tram-be-3755-1597311514.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=7nzxnVbvirqozp53Nwi_MA"
                                                                data-src="https://i1-vnexpress.vnecdn.net/2020/08/13/khang-nghi-tram-be-3755-1597311514.jpg?w=680&amp;h=0&amp;q=100&amp;dpr=1&amp;fit=crop&amp;s=7nzxnVbvirqozp53Nwi_MA"
                                                                data-ll-status="loaded">
                                                        </picture>
                                                    </div>
                                                    <figcaption itemprop="description">
                                                        <p class="Image">Ông Trầm Bê tại phiên toà năm 2018. Ảnh: <em>Thành
                                                                Nguyễn.</em></p>
                                                    </figcaption>
                                                </figure>
                                                <p class="Normal">Về trách nhiệm dân sự, VKS đề nghị tòa phúc thẩm buộc ông
                                                    Bê và các cựu cán bộ Ngân hàng Phương Nam phải liên đới cùng bị cáo
                                                    Dương Thanh Cường (cựu tổng giám đốc Công ty Bình Phát, Chủ tịch HĐQT
                                                    Công ty Thanh Phát) bồi thường thiệt hại 505 tỷ đồng cho ngân hàng.</p>
                                                <p class="Normal">Viện dẫn Điều 48 BLHS và Điều 587 BLDS quy định về trách
                                                    nhiệm bồi thường thiệt hại trong trường hợp nhiều người gây ra, VKS cho
                                                    rằng các bị cáo phải bồi thường tương ứng với mức độ lỗi của mình. Nếu
                                                    không xác định được mức độ lỗi, họ phải bồi thường theo phần bằng nhau.
                                                </p>
                                                <p class="Normal">Theo đó, trong 505 tỷ đồng thiệt hại, Cường phải bồi
                                                    thường hơn 185 tỷ; số còn lại Cường, Trầm Bê cùng đồng phạm phải liên
                                                    đới bồi thường - như đề nghị trước đó của VKS tại phiên sơ thẩm. Tuy
                                                    nhiên, TAND TP HCM chỉ buộc một mình Cường chịu trách nhiệm toàn bộ
                                                    thiệt hại vụ án.</p>
                                                <p class="Normal"><strong>Theo bản án sơ thẩm,</strong> năm 2008, Cường biết
                                                    rõ 23 sổ đỏ (10,3 ha đất nông nghiệp tại Bình Chánh) không thể sang tên
                                                    cho công ty của mình nhưng vẫn mang đến Agribank thế chấp vay 171 tỷ
                                                    đồng. Ông ta sau đó lấy lý do hoàn thiện thủ tục cho khu đất mượn lại 23
                                                    sổ đỏ này mang sang Ngân hàng Phương Nam làm hồ sơ thế chấp vay tiền rồi
                                                    chiếm đoạt tiền.</p>
                                                <p class="Normal">Ông Trầm Bê và loạt cán bộ cấp dưới đã không thẩm định hồ
                                                    sơ, bỏ qua các quy định, ký nhiều hợp đồng giải ngân tiền và vàng cho
                                                    công ty của Cường vay dù 23 sổ đó này không có giá trị thế chấp, khiến
                                                    Ngân hàng Phương Nam không thu hồi được nợ. Hiện, khoản nợ của Cường tại
                                                    Sacombank là 505 tỷ đồng (185 tỷ đồng tiền gốc cộng lãi phát sinh).</p>
                                                <p class="Normal">Hôm 30/7, sau một tuần xét xử, toà tuyên phạt Dương Thanh
                                                    Cường 16 năm tù về tội <em>Lừa đảo chiếm đoạt tài sản</em>. Tổng hợp với
                                                    hình phạt tù chung thân trước đó, bị cáo phải chấp hành hình phạt chung
                                                    là chung thân.</p>
                                                <p class="Normal">Ông Trầm Bê bị tuyên 3 năm tù, tổng hợp hình phạt <a
                                                        href="https://vnexpress.net/ong-tram-be-pham-cong-danh-lan-luot-linh-4-va-20-nam-tu-3788066.html"
                                                        rel="dofollow">4 năm tù</a> trước đó (giúp sức <a
                                                        href="https://vnexpress.net/topic/dai-an-that-thoat-16-000-ty-dong-21296#ctr=box_topic_phapluat_env_4_click"
                                                        rel="dofollow">Phạm Công Danh</a> gây thiệt hại cho VNCB khoảng
                                                    1.800 tỷ đồng), bị cáo phải chấp hành chung 7 năm tù.</p>
                                                <p class="Normal">Phan Huy Khang bị phạt 2 năm 6 tháng tù; các bị cáo khác
                                                    nhận 1 năm 3 tháng tù đến 2 năm tù giam, riêng Trầm Viết Trung lĩnh 1
                                                    năm tù treo.</p>
                                                <p class="Normal">Lý do được tòa đưa ra khi áp dụng mức hình phạt thấp hơn
                                                    so với đề nghị của VKS là do hậu quả của vụ án "cơ bản đã được khắc
                                                    phục".</p>
                                                <ul class="list-news  gaBoxLinkDisplay" data-campaign="Box-Related"
                                                    data-event-category="Article Link Display"
                                                    data-event-action="Box-Related" data-event-label="Item-0">
                                                    <li data-id="4138589"><a data-medium="Item-1"
                                                            href="https://vnexpress.net/ong-tram-be-linh-them-3-nam-tu-4138589.html"
                                                            title="Ông Trầm Bê lĩnh thêm 3 năm tù"
                                                            data-event-category="Article Link Click"
                                                            data-event-action="Box-Related" data-event-label="1"
                                                            data-itm-source="#vn_source=Detail&amp;vn_campaign=Box-Related&amp;vn_medium=Item-1&amp;vn_term=Desktop"
                                                            data-itm-added="1">Ông Trầm Bê lĩnh thêm 3 năm tù</a><span
                                                            class="meta-news">
                                                            <a class="count_cmt"
                                                                href="https://vnexpress.net/ong-tram-be-linh-them-3-nam-tu-4138589.html#box_comment_vne"
                                                                style="white-space: nowrap; display: none;"
                                                                data-event-category="Article Link Click"
                                                                data-event-action="Box-Related" data-event-label="1"
                                                                data-itm-source="#vn_source=Detail&amp;vn_campaign=Box-Related&amp;vn_medium=Item-1&amp;vn_term=Desktop"
                                                                data-itm-added="1">
                                                                <svg class="ic ic-comment">
                                                                    <use xlink:href="#Comment-Reg"></use>
                                                                </svg>
                                                                <span class="font_icon widget-comment-4138589-1"></span>
                                                            </a>
                                                        </span></li>
                                                    <li data-id="4138069"><a data-medium="Item-2"
                                                            href="https://vnexpress.net/ong-tram-be-nhieu-nguoi-muon-di-tu-thay-toi-4138069.html"
                                                            title="Ông Trầm Bê: 'Nhiều người muốn đi tù thay tôi'"
                                                            data-event-category="Article Link Click"
                                                            data-event-action="Box-Related" data-event-label="2"
                                                            data-itm-source="#vn_source=Detail&amp;vn_campaign=Box-Related&amp;vn_medium=Item-2&amp;vn_term=Desktop"
                                                            data-itm-added="1">Ông Trầm Bê: 'Nhiều người muốn đi tù thay
                                                            tôi'</a><span class="meta-news">
                                                            <a class="count_cmt"
                                                                href="https://vnexpress.net/ong-tram-be-nhieu-nguoi-muon-di-tu-thay-toi-4138069.html#box_comment_vne"
                                                                style="white-space: nowrap; display: none;"
                                                                data-event-category="Article Link Click"
                                                                data-event-action="Box-Related" data-event-label="2"
                                                                data-itm-source="#vn_source=Detail&amp;vn_campaign=Box-Related&amp;vn_medium=Item-2&amp;vn_term=Desktop"
                                                                data-itm-added="1">
                                                                <svg class="ic ic-comment">
                                                                    <use xlink:href="#Comment-Reg"></use>
                                                                </svg>
                                                                <span class="font_icon widget-comment-4138069-1">1</span>
                                                            </a>
                                                        </span></li>
                                                    <li data-id="4137344"><a data-medium="Item-3"
                                                            href="https://vnexpress.net/ong-tram-be-bi-de-nghi-6-7-nam-tu-4137344.html"
                                                            title="Ông Trầm Bê bị đề nghị 6-7 năm tù"
                                                            data-event-category="Article Link Click"
                                                            data-event-action="Box-Related" data-event-label="3"
                                                            data-itm-source="#vn_source=Detail&amp;vn_campaign=Box-Related&amp;vn_medium=Item-3&amp;vn_term=Desktop"
                                                            data-itm-added="1">Ông Trầm Bê bị đề nghị 6-7 năm tù</a><span
                                                            class="meta-news">
                                                            <a class="count_cmt"
                                                                href="https://vnexpress.net/ong-tram-be-bi-de-nghi-6-7-nam-tu-4137344.html#box_comment_vne"
                                                                style="white-space: nowrap; display: inline-block;"
                                                                data-event-category="Article Link Click"
                                                                data-event-action="Box-Related" data-event-label="3"
                                                                data-itm-source="#vn_source=Detail&amp;vn_campaign=Box-Related&amp;vn_medium=Item-3&amp;vn_term=Desktop"
                                                                data-itm-added="1">
                                                                <svg class="ic ic-comment">
                                                                    <use xlink:href="#Comment-Reg"></use>
                                                                </svg>
                                                                <span class="font_icon widget-comment-4137344-1">17</span>
                                                            </a>
                                                        </span></li>
                                                </ul>
                                                <p class="Normal" style="text-align:right;"><strong>Hải Duyên</strong></p>
                                            </article>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <article class="card campaign-style2 mb-4">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <img class="embed-responsive-item"
                                            src="https://kindmate.net/Uploads/2020/08/08/5f2e2c95a031d-cover.jpg">
                                    </div>
                                    <div class="card-body pb-3  d-flex flex-column align-items-start">
                                        <div class="campaign-main-info mb-auto w-100">
                                            <div
                                                class="campaign-badge-box d-flex justify-content-between align-items-center">
                                                <img width="50" height="50" class="mr-2 avatar bg-white img-fill"
                                                    src="https://kindmate.net/images/user-avatar.png"
                                                    alt="CLB tình nguyện Bé Khỏe Bé Ngoan">
                                            </div>
                                            <a href="https://kindmate.net/project/1404/trai-he-giao-duc-be-khoe-be-ngoan">
                                                <h6 class="card-title mt-3 mb-2 text-body ">TRẠI HÈ GIÁO DỤC BÉ KHỎE BÉ
                                                    NGOAN</h6>
                                            </a>
                                            <div class="card-text text-secondary">
                                                Dự án đem đến những kiến thức y khoa cơ bản, giúp các bệnh nhi tại bệnh viện
                                                Nhi Đồng 1
                                                và Nhi Đồng 2 có thể hiểu và tự chăm sóc bản thân.
                                            </div>
                                            <div class="card-text card-author mt-1">
                                                <span class="text-secondary">bởi</span>
                                                <a href="javascript:void(0)" class="campaign-author-link">CLB tình nguyện Bé
                                                    Khỏe Bé
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
                                        <div
                                            class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top w-100">
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
                                <article class="card campaign-style2 mb-4">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <img class="embed-responsive-item"
                                            src="https://kindmate.net/Uploads/2020/08/08/5f2e2c95a031d-cover.jpg">
                                    </div>
                                    <div class="card-body pb-3  d-flex flex-column align-items-start">
                                        <div class="campaign-main-info mb-auto w-100">
                                            <div
                                                class="campaign-badge-box d-flex justify-content-between align-items-center">
                                                <img width="50" height="50" class="mr-2 avatar bg-white img-fill"
                                                    src="https://kindmate.net/images/user-avatar.png"
                                                    alt="CLB tình nguyện Bé Khỏe Bé Ngoan">
                                            </div>
                                            <a href="https://kindmate.net/project/1404/trai-he-giao-duc-be-khoe-be-ngoan">
                                                <h6 class="card-title mt-3 mb-2 text-body ">TRẠI HÈ GIÁO DỤC BÉ KHỎE BÉ
                                                    NGOAN</h6>
                                            </a>
                                            <div class="card-text text-secondary">
                                                Dự án đem đến những kiến thức y khoa cơ bản, giúp các bệnh nhi tại bệnh viện
                                                Nhi Đồng 1
                                                và Nhi Đồng 2 có thể hiểu và tự chăm sóc bản thân.
                                            </div>
                                            <div class="card-text card-author mt-1">
                                                <span class="text-secondary">bởi</span>
                                                <a href="javascript:void(0)" class="campaign-author-link">CLB tình nguyện Bé
                                                    Khỏe Bé
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
                                        <div
                                            class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top w-100">
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
                        </div>
                    </article>

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

            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
