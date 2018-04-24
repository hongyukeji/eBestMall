package com.ebestmall.web.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class MainController {

    @GetMapping(value = {"", "/", "/index"})
    public String index() {
        return "frontend/main/index";
    }

    @GetMapping("/article")
    public String article() {
        return "frontend/article/index";
    }

    @GetMapping("/auth/login")
    public String authLogin() {
        return "frontend/auth/login";
    }

    @GetMapping("/auth/register")
    public String authRegister() {
        return "frontend/auth/register";
    }

    @GetMapping("/cart")
    public String cart() {
        return "frontend/cart/index";
    }

    @GetMapping("/cart/confirm")
    public String cartConfirm() {
        return "frontend/cart/confirm";
    }

    @GetMapping("/cart/create")
    public String cartCreate() {
        return "frontend/cart/create";
    }

    @GetMapping("/search")
    public String search() {
        return "frontend/search/index";
    }

    @GetMapping("/user")
    public String user() {
        return "frontend/user/index";
    }

}
