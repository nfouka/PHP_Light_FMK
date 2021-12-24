<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /base/base.html.twig */
class __TwigTemplate_2bef00c675feaaea1d3169476d58e88dcc6d2f5ee4c0ce9c059117aeb0282d35 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>LightFramework PHP Compiler</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"/public/assets/favicon.ico\" />
    <!-- Font Awesome icons (free version)-->
    <script src=\"https://use.fontawesome.com/releases/v5.15.4/js/all.js\" crossorigin=\"anonymous\"></script>
    <!-- Google fonts-->
    <link href=\"https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=\"/public/css/styles.css\" rel=\"stylesheet\">
</head>
<body>
<!-- Navigation-->
<nav class=\"navbar navbar-expand-lg navbar-light\" id=\"mainNav\">
    <div class=\"container px-4 px-lg-5\">
        <a class=\"navbar-brand\" href=\"index.html\">Start Bootstrap</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ms-auto py-4 py-lg-0\">
                <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"index.html\">Home</a></li>
                <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"about.html\">About</a></li>
                <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"post.html\">Sample Post</a></li>
                <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"contact.html\">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Header-->
<header class=\"masthead\" style=\"background-image: url('/public/assets/img/home-bg.jpg')\">
    <div class=\"container position-relative px-4 px-lg-5\">
        <div class=\"row gx-4 gx-lg-5 justify-content-center\">
            <div class=\"col-md-10 col-lg-8 col-xl-7\">
                <div class=\"site-heading\">
                    <h1>LightFrameWork</h1>
                    <span class=\"subheading\">A Fast Framework based on Symfony 5 , Dr ";
        // line 44
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["LightFrameWork"] ?? null)), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <div id=\"content\">";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
        </div>
    </div>
</div>
<!-- Footer-->
<footer class=\"border-top\">
    <div class=\"container px-4 px-lg-5\">
        <div class=\"row gx-4 gx-lg-5 justify-content-center\">
            <div class=\"col-md-10 col-lg-8 col-xl-7\">
                <ul class=\"list-inline text-center\">
                    <li class=\"list-inline-item\">
                        <a href=\"#!\">
                                    <span class=\"fa-stack fa-lg\">
                                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                                        <i class=\"fab fa-twitter fa-stack-1x fa-inverse\"></i>
                                    </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"#!\">
                                    <span class=\"fa-stack fa-lg\">
                                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                                        <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
                                    </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"#!\">
                                    <span class=\"fa-stack fa-lg\">
                                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                                        <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                                    </span>
                        </a>
                    </li>
                </ul>
                <div class=\"small text-center text-muted fst-italic\">Copyright &copy; Your Website 2022 By Nadir Fouka</div>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
<!-- Core theme JS-->
<script src=\"/public/js/scripts.js\"></script>
</body>
</html>
";
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "/base/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 54,  83 => 44,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>LightFramework PHP Compiler</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"/public/assets/favicon.ico\" />
    <!-- Font Awesome icons (free version)-->
    <script src=\"https://use.fontawesome.com/releases/v5.15.4/js/all.js\" crossorigin=\"anonymous\"></script>
    <!-- Google fonts-->
    <link href=\"https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=\"/public/css/styles.css\" rel=\"stylesheet\">
</head>
<body>
<!-- Navigation-->
<nav class=\"navbar navbar-expand-lg navbar-light\" id=\"mainNav\">
    <div class=\"container px-4 px-lg-5\">
        <a class=\"navbar-brand\" href=\"index.html\">Start Bootstrap</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ms-auto py-4 py-lg-0\">
                <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"index.html\">Home</a></li>
                <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"about.html\">About</a></li>
                <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"post.html\">Sample Post</a></li>
                <li class=\"nav-item\"><a class=\"nav-link px-lg-3 py-3 py-lg-4\" href=\"contact.html\">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Header-->
<header class=\"masthead\" style=\"background-image: url('/public/assets/img/home-bg.jpg')\">
    <div class=\"container position-relative px-4 px-lg-5\">
        <div class=\"row gx-4 gx-lg-5 justify-content-center\">
            <div class=\"col-md-10 col-lg-8 col-xl-7\">
                <div class=\"site-heading\">
                    <h1>LightFrameWork</h1>
                    <span class=\"subheading\">A Fast Framework based on Symfony 5 , Dr {{ LightFrameWork|upper }}</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class=\"container px-4 px-lg-5\">
    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
        <div class=\"col-md-10 col-lg-8 col-xl-7\">
            <div id=\"content\">{% block content %}{% endblock %}</div>
        </div>
    </div>
</div>
<!-- Footer-->
<footer class=\"border-top\">
    <div class=\"container px-4 px-lg-5\">
        <div class=\"row gx-4 gx-lg-5 justify-content-center\">
            <div class=\"col-md-10 col-lg-8 col-xl-7\">
                <ul class=\"list-inline text-center\">
                    <li class=\"list-inline-item\">
                        <a href=\"#!\">
                                    <span class=\"fa-stack fa-lg\">
                                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                                        <i class=\"fab fa-twitter fa-stack-1x fa-inverse\"></i>
                                    </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"#!\">
                                    <span class=\"fa-stack fa-lg\">
                                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                                        <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
                                    </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"#!\">
                                    <span class=\"fa-stack fa-lg\">
                                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                                        <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                                    </span>
                        </a>
                    </li>
                </ul>
                <div class=\"small text-center text-muted fst-italic\">Copyright &copy; Your Website 2022 By Nadir Fouka</div>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
<!-- Core theme JS-->
<script src=\"/public/js/scripts.js\"></script>
</body>
</html>
", "/base/base.html.twig", "/var/www/html/public/base/base.html.twig");
    }
}
