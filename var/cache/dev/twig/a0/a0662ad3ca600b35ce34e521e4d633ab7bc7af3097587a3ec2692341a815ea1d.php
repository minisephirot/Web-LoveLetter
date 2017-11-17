<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_95d5e109dc50e2922524c20a5114fa79bce02f829845b842b1fcb6c79b6a005d extends Twig_Template
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
        $__internal_c1b9133a6873d4841f36182411ac2be91dbcbcd8c4bef3b2e73f3146dda42b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b9133a6873d4841f36182411ac2be91dbcbcd8c4bef3b2e73f3146dda42b7c->enter($__internal_c1b9133a6873d4841f36182411ac2be91dbcbcd8c4bef3b2e73f3146dda42b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_da3dafadc433a270857a5963fb7c2155d5d3b79b1372c771373b3a163a4a69d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3dafadc433a270857a5963fb7c2155d5d3b79b1372c771373b3a163a4a69d7->enter($__internal_da3dafadc433a270857a5963fb7c2155d5d3b79b1372c771373b3a163a4a69d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_c1b9133a6873d4841f36182411ac2be91dbcbcd8c4bef3b2e73f3146dda42b7c->leave($__internal_c1b9133a6873d4841f36182411ac2be91dbcbcd8c4bef3b2e73f3146dda42b7c_prof);

        
        $__internal_da3dafadc433a270857a5963fb7c2155d5d3b79b1372c771373b3a163a4a69d7->leave($__internal_da3dafadc433a270857a5963fb7c2155d5d3b79b1372c771373b3a163a4a69d7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
