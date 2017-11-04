<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_01d3cbe0799be5a27f0f271a1fd9be0af9cc36a123902ddc970ef2d85d2bb98c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d84dbb92cf8370af645abd95ce51f7ed78ac03d49e572f8ece7f185f1725b6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84dbb92cf8370af645abd95ce51f7ed78ac03d49e572f8ece7f185f1725b6b1->enter($__internal_d84dbb92cf8370af645abd95ce51f7ed78ac03d49e572f8ece7f185f1725b6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1d072550f4fda98631952936719d7e6e86ae67bfa6109b01008fc57d8991eac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d072550f4fda98631952936719d7e6e86ae67bfa6109b01008fc57d8991eac3->enter($__internal_1d072550f4fda98631952936719d7e6e86ae67bfa6109b01008fc57d8991eac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_d84dbb92cf8370af645abd95ce51f7ed78ac03d49e572f8ece7f185f1725b6b1->leave($__internal_d84dbb92cf8370af645abd95ce51f7ed78ac03d49e572f8ece7f185f1725b6b1_prof);

        
        $__internal_1d072550f4fda98631952936719d7e6e86ae67bfa6109b01008fc57d8991eac3->leave($__internal_1d072550f4fda98631952936719d7e6e86ae67bfa6109b01008fc57d8991eac3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
