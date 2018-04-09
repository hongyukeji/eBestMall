package com.hongyuvip.ebestmall.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/article")
public class ArticleController {

    @RequestMapping(value = {"", "/", "/index"})
    public String index(Model model) {
        model.addAttribute("example", "The is a Thymeleaf example page.");
        return "article/index";
    }

}
