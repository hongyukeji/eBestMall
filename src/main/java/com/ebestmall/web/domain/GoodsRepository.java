package com.ebestmall.web.domain;

import org.springframework.data.domain.*;
import org.springframework.data.repository.*;

import java.util.List;

public interface GoodsRepository extends CrudRepository<Goods, Integer> {
    List<Goods> findByGoodsName(String goodsName);
}
