package com.ebestmall.web.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class MainController {

    @GetMapping(value = {"", "/", "/index"})
    public String index() {
        return "main/index";
    }

    @GetMapping("article")
    public String article() {
        return "article/index";
    }

    @GetMapping("auth/login")
    public String authLogin() {
        return "auth/login";
    }

    @GetMapping("auth/register")
    public String authRegister() {
        return "auth/register";
    }

    @GetMapping("cart")
    public String cart() {
        return "cart/index";
    }

    @GetMapping("cart/confirm")
    public String cartConfirm() {
        return "cart/confirm";
    }

    @GetMapping("cart/create")
    public String cartCreate() {
        return "cart/create";
    }

    @GetMapping("goods")
    public String goods() {
        return "goods/index";
    }

    @GetMapping("search")
    public String search() {
        return "search/index";
    }

    @GetMapping("user")
    public String user() {
        return "user/index";
    }
}
