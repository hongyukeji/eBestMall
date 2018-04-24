package com.ebestmall.web.controller.backend;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("${app.backend.prefix.name}")
public class BackendController {

    @RequestMapping(value = {"", "/", "/index"})
    public String index(Model model) {
        model.addAttribute("example", "The is a Thymeleaf example page.");
        return "backend/main/index";
    }

}
