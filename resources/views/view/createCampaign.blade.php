@extends('view.layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/createCampaign.css') }}">
@endsection

@section('content')
    <main class="main createCampaign">
        <section class="my-2 container">
            <h1 class="mb-4">Tạo chiến dịch mới</h1>
            <form method="POST" action="https://kindmate.net/app/campaign" accept-charset="UTF-8" id="campaign-form"
                enctype="multipart/form-data"><input name="_token" type="hidden"
                    value="wt5X8E98lJwyot1gRFQE2QvsNztJNdu9Gge8H22d">
                <div class="alert alert-danger" id="error-box" hidden="">
                    <ul class="list-unstyled mb-0">
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1">
                        <div class="embed-responsive embed-responsive-16by9 image-file-com">
                            <div class="close">
                                ×
                            </div>
                            <div class="embed-responsive-item d-flex justify-content-center align-items-center text-center">
                                <label for="campaign-cover">
                                    <i class="fas fa-camera" style="font-size: 30px"></i>
                                    <div>Ảnh đại diện <br>850 x 480 pixel</div>
                                </label> <input accept="image/*" hidden="" id="campaign-cover" name="cover" type="file">
                            </div>
                        </div>

                        <div class="form-group mt-3 mb-5">
                            <label for="campaign-embed">Mã nhúng video (không bắt buộc)</label> <textarea
                                id="campaign-description" class="form-control"
                                placeholder="Hỗ trợ mã nhúng có dạng <iframe src='https://www.youtube.com/embed/8Qr9WW2bLAQ' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"
                                rows="3" maxlength="1000" name="videoEmbedCode" cols="50"></textarea>
                            <small id="campaign-embed-help" class="form-text text-muted"><span
                                    class="text-primary font-weight-bold">Tips:</span> Để thực hiện việc lấy mã nhúng bạo
                                vào video Youtube bạn chọn &gt; chọn Chia sẻ &gt; Embeb &gt; Copy mã Nhúng. Hỗ trợ cả mã
                                nhúng của Facebook, Vimeo... và các trang tương tự.</small>
                        </div>
                        <div class="form-group mt-4">
                            <h5>Nội dung chiến dịch*</h5>
                            <textarea name="editor1" id="editor1"></textarea>

                        </div>
                        <div class="d-flex justify-content-between mt-4">
                            <div class="publish-wrap">
                                <button type="submit" class="btn btn-primary">Lưu chiến dịch</button>
                            </div>
                            <button type="button" class="btn btn-danger" onclick="window.history.back();">Hủy bỏ</button>
                        </div>
                    </div>
                    <div class="col-md-4 order-1 order-md-2">
                        <div class="form-group">
                            <label for="campaign-name">Tên chiến dịch*</label> <input id="campaign-name" required=""
                                class="form-control" placeholder="Tên chiến dịch" maxlength="255" name="name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="campaign-description">Mô tả ngắn*</label> <textarea id="campaign-description"
                                required="" class="form-control" placeholder="Mô tả ngắn" rows="3" maxlength="255"
                                name="description" cols="50"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="campaign-money">Số tiền mong muốn*</label>
                            <div class="input-group">
                                <input id="campaign-money" required="" class="form-control" placeholder="Số tiền mong muốn"
                                    maxlength="15" name="money" type="number">
                                <div class="input-group-append">
                                    <span class="input-group-text">VNĐ</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="campaign-deadline">Ngày hết hạn*</label>
                            <div class="input-group single-date">
                                <input id="campaign-deadline" required=""
                                    placeholder="Ngày hết hạn"  class="form-control" maxlength="255" name="deadline" type="date">

                            </div>
                        </div>

                        <div class="form-group mt-5">
                            <h6 class="text-dark">Chọn thông tin tổ chức hoặc tạo tổ chức mới (không bắt buộc)
                            </h6>
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="select-organization">Chọn tổ chức</label>
                                        <select name="organization_id" id="select-organization" class="form-control">
                                            <option value="" selected="">Chọn tổ chức</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Thêm tổ chức mới
                                </button>

                            </div>

                            <!-- Modal -->

                        </div>

                        <div class="py-3">
                            <h6 class="text-dark collapsed" data-toggle="collapse" href="#collapseActionButton"
                                role="button" aria-expanded="false" aria-controls="collapseActionButton">
                                Chỉnh sửa nút ủng hộ (không bắt buộc) <i class="zmdi zmdi-chevron-down zmdi -hc-lg"></i>
                            </h6>
                            <div class="collapse" id="collapseActionButton" style="">
                                <div class="form-group">
                                    <label for="campaign-action-text">Tên nút</label> <select id="campaign-action-text"
                                        class="form-control" name="action_label">
                                        <option value="Ủng hộ ngay">Ủng hộ ngay</option>
                                        <option value="Liên hệ ngay">Liên hệ ngay</option>
                                        <option value="Gửi thông tin">Gửi thông tin</option>
                                        <option value="Đến trang ủng hộ">Đến trang ủng hộ</option>
                                        <option value="Tôi muốn ủng hộ">Tôi muốn ủng hộ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="campaign-action-link">Đường dẫn</label> <input id="campaign-action-link"
                                        class="form-control"
                                        placeholder="Đường dẫn nút ủng hộ: http://your-custom-donate-link" maxlength="255"
                                        name="action_link" type="text">
                                    <small id="campaign-action-link-help" class="form-text text-muted"><span
                                            class="text-danger font-weight-bold">Chú ý:</span> Thao tác này sẽ dẫn người
                                        dùng đến một trang khác không phải trang ủng hộ của Kindmate. Hãy chắc chắn bạn hiểu
                                        về thao tác này.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form method="POST" action="https://kindmate.net/admin/organization" accept-charset="UTF-8"
                id="form-organization" enctype="multipart/form-data"><input name="_token" type="hidden"
                    value="wt5X8E98lJwyot1gRFQE2QvsNztJNdu9Gge8H22d">
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tạo mới tổ chức</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row no-gutters" id="organization">
                                    <div class="col-4">
                                        <div class="embed-responsive embed-responsive-1by1 image-file-com mt-2">

                                            <div
                                                class="embed-responsive-item d-flex justify-content-center align-items-center text-center">
                                                <label for="campaign-org-cover">
                                                    <i class="fas fa-camera" style="font-size: 30px"></i>
                                                </label> <input accept="image/*" hidden="" id="campaign-org-cover"
                                                    name="avatar" type="file">
                                            </div>
                                        </div>
                                        <small id="campaign-org-cover-help" class="form-text text-muted text-center">
                                            Logo tổ chức <br> 100 x 100 pixel
                                        </small>
                                    </div>
                                    <div class="col-8 pl-3">
                                        <div class="form-group">
                                            <label for="campaign-org-name">Tên tổ chức</label> <input id="campaign-org-name"
                                                class="form-control" placeholder="Tên tổ chức" maxlength="255" name="name"
                                                type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="campaign-org-name">Tên viết tắt</label> <input
                                                id="campaign-org-short-name" class="form-control" placeholder="Tên viết tắt"
                                                maxlength="255" name="short_name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="campaign-description">Mô tả ngắn</label> <textarea
                                                id="organization_introduction" class="form-control" placeholder="Mô tả ngắn"
                                                rows="3" maxlength="255" name="introduction" cols="50"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="campaign-org-name">Địa chỉ</label> <input id="campaign-org-address"
                                                class="form-control" placeholder="Địa chỉ" maxlength="255" name="address"
                                                type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="campaign-org-name">Email</label> <input id="campaign-org-email"
                                                class="form-control" placeholder="Email" maxlength="255" name="email"
                                                type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="campaign-org-link">Đường link facebook hoặc messenger</label> <input
                                                id="messenger-link" class="form-control" placeholder="Facebook/Messenger"
                                                maxlength="255" name="facebook" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="campaign-org-link">Số điện thoại</label>
                                            <input id="organization_phone" class="form-control" placeholder="Số điện thoai"
                                                maxlength="15" name="phone" type="number">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary">Tạo mới tổ chức</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </section>
    </main>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
        $(function() {
            CKEDITOR.replace('editor1');
        });

    </script>
@endsection
