const provinceSelect = document.getElementById('province_id');
const citySelect = document.getElementById('city_id');

provinceSelect.addEventListener('change', function() {
    const selectedProvinceId = this.value;
    const cities = Array.from(citySelect.options);
    cities.forEach(function(option) {
        const isCityInSelectedProvince = option.dataset.province === selectedProvinceId;
        option.style.display = isCityInSelectedProvince ? 'block' : 'none';
        if (!isCityInSelectedProvince && option.selected) {
            option.selected = false;
        }
    });
});