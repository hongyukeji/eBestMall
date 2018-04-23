package com.ebestmall.core.repository;

import com.ebestmall.core.entity.Goods;
import org.springframework.data.jpa.repository.JpaRepository;

public interface GoodsRepository extends JpaRepository<Goods, Integer> {
}
