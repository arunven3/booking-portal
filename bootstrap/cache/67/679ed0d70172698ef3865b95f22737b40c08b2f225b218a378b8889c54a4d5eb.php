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

/* register.twig */
class __TwigTemplate_ffdec58b16ba17155b51a0647a549ce3265e69bae929201e1ac009e222128add extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_tittle' => [$this, 'block_page_tittle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template/head.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("template/head.twig", "register.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_page_tittle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Login";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        $this->loadTemplate("template/navigation.twig", "register.twig", 4)->display(twig_array_merge($context, ["navlink" => false]));
        // line 5
        echo "  <section class=\"register-form\">
    <div class=\"row\">
      <div class=\"container\">
        <div class=\"form\">
          <h2 class=\"text-center\">Create Account</h2>

          <form action=\"/register\" method=\"post\">
            <div class=\"form-group \">
              <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                <input type=\"text\"  class=\"form-control\" name=\"fullname\" placeholder=\"Enter Your Name\" value=\"\">
              </div>
              <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa  fa-envelope\"></i></span>
                <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\" Enter Your Email Address\" value=\"\">
              </div>
              <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa  fa-user-o\"></i></span>
                <input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\" Enter Your Username\" value=\"\">
              </div>
              <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa  fa-phone\"></i></span>
                <input type=\"tel\" name=\"phone_number\"  class=\"form-control\" placeholder=\"Enter Your Phone Number\" value=\"\">
              </div>
              <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa  fa-lock\"></i></span>
                <input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Enter Your Password\" id=\"password\">
                <span class=\"fa fa-eye-slash  input-group-addon pass\" ></span>
              </div>
              <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa  fa-lock\"></i></span>
                <input type=\"password\" class=\"form-control\" name=\"confirm_password\" id=\"confirm_password\" placeholder=\"Enter Password Again\">
                <span class=\"fa fa-eye-slash   input-group-addon pass\" ></span>
              </div>
              <input type=\"hidden\" name=\"token\" value=\"\">
              <button class=\"button float-right\">Register</button>
            </div>
          </form>
          <p>Already Registered?<a href=\"/login\">Login here</a> </p>
        </div>
      </div>
    </div>
  </section>

";
    }

    public function getTemplateName()
    {
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 5,  58 => 4,  54 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "register.twig", "C:\\xampp\\htdocs\\Booking portal\\resources\\views\\Layouts\\register.twig");
    }
}
