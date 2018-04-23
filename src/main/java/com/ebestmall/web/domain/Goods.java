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

}
