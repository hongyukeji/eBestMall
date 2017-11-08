<?php

namespace App\Admin\Extensions\Nav;

class Links
{
    public function __toString()
    {
        return <<<HTML

<li><a href="/" target="_blank" title="查看网站首页" aria-expanded="true"><i class="fa fa-television"></i></a></li>
<!--<li>
    <a href="#">
      <i class="fa fa-envelope-o"></i>
      <span class="label label-success">4</span>
    </a>
</li>-->

<!--<li>-->
    <!--<a href="#">-->
      <!--<i class="fa fa-bell-o"></i>-->
      <!--<span class="label label-warning">7</span>-->
    <!--</a>-->
<!--</li>-->

<!--<li>-->
    <!--<a href="#">-->
      <!--<i class="fa fa-flag-o"></i>-->
      <!--<span class="label label-danger">9</span>-->
    <!--</a>-->
<!--</li>-->

HTML;
    }
}