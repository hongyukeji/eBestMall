package com.hongyuvip.ebestmall.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class HomeController {

    @RequestMapping(value = {"", "/", "/index"})
    public String index(Model model) {
        model.addAttribute("homeInfo", "The is a Home page.");
        return "home/index";
    }

    @RequestMapping(value = {"/about"})
    public String list() {
        return "home/about";
    }

}
