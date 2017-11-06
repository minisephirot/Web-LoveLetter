<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_afb3eeb3c1d8df88f47a71cb3bb393bc932697c97af9e32712f9432e1821b6f2 extends Twig_Template
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
        $__internal_6944519d75eb4e69db380a189e0550d8900c82a70c4c76dc2ad2c5b5fe1d3ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6944519d75eb4e69db380a189e0550d8900c82a70c4c76dc2ad2c5b5fe1d3ba9->enter($__internal_6944519d75eb4e69db380a189e0550d8900c82a70c4c76dc2ad2c5b5fe1d3ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_91067a6b2d5ad2b8b8c9976536198c5ba86a6759f92b03e89ef894e50e09883b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91067a6b2d5ad2b8b8c9976536198c5ba86a6759f92b03e89ef894e50e09883b->enter($__internal_91067a6b2d5ad2b8b8c9976536198c5ba86a6759f92b03e89ef894e50e09883b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6944519d75eb4e69db380a189e0550d8900c82a70c4c76dc2ad2c5b5fe1d3ba9->leave($__internal_6944519d75eb4e69db380a189e0550d8900c82a70c4c76dc2ad2c5b5fe1d3ba9_prof);

        
        $__internal_91067a6b2d5ad2b8b8c9976536198c5ba86a6759f92b03e89ef894e50e09883b->leave($__internal_91067a6b2d5ad2b8b8c9976536198c5ba86a6759f92b03e89ef894e50e09883b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
