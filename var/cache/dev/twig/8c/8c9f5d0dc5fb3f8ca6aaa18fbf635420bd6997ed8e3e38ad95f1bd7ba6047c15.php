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
        $__internal_449cf1dbc9f1cdebc0f269f05fac90d685c273959945d6075aaf026551e3763b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449cf1dbc9f1cdebc0f269f05fac90d685c273959945d6075aaf026551e3763b->enter($__internal_449cf1dbc9f1cdebc0f269f05fac90d685c273959945d6075aaf026551e3763b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ee0ff605a3e3a52c94cf41aeda1b492823bf44e0814b6b1f5c4bb8ecc9423071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0ff605a3e3a52c94cf41aeda1b492823bf44e0814b6b1f5c4bb8ecc9423071->enter($__internal_ee0ff605a3e3a52c94cf41aeda1b492823bf44e0814b6b1f5c4bb8ecc9423071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_449cf1dbc9f1cdebc0f269f05fac90d685c273959945d6075aaf026551e3763b->leave($__internal_449cf1dbc9f1cdebc0f269f05fac90d685c273959945d6075aaf026551e3763b_prof);

        
        $__internal_ee0ff605a3e3a52c94cf41aeda1b492823bf44e0814b6b1f5c4bb8ecc9423071->leave($__internal_ee0ff605a3e3a52c94cf41aeda1b492823bf44e0814b6b1f5c4bb8ecc9423071_prof);

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
