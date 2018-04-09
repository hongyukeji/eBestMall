package com.hongyuvip.ebestmall.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/goods")
public class GoodsController {

    @RequestMapping(value = {"", "/", "/index"})
    public String index() {
        return "goods/index";
    }

    @RequestMapping(value = {"/list"})
    public String list() {
        return "goods/list";
    }

}
