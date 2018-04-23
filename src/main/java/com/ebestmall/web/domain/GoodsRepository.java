package com.ebestmall.web.domain;

import org.springframework.data.domain.*;
import org.springframework.data.repository.*;

public interface GoodsRepository extends Repository<Goods, Integer> {

    Page<Goods> findAll(Pageable pageable);

    Goods findByGoodsNameAndGoodsSloganAllIgnoringCase(String name, String goodsSlogan);

}
