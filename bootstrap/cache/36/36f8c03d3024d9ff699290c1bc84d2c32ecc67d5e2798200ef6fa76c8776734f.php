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

/* template/head.twig */
class __TwigTemplate_e64e6ad4cad5bd4593f8905077a7006f778db6afbb4c129837c9f9282767d8c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'page_tittle' => [$this, 'block_page_tittle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template/default.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template/default.twig", "template/head.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "     ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
     <title>";
        // line 4
        $this->displayBlock('page_tittle', $context, $blocks);
        echo "</title>
";
        // line 6
        echo "     <link rel=\"stylesheet\" href=\"/bootstrapcss\" />
";
        // line 8
        echo "     <script src=\"/bootstrapjs\"></script>
     <link rel=\"stylesheet\" href=\"/mainstyle\" />
     <script type=\"text/javascript\" src=\"/mainscript\"></script>
     ";
        // line 12
        echo "     ";
        // line 13
        echo "     ";
        // line 14
        echo " ";
    }

    // line 4
    public function block_page_tittle($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "template/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 4,  72 => 14,  70 => 13,  68 => 12,  63 => 8,  60 => 6,  56 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template/head.twig", "C:\\xampp\\htdocs\\Booking portal\\resources\\views\\Layouts\\template\\head.twig");
    }
}
