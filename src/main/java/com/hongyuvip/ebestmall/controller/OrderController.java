package com.hongyuvip.ebestmall.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/order")
public class OrderController {

    @RequestMapping(value = {"", "/", "/index"})
    public String index(Model model) {
        model.addAttribute("message", "This is an example of a message.");
        return "order/index";
    }

    @RequestMapping(value = {"/create"})
    public String create(Model model) {
        model.addAttribute("message", "This is an example of a message.");
        return "order/create";
    }

}
