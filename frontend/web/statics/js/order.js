new Vue({
    el: "#content",
    data: {
        limitNum: 1,
        addressList: [],
        addressDefault: 0
    },
    mounted: function () {
        this.$nextTick(function () {
            this.getAddressList();
        });
    },
    computed: {
        filterAddress: function () {
            return this.addressList.slice(0, this.limitNum);
        }
    },
    methods: {
        getAddressList: function () {
            var _this = this;
            this.$http.get("data/addressData.json", {"id": 1}).then(function (response) {
                var res = response.data;
                if (res.status = true) {
                    _this.addressList = res.result;
                }
            });
        },
        setAddressDefault: function (addressId) {
            this.addressList.forEach(function (address, index) {
                if (address.addressId === addressId) {
                    address.isDefault = true;
                } else {
                    address.isDefault = false;
                }
            });
        }
    }
});