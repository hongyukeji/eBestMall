package com.ebestmall.web.controller.frontend;

import com.ebestmall.web.domain.Goods;
import com.ebestmall.web.domain.GoodsRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/goods")
public class GoodsController {

    @Autowired
    private GoodsRepository goodsRepository;

    @GetMapping(value = {"", "/", "/index"})
    public String goods(Model model) {
        //model.addAttribute("goodsInfo", goodsRepository.findById(1));
        //System.out.println(goodsRepository.findById(1).get().getGoodsName());
        /*for (Goods goods : goodsRepository.findAll()) {
            System.out.println("findAll:" + goods.toString());
        }*/
        return "frontend/goods/index";
    }
}
