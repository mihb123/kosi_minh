<div class="col-md-6">
    <label for="fullname" class="form-label">Họ tên</label>
    <input type="text" class="form-control" id="fullname" name="fullname"
        value="<?= $customer->getShippingName() ?? '' ?>">
</div>
<div class="col-md-6">
    <label for="phone" class="form-label">Số điện thoại</label>
    <input type="number" class="form-control" id="phone" name="phone"
        value="<?= $customer->getShippingPhone() ?? '' ?>">
</div>
<div class="col-lg-6  mt-3">
    <label for="province" class="form-label">Tỉnh/Thành phố</label>
    <select class="form-select" id="province">
        <option>Chọn Tỉnh/Thành phố</option>
        <?php foreach ($provinces as $province) { ?>

        <option <?= $selected_province_id == $province->getId() ? 'selected' : '' ?> value="<?= $province->getId() ?>">
            <?= $province->getName() ?></option> <?php } ?>
    </select>
</div>
<div class="col-lg-6 mt-3 ">
    <label for="district" class="form-label">Quận/Huyện</label>
    <select class="form-select" id="district">
        <option>Chọn Quận/Huyện</option>
        <?php foreach ($districts as $district) { ?>

        <option <?= $selected_district_id == $district->getId() ? 'selected' : '' ?> value="<?= $district->getId() ?>">
            <?= $district->getName() ?></option> <?php } ?>
    </select>
</div>
<div class="col-12 mt-3 ">
    <label for="ward" class="form-label">Phường/Xã</label>
    <select name="ward_id" class="form-select" id="ward">
        <option>Chọn Phường/Xã</option>
        <?php foreach ($wards as $ward) { ?>

        <option <?= $selected_ward_id == $ward->getId() ? 'selected' : '' ?> value="<?= $ward->getId() ?>">
            <?= $ward->getName() ?></option> <?php } ?>
    </select>
</div>
<div class="mt-3 col-12">
    <label for="address" class="form-label">Số nhà, đường .v.v</label>
    <input type="text" class="form-control" id="address" name="address"
        value="<?= $customer->getShippingAddress() ?? '' ?>">
</div>