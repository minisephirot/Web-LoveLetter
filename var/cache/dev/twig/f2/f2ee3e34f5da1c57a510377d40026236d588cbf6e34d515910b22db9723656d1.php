<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f1a84f16e3de3808452642d359b5261813dac2892c62e85af69daf5d47c1c0e5 extends Twig_Template
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
        $__internal_9b499dd82a03c0d0ea89e3b121abb5d7816cbde7c8d564df95c7e1e3a4da11a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b499dd82a03c0d0ea89e3b121abb5d7816cbde7c8d564df95c7e1e3a4da11a8->enter($__internal_9b499dd82a03c0d0ea89e3b121abb5d7816cbde7c8d564df95c7e1e3a4da11a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_16a42b89f98e1aeb06b40c891483d09f01f07558e7e7e025546afc03211b3b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a42b89f98e1aeb06b40c891483d09f01f07558e7e7e025546afc03211b3b9b->enter($__internal_16a42b89f98e1aeb06b40c891483d09f01f07558e7e7e025546afc03211b3b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_9b499dd82a03c0d0ea89e3b121abb5d7816cbde7c8d564df95c7e1e3a4da11a8->leave($__internal_9b499dd82a03c0d0ea89e3b121abb5d7816cbde7c8d564df95c7e1e3a4da11a8_prof);

        
        $__internal_16a42b89f98e1aeb06b40c891483d09f01f07558e7e7e025546afc03211b3b9b->leave($__internal_16a42b89f98e1aeb06b40c891483d09f01f07558e7e7e025546afc03211b3b9b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
