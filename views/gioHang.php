<?php require_once './views/layouts/header.php'; ?>

<?php require_once './views/layouts/menu.php'; ?>
<main><br><br><br><br>
  <div class="mb-4 pb-4"></div>
  <section class="shop-checkout container">
    <div class="checkout-steps">
      <a href="<?= '?act=gio-hang' ?>" class="checkout-steps__item active">
        <span class="checkout-steps__item-number">01</span>
        <span class="checkout-steps__item-title">
          <span>Giỏ hàng</span>
          <em></em>
        </span>
      </a>
      <a href="shop_checkout.html" class="checkout-steps__item">
        <span class="checkout-steps__item-number">02</span>
        <span class="checkout-steps__item-title">
          <span>Thanh toán và vận chuyển</span>
        </span>
      </a>
      <a href="shop_order_complete.html" class="checkout-steps__item">
        <span class="checkout-steps__item-number">03</span>
        <span class="checkout-steps__item-title">
          <span>Confirmation</span>
        </span>
      </a>
    </div>
    <div class="shopping-cart mb-5">
      <div class="cart-table__wrapper">
        <!-- <form action=" " method="POST" class="position-relative bg-body"> -->
          <table class="cart-table">
            <thead>
              <tr>
                <th>Ảnh sản phẩm</th>
                <th></th>
                <th>Giá tiền</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th></th>
              </tr>
            </thead>
            
              <tbody>
              <?php
                $tongGioHang = 0;
                foreach ($chiTietGioHang as $sanPham) :
              ?>
                <tr>
                  <td>
                    <div class="shopping-cart__product-item">
                      <a href="<?= "?act=chi-tiet-san-pham&id_san_pham=" . $sanPham['san_pham_id'] ?>"><img loading="lazy" src="<?= $sanPham['img'] ?>" width="100" height="110" alt="" class="pc__img"></a>
                    </div>
                  </td>
                  <td>
                    <div class="shopping-cart__product-item__detail">
                      <h4><a href=""><?= $sanPham['ten'] ?></a></h4>
                    </div>
                  </td>

                  <td>
                    <span class="shopping-cart__product-price">
                      <?php if ($sanPham['gia_km']) { ?>
                        <span style="color: red;"> <?= number_format($sanPham['gia_km'], 0, ',', '.') ?>đ</span><br>
                        <span><del><?= number_format($sanPham['gia_ban'], 0, ',', '.') ?>đ</del></span>
                      <?php } else { ?>
                        <span> <?= number_format($sanPham['gia_ban'], 0, ',', '.') ?>đ</span>
                      <?php } ?>
                    </span>
                  </td>
                  <td>
                    <div class="qty-control position-relative">
                      <input type="number" name="so_luong[<?= $sanPham['san_pham_id'] ?>]" class="qty-control__number text-center" value="<?= $sanPham['so_luong'] ?>" min="1" data-gia="<?= $sanPham['gia_km'] ?? $sanPham['gia_ban'] ?>" data-san-pham-id="<?= $sanPham['san_pham_id'] ?>">
                      <div class="qty-control__reduce">-</div>
                      <div class="qty-control__increase">+</div>
                    </div><!-- .qty-control -->
                  </td>
                  <td>
                    <span class="shopping-cart__subtotal" id="subtotal-<?= $sanPham['san_pham_id'] ?>">
                      <?php
                      $tongtien = 0;
                      if ($sanPham['gia_khuyen_mai']) {
                        $tongtien = $sanPham['gia_khuyen_mai'] * $sanPham['so_luong'];
                      } else {
                        $tongtien = $sanPham['gia_ban'] * $sanPham['so_luong'];
                      }
                      $tongGioHang += $tongtien;
                      echo number_format($tongtien, 0, ',', '.') . ' đ';
                      ?>
                    </span>
                  </td>
                  <td>
                    <!-- <button onclick="return confirm('xoa')">Xoá</button> -->
                      <form action="<?= '?act=xoa-san-pham-gio-hang' ?>" method="POST">
                        <input type="hidden" name="san_pham_id" value="<?= $sanPham['san_pham_id'] ?>">
                        <button type="submit" class=" btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?')"><i class="bi bi-trash3-fill"></i></button>
                      </form>
                  </td>


                </tr>
            <?php endforeach ?>

              </tbody>

          </table>
          <div class="cart-table-footer">
            <button type="submit" class="btn btn-light">Cập nhật giỏ hàng</button>
          </div>
        <!-- </form> -->
      </div>

      <div class="shopping-cart__totals-wrapper">
        <div class="sticky-content">
          <div class="shopping-cart__totals">
            <h3>Tổng tiền giỏ hàng</h3>
            <table class="cart-totals">
              <tbody>
                <tr>
                  <th>Tổng tiền sản phẩm</th>
                  <td> <?php echo number_format($tongGioHang, 0, ',', '.') ?> đ </td>
                </tr>
                <tr>
                  <th>Vận chuyển</th>
                  <td>
                    <label class="form-check-label mb-2" for="free_shipping">
                      <?php $phiship = 50000;
                      if ($tongGioHang > 0) {
                        echo number_format($phiship, 0, ',', '.') . ' đ';
                      } else {
                        echo "0 đ";
                      }
                      ?>
                    </label>
                  </td>
                </tr>
                <tr>
                  <th>Tổng thanh toán</th>
                  <td><?php $phiship = 50000;
                      if ($tongGioHang > 0) {
                        echo number_format($tongGioHang + $phiship, 0, ',', '.') . ' đ';
                      } else {
                        echo "0 đ";
                      }
                      ?> </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="mobile_fixed-btn_wrapper">
            <div class="button-wrapper container">
              <?php if ($tongGioHang > 0): ?>
                <a href="?act=thanh-toan"><button class="btn btn-primary btn-checkout">Bắt đầu thanh toán</button></a>
              <?php else: ?>
                <button class="btn btn-primary btn-checkout" disabled>Không có sản phẩm trong giỏ hàng</button>
              <?php endif; ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <style>
    .shopping-cart__product-item img {
      width: 150px;
      /* Chiều rộng ảnh */
      height: 150px;
      /* Chiều cao ảnh */
      object-fit: cover;
      /* Cắt hoặc co dãn ảnh để vừa với khung */
      display: block;
      /* Đảm bảo ảnh không ảnh hưởng đến các phần tử khác */
      margin: 0 auto;
      /* Căn giữa ảnh trong phần tử cha */
    }

    .shopping-cart__product-item {
      display: flex;
      justify-content: center;
      /* Căn giữa nội dung theo chiều ngang */
      align-items: center;
      /* Căn giữa nội dung theo chiều dọc */
      text-align: center;
      /* Đảm bảo nội dung văn bản căn giữa nếu có */
      height: 110px;
      /* Chiều cao của dòng để ảnh luôn vừa khung */
    }
  </style>
</main>

<?php require_once './views/layouts/footer.php'; ?>