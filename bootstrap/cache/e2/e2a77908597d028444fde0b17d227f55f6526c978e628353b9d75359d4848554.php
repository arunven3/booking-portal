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

/* template/default.twig */
class __TwigTemplate_f8256f61ea9d6055a446bb99e71ed18163310993bc2cfc90874d45b315ee4ff4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta charset=\"UTF-8\">
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "</head>

<body>
";
        // line 10
        if (($context["error_message"] ?? null)) {
            // line 11
            echo "    <div class=\"alert error\" id=\"alert\">
        <div class=\"head\">
            <div class=\"addon\">&#x26D4;</div>
            <div class=\"title\"> Error </div>
            <span id=\"clo\" onclick=\"alert_hide(this)\"  class=\"close\">&#10006;</span>
        </div>
        <div class=\"content\">
            <div class=\"body\">
                <span>";
            // line 19
            echo twig_escape_filter($this->env, ($context["error_message"] ?? null), "html", null, true);
            echo "</span>
            </div>
        </div>
    </div>

";
        }
        // line 25
        echo "
";
        // line 26
        if (($context["success_message"] ?? null)) {
            // line 27
            echo "    <div class=\"alert success\">
        <div class=\"head\">
            <div class=\"addon\">&#10004;</div>
            <div class=\"title\">Success!</div>
            <span id=\"cl\" onclick=\"alert_hide(this)\" class=\"close\">&#10006;</span>
        </div>
        <div class=\"content\">
            <div class=\"body\">
                <span>";
            // line 35
            echo twig_escape_filter($this->env, ($context["success_message"] ?? null), "html", null, true);
            echo "</span>
            </div>
        </div>
    </div>

";
        }
        // line 41
        echo "
";
        // line 42
        if (($context["warning_message"] ?? null)) {
            // line 43
            echo "    <div class=\"alert warning\">
        <div class=\"head\">
            <div class=\"addon\">&#9888;</div>
            <div class=\"title\"> Warning </div>
            <span class=\"close\">&#10006;</span>
        </div>
        <div class=\"content\">
            <div class=\"body\">
                <span>";
            // line 51
            echo twig_escape_filter($this->env, ($context["warning_message"] ?? null), "html", null, true);
            echo "</span>
            </div>
        </div>
    </div>
";
        }
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "</body>

</html>";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 59
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "    ";
        $context["footer"] = ('' === $tmp = "        <footer class=\"footer\">

        </footer>
    ") ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "template/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 60,  148 => 59,  142 => 57,  135 => 6,  129 => 66,  127 => 59,  125 => 57,  122 => 56,  114 => 51,  104 => 43,  102 => 42,  99 => 41,  90 => 35,  80 => 27,  78 => 26,  75 => 25,  66 => 19,  56 => 11,  54 => 10,  49 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template/default.twig", "C:\\xampp\\htdocs\\Booking portal\\resources\\views\\Layouts\\template\\default.twig");
    }
}
