<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> HangChietKhau.Com</h1>
        <p>Tuyển CTV bán hàng chiết khấu cao</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="<?php echo $BASE_URL; ?>/ctv">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="<?php echo $BASE_URL; ?>/ctv/san-pham">Danh sách sản phẩm</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="productTable">
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá bán</th>
                                <th>Hoa hồng</th>
                                <th>Số lượng còn</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($data)): ?>
                                <?php foreach ($data as $v): ?>
                                    <?php
                                    if (empty($v['id'])) {
                                        continue;
                                    }
                                    ?>
                                    <tr>
                                        <td><img src="<?php echo $v['image']; ?>" width="100px"/></td>
                                        <td><?php echo $v['name']; ?></td>
                                        <td><?= number_format($v['price']); ?></td>
                                        <td><?= number_format($v['wholesale_income']); ?></td>
                                        <td><?= $v['qty']; ?></td>
                                        <td><button type="button" class="btn btn-primary btnNewsUrl" data-news-url="<?= $v['aff_news_url']; ?>" data-aff-id="<?= $AppUI['id']; ?>">Bài viết</button></td>
                                        <td><a target="_blank" class="btn btn-primary" href="<?php echo $BASE_URL; ?>/san-pham/<?= $v['slug']; ?>?aff_id=<?= $AppUI['id']; ?>">Xem chi tiết</a></td>
                                        <td><button class="btn btn-primary btnCopyLink" data-link="<?php echo $BASE_URL; ?>/san-pham/<?= $v['slug']; ?>?aff_id=<?= $AppUI['id']; ?>">Copy link</button></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="newsModal" class="modal fade"  role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Danh sách bài viết</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li><a href="#">aaaa</a></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#productTable').DataTable();
    $(document).ready(function () {
        $('.btnCopyLink').on('click', function () {
            var link = $(this).attr('data-link');
            copyToClipboard(link);
            alert('Copied');
        });
        $('.btnNewsUrl').on('click', function () {
            var urls = $(this).attr('data-news-url');
            var affId = $(this).attr('data-aff-id');
            var modal = $('#newsModal');
            urls = urls.split('\n');
            var i;
            var el = '';
            for (i = 0; i < urls.length; i++) {
                var url = urls[i].split(':::');
                var title = url[0];
                var _url = url[1] + '&aff_sub1=' + affId;
                el += '<li>';
                el += '<a target="_blank" href="' + _url + '">' + title + '</a>';
                el += '</li>';
            }
            $('#newsModal .modal-body ul').html(el);
            modal.modal();
        });
    });
    function copyToClipboard(text) {
        if (window.clipboardData && window.clipboardData.setData) {
            // Internet Explorer-specific code path to prevent textarea being shown while dialog is visible.
            return clipboardData.setData("Text", text);

        }
        else if (document.queryCommandSupported && document.queryCommandSupported("copy")) {
            var textarea = document.createElement("textarea");
            textarea.textContent = text;
            textarea.style.position = "fixed";  // Prevent scrolling to bottom of page in Microsoft Edge.
            document.body.appendChild(textarea);
            textarea.select();
            try {
                return document.execCommand("copy");  // Security exception may be thrown by some browsers.
            }
            catch (ex) {
                console.warn("Copy to clipboard failed.", ex);
                return false;
            }
            finally {
                document.body.removeChild(textarea);
            }
        }
    }
</script>