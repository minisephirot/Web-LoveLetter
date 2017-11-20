<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_723afc4844a567937d204258882dec7cc5e62e0bdc4644da4b3a001d02826423 extends Twig_Template
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
        $__internal_c49855049d770d61994e1a4f3fd9e87f8c65ff066cce2ea4992eb8053a68455a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49855049d770d61994e1a4f3fd9e87f8c65ff066cce2ea4992eb8053a68455a->enter($__internal_c49855049d770d61994e1a4f3fd9e87f8c65ff066cce2ea4992eb8053a68455a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_7ff7213b84e951a7c6db7b1cc04ea439dc8950ee6e8dae2eb51af66c2a226160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff7213b84e951a7c6db7b1cc04ea439dc8950ee6e8dae2eb51af66c2a226160->enter($__internal_7ff7213b84e951a7c6db7b1cc04ea439dc8950ee6e8dae2eb51af66c2a226160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c49855049d770d61994e1a4f3fd9e87f8c65ff066cce2ea4992eb8053a68455a->leave($__internal_c49855049d770d61994e1a4f3fd9e87f8c65ff066cce2ea4992eb8053a68455a_prof);

        
        $__internal_7ff7213b84e951a7c6db7b1cc04ea439dc8950ee6e8dae2eb51af66c2a226160->leave($__internal_7ff7213b84e951a7c6db7b1cc04ea439dc8950ee6e8dae2eb51af66c2a226160_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
