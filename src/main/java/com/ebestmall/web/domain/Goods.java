package com.ebestmall.web.domain;

import javax.persistence.*;
import java.math.BigDecimal;

@Entity(name = "goods")
public class Goods {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Integer goodsId;

    @Column()
    private String goodsName;

    @Column
    private String goodsSlogan;

    @Column(precision = 10, scale = 2)
    private BigDecimal goodsPrice;

    @Override
    public String toString() {
        return String.format(
                "Goods[goodsId=%d, goodsName='%s', goodsSlogan='%s'], goodsPrice='%s']",
                goodsId, goodsName, goodsSlogan, goodsPrice);
    }

    public Integer getGoodsId() {
        return goodsId;
    }

    public void setGoodsId(Integer goodsId) {
        this.goodsId = goodsId;
    }

    public String getGoodsName() {
        return goodsName;
    }

    public void setGoodsName(String goodsName) {
        this.goodsName = goodsName;
    }

    public String getGoodsSlogan() {
        return goodsSlogan;
    }

    public void setGoodsSlogan(String goodsSlogan) {
        this.goodsSlogan = goodsSlogan;
    }

    public BigDecimal getGoodsPrice() {
        return goodsPrice;
    }

    public void setGoodsPrice(BigDecimal goodsPrice) {
        this.goodsPrice = goodsPrice;
    }
}
