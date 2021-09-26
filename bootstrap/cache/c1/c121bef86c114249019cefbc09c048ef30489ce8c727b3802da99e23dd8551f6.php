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

/* template/navigation.twig */
class __TwigTemplate_7857132d099aead9afa8779d08709aebc7fc91ea0c637025a84e5f3c3134c422 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"nav\">
    <input type=\"checkbox\" id=\"nav-check\">
    <div class=\"nav-header\">
        <div class=\"nav-title\">
            <a href=\"/\">Booking Portal</a>
        </div>
    </div>
    <div class=\"nav-btn\">
        <label for=\"nav-check\">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>
    <div class=\"nav-links\">
        ";
        // line 16
        if ((0 === twig_compare(($context["navlink"] ?? null), false))) {
            // line 17
            echo "        ";
        } elseif ((0 === twig_compare(($context["navlink"] ?? null), true))) {
            // line 18
            echo "            <a href=\"/logout\">Logout</a>
        ";
        }
        // line 20
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "template/navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  59 => 18,  56 => 17,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template/navigation.twig", "C:\\xampp\\htdocs\\Booking portal\\resources\\views\\Layouts\\template\\navigation.twig");
    }
}
