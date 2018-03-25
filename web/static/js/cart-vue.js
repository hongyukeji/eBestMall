new Vue({
    el: "#content",
    data: {
        selectedAll: false,
        totalMoney: 0,
        totalNumber: 0,
        cartIds: [],
        storeList: []
    },
    filters: {},
    mounted: function () {
        this.$nextTick(function () {
            this.cartList();
        });
    },
    methods: {
        //请求购物车json数据
        cartList: function () {
            var _this = this;
            this.$http.get("data/cartData.json", {"id": 1}).then(function (res) {
                _this.storeList = res.body.result.storeList;

                //添加selected
                for (var i = 0; i < this.storeList.length; i++) {
                    this.$set(this.storeList[i], "selectedStore", false);
                    this.$set(this.storeList[i], "sellength", "0");
                    for (var n = 0; n < this.storeList[i].goodsList.length; n++) {
                        this.$set(this.storeList[i].goodsList[n], "selectedGoods", false);
                    }
                }
            });
        },

        //数量发生改变
        changeNumber: function (goods) {
            if (isNaN(goods.goodsNumber)) {
                goods.goodsNumber = 1;
            }
            if (goods.goodsNumber > 9999) {
                goods.goodsNumber = 9999;
            }
            if (goods.goodsNumber <= 0) {
                goods.goodsNumber = 1;
            }
            this.calcTotalPrice();
            //console.log(goods.goodsNumber); //商品数量
            //console.log('此处执行ajax更新购物车列表中商品数量');
        },

        //操作数量
        operationNumber: function (goods, way) {
            if (way > 0) {
                goods.goodsNumber++;
            } else {
                goods.goodsNumber--;
            }
            this.changeNumber(goods);
        },

        //删除购物车商品
        delGoods: function (index1, index2) {
            //console.log(index1, index2);
            this.storeList[index1].goodsList.splice(index2, 1);
            //console.log(this.storeList[index1].goodsList.length);
            if (this.storeList[index1].goodsList.length === 0) {
                this.storeList.splice(index1, 1);
            }
            this.calcTotalPrice();
        },

        delAllGoods: function () {
            this.storeList.splice(0, this.storeList.length);
            this.selectedAll = false;
            this.calcTotalPrice();
        },

        //购物车总价计算
        calcTotalPrice: function () {
            this.totalMoney = 0;
            this.totalNumber = 0;
            this.cartIds = [];
            for (var i = 0; i < this.storeList.length; i++) {
                for (var n = 0; n < this.storeList[i].goodsList.length; n++) {
                    // console.log(this.storeList[i].goodsList[n].selectedGoods);
                    if ((this.storeList[i].goodsList[n].selectedGoods) === true) {
                        this.cartIds.push(this.storeList[i].goodsList[n].cartId);
                        this.totalNumber += parseInt(this.storeList[i].goodsList[n].goodsNumber);
                        this.totalMoney += this.storeList[i].goodsList[n].goodsPrice * this.storeList[i].goodsList[n].goodsNumber;
                    }
                }
            }
            // console.log(this.cartIds);    //购物车id
        },

        //全选/再次单击取消全选
        selectedAllEvent: function () {
            for (var i = 0; i < this.storeList.length; i++) {
                var store = this.storeList[i];
                store.sellength = this.selectedAll ? store.goodsList.length : 0;
                store.selectedStore = this.selectedAll;
                for (var j = 0; j < store.goodsList.length; j++) {
                    store.goodsList[j].selectedGoods = this.selectedAll;
                }
            }
            this.calcTotalPrice();
        },

        //该商家下面所有商品选中/再次单击取消选中/所有商家都为选中状态自动更新全选为选中状态
        selectedStoreEvent: function (index1) {
            var store = this.storeList[index1];
            var res = store.selectedStore;
            store.sellength = res ? store.goodsList.length : 0;

            for (var i = 0; i < store.goodsList.length; i++) {
                store.goodsList[i].selectedGoods = res;
            }
            this.selectedAll = true;
            for (var j = 0; j < this.storeList.length; j++) {
                if (!this.storeList[j].selectedStore) {
                    this.selectedAll = false;
                    break;
                }
            }
            this.calcTotalPrice();
        },

        //选中商品/商家下面所有商品为选中状态自动更新商家也为选中状态
        selectedGoodsEvent: function (index1, index2) {
            var store = this.storeList[index1];
            var Goods = store.goodsList[index2];
            store.sellength = Goods.selectedGoods ? parseInt(store.sellength) + 1 : parseInt(store.sellength) - 1;
            store.selectedStore = store.sellength === store.goodsList.length;
            this.selectedAll = true;
            for (var j = 0; j < this.storeList.length; j++) {
                if (!this.storeList[j].selectedStore) {
                    this.selectedAll = false;
                    break;
                }
            }
            this.calcTotalPrice();
        }
    }
});
Vue.filter("money", function (value) {
    return value.toFixed(2);
});