package com.hongyuvip.ebestmall.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/blank")
public class BlankController {

    @RequestMapping(value = {"", "/", "/index"})
    public String index(Model model) {
        model.addAttribute("message", "This is an example of a message.");
        return "blank/index";
    }

}
