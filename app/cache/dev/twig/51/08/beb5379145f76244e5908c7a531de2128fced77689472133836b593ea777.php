<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_5108beb5379145f76244e5908c7a531de2128fced77689472133836b593ea777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 41,  127 => 60,  110 => 22,  90 => 32,  76 => 28,  53 => 11,  65 => 13,  206 => 62,  185 => 49,  84 => 29,  134 => 34,  129 => 21,  124 => 18,  114 => 10,  70 => 24,  58 => 17,  77 => 28,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 46,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 41,  143 => 56,  135 => 62,  119 => 13,  102 => 17,  71 => 20,  67 => 15,  63 => 19,  59 => 13,  87 => 25,  94 => 34,  89 => 20,  85 => 32,  75 => 17,  68 => 14,  56 => 11,  28 => 3,  38 => 6,  21 => 2,  24 => 4,  201 => 92,  196 => 56,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 31,  117 => 19,  105 => 18,  91 => 27,  62 => 14,  49 => 10,  31 => 3,  26 => 11,  25 => 35,  19 => 1,  93 => 24,  88 => 31,  78 => 26,  46 => 8,  44 => 10,  27 => 1,  79 => 29,  72 => 25,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 28,  108 => 19,  101 => 43,  98 => 31,  96 => 25,  83 => 25,  74 => 27,  66 => 22,  55 => 15,  52 => 10,  50 => 13,  43 => 7,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 61,  199 => 67,  193 => 55,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 47,  168 => 72,  164 => 44,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 47,  141 => 48,  133 => 55,  130 => 41,  125 => 32,  122 => 43,  116 => 29,  112 => 42,  109 => 34,  106 => 45,  103 => 32,  99 => 47,  95 => 28,  92 => 21,  86 => 28,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 11,  57 => 12,  54 => 12,  51 => 11,  48 => 9,  45 => 8,  42 => 7,  39 => 8,  36 => 5,  33 => 4,  30 => 3,);
    }
}
